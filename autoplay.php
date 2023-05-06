<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="autoplay.js" defer></script>
    <script src="bootstrap.js" defer></script>
    <title>Pagination autoplay</title>
</head>

<body>
    <div class="owl-carousel">

        <div> <img width="400px" src="image/assortiment-morceaux-gateau.webp" alt="" srcset="">
        </div>
        <div> <img width="400px" src="image/bol-sushi-au-saumon.webp" alt="" srcset="">
        </div>
        <div> <img width="400px" src="image/brochettes-poulet-roti.webp" alt="" srcset="">
        </div>
        <div> <img width="400px" src="image/crepe-delicieux.webp" alt="" srcset="">
        </div>
        <div> <img width="400px" src="image/crepes-chocolat.webp" alt="" srcset="">
        </div>

    </div>


    <!-- <script src="jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="js/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel();
        });
    </script>
</body>

</html>