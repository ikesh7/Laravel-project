<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LocationDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'name_en' => 'Nepal',
        ]);
        DB::table('provinces')->insert([
            [
                'name_en' => 'Province 1',
                'country_id' => 1,
            ],
            [
                'name_en' => 'Province 2',
                'country_id' => 1,
            ],
            [
                'name_en' => 'Bagmati',
                'country_id' => 1,
            ],
            [
                'name_en' => 'Gandaki',
                'country_id' => 1,
            ],
            [
                'name_en' => 'Lumbini',
                'country_id' => 1,
            ],
            [
                'name_en' => 'Karnali',
                'country_id' => 1,
            ],
            [
                'name_en' => 'Sudur Paschim',
                'country_id' => 1,
            ],
        ]);
        DB::table('districts')->insert([
            [
                'id' => 1,
                'province_id' => 1,
                'name_en' => 'Taplejung',
            ],            [
                'id' => 2,
                'province_id' => 1,
                'name_en' => 'Panchthar',
            ],            [
                'id' => 3,
                'province_id' => 1,
                'name_en' => 'Ilam',
            ],            [
                'id' => 4,
                'province_id' => 1,
                'name_en' => 'Jhapa',
            ],            [
                'id' => 5,
                'province_id' => 1,
                'name_en' => 'Morang',
            ],            [
                'id' => 6,
                'province_id' => 1,
                'name_en' => 'Sunasari',
            ],            [
                'id' => 7,
                'province_id' => 1,
                'name_en' => 'Dhankuta',
            ],            [
                'id' => 8,
                'province_id' => 1,
                'name_en' => 'Terhathum',
            ],            [
                'id' => 9,
                'province_id' => 1,
                'name_en' => 'Sankhusabha',
            ],            [
                'id' => 10,
                'province_id' => 1,
                'name_en' => 'Bhojpur',
            ],            [
                'id' => 11,
                'province_id' => 1,
                'name_en' => 'Solukhumbu',
            ],            [
                'id' => 12,
                'province_id' => 1,
                'name_en' => 'Okhaldunga',
            ],            [
                'id' => 13,
                'province_id' => 1,
                'name_en' => 'Khotang',
            ],            [
                'id' => 14,
                'province_id' => 1,
                'name_en' => 'Udayapur',
            ],            [
                'id' => 15,
                'province_id' => 2,
                'name_en' => 'Saptari',
            ],            [
                'id' => 16,
                'province_id' => 2,
                'name_en' => 'Siraha',
            ],            [
                'id' => 17,
                'province_id' => 2,
                'name_en' => 'Dhanusha',
            ],            [
                'id' => 18,
                'province_id' => 2,
                'name_en' => 'Mahottari',
            ],            [
                'id' => 19,
                'province_id' => 2,
                'name_en' => 'Sarlahi',
            ],            [
                'id' => 20,
                'province_id' => 2,
                'name_en' => 'Rautahat',
            ],            [
                'id' => 21,
                'province_id' => 2,
                'name_en' => 'Bara',
            ],            [
                'id' => 22,
                'province_id' => 2,
                'name_en' => 'Parsa',
            ],            [
                'id' => 23,
                'province_id' => 3,
                'name_en' => 'Sindhuli',
            ],            [
                'id' => 24,
                'province_id' => 3,
                'name_en' => 'Ramechhap',
            ],            [
                'id' => 25,
                'province_id' => 3,
                'name_en' => 'Dolakha',
            ],            [
                'id' => 26,
                'province_id' => 3,
                'name_en' => 'Sindhupalchowk',
            ],            [
                'id' => 27,
                'province_id' => 3,
                'name_en' => 'Kavrepalanchok',
            ],            [
                'id' => 28,
                'province_id' => 3,
                'name_en' => 'Lalitpur',
            ],            [
                'id' => 29,
                'province_id' => 3,
                'name_en' => 'Bhaktapur',
            ],            [
                'id' => 30,
                'province_id' => 3,
                'name_en' => 'Kathmandu',
            ],            [
                'id' => 31,
                'province_id' => 3,
                'name_en' => 'Nuwakot',
            ],            [
                'id' => 32,
                'province_id' => 3,
                'name_en' => 'Rasuwa',
            ],            [
                'id' => 33,
                'province_id' => 3,
                'name_en' => 'Dhading',
            ],            [
                'id' => 34,
                'province_id' => 3,
                'name_en' => 'Makawanpur',
            ],            [
                'id' => 35,
                'province_id' => 3,
                'name_en' => 'Chitwan',
            ],            [
                'id' => 36,
                'province_id' => 4,
                'name_en' => 'Gorkha',
            ],            [
                'id' => 37,
                'province_id' => 4,
                'name_en' => 'Lamjung',
            ],            [
                'id' => 38,
                'province_id' => 4,
                'name_en' => 'Tanahun',
            ],            [
                'id' => 39,
                'province_id' => 4,
                'name_en' => 'Syangja',
            ],            [
                'id' => 40,
                'province_id' => 4,
                'name_en' => 'Kaski',
            ],            [
                'id' => 41,
                'province_id' => 4,
                'name_en' => 'Manang',
            ],            [
                'id' => 42,
                'province_id' => 4,
                'name_en' => 'Mustang',
            ],            [
                'id' => 43,
                'province_id' => 4,
                'name_en' => 'Myagdi',
            ],            [
                'id' => 44,
                'province_id' => 4,
                'name_en' => 'Parbat',
            ],            [
                'id' => 45,
                'province_id' => 4,
                'name_en' => 'Baglung',
            ],            [
                'id' => 46,
                'province_id' => 4,
                'name_en' => 'Nawalparasi',
            ],            [
                'id' => 47,
                'province_id' => 5,
                'name_en' => 'Gulmi',
            ],            [
                'id' => 48,
                'province_id' => 5,
                'name_en' => 'Palpa',
            ],            [
                'id' => 49,
                'province_id' => 5,
                'name_en' => 'Rupandehi',
            ],            [
                'id' => 50,
                'province_id' => 5,
                'name_en' => 'Kapilbastu',
            ],            [
                'id' => 51,
                'province_id' => 5,
                'name_en' => 'Arghakhanchi',
            ],            [
                'id' => 52,
                'province_id' => 5,
                'name_en' => 'Pyuthan',
            ],            [
                'id' => 53,
                'province_id' => 5,
                'name_en' => 'Rolpa',
            ],            [
                'id' => 54,
                'province_id' => 5,
                'name_en' => 'Rukum',
            ],            [
                'id' => 55,
                'province_id' => 5,
                'name_en' => 'Dang',
            ],            [
                'id' => 56,
                'province_id' => 5,
                'name_en' => 'Banke',
            ],            [
                'id' => 57,
                'province_id' => 5,
                'name_en' => 'Bardiya',
            ],            [
                'id' => 58,
                'province_id' => 6,
                'name_en' => 'Salyan',
            ],            [
                'id' => 59,
                'province_id' => 6,
                'name_en' => 'Surkhet',
            ],            [
                'id' => 60,
                'province_id' => 6,
                'name_en' => 'Dailekh',
            ],            [
                'id' => 61,
                'province_id' => 6,
                'name_en' => 'Jajarkot',
            ],            [
                'id' => 62,
                'province_id' => 6,
                'name_en' => 'Dolpa',
            ],            [
                'id' => 63,
                'province_id' => 6,
                'name_en' => 'Jumla',
            ],            [
                'id' => 64,
                'province_id' => 6,
                'name_en' => 'Kalikot',
            ],            [
                'id' => 65,
                'province_id' => 6,
                'name_en' => 'Mugu',
            ],            [
                'id' => 66,
                'province_id' => 6,
                'name_en' => 'Humla',
            ],            [
                'id' => 67,
                'province_id' => 7,
                'name_en' => 'Bajura',
            ],            [
                'id' => 68,
                'province_id' => 7,
                'name_en' => 'Bajhang',
            ],            [
                'id' => 69,
                'province_id' => 7,
                'name_en' => 'Achham',
            ],            [
                'id' => 70,
                'province_id' => 7,
                'name_en' => 'Doti',
            ],            [
                'id' => 71,
                'province_id' => 7,
                'name_en' => 'Kailali',
            ],            [
                'id' => 72,
                'province_id' => 7,
                'name_en' => 'Kanchanpur',
            ],            [
                'id' => 73,
                'province_id' => 7,
                'name_en' => 'Dadeldhura',
            ],            [
                'id' => 74,
                'province_id' => 7,
                'name_en' => 'Baitadi',
            ],            [
                'id' => 75,
                'province_id' => 7,
                'name_en' => 'Darchula',
            ],
        ]);
        DB::table('cities')->insert([
            [
                'name_en' => 'Kathmandu',
                'district_id' => 30
            ],
            [
                'name_en' => 'Sauraha',
                'district_id' => 35
            ]
        ]);
    }
}
