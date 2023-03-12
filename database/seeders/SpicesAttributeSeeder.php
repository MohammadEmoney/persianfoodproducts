<?php

namespace Database\Seeders;

use App\Models\AttributeValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SpicesAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $advantages = [
            "Treatment of halitosis or bad breath and prevention of cancer and reduction of blood pressure",
            "prevention of phlegm formation in the throat",
            "indigestion",
            "It is useful to clean the uterus and uterus, the bad smell of the uterus",
            "kidney stones",
            "treatment of fatty liver disease",
            "treatment of facial acne",
            "diabetes",
            "women is the same basic and main, mysterious and secret ingredient of Coca-Cola drink",
            "preventing rapid graying of hair",
            "blood thinner, anti-phlegm, anti-flatulent",
            "pepper is a memory and nerve tonic",
            "pepper leaf decoction should be used to treat urinary tract stones",
            "blood thinner. and antitussive",
            "Lowering blood sugar",
            "increasing energy",
            "weight loss",
            "dental health",
            "Preventing Alzheimer's",
            "preventing infection",
            "improving heart function",
            "preventing cancer",
            "treating coughs and colds",
            "dry skin scrub",
            "strengthening body function",
            "Cloves are rich in antioxidants",
            "help protect against cancer",
            "kill bacteria",
            "liver health",
            "bone health",
            "reduce stomach ulcers",
            "Protection of the nervous system",
            "anti-cancer",
            "blood sugar and diabetes",
            "pain relief",
            "anti-inflammatory properties",
            "antibacterial properties",
            "Reducing heart diseases",
            "fighting brain diseases",
            "preventing Alzheimer's",
            "preventing antioxidant cancer",
            "Reducing nausea and fighting flu and colds",
            "traditional medicine",
            "food digestion",
            "Reducing cholesterol, improving the body's immune system, preventing certain cancers and helping digestion",
            "Eliminate fever and diarrhea and help with cardiovascular diseases as well as to reduce skin wrinkles",
            "Heart, liver, Alzheimer's, cancer and Parkinson's",
            "anti-inflammatory",
            "Treatment of constipation",
            "fever",
            "treatment of fatty liver",
            "maintenance of skin and hair health",
            "treatment of stomach ache",
        ];

        $advantagesit = [
            "Trattamento dell'alitosi o alito cattivo e prevenzione del cancro e riduzione della pressione sanguigna",
            "prevenzione della formazione di catarro in gola",
            "indigestione",
            "È utile pulire l'utero e l'utero, il cattivo odore dell'utero",
            "calcoli renali",
            "trattamento della malattia del fegato grasso",
            "trattamento dell'acne facciale",
            "diabete",
            "le donne sono lo stesso ingrediente base e principale, misterioso e segreto della bevanda Coca-Cola",
            "prevenire il rapido ingrigimento dei capelli",
            "fluidificante del sangue, antiflemma, antiflatulenza",
            "il pepe è un tonico della memoria e dei nervi",
            "il decotto di foglie di pepe dovrebbe essere usato per trattare i calcoli delle vie urinarie",
            "fluidificante del sangue. e antitosse",
            "Abbassamento della glicemia",
            "energia crescente",
            "perdita di peso",
            "salute dentale",
            "Prevenire l'Alzheimer",
            "prevenire l'infezione",
            "miglioramento della funzione cardiaca",
            "prevenire il cancro",
            "curare la tosse e il raffreddore",
            "scrub pelle secca",
            "rafforzare la funzione del corpo",
            "I chiodi di garofano sono ricchi di antiossidanti",
            "aiuta a proteggere dal cancro",
            "uccidere i batteri",
            "salute del fegato",
            "Salute delle ossa",
            "ridurre le ulcere allo stomaco",
            "Protezione del sistema nervoso",
            "antitumorale",
            "glicemia e diabete",
            "sollievo dal dolore",
            "proprietà antinfiammatorie",
            "proprietà antibatteriche",
            "Ridurre le malattie cardiache",
            "combattere le malattie cerebrali",
            "prevenire l'Alzheimer",
            "prevenire il cancro antiossidante",
            "Ridurre la nausea e combattere l'influenza e il raffreddore",
            "medicina tradizionale",
            "digestione del cibo",
            "Ridurre il colesterolo, migliorare il sistema immunitario del corpo, prevenire alcuni tumori e aiutare la digestione",
            "Elimina la febbre e la diarrea e aiuta con le malattie cardiovascolari oltre a ridurre le rughe della pelle",
            "Cuore, fegato, Alzheimer, cancro e Parkinson",
            "antinfiammatorio",
            "Trattamento della stitichezza",
            "febbre",
            "trattamento del fegato grasso",
            "mantenimento della salute della pelle e dei capelli",
            "trattamento del mal di stomaco",
        ];

        $advantagesfa = [
            "درمان بوی بد دهان یا بوی بد دهان و پیشگیری از سرطان و کاهش فشار خون",
            "جلوگیری از ایجاد خلط در گلو",
            "سوء هاضمه",
            "مفید است برای پاک کردن رحم و رحم، بوی بد رحم",
            "سنگ کلیه",
            "درمان بیماری کبد چرب",
            "درمان آکنه صورت",
            "دیابت",
            "زنان همان ماده اساسی و اصلی، مرموز و مخفی نوشیدنی کوکاکولا است",
            "جلوگیری از سفید شدن سریع مو",
            "رقیق کننده خون، ضد بلغم، ضد نفخ",
            "فلفل مقوی حافظه و اعصاب است",
            "برای درمان سنگ های مجاری ادراری از جوشانده برگ فلفل استفاده شود",
            "رقیق کننده خون و ضد سرفه",
            "کاهش قند خون",
            "افزایش انرژی",
            "کاهش وزن",
            "سلامت دندان",
            "پیشگیری از آلزایمر",
            "جلوگیری از عفونت",
            "بهبود عملکرد قلب",
            "پیشگیری از سرطان",
            "درمان سرفه و سرماخوردگی",
            "اسکراب پوست خشک",
            "تقویت عملکرد بدن",
            "میخک سرشار از آنتی اکسیدان است",
            "کمک به محافظت در برابر سرطان",
            "کشتن باکتری ها",
            "سلامت کبد",
            "سلامت استخوان",
            "کاهش زخم معده",
            "محافظت از سیستم عصبی",
            "ضد سرطان",
            "قند خون و دیابت",
            "مسکن درد",
            "خواص ضد التهابی",
            "خواص ضد باکتریایی",
            "کاهش بیماری های قلبی",
            "مبارزه با بیماری های مغزی",
            "پیشگیری از آلزایمر",
            "جلوگیری از سرطان آنتی اکسیدان",
            "کاهش حالت تهوع و مبارزه با آنفولانزا و سرماخوردگی",
            "طب سنتی",
            "هضم غذا",
            "کاهش کلسترول، بهبود سیستم ایمنی بدن، پیشگیری از سرطان های خاص و کمک به هضم",
            "از بین بردن تب و اسهال و کمک به بیماری های قلبی عروقی و همچنین کاهش چین و چروک های پوست",
            "قلب، کبد، آلزایمر، سرطان و پارکینسون",
            "ضد التهاب",
            "درمان یبوست",
            "تب",
            "درمان کبد چرب",
            "حفظ سلامت پوست و مو",
            "درمان معده درد",
        ];

        $tastes = [
            "warm",
            "spicy",
            "and spicy, hot and dry",
            "It has no special taste",
            "sweet",
            "They have a citrus scent",
            "bitter",
            "sour",
        ];
        $tastesit = [
            "Caldo",
            "speziato",
            "e speziato, caldo e secco",
            "Non ha un sapore speciale",
            "dolce",
            "Hanno un profumo di agrumi",
            "amaro",
            "acido",
        ];

        $tastesfa = [
            "گرم",
            "تند",
            "و تند، گرم و خشک",
            "طعم خاصی ندارد",
            "شیرین",
            "آنها رایحه مرکبات دارند",
            "تلخ",
            "ترش",
        ];

        $colors = [
            "Green",
            "White",
            "Black",
            "White flowers",
            "yellow",
            "green and gray flowers",
            "Red",
            "Gray",
            "Stain",
            "brown",
        ];

        $colorsit = [
            "Verde",
            "Bianco",
            "Nero",
            "Fiori bianchi",
            "giallo",
            "fiori verdi e grigi",
            "Rosso",
            "Grigio",
            "Macchia",
            "marrone",
        ];
        $colorsfa = [
            "سبز",
            "سفید",
            "سیاه",
            "گل های سفید",
            "رنگ زرد",
            "گلهای سبز و خاکستری",
            "قرمز",
            "خاکستری",
            "لکه",
            "رنگ قهوه ای",
        ];

        $aroma = [
            "Fragrant",
            "Smells like thyme",
            "spicy",
            "does not have",
            "Fragrant and spicy",
        ];

        $aromait = [
            "Fragrante",
            "Odora di timo",
            "speziato",
            "non ha",
            "Fragrante e speziato",
        ];
        $aromafa = [
            "معطر",
            "بوی آویشن",
            "تند",
            "ندارد",
            "معطر و تند",
        ];

        $form = [
            "Grain",
            "powder",
            "Small, oval and striped shape",
            "round and small",
            "In the shape of a small oval",
            "10 cm wood and powder",
            "Leaf and powder",
            "powder",
            "Powdered and fresh",
            "Powdered and fresh",
            "powder",
            "Powdered",
            "dried",
            "Small and slightly elongated seed",
        ];

        $formit = [
            "Grano",
            "polvere",
            "Forma piccola, ovale e rigata",
            "rotondo e piccolo",
            "A forma di piccolo ovale",
            "10 cm legno e polvere",
            "Foglia e polvere",
            "polvere",
            "In polvere e fresco",
            "In polvere e fresco",
            "polvere",
            "in polvere",
            "secco",
            "Seme piccolo e leggermente allungato",
        ];
        $formfa = [
            "غلات",
            "پودر",
            "کوچک، بیضی و راه راه",
            "گرد و کوچک",
            "به شکل یک بیضی کوچک",
            "چوب و پودر 10 سانتی متر",
            "برگ و پودر",
            "پودر",
            "پودر و تازه",
            "پودر و تازه",
            "پودر",
            "پودر شده",
            "خشک شده",
            "دانه کوچک و کمی دراز"
        ];

        $storage = [
            "Store in a dry place away from moisture",
            "Store in a dry place away from moisture and direct sunlight",
            "Stored in a dry place",
            "Store in a dry place",
            "Store in a dry and cool place",
        ];

        $storageit = [
            "Conservare in un luogo asciutto e lontano dall'umidità",
            "Conservare in un luogo asciutto, lontano dall'umidità e dalla luce solare diretta",
            "Conservato in un luogo asciutto",
            "Conservare in un luogo asciutto",
            "Conservare in luogo fresco e asciutto",
        ];
        $storagefa = [
            "در جای خشک و دور از رطوبت نگهداری شود",
            "در جای خشک و دور از رطوبت و نور مستقیم خورشید نگهداری شود",
            "در جای خشک نگهداری می شود",
            "در یک جای خشک نگه داری شود",
            "در جای خشک و خنک نگهداری شود"
        ];

        $shelfLife = [
            "long",
            "limited"
        ];

        $shelfLifeit = [
            "lungo",
            "limitato"
        ];
        $shelfLifefa = [
            "طولانی",
            "محدود"
        ];

        $packaging = [
            "Plastic",
            "cardboard packages",
            "Metal can",
            "Zip lock",
            "Cardboard can",
            "Vacuum"
        ];

        $packagingit = [
            "Plastica",
            "pacchetti di cartone",
            "Lattina di metallo",
            "Chiusura lampo",
            "Lattina di cartone",
            "Vuoto"
        ];
        $packagingfa = [
            "پلاستیک",
            "بسته های مقوایی",
            "قوطی فلزی",
            "قفل فایل های فشرده",
            "قوطی قوطی",
            "خلاء"
        ];

        $brands = [
            "Akbar",
            "Mumtaz",
            "Saharkhaiz",
            "Mustafavi",
            "Namazi",
            "Alipour Attar",
            "Niarki",
            "golha",
            "sahar khiz",
            "atarak",
            "taravat",
            "roisa",
            "golestan",
            "terneh",
            "salam atar",
            "momtaz",
            "bartar",
        ];
        $newTastes = [];
        $newcolors = [];
        $newaroma = [];
        $newforms = [];
        $newstorages = [];
        $newshelfLife = [];
        $newpackaging = [];
        $newbrands = [];
        $newadvantages = [];
        foreach (array_unique($advantages) as $key => $advantage) {
            $newadvantages[] = [
                'attribute_type_id' => 1,
                'name' => ucfirst($advantage),
                'slug' => Str::slug($advantage),
                'names' => json_encode([
                    'fa' => $advantagesfa[$key],
                    'it' => ucfirst($advantagesit[$key]),
                ])
            ];
        }

        foreach (array_unique($tastes) as $key => $taste) {
            $newTastes[] = [
                'attribute_type_id' => 2,
                'name' => ucfirst($taste),
                'slug' => Str::slug($taste),
                'names' => json_encode([
                    'fa' => $tastesfa[$key],
                    'it' => ucfirst($tastesit[$key]),
                ])
            ];
        }

        foreach (array_unique($colors) as $key =>  $color) {
            $newcolors[] = [
                'attribute_type_id' => 3,
                'name' => ucfirst($color),
                'slug' => Str::slug($color),
                'names' => json_encode([
                    'fa' => $colorsfa[$key],
                    'it' => ucfirst($colorsit[$key]),
                ])
            ];
        }

        foreach (array_unique($aroma) as $key =>  $val) {
            $newaroma[] = [
                'attribute_type_id' => 4,
                'name' => ucfirst($val),
                'slug' => Str::slug($val),
                'names' => json_encode([
                    'fa' => $aromafa[$key],
                    'it' => ucfirst($aromait[$key]),
                ])
            ];
        }

        foreach (array_unique($form) as $key =>  $form) {
            $newforms[] = [
                'attribute_type_id' => 5,
                'name' => ucfirst($form),
                'slug' => Str::slug($form),
                'names' => json_encode([
                    'fa' => $formfa[$key],
                    'it' => ucfirst($formit[$key]),
                ])
            ];
        }

        foreach (array_unique($storage) as $key =>  $storage) {
            $newstorages[] = [
                'attribute_type_id' => 6,
                'name' => ucfirst($storage),
                'slug' => Str::slug($storage),
                'names' => json_encode([
                    'fa' => $storagefa[$key],
                    'it' => ucfirst($storageit[$key]),
                ])
            ];
        }

        foreach (array_unique($shelfLife) as $key =>  $val) {
            $newshelfLife[] = [
                'attribute_type_id' => 7,
                'name' => ucfirst($val),
                'slug' => Str::slug($val),
                'names' => json_encode([
                    'fa' => $shelfLifefa[$key],
                    'it' => ucfirst($shelfLifeit[$key]),
                ])
            ];
        }

        foreach (array_unique($packaging) as $key =>  $val) {
            $newpackaging[] = [
                'attribute_type_id' => 8,
                'name' => ucfirst($val),
                'slug' => Str::slug($val),
                'names' => json_encode([
                    'fa' => $packagingfa[$key],
                    'it' => ucfirst($packagingit[$key]),
                ])
            ];
        }

        foreach (array_unique($brands) as $brand) {
            $newbrands[] = [
                'attribute_type_id' => 9,
                'name' => ucfirst($brand),
                'slug' => Str::slug($brand),
                'names' => json_encode([
                    'fa' => ucfirst($brand),
                    'it' => ucfirst($brand),
                ])
            ];
        }

        $data = array_merge($newadvantages, $newaroma, $newbrands, $newcolors, $newforms, $newpackaging, $newshelfLife, $newstorages, $newTastes);


        foreach($data as $key => $attr){
            if(AttributeValue::where('name', $attr['name'])->first()){
                unset($data[$key]);
            }
        }

        DB::table('attribute_values')->insert($data);
    }
}
