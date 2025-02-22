<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Application;
use App\Models\Timesheet;
use App\Models\User;

class TimesheetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Timesheet::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'date' => fake()->date(),
            'hours' => fake()->randomFloat(2, 0, 99.99),
            'description' => fake()->text(),
            'user_id' => User::factory(),
            'application_id' => Application::factory(),
        ];
    }
}
