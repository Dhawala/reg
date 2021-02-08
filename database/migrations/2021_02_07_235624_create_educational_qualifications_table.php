<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationalQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educational_qualifications', function (Blueprint $table) {
            $table->id();
            $table->integer('applicant_id')->unsigned();
            $table->foreign('applicant_id')->references('id')
                ->on('applicants')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('degree_title',100);
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('id')
                ->on('degree_classes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('university_name',100);
            $table->date('graduation_date');
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
        Schema::dropIfExists('educational_qualifications');
    }
}
