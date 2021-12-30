<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="script.css">
    <link rel="stylesheet" type="text/css" href="pro.css">
    <link rel="stylesheet" type="text/css" href="notice_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>School Management System</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Group-3</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Academic
                        </a>

                        <div class="dropdown">

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="result.php">Result</a>
                                <a class="dropdown-item" href="notice.php">Notice</a>
                                <a class="dropdown-item" href="Lesson_plan.php">Lesson Plan</a>
                                <a class="dropdown-item" href="Academicclub.php">Academic Club</a>
                                <a class="dropdown-item" href="libary.php">Library</a>


                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admission
                        </a>

                        <div class="dropdown">

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="eligibility.php">Eligibility</a>
                                <a class="dropdown-item" href="tuitionfee.php">Tuition Fee </a>
                                <a class="dropdown-item" href="rules.php">Rules</a>
                                <a class="dropdown-item" href="payment.php">Payment Policy</a>
                                <a class="dropdown-item" href="admissionform.php">Admission Form</a>
                                


                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Activities
                        </a>

                        <div class="dropdown">

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="event.php">Events</a>
                                <a class="dropdown-item" href="academiccalender.php">Calender</a>
                                



                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="head">
        <h1 class="mt-2">Notice Board</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 notice">
                <h1>SCIENCE OLYMPIAD 2021 IS GOING ON!!!</h1>
                <p>The first round of Science Olympiad 2020 successfully took place on November 3rd 2020. Thanks to the
                    participants. This could not have been more exciting without your enthusiasm. About 1145 students
                    participated in the first round and after a grueling battle of knowledge 50 participants will move
                    forward to the 2nd round.</p>
            </div>
            <div class="col-md-6 notice">
                <h1>JSC EXAM PREPARATION – 2021</h1>
                <p>Dear Students Please click below link for Preparation work & Assignments: Bangla English English
                    Assignment Mathematics BGS BGS-Assignement ICT Islam and Moral Education IME – Assignment Hindu
                    Religion Science Science-Assignment Science (Biology) Science (Chemistry)</p>
            </div>
            <div class="col-md-6 notice">
                <h1>HOLIDAY ON ACCOUNT OF INTERNATIONAL MOTHER LANGUAGE DAY 2021</h1>
                <p>Scholars’ School will remain closed on 21 February 2021.</p>
            </div>
            <div class="col-md-6 notice">
                <h1>HOLIDAY ON ACCOUNT OF SHUVO DOL JATRA</h1>
                <p>Scholars’ School will remain closed on 9 March 2021.</p>
            </div>
            <div class="col-md-6 notice">
                <h1>MONTHLY FEE WITH TUITION FEE-2020</h1>
                <p>Dear Parents please be informed that timely payment of the School Fee is mandatory.
                    This is a final reminder to all parents who have not yet paid the School fee / or have defaulted
                    timely payment/ or have outstanding School dues.
                    Please clear your outstanding dues and pay the School Fee in full by 21st November 2020. </p>
            </div>
            <div class="col-md-6 notice">
                <h1>HOLIDAY ON ACCOUNT OF BIRTHDAY OF FATHER OF THE NATION BANGABANDHU SHEIKH MUJIBUR RAHMAN & NATIONAL
                    CHILDREN’S DAY 2021</h1>
                <p>School will remain closed on March 17, 2015 (Tuesday) on the occasion of BIRTHDAY OF FATHER OF THE
                    NATION BANGABANDHU SHEIKH MUJIBUR RAHMAN & NATIONAL CHILDREN’S DAY.
                </p>
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