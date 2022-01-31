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
               

                  
                                <div class="inn-title">
                                    <h4>Course Information</h4>
                                </div>
                                <div class="">
                                    <form accept="" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="list-title" type="text" class="validate" name="course_name">
                                                <label for="list-title" class="">Course Name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea class="materialize-textarea"
                                                    name="course_description"></textarea>
                                                <label>Course Descriptions:</label>
                                            </div>
                                        </div>

                                        <div class="">
                                            <div class="form-group ">
                                                <label for="inputState">Status</label>
                                                <select id="inputState" class="form-control" name="course_status"
                                                    style="font-size: 15px;">
                                                    <option selected disabled>Choose...</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="">
                                            <div class="form-group ">
                                                <label for="inputState">Course Category</label>
                                                <select id="inputState" class="form-control" name="course_cat"
                                                    style="font-size: 15px;">
                                                    <option selected disabled>Choose...</option>
                                                    <?php while($cat = mysqli_fetch_assoc($cats)){ ?>
                                                      <option value="<?php echo $cat['cat_name']; ?>"><?php echo $cat['cat_name']; ?></option>
                                                     <?php } ?>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="">
                                            <div class="form-group ">
                                                <label for="inputState">Course Seats</label>
                                                <input id="t5-n1" type="number" class="validate"
                                                    name="course_seat">
                                            </div>

                                        </div>
                                        <div class="">
                                            <div class="form-group ">
                                                <label for="inputState">Course Start Date</label>
                                                <input id="t5-n1" type="date" class="validate"
                                                    name="course_start_date">
                                            </div>

                                        </div>
                                        <h4 class="pt-3">Contact Person Details</h4><hr>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="t5-n1" type="text" class="validate"
                                                    name="course_contactP_name">
                                                <label for="t5-n1">Contact Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="t5-n3" type="number" class="validate"
                                                    name="course_contactP_phone">
                                                <label for="t5-n3">Phone</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="t5-n5" type="email" class="validate"
                                                    name="course_contactP_email">
                                                <label for="t5-n5">Email</label>
                                            </div>
                                        </div>
                                        <div class="file-field input-field">
                                            <div class="btn admin-upload-btn">
                                                <span>Course Banner</span>
                                                <input type="file" multiple="" name="course_image">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text"
                                                    placeholder="Upload course banner image">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input
                                                        type="submit" class="waves-button-input" value="Submit"
                                                        name="add_course"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
              </div>
                        </div>
