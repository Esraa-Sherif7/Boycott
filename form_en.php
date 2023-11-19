<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $boycott_Product_En = array("Maggi","Nescafe","Kitkat","Nespresso","Milo","Nido","Gerber","Coffee Mate","Nesquik","Nestle Pure Life","Forever 21","Calvin Klein","Tommy Hilfighr","MAC","Cocacola","Rani","Vimto","Barbican","M%M's","Skittles","Galaxy","Dove","Snickers", "Knorr","Orbit","Mars","Twix","Pringle's","Cheetos","Bounty","Schweppes","Aquarius","Fanta","Sprite","Dasani","Costa","Papa Joan's","Dominos Pizza","KFC","Baskin Robins","Starbucks","Burger King","Pizza Hut","Hardee's","Supway","Wimpy","Pipsi","Mountain dew","Aquafina","7Up","Tropicana","Miranda","Dorittos","Quanker Oats","Oreo","Milka","Ritz","Cadbury","Kellogg's","heinz","Kraft","Victoria Secret","Olay","Boss","Tomberland","Pampers","Tnag","Danon","Axe","Gillette","Always","Lipton","Chipsy","Lay's","Bpnjorno","Sprite","Dunkin' Donuts","L'Oreal","Vichy","Signal","Lux","Americana","Persil","Tide","Ariel","MacDonald's","Tuc","Vaseline","Maybelline","Crest","Sunsilk","Oral-B","Head & Shoulders","Bath & Body Works","Pantene","Clear","Closup","CeraVe","Comfort","Pril","Vanish","Lifebuoy","Dettol","Clorox","Dawny");
    $boycott_Product_Ar = array("ماجي", "نسكافيه", "كيت كات", "نيسبريسو", "ميلو", "نيدو", "جربر", "كوفي ميت", "نيسكويك", "نستله بيور لايف", "فوريفر 21", "كالفن كلاين", "تومي هيلفيغر", "ماك", "كوكاكولا", "راني", "فيمتو", "باربيكان", "ام اند امز", "سكيتلز", "جالاكسي", "دوف", "سنيكرز" , "كنور", "أوربت", "مارس", "تويكس", "برينجل", "شيتوس", "باونتي", "شويبس", "أكواريوس", "فانتا", "سبرايت", "داساني", " كوستا", "بابا جونز", "دومينوز بيتزا", "كنتاكي", "باسكن روبنز", "ستاربكس", "برجر كنج", "بيتزا هت", "هارديز", "سوب واي", "ومبي", "بيبسي" ,"ماونتن ديو","أكوافينا","سفن اب","تروبيكانا","ميراندا","دوريتوس","كوانكر شوفان","أوريو","ميلكا","ريتز","كادبوري","كيلوقز"," هاينز", "كرافت", "فيكتوريا سيكريت", "أولاي", "بوس", "تومبرلاند", "بامبرز", "تناج", "دانون", "أكس", "جيليت", "أولويز" ,"ليبتون", "شيبسي", "لايز", "بنجورنو", "سبرايت", "دانكن دونتس", "لوريال", "فيشي", "سيجنال", "لوكس", "أمريكانا", " برسيل", "تايد", "ارييل", "ماكدونالدز", "توك", "فازلين", "مايبيلين", "كريست", "صانسيلك", "أورال بي", "هيد آند شولدرز", "باث اند بودي", "بانتين", "كلير", "كلوساب", "سيرا في", "كومفورت", "بريل", "فانيش", "لايف بوي", "ديتزل", "كلوركس", "داوني");
    $NotBoycott_Product_Ar = array("مصر كافيه","سبيرو سباتس","جهينة","كاكاو دريم","ماي واي","ديسباسيتو","فريدة","أوكسي","باهي","أحمد تي","العروسة","على كافيه","بيك رولز","بيج شيبس","تايجر","برافو","لبنيتا","مزارع دينا","هيرو بيبي","فاين بيبي","بييى جوي","بيج كولا","سينا كولا","شان","ديرماتيك","بوباي","كليو","دومتي","باندا","فرجللو","ماي واي","إيفا","سباركل","معجون دابر","ستارفيل","بيزلين","بليس","شي إن");
    $NotBoycott_Product_En = array("Misr Cafe","Spiro Spats","Juhayna","Cocoa Dream","My Way","Despacito","Farida","Oxy","Bahi","Ahmed Tea", "Al Arousa","Ala Café","Bake Rolls","Big Chips","Tiger","Bravo","Labnita","Dina Farms","Hero Baby","Fine Baby","Biyi Joy" ,"Big Cola","Cena Cola","Chan","Dermatic","Popeye","Cleo","Domty","Panda","Fragello","My Way","Eva","Sparkle ","Dabur Toothpaste","Starville","Beesline","Bliss","SheIn");
    $search = $_POST['search'];
    $flag2 = false;
    $flag = false; // declare the $flag variable outside the loops
    $flag_IN = false;
    $flag_IN_2 = false;

    foreach($boycott_Product_En as $ProductEn){
        if($ProductEn == $search){
            $result= " This Product is boycott" ."<br>". "<h6 style='color:red;  text-align: center;'>Thank you for supporting Palestine </h6>";
            header("Location:index.php?msg=".urlencode($result));
            $flag=true;

        }
    };
    foreach($boycott_Product_Ar as $ProductAr){
        if($ProductAr == $search){
            $result = "هذا المنتج ضمن قائمة المقاطعة" ."<br>". "<h6 style='color:red;  text-align: center;'> شكرا لدعمك فلسطين </h6" ;
            header("Location:index.php?msg=".urlencode($result));

       $flag2=true;
        }
    }

    foreach($NotBoycott_Product_Ar as $ProductAr){
        if($ProductAr == $search){
            $result =  "<h4 style='color:Green; text-align: center;'>  هذا المنتج غير مقاطع </h4>" ."<br>". "<h6 style='color:red;  text-align: center;'> شكرا لدعمك فلسطين </h6"  ;
            header("Location:index.php?msg=".urlencode($result));

            $flag_IN=true;
        }
    }
    foreach($NotBoycott_Product_En as $ProductEn){
        if($ProductEn == $search){
            $result= "<h4 style='color:Green; text-align: center;'> This Product is not boycott </h4>" ."<br>"." <h6 style='color:red;  text-align: center;'>Thank you for supporting Palestine </h6>";
            header("Location:index.php?msg=".urlencode($result));
            $flag_IN_2=true;
    }
    }




    if($flag == false && $flag2 == false && $flag_IN == false && $flag_IN_2 == false){
        $result = "This Product is not registed yet in data base, thank you for understanding";
        $result = "  هذا المنتج غير مسجل في قاعدة البيانات بعد , شكرا لتفهمك";
        header("Location:index.php?msg=".urlencode($result));

    }

}



?>