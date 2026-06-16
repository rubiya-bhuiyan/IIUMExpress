<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('payment_method')->nullable()->after('user_id');
            $table->decimal('subtotal', 10, 2)->default(0)->after('payment_method');
            $table->decimal('delivery_fee', 10, 2)->default(2.00)->after('subtotal');
            $table->decimal('total_amount', 10, 2)->change();
            $table->string('status')->default('Pending')->change();
        });
    }

    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['payment_method', 'subtotal', 'delivery_fee']);
        });
    }
};
