function openNav() {
    document.getElementById("mobile_side").style.width = "250px";
    document.getElementById("mobile_side_bg").style.display = "block";
    document.body.style.overflowY = "hidden";
    // document.getElementById("mobile_side_bg").style.opacity = "1.0";
    fade(document.getElementById("mobile_side_bg"), 0.1)
}

function closeNav() {
    document.getElementById("mobile_side").style.width = "0";
    document.body.style.overflowY = "scroll";
    //document.getElementById("mobile_side_bg").style.display = "none";
    // document.getElementById("mobile_side_bg").style.opacity = "0.0";
    fade(document.getElementById("mobile_side_bg"), -0.1);
}

window.addEventListener("resize", function(){
    if(window.innerWidth > 576){
        closeNav();
    }
}, false);

window.addEventListener('load', function(){
    greetings();
}, false)

window.addEventListener("click", function(e){
    handleInteraction(e);
}, false);

window.addEventListener('touchstart', function(e){
    handleInteraction(e);
}, false);

function handleInteraction(e){
    var el_target = e.target;
    if (el_target.id == "mobile_side_bg"){
        closeNav();
    }

    var parent_el = e.target;

    while(parent_el.classList.value.split(" ").indexOf("nav-link") < 0){
        parent_el = parent_el.parentNode;
    }

    scroll_to_position(parent_el.classList[0]);
}

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
                update_greetings("مرحبا أيها الغريب! أنا", "جورج قرابيس", "شكرا لزيارتكم!", lang); //arabic
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