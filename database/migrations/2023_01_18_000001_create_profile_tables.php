<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('alt', 255)->nullable();
            $table->string('title', 255)->nullable();
            $table->string('path', 255);
            $table->timestamps();
        });

        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->foreignId('cover_photo_id')->index()->nullable();
            $table->foreign('cover_photo_id')
                ->on('photos')
                ->references('id')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->timestamps();
        });

        Schema::create('photos_albums', function (Blueprint $table) {
            $table->id();
            $table->foreignId('album_id')->index();
            $table->foreign('album_id')
                ->references('id')
                ->on('albums')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('photo_id')->index();
            $table->foreign('photo_id')
                ->on('photos')
                ->references('id')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
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
        Schema::dropIfExists('photos_albums');
        Schema::dropIfExists('albums');
        Schema::dropIfExists('photos');
    }
};
