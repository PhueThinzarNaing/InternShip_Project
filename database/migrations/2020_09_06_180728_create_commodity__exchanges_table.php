<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommodityExchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commodity__exchanges', function (Blueprint $table) {
            $table->id();
            $table->String('ce_name');
            $table->String('ce_address');
            $table->String('phno1');
            $table->String('phno2');
            $table->String('email');
            $table->String('Image');
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
        Schema::dropIfExists('commodity__exchanges');
    }
}
