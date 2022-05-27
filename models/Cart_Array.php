<?php
    $flower = "";
    $flowers_Array = array("hoa 1", "hoa 2");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $flower = $_POST["flower"];
        $arr_flowers_input = $_POST["arr_flowers_input"];
    }
    function flowerExitted($flower,$flowers_Array)
    {
        $result = 0;
        count($flowers_Array);
        for($i = 0; $i < count($flowers_Array); $i++){
            if(strcasecmp($flower, $flowers_Array[$i]) == 0) {
                $result = 1;
            }
        }
        return $result;
    }

?>