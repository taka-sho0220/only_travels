<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Travel;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Travel::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'place' => $faker->randomElement($array = ['北海道', '青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県']),
        'gender' => $faker->randomElement($array = ['20歳未満','20-29歳', '30-39歳','40-49歳','50-59歳','60-69歳','70-79歳','80歳以上']),
        'age' => $faker->randomElement($array = ['男性', '女性']),
        'evaluation' => $faker->randomElement($array = ['最高', '普通','最悪']),
        'impressions' => $faker->realText($maxNbChars = 20, $indexSize = 1),
        'terms' => '利用規約に同意します'
    ];
});
