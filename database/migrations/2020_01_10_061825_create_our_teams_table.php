<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_teams', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('photo')->default(null);

            $table->string('full_name')->default(null);

            $table->string('email')->default(null);

            $table->string('designation')->default(null);

            $table->string('facebook')->default(null);

            $table->string('twitter')->default(null);

            $table->string('in')->default(null);

            
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
        Schema::dropIfExists('our_teams');
    }
}
