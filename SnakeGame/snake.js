
//init


function init(){
    canvas = document.getElementById('mycanvas');
    W = H = canvas.width = canvas.height = 500;

    // we have to define the parameter 2d or 3d
    pen = canvas.getContext('2d');
    cs = 33;//set the size of a pixel
    game_over = false;// set game_over to false so that we need to run the gameloop continuosly
    score = 5;

   	//Create a Image Object for food
    food_img = new Image();
    food_img.src = "assest/apple.png";
    trophy = new Image();
    trophy.src = "assest/snakebg.jpg";
    head_img = new Image();
    head_img.src = "assest/head1.jpg";

    // creating a object for snake
    snake = {
        intial_len: 5,
        cells: [],//snake has the cells 
        color: "brown",
        direction: "right",//initial default direction
        
        createSnake:function(){
            // each cell has a x and y  coordinate so the initial cells assign to the coordinates
            // var ka matlab it is only for function scope
            for (let i = this.intial_len; i > 0; i--) {
                // console.log("hello");
                this.cells.push({x:i,y:0})
            }
            // console.log("create snake is running");
            
            // basically it is a array
        },
        
        drawSnake: function () {
            //we can define the color of the rectangles 
				pen.fillStyle = this.color;
            
            // for each cell i have to draw arectangle
            for (let i =1; i < this.cells.length; i++){
                pen.fillRect(this.cells[i].x * cs, this.cells[i].y * cs, cs-2, cs-2);
            }

            pen.fillStyle = "black";
            
                // pen.fillRect();
                pen.fillRect(this.cells[0].x * cs, this.cells[0].y * cs, cs-2, cs-2);
            
                // pen.arc(this.cells[i].x * cs, this.cells[i].y * cs, cs-2, 0,2*Math.PI);
           
                //  pen.drawImage(head_img,this.cells[0].x * cs, this.cells[0].y * cs, cs-2, cs-2)

            
            // this array has collection of the objects that is coordinates
            
        },
        
        updateSnake: function () {
            // this function is to animate the snake
            // if the snake has eaten the food then the length of the snake should increase and the food get at another location
            console.log("Update function is running");

            // we have to extract the last cell and add to the front of the array
            
            var headX = this.cells[0].x;//we are defining the head of the snake
            var headY = this.cells[0].y;

            // if snake touches its body so it should be game over
             for (k = 1; k < this.cells.length; k++){
            if (headX == this.cells[k].x && headY == this.cells[k].y) {
                alert("You touches yourself");
                // clearInterval(f);
            }
                }
         
            // console.log(k);
            
            // console.log(this.cells);
// <<<<<<<<<<<<<<===========================================>>>>>>>>>>>
            // in this if else block we check that if there is any collision between snake and the food then we have to generate the food randomly and increase the length
            // thats why the pop operation is in the else block with the food collision that if there is no collision then pop the cells otherwise not  
if (headX == food.x && headY == food.y) {
    console.log("food is eaten");
    food = getRandomFood();
    
}
else {
    this.cells.pop();// cordinate 0,0 so the pop function remove the last cell
}
// <<<<<<<<<<<<<<===========================================>>>>>>>>>>>

            var nextX, nextY;
            // according to direction we will update the snake
            if (this.direction == "right") {
                
                var nextX = headX + 1;
                var nextY = headY;
            }
            else if (this.direction == "left") {
                var nextX = headX - 1;
                var nextY = headY;
            }
            else if (this.direction == "up") {
                var nextX = headX;
                var nextY = headY -1;
            }
            else {
                var nextX = headX;
                var nextY = headY+1;
            }
            // NOW we have to add a new cell to the head
            this.cells.unshift({ x: nextX, y: nextY });//this will add the element in the front of the snake
            let last_x = Math.floor(W / cs);
            let last_y = Math.floor(H / cs);
            if (headX<0||headX>last_x-1||headY<0||headY>last_y-1){
                alert('gameOver');
                clearInterval(f)// it will stop the infinite loop
            }
        }


        

    };//snake object

    // object is not hoisted means pehle ise define karna padega uske baad hi use kar skate hai 
    // getting food randomly it is a global object
    food = getRandomFood();

    function keypressed(e){
        console.log("key is pressed", e.key);
        // conditional statement
        if ((e.key == "d"||e.key == "ArrowRight")&&snake.direction!="left"){
            snake.direction="right"
        }
        else if ((e.key == "a"||e.key == "ArrowLeft")&&snake.direction!="right"){
            snake.direction = "left";
        }
        
        else if ((e.key == "s"||e.key == "ArrowDown")&&snake.direction!="up"){
            snake.direction = "down";
        }
        
        else if((e.key == "w"||e.key == "ArrowUp")&&snake.direction!="down"){
            snake.direction = "up";
        }

    }
    
    snake.createSnake();   
    // Add eventlistner on the document
    document.addEventListener('keydown', keypressed)
    
   
}

//draw
function draw(){
    // we have to clear the previous screen so that we can see the snake moving not elongating by infinite length
    pen.clearRect(0,0,W,H);
    snake.drawSnake();
    // this is to draw the food object
    pen.fillStyle = food.color; 
    // pen.fillRect(food.x*cs,food.y*cs,cs,cs)
    pen.drawImage(food_img,food.x*cs,food.y*cs,cs,cs)
}

//update
function update(){
    snake.updateSnake();
}

//gameloop
function gameloop(){
    draw();
    update();

}
function getRandomFood() {
    // console.log(snake.cells);
    var foodX = Math.round(Math.random() * (W - cs) / cs)//math.random generate a number between 0 to 1
    var foodY = Math.round(Math.random() * (H - cs) / cs)//math.random generate a number between 0 to 1
    for (var k = 0; k < snake.cells.length; k++){
        if (foodX == snake.cells[k].x && foodY == snake.cells[k].y) {
     foodX = Math.round(Math.random() * (W - cs) / cs)//math.random generate a number between 0 to 1
     foodY = Math.round(Math.random() * (H - cs) / cs)//math.random generate a number between 0 to 1
        }
    }

    var food = {
        x: foodX,
        y: foodY,
        color: "red",
                
    }
    return food;
    
}

init();

f = setInterval(gameloop, 100);
g = () => {
    return clearInterval(f);
}
