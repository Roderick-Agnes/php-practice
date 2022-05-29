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
            $arrNum = [];
            $total = 0;
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $arrNum = explode(",", trim($_POST["arrNum"]));
                foreach ($arrNum as $value) {
                    if(trim($value)){
                        $total += trim($value);
                    }
                }
            }
        ?>
    <div class="container p-5">
        <label class="alert bg-info w-100 text-white text-center">NHAP VA TINH DAY SO</label>
        <form action="ex11.php" method="post" class="alert alert-success">
            <div class="form-outline mt-2">
                <input type="text" name="arrNum" id="formControlDefault" value="<?php 
                                                                                    $i = 0;
                                                                                    foreach ($arrNum as $value) {
                                                                                        echo trim($value);
                                                                                        if($i!= count($arrNum)-1) {
                                                                                            echo ", ";
                                                                                        }
                                                                                        $i++;
                                                                                    }
                                                                                ?>" class="form-control form-control-sm bg-white" required/>
                <label class="form-label" for="formControlSm">Nhap day so</label>
            </div>
            <input type="submit" class="btn btn-success mt-2"></input></br>
            <div class="form-outline mt-2">
                <input type="number" name="total" id="formControlDefault" value="<?php echo $total ?>" class="form-control form-control-sm bg-white" readonly/>
                <label class="form-label" for="formControlSm">Total</label>
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