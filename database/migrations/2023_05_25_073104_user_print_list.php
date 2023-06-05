<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_print_list', function(Blueprint $table){

            $table->increments('transaction_id');
            $table->string('transaction_code'); // nanti diisi sama random string
            $table->string('payment_method'); // bisa kayak gopay, ovo, dana, dll
            $table->string('code_product'); // nanti diisi sama code produk
            $table->string('name_artist'); // nanti diisi sama nama artist
            $table->string('name_buyer'); // nanti diisi sama nama buyer
            $table->bigInteger('price'); // nanti diisi sama harga produk
            $table->boolean('status'); // nanti diisi sama true atau false
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
        //
    }
};
