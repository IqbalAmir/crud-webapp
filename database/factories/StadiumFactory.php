<?php

namespace Database\Factories;

use App\Models\Stadium;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class StadiumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stadium::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $stadiums = ['Emirates', 'San Paolo Stadium', 'Etihad', 'Old Trafford', 'Anfield',
            'London Stadium', 'Tottenham Hotspur Stadium', 'Wembley Stadium', 'Stamford Bridge',
            'Signal Iduna Park', 'Allianz Arena', 'Camp Nou', 'Estadio Santiago Bernabéu', 'Stade De France',
            'San Siro', 'Olympiastadion', 'Stade Vélodrome', 'Juventus Stadium', 'Aviva Stadium',
        ];

        return [
            'user_id'=> User::factory(),
            'name' => $stadiums [array_rand ($stadiums)],
            'capacity' => $this->faker->unique()->randomNumber($nbDigits = 5),
            'body' => $this->faker->paragraph,

        ];
    }
}
