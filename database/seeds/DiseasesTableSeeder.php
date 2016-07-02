<?php

use Illuminate\Database\Seeder;
use App\Disease;

class DiseasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disease = Disease::create(['name'=>'Demam Berdarah']);
        $disease->indications()->attach(1, ['cf_score' => '9']);
        $disease->indications()->attach(2, ['cf_score' => '8']);
        $disease->indications()->attach(3, ['cf_score' => '8']);
        $disease->indications()->attach(4, ['cf_score' => '6']);
        $disease->indications()->attach(5, ['cf_score' => '5']);
        $disease->indications()->attach(8, ['cf_score' => '6']);

        $disease = Disease::create(['name'=>'Tifus']);
        $disease->indications()->attach(2, ['cf_score' => '8']);
        $disease->indications()->attach(3, ['cf_score' => '8']);
        $disease->indications()->attach(5, ['cf_score' => '7']);
        $disease->indications()->attach(6, ['cf_score' => '9']);
        $disease->indications()->attach(7, ['cf_score' => '9']);
        $disease->indications()->attach(8, ['cf_score' => '6']);

        $disease = Disease::create(['name'=>'TBC']);
        $disease->indications()->attach(6, ['cf_score' => '8']);
        $disease->indications()->attach(7, ['cf_score' => '8']);
        $disease->indications()->attach(9, ['cf_score' => '9']);
        $disease->indications()->attach(10, ['cf_score' => '9']);
    }
}
