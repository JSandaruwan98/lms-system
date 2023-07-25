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
    <div class="border m-5">
       <div class="row m-5">
            <h1 class="fs-normal text-secondary text-center">Learning Management System - AU</h1>
       </div>
    </div>
    
    <div class="border m-5 p-5">
          <h1 class="h2 fs-normal text-secondary">Courses</h1>
          <br>
          <ul style="list-style-type:none;" class="me-4">
          <?php include 'db-conn.php'; $result = $conn->query("SELECT * FROM courses") or die($conn->$query);?>
          <?php while($row=$result->fetch_assoc()):?>
            <div class="text-decoration-none fs-2 row border p-5">
              <div class="col-6">
                <a href="index.php?page=enroll&id=<?=$row['course_id']?>&name=<?=$row['name']?>"><?=$row['course_id']?> - <?=$row['name']?></a>
              </div>
              <div class="col-6 d-flex justify-content-end">
                <input class="form-check-input" type="checkbox" checked>
              </div>
            
            </div>
            
           
            
          <?php endwhile; ?>
          </ul>
          
    </div>
</body>
</html>