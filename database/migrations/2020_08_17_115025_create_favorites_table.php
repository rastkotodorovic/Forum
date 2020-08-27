<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoritables', function (Blueprint $table) {
            $table->foreignId('user_id');
            $table->foreignId('favoritable_id');
            $table->string('favoritable_type', 50);

            $table->unique(['user_id', 'favoritable_id', 'favoritable_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorites');
    }
}
