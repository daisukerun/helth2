<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Helth extends Migration
{
  
    public function up()
    {
        Schema::create('helth2',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('zentai');
            $table->string('tairyokujikann1');
            $table->string('tairyokujikann2');
            $table->timestamps();
        }); 
        
    }

    public function down()
    {
        Schema::dropIfExists('helth2');
    }
}
