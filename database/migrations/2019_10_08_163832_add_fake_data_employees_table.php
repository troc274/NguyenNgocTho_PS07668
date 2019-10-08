<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFakeDataEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $faker = Faker\Factory::create();
        $limit = 33;
        $gender = $faker->randomElement(['male', 'female']);
        for($i = 0; $i < $limit; $i++){
            DB::table('employees')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'contact_number' => $faker->phoneNumber,
                'gender' => $faker->randomElement(['male', 'female']),
                'dept_id' => 1
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
