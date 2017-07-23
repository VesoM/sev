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

//https://github.com/fzaninotto/Faker

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\UserGroup::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->company,
        'tax_number' => $faker->randomNumber($nbDigits = 8, $strict = true),
        'address' => $faker->address,
        'email' => $faker->unique()->safeEmail,
        'telephone' => $faker->unique()->phoneNumber,
        'status' => $faker->randomElement($array = array ('A','N')),
        'notes' => $faker->text(),
    ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\AssetGroup::class, function (Faker\Generator $faker) {
    $adresa = $faker->streetName;
    $broj = $faker->buildingNumber;
    $datum = $faker->date($format = 'Y-m-d', $max = 'now');
    return [
        'name' => 'SEV '.$adresa.' '.$broj,
        'address' => $adresa,
        'number'  => $broj,
        'municipality' => 'Podgorica',
        'bank_account' => $faker->bankAccountNumber,
        'tax_number' => $faker->randomNumber($nbDigits = 8, $strict = true),
        'superintendent' => $faker->name,
        'contact_tel' => $faker->unique()->phoneNumber,
        'contact_mail' => $faker->unique()->safeEmail,
        'contact_address' => $adresa,
        'founding_date'  => $datum,
        'first_bill_date'  => $datum,
    ];
});

$factory->define(App\Asset::class, function (Faker\Generator $faker) {
    return [
        'asset_type_id' => App\AssetType::all()->random()->id,
        'name' => 'Stan broj '.$faker->randomNumber($nbDigits = 4, $strict = false),
        'size'  => $faker->randomNumber($nbDigits = 2, $strict = true),
        'cadastre_number' => $faker->randomNumber($nbDigits = 4, $strict = false),
        'status' => 'A',
        'agg_bill_visible' => $faker->randomElement($array = array ('Y','N')),
        'notes' => null,
    ];
});

$factory->define(App\AssetOwner::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'address1' => $faker->address,
        'address2' => $faker->address,
        'email' => $faker->unique()->safeEmail,
        'telephone' => $faker->unique()->phoneNumber,
        'status' => 'A',
        'identification_number' => $faker->randomNumber($nbDigits = 2, $strict = true),
        'notes' => null,
    ];
});

$factory->define(App\AssetContract::class, function (Faker\Generator $faker) {
    return [
      'asset_id' => App\AssetGroup::all()->random()->assets->random()->id,
      'asset_owner_id' => App\AssetOwner::all()->random()->id,
      'status' => 'A',
      'notes' => null,
    ];
});

$factory->define(App\AssetAnnex::class, function (Faker\Generator $faker) {
    return [
      'unit_price' => 0.20,
      'ownership_percentage' => 100,
      'amount' => $faker->randomNumber($nbDigits = 1, $strict = true),
      'start_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
      'end_date' => null,
      'notes' => null,
    ];
});
