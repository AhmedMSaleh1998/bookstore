<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // method -> primary key
        // name, desc, img (nullable) 
        // method -> timestamps (created_at, updated_at)
        
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->text('desc');
            $table->string('img', 50)->nullable();
            $table->foreignId('cat_id')->constrained();
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
        Schema::dropIfExists('books');
    }
}
