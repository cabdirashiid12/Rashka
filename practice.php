<?php
/* ---------------------------------------------------------
 * 1. Compare three integer numbers
 * --------------------------------------------------------- */
echo "<h2>1. Compare three integer numbers</h2>";

function compareThreeNumbers($a, $b, $c) {
    echo "<p>Numbers: $a, $b, $c</p>";

    // Find the greatest
    $greatest = $a;
    if ($b > $greatest) $greatest = $b;
    if ($c > $greatest) $greatest = $c;

    // Find the smallest
    $smallest = $a;
    if ($b < $smallest) $smallest = $b;
    if ($c < $smallest) $smallest = $c;

    echo "<p><strong>Greatest:</strong> $greatest</p>";
    echo "<p><strong>Smallest:</strong> $smallest</p>";
}

compareThreeNumbers(15, 7, 22);

echo "<hr>";

/* ---------------------------------------------------------
 * 2. Check divisibility by 3 and 5
 * --------------------------------------------------------- */
echo "<h2>2. Check divisibility</h2>";

function checkDivisibility($number) {
    echo "<p>Number: $number</p>";

    $by3 = ($number % 3 == 0);
    $by5 = ($number % 5 == 0);

    if ($by3 && $by5) {
        echo "<p>The number $number is <strong>divisible by both 3 and 5</strong>.</p>";
    } elseif ($by3) {
        echo "<p>The number $number is <strong>divisible by 3 only</strong>.</p>";
    } elseif ($by5) {
        echo "<p>The number $number is <strong>divisible by 5 only</strong>.</p>";
    } else {
        echo "<p>The number $number is <strong>not divisible by 3 or 5</strong>.</p>";
    }
}

checkDivisibility(15);
checkDivisibility(9);
checkDivisibility(20);
checkDivisibility(7);

echo "<hr>";

/* ---------------------------------------------------------
 * 3. Print odd numbers from 2 to 20
 * --------------------------------------------------------- */
echo "<h2>3. Print odd numbers from 2 to 20</h2>";
for ($i = 3; $i <= 20; $i += 2) {
    echo $i . " ";
}

echo "<hr>";

/* ---------------------------------------------------------
 * 4. Print even numbers from 35 down to 7
 * --------------------------------------------------------- */
echo "<h2>4. Print even numbers from 35 to 7 (descending)</h2>";
for ($i = 34; $i >= 8; $i -= 2) {
    echo $i . " ";
}
 
echo "<hr>";

/* ---------------------------------------------------------
 * 5. Numbers divisible by 2 and 3 from 50 to 80
 * --------------------------------------------------------- */
echo "<h2>5. Numbers divisible by both 2 and 3 (50–80)</h2>";
for ($i = 50; $i <= 80; $i++) {
    if ($i % 6 == 0) echo $i . " ";
}

echo "<hr>";

/* ---------------------------------------------------------
 * 6. Reverse a given number
 * --------------------------------------------------------- */
echo "<h2>6. Reverse a given number</h2>";

function reverseNumber($number) {
    $original = $number;
    $reversed = 0;

    while ($number > 0) {
        $digit = $number % 10;
        $reversed = ($reversed * 10) + $digit;
        $number = (int)($number / 10);
    }

    echo "<p>Original: $original | Reversed: <strong>$reversed</strong></p>";
}

reverseNumber(12345);
reverseNumber(9876);

echo "<hr>";

/* ---------------------------------------------------------
 * 7. Calculate Least Common Multiple (LCM)
 * --------------------------------------------------------- */
echo "<h2>7. Calculate Least Common Multiple (LCM)</h2>";

function calculateGCD($x, $y) {
    while ($y != 0) {
        $temp = $y;
        $y = $x % $y;
        $x = $temp;
    }
    return $x;
}

function calculateLCM($a, $b) {
    if ($a == 0 || $b == 0) return 0;
    $lcm = abs($a * $b) / calculateGCD($a, $b);
    echo "<p>LCM of $a and $b is <strong>$lcm</strong></p>";
}

calculateLCM(8, 12);
calculateLCM(10, 15);

echo "<hr>";

/* ---------------------------------------------------------
 * 8. Calculate Greatest Common Factor (GCF/HCF)
 * --------------------------------------------------------- */
echo "<h2>8. Calculate Greatest Common Factor (GCF/HCF)</h2>";

function calculateGCF($a, $b) {
    $originalA = $a;
    $originalB = $b;
    while ($b != 0) {
        $remainder = $a % $b;
        $a = $b;
        $b = $remainder;
    }
    echo "<p>GCF of $originalA and $originalB is <strong>$a</strong></p>";
}

calculateGCF(4, 6);
calculateGCF(60, 48);

echo "<hr>";

/* ---------------------------------------------------------
 * 9. Multiplication Table (1x1 to 12x12)
 * --------------------------------------------------------- */
echo "<h2>9. Multiplication Table (1×1 to 12×12)</h2>";
echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";
echo "<tr><th style='background-color:#d9f2d9;'>×</th>";

for ($col = 1; $col <= 12; $col++) {
    echo "<th style='padding:5px;background-color:#d9f2d9;'>$col</th>";
}
echo "</tr>";

for ($row = 1; $row <= 12; $row++) {
    echo "<tr><th style='background-color:#d9f2d9;'>$row</th>";
    for ($col = 1; $col <= 12; $col++) {
        echo "<td style='padding:5px;'>" . ($row * $col) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<hr>";

/* ---------------------------------------------------------
 * 10. Prime or Non-Prime (10–50)
 * --------------------------------------------------------- */
echo "<h2>10. Check Prime or Non-Prime</h2>";

function isPrime($n) {
    if ($n <= 1) return false;
    if ($n <= 3) return true;
    if ($n % 2 == 0 || $n % 3 == 0) return false;
    for ($i = 5; $i * $i <= $n; $i += 6) {
        if ($n % $i == 0 || $n % ($i + 2) == 0) return false;
    }
    return true;
}

$numbers = [29, 33];
foreach ($numbers as $num) {
    $status = isPrime($num) ? "Prime" : "Non-Prime";
    echo "<p>$num is <strong>$status</strong></p>";
}

echo "<h3>Prime numbers from 10 to 50:</h3>";
for ($i = 10; $i <= 50; $i++) {
    if (isPrime($i)) echo $i . " ";
}

echo "<hr>";



?>
