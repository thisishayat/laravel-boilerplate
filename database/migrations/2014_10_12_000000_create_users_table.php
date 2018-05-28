<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('sur_name');
            $table->dateTime('date_of_birth');
            $table->string('place_of_birth');
            $table->string('identity_card_no')->nullable();
            $table->string('type_of_identity')->nullable();
            $table->string('email')->nullable();
            $table->string('api_token', 60)->unique();

            $table->string('comp_name');
            $table->string('vat_id');
            $table->string('address');
            $table->string('city');
            $table->string('region');
            $table->string('post_code');

            $table->unsignedInteger('country_id');
            $table->string('otp')->nullable();
            $table->string('otp_code')->nullable();
            $table->dateTime('otp_expire')->nullable();
            $table->tinyInteger('role');

            $table->tinyInteger('acnt_sts')->default(0);
            $table->tinyInteger('is_active')->default(0);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('country_id')->references('id')->on('countries');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
