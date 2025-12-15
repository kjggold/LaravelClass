<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */

    //creating table with up method
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();// table has primary key =>default
            $table->string('title');
            $table->text('body');
            $table->integer('category_id');
            $table->timestamps();//created app updated app date
        });
    }

    /**
     * Reverse the migrations.
     */
    //Droping tables with down method
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
