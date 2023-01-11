<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Categories::truncate();
        Schema::enableForeignKeyConstraints();

        $data = ['comic', 
                 'romantic', 
                 'AI', 
                 'PHP', 
                 'Database', 
                 'Science'
                ];
        
        foreach ($data as $value) {
            Categories::insert([
                'name' => $value
            ]);
        }
    }
}
