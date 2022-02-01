<?php

$viewAdmission_Request ="SELECT * FROM `admission_request` ";
$admission_request = $crud->select($viewAdmission_Request);

if(isset($_GET['status'])){
    if($_GET['status']== 'delete'){
        $id = $_GET['id'];
        $deletedata = "DELETE FROM `admission_request` WHERE id = $id";
       $deleteSMS =  $crud->delete($deletedata);
    }
}

if(isset($deleteSMS)){
    echo $deleteSMS;
}


?>


<!--== Admission Request Details ==-->
<h1> Admission Requests
    
</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Admission Request Details</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr >
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>City</th>
                                    <th>Education</th>
                                    <th>Course</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php while($admissionrequest = mysqli_fetch_assoc($admission_request)) { ?>


                                <tr>
                                    <td><?php echo $admissionrequest['name']; ?></td>
                                    <td><?php echo $admissionrequest['phone']; ?></td>
                                    <td><?php echo $admissionrequest['email']; ?></td>
                                    <td><?php echo $admissionrequest['city']; ?></td>
                                    <td><?php echo $admissionrequest['education']; ?></td>
                                    <td><?php echo $admissionrequest['course']; ?></td>
                                    <!-- <td>
                                        <?php if($teacher['teachers_status'] == 'Active'){?>
                                           <span class="label label-success">Active</span>
                                        <?php }else{?>
                                            <span class="label label-danger">Inactive</span>

                                        <?php } ?>
                                    </td> -->
                                    <!-- <td>
                                        <a href="ad-teacher-edit.php?status=edit&&id=<?php echo $teacher['teachers_id']; ?>" class="btn btn-success text-white" style="padding: 10px;">Edit</a>
                                        <a onclick="return confirm('Are You Sure??')" href="?status=delete&&id=<?php echo $teacher['teachers_id']; ?>" class="btn btn-danger text-white" style="padding: 10px;">Delete</a>
                                    </td> -->
                                    <!-- <td><a href="admin-student-details.html" class="ad-st-view">View</a></td> -->
                                </tr>
                               <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>