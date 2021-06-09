<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corona Virus Live Update</title>
    <?php include 'db/dbconnect.php' ; ?>
    <?php include 'links/links.php' ; ?>
    <?php include 'css/style.php' ; ?>
</head>

<body>

    <!-- Import the Nvabar from bootstrap  -->

    <nav class="navbar navbar-expand-lg navbar-dark nav_style p-3">
        <a class="navbar-brand pl-5" href="#">COVID-19</a>
        <button class="navbar-toggler text-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5">
                <li class="nav-item active">
                    <a class="nav-link link_css" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link link_css" href="#about">About</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link link_css" href="#symptoms">Symptoms</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link link_css" href="#prevention">Prevention</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link link_css" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- End of  Nvabar  -->

    <!-- / / / / / Main Header Start / / / / /  -->

    <div class="main_header">
        <div class="row w-100 h-100">

            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                <div class="leftSide w-100 h-100 d-flex justify-content-center align-items-center">
                    <img src="images/covidProtextiion.png" id="covid_border" width="300" height="300" alt="">
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
                <div class="rightSide w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1 id="rightSideHeader">Let's Stay Safe and Fight Together Aganist
                        Cor<span class="corona_roation"><img src="images/bacteria.png"></span>na Virus</h1>
                </div>
            </div>

        </div>
    </div>

    <!-- / / / / / End of Main Header / / / / /  -->


    <!-- ************** Corona Latest Update **************  -->

    <section class="corona_update">
        <div class="mb-3">

            <h3 class="text-uppercase text-center">covid-19 update </h3>
            <div class="d-flex justify-content-around align-items-center count_style">

                <div>
                    <h1 class="count">61,700,000</h1>
                    <p>Passengers Screended at Airport</p>
                </div>
                <div>
                    <h1 class="count">512</h1>
                    <p>Active-Covid-19 Cases</p>
                </div>
                <div>
                    <h1 class="count">52,700,000</h1>
                    <p>Cured/Discharge Cases</p>
                </div>
                <div>
                    <h1 class="count">3378</h1>
                    <p>Death Cases</p>
                </div>

            </div> -->




        </div>
    </section>


    <!-- ************** End of Corona Latest Update **************  -->


    <!-- ********************** About Section **********************  -->

    <div class="container-fluid sub_section pt-5 pb-5" id="about">
        <div class="section_header text-center mb-5 mt-4">
            <h1>About COVID-19</h1>
        </div>
        <div class="row pt-5">
            <div class="col-lg-5 col-md-6 col-12 ml-5 headerImg">
                <img src="images/about.jpg" alt="" class="img-fluid" id="aboutImg">
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <h2>What is COVID-19 (Corona Virus)</h2>
                <p class="text-justify">Covid-19 is the infectious disease caused by the most recently discovered
                    coronavirus.This new virus and disease were unknown before the outbreak begain in Wuhan, China, in
                    December 2019.</p>
                <p class="text-justify">Coronaviruses are a large family of Viruses which may cause illness in animals
                    or humans.In Humans , several coronaviruses are known to cause respiratory infections ranging from
                    the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe
                    Acute Respiratory Syndrome (SARS).The most recently discovered coronavirus cause coronavirus disease
                    COVID-19.
                </p>
            </div>
        </div>
    </div>

    <!-- ********************** End of  About Section **********************  -->


    <!-- ****** Coronavirus  Symptoms ****** -->

    <div class="container-fluid pt-5 pb-5" id="symptoms">
        <div class="section_header text-center mb-5 mt-4">
            <h1> Coronavirus Symptoms</h1>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/cough.png" alt="" class="img-fluid" width="120" height="120">
                        <figCaption>Cough</figCaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/breathing.png" alt="" class="img-fluid" width="120" height="120">
                        <figCaption>Difficulty-breathing</figCaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/cold.png" alt="" class="img-fluid" width="120" height="120">
                        <figCaption>Cold</figCaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/fever.png" alt="" class="img-fluid" width="120" height="120">
                        <figCaption>Fever</figCaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/nose.png" alt="" class="img-fluid" width="120" height="120">
                        <figCaption>Runny Nose</figCaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/tiredness.png" alt="" class="img-fluid" width="120" height="120">
                        <figCaption>Tiredness</figCaption>
                    </figure>
                </div>

            </div>
        </div>
    </div>

    <!-- ****** End of Coronavirus  Symptoms ****** -->


    <!-- ********************** Prevention **********************  -->

    <div class="container-fluid sub_section pt-5 pb-5" id="prevention">
        <div class="section_header text-center mb-5 mt-4">
            <h1>6 Steps Prevention Aganist Coronavirus</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/washing-hands.png" alt="" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>

                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Wash your hands regularly for 20 seconds, with soap and water ot alcohol-based hand rub.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/man.png" alt="" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>

                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Cover your nose and mouth with a disposable tissue or flexed elbow, when you cough or
                                sneeze.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/social-distancing.png" alt="" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>

                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Avoid close contact (1 meter or 3 feet) with people who are unwell.</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/quarantine.png" alt="" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>

                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Stay at home and self -isolate from others in the household if you feel unwell.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/news.png" alt="" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>

                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Stay informed by watching news & follow the recomended practices .</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/fever2.png" alt="" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>

                        <div class="col-lg-8 col-md-8 col-12">
                            <p>If you have cough and difficulty breathing, seek medical care early.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- ********************** End of Prevention **********************  -->


    <!-- ********************** Contact Us **********************  -->

    <div class="container-fluid pt-5 pb-5" id="contact">
        <div class="section_header text-center mb-5 mt-4">
            <h1>Contact Us ASAP</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="username" placeholder="Your full name"
                                autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Contact No</label>
                            <input type="tel" class="form-control" name="contact" placeholder="Your Conttact No"
                                autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="userEmail" placeholder="Email adress"
                                autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <label>Select Symptoms</label><br>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customchekbox1"
                                    name="coronasym[]" value="cold">
                                <label class="custom-control-label" for="customchekbox1">cold</label>
                            </div>

                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customchekbox2"
                                    name="coronasym[]" value="fever">
                                <label class="custom-control-label" for="customchekbox2">fever</label>
                            </div>

                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customchekbox3"
                                    name="coronasym[]" value="breath">
                                <label class="custom-control-label" for="customchekbox3">difficulty in breathing
                                </label>
                            </div>

                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customchekbox4"
                                    name="coronasym[]" value="week">
                                <label class="custom-control-label" for="customchekbox4">felling week</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customchekbox5"
                                    name="coronasym[]" value="no symp">
                                <label class="custom-control-label" for="customchekbox5">none of them</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- ********************** End of Contact Form **********************  -->


