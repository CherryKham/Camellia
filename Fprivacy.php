<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOODMENU
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>DISPLAY</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="F.js"></script>
   <link rel="stylesheet" href="finalproject.css">
   <link rel="stylesheet" href="icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    body{
background-color: rgb(221, 204, 238);
}
#detail{
 
  border-radius: 0;
  
}
#Name{
  border-radius: 0;

}
:root {
      --primary-color: rgb(221, 204, 238);
      --box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
      --text-color: rgb(75, 7, 138);
    }

    html {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: var(--primary-color);
      color: var(--text-color);
      min-height: 100vh;
    }

    ul {
      list-style: none;
    }

    ul a {
      text-decoration: none;
      color: var(--text-color);
    }

    .search__drop__down__container,
    .search__drop__down__container__desktop {
      transform: scale(0) !important;
      transform-origin: left top !important;
      transition: transform 0.5s;
    }

    .active.search__drop__down__container,
    .active.search__drop__down__container__desktop {
      transform: scale(1) !important;
    }

    .searchIconNavbar {
      transition: background 500ms;
    }

    .searchIconNavbar:hover {
      background-color: var(--primary-color);
      color: white;
    }

    .tags {
      font-size: 12px !important;
    }

</style>
<body>
    <!-- Navbar -->
  <nav class="navbar navbar-expand-md bg-body-tertiary border-bottom border-secondary">
    <div class="container-fluid px-5">
      <a class="navbar-brand" href="/"><img class="conten" src="./img/C1.webp" alt="" style="width: 40px; height: 40px; border-radius: 1cm;">Camellia</a>
     
      <div class="d-block d-md-none ms-auto me-2 d-md-none">
        <div class="nav-link" style="cursor: pointer" id="searchBtn">
          <i class="border rounded searchIconNavbar fa-solid fa-magnifying-glass" style="padding: 10px"></i>
        </div>
        <div class="rounded w-90 position-absolute search__drop__down__container" style="
              background: var(--primary-color);
              box-shadow: var(--box-shadow);
              top: 60px;
              left: 20px;
              z-index: 3;
            ">
          <div class="p-1 ps-2 search__drop__down__header" style="
                color: rgb(75, 7, 138);
                border-bottom: 1px solid rgb(74, 7, 138);
              ">
            Search
          </div>
          <div class="p-2 d-flex gap-2">
            <input type="text" class="form-control border" placeholder="Search..." style="background-color: #f4f4f4" />
            <span class="bg-white p-1 px-2 d-flex align-items-center rounded" style="
                  box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.5);
                  border: 1px solid var(--text-color);
                ">
              <i class="fa-solid fa-magnifying-glass" style="color: var(--text-color)"></i>
            </span>
          </div>
        </div>
      </div>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">



        <!--- Searchbar--->
        <ul class="navbar-nav align-items-center ms-auto">
        <li class="nav-item d-md-block d-none">
            <div class="nav-link" style="cursor: pointer" id="searchBtnDesktop">
              <i class="border p-2 rounded searchIconNavbar fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="rounded position-absolute search__drop__down__container__desktop" style="
                  background: var(--primary-color);
                  box-shadow: var(--box-shadow);
                  top: 80px;
                  right: 10px;
                ">
              <div class="p-1 ps-2 search__drop__down__header" style="
                    color: rgb(75, 7, 138);
                    border-bottom: 1px solid rgb(74, 7, 138);
                  ">
                Search
              </div>
              <div class="p-2 d-flex gap-2">
                <input type="text" class="form-control border" placeholder="Search..." style="background-color: #f4f4f4" />
                <span class="bg-white p-1 px-2 d-flex align-items-center rounded" style="
                      box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.5);
                      border: 1px solid var(--text-color);
                    ">
                  <i class="fa-solid fa-magnifying-glass" style="color: var(--text-color)"></i>
                </span>
              </div>
            </div>
          </li>
 
<!-- Home Section  -->

