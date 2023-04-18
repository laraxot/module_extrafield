<?php

declare(strict_types=1);

namespace Modules\ExtraField\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use Modules\ExtraField\Models\ExtraFieldGroup;

class ExtraFieldGroupFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Modules\ExtraField\Models\ExtraFieldGroup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {


        return [
            'id' => $this->faker->randomNumber,
            'name' => $this->faker->name,
            'cardinality' => $this->faker->randomNumber,
            'description' => $this->faker->text
        ];
    }
}
