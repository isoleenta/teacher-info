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
        Schema::create('docs', function (Blueprint $table) {
            $table->id();
            $table->string('higher_education_doc');
            $table->string('scientific_degree_doc')->nullable();
            $table->string('professional_experience_doc')->nullable();
            $table->string('dessert_management_doc')->nullable();
            $table->string('1_at_least_five_publications')->nullable();
            $table->string('2_having_patents')->nullable();
            $table->string('3_having_published_textbook_or_study_guide_monograph')->nullable();
            $table->string('4_having_published_textbook_or_study_guide')->nullable();
            $table->string('5_dissertation_for_scientific_degree')->nullable();
            $table->string('6_counseling_applicant')->nullable();
            $table->string('7_participation_in_certification_of_scientific_personnel')->nullable();
            $table->string('8_performing_functions_of_supervisor')->nullable();
            $table->string('9_work_as_member_of_expert_council')->nullable();
            $table->string('10_Participation_in_international_educational_projects')->nullable();
            $table->string('11_scientific_consulting_of_enterprises')->nullable();
            $table->string('12_having_popular_science_publications')->nullable();
            $table->string('13_conducting_training_sessions_in_foreign_lang')->nullable();
            $table->string('14_mentoring_student_who_won_prize')->nullable();
            $table->string('15_mentoring_schoolchild_who_won_prize')->nullable();
            $table->string('16_having_status_of_combatant')->nullable();
            $table->string('17_Participation_in_international_peacekeeping_operations')->nullable();
            $table->string('18_participation_in_international_military_exercises')->nullable();
            $table->string('19_participation_in_professional_associations')->nullable();
            $table->string('20_at_least_five_years_of_practical_experience_in_specialty')->nullable();
            $table->string('additional_files')->nullable();
            $table->foreignId('user_id');
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
        Schema::dropIfExists('docs');
    }
};
