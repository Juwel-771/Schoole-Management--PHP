<?php
  session_start();

  if (!isset($_SESSION['username8'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: Charitylogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username8']);
  	header("location: Charitylogin.php");
  }
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="Charitystyle.css">
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
                <h2 class="text-center font-weight-light">Charity Club</h2>
                <p>A Charity is an organisation that exists to enable one group of people to help another.
                    It can sometimes be for animals or nature.
                    Many of the best known charities were set up by people who felt passionate about a situation that
                    they believed was wrong or preventable.</p>
            </div>
        </div>
    </div>
    <div class="text-center display-4 my-3">
        <?php  if (isset($_SESSION['username8'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username8']; ?></strong></p>

        <?php endif ?>
    </div>

    <h2 class="font-weight-light text-center">Fundraising Event: </h2>
    <div class="container">
        <div class="row">

            <div class="col-lg-4">

                <div class="card mt-3 border border-primary btn btn-outline-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Yard Sale Fundraiser</h5>
                        <h6 class="card-subheader mb-2 text-muted">Fundraiser</h6>
                        <p class="card-text">Collect gently worn clothes, home goods, or collectibles and host a yard
                            sale. If you have valuable items like first-edition books or signed collector’s items.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="card mt-3 border border-primary btn btn-outline-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Craft Fair to Raise Funds</h5>
                        <h6 class="card-subheader mb-2 text-muted">Fundraiser</h6>
                        <p class="card-text">Pinterest has taught us anything, it’s that the do-it-yourself aesthetic
                            isn’t going anywhere. Gather talented friends and family members to help create and sell
                            your crafts.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="card mt-3 border border-primary btn btn-outline-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Recipe Books</h5>
                        <h6 class="card-subheader mb-2 text-muted">Fundraiser</h6>
                        <p class="card-text">As a tribute to the days before recipe phone apps, you can crowdsource
                            recipes from different supporters, and even across your organization, to compile a charity
                            cookbook.</p>
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
                                $conn=mysqli_connect('localhost','root','','charity_club');
                                    $query = " SELECT * FROM charity";
                                    $result=mysqli_query($conn,$query);
                                    if ($result->num_rows > 0) {
                                    echo "<table>
                                    <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    </th><th>Positon</th>
                                    </tr>";
                                    while ($row=mysqli_fetch_array($result)){
	
 
                                    echo "<tr><td>" . $row['username8'],"</td><td>"," " . $row['email8'],"</td><td>"," ".$row['Position']."</td></tr>";

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