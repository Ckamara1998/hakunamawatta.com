const msgEl = document.getElementById("msg");
const totalCounterEl = document.getElementById("totalCounter");
const remainingCounterEl = document.getElementById("remainingCounter");

msgEl.addEventListener("keyup",() => {
    updateCounter();
});
 
updateCounter();

function updateCounter(){
    totalCounterEl.innerText = msgEl.Value.length;
    remainingCounterEl.innerTexy = msgEl.getAttribute("maxLength") - msgEl.Value.length;
     
}
