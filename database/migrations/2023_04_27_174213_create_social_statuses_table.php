<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('birth_certificate')->nullable();
            $table->string('death_certificate')->nullable();
            $table->string('certificate_of_guardianship')->nullable();
            $table->string('identification_card')->nullable();
            $table->string('certificate_of_training')->nullable();
            $table->string('certificate_confirming_disability')->nullable();
            $table->string('certificate_con')->nullable();
            $table->string('id_parents')->nullable();
            $table->string('bc_family_members')->nullable();
            $table->string('gold_or_silver_book')->nullable();
            $table->string('other_students')->nullable();
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
        Schema::dropIfExists('social_statuses');
    }
}
