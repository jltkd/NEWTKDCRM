<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('client_id')->unsigned()->nullable();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->string('domain_purchased_through')->nullable();
            $table->string('domain_ip')->nullable();
            $table->integer('domain_years_paid')->nullable();
            $table->date('domain_expire_date')->nullable();
            $table->string('domain_ssl')->nullable();
            $table->date('domain_ssl_expire_date')->nullable();
            $table->string('domain_email')->nullable();
            $table->text('domain_notes')->nullable();
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
        Schema::dropIfExists('domains');
    }
}
