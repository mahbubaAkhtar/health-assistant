<?php

namespace Database\Seeders;

use App\Models\Generic;
use App\Models\GenericDose;
use App\Models\GenericEligibility;
use Illuminate\Database\Seeder;

class GenericSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->seedConcernGeneric();
        $this->seedReferanceGeneric();
    }

    private function seedConcernGeneric()
    {
        $genericDataSet = $this->prepareCommonData();
        foreach ($genericDataSet as $data) {
            $generic = Generic::query()->create([
                'name' => $data['name'],
                'strength' => $data['strength'],
                'type' => $data['type'],
                'required_with_generic_id' => $data['required_with_generic_id'] ?? null
            ]);

            if ($data['generic_eligibilities'] ?? null) {
                foreach ($data['generic_eligibilities'] as $eligibility) {
                    GenericEligibility::query()->create([
                        'generic_id' => $generic->id,
                        'concern_key' => $eligibility['concern_key'],
                        'value' => $eligibility['value'] ?? null,
                        'from_value' => $eligibility['from_value'] ?? null,
                        'to_value' => $eligibility['to_value'] ?? null,
                    ]);
                }
            }

            if ($data['generic_doses'] ?? null) {
                foreach ($data['generic_doses'] as $dose) {
                    GenericDose::query()->create([
                        'generic_id' => $generic->id,
                        'concern_key' => $dose['concern_key'],
                        'value' => $dose['value'] ?? null,
                        'from_value' => $dose['from_value'] ?? null,
                        'to_value' => $dose['to_value'] ?? null,
                        'dose' => $dose['dose'],
                        'duration' => $dose['duration']
                    ]);
                }
            }
        }
    }

    private function seedReferanceGeneric()
    {
        $dependentGenerics = Generic::query()->where('required_with_generic_id', 1)->get();

        foreach ($dependentGenerics as $generic) {
            if( in_array($generic->name, ['Tolfenamic acid', 'Tiemonium Methylsulphate', 'Aceclofenac'])) {
                $dependentGeneric = Generic::query()->where('name', 'Rabeprazole Sodium')->first();

                if ($dependentGeneric) {
                    $generic->update([
                        'required_with_generic_id' => $dependentGeneric->id
                    ]);
                }
            }
        }
    }

    private function prepareCommonData(): array
    {
        return [
            [
                "name" => "Paracetamol",
                "strength" => "500 mg",
                "type" => "Tablet",
                "generic_eligibilities" => [
                    [
                        "concern_key" => "temperature",
                        "from_value" => "100",
                        "to_value" => "102",
                    ],
                    [
                        "concern_key" => "fever_duration",
                        "from_value" => "0",
                        "to_value" => "3",
                    ],
                    [
                        "concern_key" => "headache",
                        "value" => 0
                    ],
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "fever_duration",
                        "from_value" => "0",
                        "to_value" => "3",
                        "dose" => "1+1+1 - After meal",
                        "duration" => "3 days"
                    ]
                ]
            ],
            [
                "name" => "Paracetamol + Caffeine",
                "strength" => "500 mg",
                "type" => "Tablet",
                "generic_eligibilities" => [
                    [
                        "concern_key" => "temperature",
                        "from_value" => "100",
                        "to_value" => "102",
                    ],
                    [
                        "concern_key" => "headache",
                        "value" => 1
                    ],
                    [
                        "concern_key" => "fever_duration",
                        "from_value" => "0",
                        "to_value" => "3",
                    ]
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "fever_duration",
                        "from_value" => "0",
                        "to_value" => "3",
                        "dose" => "1+1+1 - After meal",
                        "duration" => "3 days"
                    ]
                ]
            ],
            [
                "name" => "Paracetamol",
                "strength" => "1000 mg",
                "type" => "Tablet",
                "generic_eligibilities" => [
                    [
                        "concern_key" => "weight",
                        "from_value" => "60",
                        "to_value" => "150",
                    ],
                    [
                        "concern_key" => "temperature",
                        "from_value" => "103",
                        "to_value" => "103",
                    ],
                    [
                        "concern_key" => "fever_duration",
                        "from_value" => "0",
                        "to_value" => "3",
                    ]
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "fever_duration",
                        "from_value" => "0",
                        "to_value" => "3",
                        "dose" => "1+1+1 - After meal",
                        "duration" => "3 days"
                    ]
                ]
            ],


            [
                "name" => "Rabeprazole Sodium",
                "strength" => "20 mg",
                "type" => "Tablet",
            ],
            [
                "name" => "Naproxen Sodium + Esomeprazole Magnesium",
                "strength" => "500 mg+20 mg",
                "type" => "Tablet",
                "generic_eligibilities" => [
                    [
                        "concern_key" => "neck_pain_duration",
                        "from_value" => "0",
                        "to_value" => "3",
                    ],
                    [
                        "concern_key" => "feel_neck_pain",
                        "value" => "1",
                    ],
                    [
                        "concern_key" => "blood_pressure_normal",
                        "value" => "1",
                    ]
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "neck_pain_duration",
                        "from_value" => "0",
                        "to_value" => "3",
                        "dose" => "1+0+1 - Before meal",
                        "duration" => "3 days"
                    ]
                ]
            ],
            [
                "name" => "Naproxen Sodium + Esomeprazole Magnesium",
                "strength" => "500 mg+20 mg",
                "type" => "Tablet",
                "generic_eligibilities" => [
                    [
                        "concern_key" => "back_pain",
                        "from_value" => "0",
                        "to_value" => "3",
                    ],
                    [
                        "concern_key" => "altime_pain",
                        "value" => "1",
                    ],
                    [
                        "concern_key" => "taken_any_pain_medicine",
                        "value" => "0",
                    ]
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "neck_pain_duration",
                        "from_value" => "0",
                        "to_value" => "3",
                        "dose" => "1+0+1 - Before meal",
                        "duration" => "3 days"
                    ]
                ]
            ],
            [
                "name" => "Tolperisone Hydrochloride",
                "strength" => "50 mg",
                "type" => "Tablet",
                "generic_eligibilities" => [
                    [
                        "concern_key" => "neck_pain_duration",
                        "from_value" => "0",
                        "to_value" => "3",
                    ],
                    [
                        "concern_key" => "feel_neck_pain",
                        "value" => "1",
                    ],
                    [
                        "concern_key" => "blood_pressure_normal",
                        "value" => "1",
                    ]
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "neck_pain_duration",
                        "from_value" => "0",
                        "to_value" => "3",
                        "dose" => "1+0+1 - After meal",
                        "duration" => "3 days"
                    ]
                ]
            ],
            [
                "name" => "Diclofenac Sodium",
                "strength" => "1% w/w",
                "type" => "Gel",
                "generic_eligibilities" => [
                    [
                        "concern_key" => "neck_pain_duration",
                        "from_value" => "0",
                        "to_value" => "3",
                    ],
                    [
                        "concern_key" => "feel_neck_pain",
                        "value" => "1",
                    ],
                    [
                        "concern_key" => "blood_pressure_normal",
                        "value" => "1",
                    ]
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "neck_pain_duration",
                        "from_value" => "0",
                        "to_value" => "3",
                        "dose" => "Use Three or Four times a day",
                        "duration" => "3 days"
                    ]
                ]
            ],
            [
                "name" => "Tolfenamic acid",
                "strength" => "200 mg",
                "type" => "Tablet",
                "required_with_generic_id" => 1, //this value is the identifier of dependency
                "generic_eligibilities" => [
                    [
                        "concern_key" => "migraine_duration",
                        "from_value" => "0",
                        "to_value" => "3",
                    ],
                    [
                        "concern_key" => "head_pain",
                        "value" => "1",
                    ],
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "migraine_duration",
                        "from_value" => "0",
                        "to_value" => "3",
                        "dose" => "1+0+1 - After meal",
                        "duration" => "3 days"
                    ]
                ]
            ],
            [
                "name" => "Domperidone Maleate",
                "strength" => "10 mg",
                "type" => "Tablet",
                "generic_eligibilities" => [

                    [
                        "concern_key" => "vomiting",
                        "value" => "1",
                    ],
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "vomiting",
                        "value" => "1",
                        "dose" => "1+1+1 - After meal",
                        "duration" => "3 days"
                    ]
                ]
            ],
            [
                "name" => "Clonazepam",
                "strength" => "0.5 mg",
                "type" => "Tablet",
                "generic_eligibilities" => [

                    [
                        "concern_key" => "sleeping_problem",
                        "value" => "1",
                    ],

                ],
                "generic_doses" => [
                    [
                        "concern_key" => "sleeping_problem",
                        "value" => "1",
                        "dose" => "0+0+1 - After meal",
                        "duration" => "3 days"
                    ]
                ]
            ],
            [
                "name" => "Ambroxol Hydrochloride",
                "strength" => "100ml",
                "type" => "Syrup",
                "generic_eligibilities" => [

                    [
                        "concern_key" => "fever_with_cough_duration",
                        "from_value" => "0",
                        "to_value" => "3",
                    ],

                ],
                "generic_doses" => [
                    [
                        "concern_key" => "fever_with_cough_duration",
                        "from_value" => "0",
                        "to_value" => "3",
                        "dose" => "2+2+2 - After meal",
                        "duration" => "3 days"
                    ]
                ],
            ],
            [
                "name" => "Ambroxol Hydrochloride",
                "strength" => "100ml",
                "type" => "Syrup",
                "generic_eligibilities" => [

                    [
                        "concern_key" => "cough_duration",
                        "from_value" => "0",
                        "to_value" => "3",
                    ],
                    [
                        "concern_key" => "chest_pain_with_cough",
                        "value" => "0",
                    ]

                ],
                "generic_doses" => [
                    [
                        "concern_key" => "cough_duration",
                        "from_value" => "0",
                        "to_value" => "3",
                        "dose" => "2+2+2 - After meal",
                        "duration" => "3 days"
                    ]
                ],
            ],
            [
                "name" => "Ambroxol Hydrochloride",
                "strength" => "100ml",
                "type" => "Syrup",
                "generic_eligibilities" => [

                    [
                        "concern_key" => "for_allergic_rhinitis_has_cough",
                        "value" => "1",
                    ]

                ],
                "generic_doses" => [
                    [
                        "concern_key" => "for-allergic rhinitis-has_cough",
                        "value" => "1",
                        "dose" => "2+2+2 - After meal",
                        "duration" => "3 days"
                    ]
                ]
            ],
            [
                "name" => "Fexofenadine Hydrochloride",
                "strength" => "120 mg",
                "type" => "Tablet",
                "generic_eligibilities" => [
                    [
                        "concern_key" => "fever-with-cough_duration",
                        "from_value" => "0",
                        "to_value" => "7",
                    ]
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "fever-with-cough_duration",
                        "value" => "1",
                        "dose" => "0+0+1 - After meal",
                        "duration" => "7 days"
                    ]
                ]
            ],
            [
                "name" => "Fexofenadine Hydrochloride",
                "strength" => "120 mg",
                "type" => "Tablet",
                "generic_eligibilities" => [
                    [
                        "concern_key" => "nose_blocked",
                        "value" => "1"

                    ],
                    [
                        "concern_key" => "chest_pain_with_cough",
                        "value" => "0",
                    ]
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "nose_blocked",
                        "value" => "1",
                        "dose" => "0+0+1 - After meal",
                        "duration" => "3 days"
                    ]
                ]
            ],
            [
                "name" => "Fexofenadine Hydrochloride",
                "strength" => "120 mg",
                "type" => "Tablet",
                "generic_eligibilities" => [
                    [
                        "concern_key" => "symptom_duration",
                        "from_value" => "0",
                        "to_value" => "7",

                    ],
                    [
                        "concern_key" => "sneeze_a_lot",
                        "value" => "1",
                    ]
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "symptom_duration",
                        "value" => "1",
                        "dose" => "0+0+1 - After meal",
                        "duration" => "3 days"
                    ]
                ]
            ],

            [
                "name" => "Levocetirizine Dihydrochloride",
                "strength" => "5 mg",
                "type" => "Tablet",
                "generic_eligibilities" => [
                    [
                        "concern_key" => "itching_duration",
                        "from_value" => "0",
                        "to_value" => "7",
                    ]
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "itching_duration",
                        "from_value" => "0",
                        "to_value" => "7",
                        "dose" => "0+0+1 - After meal",
                        "duration" => "7 days"
                    ]
                ]
            ],

            [
                "name" => "Domperidone Maleate",
                "strength" => "10 mg",
                "type" => "Tablet",
            ],
            [
                "name" => " Ondansetron ",
                "strength" => "8 mg",
                "type" => "Tablet",
                "generic_eligibilities" => [
                    [
                        "concern_key" => "how_many_times_you_vomiting",
                        "from_value" => "0",
                        "to_value" => "3",
                    ],
                    [
                        "concern_key" => "blood_pressure",
                        "value" => "1"

                    ],
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "how_many_times_you_vomiting",
                        "from_value" => "0",
                        "to_value" => "3",
                        "dose" => "1+1+1 - Before  meal",
                        "duration" => "3 days"
                    ]
                ]
            ],
            [
                "name" => "Tiemonium Methylsulphate",
                "strength" => "50 mg",
                "type" => "Tablet",
                "required_with_generic_id" => 1,
                "generic_eligibilities" => [
                    [
                        "concern_key" => "stomach_pain",
                        "value" => "1"

                    ],
                    [
                        "concern_key" => "blood_pressure",
                        "value" => "1"

                    ],
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "stomach_pain",
                        "value" => "1",
                        "dose" => "1+1+1 - After meal",
                        "duration" => "3 days"
                    ]
                ]
            ],

            [
                "name" => "Paracetamol  ",
                "strength" => "500 mg",
                "type" => "Tablet",
                "generic_eligibilities" => [
                    [
                        "concern_key" => "has_pain",
                        "value" => "1"

                    ],
                    [
                        "concern_key" => "has_other_pain_issues",
                        "value" => "0"

                    ],
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "has_pain",
                        "value" => "1",
                        "dose" => "1+1+1 - After meal",
                        "duration" => "3 days"
                    ]
                ]
            ],
            [
                "name" => "Paracetamol  ",
                "strength" => "500 mg",
                "type" => "Tablet",
                "generic_eligibilities" => [
                    [
                        "concern_key" => "for_allergic_rhinitis_has_fever",
                        "value" => "1"

                    ],
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "for_allergic_rhinitis_has_fever",
                        "value" => "1",
                        "dose" => "1+1+1 - After meal",
                        "duration" => "3 days"
                    ]
                ]
            ],
            [
                "name" => "Silver Sulfadiazine",
                "strength" => "1%",
                "type" => "Cream",
                "generic_eligibilities" => [
                    [
                        "concern_key" => "is_looking_red",
                        "value" => "1"

                    ],
                    [
                        "concern_key" => "has_other_pain_issues",
                        "value" => "0"

                    ],
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "is_looking_red",
                        "value" => "1",
                        "dose" => "First wash the affected area with water. Then use Three or Four times a day",
                        "duration" => "3 days"
                    ]
                ]
            ],
            [
                "name" => "Aceclofenac",
                "strength" => "100 mg",
                "type" => "Tablet",
                "required_with_generic_id" => 1,
                "generic_eligibilities" => [
                    [
                        "concern_key" => "sore_throat_duration",
                        "from_value" => "0",
                        "to_value" => "3",
                    ],
                    [
                        "concern_key" => "red_and_swollen",
                        "value" => "0",
                    ]
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "feels_pain",
                        "from_value" => "0",
                        "to_value" => "3",
                        "dose" => "1+0+1 - After meal",
                        "duration" => "3 days"
                    ]
                ]
            ],
            [
                "name" => "Oxymetazoline Hydrochloride ",
                "strength" => "0.05%",
                "type" => "Drop",
                "generic_eligibilities" => [
                    [
                        "concern_key" => "nose_blocken",
                        "value" => "1"

                    ]
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "nose_blocken",
                        "value" => "1",
                        "dose" => " 2+2+2 - After Six hours",
                        "duration" => "3 days"
                    ]
                ]
            ],
        ];
    }
}
