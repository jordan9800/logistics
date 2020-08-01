<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id');
            $table->string('line_one');
            $table->string('line_two')->nullable();
            $table->string('landmark');
            $table->string('postal_code', 100);
            $table->foreignId('city_id');
            $table->enum('type', ['current', 'permanent']);
            $table->timestamps();

            $table->foreign('employee_id')->references('id')
                  ->on('employees')->onDelete('cascade');
            $table->foreign('city_id')->references('id')
                  ->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_addresses');
    }
}
