<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <script src="basique.js" defer></script>
    <script src="bootstrap.js" defer></script>
    <title>Pagination progressive automatique</title>
</head>

<body>
    <div class="owl-carousel owl-theme">
        <div class="item">
            <img width="400px" src="image/assortiment-morceaux-gateau.webp" alt="" srcset="">
            <h4>1</h4>
        </div>
        <div class="item">
            <img width="400px" src="image/bol-sushi-au-saumon.webp" alt="" srcset="">
            <h4>2</h4>
        </div>
        <div class="item">
            <img width="400px" src="image/brochettes-poulet-roti.webp" alt="" srcset="">
            <h4>3</h4>
        </div>
        <div class="item">
            <img width="400px" src="image/crepe-delicieux.webp" alt="" srcset="">
            <h4>4</h4>
        </div>
        <div class="item">
            <img width="400px" src="image/crepes-chocolat.webp" alt="" srcset="">
            <h4>5</h4>
        </div>
        <div class="item">
            <img width="400px" src="image/crevettes-poissons-grilles.webp" alt="" srcset="">
            <h4>6</h4>
        </div>
        <div class="item">
            <img width="400px" src="image/dinde-au-four-diner.webp" alt="" srcset="">
            <h4>7</h4>
        </div>
        <div class="item">
            <img width="400px" src="image/gateau-tiramisu.jpg" alt="" srcset="">
            <h4>8</h4>
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