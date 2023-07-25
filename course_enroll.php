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
<?php
if (isset($_GET['id'])) {
    $id = urldecode($_GET['id']);
    $name = urldecode($_GET['name']);   
}
?>
    <div class="border m-5">
       <div class="row m-5">
            <h1 class="fs-normal text-secondary"><?=$id?> - <?=$name?></h1>
            <div class="d-inline"><a href="/">Dashboard</a><span> / </span><a href="index.php?page=home">Home</a><span> / <?=$id?></span></div> 
       </div>
    </div>
    
    <div class="border m-5 p-5">
          <h1 class="h2 fs-normal text-secondary">Enrolment options</h1>
          <div class="p-5 h3 fs-normal text-secondary">
            <i class='fas fa-volleyball-ball fa-fw me-3' style='font-size:24px'></i><span><?=$id?> - <?=$name?></span>
            <div class="">
              <img src="images/images (1).jpeg" class="card-img m-5" style="height: 100px; width:150px" alt="...">
            </div>  
            <span class="h4">Lecture - Mr. ...........</span>          
          </div>
          <div class="d-flex justify-content-center"><a href="#" class="btn btn-primary" style="width: 120px;">Enroll</a></div>
            
    </div>
</body>
</html>