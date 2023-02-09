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
        Schema::table('users', function (Blueprint $table) {
            // Add the "user_role" column to the "users" table
            $table->string('user_role');
            // Rename the "name" column to the "username" column
            $table->renameColumn("name", "username");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop the "user_role" column from the "users" table
            $table->dropColumn('user_role');
            // Rename the "username" column to the "name" column
            $table->renameColumn("username", "name");
        });
    }
};