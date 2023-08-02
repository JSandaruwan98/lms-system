
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
    $date = date('Y-m-d H:i:s');
    include 'db-conn.php'; $result = $conn->query("UPDATE courses SET access_time= '$date' WHERE course_id = '$id'") or die($conn->$query);
   
}
?>
    <div class="border m-5">
       <div class="row m-5">
            <h1 class="fs-normal text-secondary"><?=$id?> - <?=$name?></h1>
            <div class="d-inline"><a href="/">Dashboard</a><span> / </span><a href="index.php?page=home">Home</a><span> / Course Code</span></div> 
       </div>
    </div>
    
    <div class="border m-5">
        <div class="row m-5">
            <div class="d-flex"><h1 class="h4 fs-normal text-secondary me-2">Announcement</h1><i class='far fa-comment-alt fs-normal text-secondary' style="font-size: 20px;"></i></div>
        </div>
        <hr class="mx-5">
        <div class="row m-5">
            <h1 class="h3 fs-normal text-secondary">Topic 1</h1>
            <ul class="p-5" style="list-style-type: none;">
                <li>...</li>
                <li>...</li>
            </ul>
        </div>  
        <hr class="mx-5">
        <div class="row m-5">
            <h1 class="h3 fs-normal text-secondary">Topic 2</h1>
            <ul class="p-5" style="list-style-type: none;">
                <li>...</li>
                <li>...</li>
            </ul>
        </div>    
        <hr class="mx-5">
        <div class="row m-5">
            <h1 class="h3 fs-normal text-secondary">Topic 3</h1>
            <ul class="p-5" style="list-style-type: none;">
                <li>...</li>
                <li>...</li>
            </ul>
        </div>  
    </div>
  
</body>
</html>