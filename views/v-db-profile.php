<?php
//session_start();
@$sid = $_SESSION['StdsessionID'];
@$snm = $_SESSION['StdsessionNAME'];

$stdSQL = "SELECT * FROM `student_registration` WHERE student_id = '$sid' ";
$Students = $crud->select($stdSQL);
$student = mysqli_fetch_assoc($Students);

?>

<div class="udb-sec udb-prof">
    <h4><img src="images/icon/db1.png" alt="" /> My Profile</h4>
    <p>Welcome to your dashboard! Here, you have full access to your profile information, access necessary fees, exams as well as your result. You can as well Sign out or Logout of your profile when you are done.</p>
    <div class="sdb-tabl-com sdb-pro-table">
        <table class="responsive-table bordered">
            <tbody>
                <tr>
                    <td>Student Name</td>
                    <td>:</td>
                    <td><?php echo $student['fullname']; ?></td>
                </tr>
                <tr>
                    <td>Student Id</td>
                    <td>:</td>
                    <td><?php echo $student['student_id']; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo $student['email']; ?></td>
                </tr>
                <!-- <tr>
                    <td>Date of Birth</td>
                    <td>:</td>
                    <td><?php echo $student['DOB']; ?></td>
                </tr> -->
                <tr>
                    <td>Phone</td>
                    <td>:</td>
                    <td><?php echo $student['phone']; ?></td>
                </tr>
                <tr>
                    <td>Class</td>
                    <td>:</td>
                    <td><?php  echo $student['class']; ?></td>
                </tr>
                <!--        <tr>
                    <td>Academic Year</td>
                    <td>:</td>
                    <td><?php //echo $student['AcademicYear']; ?></td>
                </tr>-->
                <!-- <tr>
                    <td>Date of birth</td>
                    <td>:</td>
                    <td><?php// echo $formating->BD_Date_Style($student['DOB']) ; ?></td>
                </tr>  -->

            </tbody>
        </table>
        <div class="sdb-bot-edit">
            <p>Welcome to you dashboard readily made available for your convenience.</p>
            <!-- <a href="#" class="waves-effect waves-light btn-large sdb-btn sdb-btn-edit"><i class="fa fa-pencil"></i>
                Edit my profile</a> -->
        </div>
    </div>
</div>