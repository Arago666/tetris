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
        Schema::create('technical_details', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->double('building_perimeter')->nullable(true);
            $table->integer('long_side_bc_joints_count')->nullable(true);
            $table->integer('short_side_bc_joints_count')->nullable(true);
            $table->integer('long_side_wet_zone_bc_joints_count')->nullable(true);
            $table->integer('inside_bc_width_partition_count')->nullable(true);
            $table->integer('without_rack_corridor_partition_count')->nullable(true);
            $table->integer('with_rack_corridor_partition_count')->nullable(true);
            $table->integer('without_abutment_corridor_partition_count')->nullable(true);
            $table->integer('without_rack_exterior_corner_count')->nullable(true);
            $table->integer('with_rack_exterior_corner_count')->nullable(true);
            $table->integer('without_rack_interior_corner_count')->nullable(true);
            $table->integer('with_rack_interior_corner_count')->nullable(true);
            $table->integer('wall_adjacent_column_count')->nullable(true);
            $table->integer('freestanding_adjacent_column_count')->nullable(true);
            $table->double('finishing_perimeter')->nullable(true);
            $table->double('wet_room_without_razuklonki_area')->nullable(true);
            $table->double('wet_room_with_razuklonki_area')->nullable(true);
            $table->double('wet_room_perimeter')->nullable(true);
            $table->integer('shower_tray_without_partition')->nullable(true);
            $table->integer('shower_tray_with_one_partition')->nullable(true);
            $table->integer('shower_tray_with_two_partition')->nullable(true);
            $table->integer('shower_tray_with_three_partition')->nullable(true);
            $table->integer('flight_delivery_count')->nullable(true);
            $table->double('supplier_to_object_distance')->nullable(true);
            $table->integer('general_construction_worker_count')->nullable(true);
            $table->integer('working_electricians_count')->nullable(true);
            $table->integer('working_plumbers_count')->nullable(true);
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
        Schema::dropIfExists('technical_details');
    }
};
