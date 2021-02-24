<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
  
  $res = $_GET['resident'];
  $units = $_GET['units'];
  $studentfee = 20;
  $parking = $_GET['parking'];
  $cscard = $_GET['cscard'];
  $enrollment= $res * $units;
  $scholar = rand(20, 50);
  $total = $enrollment + $studentfee + $parking + $cscard;
  $totaldue= $total - $scholar;
  echo "<p>Cost of Tuition: " . $units . " units x $" . $res . " = $" .$enrollment. "</p>"; 
  echo "<p>Student Heath Fee: $" .$studentfee . "</p>";
  echo "<p>College Services Card: $" .$cscard . "</p>";
  echo "<p>Parking Permit: $" .$parking . "</p>";
  echo "<p>Total Registration Costs: $" .$total . "</p>";
  echo "<p>Total College Balance: $" .$totaldue . "</p>";

  
    ?> 
  </body>
</html>