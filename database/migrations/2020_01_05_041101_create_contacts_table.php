<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        Schema::create('contacts', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('contact_reason')->default(null);
            $table->string('email')->default(null);
            $table->string('first_name')->default(null);
            $table->string('last_name')->default(null);
            $table->string('phone')->default(null);
            $table->string('phone_type')->default(null);
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
        Schema::dropIfExists('contacts');
    }
}
