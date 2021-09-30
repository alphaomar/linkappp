<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_tables', function (Blueprint $table) {
            $table->bigIncrements('link_id');
            $table->string('link_name');
            $table->string('url');
            $table->string('page_name');
            

            $table->timestamps();
            $table->foreign('link_id')
                  ->references('page_id','type_id')
                  ->on('page_tables','type_tables');

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('link_tables');
    }
}
