<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="css/a1.scss">
</head>

<body>

    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between m-4">
            <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="row">
                    <div class="row border m-3 p-4">
                        <div class="row">
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <h1 class="h4 mt-4 text-secondary">Recently accessed cources</h1>
                                <div>
                                    <a href="#" id="backBtn" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                        <i class='fa fa-arrow-left'></i></a>
                                    <a href="#" id="nextBtn" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                        <i class='fa fa-arrow-right'></i></a>                     
                                </div>
                            </div>
                        </div>
                        <div class="recently p-4">
                            <!-- course get into the student-dashboard -->
                            <?php include 'db-conn.php'; $result = $conn->query("SELECT * FROM courses") or die($conn->$query);?>
                            <?php while($row=$result->fetch_assoc()):?>
                            <a href="/courses" style="text-decoration:none;" class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 text-secondary">
                                <div class="card">
                                    <img src="images/images (1).jpeg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $row['id'].' - '.$row['name']?></h5>
                                    </div>
                                </div>
                            </a>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row border m-3 p-4">
                        <h1 class="h4 mt-4 text-secondary">Cource overview</h1>
                        <div class="p-4">
                            <div class="col-md-6 col-sm-12 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <img src="images/images (1).jpeg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Semester</h5>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <img src="images/images (1).jpeg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Semester</h5>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <img src="images/images (1).jpeg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Semester</h5>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <img src="images/images (1).jpeg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Semester</h5>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <img src="images/images (1).jpeg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Semester</h5>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
           
            <div class="col-lg-4 col-md-0 col-sm-0">
                <div class="row border m-3 p-3">
                    <h1 class="h4 my-2 text-secondary">Upcomming activities</h1>
                    <div class="activities p-4" style="height: 300px;">                    
                    <div class="card mb-4" >
                        <div class="card-header">
                            First Mock Exam - Subject 01
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">start time for MOck Exam</li> 
                            <li class="list-group-item">Description</li>     
                        </ul>
                    </div>
                    <div class="card mb-4" >
                        <div class="card-header">
                            First Mock Exam - Subject 01
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">start time for MOck Exam</li> 
                            <li class="list-group-item">Description</li>     
                        </ul>
                    </div>
                    <div class="card mb-4" >
                        <div class="card-header">
                            First Mock Exam - Subject 01
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">start time for MOck Exam</li> 
                            <li class="list-group-item">Description</li>     
                        </ul>
                    </div>
                    
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                
            </div>
        </div>
    </div>


    <!-- recently access cource scrolling -->
    <script>
        let scrollContainer = document.querySelector(".recently");
        let nextBtn = document.getElementById("nextBtn");
        let backBtn = document.getElementById("backBtn");

        scrollContainer.addEventListener("wheel", (evt) => {
            evt.preventDefault();
            scrollContainer.scrollLeft += evt.deltaY;
        });

        nextBtn.addEventListener("click", () => {
            scrollContainer.style.scrollBehavior = "smooth";
            scrollContainer.scrollLeft += 200;
        });


        backBtn.addEventListener("click", () => {
            scrollContainer.style.scrollBehavior = "smooth";
            scrollContainer.scrollLeft -= 200;
        });
    </script>
</body>
<script src="/js/router.js"></script>
</html>