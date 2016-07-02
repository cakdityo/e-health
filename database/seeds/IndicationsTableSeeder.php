<?php

use Illuminate\Database\Seeder;
use App\Indication;

class IndicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Indication::create(['name'=>'Tubuh menggigil']);
        Indication::create(['name'=>'Sakit kepala']);
        Indication::create(['name'=>'Muncul bintik merah pada kulit']);
        Indication::create(['name'=>'Sakit tenggorokan']);
        Indication::create(['name'=>'Hilang nafsu makan']);
        Indication::create(['name'=>'Demam']);
        Indication::create(['name'=>'Lemas']);
        Indication::create(['name'=>'Nyeri otot']);
        Indication::create(['name'=>'Batuk lebih dari 3 minggu']);
        Indication::create(['name'=>'Sesak nafas']);
    }
}
