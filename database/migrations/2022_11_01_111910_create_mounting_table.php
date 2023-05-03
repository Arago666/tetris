<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mounting', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->double('from_moscow_distance')->nullable(true);
            $table->string('work_weather_condition')->nullable(true);
            $table->string('tool_return')->nullable(true);
            $table->string('foundation')->nullable(true);
            $table->string('crane_with_crane_operator')->nullable(true);
            $table->string('construction_debris')->nullable(true);
            $table->string('platform_for_material')->nullable(true);
            $table->string('access_road')->nullable(true);
            $table->string('electricity')->nullable(true);
            $table->string('technical_water_and_toilet')->nullable(true);
            $table->string('food_is_provided_by_customer')->nullable(true);
            $table->string('meals_within_walking_distance')->nullable(true);
            $table->string('accommodation_provided_by_customer')->nullable(true);
            $table->string('accommodation_within_walking_distance')->nullable(true);
            $table->string('bath_and_laundry_service')->nullable(true);
            $table->string('limited_working_day')->nullable(true);
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
        Schema::dropIfExists('mounting');
    }
};
