

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="css/a1.scss">
</head>

<body>

    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <div class="row ms-3 me-5">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="row border m-3 p-4">
                        <div class="row">
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <h1 class="h4 mt-4 text-secondary"></h1>
                                <div>
                                    <a href="#" id="backBtn" class="d-none d-sm-inline-block btn btn-sm bg-primary shadow-sm">
                                        <i class='fa fa-arrow-left'></i></a>
                                    <a href="#" id="nextBtn" class="d-none d-sm-inline-block btn btn-sm bg-primary shadow-sm">
                                        <i class='fa fa-arrow-right'></i></a>                     
                                </div>
                            </div>
                        </div>
                        <div class="recently p-4">
                            <!-- course get into the student-dashboard -->
                                <a href="index.php?page=course?>" style="text-decoration:none;" class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 text-secondary">
                                    <div class="card px-5 pt-5">
                                        <div class="card-title fw-bold">Courese Id - Course Name</div>                                        
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold" style="font-size: 12px;">Total Student - <span class="fw-light">200</span></h5>
                                            <h5 class="card-title fw-bold" style="font-size: 12px;">Active Students</h5>
                                            <div class="row" style="font-size: 12px;">
                                                <div class="col-4 text-center" >Monthly</div>
                                                <div class="col-4 text-center">Weekly</div>
                                                <div class="col-4 text-center">Daily</div>
                                            </div>
                                            <div class="row" style="font-size: 12px;">
                                                <div class="col-4 text-success text-center" >10%</div>
                                                <div class="col-4 text-danger text-center">11%</div>
                                                <div class="col-4 text-success text-center">7%</div>
                                            </div>
                                            <h5 class="card-title" style="font-size: 10px;">50% complete</h5>
                                            <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 50%"></div>
                                            </div>
                                         </div>
                                    </div>
                                </a>
                                <a href="index.php?page=course?>" style="text-decoration:none;" class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 text-secondary">
                                    <div class="card px-5 pt-5">
                                        <div class="card-title fw-bold">Courese Id - Course Name</div>                                        
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold" style="font-size: 12px;">Total Student - <span class="fw-light">200</span></h5>
                                            <h5 class="card-title fw-bold" style="font-size: 12px;">Active Students</h5>
                                            <div class="row" style="font-size: 12px;">
                                                <div class="col-4 text-center" >Monthly</div>
                                                <div class="col-4 text-center">Weekly</div>
                                                <div class="col-4 text-center">Daily</div>
                                            </div>
                                            <div class="row" style="font-size: 12px;">
                                                <div class="col-4 text-success text-center" >10%</div>
                                                <div class="col-4 text-danger text-center">11%</div>
                                                <div class="col-4 text-success text-center">7%</div>
                                            </div>
                                            <h5 class="card-title" style="font-size: 10px;">50% complete</h5>
                                            <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 50%"></div>
                                            </div>
                                         </div>
                                    </div>
                                </a>
                                <a href="index.php?page=course?>" style="text-decoration:none;" class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 text-secondary">
                                    <div class="card px-5 pt-5">
                                        <div class="card-title fw-bold">Courese Id - Course Name</div>                                        
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold" style="font-size: 12px;">Total Student - <span class="fw-light">200</span></h5>
                                            <h5 class="card-title fw-bold" style="font-size: 12px;">Active Students</h5>
                                            <div class="row" style="font-size: 12px;">
                                                <div class="col-4 text-center" >Monthly</div>
                                                <div class="col-4 text-center">Weekly</div>
                                                <div class="col-4 text-center">Daily</div>
                                            </div>
                                            <div class="row" style="font-size: 12px;">
                                                <div class="col-4 text-success text-center" >10%</div>
                                                <div class="col-4 text-danger text-center">11%</div>
                                                <div class="col-4 text-success text-center">7%</div>
                                            </div>
                                            <h5 class="card-title" style="font-size: 10px;">50% complete</h5>
                                            <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 50%"></div>
                                            </div>
                                         </div>
                                    </div>
                                </a>
                          
                            
                        </div>
                    </div>
                </div>
                
            </div>

                
           
            
        </div>
        <div class="row row ms-3 me-4 my-2" >
                    <div class="col-8">
                    <div class="row border m-1 p-4">
                        <h1 class="h4 my-5 text-secondary">Grade students by subjects</h1>

                        <div class="row">
                            <div class="col-2 text-center">
                                Course No 01
                            </div>
                            <div class="col-10">
                                <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 50%; background-color: red;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 text-center">
                                Course No 02
                            </div>
                            <div class="col-10">
                                <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 50%; background-color: blue;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 text-center">
                                Course No 03
                            </div>
                            <div class="col-10">
                                <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 50%; background-color: green;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 text-center">
                                Course No 04
                            </div>
                            <div class="col-10">
                                <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 50%; background-color: yellow;"></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    </div>
                    <div class="col-4">
                    <div class="row border text-secondary">
                        <h1 class="h4 text-center pt-5">Create a Course</h1>
                        <div class="text-center" style="padding:0px; font-size:150px">+</div>
                    </div>
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