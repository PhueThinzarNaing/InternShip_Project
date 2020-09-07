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
            $table->string('ce_name');
            $table->string('ce_address');
            $table->string('ce_phone1');
            $table->string('ce_phone2');
            $table->string('ce_email');
            $table->string('ce_photopath');
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
        Schema::dropIfExists('commodity_exchanges');
    }
}
