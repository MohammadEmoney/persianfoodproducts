<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tastes = [
            'Sweet',
            'It has no special taste',
            'bitter',
            'sweet and sour',
            'bitter',
            'a little bitter',
            'a little bitter',
            'It has no special taste',
            'Sweet',
            'a little spicy',
            'bitter',
            'a little bitter',
            'does not have',
            'It has no special taste',
            'spicy',
            'bitter',
            'does not have',
            'Tasty',
            'Warm',
            'It has no special taste',
            'ornamental plant',
            'Sweet',
            'bitter',
            'Sour and slightly bitter',
        ];

        $tastesfa = [
            'Sweet' => "شیرین",
            'It has no special taste' => 'طعم خاصی ندارد',
            'bitter' => 'تلخ',
            'sweet and sour' => 'ترش و شیرین',
            'bitter' => 'تلخ',
            'a little bitter' => "کمی تلخ",
            'a little bitter' => "کمی تلخ",
            'It has no special taste' => 'طعم خاصی ندارد',
            'Sweet' => "شیرین",
            'a little spicy' => "کمی تند",
            'bitter' => 'تلخ',
            'a little bitter' => "کمی تلخ",
            'does not have' => 'ندارد',
            'It has no special taste' => 'طعم خاصی ندارد',
            'spicy' => "ادویه",
            'bitter' => 'تلخ',
            'does not have' => 'ندارد',
            'Tasty' => 'خوش طعم',
            'Warm' => "گرم",
            'It has no special taste' => 'طعم خاصی ندارد',
            'ornamental plant' => "گیاه زینتی",
            'Sweet' => "شیرین",
            'bitter' => 'تلخ',
            'Sour and slightly bitter' => "ترش و کمی تلخ",
        ];

        $tastesit = [
            'Sweet' => 'Dolce',
            'It has no special taste' => 'Non ha un sapore speciale',
            'bitter' => 'amaro',
            'sweet and sour' => 'agrodolce',
            'bitter' => 'amaro',
            'a little bitter' => "un po' amaro",
            'a little bitter' => "un po' amaro",
            'It has no special taste' => 'Non ha un sapore speciale',
            'Sweet' => 'Dolce',
            'a little spicy' => "un po' piccante",
            'bitter' => 'amaro',
            'a little bitter' => "un po' amaro",
            'does not have' => 'non ha',
            'It has no special taste' => 'Non ha un sapore speciale',
            'spicy' => 'speziato',
            'bitter' => 'amaro',
            'does not have' => 'non ha',
            'Tasty' => 'Gustoso',
            'Warm' => 'Caldo',
            'It has no special taste' => 'Non ha un sapore speciale',
            'ornamental plant' => 'pianta ornamentale',
            'Sweet' => 'Dolce',
            'bitter' => 'amaro',
            'Sour and slightly bitter' => 'Agro e leggermente amaro',
        ];

        $newTastes = [];
        foreach (array_unique($tastes) as $taste) {
            $newTastes[] = [
                'attribute_type_id' => 2,
                'name' => ucfirst($taste),
                'slug' => Str::slug($taste),
                'names' => json_encode([
                    'fa' => $tastesfa[$taste],
                    'it' => ucfirst($tastesit[$taste]),
                ])
            ];
        }

        // dd($newTastes);

        $colors = [
            'It has pink flowers, but the rose water is colorless',
            'It has pink flowers, but the rose water is colorless',
            'Colorless',
            'Colorless',
            'Colorless',
            'green',
            'Purple flower',
            'But the sweat of milk thistle is colorless',
            'Colorless',
            'Yellow flower',
            'colorless sweat',
            'Violet flower',
            'colorless chicory distilled',
            'Yellow flower',
            'colorless distilled',
            'green',
            'White petals',
            'colorless sweat',
            'green',
            'perpel flower',
            'Green willow leaves',
            'colorless sweat',
            'yellow flowers',
            'green',
            'Blue or purple flowers',
            'White flowers',
            'colorless sweat',
            'green',
            'green',
            'green',
            'Brown',
            'Purple flowers',
            'yellow',
            'pink flower',
            'yellow',
        ];
        $colorsfa = [
            'It has pink flowers, but the rose water is colorless' => "گلهای صورتی دارد اما گلاب بی رنگ است.",
            'It has pink flowers, but the rose water is colorless' => "گلهای صورتی دارد اما گلاب بی رنگ است.",
            'Colorless' => "بی رنگ",
            'Colorless' => "بی رنگ",
            'Colorless' => "بی رنگ",
            'green' => 'سبز',
            'Purple flower' => 'گل بنفش',
            'But the sweat of milk thistle is colorless' => "اما عرق شیرخار بی رنگ است",
            'Colorless' => "بی رنگ",
            'Yellow flower' => 'گل زرد',
            'colorless sweat' => "عرق بی رنگ",
            'Violet flower' => 'گل بنفش',
            'colorless chicory distilled' => "کاسنی بی رنگ تقطیر شده",
            'Yellow flower' => 'گل زرد',
            'colorless distilled' => "تقطیر بی رنگ",
            'green' => 'سبز',
            'White petals' => "گلبرگ های سفید",
            'colorless sweat' => "عرق بی رنگ",
            'green' => 'سبز',
            'perpel flower' => "پرپل گل",
            'Green willow leaves' => "برگ بید سبز",
            'colorless sweat' => "عرق بی رنگ",
            'yellow flowers' => "گل های زرد",
            'green' => 'سبز',
            'Blue or purple flowers' => "گلهای آبی یا بنفش",
            'White flowers' => 'گل های سفید',
            'colorless sweat' => "عرق بی رنگ",
            'green' => 'سبز',
            'green' => 'سبز',
            'green' => 'سبز',
            'Brown' => 'رنگ قهوه ای',
            'Purple flowers' => "گل های بنفش",
            'yellow' => 'رنگ زرد',
            'pink flower' => 'گل صورتی',
            'yellow' => 'رنگ زرد',
        ];
        $colorsit = [
            'It has pink flowers, but the rose water is colorless' => "Ha fiori rosa, ma l'acqua di rose è incolore",
            'It has pink flowers, but the rose water is colorless' => "Ha fiori rosa, ma l'acqua di rose è incolore",
            'Colorless' => 'Incolore',
            'Colorless' => 'Incolore',
            'Colorless' => 'Incolore',
            'green' => 'verde',
            'Purple flower' => 'Fiore viola',
            'But the sweat of milk thistle is colorless' => 'Ma il sudore del cardo mariano è incolore',
            'Colorless' => 'Incolore',
            'Yellow flower' => 'Fiore giallo',
            'colorless sweat' => 'sudore incolore',
            'Violet flower' => 'Fiore viola',
            'colorless chicory distilled' => 'distillato di cicoria incolore',
            'Yellow flower' => 'Fiore giallo',
            'colorless distilled' => 'distillato incolore',
            'green' => 'verde',
            'White petals' => 'Petali bianchi',
            'colorless sweat' => 'sudore incolore',
            'green' => 'verde',
            'perpel flower' => 'fiore perpetuo',
            'Green willow leaves' => 'Foglie di salice verde',
            'colorless sweat' => 'sudore incolore',
            'yellow flowers' => 'fiori gialli',
            'green' => 'verde',
            'Blue or purple flowers' => 'Fiori blu o viola',
            'White flowers' => 'Fiori bianchi',
            'colorless sweat' => 'sudore incolore',
            'green' => 'verde',
            'green' => 'verde',
            'green' => 'verde',
            'Brown' => 'Marrone',
            'Purple flowers' => 'Fiori viola',
            'yellow' => 'giallo',
            'pink flower' => 'fiore rosa',
            'yellow' => 'giallo',
        ];

        $newcolors = [];
        foreach (array_unique($colors) as $color) {
            $newcolors[] = [
                'attribute_type_id' => 3,
                'name' => ucfirst($color),
                'slug' => Str::slug($color),
                'names' => json_encode([
                    'fa' => $colorsfa[$color],
                    'it' => ucfirst($colorsit[$color]),
                ])
            ];
        }

        // dd($newcolors);

        $aroma = [
            'does not have',
            'Fragrant',
        ];
        $aromafa = [
            'does not have' => 'ندارد',
            'Fragrant' => "معطر",
        ];
        $aromait = [
            'does not have' => 'non ha',
            'Fragrant' => 'Fragrante',
        ];

        $newaroma = [];
        foreach (array_unique($aroma) as $val) {
            $newaroma[] = [
                'attribute_type_id' => 4,
                'name' => ucfirst($val),
                'slug' => Str::slug($val),
                'names' => json_encode([
                    'fa' => $aromafa[$val],
                    'it' => ucfirst($aromait[$val]),
                ])
            ];
        }

        $forms = [
            'liquid',
            'Contains edible leaves, stems, flowers and seeds',
            'narrow and tall',
            'flower',
            'Oval leaves',
            'Sharp cardamom flower',
            'A slightly elongated leaf',
            'broad leaf',
            'Large leaves',
            'Small seeds',
            'dried flower',
            'round and oval',
        ];
        $formsit = [
            'liquid' => 'liquido',
            'Contains edible leaves, stems, flowers and seeds' => 'Contiene foglie, steli, fiori e semi commestibili',
            'narrow and tall' => 'stretto e alto',
            'flower' => 'fiore',
            'Oval leaves' => 'Foglie ovali',
            'Sharp cardamom flower' => 'Fiore di cardamomo affilato',
            'A slightly elongated leaf' => 'Una foglia leggermente allungata',
            'broad leaf' => 'a foglia larga',
            'Large leaves' => 'Foglie grandi',
            'Small seeds' => 'Piccoli semi',
            'dried flower' => 'fiore secco',
            'round and oval' => 'rotondo e ovale',
        ];
        $formsfa = [
            'liquid' => "مایع",
            'Contains edible leaves, stems, flowers and seeds' => "حاوی برگ ساقه گل و دانه خوراکی",
            'narrow and tall' => "باریک و بلند",
            'flower' => 'گل',
            'Oval leaves' => "برگ های بیضی",
            'Sharp cardamom flower' => "گل تیز هل",
            'A slightly elongated leaf' => "برگ کمی دراز",
            'broad leaf' => 'پهنک برگ',
            'Large leaves' => "برگ های بزرگ",
            'Small seeds' => "دانه های کوچک",
            'dried flower' => "گل خشک",
            'round and oval' => "گرد و بیضی شکل",
        ];

        $newforms = [];
        foreach (array_unique($forms) as $form) {
            $newforms[] = [
                'attribute_type_id' => 5,
                'name' => ucfirst($form),
                'slug' => Str::slug($form),
                'names' => json_encode([
                    'fa' => $formsfa[$form],
                    'it' => ucfirst($formsit[$form]),
                ])
            ];
        }

        $storages = [
            "Rose water is kept in a dry and dark place",
            "Taken from the hawthorn plant",
            "kept in a dry place",
            "Stored in a dry place",
            "Stored in the refrigerator",
            "frozen",
            "dried",
            "It is kept in the refrigerator",
            "it is kept dry in a dry and dark place",
            "It is mostly used dried",
            "its sweat is also used",
            "I just can't keep it long",
            "jam",
            "dry orange flower",
            "Both the sweat and the dried one are used",
            "It should be kept in a dry place",
            "It requires an environment with high humidity",
            "It is used dry",
            "stored in a dry and dark place",
            "It is used dry",
            "Fresh",
            "sweat",
            "dry kham is used",
        ];
        $storagesfa = [
            "Rose water is kept in a dry and dark place" => "گلاب در جای خشک و تاریک نگهداری می شود",
            "Taken from the hawthorn plant" => "برگرفته از گیاه زالزالک",
            "kept in a dry place" => "در جای خشک نگهداری می شود",
            "Stored in a dry place" => "در جای خشک نگهداری می شود",
            "Stored in the refrigerator" => "نگهداری در یخچال",
            "frozen" => "منجمد",
            "dried" => "خشک شده",
            "It is kept in the refrigerator" => "در یخچال نگهداری می شود",
            "it is kept dry in a dry and dark place" => "در جای خشک و تاریک خشک نگهداری می شود",
            "It is mostly used dried" => "بیشتر به صورت خشک استفاده می شود",
            "its sweat is also used" => "عرق آن نیز استفاده می شود",
            "I just can't keep it long" => "فقط نمی توانم آن را طولانی نگه دارم",
            "jam" => "مربا",
            "dry orange flower" => "گل نارنجی خشک",
            "Both the sweat and the dried one are used" => "هم از عرق استفاده می شود و هم از خشک شده",
            "It should be kept in a dry place" => "باید در جای خشک نگهداری شود",
            "It requires an environment with high humidity" => "به محیطی با رطوبت بالا نیاز دارد",
            "It is used dry" => "به صورت خشک استفاده می شود",
            "stored in a dry and dark place" => "در جای خشک و تاریک ذخیره می شود",
            "It is used dry" => "به صورت خشک استفاده می شود",
            "Fresh" => "تازه",
            "sweat" => "عرق کردن",
            "dry kham is used" => "خم خشک استفاده می شود",
        ];
        $storagesit = [
            "Rose water is kept in a dry and dark place" => "L'acqua di rose si conserva in un luogo asciutto e buio",
            "Taken from the hawthorn plant" => "Preso dalla pianta di biancospino",
            "kept in a dry place" => 'conservato in un luogo asciutto',
            "Stored in a dry place" => "Conservato in un luogo asciutto",
            "Stored in the refrigerator" => "Conservato in frigorifero",
            "frozen" => "congelato",
            "dried" => "secco",
            "It is kept in the refrigerator" => "Si conserva in frigorifero",
            "it is kept dry in a dry and dark place" => "è tenuto asciutto in un luogo asciutto e buio",
            "It is mostly used dried" => "Viene utilizzato principalmente essiccato",
            "its sweat is also used" => "si usa anche il suo sudore",
            "I just can't keep it long" => "Non posso tenerlo a lungo",
            "jam" => "marmellata",
            "dry orange flower" => "fiore d'arancio secco",
            "Both the sweat and the dried one are used" => "Si usa sia il sudore che quello secco",
            "It should be kept in a dry place" => "Va conservato in un luogo asciutto",
            "It requires an environment with high humidity" => "Richiede un ambiente con elevata umidità",
            "It is used dry" => "Si usa secco",
            "stored in a dry and dark place" => "conservato in un luogo asciutto e buio",
            "It is used dry" => "Si usa secco",
            "Fresh" => "Fresco",
            "sweat" => "sudore",
            "dry kham is used" => "si usa il kham secco",
        ];

        $newstorages = [];
        foreach (array_unique($storages) as $storage) {
            $newstorages[] = [
                'attribute_type_id' => 6,
                'name' => ucfirst($storage),
                'slug' => Str::slug($storage),
                'names' => json_encode([
                    'fa' => $storagesfa[$storage],
                    'it' => ucfirst($storagesit[$storage]),
                ])
            ];
        }

        $shelfLife = [
            'long',
            '1 week',
            'Just these few days ',
            'they keep it frozen and dry for a long time',
            'At home between 2 and 5 years ',
            'greenhouse 15 years',
        ];
        $shelfLifefa = [
            'long' => "طولانی" ,
            '1 week' => '1 هفته' ,
            'Just these few days ' => "همین چند روز" ,
            'they keep it frozen and dry for a long time' => "آنها آن را برای مدت طولانی یخ زده و خشک نگه می دارند ",
            'At home between 2 and 5 years ' => "در خانه بین 2 تا 5 سال" ,
            'greenhouse 15 years' => "گلخانه 15 ساله" ,
        ];
        $shelfLifeit = [
            'long' => 'lungo',
            '1 week' => '1 settimana',
            'Just these few days ' => 'Solo questi pochi giorni',
            'they keep it frozen and dry for a long time' => 'lo tengono congelato e asciutto per lungo tempo',
            'At home between 2 and 5 years ' => 'A casa tra i 2 e i 5 anni',
            'greenhouse 15 years' => 'serra 15 anni',
        ];

        $newshelfLife = [];
        foreach (array_unique($shelfLife) as $val) {
            $newshelfLife[] = [
                'attribute_type_id' => 7,
                'name' => ucfirst($val),
                'slug' => Str::slug($val),
                'names' => json_encode([
                    'fa' => $shelfLifefa[$val],
                    'it' => ucfirst($shelfLifeit[$val]),
                ])
            ];
        }

        $packaging = [
            'Plastic glasses',
            'glass',
            'Open',
            'nylon packages',
            'envelopes',
            'plastic packaging',
            'nylon',
            'Paper',
            'plastic envelopes',
            'Plastic',
            'cardboard envelope',
            'zip cap',
            'Plastic bottles',
            'plastic packages',
            'clay pots',
            'cardboard packages',
        ];
        $packagingfa = [
            'Plastic glasses' => "عینک پلاستیکی",
            'glass' => 'شیشه',
            'Open' => 'باز کن',
            'nylon packages' => "بسته های نایلونی",
            'envelopes' => "پاکت",
            'plastic packaging' => 'بسته بندی پلاستیکی',
            'nylon' => "نایلون",
            'Paper' => 'کاغذ',
            'plastic envelopes' => "پاکت های پلاستیکی",
            'Plastic' => "پلاستیک",
            'cardboard envelope' => "پاکت مقوایی",
            'zip cap' => 'زیپ کلاه',
            'Plastic bottles' => 'بطری های پلاستیکی',
            'plastic packages' => "بسته های پلاستیکی",
            'clay pots' => "گلدان های سفالی",
            'cardboard packages' => "بسته های مقوایی",
        ];
        $packagingit = [
            'Plastic glasses' => 'Bicchieri di plastica',
            'glass' => 'bicchiere',
            'Open' => 'Aprire',
            'nylon packages' => 'pacchetti in nylon',
            'envelopes' => 'buste',
            'plastic packaging' => 'Confezione di plastica',
            'nylon' => 'nylon',
            'Paper' => 'Carta',
            'plastic envelopes' => 'buste di plastica',
            'Plastic' => 'Plastica',
            'cardboard envelope' => 'busta di cartone',
            'zip cap' => 'tappo con cerniera',
            'Plastic bottles' => 'Bottiglie di plastica',
            'plastic packages' => 'pacchetti di plastica',
            'clay pots' => "vasi d'argilla",
            'cardboard packages' => "pacchetti di cartone",
        ];

        $newpackaging = [];
        foreach (array_unique($packaging) as $val) {
            $newpackaging[] = [
                'attribute_type_id' => 8,
                'name' => ucfirst($val),
                'slug' => Str::slug($val),
                'names' => json_encode([
                    'fa' => $packagingfa[$val],
                    'it' => ucfirst($packagingit[$val]),
                ])
            ];
        }

        $brands = [
            'Small Nabata',
            'Heritage',
            'Mumtaz',
            'Ond',
            'Zargol',
            'Paradise Garden',
            'Tubi',
            'feyz',
            'Nab',
            'Tektam',
            'garden of heaven',
            'Narun',
            'atarak',
            'Rabi',
            'bahareh',
            'Daraman',
            'Gul Pak',
        ];
        $brandsfa = [
            'Small Nabata' => 'Small Nabata',
            'Heritage' => 'Heritage',
            'Mumtaz' => 'Mumtaz',
            'Ond' => 'Ond',
            'Zargol' => 'Zargol',
            'Paradise Garden' => 'Paradise Garden',
            'Tubi' => 'Tubi',
            'feyz' => 'feyz',
            'Nab' => 'Nab',
            'Tektam' => 'Tektam',
            'garden of heaven' => 'garden of heaven',
            'Narun' => 'Narun',
            'atarak' => 'atarak',
            'Rabi' => 'Rabi',
            'bahareh' => 'bahareh',
            'Daraman' => 'Daraman',
            'Gul Pak' => 'Gul Pak',
        ];
        $brandsit = [
            'Small Nabata' => 'Small Nabata',
            'Heritage' => 'Heritage',
            'Mumtaz' => 'Mumtaz',
            'Ond' => 'Ond',
            'Zargol' => 'Zargol',
            'Paradise Garden' => 'Paradise Garden',
            'Tubi' => 'Tubi',
            'feyz' => 'feyz',
            'Nab' => 'Nab',
            'Tektam' => 'Tektam',
            'garden of heaven' => 'garden of heaven',
            'Narun' => 'Narun',
            'atarak' => 'atarak',
            'Rabi' => 'Rabi',
            'bahareh' => 'bahareh',
            'Daraman' => 'Daraman',
            'Gul Pak' => 'Gul Pak',
        ];

        $newbrands = [];
        foreach (array_unique($brands) as $brand) {
            $newbrands[] = [
                'attribute_type_id' => 9,
                'name' => ucfirst($brand),
                'slug' => Str::slug($brand),
                'names' => json_encode([
                    'fa' => $brandsfa[$brand],
                    'it' => ucfirst($brandsit[$brand]),
                ])
            ];
        }

        $advantages = [
            "It is a tonic for the stomach, heart, liver and nerves and is considered a strong sedative",
            "it is useful for relieving headaches and bad breath.",
            "Strengthening the heart and opening blood vessels",
            "treating diabetes",
            "treating digestive problems",
            "treating anemia and tuberculosis",
            "It is useful for treating kidney pain",
            "purifying the blood and has strong antioxidant properties",
            "treating skin disorders",
            "production of red blood cells",
            "rich source of iron",
            "relief of menstrual cramps",
            "relief of indigestion, especially flatulence",
            "Diabetes, properties of purslane in pregnancy, properties of purslane for hair, properties of purslane for skin, properties of purslane for stomach",
            "Maintaining the health of the liver and treating liver disorders pointed out",
            "causes increase in breast milk",
            "Disinfection of the body",
            "against whooping cough and fever and chills.",
            "It is brittle for kidney stones, bladder and laxative and also reduces bladder pain. This plant prevents bladder infections due to its diuretic properties",
            "Relieving digestive and stomach problems, reducing arthritis pain, preventing bacterial infections, strengthening the body's immune system and reducing the possibility of heart diseases",
            "Strengthens the heart, soothes and relieves pain and fatigue",
            "relieves swelling and improves the function of the digestive system",
            "leek prevents cancer due to its magnesium content, and its penicillin properties are beneficial for the pulmonary system",
            "eating leek after meals prevents stomach acidification",
            "Being appetizing, treating heart diseases, treating boils and mouth sores, disinfecting respiratory tubes, treating colds and flu, treating allergies caused by runny nose, treating constipation.",
            "Treatment of pimples and acne, oregano sweat and treatment of colds, oregano sweat to treat insomnia, oregano sweat and relieve menstrual pain, oregano sweat to treat sinusitis, oregano sweat as an antitussive and expectorant.",
            "The poultice should be used to remove bruises, inflammation, insect bites and similar cases, and if taken orally, it would be useful in the treatment of some diseases of the respiratory system and problems of the digestive system.",
            "Treatment of ear pus, pour two drops of willow sweat into the ear. To treat acne on the face, mix willow sweat well with rose water and egg white. Headache relief",
            "It has anti-bacterial, anti-inflammatory and disinfectant properties and helps to eliminate toxins from the body and increase appetite",
            "it is also used to treat nosebleeds.",
            ": They prevent the damage of solar ultraviolet rays on the body and are effective in skin health and treatment of eczema and acne diseases.",
            "Improves diabetes, activates the adrenal gland and regulates adrenaline secretion, prevents heart and brain attacks, anti-stress and anxiety.",
            "sweat is a strong appetite stimulant and is useful for relieving nervous weakness, sadness and depression; It is also invigorating and relieves chest discomfort",
            "Treatment of diarrhea and bloody diarrhea, heart and stomach booster, treatment of asthma and shortness of breath",
            "Cleaning the air of the house from pollution and chemicals",
            "It is a pain reliever, diaphoretic and windbreaker, and its effect is greater if it is boiled in oil. Anise seeds as pain reliever in migraine discomfort, aromatic, disinfectant",
            "The treatment of asthma and lung diseases, sore throats and colds plays a big role. It also improves the function of the digestive system and the heart system",
            "It is useful to treat diarrhea and flatulence",
            "to treat abnormal uterine secretions",
            "black under their eyes should be boiled: Wormwood",
            "To remove infection of women",
            "cures fever",
            "for health of body and skin",
            "Alleviating bile problems",
            "reducing blood sugar",
            "dried skin of Etrej is useful for removing bad breath",
            "strengthening the heart",
        ];
        $advantagesit = [
            "It is a tonic for the stomach, heart, liver and nerves and is considered a strong sedative" => "È un tonico per lo stomaco, il cuore, il fegato e i nervi ed è considerato un forte sedativo",
            "it is useful for relieving headaches and bad breath." => "è utile per alleviare il mal di testa e l'alito cattivo.",
            "Strengthening the heart and opening blood vessels" => "Rafforzare il cuore e aprire i vasi sanguigni",
            "treating diabetes" => "curare il diabete",
            "treating digestive problems" => "trattare i problemi digestivi",
            "treating anemia and tuberculosis" => "curare l'anemia e la tubercolosi",
            "It is useful for treating kidney pain" => "È utile per curare il dolore ai reni",
            "purifying the blood and has strong antioxidant properties" => "purificante del sangue e ha spiccate proprietà antiossidanti",
            "treating skin disorders" => "trattare i disturbi della pelle",
            "production of red blood cells" => "produzione di globuli rossi",
            "rich source of iron" => "ricca fonte di ferro",
            "relief of menstrual cramps" => "sollievo dai crampi mestruali",
            "relief of indigestion, especially flatulence" => "Sollievo dall'indigestione, in particolare dalla flatulenza",
            "Diabetes, properties of purslane in pregnancy, properties of purslane for hair, properties of purslane for skin, properties of purslane for stomach" => "Diabete, proprietà della portulaca in gravidanza, proprietà della portulaca per i capelli, proprietà della portulaca per la pelle, proprietà della portulaca per lo stomaco",
            "Maintaining the health of the liver and treating liver disorders pointed out" => "Il mantenimento della salute del fegato e il trattamento dei disturbi del fegato ha sottolineato",
            "causes increase in breast milk" => "provoca aumento del latte materno",
            "Disinfection of the body" => "Disinfezione del corpo",
            "against whooping cough and fever and chills." => "contro la pertosse, la febbre e i brividi.",
            "It is brittle for kidney stones, bladder and laxative and also reduces bladder pain. This plant prevents bladder infections due to its diuretic properties" => "È fragile per calcoli renali, vescica e lassativo e riduce anche il dolore alla vescica. Questa pianta previene le infezioni della vescica grazie alle sue proprietà diuretiche",
            "Relieving digestive and stomach problems, reducing arthritis pain, preventing bacterial infections, strengthening the body's immune system and reducing the possibility of heart diseases" => "Alleviare i problemi digestivi e di stomaco, ridurre il dolore da artrite, prevenire le infezioni batteriche, rafforzare il sistema immunitario del corpo e ridurre la possibilità di malattie cardiache",
            "Strengthens the heart, soothes and relieves pain and fatigue" => "Rafforza il cuore, lenisce e allevia il dolore e la fatica",
            "relieves swelling and improves the function of the digestive system" => "allevia il gonfiore e migliora la funzione dell'apparato digerente",
            "leek prevents cancer due to its magnesium content, and its penicillin properties are beneficial for the pulmonary system" => "il porro previene il cancro grazie al suo contenuto di magnesio e le sue proprietà di penicillina sono benefiche per il sistema polmonare",
            "eating leek after meals prevents stomach acidification" => "mangiare porro dopo i pasti previene l'acidificazione dello stomaco",
            "Being appetizing, treating heart diseases, treating boils and mouth sores, disinfecting respiratory tubes, treating colds and flu, treating allergies caused by runny nose, treating constipation." => "Essere appetitoso, curare le malattie cardiache, curare i foruncoli e le ulcere della bocca, disinfettare le vie respiratorie, curare il raffreddore e l'influenza, curare le allergie causate dal naso che cola, curare la stitichezza.",
            "Treatment of pimples and acne, oregano sweat and treatment of colds, oregano sweat to treat insomnia, oregano sweat and relieve menstrual pain, oregano sweat to treat sinusitis, oregano sweat as an antitussive and expectorant." => "Trattamento di brufoli e acne, sudore di origano e trattamento del raffreddore, sudore di origano per curare l'insonnia, sudore di origano e alleviare i dolori mestruali, sudore di origano per curare la sinusite, sudore di origano come antitosse ed espettorante.",
            "The poultice should be used to remove bruises, inflammation, insect bites and similar cases, and if taken orally, it would be useful in the treatment of some diseases of the respiratory system and problems of the digestive system." => "Il cataplasma dovrebbe essere usato per rimuovere lividi, infiammazioni, punture di insetti e casi simili, e se assunto per via orale, sarebbe utile nella cura di alcune malattie dell'apparato respiratorio e problemi dell'apparato digerente.",
            "Treatment of ear pus, pour two drops of willow sweat into the ear. To treat acne on the face, mix willow sweat well with rose water and egg white. Headache relief" => "Trattamento del pus dell'orecchio, versa due gocce di sudore di salice nell'orecchio. Per curare l'acne sul viso, mescola bene il sudore di salice con acqua di rose e albume d'uovo. Sollievo dal mal di testa",
            "It has anti-bacterial, anti-inflammatory and disinfectant properties and helps to eliminate toxins from the body and increase appetite" => "Ha proprietà antibatteriche, antinfiammatorie e disinfettanti e aiuta a eliminare le tossine dal corpo e ad aumentare l'appetito",
            "it is also used to treat nosebleeds." => "è anche usato per trattare il sangue dal naso.",
            ": They prevent the damage of solar ultraviolet rays on the body and are effective in skin health and treatment of eczema and acne diseases." => ": Prevengono i danni dei raggi ultravioletti solari sul corpo e sono efficaci nella salute della pelle e nel trattamento dell'eczema e delle malattie dell'acne.",
            "Improves diabetes, activates the adrenal gland and regulates adrenaline secretion, prevents heart and brain attacks, anti-stress and anxiety." => "Migliora il diabete, attiva la ghiandola surrenale e regola la secrezione di adrenalina, previene attacchi cardiaci e cerebrali, antistress e ansia.",
            "sweat is a strong appetite stimulant and is useful for relieving nervous weakness, sadness and depression; It is also invigorating and relieves chest discomfort" => "il sudore è un forte stimolante dell'appetito ed è utile per alleviare la debolezza nervosa, la tristezza e la depressione; è anche tonificante e allevia il disagio toracico",
            "Treatment of diarrhea and bloody diarrhea, heart and stomach booster, treatment of asthma and shortness of breath" => "Trattamento della diarrea e diarrea sanguinolenta, richiamo del cuore e dello stomaco, trattamento dell'asma e mancanza di respiro",
            "Cleaning the air of the house from pollution and chemicals" => "Pulire l'aria della casa da inquinamento e sostanze chimiche",
            "It is a pain reliever, diaphoretic and windbreaker, and its effect is greater if it is boiled in oil. Anise seeds as pain reliever in migraine discomfort, aromatic, disinfectant" => "È un antidolorifico, diaforetico e frangivento, e il suo effetto è maggiore se viene bollito in olio. Semi di anice come antidolorifico nel disagio dell'emicrania, aromatico, disinfettante",
            "The treatment of asthma and lung diseases, sore throats and colds plays a big role. It also improves the function of the digestive system and the heart system" => "Il trattamento dell'asma e delle malattie polmonari, del mal di gola e del raffreddore gioca un ruolo importante. Migliora anche la funzione dell'apparato digerente e del sistema cardiaco",
            "It is useful to treat diarrhea and flatulence" => "È utile per curare la diarrea e la flatulenza",
            "to treat abnormal uterine secretions" => "per trattare le secrezioni uterine anomale",
            "black under their eyes should be boiled: Wormwood" => "il nero sotto i loro occhi dovrebbe essere bollito: assenzio",
            "To remove infection of women" => "Per rimuovere l'infezione delle donne",
            "cures fever" => "cura la febbre",
            "for health of body and skin" => "per la salute del corpo e della pelle",
            "Alleviating bile problems" => "Alleviare i problemi di bile",
            "reducing blood sugar" => "riduzione della glicemia",
            "dried skin of Etrej is useful for removing bad breath" => "la pelle secca di Etrej è utile per rimuovere l'alitosi",
            "strengthening the heart" => "rafforzare il cuore",
        ];
        $advantagesfa = [
            "It is a tonic for the stomach, heart, liver and nerves and is considered a strong sedative" => "مقوی معده، قلب، کبد و اعصاب است و آرام بخش قوی محسوب می شود.",
            "it is useful for relieving headaches and bad breath." => "برای تسکین سردرد و بوی بد دهان مفید است.",
            "Strengthening the heart and opening blood vessels" => "تقویت قلب و باز کردن عروق",
            "treating diabetes" => "درمان دیابت",
            "treating digestive problems" => "درمان مشکلات گوارشی",
            "treating anemia and tuberculosis" => "درمان کم خونی و سل",
            "It is useful for treating kidney pain" => "برای درمان درد کلیه مفید است",
            "purifying the blood and has strong antioxidant properties" => "تصفیه کننده خون و دارای خواص آنتی اکسیدانی قوی",
            "treating skin disorders" => "درمان اختلالات پوستی",
            "production of red blood cells" => "تولید گلبول های قرمز",
            "rich source of iron" => "منبع غنی آهن",
            "relief of menstrual cramps" => "تسکین دردهای قاعدگی",
            "relief of indigestion, especially flatulence" => "تسکین سوء هاضمه به ویژه نفخ شکم",
            "Diabetes, properties of purslane in pregnancy, properties of purslane for hair, properties of purslane for skin, properties of purslane for stomach" => "دیابت، خواص خرفه در بارداری، خواص خرفه برای مو، خواص خرفه برای پوست، خواص خرفه برای معده",
            "Maintaining the health of the liver and treating liver disorders pointed out" => "حفظ سلامت کبد و درمان اختلالات کبدی اشاره کرد",
            "causes increase in breast milk" => " باعث افزایش شیر مادر می شود",
            "Disinfection of the body" => "ضد عفونی بدن",
            "against whooping cough and fever and chills." => "در برابر سیاه سرفه و تب و لرز.",
            "It is brittle for kidney stones, bladder and laxative and also reduces bladder pain. This plant prevents bladder infections due to its diuretic properties" => "برای سنگ کلیه شکننده است، مثانه و ملین است و همچنین درد مثانه را کاهش می دهد. این گیاه به دلیل خاصیت ادرارآوری که دارد از عفونت مثانه جلوگیری می کند",
            "Relieving digestive and stomach problems, reducing arthritis pain, preventing bacterial infections, strengthening the body's immune system and reducing the possibility of heart diseases" => "تسکین مشکلات گوارشی و معده، کاهش درد آرتریت، پیشگیری از عفونت های باکتریایی، تقویت سیستم ایمنی بدن و کاهش احتمال بیماری های قلبی",
            "Strengthens the heart, soothes and relieves pain and fatigue" => "تقویت کننده قلب، تسکین دهنده و رفع درد و خستگی",
            "relieves swelling and improves the function of the digestive system" => "تورم را تسکین می دهد و عملکرد دستگاه گوارش را بهبود می بخشد",
            "leek prevents cancer due to its magnesium content, and its penicillin properties are beneficial for the pulmonary system" => "تره به دلیل داشتن منیزیم از سرطان جلوگیری می کند و خواص پنی سیلین آن برای سیستم ریوی مفید است.",
            "eating leek after meals prevents stomach acidification" => "خوردن تره بعد از غذا از اسیدی شدن معده جلوگیری می کند.",
            "Being appetizing, treating heart diseases, treating boils and mouth sores, disinfecting respiratory tubes, treating colds and flu, treating allergies caused by runny nose, treating constipation." =>" اشتها آور بودن، درمان بیماری های قلبی، درمان جوش و آفت دهان، ضدعفونی کردن مجاری تنفسی، درمان سرماخوردگی و آنفولانزا، درمان آلرژی های ناشی از آبریزش بینی، درمان یبوست.",
            "Treatment of pimples and acne, oregano sweat and treatment of colds, oregano sweat to treat insomnia, oregano sweat and relieve menstrual pain, oregano sweat to treat sinusitis, oregano sweat as an antitussive and expectorant." => "درمان جوش و آکنه، عرق پونه کوهی و درمان سرماخوردگی، عرق پونه کوهی برای درمان بی خوابی، عرق پونه کوهی و تسکین دردهای قاعدگی، عرق پونه کوهی برای درمان سینوزیت، عرق پونه کوهی به عنوان ضد سرفه و خلط آور",
            "The poultice should be used to remove bruises, inflammation, insect bites and similar cases, and if taken orally, it would be useful in the treatment of some diseases of the respiratory system and problems of the digestive system." => "ضماد آن باید برای رفع کبودی، التهاب، نیش حشرات و موارد مشابه استفاده شود و در صورت مصرف خوراکی در درمان برخی از بیماری های دستگاه تنفسی و مشکلات دستگاه گوارش مفید باشد.",
            "Treatment of ear pus, pour two drops of willow sweat into the ear. To treat acne on the face, mix willow sweat well with rose water and egg white. Headache relief" => "درمان چرک گوش دو قطره عرق بید در گوش بریزید. برای درمان آکنه صورت عرق بید را با گلاب و سفیده تخم مرغ خوب مخلوط کنید تسکین سردرد",
            "It has anti-bacterial, anti-inflammatory and disinfectant properties and helps to eliminate toxins from the body and increase appetite" => "خواص ضد باکتریایی، ضد التهابی و ضد عفونی کنندگی دارد و به دفع سموم از بدن و افزایش اشتها کمک می کند.",
            "it is also used to treat nosebleeds." => "همچنین برای درمان خونریزی بینی استفاده می شود.",
            ": They prevent the damage of solar ultraviolet rays on the body and are effective in skin health and treatment of eczema and acne diseases." => ": از آسیب اشعه ماوراء بنفش خورشید به بدن جلوگیری می کنند و در سلامت پوست و درمان بیماری های اگزما و آکنه موثر هستند.",
            "Improves diabetes, activates the adrenal gland and regulates adrenaline secretion, prevents heart and brain attacks, anti-stress and anxiety." => "بهبود دیابت، فعال کردن غده فوق کلیوی و تنظیم ترشح آدرنالین، جلوگیری از حملات قلبی و مغزی، ضد استرس و اضطراب است.",
            "sweat is a strong appetite stimulant and is useful for relieving nervous weakness, sadness and depression; It is also invigorating and relieves chest discomfort" => "عرق اشتها آور قوی است و برای رفع ضعف اعصاب، غم و افسردگی مفید است، همچنین نشاط آور است و ناراحتی سینه را برطرف می کند.",
            "Treatment of diarrhea and bloody diarrhea, heart and stomach booster, treatment of asthma and shortness of breath" => "درمان اسهال و اسهال خونی، تقویت کننده قلب و معده، درمان آسم و تنگی نفس",
            "Cleaning the air of the house from pollution and chemicals" => "پاکسازی هوای خانه از آلودگی و مواد شیمیایی",
            "It is a pain reliever, diaphoretic and windbreaker, and its effect is greater if it is boiled in oil. Anise seeds as pain reliever in migraine discomfort, aromatic, disinfectant" => "تسکین دهنده درد، معرق و بادشکن است و اگر در روغن بجوشانند اثر آن بیشتر است. دانه انیسون مسکن درد در ناراحتی های میگرن، معطر، ضدعفونی کننده",
            "The treatment of asthma and lung diseases, sore throats and colds plays a big role. It also improves the function of the digestive system and the heart system" => "درمان آسم و بیماری های ریوی، گلودرد و سرماخوردگی نقش مهمی ایفا می کند. همچنین عملکرد دستگاه گوارش و سیستم قلب را بهبود می بخشد.",
            "It is useful to treat diarrhea and flatulence" => "برای درمان اسهال و نفخ مفید است",
            "to treat abnormal uterine secretions" => "درمان ترشحات غیر طبیعی رحم",
            "black under their eyes should be boiled: Wormwood" => "سیاهی زیر چشمشان را باید بجوشانند: افسنطین",
            "To remove infection of women" => "برای رفع عفونت زنان",
            "cures fever" => "تب را درمان می کند",
            "for health of body and skin" => "برای سلامت بدن و پوست",
            "Alleviating bile problems" => "تسکین مشکلات صفرا",
            "reducing blood sugar" => "کاهش قند خون",
            "dried skin of Etrej is useful for removing bad breath" => "پوست خشک اترج برای رفع بوی بد دهان مفید است",
            "strengthening the heart" => "تقویت قلب",
        ];

        $newadvantages = [];
        foreach (array_unique($advantages) as $advantage) {
            $newadvantages[] = [
                'attribute_type_id' => 1,
                'name' => ucfirst($advantage),
                'slug' => Str::slug($advantage),
                'names' => json_encode([
                    'fa' => $advantagesfa[$advantage],
                    'it' => ucfirst($advantagesit[$advantage]),
                ])
            ];
        }

        $data = array_merge($newadvantages, $newaroma, $newbrands, $newcolors, $newforms, $newpackaging, $newshelfLife, $newstorages, $newTastes);

        // dd($data);

        DB::table('attribute_values')->insert($data);
    }
}
