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
        Schema::create('complectation_furniture_and_accessories', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->integer('office_visitor_chair')->nullable(true);
            $table->integer('head_desk')->nullable(true);
            $table->integer('head_desk_console')->nullable(true);
            $table->integer('corner_office_desk')->nullable(true);
            $table->integer('office_armchair')->nullable(true);
            $table->integer('office_wardrobe')->nullable(true);
            $table->integer('semi_closed_filing_cabinet')->nullable(true);
            $table->integer('document_rack')->nullable(true);
            $table->integer('head_armchair')->nullable(true);
            $table->integer('office_pedestal')->nullable(true);
            $table->integer('conference_room_modular_table')->nullable(true);
            $table->integer('negotiations_oval_table')->nullable(true);
            $table->integer('triple_eco_leather_office_sofa')->nullable(true);
            $table->integer('modular_dining_table')->nullable(true);
            $table->integer('kitchen_chair')->nullable(true);
            $table->integer('workers_dormitory_wardrobe')->nullable(true);
            $table->integer('workers_dormitory_desk')->nullable(true);
            $table->integer('workers_dormitory_bedside_pedestal')->nullable(true);
            $table->integer('single_tier_metal_bed')->nullable(true);
            $table->integer('double_tier_metal_bed')->nullable(true);
            $table->integer('wooden_single_bed')->nullable(true);
            $table->integer('wooden_double_bed')->nullable(true);
            $table->integer('sleeping_accessories_set')->nullable(true);
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
        Schema::dropIfExists('complectation_furniture_and_accessories');
    }
};
