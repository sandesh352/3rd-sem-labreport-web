<?php
//PHP program to demonstrate the 
//Divide By Zero Exception using exception handling.
try
{
    $A = 10;
    $B = 0;

    if ($B == 0) throw new Exception("Divide by Zero exception occurred");
    $C = $A / $B;
    printf("Value of C: %d<br>", $C);
}
catch(Exception $e)
{
    printf("Exception: %s", $e->getMessage());
}
?>