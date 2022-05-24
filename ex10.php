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
        $a; $b; $result; 

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = $_POST["a"];
            $b = $_POST["b"];
            if(isset($_POST["a"]) || isset($_POST["b"])) {
                if($a == 0) {
                    if($b == 0) {
                        $result = "Pt co vo so nghiem.";
                    } else {
                        $result = "Pt vo nghiem.";
                    }
                } else {
                    $result = "x = " . (-$b/$a);
                }
            }
        }
    ?>
    <div class="container p-5">
        <label class="alert bg-info w-100 text-white text-center">GIAI PHUONG TRINH BAC NHAT</label>
        <form action="ex10.php" method="post" class="alert alert-success">
            <div class="row">   
                <div class="form-outline mt-2 col-1">
                    <input type="number" name="a" id="formControlDefault" value="<?php echo $a ?>" class="form-control form-control-sm bg-white" placeholder="a..." required/>
                </div> 
                <div class="form-outline mt-2 col-1">
                    x +
                </div> 
                <div class="form-outline mt-2 col-1">
                    <input type="number" name="b" id="formControlDefault" value="<?php echo $b ?>" class="form-control form-control-sm bg-white" placeholder="b..." required/>
                </div>
                <div class="form-outline mt-2 col-1">
                    = 0
                </div> 
            </div>
            <input type="submit" class="btn btn-success mt-2"></input></br>
            <div class="form-outline mt-2">
                <input type="text" name="result" id="formControlDefault" value="<?php echo $result ?>" class="form-control form-control-sm bg-white" readonly/>
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