<!-- //////////////// top cursor ////////////////  -->

<div class="container scrollTop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="myBTN"></i>
</div>

 
<!-- ********************** Footer**********************  -->

<footer class="mt-5">
    <div class="container-fluid footer_style text-white text-center">
        <p>Copyright by Covid-19 Info | 2021</p>
    </div>

</footer>


<!-- **************** End of Footer ******************  -->


<!-- ********************** top arrow script ********************** -->

<script type="text/javascript">

myBTN = document.getElementById('myBTN');

 // When the user scroll down 20px from the top of the documents , show the button

 window.onscroll = function(){scrollFunction()};

 function scrollFunction(){
     if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
         myBTN.style.display = "block";
     }
     else{
        myBTN.style.display = "none";
     }
 }

 // When users click on the button , scroll up to the top of the document
 function topFunction(){
     document.body.scrollTop = 0;
     document.documentElement.scrollTop = 0;
 }
</script>


<!-- ********************** counting Script ********************** -->

<script type="text/javascript">
    $('.count').counterUp({
        delay: 10,
        time: 5000
    })
</script>

</body>

</html>


<?php 
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $contact = $_POST['contact'];
    $userEmail = $_POST['userEmail'];
    $symp = $_POST['coronasym'];
    $message = $_POST['msg'];


    $chk = "";

    foreach($symp as $chk1){
        $chk.= $chk1.",";
    }

    $insertQuery = " insert into  totalpatient(username,email,mobile,symp,message) values('$username', '$contact', '$userEmail', '$chk', '$message')";
    
    $query = mysqli_query($conn, $insertQuery);

    if($query){
        ?>

        <script type="text/javascript">

        alert("Form has been submitted")
        
        </script>
        <?php
    }else{
        ?>

        <script type="text/javascript">

        alert("Failed to Submit the form")
        
        </script>
        <?php
    }


}

?>