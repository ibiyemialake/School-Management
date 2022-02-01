<?php 
$classSQL = "SELECT * FROM `class`";
$classes = $crud->select($classSQL);

 $courseReq = "SELECT * FROM `courses`";
 $courses =  $crud->select($courseReq);

 if(isset($_POST['admission_request'])){
     extract($_POST);
     $courseRequestQuery = "INSERT INTO `admission_request`( `name`, `phone`, `email`, `city`, `education`, `course`) VALUES ('$req_admsn_name','$req_admsn_phone','$req_admsn_email','$req_admsn_city','$req_admsn_education','$req_admsn_course')";
     $rqSMS = $crud->insert($courseRequestQuery);
     if(isset($rqSMS)){

         echo "<script>alert('Application Sent Successfully! Glad to have you onboard,')</script>";
         

     }
    
 }
?>

<!--SECTION START-->
<section class="c-all h-quote">
    <div class="container">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="all-title quote-title qu-new">

                <h2>Admission Policies</h2>
                <p>These are guidelines to the requirements for securing admission into Temple School. We hope to have you here with us.</p>
               <p><b>Requirements:</b></p>
               <p>1) <b>Age:</b> All wards or children entering into the Junior Secondary School 1 must have attained the age of 10+ years as at time of resumption and for Senior Secondary School 1 and upward must be 13+ years.</p>
               <p>2) <b>Academic Requirements:</b>
               <p>i) Before the entrance examination, the entrance form must be purchased, completed and submitted for all levels of the school.</p>
               <p>ii) For new students into the Junior Secondary School 1 (JSS 1), primary school certificate of excellent academic excellence must be presented.</p>
               <p>iii) For new students into intermediate classes (JSS2,SSS1, SSS2), transcript or previous result from former school should be presented.</p>
               <p>iv) Entrance Examination and Interview admission is benched on 50% pass.</p></p> 
            </div>
            <p></p>
            <p></p>
            <p></p>
            <div class="all-title quote-title qu-new">
                <p class="help-line">The following documents must be submitted along with the registration form:</p>
               <p>i) Three (3) current passport photograph</p>
               <p>ii) A copy of the child’s birth certificate</p>
               <p>iii) The previous term’s report card from previous school.</p>
               <p>iv) A sample of exercise books for English, Mathematics and Science from the previous school</p>
               <p>v) Guarantors or Guardian letter.</p>
            </div>
             <span class="help-arrow pulse"><i class="fa fa-angle-right" aria-hidden="true"></i></span>

        </div>
       

        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="n-form-com admiss-form">
                <div class="col s12">
                <div>
                    <h1>Request An Admission</h1>
                    <p>Request for admission with us. We would rightfully use the information provided to align your ward or child into the best of class. We at Anwarul Islam College offer the best and quality education.</p>
                    <p>We hope to have you here with us.</p>
                    <p>Help Line <span>+0810 252 8676</span></p>
                </div>
                    <form class="form-horizontal" action="" method="POST">
                        <div class="form-group">
                            <label class="control-label col-sm-3">Full Name:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Enter your name" required name="req_admsn_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Phone:</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" placeholder="Enter your phone number"
                                    required name="req_admsn_phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Email Address:</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" placeholder="Enter email" required name="req_admsn_email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">City:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Enter your city" name="req_admsn_city">
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label class="control-label col-sm-3">Education:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Enter your education" name="req_admsn_education">
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label class="control-label col-sm-3">Class:</label>
                            <div class="col-sm-9">
                                <select name="req_admsn_course">
                                    <option value="" selected disabled>-- Select Class --</option>
                                    <?php while($course = mysqli_fetch_assoc($classes)){ ?>
                                        <option value="<?php echo $course['name']; ?>"><?php echo $course['name']; ?></option>
                                    <?php } ?>
                                    <!-- <option>Aerospace Engineering</option>
                                    <option>Agriculture Courses</option>
                                    <option>Fashion Technology</option>
                                    <option>Marine Engineering</option>
                                    <option>Building, Construction Management</option>
                                    <option>Web Development</option>
                                    <option>Accountant course</option>
                                    <option>Dot Net Development</option>
                                    <option>Java Development</option>
                                    <option>Chemical Engineering</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="form-group mar-bot-0">
                            <div class="col-sm-offset-3 col-sm-9">
                                <i class="waves-effect waves-light light-btn waves-input-wrapper"><input type="submit" value="APPLY NOW" class="waves-button-input" name="admission_request"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION END-->
