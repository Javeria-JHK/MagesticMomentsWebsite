<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="./css/style.css">

       
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body style="background-color:rgb(245, 241, 241)">
  <div class="container-fluid images-carousal " style="background-color: rgb(245, 241, 241);">
    <div class="container images-carousal">
        <div id="carouselExampleCaptions" class="carousel slide mt-3">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"  aria-current="true" class="active" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"  aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    

    
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-7 d-card">
                      <h2 class="centre menu-head">Wedding Menu</h2>
                      <div class=" menu">
                        <h4>Meals</h4>
                        <input type="checkbox" id="palao">
                        <label for="palao">    Kabuli Palao----------------------------------------1500 </label><br>
                        <input type="checkbox" id="B_Biryani">
                        <label for="B_Biryani">Beef Biryani-----------------------------------------1700 </label><br>
                        <input type="checkbox" id="c-biryani">
                        <label for="c-biryani">Chicken Biryani-------------------------------------1300 </label><br>
                        <input type="checkbox" id="c-Karahi">
                        <label for="c-Karahi">Chicken Karahi-------------------------------------1800 </label><br>
                        <input type="checkbox" id="palao">
                        <label for="m_karahi">Mutton Karahi--------------------------------------2100 </label><br><br>
                        <h4>Starters</h4>
                        <input type="checkbox" id="soup">
                        <label for="soup">      Chicken Soup---------------------------------------250 </label><br>
                        <input type="checkbox" id="f-crackers">
                        <label for="f-crackers">Fish Cracker-----------------------------------------150 </label><br><br>
                        <h4>Side Dishes</h4>
                        <input type="checkbox" id="kebab">
                        <label for="kebab">     Seekh Kebab-----------------------------------------250 </label><br>
                        <input type="checkbox" id="Pasta">
                        <label for="pasta">     Pastas-------------------------------------------------150 </label><br><br>

                      </div>
                      
                      <div class="container checkb">
                       
                        <div class="btn btn-warning py-2 mt-2" id="select" type="submit">Select</div>
                        
                      </div>
                    </div>
                 
                    <div class="col-md-5 i-card">
                      <img src="./images/menu/m1.jpg" height="650" width="500"  alt="decor">
                    </div>
                  </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                    <div class="col-md-7 d-card">
                      <h2 class="centre menu-head">Party Menu</h2><br>
                      <div class=" menu">
                        <h4>Meals</h4>
                        <input type="checkbox" id="Burgers">
                        <label for="Burgers">    Burgers and Patties----------------------- ---------1600 </label><br>
                        <input type="checkbox" id="c-biryani">
                        <label for="c-biryani">  Chicken Biryani-------------------------------------1300 </label><br>
                        <input type="checkbox" id="c-Karahi">
                        <label for="c-Karahi">   Chicken Karahi--------------------------------------1800 </label><br>
                        <input type="checkbox" id="palao">
                        <label for="pasta">      Pasta------------------------------------------------500 </label><br>
                        <input type="checkbox" id="pasta">
                        <label for="m_karahi">   Pizza------------------------------------------------1500 </label><br><br>
                        <h4>Drinks</h4>
                        <input type="checkbox" id="coffee">
                        <label for="coffee">      Coffee----------------------------------------------250 </label><br>
                        <input type="checkbox" id="cd">
                        <label for="cd">          Cold drink------------------------------------------100 </label><br><br><br><br><br>
  
                      </div>
                      
                      <div class="container checkb">
                      
                        <div class="btn btn-warning py-2 mt-2" id="select" type="submit">Select</div>
                        
                      </div>
                    </div>
                 
                    <div class="col-md-5 i-card">
                      <img src="./images/menu/m2.jpeg" height="650" width="500"  alt="decor">
                    </div>
                  </div>
        
              </div>

              <div class="carousel-item">
                <div class="row">
                    <div class="col-md-7 d-card">
                      <h2 class="centre menu-head">Birthday Menu</h2>
                      <div class=" menu">
                        <h4>Meals</h4>
                        <input type="checkbox" id="palao">
                        <label for="palao">    Kabuli Palao----------------------------------------1500 </label><br>
                        <input type="checkbox" id="Burgers">
                        <label for="Burgers">    Burgers and Patties----------------------- ---------1600 </label><br>
                        <input type="checkbox" id="c-biryani">
                        <label for="c-biryani">  Chicken Biryani-------------------------------------1300 </label><br>
                        <input type="checkbox" id="c-Karahi">
                        <label for="c-Karahi">   Chicken Karahi-------------------------------------1800 </label><br>
                        <input type="checkbox" id="palao">
                        <label for="pasta">      Pasta------------------------------------------------500 </label><br>
                        <input type="checkbox" id="pasta">
                        <label for="m_karahi">   Pizza------------------------------------------------1500 </label><br><br>
                        <h4>Drinks</h4>
                        <input type="checkbox" id="juices">
                        <label for="juices">      Fruit juices------------------------------------------250 </label><br>
                        <input type="checkbox" id="cd">
                        <label for="cd">          Cold drink------------------------------------------100 </label><br><br>
                        <h4>Cake</h4>
                        <input type="checkbox" id="cake">
                        <label for="cake">     Customised Cake-----------------------------------250 </label><br><br>
  
                      </div>
                      
                      <div class="container checkb">
                      
                        <div class="btn btn-warning py-2 mt-2" id="select" type="submit">Select</div>
                        
                      </div>
                    </div>
                 
                    <div class="col-md-5 i-card">
                      <img src="./images/menu/m3.jpg" height="650" width="500"  alt="decor">
                    </div>
                  </div>

          </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
        </div>

    </div>
  </div>

    
</body>
</html>