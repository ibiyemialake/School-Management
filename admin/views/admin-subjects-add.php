<?php
$teachersSQL = "SELECT * FROM `teachers`";
$teachers = $crud->select($teachersSQL);

$classSQL = "SELECT * FROM `class`";
$classes = $crud->select($classSQL);

if(isset($_POST['add_Subject'])){
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
?>
<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Subject Add</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post">
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Subject Name</label>
                                <input type="text" value="" class="validate" required name="subject_name">
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Class ID</label>
                                <select id="inputState" class="form-control" name="class_id"
                                    style="font-size: 15px;">
                                    <option selected disabled>---Choose Class---</option>
                                    <?php while($class = mysqli_fetch_assoc($classes)){ ?>
                                        <option value="<?php echo $class['class_id']; ?>"><?php echo $class['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Teachers ID</label>
                                <select id="inputState" class="form-control" name="teacher_id"
                                    style="font-size: 15px;">
                                    <option selected disabled>---Choose Teachers---</option>
                                    <?php while($teacher = mysqli_fetch_assoc($teachers)){ ?>
                                        <option value="<?php echo $teacher['teachers_id']; ?>"><?php echo $teacher['teachers_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit"
                                        class="waves-button-input" name="add_Subject"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
