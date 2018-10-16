<?php

use Illuminate\Database\Seeder;

class SliderTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert(
            
            [
                [
                    'id'   =>  1,
                    'image'=>'/public/front/images/slider/preorder1.jpg',
                    'link'=>'#',
                    'slider_position'=>'1',
                    'created_at'=>'2018-05-01',
                    'updated_at'=>'2018-05-01'
                ],
                [
                    'id'   =>  2,
                    'image'=>'/public/front/images/slider/preorder2.jpg',
                    'link'=>'#',
                    'slider_position'=>'1',
                    'created_at'=>'2018-05-01',
                    'updated_at'=>'2018-05-01'
                ],
                [
                    'id'   =>  3,
                    'image'=>'/public/front/images/slider/preorder1.jpg',
                    'link'=>'#',
                    'slider_position'=>'1',
                    'created_at'=>'2018-05-01',
                    'updated_at'=>'2018-05-01'
                ],
                [
                    'id'   =>  4,
                    'image'=>'/public/front/images/slider/preorder2.jpg',
                    'link'=>'#',
                    'slider_position'=>'2',
                    'created_at'=>'2018-05-01',
                    'updated_at'=>'2018-05-01'
                ],
                [
                    'id'   =>  5,
                    'image'=>'/public/front/images/slider/preorder1.jpg',
                    'link'=>'#',
                    'slider_position'=>'2',
                    'created_at'=>'2018-05-01',
                    'updated_at'=>'2018-05-01'
                ],
                [
                    'id'   =>  6,
                    'image'=>'/public/front/images/slider/preorder2.jpg',
                    'link'=>'#',
                    'slider_position'=>'2',
                    'created_at'=>'2018-05-01',
                    'updated_at'=>'2018-05-01'
                ]
            ]
        
        );
    }
}
