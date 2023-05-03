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
        Schema::create('designing', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->boolean('architectural_solution')->nullable(true);
            $table->boolean('constructive_solution')->nullable(true);
            $table->boolean('internal_power_electrical_equipment')->nullable(true);
            $table->boolean('internal_water_supply_systems')->nullable(true);
            $table->boolean('internal_heating_systems')->nullable(true);
            $table->boolean('internal_ventilation_system')->nullable(true);
            $table->boolean('fire_alarm_system')->nullable(true);
            $table->boolean('structured_cabling_system')->nullable(true);
            $table->boolean('lan_ip_telephony')->nullable(true);
            $table->boolean('iptv_video_surveillance')->nullable(true);
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
        Schema::dropIfExists('designing');
    }
};
