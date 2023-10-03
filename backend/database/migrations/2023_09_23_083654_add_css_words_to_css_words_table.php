<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCssWordsToCssWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('css_words', function (Blueprint $table) {
            $table->string('css_words')->nullable();
            $table->string('css_words_mean')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('css_words', function (Blueprint $table) {
            $table->dropColumn('words');
            $table->dropColumn('words_mean');
        });
    }
}
