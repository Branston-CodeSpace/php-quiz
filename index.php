<?php
    $Quiz = array(  "In Thunderbirds, what was Lady Penelope's chauffeur called?" => array("Parker","Hoke","Argyle","Lloyd"),
                    'Who invented the television?' => array("Eli Whitney","Garret Morgan","George Carey","Alan Turing"),
                    'What is sushi traditionally wrapped in?' => array("Edible paper","Fried fish skin","Edible Seaweed","Nothing"),
                    'What color is Absynthe?' => array("Green","Red","Blue","Yellow"),
                    'Where would you find the Sea of Tranquility?' => array("The Moon","Earth","Mars","Pluto"),
                    'What kind of weapon is a falchion?' => array("Gun","Sword","Flail","Spear"),
                    "What is the world's biggest island?" => array("Iceland","Greenland","Madagascar","Australia"),
                    "What is the world's longest river?" => array("Nile river","Orange river","Amazon river","Yellow river"),
                    'Who played Neo in the Matrix?' => array("Robert Downey Jr.","Laurnece Fishburne","Joe Pantoliano","Keanu Reeves"),
                    'Who is the director of the Lord of the Rings trilogy?' => array("Peter Jackson","George Lucas","James Cameron","Tim Burton"),
                    'Which country hosted a Formula 1 race for the first time?' => array("Italy","India","Spain","China"),
                    'Which chess piece can only move diagonally?' => array("King","Queen","Pawn","Bishop"),
                    'What is John Leach famous for making?' => array("Pottery","Music","Paintings","Websites"),
                    'How many valves does a trumpet have?' => array("One","Two","Three","Four"),
                    'When did the cold war end?' => array("1989","1976","1998","1988"),
                    'When did Margaret Thatcher become Prime Minister?' => array("1997","1971","1979","1985"),
                    'How tall would a double elephant folio book be?' => array("5 inches","10 inches","20 inches","50 inches"),
                    'In publishing, what does POD mean?' => array("Paper on Desk","Print on Demand","Print on Directive","Paper over Desk"),
                    'What is the largest fresh water lake in the world?' => array("Lake Michigan","Lake Victoria","Lake Superior","Great Slave Lake"),
                    'What is the diameter of the earth?' => array("13000km","10000km","15000km","20000km"),
     );
    
    $quizAnswers = array(   "ans1",
                            "ans3",
                            "ans3",
                            "ans1",
                            "ans1",
                            "ans2",
                            "ans2",
                            "ans1",
                            "ans4",
                            "ans1",
                            "ans2",
                            "ans4",
                            "ans1",
                            "ans3",
                            "ans1",
                            "ans3",
                            "ans4",
                            "ans2",
                            "ans3",
                            "ans1",
    );

    $m = 0;

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Quiz</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <div>
      <h1 class="heading">Time to test your general knowledge!</h1>
    </div>
    <!-- Links -->
    <link href="https://fonts.googleapis.com/css?family=Oxanium|Press+Start+2P|Saira+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>

  <body>
    <!--Looping the questions and answers-->
    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="post">
        <?php foreach($Quiz as $key => $answers):
        echo '<div class="answers">';
        echo '<div class="questions">';
        $n = 0;
        $m = $m + 1;
        echo $key ?>
      </div><br>
      <?php foreach($answers as $a):
      $n = $n + 1;?>
      <input type="radio" name="answers<?php echo $m; ?>" value="ans<?php echo $n; ?>">
      <label><?php echo $a; ?></label><br>
      <?php endforeach;?>
    </div>
    <?php  endforeach;?>
    <input type="submit" value="Submit">
    
    <?php
    //Total calculation
    $i = 0;
    $total = 0;
    if($_POST){
      foreach ($quizAnswers as $a){
        $i = $i + 1;
        if($a == $_POST["answers$i"]){
        $total = $total + 1;
        }
      
      }
    }
    //Message displayer
    if($_POST){    
      if($total < 10){
        echo "<br><br>Oh no! You only got $total/20, try again for a better score!";
      }elseif($total < 15){
        echo "<br><br>You got a pretty average score of $total/20, maybe try again for a better score!";
      }elseif($total < 20){
        echo "<br><br>You did really well with a score of $total/20, congratulations!";
      }elseif($total == 20){
        echo "<br><br>Congratulations! You got all of the answers correct!";
      }
    }
    ?>
  </body>
</html>