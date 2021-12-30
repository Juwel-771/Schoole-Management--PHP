
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="Academic_Club.css">




    <title>Academic Club</title>


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
                                >


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
                                <a class="dropdown-item" href="#">Calender</a>
                                



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

    <br>


    <section>
                <div class="col-sm-12 col-md-6 col-lg-12">
                    <img src="Club.jpg" alt="Club" class="img">
                    <div class="bg_font">
                        <span class="font">Academic Clubs</span>
                        <!-- <p style="background-color: blue;">
                        Club membership provides an opportunity to participate in new roles.
                        The leadership roles that are available in clubs provide a valuable experience that is not
                        generally available to young people.
                        Other roles, such as being a helper in a service club, a soloist in a music club, or an artist
                        making scenery in a drama club, enable identity exploration.
                        Finally, relationships formed with adult leaders and with peers at the clubs are important.
                        Adults and peers at these organizations can serve as models and as sources of social support,
                        friendship, and caring. Several developmental theories point to the importance of adult
                        mentoring for child and adolescent development.
                    </p>-->
                    </div>
                </div>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="card mt-5 m-2" style="width: 18rem;">
                    <img src="Computer.png" class="card-img-top" alt="Computer Club">
                    <div class="card-body">
                        <h5 class="card-title">Computer Club</h5>
                        <p class="card-text">
                            The purpose of the Computer Club is to provide an atmosphere in which students who are
                            interested
                            in computers and computer gaming can share their ideas,
                            knowledge.
                        </p>

                    </div>
                    <a type="button" href="Computerlogin.php" class="btn btn-dark">
                        Join
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="card mt-5 m-2" style="width: 18rem;">
                    <img src="Debate.png" class="card-img-top" alt="Debating Club">
                    <div class="card-body">
                        <h5 class="card-title">Debating Club</h5>
                        <p class="card-text">
                            A debate club gives students of all abilities a fun way of developing their oracy skills.
                            The club could also help students to become more informed about political and global affairs
                        </p>

                    </div>
                    <a  href="Debatelogin.php" class="btn btn-dark">
                        Join
                    </a>

                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="card mt-5" style="width: 18rem;">
                    <img src="Sport.png" class="card-img-top" alt="Sports Club">
                    <div class="card-body">
                        <h5 class="card-title">Sports Club</h5>
                        <p class="card-text">
                            A Sport Club is defined as a registered student organization that exists to
                            promote and develop interest in a particular sport or physical activity.
                            A club's focus may be recreational.
                        </p>
                    </div>
                    <a type="button" href="Sportslogin.php" class="btn btn-dark">
                        Join
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="card mt-5" style="width: 18rem;">
                    <img src="Science.jpg" class="card-img-top" alt="Science Club">
                    <div class="card-body">
                        <h5 class="card-title">Science Club</h5>
                        <p class="card-text">
                            Science Club is an afterschool, mentor-based science program for middle school youth. ...
                            The mentorship-based, science education model includes: A focus on longterm,
                            academically-focused relationships between youth club members and practicing scientists.

                        </p>

                    </div>
                    <a type="button" href="Sciencelogin.php" class="btn btn-dark">
                        Join
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-3 mb-3">
                <div class="card mt-5" style="width: 18rem;">
                    <img src="Culture.jpg" class="card-img-top" alt="Culture Club">
                    <div class="card-body">
                        <h5 class="card-title">Culture Club</h5>
                        <p class="card-text">
                            A cultural appreciation club is a club dedicated to spreading awareness,
                            understanding, and appreciation of a particular culture, its people, diversity,
                            and values.Most students find that they are able to participate in.
                        </p>

                    </div>
                    <a type="button" href="Culturelogin.php" class="btn btn-dark">
                        Join
                    </a>

                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="card mt-5" style="width: 18rem;">
                    <img src="Business.png" class="card-img-top" alt="Business Club">
                    <div class="card-body">
                        <h5 class="card-title">Business Club</h5>
                        <p class="card-text">
                            The Business Club is a good platform for students to practise their leadership and
                            entrepreneurial skills.
                            Members will have opportunities to network via meetings with internal and external
                            stakeholders
                            Members.
                            t is a club in which students work in groups under the supervision.
                        </p>

                    </div>
                    <a type="button" href="Businesslogin.php" class="btn btn-dark">
                        Join
                    </a>

                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="card mt-5" style="width: 18rem;">
                    <img src="Language.jpg" class="card-img-top" alt="Language Club">
                    <div class="card-body">
                        <h5 class="card-title">Language Club</h5>
                        <p class="card-text">
                            One of the best things about language learning clubs is that they make you accountable to
                            someone.
                            Whenever you engage in a big challenge like learning a language, it can be easy to lose
                            focus and give up.

                        </p>

                    </div>
                    <a type="button" href="Languagelogin.php" class="btn btn-dark">
                        Join
                    </a>

                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="card mt-5" style="width: 18rem;">
                    <img src="Charity.jpg" class="card-img-top" alt="Charity Club">
                    <div class="card-body">
                        <h5 class="card-title">Charity Club</h5>
                        <p class="card-text">
                            Charity Club is a WordPress Theme is created for non-profit websites, like governmental
                            social program websites,
                            NGO, Donation and fundraising websites, etc.
                            Charity Club is a Charity template, as well as a non profit theme for any.
                        </p>

                    </div>
                    <a type="button" href="Charitylogin.php" class="btn btn-dark">
                        Join
                    </a>

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
