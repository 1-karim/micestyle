<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->id('id');
            $table->string('name', 30)->nullable();
            $table->string('email')->nullable();
            $table->string('logo')->nullable();
            $table->integer('ban_status')->default(0);// 0 = not blocked / 1 = blocked
            $table->string('address', 30)->nullable();
            $table->integer('phone')->nullable();
            $table->decimal('longitude', 11,7);
            $table->decimal('latitude', 11,7);
            $table->bigInteger('likes')->default(0);
            $table->unsignedBigInteger('venue_category_id')->nullable();;
            $table->timestamps();
        });

        Schema::create('venue_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
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
        
        Schema::dropIfExists('venues');
        Schema::dropIfExists('venue_categories');

    }
}
