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
            $fullname = $result = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $fullname = $_POST["fullname"];
              $fullname != "" ? $result = "<label class='alert alert-danger mt-2 p-2 w-100'>Hello, " . $fullname . "</label>" : $result = "";
            }      
        ?>
    <div class="container p-5 w-50">
        <label class="alert bg-info w-100 text-white text-center">IN LOI CHAO</label>
        <form action="ex1.php" method="post" class="alert alert-success">
            <div class="form-outline">
                <input type="text" name="fullname" id="formControlDefault" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Fullname</label>
            </div>
            <input type="submit" class="btn btn-success mt-1"></input></br>
            <?php echo $result ?>
        </form>
    </div>

    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"
    ></script>

</body>
</html>