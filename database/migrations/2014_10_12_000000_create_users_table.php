<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->uuid('uid');
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->string('language')->default('en');
            $table->boolean('is_active')->default(true);
            $table->longText('notes')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('mobile_number')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('currency')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('address_number')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('street_address')->nullable();
            $table->string('vat_number')->nullable();
            $table->string('company_name')->nullable();
            $table->string('type_person')->nullable();
            $table->date('birth')->nullable();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
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
