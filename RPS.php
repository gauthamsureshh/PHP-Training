<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
</head>
<body>
    <h2>Rock, Paper and Scissor</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
       <input type="radio" name="user_select" value="rock">
       <label>Rock</label> 
       <input type="radio" name="user_select" value="paper">
       <label>Paper</label>
       <input type="radio" name="user_select" value="scissor">
       <label>Scissor</label><br>
       <button type="submit">Play</button>
    </form>
</body>
</html>
<?php
    $choice_list = array('rock','paper','scissor');
    $choice = array_rand($choice_list);
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST['user_select'])){
            $user_choice = $_POST['user_select'];
            $computer_choice = $choice_list[$choice];
            echo "You played " . strtoupper($user_choice) . " and Computer played " . strtoupper($computer_choice) . "<br>";
            if($user_choice === $computer_choice){
                echo "Draw";
            }
            elseif ($user_choice == 'rock' && $computer_choice == 'scissor' || 
                    $user_choice == 'paper' && $computer_choice == 'rock' || 
                    $user_choice == 'scissor' && $computer_choice == 'paper') {
                        echo "You Win..!";
            }
            else{
                echo "Computer Win..!";
            }
            
        }       
        else{
            echo 'Please make a selection';
        }
    }
?>