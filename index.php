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

<?php
// Snack 2:
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che
// non conosciamo nella documentazione) che:
// 1. name sia più lungo di 3 caratteri,
// 2. che mail contenga un punto e una chiocciola
// 3. e che age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”


$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

if( empty($name) || empty($mail) || empty($age) ) {
  echo 'Accesso Negato';
}
elseif (strlen($name) <= 3) {
  echo 'Accesso Negato';
}
elseif( !strpos($mail, '@') || !strpos($mail, '.') ) {
  echo 'Accesso Negato';
}
elseif (!is_numeric($age)) {
  echo 'Accesso Negato';
}
else {
  echo 'Accesso Riuscito';
}

?>
