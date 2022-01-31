<?php

 $courseCat = "SELECT * FROM `course_category`";
 $cats = $crud->select($courseCat);


if(isset($_POST['add_course'])){

    $ImgName = $_FILES['course_image']['name'];
    $TmpName = $_FILES['course_image']['tmp_name'];

    extract($_POST);

    $addCourse = "INSERT INTO `courses`(`course_name`, `course_description`, `course_status`,`course_cat`, `course_seat`,`course_start_date`,`course_contact_person_name`, `course_contact_person_phone`, `course_contact_email`, `course_image`) VALUES ('$course_name','$course_description','$course_status','$course_cat','$course_seat','$course_start_date','$course_contactP_name','$course_contactP_phone','$course_contactP_email','$ImgName')";
    $returnSMS = $crud->insert($addCourse);
    if($returnSMS){
        move_uploaded_file($TmpName, "upload/".$ImgName);
        echo "<h3 class='text-success'>Course Add Success</h3>";
    }
}

if(isset($_POST['add_course_syllabus'])){
    extract($_POST);
    $addcourseProcessFees = "INSERT INTO `course_process_fees`(`first_term_fee`, `second_term_fee`, `third_term_fee`, `forth_term_fee`, `fees_description`, `step_1_des`, `step_2_des`, `step_3_des`, `step_4_des`, `step_5_des`, course_id) VALUES ('$fst_trm_fee','$scnd_trm_fee','$thrd_trm_fee','$foth_trm_fee','$price_des','$A_step','$B_step','$C_step','$D_step','$E_step', '$course_id')";
    $fees = $crud->insert($addcourseProcessFees);
    if($fees){
        echo "<h3 class='text-success'>Course Fees & Process Add Success</h3>";
    }
}
if(isset($_POST['add_schedule'])){
    extract($_POST);
    $addSchedule = "INSERT INTO `course_time_table`(`1st_sem_name`, `1st_sem_des`, `2nd_sem_name`, `2nd_sem_des`, `3rd_sem_name`, `3rd_sem_des`, `4th_sem_name`, `4th_sem_des`, course_id) VALUES ('$semister_a','$semister_a_des','$semister_b','$semister_b_des','$semister_c','$semister_c_des','$semister_d','$semister_d_des', '$course_id')";
    $schedule = $crud->insert($addSchedule);
    if($schedule){

        echo "<h2 class='text-success'>Course Schedule Add Success</h2>";
    }


}

?>
<!--== User Details ==-->

<h3>Add Course </h3>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="sb2-2-add-blog sb2-2-1">
                    <h2>Add New Course</h2>
                 <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
  <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
  <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>HOME</h3>
    <p>Some content.</p>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>
                   
                </div>
            </div>
        </div>
    </div>
</div>









<!-- <form id="regForm" action="">

<h1>Register:</h1> -->

<!-- One "tab" for each step in the form: -->
<!-- <div class="tab">Name:
  <p><input placeholder="First name..." oninput="this.className = ''"></p>
  <p><input placeholder="Last name..." oninput="this.className = ''"></p>
  
</div>

<div class="tab">Contact Info:
  <p><input placeholder="E-mail..." oninput="this.className = ''"></p>
  <p><input placeholder="Phone..." oninput="this.className = ''"></p>
</div>

<div class="tab">Birthday:
  <p><input placeholder="dd" oninput="this.className = ''"></p>
  <p><input placeholder="mm" oninput="this.className = ''"></p>
  <p><input placeholder="yyyy" oninput="this.className = ''"></p>
</div>

<div class="tab">Login Info:
  <p><input placeholder="Username..." oninput="this.className = ''"></p>
  <p><input placeholder="Password..." oninput="this.className = ''"></p>
</div>

<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div> -->

<!-- Circles which indicates the steps of the form: -->
<!-- <div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

</form> -->
