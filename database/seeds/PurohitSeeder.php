<?php

use Illuminate\Database\Seeder;
use App\Purohit;

class PurohitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $purohit = Purohit::create([
            'name' => 'Debraj Ghosh',
            'mobile' => '9903749918',
            'profile_image' => '',
            'grade' => 1,
            'date_of_birth' => '1987-04-29 15:24:47'
        ]);
    }
}
