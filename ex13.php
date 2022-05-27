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
            
            $calendar_year = $lunar_year = "";
            $mang_can = array("Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm");
            $mang_chi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn","Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");
            $array_image_year = array("https://c.tenor.com/yw_WlSzbed4AAAAC/pig-angry.gif",
                                    "https://i.pinimg.com/originals/fb/0f/70/fb0f70b434a15a3ba020caf131d0e1c3.jpg", 
                                    "https://2.bp.blogspot.com/-l3gMb_iz7tM/XNQrzV7fZNI/AAAAAAAmGJ8/q1mLXVN1TqsHK0YwsK2u7RnYT2546Ub-ACLcBGAs/s1600/AW3858418_15.gif", 
                                    "https://vector6.com/wp-content/uploads/2021/11/00873-con-ho-cop-nam-nham-dan-thiet-ke-nam-moi-2022-file-psd.jpg", 
                                    "https://tivago.vn/public/upload/images/me-ami-4.gif",
                                    "data:image/jpeg;base64,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", 
                                    "http://socnhi3.vcmedia.vn/users/1021064/11.jpg", 
                                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIKwnlkCAuzR7d3sVi4ZI4uW5y8PM54fQufg&usqp=CAU", 
                                    "https://i.pinimg.com/originals/49/82/39/498239ae1923ec365834a995da0b2461.jpg", 
                                    "https://i.pinimg.com/originals/3e/1c/06/3e1c067441fea0edc780ded589961941.gif", 
                                    "https://i.pinimg.com/originals/4b/04/46/4b04463573210325d8ec064faf51a950.gif", 
                                    "https://i.pinimg.com/originals/a1/b2/0a/a1b20a74805a120935a780893170aed3.gif");
            
            
            
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $calendar_year = $_POST["calendar_year"];
                $tmp_year = $calendar_year;
                if($tmp_year < 3) {
                    $image_year = "https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled.png";
                    $lunar_year = "Year not found!";
                }
                else {
                    $tmp_year = $tmp_year - 3;
                    $can = $tmp_year % 10;
                    $chi = $tmp_year % 12;
                    $lunar_year = $mang_can[$can];
                    $lunar_year = $lunar_year . " " .$mang_chi[$chi];
                    $image_year = $array_image_year[$chi];
                }
            }
            

        ?>
    <div class="container p-5">
        <label class="alert bg-info w-100 text-white text-center">Tinh nam am lich</label>
        <form action="ex13.php" method="post" class="alert alert-success">
            <div class="form-outline">
                <input type="number" min="0" name="calendar_year" id="formControlDefault" value="<?php echo $calendar_year ?>" class="form-control form-control-sm bg-white" />
                <label class="form-label" for="formControlSm">Nam duong lich</label>
            </div>
            <input type="submit" class="btn btn-success mt-1"></input>
            <div class="form-outline mt-1">
                <input type="text" name="lunar_year" id="formControlDefault" value="<?php echo $lunar_year ?>" class="form-control form-control-sm bg-white" readonly />
                <label class="form-label" for="formControlSm">Nam am lich</label>
            </div>
            </br>
            <a class="ripple  d-flex justify-content-center" href="">
                <img
                    alt="example"
                    class="img-fluid rounded"
                    accept="image/*"
                    width="50%"
                    height="auto"
                    src="<?php echo $image_year?>"
                />
            </a>
        </form>
    </div>

    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"
    ></script>

</body>
</html>