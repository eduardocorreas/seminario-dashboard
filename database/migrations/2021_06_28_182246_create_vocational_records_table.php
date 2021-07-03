<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVocationalRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vocational_records', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');

            $table->string('borndate')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('number')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();

            $table->string('father_name')->nullable();
            $table->integer('father_age')->default(0);
            $table->integer('father_alive')->default(0);
            $table->string('father_profession')->nullable();
            $table->string('mother_name')->nullable();
            $table->integer('mother_age')->default(0);
            $table->integer('mother_alive')->default(0);
            $table->string('mother_profession')->nullable();
            $table->integer('total_brothers')->default(0);
            $table->integer('total_sisters')->default(0);
            $table->integer('family_economic_situation')->default(0); // 1 - insuficiente / 2 - boa / 3 - media
            $table->integer('family_praying_together')->default(0);
            $table->string('parents_religion', 255)->nullable();

            $table->text('family_description')->nullable();
            $table->text('live_description')->nullable();
            $table->text('health_description')->nullable();
            $table->text('study_description')->nullable();
            $table->text('social_description')->nullable();
            $table->text('praying_description')->nullable();
            $table->text('priest_desire_description')->nullable();
            $table->text('missionary_description')->nullable();

            $table->integer('baptized')->default(0);
            $table->integer('first_eucharist')->default(0);
            $table->integer('chrism')->default(0);

            $table->text('notes')->nullable();

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
        Schema::dropIfExists('vocational_records');
    }
}
