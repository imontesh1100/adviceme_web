<!doctype html>
<html lang="en" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Perfil</title>
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
        <link href="/assets/css/fonts.css" rel="stylesheet">
        <link href="/assets/css/perfil.css" rel="stylesheet">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body>
        <nav class="fixed-top navbar-cs border-bottom">
            <div class="row pb-2">
                <div class="col-2">
                    <a class="navbar-brand" href="/">
                        <img src="/assets/images/logo.svg" alt="" class="navbar-logo">
                    </a>
                </div>
                <div class="col-10 d-inline-flex justify-content-end ">
                    <a class="icon-nav mr videocall" href="#">
                        <img src="/assets/images/videocalls.svg" alt="" class="navbar-video">
                    </a>
                    <div class="dropdown menu">
                        <a class="icon-nav" href="#" id="menuDrop" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/assets/images/menu.svg" alt="" class="navbar-menu">
                        </a>
                        <ul class="dropdown-menu mt-3" aria-labelledby="menuDrop">
                            <li><a class="dropdown-item" href="#">Menu 1</a></li>
                            <li><a class="dropdown-item" href="#">Menu 2</a></li>
                            <li><a class="dropdown-item" href="#">Menu 3</a></li>
                            <li class="show-xs"><a class="dropdown-item" href="#">Messages</a></li>
                            <li class="show-xs"><a class="dropdown-item" href="#">Videocalls</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <section class="info">
            <div class="row d-flex">
                <div class="col-cs slider">
                    <!-- <img class="info-img" src="/assets/images/perfil.jpeg"> -->
                    <div class="carousel slide" data-bs-ride="carousel" id="slider-cs-1">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-slide-to="0" class="" aria-label="Slide 1" data-bs-target="#slider-cs-1"></button>
                            <button type="button" data-bs-slide-to="1" aria-label="Slide 2" data-bs-target="#slider-cs-1" class=""></button>
                            <button type="button" data-bs-slide-to="2" aria-label="Slide 3" data-bs-target="#slider-cs-1" class="active" aria-current="true"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img src="/assets/images/slider1.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/images/slider2.jpeg" class="d-block w-100" alt="...">  
                            </div>
                            <div class="carousel-item active">
                                <img src="/assets/images/slider3.jpeg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev hide-mobile" type="button" data-bs-slide="prev" data-bs-target="#slider-cs-1">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next hide-mobile" type="button" data-bs-slide="next" data-bs-target="#slider-cs-1">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>  
                </div>
                <div class="col-cs information">
                    <div class="d-flex">
                        <div class="profile-image mr-cs">
                            <img class="consultant-img" src="/assets/images/avatar-1.jpg" />
                        </div>
                        <div class="avg-mark text-center mr-cs">
                            <span class="d-block title">9.0</span>
                            <span class="d-block subtitle">Average mark</span>
                        </div>
                        <div class="ranking text-center mr-cs">
                            <span class="d-block title">4 of 4</span>
                            <span class="d-block subtitle">Ranking</span>
                        </div>
                        <div class="share">
                            <a href="#" class="share-lnk">
                                <i class="fa-solid fa-arrow-up-right-from-square share-icon"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="adv-info">
                            <span class="d-block name">Dr. Sánchez Lugo <img src="/assets/images/verfied.svg" alt="" class="verified"></span>
                            <span class="d-block details">Salud: --------- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cédula profesional: ***********</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus eum vitae quos neque possimus ipsum vero quaerat minus quas earum rerum porro hic fuga laborum quisquam voluptatibus, obcaecati aspernatur sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos aliquid molestias quidem obcaecati voluptatem assumenda magnam quas rem autem animi veritatis numquam ab enim nam, ipsa beatae deleniti dicta illum! <a href="#" class="lnk">Más...</a></p>
                    </div>
                    <div class="row mt-3 text-center booking-desk">
                        <a class="btn btn-book d-block" href="#">
                            BOOK NOW
                        </a>
                        <span class="d-block next-date"><i class="fa fa-circle dot"></i> &nbsp; NEXT DATE: MAY 26</span>
                    </div>
                </div>
            </div>
            <div class="row expertise">
                <h5 class="title">Expertise</h5>
                <div class="expertise-list d-flex mt-2">
                    <span class="tag">Opción 1</span>
                    <span class="tag">Opción 2</span>
                    <span class="tag">Opción 3</span>
                    <span class="tag">Opción 4</span>
                </div>
            </div>
            <div class="row mt-3 experience">
                <h5 class="title">Experiencia</h5>
                <div class="experience-list d-flex mt-2">
                    <div class="xp">
                        <span class="title-xp">Director</span>
                        <span class="opc-xp">Period: 2008-3002</span>
                        <span class="opc-xp">Duration: 2 years</span>
                        <span class="opc-xp">Location: Brazil</span>
                        <span class="opc-xp">In:Nike Mexico</span>
                    </div>
                    <div class="xp">
                        <span class="title-xp">Director</span>
                        <span class="opc-xp">Period: 2008-3002</span>
                        <span class="opc-xp">Duration: 2 years</span>
                        <span class="opc-xp">Location: Brazil</span>
                        <span class="opc-xp">In:Nike Mexico</span>
                    </div>
                    <div class="xp">
                        <span class="title-xp">Director</span>
                        <span class="opc-xp">Period: 2008-3002</span>
                        <span class="opc-xp">Duration: 2 years</span>
                        <span class="opc-xp">Location: Brazil</span>
                        <span class="opc-xp">In:Nike Mexico</span>
                    </div>
                    <div class="xp">
                        <span class="title-xp">Director</span>
                        <span class="opc-xp">Period: 2008-3002</span>
                        <span class="opc-xp">Duration: 2 years</span>
                        <span class="opc-xp">Location: Brazil</span>
                        <span class="opc-xp">In:Nike Mexico</span>
                    </div>
                    <div class="xp">
                        <span class="title-xp">Director</span>
                        <span class="opc-xp">Period: 2008-3002</span>
                        <span class="opc-xp">Duration: 2 years</span>
                        <span class="opc-xp">Location: Brazil</span>
                        <span class="opc-xp">In:Nike Mexico</span>
                    </div>
                    <div class="xp">
                        <span class="title-xp">Director</span>
                        <span class="opc-xp">Period: 2008-3002</span>
                        <span class="opc-xp">Duration: 2 years</span>
                        <span class="opc-xp">Location: Brazil</span>
                        <span class="opc-xp">In:Nike Mexico</span>
                    </div>
                    <div class="xp">
                        <span class="title-xp">Director</span>
                        <span class="opc-xp">Period: 2008-3002</span>
                        <span class="opc-xp">Duration: 2 years</span>
                        <span class="opc-xp">Location: Brazil</span>
                        <span class="opc-xp">In:Nike Mexico</span>
                    </div>
                    <div class="xp">
                        <span class="title-xp">Director</span>
                        <span class="opc-xp">Period: 2008-3002</span>
                        <span class="opc-xp">Duration: 2 years</span>
                        <span class="opc-xp">Location: Brazil</span>
                        <span class="opc-xp">In:Nike Mexico</span>
                    </div>
                </div>
            </div>
            <div class="row mt-3 lang">
                <h5 class="title">Idiomas</h5>
                <div class="lang-list d-flex mt-2">
                    <span class="tag">Opción 1</span>
                    <span class="tag">Opción 2</span>
                </div>
            </div>
            <div class="row mt-3 social">
                <h5 class="title">Redes Sociales</h5>
                <div class="social-list d-flex mt-2">
                    <a href="#" class="tag social">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#" class="tag social">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="tag social">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="#" class="tag social">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                    <a href="#" class="tag social">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </section>
        <section class="reviews mt-4">
            <div class="row reviews-list">
                <div class="options">
                    <span class="title">Reseñas</span>
                    <a class="see-all" href="#">Ver todas</a>
                </div>
                <div class="review">
                    <div class="image-user d-flex">
                        <img class="user-img" src="/assets/images/avatar-2.jpg" />
                        <div class="review-head">
                            <span class="d-block name">Raul Medina </span>
                            <span class="d-block details">Calificación: **</span>
                        </div>
                    </div>
                    <div class="review-info">
                        <div class="review-tags d-flex">
                            <span class="review-tag">Opción 1</span>
                            <span class="review-tag">Opción 2</span>
                            <span class="review-tag">Opción 3</span>
                            <span class="review-tag">Opción 4</span>
                        </div>
                        <div class="review-description mt-2 d-flex">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure consequatur voluptas recusandae ad, dolor nobis magni quibusdam optio, libero, atque sunt! Iusto expedita necessitatibus facilis vel ea velit repellat sequi?</p>
                        </div>
                    </div>
                </div>
                <div class="review">
                    <div class="image-user d-flex">
                        <img class="user-img" src="/assets/images/avatar-2.jpg" />
                        <div class="review-head">
                            <span class="d-block name">Raul Medina </span>
                            <span class="d-block details">Calificación: **</span>
                        </div>
                    </div>
                    <div class="review-info">
                        <div class="review-tags d-flex">
                            <span class="review-tag">Opción 1</span>
                            <span class="review-tag">Opción 2</span>
                            <span class="review-tag">Opción 3</span>
                            <span class="review-tag">Opción 4</span>
                        </div>
                        <div class="review-description mt-2 d-flex">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure consequatur voluptas recusandae ad, dolor nobis magni quibusdam optio, libero, atque sunt! Iusto expedita necessitatibus facilis vel ea velit repellat sequi?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="footer fixed-bottom hide-mobile">
            <a href="#">© 2022 Adviceme</a>
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
        <section class="booking-mobile text-center">
            <a class="btn btn-book d-block" href="#">
                BOOK NOW
            </a>
            <span class="d-block next-date"><i class="fa fa-circle dot"></i> &nbsp; NEXT DATE: MAY 26</span>
        </section>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/js/perfil.js"></script>
    </body>
</html>
