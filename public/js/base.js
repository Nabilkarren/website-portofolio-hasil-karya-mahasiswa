// var userSelection;

// if (window.getSelection) {
// 	userSelection = window.getSelection();
// }
// else if (document.selection) { // should come last; Opera!
// 	userSelection = document.selection.createRange();
// }

// var selectedText = userSelection;
// if (userSelection.text) {
// 	selectedText = userSelection.text;
// }

// var rangeObject = getRangeObject(userSelection);

// function getRangeObject(selectionObject) {
// 	if (selectionObject.getRangeAt)
// 		return selectionObject.getRangeAt(0);
// 	else { // Safari!
// 		var range = document.createRange();
// 		range.setStart(selectionObject.anchorNode,selectionObject.anchorOffset);
// 		range.setEnd(selectionObject.focusNode,selectionObject.focusOffset);
// 		return range;
// 	}
// }

// const node = document.querySelector('div');
// if (window.getSelection) {
//   const selection = window.getSelection();
//   const range = document.createRange();
//   range.selectNodeContents(node);
//   selection.removeAllRanges();
//   selection.addRange(range);
// }