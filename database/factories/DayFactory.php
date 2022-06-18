<?php

namespace Database\Factories;

use App\Models\Day;
use Illuminate\Database\Eloquent\Factories\Factory;

class DayFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Day::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            [
                'id' => '1',
                'day_id' => '1',
                'option' => '1',
                'day' => 'Kunyuru',
                'trans_eng' => 'Sunday',
            ],
            [
                'id' => '2',
                'day_id' => '2',
                'option' => '1',
                'day' => 'Kába',
                'trans_eng' => 'Monday',
            ],
            [
                'id' => '3',
                'day_id' => '3',
                'option' => '1',
                'day' => 'Kattay',
                'trans_eng' => 'Tuesday',
            ],
            [
                'id' => '4',
                'day_id' => '4',
                'option' => '1',
                'day' => 'Muttulu',
                'trans_eng' => 'Wednesday',
            ],
            [
                'id' => '5',
                'day_id' => '5',
                'option' => '1',
                'day' => 'Zevaha',
                'trans_eng' => 'Thursday',
            ],
            [
                'id' => '6',
                'day_id' => '6',
                'option' => '1',
                'day' => 'Manddi',
                'trans_eng' => 'Friday',
            ],
            [
                'id' => '7',
                'day_id' => '7',
                'option' => '1',
                'day' => 'Ttabari',
                'trans_eng' => 'Saturday',
            ],

        ];
    }
}
