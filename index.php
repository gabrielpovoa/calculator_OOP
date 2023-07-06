<?php 
require 'calculator.php';

$calc = new Calculator(0);
$calc->add(12);
$calc->add(2);
$calc->sub(1);
$calc->times(3);
$calc->divide(2);
$calc->add(0.5);

?>

<html>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            flex: 1;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
    <body>
        <h1>CALCULATOR_OO</h1>
        <?php
        echo "TOTAL: ".$calc->initialValue."<br>";
        $calc->clear()
        ?>
    </body>
</html>
