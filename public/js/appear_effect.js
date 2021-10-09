window.addEventListener('load', function(){
    appear_effect();
}, false);

function appear_effect(){
    var group_projects = document.getElementsByClassName('group-projects')[0];
    var boundings = [group_projects];

    var footer_els = document.getElementsByClassName("f-content")[0].children;
    var skills = document.getElementsByClassName("ability-row");

    for(var i = 0; i < boundings.length+skills.length; i++){
        if (footer_els.length > i){
            boundings.push(footer_els[i]);
        }
        if (footer_els.length+skills.length > i){
            boundings.push(skills[i]);
        }

        //console.log(boundings[i].classList)
        function bound_element(i){

            if(visible(boundings[i])){
                boundings[i].style.marginTop = "0px";
                boundings[i].style.opacity = "1.0";
            }

        }
        bound_element(i);
    }

    //console.log(boundings)
    var navbar = [document.getElementsByClassName("intro-section")[0]]; 

    // window.addEventListener("load", function(){
    //     if(!visible(navbar[0])){
    //         navbar[0].getElementsByClassName("navbar")[0].style.padding = "0.5rem";
    //         navbar[0].getElementsByClassName("navbar")[0].style.opacity = "1.0";
    //         navbar[0].getElementsByClassName("navbar")[0].style.position = "fixed";
    //         navbar[0].getElementsByClassName("navbar")[0].style.width = "100%";
    //         navbar[0].getElementsByClassName("navbar")[0].style.backgroundColor = "white";
    //         navbar[0].getElementsByClassName("navbar")[0].style.marginTop = "0px";

    //         navbar[0].getElementsByClassName("navbar")[0].classList.add("navbar-light");
    //         navbar[0].getElementsByClassName("navbar")[0].classList.remove("navbar-dark");

    //         for(var i = 0; i < navbar[0].getElementsByClassName("nav-link").length; i++)
    //         {
    //             navbar[0].getElementsByClassName("nav-link")[i].style.color = "black";
    //             navbar[0].getElementsByClassName("nav-link")[i].style.paddingTop = "0rem";
    //             navbar[0].getElementsByClassName("nav-link")[i].style.paddingBottom = "0rem";
    //             navbar[0].getElementsByClassName("nav-link")[i].getElementsByTagName("P")[0].style.marginBottom = "0rem";
    //         }

    //         document.getElementsByClassName("intro-section")[0].getElementsByClassName("navbar-nav")[0].classList.add("hover-pink");
    //         document.getElementsByClassName("intro-section")[0].getElementsByClassName("navbar-nav")[0].classList.remove("hover-w");

    //         document.getElementsByClassName("intro-section")[0].getElementsByClassName("navbar-brand")[0].src = "/images/gk-logo-b.png";
            
    //         document.getElementsByClassName("intro-section")[0].getElementsByClassName("navbar-brand")[0].style.height = "2.5rem";
    //         document.getElementsByClassName("intro-section")[0].getElementsByClassName("navbar-brand")[0].style.width = "2.5rem";

    //     }
    // });

    window.addEventListener("scroll", function(){

        for(var i = 0; i < boundings.length; i++){
            function animate_el(i){

                if(visible(boundings[i])){
                    boundings[i].style.marginTop = "0px";
                    boundings[i].style.opacity = "1.0";
                }
            }
            animate_el(i);
        }


            if(!visible(navbar[0])){
                navbar[0].getElementsByClassName("navbar")[0].style.padding = "0.5rem";
                navbar[0].getElementsByClassName("navbar")[0].style.opacity = "1.0";
                navbar[0].getElementsByClassName("navbar")[0].style.position = "fixed";
                navbar[0].getElementsByClassName("navbar")[0].style.width = "100%";
                navbar[0].getElementsByClassName("navbar")[0].style.backgroundColor = "white";
                navbar[0].getElementsByClassName("navbar")[0].style.marginTop = "0px";

                navbar[0].getElementsByClassName("navbar")[0].classList.add("navbar-light");
                navbar[0].getElementsByClassName("navbar")[0].classList.remove("navbar-dark");

                for(var i = 0; i < navbar[0].getElementsByClassName("nav-link").length; i++)
                {
                    navbar[0].getElementsByClassName("nav-link")[i].style.color = "black";
                    navbar[0].getElementsByClassName("nav-link")[i].style.paddingTop = "0rem";
                    navbar[0].getElementsByClassName("nav-link")[i].style.paddingBottom = "0rem";
                    navbar[0].getElementsByClassName("nav-link")[i].getElementsByTagName("P")[0].style.marginBottom = "0rem";
                }

                document.getElementsByClassName("intro-section")[0].getElementsByClassName("navbar-nav")[0].classList.add("hover-pink");
                document.getElementsByClassName("intro-section")[0].getElementsByClassName("navbar-nav")[0].classList.remove("hover-w");

                document.getElementsByClassName("intro-section")[0].getElementsByClassName("navbar-brand")[0].src = "/images/gk-logo-b.png";
                
                document.getElementsByClassName("intro-section")[0].getElementsByClassName("navbar-brand")[0].style.height = "2.5rem";
                document.getElementsByClassName("intro-section")[0].getElementsByClassName("navbar-brand")[0].style.width = "2.5rem";

            }

            else if (window.scrollY >= navbar[0].getElementsByClassName("navbar")[0].offsetHeight){
                navbar[0].getElementsByClassName("navbar")[0].style.opacity = "0";
                navbar[0].getElementsByClassName("navbar")[0].style.marginTop = "-15px";
                navbar[0].getElementsByClassName("navbar")[0].style.backgroundColor = "transparent";
            }

            else if (window.scrollY < navbar[0].getElementsByClassName("navbar")[0].offsetHeight){
                navbar[0].getElementsByClassName("navbar")[0].style.padding = "1rem";
                navbar[0].getElementsByClassName("navbar")[0].style.opacity = "1.0";
                navbar[0].getElementsByClassName("navbar")[0].style.marginTop = "0px";

                navbar[0].getElementsByClassName("navbar")[0].style.position = "relative";
                navbar[0].getElementsByClassName("navbar")[0].style.backgroundColor = "transparent";

                navbar[0].getElementsByClassName("navbar")[0].classList.remove("navbar-light");
                navbar[0].getElementsByClassName("navbar")[0].classList.add("navbar-dark");

                for(var i = 0; i < navbar[0].getElementsByClassName("nav-link").length; i++)
                {
                    navbar[0].getElementsByClassName("nav-link")[i].style.color = "rgba(255, 255, 255, 0.5)";
                    navbar[0].getElementsByClassName("nav-link")[i].style.paddingTop = "0.5rem";
                    navbar[0].getElementsByClassName("nav-link")[i].style.paddingBottom = "0.5rem";
                    navbar[0].getElementsByClassName("nav-link")[i].getElementsByTagName("P")[0].style.marginBottom = "1rem";
                }

                document.getElementsByClassName("intro-section")[0].getElementsByClassName("navbar-nav")[0].classList.remove("hover-pink");
                document.getElementsByClassName("intro-section")[0].getElementsByClassName("navbar-nav")[0].classList.add("hover-w");

                document.getElementsByClassName("intro-section")[0].getElementsByClassName("navbar-brand")[0].src = "/images/gk-logo-w.png";

                document.getElementsByClassName("intro-section")[0].getElementsByClassName("navbar-brand")[0].style.height = "5rem";
                document.getElementsByClassName("intro-section")[0].getElementsByClassName("navbar-brand")[0].style.width = "5rem";
            }


    }, false);
}

