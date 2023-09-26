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
            $table->date('register_date');
            $table->string('applicant');
            $table->foreignid('education_id')->constrained('educations');
            $table->integer('age');
            $table->integer('applicant_contact');
            $table->string('applicant_gender');
            $table->foreignid('permanent_province')->constrained('provinces');
            $table->foreignid('permanent_district')->constrained('districts');
            $table->foreignid('permanent_municipality')->constrained('municipalities');
            $table->integer('permanent_ward_no');
            $table->foreignid('temporary_province')->constrained('provinces');
            $table->foreignid('temporary_district')->constrained('districts');
            $table->foreignid('temporary_municipality')->constrained('municipalities');
            $table->integer('temporary_ward_no');
            $table->foreignid('crime_id')->constrained('crimes');
            $table->foreignid('cheat_id')->constrained('cheats');
            $table->string('suspect_name');
            $table->string('suspect_contact_number');
//            $table->foreignid('bank_type_id')->constrained();
//            $table->foreignid('bank_id')->constrained();
//            $table->string('bank_account_no');
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
