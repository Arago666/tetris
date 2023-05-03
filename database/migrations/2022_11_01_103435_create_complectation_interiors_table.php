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
        Schema::create('complectation_interiors', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->integer('room_in_building_count')->nullable(true);
            $table->integer('inside_stair')->nullable(true);
            $table->integer('stainless_steel_stair_railing')->nullable(true);
            $table->string('main_room_finishing_ceiling')->nullable(true);
            $table->string('corridor_finishing_ceiling')->nullable(true);
            $table->string('wet_and_wet_areas_finishing_ceiling')->nullable(true);
            $table->double('sp_internal_partitions_length')->nullable(true);
            $table->integer('sp_internal_partitions_is_double')->nullable(true);
            $table->integer('sp_internal_partitions_thickness')->nullable(true);
            $table->integer('mdf_single_floor_door')->nullable(true);
            $table->integer('mdf_double_floor_door')->nullable(true);
            $table->integer('single_floor_metal_door')->nullable(true);
            $table->integer('double_floor_metal_door')->nullable(true);
            $table->integer('waterproof_door')->nullable(true);
            $table->integer('pvc_window_door')->nullable(true);
            $table->integer('window')->nullable(true);
            $table->string('wall')->nullable(true);
            $table->double('laminate_floor_area')->nullable(true);
            $table->integer('wet_and_wet_areas')->nullable(true);
            $table->integer('bc_with_wet_common_room_count')->nullable(true);
            $table->integer('bc_with_wet_room_count')->nullable(true);
            $table->integer('wet_individual_room_count')->nullable(true);
            $table->string('wet_room_floor_covering')->nullable(true);
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
        Schema::dropIfExists('complectation_interiors');
    }
};
