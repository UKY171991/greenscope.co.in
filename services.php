<?php
include 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GreenScope - Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="GreenScope" name="keywords">
    <meta content="GreenScope" name="description">

    <!-- Favicon -->
    <link href="<?=$bu?>img/favicon.ico" rel="icon">

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
            <h1 class="display-3 text-white mb-4 animated slideInDown">Our Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="<?= $bu ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Our Services</p>
                <h1 class="display-5 mb-5">Services We Offer</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="<?=$bu?>img/service-1.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="<?=$bu?>img/icon/service-icon.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Landscaping</h4>
                            <p class="mb-4">
                                <strong>Service offered to</strong>: Individuals, Farm Owners, Builders, Hospitality
                                Industries, Industries, Corporates, <i>Free Service for Hospitals, Charitable Trust,
                                    Religious Places</i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="<?=$bu?>img/service-2.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="<?=$bu?>img/icon/service-icon.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Magnitude</h4>
                            <p class="mb-4">
                                Terrace Gardens, Private Farms, Podium Gardens, Housing Colonies, Bungalows, Private
                                Lands, Orchard, Median Plantation, Avenue Plantation, Herbal Garden, Landscape
                                Development for Corporates & Institutes
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="<?=$bu?>img/service-3.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="<?=$bu?>img/icon/service-icon.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Garden Maintainance and Consultancy Contract</h4>
                            <p class="mb-4">
                                Briefing, Training, Assessments, Recap, Treatment, Manure & Fertilizer Applications,
                                Pruning & Mowing
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="<?=$bu?>img/service-4.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="<?=$bu?>img/icon/service-icon.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Orchard Development & Maintenance</h4>
                            <p class="mb-4">
                                Including fruit crops like Pomegranate, Dragon fruit, Guava, Chikoo, Mango, Dates,
                                Jamun, Cashew Nut & Coconut
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="<?=$bu?>img/service-5.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="<?=$bu?>img/icon/service-icon.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Green Belt Development</h4>
                            <p class="mb-4">
                                Developed & maintained Green Belt as per Government norms at various industries.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="<?=$bu?>img/service-6.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="<?=$bu?>img/icon/service-icon.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Installation & Maintenance of Micro-Irrigation</h4>
                            <p class="mb-4">
                                <strong>Parts of the Micro-Irrigation Systems</strong>: Foggers & Micro Sprinklers, Drip
                                Irrigation System, Sprinkler Irrigation System, Pop-Up System , Rain Gun System
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="<?=$bu?>img/service-6.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="<?=$bu?>img/icon/service-icon.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Water Bodies & Fountains</h4>
                            <p class="mb-4"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="<?=$bu?>img/service-6.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="<?=$bu?>img/icon/service-icon.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">&nbsp &nbsp Miyawaki Plantation&nbsp  &nbsp</h4>
                            <p class="mb-4"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="<?=$bu?>img/service-6.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="<?=$bu?>img/icon/service-icon.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">&nbsp &nbsp &nbsp Vertical Garden &nbsp  &nbsp &nbsp &nbsp</h4>
                            <p class="mb-4"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="<?=$bu?>img/service-6.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="<?=$bu?>img/icon/service-icon.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Organic Recycling of Horticultural Waste</h4>
                            <p class="mb-4">Compost, Vermi compost, Vermi wash</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="<?=$bu?>img/service-6.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="<?=$bu?>img/icon/service-icon.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Erection of Poly House & Green Net House</h4>
                            <p class="mb-4"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="<?=$bu?>img/service-6.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="<?=$bu?>img/icon/service-icon.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">&nbsp &nbsp &nbsp Butterfly Garden &nbsp &nbsp &nbsp</h4>
                            <p class="mb-4"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="<?=$bu?>img/service-6.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="<?=$bu?>img/icon/service-icon.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">&nbsp &nbsp &nbsp &nbsp &nbsp Pest Control &nbsp &nbsp &nbsp &nbsp &nbsp </h4>
                            <p class="mb-4"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->



    <!-- Footer -->
    <?php
include 'includes/footer.php';
?>
    <!-- Footer -->