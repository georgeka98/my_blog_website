// function draw() {

//     //setup

//     var canvas = document.getElementById("timeline");
//     var ctx = canvas.getContext("2d");

//     ctx.canvas.width  = window.innerWidth;
//     ctx.canvas.height = window.innerHeight;

// }

let timeline = {

    title: 'Timeline', 
    age: 7497, //age in days 
    days_height: 0.5, //height in pixels
    path_width: 3,
    acomplishments: [[6800, "Studies in University of Edinburgh"], [6400, "Left Greece"], [7200, "Class representative"]],
    awards: [[7000, "Student Excellence award"]],

    start: function() {
        console.log(this.acomplishments);
    },

    skeleton: function(){

        var canvas = document.getElementById("timeline");
        var ctx = canvas.getContext("2d");
    
        ctx.canvas.width  = window.innerWidth;
        ctx.canvas.height = this.days_height*this.age + 200;

        if (canvas.getContext) {
            if (this.title != ""){

                ctx.font = "30px Arial";
                ctx.textAlign = "center";
                ctx.fillText(this.title, ctx.canvas.width/2, 40);

            }

            //birth
            ctx.beginPath();
            ctx.arc(ctx.canvas.width/2, 65, 5, 0, 2 * Math.PI);
            ctx.stroke();
            ctx.fillStyle = "black";
            ctx.lineWidth = this.path_width;
            ctx.fill();

            console.log("sadf")

            var age = Math.floor(this.age/365.25);
            remaining_days = this.age - Math.ceil(age * 365.25);

            for (var i = 0; i <= age; i++){

                // var pxd = this.days_height * i; //scale
                var x_coord = ctx.canvas.width/2;
                ctx.moveTo(x_coord, 70 + this.days_height*365.25*i);

                if (i != 20){

                    var y_coord = ((i+1)*365.25)*this.days_height;
                    console.log(y_coord, i)

                    ctx.lineTo(x_coord, 70 + y_coord);
                    ctx.moveTo(x_coord - 10 , 70 + y_coord);
                    ctx.lineTo(x_coord + 10 , 70 + y_coord);
                    ctx.stroke();

                }
                else{
                    var y_coord = this.days_height*(365.25*i + remaining_days);

                    console.log(y_coord, remaining_days)

                    //triangle 
                    // ctx.moveTo(x_coord, 70 + ((i+1)*365.25)*this.days_height);
                    ctx.lineTo(x_coord, 70 + y_coord);
                    ctx.lineTo(x_coord - 7 , 70 + y_coord);
                    ctx.lineTo(x_coord, 70 + y_coord + 20);
                    ctx.lineTo(x_coord + 7 , 70 + y_coord);
                    ctx.lineTo(x_coord, 70 + y_coord);
                    ctx.fillStyle = "black";
                    ctx.fill();
                    ctx.stroke();
                }
                ctx.stroke();
            }

        }
    }
};

//draw();
timeline.start();
timeline.skeleton();