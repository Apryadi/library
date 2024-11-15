<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('newspapers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('publisher', ['Kompas', 'Tribun Timur', 'Fajar']);
            $table->date('publication_date');
            $table->boolean('in_warehouse')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('newspapers');
    }
}; 