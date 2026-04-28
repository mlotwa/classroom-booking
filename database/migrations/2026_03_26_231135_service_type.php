<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //the colums for the service type table
        Schema::create('service_type',function (Blueprint $table)
        
        {
            $table -> string('service_type') ->  nullable();
            $table -> string('name') -> nullable();
         
        }
        
        
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //query to drop the table if exists
        Schema::dropIfExists('service_type');
    }
};
