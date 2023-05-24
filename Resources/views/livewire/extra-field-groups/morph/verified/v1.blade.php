<div>
    @if ($can_verified == true)

        <button type="button" class="btn btn-success mt-3" wire:click="addToList()">Aggiungi alla Lista</button>
        <br />
        <label for="unverified">Seleziona Valore</label>

        <table class="table table-responsive table-striped table-hover">

            <tr>
                <th>Valore</th>
                <th>Verified</th>
            </tr>


            @foreach ($this->getUnverifieds($this->user_id) as $unverified)
                {{-- <tr>
                    <td> {{ var_export($unverified->value, true) }} </td>
                </tr> --}}

                <tr>
                    <td>{{ join(' ', $unverified->value) }}</td>
                    <td>
                        @if ($unverified->verified_at != null)
                            <i class="fa-solid fa-shield"></i>
                        @elseif ($unverified->token_sent_at == null)
                            <button wire:click="sendToken('{{ $unverified->id }}')" type="button"
                                class="btn btn-success mt-3">Verifica</button>
                        @elseif ($unverified->token_sent_at != null && $this->diffDaysToNow($unverified->token_sent_at) < 1)
                            <div class="input-group mb-3">
                                <input wire:model.lazy="form_data.token" type="text" class="form-control"
                                    placeholder="Inserisci Token" aria-label="Inserisci Token"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="button"
                                        wire:click="verifyToken('{{ $unverified->id }}')">Conferma</button>
                                </div>
                            </div>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>

        <x-flash-message />
    @endif
</div>
