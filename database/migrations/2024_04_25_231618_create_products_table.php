<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',45);
            $table->string('descripcion',45)->nullable();
            $table->decimal('precio_compre',10,2)->nullable();
            $table->decimal('precio_venta',10,2);
            $table->unsignedInteger('stock');
            $table->unsignedInteger('stock_minimo')->nullable();
            $table->string('codigo_barras')->nullable();
            $table->date('fecha_vencimiento');
            $table->boolean('active')->default(true);
            $table->foreignId('category_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
