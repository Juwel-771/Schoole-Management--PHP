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
    <link rel="stylesheet" href="Acamemic_form.css">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-12">
                <img src="onlineadmission.jpeg" alt="Online" class="img mb-4">
                <h4 class="bg-dark text-center" style="color: white; font-family: Palatino Linotype;">Admissions</h4>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-8 justify-content-center">
                <form>
                    <div class="form-group row">
                        <label for="text" class="col-4 col-form-label">Full Name:</label>
                        <div class="col-8">
                            <input id="text" name="text" type="text" class="form-control mb-4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text2" class="col-4 col-form-label">Father Name:</label>
                        <div class="col-8">
                            <input id="text2" name="text2" type="text" class="form-control mb-4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text3" class="col-4 col-form-label">Mother Name:</label>
                        <div class="col-8">
                            <input id="text3" name="text3" type="text" class="form-control mb-4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label">Gender:</label>
                        <div class="col-8">
                            <div class="custom-controls-stacked">
                                <div class="custom-control custom-radio">
                                    <input name="radio" id="radio_0" type="radio" class="custom-control-input mb-4"
                                        value="rabbit">
                                    <label for="radio_0" class="custom-control-label">Male</label>
                                </div>
                            </div>
                            <div class="custom-controls-stacked">
                                <div class="custom-control custom-radio">
                                    <input name="radio" id="radio_1" type="radio" class="custom-control-input mb-4"
                                        value="duck">
                                    <label for="radio_1" class="custom-control-label">Female</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text1" class="col-4 col-form-label">Present Address:</label>
                        <div class="col-8">
                            <input id="text1" name="text1" type="text" class="form-control mb-4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text4" class="col-4 col-form-label">Permanent Address:</label>
                        <div class="col-8">
                            <input id="text4" name="text4" type="text" class="form-control mb-4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text5" class="col-4 col-form-label">Students Birthday:</label>
                        <div class="col-8">
                            <input id="text5" name="text5" type="text" class="form-control mb-4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text7" class="col-4 col-form-label">Nationality:</label>
                        <div class="col-8">
                            <input id="text7" name="text7" type="text" class="form-control mb-4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mail" class="col-4 col-form-label">E-mail Address:</label>
                        <div class="col-8">
                            <input id="mail" name="mail" type="text" class="form-control mb-4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text6" class="col-4 col-form-label">Contact Number:</label>
                        <div class="col-8">
                            <input id="text6" name="text6" type="text" class="form-control mb-4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="select" class="col-4 col-form-label">Admission To:</label>
                        <div class="col-8">
                            <select id="select" name="select" class="custom-select mb-4">
                                <option value="one">One</option>
                                <option value="two">Two</option>
                                <option value="">Three</option>
                                <option value="">Four</option>
                                <option value="">Five</option>
                                <option value="">Six</option>
                                <option value="">Seven</option>
                                <option value="">Eight</option>
                                <option value="">Nine</option>
                                <option value="">Ten</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="offset-4 col-4">
                            <button name="submit" type="submit" class="btn btn-primary mb-4">Submit</button>
                        </div>
                        <div class="col-4">
                            <button name="submit" type="reset" class="btn btn-danger mb-4">Reset</button>
                        </div>
                    </div>
                </form>
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