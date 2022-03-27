<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_produk')->insert([
            'name_img' => 'pisangsusu.jpg',
            'name_product' => 'Pisang Susu',
            'price_product' => '10000',
            'description_product' => '',
            'sku_product' => 'CB-01',
            'categories_product' => '',
            'tags_product' => '',
            'status_product' => '1',
        ]);

        DB::table('tb_produk')->insert([
            'name_img' => 'pisangraja.jpg',
            'name_product' => 'Pisang Raja',
            'price_product' => '10000',
            'description_product' => '',
            'sku_product' => 'CB-02',
            'categories_product' => '',
            'tags_product' => '',
            'status_product' => '1',
        ]);

        DB::table('tb_produk')->insert([
            'name_img' => 'pisanghijau.jpg',
            'name_product' => 'Pisang Hijau',
            'price_product' => '10000',
            'description_product' => '',
            'sku_product' => 'CB-03',
            'categories_product' => '',
            'tags_product' => '',
            'status_product' => '1',
        ]);

        DB::table('tb_produk')->insert([
            'name_img' => 'pisangcavendish.jpg',
            'name_product' => 'Pisang Cavendish',
            'price_product' => '10000',
            'description_product' => '',
            'sku_product' => 'CB-04',
            'categories_product' => '',
            'tags_product' => '',
            'status_product' => '1',
        ]); 
        
        DB::table('tb_produk')->insert([
            'name_img' => 'pisanggepok.jpg',
            'name_product' => 'Pisang Gepok',
            'price_product' => '10000',
            'description_product' => '',
            'sku_product' => 'CB-05',
            'categories_product' => '',
            'tags_product' => '',
            'status_product' => '1',
        ]);

        DB::table('tb_produk')->insert([
            'name_img' => 'pisangtanduk.jpg',
            'name_product' => 'Pisang Tanduk',
            'price_product' => '10000',
            'description_product' => '',
            'sku_product' => 'CB-06',
            'categories_product' => '',
            'tags_product' => '',
            'status_product' => '1',
        ]);

        DB::table('tb_produk')->insert([
            'name_img' => 'pisangmas.jpg',
            'name_product' => 'Pisang Mas',
            'price_product' => '10000',
            'description_product' => '',
            'sku_product' => 'CB-07',
            'categories_product' => '',
            'tags_product' => '',
            'status_product' => '1',
        ]);

        DB::table('tb_produk')->insert([
            'name_img' => 'pisangthailand.jpg',
            'name_product' => 'Pepaya Thailand',
            'price_product' => '10000',
            'description_product' => '',
            'sku_product' => 'CB-08',
            'categories_product' => '',
            'tags_product' => '',
            'status_product' => '1',
        ]);

        DB::table('tb_produk')->insert([
            'name_img' => 'pisangcalifornia.jpg',
            'name_product' => 'Pepaya California',
            'price_product' => '10000',
            'description_product' => '',
            'sku_product' => 'CB-09',
            'categories_product' => '',
            'tags_product' => '',
            'status_product' => '1',
        ]);
    }
}