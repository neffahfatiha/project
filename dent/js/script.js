// Select the box container and all boxes
const boxContainer = document.querySelector('.box-container');
const boxes = document.querySelectorAll('.box');

// Function to move left to show the fourth box
function showFourthBox() {
    boxContainer.style.transform = 'translateX(-25%)'; // Move left by one box width
}

// Function to reset the boxes to the original position
function resetBoxes() {
    boxContainer.style.transform = 'translateX(0)'; // Reset position to show first three boxes
}

// Add mouseover event to the third box
if (boxes[2]) { // Ensure the third box exists
    boxes[2].addEventListener('mouseover', showFourthBox);
}

// Add mouseover event to the first box (currently the second)
if (boxes[1]) { // Ensure the second box exists
    boxes[1].addEventListener('mouseover', resetBoxes);
}