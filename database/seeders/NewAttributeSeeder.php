<?php

namespace Database\Seeders;

use App\Models\AttributeValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $advantages = [
            "Improving digestive and cardiovascular health and helping to treat cancer, insomnia, macular degeneration, it is a rich source of vitamin C, and its vitamin C content is more than oranges.",
            "A lot of fiber",
            "strong anti-cancer",
            "antioxidant",
            "improvement of asthma, respiratory problems ",
            "Treatment of high cholesterol, obesity, cancer, nervous system diseases",
            "You can cleanse the lungs",
            "Liver health and improve fatty liver",
            "Treatment of acne and acne",
            "remove the effects of sunburn",
            "treatment of dandruff and removal of wrinkles",
            "Antibacterial properties cleans, removes harmful microorganisms and other toxins from the body",
            "treats various stomach problems and strengthens the body's immune system",
            "Omani lemon prevents inflammation and colds",
            "Soothes the nerves",
            "Strengthens the stomach and improves anemia",
            "Prevents the occurrence of cancer and treats insomnia",
            "manganese",
            "phosphorus",
            "potassium ",
            "Calcium ",
            "Dietary fiber",
            "It is anti-bacterial and anti-fungal and prevents the occurrence of fungal infections and bacterial infections by preventing the attachment of bacteria to the cells of the human body.",
            "dilator of heart vessels",
            "bitter mouth, anorexia, bad breath, constipation and pale color",
            "cures inflammation and swelling of the kidneys",
            "Reduce blood sugar",
            "destroy harmful intestinal bacteria",
            "strengthen the body's immune system",
            'Potassium, magnesium, zinc, copper, manganese and iron',
            'lowering blood pressure',
            'laxative and anti-constipation',
            'prevents colon cancer',
            "Improves heart health, lowers blood cholesterol levels, prevents vision loss",
            "treats respiratory diseases, helps strengthen bones",
            "The fruit is appetizing and is used to improve children's appetite",
            "high amounts of vitamins",
            "anti-aging",
            "treatment of arthritis and gout diseases C and collagen",
            "Preventing cancer",
            "prolonging life",
            "purifying the blood",
            "strengthening the kidneys",
            "cleansing the liver",
            "Reducing heart diseases, preventing cancer and improving brain function are some of the benefits of walnuts.",
            "It is soothing and antipyretic and quenches thirst and cures shivering due to its safe amount of arsenic.",
            "Niacin, iron, thymine, calcium, phosphate, riboflavin, flavonoid, octopamine, synephrine, tyramine, hordenine, myrcene, limonene, folic acid",
            "skin wrinkle removal, antidepressant, treatment of joint disorders, antitumor properties, cancer prevention",
            "It is used before meals to remove obesity",
            "before lunch it is useful for treating varicose veins",
            "it is useful for the liver because it is a blood purifier",
            "it is a rich source of folate, iron, calcium and other minerals",
            "Strengthens the stomach, spleen and digestive system",
            "prevents heart problems",
            "makes teeth resistant to decay. Jujube tea has an anti-cancer substance and also restores damaged tissues and strengthens muscles",
            "Minerals and vitamins are known and it is effective in strengthening the body's immune system due to its antioxidant properties. Elderberry is also a good source of fatty acids",
            "Raisins contain zero cholesterol and are rich in various nutrients",
            "they are a good source of energy, fiber, protein and carbohydrates",
            "It reduces inflammation and is very effective for reducing joint pain. Joint pain has various causes, one of which is osteoporosis",
            "Detoxification, blood purification, strengthening the body's bones and skeleton, treating dizziness, treating insomnia, reducing fever, removing blood congestion in the body",
            "Calcium, potassium, phosphorus, vitamin A, beta-carotene, dietary fiber, iron, vitamin C and vitamin K",
        ];

        $advantagesit = [
            "Migliorando la salute dell'apparato digerente e cardiovascolare e aiutando a curare il cancro, l'insonnia, la degenerazione maculare, è una ricca fonte di vitamina C e il suo contenuto di vitamina C è più delle arance.",
            "Molta fibra",
            "forte anti-cancro",
            "antiossidante",
            "miglioramento dell'asma, problemi respiratori",
            "Trattamento di colesterolo alto, obesità, cancro, malattie del sistema nervoso",
            "Puoi purificare i polmoni",
            "Salute del fegato e miglioramento del fegato grasso",
            "Trattamento dell'acne e dell'acne",
            "rimuovere gli effetti delle scottature",
            "trattamento della forfora e rimozione delle rughe",
            "Le proprietà antibatteriche puliscono, rimuovono i microrganismi dannosi e altre tossine dal corpo",
            "tratta vari problemi di stomaco e rafforza il sistema immunitario del corpo",
            "Il limone dell'Oman previene infiammazioni e raffreddori",
            "Calma i nervi",
            "Rafforza lo stomaco e migliora l'anemia",
            "Previene l'insorgere del cancro e cura l'insonnia",
            "manganese",
            "fosforo",
            "potassio",
            "Calcio",
            "Fibra alimentare",
            "È antibatterico e antimicotico e previene l'insorgenza di infezioni fungine e infezioni batteriche prevenendo l'attaccamento dei batteri alle cellule del corpo umano.",
            "dilatatore dei vasi cardiaci",
            "bocca amara, anoressia, alito cattivo, costipazione e colorito pallido",
            "cura l'infiammazione e il gonfiore dei reni",
            "Ridurre la glicemia",
            "distruggere i batteri intestinali nocivi",
            "rafforzare il sistema immunitario del corpo",
            'Potassio, magnesio, zinco, rame, manganese e ferro',
            'abbassare la pressione sanguigna',
            'lassativo e anti-stitichezza',
            'previene il cancro al colon',
            "Migliora la salute del cuore, abbassa i livelli di colesterolo nel sangue, previene la perdita della vista",
            "cura le malattie respiratorie, aiuta a rafforzare le ossa",
            "Il frutto è appetitoso e viene utilizzato per migliorare l'appetito dei bambini",
            "elevate quantità di vitamine",
            "anti età",
            "trattamento delle malattie da artrite e gotta C e collagene",
            "Prevenire il cancro",
            "prolungare la vita",
            "purificare il sangue",
            "rafforzare i reni",
            "pulire il fegato",
            "Ridurre le malattie cardiache, prevenire il cancro e migliorare la funzione cerebrale sono alcuni dei benefici delle noci.",
            "È lenitivo e antipiretico e disseta e cura i brividi grazie alla sua quantità sicura di arsenico.",
            "Niacina, ferro, timina, calcio, fosfato, riboflavina, flavonoide, octopamina, sinefrina, tiramina, ordenina, mircene, limonene, acido folico",
            "rimozione delle rughe della pelle, antidepressivo, trattamento dei disturbi articolari, proprietà antitumorali, prevenzione del cancro",
            "Si usa prima dei pasti per eliminare l'obesità",
            "prima di pranzo è utile per curare le vene varicose",
            "è utile per il fegato perché è un depuratore del sangue",
            "è una ricca fonte di folato, ferro, calcio e altri minerali",
            "Rinforza lo stomaco, la milza e l'apparato digerente",
            "previene i problemi cardiaci",
            "rende i denti resistenti alla carie. Il tè alla giuggiola ha una sostanza antitumorale e ripristina anche i tessuti danneggiati e rafforza i muscoli",
            "Sono noti minerali e vitamine ed è efficace nel rafforzare il sistema immunitario del corpo grazie alle sue proprietà antiossidanti. Il sambuco è anche una buona fonte di acidi grassi",
            "L'uvetta non contiene colesterolo ed è ricca di vari nutrienti",
            "sono una buona fonte di energia, fibre, proteine e carboidrati",
            "Riduce l'infiammazione ed è molto efficace per ridurre i dolori articolari. Il dolore articolare ha varie cause, una delle quali è l'osteoporosi",
            "Disintossicazione, purificazione del sangue, rafforzamento delle ossa e dello scheletro del corpo, trattamento delle vertigini, trattamento dell'insonnia, riduzione della febbre, rimozione della congestione del sangue nel corpo",
            "Calcio, potassio, fosforo, vitamina A, beta-carotene, fibra alimentare, ferro, vitamina C e vitamina K",
        ];

        $advantagesfa = [
            "بهبود سلامت دستگاه گوارش و قلب و عروق و کمک به درمان سرطان، بی خوابی، دژنراسیون ماکولا، منبع غنی ویتامین C است و ویتامین C موجود در آن بیشتر از پرتقال است.",
             "فیبر زیادی",
             "ضد سرطان قوی",
             "آنتی اکسیدان",
             "بهبود آسم، مشکلات تنفسی",
             "درمان کلسترول بالا، چاقی، سرطان، بیماری های سیستم عصبی",
             "شما می توانید ریه ها را تمیز کنید",
             "سلامت کبد و بهبود کبد چرب",
             "درمان آکنه و آکنه",
             "از بین بردن اثرات آفتاب سوختگی",
             "درمان شوره سر و رفع چین و چروک",
             "خواص آنتی باکتریال، میکروارگانیسم های مضر و سایر سموم را از بدن پاکسازی می کند",
             "درمان مشکلات مختلف معده و تقویت سیستم ایمنی بدن",
             "لیمو عمانی از التهاب و سرماخوردگی جلوگیری می کند",
             "آرام کننده اعصاب",
             "تقویت معده و بهبود کم خونی",
             "جلوگیری از بروز سرطان و درمان بی خوابی",
             "منگنز",
             "فسفر",
             "پتاسیم",
             "کلسیم",
             "فیبر رژیمی",
             "ضد باکتری و ضد قارچ است و با جلوگیری از چسبیدن باکتری ها به سلول های بدن انسان از بروز عفونت های قارچی و باکتریایی جلوگیری می کند.",
             "گشاد کننده عروق قلب",
             "دهان تلخ، بی اشتهایی، بوی بد دهان، یبوست و رنگ پریده",
             "التهاب و تورم کلیه ها را درمان می کند",
             "کاهش قند خون",
             "از بین بردن باکتری های مضر روده",
             "تقویت سیستم ایمنی بدن",
             "پتاسیم، منیزیم، روی، مس، منگنز و آهن،",
             "کاهش فشار خون",
             "ملین و ضد یبوست",
             "از سرطان روده بزرگ جلوگیری می کند",
             "بهبود سلامت قلب، کاهش سطح کلسترول خون، جلوگیری از کاهش بینایی",
             "بیماری های تنفسی را درمان می کند، به تقویت استخوان ها کمک می کند",
             "این میوه اشتها آور است و برای بهبود اشتهای کودکان استفاده می شود",
             "مقدار بالای ویتامین",
             "ضد پیری",
             "درمان آرتریت و بیماری های نقرس C و کلاژن",
             "پیشگیری از سرطان",
             "افزایش عمر",
             "تصفیه خون",
             "تقویت کلیه ها",
             "پاکسازی کبد",
             "کاهش بیماری های قلبی، پیشگیری از سرطان و بهبود عملکرد مغز از فواید گردو است.",
             "آرام بخش و تب بر است و به دلیل داشتن مقدار بی خطر آرسنیک، تشنگی را برطرف می کند و لرز را درمان می کند.",
             "نیاسین، آهن، تیمین، کلسیم، فسفات، ریبوفلاوین، فلاونوئید، اکتوپامین، سینفرین، تیرامین، هوردنین، میرسن، لیمونن، اسید فولیک",
             "رفع چین و چروک پوست، ضد افسردگی، درمان اختلالات مفصلی، خواص ضد توموری، پیشگیری از سرطان",
             "قبل از غذا برای رفع چاقی استفاده می شود",
             "قبل از ناهار برای درمان واریس مفید است",
             "برای کبد مفید است زیرا تصفیه کننده خون است",
             "این منبع غنی از فولات، آهن، کلسیم و سایر مواد معدنی است.",
             "تقویت معده، طحال و دستگاه گوارش",
             "از مشکلات قلبی جلوگیری می کند",
             "دندان ها را در برابر پوسیدگی مقاوم می کند. چای عناب ماده ضد سرطانی دارد و همچنین بافت های آسیب دیده را ترمیم می کند و ماهیچه ها را تقویت می کند",
             "مواد معدنی و ویتامین ها شناخته شده است و به دلیل خاصیت آنتی اکسیدانی در تقویت سیستم ایمنی بدن موثر است. سنجد منبع خوبی از اسیدهای چرب نیز هست",
             "کشمش حاوی کلسترول صفر است و سرشار از مواد مغذی مختلف است.",
             "آنها منبع خوبی از انرژی، فیبر، پروتئین و کربوهیدرات هستند",
             "این دارو التهاب را کاهش می دهد و برای کاهش درد مفاصل بسیار موثر است، درد مفاصل علل مختلفی دارد که یکی از آنها پوکی استخوان است.",
             "سم زدایی، تصفیه خون، تقویت استخوان و اسکلت بدن، درمان سرگیجه، درمان بی خوابی، کاهش تب، رفع گرفتگی خون در بدن",
             "کلسیم، پتاسیم، فسفر، ویتامین A، بتاکاروتن، فیبر غذایی، آهن، ویتامین C و ویتامین K",
        ];

        $tastes = [
            "slightly sour",
            "sour",
            "Sour and slightly bitter",
            "a little spicy",
            "It has no special taste"
        ];
        $tastesit = [
            "leggermente acido",
            "acido",
            "Agro e leggermente amaro",
            "un po' piccante",
            "Non ha un sapore speciale"
        ];

        $tastesfa = [
            "کمی ترش",
            "ترش",
            "ترش و کمی تلخ",
            "کمی تند",
            "مزه خاصی نداره",
        ];

        $colors = [
            "Green",
            "Red",
            "Yellow",
            "Yellow and orange",
            "orange",
            "brown",
            "white",
            "dark red",
            "red",
            "dark purple",
            "black and white",
            "Beiruti's skin is green and she is white",
            "Dark yellow",
            "reddish",
            "Orange skin and red inside",
            "black",
            "pink",
        ];

        $colorsit = [
            "Verde",
            "Rosso",
            "Giallo",
            "Giallo e arancione",
            "arancia",
            "marrone",
            "bianco",
            "rosso scuro",
            "rosso",
            "viola scuro",
            "bianco e nero",
            "La pelle di Beirut è verde e lei è bianca",
            "Giallo scuro",
            "rossastro",
            "Buccia arancione e rosso dentro",
            "nero",
            "rosa",
        ];
        $colorsfa = [
            "سبز",
            "قرمز",
            "رنگ زرد",
            "زرد و نارنجی",
            "نارنجی",
            "رنگ قهوه ای",
            "سفید",
            "قرمز تیره",
            "قرمز",
            "بنفش تیره",
            "سیاه و سفید",
            "پوست بیروت سبز و او سفید است",
            "زرد تیره",
            "قرمز",
            "پوست نارنجی و داخل قرمز",
            "سیاه",
            "رنگ صورتی",
        ];

        $aroma = [
            "A little fragrant",
            "A bit like rose water",
        ];

        $aromait = [
            "Un po' profumato",
            "Un po' come l'acqua di rose",
        ];
        $aromafa = [
            "کمی معطر",
            "کمی شبیه گلاب"
        ];

        $form = [
            "oval shape",
            "Round",
            "small round",
            "Very small ovals",
            "small round",
            "tear shape",
            "small oval",
            "Triangular",
            "small",
            "the bell",
            "Slightly rounded",
            "Grape seeds",
            "Yellow aloe leaves",
        ];

        $formit = [
            "forma ovale",
             "Girare",
             "piccolo tondo",
             "Ovali molto piccoli",
             "piccolo tondo",
             "a forma di lacrima",
             "piccolo ovale",
             "Triangolare",
             "piccolo",
             "la campana",
             "Leggermente arrotondato",
             "Semi d'uva",
             "Foglie di aloe gialle",
        ];
        $formfa = [
            "بیضی شکل",
             "گرد",
             "دور کوچک",
             "بیضی های بسیار کوچک",
             "دور کوچک",
             "شکل اشک",
             "بیضی کوچک",
             "مثلثی",
             "کم اهمیت",
             "زنگ",
             "کمی گرد",
             "دانه انگور",
             "برگ های زرد آلوئه",
        ];

        $storage = [
            "Stored in the refrigerator",
            "in the fridge",
            "It can be stored in the refrigerator",
            "dry and powder can also be used",
            "Store in a dry place",
            "It is stored in the refrigerator",
            "dry and can be used",
            "in a dry place",
            "In a dry place away from the sun",
            "Fresh cherries are kept in the refrigerator",
            "frozen",
            "jam",
            "tea is used",
            "dry",
            "Fresh plums are stored in the refrigerator",
            "dried plums are stored in a dry place",
            "Fresh figs can be stored in the refrigerator for several days",
            "dried figs should be kept in a dry place",
            "Fresh yellow aloe is kept in the refrigerator",
            "dried leaves are kept in a dry and dark place",
            "syrup",
            "They store it fresh in the refrigerator",
            "dry it in a dry place",
            "It is also consumed fresh",
            "It is stored in the refrigerator",
            "compote is also available",
            "It is consumed fresh",
            "orange juice is also used",
            "paste",
            "Dried jujube is used more and stored in a dry place",
            "Both elderberry itself and its powder are used",
            "It is kept fresh in the refrigerator and dried in a dry place",
            "Stored fresh in the refrigerator",
            "dried in a dry place",
            "Stored in a dry place",
        ];

        $storageit = [
            "Conservato in frigorifero",
             "nel frigo",
             "Può essere conservato in frigorifero",
             "si possono usare anche secco e polvere",
             "Conservare in un luogo asciutto",
             "È conservato in frigorifero",
             "asciutto e utilizzabile",
             "in un luogo asciutto",
             "In un luogo asciutto e lontano dal sole",
             "Le ciliegie fresche si conservano in frigorifero",
             "congelato",
             "marmellata",
             "si usa il tè",
             "Asciutto",
             "Le prugne fresche sono conservate in frigorifero",
             "le prugne secche vanno conservate in un luogo asciutto",
             "I fichi freschi possono essere conservati in frigorifero per diversi giorni",
             "i fichi secchi vanno conservati in un luogo asciutto",
             "L'aloe gialla fresca si conserva in frigorifero",
             "le foglie secche sono conservate in un luogo asciutto e buio",
             "sciroppo",
             "Lo conservano fresco in frigorifero",
             "asciugalo in un luogo asciutto",
             "Si consuma anche fresco",
             "È conservato in frigorifero",
             "è disponibile anche la composta",
             "Si consuma fresco",
             "si usa anche il succo d'arancia",
             "impasto",
             "La giuggiola essiccata viene utilizzata di più e conservata in un luogo asciutto",
             "Si usano sia il sambuco stesso che la sua polvere",
             "Si conserva fresco in frigorifero ed essiccato in luogo asciutto",
             "Conservato fresco in frigorifero",
             "essiccato in un luogo asciutto",
             "Conservato in un luogo asciutto",
        ];
        $storagefa = [
            "نگهداری در یخچال",
             "داخل یخچال",
             "قابلیت نگهداری در یخچال",
             "خشک و پودر نیز قابل استفاده است",
             "در یک جای خشک نگه داری شود",
             "در یخچال نگهداری می شود",
             "خشک و قابل استفاده",
             "در جای خشک",
             "در جای خشک و دور از آفتاب",
             "گیلاس تازه در یخچال نگهداری می شود",
             "منجمد",
             "مربا",
             "چای استفاده می شود",
             "خشک",
             "آلو تازه در یخچال نگهداری می شود",
             "آلو خشک در جای خشک نگهداری می شود",
             "انجیر تازه را می توان برای چند روز در یخچال نگهداری کرد",
             "انجیر خشک باید در جای خشک نگهداری شود",
             "آلوئه زرد تازه در یخچال نگهداری می شود",
             "برگ های خشک شده در جای خشک و تاریک نگهداری می شوند",
             "شربت",
             "آنها آن را تازه در یخچال نگهداری می کنند",
             "در جای خشک خشک کن",
             "به صورت تازه هم مصرف می شود",
             "در یخچال نگهداری می شود",
             "کمپوت نیز موجود است",
             "به صورت تازه مصرف می شود",
             "آب پرتقال نیز استفاده می شود",
             "رب",
             "عناب خشک بیشتر مصرف می شود و در جای خشک نگهداری می شود",
             "هم خود سنجد و هم پودر آن استفاده می شود",
             "در یخچال تازه نگهداری می شود و در جای خشک خشک می شود",
             "تازه در یخچال نگهداری می شود",
             "خشک شده در جای خشک",
             "در جای خشک نگهداری می شود",
        ];

        $shelfLife = [
            "It is fresh for 2 weeks, but kiwi powder can be stored for a long time",
            "1 week",
            "2 week",
            "Fresh 2 weeks",
            "long dry",
            "Fresh plums can be stored for 2 weeks and frozen for months",
            "Fresh 1 week",
            "Tare a week",
            "3 to 4 long fresh/dry days",
            "Dried walnuts can be stored for a long time",
            "1 month",
            "long orange juice",
            "Fresh for 1 week",
            "dry, it can be stored for a long time",
        ];

        $shelfLifeit = [
            "È fresco per 2 settimane, ma il kiwi in polvere può essere conservato a lungo",
             "1 settimana",
             "2 settimane",
             "Fresche 2 settimane",
             "a lungo secco",
             "Le prugne fresche possono essere conservate per 2 settimane e congelate per mesi",
             "Fresco 1 settimana",
             "Tara a settimana",
             "da 3 a 4 lunghi giorni freschi/asciutti",
             "Le noci secche si conservano a lungo",
             "1 mese",
             "succo d'arancia lungo",
             "Fresco per 1 settimana",
             "secco, può essere conservato a lungo",
        ];
        $shelfLifefa = [
            "به مدت 2 هفته تازه است، اما پودر کیوی را می توان برای مدت طولانی نگهداری کرد.",
             "1 هفته",
             "2 هفته",
             "تازه 2 هفته",
             "خشک طولانی",
             "آلو تازه را می توان به مدت 2 هفته نگهداری کرد و ماه ها منجمد کرد.",
             "تازه 1 هفته",
             "تار یک هفته",
             "3 تا 4 روز طولانی تازه/خشک",
             "گردوی خشک را می توان برای مدت طولانی نگهداری کرد",
             "1 ماه",
             "آب پرتقال بلند",
             "تازه برای 1 هفته",
             "خشک، می توان آن را برای مدت طولانی ذخیره کرد",
        ];

        $packaging = [
            "Plastic boxes",
            "cardboard packaging",
            "plastic containers",
            "plastic packages",
            "nylon",
            "Box",
            "cardboard packages",
        ];

        $packagingit = [
            "Scatole di plastica",
             "imballo di cartone",
             "contenitori di plastica",
             "pacchetti di plastica",
             "nylon",
             "Scatola",
             "pacchetti di cartone",
        ];
        $packagingfa = [
            "جعبه های پلاستیکی",
             "بسته بندی مقوایی",
             "ظروف پلاستیکی",
             "بسته های پلاستیکی",
             "نایلون",
             "جعبه",
             "بسته های مقوایی",
        ];

        $brands = [
           "rad",
           "dastchin",
            "Vitarad",
            "Miuri",
            "Cultivation",
            "handpicking",
            "azoghe",
            "golha",
            "golestan",
            "atarak",
            "mozhan",
            "mey khosh",
            "khoshk pak",
            "bartar",
            "ghaenat",
            "sahar khiz",
            "hirsha",
            "mahram",
            "shana",
            "Rabi",
            "Bagh Behesht",
            "abgineh",
            "ilmark",
            "momtaz",
            "tavazo",
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
                ], JSON_UNESCAPED_SLASHES)
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
                ], JSON_UNESCAPED_SLASHES)
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
                ], JSON_UNESCAPED_SLASHES)
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
                ], JSON_UNESCAPED_SLASHES)
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
                ], JSON_UNESCAPED_SLASHES)
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
                ], JSON_UNESCAPED_SLASHES)
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
                ], JSON_UNESCAPED_SLASHES)
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
                ], JSON_UNESCAPED_SLASHES)
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
                ], JSON_UNESCAPED_SLASHES)
            ];
        }

        $data = array_merge($newadvantages, $newaroma, $newbrands, $newcolors, $newforms, $newpackaging, $newshelfLife, $newstorages, $newTastes);


        foreach($data as $key => $attr){
            // dd($attr);
            AttributeValue::where('name', $attr['name'])?->update($attr);

            // if(AttributeValue::where('name', $attr['name'])->first()){
            //     unset($data[$key]);
            // }
        }

        // dd($data);

        // DB::table('attribute_values')->insert($data);
    }
}
