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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('');
            $table->enum('state_news',['on','off'])->default('off');
            $table->enum('state_aboutAs',['on','off'])->default('off');
            $table->enum('state_slides',['on','off'])->default('off');
            $table->text('logo_footer')->nullable();
            $table->text('about_as_image')->nullable();
            $table->text('about_as_text')->nullable();
            $table->text('contact_us')->nullable();
            $table->text('privacy_policy')->nullable();
            $table->text('dmca')->nullable();
            $table->text('cover_match')->nullable();
            $table->text('logo_header')->nullable();
            $table->text('favicon')->nullable();
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
        Schema::dropIfExists('general_settings');
    }
};
