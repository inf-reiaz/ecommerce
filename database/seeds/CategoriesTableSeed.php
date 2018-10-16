<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            
            [
                [
                    'id'   =>  1,
                    'name'=>'Pre Order',
                    'slug'=>'Pre-Order',
                    'created_at'=>'2018-05-01',
                    'updated_at'=>'2018-05-01'
                ],
                [
                    'id'   =>  2,
                    'name'=>'Ramadan Item',
                    'slug'=>'ramadan-item',
                    'created_at'=>'2018-05-01',
                    'updated_at'=>'2018-05-01'
                ],
                [
                    'id'   =>  3,
                    'name'=>'Grocery',
                    'slug'=>'grocery',
                    'created_at'=>'2018-05-01',
                    'updated_at'=>'2018-05-01'
                ],
                [
                    'id'   =>  4,
                    'name'=>'Ingredients',
                    'slug'=>'Ingredients',
                    'created_at'=>'2018-05-01',
                    'updated_at'=>'2018-05-01'
                ],
                [
                    'id'   =>  5,
                    'name'=>'Honey',
                    'slug'=>'Honey',
                    'created_at'=>'2018-05-01',
                    'updated_at'=>'2018-05-01'
                ],
                [
                    'id'   =>  6,
                    'name'=>'Fish & Dairy',
                    'slug'=>'Fish-&-Dairy',
                    'created_at'=>'2018-05-01',
                    'updated_at'=>'2018-05-01'
                ],
                [
                    'id'   =>  7,
                    'name'=>'Bakery',
                    'slug'=>'Bakery',
                    'created_at'=>'2018-05-01',
                    'updated_at'=>'2018-05-01'
                ],
                [
                    'id'   =>  8,
                    'name'=>'Beverage',
                    'slug'=>'Beverage',
                    'created_at'=>'2018-05-01',
                    'updated_at'=>'2018-05-01'
                ],
                [
                    'id'   =>  9,
                    'name'=>'Seasonal Fruits',
                    'slug'=>'Seasonal-Fruits',
                    'created_at'=>'2018-05-01',
                    'updated_at'=>'2018-05-01'
                ]
            ]
        
        );
    }
}
