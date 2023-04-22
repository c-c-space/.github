const refreshRate = 1000/60;
const divTop = 20;
let toggle = true;

let width = window.innerWidth;
let height = window.innerHeight;
const myCanvas = document.querySelector('#world');
myCanvas.style.width = width;
myCanvas.style.height = height;

const words_arr = str.split(" ");
let wordIndex = 0;
let bodies_list = [];


let Engine = Matter.Engine,
Render = Matter.Render,
World = Matter.World,
Bodies = Matter.Bodies,
Body = Matter.Body,
Mouse = Matter.Mouse,
MouseConstraint = Matter.MouseConstraint,
Events = Matter.Events;

let engine = Engine.create();
let render = Render.create({
	canvas: myCanvas,
	engine: engine,
	options: {
		background: 'transparent',
		width: width,
		height: height,
		wireframes: false
	}
});

addStaticBlocks();


Engine.run(engine);
let mouseConstraint = MouseConstraint.create(engine, {
	element: myCanvas,
	constraint: {
		stiffness: 1,
		render: {
			visible: true
		}
	}
});

World.add(engine.world, mouseConstraint);
window.addEventListener('load', event => {
	addBlock();
})

window.setInterval(() => {
	for(var i = 0; i < bodies_list.length; i++){
		var x = bodies_list[i].position.x;
		var y = bodies_list[i].position.y;
		const {min, max} = bodies_list[i].bounds;
		var w = parseInt($(".box").eq(i).css("width"));
		var h = parseInt($(".box").eq(i).css("height"));
		var angle = bodies_list[i].angle;

		$(".box").eq(i).css("left", x - w/2);
		$(".box").eq(i).css("top", y - h/2);
		$(".box").eq(i).css("transform", "rotate(" + angle + "rad)");
	}
}, refreshRate);

window.addEventListener('resize', function(){
	width = window.innerWidth;
	height = window.innerHeight
});

const toggleBtn = document.querySelector('.toggleGravity')
toggleBtn.addEventListener('click', function(){
	if(toggle){
		engine.world.gravity.y = 0;
		toggle = false;
	} else {
		engine.world.gravity.y = 1;
		toggle = true;
	}
});

function addBlock(){
	var randWidth = Math.floor(Math.random() * 300) + (width/2 - 150);
	var divLeft = randWidth;

	var div = $("<div />").addClass("box");
	div.css({
		left: divLeft,
		top: divTop
	});

	$("body").append(div);
	var index = $(".box").index(div);
	div.text(words_arr[wordIndex]);
	wordIndex++;

	var divWidth = parseInt(div.css("width"));
	var divHeight = parseInt(div.css("height"));

	var body = Bodies.rectangle(divLeft, divTop, divWidth, divHeight, {
		restitution: 1,
		label: $(".box").index(div)
	});

	bodies_list.push(body);
	World.add(engine.world, [body]);

	if(bodies_list.length < words_arr.length){
		var t = setTimeout(addBlock, 1000);
	}
}

function addStaticBlocks(){
	var ground = Bodies.rectangle(width/2, height + 100, width, 200, { isStatic: true });
	var leftWall = Bodies.rectangle(-100, height, 200, height*2, { isStatic: true });
	var rightWall = Bodies.rectangle(width + 100, height, 200, height*2, { isStatic: true });
	var ceiling = Bodies.rectangle(width/2, -100, width, 200, {isStatic: true});

	World.add(engine.world, [ground, leftWall, rightWall, ceiling]);
}
