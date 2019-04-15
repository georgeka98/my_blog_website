let popup = {
    display: function(visibility, popup){
        document.getElementById(popup).style.display = visibility;
    }
}

setTimeout(function(){ 
    popup.display("block", "welcome"); 
    window.addEventListener("click", function(){
        popup.display("none", "welcome");
    }, false)
    window.addEventListener("touchstart", function(){
        popup.display("none", "welcome");
    }, false)
    window
}, 3000);