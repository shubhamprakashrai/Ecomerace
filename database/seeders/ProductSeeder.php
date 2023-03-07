<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert(
            [
              'name'=>'LG mobile',
              'price'=>'1000',
              "description"=>"this is smart phone and having ram 8gb RAM",
              "category"=>"mobile",
              "gallery"=>"image/first.jpg"
            ],

            [
                'name'=>'LG mobile',
                'price'=>'1000',
                "description"=>"this is smart phone and having ram 8gb RAM",
                "category"=>"mobile",
                "gallery"=>"https://images.unsplash.com/photo-1565849904461-04a58ad377e0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=436&q=80"
            ],

              [
                'name'=>'LG mobile',
                'price'=>'1000',
                "description"=>"this is smart phone and having ram 8gb RAM",
                "category"=>"mobile",
                "gallery"=>"https://www.dreamstime.com/stock-photo-
                television-hi-def-isolated-white-image45055781"
              ],
              [
                'name'=>'LG mobile',
                'price'=>'1000',
                "description"=>"this is smart phone and having ram 8gb RAM",
                "category"=>"mobile",
                "gallery"=>"https://images.unsplash.com/photo-1505156868547-9b49f4df4e04?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=416&q=80"
              ],

              [
                'name'=>'LG TV',
                'price'=>'1000',
                "description"=>"this is smart TV and having ram 8gb RAM",
                "category"=>"mobile",
                "gallery"=>"https://images.unsplash.com/photo-1559650656-5d1d361ad10e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=348&q=80"
              ],
              [
                'name'=>'SamsunTV',
                'price'=>'5000',
                "description"=>"this is smart TV and having ram 16gb RAM",
                "category"=>"TV",
                "gallery"=>"https://images.unsplash.com/photo-1601784551446-20c9e07cdbdb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1567&q=80"
              ]
            );

    }
       
}