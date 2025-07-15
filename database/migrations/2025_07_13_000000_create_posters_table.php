<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('posters', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('posters');
    }
};
