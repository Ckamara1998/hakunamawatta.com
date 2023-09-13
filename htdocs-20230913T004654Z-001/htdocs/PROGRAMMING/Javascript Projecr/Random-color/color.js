const containerEl = document.querySelector(".container");

for(let color = 0; color < 30; color++){
    const colorContainerEl = document.createElement("div");
    colorContainerEl.classList.add("color-container");
    containerEl.appendChild(colorContainerEl);
}

const colorContainerEls = document.querySelector(".color-container");

function generateColors(){
    colorContainerEls.forEach(
        (colorContainerEl) =>{
        const newColorCode = randomColor()
    })
}

function randomColor(){
    const chars = "0123456789abcdef"
    const colorCodeLength = 6;
    let colorCode = ""
    for(let color = 0; color < colorCodeLength; color++){
        const element = array[color];
        const randomNum = Math.floor(Math.random() * chars.length);
       color += chars.substring(randomNum, randomNum + 1);
        return colorCode;
    }
}