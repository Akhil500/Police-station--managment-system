<!--<?php include"includes/admin_header.php"; ?>-->

    <div id="wrapper">
        
        <!-- Navigation -->
       <!-- <?php include"includes/admin_navigation.php"; ?>-->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <?php 

                        //$user_id=$_SESSION['s_id'];
                        if (isset($_GET['source'])) {
                            $source = $_GET['source'];
                        }
                        else {
                            $source = "";
                        }

                        switch ($source) {
                            case 'add_bus':
                                include "includes/add_bus.php";
                                break;
                            
                            case 'update':
                                include "includes/update.php";
                                break;

                            default: ?>
                                <table class="table table-bordered table-hover"> 
                                <thead>
                                    <tr>
                                        <th>case_id</th>
                                        <th>c_details</th>
                                        <th>c_loc</th>
                                        <th>c_type</th>
                                       
                                        
                                        <!-- <th>Available Seats</th> -->
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                    <?php 

                                        $query = "SELECT *  FROM  cases where user_id=$user_id";
                                        $select_posts = mysqli_query($connection,$query);

                                        while($row = mysqli_fetch_assoc($select_posts)) {
                                            $case_id = $row['case_id'];
                                            $c_details = $row['c_details'];
                                            $c_loc = $row['c_loc'];
                                            $c_type = $row['c_type'];
                                            //$user_id = $row['user_id'];
                                    ?>
                                    <tr>
                                        <td><?php echo $case_id ?></td>
                                        <td><?php echo $c_details ?></td>
                                        <td><?php echo $c_loc ?></td>
                                        <td><?php echo $c_type?></td>
                                        
                                        <?php echo "<td><a href='a_cases.php?delete=$case_id'>Delete</a></td>"; ?>
                                       
                                    </tr>
                                    <?php } }?>
                                </tbody>
                                </table><?php
                             
                        
                        ?>


                        <?php 

                        if (isset($_GET['delete'])) {
                            
                            $case_id = $_GET['delete'];
                            // echo "$bus_idd";
                            $query = "DELETE FROM cases WHERE case_id = {$case_id} ";

                            $delete_bus = mysqli_query($connection,$query);
                            if(!$delete_bus) {
                                die("Query Failed" . mysqli_error($delete_bus));
                            }
                            header("Location: a_cases.php");
                        }

                        ?>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

