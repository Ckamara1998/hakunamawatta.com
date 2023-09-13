let xp = 0;
let health = 100;
let gold = 50;
let currentWeapon = 0;
let fighting;
let monterHealth;
let inventory = ["stick"]; 

const button1 = document.querySelector("#button1");
const button2 = document.querySelector("#button2");
const button3 = document.querySelector("#button3");
const text = document.querySelector("#text");
const xpText = document.querySelector("xpText");
const healthText = document.querySelector("#healthText");
const goldText = document.querySelector("#goldTexe");
const monstarstats = document.querySelector("#monsetrstats");
const monstarName = document.querySelector("#monsterName");
const monsterHealth = document.querySelector("#monsterHealth");

const weapons = [
    {
        name:"stick",
        power: 5
    },
    {
        name:"dagger",
        power: 30
    },
    {
        name:"claw hammer",
        power: 50
    },
    {
        name:"sword",
        power: 100
    }
]

const locations = [ 
    {
        name: "town aquare",
        "button text": ["Go to store", "Go to cave", "Fight dragon"],
        "button functions": [goStore, goCave, fightDragon],
        text: "You are in the town square. You see a sign that say \"store.\""
    },

    {
        name: "store",
        "button text": ["Buy 10 health (10 gold)", "Buy weapon (30 gold)", "Go to town square"],
        "button functions": [buyHealth, buyWeapon, goTown],
        text: "You enter the store"
    },
    {
        name: "cave",
        "button text": ["Figth slime", "Fight fanged beast", "Go to town square"],
        "button functions": [fightSlime, fightBeast, goTown],
        text: "You enter the cave. You see some monsters."
    } 
]


//initialize button



button1.onclick = goStore;
button2.onclick = goCave;
button3.onclick = fightDragon;

function update(locations){
    button1.innerText = locations["button text"][0];
    button2.innerText = locations["button text"][1];
    button3.innerText = locations["button text"][2];
    button1.onclick = locations["button functions"][0];
    button2.onclick = locations["button functions"][1];
    button3.onclick = locations["button functions"][2];
    text.innerText = locations.text;
    
}

function goTown(){
    update(locations[0]);
    
}

function goStore(){
    update(locations[1]);
}

function goCave(){
    update(locations[2]);
}


function buyHealth(){
if(gold >= 10) {
    gold -= 10;
    health += 10;
    goldText.innerText = gold;
    healthText.innerText = health;
}else {
    text.innerText = "You don't have enought gold to buy health.";
}
   
}

function buyWeapon(){
if(currentWeapon < weapons.length - 1) {
    if(gold >= 30){
        gold -= 30;
        currentWeapon++;
        goldText.innerText = gold;
        let newweapon = weapons[currentWeapon].name;
        text.innerText = "You now have a " + newweapon + ".";
        inventory.push(newweapon);
        text.innerText += "In your inventory you have: " + inventory;
    }else {
        text.innerText = "You do not have enough gold to buy a weapon.";
    }
}else{
    text.innerText = "You already have a powerful weapon!";
    button2.innerTexet = "Sell weapon for 15 gold";
    button2.oneclick = sellWeapon; 
}
}

function sellweapon(){
    if (inventory.length > 1){
        gold += 15;
        goldText = gold;
        let currentWeapon = inventory.shift();
        text.innerText = "You sold a " + currentWeapon + ".";
        text.innerText =+ " In your inventouy you have: " + inventory;
    }else{
        text.innerText = "Don't sell ypur only weapon!"
    }
}

function fightSlime(){
    
}
function fightBeast(){
    
}
function fightDragon(){
    console.log(" fight Dragon.")
}
