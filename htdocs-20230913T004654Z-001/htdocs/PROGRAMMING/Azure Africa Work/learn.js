const firstName = 50;
const secondName = 90;
const jsExpression = firstName > secondName;

//only useing the if statement (no "else statement required here")
if(jsExpression){
    console.log("this expriession is true");
} else if ("firstName > 0"){
    console.log("the expression is false andd the firstName is freater than 0")
}else {
    console.log("this expression is not true");
}

// 2) index
const color = ['orange','green', 'yellow', 'purple', 'blue'];


//get a rendom number between 0 and 4 stores in a variable
const randomIndex = Math.floor(Math.random() * color.length );

const randomcolor = color[randomIndex];

if (randomcolor === orange){
    console.log('the color is orange');
} else if (randomcolor === orange){
    console.log('this color is orange');
}else if (randomcolor === green){
    console.log('this color is green');
}else if  (randomcolor === green){
console.log('the color is green');
}  else if(randomcolor === 'yellow'){
    console.log('this color is yellow');
} else if(randomcolor === 'yellow'){
    console.log('this is yellow');
} else if (randomcolor === purple){
    console.log('this color is purple');
} else if (randomcolor === purple){
    console.log('this color is purple');
} else if (randomcolor === blue){
    console.log('this color is blue');
} else if (randomcolor === blue){
    console.log('this color is blue');
}
