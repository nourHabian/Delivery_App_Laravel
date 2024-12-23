<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stores = [
            'store_1' => [
                'name' => 'Cloi',
                'location' => 'Shaalan',
                'phone_number' => '0957777163',
                'store_photo' => 'store_photos/Cloi.png'
            ],
            'store_2' => [
                'name' => 'Eva',
                'location' => 'Al Jalaa',
                'phone_number' => '0994886677',
                'store_photo' => 'store_photos/Eva.png'
            ],
            'store_3' => [
                'name' => 'Free Girl',
                'location' => 'Al Hamra',
                'phone_number' => '0952376134',
                'store_photo' => 'store_photos/Free Girl.png'
            ],
            'store_4' => [
                'name' => 'Jacket',
                'location' => 'Shaalan',
                'phone_number' => '0938858385',
                'store_photo' => 'store_photos/Jacket.png'
            ],
            'store_5' => [
                'name' => 'Magilla',
                'location' => 'Al Hamra',
                'phone_number' => '0993958246',
                'store_photo' => 'store_photos/Magilla.png'
            ],
            'store_6' => [
                'name' => 'Papillon',
                'location' => 'Bab Toma',
                'phone_number' => '0933588295',
                'store_photo' => 'store_photos/Papillon.png'
            ],
            'store_7' => [
                'name' => 'Shadows',
                'location' => 'Al Hamra',
                'phone_number' => '0992847265',
                'store_photo' => 'store_photos/Shadows.png'
            ],
            'store_8' => [
                'name' => 'Ship Master',
                'location' => 'Bab Moussalla',
                'phone_number' => '0975826557',
                'store_photo' => 'store_photos/Ship Master.png'
            ],
            'store_9' => [
                'name' => 'Verona',
                'location' => 'Malki',
                'phone_number' => '0953749602',
                'store_photo' => 'store_photos/Verona.png'
            ],
            'store_10' => [
                'name' => 'XO',
                'location' => 'Al Hboubi',
                'phone_number' => '0937542763',
                'store_photo' => 'store_photos/XO.png'
            ],
        ];

        foreach ($stores as $store) {
            Store::create([
                'name' => $store['name'],
                'location' => $store['location'],
                'phone_number' => $store['phone_number'],
                'store_photo' => $store['store_photo'],
            ]);
        }
    }
}
