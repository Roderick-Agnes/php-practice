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
        session_start();
        $stateResult = "";
        $flower = $result = "";
        $tmp_flower_array = array();
        $_SESSION["flowers_Arrays"] = array();
        $flowers_Array = $_SESSION["flowers_Arrays"];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $arr_flowers_input = explode("--", $_POST["arr_flowers_input"]);
            //$arr_flowers_input = trim($arr_flowers_input);
            if(isset($_POST["flower"]) && isset($arr_flowers_input)) {
                $flower = trim($_POST["flower"]);
                echo "input1: " . $GLOBALS["flower"];
                array_push($GLOBALS["flowers_Array"], explode("--", $arr_flowers_input));
            }
            
        }
        function clearSpace() {
            
        }
        //clearSpace();

        function flowerExisted()
        {
            if(count($GLOBALS["flowers_Array"]) == 0) {
                return 0;
            }
            else {
                for($i = 0; $i < count($GLOBALS["flowers_Array"]); $i++){
                    if(strcasecmp($GLOBALS["flower"], $GLOBALS["flowers_Array"][$i]) == 0) {
                        return 1;
                    }
                }
                return 0;
            }
        }
        function addFlowerToCart(){
            
            if(count($GLOBALS["flowers_Array"]) == 0) {
                array_push($GLOBALS["flowers_Array"], $GLOBALS["flower"]);
                //$_SESSION["flowers_Arrays"] = $GLOBALS["flowers_Array"];
                echo "array lenght: " . count($flowers_Array);
            }
            else {
                for($j = 0; $j < count($GLOBALS["flowers_Array"]); $j++){
                    if(flowerExisted($GLOBALS["flower"]) == 0) {
                        //array_push($_SESSION["flowers_Arrays"], $GLOBALS["flower"]);
                        array_push($GLOBALS["flowers_Array"], $GLOBALS["flower"]);
                        echo "add: " . count($GLOBALS["flowers_Array"]);
                    }else {
                        $GLOBALS["stateResult"] = "<label class='alert alert-danger mt-2 p-2 w-100'> Flower already exist! </label>";
                    }
                }
            }
        }
        function showFlowerArray(){
            try {
                if(count($GLOBALS["flowers_Array"]) == 0) {
                    array_push($GLOBALS["flowers_Array"], $GLOBALS["flower"]);
                }else {
                    for($i = 0; $i < count($GLOBALS["flowers_Array"]); $i++){
                        $GLOBALS["result"] .= "-- " . $GLOBALS["flowers_Array"][$i] . " ";
                    }
                    echo $GLOBALS["result"];
                }
                
            }catch(Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
            
        }
        if(isset($flower)) {
            addFlowerToCart();
        }
        
    ?>
    <div class="container p-5">
        <label class="alert bg-info w-100 text-white text-center">Mua hoa</label>
        <form action="ex14.php" method="post" class="alert alert-success">
            <div class="form-outline">
                <input type="text" name="flower" id="formControlDefault" value="<?php echo $flower ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm"> Enter flower</label>
            </div>
            <input type="submit" class="btn btn-success mt-1"></input> </br>
            <?php echo $stateResult ?>
            <div class="md-form mt-1 text-left">
                <textarea name="arr_flowers_input" class="form-control" readonly>
                    <?php count($flowers_Array) != 0 ? showFlowerArray() : print "empty cart!" ?>
                </textarea>
            </div>
            
        </form>
    </div>

    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"
    ></script>

</body>
</html>