<?php

use App\Cat;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) {
            $newcat= new Cat();
            $newcat->name= $faker->name();
            $newcat->age= $faker->randomFloat(2,1,20);
            $newcat->fur= $faker->name();
            $newcat->img= $faker->text();
            $newcat->save();
        }
    }
}
