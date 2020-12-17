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