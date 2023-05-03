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
        Schema::create('complectation_color_solutions', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->string('metal_frame_floor_panels')->nullable(true);
            $table->string('metal_frame_racks')->nullable(true);
            $table->string('external_stair')->nullable(true);
            $table->string('entrance_groups_stair_support_railing')->nullable(true);
            $table->string('entrance_groups_visors')->nullable(true);
            $table->string('roof_covering_of_gable')->nullable(true);
            $table->string('roofing_drain_snow_retention')->nullable(true);
            $table->string('exterior_metal_doors')->nullable(true);
            $table->string('exterior_window')->nullable(true);
            $table->string('exterior_plinth')->nullable(true);
            $table->string('exterior_wall_sp')->nullable(true);
            $table->string('interior_wall_sp')->nullable(true);
            $table->string('interior_interior_door')->nullable(true);
            $table->string('interior_sanitary_partition')->nullable(true);
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
        Schema::dropIfExists('complectation_color_solutions');
    }
};
