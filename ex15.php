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
    <!--Text-Area-Mdb-->
    <link src="./css/styles.css" rel="stylesheet">
</head>

<body>
    <?php
    $arrayLength = "";
    $arrayNumber = array();
    $maxValue = $minValue = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $arrayLength = trim($_POST["arrayLength"]);
        if ($arrayLength != "") {
            handleRandomArrayNumber($arrayLength);
            handleCalcMaxMin();
        }
    }
    function handleRandomArrayNumber($arrayLength)
    {
        for ($i = 0; $i < $arrayLength; $i++) {
            array_push($GLOBALS["arrayNumber"], rand(0, 20));
        }
    }
    function handleShowArrayRandom()
    {
        foreach ($GLOBALS["arrayNumber"] as $number) {
            echo $number . " ";
        }
    }
    function handleCalcMaxMin()
    {
        $GLOBALS["maxValue"] = max($GLOBALS["arrayNumber"]);
        $GLOBALS["minValue"] = min($GLOBALS["arrayNumber"]);
    }
    function handleArrayTotal()
    {
        $max = 0;
        foreach ($GLOBALS["arrayNumber"] as $number) {
            $max += $number;
        }
        return $max;
    }
    ?>
    <div class="container p-5 w-50">
        <label class="alert bg-info w-100 text-white text-center">PHÁT SINH MẢNG VÀ TÍNH TOÁN</label>
        <form action="ex15.php" method="post" class="alert alert-success">
            <div class="form-outline">
                <input type="number" name="arrayLength" min="1" id="formControlDefault" value="<?php echo $arrayLength ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Nhập số phần tử</label>
            </div>
            <input type="submit" class="btn btn-success mt-1"></input> </br>
            <div class="form-outline mt-1">
                <input type="text" name="arrayNumber" id="formControlDefault" value="<?php handleShowArrayRandom() ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Array Random</label>
            </div>
            <div class="form-outline mt-1">
                <input type="number" name="maxValue" id="formControlDefault" value="<?php echo $maxValue ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Max</label>
            </div>
            <div class="form-outline mt-1">
                <input type="number" name="minValue" id="formControlDefault" value="<?php echo $minValue ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Min</label>
            </div>
            <div class="form-outline mt-1">
                <input type="number" name="arrayTotal" id="formControlDefault" value="<?php echo handleArrayTotal() ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Total</label>
            </div>
            <div class="md-form mt-1 text-left">
                <p class="w-100 text-center">(<span style="color:red">Ghi chú: </span>Các phần tử trong mảng sẽ só giá trị từ 0 tới 20)</p>
            </div>

        </form>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>

</body>

</html>