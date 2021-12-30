<?php
  session_start();

  if (!isset($_SESSION['username2'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: Debatelogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username2']);
  	header("location: Debatelogin.php");
  }
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="Debatestyle.css">
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
                <h2 class="text-center font-weight-light">Debate Club</h2>
                <p>Debate Events. Commentary. Declamation (MS) Dramatic Interpretation. Duo Interpretation. Expository.
                    Humorous Interpretation. Impromptu (MS) Informative Speaking.</p>
            </div>
        </div>
    </div>
    <div class="text-center display-4 my-3">
        <?php  if (isset($_SESSION['username2'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username2']; ?></strong></p>

        <?php endif ?>
    </div>

    <h2 class="font-weight-light text-center">Events: </h2>
    <div class="container">
        <div class="row">

            <div class="col-lg-4">

                <div class="card mt-3 border border-primary btn btn-outline-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Speech Events</h5>
                        <h6 class="card-subheader mb-2 text-muted">Public events </h6>
                        <p class="card-text">Speech involves a presentation by one or two students that is judged
                            against a similar type of presentation by others in a round of competition. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="card mt-3 border border-primary btn btn-outline-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Student Congress</h5>
                        <h6 class="card-subheader mb-2 text-muted">Public events</h6>
                        <p class="card-text"> This event is a "mock" legislative assembly in which students learn the
                            rudiments of Parliamentary Procedure while debating current legislative topics made up by
                            the students themselves.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="card mt-3 border border-primary btn btn-outline-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Parliamentary Debate</h5>
                        <h6 class="card-subheader mb-2 text-muted">Public events</h6>
                        <p class="card-text">A format for extemporaneous debate involving two-person teams. Debate is on
                            a topic announced some 15 to 20 minutes before each debate.</p>
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
                                $conn=mysqli_connect('localhost','root','','debate_club');
                                    $query = " SELECT * FROM debate";
                                    $result=mysqli_query($conn,$query);
                                    if ($result->num_rows > 0) {
                                    echo "<table>
                                    <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    </th><th>Positon</th>
                                    </tr>";
                                    while ($row=mysqli_fetch_array($result)){
	
 
                                    echo "<tr><td>" . $row['username2'],"</td><td>"," " . $row['email2'],"</td><td>"," ".$row['Position']."</td></tr>";

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