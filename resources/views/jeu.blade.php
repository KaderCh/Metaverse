<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MetaVerse</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/calendrier2.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->



     <!-- Navbar Start -->
     <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>info@example.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Suivez-nous:</small>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="{{ route('Accueil')}}" class="navbar-brand ms-4 ms-lg-0" >
                <h1 class="fw-bold text-primary m-0">Meta<span class="text-white">Verse</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{ route('Accueil')}}" class="nav-item nav-link ">Accueil</a> 
                    <div class="nav-item dropdown">
                    <a href="{{ route('catalogue')}}" class="nav-item nav-link">Catalogue de jeux</a>
                        <div class="dropdown-menu m-0">
                        @foreach($categories as $cat)
                            <a href="{{ route('catalogue')}}#{{$cat->categorie_nom}}" class="dropdown-item">{{$cat->categorie_nom}}</a>
                        @endforeach
                        </div>
                    </div>
                    <a href="{{ route('Contact')}}" class="nav-item nav-link">Contactez-nous</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-outline-primary py-2 px-3" href="{{route('reserver')}}">
                      Réserver
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fas fa-credit-card"></i>
                        </div>
                    </a>
                </div>
                <div class="d-none d-lg-flex ms-2" >
                    <a class="btn btn-outline-primary py-2 px-3" href="{{route('reserver')}}" style="display:flex;vertical-align:middle;">
                        <div class="npanier" style=" font-size:1.5rem"></div>
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2"  >
                        <i class="fas fa-shopping-cart"></i>
                        </div>
                    </a>
                
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

     <!-- Page Header Start -->
     <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <!-- <h1 class="display-4 text-white animated slideInDown mb-4">{{$jeu->jeu_nom}}</h1> -->
            <nav aria-label="breadcrumb animated slideInDown">
                <!-- <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">About Us</li>
                </ol> -->
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <div id="modal-container" class="modal">
        <div class="modal-content">
            <span id="close-modal-button" onclick="closeModal()" class="close">&times;</span>
            <h2>{{$jeu->jeu_nom}}</h2>
            <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                <div class="d-flex justify-content-between">  
                    <h6 class="mb-3" style="color:#00008B">Date de la réservation</h6> 
                    <h6 class="mb-3 selectDatePanier" style="color:#00008B" ></h6>
                </div>
            </div>
            <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                <div class="d-flex justify-content-between">  
                    <h6 class="mb-3" style="color:#00008B">Heure de la réservation</h6> 
                    <div class="mb-3 heurePanel"></div>
                </div>
            </div>
            <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                <div class="d-flex justify-content-between">  
                    <h6 class="mb-3" style="color:#00008B">Nombre de joueurs</h6> 
                    <div class="mb-3">
                    <button class="material-symbols-rounded nombre" onclick="decrement()">-</button>
                    <input class="nbr" disabled type="number" id="quantity" name="quantity" value ="{{$jeu->jeu_nombre_min_joueurs}}" min="{{$jeu->jeu_nombre_min_joueurs}}" max="{{$jeu->jeu_nombre_max_joueurs}}" step="1">
                    <button class="material-symbols-rounded nombre" onclick="increment()">+</button>
                    </div>
                </div>
            </div>
            <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                <div class="d-flex justify-content-between">  
                    <h6 class="mb-3" style="color:#00008B">Coût total ({{$jeu->jeu_tarif}}fr par joueur)</h6> 
                    <div class="mb-3 couttotal"></div>
                </div>
            </div>
        </div>
            
    </div>



    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative h-100" style="min-height: 400px;">
                        <img class="img-fluid " style="display:flex; margin:auto" height="700px" src="{{asset($jeu->jeu_image)}}" alt="">
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4" style="margin-top:50px;">
                            <div class="d-flex justify-content-between">  
                                <h6 class="mb-3" style="color:#00008B">Genre</h6> 
                                <h6 class="mb-3" style="color:#00008B">{{$cat->categorie_nom}}</h6> 
                            </div>
                        </div>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <div class="d-flex justify-content-between">  
                                <h6 class="mb-3" style="color:#00008B">Durée</h6> 
                                <h6 class="mb-3" style="color:#00008B">Environ {{$jeu->jeu_duree_maximale}}</h6> 
                            </div>
                        </div> 
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <div class="d-flex justify-content-between">  
                                <h6 class="mb-3" style="color:#00008B">Age minimum</h6> 
                                <h6 class="mb-3" style="color:#00008B">{{$jeu->jeu_age_minimum}} ans</h6> 
                            </div>
                        </div> 
                    </div> 
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    

                    <div class="h-100">
                            <div class="d-flex justify-content-between">  
                                <h6 class="display-6 mb-5">{{$jeu->jeu_nom}}</h6>
                            </div>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                              <p class="text-dark mb-5">{{$jeu->jeu_description}}</p>
                                <div class="datePanel">
                                <div class=" btn-sm-square text-primary  ms-2"x>
                                                <a  style="color:#00008B; margin-right:5px;" onclick="showCalendar()"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                                                <div class="wrapper" id="cal">
                                                        <header>
                                                            <p class="current-date"></p>
                                                                <div class="icons">
                                                                    <span id="prev" class="material-symbols-rounded"><</span>
                                                                    <span id="next" class="material-symbols-rounded">></span>
                                                                </div>
                                                        </header>
                                                        <div class="calendar">
                                                            <ul class="weeks"> 
                                                                <li>Lun</li> 
                                                                <li>Mar</li> 
                                                                <li>Mer</li> 
                                                                <li>Jeu</li> 
                                                                <li>Ven</li> 
                                                                <li>Sam</li> 
                                                                <li>Dim</li>
                                                            </ul>
                                                            <ul class="days"></ul>
                                                        </div>
                                                </div>

                                        </div>
                                    <span id="prevdate" class="material-symbols-rounded" onclick="prevDate();"><</span>
                                        <div class="dateContainer">
                                            <h6 class ="selectDate" id="showdate" style="margin-top: 7px;"></h6>
                                        </div>
                                    <span id="nextdate" class="material-symbols-rounded nextdate" onclick="nextDate()" >></span>
                                        
                                        
                                </div>
                        <div class="horaire">
                        <div class="horaire">
                                
                        </div>
                        </div>
                            <div class="d-flex justify-content-between">  
                                <h6  class="mb-3" style="color:#00008B">A partir de {{$jeu->jeu_tarif}} fcfa</h6>
                                
                            </div>
                        </div>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <div class="d-flex justify-content-between">  
                                <h6 class="mb-3" style="color:#00008B">Editeur</h6> 
                                <h6 class="mb-3" style="color:#00008B">{{$jeu->jeu_editeur}}</h6> 
                            </div>
                        </div>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <div class="d-flex justify-content-between">  
                                <h6 class="mb-3" style="color:#00008B">Joueurs</h6> 
                                <h6 class="mb-3" style="color:#00008B">Entre {{$jeu->jeu_nombre_min_joueurs}} et {{$jeu->jeu_nombre_max_joueurs}}</h6> 
                            </div>
                        </div>  
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4"> 
                                <h6 class="mb-3 text-center" style="color:#00008B">Teaser</h6> 
                        </div>               
                        <iframe width="610" height="390" src="https://www.youtube.com/embed/{{$jeu->jeu_teaser}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    
    <div class="container-xxl bg-light my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <!-- <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Nos meilleurs jeux</div> -->
                <h1 class="display-6 mb-5">Jeux de la même catégorie</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach($jeux as $j)
                    @if ($cat->id == $j->categoriedesjeux_id)
                <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>{{$jeu->jeu_nom}}</small>
                            </div>
  
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{asset($j->jeu_image)}}" style="display:flex; margin:auto" height="500px" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="{{route('jeu',['id'=>$jeu->id])}}">
                                    Réserver
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fas fa-credit-card"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div  class="text-center p-4 pt-0" style="margin-top:10px; color:blue">
                        <h6 class="mb-3 text-center" style="color:#00008B">A partir de {{$jeu->jeu_tarif}} fcfa</h6>    
                        <h6 class="mb-3 text-center" style="color:#00008B">Déconseillé aux moins de {{$jeu->jeu_age_minimum}} ans</h6>
                            <div class="d-flex justify-content-between">  
                                <h6 class="mb-3" style="color:#00008B">Environ {{$jeu->jeu_duree_maximale}} min</h6> 
                                <h6 class="mb-3" style="color:#00008B">Entre {{$jeu->jeu_nombre_min_joueurs}} et {{$jeu->jeu_nombre_max_joueurs}} joueurs</h6> 
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="fw-bold text-primary mb-4">Meta<span class="text-white">Verse</span></h1>
                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/parallax/parallax.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="{{asset('js/calendrier.js')}}"></script>
    <script src="{{asset('js/panier.js')}}"></script>



    <script>

            let Place =document.querySelector(".horaire");
                    
                    $(() => {
                    
                    let request = async() => {
                        let url = "{{route('places')}}";
                        let token = document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute("content");
                        let options = {
                            headers: {
                                "Content-Type": "application/json",
                                Accept: "application/json, text-plain, */*",
                                "X-Requested-With": "XMLHttpRequest",
                                "X-CSRF-TOKEN": token,
                            },
                            method: "post",
                            credentials: "same-origin",
                            body: JSON.stringify({
                                date: dbDate,
                            }),
                        };
                        await fetch (url, options)
                        .then((response) => response.json())
                        .then((response) => {
                            if (response.success) {
                                
                                let N = response.data.Nplaces;
                                let T="",
                                now = new Date();
                                nowDate ="",
                                now = new Date();
                                if (now.getMonth()<10) {
                                    let a = now.getMonth()+1;
                                    nowDate = now.getFullYear()+'-0'+a;
                                }else{
                                    nowDate = now.getFullYear()+'-'+now.getMonth();
                                }
                                if (dateshow.getDate()<10) {
                                    nowDate +='-0'+now.getDate();
                                }else{
                                    nowDate +='-'+now.getDate();
                                }
                                h=16;
                                for (let i = 0; i < N.length; i++) {
                                    if (N[i]==0 ) {
                                            T+=`<div id="" class="divhoraire" >
                                            <div>${h}H</div>
                                            <div class="place"> --- </div>
                                            </div> `;
                                        h+=1;   
                                        }
                                        else if (nowDate===dbDate && now.getHours()>=h){
                                            T+=`<div id="" class="divhoraire" >
                                            <div>${h}H</div>
                                            <div class="place"> --- </div>
                                            </div> `;
                                            h+=1;
                                        }
                                        else {
                                            T+=`<div id="${h}" onclick="openModal(this.id)"  class="divhoraire" >
                                            <div>${h}H</div>
                                            <div class="place">${N[i]} place(s) </div>
                                            </div> `; 
                                        h+=1;   
                                        }
                                    Place.innerHTML = T;
                                }
                            } else
                                ("warning", "");
                        })
                        .catch((e) => {
                            ("error", "Une erreur est survenue.");
                        });
                    };
                    request();
                    let ini = 0;
                    let d =dbDate;
                    $(document).ready(function() {
                            setInterval(function() {
                                if (dbDate != d) { // vérifie si la variable a changé
                                    request();
                                    d=dbDate;    
                                }
                            }, 1000); // vérifie la variable toutes les secondes
                        });
                    });

    </script>
</body>

</html>