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
        Schema::table('flights', function (Blueprint $table) {
            $table->string('Flight code');
            $table->string('Departure');
            $table->dateTimeTz('Scheduled');
            $table->dateTimeTz('ETA');
            $table->char('Status', 3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flights', function (Blueprint $table) {
             // When rolling back, we have to restore the column to its previous state.
            $table->dropColumn(['Flight code', 'Departure', 'Scheduled', 'ETA', 'Status']);
        });
    }
};