<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- style -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="../css/font.css">
    <script type="text/javascript" src="../js/chart.js"></script>
    <title>Statistique des Accidents</title>
</head>

<body>
<?php

require __DIR__ . '/accident.php';


// $user = [
//     'id' => '',
//     'nb_victime' => '',
//     'lieu' => '',
//     'date' => '',
//     'mise_en_cause' => ''
// ];

// $errors = [
//     'nb_victime' => '',
//     'lieu' => '',
//     'date' => '',
//     'mise_en_cause' => ''
// ];

$isValid = true;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $user = array_merge($user, $_POST);
    // $isValid = validateUser($user, $errors);
    if ($isValid)
    {
         storeFormData($_POST);
         header("Location: index.php");
    }
}

?>

<?php include '_form.php' ?>
