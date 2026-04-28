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
        //the colums for the service request
        Schema::create('service_request', function (Blueprint $table)
        {
            $table -> increments('request_id');
            $table -> string('tracking_code') -> nullable();
            $table -> unsignedInteger('user_id');
            $table -> text('description') -> nullable();
            $table -> unsignedInteger('assigned_officer_id');
            $table -> timestamps();

        });
      
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        schema::dropIfExists('service_request');
    }
};
