<?php


  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $name = $des = "";
    include './includes/_dbconnect.php';
    $name = $_POST['catname'];
    $des = $_POST['catdes'];

    $sql = "INSERT INTO `category` (`category_name`, `category_description`) VALUES ('$name', '$des');";
    $result = mysqli_query($conn , $sql);
    if($result == true)
    {
      header("Location: index.php");
    }
    else
    {
      echo "your request cant be processed";
    }
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>


    <div class="container">
        <form style="margin-top: 20px;" action="./make_your_category.php" method="post">

            <div class="form-group">

                <input type="text" name="catname" class="form-control mt-10" id="exampleInputPassword1"
                    placeholder="Category Name">
            </div>
            <div class="form-floating">
                <textarea class="form-control" name="catdes" placeholder="Describe your category" id="floatingTextarea2"
                    style="height: 100px"></textarea>

            </div>
            <button type="submit" class="btn btn-primary mt-10" style="margin-top: 10px;">Submit</button>
        </form>
    </div>


</body>

</html>