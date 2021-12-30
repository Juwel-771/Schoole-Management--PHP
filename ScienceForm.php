<?php
  session_start();

  if (!isset($_SESSION['username4'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: Sciencelogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username4']);
  	header("location: Sciencelogin.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="Sciencestyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        table,
        th,
        td {

            text-align: center;
            margin-left: auto;
            margin-right: auto;

        }

        table {
            width: 100%;
        }

        th {
            height: 70px;
        }
    </style>
</head>
<body>

<div class="container">
        <div class="row">
            <div class="col mt-5">
                <h2 class="text-center font-weight-light">Science Club</h2>
                <p>In physics, and in particular relativity, an event is the instantaneous physical situation or occurrence associated with a point in spacetime (that is, a specific place and time). 
                For example, a glass breaking on the floor is an event; it occurs at a unique place and a unique time.</p>
            </div>
        </div>
    </div>
    <div class="text-center display-4 my-3">
        <?php  if (isset($_SESSION['username4'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username4']; ?></strong></p>

        <?php endif ?>
    </div>

    <h2 class="font-weight-light text-center">Events: </h2>
    <div class="container">
        <div class="row">

            <div class="col-lg-4">

                <div class="card mt-3 border border-primary btn btn-outline-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Techno-Mela</h5>
                        <h6 class="card-subheader mb-2 text-muted">Public events </h6>
                        <p class="card-text">We are organizing a one-day event to celebrate India's National Science Day. Program: Inter-school competition on Science Challenges/Maths Puzzles. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="card mt-3 border border-primary btn btn-outline-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">OASIS- BITS Pilan</h5>
                        <h6 class="card-subheader mb-2 text-muted">Public events</h6>
                        <p class="card-text">When developing your business name, it’s useful to do a competitor analysis. Dissect and understand why their business name works for them and how you can use those techniques in your own business name.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="card mt-3 border border-primary btn btn-outline-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Alcherinnga-IIT Guwahati</h5>
                        <h6 class="card-subheader mb-2 text-muted">Public events</h6>
                        <p class="card-text">When deciding on the perfect business name, don’t forget to get feedback on your ideas from potential customers! Be sure to ask questions like. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around my-4">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                View Club
            </button>
             <a class="btn btn-danger ml-5" href="Academicclub.php?logout='1'">Logout</a>
        </div>
        <div>
            <div class="modal fade" id="exampleModal" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="exampleModalLabel">Club Member</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php
                                $conn=mysqli_connect('localhost','root','','science_club');
                                    $query = " SELECT * FROM science";
                                    $result=mysqli_query($conn,$query);
                                    if ($result->num_rows > 0) {
                                    echo "<table>
                                    <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    </th><th>Positon</th>
                                    </tr>";
                                    while ($row=mysqli_fetch_array($result)){
	
 
                                    echo "<tr><td>" . $row['username4'],"</td><td>"," " . $row['email4'],"</td><td>"," ".$row['Position']."</td></tr>";

                                }
                                    echo "</table>";
                                } else {
                                        echo "0 results";
                                }

                                ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
