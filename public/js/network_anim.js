var allPartProperties = { //properties for all particles including which particles are connected, position of each particle, speed, color etc
	el: [], //properties of each particle
	ConnectedWithI: [], //used to indicate each particle in order and each particle will be an array with the particles connected with.
	index: [], //index of each particle
}
var canvas = document.getElementsByClassName('pg-canvas')[0];
var ctx = canvas.getContext('2d');

window.addEventListener("load", function(){
	resize(true);
}, false);

window.addEventListener("resize", function(){
	resize(false);
}, false);

function GenerateBall(i, radius, speed, random_radius){ //i stands for index
	
	//particle position coordinates
	var posX = Math.floor((Math.random() * canvas.width) + 1);
	var posY = Math.floor((Math.random() * canvas.height) + 1);
	
	//pRTICLE SPEED ON X AND Y AXES
	var incX = (Math.floor((Math.random() * 2*speed*100) + speed*100) - 2*speed*100)/100;
	var incY = (Math.floor((Math.random() * 2*speed*100) + speed*100) - 2*speed*100)/100;
	
	//drawing particle
	ctx.beginPath();
	ctx.arc(posX,posY,5,0,2*Math.PI);
	ctx.fillStyle = 'red'; 
	ctx.strokeStyle = 'red';
	ctx.fill();
	ctx.stroke();
	
	//alert("d")
	
	//single particle properties
	if (random_radius){
		radius = Math.random()*(radius - 1) + 1;
	}

	var particle = {
		x: posX,
		y: posY,
		radius: radius,
		color: "red",
		speedX: incX,
		speedY: incY,
	}
	
	//inserting all particles properties like whith which particle is connected with (indicated with index) and adding the index of each particle
	allPartProperties.el.push(particle);
	allPartProperties.ConnectedWithI.push([]);
	allPartProperties.index.push(i);
	
	//alert(particle.x, particle.y, particle.radius, particle.color)
}

