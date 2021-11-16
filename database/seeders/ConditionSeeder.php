<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Condition;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conditionsArr = ['Like New', 'Good', 'Acceptable', 'Fair', 'Poor'];
        for ($i = 0; $i < count($conditionsArr); $i++) {
            $condition_name = new Condition;
            $condition_name->condition_name = $conditionsArr[$i];
            $condition_name->save();
        }
    }
}
