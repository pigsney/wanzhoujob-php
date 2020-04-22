<?php


namespace App\Http\Requests;


use App\Enums\Education;
use App\Enums\EducationalType;
use App\Enums\JobStatus;
use App\Enums\LanguageLevel;
use App\Enums\LanguageType;
use App\Enums\MaritalStatus;
use App\Enums\Sex;
use App\Enums\SkillLevel;
use App\Enums\Theme;
use App\Enums\WorkExperience;
use Illuminate\Foundation\Http\FormRequest;

class ResumeRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    public function rules(){
        $rules = [];
        $educationalLevel = Education::getValues();
        $ruleEducationalLevel = $educationalLevel->take(-($educationalLevel->count()-2))->implode(',');
        switch ($this->method()):
            case self::METHOD_POST:
                $rules = [
                    'name' => 'required|string|max:10',
                    'sex' => sprintf('required|in:%s',Sex::getValues()->take(2)->implode(',')),
                    'birthday' => 'required|date_format:y-m',
                    'introduce' => 'nullable|string',
                    'high' => 'nullable|int|size:3',
                    'phone' => 'required|int|size:11',
                    'work_experience' => sprintf('required|int|in:%s',WorkExperience::getValues()->implode(',')),
                    'educational_level' => $ruleEducationalLevel,
                    'political_outlook' => 'nullable|string',
                    'marital_status' => sprintf('required|int|in:%s',MaritalStatus::getValues()->implode(',')),
                    'native_place' => 'required|string',
                    'address' => 'required|string',
                    'email' => 'nullable|email',
                    'job_status' => sprintf('required|int|in:%s',JobStatus::getValues()->implode(',')),
                    'photo' => 'nullable|image',
                    'job_intention' => 'array',
                    'job_intention.*.salary_expectation' => 'required_with:job_intention|int',
                    'job_intention.*.face_to_face' => 'required_with:job_intention|int',
                    'job_intention.*.intended_job' => 'required_with:job_intention|string',
                    'job_intention.*.work_post' => 'required_with:job_intention|string',
                    'job_intention.*.work_address' => 'required_with:job_intention|array',
                    'work_history' => 'array',
                    'work_history.*.company_name' => 'required_with:work_history|string',
                    'work_history.*.company_nature' => 'required_with:work_history|int',
                    'work_history.*.company_scale' => 'required_with:work_history|int',
                    'work_history.*.start_date' => 'required_with:work_history|date_format:y-m',
                    'work_history.*.end_date' => 'required_with:work_history|date_format:y-m',
                    'work_history.*.post_name' => 'required_with:work_history|string',
                    'work_history.*.work_introduce' => 'required_with:work_history|string',
                    'educational_type' => sprintf('required_if:educational_background|int|in:%s',EducationalType::getValues()->implode(',')),
                    'educational_background' => 'array',
                    'educational_background.*.name' => 'required_with:educational_background|string',
                    'educational_background.*.enrollment_time' => 'required_with:educational_background|date_format:y-m',
                    'educational_background.*.graduation_time' => 'required_with:educational_background|date_format:y-m|after:enrollment_time',
                    'educational_background.*.major_name' => sprintf('required_with:educational_background|string|max:30|required_if:educational_type,%s',EducationalType::ACADEMIC_EDUCATION),
                    'educational_background.*.education_level' => sprintf('required_with:educational_background|int|required_if:educational_type,%s|in:%s',EducationalType::ACADEMIC_EDUCATION,$ruleEducationalLevel),
                    'educational_background.*.is_unified_recruitment' => sprintf('required_with:educational_background|boolean|required_if:educational_type,%s',EducationalType::ACADEMIC_EDUCATION),
                    'educational_background.*.describe' => 'nullable|string|max:1000',
                    'educational_background.*.training_program' => sprintf('required_with:educational_background|string|max:30|required_if:educational_type,%s',EducationalType::SKILLS_TRAINING),
                    'project_history.*.project_name' => 'required|string',
                    'project_history.*.start_date' => 'required|date_format:y-m',
                    'project_history.*.end_date' => 'required|date_format:y-m|after:start_date',
                    'project_history.*.position_held' => 'required|string|max:60',
                    'language_ability.*.language_type' => sprintf('required|int|int:%s',LanguageType::getValues()->implode(',')),
                    'language_ability.*.skill_level' => sprintf('required|int|in:%s',SkillLevel::getValues()->implode(',')),
                    'language_ability.*.language_rank' => sprintf('required|int|int:%s',LanguageLevel::getValues()->implode(',')),
                    'skill_expertise.*.skill_name' => 'required|string|max:60',
                    'skill_expertise.*.skill_level' =>  sprintf('required|int|in:%s',SkillLevel::getValues()->implode(',')),
                    'certificate.*.certificate_name' => 'required|string|max:60',
                    'certificate.*.get_date' => 'required|date_format:y',
                    'other_information.*.theme' => sprintf('required|int|in:%s',Theme::getValues()->implode(',')),
                    'other_information.*.content_description' => 'required|string|max:1000',
                    'other_information.*.custom_theme' => sprintf('required_if:theme,%s|string|max:60',Theme::CUSTOMIZE),
                ];
             break;
         endswitch;
        return $rules;
    }
}