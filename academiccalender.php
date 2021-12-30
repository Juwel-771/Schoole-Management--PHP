<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="calender_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
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
    <h2 class="mt-3 text-light py-3" style="font-family:'Times New Roman', Times, serif; background-color: #009879;">Academic Calendar </h2>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-12">
                <img src="calen.jpg" alt="Cover" width="1100" height="500">
                <span class="font"></span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
            <table class="table">
        <thead>
            <tr>
                <td><strong>Date</strong></td>
                <td><strong>Occasion Name</strong></td>
                <td><strong>Holiday</strong></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>January 28</td>
                <td>Maghi Purnima</td>
                <td>01 day</td>
            </tr>
            <tr>
                <td>February 16</td>
                <td>Saraswati Puja</td>
                <td>01 day</td>
            </tr>
            <tr>
                <td>February 21</td>
                <td>Language Martyrs&#8217; Day, Maha Shivaratri</td>
                <td>01 day</td>
            </tr>
            <tr>
                <td>March 12</td>
                <td>Shab-e-MirazSubho Dol Jatra</td>
                <td>01 day</td>
            </tr>
            <tr>
                <td>March 17</td>
                <td>Sheikh Mujibur Rahman’s birthday</td>
                <td>01 day</td>
            </tr>
            <tr>
                <td>March 23</td>
                <td>Shab-e-Miraz</td>
                <td>01 day</td>
            </tr>
            <tr>
                <td>March 26</td>
                <td>Independence Day</td>
                <td>01 day</td>
            </tr>
            <tr>
                <td>April 4</td>
                <td>Star Sunday</td>
                <td>01 day</td>
            </tr>
            <tr>
                <td>April 12</td>
                <td>Boisabi</td>
                <td>01 day</td>
            </tr>
            <tr>
                <td>April 14 &#8211; 19 May</td>
                <td>Bangla Noboborsho, Ramadan, May Day, Baisakhi Purnima, Shab-e-Qadr, Jummatul-bidha and Eid-al-fitr</td>
                <td>31 day</td>
            </tr>
            <tr>
                <td>26 May</td>
                <td>Buddha Purnima</td>
                <td>01 day</td>
            </tr>
            <tr>
                <td>17 July &#8211; 29 July</td>
                <td>Eid-al-Adha and Summer Vacation</td>
                <td>06 day</td>
            </tr>
            <tr>
                <td>August 10</td>
                <td> Hijri Noboborsho</td>
                <td>01 day</td>
            </tr>
            <tr>
                <td>August 15</td>
                <td>National Day of Mourning</td>
                <td>01 day</td>
            </tr>
            <tr>
                <td>August 19</td>
                <td>Ashura</td>
                <td>01 day</td>
            </tr>
            <tr>
                <td>August 30</td>
                <td>Janmashtami</td>
                <td>01 day</td>
            </tr>
            <tr>
                <td>October 6</td>
                <td>Akheri Chahar Somba</td>
                <td>01 day</td>
            </tr>
            <tr>
                <td>October 11 &#8211; October 20</td>
                <td>Durga Puja, Eid e-Milad-un Nabi Lakshmi Puja, Parbanno Purnima</td>
                <td>09 days</td>
            </tr>
            <tr>
                <td>November 4</td>
                <td>Sri Shayama Puja</td>
                <td>01 day</td>
            </tr>
            <tr>
                <td>November 17</td>
                <td>Fateha-i-Yajdaham</td>
                <td>01 day</td>
            </tr>
            <tr>
                <td>December 15 &#8211; December 29</td>
                <td>Winter vacation, Victory Day, Christmas Day</td>
                <td>13 days</td>
            </tr>
            <tr>
                <td></td>
                <td>Vacation Reserved for Principal</td>
                <td>03 days</td>
            </tr>
        </tbody>
    </table>
    <p>Note: Some of the religious holidays depends on the moon.</p>
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
                                <a href="academiccalender.php" class="text-white">Calender</a>
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