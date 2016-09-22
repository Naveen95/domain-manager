<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DomainDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domain_details', function(Blueprint $table){

            $table->increments('id');
            $table->string('user_id');
            $table->string('client_id');
            $table->string('client_business');
            $table->string('client_ref');
            $table->string('client_dob');
            $table->string('client_addr');
            $table->string('client_no1');
            $table->string('client_name');
            $table->string('gmail_mail');
            $table->string('gmail_pass');
            $table->string('domain_name');
            $table->string('domain_reg');
            $table->string('domain_p_date');
            $table->string('domain_ex_date');
            $table->string('domain_acc_email');
            $table->string('domain_acc_pass');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('domain_details');
    }
}
