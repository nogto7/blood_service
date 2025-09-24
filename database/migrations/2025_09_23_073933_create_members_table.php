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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('register_number', 10)->unique(); // Регистрийн дугаар
            $table->string('lastname', 50);                  // Овог
            $table->string('firstname', 50);                 // Нэр
            $table->string('workplace', 100)->nullable();    // Ажлын газар
            $table->string('position', 100)->nullable();     // Албан тушаал
            $table->string('email', 100)->unique();          // И-мэйл
            $table->string('phone', 20);                     // Утасны дугаар
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();

            // Laravel-н заавал байх баганууд
            $table->timestamp('email_verified_at')->nullable();
            // $table->string('password')->nullable(); // нууц үг оруулах бол nullable-гүй болгож болно
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
