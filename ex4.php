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
            $fullName = $oldNumber = $currentNumber = "";
            $price = 2000;
            $priceTotal = 0;
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $fullName = $_POST["fullName"];
                $oldNumber = $_POST["oldNumber"];
                $currentNumber = $_POST["currentNumber"];
                $price = $_POST["price"];
                $priceTotal = ($currentNumber - $oldNumber) * $price;
            }
        ?>
    <div class="container p-5 w-50">
        <label class="alert bg-info w-100 text-white text-center">THANH TOAN TIEN DIEN</label>
        <form action="ex4.php" method="post" class="alert alert-success">
            <div class="form-outline mt-2">
                <input type="text" name="fullName" id="formControlDefault" value="<?php echo $fullName ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Fullname</label>
            </div>
            <div class="form-outline mt-2">
                <input type="number" name="oldNumber" id="formControlDefault" value="<?php echo $oldNumber ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Old number</label>
            </div>
            <div class="form-outline mt-2">
                <input type="number" name="currentNumber" id="formControlDefault" value="<?php echo $currentNumber ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Current number</label>
            </div>
            <div class="form-outline mt-2">
                <input type="number" name="price" id="formControlDefault" value="<?php echo $price ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Price</label>
            </div>
            <input type="submit" class="btn btn-success mt-2"></input></br>
            <div class="form-outline mt-2">
                <input type="number" name="priceTotal" id="formControlDefault" value="<?php echo $priceTotal ?>" class="form-control form-control-sm bg-white" readonly/>
                <label class="form-label" for="formControlSm">Price Total</label>
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