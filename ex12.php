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
            $year = $showResult = "";
            $result = array();
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $year = $_POST["year"];
            }
            function is_nam_nhuan($year) {
                if($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)) {
                    return true;
                }else {
                    return false;
                }
            }
            $in = 0;
            foreach (range(2000, $year) as $y)
            {
                if(is_nam_nhuan($y)){
                    $result[] = $y;
                }
            }
            if(count($result) != 0) {
                $showResult = "<label class='alert alert-danger mt-2 p-2 w-100'>" ;
                for($i = 0; $i < count($result); $i++){
                    $showResult .= $result[$i]. " ";
                }
                $showResult .=  " la nam nhuan." . "</label>";
            }


        ?>
    <div class="container p-5">
        <label class="alert bg-info w-100 text-white text-center">Tim nam nhuan</label>
        <form action="ex12.php" method="post" class="alert alert-success">
            <div class="form-outline">
                <input type="text" name="year" id="formControlDefault" value="<?php echo $year ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Nam</label>
            </div>
            <input type="submit" class="btn btn-success mt-1"></input></br>
            <?php echo $showResult ?>
        </form>
    </div>

    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"
    ></script>

</body>
</html>