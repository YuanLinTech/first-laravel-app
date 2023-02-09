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
            // Add the 'user_role_id' column to the 'users' table that references the primary key ('id' column) of the 'user_roles' table
            $table->foreignId('user_role_id')
            ->constrained('user_roles')
            ->restrictOnUpdate() // Updates to the foreign key should be restricted
            ->restrictOnDelete(); // Deletions of the foreign key should be restricted
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
            // Drop the "user_role_id" foreign key in the "users" table
            $table->dropForeign('users_user_role_id_foreign');
        });
    }
};