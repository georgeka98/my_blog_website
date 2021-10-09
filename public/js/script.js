window.addEventListener('load', function(){
    greetings();
  }, false)

function greetings(){

    var curr_lang = 0;
    var first_time = true;

    setInterval(
        function(){

            var lang;
            if (first_time){
                lang = 1;
                first_time = false;
            }
            else{
                lang = Math.floor(Math.random() * Math.floor(16));
                while (curr_lang == lang){
                    lang = Math.floor(Math.random() * Math.floor(16));
                    // console.log(lang, curr_lang)
                }
                curr_lang = lang;
            }

            if (lang == 0){
                update_greetings("Hi stranger! I'm", "George Karabassis", "Thank you for stopping by!", lang);
            }
            if (lang == 1){
                update_greetings("Γεια σας! Ειμαι ο", "Γιώργος Καραμπάσης", "Σας ευχαριστω που σταματησατε εδω!", lang);
            }
            if (lang == 2){
                update_greetings("Salut étranger! Je suis", "George Karabassis", "Merci pour la visite!", lang);
            }
            if (lang == 3){
                update_greetings("¡Hola extraño! Soy", "George Karabassis", "Gracias por detenerte!", lang);
            }
            if (lang == 4){
                update_greetings("Oi estranho! Eu sou o", "George Karabassis", "Obrigado pela visita!", lang);
            }
            if (lang == 5){
                update_greetings("Hallo Fremder! Ich bin", "George Karabassis", "Vielen Dank für Ihren Besuch!", lang);
            }
            if (lang == 6){
                update_greetings("Ciao sconosciuto! Sono", "George Karabassis", "Grazie per esserti fermato!", lang);
            }
            if (lang == 7){
                update_greetings("Привет незнакомец! Я", "Джордж Карабассис", "Спасибо, что заглянули!", lang);
            }
            if (lang == 8){
                update_greetings("Merhaba yabancı! Ben", "George Karabassis", "Uğradığınız için teşekkür ederim!", lang);
            }
            if (lang == 9){
                update_greetings("你好，陌生人！我", "是喬治卡拉巴西斯", "謝謝你的到來！", lang);
            }
            if (lang == 10){
                update_greetings("こんにちは見知らぬ人！私は", "ジョージ・カラバシス", "です。立ち寄ってくれてありがとう！", lang);
            }
            if (lang == 11){
                update_greetings("안녕 이방인! 나는", "조지 카라 바시 스", "들러 주셔서 감사합니다!", lang);
            }
            if (lang == 12){
                update_greetings("ہیلو اجنبی! میں ہوں", "جارج کراباسس", "کی طرف سے روکنے کے لئے آپ کا شکریہ!", lang); //urdu
            }
            if (lang == 13){
                update_greetings("হাই নবজাতক! আমি", "জর্জ কারবাসিস", "থেমে থাকার জন্য ধন্যবাদ!", lang); //bangla
            }
            if (lang == 14){
                update_greetings("हाय अजनबी! मैं हूँ", "जॉर्ज करबासीस", "रुकने के लिए धन्यवाद!", lang); //hindi
            }
            if (lang == 15){
                update_greetings("مرحباً بك أيها الزائر","أنا جورج كارابيسس","شكراً لزيارتك", lang); //arabic
            }
        }, 
    5000);

    function update_greetings(hello, name, teaser, lang){
        var elements = [document.getElementsByClassName("welcome")[0], document.getElementsByClassName("full-name")[0], document.getElementsByClassName("welcome-subtitle-teaser")[0]];

        opacity_change(elements, 0.00, -0.05, lang, function(){
            elements[0].innerHTML = hello;
            elements[1].innerHTML = name;
            elements[2].innerHTML = teaser;
        
            opacity_change(elements, 1.00, 0.05, lang);
        });

    }
}

function opacity_change(elements, final_val, change, lang, callback){

    if (elements == undefined || final_val == undefined || change == undefined){
        return;
    }

    var opacity_increment = change > 0 ? 0 : 1;

    function step(elements, final_val, change){

        var faded = false;
        opacity_increment = opacity_increment + change; // update opacity

        for (var el = 0; el < elements.length; el++){

            elements[el].style.opacity = opacity_increment;
            // console.log(elements[el].style.opacity)

            if ((change > 0 && opacity_increment >= final_val) || (change <= 0 && opacity_increment <= final_val)){
                elements[el].style.opacity = final_val;
                faded = true;
            }
        }

        if (faded){
            if (callback != undefined){

                //changing font depending on the language
                if (lang == 1 || lang == 12 || lang == 13 || lang == 14 || lang == 15){
                    document.getElementsByClassName("full-name")[0].style.fontFamily = "GentiumPlusW";
                }
                else{
                    document.getElementsByClassName("full-name")[0].style.fontFamily = "dalekPinpointBold";
                }

                callback();
            }
            return;
        };

        window.requestAnimationFrame(function(){
            step(elements, final_val, change);
        });
    }

    window.requestAnimationFrame(function(){
        step(elements, final_val, change);
    });
}