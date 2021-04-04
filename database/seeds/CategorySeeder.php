<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['Action','Mistery','Fiction']
        ];
        for ($i=0; $i < 3; $i++) {
            $name = $data[0][$i];
            $slug = str_slug($data[0][$i]);
            $created_at = Carbon::now();
            $updated_at = Carbon::now();

            DB::table('categories')->insert([
                'name' => $name, 
                'slug' => $slug,
                'created_at' => $created_at,
                'updated_at' => $updated_at,
            ]);
        }
    }
}
