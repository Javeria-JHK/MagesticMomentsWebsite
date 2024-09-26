<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Services</title>
</head>
<body >

     <h1 id="services-note">Magestic Moments Services</h1>

    <br><br>
    <p id="service-desc">We are specialized in providing professional event management services. We are providing all services with the calibration of our vendors and professionals.
        <br><br>Following are the list of our most favorite and experienced services of Events. </p>
   
    <div class="services">
        <div class="col-lg-4 innerDiv">
            <div  class="card innerImg decoration">
                <img src="./images/decor.jpg" alt="decor">
                <div class="card-body">
                    <h2>DECORATION</h2>
                    <p>packages or customized, Artificial and pure 
                        Floral Arrangements</p>
                </div>
    
            </div>
            <div class="card innerImg cater" >
                <img src="./images/catering.jpg" alt="catering">
                <div class="card-body">
                    <h2>CATERING</h2>
                    <p>Enjoy Elegence with featured
                         Catering to bring Lights to your event.</p>
                </div>
    
            </div>
            <div class="card innerImg">
                <img src="./images/custom.jpg" alt="catering">
                <div class="card-body">
                    <h2>STALLS</h2>
                    <p>Enjoy your event with amazing side stalls 
                        and bring charm.</p>
                </div>
            </div>

        </div>

        <div class="col-lg-4 innerDiv">
            <div class="card innerImg Menu" >
                <img src="./images/menu.jpg" alt="menu">
                <div class="card-body">
                    <h2> MENU</h2>
                    <p>we provide customization of food, made with love.
                        Desi, Thai, Chinese or Veg.
                    </p>
                </div>

            </div>
            <div class="card innerImg bday" >
                <img src="./images/bday.jpg" alt="bday">
                <div class="card-body">
                    <h2>BIRTHDAYS</h2>
                    <p>Enjoy your Day with most Elegent decor and food,
                        customizing your dreams.</p>  
                </div>

            </div>
            <div class="card innerImg" >
                <img src="./images/security.jpg" alt="security">
                <div class="card-body">
                    <h2>SECURITY</h2>
                    <p>Your Security is and enjoyment is 
                        our priority, so Enjoy it.</p>
                </div>

            </div>

        </div>
        <div class="col-lg-4 innerDiv">
            <div class="card innerImg " >
                <img src="./images/photographer.jpg" alt="Photography">
                <div class="card-body">
                    <h2>PHOTOGRAPHY</h2>
                    <p>You don't know how valuable our work 
                        is until photos are all there's left</p>
                </div>

            </div>
            <div class="card innerImg" >
                <img src="./images/vedio.jpg" alt="vediography">
                <div class="card-body">
                    <h2>VEDIOGRAPHY</h2>
                    <p>We provide the best visual storytelling 
                        with our expertise in the the world of film.</p>
                </div>

            </div>
            <div class="card innerImg" >
                <img src="./images/DJ.jpg" alt="DJ">
                <div class="card-body">
                    <h2>MUSIC</h2>
                    <p>We provide the best Music and DJ services as per your preferences.</p>
                </div>

            </div>
        </div>
    </div>
    <nav id="navig" class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="navbar-collapse d-lg-flex collapse show" id="navbarsExample11" >
            <div class="navbar-brand col-lg-3 me-0" href="#">
                <img id="logoImg" src="./images/logo.png" alt="Agency logo" height="50px" width="50px">
              </div>
            <ul class="navbar-nav col-lg-6 justify-content-lg-center">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{ url('/')}}" style="text-decoration: none;">Home</a>
              </li>
     
              <li class="nav-item">
                <a class="nav-link " href="{{ url('/')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="# " style="text-decoration: none; color: #FFCD4B;">Services</a>
              </li>
              <li class="nav-item">
              <a class="nav-link " href="{{ url('/Contact Us')}}">Contact Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Events</a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('/Decoration')}}">Wedding Events</a></li>
                <li><a class="dropdown-item" href="{{ url('/Birthday')}}">Birthday Events</a></li>
                <li><a class="dropdown-item" href="{{ url('/Catering')}}">Official Parties</a></li>
                </ul>
              </li>

            </ul>
            <div class="d-lg-flex col-lg-3 justify-content-lg-end">
            <button class="btn btn-warning" ><a href="{{ url('/SignIn')}}" style="text-decoration:none">Sign In</a></button>
            </div>
          </div>
        </div>
    </nav>
    <footer>
        <div id="signature">
            <h4>© Copyright </h4>
            <p>Javeria Khan</p>
            <p>Sp21-BCS-032</p>
        </div>
    </footer>
    <script>
        
        const decor = document.querySelector(".decoration");
        decor.addEventListener('click', function(){
            window.location.href = "/Decoration";
        });
        const menu = document.querySelector(".Menu");
        menu.addEventListener('click', function(){
            window.location.href = "/Menu";
        });
        const cater = document.querySelector(".cater");
        cater.addEventListener('click', function(){
            window.location.href = "/Catering";
        });

        const bday = document.querySelector(".bday");
        bday.addEventListener('click', function(){
            window.location.href = "/Birthday";
        });

    </script>


  
</body>
</html>