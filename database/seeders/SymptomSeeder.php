<?php

namespace Database\Seeders;

use App\Models\Symptom;
use App\Models\SymptomQuestion;
use Illuminate\Database\Seeder;

class SymptomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $symptoms = [
            [
                "name" => "Fever",
                "description" => "<b class='bold'>Feve</b> is a temporary increase in body temperature, often in response to an illness, infection, or other medical condition. It is a common symptom of many infections, including viral and bacterial illnesses, but it can also be caused by inflammatory conditions, heat exhaustion, or certain medications. Typically, a normal body temperature is around 98.6°F (37°C) when measured orally. However, slight variations are common, and body temperature can fluctuate throughout the day. A fever is generally defined as a body temperature above 100.4°F (38°C) when measured orally.<br><b class='bold'>Fever can be caused</b> by infections (like flu or urinary tract infections), inflammatory conditions, heat exposure, certain medications, vaccinations, cancer, autoimmune disorders, endocrine disorders, blood clots, or idiopathic reasons.",
                "image_src" => "/Images/fever.png",
                "created_at" => now(),
                "updated_at" => now(),
                "questions" => [
                    [
                        "name" => "what's your temperature?",
                        "input_type" => "number"
                    ],
                    [
                        "name" => "What duration have you suffered from fever symptoms?",
                        "input_type" => "number"
                    ],
                    [
                        "name" => "Do you have Headache?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ],
                    [
                        "name" => "Do you have Cold Cough?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ],
                ]
            ],

            [
                "name" => "Diarrhea",
                "description" => "<b class='bold'>Diarrhea</b> occurs when contaminated food or drinks are consumed, leading to illness with symptoms like nausea, vomiting, diarrhea, abdominal pain, fever, and fatigue. It's caused by harmful bacteria, viruses, parasites, or toxins. Prevention involves safe food handling and hygiene practices.<br><b class='bold'>Food poisoning caused</b> by consuming food or beverages contaminated with harmful bacteria, viruses, parasites, or toxins. Contamination can occur during food production, processing, handling, or preparation. Common pathogens responsible for food poisoning include Salmonella, Escherichia coli (E. coli), Campylobacter, Listeria, Staphylococcus aureus, norovirus, hepatitis A virus, Giardia, Cryptosporidium, and toxins produced by bacteria like Clostridium botulinum.",
                "image_src" => "/Images/Food_Poisoning.png",
                "created_at" => now(),
                "updated_at" => now(),
                "questions" => [
                    [
                        "name" => "What duration have you suffered from diarrhea symptoms?",
                        "input_type" => "number"
                    ],
                    [
                        "name" => "Do you have vomiting?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ],
                    [
                        "name" => "Do you have feel stomach pain?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ],
                    [
                        "name" => "Is blood coming with the stool?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ],
                ]
            ],

            [
                "name" => "Migraine",
                "description" => "<b class='bold'>Migraine</b> is a type of headache disorder characterized by intense, recurrent headaches often accompanied by symptoms like nausea, vomiting, and sensitivity to light and sound. It can significantly impact daily life and may involve genetic, environmental, and neurological factors. Treatment includes medications to relieve symptoms, preventive measures, and lifestyle changes.<br><b class='bold'>Migraines can be caused</b> by genetics, hormonal changes, environmental factors like stress or certain foods, sleep disturbances, physical exertion, medications, and sensory stimuli.",
                "image_src" => "/Images/Migraine.jpg",
                "created_at" => now(),
                "updated_at" => now(),
                "questions" => [
                    [
                        "name" => "How long does your headache last?",
                        "input_type" => "number"
                    ],
                    [
                        "name" => "Are you feel intense throbbing head pain?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ],
                    [
                        "name" => "Do you feel accompanied by nausea and vomiting, as well as sensitivity to light and sound?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ],
                    [
                        "name" => "Do you have one-sided head pain?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ],
                    [
                        "name" => "Have you had any head injuries?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ],
                ]
            ],
            [
                "name" => "Low back pain",
                "description" => "<b class='bold'>Low back pain</b> is discomfort in the lower back region, between the bottom of the rib cage and the top of the legs. It can range from mild to severe and may be caused by muscle strains, herniated discs, arthritis, or other factors. Treatment options vary depending on the cause and severity of the pain.<br><b class='bold'>Low back pain</b> can be caused by muscle or ligament strain, herniated discs, degenerative disc disease, spinal stenosis, osteoarthritis, sciatica, spondylolisthesis, traumatic injury, poor posture, or obesity.",
                "image_src" => "/Images/back_pain.png",
                "created_at" => now(),
                "updated_at" => now(),
                "questions" => [
                    [
                        "name" => "How long does your low back pain last?",
                        "input_type" => "number"
                    ],
                    [
                        "name" => "Always you feel pain?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ],
                    [
                        "name" => "Do you eat any medicine for removing pain?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ]
                ]
            ],

            [
                "name" => "Cough",
                "description" => "<b class='bold'>Cough</b> is a reflex action that helps clear your airways of mucus, irritants, or foreign particles. It's a common symptom of various respiratory infections, allergies, or conditions such as colds, flu, bronchitis, pneumonia, asthma, or even environmental irritants like smoke or dust. Coughing can be productive (bringing up mucus or phlegm) or dry (without producing any mucus). It serves as a protective mechanism for your body to expel irritants and maintain clear air passages. However, persistent or severe coughing may indicate an underlying health issue and should be evaluated by a healthcare professional.<br><b class='bold'>Coughing can be caused</b> by respiratory infections, allergies, environmental irritants, asthma, acid reflux, postnasal drip, medications, COPD, lung diseases, or psychological factors like stress.",
                "image_src" => "/Images/caugh.jpg",
                "created_at" => now(),
                "updated_at" => now(),
                "questions" => [
                    [
                        "name" => "How long does your cough last?",
                        "input_type" => "number"
                    ],
                    [
                        "name" => "Do you feel like your nose is blocked?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ],
                    [
                        "name" => "Do  you feel chest pain with caugh?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ]
                ]
            ],

            [
                "name" => "Scabies",
                "description" => "<b class='bold'>Scabies</b> is a skin infestation caused by the Sarcoptes scabiei mite, leading to intense itching and a rash. It spreads through close contact and can be treated with prescription medications.<br><b class='bold'>Scabies is caused</b> by the microscopic mite Sarcoptes scabiei, which burrows into the skin to lay eggs. It spreads through direct skin-to-skin contact and can also be transmitted through infested bedding, clothing, or furniture.",
                "image_src" => "/Images/Scabies.webp",
                "created_at" => now(),
                "updated_at" => now(),
                "questions" => [
                    [
                        "name" => "How long does your scabies last?",
                        "input_type" => "number"
                    ],
                    [
                        "name" => "When does your scabies mainly occur?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Day", "value" => "day"],
                            ["name" => "Night", "value" => "night"],
                            ["name" => "All Time", "value" => "all_time"],
                        ]
                    ],
                    [
                        "name" => "Does anyone else in your householder have scabies?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ]
                ]

            ],

            [
                "name" => "Vomiting",
                "description" => "<b class='bold'>Vomiting</b> is the forceful expulsion of stomach contents through the mouth and sometimes the nose. It's a reflex action controlled by the brainstem and can be caused by various factors such as infections, food poisoning, motion sickness, pregnancy, gastrointestinal disorders, or medications.<br><b class='bold'>Vomiting can be caused</b> by infections, food poisoning, motion sickness, pregnancy, gastrointestinal disorders, overeating, excessive alcohol consumption, medications, or migraines.",
                "image_src" => "/Images/vomiting.webp",
                "created_at" => now(),
                "updated_at" => now(),
                "questions" => [
                    [
                        "name" => "How many times you vomited?",
                        "input_type" => "number"
                    ],
                    [
                        "name" => "Do you have stomach pain?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ],
                    [
                        "name" => "Do you feel  weak?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ]
                ]
            ],

            [
                "name" => "Burn",
                "description" => "<b class='bold'>burn</b> refers to an injury to the skin or other tissues caused by heat, electricity, chemicals, friction, or radiation. It can vary from mild redness to severe tissue damage.<br><b class='bold'>Burns can be caused </b>by heat, electricity, chemicals, friction, radiation, fire, scalding, or cold exposure.",
                "image_src" => "/Images/burn.avif",
                "created_at" => now(),
                "updated_at" => now(),
                "questions" => [
                    [
                        "name" => "The burned areas looking red?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ],
                    [
                        "name" => "Having pain in the burn area?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ],
                    [
                        "name" => "Having any problem other than the res & light pain in the burned area?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ]
                ]
            ],

            [
                "name" => "Sore throat",
                "description" => "<b class='bold'>Sore throat </b>is discomfort or pain in the throat, often worsened by swallowing. It can be caused by viral or bacterial infections, environmental irritants, or allergies. Treatment may include rest, hydration, throat lozenges, and over-the-counter pain relievers.<br><b class='bold'>Sore throat can be caused</b> by viral or bacterial infections, environmental irritants, allergies, postnasal drip, acid reflux, vocal strain, dryness, tonsillitis, or physical injury.",
                "image_src" => "/Images/Sore_throat.webp",
                "created_at" => now(),
                "updated_at" => now(),
                "questions" => [
                    [
                        "name" => "How long does your sore throats last?",
                        "input_type" => "number"
                    ],
                    [
                        "name" => "Do you feel pain when you eating??",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ],
                    [
                        "name" => "Do yo see Red and swollen tonsils?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ]
                ],
            ],
            [
                "name" => "allergic rhinitis",
                "description" => "<b class='bold'>Allergic rhinitis</b>commonly known as hay fever, is an allergic reaction that occurs when the immune system overreacts to allergens in the air. These allergens, such as pollen, dust mites, pet dander, or mold spores, trigger symptoms like sneezing, itching, a runny or stuffy nose, and watery eyes. It's a common condition that can significantly impact your quality of life, especially during allergy seasons or in environments where allergens are prevalent.<br><b class='bold'>Allergic rhinitis caused</b> by the immune system's overreaction to harmless substances like pollen, dust mites, pet dander, or mold spores, leading to symptoms such as sneezing, nasal congestion, itching, and watery eyes.",
                "image_src" => "/Images/Allergic_Rhinitis.jfif",
                "created_at" => now(),
                "updated_at" => now(),
                "questions" => [
                    [
                        "name" => "How long does your sneeze last?",
                        "input_type" => "number"
                    ],
                    [
                        "name" => "Did you sneeze a lot?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ],
                    [
                        "name" => "Do you feel like your nose is blocked?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ],
                    [
                        "name" => "Do you have cough?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ],
                    [
                        "name" => "Do you have fever?",
                        "input_type" => "radio",
                        "input_options" => [
                            ["name" => "Yes", "value" => "yes"],
                            ["name" => "No", "value" => "no"],
                        ]
                    ]
                ]
            ]

        ];


        // insert into symptoms and symptoms_questions table
        foreach ($symptoms as $symptom) {
            $createdSymptom = Symptom::query()->create([
                "name" => $symptom['name'],
                "description" => $symptom['description'],
                "image_src" => $symptom['image_src'],
            ]);

            if ($questions = $symptom['questions'] ?? null) {

                foreach ($questions as $question) {
                    $question['symptom_id'] = $createdSymptom->id;
                    SymptomQuestion::query()->create($question);
                }
            }
        }
    }
}
