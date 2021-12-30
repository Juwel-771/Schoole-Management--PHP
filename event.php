<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="script.css">
    <link rel="stylesheet" type="text/css" href="pro.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  font-size: 17px;
}

.container {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}
</style>
</head>
<body>

<h2></h2>
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
<div class="container">
  <img src="https://cf.ltkcdn.net/kids/images/std/221538-675x450-kids-in-classroom.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
    <h1>Event</h1>
   <h2></h2>
<p>School event has always been managing by the school comittie.Event means the tasks which isperform by the teachers, students and the school managing team.</span></p>
<button onclick="myFunction()" id="myBtn">Learn more</button>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Learn more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Learn less"; 
    moreText.style.display = "inline";
  }
}
</script>
  </div>
</div>

<p><img src="http://d2u4q3iydaupsp.cloudfront.net/6QBUWublROqIY4bWSoBAvvdFkT9sE04IwMSjfIc82yx8taaZ5mwSRPYRuAvPcBnLxV9gYfVc9DGrIB3DuDYjsdcGWqAezkA7ZwZORqYVZv0OXvs5EEj1fW2LGsf2gSXL" alt="Pineapple" style="width:470px;height:470px;margin-left:15px;">
<p> It goes without saying that Sports are and should be an integral part of everyone’s life.  Sports help us lead a healthy life and  Sports also teach us how to play honestly, win honorably, loose gracefully, respect authority, how to adjust with others, learn management and importance of time in the long run<span id="dots">...</span><span id="more">It’s a really great notion that schools and colleges these days are putting humongous focus on sports and are are trying to make sports a part of a student’s everyday lives. To commemorate the spirit of sports, Sports Days are being organised on grand level in various schools and colleges.Sports are something that teaches a human many qualities like dedication, and leadership, discipline etc. It’s a well known fact that any form of Physical exercise is good not only for one’s body but their spirit as well. Playing a sport is a winning combination both figuratively and literally and that’s why we lay special focus on awakening the sports talent of the students and then display the same at our Annual sports Day.</span></p>
<button onclick="myFunction()" id="myBtn">Read more</button>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
<p><img src="https://i.pinimg.com/originals/7e/3e/42/7e3e42a38a6dacf9d221d298f64d91b9.jpg" alt="Pineapple" style="width:470px;height:470px;margin-left:15px;">
<p> Culture is the patterns of learned and shared behavior and beliefs of a particular social, ethnic, or age group. It can also be described as the complex whole of collective human beliefs with a structured stage of civilization that can be specific to a nation or time period<span id="dots">...</span><span id="more">Social/cultural activities not only help students to identify themselves with the university, but also assist students to develop themselves in a desired field and also improve skills such as organizational, presentation, leadership and interpersonal communication.Cultural celebrations foster respect and open-mindedness for other cultures. Celebrating our differences, as well as our common interests, helps unite and educate us. To understand other's perspectives, to broaden our own, and to fully experience and educate ourselves</span></p>
<button onclick="myFunction()" id="myBtn">Read more</button>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

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
