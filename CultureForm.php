<?php
  session_start();

  if (!isset($_SESSION['username5'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: Culturelogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username5']);
  	header("location: Culturelogin.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Culturestyle.css">
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
                <h2 class="text-center font-weight-light">Culture Club</h2>
                <p>The Computer Club is an educational and fun group. Our purpose is to learn more about computers. The club explores both computer architecture and new application software.</p>
            </div>
        </div>
    </div>
    <div class="text-center display-4 my-3">
        <?php  if (isset($_SESSION['username5'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username5']; ?></strong></p>

        <?php endif ?>
    </div>

    <h2 class="font-weight-light text-center">Events: </h2>
    <div class="container">
        <div class="row">

            <div class="col-lg-4">

                <div class="card mt-3 border border-primary btn btn-outline-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Oracle apex training online</h5>
                        <h6 class="card-subheader mb-2 text-muted">Oracle</h6>
                        <p class="card-text">Seminars, Hobbies & Interest, Technical, Entrepreneurship, Online Events, Workshop, Management, Alumni, Cultural, Concert, Sports</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="card mt-3 border border-primary btn btn-outline-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">200 Hour Yoga</h5>
                        <h6 class="card-subheader mb-2 text-muted">Yoga</h6>
                        <p class="card-text"> Description Since its inception in 2012, NASA's International Space Apps Challenge has become the world's largest global hackathon, engaging thousand</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="card mt-3 border border-primary btn btn-outline-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Yoga Teacher Training</h5>
                        <h6 class="card-subheader mb-2 text-muted">Yoga</h6>
                        <p class="card-text">NASA International Space Apps Challenge is annual NASA's global hackathon, first held in April 2012, and serves as innovation</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around my-4">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                View Club
            </button>
             <a class="btn btn-danger ml-5" href="Academicclub.php?logout='1'">Logout</a>
        <div>
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
                                $conn=mysqli_connect('localhost','root','','culture_club');
                                    $query = " SELECT * FROM culture";
                                    $result=mysqli_query($conn,$query);
                                    if ($result->num_rows > 0) {
                                    echo "<table>
                                    <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    </th><th>Positon</th>
                                    </tr>";
                                    while ($row=mysqli_fetch_array($result)){
	
 
                                    echo "<tr><td>" . $row['username5'],"</td><td>"," " . $row['email5'],"</td><td>"," ".$row['Position']."</td></tr>";

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
