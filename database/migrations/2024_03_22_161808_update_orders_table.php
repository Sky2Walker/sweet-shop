<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('surname')->nullable();
            $table->string('adress')->nullable();
            $table->string('secondAdress')->nullable();
            $table->string('town')->nullable();
            $table->string('oblast')->nullable();
            $table->string('postalcode')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('total')->default(0);



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('count', 'surname','adress' ,'secondAdress','town',  'oblast', 'postalcode','email', 'phone','total');


        });
    }
};
