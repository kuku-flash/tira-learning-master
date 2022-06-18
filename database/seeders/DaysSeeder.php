<?php

namespace Database\Seeders;

use App\Models\Day;
use Illuminate\Database\Seeder;

class DaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $days = [
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

        Day::insert($days);
    }
}