function vew_out_of_top(){
    var navbar = document.getElementsByClassName("intro-section")[0];
    fade(navbar, 1.0);
}

function visible(el){

    if(el != undefined && el != null){
        var top = el.offsetTop;
        var bottom = el.offsetTop + 2*el.offsetHeight;
        var left = el.offsetLeft;
        var right = el.offsetRight;

        while(el.offsetParent) {
            el = el.offsetParent;
            top += el.offsetTop;
        }

        
        //console.log(top + el.offsetHeight/15,(window.pageYOffset + window.innerHeight), top + el.offsetHeight/15,(window.scrollY + window.innerHeight),bottom,(window.pageYOffset + window.innerHeight),bottom,(window.scrollY + window.innerHeight))

        if((top + el.offsetHeight/60 < (window.pageYOffset + window.innerHeight) || top + el.offsetHeight/60 < (window.scrollY + window.innerHeight)) && 
           (bottom + el.offsetHeight/60 > (window.pageYOffset + window.innerHeight) || bottom + el.offsetHeight/60 > (window.scrollY + window.innerHeight))){
            return true;
        }
    }

    return false;
}

function scroll_to_position(section){

    var position_top;

    if (section == "home_nav"){
        position_top = document.getElementsByClassName("intro-section")[0].offsetTop;
        closeNav();
    }
    else if (section == "about_nav"){
        position_top = document.getElementsByClassName("about-section")[0].offsetTop;
        closeNav();
    }
    else if (section == "portfolio_nav"){
        position_top = document.getElementsByClassName("portfolio-section")[0].offsetTop;
        closeNav();
    }
    // else if (section == "about_nav"){
    //     position_top = document.getElementsByClassName("about-section")[0].offsetTop;
    //     closeNav();
    // }
    else if (section == "contact_nav"){
        position_top = document.getElementsByClassName("hit-me-up-section")[0].offsetTop;
        closeNav();
    }

    scroll_by_struct = {
        top: position_top,
        left: 0,
        behavior: 'smooth'
    }

    window.scroll(scroll_by_struct);

}

function fade(el, change){

    var opacity = change < 0 ? 1.0 : 0.0;

    function step(){

        if ((opacity >= 1.0 && change > 0) || (opacity <= 0.0 && change < 0)){

            el.style.opacity = change < 0 ? 0.0 : 1.0;

            if (opacity <= 0.0){
                el.style.display = "none";
            }

            return;
        }

        opacity = opacity + change;
        el.style.opacity = opacity;

        //next frame
        window.requestAnimationFrame(function(){
            step(el);
        })
    }

    window.requestAnimationFrame(function(){
        step(el);
    })
}