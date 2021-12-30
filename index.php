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
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Activities
                        </a>

                        <div class="dropdown">

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="event.php">Events</a>
                                <a class="dropdown-item" href="academiccalender.php">Academic Calender</a>
                               



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
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="3.jpg" alt="Sanmar" width="1100" height="500">
                <div class="carousel-caption text-light">
                    <h3>School Management System</h3>
                    <p>A school is an educational institution designed to provide learning spaces and learning
                        environments for the teaching of students</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="1.jpg" alt="Equity" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>School Management System</h3>
                    <p>A school is an educational institution designed to provide learning spaces and learning
                        environments for the teaching of students</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="2.jpg" alt="jpg" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>School Management System</h3>
                    <p>A school is an educational institution designed to provide learning spaces and learning
                        environments for the teaching of students</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <div class="content templete clear">
        <div class="maincontent">
            <nav class="navbar bg-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Student Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Result Search </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Class Routine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Exam Routine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Result list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Syllabus</a>
                    </li>
                </ul>
            </nav>

        </div>
        <div class="midcontent">

            <div>
                <p class="p">
                    <marquee behavior="alternate">
                        <a class="a" href="?p=news-view&id=605">নতুন বছরের পাঠ্যবই বিতরণ ও বেতন জমাদানের নোটিশ।</a> ||
                        <a class="a" href="?p=news-view&id=561">ভর্তি বিজ্ঞপ্তি - ২০২১</a>
                    </marquee>
                </p>
                <h1 style="text-align: center;">Message</h1>

                <p style="text-align: justify;">Knowledge is power but nowadays it is thought, information technology
                    (IT)&nbsp; is power. Those who process more information are more knowledgeable. By browsing
                    internet, we can communicate with the whole world. The world seems to be a global village. We can
                    know very rapidly what is happening throughout the world.</p>

                <p style="text-align: justify;">In the age of modern technology computer creates a vital role on
                    academic activities.Publishing results and providing all kinds of relevant activities become easy to
                    easier. A student can get necessary information with in a few times. Reading becomes more
                    interesting and informative.</p>

                <p>Group-3 High School is going to introduce the modern technology for the betterment of all concern.I
                    think this step is helpful to its all activities .I wish its overall success and Continuity.</p>
                <br />

                <p>
                    <img src="signature.jpg" alt="Headmaster signecher" width="15%" /><br />

                    <strong>Mr Sirius Black</strong><br />
                    <strong>Headmaster<br />Group-3 School</strong>
                </p>
            </div>
        </div>


        <div class="sidemenu">
            <div class="navModule">
                <div class="rightPanel">
                    <div class="notice">
                        <div class="noticeboard-title">Notice Board</div>
                        <ul>
                            <li>
                                <a href="">JSC Result 2020</a>
                                <p>
                                    Congratulation to 2020 JSC students for brilliant result
                                </p>
                                <a href="" class="detailsbutton" style="float: right;">Details</a>
                                <br>
                                <br>
                            </li>

                        </ul>
                    </div>
                    <a href="" class="detailsbutton">More News</a>
                    <br>
                    <br>
                    <div class="calendar">
                        <div class="month">
                            <i class="fas fa-angle-left prev"></i>
                            <div class="date">
                                <h1></h1>
                                <p></p>
                            </div>
                            <i class="fas fa-angle-right next"></i>
                        </div>
                        <div class="weekdays">
                            <div>Sun</div>
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                        </div>

                        <div class="days"></div>
                    </div>
                </div>
            </div>
            <script src="script.js"></script>
        </div>

    </div>
    <div style="clear: both;"></div>

    <section class="my-5">
        <div class="py-5">
            <h3 class="text-center">Gallery</h3>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="Head.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">President</h4>
                            <p class="card-text">Group-3 School</p>
                            <a href="about.php" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="a.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Headmaster</h4>
                            <p class="card-text">Group-3 School</p>
                            <a href="about.php" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="b.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Assistant Headmaster</h4>
                            <p class="card-text">Group-3 School</p>
                            <a href="about.php" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </section>




    <div style="clear: both;"></div>




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
