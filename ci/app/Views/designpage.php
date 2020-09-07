<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title><?= $designs[0]['design'] ?></title>
</head>
<script src="js/jquery.js"></script>
<script src="js/html2canvas.js"></script>

<body>
    <?= $designs[0]['source_code'] ?>

    <button id="download">Preview DP</button>
    <script src="js/main.js"></script>
</body>

</html>