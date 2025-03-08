<?php
include 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gallery | GreenScope</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="GreenScope" name="keywords">
    <meta content="Explore our GreenScope gallery showcasing stunning landscape designs, terrace gardens, butterfly gardens, and more. See our successful projects." name="description">

    <!-- Favicon -->
    <link href="<?=$bu?>img/favicon.ico" rel="icon">

    <link rel="canonical" href="https://greenscope.co.in/gallery.php" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SKN96GGCKT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SKN96GGCKT');
</script>

</head>

<body>
    <!-- Navigation -->
    <?php
include 'includes/navigation.php';
?>
    <!-- Navigation -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Gallery</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="<?=$bu?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Gallery</p>
                <h2 class="display-5 mb-5">Our Wonderful Projects</h2>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.3s">
                <!-- <div class="col-12 text-center">
                    <ul class="list-inline rounded mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">Complete Projects</li>
                        <li class="mx-2" data-filter=".second">Ongoing Projects</li>
                    </ul>
                </div> -->
            </div>
            <div class="row g-4 portfolio-container">
                <?php
$name = [
    1 => "Aerial View of <br>Industrial Landscaping",
    2 => "Aerial View of <br>Industrial Landscaping",
    3 => "Bloom",
    4 => "Butterfly Garden",
    5 => "Cricket Ground",
    6 => "Fountain Design",
    7 => "Fountain Design",
    8 => "Helipad",
    9 => "Hostel Garden",
    10 => "Industrial Green Belt",
    11 => "Industrial Green Belt",
    12 => "Industrial Green Belt",
    13 => "Industrial Landscaping",
    14 => "Industrial Landscaping",
    15 => "Industrial Landscaping",
    16 => "Industrial Landscaping",
    17 => "Industrial Landscaping",
    18 => "Irrigation System",
    19 => "Nursery",
    20 => "Pathway",
    21 => "Pergola Plantation",
    22 => "Sculpture",
    23 => "Shopping Complex Garden",
    24 => "Shopping Complex Garden",
    25 => "Temple Garden",
    26 => "Temple Garden",
    27 => "Temple Garden",
    28 => "Temple Garden",
    29 => "Water Body",
    30 => "Water Body",
    31 => "Waterfall",
    32 => "Median Plantation",
    33 => "Miyawaki Plantation"
];
for ($i = 1; $i <= 34; $i++) {
    ?>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="<?=$bu?>img/galleryimage/<?= $i ?>.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4"><?= @$name[$i] ?></h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2"
                                    href="<?=$bu?>img/galleryimage/<?= $i ?>.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                                <!-- <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php
}
?>
            </div>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Footer -->
    <?php
include 'includes/footer.php';
?>
    <!-- Footer -->