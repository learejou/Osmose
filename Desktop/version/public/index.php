<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>VIP TAXI France</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/logoTaxi.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logoTaxi.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.php"><img class="d-inline-block" src="assets/img/logoTaxi.png" width="50" alt="logo" /><span class="fw-bold text-primary ms-2">VIP Taxi France</span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page" href="#destinations"><span class="nav-link-icon text-800 me-1 fas fa-map-marker-alt"></span><span class="nav-link-text">Courses </span></a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#flights"> <span class="nav-link-icon text-800 me-1 fas fa-plane"></span><span class="nav-link-text">Vols</span></a></li>
            </ul>
            <form>
              <button class="btn text-800 order-1 order-lg-0 me-2" type="button">Support</button>
              <button class="btn btn-voyage-outline order-0" type="submit"><span class="text-primary">Connexion</span></button>
            </form>
          </div>
        </div>
      </nav>
      <section class="mt-7 py-0">
        <div class="bg-holder w-50 bg-right d-none d-lg-block" style="background-image:url(assets/img/gallery/stras1.png);">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row">
            <div class="col-lg-6 py-5 py-xl-5 py-xxl-7">
              <h1 class="display-3 text-1000 fw-normal">Faisons un tour</h1>
              <h1 class="display-3 text-primary fw-bold">Découvrez les paysages français</h1>
              <div class="pt-5">
                <nav>
                  <div class="nav nav-tabs voyage-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-map-marker-alt"></i></button>
                  <!--  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"> <i class="fas fa-plane"></i></button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"> <i class="fas fa-hotel"></i></button> -->
                  </div>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      <form class="row g-4 mt-5">
                        <div class="col-sm-6 col-md-6 col-xl-5">
                          <div class="input-group-icon">
                            <label class="form-label visually-hidden" for="inputAddress1">Départ</label>
                            <input class="form-control input-box form-voyage-control" id="inputAddress1" type="text" placeholder="Départ"/><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-map-marker-alt"></i></span>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-5">
                          <div class="input-group-icon">
                            <label class="form-label visually-hidden" for="inputAddress2">Arrivée</label>
                            <input class="form-control input-box form-voyage-control" id="inputAddress2" type="text" placeholder="Arrivée" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-map-marker-alt"> </i></span>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-5">
                          <div class="input-group-icon">
                            <input class="form-control input-box form-voyage-control" id="inputdateOne" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-5">
                          <div class="input-group-icon">
                            <input class="form-control input-box form-voyage-control" id="inputDateTwo" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-5">
                          <div class="input-group-icon">
                            <label class="form-label visually-hidden" for="inputPersonOne">Person</label>
                            <select class="form-select form-voyage-select input-box" id="inputPersonOne">
                              <option selected>Adulte(s)</option>
                              <option>1 Adulte</option>
                              <option>2 Adultes</option>
                              <option>3 Adultes</option>
                              <option>4 Adultes</option>
                            </select><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-user"> </i></span>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-5">
                          <div class="input-group-icon">
                            <label class="form-label visually-hidden" for="inputPersonOne">Person</label>
                            <select class="form-select form-voyage-select input-box" id="inputPersonOne">
                              <option selected="selected">Enfant(s)</option>
                              <option>1 Enfant</option>
                              <option>2 Enfants</option>
                              <option>3 Enfants</option>
                            </select><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-user"> </i></span>
                          </div>
                        </div>
                        <div class="col-12 col-xl-10 col-lg-12 d-grid mt-6">
                          <button class="btn btn-secondary" type="submit">Réserver la course !</button>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <form class="row g-4 mt-5">
                        <div class="col-6">
                          <div class="input-group-icon">
                            <label class="form-label visually-hidden" for="inputAddressThree">Address 1</label>
                            <input class="form-control input-box form-voyage-control" id="inputAddressThree" type="text" placeholder="From where" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-map-marker-alt"></i></span>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="input-group-icon">
                            <label class="form-label visually-hidden" for="inputAddressFour">Address 2</label>
                            <input class="form-control input-box form-voyage-control" id="inputAddressFour" type="text" placeholder="To where" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-map-marker-alt"> </i></span>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="input-group-icon">
                            <input class="form-control input-box form-voyage-control" id="inputDateThree" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="input-group-icon">
                            <input class="form-control input-box form-voyage-control" id="inputDateFour" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="input-group-icon">
                            <label class="form-label visually-hidden" for="inputPeopleTwo">People</label>
                            <select class="form-select form-voyage-select input-box" id="inputPeopleTwo">
                              <option selected="selected">2 Adults</option>
                              <option>2 Adults 1 children</option>
                              <option>2 Adults 2 children</option>
                            </select><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-user"> </i></span>
                          </div>
                        </div>
                        <div class="col-12 d-grid mt-6">
                          <button class="btn btn-secondary" type="submit">Search Packages</button>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                      <form class="row g-4 mt-5">
                        <div class="col-6">
                          <div class="input-group-icon">
                            <input class="form-control input-box form-voyage-control" id="inputDateFive" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="input-group-icon">
                            <input class="form-control input-box form-voyage-control" id="inputDateSix" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="input-group-icon">
                            <label class="form-label visually-hidden" for="inputPeopleThree">Person</label>
                            <select class="form-select form-voyage-select input-box" id="inputPeopleThree">
                              <option selected="selected">2 Adults</option>
                              <option>2 Adults 1 children</option>
                              <option>2 Adults 2 children</option>
                            </select><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-user"> </i></span>
                          </div>
                        </div>
                        <div class="col-12 d-grid mt-6">
                          <button class="btn btn-secondary" type="submit">Search Packages</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 overflow-hidden">

        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 px-0"><img class="img-fluid order-md-0 mb-4 h-100 fit-cover" src="assets/img/gallery/taxi.png" alt="..." /></div>
            <div class="col-lg-6 px-0 bg-primary-gradient bg-offcanvas-right">
              <div class="mx-6 mx-xl-8 my-8">
                <div class="align-items-center d-block d-flex mb-5"><img class="img-fluid me-3 me-md-2 me-lg-4" src="assets/img/icons/locations.png" alt="..." />
                  <div class="flex-1 align-items-center pt-2">
                    <h5 class="fw-bold text-light">Visitez les plus beaux endroits</h5>
                  </div>
                </div>
                <div class="align-items-center d-block d-flex mb-5"><img class="img-fluid me-3 me-md-2 me-lg-4" src="assets/img/icons/schedule.png" alt="..." />
                  <div class="flex-1 align-items-center pt-2">
                    <h5 class="fw-bold text-light">Plannifiez vous même vos trajets.</h5>
                  </div>
                </div>
                <div class="align-items-center d-block d-flex mb-5"><img class="img-fluid me-3 me-md-2 me-lg-4" src="assets/img/icons/save.png" alt="..." />
                  <div class="flex-1 align-items-center pt-2">
                    <h5 class="fw-bold text-light">Économisez 50 % sur votre prochain voyage</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      
      <section class="py-7 overflow-hidden" id="places">
        <div class="container bg-offcanvas-gray-right">
          <div class="row gx-2 mb-2">
            <div class="col-12 col-md-12 col-lg-4">
              <div class="bg-primary-gradient bg-offcanvas h-100">
                <div class="row g-0 justify-content-end">
                  <div class="col-12">
                    <div class="p-6 py-md-5 px-md-3 py-lg-8 text-light"><img class="mb-5" src="assets/img/icons/icon-location.svg" alt="..." />
                      <h2 class="mb-2 text-light">Lieux populaires</h2>
                      <p>Profitez des paysages alsaciens<br class="d-none d-lg-block" />mais pas seulement et partez découvrir <br class="d-none d-lg-block" />toutes les cultures régionales.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/stras.png" height="375" alt="..." />
                <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                  <div class="mt-auto px-4 mb-1">
                    <h3 class="fs-1 fs-md-2 text-white">Strasbourg</h3><span class="text-light fs--1 me-1"><i class="fa fa-car" aria-hidden="true"></i></span><span class="text-light me-3">A partir de 5€</span>
                  </div>
                </div><a class="stretched-link" href="#!"></a>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/colmar.png" height="375" alt="..." />
                <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                  <div class="mt-auto px-4 mb-1">
                    <h3 class="fs-1 fs-md-2 text-white">Colmar</h3><span class="text-light fs--1 me-1"><i class="fa fa-car" aria-hidden="true"></i></span><span class="text-light me-3">A partir de 15€</span>
                  </div>
                </div><a class="stretched-link" href="#!"></a>
              </div>
            </div>
          </div>
          <div class="row g-2">
            <div class="col-sm-6 col-lg-4">
              <div class="row g-2">
                <div class="col-12">
                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/lyon.png" height="375" alt="..." />
                    <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                      <div class="mt-auto px-4 mb-1">
                        <h3 class="fs-1 fs-md-2 text-white">Lyon</h3><span class="text-light fs--1 me-1"><i class="fa fa-car" aria-hidden="true"></i></span><span class="text-light me-3">A partir de 250€</span>
                      </div>
                    </div><a class="stretched-link" href="#!"></a>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/Nantes.png" height="375" alt="..." />
                    <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                      <div class="mt-auto px-4 mb-1">
                        <h3 class="fs-1 fs-md-2 text-white">Nantes</h3><span class="text-light fs--1 me-1"><i class="fa fa-car" aria-hidden="true"></i></span><span class="text-light me-3">A partir de 500€</span>
                      </div>
                    </div><a class="stretched-link" href="#!"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="row g-2">
                <div class="col-12">
                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/paris.png" height="375" alt="..." />
                    <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                      <div class="mt-auto px-4 mb-1">
                        <h3 class="fs-1 fs-md-2 text-white">Paris</h3><span class="text-light fs--1 me-1"><i class="fa fa-car" aria-hidden="true"></i></span><span class="text-light me-3">A partir de 300€</span>
                      </div>
                    </div><a class="stretched-link" href="#!"></a>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/marseille.png" height="375" alt="..." />
                    <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                      <div class="mt-auto px-4 mb-1">
                        <h3 class="fs-1 fs-md-2 text-white">Marseille</h3><span class="text-light fs--1 me-1"><i class="fa fa-car" aria-hidden="true"></i></span><span class="text-light me-3">A partir de 400€</span>
                      </div>
                    </div><a class="stretched-link" href="#!"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-4">
              <div class="bg-secondary-gradient h-100 d-flex flex-column justify-content-center">
                <div class="text-light p-4 p-sm-6 p-lg-0 px-xxl-6">
                  <p class="fs-1 px-4 mb-6">Un trajet convetionné au depart ou a destination d'un centre de soin ? </p><a class="btn btn-lg text-light fs-2" href="https://www.aide-sociale.fr/remboursement-cpam-taxi-conventionne-ambulance-vsl/" role="button">En savoir plus
                    <svg class="bi bi-arrow-right-circle ms-5" xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
                    </svg></a>
                </div>
                <br><br><br><br><br><br><br><br><br>
                <div class="text-light p-4 p-sm-6 p-lg-0 px-xxl-6">
                  <p class="fs-1 px-4 mb-6">Un vol a prendre ? Nous vous emmenons directement à votre aéroport, comparez vos billets </p><a class="btn btn-lg text-light fs-2" href="https://www.liligo.fr/" role="button">En savoir plus
                    <svg class="bi bi-arrow-right-circle ms-5" xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
                    </svg></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="py-0 my-7">
        <div class="bg-holder w-50 bg-left d-none d-lg-block" style="background-image:url(assets/img/gallery/partenaires.png);background-position:top;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row g-0">
            <div class="col-lg-4 order-1 order-lg-0"> </div>
            <div class="col-lg-8 bg-white">
              <div class="carousel slide" id="carouselShare" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="5000">
                    <div class="row h-100">
                      <div class="col-12"><img class="w-100" src="assets/img/gallery/europe.png" height="600" alt="..." />
                        <div class="pt-5 ps-sm-7">
                          <h4 class="mb-2 text-1000">Les partenaires de VIP TAXI FRANCE</h4>
                          <h2 class="mb-3 text-primary fs-3 fs-md-6">Les institutions européennes </h2>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <div class="row h-100">
                      <div class="col-12"><img class="w-100" src="assets/img/gallery/SNCF.png" height="600" alt="..." />
                        <div class="pt-5 ps-sm-7">
                          <h4 class="mb-2 text-1000">Les partenaires de VIP TAXI FRANCE</h4>
                          <h2 class="mb-3 text-primary fs-3 fs-md-6">SNCF</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <div class="row h-100">
                      <div class="col-12"><img class="w-100" src="assets/img/gallery/aeroport.png" height="600" alt="..." />
                        <div class="pt-5 ps-sm-7">
                          <h4 class="mb-2 text-1000">Les partenaires de VIP TAXI FRANCE</h4>
                          <h2 class="mb-3 text-primary fs-3 fs-md-6">Aéroport international de strasbourg </h2>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <div class="row h-100">
                      <div class="col-12"><img class="w-100" src="assets/img/gallery/reaple.png" height="600" alt="..." />
                        <div class="pt-5 ps-sm-7">
                          <h4 class="mb-2 text-1000">Les partenaires de VIP TAXI FRANCE</h4>
                          <h2 class="mb-3 text-primary fs-3 fs-md-6">Reaple Informatique</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <div class="row h-100">
                      <div class="col-12"><img class="w-100" src="assets/img/gallery/hus.png" height="600" alt="..." />
                        <div class="pt-5 ps-sm-7">
                          <h4 class="mb-2 text-1000">Les partenaires de VIP TAXI FRANCE</h4>
                          <h2 class="mb-3 text-primary fs-3 fs-md-6">Hôpitaux universaitaires STRASBOURG</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <div class="row h-100">
                      <div class="col-12"><img class="w-100" src="assets/img/gallery/ghsv.png" height="600" alt="..." />
                        <div class="pt-5 ps-sm-7">
                          <h4 class="mb-2 text-1000">Les partenaires de VIP TAXI FRANCE</h4>
                          <h2 class="mb-3 text-primary fs-3 fs-md-6">Groupe hospitalier St. Vincent</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <div class="row h-100">
                      <div class="col-12"><img class="w-100" src="assets/img/gallery/bdr.png" height="600" alt="..." />
                        <div class="pt-5 ps-sm-7">
                          <h4 class="mb-2 text-1000">Les partenaires de VIP TAXI FRANCE</h4>
                          <h2 class="mb-3 text-primary fs-3 fs-md-6">BDR Thermea</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row ps-sm-7 align-items-end">
                  <div class="col-4 col-sm-6 position-relative z-index-2">
                    <ol class="carousel-indicators me-xxl-7 me-xl-4 me-lg-7">
                      <li class="active" data-bs-target="#carouselShare" data-bs-slide-to="0"></li>
                      <li data-bs-target="#carouselShare" data-bs-slide-to="1"></li>
                      <li data-bs-target="#carouselShare" data-bs-slide-to="2"></li>
                      <li data-bs-target="#carouselShare" data-bs-slide-to="3"></li>
                      <li data-bs-target="#carouselShare" data-bs-slide-to="4"></li>
                      <li data-bs-target="#carouselShare" data-bs-slide-to="5"></li>
                      <li data-bs-target="#carouselShare" data-bs-slide-to="6"></li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="py-7 overflow-hidden">
          
            <div class="col-12 col-lg-8 gy-2 order-3 order-lg-0">
              <div class="bg-secondary-gradient h-100">
                <div class="row h-100">
                  <div class="col-12">
                    <div class="d-flex flex-column flex-center h-100 text-light p-4 p-sm-6 p-md-8 p-lg-0" >
                      <p class="fs-1 px-3 mb-5">  <br class="d-none d-xl-block" />Moyens de paiements disponibles :</p>
                      <a class="btn btn-lg text-light fs-1" href="#!" role="button">Carte bleue </a>
                      <a class="btn btn-lg text-light fs-1" href="#!" role="button">Espèces </a>
                      <a class="btn btn-lg text-light fs-1" href="#!" role="button">Chèques  </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
      </section>


      <!-- ============================================-->
      


      
      <!-- <section> begin ============================-->
      <section class="py-7 overflow-hidden" id="places">
        <div class="container bg-offcanvas-gray-right">
          <div class="row gx-2 mb-2">
            <div class="col-12 col-md-12 col-lg-4">
              <div class="bg-primary-gradient bg-offcanvas h-100">
                <div class="row g-0 justify-content-end">
                  <div class="col-12">
                    <div class="p-6 py-md-5 px-md-3 py-lg-8 text-light"><img class="mb-5" src="assets/img/icons/icon-location.svg" alt="..." />
                      <h2 class="mb-2 text-light">Réseau Sociaux</h2>
                      <p>Retrouvez VIP Taxi France<br class="d-none d-lg-block" />sur les réseaux.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/fb.png" height="375" alt="..." />
                <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                  <div class="mt-auto px-4 mb-1">
                    <h3 class="fs-1 fs-md-2 text-white">Facebook</h3>
                  </div>
                </div><a class="stretched-link" href="https://www.facebook.com/viptaxifrance"></a>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/linkedin.png" height="375" alt="..." />
                <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                  <div class="mt-auto px-4 mb-1">
                    <h3 class="fs-1 fs-md-2 text-white">LinkedIn</h3>
                  </div>
                </div><a class="stretched-link" href="#!"></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 overflow-hidden">

        <div class="container">
          <div class="row">
            <div class="col-6 col-sm-4 col-lg-6">
              <div class="py-7"><img class="d-inline-block" src="assets/img/logoTaxi.png" width="50" alt="logo" /><span class="fw-bold fs-4 text-primary ms-2">VIP Taxi France</span>
                <ul class="list-unstyled mt-4">
                  <li class="mb-2"><a class="text-800 fw-bold text-decoration-none" href="#!">Nouveautés</a></li>
                  <li class="mb-2"><a class="text-800 fw-bold text-decoration-none" href="#!">Therme &amp; Conditions</a></li>
                  <li class="mb-2"><a class="text-800 fw-bold text-decoration-none" href="#!">Politique</a></li>
                  <li class="mb-2"><a class="text-800 fw-bold text-decoration-none" href="#!">A propos</a></li>
                  <li class="mb-2"><a class="text-800 fw-bold text-decoration-none" href="#!">FAQ</a></li>
                </ul>
              </div>
            </div>
            <div class="col-6 col-8 col-lg-6 bg-primary-gradient bg-offcanvas-right">
              <div class="p-3 py-7 p-md-7">
                <p class="text-light"><i class="fas fa-phone-alt me-3"></i><span class="text-light">+33930219390</span></p>
                <p class="text-light"><i class="fas fa-envelope me-3"></i><span class="text-light">contact@viptaxi-france.fr</span></p>
                <p class="text-light"><i class="fas fa-map-marker-alt me-3"></i><span class="text-light lh-lg">Strasbourg</span></p>
                <p class="mt-3 text-light text-center text-md-start"> Créé par&nbsp;
                  <a class="text-light" href="https://reaple-informatique.fr/" target="_blank">Reaple Informatique </a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&amp;display=swap" rel="stylesheet">
  </body>

</html>