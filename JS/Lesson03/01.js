let board = document.querySelector(".chessboard");
let rowCounter = 8;
const letterArray = ["a", "b", "c", "d", "e", "f", "g", "h"];

for (let i = 0; i < 8; i++) {
  let row = document.createElement("div");
  row.classList.add("row");
  if ((i + 1) % 2 === 0) {
    row.classList.add("row-even");
  } else {
    row.classList.add("row-odd");
  }
  board.appendChild(row);
  for (let j = 0; j < 8; j++) {
    let square = document.createElement("div");
    square.classList.add("square");
    if (j === 0) {
      let numberSpan = document.createElement("span");
      numberSpan.textContent = rowCounter;
      numberSpan.classList.add("number");
      square.appendChild(numberSpan);
    }
    if (i === 7) {
      let letterSpan = document.createElement("span");
      letterSpan.textContent = letterArray[j];
      letterSpan.classList.add("letter");
      square.appendChild(letterSpan);
    }
    if (row.classList.contains("row-even")) {
      if ((j + 1) % 2 === 0) {
        square.classList.add("square-even");
      } else {
        square.classList.add("square-odd");
      }
    } else {
      if ((j + 1) % 2 === 0) {
        square.classList.add("square-odd");
      } else {
        square.classList.add("square-even");
      }
    }
    square.addEventListener("click", (event) => {
      event.target.classList.toggle("selected");
    });
    row.appendChild(square);
  }
  rowCounter--;
}
zoomInfo = document.querySelector(".zoom");
zoomInfo.textContent =
  Math.round((parseFloat(getComputedStyle(board).zoom) * 100).valueOf()) + "%";

window.addEventListener("keypress", (event) => {
  let currentZoom = parseFloat(getComputedStyle(board).zoom);
  if (event.key === "+") {
    board.style.zoom = currentZoom + 0.01;
  } else if (event.key === "-") {
    board.style.zoom = currentZoom - 0.01;
  }
  zoomInfo.textContent =
    Math.round((parseFloat(getComputedStyle(board).zoom) * 100).valueOf()) +
    "%";
});

let zoomButton = document.querySelector(".zoombutton");

zoomButton.addEventListener("click", (event) => {
  board.style.zoom = 1;
  zoomInfo.textContent =
    Math.round((parseFloat(getComputedStyle(board).zoom) * 100).valueOf()) +
    "%";
});
