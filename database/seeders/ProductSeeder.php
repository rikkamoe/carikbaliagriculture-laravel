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
            'thumbnail_img' => 'pisang_susu.jpg',
            'name_img' => '1.jpg',
            'name_product' => 'Pisang Susu',
            'price_product' => '1800',
            'description_product' => 'sedia buah pisang susu segar dari kebun, kualitas bagus. Perawatan tanaman dari Carik Bali sendiri. Jumlah stok siap 3 tandan. ',
            'information_product' => 'Pisang susu memiliki tekstur yang mirip dengan pisang Cavendish, tetapi berukuran lebih kecil dengan bentuk melengkung tanpa siku. Rasa pisang ini manis dan memiliki sensasi creamy seperti susu. Kulit pisang susu berwarna kuning cerah dengan agak berbintik cokelat kehitaman.',
            'sku_product' => 'CB-01',
            'categories_product' => 'buah',
            'tags_product' => 'pisang susu',
            'status_product' => '1',
        ]);

        DB::table('tb_produk')->insert([
            'thumbnail_img' => 'pisang_raja.jpg',
            'name_img' => '2.jpg',
            'name_product' => 'Pisang Raja',
            'price_product' => '2500',
            'description_product' => 'sedia buah pisang raja Bali segar dari kebun, kualitas bagus. Perawatan tanaman dari Carik Bali sendiri. Jumlah stok siap 3 tandan.',
            'information_product' => 'Pisang raja adalah jenis pisang yang cukup banyak digemari di Indonesia. Pisang ini banyak digemari karena dagingnya tebal, padat, dan rasanya juga manis. Kulit pisang raja sendiri bertekstur tebal dan berwarna kuning menuju jingga ketika sudah matang dengan sedikit corak kehitaman.',
            'sku_product' => 'CB-02',
            'categories_product' => 'buah',
            'tags_product' => 'pisang raja',
            'status_product' => '1',
        ]);

        DB::table('tb_produk')->insert([
            'thumbnail_img' => 'pisang_hijau.jpg',
            'name_img' => '3.jpg',
            'name_product' => 'Pisang Hijau',
            'price_product' => '10000',
            'description_product' => '',
            'information_product' => '',
            'sku_product' => 'CB-03',
            'categories_product' => '',
            'tags_product' => '',
            'status_product' => '1',
        ]);

        DB::table('tb_produk')->insert([
            'thumbnail_img' => 'pisang_cavendish.jpg',
            'name_img' => '4.jpg',
            'name_product' => 'Pisang Cavendish',
            'price_product' => '3500',
            'description_product' => 'sedia buah pisang Cavendish Hijau segar dari kebun, kualitas bagus. Perawatan tanaman dari Carik Bali sendiri. Jumlah stok siap 2 tandan.',
            'information_product' => 'Dikutip dari Royal Botanic Garden Kew, setiap tahun terdapat 55 juta ton jenis pisang ini yang ditanam di seluruh dunia. Secara manfaat, pisang Cavendish seperti pisang lainnya juga, menyediakan energi dan kaya akan nutrisi. Pisang ini mengandung vitamin A dan C tingkat tinggi, mineral seperti fosfor, kalsium dan kalium, serta karbohidrat. Buah ini juga mengandung pati resisten, yang membantu seseorang merasa kenyang lebih lama karena merupakan karbohidrat kompleks. Semakin hijau pisang, semakin banyak pati yang dikandungnya. Ini membuat pisang menjadi camilan yang bisa dikonsumsi tanpa khawatir berat badan bertambah secara drastis.',
            'sku_product' => 'CB-04',
            'categories_product' => '',
            'tags_product' => '',
            'status_product' => '1',
        ]);

        DB::table('tb_produk')->insert([
            'thumbnail_img' => 'pisang_gepok.jpg',
            'name_img' => '5.jpg',
            'name_product' => 'Pisang Gepok',
            'price_product' => '10000',
            'description_product' => '',
            'information_product' => '',
            'sku_product' => 'CB-05',
            'categories_product' => '',
            'tags_product' => '',
            'status_product' => '1',
        ]);

        DB::table('tb_produk')->insert([
            'thumbnail_img' => 'pisang_tanduk.jpg',
            'name_img' => '6.jpg',
            'name_product' => 'Pisang Tanduk',
            'price_product' => '10000',
            'description_product' => '',
            'information_product' => '',
            'sku_product' => 'CB-06',
            'categories_product' => '',
            'tags_product' => '',
            'status_product' => '1',
        ]);

        DB::table('tb_produk')->insert([
            'thumbnail_img' => 'pisang_mas.jpg',
            'name_img' => '7.jpg',
            'name_product' => 'Pisang Mas',
            'price_product' => '10000',
            'description_product' => '',
            'information_product' => '',
            'sku_product' => 'CB-07',
            'categories_product' => '',
            'tags_product' => '',
            'status_product' => '1',
        ]);

        DB::table('tb_produk')->insert([
            'thumbnail_img' => 'pepaya_thailand.jpg',
            'name_img' => '8.jpg',
            'name_product' => 'Pepaya Thailand',
            'price_product' => '12000',
            'description_product' => 'sedia buah pepaya Thailand segar dari kebun, kualitas bagus. Perawatan tanaman dari Carik Bali sendiri. Jumlah stok siap 10 pcs.',
            'information_product' => 'Pepaya Thailand adalah salah satu varietas pepaya unggul, yang cukup diminati oleh masyarakat Indonesia. Pepaya ini memiliki segudang manfaat, salah satunya terdapat kandungan vitamin A dalam buah ini juga dapat menurunkan risiko terjadinya gangguan penglihatan yang berkaitan dengan pertambahan usia, seperti degenerasi makula. Selain itu, pepaya baik untuk memelihara kesehatan rambut dan kuku, melancarkan pencernaan, menjaga kesehatan kulit, meningkatkan sistem imun tubuh, dan masih banyak lagi lainnya.',
            'sku_product' => 'CB-08',
            'categories_product' => 'buah',
            'tags_product' => 'pepaya thailand',
            'status_product' => '1',
        ]);

        DB::table('tb_produk')->insert([
            'thumbnail_img' => 'pepaya_california.jpg',
            'name_img' => '9.jpg',
            'name_product' => 'Pepaya California',
            'price_product' => '13000',
            'description_product' => 'sedia buah pepaya California kualitas bagus, segar dari kebun. Perawatan tanaman dari Carik Bali sendiri. Jumlah stok siap 10 pcs.',
            'information_product' => 'Pepaya varietas California merupakan salah satu jenis pepaya yang sedang digandrungi dan mulai banyak dikembangkan para petani pada saat ini karena sangat menjanjikan keuntungan. Pepaya California rasanya manis dan daging buahnya tebal. Pepaya California adalah buah asli Indonesia. Sejak 2001, pepaya California merupakan hasil rekayasa atau pemuliaan Prof. Dr. Ir. Sriani Sujiprihati, seorang ilmuwan dari Pusat Kajian Buah Tropika, Institut Pertanian Bogor (IPB). Sudah sejak tahun 2001, Prof. Sriani dan para ilmuwan IPB mengadakan penelitian di berbagai daerah untuk mengumpulkan bibit buah-buahan unggul. Pepaya california memiliki berbagai kandungan nutrisi yang baik bagi tubuh. Salah satunya, yaitu Kandungan vitamin C dan A pada buah pepaya California juga bermanfaat sebagai antioksidan yang berguna untuk menangkal radikal bebas yang menjaga sistem kekebalan tubuh dan mencegah tubuh dari berbagai macam penyakit.',
            'sku_product' => 'CB-09',
            'categories_product' => 'buah',
            'tags_product' => 'pepaya california',
            'status_product' => '1',
        ]);
    }
}
