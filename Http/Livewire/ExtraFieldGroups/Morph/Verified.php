<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\ExtraFieldGroups\Morph;

use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;
use Modules\Cms\Actions\GetViewAction;
use Modules\ExtraField\Actions\ExtraFieldGroup\GetArrayByModelTypeModelId;
use Modules\ExtraField\Actions\GetUserExtraFieldsDataByGroupId;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\ExtraField\Models\ExtraFieldGroupMorph;
use Modules\Notify\Notifications\HtmlNotification;
use Modules\Notify\Notifications\SmsNotification;
use Modules\Xot\Datas\XotData;

class Verified extends Component
{
    public string $tpl;
    public bool $can_verified;
    public Collection $unverifieds;
    public string $extra_field_group_id;
    public array $form_data = [];
    public string $user_id;
    public string $model_type;
    public string $model_id;

    protected $listeners = [
        'refreshComponent' => '$refresh',
        'updatedFormDataVerified' => 'updatedFormData',
    ];

    public function mount(string $model_type, string $model_id, bool $can_verified, string $extra_field_group_id, string $tpl = 'v1'): void
    {
        $this->can_verified = $can_verified;
        $this->extra_field_group_id = $extra_field_group_id;
        $this->tpl = $tpl;
        $this->model_type = $model_type;
        $this->model_id = $model_id;
        $this->user_id = (string) Auth::id();
    }

    public function getUnverifieds(?string $user_id = null)
    {
        // dddx([$this->extra_field_group_id, $user_id, $this->model_type, $this->model_id]);

        // TO-DO: dopo service andrà modificato con profile a seconda di a che cosa sono collegato come relazione
        // $l = app(GetUserExtraFieldsDataByGroupId::class)->execute($this->extra_field_group_id, $user_id, $this->model_type, $this->model_id);

        $l = app(GetArrayByModelTypeModelId::class)->execute($this->model_type, $this->model_id, $user_id);

        return $l;
    }

    public static function getName(): string
    {
        return 'extra-field-groups.morph.verified';
    }

    public function sendToken(string $group_morph_id)
    {
        $group = ExtraFieldGroup::find($this->extra_field_group_id);
        $group_morph = ExtraFieldGroupMorph::find($group_morph_id);
        $group_morph_null = $this->getUnverifieds(null, 'service')->first();
        $notification_channel = $group_morph_null->verified_by ?? $group->verified_by;
        $address = $group_morph->value[$group->name];

        $token = strval(rand(10000, 99999));

        if ('sms' == $notification_channel) {
            Notification::route($notification_channel, $address)->notify(new SmsNotification('', 'Verify Sms', 'Verification Code: '.$token));
        } else {
            $from = config('mail.from.address');
            Notification::route($notification_channel, $address)->notify(new HtmlNotification($from, 'Verifica Account', '<h1>Verification Code</h1><h3>'.$token.'</h3>'));
        }

        $group_morph->update(['token' => $token, 'token_sent_at' => now()]);

        session()->flash('Token Inviato');

        $this->emit('refreshComponent');
    }

    public function verifyToken(string $group_morph_id)
    {
        $group_morph = ExtraFieldGroupMorph::find($group_morph_id);

        if ($group_morph->token == $this->form_data['token']) {
            $group_morph->update(['verified_at' => now()]);

            $this->form_data = [];

            session()->flash('Account Verificato');
        } else {
            $this->form_data = [];

            session()->flash('Token Errato');
        }

        $this->emit('refreshComponent');
    }

    public function updatedFormData($data)
    {
        $this->form_data = array_merge($this->form_data, $data);

        // dddx($this->form_data);
    }

    public function addToList()
    {
        $xot = XotData::make();
        $profile = $xot->getProfileModelByUserId($this->user_id);

        $existing = ExtraFieldGroupMorph::where(['user_id' => $this->user_id, 'value' => json_encode($this->form_data)])->get();
        if (true == $existing->isEmpty()) {
            app(\Modules\ExtraField\Actions\ExtraFieldGroup\Create::class)
                ->execute($profile, $this->extra_field_group_id, $this->user_id, $this->form_data);
        }
        $this->form_data = [];
    }

    public function diffDaysToNow(string $date)
    {
        $date = Carbon::parse($date);
        $now = Carbon::now();

        return $date->diffInDays($now);
    }

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
