<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('one_title');
            $table->string('one_index');
            $table->string('one_street');
            $table->string('one_phone');
            $table->string('one_email');
            $table->string('two_title');
            $table->string('two_prodazi_1_phone');
            $table->string('two_prodazi_2_phone');
            $table->string('two_snabzenie_1_phone');
            $table->string('two_snabzenie_2_phone');
            $table->string('two_technologi_1_phone');
            $table->string('tri_title');
            $table->string('tri_phone');
            $table->string('four_title');
            $table->string('four_phone');
            $table->text('map');
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
        Schema::dropIfExists('contacts');
    }
}
