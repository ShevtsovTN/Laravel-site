<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsEsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings_es', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('listing_id')->unique();  // id объявления
            $table->text('title');                       // Название
            $table->string('description_title', 100);
            $table->longText('description');             // Описание
            $table->string('address', 100);       // Адрес
            $table->float('amount',7);             // Стоимость
            $table->float('area', 3, 2);    // Площадь
            $table->integer('rooms');                    // Кол-во комнат
            $table->integer('baths');                    // Кол-во ванных комнат
            $table->json('photos');                      // Строка с фотографиями
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
        Schema::dropIfExists('listings_es');
    }
}
