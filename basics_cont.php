<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: grey;
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>Lets Learn about PHP</h1>
        <p>Your party status is here:</p>
        <?php
            $age =26;
            echo "<br>Your age is:  ";
            echo $age;
            if($age > 18){
                echo "<br>Party time";
            }
            else if($age==7){
                echo "You are 7 years old";
            }
            else{
                echo "<br>No party time";
            }
            echo "<br>Array example<br>";
            $languages = array("PYTHON","C++","PHP","Node.JS");
            echo $languages[0];
            echo "<br>";
            echo $languages[1];
            echo "<br>";
            echo $languages[2];
            echo "<br>";
            echo $languages[3];
            echo "<br>Count Array<br>";
            echo count($languages);
            //Loops
            $a = 0;
            echo "<br>Example of while loop";
            while ($a <= 10) {
                echo "<br>value of a ";
                echo $a;
                $a++;
            }
            echo "<br>Iterating arrays in PHP using while loop";
            $a=0;
            while($a<count($languages)){
                echo "<br>value of language:";
                echo $languages[$a];
                $a++;
            }
            echo "<br>Do while loop";
            //it would print the starting point first and then check condition 
            //so for eg if a is 20 it would print value of a is 20
            //that would be it 
            //because the condition won't be satisfied
            $a=0;
            do{
                echo "<br>value of a ";
                echo $a;
                $a++;
            } while ($a < 10);
            echo "<br>For Loop";
            for ($a=0; $a < 10; $a++) { 
                # code...
                echo "<br>value of a ";
                echo $a;
            }
            echo "<br>For Each loop - array";
            foreach ($languages as $value){
                echo "<br>the value is:";
                echo $value;
            }
            echo "<br>example of function without argument";
            function print5(){
                echo "<br>FIVE";
            }
            print5();
            echo "<br>example of function with one argument";
            function print_number($number){
                echo "<br>Number is:";
                echo $number;
            }
            print_number(25);
        ?>

    </div>
</body>
</html>