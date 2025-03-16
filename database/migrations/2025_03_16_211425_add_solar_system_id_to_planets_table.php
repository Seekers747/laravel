<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('planets', function (Blueprint $table) {
            $table->foreignId('solar_system_id')->constrained('solar_systems')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::table('planets', function (Blueprint $table) {
            $table->dropColumn('solar_system_id');
        });
    }
    
};
