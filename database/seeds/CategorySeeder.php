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
            ['Action','action'],
            ['Horror','horror'],
        ];
        for ($i=0; $i < count($data); $i++) {
            $name = $data[$i][0];
            $slug = $data[$i][1];
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
