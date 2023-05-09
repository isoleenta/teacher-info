<?php

namespace App\Nova;

use App\Nova\Fields\AchievementsFile;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;

class Doc extends Resource
{
    public static $model = \App\Models\Doc::class;

    public static $displayInNavigation = false;

    public static function label()
    {
        return __('Docs');
    }

    public static function singularLabel()
    {
        return __('Doc');
    }

    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            File::make(__('Higher education doc'), 'higher_education_doc')
                ->path('docs')
                ->acceptedTypes('.pdf,.doc,.docx')
                ->rules('required', 'file', 'mimes:pdf,doc,docx', 'max:'. 10 * 1024)
                ->deletable(false)
                ->prunable(),

            AchievementsFile::make(__('Scientific degree doc'), 'scientific_degree_doc'),
            AchievementsFile::make(__('Professional experience doc'), 'professional_experience_doc'),
            AchievementsFile::make(__('Dessert management doc'), 'dessert_management_doc'),
            AchievementsFile::make(__('At least five publications'), '1_at_least_five_publications'),
            AchievementsFile::make(__('Having patents'), '2_having_patents'),
            AchievementsFile::make(__('Having published textbook or study guide monograph'), '3_having_published_textbook_or_study_guide_monograph'),
            AchievementsFile::make(__('Having published textbook or study guide'), '4_having_published_textbook_or_study_guide'),
            AchievementsFile::make(__('Dissertation for scientific degree'), '5_dissertation_for_scientific_degree'),
            AchievementsFile::make(__('Counseling applicant'), '6_counseling_applicant'),
            AchievementsFile::make(__('Participation in certification of scientific personnel'), '7_participation_in_certification_of_scientific_personnel'),
            AchievementsFile::make(__('Performing functions of supervisor'), '8_performing_functions_of_supervisor'),
            AchievementsFile::make(__('Work as member of expert council'), '9_work_as_member_of_expert_council'),
            AchievementsFile::make(__('Participation in international educational projects'), '10_Participation_in_international_educational_projects'),
            AchievementsFile::make(__('Scientific consulting of enterprises'), '11_scientific_consulting_of_enterprises'),
            AchievementsFile::make(__('Having popular science publications'), '12_having_popular_science_publications'),
            AchievementsFile::make(__('Conducting training sessions in foreign lang'), '13_conducting_training_sessions_in_foreign_lang'),
            AchievementsFile::make(__('Mentoring student who won prize'), '14_mentoring_student_who_won_prize'),
            AchievementsFile::make(__('Mentoring schoolchild who won prize'), '15_mentoring_schoolchild_who_won_prize'),
            AchievementsFile::make(__('Having status of combatant'), '16_having_status_of_combatant'),
            AchievementsFile::make(__('Participation in international peacekeeping operations'), '17_Participation_in_international_peacekeeping_operations'),
            AchievementsFile::make(__('Participation in international military exercises'), '18_participation_in_international_military_exercises'),
            AchievementsFile::make(__('Participation in professional associations'), '19_participation_in_professional_associations'),
            AchievementsFile::make(__('At least five years of practical experience in specialty'), '20_at_least_five_years_of_practical_experience_in_specialty'),

            File::make(__('Additional archive with docs'), 'additional_files')
                ->path('docs')
                ->acceptedTypes('.rar,.zip')
                ->rules('file', 'mimes:rar,zip', 'max:'. 100 * 1024)
                ->deletable(false)
                ->prunable(),

            BelongsTo::make(__('User'), 'user', User::class),
        ];
    }
}
