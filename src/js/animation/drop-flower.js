var svg = Snap("#autumns_tree");
var Leaf = [];
var settings = {
	leafCount: 0
};
var autumnElm, innerLeafHolder, outerLeafHolder;
Snap.load("./src/asset/autumn_trees.svg", onSVGLoaded);

function onSVGLoaded(data){ 
	svg.append(data);
}
function waitForElementToExist(selector) {
	return new Promise(resolve => {
	  if (document.querySelector(selector)) {
		return resolve(document.querySelector(selector));
	  }
  
	  const observer = new MutationObserver(() => {
		if (document.querySelector(selector)) {
		  resolve(document.querySelector(selector));
		  observer.disconnect();
		}
	  });
  
	  observer.observe(document.body, {
		subtree: true,
		childList: true,
	  });
	});
  }
  
waitForElementToExist('g#leaf').then(element => {
	autumnElm = $(element);
	var outerSVG = Snap('#outerLeaf');
	var innerSVG = Snap('#innerLeaf');
	outerLeafHolder = outerSVG.group();
	innerLeafHolder = innerSVG.group();
	makeLeaf();
});

function makeLeaf() {
	console.log(autumnElm.offset().top);
	let scale = 0.5 + (Math.random() * 0.5);
	let newLeaf;
	
	let x = autumnElm.offset().left + 200;
	let endX; // = x - ((Math.random() * (areaX * 2)) - areaX)
	let y = -10;
	let endY;
	
	if(scale > 0.8)
	{
		newLeaf = outerLeafHolder.circle(0, 0, 5)
			.attr({
				fill: 'red'
			})
		endY = $('body').height() + 10;
		y = autumnElm.offset().top + Math.random()*autumnElm.height();
		x =  x + autumnElm.offset().left;
		console.log(endY, x, y)
		//xBezier = x + (sizes.container.width - sizes.card.offset.left) / 2;
		//endX = sizes.container.width + 50;
	}
	else 
	{
		newLeaf = innerLeafHolder.circle(0, 0 ,5)
		.attr({
			fill: 'red'
		})
		endY = $('body').height() + 10;
		//x = -100;
		//xBezier = sizes.card.width / 2;
		//endX = sizes.card.width + 50;
		
	}
	
	Leaf.push(newLeaf);
	 
	
	TweenMax.fromTo(newLeaf.node, 3 + (Math.random() * 5), {x: x, y: y}, {y: endY, onComplete: onLeafEnd, onCompleteParams: [newLeaf], ease: Power0.easeIn})
	TweenMax.fromTo(newLeaf.node, 1,{scale: 0}, {scale: scale, ease: Power1.easeInOut})
	TweenMax.to(newLeaf.node, 3, {x: x+((Math.random() * 150)-75), repeat: -1, yoyo: true, ease: Power1.easeInOut})
}

function onLeafEnd(flake) {
	flake.remove();
	flake = null;
	
	for(var i in Leaf)
	{
		if(!Leaf[i].paper) Leaf.splice(i, 1);
	}
	
	if(Leaf.length < settings.snowCount)
	{
		makeSnow();
	}
}
