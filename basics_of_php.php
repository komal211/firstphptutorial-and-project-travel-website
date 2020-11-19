<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <?php
            echo "hello world printed using php";
            $variable1 = 34;
            $variable2 = 45;

            echo $variable1;
            echo $variable2;
            echo $variable1 + $variable2;

            //Operators in PHP
            //Arithmetic
            echo "<br>";
            echo "variable1 + variable 2";
            echo $variable1 + $variable2;
            echo "<br>";
            echo "variable1 - variable 2";
            echo $variable1 - $variable2;
            echo "<br>";
            echo "variable1 / variable 2";
            echo $variable1 / $variable2;
            echo "<br>";
            echo "variable1 * variable 2";
            echo $variable1 * $variable2;
            //Assignment
            $newvar = $variable1;
            //$newvar += 1;
            //$newvar -= 1;
            //$newvar *= 1;
            //$newvar /= 1;
            echo "<br>";
            echo "new variable";
            echo $newvar;
            //Comparison
            echo "<br>value of 1==4";
            echo var_dump(1==4);
            //comparison operator list
                /*
                    == equal
                    != or <>
                    !== not of same type
                    >=
                    <=
                    >
                    <
                    === identical

                */
            //Increment/Decrement
            /* $incafter = $variable1++;
            $decafter = $variable1--;
            $decbefore = --$variable1;
            $incbefore = ++$variable1; */
            echo "<br>value of variable 1 is";
            echo $variable1;
            echo "<br>increment after";
            echo $variable1++;
            echo "<br>decrement after";
            echo $variable1--;
            echo"<br>increment before";
            echo ++$variable1;
            echo "<br>decrement before";
            echo --$variable1;
            //Logical
            $myvar = (true and true);
            echo "<br>true and true";
            echo var_dump($myvar);
            /*
            $a and $b
            $a && $b
            $a or $b
            $a || $b
            $a xor $b
                if a or b true but not both
            !$a
            */
                      
        ?>
        <?php
        define('PI', 3.14);
            // data types
            //string
            //integer
            //float
            //boolean
            //array
            //object
            echo "<br>data types <br>";
            $dvar = "this is a string";
            echo var_dump($dvar);
            echo "<br>";
            $dvar = 25;
            echo var_dump($dvar);
            echo "<br>";
            $dvar = 25.3;
            echo var_dump($dvar);
            echo "<br>";
            $dvar = true;
            echo var_dump($dvar);
            echo "<br>";
            echo PI;

        ?>
    </div>
</body>
</html>