<?php

use Illuminate\Database\Seeder;
use App\Pasta;
use Illuminate\Support\Str;

class PastasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $pastasArray = config("db-paste");

      foreach ($pastasArray as $pasta) {
        $newPasta = new Pasta();

        $pasta["slug"] = Str::slug($pasta["titolo"], '-');

        $newPasta->fill($pasta)->save();
      }

    }
}
