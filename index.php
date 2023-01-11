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
<style>
/* Float four columns side by side */
.column {
    float: left;
    width: 25%;
    padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {
    margin: 0 -10px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
        display: block;
        margin-bottom: 50px;
    }
}

/* Style the counter cards */
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 50px;
    text-align: center;
    background-color: #f1f1f1;
}
</style>

<body>

    <?php include './includes/_dbconnect.php'; ?>

    <!-- NAVBAR -->
    <?php  include './includes/_navbar.php';  ?>


    <a href="./make_your_category.php"><button class="btn primary"
        





    <!-- fetch from database -->
    <?php

        $sql = 'SELECT * FROM category';
        $result = mysqli_query($conn  , $sql);


        while($data = mysqli_fetch_assoc($result))
        {
          // .$data['category_description'].
          // '.$data['category_name'].
          // cards
          $id = $data['Serial_No'];
          echo '
       
          <div class="column align-items-center justify-content-center mb-5 mt-5 ml-5">
          <div class="card">
              <h3>Card 1</h3>
              <p>Some text</p>
              <p>Some text</p>
          </div>
          </div> 
          

      
          ';
        }


      
    ?>

    <!-- <div class="row">
        <div class="column">
            <div class="card">
                <h3>Card 1</h3>
                <p>Some text</p>
                <p>Some text</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <h3>Card 1</h3>
                <p>Some text</p>
                <p>Some text</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <h3>Card 1</h3>
                <p>Some text</p>
                <p>Some text</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <h3>Card 1</h3>
                <p>Some text</p>
                <p>Some text</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <h3>Card 1</h3>
                <p>Some text</p>
                <p>Some text</p>
            </div>
        </div>
    </div> -->

    <!-- style="float:right; margin-right:10px; margin-top:10px">Make your Own Category</button></a>   -->
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