<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
 
class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $i=[1,2,3,4,5,6,7,8,9,10];
        foreach ($i as $a) {
            DB::table('post_table')->insert([
                'name' => Str::random(10),
                'description' => Str::random(10).$a,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}