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
        //the column in the request attachment table
        Schema::create('request_attachment', function (Blueprint $table)
        {
            $table -> unsignedBigInteger('attachment_id') ->nullable();
            $table -> unsignedBigInteger('request_id') ->nullable();
            $table -> string('filename') ->nullable();
            $table ->  string('file_url') -> nullable();
            $table -> unsignedBigInteger('uploaded_by')  ->nullable();
            $table -> datetime('uploaded_at') -> nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //query to delete the databaseif it exists
        Schema::dropIfExists('request_attachment');
    }
};
