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

            // $table->bigIncrements('id');
            // $table->string('first_name');
            // $table->string('last_name');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->string('address');
            // $table->integer('relationship_status');
            // $table->string('image');
            // $table->string('zipcode');
            // $table->timestamp('created_at')->nullable();
            // $table->timestamp('updated_at')->nullable();
            // $table->rememberToken();

            $table->bigIncrements('id');
            $table->string('username')->default();
            $table->string('first_name')->default();
            $table->string('last_name')->default();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('address')->default('');
            $table->integer('relationship_status')->nullable();
            $table->string('image')->nullable();
            $table->string('zipcode')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->rememberToken();

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
