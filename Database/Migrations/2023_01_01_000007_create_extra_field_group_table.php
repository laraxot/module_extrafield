<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Undocumented class.
 */
class CreateExtraFieldGroupTable extends XotBaseMigration
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
                $table->string('name');
                $table->timestamps();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! $this->hasColumn('cardinality')) {
                    $table->integer('cardinality')->nullable();
                }
                /*if ($this->hasColumn('name')) {
                    $table->json('name')->nullable()->change();
                    $table->json('description')->nullable();
                }*/
                if (! $this->hasColumn('can_verified')) {
                    $table->boolean('can_verified')->default(false);
                }
                if (! $this->hasColumn('mandatory')) {
                    $table->boolean('mandatory')->default(false);
                }
                if (! $this->hasColumn('verified_by')) {
                    $table->string('verified_by')->nullable();
                }
            }
        );
    }
}
