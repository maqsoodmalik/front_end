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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('prod_title',255);
            $table->string('slug',255);
            $table->string('prod_sku',255);
            $table->string('prod_qty',255);
            $table->string('prod_fabric',255);
            $table->string('prod_color',255);
            $table->string('prod_sizes',255);
            $table->string('local_shipping',255);
            $table->string('international_shipping',255);
            $table->string('disclaimer',255);
            $table->text('short_description');
            $table->text('long_description');
            $table->decimal('pkr_price', 8,2);
            $table->decimal('uae_price', 8,2);
            $table->decimal('qatari_price', 8,2);
            $table->decimal('saudi_price', 8,2);
            $table->decimal('us_price', 8,2);
            $table->decimal('uk_price', 8,2);
            $table->decimal('cad_price', 8,2);
            $table->decimal('euro_price', 8,2);
            $table->integer('discount')->default(0);
            $table->decimal('net_price', 8,2)->nullable();
            $table->enum('publish',['Yes', 'No'])->default('No');
            $table->enum('status',['Approved','Rejected'])->default('Rejected');
            $table->integer('is_recommend')->comment('0=No, 1=Yes')->default(0);
            $table->softDeletes();
            $table->unique(['prod_title','slug','prod_sku','deleted_at']);
            $table->integer('created_by')->default(0);
            $table->integer('updated_by')->default(0);
            $table->integer('deleted_by')->default(0);
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
        Schema::dropIfExists('products');
    }
};
