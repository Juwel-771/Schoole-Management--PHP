<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="Lesson_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">

</head>

<body class="l-plan">

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
    <div class="area">
        <h3>Lesson Plan</h3>

        <form name="tsform" method="POST" action="" class="tsform">

            <table border="0" wdith="100%" align="left">
                <tr>
                    <th>
                        <select name="class" id="class" class="select">
                            <option selected value="">Select One</option>
                            <option value="5">Five</option>
                            <option value="6">Six</option>
                            <option value="7">Seven</option>
                            <option value="8">Eight</option>
                            <option value="9">Nine</option>
                            <option value="10">Ten</option>
                            <option value="11">Ten (Old)</option>
                        </select>
                    </th>
                    <td>
                        <select name="unit" id="unit" class="select">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>

                        </select>

                    </td>
                    <td><input type="submit" name="submit" id="submit" value="GO" class="go"></td>
                </tr>
            </table>

        </form><br><br>
        <form action="" method="POST" class="form">
            <select name="year" id="year" class="select">
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option selected value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
            </select>
            <input type="submit" name="submit" id="submit" value="Go" class="go">
        </form>

        <h3>List of Subject</h3>
        <table class="dataTable">
            <tr>
                <td>
                    <h3>Six</h3>
                </td>
                <td>
                    <ol class="list-menu">
                        <li><a target="_blank" href="">Bangla 1st</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Bangla 2nd</a> [ 1 ]</li>
                        <li><a target="_blank" href="">English 1st</a> [ 1 ]</li>
                        <li><a target="_blank" href="">English 2nd</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Mathematics</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Religion</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Bangladesh and Global Studies</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Science</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Agricultural Education</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Information and Communication Technology</a> [ 1 ]</li>
                    </ol>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Seven</h3>
                </td>
                <td>
                    <ol class="list-menu">
                        <li><a target="_blank" href="">Bangla 1st</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Bangla 2nd</a> [ 1 ]</li>
                        <li><a target="_blank" href="">English 1st</a> [ 1 ]</li>
                        <li><a target="_blank" href="">English 2nd</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Mathematics</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Religion</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Bangladesh and Global Studies</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Science</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Agricultural Education</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Information and Communication Technology</a> [ 1 ]</li>
                    </ol>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Eight</h3>
                </td>
                <td>
                    <ol class="list-menu">
                        <li><a target="_blank" href="">Bangla</a> [ 1 ]</li>
                        <li><a target="_blank" href="">English</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Mathematics</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Science</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Bangladesh and Global Studies</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Religion</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Information and Communication Technology</a> [ 1 ]</li>
                    </ol>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Nine - Ten</h3>
                </td>
                <td>
                    <ol class="list-menu">
                        <li><a target="_blank" href="">Bangla 1st</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Bangla 2nd</a> [ 1 ]</li>
                        <li><a target="_blank" href="">English 1st</a> [ 1 ]</li>
                        <li><a target="_blank" href="">English 2nd</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Mathematics</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Religion</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Bangladesh and Global Studies</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Physics</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Chemistry</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Biology</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Higher Mathematics</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Accounting</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Finance and Banking</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Business Entrepreneurship</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Agricultural Education</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Agricultural Education</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Civics</a> [ 1 ]</li>
                        <li><a target="_blank" href="">History</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Geography and Environment</a> [ 1 ]</li>
                        <li><a target="_blank" href="">Information and Communication Technology</a> [ 1 ]</li>
                        <li><a target="_blank" href="">General Science</a> [ 1 ]</li>
                        <li><a target="_blank" href="">General Science</a> [ 1 ]</li>
                    </ol>
            </tr>

        </table>
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