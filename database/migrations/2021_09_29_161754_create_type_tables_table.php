<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_tables', function (Blueprint $table) {
            $table->bigInteger('type_id');
            $table->string('type_name');
            $table->bigInteger('version_id');
            $table->timestamps();


            $table->foreign('type_id')
                  ->references('version_id')
                  ->on('version_tables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_tables');
    }
}
