<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentCashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_cashes', function (Blueprint $table) {

            $table->bigIncrements('id');
            
            $table->string('name_of_insured')->default(null);
            
            $table->string('address_of_insured')->default(null);

            $table->string('email')->default(null);

            $table->string('amt_of_transaction')->default(null);
            
            $table->string('credit_card_no')->default(null);
            
            $table->string('expiration_date')->default(null);
            
            $table->string('csv')->default(null);

            $table->text('attachment')->default(null);
            
            $table->string('billing_address_zip_code')->default(null);

            $table->string('signature')->default(null);

            
            $table->string('submitted_date')->default(null);
            
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
        Schema::dropIfExists('payment_cashes');
    }
}
