<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('register_no');
            $table->string('register_date');
            $table->string('applicant');
            $table->foreignid('education_id')->constrained('educations')->onUpdate('cascade');
            $table->integer('age');
            $table->integer('applicant_contact');
            $table->foreignid('permanent_province')->constrained('provinces')->onUpdate('cascade');
            $table->foreignid('permanent_district')->constrained('districts')->onUpdate('cascade');
            $table->foreignid('permanent_municipality')->constrained('municipalities')->onUpdate('cascade');
            $table->integer('permanent_ward_no');
            $table->string('suspect_name');
            $table->foreignid('crime_id')->constrained('crimes')->onUpdate('cascade');
            $table->foreignid('cheat_id')->constrained('cheats')->onUpdate('cascade');
            $table->string('cheat_contact_number');
            $table->foreignid('bank_type_id')->constrained()->onUpdate('cascade');
            $table->foreignid('bank_id')->constrained()->onUpdate('cascade');
            $table->string('bank_account_no');
            $table->string('total_scam_amount');
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
        Schema::dropIfExists('records');
    }
}
