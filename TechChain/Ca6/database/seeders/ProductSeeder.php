<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dsSP = [
            [
                "name"=> "Samsung Galaxy S23 FE 5G 128GB",
                "image"=> "638471599704474139_samsung-galaxy-s23--fe-den-dd-AI.webp",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 14890000,
                "sale_price"=> 13390000
            ],
            [
                "name"=> "OPPO Reno11 F 5G 8GB-256GB",
                "image"=> "638493832157161657_oppo-reno11-f-green-1.webp",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 8990000,
                "sale_price"=> 8490000
            ],
            [
                "name"=> "Xiaomi Poco M6 Pro 8GB-256GB",
                "image"=> "638417729562660990_xiaomi-poco-m6-pro-dd-docquyen-bh.webp",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 6490000,
                "sale_price"=> 5990000
            ],
            [
                "name"=> "Samsung Galaxy S23 5G 256GB",
                "image"=> "638518175414796345_samsung-galaxy-s23-5g-thumb-doc-quyen.webp",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 24990000,
                "sale_price"=> 15490000
            ],
            [
                "name"=> "Honor X7b 8GB-256GB",
                "image"=> "638454261816142342_honor-x7b-xanh-6.webp",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 5290000,
                "sale_price"=> 4990000
            ],
            [
                "name"=> "OPPO A18 4GB-128GB",
                "image"=> "638509283036082649_OPPO-A18-thumb.webp",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 3990000,
                "sale_price"=> 3690000
            ],
            [
                "name"=> "iPhone 15 Pro Max 256GB",
                "image"=> "638342502751589917_ip-15-pro-max-dd-bh-2-nam.webp",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 34990000,
                "sale_price"=> 29490000
            ],
            [
                "name"=> "Samsung Galaxy S24 Ultra 5G 256GB",
                "image"=> "638477639726536939_samsung-galaxy-s24-ultra-dd-AI.webp",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 33990000,
                "sale_price"=> 31990000
            ],
            [
                "name"=> "Honor X9B 5G 12GB-256GB",
                "image"=> "638405567889290705_honor-x9b-dd-dq-1.webp",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 8990000,
                "sale_price"=> 8390000
            ],
            [
                "name"=> "OPPO A58 6GB-128GB",
                "image"=> "638265802441511578_oppo-a58-dd.webp",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 4990000,
                "sale_price"=> 4690000
            ],
            [
                "name"=> "Samsung Galaxy Z Flip4 5G 128GB",
                "image"=> "638131739579610504_samsung-galaxy-z-flip4-tim-dd-tragop.webp",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 23990000,
                "sale_price"=> 11990000
            ],
            [
                "name"=> "Tecno Spark Go 2024 4GB-64GB",
                "image"=> "638518773813324397_tecno-spark-go-2024-thumb-thu-cu-2g-100k.webp",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 2190000,
                "sale_price"=> 1990000
            ],
            [
                "name"=> "OPPO A78 8GB-256GB",
                "image"=> "638241536485031136_oppo-a78-den-dd.webp",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 6990000,
                "sale_price"=> 6490000
            ],
            [
                "name"=> "Xiaomi Redmi Note 13 6GB-128GB",
                "image"=> "638421256103594350_xiaomi-redmi-note-13-dd-bh.webp",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 4890000,
                "sale_price"=> 4690000
            ],
            [
                "name"=> "Samsung Galaxy A05s 128GB",
                "image"=> "638352249930121103_samsung-galaxy-a05s-dd-doimay.webp",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 3990000,
                "sale_price"=> 3590000
            ],
            [
                "name"=> "Honor X5 Plus 4GB-64GB",
                "image"=> "638376267641979247_honor-x5-plus-dd-doimoi.webp",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 2790000,
                "sale_price"=> 2490000
            ],
            [
                "name"=> "Samsung Galaxy A23 5G",
                "image"=> "638451444037915753_samsung-galaxy-a23-5g-dd.webp",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 5990000,
                "sale_price"=> 4190000
            ],
            [
                "name"=> "OPPO A17k 3GB-64GB",
                "image"=> "638071502453762468_oppo-a17k-dd.webp",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 3290000,
                "sale_price"=> 2790000
            ],
            [
                "name"=> "Xiaomi Redmi A2 2GB-32GB",
                "image"=> "638475676879245067_xiaomi-redmi-a2-den-dd-bh-thucu.webp",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 2190000,
                "sale_price"=> 1690000
            ],
            [
                "name"=> "Samsung Galaxy Z Fold5 5G 256GB",
                "image"=> "638472349027667377_samsung-galaxy-zfold-5-dd-ai.webp",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 40990000,
                "sale_price"=> 34990000
            ]
            ];
            
            foreach ($dsSP as $sp) {
                Product::create([
                    "name"          =>  $sp['name'],
                    "slug"          =>  Str::slug ($sp['name']),
                    "image"         =>  $sp['image'],
                    "instock"       =>  $sp['instock'],
                    "category_id"   =>  $sp['category_id'],
                    "price"         =>  $sp['price'],
                    "sale_price"    =>  $sp['sale_price'],
                ]);
            }
            

    }
}
