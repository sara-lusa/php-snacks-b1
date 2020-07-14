<?php
// Snack 1:
// Creiamo un array 'matches' contenente altri array i quali rappresentano delle
// partite di basket di un’ipotetica tappa del calendario. Ogni array della partita
// avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa
// e punti fatti dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo schema:
// Olimpia Milano - Cantù | 55-60

$array_matches = [
  [
    "home_team" => 'Leoni',
    "other_team" => 'Gazzelle',
    "home_points" => '35',
    "other_points" => '40',
  ],
  [
    "home_team" => 'Cani',
    "other_team" => 'Gatti',
    "home_points" => '70',
    "other_points" => '55',
  ],
  [
    "home_team" => 'Ciao',
    "other_team" => 'Vespa',
    "home_points" => '60',
    "other_points" => '62',
  ],
];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snacks</title>
  </head>
  <body>

    <h1>Matches</h1>
    <ul>
      <?php for ($i=0; $i < count($array_matches); $i++) { ?>
        <?php $single_match = $array_matches[$i]; ?>

        <li><?php echo $single_match['home_team'] . ' - ' . $single_match['other_team'] . ' | ' . $single_match['home_points'] . '-' . $single_match['other_points']?></li>
      <?php } ?>
    </ul>

  </body>
</html>
