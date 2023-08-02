
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    

</head>
<body>
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-expand-sm navbar-light bg-white fixed-top" style="position: fixed;">
        <div class="col-2 ">
            <div class="navbar-brand"  href="#">
                <a href="javascript:void(0);" onclick="openNav()" class="link-dark"><i class="fas fa-bars fa-lg fa-fw me-4"></i></a><a href="index.php" style="text-decoration: none;" class="link-dark fs-10">LMS</a>
            </div>
        </div>
        <div class="col-10"></div>
        
    </nav>
    <ul style="list-style-type: none;">
    <div id="mySidebar" class="sidebar">
        <div class="list-group list-group-flush mx-3 mt-4 ">
          <li>
            <a href="index.php?page=student" class="list-group-item list-group-item-action py-4 ripple d-flex" aria-current="true">
                <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Dashboard</span>
            </a>
          </li>
          <li>
            <a href="index.php?page=home" class="list-group-item list-group-item-action py-4 d-flex">
                <i class="fas fa-home fa-fw me-3"></i><span>Home</span>
            </a>
          </li>
          
            <li>
                <a href="index.php?page=course" class="list-group-item list-group-item-action py-4 ripple d-flex ">
                    <i class='fas fa-graduation-cap fa-fw me-3'></i><span>Course</span>
                </a>
            </li>
         
        </div>
    
    </div>
    </ul>

    

    <!-- show the all contents  on this division -->
    <div id="main">

    <?php
        // Check if 'page' parameter is set in the URL
        if (isset($_GET['page'])) {
            $page = $_GET['page'];

            // Data to be passed to content pages
            $data = "Hello, this is some data passed from the main page.";

            // Map the 'page' parameter to the appropriate file
            switch ($page) {
                case 'student':
                    include('teacher-dashboard.php');
                    break;
                case 'home':
                    include('home.php');
                    break;
                case 'course':
                    include('course.php');
                    break;
                case 'enroll':
                    include('course_enroll.php');
                    break;    
                default:
                    echo 'Page not found';
                    break;
            }
        } else {
            // Default to home page if no 'page' parameter is set
            include('teacher-dashboard.php');
        }
        ?>
    
    </div>
    
    
<script>
    var sidebar = document.getElementById("mySidebar");
    var main = document.getElementById("main");
    function openNav() {
        if(sidebar.style.width != "0px"){
            document.getElementById("mySidebar").style.width = "0px";
            document.getElementById("main").style.marginLeft = "0px";
        }else if(window.matchMedia("(max-width: 667.91px)").matches){
            document.getElementById("mySidebar").style.width = "250px";
        }    
        else{ 
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft= "250px";
        }
        
    }

    $(document).ready(function(){
        $('ul li a').click(function(){
            $('li a').removeClass("active");
            $(this).addClass("active");
        });
    });
</script>
      
</body>


</html>