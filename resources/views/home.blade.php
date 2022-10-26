<!doctype html>
<html lang="en" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Adviceme</title>
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
        <link href="/assets/css/fonts.css" rel="stylesheet">
        <link href="/assets/css/app.css" rel="stylesheet">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body>
        <nav class="fixed-top navbar-cs">
            <div class="row border-bottom pb-2">
                <div class="col-md-2 col-5">
                    <a class="navbar-brand" href="/">
                        <img src="/assets/images/logo.svg" alt="" class="navbar-logo">
                    </a>
                </div>
                <div class="col d-flex justify-content-center hide-mobile">
                    <div class="dropdown hide-mobile">
                        <button class="btn btn-drop" type="button" id="categoriaOpc" data-bs-toggle="dropdown" aria-expanded="false">
                            Categoría: <span class="opc">Todas</span> <i class="fa-solid fa-angle-down icon-drop"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="categoriaOpc">
                            <li><a class="dropdown-item" href="#">Cat 1</a></li>
                            <li><a class="dropdown-item" href="#">Cat 2</a></li>
                            <li><a class="dropdown-item" href="#">Cat 3</a></li>
                        </ul>
                    </div>
                    <div class="dropdown hide-mobile">
                        <button class="btn btn-drop" type="button" id="profesionOpc" data-bs-toggle="dropdown" aria-expanded="false">
                            Profesión: <span class="opc">Todas</span> <i class="fa-solid fa-angle-down icon-drop"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="profesionOpc">
                            <li><a class="dropdown-item" href="#">Prof 1</a></li>
                            <li><a class="dropdown-item" href="#">Prof 2</a></li>
                            <li><a class="dropdown-item" href="#">Prof 3</a></li>
                        </ul>
                    </div>
                    <div class="dropdown hide-mobile">
                        <button class="btn btn-drop" type="button" id="especialidadOpc" data-bs-toggle="dropdown" aria-expanded="false">
                            Especialidad: <span class="opc">Todas</span> <i class="fa-solid fa-angle-down icon-drop"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="especialidadOpc">
                            <li><a class="dropdown-item" href="#">Especialidad 1</a></li>
                            <li><a class="dropdown-item" href="#">Especialidad 2</a></li>
                            <li><a class="dropdown-item" href="#">Especialidad 3</a></li>
                        </ul>
                    </div>
                    <a class="search hide-mobile" href="#">
                        <img src="/assets/images/search.png" alt="" class="search-btn align-middle">
                    </a>
                </div>
                <div class="col-md-2 col-5 d-inline-flex justify-content-end">
                    <a class="icon-nav mr search" href="#">
                        <img src="/assets/images/ic_search.svg" alt="" class="navbar-search">
                    </a>
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
                            <li class="show-xs"><a class="dropdown-item" href="#">Search</a></li>
                            <li class="show-xs"><a class="dropdown-item" href="#">Videocalls</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-3" id="sliderItem">
                <div class="d-flex col slider">
                    <a href="javascript:;" class="slider-item" onclick="openVideo('/assets/images/advisor-demo.mp4')">
                        <div class="slider-img">
                            <img class="consultant-img mx-auto d-block" src="/assets/images/avatar-1.jpg" />
                        </div>
                        <div class="slider-name">
                            <span>Raul Lopez</span>
                        </div>
                    </a>
                    <a href="javascript:;" class="slider-item" onclick="openVideo('/assets/images/advisor-demo.mp4')">
                        <div class="slider-img">
                            <img class="consultant-img active mx-auto d-block" src="/assets/images/avatar-2.jpg" />
                        </div>
                        <div class="slider-name">
                            <span>Raul Lopez</span>
                        </div>
                    </a>
                    <a href="javascript:;" class="slider-item" onclick="openVideo('/assets/images/advisor-demo.mp4')">
                        <div class="slider-img">
                            <img class="consultant-img active mx-auto d-block" src="/assets/images/avatar-2.jpg" />
                        </div>
                        <div class="slider-name">
                            <span>Raul Lopez</span>
                        </div>
                    </a>
                    <a href="javascript:;" class="slider-item" onclick="openVideo('/assets/images/advisor-demo.mp4')">
                        <div class="slider-img">
                            <img class="consultant-img mx-auto d-block" src="/assets/images/avatar-1.jpg" />
                        </div>
                        <div class="slider-name">
                            <span>Raul Lopez</span>
                        </div>
                    </a>
                    <a href="javascript:;" class="slider-item" onclick="openVideo('/assets/images/advisor-demo.mp4')">
                        <div class="slider-img">
                            <img class="consultant-img mx-auto d-block" src="/assets/images/avatar-2.jpg" />
                        </div>
                        <div class="slider-name">
                            <span>Raul Lopez</span>
                        </div>
                    </a>
                </div>
                <!-- <div class="col-2 justify-content-end filters hide-mobile">
                    <a class="btn btn-filt" href="#" data-bs-toggle="modal" data-bs-target="#filtersModal">
                        <img src="/assets/images/filter-dark.svg" class="filter-top">
                        Filtros
                    </a>
                </div> -->
            </div>
        </nav>
        <main class="main-cs">
            <div class="row grid" x-data>
                <template x-for="grid in 20" >
                    <div class="col-xl-15 col-lg-3 col-md-4 col-sm-6 col-12 grid-el" x-id="['slider-cs']">
                        <div :id="$id('slider-cs')" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" :data-bs-target="'#' + $id('slider-cs')" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" :data-bs-target="'#' + $id('slider-cs')" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" :data-bs-target="'#' + $id('slider-cs')" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/assets/images/slider1.jpeg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption slide-caption">
                                        <i class="fa fa-circle dot"></i><span class="caption-text">NEXT DATE: MAY 26</span>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="/assets/images/slider2.jpeg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption slide-caption">
                                        <i class="fa fa-circle dot"></i><span class="caption-text">NEXT DATE: MAY 26</span>
                                    </div>  
                                </div>
                                <div class="carousel-item">
                                    <img src="/assets/images/slider3.jpeg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption slide-caption">
                                        <i class="fa fa-circle dot"></i><span class="caption-text">NEXT DATE: MAY 26</span>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev hide-mobile" type="button" :data-bs-target="'#' + $id('slider-cs')" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next hide-mobile" type="button" :data-bs-target="'#' + $id('slider-cs')" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="info">
                            <div class="col-12">
                                <div class="d-flex">
                                    <a href="javascript:;" class="" onclick="openVideo('/assets/images/advisor-demo.mp4')">
                                        <img class="consultant-img active card" src="/assets/images/avatar-2.jpg" />
                                    </a>
                                    <div class="mg-l mb-1 info-advisor" onclick="location.href='/perfil'">
                                        <span class="name d-block">
                                            Test1 Lopez 
                                            <img src="/assets/images/verfied.svg" alt="" class="verified">
                                        </span>
                                        <span class="category d-block">
                                            <span class="title">Architecture: </span> 
                                            <span>3D Projects</span>
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit.Lorem ipsum dolor sit amet consectetur, adipisicing elit. <a href="/perfil" class="lnk-primary">More...</a> </p>
                            </div>
                            <div class="col-12 text-center">     
                                <a href="#" class="btn btn-grid price">
                                    <i class="fa fa-video-camera"></i>&nbsp; 90 USD PER MIN
                                </a>
                                <!-- <a href="javascript:;" class="btn btn-grid video">
                                    <i class="fa fa-play"></i> Ver video
                                </a> -->
                            </div>
                            <div class="col-12">     
                                <span class="footer-text">
                                    <i class="fa fa-star icon-footer"></i>&nbsp;av. mark: 10
                                </span>
                                <span class="footer-text reviews">
                                    <i class="fa fa-video-camera icon-footer"></i>&nbsp;900 reviews
                                </span>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </main>
        <div class="footer fixed-bottom hide-mobile">
            <a href="#">© 2022 Adviceme</a>
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
        <div class="filter-mobile" id="btnFilter">
            <a class="btn btn-filt-mobile" href="javascript:;" onclick="openFilters()">
                FILTRAR                         
                <img src="/assets/images/filter-blue.svg" class="filter-mob">
            </a>
        </div>
        <div class="tabs-mobile active fixed-bottom" id="tabsFilter">
            <div class="filter-tab col-2">
                <a href="javascript:;" class="tab active">
                    <div class="tab-img">
                        <img class="filter-img mx-auto d-block tab-health">
                    </div>
                    <div class="tab-name">
                        <span>Health</span>
                    </div>
                </a>
            </div>
            <div class="filter-tab col-2">
                <a href="javascript:;" class="tab">
                    <div class="tab-img">
                        <img class="filter-img mx-auto d-block tab-education">
                    </div>
                    <div class="tab-name">
                        <span>Education</span>
                    </div>
                </a>
            </div>
            <div class="filter-tab col-2">
                <a href="javascript:;" class="tab">
                    <div class="tab-img">
                        <img class="filter-img mx-auto d-block tab-trends">
                    </div>
                    <div class="tab-name">
                        <span>Trends</span>
                    </div>
                </a>
            </div>
            <div class="filter-tab col-2">
                <a href="javascript:;" class="tab">
                    <div class="tab-img">
                        <img class="filter-img mx-auto d-block tab-business">
                    </div>
                    <div class="tab-name">
                        <span>Business</span>
                    </div>
                </a>
            </div>
            <div class="filter-tab col-2">
                <a href="javascript:;" class="tab">
                    <div class="tab-img">
                        <img class="filter-img mx-auto d-block tab-enter">
                    </div>
                    <div class="tab-name">
                        <span>Entertainment</span>
                    </div>
                </a>
            </div>
            <div class="filter-tab col-2">
                <a href="javascript:;" class="tab">
                    <div class="tab-img">
                        <img class="filter-img mx-auto d-block tab-sports">
                    </div>
                    <div class="tab-name">
                        <span>Sports</span>
                    </div>
                </a>
            </div>
            <div class="filter-tab col-2">
                <a href="javascript:;" class="tab">
                    <div class="tab-img">
                        <img class="filter-img mx-auto d-block tab-hobbies">
                    </div>
                    <div class="tab-name">
                        <span>Hobbies</span>
                    </div>
                </a>
            </div>
            <div class="filter-tab col-2">
                <a href="javascript:;" class="tab">
                    <div class="tab-img">
                        <img class="filter-img mx-auto d-block tab-animals">
                    </div>
                    <div class="tab-name">
                        <span>Animals</span>
                    </div>
                </a>
            </div>
            <div class="filter-tab col-2">
                <a href="javascript:;" class="tab">
                    <div class="tab-img">
                        <img class="filter-img mx-auto d-block tab-plants">
                    </div>
                    <div class="tab-name">
                        <span>Plants</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="modal fade" id="filtersModal" tabindex="-1" aria-labelledby="labelTxt" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered align-bottom-mobile">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="labelTxt">SELECCIONA PROFESIÓN:</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modalBody">
                        <a class="modal-opc d-block" href="javascript:;" onclick="modalSelection()">Profesión 1</a>
                        <a class="modal-opc d-block" href="javascript:;" onclick="modalSelection()">Profesión 2</a>
                        <a class="modal-opc d-block" href="javascript:;" onclick="modalSelection()">Profesión 3</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="videoModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <video class="short-video" id="shortVideo" onended="closeVideo()"></video>
                </div>
            </div>
        </div>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/js/app.js"></script>
    </body>
</html>
