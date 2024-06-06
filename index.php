<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="calculator">
        <h2>PHP Calculator</h2>
        <form action="" method="post">
            <input type="text" name="num1" placeholder="Enter number 1" required>
            <input type="text" name="num2" placeholder="Enter number 2" required>
            <select name="operation" required>
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
                <option value="power">Exponentiation</option>
                <option value="percentage">Percentage</option>
                <option value="sqrt">Square Root</option>
                <option value="log">Logarithm</option>
            </select>
            <button type="submit" name="submit">Calculate</button>
        </form>
    </div>
    <?php
    if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = '';

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = 'Cannot divide by zero';
            }
            break;
        case 'power':
            $result = pow($num1, $num2);
            break;
        case 'percentage':
            $result = ($num1 / 100) * $num2;
            break;
        case 'sqrt':
            $result = sqrt($num1);
            break;
        case 'log':
            $result = log($num1, $num2);
            break;
        default:
            $result = 'Invalid operation';
            break;
    }

    echo "Result: $result";
    }
    ?>
    

</body>

</html>