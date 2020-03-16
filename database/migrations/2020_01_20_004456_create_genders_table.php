<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genders', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('name');
            $table->timestamps();
        }); 

        // $initialData = array(
        //     array('name'=>'male'),
        //     array('name'=>'femaele'),
        //     array('name'=>'nonbinary'),
        //     //...
        // );
        
        // DB::table('genders')->insert($initialData);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genders');
    }
}
