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
        Schema::create('transaction_detail_gardens', function (Blueprint $table) {
            $table->unsignedBigInteger('transaction_header_id');
            $table->foreign('transaction_header_id')->references('id')->on('transaction_headers')->onDelete('cascade');
            $table->unsignedBigInteger('garden_offer_id');
            $table->foreign('garden_offer_id')->references('id')->on('garden_offers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_detail_gardens');
    }
};
