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
        Schema::create('complectation_exteriors', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->string('external_wall_mounting_method')->nullable(true);
            $table->string('external_wall_thickness')->nullable(true);
            $table->integer('fire_stair_count')->nullable(true);
            $table->integer('input_groups_count')->nullable(true);
            $table->string('plinth')->nullable(true);
            $table->boolean('drain')->nullable(true);
            $table->boolean('snow_retention')->nullable(true);
            $table->integer('single_floor_metal_door')->nullable(true);
            $table->integer('double_floor_metal_door')->nullable(true);
            $table->integer('main_double_leaf_window')->nullable(true);
            $table->integer('main_single_leaf_window')->nullable(true);
            $table->string('main_window')->nullable(true);
            $table->integer('bathroom_window')->nullable(true);
            $table->double('pvc_stained_glass')->nullable(true);
            $table->double('aluminum_stained_glass')->nullable(true);
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
        Schema::dropIfExists('complectation_exteriors');
    }
};
