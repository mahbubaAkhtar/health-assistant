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
        $genericDataSet = [
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
                        "dose" => "1+1+1",
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
                        "dose" => "1+1+1",
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
                        "dose" => "1+1+1",
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
                        "concern_key" => "cough_duration",
                        "from_value" => "0",
                        "to_value" => "7",
                    ]
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "cough",
                        "value" => "1",
                        "dose" => "0+0+1",
                        "duration" => "7 days"
                    ]
                ]
            ],

            [
                "name" => "Rabeprazole Sodium",
                "strength" => "20 mg",
                "type" => "Tablet",
                "generic_eligibilities" => [
                    [
                        "concern_key" => "temperature",
                        "from_value" => "103",
                        "to_value" => "103",
                    ]
                ],
                "generic_doses" => [
                    [
                        "concern_key" => "symptom_duration",
                        "from_value" => "0",
                        "to_value" => "3",
                        "dose" => "1+1+1",
                        "duration" => "3 days"
                    ]
                ]
            ],
        ];


        foreach ($genericDataSet as $data) {
            $generic = Generic::query()->create([
                'name' => $data['name'],
                'strength' => $data['strength'],
                'type' => $data['type']
            ]);

            foreach ($data['generic_eligibilities'] as $eligibility) {
                GenericEligibility::query()->create([
                    'generic_id' => $generic->id,
                    'concern_key' => $eligibility['concern_key'],
                    'value' => $eligibility['value'] ?? null,
                    'from_value' => $eligibility['from_value'] ?? null,
                    'to_value' => $eligibility['to_value'] ?? null,
                ]);
            }

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
