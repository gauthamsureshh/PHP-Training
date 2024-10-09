<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Ticket</title>
</head>
<body>
    <h2>Book Your Tickets</h2>
    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        <label>Name</label>
        <input type="text" name="name"><br><br>
        <label>Email</label>
        <input type="email" name="email"><br><br>
        <label>No of Tickets</label>
        <input type="number" name="no_of_tickets"><br><br>
        <input type="radio" name="age_category" value="senior">
        <label>Senior Citizen</label>
        <input type="radio" name="age_category" value="adult">
        <label>Adult</label>
        <input type="radio" name="age_category" value="child">
        <label>Child</label><br><br>
        <button type="submit" name="submit">Get Price</button>
    </form>   
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $ticket_count = $_POST['no_of_tickets'];
        $age_category = null;

        if(empty($user) && empty($email)){
            echo "<br> Both Name and Email Id needed..! <br>";
        }
        elseif(empty($ticket_count)){
            echo "<br> Enter no of tickets you wish to buy..!<br>";
        }
        elseif(isset($_POST['age_category'])){
            $age_category = $_POST['age_category'];
        }

        switch($age_category){
            case "senior":
                $price = $ticket_count * 10;
                echo "Your Ticket Price is \${$price}";
                break;
            case "adult":
                $price = $ticket_count * 20;
                echo "Your Ticket Price is \${$price}";
                break;
            case "child":
                $price = $ticket_count * 15;
                echo "Your Ticket Price is \${$price}";
                break;
            default:
                echo "Please select Age Category";
        }
        

    }
?>