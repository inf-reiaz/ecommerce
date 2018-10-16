<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            
            [
                [
                    'id'   =>  1,
                    'name'=>'Green Coconut (Daab)',
                    'product_photo'=>'/public/front/img/1.jpg',
                    'description'=>'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 
                    'price'=>'100', 
                    'discunt_price'=>'90', 
                    'quantity'=>'10', 
                    'category_id'=>'1', 
                    'created_at'=>'2018-05-01',
                    'updated_at'=>'2018-05-01'
                ],
                [
                    'id'   =>  2,
                    'name'=>'Paka Pape (Net Weight ± 50 gm)',
                    'product_photo'=>'/public/front/images/c.jpg',
                    'description'=>'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 
                    'price'=>'100', 
                    'discunt_price'=>'90', 
                    'quantity'=>'10', 
                    'category_id'=>'2', 
                    'created_at'=>'2018-05-01',
                    'updated_at'=>'2018-05-01'
                ],
                [
                    'id'   =>  3,
                    'name'=>'Paka Pape (Net Weight ± 50 gm)',
                    'product_photo'=>'/public/front/images/c.jpg',
                    'description'=>'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 
                    'price'=>'100', 
                    'discunt_price'=>'90', 
                    'quantity'=>'10', 
                    'category_id'=>'3', 
                    'created_at'=>'2018-05-01',
                    'updated_at'=>'2018-05-01'
                ],
                [
                    'id'   =>  4,
                    'name'=>'Paka Pape (Net Weight ± 50 gm)',
                    'product_photo'=>'/public/front/images/c.jpg',
                    'description'=>'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 
                    'price'=>'100', 
                    'discunt_price'=>'90', 
                    'quantity'=>'10', 
                    'category_id'=>'3', 
                    'created_at'=>'2018-05-01',
                    'updated_at'=>'2018-05-01'
                ]
            ]
        
        );
    }
}
