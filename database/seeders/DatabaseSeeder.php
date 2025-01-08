<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Hotel;
use App\Models\BedType;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LaratrustSeeder::class,
            LocationDataSeeder::class,
            UserWithRolesSeeder::class,
            HotelConfigSeeder::class,
        ]);
        User::factory()
            ->count(50)
            ->create();

        Hotel::factory()
            ->count(50)
            ->create();

        BedType::factory()
            ->count(5)
            ->create();

        RoomType::factory()
            ->count(5)
            ->create();

        Room::factory()
            ->count(50)
            ->create();
    }
}
