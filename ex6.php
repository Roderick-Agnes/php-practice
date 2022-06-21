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
    $aInput = $bInput = $maxNumber = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $aInput = $_POST["aInput"];
        $bInput = $_POST["bInput"];
        $maxNumber = max($aInput, $bInput);
    }


    ?>
    <div class="container p-5 w-50">
        <label class="alert bg-info w-100 text-white text-center">TÌM SỐ LỚN HƠN</label>
        <form action="ex6.php" method="post" class="alert alert-success">
            <div class="form-outline mt-2">
                <input type="number" name="aInput" id="formControlDefault" value="<?php echo $aInput ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">A</label>
            </div>
            <div class="form-outline mt-2">
                <input type="number" name="bInput" id="formControlDefault" value="<?php echo $bInput ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">B</label>
            </div>
            <input type="submit" class="btn btn-success mt-2"></input></br>
            <div class="form-outline mt-2">
                <input type="number" name="maxNumber" id="formControlDefault" value="<?php echo $maxNumber ?>" class="form-control form-control-sm bg-white" readonly />
                <label class="form-label" for="formControlSm">Max Number</label>
            </div>
        </form>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>

</body>

</html>