var index = -1;
			
function loading(){
	var loader = document.getElementById("loader");
	display = window.getComputedStyle(loader).display;
	var child = document.getElementById("loader-ul").getElementsByTagName("div");
	if (display == "block"){
		if (index > child.length - 2){
			index = -1;
		};
		index = index + 1;
		animate(child,2);
	};
}

function animate(element,change) {
	var currentColor = window.getComputedStyle(element[index]).backgroundColor;
	var EndingColor = "rgb(255, 224, 235)";
	var DecreaseChage = parseFloat((change)/15);
	var increment = change;
	var el = element[index]; 
	var MaxHeight = false;
	var decrement = false;
	var finished = false;

	function anim() {
		return new Promise(function(resolve, reject) {
			function _anim() {
				if (finished == false) {
				increment = increment - DecreaseChage;
					//If finished is false (if animation hasn’t finished yet) then…//
					if (MaxHeight == false) {
						var height = parseFloat(window.getComputedStyle(el).height.slice(0, -2));
						var BottomVal = parseFloat(window.getComputedStyle(el).bottom.slice(0, -2));
						//get the height and the bottom values of the bar (div)//
						height = height + increment;
						BottomVal = BottomVal + increment/2;
						el.style.bottom = BottomVal + "px";
						el.style.height = height + "px";
						//Assign the new values//
						if (increment < 0) {
							decrement = true;
						}
						if(decrement && height > 35){
							MaxHeight = true;
						}
					};
					if (MaxHeight == true) {
						var height = parseFloat(window.getComputedStyle(el).height.slice(0, -2));
						var BottomVal = parseFloat(window.getComputedStyle(el).bottom.slice(0, -2));
						height = height + increment;
						BottomVal = BottomVal + increment/2;
						el.style.bottom = BottomVal + "px";
						el.style.height = height + "px";
						if (height < 25) {
							MaxHeight = true;
							finished = true;
							el.style.bottom = 0 + "px";
							el.style.height = 25 + "px";
						}
						else if (height > 32.6){
							resolve();
						}
					};
					window.requestAnimationFrame(_anim);
				} 
			}
			_anim();
		});
	};
	anim().then(loading);
// 			  setInterval(function(){ loading(); }, 3000);
}

function stop(){
	var loader = document.getElementById("loader");
	opacity = parseFloat(window.getComputedStyle(loader).opacity);
	var fade_out_func; //used to stop the interval
	function fadeOut(){
		opacity = opacity - 0.02;
		loader.style.opacity = opacity;
		if (opacity > 0){
			window.requestAnimationFrame(fadeOut);
		}
		else{
			loader.style.display = "none";
			loader.style.opacity = 0;
			clearInterval(fade_out_func);
		}
	};
	var fade_out_func = setInterval(function(){ fadeOut(); }, 500);
}

loading();
 