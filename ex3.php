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
            $radiusInput = "";
            $areaInput = $perimeterInput = 0;
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $radiusInput = $_POST["radiusInput"];
                $areaInput = $radiusInput * $radiusInput * 3.14;
                $perimeterInput = $radiusInput * 2 * 3.14;
            }
            

        ?>
    <div class="container p-5 w-50">
        <label class="alert bg-info w-100 text-white text-center">DIEN TICH VA CHU VI HINH TRON</label>
        <form action="ex3.php" method="post" class="alert alert-success">
            <div class="form-outline mt-2">
                <input type="number" name="radiusInput" id="formControlDefault" value="<?php echo $radiusInput ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Radius Input</label>
            </div>
            <input type="submit" class="btn btn-success mt-2"></input></br>
            <div class="form-outline mt-2">
                <input type="number" name="perimeterInput" id="formControlDefault" value="<?php echo $perimeterInput ?>" class="form-control form-control-sm bg-white" readonly/>
                <label class="form-label" for="formControlSm">Perimeter</label>
            </div>
            <div class="form-outline mt-2">
                <input type="number" name="areaInput" id="formControlDefault" value="<?php echo $areaInput ?>" class="form-control form-control-sm bg-white" readonly/>
                <label class="form-label" for="formControlSm">Area</label>
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