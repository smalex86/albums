<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbums extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('Название альбома');
            $table->string('title')->comment('Выводимое название альбома');
            $table->string('cloud_folder')->nullable()
                    ->comment('Папка с альбомом в облаке');
            $table->string('local_folder')->nullable()
                    ->comment('Папка с альбомом на локальной машине сервера');
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
        Schema::dropIfExists('albums');
    }
}
