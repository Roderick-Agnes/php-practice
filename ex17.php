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
        $oldArray = $newArray = array();
        $oldNumber = $newNumber = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tmpArray = explode(",", trim($_POST["arrayNumberInput"]));
            $oldNumber = trim($_POST["oldNumber"]);
            $newNumber = trim($_POST["newNumber"]);
            for($i = 0; $i < count($tmpArray); $i++) {
                if(trim($tmpArray[$i])!=""){
                    array_push($oldArray, trim($tmpArray[$i]));
                    array_push($newArray, trim($tmpArray[$i]));
                }
            } 
        }
        function handleShowOldArray($array){
            for($i = 0; $i < count($array); $i++) {
                echo trim($array[$i]);
                if($i != count($array) - 1) {
                    echo ", ";
                }
            }
        }
        function replaceNumber($oldNumber, $newNumber, $newArray){
            $check = false;
            for($i = 0; $i < count($newArray); $i++) {
                if($newArray[$i] == $oldNumber) {
                    $newArray[$i] = $newNumber;
                    $check = true;
                }
            }
            if($check){
                return $newArray;
            }else {
                return "Giá trị cần thay thế không tồn tại trong mảng!";
            }
        }
        function handleShowNewArray($array){
            $newArray = replaceNumber($GLOBALS["oldNumber"], $GLOBALS["newNumber"], $array);
            if(is_string($newArray)){
                echo $newArray;
            }else {
                for($i = 0; $i < count($newArray); $i++) {
                    echo trim($newArray[$i]);
                    if($i != count($newArray) - 1) {
                        echo ", ";
                    }
                }
            }
        }
    ?>
    <div class="container p-5">
        <label class="alert bg-info w-100 text-white text-center">Thay thế</label>
        <form action="ex17.php" method="post" class="alert alert-success">
            <div class="form-outline mt-1">
                <input type="text" name="arrayNumberInput" id="formControlDefault" value="<?php handleShowOldArray($oldArray) ?>" class="form-control form-control-sm bg-white" required/>
                <label class="form-label" for="formControlSm">Nhập mảng</label>
            </div>
            <div class="form-outline mt-2">
                <input type="number" name="oldNumber" id="formControlDefault" value="<?php echo $oldNumber ?>" class="form-control form-control-sm bg-white" required/>
                <label class="form-label" for="formControlSm">Giá trị cần thay thế</label>
            </div>
            <div class="form-outline mt-2">
                <input type="number" name="newNumber" id="formControlDefault" value="<?php echo $newNumber ?>" class="form-control form-control-sm bg-white" required/>
                <label class="form-label" for="formControlSm">Giá trị thay thế</label>
            </div>
            
            <input type="submit" class="btn btn-success mt-1"></input> </br>
            
            <div class="form-outline mt-1">
                <input type="text" name="" id="formControlDefault" value="<?php handleShowOldArray($oldArray) ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Mảng cũ</label>
            </div>

            <div class="form-outline mt-1">
                <input type="text" name="" id="formControlDefault" value="<?php handleShowNewArray($newArray) ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Mảng mới</label>
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