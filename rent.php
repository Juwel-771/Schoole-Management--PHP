<?php include('rentserver.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="script.css">
    <link rel="stylesheet" type="text/css" href="pro.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>Borrow</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-8 d-flex justify-content-center">
                <form method="post" action="rent.php">
                    <div class="form-group row">
                        <label for="text" class="col-4 col-form-label">Full Name:</label>
                        <div class="col-8">
                            <input id="text" name="full_name" type="text" class="form-control mb-4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text2" class="col-4 col-form-label">Id:</label>
                        <div class="col-8">
                            <input id="text2" name="id" type="number" class="form-control mb-4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text3" class="col-4 col-form-label">Book Name: </label>
                        <div class="col-8">
                            <input id="text3" name="book" type="text" class="form-control mb-4">
                        </div>
                        <div class="input-group d-flex justify-content-center">
                            <button type="submit" class="btn btn-success" name="rent_login">Submit</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-center text-white">

        <div class="container p-4">

            <section class="mb-4">

                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-facebook-f"></i></a>


                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-twitter"></i></a>


                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-google"></i></a>


                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-instagram"></i></a>


                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-linkedin-in"></i></a>

                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-github"></i></a>
            </section>

            <section class="mb-4">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
                    repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
                    eum harum corrupti dicta, aliquam sequi voluptate quas.
                </p>
            </section>

            <section class="">

                <div class="row">

                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Academic</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="result.php/" class="text-white">Result</a>
                            </li>
                            <li>
                                <a href="notice.php" class="text-white">Notice</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Routine</a>
                            </li>
                            <li>
                                <a href="libary.php" class="text-white">Library</a>
                            </li>
                        </ul>
                    </div>


                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Admission</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="eligibility.php" class="text-white">Eligibility</a>
                            </li>
                            <li>
                                <a href="tuitionfee.php" class="text-white">Tuition Fee</a>
                            </li>
                            <li>
                                <a href="rules.php" class="text-white">Rules</a>
                            </li>
                            <li>
                                <a href="payment.php" class="text-white">Payment</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Activities</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="admissionform.php" class="text-white">Admission Form</a>
                            </li>
                            <li>
                                <a href="event.php" class="text-white">Events</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Calender</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Conference</a>
                            </li>
                        </ul>
                    </div>

                </div>

            </section>

        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a class="text-white">Group: 3</a>
        </div>

    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>