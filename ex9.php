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
        $toan = $ly = $hoa = $diemChuan = $result = $scoreTotal = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $toan = $_POST["toan"];
            $ly = $_POST["ly"];
            $hoa = $_POST["hoa"];
            $diemChuan = $_POST["diemChuan"];
            require_once "./models/KetQuaThiDaiHocModel.php";
            $rs = new KetQuaThiDaiHocModel($toan, $ly, $hoa, $diemChuan);
        }
    ?>
    <div class="container p-5 w-50">
        <label class="alert bg-info w-100 text-white text-center">KET QUA THI DAI HOC</label>
        <form action="ex9.php" method="post" class="alert alert-success">
            <div class="form-outline mt-2">
                <input type="number" name="toan" id="formControlDefault" value="<?php echo $toan ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Toan</label>
            </div>
            <div class="form-outline mt-2">
                <input type="number" name="ly" id="formControlDefault" value="<?php echo $ly ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Ly</label>
            </div>
            <div class="form-outline mt-2">
                <input type="number" name="hoa" id="formControlDefault" value="<?php echo $hoa ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Hoa</label>
            </div>
            <div class="form-outline mt-2">
                <input type="number" name="diemChuan" id="formControlDefault" value="<?php echo $diemChuan ?>" class="form-control form-control-sm bg-white color-red" />
                <label class="form-label" for="formControlSm">Diem Chuan</label>
            </div>

            <input type="submit" class="btn btn-success mt-2"></input></br>
            <div class="form-outline mt-2">
                <input type="number" name="scoreTotal" id="formControlDefault" value="<?php echo $rs->GetScoreTotal() ?>" class="form-control form-control-sm bg-white" readonly/>
                <label class="form-label" for="formControlSm">Tong diem</label>
            </div>
            <div class="form-outline mt-2">
                <input type="text" name="result" id="formControlDefault" value="<?php echo $rs->Result() ?>" class="form-control form-control-sm bg-white" readonly/>
                <label class="form-label" for="formControlSm">Ket qua</label>
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