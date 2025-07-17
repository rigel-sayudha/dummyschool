<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->dropColumn(['email', 'no_telp']);
        });
    }
    public function down(): void
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->string('email')->unique()->nullable();
            $table->string('no_telp')->nullable();
        });
    }
};
