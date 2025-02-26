<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {


        DB::statement('CREATE TABLE admin () INHERITS (users);');
    }

   
    public function down(): void
    {
        DB::statement('DROP TABLE IF EXISTS admin;');
    }
};