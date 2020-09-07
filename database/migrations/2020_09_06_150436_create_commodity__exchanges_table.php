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
        Schema::create('commodity_exchanges', function (Blueprint $table) {
            $table->id();
            $table->String('ce_name');
            $table->String('ce_address');
            $table->String('ce_phone1');
            $table->String('ce_phone2');
            $table->String('ce_email');
            $table->String('ce_photopath');
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
