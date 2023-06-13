<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admindashboard</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<link rel="stylesheet" href="finalproject.css">
<link rel="stylesheet" href="icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==">
<body>
    <style>
        body{
    background-color: rgb(223, 241, 231);
}
    </style>
    
</head>

<body>




   <!--to seperate Sidebar and Main -->
   <div class="container-fluid sticky-top" >
    <div class="row g-0">
        <nav class="col-2  pe-3 sticky-top" style="background-color: white;">

    <h1 class="h4 py-3 text-center">
        <i class="fas fa-ghost me-2"></i>
        <span class="d-none d-lg-inline" style="color: rgba(121, 157, 138, 0.722);">
            Ghost Admin
        </span>
        
    </h1> 
    <!--Showing Menu Item using List Group-->
    <div class="list-group text-center text-lg-start">
        <span class="list-group-item disabled d-none d-lg-block">
            <small style="color: rgba(121, 157, 138, 0.722);" >
                Menus
            </small>
        </span>

        <!--Link to another page-->
        <a href="./Faddmenu.php" class="list-group-item list-group-item-action" style="color: rgb(223, 241, 231);">
            <i class="fas fa-cake"></i>
            <span class="d-none d-lg-inline" style="color: rgba(121, 157, 138, 0.722);" >Add New Menu</span>
        </a>
        <!--Link to another page-->
        <a href="#" class="list-group-item list-group-item-action">
        <i class="fas fa-cake"></i>
            <span class="d-none d-lg-inline" style="color:  rgba(121, 157, 138, 0.722);" id="retrieveMenu">View Menu</span>
            <span class="d-none d-lg-inline badge bg-danger rousnded-pill float-end" style="color: white;">20</span>
        </a>
          <!--Link to another page-->
          <a href="#" class="list-group-item list-group-item-action">
          <i class="fas fa-trash"></i>
            <span class="d-none d-lg-inline" style="color: rgba(121, 157, 138, 0.722);" id="DeleteM" >Delete Menu</span>
          </a>

          <!--Link to another page-->
          <a href="#" class="list-group-item list-group-item-action">
            <i class="fas fa-edit"></i>
            <span class="d-none d-lg-inline" style="color: rgba(121, 157, 138, 0.722);">Update Menu</span>
          </a>
    </div>
    <!--ACtion part-->
    <div class="list-group mt-4 text-center text-lg-start">
        <span class="list-group-item disabled d-none d-lg-block">
            <small style="color: rgba(121, 157, 138, 0.722);">Users</small>
        </span>
         <!--Link to another page-->
        <a href="#" class="list-group-item list-group-item-action" id="viewuser">
        <i class="fas fa-users" ></i>
            <span class="d-none d-lg-inline" style="color: rgba(121, 157, 138, 0.722);" id="ViewUser">View Users</span>
        </a>
         <!--Link to another page-->
         <a href="#" class="list-group-item list-group-item-action">
            <i class="fas fa-search"></i>
            <span class="d-none d-lg-inline" style="color: rgba(121, 157, 138, 0.722);">Search Users</span>
         </a>
         <!--Link to another page-->
         <a href="#" class="list-group-item list-group-item-action">
            <i class="fas fa-trash"></i>
            <span class="d-none d-lg-inline" style="color: rgba(121, 157, 138, 0.722);">Delete Users</span>
         </a>
         <!--Link to another page-->
         <a href="#" class="list-group-item list-group-item-action">
            <i class="fas fa-edit"></i>
            <span class="d-none d-lg-inline" style="color: rgba(121, 157, 138, 0.722);">Edit Users</span>
         </a>
    </div>
    
    <!--ACtion part-->
    <div class="list-group mt-4 text-center text-lg-start">
        <span class="list-group-item disabled d-none d-lg-block">
            <small style="color: rgba(121, 157, 138, 0.722);">Orders</small>
        </span>
         <!--Link to another page-->
        <a href="#" class="list-group-item list-group-item-action" id="viewuser">
        <i class="fas fa-users" ></i>
            <span class="d-none d-lg-inline" style="color: rgba(121, 157, 138, 0.722);" id="ViewUser">View Order</span>
        </a>
         <!--Link to another page-->
         <a href="#" class="list-group-item list-group-item-action">
            <i class="fas fa-search"></i>
            <span class="d-none d-lg-inline" style="color: rgba(121, 157, 138, 0.722);">Delete Orders</span>
         </a>
         <!--Link to another page-->
         <a href="#" class="list-group-item list-group-item-action">
            <i class="fas fa-trash"></i>
            <span class="d-none d-lg-inline" style="color: rgba(121, 157, 138, 0.722);">Edit Orders</span>
         </a>
    </div>
    


        </nav>
        
        
<main class="col-10"   >

       
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-light">
        <div class="container-fluid">
            <div class="flex-fill"></div>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fas fa-user-circle"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="#" class="dropdown-item">User Profile</a>
                        </li>
                        <li>
                            <a href="./flogout.php" class="dropdown-item">Logout</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-cog"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!---COnatiner-->
    <div class="col-13" id="dataContainer" style="background-color: rgba(121, 157, 138, 0.722); border-radius: 0;" >
    <script>
        //View Menu
        $(document).ready(function() {
            $("#retrieveMenu").click(function() {
                $.ajax({
                    url: "FoodMenu.php",
                    type: "GET",
                    success: function(response) {
                        $("#dataContainer").html(response);
                    }
                });
            });
        });

        //View Menu
        $(document).ready(function() {
            $("#ViewUser").click(function() {
                $.ajax({
                    url: "Fviewuser.php",
                    type: "GET",
                    success: function(response) {
                        $("#dataContainer").html(response);
                    }
                });
            });
        });



        //Deleting Menu from table
        
        $(document).ready(function() {
            document.addEventListener("DOMContentLoaded", function() {
            // Event listener for row selection
            var table = document.querySelector("table");
            var tbody = table.querySelector("tbody");
            
            tbody.addEventListener("click", function(event) {
                var target = event.target;
                if (target.tagName === "TD") {
                    var row = target.parentNode;
                    row.classList.toggle("selected");
                }
            });
        });
           
            
            // Event listener for delete button
            $("#DeleteM").click(function() {
                var selectedRowId = $("input[ID='rowId']:checked").val();

                if (selectedRowId) {
                    $.ajax({
                        url: "FDeleteMenu.php",
                        type: "POST",
                        data: { rowId: selectedRowId },
                        success: function(response) {
                            alert("Row deleted successfully!");
                            // Fetch updated table data after deletion
                            fetchTableData();
                        }
                    });
                } else {
                    alert("Please select a row to delete.");
                }
            });
        });
   

    </script>
   
</div>


</main>

    </div>
   </div>
    
    
</body>


</html>