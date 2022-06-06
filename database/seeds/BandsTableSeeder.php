<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Models\Band;

class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newBand = new Band();

            $newBand -> name = $faker -> word();
            $newBand -> components = $faker -> randomDigit();
            $newBand -> genre = $faker -> sentence(3);
            $newBand -> live_on_stage = $faker -> dateTime();
            $newBand -> bio = $faker -> paragraph(3);
            $newBand -> stage_number = $faker -> numberBetween(1,5);

            $newBand -> save();
        }
    }
}
