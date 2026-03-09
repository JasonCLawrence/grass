<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->decimal('latitude', 10, 7)->nullable()->after('id');  // store up to 6 decimals
            $table->decimal('longitude', 10, 7)->nullable()->after('latitude');
            $table->string('lot_number')->nullable()->after('longitude');
        });
    }

    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn(['latitude', 'longitude', 'lot_number']);
        });
    }
};
