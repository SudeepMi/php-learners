# PHP Numbers
One thing to notice about PHP is that it provides automatic data type conversion.

So, if you assign an integer value to a variable, the type of that variable will automatically be an integer. Then, if you assign a string to the same variable, the type will change to a string.

This automatic conversion can sometimes break your code.

## PHP Integers
An integer is a number without any decimal part.

2, 256, -256, 10358, -179567 are all integers. While 7.56, 10.0, 150.67 are floats.

So, an integer data type is a non-decimal number between -2147483648 and 2147483647. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.

Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float (2.5).

Here are some rules for integers:

- An integer must have at least one digit
- An integer must not have a decimal point
- An integer can be either positive or negative
- Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)
PHP has the following functions to check if the type of a variable is integer:

- is_int()
- is_integer() - alias of is_int()
- is_long() - alias of is_int()
Example
Check if the type of a variable is integer:
```
<?php
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
?>
```

## PHP Floats
A float is a number with a decimal point or a number in exponential form.

2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.

The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), and have a maximum precision of 14 digits.

PHP has the following functions to check if the type of a variable is float:

- is_float()
- is_double() - alias of is_float()
Example
Check if the type of a variable is float:
```
<?php
$x = 10.365;
var_dump(is_float($x));
?>
```

## PHP Infinity
A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

PHP has the following functions to check if a numeric value is finite or infinite:

- is_finite()
- is_infinite()
However, the PHP var_dump() function returns the data type and value:

Example
Check if a numeric value is finite or infinite:
```
<?php
$x = 1.9e411;
var_dump($x);
?>
```

## PHP NaN
NaN stands for Not a Number.

NaN is used for impossible mathematical operations.

PHP has the following functions to check if a value is not a number:

- is_nan()
However, the PHP var_dump() function returns the data type and value:

Example
Invalid calculation will return a NaN value:
```
<?php
$x = acos(8);
var_dump($x);
?>
```

## PHP Numerical Strings
The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.

Example
Check if the variable is numeric:
```
<?php
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?>
```
> Note: From PHP 7.0: The is_numeric() function will return FALSE for numeric strings in hexadecimal form (e.g. 0xf4c3b00c), as they are no longer considered as numeric strings.

## PHP Casting Strings and Floats to Integers
Sometimes you need to cast a numerical value into another data type.

The (int), (integer), or intval() function are often used to convert a value to an integer.

Example
Cast float and string to integer:
```
<?php
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>
```
# PHP Math
PHP has a set of math functions that allows you to perform mathematical tasks on numbers.

## PHP pi() Function
The pi() function returns the value of PI:

Example
```
<?php
echo(pi()); // returns 3.1415926535898
?>
```

## PHP min() and max() Functions
The min() and max() functions can be used to find the lowest or highest value in a list of arguments:

Example
```
<?php
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150
?>
```

## PHP abs() Function
The abs() function returns the absolute (positive) value of a number:

Example
```
<?php
echo(abs(-6.7));  // returns 6.7
?>
```

## PHP sqrt() Function
The sqrt() function returns the square root of a number:

Example
```
<?php
echo(sqrt(64));  // returns 8
?>
```

## PHP round() Function
The round() function rounds a floating-point number to its nearest integer:

Example
```
<?php
echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0
?>
```

## Random Numbers
The rand() function generates a random number:

Example
```
<?php
echo(rand());
?>
```
To get more control over the random number, you can add the optional min and max parameters to specify the lowest integer and the highest integer to be returned.

For example, if you want a random integer between 10 and 100 (inclusive), use rand(10, 100):

Example
```
<?php
echo(rand(10, 100));
?>
```






