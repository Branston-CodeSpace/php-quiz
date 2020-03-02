<!doctype html>
<html lang="en">
  <head>
    <title>PHPquiz</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <h1>Time to test your general knowledge!</h1>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <?php
        $Quiz = array("In Thunderbirds, what was Lady Penelope's chauffeur called?" => array("Parker","Hoke","Argyle","Lloyd"),
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
        
        $QuizQuestions = array("In Thunderbirds, what was Lady Penelope's chauffeur called?",
                               "Who invented the television?",
                               "What is sushi traditionally wrapped in?",
                               "What color is Absynthe?",
                               "Where would you find the Sea of Tranquility?",
                               "What kind of weapon is a falchion?",
                               "What is the world's biggest island?",
                               "What is the world's longest river?",
                               "Who played Neo in the Matrix?",
                               "Who is the director of the Lord of the Rings trilogy?",
                               "Which country hosted a Formula 1 race for the first time?",
                               "Which chess piece can only move diagonally?",
                               "What is John Leach famous for making?",
                               "How many valves does a trumpet have?",
                               "When did the cold war end?",
                               "When did Margaret Thatcher become Prime Minister?",
                               "How tall would a double elephant folio book be?",
                               "In publishing, what does POD mean?",
                               "What is the largest fresh water lake in the world?",
                               "What is the diameter of the earth?");
        
        $answers = array( "ans1",
                          "ans3",
                          "ans3",
                          "ans1",
                          "ans1",
                          "ans2",
                          "ans2",
                          "ans1",
                          "ans4",
                          "ans2",
                          "ans4",
                          "");
                               $m = 0;
        $result = 0;
        // QUESTION DISPLAY STARTS HERE
        echo "<form action=\"index.php\" method=\"post\">";
        foreach($Quiz as $key => $answers){
          $n = 0;
          $m = $m + 1;
          //echo $m;
          echo "<div><div>" .  $key . "</div><br>";
          foreach($answers as $i){
            $n = $n + 1;
            echo <<<EOT
            <input type="radio" name="answers$m" value="ans$n">
            <label>$i</label></div><br>
EOT;
            
          }
      }
      echo "<input type=\"submit\" value=\"Submit Answers\">";

      
        
      ?>
      
  </body>
</html>