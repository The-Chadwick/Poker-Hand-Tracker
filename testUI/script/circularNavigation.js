// JavaScript Document

/*

A script by Brandon Walker to generate circular ui elements (navigation)

*/
let dragging = false;
let mouseX, mouseY;

window.addEventListener('load', function load(){
	'use strict';

	let circularNav = '<svg width="500px" height="500px" id="container">';
	
	// outer circle
	circularNav += '<g id="outer" transform="rotate(-90)">';
	for(let i = 0; i < 13; i++){
		circularNav += '<a href="#">' + createWedge(13, i, 250, 125) + '</a>';
	}
	circularNav += '</g>';
	
	circularNav += '<g id="inner">'
	for(let i = 0; i < 4; i++){
		circularNav += '<a href="#">' + createWedge(4, i, 125, 0) + '</a>';
	}
	circularNav += '</g>';
	circularNav += '</svg>';

	document.querySelector('#circularNav').innerHTML = circularNav;
});

function createWedge(wedgeCount, wedgeNumber, outerRadius, innerRadius){
	'use strict';

	let angle = 2 * Math.PI / wedgeCount;
	let x1 = 250 + (outerRadius * Math.cos(angle));
	let y1 = 250 - (outerRadius * Math.sin(angle));
	let rotation = (-360 / wedgeCount) * wedgeNumber;
	let path;
	if(innerRadius > 0) {
		// location to start drawing wedge (first corner)
		let x0 = outerRadius + innerRadius;
		let y0 = outerRadius;
		// length between the inner radius and the outer
		let xSide = outerRadius - innerRadius;
		// the fourth corner to be drawn (fourth corner going counterclockwise from first corner)
		let x2 = outerRadius + (innerRadius) * Math.cos(angle);
		let y2 = outerRadius - (innerRadius) * Math.sin(angle);
		
		path = '<path fill="lightgrey" stroke="white" stroke-width="5" d="M' + x0 + ',' + y0 + ' l' + xSide + ',0 A250,250 0 0,0 ' + x1 + ',' + y1 + ' L' + x2 + ',' + y2 + ' A150,150 0 0,1 ' + x0 + ',' + outerRadius +' z" transform="rotate(' + rotation + ',' + outerRadius + ',' + outerRadius +')" />';
	} else {
		path = '<path fill="grey" stroke="white" stroke-width="5" d="M250,250 l' + outerRadius + ',0 A' + outerRadius + ',' + outerRadius + ' 0 0,0 ' + x1 + ',' + y1 + ' z" transform="rotate(' + rotation + ', 250, 250)" />';
	}

	return path;
}

function rotate(degree){
	'use strict';
	
	document.querySelector('#outer').setAttribute('transform', 'rotate(' + degree + ')');
}

document.querySelector('#inner').addEventListener('mousedown', function() {
	'use strict';
	
	dragging = true;
	mouseX = event.clientX;
	mouseY = event.clientY;
});

document.querySelector('#inner').addEventListener('mouseup', function() {
	'use strict';
	
	dragging = false;
});

document.querySelector('#inner').addEventListener('mousemove', function(){
	'use strict';
	
	if(dragging) {
		let deltaX, deltaY;
		deltaX = mouseX - event.clientX;
		deltaY = mouseY - event.clientY;
		rotate(deltaX + deltaY);
	}
});