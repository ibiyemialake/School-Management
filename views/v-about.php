
<?php
$eventSQL = "SELECT * FROM `add_event`";
$events = $crud->select($eventSQL);
$event = mysqli_fetch_assoc($events);

$jobSQL = 'SELECT * FROM `job_anounce`';
$jobs = $crud->select($jobSQL);
$job = mysqli_fetch_assoc($jobs);

// $seminarSQL = "SELECT * FROM `seminar`";
// $seminars = $crud->select($seminarSQL);
// $seminar = mysqli_fetch_assoc($seminars);



?>


<!--SECTION START-->
<section>
    <div class="container com-sp pad-bot-70">
        <div class="row">
            <div class="cor about-sp">
                <div class="ed-about-tit">
                    <div class="con-title">
                        <h2>About <span> Anwarul Islam</span></h2>
                        <p>We have different sections to the school. High quality academics is our main priority and we hope you get the best here!</p>
                    </div>
                </div>
                <div class="ed-about-sec1">
                    <div class="ed-advan">
                        <ul>
                            <li>
                                <div class="ed-ad-img">
                                    <img src="images/adv/1.png" alt="">
                                </div>
                                <div class="ed-ad-dec">
                                    <h4>History and Awards</h4>
                                    <p>Take a look at some of our history at Anwarul and some awards won in past years. This gives an insight into what we stand for and how far we have come.</p>
                                    <a href="awards.php">Read more</a>
                                    <!-- <a href="awards.html">Read more</a>  -->
                                </div>
                            </li>
                            <!-- <li>
                                <div class="ed-ad-img">
                                    <img src="images/adv/2.png" alt="">
                                </div>
                                <div class="ed-ad-dec">
                                    <h4>Research</h4>
                                    <p>tiam eget enim non magna vestibulum malesuada ut et lectus. Curabitur egestas
                                        risus massa, a malesuada erat ultrices non.</p>
                                    <a href="seminars.php">Read more</a>
                                </div>
                            </li> -->
                            <li>
                                <div class="ed-ad-img">
                                    <img src="images/adv/3.png" alt="">
                                </div>
                                <div class="ed-ad-dec">
                                    <h4>Educations</h4>
                                    <p>Have an insight into some of the subjects we offer here at Anwarul at both Junior or Senior Level.</p>
                                    <a href="all-course.php">Read more</a>
                                </div>
                            </li>
                            <!-- <li>
                                <div class="ed-ad-img">
                                    <img src="images/adv/4.png" alt="">
                                </div>
                                <div class="ed-ad-dec">
                                    <h4>Alumni</h4>
                                    <p>Aliquam malesuada commodo lectus, at fermentum ligula finibus eu. Morbi nisi
                                        neque, suscipit non pulvinar vitae.</p>
                                    <a href="awards.php">Read more</a>

                                </div>
                            </li> -->
                            <li>
                                <div class="ed-ad-img">
                                    <img src="images/adv/5.png" alt="">
                                </div>
                                <div class="ed-ad-dec">
                                    <h4>Facilities</h4>
                                    <p>At Anwarul, we are quipped with the best of facilities ranfing from Science, Sports, Music etc.</p>
                                    <!-- <a href="#">Read more</a> -->
                                     <a href="facilities.html">Read more</a> 
                                </div>
                            </li>
                            <!-- <li>
                                <div class="ed-ad-img">
                                    <img src="images/adv/6.png" alt="">
                                </div>
                                <div class="ed-ad-dec">
                                    <h4>Departments</h4>
                                    <p>Maecenas venenatis, turpis ac tincidunt convallis, leo enim ultrices tortor, at
                                        faucibus neque sapien ac elit. Curabitur ut ipsum odio.</p>
                                    <a href="#">Read more</a>
                                     <a href="departments.html">Read more</a> 
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <div class="ed-about-sec1">
                    <div class="col-md-6"></div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </div>
</section>