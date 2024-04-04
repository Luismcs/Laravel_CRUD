<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'id'=>1,
            'name'=> 'Quarto',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

        DB::table('categories')->insert([
            'id'=>2,
            'name'=> 'Sala',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

        DB::table('categories')->insert([
            'id'=>3,
            'name'=> 'Cozinha',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

        DB::table('categories')->insert([
            'id'=>4,
            'name'=> 'Casa de Banho',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
