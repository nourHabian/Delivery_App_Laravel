<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            'product_1' => [
                'store_id' => 1,
                'name' => 'Scarf',
                'price' => 37.50,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_1.png'
            ],
            'product_2' => [
                'store_id' => 2,
                'name' => 'Blouse',
                'price' => 26.97,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_2.png'
            ],
            'product_3' => [
                'store_id' => 3,
                'name' => 'Pants',
                'price' => 14.58,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_3.png'
            ],
            'product_4' => [
                'store_id' => 4,
                'name' => 'Caot',
                'price' => 40.41,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_4.png'
            ],
            'product_5' => [
                'store_id' => 5,
                'name' => 'Skirt',
                'price' => 46.61,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_5.png'
            ],
            'product_6' => [
                'store_id' => 1,
                'name' => 'Blouse',
                'price' => 48.00,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_6.png'
            ],
            'product_7' => [
                'store_id' => 2,
                'name' => 'Blouse',
                'price' => 30.89,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_7.png'
            ],
            'product_8' => [
                'store_id' => 3,
                'name' => 'Skirt',
                'price' => 39.98,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_8.png'
            ],
            'product_9' => [
                'store_id' => 4,
                'name' => 'Coat',
                'price' => 42.47,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_9.png'
            ],
            'product_10' => [
                'store_id' => 5,
                'name' => 'Scarf',
                'price' => 16.43,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_10.png'
            ],
            'product_11' => [
                'store_id' => 1,
                'name' => 'Dress',
                'price' => 38.19,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_11.png'
            ],
            'product_12' => [
                'store_id' => 2,
                'name' => 'Scarf',
                'price' => 18.16,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_12.png'
            ],
            'product_13' => [
                'store_id' => 3,
                'name' => 'Coat',
                'price' => 14.10,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_13.png'
            ],
            'product_14' => [
                'store_id' => 4,
                'name' => 'Pants',
                'price' => 23.99,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_14.png'
            ],
            'product_15' => [
                'store_id' => 5,
                'name' => 'Blouse',
                'price' => 45.05,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_15.png'
            ],
            'product_16' => [
                'store_id' => 1,
                'name' => 'Pants',
                'price' => 38.11,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_16.png'
            ],
            'product_17' => [
                'store_id' => 2,
                'name' => 'Blouse',
                'price' => 45.29,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_17.png'
            ],
            'product_18' => [
                'store_id' => 3,
                'name' => 'Skirt',
                'price' => 19.70,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_18.png'
            ],
            'product_19' => [
                'store_id' => 4,
                'name' => 'Blouse',
                'price' => 23.37,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_19.png'
            ],
            'product_20' => [
                'store_id' => 5,
                'name' => 'Pants',
                'price' => 27.10,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_20.png'
            ],
            'product_21' => [
                'store_id' => 1,
                'name' => 'Scarf',
                'price' => 45.18,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_21.png'
            ],
            'product_22' => [
                'store_id' => 2,
                'name' => 'Dress',
                'price' => 22.93,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_22.png'
            ],
            'product_23' => [
                'store_id' => 3,
                'name' => 'Blouse',
                'price' => 14.41,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_23.png'
            ],
            'product_24' => [
                'store_id' => 4,
                'name' => 'Pants',
                'price' => 23.49,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_24.png'
            ],
            'product_25' => [
                'store_id' => 5,
                'name' => 'Scarf',
                'price' => 32.57,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_25.png'
            ],
            'product_26' => [
                'store_id' => 1,
                'name' => 'Pants',
                'price' => 35.81,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_26.png'
            ],
            'product_27' => [
                'store_id' => 2,
                'name' => 'Pants',
                'price' => 16.37,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_27.png'
            ],
            'product_28' => [
                'store_id' => 3,
                'name' => 'Pants',
                'price' => 38.74,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_28.png'
            ],
            'product_29' => [
                'store_id' => 4,
                'name' => 'Scarf',
                'price' => 14.76,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_29.png'
            ],
            'product_30' => [
                'store_id' => 5,
                'name' => 'Blouse',
                'price' => 11.39,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_30.png'
            ],
            'product_31' => [
                'store_id' => 1,
                'name' => 'Skirt',
                'price' => 25.02,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_31.png'
            ],
            'product_32' => [
                'store_id' => 2,
                'name' => 'Blouse',
                'price' => 20.72,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_32.png'
            ],
            'product_33' => [
                'store_id' => 3,
                'name' => 'Blouse',
                'price' => 42.62,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_33.png'
            ],
            'product_34' => [
                'store_id' => 4,
                'name' => 'Dress',
                'price' => 13.77,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_34.png'
            ],
            'product_35' => [
                'store_id' => 5,
                'name' => 'Dress',
                'price' => 18.36,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_35.png'
            ],
            'product_36' => [
                'store_id' => 1,
                'name' => 'Coat',
                'price' => 24.67,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_36.png'
            ],
            'product_37' => [
                'store_id' => 2,
                'name' => 'Coat',
                'price' => 42.68,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_37.png'
            ],
            'product_38' => [
                'store_id' => 3,
                'name' => 'Coat',
                'price' => 46.36,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_38.png'
            ],
            'product_39' => [
                'store_id' => 4,
                'name' => 'Pants',
                'price' => 16.71,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_39.png'
            ],
            'product_40' => [
                'store_id' => 5,
                'name' => 'Dress',
                'price' => 37.93,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_40.png'
            ],
            'product_41' => [
                'store_id' => 1,
                'name' => 'Pants',
                'price' => 48.04,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_41.png'
            ],
            'product_42' => [
                'store_id' => 2,
                'name' => 'Blouse',
                'price' => 44.66,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_42.png'
            ],
            'product_43' => [
                'store_id' => 3,
                'name' => 'Coat',
                'price' => 49.44,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_43.png'
            ],
            'product_44' => [
                'store_id' => 4,
                'name' => 'Pants',
                'price' => 44.79,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_44.png'
            ],
            'product_45' => [
                'store_id' => 5,
                'name' => 'Coat',
                'price' => 28.74,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_45.png'
            ],
            'product_46' => [
                'store_id' => 1,
                'name' => 'Blouse',
                'price' => 29.73,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_46.png'
            ],
            'product_47' => [
                'store_id' => 2,
                'name' => 'Blouse',
                'price' => 39.55,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_47.png'
            ],
            'product_48' => [
                'store_id' => 3,
                'name' => 'Dress',
                'price' => 17.60,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_48.png'
            ],
            'product_49' => [
                'store_id' => 4,
                'name' => 'Pants',
                'price' => 23.41,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_49.png'
            ],
            'product_50' => [
                'store_id' => 5,
                'name' => 'Blouse',
                'price' => 38.60,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_50.png'
            ],
            'product_51' => [
                'store_id' => 1,
                'name' => 'Dress',
                'price' => 37.48,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_51.png'
            ],
            'product_52' => [
                'store_id' => 2,
                'name' => 'Coat',
                'price' => 20.58,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_52.png'
            ],
            'product_53' => [
                'store_id' => 3,
                'name' => 'Pants',
                'price' => 12.97,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_53.png'
            ],
            'product_54' => [
                'store_id' => 4,
                'name' => 'Dress',
                'price' => 27.88,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_54.png'
            ],
            'product_55' => [
                'store_id' => 5,
                'name' => 'Skirt',
                'price' => 15.20,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_55.png'
            ],
            'product_56' => [
                'store_id' => 1,
                'name' => 'Dress',
                'price' => 32.33,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_56.png'
            ],
            'product_57' => [
                'store_id' => 2,
                'name' => 'Dress',
                'price' => 37.99,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_57.png'
            ],
            'product_58' => [
                'store_id' => 3,
                'name' => 'Scarf',
                'price' => 46.84,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_58.png'
            ],
            'product_59' => [
                'store_id' => 4,
                'name' => 'Dress',
                'price' => 12.06,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_59.png'
            ],
            'product_60' => [
                'store_id' => 5,
                'name' => 'Blouse',
                'price' => 33.47,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_60.png'
            ],
            'product_61' => [
                'store_id' => 1,
                'name' => 'Coat',
                'price' => 40.73,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_61.png'
            ],
            'product_62' => [
                'store_id' => 2,
                'name' => 'Coat',
                'price' => 36.16,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_62.png'
            ],
            'product_63' => [
                'store_id' => 3,
                'name' => 'Pants',
                'price' => 43.41,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_63.png'
            ],
            'product_64' => [
                'store_id' => 4,
                'name' => 'Scarf',
                'price' => 45.64,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_64.png'
            ],
            'product_65' => [
                'store_id' => 5,
                'name' => 'Pants',
                'price' => 13.26,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_65.png'
            ],
            'product_66' => [
                'store_id' => 1,
                'name' => 'Dress',
                'price' => 28.72,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_66.png'
            ],


            // from here



            'product_67' => [
                'store_id' => 2,
                'name' => '',
                'price' => 43.41,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_67.png'
            ],
            'product_68' => [
                'store_id' => 3,
                'name' => '',
                'price' => 28.01,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_68.png'
            ],
            'product_69' => [
                'store_id' => 4,
                'name' => '',
                'price' => 12.84,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_69.png'
            ],
            'product_70' => [
                'store_id' => 5,
                'name' => '',
                'price' => 28.45,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_70.png'
            ],
            'product_71' => [
                'store_id' => 1,
                'name' => '',
                'price' => 13.30,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_71.png'
            ],
            'product_72' => [
                'store_id' => 2,
                'name' => '',
                'price' => 37.70,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_72.png'
            ],
            'product_73' => [
                'store_id' => 3,
                'name' => '',
                'price' => 25.72,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_73.png'
            ],
            'product_74' => [
                'store_id' => 4,
                'name' => '',
                'price' => 23.77,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_74.png'
            ],
            'product_75' => [
                'store_id' => 5,
                'name' => '',
                'price' => 46.22,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_75.png'
            ],
            'product_76' => [
                'store_id' => 1,
                'name' => '',
                'price' => 40.20,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_76.png'
            ],
            'product_77' => [
                'store_id' => 2,
                'name' => '',
                'price' => 40.82,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_77.png'
            ],
            'product_78' => [
                'store_id' => 3,
                'name' => '',
                'price' => 11.66,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_78.png'
            ],
            'product_79' => [
                'store_id' => 4,
                'name' => '',
                'price' => 39.91,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_79.png'
            ],
            'product_80' => [
                'store_id' => 5,
                'name' => '',
                'price' => 16.17,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_80.png'
            ],
            'product_81' => [
                'store_id' => 1,
                'name' => '',
                'price' => 34.40,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_81.png'
            ],
            'product_82' => [
                'store_id' => 2,
                'name' => '',
                'price' => 48.71,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_82.png'
            ],
            'product_83' => [
                'store_id' => 3,
                'name' => '',
                'price' => 48.63,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_83.png'
            ],
            'product_84' => [
                'store_id' => 4,
                'name' => '',
                'price' => 30.79,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_84.png'
            ],
            'product_85' => [
                'store_id' => 5,
                'name' => '',
                'price' => 26.94,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_85.png'
            ],
            'product_86' => [
                'store_id' => 1,
                'name' => '',
                'price' => 45.33,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_86.png'
            ],
            'product_87' => [
                'store_id' => 2,
                'name' => '',
                'price' => 45.45,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_87.png'
            ],
            'product_88' => [
                'store_id' => 3,
                'name' => '',
                'price' => 31.96,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_88.png'
            ],
            'product_89' => [
                'store_id' => 4,
                'name' => '',
                'price' => 33.63,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_89.png'
            ],
            'product_90' => [
                'store_id' => 5,
                'name' => '',
                'price' => 39.48,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_90.png'
            ],
            'product_91' => [
                'store_id' => 1,
                'name' => '',
                'price' => 46.12,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_91.png'
            ],
            'product_92' => [
                'store_id' => 2,
                'name' => '',
                'price' => 43.55,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_92.png'
            ],
            'product_93' => [
                'store_id' => 3,
                'name' => '',
                'price' => 29.48,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_93.png'
            ],
            'product_94' => [
                'store_id' => 4,
                'name' => '',
                'price' => 26.05,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_94.png'
            ],
            'product_95' => [
                'store_id' => 5,
                'name' => '',
                'price' => 45.86,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_95.png'
            ],
            'product_96' => [
                'store_id' => 1,
                'name' => '',
                'price' => 40.01,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_96.png'
            ],
            'product_97' => [
                'store_id' => 2,
                'name' => '',
                'price' => 30.65,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_97.png'
            ],
            'product_98' => [
                'store_id' => 3,
                'name' => '',
                'price' => 38.26,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_98.png'
            ],
            'product_99' => [
                'store_id' => 4,
                'name' => '',
                'price' => 40.37,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_99.png'
            ],
            'product_100' => [
                'store_id' => 5,
                'name' => '',
                'price' => 48.52,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_100.png'
            ],
            'product_101' => [
                'store_id' => 1,
                'name' => '',
                'price' => 12.82,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_101.png'
            ],
            'product_102' => [
                'store_id' => 2,
                'name' => '',
                'price' => 37.12,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_102.png'
            ],
            'product_103' => [
                'store_id' => 3,
                'name' => '',
                'price' => 22.09,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_103.png'
            ],
            'product_104' => [
                'store_id' => 4,
                'name' => '',
                'price' => 45.04,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_104.png'
            ],
            'product_105' => [
                'store_id' => 5,
                'name' => '',
                'price' => 48.28,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_105.png'
            ],
            'product_106' => [
                'store_id' => 1,
                'name' => '',
                'price' => 25.54,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_106.png'
            ],
            'product_107' => [
                'store_id' => 2,
                'name' => '',
                'price' => 23.23,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_107.png'
            ],
            'product_108' => [
                'store_id' => 3,
                'name' => '',
                'price' => 30.32,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_108.png'
            ],
            'product_109' => [
                'store_id' => 4,
                'name' => '',
                'price' => 22.60,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_109.png'
            ],
            'product_110' => [
                'store_id' => 5,
                'name' => '',
                'price' => 22.97,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_110.png'
            ],
            'product_111' => [
                'store_id' => 1,
                'name' => '',
                'price' => 16.59,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_111.png'
            ],
            'product_112' => [
                'store_id' => 2,
                'name' => '',
                'price' => 12.38,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_112.png'
            ],
            'product_113' => [
                'store_id' => 3,
                'name' => '',
                'price' => 32.53,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_113.png'
            ],
            'product_114' => [
                'store_id' => 4,
                'name' => '',
                'price' => 37.12,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_114.png'
            ],
            'product_115' => [
                'store_id' => 5,
                'name' => '',
                'price' => 25.60,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_115.png'
            ],
            'product_116' => [
                'store_id' => 1,
                'name' => '',
                'price' => 41.45,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_116.png'
            ],
            'product_117' => [
                'store_id' => 2,
                'name' => '',
                'price' => 25.92,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_117.png'
            ],
            'product_118' => [
                'store_id' => 3,
                'name' => '',
                'price' => 28.76,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_118.png'
            ],
            'product_119' => [
                'store_id' => 4,
                'name' => '',
                'price' => 14.68,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_119.png'
            ],
            'product_120' => [
                'store_id' => 5,
                'name' => '',
                'price' => 23.75,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_120.png'
            ],
            'product_121' => [
                'store_id' => 1,
                'name' => '',
                'price' => 25.35,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_121.png'
            ],
            'product_122' => [
                'store_id' => 2,
                'name' => '',
                'price' => 46.13,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_122.png'
            ],
            'product_123' => [
                'store_id' => 3,
                'name' => '',
                'price' => 31.33,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_123.png'
            ],
            'product_124' => [
                'store_id' => 4,
                'name' => '',
                'price' => 20.50,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_124.png'
            ],
            'product_125' => [
                'store_id' => 5,
                'name' => '',
                'price' => 16.43,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_125.png'
            ],
            'product_126' => [
                'store_id' => 1,
                'name' => '',
                'price' => 44.88,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_126.png'
            ],
            'product_127' => [
                'store_id' => 2,
                'name' => '',
                'price' => 10.97,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_127.png'
            ],
            'product_128' => [
                'store_id' => 3,
                'name' => '',
                'price' => 38.01,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_128.png'
            ],
            'product_129' => [
                'store_id' => 4,
                'name' => '',
                'price' => 42.18,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_129.png'
            ],
            'product_130' => [
                'store_id' => 5,
                'name' => '',
                'price' => 10.10,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_130.png'
            ],
            'product_131' => [
                'store_id' => 1,
                'name' => '',
                'price' => 36.11,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_131.png'
            ],
            'product_132' => [
                'store_id' => 2,
                'name' => '',
                'price' => 15.54,
                'description' => '',
                'product_photo' => 'storage\app\public\product_photos\pic_132.png'
            ],
        ];

        foreach ($products as $product) {
          $prod=  Product::create([
                'store_id' => $product['store_id'],
                'name' => $product['name'],
                'price' => $product['price'],
                'description' => null,
                'product_photo' => $product['product_photo'],
            ]);
            DB::table('product_size')->insert([
                ['product_id' => $prod->id, 'size_id' => 1, 'quantity' => 20],
                ['product_id' => $prod->id, 'size_id' => 2, 'quantity' => 20],
                ['product_id' => $prod->id, 'size_id' => 3, 'quantity' => 20],
            ]);
        }
    }
}
