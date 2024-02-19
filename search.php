<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <title></title>
  </head>
  <body>

  <?php include('header.html');?>
</br>

  <style>

body {
    background-image: linear-gradient(45deg,#05061b,#59e4ee);
    height: 100vh;
    width: 100%;
    background-size: cover;
    margin: 0;
    padding: 0;
    font-family: 'Roboto', serif;
    text-align: center;
}

    h4{
        color:white;
        background-color: black;
        padding: 5px;
        border-radius: 5px;
        border-style: inherit;
    }

    .card-body{
        background-color: black;
        border-radius: 6px;
    }


  </style>

    <div class="container">
    <div class="d-flex align-content-end flex-wrap">...</div>
        <div class="row justify-content-center">
            <div class="col-md-9 text-center">
                <div class="card mt-4 text-center">
                    <div class="card-header">
                        <h4>Search Students Name</h4>
                    </div>
                    <div class="card-body">
                        <div class"row">
                            <div class="col-md-10">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" class="form-control" placeholder="Search Data">
                                        <button type="submit" class="btn btn-danger">Search</button>
                                        <button style="border-radius: 4px;border-color: #ab9090; padding: 5px 0px;font-size: 16px;"><a href="index.php" style="text-decoration: none;cursor: default;    padding: 5px 15px; color: black;">Back</a></button>


                                     </div>
                                 </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4 text-center">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>First Grading</th>
                                    <th>Second Grading</th>
                                    <th>Third Grading</th>
                                    <th>Fourth Grading</th>
                                    <th>Final Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                                    $con = mysqli_connect("localhost","root","","grading_system");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM records WHERE CONCAT(firstname,lastname,first_grading,second_grading,third_grading,fourth_grading,final_grade) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $items['id'];?></td>
                                                        <td><?php echo $items['firstname'];?></td>
                                                        <td><?php echo $items['lastname'];?></td>
                                                        <td><?php echo $items['first_grading'];?></td>
                                                        <td><?php echo $items['second_grading'];?></td>
                                                        <td><?php echo $items['third_grading'];?></td>
                                                        <td><?php echo $items['fourth_grading'];?></td>
                                                        <td><?php echo $items['final_grade'];?></td>
                                                    </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="8">No Record Found</td>
                                                </tr>

                                            <?php
                                        }
                                    }

                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
  </body>
</html>