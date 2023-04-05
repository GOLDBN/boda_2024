<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boda 2024</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>

    <!--css custom-->
    <link rel="stylesheet" href="{{ asset('assets/css/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/generales.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ow-custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/modal_form.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsividad.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/carrusel.css') }}">

    <link rel="stylesheet" type="text/css" media="screen and (max-device-width: 768px)" href="portrait.css" />


    <!--load all Font Awesome styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  </head>

  <body>

    <!--        _____________________-->
    <!--        navbar-->
    <!--        _____________________-->

  <style>
    @font-face{
        font-family: "Montserrat-Medium";
        src: url("./assets/fonts/Montserrat/Montserrat-Medium.ttf");
    }
      .form-switch .form-check-input{
          border:1.6px solid #63686E;
          background-color: #E4E4E4;
          background-image: url(data:image/svg+xml,%3csvg xmlns='https://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e);
      }

    .navbar-nav .nav-link.active, .navbar-nav .show>.nav-link{
        color: #000000;
        font-weight: bold;
    }

    .nav-link:focus, .nav-link:hover{
        color: #000000 !important;
    }

    .dropdown-menu{
        background-color: #E4E4E4;
        border: 1px solid transparent;
        border-radius: 0px;
        color: #000000;
    }

    .dropdown-item:hover{
        background-color: #E4E4E4;
        color: #000000;
    }

    input[type="submit"],
      button{
          -webkit-appearance: none!important;
          -webkit-border-radius: 0!important;
      }

      button{
    -webkit-appearance: none!important;
    -webkit-border-radius: 0!important;
}

  </style>

    <!--        _____________________-->
    <!--        NAVBAR-->
    <!--        _____________________-->

    <nav class="navbar fixed-top navbar-expand-lg bg-primario navbar-box">
        <div class="container-fluid ">
            <div class="collapse navbar-collapse navbar_mb mt-3 ml-5 mr-5" id="navbarSupportedContent">
              <ul class="navbar-nav nav-fill w-100 d-flex align-items-end">
                <li class="nav-item">
                  <a class="nav-link tittle_menu "  href="#nav-about">Lugar</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link tittle_menu" href="#nav-gallery">Galeria</a>
                </li>

                <li class="nav-item hiden_responsive_sm ">
                    <h5 class="nav-link tittle_menu" href="#nav-gallery" style="font-size: 20px">Itzel & Nacho</h5>
                </li>

                <li class="nav-item">
                  <a class="nav-link tittle_menu" href="#nav-services">Información</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link tittle_menu" href="#nav-press">Confirmacion</a>
                </li>
              </ul>
            </div>
        </div>
    </nav>

    <!--        _____________________-->
    <!--        Video-->
    <!--        _____________________-->

    <section class="video" >
      <video class="video_style" id="myVideo" src="https://dgeventplanning.com/inicio/assets/img/DG_sinmarco2.mp4" autoplay playsinline  muted  loop ></video>
        <p class="text-center">
<!--            <a class="text-play" type="button" onclick="playVid()">PLAY |</a>-->
            <a class="pause estilo_ios"  id="mydiv" type="button" onclick="pauseplayVid()" style="font-family: 'Montserrat-Light';letter-spacing: 3px; font-size: 9px; text-shadow: 1.3px 1.3px 1.3px rgb(0 0 0 / 5%); color: #000000; text-decoration: none;">PAUSE </a>
            <a class="text-play">|</a>
            <a class="mute estilo_ios" type="button" onclick="enableMute()" style="font-family: 'Montserrat-Light';letter-spacing: 3px; font-size: 9px; text-shadow: 1.3px 1.3px 1.3px rgb(0 0 0 / 5%); color: #000000; text-decoration: none;">AUDIO</a> <br>
            <a class="arrow_down estilo_ios" type="button" href="#nav-about" style="text-decoration: none;">
               <img id="aks" src="assets/img/arrow_ligth.webp" style="width:45px;margin-top: 10px"/>
            </a>
        </p>
    </section>

    <section id="nav-about" style="position: relative;top: -130px;background: #ccc;"></section>

     <!-- _____________________-->
    <!--        About us-->
    <!--        _____________________-->

    <section class="py-3 text-center container-fluid mb-2" id="about_uss">
      <div class="row ">
        <div class="col-11 mx-auto ">
          <h1 class="tittle_newyork">Itzel & Nacho</h1>

          <p class="lead text-paraf mt-4 hiden_responsive_sm">

            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type
            specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in
            the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
            and more recently with desktop publishing software like Aldus PageMaker
            including versions of Lorem Ipsum.
          </p>
        </div>

      </div>
    </section>

    <!--        _____________________-->
    <!--        Gallery-->
    <!--        _____________________-->

   <section id="nav-gallery" style="position: relative;top: -90px;background: #ccc;"></section>

   <section class="testimonials text-center container-fluid bg-secundario mt-5" id="testimonials_mb">
      <div class="row">
        <div class="col-12 ">

          <h1 class="tittle_newyork p-3">LUGAR</h1>

            <div class="carousel-wrap p-3 card_sinsaltar carrusel_normal" >
                <div class="owl-carousel owl-theme" id="customers-testimonials">

                  <div class="item">
                    <div class="shadow-effect">
                        <img class="img-gallery" src="{{asset('gallery/1.jpg')}}" />
                    </div>
                  </div>

                    <div class="item">
                      <div class="shadow-effect">
                          <img class="img-gallery" src="{{asset('gallery/2.jpg')}}" />
                      </div>
                    </div>

                    <div class="item">
                      <div class="shadow-effect">
                          <img class="img-gallery" src="{{asset('gallery/3.jpg')}}" />
                      </div>
                    </div>

                    <div class="item">
                        <div class="shadow-effect">
                            <img class="img-gallery" src="{{asset('gallery/4.jpg')}}" />
                        </div>
                    </div>

                    <div class="item">
                        <div class="shadow-effect">
                            <img class="img-gallery" src="{{asset('gallery/5.jpg')}}" />
                        </div>
                    </div>


                </div>
              </div>

        </div>

          <div class="col-12 carrusel_3d">

                            <div class="gallery-controls position-relative" style="z-index: 1000;">
                                <button class="gallery-controls-anterior  btn-invisible-atras position-absolute" id="gallery-controls-anterior">
                                    <img id="arrow_l" src='./assets/img/arrow_left_ligth.png' style='width:25px;margin-right: 80%;'>
                                </button>

                                <button class="gallery-controls-siguiente  btn-invisible-adelante position-absolute" id="gallery-controls-siguiente">
                                    <img id='arrow_r' src='./assets/img/arrow_rigth_ligth.png' style='width:25px;margin-left: 80%;'>
                                </button>
                            </div>

                            <div class="row">
                                <div class="col-12">

                                   <div class="gallery">
                                    <div class="gallery-container">

                                      <img class="gallery-item gallery-item-1" src="{{asset('gallery/1.jpg')}}" data-index="1">

                                      <img class="gallery-item gallery-item-2" src="{{asset('gallery/2.jpg')}}" data-index="2">

                                      <img class="gallery-item gallery-item-3" src="{{asset('gallery/3.jpg')}}" data-index="3">

                                      <img class="gallery-item gallery-item-4" src="{{asset('gallery/4.jpg')}}" data-index="4">

                                      <img class="gallery-item gallery-item-1" src="{{asset('gallery/5.jpg')}}" data-index="5">

                                    </div>
                                   </div>
                                    <div class="gallery-controls"></div>
                                </div>
                            </div>
          </div>
      </div>
    </section>



    <!--        _____________________-->
    <!--        Services-->
    <!--        _____________________-->

    <section id="nav-services" style="position: relative;top: -100px;background: #ccc;"></section>

    <section class="py-5 text-center container" id="">
      <div class="row py-lg-5">
        <div class="col-12 mx-auto ">
          <h1 class="tittle_newyork serv_mb mb-5">GALERIA</h1>

             <div class="content_services_pc hiden_responsive_sm">

                 <div class="d-flex justify-content-between " style="padding: 0px 10px 30px 10px">

                     <div class="content">
                              <div class="content-overlay"></div>
                              <img class="content-image" src="{{asset('gallery/1.jpg')}}">
                              <div class="content-details fadeIn-bottom">
                                  <h3 class="content-title">CASA</h3>
                              </div>
                     </div>

                     <div class="content">
                              <div class="content-overlay"></div>
                              <img class="content-image" src="{{asset('gallery/2.jpg')}}">
                              <div class="content-details fadeIn-bottom">
                                  <h3 class="content-title">CEREMONIA</h3>
                              </div>
                     </div>

                     <div class="content">
                              <div class="content-overlay"></div>
                              <img class="content-image" src="{{asset('gallery/3.jpg')}}">
                              <div class="content-details fadeIn-bottom">
                                  <h3 class="content-title">fIESTA</h3>
                              </div>
                     </div>

                     <div class="content">
                              <div class="content-overlay"></div>
                              <img class="content-image" src="{{asset('gallery/4.jpg')}}">
                              <div class="content-details fadeIn-bottom">
                                  <h3 class="content-title">COMIDA</h3>
                              </div>
                     </div>
                 </div>

               <div class="d-flex justify-content-evenly">
                  <div class="content">
                      <div class="content-overlay"></div>
                      <img class="content-image" src="{{asset('gallery/5.jpg')}}">
                      <div class="content-details2 fadeIn-bottom">
                          <h3 class="content-title">ESTACIONAMIENTO</h3>
                      </div>
                  </div>

                  <div class="content">
                      <div class="content-overlay"></div>
                      <img class="content-image" src="{{asset('gallery/2.jpg')}}">
                      <div class="content-details2 fadeIn-bottom">
                          <h3 class="content-title">NIÑOS</h3>
                      </div>
                  </div>

                  <div class="content">
                      <div class="content-overlay"></div>
                      <img class="content-image" src="{{asset('gallery/4.jpg')}}">
                      <div class="content-details2 fadeIn-bottom">
                          <h3 class="content-title">LOCACION</h3>
                      </div>
                  </div>
               </div>

             </div>

            <div class="content_services_mb hiden_responsive_pc">
            <div class="row">

                <div class="col-6 p-1">
                    <div class="d-flex justify-content-center">
                      <div class="content_mb">
                          <div class="content-overlay_mb"></div>
                          <img class="content-image_mb" src="{{asset('gallery/1.jpg')}}">
                          <div class="content-details_mb fadeIn-bottom">
                              <h3 class="content-title3_ligth">CASA</h3>
                          </div>
                      </div>
                    </div>
                </div>

                <div class="col-6 p-1">
                    <div class="d-flex justify-content-center">
                      <div class="content_mb">
                          <div class="content-overlay_mb"></div>
                          <img class="content-image_mb" src="{{asset('gallery/2.jpg')}}">
                          <div class="content-details_mb fadeIn-bottom">
                              <h3 class="content-title3_ligth">CEREMONIA</h3>
                          </div>
                      </div>
                    </div>
                </div>

                <div class="col-6 p-1">
                    <div class="d-flex justify-content-center">
                      <div class="content_mb">
                          <div class="content-overlay_mb"></div>
                          <img class="content-image_mb" src="{{asset('gallery/3.jpg')}}">
                          <div class="content-details_mb fadeIn-bottom">
                              <h3 class="content-title_ligth">FIESTA</h3>
                          </div>
                      </div>
                    </div>
                </div>

                <div class="col-6 p-1">
                    <div class="d-flex justify-content-center">
                      <div class="content_mb">
                          <div class="content-overlay_mb"></div>
                          <img class="content-image_mb" src="{{asset('gallery/4.jpg')}}">
                          <div class="content-details_mb fadeIn-bottom">
                              <h3 class="content-title2_ligth" style="font-size: 9px">COMIDA</h3>
                          </div>
                      </div>
                    </div>
                </div>

                <div class="col-6 p-1">
                    <div class="d-flex justify-content-center">
                      <div class="content_mb">
                          <div class="content-overlay_mb"></div>
                              <img class="content-image_mb" src="{{asset('gallery/5.jpg')}}">
                              <div class="content-details_mb fadeIn-bottom">
                                  <h3 class="content-title2_ligth" style="font-size: 9px">ESTACIONAMIENTO</h3>
                              </div>
                          </div>
                    </div>
                </div>

                <div class="col-6 p-1">
                    <div class="d-flex justify-content-center">
                      <div class="content_mb">
                          <div class="content-overlay_mb"></div>
                          <img class="content-image_mb" src="{{asset('gallery/1.jpg')}}">
                          <div class="content-details_mb fadeIn-bottom">
                              <h3 class="content-title2_ligth" style="font-size: 9px">NIÑOS</h3>
                          </div>
                      </div>
                    </div>
                </div>

            </div>
         </div>

        </div>
      </div>
    </section>

    <!--        _____________________-->
    <!--        celebrating-->
    <!--        _____________________-->

<section id="nav-weddings" style="position: relative;top: -50px;background: #ccc;"></section>

 <section class=" py-5 text-center container-fluid" >
      <div class="row py-lg-5">
        <div class="col-12">
          <h1 class="tittle_newyork_life">"LIFE IS WORTH</h1>
          <h1 class="tittle_thin_life ">CELEBRATING"</h1>
          <hr class="mt-2 text-center divider_mb" >
            <div class="row p-2 bg-secundario hiden_responsive_sm">

                <div class="col-md-4 mt-5 ">
                      <div class="content3">
                          <div class="content-overlay3"></div>
                          <img class="content-image3" src="./assets/img/celebrating/4.webp " >
                          <div class="content-details3 fadeIn-bottom3">
<!--                              <h3 class="content-title3">WEDDINGS</h3><br><br>-->
                              <p style="font-family: Montserrat-Medium; text-shadow: 1.5px 1.5px 1.5px rgba(255, 255, 255, 0.288);">
                                We provide the highest level of full-<br>service wedding coordination and <br>planning. As professional wedding <br> planners,
                                we are committed to <br> making your wedding event stress-<br>free and enjoyable, and the <br>execution flawless. <br><br>
                                Whether you have pictured your<br> dream wedding from the time you<br> were a small child or have no idea <br>
                                where to begin in your wedding <br>planning, we will work with you <br>every step of the way. Each <br>
                                wedding and event that we plan is <br>unique to our clients and their <br>particular likes and dislikes and <br>specific taste and style.
                              </p>
                          </div>
                      </div>
                      <h2 class="text-carding tittle_thin " >WEDDINGS</h2>
                </div>

                <div class="col-md-4 mt-5 " id="nav-weddings">
                       <div class="content3">
                          <div class="content-overlay3"></div>
                          <img class="content-image3" src="./assets/img/celebrating/5.webp " >
                          <div class="content-details3 fadeIn-bottom3">
<!--                              <h3 class="content-title3">CELEBRATIONS</h3><br><br>-->
                              <p style="font-family: Montserrat-Medium; text-shadow: 1.5px 1.5px 1.5px rgba(255, 255, 255, 0.288);">
                                The Design is the imagination,<br> creativity and inspiration that <br>makes your event unique. We <br>work closely with you to sleuth <br>out your style
                                and then use that<br> insight to develop every<br> aesthetic component of your <br>event from stationery and <br>lighting to flowers and <br>furniture.
                              </p>
                          </div>
                      </div>
                      <h2 class="text-carding tittle_thin " >CELEBRATIONS</h2>
                </div>

                <div class="col-md-4 mt-5 " id="nav-weddings">
                       <div class="content3">
                          <div class="content-overlay3"></div>
                          <img class="content-image3" src="./assets/img/celebrating/6.webp " >
                          <div class="content-details3 fadeIn-bottom3">
<!--                              <h3 class="content-title3">DESTINATION <br> WEDDINGS</h3><br><br>-->
                              <p style="font-family: Montserrat-Medium; text-shadow: 1.5px 1.5px 1.5px rgba(255, 255, 255, 0.288);">
                                Of course the dream day you <br>expect should be set at a <br>dream destination perfect for<br> you wedding. Whether you <br>picture yourself on the <br>
                                beaches of the Pacific Ocean,<br> the streets of Oaxaca, a <br>hidden forest or a turn-of-<br>the-century grand ballroom, <br>we’ll deliver one of the
                                most <br>magical places imaginable to<br> celebrate your love. As your <br>destination wedding planner,<br> we anticipate and address all <br>issues that
                                come up, making<br> your experince and travels<br> stress-free and amazing.
                              </p>
                          </div>
                      </div>
                      <h2 class="text-carding tittle_thin " >DESTINATION <br> WEDDINGS</h2>
                </div>

            </div>

         <div class="content_services_mb hiden_responsive_pc">
            <div class="row bg-secundario" style="padding: 0.5rem;">

                <div class="col-4 p-1">
                    <div class="d-flex justify-content-center">
                      <a type="button" class="estilo_ios" data-bs-toggle="modal" data-bs-target="#wedding">
                          <div class="content_mb_xs">
                              <div class="content-overlay_mb_xs"></div>
                              <img class="content-image_mb_xs" src="./assets/img/celebrating/4.webp">
                              <div class="content-details_mb_xs fadeIn-bottom">
                                  <p style="" class="text_celebrating_mb">
                                    The Design is the imagination,<br> creativity and inspiration that <br>makes your event unique. We <br>work closely with you to sleuth <br>out your style
                                    and then use that<br> insight to develop every<br> aesthetic component of your <br>event from stationery and <br>lighting to flowers and <br>furniture.
                                  </p>
                              </div>
                          </div>
                      </a>
                    </div>

                    <h2 class="text-carding tittle_thin " >WEDDINGS</h2>
                </div>

                <div class="col-4 p-1">
                    <div class="d-flex justify-content-center">
                        <a type="button" class="estilo_ios" data-bs-toggle="modal" data-bs-target="#celebrating">
                          <div class="content_mb_xs">
                              <div class="content-overlay_mb_xs"></div>
                              <img class="content-image_mb_xs" src="./assets/img/celebrating/5.webp">
                              <div class="content-details_mb_xs fadeIn-bottom">
                                  <p style="" class="text_celebrating_mb">
                                    The Design is the imagination,<br> creativity and inspiration that <br>makes your event unique. We <br>work closely with you to sleuth <br>out your style
                                    and then use that<br> insight to develop every<br> aesthetic component of your <br>event from stationery and <br>lighting to flowers and <br>furniture.
                                  </p>
                              </div>
                          </div>
                        </a>
                    </div>
                    <h2 class="text-carding tittle_thin " >CELEBRATIONS</h2>
                </div>

                <div class="col-4 p-1">
                    <div class="d-flex justify-content-center">
                        <a type="button" class="estilo_ios" data-bs-toggle="modal" data-bs-target="#destination">
                          <div class="content_mb_xs">
                              <div class="content-overlay_mb_xs"></div>
                              <img class="content-image_mb_xs" src="./assets/img/celebrating/6.webp">
                              <div class="content-details_mb_xs fadeIn-bottom">
                                <p style="" class="text_celebrating_mb">
                                    The Design is the imagination,<br> creativity and inspiration that <br>makes your event unique. We <br>work closely with you to sleuth <br>out your style
                                    and then use that<br> insight to develop every<br> aesthetic component of your <br>event from stationery and <br>lighting to flowers and <br>furniture.
                                  </p>
                              </div>
                          </div>
                        </a>
                    </div>
                    <h2 class="text-carding tittle_thin " >DESTINATION <br> WEDDINGS</h2>
                </div>
            </div>
         </div>

        </div>
      </div>
    </section>

    <!--        _____________________-->
    <!--        press-->
    <!--        _____________________-->

    <section class="mt-2 mb-5 text-center container" id="nav-press">
      <div class="row">
        <div class="col-12">
          <h1 class="tittle_newyork mb-3">CONFIRMACIÓN</h1>
          <h5 class="text-center tittle_newyork" style="font-size: 18px">
            Hola <br> {{$client->nombre}}
          </h5>
        </div>
      </div>

      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <div class="d-flex justify-content-around max_content_press">
            <img class="brand_logo " src="./assets/img/prensa/33.webp">
            <img class="brand_logo "  src="./assets/img/prensa/55.webp">
            <img class="brand_logo "  src="./assets/img/prensa/54.webp">
            <img class="brand_logo "  src="./assets/img/prensa/34.webp">
          </div>
        </div>

        <div class="col-12 d-flex justify-content-center">
          <div class="d-flex justify-content-evenly max_content_press">
            <img class="brand_logo " src="./assets/img/prensa/32.webp">
            <img class="brand_logo " src="./assets/img/prensa/35.webp">
            <img class="brand_logo " src="./assets/img/prensa/31.webp">
          </div>
        </div>
      </div>
    </section>

      <!--        _____________________-->
    <!--        Footter-->
    <!--        _____________________-->


        <section class="testimonials py-4 text-center container-fluid bg-secundario">
          <div class="row ">
            <div class="col-12">
                <div class="mb-1">
                  <a  href="https://wa.link/i73e1c" target="_blanck" style="text-decoration: none;">
                    <img src="./assets/icons/whats.webp"  style="width:22px;height:22px!important;margin-right: 5px;opacity: 0.6;">
                  </a>
                  <a  href="mailto:info@dgeventplanning.com" target="_blanck" style="text-decoration: none;">
                    <img src="./assets/icons/envelope.webp"  style="width:29px;height:29px!important;margin-right: 45px;opacity: 0.6;">
                  </a>
                  <a  href="https://www.instagram.com/danielguaidawp/" target="_blanck" style="text-decoration: none;">
                    <img src="./assets/icons/insta.webp"  style=" width: 22px;height:22px!important;opacity: 0.6;">
                  </a>
                  <a  href="https://www.facebook.com/Daniel-Guaida-Event-Planning-109570360569345/" target="_blanck" style="text-decoration: none;">
                    <img src="./assets/icons/face.webp"  style="width:22px;height:22px!important;opacity: 0.6;">
                  </a>
                  <a  href="https://www.tiktok.com/@danielguaida" target="_blanck" style="text-decoration: none;">
                    <img src="./assets/icons/tiktok.webp"  style=" width: 22px;height:22px!important;opacity: 0.6;">
                  </a>
                </div>

              <a class="text-center tittle_footer">
                DG Event Planning 2022©
              </a>

            </div>
          </div>
        </section>

        <section class="testimonials py-3 text-center container">
          <div class="row ">
            <div class="col-12">
              <a class="text-center heebo-light"  style="font-size: 12px !important; color: #63686E; text-decoration: none;">
                web design by
              </a>
              <a target="_blank" href="https://www.ilabagency.com"><img class="logo_ilab" src="./assets/img/ilab.webp"></a>
            </div>
          </div>
        </section>

    <!-- Modal celebratong-->
    <div class="modal fade" id="wedding" tabindex="-1" aria-labelledby="wedding" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"">
            <div class="modal-content">
                <div class="modal-body bg-primario">
                    <div class="d-flex flex-row-reverse">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="col-md-12 p-4 text-center">
                        <h5 class="tittle_newyork_form">WEDDINGS</h5>
                    </div>

                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <img class="content-image_mb_xs" src="./assets/img/celebrating/4.webp" style="width: 40%;">
                        </div>
                    </div>

                    <div class="col-12 p-3">
                        <p class="label_form text-center">
                            We provide the highest level of full-
                            service wedding coordination and
                            planning. As professional wedding
                            planners, we are committed to
                            making your wedding event stress-
                            free and enjoyable, and the
                            execution flawless. <br><br>

                            Whether you have pictured your
                            dream wedding from the time you
                            were a small child or have no idea
                            where to begin in your wedding
                            planning, we will work with you
                            every step of the way. Each
                            wedding and event that we plan is
                            unique to our clients and their
                            particular likes and dislikes and
                            specific taste and style.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="celebrating" tabindex="-1" aria-labelledby="celebrating" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"">
            <div class="modal-content">
                <div class="modal-body bg-primario">
                    <div class="d-flex flex-row-reverse">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="col-md-12 p-4 text-center">
                        <h5 class="tittle_newyork_form">CELEBRATIONS</h5>
                    </div>

                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <img class="content-image_mb_xs" src="./assets/img/celebrating/5.webp" style="width: 40%;">
                        </div>
                    </div>

                    <div class="col-12 p-3">
                        <p class="label_form text-center">
                            The Design is the imagination,
                            creativity and inspiration that
                            makes your event unique. We
                            work closely with you to sleuth
                            out your style and then use that
                            insight to develop every
                            aesthetic component of your
                            event from stationery and
                            lighting to flowers and
                            furniture.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="destination" tabindex="-1" aria-labelledby="destination" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"">
            <div class="modal-content">
                <div class="modal-body bg-primario">
                    <div class="d-flex flex-row-reverse">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="col-md-12 p-4 text-center">
                        <h5 class="tittle_newyork_form">DESTINATION WEDDINGS</h5>
                    </div>

                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <img class="content-image_mb_xs" src="./assets/img/celebrating/6.webp" style="width: 40%;">
                        </div>
                    </div>

                    <div class="col-12 p-3">
                        <p class="label_form text-center">
                            Of course the dream day you
                            expect should be set at a
                            dream destination perfect for
                            you wedding. Whether you
                            picture yourself on the
                            beaches of the Pacific Ocean,
                            the streets of Oaxaca, a
                            hidden forest or a turn-of-
                            the-century grand ballroom,
                            we’ll deliver one of the most
                            magical places imaginable to
                            celebrate your love. As your
                            destination wedding planner,
                            we anticipate and address all
                            issues that come up, making
                            your experince and travels
                            stress-free and amazing.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">

        <div class="modal-content">


          <div class="modal-body bg-primario" style="border: 1px solid transparent">

            <div class="d-flex flex-row-reverse">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form class="row g-3" method="post" action="./formulario.php">

              <div class="col-md-12 mt-4 text-center">
                <h5 class="tittle_newyork_form">CONTACT</h5>
              </div>

              <div class="col-md-12">
                <h5 class="tittle_form">TELL US ABOUT YOU!</h5>
                <label for="" class="form-label label_form">First Name</label>
                <input type="text" class="form-control" required name="first_name" id="first_name">
              </div>

              <div class="col-md-12 mb-3">
                <label for="" class="form-label label_form">Last Name</label>
                <input type="text" class="form-control" required name="last_name" id="last_name">
              </div>

              <div class="col-md-12">
                <h5 class="tittle_form">WHAT IS YOUR ADRESS?</h5>
                <label for="" class="form-label label_form">Street Address</label>
                <input type="text" class="form-control" required name="address" id="address">
              </div>

              <div class="col-md-6">
                <label for="" class="form-label label_form">City</label>
                <input type="text" class="form-control" id="city"  required name="city">
              </div>

              <div class="col-md-6 mb-3">
                <label for="" class="form-label label_form">State / Province</label>
                <input type="text" class="form-control" id="state" required name="state">
              </div>

               <div class="col-md-12">
                <h5 class="tittle_form">WHAT IS YOUR EMAIL ADDRESS?</h5>
                <label for="" class="form-label label_form">Email Address</label>
                <input type="text" class="form-control" id="email" required name="email">
              </div>

               <div class="col-md-12">
                <label for="" class="form-label label_form">WHICH TYPE OF EVENT ARE YOU PLANNING?</label>
                <textarea class="form-control" id="textare" required name="textare"></textarea>
              </div>

              <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary btn-form">SEND</button>
              </div>

            </form>

          </div>

        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!--    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>-->
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>-->

    <script  src="./assets/js/videobutons.js"></script>

    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="https://raw.github.com/carhartl/jquery-cookie/master/jquery.cookie.js"></script>
    <script src="./assets/js/jquery.tr.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
    <script  src="./assets/js/traduccion.js"></script>
    <script  src="./assets/js/ow-custom.js"></script>
    <script src="./assets/js/carrusel.js"></script>

    <script>
        function Redirect() {
            window.location.href = "index-dark.php";
        }

        $('#aks').hover(
            function(){
              $(this).attr('src','assets/img/arrow_bold.webp')
            },
            function(){
              $(this).attr('src','assets/img/arrow_ligth.webp')
            }
        )

        $('.arrow_l').hover(
            function(){
              $(this).attr('src','assets/img/arrow_left_bold.webp')
                console.log('h')
            },
            function(){
              $(this).attr('src','assets/img/arrow_left_bold')
                console.log('ha')
            }
        )

    </script>
    <script  src="./assets/js/offcanvas.js"></script>
  </body>
</html>

