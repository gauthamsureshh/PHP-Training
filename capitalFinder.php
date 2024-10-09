<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country & Capital</title>
</head>
<body>
    <h1>Know Capital</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <label>Enter Country
            <input type="text" name="country">
        </label>
        <button type="submit">Know</button>
    </form>
</body>
</html>
<?php
    $capitals = array(
        'India' => 'New Delhi',
        'Russia' => 'Moscow',
        'UK' => 'London',
        'Germany' => 'Berlin',
        'Italy' => 'Rome',
        'France' => 'Paris',
        'Spain' => 'Madrid'
    );

    $country = ucfirst($_POST['country']);
    echo "Capital of {$country} is $capitals[$country]";
?>