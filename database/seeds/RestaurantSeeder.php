<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        $MAX = 25;

        for ($i = 0; $i < $MAX; $i++) {
            $user = new User();

            $firstName = $faker->firstName();
            $activity_name = $firstName . "'s";

            $user->name = $faker->name();
            $user->activity_name = $activity_name;
            $user->email = $faker->email() . strval($i);

            $user->slug = $this->getSlug($activity_name);


            $user->address = $faker->address();
            if ($i < 10) {
                $vatDyn = strval($i + 10);
                $user->vat_number = strval($faker->randomNumber(9, true)) . $vatDyn;
            } else {
                $user->vat_number = strval($faker->randomNumber(9, true)) . strval($i);
            }
            $user->password = Hash::make('123456789');
            $user->save();

            $type = $faker->numberBetween(1, 10);
            $user->types()->sync($type);
        }
    }

    private function getSlug($activity_name)
    {
        $slug = Str::slug($activity_name);
        $slug_base = $slug;

        $existingUser = User::where('slug', $slug)->first();
        $counter = 1;
        while ($existingUser) {
            $slug = $slug_base . '_' . $counter;
            $counter++;
            $existingUser = User::where('slug', $slug)->first();
        }
        return $slug;
    }
}
