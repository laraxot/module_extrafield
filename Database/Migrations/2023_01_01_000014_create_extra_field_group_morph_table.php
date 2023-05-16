<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateExtraFieldGroupMorphTable extends XotBaseMigration
{
    /**
     * db up.
     *
     * @return void
     */
    public function up()
    {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');
                $table->nullableMorphs('model');
                $table->integer('user_id')->nullable()->index();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->timestamps();
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! $this->hasColumn('extra_field_group_id')) {
                    $table->integer('extra_field_group_id')->nullable()->index();
                }
                if (! $this->hasColumn('value')) {
                    $table->text('value')->nullable();
                }
                if (! $this->hasColumn('value_class')) {
                    $table->string('value_class')->nullable();
                }
                if (! $this->hasColumn('uuid')) {
                    $table->string('uuid')->nullable();
                }
                if ($this->hasColumn('extra_field_id')) {
                    // $table->integer('extra_field_id')->nullable()->index();
                    $table->dropColumn('extra_field_id');
                }
                if (! $this->hasColumn('favourite')) {
                    $table->boolean('favourite')->default(false);
                }
                if (! $this->hasColumn('note')) {
                    $table->string('note')->nullable();
                }
                if (! $this->hasColumn('cardinality')) {
                    $table->integer('cardinality')->nullable();
                }
                if (! $this->hasColumn('token')) {
                    $table->string('token')->nullable();
                }
                if (! $this->hasColumn('verified_at')) {
                    $table->timestamp('verified_at')->nullable();
                    $table->string('verified_by')->nullable();
                }
                if (! $this->hasColumn('can_verified')) {
                    $table->boolean('can_verified')->default(false);
                }
            }
        );
    }
}
