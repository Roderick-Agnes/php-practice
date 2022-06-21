<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Homework</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <?php
    $say = "Good morning.!#Good afternoon.!#Good evening.";
    $arrSay = explode("!#", $say);
    $hourInput = $result = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hourInput = $_POST["hourInput"];
        if ($hourInput >= 0 && $hourInput < 13) {
            $result = "<label class='alert alert-danger mt-2 p-2 w-100'>" . $arrSay[0] . "</label>";
        } else if ($hourInput >= 13 && $hourInput <= 18) {
            $result = "<label class='alert alert-danger mt-2 p-2 w-100'>" . $arrSay[1] . "</label>";
        } else if ($hourInput > 18 && $hourInput < 24) {
            $result = "<label class='alert alert-danger mt-2 p-2 w-100'>" . $arrSay[2] . "</label>";
        } else {
            $result = "<label class='alert alert-danger mt-2 p-2 w-100'> Hour not correct! </label>";
        }
    }
    ?>
    <div class="container p-5 w-50">
        <label class="alert bg-info w-100 text-white text-center">CHÀO THEO GIỜ</label>
        <form action="ex7.php" method="post" class="alert alert-success">
            <div class="form-outline">
                <input type="text" name="hourInput" id="formControlDefault" value="<?php echo $hourInput ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Hour</label>
            </div>
            <input type="submit" class="btn btn-success mt-1"></input></br>
            <?php echo $result ?>
        </form>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>

</body>

</html>