<?php  
    
    
    if(isset($_POST['question1'])) 
        $question1 =  $_POST['question1'];
    else
        $question1 = 0;
      
    if(isset($_POST['question2'])) 
        $question2 =  $_POST['question2'];
    else
        $question2 = 0;
    
    if(isset($_POST['question3'])) 
        $question3 =  $_POST['question3'];
     else
        $question3 = 0;
        
    if(isset($_POST['question4'])) 
        $question4 =  $_POST['question4'];
    else
        $question4 = 0;
        
        file_get_contents('https://api.thingspeak.com/update?api_key=PSVU1D4HNZY343L1&field1='.$question1);
        file_get_contents('https://api.thingspeak.com/update?api_key=AOGC7PYMAWZXE6QH&field1='.$question2);
        file_get_contents('https://api.thingspeak.com/update?api_key=M63EFZJTKN7ISX2S&field1='.$question3);
        file_get_contents('https://api.thingspeak.com/update?api_key=LI02A120W4ORD3HO&field1='.$question4);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="main.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1 class="headline">Danke für ihre Bewertung</h1>

    <p>Ihre Antworten wurden an den Server gesendet</p>
    
    
    <?php
    echo "<p>Antwort1 =".$question1;
    echo "<br>Antwort2 =".$question2;
    echo "<br>Antwort3 =".$question3;
    echo "<br>Antwort4 =".$question4;
    ?>

    <br>
    <a href="home.html">Zurück zur Startseite</a>
    

</body>
</html>