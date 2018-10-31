// JavaScript Document

/*

A script by Brandon Walker to generate circular ui elements (navigation)

*/

function CircularNavigation(width, height) {
	'use strict';
	
//	constants for svg generation
	const width = width;
	const height = height;
	
	function createWedge(wedgeCount, wedgeNumber, outerRadius, innerRadius){
		let angle = 2 * Math.PI / wedgeCount;
		let x1 = 250 + (outerRadius * Math.cos(angle));
		let y1 = 250 - (outerRadius * Math.sin(angle));
		let rotation = (-360 / wedgeCount) * wedgeNumber;
		let path;
		if(innerRadius > 0) {
			let x2 = outerRadius + (innerRadius) * Math.cos(angle);
			let y2 = outerRadius - (innerRadius) * Math.sin(angle);
			path = '<path fill="lightgrey" stroke="white" stroke-width="5" d="M400,250 l100,0 A250,250 0 0,0 ' + x1 + ',' + y1 + ' L' + x2 + ',' + y2 + ' A150,150 0 0,1 400,250 z" transform="rotate(' + rotation + ', 250, 250)" />';
		} else {
			path = '<path fill="grey" stroke="white" stroke-width="5" d="M250,250 l100,0 A100,100 0 0,0 ' + x1 + ',' + y1 + ' z" transform="rotate(' + rotation + ', 250, 250)" />';
		}

		return path;
	}
};