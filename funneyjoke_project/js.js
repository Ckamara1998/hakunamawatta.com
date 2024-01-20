const jokecontener = document.getElementById("joke");
const btn = document.getElementById("btn");
const url = "https://v2.jokeapi.dev/joke/Any?blacklistFlags=nsfw,religious,political,racist,sexist,explicit&type=single";

let getJoke = () => {
    jokecontener.classList.remove("fade");
    fetch(url)
    .then(data => data.json())
    .then(item => {
        jokecontener.textContent = `${item.joke}`;
        jokecontener.classList.add("fade");
    });
}
btn.addEventListener("click", getJoke);
getJoke();