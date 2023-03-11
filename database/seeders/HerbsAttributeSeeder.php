<?php

namespace Database\Seeders;

use App\Models\AttributeValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HerbsAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $advantages = [
            "Blood pressure reduction",
            "weight loss",
            "antibacterial",
            "blood clot prevention",
            "lowering blood sugar",
            "anti cancer",
            "Protects the liver and blood vessels and strengthens the immune system",
            "full of antioxidants",
            "prevents diabetes",
            "For skin and hair, reducing the monthly pain of constipation, stress, anxiety and lavender and blood pressure",
            "Digestive system health, helping to treat stress and anxiety, speeding up the healing of fractures",
            "removing blood spots from the eyes, clearing nasal congestion, fighting cancer, cardiovascular health",
            "Treatment of stomach pain and chest pains",
            "mint is pain reliever, sedative and regular",
            "The treatment of female or uterine infections of the body's immune system is necessary and useful",
            "a strong antiseptic against fungi and microbes",
            "Anti-inflammatory properties",
            "to reduce diarrhea",
            "treat infection",
            "calcium, potassium, manganese, copper and zinc",
            "Rosemary has strong antioxidants, and has antiseptic, anti-cancer properties.",
            "Tarragon has anti-inflammatory and antioxidant properties",
            "improves kidney, liver and heart function",
            "vitamins A and C, niacin, pyridoxine, folate, riboflavin",
            "Antimicrobial, antioxidant, anticancer, anti-inflammatory and antispasmodic",
            "Preventing cancer",
            "sedative",
            "anti-rheumatism",
            "Strengthening the immune system",
            "improving digestion and treating hemorrhoids",
            "Stomach pains, high blood pressure, bad breath, constipation, nervous disorders, urinary tract infection, arthritis and rheumatism.",
            "Blood sugar control",
            "strengthening hair roots",
            "antibacterial",
            "treating urinary infection and bladder infection",
            "For skin",
            "bone health",
            "freshen breath",
            "prevent cancer",
            "Removal of intestinal worms, treatment of rheumatism, increase of sexual power",
            "properties of nettle for uterus",
            "properties of nettle for diabetes",
            "properties of nettle for prostate",
            "properties of nettle for hair loss",
            "Prevention of cancer",
            "properties of salt for the uterus",
            "properties of salt for easy digestion",
            "properties of salt for menstruation",
            "properties of salt for treating joint pain",
            "properties of salt for allergies",
            "properties of salt for treating diarrhea",
            "properties of salt for weight loss",
            "Prevent abortion and gout",
            "Reduces the symptoms of depression, has a good effect on the quality of sleep",
            "treatment of HIV infection",
            "anxiety",
            "Tonic for the brain and nervous system",
            "Strengthens the stomach, treats stomach ulcers and gastritis",
            "This plant mixed with almond oil is useful for skin problems such as eczema, hives and itching.",
            "properties of sage for diabetes",
            "properties of sage for cough",
            "properties of sage for nerves",
            "properties of sage for memory",
            "properties of sage for infection",
            "properties of sage for uterine infection and finally properties of sage for weight loss",
            "Alfalfa has numerous properties such as reducing the risk of cancer",
            "improving heart function",
            "strengthening the digestive system and controlling blood sugar.",
            "Vitamins A and K, potassium, calcium, fiber, iron, magnesium, manganese, sodium and phosphorus.",
            "Cholesterol regulation",
            "It is a good source of vitamin, phosphorus, calcium, choline, magnesium, iron, potassium, selenium, silicon and zinc. B1, B2, B3, B5 and vitamin",
            "mouth ulcers, stomach disorders treatment, liver protection, stress reduction, rheumatism treatment",
            "This plant is basically poisonous, but in Iran, there are species of alala, especially in the Kerman region, which are not poisonous and are used for heart problems and as a sedative",
            "rheumatism pain, sciatica and joint swelling",
            "Gum as an anti-bacterial, anti-inflammatory and strong pain reliever",
        ];

        $advantagesit = [
            "Riduzione della pressione sanguigna",
             "perdita di peso",
             "antibatterico",
             "prevenzione dei coaguli di sangue",
             "abbassamento della glicemia",
             "anti cancro",
             "Protegge il fegato e i vasi sanguigni e rafforza il sistema immunitario",
             "pieno di antiossidanti",
             "previene il diabete",
             "Per pelle e capelli, riducendo il dolore mensile di stitichezza, stress, ansia e lavanda e pressione sanguigna",
             "Salute dell'apparato digerente, aiuta a trattare lo stress e l'ansia, accelera la guarigione delle fratture",
             "rimuovere le macchie di sangue dagli occhi, eliminare la congestione nasale, combattere il cancro, la salute cardiovascolare",
             "Trattamento del mal di stomaco e dei dolori al petto",
             "la menta è antidolorifica, sedativa e regolare",
             "Il trattamento delle infezioni femminili o uterine del sistema immunitario del corpo è necessario e utile",
             "un forte antisettico contro funghi e microbi",
             "Proprietà antinfiammatorie",
             "per ridurre la diarrea",
             "curare l'infezione",
             "calcio, potassio, manganese, rame e zinco",
             "Il rosmarino ha forti antiossidanti e ha proprietà antisettiche e anticancro.",
             "Il dragoncello ha proprietà antinfiammatorie e antiossidanti",
             "migliora la funzione renale, epatica e cardiaca",
             "vitamine A e C, niacina, piridossina, acido folico, riboflavina",
             "Antimicrobico, antiossidante, antitumorale, antinfiammatorio e antispasmodico",
             "Prevenire il cancro",
             "sedativo",
             "anti-reumatismo",
             "Rafforzare il sistema immunitario",
             "migliorare la digestione e curare le emorroidi",
             "Dolori di stomaco, ipertensione, alitosi, costipazione, disturbi nervosi, infezione del tratto urinario, artrite e reumatismi.",
             "Controllo della glicemia",
             "rafforzare le radici dei capelli",
             "antibatterico",
             "trattamento dell'infezione urinaria e dell'infezione della vescica",
             "Per la pelle",
             "Salute delle ossa",
             "alito fresco",
             "prevenire il cancro",
             "Rimozione dei vermi intestinali, cura dei reumatismi, aumento della potenza sessuale",
             "proprietà dell'ortica per l'utero",
             "proprietà dell'ortica per il diabete",
             "proprietà dell'ortica per la prostata",
             "proprietà dell'ortica per la caduta dei capelli",
             "Prevenzione del cancro",
             "proprietà del sale per l'utero",
             "proprietà del sale per una facile digestione",
             "proprietà del sale per le mestruazioni",
             "proprietà del sale per il trattamento dei dolori articolari",
             "proprietà del sale per le allergie",
             "proprietà del sale per il trattamento della diarrea",
             "proprietà del sale per la perdita di peso",
             "Prevenire l'aborto e la gotta",
             "Riduce i sintomi della depressione, ha un buon effetto sulla qualità del sonno",
             "trattamento dell'infezione da HIV",
             "ansia",
             "Tonico per il cervello e il sistema nervoso",
             "Rinforza lo stomaco, cura le ulcere gastriche e la gastrite",
             "Questa pianta mescolata con olio di mandorle è utile per problemi della pelle come eczema, orticaria e prurito.",
             "proprietà della salvia per il diabete",
             "proprietà della salvia per la tosse",
             "proprietà della salvia per i nervi",
             "proprietà della salvia per la memoria",
             "proprietà della salvia per l'infezione",
             "proprietà della salvia per l'infezione uterina e infine proprietà della salvia per la perdita di peso",
             "L'erba medica ha numerose proprietà come la riduzione del rischio di cancro",
             "miglioramento della funzione cardiaca",
             "rafforzare il sistema digestivo e controllare la glicemia.",
             "Vitamine A e K, potassio, calcio, fibre, ferro, magnesio, manganese, sodio e fosforo.",
             "Regolazione del colesterolo",
             "È una buona fonte di vitamina, fosforo, calcio, colina, magnesio, ferro, potassio, selenio, silicio e zinco. B1, B2, B3, B5 e vitamina",
             "ulcere della bocca, trattamento dei disturbi dello stomaco, protezione del fegato, riduzione dello stress, trattamento dei reumatismi",
             "Questa pianta è fondamentalmente velenosa, ma in Iran esistono specie di alala, soprattutto nella regione di Kerman, che non sono velenose e vengono utilizzate per problemi cardiaci e come sedativo",
             "dolori reumatici, sciatica e gonfiore articolare",
             "Gomma come antibatterico, antinfiammatorio e forte antidolorifico",
        ];

        $advantagesfa = [
             "کاهش فشار خون",
             "کاهش وزن",
             "آنتی باکتریال",
             "پیشگیری از لخته شدن خون",
             "کاهش قند خون",
             "ضد سرطان",
             "از کبد و عروق خونی محافظت می کند و سیستم ایمنی بدن را تقویت می کند",
             "پر از آنتی اکسیدان",
             "از دیابت جلوگیری می کند",
             "برای پوست و مو، کاهش درد ماهانه یبوست، استرس، اضطراب و اسطوخودوس و فشار خون",
             "سلامت دستگاه گوارش، کمک به درمان استرس و اضطراب، تسریع در بهبود شکستگی ها",
             "از بین بردن لکه های خون از چشم، رفع گرفتگی بینی، مبارزه با سرطان، سلامت قلب و عروق",
             "درمان معده درد و درد قفسه سینه",
             "نعنا مسکن، آرام بخش و منظم است",
             "درمان عفونت های زنانه یا رحمی سیستم ایمنی بدن ضروری و مفید است",
             "ضد عفونی کننده قوی در برابر قارچ ها و میکروب ها",
             "خواص ضد التهابی",
             "برای کاهش اسهال",
             "درمان عفونت",
             "کلسیم، پتاسیم، منگنز، مس و روی",
             "رزماری دارای آنتی اکسیدان های قوی است و دارای خواص ضد عفونی کننده و ضد سرطانی است",
             "ترخون دارای خواص ضد التهابی و آنتی اکسیدانی است",
             "بهبود عملکرد کلیه، کبد و قلب",
             "ویتامین های A و C، نیاسین، پیریدوکسین، فولات، ریبوفلاوین",
             "ضد میکروبی، آنتی اکسیدان، ضد سرطان، ضد التهاب و ضد اسپاسم",
             "پیشگیری از سرطان",
             "آرام بخش",
             "ضد روماتیسم",
             "تقویت سیستم ایمنی بدن",
             "بهبود هضم و درمان هموروئید",
             "معده درد، فشار خون بالا، بوی بد دهان، یبوست، اختلالات عصبی، عفونت ادراری، آرتریت و روماتیسم",
             "کنترل قند خون",
             "تقویت ریشه مو",
             "آنتی باکتریال",
             "درمان عفونت ادراری و عفونت مثانه",
             "برای پوست",
             "سلامت استخوان",
             "نفس تازه",
             "جلوگیری از سرطان",
             "رفع کرم روده، درمان روماتیسم، افزایش قوای جنسی",
             "خواص گزنه برای رحم",
             "خواص گزنه برای دیابت",
             "خواص گزنه برای پروستات",
             "خواص گزنه برای ریزش مو",
             "پیشگیری از سرطان",
             "خواص نمک برای رحم",
             "خواص نمک برای هضم آسان",
             "خواص نمک برای قاعدگی",
             "خواص نمک برای درمان درد مفاصل",
             "خواص نمک برای آلرژی",
             "خواص نمک برای درمان اسهال",
             "خواص نمک برای کاهش وزن",
             "جلوگیری از سقط جنین و نقرس",
             "علائم افسردگی را کاهش می دهد، تاثیر خوبی بر کیفیت خواب دارد",
             "درمان عفونت HIV",
             "اضطراب",
             "تونیک مغز و سیستم عصبی",
             "تقویت معده، درمان زخم معده و ورم معده",
             "این گیاه مخلوط با روغن بادام برای مشکلات پوستی مانند اگزما، کهیر و خارش مفید است",
             "خواص مریم گلی برای دیابت",
             "خواص مریم گلی برای سرفه",
             "خواص مریم گلی برای اعصاب",
             "خواص مریم گلی برای حافظه",
             "خواص مریم گلی برای عفونت",
             "خواص مریم گلی برای عفونت رحم و در نهایت خواص مریم گلی برای کاهش وزن",
             "یونجه دارای خواص بی شماری از جمله کاهش خطر ابتلا به سرطان است",
             "بهبود عملکرد قلب",
             "تقویت دستگاه گوارش و کنترل قند خون.",
             "ویتامین های A و K، پتاسیم، کلسیم، فیبر، آهن، منیزیم، منگنز، سدیم و فسفر",
             "تنظیم کلسترول",
             "منبع خوبی از ویتامین، فسفر، کلسیم، کولین، منیزیم، آهن، پتاسیم، سلنیوم، سیلیکون و روی است. B1، B2، B3، B5 و ویتامین",
             "زخم دهان، درمان اختلالات معده، محافظت از کبد، کاهش استرس، درمان روماتیسم",
             "این گیاه اساساً سمی است، اما در ایران گونه‌هایی از آلالا به ویژه در منطقه کرمان وجود دارد که سمی نیستند و برای ناراحتی‌های قلبی و به‌عنوان آرام‌بخش استفاده می‌شوند",
             "درد روماتیسمی، سیاتیک و تورم مفاصل",
             "آدامس به عنوان یک ضد باکتری، ضد التهاب و مسکن قوی",
        ];

        $tastes = [
            "Spicy like an onion",
            "spicy",
            "Spicy and slightly bitter",
            "slightly sour and slightly bitter",
            "warm",
            "bitter",
            "It has no special taste",
            "Tasty",
        ];
        $tastesit = [
            "Piccante come una cipolla",
            "speziato",
            "Piccante e leggermente amaro",
            "leggermente acido e leggermente amaro",
            "Caldo",
            "amaro",
            "Non ha un sapore speciale",
            "Gustoso",
        ];

        $tastesfa = [
            "تند مانند پیاز",
            "تند",
            "تند و کمی تلخ",
            "کمی ترش و کمی تلخ",
            "گرم",
            "تلخ",
            "طعم خاصی ندارد",
            "خوش طعم",
        ];

        $colors = [
            "White with green stems",
             "purple",
             "Black",
             "light brown",
             "Brown",
             "White",
             "pink",
             "Blue",
             "pink flowers",
             "Light cream to bright yellow and from pale orange to the full spectrum of pink, red and crimson",
        ];

        $colorsit = [
            "Bianco con steli verdi",
            "viola",
            "Nero",
            "Marrone chiaro",
            "Marrone",
            "Bianco",
            "rosa",
            "Blu",
            "fiori rosa",
            "Crema chiaro al giallo brillante e dall'arancione pallido allo spettro completo di rosa, rosso e cremisi",
        ];
        $colorsfa = [
            "سفید با ساقه های سبز",
            "رنگ بنفش",
            "سیاه",
            "قهوه ای روشن",
            "رنگ قهوه ای",
            "سفید",
            "رنگ صورتی",
            "آبی",
            "گلهای صورتی",
            "کرم روشن تا زرد روشن و از نارنجی کم رنگ تا طیف کامل صورتی، قرمز و زرشکی",
        ];

        $aroma = [
            "spicy",
            "Fragrant and warm",
            "It has a strong and unpleasant smell",
        ];

        $aromait = [
            "speziato",
            "Fragrante e caldo",
            "Ha un odore forte e sgradevole",
        ];
        $aromafa = [
            "تند",
            "معطر و گرم",
            "بوی قوی و نامطبوع دارد",
        ];

        $form = [
            "narrow and long",
            "fresh",
            "dried",
            "Small leaves",
            "It is a type of flower",
            "it is also available in dry form",
            "extract",
            "Small leaves",
            "Small and slightly elongated leaves",
            "Small leaves",
            "Very small leaves with narrow stems",
            "needle plant",
            "Narrow and slightly elongated leaves",
            "Small leaves",
            "Flower",
            "Oval seed",
            "stem and leaves",
            "Small leaves",
            "Small oval seeds",
            "Small seeds",
            "Small leaves with fine hairs",
            "Stem with narrow and slightly elongated leaves",
            "A palm-sized leaf",
            "flower",
            "Small flowers",
            "flower",
            "Thin stem with small leaves",
            "Small congressional leaves",
            "Flower leaves and sap",
            "It is similar to a rose in the form of its petals both in shape and arrangement",
            "Flower and gum",
        ];

        $formit = [
            "stretto e lungo",
            "fresco",
            "secco",
            "Piccole foglie",
            "È un tipo di fiore",
            "è disponibile anche in forma secca",
            "estratto",
            "Piccole foglie",
            "Foglie piccole e leggermente allungate",
            "Piccole foglie",
            "Foglie molto piccole con steli stretti",
            "pianta dell'ago",
            "Foglie strette e leggermente allungate",
            "Piccole foglie",
            "Fiore",
            "Seme ovale",
            "stelo e foglie",
            "Piccole foglie",
            "Piccoli semi ovali",
            "Piccoli semi",
            "Piccole foglie con peli fini",
            "Fusto con foglie strette e leggermente allungate",
            "Una foglia grande quanto una palma",
            "fiore",
            "Piccoli fiori",
            "fiore",
            "Stelo sottile con foglie piccole",
            "Piccole foglie congressuali",
            "Foglie di fiori e linfa",
            "È simile a una rosa nella forma dei suoi petali sia nella forma che nella disposizione",
            "Fiore e gomma",
        ];
        $formfa = [
            "باریک و بلند",
            "تازه",
            "خشک شده",
            "برگ های کوچک",
            "این یک نوع گل است",
            "به صورت خشک نیز موجود است",
            "استخراج کردن",
            "برگ های کوچک",
            "برگ های کوچک و کمی دراز",
            "برگ های کوچک",
            "برگ های بسیار کوچک با ساقه های باریک",
            "گیاه سوزن",
            "برگ های باریک و کمی دراز",
            "برگ های کوچک",
            "گل",
            "دانه بیضی",
            "ساقه و برگ",
            "برگ های کوچک",
            "دانه های بیضی کوچک",
            "دانه های کوچک",
            "برگ های کوچک با موهای ریز",
            "ساقه با برگهای باریک و کمی دراز",
            "برگی به اندازه کف دست",
            "گل",
            "گل های کوچک",
            "گل",
            "ساقه نازک با برگهای کوچک",
            "برگ های کوچک کنگره",
            "برگ و شیره گل",
            "از نظر شکل و چیدمان شبیه گل رز است",
            "گل و صمغ"
        ];

        $storage = [
            "Store in the refrigerator",
            "Stored in a dry and cool place",
            "Basil leaves are used both fresh and dried and stored in a dry and cool place",
            "Dried lavender is kept in a dry place",
            "This plant is used both as an infusion and fresh plant",
            "Fresh mint is used in drinks and syrups",
            "dried mint is also widely used in cooking",
            "It is mostly consumed dry",
            "oregano sweat",
            "stored in a dry and dark place",
            "Stored in the refrigerator",
            "Consumed fresh",
            "dry",
            "The fresh plant is kept in the refrigerator",
            "the dried plant is kept in a dry and dark place",
            "Dried oysters can be stored for a long time",
            "Store in a dry and dark place",
            "This seed is stored in a dry place in the form of seeds and powder",
            "It is used both fresh and dry and in water",
            "Both fresh and dried and frozen",
            "It is used both dried and powdered",
            "Store in a dry place",
            "This plant is used as an infusion and in powder form",
            "The dried salt is stored in a dry and dark place",
            "In the refrigerator or freezer",
            "They keep it dry in a dry place",
            "Dried chamomile is stored in a dry place",
            "It is consumed dry and stored in a dry place",
            "Most alfalfa sweat and its brew are used and kept in a dark place",
            "This plant is mostly used as an infusion and its oil. Stored in a dry place",
            "It is mostly used as a decoction and its sweat, and it is kept away from sunlight",
            "It is used in the form of powder and tea",
            "stored in a dry place",
            "It is used dry",
            "in a dry place",
        ];

        $storageit = [
            "Conservare in frigorifero",
            "Conservato in luogo fresco e asciutto",
            "Le foglie di basilico si usano sia fresche che essiccate e si conservano in un luogo asciutto e fresco",
            "La lavanda essiccata si conserva in un luogo asciutto",
            "Questa pianta viene utilizzata sia come infuso che come pianta fresca",
            "La menta fresca è usata nelle bevande e negli sciroppi",
            "la menta essiccata è anche molto usata in cucina",
            "Si consuma prevalentemente secco",
            "sudore di origano",
            "conservato in un luogo asciutto e buio",
            "Conservato in frigorifero",
            "Consumato fresco",
            "Asciutto",
            "La pianta fresca si conserva in frigorifero",
            "la pianta essiccata si conserva in un luogo asciutto e buio",
            "Le ostriche essiccate possono essere conservate a lungo",
            "Conservare in un luogo asciutto e buio",
            "Questo seme è conservato in un luogo asciutto sotto forma di semi e polvere",
            "Si usa sia fresco che secco e in acqua",
            "Sia fresco che essiccato e congelato",
            "Si usa sia essiccato che in polvere",
            "Conservare in un luogo asciutto",
            "Questa pianta è usata come infuso e in polvere",
            "Il sale essiccato si conserva in un luogo asciutto e buio",
            "Nel frigorifero o nel congelatore",
            "Lo tengono asciutto in un luogo asciutto",
            "La camomilla essiccata si conserva in un luogo asciutto",
            "Si consuma secco e si conserva in luogo asciutto",
            "La maggior parte del sudore di erba medica e la sua miscela vengono utilizzate e conservate in un luogo buio",
            "Questa pianta è utilizzata principalmente come infuso e il suo olio. Conservato in un luogo asciutto",
            "Si usa soprattutto come decotto e il suo sudore, e si tiene al riparo dalla luce del sole",
            "È usato sotto forma di polvere e tè",
            "conservato in un luogo asciutto",
            "Si usa secco",
            "in un luogo asciutto",
        ];
        $storagefa = [
            "در یخچال نگهداری شود",
            "در جای خشک و خنک نگهداری می شود",
            "برگ ریحان را هم به صورت تازه و هم خشک استفاده می کنند و در جای خشک و خنک نگهداری می کنند",
            "اسطوخودوس خشک شده در جای خشک نگهداری می شود",
            "این گیاه هم به عنوان دم کرده و هم به عنوان گیاه تازه استفاده می شود",
            "نعناع تازه در نوشیدنی ها و شربت ها استفاده می شود",
            "نعنا خشک نیز به طور گسترده ای در آشپزی استفاده می شود",
            "بیشتر به صورت خشک مصرف می شود",
            "عرق پونه کوهی",
            "در جای خشک و تاریک ذخیره می شود",
            "نگهداری در یخچال",
            "مصرف تازه",
            "خشک",
            "گیاه تازه در یخچال نگهداری می شود",
            "گیاه خشک شده در جای خشک و تاریک نگهداری می شود",
            "صدف های خشک را می توان برای مدت طولانی نگهداری کرد",
            "در جای خشک و تاریک نگهداری شود",
            "این دانه به صورت دانه و پودر در جای خشک نگهداری می شود",
            "هم به صورت تازه و هم خشک و در آب استفاده می شود",
            "هم تازه و هم خشک و هم منجمد",
            "هم به صورت خشک و هم به صورت پودر استفاده می شود",
            "در یک جای خشک نگه داری شود",
            "این گیاه به صورت دم کرده و پودر استفاده می شود",
            "نمک خشک شده در جای خشک و تاریک نگهداری می شود",
            "در یخچال یا فریزر",
            "در جای خشک آن را خشک نگه می دارند",
            "بابونه خشک در جای خشک نگهداری می شود",
            "به صورت خشک مصرف می شود و در جای خشک نگهداری می شود",
            "بیشتر عرق یونجه و دم کرده آن در مکان تاریک استفاده می شود",
            "این گیاه بیشتر به صورت دم کرده و روغن آن استفاده می شود و در جای خشک نگهداری می شود",
            "بیشتر به صورت جوشانده و عرق آن استفاده می شود و دور از نور خورشید نگهداری می شود",
            "به شکل پودر و چای استفاده می شود",
            "در جای خشک نگهداری می شود",
            "به صورت خشک استفاده می شود",
            "در جای خشک"
        ];

        $shelfLife = [
            "Fresh chives can be stored for a limited time",
            "dried chives can be stored longer",
            "Dry dill is stored for a long time",
            "Dried basil has a longer shelf life",
            "It is kept dry for a long time",
            "Dried leaves can be stored for a long time",
            "For a limited time",
            "fresh plant in a limited time",
            "dried plant in a long time",
            "Dried can be stored for a long time",
            "It can be kept frozen for months",
            "2 months",
            "limited",
        ];

        $shelfLifeit = [
            "L'erba cipollina fresca può essere conservata per un tempo limitato",
            "l'erba cipollina essiccata può essere conservata più a lungo",
            "L'aneto secco viene conservato a lungo",
            "Il basilico essiccato ha una conservabilità più lunga",
            "Si mantiene asciutto a lungo",
            "Le foglie essiccate possono essere conservate a lungo",
            "Per un tempo limitato",
            "pianta fresca in un tempo limitato",
            "pianta essiccata da molto tempo",
            "Secchi possono essere conservati a lungo",
            "Può essere conservato congelato per mesi",
            "Due mesi",
            "limitato",
        ];
        $shelfLifefa = [
            "پیاز تازه را می توان برای مدت زمان محدودی ذخیره کرد",
            "پیازچه خشک را می توان مدت بیشتری نگهداری کرد",
            "شوید خشک برای مدت طولانی ذخیره می شود",
            "ریحان خشک ماندگاری بیشتری دارد",
            "برای مدت طولانی خشک نگه داشته می شود",
            "برگ های خشک را می توان برای مدت طولانی نگهداری کرد",
            "برای مدت محدود",
            "گیاه تازه در مدت زمان محدود",
            "گیاه خشک شده در مدت زمان طولانی",
            "خشک شده را می توان برای مدت طولانی نگهداری کرد",
            "می توان آن را برای ماه ها منجمد نگه داشت",
            "2 ماه",
            "محدود",
        ];

        $packaging = [
            "Nylon packaging",
            "Cardboard",
            "nylon",
            "zip cap packaging",
        ];

        $packagingit = [
            "Imballaggio in nylon",
            "Cartone",
            "nylon",
            "confezione con tappo a cerniera",
        ];
        $packagingfa = [
            "بسته بندی نایلونی",
            "مقوا",
            "نایلون",
            "بسته بندی درپوش زیپ",
        ];

        $brands = [
            "hatam",
            "dry clean",
            "easy",
            "cool",
            "Spring Green",
            "Golbaran Green",
            "Nab",
            "mountain flower",
            "Guarantor",
            "Atarak",
            "Nab",
            "flowers",
            "dry clean",
            "tiar",
            "Nab",
            "flowers",
            "dry clean",
            "tiar",
            "Green seeds",
            "Top",
            "Flowers",
            "Khatun",
            "Atark",
            "Gizia",
            "Pure",
            "Dry",
            "Balsi",
            "Golestan",
            "Ten Neshin",
            "Flowers",
            "Atark",
            "Tabsem",
            "Sahar Khiz",
            "Top",
            "Haj Jalali",
            "Flowers",
            "Newer Green",
            "Cold and Fresh",
            "Kachin",
            "Superior",
            "superior",
            "pure",
            "dawn",
            "One thousand and one leaves",
            "Muskestan",
            "Golestan",
            "Atarak",
            "superior",
            "thousand and one leaves",
            "atarak",
            "atarak",
            "nab",
            "Arum Eda",
            "progress",
            "superior",
            "atarak",
            "atarak",
            "atarak",
            "saharnaz",
            "Shahgul",
            "Gol Behesht",
            "Tobi",
            "Green Gulbaran",
            "Setin",
            "atarak",
            "bita",
            "kesht zareh",
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
