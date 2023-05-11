<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Added Start
        $products = [
            [
                'name' => 'Healty noodles',
                'image' => 'https://i.pinimg.com/474x/ce/3c/76/ce3c768d9389c8346c7ab20f07f3cfb1.jpg',
                'price' => 15000,
                'description' => 'Perpaduan mie kuah dengan sayur sayuran yang segar',
                'stok' => 10
            ],
            [
                'name' => 'Pie susu',
                'image' => 'https://i.pinimg.com/474x/78/ef/ba/78efbad6fea886f535fa38c711c47e33.jpg',
                'price' => 3000,
                'description' => ' Manisnya susu di pie yang lembut ',
                'stok' => 10
            ],
            [
                'name' => 'Baso aci',
                'image' => 'https://i.pinimg.com/564x/ba/dd/cd/baddcdf1160fb34f71b41f6ef6ace223.jpg',
                'price' => 10000,
                'description' => 'Python Language',
                'stok' => 10
            ],
            [
                'name' => 'Nasi goreng',
                'image' => 'https://i.pinimg.com/564x/ba/57/64/ba57644277b56dbe8cec490677f01b9d.jpg',
                'price' => 10000,
                'description' => 'Codeigniter freamwork',
                'stok' => 10
            ],
            [
                'name' => 'Baso telur',
                'image' => 'https://i.pinimg.com/564x/ec/ce/4a/ecce4ad69a5aa7b5f599c93bf7e4c81e.jpg',
                'price' => 11000,
                'description' => 'Perpaduan mie kuah dengan sayur sayuran yang segar',
                'stok' => 10
            ],
            [
                'name' => 'Kari ayam',
                'image' => 'https://i.pinimg.com/564x/f3/3f/64/f33f64fc81502d60e4ef960ee3aa7d63.jpg',
                'price' => 10000,
                'description' => ' Manisnya susu di pie yang lembut ',
                'stok' => 10
            ],
            [
                'name' => 'Baso aci',
                'image' => 'https://i.pinimg.com/564x/ba/dd/cd/baddcdf1160fb34f71b41f6ef6ace223.jpg',
                'price' => 6000,
                'description' => 'Python Language',
                'stok' => 10
            ],
            [
                'name' => 'Sando',
                'image' => 'https://i.pinimg.com/564x/df/9e/81/df9e815a6d5bf393f66075c4d9347651.jpg',
                'price' => 5000,
                'description' => 'Codeigniter freamwork',
                'stok' => 10               
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
        //Added End
    }
}