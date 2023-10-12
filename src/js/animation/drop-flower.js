var Leaf = [];
var settings = {
	leafCount: 0,
	renewCheck: 10
};
var tickCount = 0;
fetch('./src/asset/svg/autumn_trees.svg').then(data => data.text()).then((svg) => {
	$('#autumns_tree').append(svg);
	makeLeaf();
	Shake('g#leaf path');
	onScrollCloud(".cloud1", "#autumns_tree", 1500, 800);
	onScrollCloud(".cloud2", "#autumns_tree", 1500, 800);
	onScrollCloud(".cloud3", "#autumns_tree", -1500, 800);
	onScrollCloud(".cloud4", "#autumns_tree", -1500, 800);
})
function makeLeaf() {
	let scale = 0.5 + (Math.random() * 0.5);
	let leftPath = 400;
	let rightPath = 900;
	let x = leftPath + (Math.random() * (rightPath - leftPath));
	let y = 200 + Math.random()*50;
	let endY = 480 + Math.random() * 20;
	
	let Div = $('<div></div>');

	TweenLite.set(Div,{attr: {class: "dot", style: `filter: brightness(${R(50, 120)}%); mix-blend-mode: multiply;`}, rotationZ: R(40,100), x: x, y: y});
	Leaf.push(Div);
	
	$('foreignObject').append(Div);
	TweenMax.fromTo(Div, R(3, 8),{x: x, y: y, scale: scale},{y: endY , onComplete: onLeafEnd, onCompleteParams: [Div], ease:Linear.easeNone});
	TweenMax.to(Div, R(4,8), {x: x, rotationZ:R(0, 30), repeat:-1, yoyo: true, ease:Sine.easeIn});
	TweenMax.to(Div, R(2,8), {x: x + ((Math.random() * 150)-75), rotationX:R(0, 360),  yoyo: true, rotationY:R(0, 360), repeat:-1,ease:Power1.easeIn}); 
	TweenMax.to(settings, R(3, 10), {leafCount: 20, ease:Power1.easeIn});
}

function R(min,max) {return min + (Math.random()*(max-min))};

function onLeafEnd(flake) {

	flake.remove();
	flake = null;
	Leaf.shift();
	
	if (Leaf.length < settings.leafCount) {
		makeLeaf();
	}
}

function tick()
{
	tickCount++;
	var check = tickCount % settings.renewCheck;

	if(check) {
		if(Leaf.length < settings.leafCount) makeLeaf();
	}	
	requestAnimationFrame(tick);
}

requestAnimationFrame(tick);

//Onshake

function Shake(elm) {
	$(elm).on('mouseover', function (e) {
		TweenMax.fromTo(e.currentTarget, 0.1, {x: -2}, { x: 2, repeat: 5, yoyo: true, ease: Quad.easeInOut});
	})
}

//OnscrollCloud

function onScrollCloud(elm, trigger, x, y) {
	gsap.registerPlugin(ScrollTrigger);

	gsap.fromTo(elm, { opacity: 1 }, {
        y: y,
        x: x,
        ease: "power2.out",
		scrollSmoother: {
			smooth: 2,
			effects: true,
			normalizeScroll: true
		},
        scrollTrigger: {
            trigger: trigger,
            start: "top-=200 top",
			end:'bottom top',
            scrub: true
        }
    })
}