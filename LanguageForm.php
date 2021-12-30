<?php
  session_start();

  if (!isset($_SESSION['username7'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: Languagelogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username7']);
  	header("location: Languagelogin.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="Languagestyle.css">
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
                <h2 class="text-center font-weight-light">Language Club</h2>
                <p>Language Project is a transnational network of community-based language clubs in which children and adults engage in fun activities with the end of acquiring multiple languages simultaneously.</p>
            </div>
        </div>
    </div>
    <div class="text-center display-4 my-3">
        <?php  if (isset($_SESSION['username7'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username7']; ?></strong></p>

        <?php endif ?>
    </div>

    <h2 class="font-weight-light text-center">Events: </h2>
    <div class="container">
        <div class="row">

            <div class="col-lg-4">

                <div class="card mt-3 border border-primary btn btn-outline-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Creating an Immersion Environment</h5>
                        <h6 class="card-subheader mb-2 text-muted">Public events </h6>
                        <p class="card-text">The LEX audio materials help establish a multilingual environment where you are surrounded by the various languages on a daily basis. Everyone, from children to adults, can enjoy the contents of the audio: songs from around the world and stories created by LEX. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="card mt-3 border border-primary btn btn-outline-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Weekly Meetings</h5>
                        <h6 class="card-subheader mb-2 text-muted">Public events</h6>
                        <p class="card-text"> At LEX, we recognize that language is nurtured in people-to-people connections. In addition to listening to LEX audio materials, members get together in community-based clubs at least once a week to share the sounds of language we are internalizing from the audio materials.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="card mt-3 border border-primary btn btn-outline-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Languages</h5>
                        <h6 class="card-subheader mb-2 text-muted">Public events</h6>
                        <p class="card-text">Each club meets once a week. If you are a member of one club, you can freely attend the meetings of any other club in the area or around the world at no charge. Family and community involvement in this program is essential to its success. </p>
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
                                $conn=mysqli_connect('localhost','root','','language_club');
                                    $query = " SELECT * FROM lan";
                                    $result=mysqli_query($conn,$query);
                                    if ($result->num_rows > 0) {
                                    echo "<table>
                                    <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    </th><th>Positon</th>
                                    </tr>";
                                    while ($row=mysqli_fetch_array($result)){
	
 
                                    echo "<tr><td>" . $row['username7'],"</td><td>"," " . $row['email7'],"</td><td>"," ".$row['Position']."</td></tr>";

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
