var svg = Snap("#autumns_tree");
var Leaf = [];
var settings = {
	leafCount: 0,
	renewCheck: 10
};
var tickCount = 0;
var autumnElm, leftPath, rightPath, innerLeafHolder, outerLeafHolder;
Snap.load("./src/asset/autumn_trees.svg", onSVGLoaded);

async function onSVGLoaded(data){ 
	await svg.append(data);
	autumnElm = $("g#leaf");
	leftPath = $('#leaf #path1276').offset().left;
	rightPath = $('#leaf #path6362').offset().left;
	var outerSVG = Snap('#outerLeaf');
	var innerSVG = Snap('#innerLeaf');
	outerLeafHolder = outerSVG.group();
	innerLeafHolder = innerSVG.group();
	makeLeaf();
}
function tick()
{
	tickCount++;
	var check = tickCount % settings.renewCheck;
	
	if(check)
	{
		if(Leaf.length < settings.leafCount) makeLeaf();
	}	
	requestAnimationFrame(tick);
}

requestAnimationFrame(tick);

function makeLeaf() {
	let scale = 0.5 + (Math.random() * 0.5);
	let newLeaf;
	let x = leftPath + Math.random() * (rightPath - leftPath);
	let endX;
	let y = -10;
	let endY;
	
	if(scale > 0.8)
	{
		newLeaf = outerLeafHolder.path("M10.55 1.064C7.58 -0.271 4.219 0.082 2.058 2.243 -0.02 4.322 -0.426 7.514 0.739 10.398a86.846 86.846 0 0 0 -0.548 0.542c-0.134 0.134 0 0 0 0l0.485 0.485c0.044 -0.044 0 0 0 0 0.162 -0.162 0.346 -0.347 0.542 -0.548 2.884 1.164 6.076 0.76 8.155 -1.32 2.161 -2.161 2.514 -5.522 1.178 -8.491z")
			.attr({
				fill: '#AA8065'
			})
		endY = $('body').height() + 10;
		y = autumnElm.offset().top + Math.random()*autumnElm.height();
		x =  x + autumnElm.offset().left;
	}
	else 
	{
		newLeaf = innerLeafHolder.path('M10.55 1.064C7.58 -0.271 4.219 0.082 2.058 2.243 -0.02 4.322 -0.426 7.514 0.739 10.398a86.846 86.846 0 0 0 -0.548 0.542c-0.134 0.134 0 0 0 0l0.485 0.485c0.044 -0.044 0 0 0 0 0.162 -0.162 0.346 -0.347 0.542 -0.548 2.884 1.164 6.076 0.76 8.155 -1.32 2.161 -2.161 2.514 -5.522 1.178 -8.491z')
		.attr({
			fill: '#AA8065'
		})
		endY = $('body').height() + 10;	
	}
	
	Leaf.push(newLeaf);
	 
	
	TweenMax.fromTo(newLeaf.node, 3 + (Math.random() * 5), {x: x, y: y}, {y: endY, onComplete: onLeafEnd, onCompleteParams: [newLeaf], ease: Power0.easeIn})
	TweenMax.fromTo(newLeaf.node, 1,{scale: 0}, {scale: scale, ease: Power1.easeIn})
	// TweenMax.to(newLeaf.node, 3, {x: x+((Math.random() * 150)-75), repeat: -1, yoyo: true, ease: Power1.easeIn});
	// TweenMax.to(newLeaf.node,R(6,15),{y: y,ease:Linear.easeNone,repeat:-1,delay:-15});
	TweenMax.to(newLeaf.node,R(4,8),{x: x,rotationZ:R(0,180),repeat:-1,yoyo:true,ease:Sine.easeInOut});
	TweenMax.to(newLeaf.node,R(2,8),{rotationX:R(0,360),rotationY:R(0,360),repeat:-1,yoyo:true,ease:Sine.easeInOut,delay:-5});

	TweenMax.to(settings, 3, {leafCount: 40, ease: Power2.easeInOut});
}
function R(min,max) {return min+Math.random()*(max-min)};
function onLeafEnd(flake) {
	flake.remove();
	flake = null;
	
	for (var i in Leaf) {
		if(!Leaf[i].paper) Leaf.splice(i, 1);
	}
	
	if (Leaf.length < settings.leafCount) {
		makeLeaf();
	}
}
