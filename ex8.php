<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Homework</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css"
    rel="stylesheet"
    />
</head>
<body>
    <?php
        $score1 = $score2 = $avgScore = $result = $type ="";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $score1 = $_POST["score1"];
            $score2 = $_POST["score2"];
            require_once "./models/KetQuaHocTapModel.php";
            $rs = new KetQuaHocTapModel($score1, $score2);
        }
    ?>
    <div class="container p-5 w-50">
        <label class="alert bg-info w-100 text-white text-center">KET QUA HOC TAP</label>
        <form action="ex8.php" method="post" class="alert alert-success">
            <div class="form-outline mt-2">
                <input type="text" name="score1" id="formControlDefault" value="<?php echo $score1 ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Diem HK1</label>
            </div>
            <div class="form-outline mt-2">
                <input type="text" name="score2" id="formControlDefault" value="<?php echo $score2 ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Diem HK2</label>
            </div>
            <input type="submit" class="btn btn-success mt-2"></input></br>
            <div class="form-outline mt-2">
                <input type="number" name="avgScore" id="formControlDefault" value="<?php echo $rs->GetAvgScore() ?>" class="form-control form-control-sm bg-white" readonly/>
                <label class="form-label" for="formControlSm">Diem trung binh</label>
            </div>
            <div class="form-outline mt-2">
                <input type="text" name="result" id="formControlDefault" value="<?php echo $rs->Result() ?>" class="form-control form-control-sm bg-white" readonly/>
                <label class="form-label" for="formControlSm">Ket qua</label>
            </div>
            <div class="form-outline mt-2">
                <input type="text" name="type" id="formControlDefault" value="<?php echo $rs->Type() ?>" class="form-control form-control-sm bg-white" readonly/>
                <label class="form-label" for="formControlSm">Xep loai</label>
            </div>
        </form>
    </div>

    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"
    ></script>

</body>
</html>