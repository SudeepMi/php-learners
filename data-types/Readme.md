# PHP Data Types
### Variables can store data of different types, and different data types can do different things.

## PHP supports the following data types:

- String
- Integer
- Float (floating point numbers - also called double)
- Boolean
- Array
- Object
- NULL
- Resource

## PHP String
A string is a sequence of characters, like "Hello world!".

A string can be any text inside quotes. You can use single or double quotes:

Example
```
<?php
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
?>
```

## PHP Integer
An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

Rules for integers:

- An integer must have at least one digit
- An integer must not have a decimal point
- An integer can be either positive or negative
- Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation
In the following example $x is an integer. The PHP var_dump() function returns the data type and value:

Example
```
<?php
$x = 5985;
var_dump($x);
?>
```

## PHP Float
A float (floating point number) is a number with a decimal point or a number in exponential form.

In the following example $x is a float. The PHP var_dump() function returns the data type and value:

Example
```
<?php
$x = 10.365;
var_dump($x);
?>
```

## PHP Boolean
A Boolean represents two possible states: TRUE or FALSE.
```
$x = true;
$y = false;
```
Booleans are often used in conditional testing. You will learn more about conditional testing in a later chapter of this tutorial.

## PHP Array
An array stores multiple values in one single variable.

In the following example $cars is an array. The PHP var_dump() function returns the data type and value:

Example
```
<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>
```
You will learn a lot more about arrays in later chapters of this tutorial.

## PHP NULL Value
Null is a special data type which can have only one value: NULL.

A variable of data type NULL is a variable that has no value assigned to it.

Tip: If a variable is created without a value, it is automatically assigned a value of NULL.

Variables can also be emptied by setting the value to NULL:

Example
```
<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>
```


