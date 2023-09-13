const num1 = Math.ceil (Math.random()*50)
const num2 = Math.ceil (Math.random()*50)

let score = JSON.parse(localStorage.getItem("score"));
if(!score){
    score = 0;
}


const questionEl = document.getElementById("question");
const formEl = document.getElementById("form");
const inputEl = document.getElementById("input");
const scoreEl = document.getElementById("score");
const correctAns = num1 * num2;
scoreEl.innerText = `score: ${score}`
questionEl.innerText = `What is ${num1} multiply by ${num2}`  
formEl.addEventListener("submit", ()=>{
const userAns = +inputEl.value



if(userAns === correctAns){
    score ++;
    updateLocalStorage()
}else{
    score --;
    updateLocalStorage()
}
})
function updateLocalStorage(){
   localStorage.setItem("score", JSON.stringify(score)); 
}



const secondsEl = document.getElementById("seconds");


function updateClock(){
   
    let s = new Date().getSeconds();
    s = s < 10 ? "0" + s : s;

    
   secondsEl.innerText = `Time out: ${s}`
    setTimeout(()=>{
        updateClock();
    }, 1000);
}
updateClock();

