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
    <!--Text-Area-Mdb-->
    <style>
        .pink-textarea textarea.md-textarea:focus:not([readonly]) {
            border-bottom: 1px solid #f48fb1;
            box-shadow: 0 1px 0 0 #f48fb1;
        }
        .active-pink-textarea.md-form label.active {
            color: #f48fb1;
        }
        .active-pink-textarea.md-form textarea.md-textarea:focus:not([readonly])+label {
            color: #f48fb1;
        }
        
        
        .amber-textarea textarea.md-textarea:focus:not([readonly]) {
            border-bottom: 1px solid #ffa000;
            box-shadow: 0 1px 0 0 #ffa000;
        }
        .active-amber-textarea.md-form label.active {
            color: #ffa000;
        }
        .active-amber-textarea.md-form textarea.md-textarea:focus:not([readonly])+label {
            color: #ffa000;
        }
        
        
        .active-pink-textarea-2 textarea.md-textarea {
            border-bottom: 1px solid #f48fb1;
            box-shadow: 0 1px 0 0 #f48fb1;
        }
        .active-pink-textarea-2.md-form label.active {
            color: #f48fb1;
        }
        .active-pink-textarea-2.md-form label {
            color: #f48fb1;
        }
        .active-pink-textarea-2.md-form textarea.md-textarea:focus:not([readonly])+label {
            color: #f48fb1;
        }
        
        
        .active-amber-textarea-2 textarea.md-textarea {
            border-bottom: 1px solid #ffa000;
            box-shadow: 0 1px 0 0 #ffa000;
        }
        .active-amber-textarea-2.md-form label.active {
            color: #ffa000;
        }
        .active-amber-textarea-2.md-form label {
            color: #ffa000;
        }
        .active-amber-textarea-2.md-form textarea.md-textarea:focus:not([readonly])+label {
            color: #ffa000;
        }
    </style>
</head>
<body>
    <?php
        $arrayNumber = array();
        $number = $result = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tmpArray = explode(",", trim($_POST["arrayNumberInput"]));
            $number = trim($_POST["number"]);
            for($i = 0; $i < count($tmpArray); $i++) {
                if(trim($tmpArray[$i])!=""){
                    array_push($arrayNumber, trim($tmpArray[$i]));
                }
            }
            findIndexOfNumber($arrayNumber, $number);
        }
        function handleShowArray($array) {
            for($i = 0; $i < count($array); $i++) {
                echo trim($array[$i]);
                if($i != count($array) - 1) {
                    echo ", ";
                }
            }
        }
        function findIndexOfNumber($arrayNumber, $number) {
            if(array_search($number, $arrayNumber)) {
                $GLOBALS["result"] = "Tìm thấy " . $number . " tại vị trí thứ " . array_search($number, $arrayNumber) . " của mảng";
            }else {
                $GLOBALS["result"] = "Không tìm thấy " . $number . " trong mảng";
            }
        }
    ?>
    <div class="container p-5">
        <label class="alert bg-info w-100 text-white text-center">Tìm kiếm</label>
        <form action="ex16.php" method="post" class="alert alert-success">
            <div class="form-outline mt-1">
                <input type="text" name="arrayNumberInput" id="formControlDefault" value="<?php handleShowArray($arrayNumber) ?>" class="form-control form-control-sm bg-white" required/>
                <label class="form-label" for="formControlSm">Nhập mảng</label>
            </div>
            <div class="form-outline mt-2">
                <input type="number" name="number" id="formControlDefault" value="<?php echo $number ?>" class="form-control form-control-sm bg-white" required/>
                <label class="form-label" for="formControlSm">Nhập số cần tìm</label>
            </div>
            
            <input type="submit" class="btn btn-success mt-1"></input> </br>
            
            <div class="form-outline mt-1">
                <input type="text" name="" id="formControlDefault" value="<?php handleShowArray($arrayNumber) ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Array</label>
            </div>

            <div class="form-outline mt-1">
                <input type="text" name="result" id="formControlDefault" value="<?php echo $result ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm"> Kết quả tìm kiếm </label>
            </div>
            <div class="md-form mt-1 text-left">
                <p class="w-100 text-center">(Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</p>
            </div>
            
        </form>
    </div>

    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"
    ></script>

</body>
</html>