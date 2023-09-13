<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body style=" word-spacing: 6px;">
<?php include("work.html"); ?>
<nav>
        <ul>
            <li> <a href="work.html">About</a></li>
            <li><a href="">Education</a></li>
            <li><a href="">Contact</a></li>
            
        </ul>
    </nav>
    <h1>MY Work</h1>
    <p>Good Morning brother cooper, how was your night</p>
    <?php
    echo"Good Morning brother cooper, how was your night"; 
    ?>
    <p>
this line was writing in html<br><?php
echo "this line was writing in php.";
?>

    </p>
<?php
$age_of_visitor = 17;
echo "vistory has";

echo $age_of_visitor;  
?><br>
 

    <?php
     /*php varible value. Concretely, what would the preceding code display? Nothing at all ! Yes, 
     as long as you don't use echo, nothing is displayed. 
There, the server just created the variable temporarily in memory, but it didn't do anything else.
int(whole number*/
    $age_of_visitors = 17;
    echo "my age is .$age_of_visitor. and i love to be in school";

    echo "my name is cooper";
 $age_of_visitor = 17; // The variable is created and is worth 17
 $age_of_visitor = 23; // The variable is modified and is worth 23
 $age_of_visitor = 55; // The variable is modified and is worth 55
    ?><br><br>

    <?php
    if($age_of_visitors >=17){
    echo"You are excepted to watch this video";
    }elseif ($age_of_visitors <17){
        echo "You are not excepted to watch tihs video";
    }
    ?><br><br>

<?php
// data string//

$visitor_name = "Kamara Cooper";

?><br><br>
<?php
if($visitor_name=="Kamara Cooper"){
    echo "Hello, Kamara Cooper. You are welcome to this site";
}else{
    echo "This is not your site, please.";
}
?>






<?php
$number1 = 12 + 12;
echo "$number1";
$number2 = 12 * 12;
echo "$number2";
$number3 = 12 - 12;
echo "$number3";
$result = ($number1 * $number3);
echo"$result"
?><br>

<?php
$number = 10;
$result = ($number + 5) * $number;
echo"$result"
?><br>

<?php
$number = 10%3;
echo "$number";
$numbern = 10%5;
echo "$numbern"
 

?><br><br><br>


<?php
$permission = false;
if($permission==true){
    echo"welcom in my friend";
}elseif($permission==false){
    echo "You are not welcome";
}

?><br><br>
<?php
$age = 12;
$SEX = "Girl";
if($age<=12 &&/*this stand for and*/ $SEX=="BOY"){
    echo "You are welcome to this party";
}
elseif($age<= 12 &&/*this stand for and*/ $SEX=="Girl"){
    echo "This is not for girl,please.";
}

?><br><br>

<?php
$sex = "men";

if($sex ="boy" ||/*this stand for or*/ $sex = "boy"){
    echo "You are welcome to this party";
}else{
    echo "you are not allow to enter here";
}
?><br><br>

<?php
$cooper =20;
if($cooper == 0){
    echo"You have not reach the age yet Kamara";
}elseif($cooper <= 2){
    echo "not yet Kamara";
}elseif($cooper <= 4){
    echo "stay not yet Kamara";
}elseif($cooper >=6){
    echo "You can now be part of this organization Kamara";
}else{
    echo "This organization is not yours Kamara";
}
?><br><br>

<?php
$AGE = 24;
if($AGE >=18){
    $cooper = true;
}else{
    $cooper = false; 
}
?><br><br>


<?php
$AGE = 24;
$adult = ($age >= 18) ? true : false;

?>





<?php
//if statment//
$age = 12;//if the age is equal or less then //
if($age<=12){
    echo "Yes"; $authorization_to_enter = "Yes";
}else{
    echo "No";  $authorization_to_enter = "No";
}

?>
<?php
if($authorization_to_enter=="Yes"){
    echo"you are welcome visitor";
    }
    elseif($authorization_to_enter=="No"){
    echo "You do not have permission to enter here";
    }
?><br><br>
<?php
$phrase="Hello Zero! I am a Sentence";
$length= strlen($phrase);
echo"the sentence below has";
?><br><br>
<?php 
$my_variable = str_replace ('b', 'p', 'bim bam boom' );
echo $my_variable ; 
?><br><br>


<?php 
$string = 'This string will be shuffled!' ; $string = str_shuffle ($string);
echo $string; ?><br><br>
<?php 
$string = 'HOW AM I SCREAMING TOO LOUD???' ; $string = strtolower ($string);
echo $string; ?><br><br>



<?PHP
$int = 2;
$at = 4;
$ck = ($int ^ $at);
echo $ck;


?><br><br>

<?php
$volume = 5 * 5 * 3.14 * 2 * (1 / 3);
echo $volume ; 

$prenoms = array
('François', 'Michel', 'Nicole', 'Véronique' , 'Benoît');
?>

<?php 
$firstnames[0] = 'François'; $firstnames[1] 
= 'Michel'; $firstnames[2] = 'Nicole'; ?><br><br>

<?php
$firstname[]='francois';
$firstname[]='Michel';
$firstname[]='Nicole';
echo $firstnames[0];
?><br><br>

<?php  $coordonnees = array 
( 'first name' => 'François', 'surname' => 'Dupont', 'address' => 
'3 Rue du Paradis', 'city' => 'Marseilles' );

?><br><br>

<?php 
$coordinates ['firstname'] = 'Francois'; $coordinates ['name'] = 
'Smith'; $coordinates ['address'] = '3 Rue du Paradis' ; $coordinates 
['city'] = 'Marseille' ;
echo $coordinates['firstname'], $coordinates ['name'],$coordinates ['address'],$coordinates 
['city'];
?><br><br>

<?php
$fruits = array ('Banana', 'Apple', 'Pear', 'Cherry', 'Strawberry', 'Raspberry' );
if (in_array('Blueberry', $fruits)) {
    echo 'Value "Blueberry" is in fruit!';
}if (in_array('Cherry', $fruit)) {
    echo 'The value "Cherry" is in the fruit!';
}
?>
</body>
</html>
<?php
