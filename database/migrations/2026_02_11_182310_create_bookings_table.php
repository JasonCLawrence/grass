<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();

            $table->string('customer_name');
            $table->string('customer_email');

            $table->string('service');
            $table->string('frequency'); // one_time | monthly

            $table->date('job_date');

            $table->string('stripe_price_id')->nullable();
            $table->string('stripe_session_id')->nullable();

            $table->enum('payment_status', [
                'pending',
                'paid',
                'cancelled',
                'failed'
            ])->default('pending');

            $table->timestamp('paid_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