<div class="container-fluid px-5 d-flex align-items-center ">
      <div class="dropdown">
        <button class="dropdown-toggle btn btn-outline-none" type="button" data-bs-toggle="dropdown" aria-expanded="false">Filter</button>
        <ul class="dropdown-menu">
          <li class="dropdown-item">Genre 1</li>
          <li class="dropdown-item">Genre 2</li>
          <li class="dropdown-item">Genre 3</li>
        </ul>
      </div>
      <div class="dropdown">
        <button class="dropdown-toggle btn btn-outline-none" type="button" data-bs-toggle="dropdown" aria-expanded="false">Sort</button>
        <ul class="dropdown-menu">
          <li class="dropdown-item">Sorting 1</li>
          <li class="dropdown-item">Sorting 2</li>
        </ul>
      </div>
    </div>
          <!--Setting icon-->
          <li class="nav-item d-md-block d-none">
            <div class="nav-link dropdown">
              <button class="btn border dropdown-toggle p-0 px-2 py-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user"></i>
              </button>
              <ul class="dropdown-menu" style="background-color: #f4f4f4">
                <li>
                  <a class="dropdown-item" href="views/profile.view.php">My Profile</a>
                </li>
                <li>
                  <a class="dropdown-item" href="finallReg.php">Registration</a>
                </li>
                <li><a class="dropdown-item" href="views/setting.view.php">Setting</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
              </ul>
            </div>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>
    <br>

  <div class="menu">
    <div class="row g-0">
      <!-- single Menu  -->
      <div class="col-lg-3 col-md-6 col-12 self-center border p-4" id="detail">
        <a href="Fooddetail.php" class="mx-auto mb-4 text-decoration-none d-block" style="width: 160px; height: 200px; background: white; cursor: pointer;"></a>
        <!-- tags  -->
        <div class="d-flex gap-2">
          <div class="tags" name="type" for="type" id="type" style="border: 1px solid; border-radius: 10px;padding: 2px 5px;">Soft Drink</div>
        </div>
        <!-- Menu detail  -->
        <div class="border-top mt-3 pt-3 d-flex justify-content-between" id="Name">
          <div>
            <h4 class="">Name</h4>
            <div style="display:flexbox">
            <span class="">Price</span>
            <button class="button" onclick="myFunction()">Order</button>

<script>
    // JavaScript function to go to order
    function myFunction() {
        
      window.location.href="fooddetail.php";
    }
