<?php

namespace Database\Seeders;

use App\Models\Month;
use Illuminate\Database\Seeder;

class MonthsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $month = [
            [
                'id' => '1',
                'option' => '1',
                'month_id' => '1',
                'month' => 'Áyo',
                'month_lenght' => '30',
                'trans_eng' => 'January',
                'trans_ar' => 'يناير',
            ],
            [
                'id' => '2',
                'option' => '1',
                'month_id' => '2',
                'month' => 'Kottara',
                'month_lenght' => '28',
                'trans_eng' => 'Februray',
                'trans_ar' => 'فبراير',
            ],
            [
                'id' => '3',
                'option' => '1',
                'month_id' => '3',
                'month' => 'Ngáco',
                'month_lenght' => '31',
                'trans_eng' => 'March',
                'trans_ar' => 'مارس',
            ],
            [
                'id' => '4',
                'option' => '1',
                'month_id' => '4',
                'month' => 'Attiny',
                'month_lenght' => '30',
                'trans_eng' => 'April',
                'trans_ar' => 'أبريل',
            ],
            [
                'id' => '5',
                'option' => '1',
                'month_id' => '5',
                'month' => 'Kújum',
                'month_lenght' => '31',
                'trans_eng' => 'May',
                'trans_ar' => 'مايو',
            ],
            [
                'id' => '6',
                'option' => '1',
                'month_id' => '6',
                'month' => 'Káyo',
                'month_lenght' => '30',
                'trans_eng' => 'June',
                'trans_ar' => 'يونيو',
            ],
            [
                'id' => '7',
                'option' => '1',
                'month_id' => '7',
                'month' => 'Cóho',
                'month_lenght' => '31',
                'trans_eng' => 'July',
                'trans_ar' => 'يوليو',
            ],
            [
                'id' => '8',
                'option' => '1',
                'month_id' => '8',
                'month' => 'Áwe',
                'month_lenght' => '31',
                'trans_eng' => 'August',
                'trans_ar' => 'أغسطس',
            ],
            [
                'id' => '9',
                'option' => '1',
                'month_id' => '9',
                'month' => 'Cabiya',
                'month_lenght' => '30',
                'trans_eng' => 'September',
                'trans_ar' => 'سبتمبر',
            ],
            [
                'id' => '10',
                'option' => '1',
                'month_id' => '10',
                'month' => 'Zul',
                'month_lenght' => '31',
                'trans_eng' => 'October',
                'trans_ar' => 'أكتوبر',
            ],
            [
                'id' => '11',
                'option' => '1',
                'month_id' => '11',
                'month' => 'Zagaya',
                'month_lenght' => '30',
                'trans_eng' => 'November',
                'trans_ar' => 'نوفمبر',
            ],
            [
                'id' => '12',
                'option' => '1',
                'month_id' => '12',
                'month' => 'Veze',
                'month_lenght' => '31',
                'trans_eng' => 'December',
                'trans_ar' => 'ديسمبر',
            ],
        

        ];

        Month::insert($month);
    
    }
}
