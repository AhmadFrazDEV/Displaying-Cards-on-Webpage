<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Index Page</title>
</head>

<body>

    <?php include './includes/_dbconnect.php'; ?>

    <!-- NAVBAR -->
    <?php  include './includes/_navbar.php';  ?>
    <?php include './includes/_dbconnect.php';?>
    <?php 
        $id = $_GET['categoryids'];
        $sql = "SELECT * FROM category WHERE Serial_No = $id";
        $result = mysqli_query($conn , $sql);
        while($data = mysqli_fetch_assoc($result))
        {
            $catname = $data['category_name'];
            $catdes = $data['category_description'];
        }
    
    ?>


    <div class="container mt-5">
        <div class="alert alert-success " role="alert">
            <h4 class="alert-heading">Well done! ---- <?php echo $catname   ?> </h4>
            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit
                longer so that you can see how spacing within an alert works with this kind of content.</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
        </div>
    </div>


    <?php 
        $id = $_GET['categoryids'];
        $sql = "SELECT * FROM questions WHERE question_category = $id";
        $result = mysqli_query($conn , $sql);
        while($data = mysqli_fetch_assoc($result))
        {
            $que_title = $data['question_title'];
            $que_dec = $data['question_description'];
     

    //   <!-- Question box   -->

echo '
      <div class="container my-5">
      <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <h6 class="card-subtitle mb-2 text-muted">'.$que_title.'</h6>
    <p class="card-text">'. $que_dec . '</p>
      </div>
  </div>
</div>
';
}
    
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>




<!-- INSERT INTO `questions` (`question_id`, `question_title`, `question_description`, `question_category`, `question_user`) VALUES ('1', 'Enable to install pycharm', 'Hello viewer hope you will fine i want to ask something that my computer is enable to install git clone pycharm.', '1', 'Null'); -->