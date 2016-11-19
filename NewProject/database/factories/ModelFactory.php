<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Menu::class, function (Faker\Generator $faker) {
    $min = App\Menu::min('id');
    $max = App\Menu::max('id');

    return [
        'menu_id'=>$faker->unique()->randomDigit,
        'title' => $faker->word,
        'created_at'=>$faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
        'updated_at'=>$faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),

    ];
});

$factory->define(App\Notice::class, function (Faker\Generator $faker) {
    $min = App\Notice::min('id');
    $max = App\Notice::max('id');

    return [
        'notice_id'=>$faker->unique()->randomDigit,
        'title' => $faker->word,
        'desc' => $faker->sentence($nbWords = 10, $variableNbWords = true),
        'created_at'=>$faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
        'updated_at'=>$faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),

    ];
});

$factory->define(App\Thumbnail::class, function (Faker\Generator $faker) {
    $min = App\Thumbnail::min('id');
    $max = App\Thumbnail::max('id');

    return [
        'thumbnail_id'=>$faker->unique()->randomDigit,
        'title' => $faker->word,
        'desc' => $faker->sentence($nbWords = 10, $variableNbWords = true),
        'created_at'=>$faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
        'updated_at'=>$faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),

    ];
});

$factory->define(App\Image::class, function (Faker\Generator $faker) {
    $min = App\Image::min('id');
    $max = App\Image::max('id');

    return [
        'image_id'=>$faker->unique()->randomDigit,
        'title' => $faker->word,
        'desc' => $faker->sentence($nbWords = 10, $variableNbWords = true),
        'created_at'=>$faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
        'updated_at'=>$faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),

    ];
});

$factory->define(App\Office::class, function (Faker\Generator $faker) {
    $min = App\Office::min('id');
    $max = App\Office::max('id');

    return [
        'office_id'=>$faker->unique()->randomDigit,
        'branch' => $faker->company,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'fax' => $faker->tollFreePhoneNumber,
        'email' => $faker->email,
        'created_at'=>$faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
        'updated_at'=>$faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),

    ];
});