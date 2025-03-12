//Exercise 1: Variables and Operators
// 1. Declare two variables, `$a` and `$b`, with values 15 and 7.
// 2. Compute and print their sum, difference, product, and quotient.

<?php
$a = 15;
$b = 7;

$sum = $a + $b;
$difference = $a - $b;
$product = $a * $b;
$quotient = $a / $b;

echo "Sum: " . $sum . "\n";
echo "Difference: " . $difference . "\n";
echo "Product: " . $product . "\n";
echo "Quotient: " . $quotient . "\n";
?>


// Exercise 2: Conditional Statements
// 1. Write a PHP program that checks if a number is even or odd.
<?php
function checkEvenOdd($num) {
    if ($num % 2 == 0) {
        return "$num is even.";
    } else {
        return "$num is odd.";
    }
}

$number = 15;
echo checkEvenOdd($number);
?>
// 2. Modify the program to check if the number is positive, negative, or zero.
<?php
function checkEvenOdd($num) {
    if ($num % 2 == 0) {
        return "$num is even.";
    } else {
        return "$num is odd.";
    }
}

function checkNumber($num) {
    if ($num > 0) {
        return "$num is positive.";
    } elseif ($num < 0) {
        return "$num is negative.";
    } else {
        return "$num is zero.";
    }
}

$number = 15;
echo checkEvenOdd($number) . "\n";
echo checkNumber($number);
?>

// **Exercise 3: Loops**

// 1. Write a loop that counts from 1 to 100, printing "Fizz" for multiples of 3, "Buzz" for multiples of 5, and "FizzBuzz" for multiples of both.

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n";
    } elseif ($i % 3 == 0) {
        echo "Fizz\n";
    } elseif ($i % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo "$i\n";
    }
}
// 2. Create a loop that generates the first 10 numbers in the Fibonacci sequence, and prints only the even numbers in the sequence.
$fib_sequence = [0, 1];
while (count($fib_sequence) < 10) {
    $fib_sequence[] = end($fib_sequence) + prev($fib_sequence);
}

foreach ($fib_sequence as $num) {
    if ($num % 2 == 0) {
        echo "$num\n";
    }
}



// **Exercise 4: Functions**

// 1. Create a function that takes a name as input and returns a greeting message.
// 2. Create a function that calculates the square of a number.

// **Exercise 5: Form Handling**

// 1. Create an HTML form with a text input and submit button.
// 2. Write a PHP script to display the submitted text.
<!DOCTYPE html>
<html>
<head>
    <title>Text Submission Form</title>
</head>
<body>
    <form action="display_text.php" method="post">
        <label for="text">Enter some text:</label><br>
        <input type="text" id="text" name="text"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>Display Submitted Text</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $submitted_text = htmlspecialchars($_POST["text"]);
        echo "You submitted: " . $submitted_text;
    } else {
        echo "No text submitted.";
    }
    ?>
    <br><br>
    <a href="index.php">Go back to the form</a>
</body>
</html>