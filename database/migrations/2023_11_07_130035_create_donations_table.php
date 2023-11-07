<?php

use App\Models\Allotment;
use App\Models\Faculty;
use App\Models\WorkUnit;
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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->enum('status', ['student', 'lecturer', 'alumni', 'public']);
            $table->foreignIdFor(Faculty::class)->nullable()->constrained()->default(null);
            $table->foreignIdFor(WorkUnit::class)->nullable()->constrained()->default(null);
            $table->foreignIdFor(Allotment::class)->nullable()->constrained()->default(null);
            $table->longText('address');
            $table->string('donation_target');
            $table->longText('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
