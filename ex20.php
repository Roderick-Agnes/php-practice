<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Homework</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <!--Text-Area-Mdb-->
    <link src="./css/styles.css" rel="stylesheet">
</head>

<body>
    <?php
    session_start();


    $url = './api_folder/api_places.json';
    $data = file_get_contents($url);
    $places = json_decode($data, true);

    $_SESSION['list_place'] = $places;
    sort($_SESSION['list_place']);
    function handleGetDropdownItem()
    {
        foreach ($_SESSION['list_place'] as $place) {
            $id = $place['id'];
            echo "<li><a class='dropdown-item' href='#$id'>"  . $place['name'] . "</a></li>";
        }
    } //href='./view/place_detail/" . $place['id'] . "'
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
                <em class="fas fa-bars"></em>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
                <!-- Left links -->
                <ul class="navbar-nav">
                    <!-- Icon dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            Danh lam thắng cảnh
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php handleGetDropdownItem() ?>
                        </ul>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <div class='container list-places w-50'>
        <?php
        foreach ($_SESSION['list_place'] as $place) {
            echo "<div class='card p-2 m-2' id={$place['id']}>
            <img src='" . $place['image'] . "' class='card-img-top' width='50px' height='auto' alt='Fissure in Sandstone' />
            <div class='card-body'>
                <h5 class='card-title'>{$place['name']}</h5>
                <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href='#top' class='btn btn-primary'>Back to top</a>
            </div>
            </div></hr>";
        }

        ?>
    </div>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>

</body>

</html>