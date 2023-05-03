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
        Schema::create('engineering_systems', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->boolean('plumbing')->nullable(true);
            $table->string('hot_water_supply')->nullable(true);
            $table->integer('individual_water_heater')->nullable(true);
            $table->integer('common_water_heater')->nullable(true);
            $table->integer('self_assembled_shower_cabin')->nullable(true);
            $table->integer('purchased_assembled_shower_cabin')->nullable(true);
            $table->integer('washbasin')->nullable(true);
            $table->integer('toilet_bowl')->nullable(true);
            $table->integer('urinal')->nullable(true);
            $table->boolean('release_strapping_under_building')->nullable(true);
            $table->boolean('pipe_insulation_under_building')->nullable(true);
            $table->boolean('electric')->nullable(true);
            $table->string('building_power_supply_reliability_category')->nullable(true);
            $table->integer('socket')->nullable(true);
            $table->integer('switche')->nullable(true);
            $table->integer('fixture')->nullable(true);
            $table->boolean('heating')->nullable(true);
            $table->string('heating_type')->nullable(true);
            $table->integer('heat_curtain')->nullable(true);
            $table->integer('heating_device_count')->nullable(true);
            $table->boolean('ventilation')->nullable(true);
            $table->integer('conditioner')->nullable(true);
            $table->string('shared_bathroom_ventilation_type')->nullable(true);
            $table->string('individual_bathroom_ventilation_type')->nullable(true);
            $table->boolean('fire_system')->nullable(true);
            $table->boolean('alarm_system')->nullable(true);
            $table->boolean('internal_water_supply')->nullable(true);
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
        Schema::dropIfExists('engineering_systems');
    }
};
