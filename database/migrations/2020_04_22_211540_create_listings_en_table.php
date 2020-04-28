<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsEnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings_en', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('listing_id')->unique();  // id объявления
            $table->text('title');                       // Название
            $table->string('description_title', 100);
            $table->longText('description');             // Описание
            $table->string('address', 100);       // Адрес
            $table->float('amount',9);             // Стоимость
            $table->float('area', 5, 2);    // Площадь
            $table->integer('rooms');                    // Кол-во комнат
            $table->integer('baths');                    // Кол-во ванных комнат
            $table->json('photos')->nullable();                      // Строка с фотографиями
            $table->json('options');                     // Строка с опциями
            $table->string('type', 9);            // Аренда или Продажа
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
        Schema::dropIfExists('listings_en');
    }
}
