<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\ProductSize;
use App\Review;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $product = factory(App\Product::class, 5)->create();

        $product_size = [
            ['product_id' => '1','ratio' => '6*3','created_at' => Carbon::now(), 'updated_at' => Carbon::now() ],
            ['product_id' => '1','ratio' => '6*4','created_at' => Carbon::now(), 'updated_at' => Carbon::now() ],
            ['product_id' => '1','ratio' => '6*5','created_at' => Carbon::now(), 'updated_at' => Carbon::now() ],
            ['product_id' => '2','ratio' => '6*6','created_at' => Carbon::now(), 'updated_at' => Carbon::now() ],
            ['product_id' => '2','ratio' => '6*3','created_at' => Carbon::now(), 'updated_at' => Carbon::now() ],
            ['product_id' => '2','ratio' => '6*4','created_at' => Carbon::now(), 'updated_at' => Carbon::now() ],
            ['product_id' => '3','ratio' => '6*3','created_at' => Carbon::now(), 'updated_at' => Carbon::now() ],
        ];

        $product_review_rating = [
            ['product_id' => '1','user_id' => '1','rating' => '3','review' => Null,'created_at' => Carbon::now(), 'updated_at' => Carbon::now() ],
            ['product_id' => '1','user_id' => '2','rating' => '4','review' => 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s','created_at' => Carbon::now(), 'updated_at' => Carbon::now() ],
            ['product_id' => '1','user_id' => '5','rating' => '5','review' => 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s','created_at' => Carbon::now(), 'updated_at' => Carbon::now() ],
            ['product_id' => '2','user_id' => '6','rating' => '2','review' => 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s','created_at' => Carbon::now(), 'updated_at' => Carbon::now() ],
            ['product_id' => '2','user_id' => '3','rating' => '1','review' => Null,'created_at' => Carbon::now(), 'updated_at' => Carbon::now() ],
            ['product_id' => '3','user_id' => '4','rating' => '2','review' => 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s','created_at' => Carbon::now(), 'updated_at' => Carbon::now() ],
            ['product_id' => '4','user_id' => '3','rating' => '4','review' => 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s','created_at' => Carbon::now(), 'updated_at' => Carbon::now() ],
        ];

        ProductSize::insert($product_size);
        Review::insert($product_review_rating);
    }
}