function moveBall(NumOfParticles, radius, speed, effect, effectDistance, dpr, ranMaxDistance, random_radius, density, std_color){

	var subX = 5; //because I have set up the anchor point at the center of the circe, when i change the posityion, I substract the x position by the radius of the circle.
	var subY = 5; //because I have set up the anchor point at the center of the circe, when i change the posityion, I substract the y position by the radius of the circle.
	
	NumOfParticles = Math.ceil(density * canvas.height*canvas.width);

	for(var obj = 0; obj < NumOfParticles; obj++){ //generating particles. The number oof particles is according to the 1st parameter inserted by the user
		GenerateBall(obj, radius, speed, random_radius); //generating particle.
	};

	function Animate(subX, subY, dpr, std_color){
		var color = ""; //used to add color to the particle, according to its situation (such as how close is to another particle)
		
		ctx.clearRect(0, 0, canvas.width, canvas.height); // clear canvas
		for(var obj = 0; obj < allPartProperties.el.length; obj++){ //looping through all particles
			var index = obj;
			
			var incX = allPartProperties.el[index].speedX; //getting the speed of the paticle of the x axes
			var incY = allPartProperties.el[index].speedY; //getting the speed of the paticle of the x=y axes

			var x = allPartProperties.el[index].x; //getting the position of the particle on the x axis
			var y = allPartProperties.el[index].y; //getting the position of the particle on the y axis
			//Increment the position at each axis (x or y) of the ball.
			x = x + incX; //changing the position of the particle according to its speed on the x axis
			y = y + incY; //changing the position of the particle according to its speed on the y axis
// 			alert(x+" "+y+" "+incX+" "+incY)
			
			//change direction if the ball hits an edge (top, left, bottom or right side of the window)
			
	        if(x >= parseInt(String(window.getComputedStyle(canvas.parentNode).getPropertyValue("width")).replace('px', ''))*dpr || x <= 0){ //if the position of the particle on the x axis is outside the browser's window, switch its sign
		        incX = incX*(-1);
		        allPartProperties.el[index].speedX = incX;
	        }
	        if(y >= parseInt(String(window.getComputedStyle(canvas.parentNode).getPropertyValue("height")).replace('px', ''))*dpr || y <= 0){ //if the position of the particle on the y axis is outside the browser's window, switch its sign
		        incY = incY*(-1);
		        allPartProperties.el[index].speedY = incY;
	        }
			if(effect == 0){ //if the effect chosen by the user is 0 (the number indicates what effect is chosen by the user. For example:
				//effect 1 is to connect particles which are very close to each other
				//effect 2 is to change the collor of the particles which are very close together and restore the color when they move further away.
				for(var i = 0; i<index; i++){ //it's a lot quicker to check only the amount of particles equal to the current index. 
					//Let's say that the number of particles is n. The minimum amount of combinations is n!/[(n-2)!*2] where (n-1) indicates the number
					//of particles connected (for example 1 to 2, 2 to 3, 3 to 4, ... (n-1) to n) where the amount of connections is n - 1.
					if(i != index){
						var ParPosX = allPartProperties.el[i].x; //getting x axis position of looped particle (i)
						var ParPosY = allPartProperties.el[i].y; //getting y axis position of looped particle (i)
						//getting the distance between the current (el) and the inexed particle using the current position of current particle;
						var distance = Math.sqrt(((x-ParPosX)*(x-ParPosX))+((y-ParPosY)*(y-ParPosY))); 
/*
						if(ranMaxDistance == true){
							distance = Math.floor((Math.random() * distance) + 1);;
						}
*/
						///alert(preDistance+" "+distance)
						if(distance <= effectDistance){ //if the distance between looped (i) and indexed (index) particle is shorter than the distance specified by the user
							if(allPartProperties.ConnectedWithI[index].length > 0){ //if there are particles connected to the indexed particle
								// (particles closer than the distance specified by the user)
								for(var ind = 0; ind < allPartProperties.ConnectedWithI[index].length; ind++){ //loop through all connected particles 
									//(represented as their index number)
									if(allPartProperties.ConnectedWithI[index][ind] == i){ //checking if the looped particle (i) 
										//is already in the list of connected particles)
										break; //stop the loop
									}
									if(ind == allPartProperties.ConnectedWithI[index].length - 1){ //if the looped particle (i) is not in the list 
										//with the connected particles
										allPartProperties.ConnectedWithI[index].push(i); //add the looped particle
										//alert(allPartProperties.ConnectedWithI);
										break; //stop the loop
									}
								}
							}
							else{ //if there are no particles connected to the looped particle (i) 
								allPartProperties.ConnectedWithI[index].push(i); //just add the looped particle as it is in the list of connected particles	
							}
							
							//draw line between these two particles to connect them.
							ctx.beginPath();
							ctx.moveTo(allPartProperties.el[i].x,allPartProperties.el[i].y);
							ctx.lineTo(x,y);
							ctx.lineWidth = 1.5-(distance/effectDistance)*1.5;
							ctx.strokeStyle = std_color;
							ctx.stroke();  
							//the line will atomatically be removed if these particles move further away by simply not running this code
	// 						alert(allPartProperties.el[i].x+" "+allPartProperties.el[i].y)
							//color = 'yellow';
						}
						else if(distance >= effectDistance){ 
							//if the distance between looped (i) and indexed (index) particle is longer or equal than the distance specified by the user
							if(allPartProperties.ConnectedWithI[index].length > 0){ //if there are particles connected to the indexed particle
								for(var ind = 0; ind < allPartProperties.ConnectedWithI[index].length; ind++){
									if(allPartProperties.ConnectedWithI[index][ind] == i){
										allPartProperties.ConnectedWithI[index].splice(ind, 1); //remove the looped particle (i) index 
										//as it's no longer connected to the indexed
										
										//i need to check why the above caused a small issue with the particles. The issue was that sometimes
										//the particles where changing yellow to red for one frame and then back to yellow. 
										if(allPartProperties.ConnectedWithI[index].length == 0){
											//color = 'red'; //ghange the current particle to a color of red
										}
										//alert(allPartProperties.ConnectedWithI[index]+" "+ind);
										break;
									}
								}
							}
							else{
								//color = 'red'; //ghange the current particle to a color of red
								//alert(allPartProperties.ConnectedWithI);
							}
							//alert(preDistance+" "+distance)
						}
						if(distance <= allPartProperties.el[i].radius){
							incY = incY*(-1);
						}
					}
				};
				
				//draw indexed particle with it's position axes
				ctx.beginPath();
				ctx.arc(x,y,allPartProperties.el[i].radius,0,2*Math.PI);
				ctx.fillStyle = std_color; 
				ctx.strokeStyle = std_color;
				ctx.fill();
				ctx.stroke();  
			}
			else if(effect == 1){
				for(var i = 0; i<index; i++){
					if(i != index){
						var ParPosX = allPartProperties.el[i].x;
						var ParPosY = allPartProperties.el[i].y;
						//getting the distance between the current (el) and the inexed particle using the current position of current particle;
						var distance = Math.sqrt(((x-ParPosX)*(x-ParPosX))+((y-ParPosY)*(y-ParPosY))); 
						///alert(preDistance+" "+distance)
						if(distance <= effectDistance){
							if(allPartProperties.ConnectedWithI[index].length > 0){
								for(var ind = 0; ind < allPartProperties.ConnectedWithI[index].length; ind++){
									if(allPartProperties.ConnectedWithI[index][ind] == i){
										break;
									}
									if(ind == allPartProperties.ConnectedWithI[index].length - 1){
										allPartProperties.ConnectedWithI[index].push(i);
										//alert(allPartProperties.ConnectedWithI);
										break;
									}
								}
							}
							else{
								allPartProperties.ConnectedWithI[index].push(i);		
							}
							ctx.beginPath();
							ctx.arc(ParPosX,ParPosY,allPartProperties.el[i].radius,0,2*Math.PI);
							ctx.fillStyle = 'yellow'; 
							ctx.strokeStyle = 'yellow';
							ctx.fill();
							ctx.stroke();    
							color = 'yellow';
							//alert(color)
						}
						else if(distance >= effectDistance){
							if(allPartProperties.ConnectedWithI[index].length > 0){
								for(var ind = 0; ind < allPartProperties.ConnectedWithI[index].length; ind++){
									if(allPartProperties.ConnectedWithI[index][ind] == i){
										allPartProperties.ConnectedWithI[index].splice(ind, 1);
										//i need to check why the above caused a small issue with the particles. The issue was that sometimes
										//the particles where changing yellow to red for one frame and then back to yellow. 
										if(allPartProperties.ConnectedWithI[index].length == 0){ 
											color = 'red';
										}
										//alert(allPartProperties.ConnectedWithI[index]+" "+ind);
										break;
									}
								}
							}
							else{  
								//alert(allPartProperties.ConnectedWithI);
								color='red';
							}
							//alert(preDistance+" "+distance)
						}
					}
				}
				//alert(color)
				//drawing the current particle (indexed particle)
				ctx.beginPath();
				ctx.arc(x,y,allPartProperties.el[i].radius,0,2*Math.PI);
				ctx.fillStyle = color; 
				ctx.strokeStyle = color;
				ctx.fill();
				ctx.stroke();    
			}
			
			allPartProperties.el[index].x = x; //insert the new position for x axis of the indexed particle
			allPartProperties.el[index].y = y; //insert the new position for y axis of the indexed particle	      
	        //alert("D") 

			//recursion, call function again.
	    };
		window.requestAnimationFrame(function() {
	        Animate(subX, subY, dpr, std_color);
	    });
	}
	
	Animate(subX, subY, dpr, std_color);
// 	el.margin
}

//parameters are explained below:
//1. amount of particles
//2. size (radius)
//3. maximum speed 1 (1 pixel) and minimum is -1
//4. type of effect (for example 0 is line connection between two close particles, closer than the 4th parameter)
//5. Maximum distance between particles in order for the effect to happen.
//6. randomize max distance

function resize(call_callback){
	var canvas = document.getElementsByClassName('pg-canvas')[0];
	var dpr = window.devicePixelRatio || 1; //devie pixel ratio
	// console.log(dpr);
	canvas.width = parseInt(String(window.getComputedStyle(canvas.parentNode).getPropertyValue("width")).replace('px', ''))*dpr;
	canvas.height = parseInt(String(window.getComputedStyle(canvas.parentNode).getPropertyValue("height")).replace('px', ''))*dpr;
	// canvas.width = screen.width;
	// canvas.height = screen.height;
	// density = 
	//adjust_for_screen_size
	// alert(200/(canvas.width*canvas.height));
	if (call_callback){
		moveBall(200, 6, 2, 0, 200, dpr, true, true, 0.00003409152893688976, '#ceebff');
		//#a5c9d3
	};
};