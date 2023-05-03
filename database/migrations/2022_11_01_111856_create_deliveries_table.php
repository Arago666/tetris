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
        Schema::create('delivery', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->boolean('floor_panels_in_container_delivery')->nullable(true);
            $table->integer('irrevocable_20ft_container_count')->nullable(true);
            $table->integer('irrevocable_40ft_container_count')->nullable(true);
            $table->string('special_packaging')->nullable(true);
            $table->double('from_kaluga_distance')->nullable(true);
            $table->double('from_penza_distance')->nullable(true);
            $table->string('delivery_from_factory')->nullable(true);
            $table->integer('transshipment_point_count')->nullable(true);
            $table->boolean('seasonality_dependence')->nullable(true);
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
        Schema::dropIfExists('delivery');
    }
};