</script>
    
            </div>
          </div>
        </div>
      </div>
       <!-- single Menu  -->
       <div class="col-lg-3 col-md-6 col-12 self-center border p-4" id="detail">
        <a href="Fooddetail.php" class="mx-auto mb-4 text-decoration-none d-block" style="width: 160px; height: 200px; background: white; cursor: pointer;"></a>
        <!-- tags  -->
        <div class="d-flex gap-2">
          <div class="tags" name="type" for="type" id="type" style="border: 1px solid; border-radius: 10px;padding: 2px 5px;">Cake</div>
        </div>
        <!-- Menu detail  -->
        <div class="border-top mt-3 pt-3 d-flex justify-content-between" id="Name">
          <div>
            <h4 class="">Name</h4>
            <span class="">Price</span>
          </div>
        </div>
      </div>
      <!-- single Menu  -->
      <div class="col-lg-3 col-md-6 col-12 self-center border p-4" id="detail">
        <a href="Fooddetail.php" class="mx-auto mb-4 text-decoration-none d-block" style="width: 160px; height: 200px; background: white; cursor: pointer;"></a>
        <!-- tags  -->
        <div class="d-flex gap-2">
          <div class="tags" name="type" for="type" id="type" style="border: 1px solid; border-radius: 10px;padding: 2px 5px;">Cake</div>
        </div>
        <!-- Menu detail  -->
        <div class="border-top mt-3 pt-3 d-flex justify-content-between" id="Name">
          <div>
            <h4 class="">Name</h4>
            <span class="">Price</span>
          </div>
        </div>
      </div>
     <!-- single Menu  -->
     <div class="col-lg-3 col-md-6 col-12 self-center border p-4" id="detail">
        <a href="Fooddetail.php" class="mx-auto mb-4 text-decoration-none d-block" style="width: 160px; height: 200px; background: white; cursor: pointer;"></a>
        <!-- tags  -->
        <div class="d-flex gap-2">
          <div class="tags" name="type" for="type" id="type" style="border: 1px solid; border-radius: 10px;padding: 2px 5px;">Cake</div>
        </div>
        <!-- Menu detail  -->
        <div class="border-top mt-3 pt-3 d-flex justify-content-between" id="Name">
          <div>
            <h4 class="">Name</h4>
            <span class="">Price</span>
          </div>
        </div>
      </div>
      <!-- single Menu  -->
      <div class="col-lg-3 col-md-6 col-12 self-center border p-4" id="detail">
        <a href="Fooddetail.php" class="mx-auto mb-4 text-decoration-none d-block" style="width: 160px; height: 200px; background: white; cursor: pointer;"></a>
        <!-- tags  -->
        <div class="d-flex gap-2">
          <div class="tags" name="type" for="type" id="type" style="border: 1px solid; border-radius: 10px;padding: 2px 5px;">Beer</div>
        </div>
        <!-- Menu detail  -->
        <div class="border-top mt-3 pt-3 d-flex justify-content-between" id="Name">
          <div>
            <h4 class="">Name</h4>
            <span class="">Price</span>
          </div>
        </div>
      </div>
     <!-- single Menu  -->
     <div class="col-lg-3 col-md-6 col-12 self-center border p-4" id="detail">
        <a href="Fooddetail.php" class="mx-auto mb-4 text-decoration-none d-block" style="width: 160px; height: 200px; background: white; cursor: pointer;"></a>
        <!-- tags  -->
        <div class="d-flex gap-2">
          <div class="tags" name="type" for="type" id="type" style="border: 1px solid; border-radius: 10px;padding: 2px 5px;">Rice</div>
        </div>
        <!-- Menu detail  -->
        <div class="border-top mt-3 pt-3 d-flex justify-content-between" id="Name"> 
          <div>
            <h4 class="">Name</h4>
            <span class="">Price</span>
          </div>
        </div>
      </div>
      <!-- single Menu  -->
      <div class="col-lg-3 col-md-6 col-12 self-center border p-4" id="detail" >
        <a href="Fooddetail.php" class="mx-auto mb-4 text-decoration-none d-block" style="width: 160px; height: 200px; background: white; cursor: pointer;"></a>
        <!-- tags  -->
        <div class="d-flex gap-2">
          <div class="tags" name="type" for="type" id="type" style="border: 1px solid; border-radius: 10px;padding: 2px 5px;">Soup</div>
        </div>
        <!-- Menu detail  -->
        <div class="border-top mt-3 pt-3 d-flex justify-content-between" id="detail">
          <div>
            <h4 class="">Name</h4>
            <span class="">Price</span>
          </div>
        </div>
      </div>
     <!-- single Menu  -->
     <div class="col-lg-3 col-md-6 col-12 self-center border p-4" id="detail" >
        <a href="Fooddetail.php" class="mx-auto mb-4 text-decoration-none d-block" style="width: 160px; height: 200px; background: white; cursor: pointer;"></a>
        <!-- tags  -->
        <div class="d-flex gap-2">
          <div class="tags" name="type" for="type" id="type" style="border: 1px solid; border-radius: 10px;padding: 2px 5px;">Barbecue</div>
        </div>
        <!-- Menu detail  -->
        <div class="border-top mt-3 pt-3 d-flex justify-content-between" id="Name">
          <div>
            <h4 class="">Name</h4>
            <span class="">Price</span>
          </div>
        </div>
      </div>
     <!-- single Menu  -->
     <div class="col-lg-3 col-md-6 col-12 self-center border p-4" id="detail">
        <a href="Fooddetail.php" class="mx-auto mb-4 text-decoration-none d-block" style="width: 160px; height: 200px; background: white; cursor: pointer;"></a>
        <!-- tags  -->
        <div class="d-flex gap-2">
          <div class="tags" name="type" for="type" id="type" style="border: 1px solid; border-radius: 10px;padding: 2px 5px;">Noodle</div>
        </div>
        <!-- Menu detail  -->
        <div class="border-top mt-3 pt-3 d-flex justify-content-between"  id="Name">
          <div>
            <h4 class="">Name</h4>
            <span class="">Price</span>
          </div>
        </div>
      </div>
      <!-- single Menu  -->
     <!-- single Menu  -->
     <div class="col-lg-3 col-md-6 col-12 self-center border p-4" id="detail" ]>
        <a href="Fooddetail.php" class="mx-auto mb-4 text-decoration-none d-block" style="width: 160px; height: 200px; background: white; cursor: pointer;"></a>
        <!-- tags  -->
        <div class="d-flex gap-2">
          <div class="tags" name="type" for="type" id="type" style="border: 1px solid; border-radius: 10px;padding: 2px 5px;">Pizza</div>
        </div>
        <!-- Menu detail  -->
        <div class="border-top mt-3 pt-3 d-flex justify-content-between"  id="Name">
          <div>
            <h4 class="">Name</h4>
            <span class="">Price</span>
          </div>
        </div>
      </div>
      <!-- single Menu  -->
      <div class="col-lg-3 col-md-6 col-12 self-center border p-4" id="detail" >
        <a href="Fooddetail.php" class="mx-auto mb-4 text-decoration-none d-block" style="width: 160px; height: 200px; background: white; cursor: pointer;"></a>
        <!-- tags  -->
        <div class="d-flex gap-2">
          <div class="tags" name="type" for="type" id="type" style="border: 1px solid; border-radius: 10px;padding: 2px 5px;">Hambuger</div>
        </div>
        <!-- Menu detail  -->
        <div class="border-top mt-3 pt-3 d-flex justify-content-between"  id="Name">
          <div>
            <h4 class="">Name</h4>
            <span class="">Price</span>
          </div>
        </div>
      </div>
     <!-- single Menu  -->
     <div class="col-lg-3 col-md-6 col-12 self-center border p-4" id="detail" >
        <a href="Fooddetail.php" class="mx-auto mb-4 text-decoration-none d-block" style="width: 160px; height: 200px; background: white; cursor: pointer;"></a>
        <!-- tags  -->
        <div class="d-flex gap-2">
          <div class="tags" name="type" for="type" id="type" style="border: 1px solid; border-radius: 10px;padding: 2px 5px;">Cooktail</div>
        </div>
        <!-- Menu detail  -->
        <div class="border-top mt-3 pt-3 d-flex justify-content-between" id="Name">
          <div>
            <h4 class="">Name</h4>
            <span class="">Price</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid px-4 border-top py-4 d-flex justify-content-between align-items-center" id="detail">
    <div class="d-flex gap-3 align-items-center">
      <i class="fa-solid fa-arrow-left fs-2"></i>
      <h2 class="mt-1">Previous</h2>
    </div>
    <div>
      <h2>
        Page 1 - 2
      </h2>
    </div>
  </div>

  <!-- Footer  -->
  <div class="container-fluid px-4 border-top py-4" style="position: sticky; top: 100%" id="detail" >
    <div class="row g-0">
      <div class="col-lg-3 col-md-6 col-12">
        <ul>
          <li class="mb-2">
            <a href="#">Link 1</a>
          </li>
          <li class="mb-2">
            <a href="#">Link 2</a>
          </li>
          <li class="mb-2">
            <a href="#">Link 3</a>
          </li>
          <li class="mb-2">
            <a href="#">Link 4</a>
          </li>
          <li class="mb-2">
            <a href="#">Link 5</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <ul>
          <li class="mb-2">
            <a href="#">Link 1</a>
          </li>
          <li class="mb-2">
            <a href="#">Link 2</a>
          </li>
          <li class="mb-2">
            <a href="#">Link 3</a>
          </li>
          <li class="mb-2">
            <a href="#">Link 4</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <ul>
          <li class="mb-2">
            <a href="#">Link 1</a>
          </li>
          <li class="mb-2">
            <a href="#">Link 2</a>
          </li>
          <li class="mb-2">
            <a href="#">Link 3</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <ul>
          <li class="mb-2">
            <a href="#">Link 1</a>
          </li>
          <li class="mb-2">
            <a href="#">Link 2</a>
          </li>
          <li class="mb-2">
            <a href="#">Link 3</a>
          </li>
          <li class="mb-2">
            <a href="#">Link 4</a>
          </li>
          <li class="mb-2">
            <a href="#">Link 5</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  <script>
    const navSearchBtn = document.querySelector("#searchBtn");
    const navSearchBox = document.querySelector(
      ".search__drop__down__container"
    );

    const navSearchBtnDesktop = document.querySelector("#searchBtnDesktop");
    const navSearchBoxDesktop = document.querySelector(
      ".search__drop__down__container__desktop"
    );

    navSearchBtn.addEventListener("click", toggleNavSearchBox);
    navSearchBtnDesktop.addEventListener("click", toggleNavSearchBoxDesktop);

    function toggleNavSearchBox() {
      navSearchBox.classList.toggle("active");
    }

    function toggleNavSearchBoxDesktop() {
      navSearchBoxDesktop.classList.toggle("active");
    }
  </script>
</body>
</html>