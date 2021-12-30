<?php
  session_start();

  if (!isset($_SESSION['username6'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: Businesslogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username6']);
  	header("location: Businesslogin.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="Businessstyle.css">
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
                <h2 class="text-center font-weight-light">Business Club</h2>
                <p>A Charity is an organisation that exists to enable one group of people to help another.
                    It can sometimes be for animals or nature.
                    Many of the best known charities were set up by people who felt passionate about a situation that
                    they believed was wrong or preventable.</p>
            </div>
        </div>
    </div>
    <div class="text-center display-4 my-3">
        <?php  if (isset($_SESSION['username6'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username6']; ?></strong></p>

        <?php endif ?>
    </div>

    <h2 class="font-weight-light text-center">Events: </h2>
    <div class="container">
        <div class="row">

            <div class="col-lg-4">

                <div class="card mt-3 border border-primary btn btn-outline-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Tradeshow</h5>
                        <h6 class="card-subheader mb-2 text-muted">Tradeshow Commonly </h6>
                        <p class="card-text">A tradeshow is commonly seen as an event people go to show, display or exhibit products or services for public or private view.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="card mt-3 border border-primary btn btn-outline-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Product launch</h5>
                        <h6 class="card-subheader mb-2 text-muted">Product Show</h6>
                        <p class="card-text"> A product launch is a tool used as a way to build anticipation for a products release. These types of events are usually aimed towards retailers or dealers.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="card mt-3 border border-primary btn btn-outline-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Incentive travel</h5>
                        <h6 class="card-subheader mb-2 text-muted">Congress </h6>
                        <p class="card-text">A congress in a gathering of large groups of people, usually to converse over a particular subject. A congress can take several days to complete and can play host of multiple sessions.</p>
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
                                $conn=mysqli_connect('localhost','root','','business_club');
                                    $query = " SELECT * FROM business";
                                    $result=mysqli_query($conn,$query);
                                    if ($result->num_rows > 0) {
                                    echo "<table>
                                    <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    </th><th>Positon</th>
                                    </tr>";
                                    while ($row=mysqli_fetch_array($result)){
	
 
                                    echo "<tr><td>" . $row['username6'],"</td><td>"," " . $row['email6'],"</td><td>"," ".$row['Position']."</td></tr>";

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
