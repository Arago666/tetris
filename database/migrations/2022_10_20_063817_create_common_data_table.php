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
        Schema::create('common_data', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->string('building_purpose')->nullable(true);
            $table->string('block_size')->nullable(true);
            $table->string('building_configuration')->nullable(true);
            $table->integer('floor_count')->nullable(true);
            $table->integer('block_in_one_row_count')->nullable(true);
            $table->string('overlap_type')->nullable(true);
            $table->string('corridor_width')->nullable(true);
            $table->string('clear_ceiling_height')->nullable(true);
            $table->string('climatic_region')->nullable(true);
            $table->string('region_seismicity')->nullable(true);
            $table->string('climatic_zone')->nullable(true);
            $table->string('fire_resistance_degree')->nullable(true);
            $table->string('constructive_fire_hazard_class')->nullable(true);
            $table->string('functional_fire_hazard_class')->nullable(true);
            $table->string('building_responsibility_level')->nullable(true);
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
        Schema::dropIfExists('common_data');
    }
};
