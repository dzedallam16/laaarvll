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
        Schema::create('table_vendeurs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom_v',50);
            $table->string('prenom_v',50);
            $table->integer('num_v');
            $table->string('email_v',60);
            $table->string('mdps_v',50);
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_vendeurs');
    }
};
