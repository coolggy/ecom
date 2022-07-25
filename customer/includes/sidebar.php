<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <?php
            $customer_session = $_SESSION['customer_email'];
            $get_customer = "SELECT * FROM customers WHERE customer_email='$customer_session";
            $run_customer = mysqli_query($con,$get_customer);
            $row_customer = mysqli_fetch_array($run_customer);
            $customer_image = $row_customer['customer_image'];
            $customer_name = $row_customer['customer_name'];
            if(!isset($_SESSION['customer_email'])){
                
            }else{
                echo "
                <center>
                    <img src='customer_image/$customer_image' class='img-responsive'>
                </center>
                <br/>
                <h3 class='panel-title' align='center'>
                    Name: $customer_name
                </h3>
                ";
            }
        ?>
    </div>
    <div class="panel-body">
        <ul class="nav-pills nav-stacked nav">
            <li class="<?php if(isset($_GET['my_orders'])){ echo"active"; } ?>">
                <a href="my_account.php?my_orders">
                    <i class="fa fa-list"></i> My Orders
                </a>
            </li>
            <li class="<?php if(isset($_GET['pay_offline'])){ echo"active"; } ?>">
                <a href="my_account.php?pay_offline">
                    <i class="fa fa-bolt"></i> Pay Offline
                </a>
            </li>
            <li class="<?php if(isset($_GET['edit_account'])){ echo"active"; } ?>">
                <a href="my_account.php?edit_account">
                    <i class="fa fa-pencil"></i> Edit Account
                </a>
            </li>
            <li class="<?php if(isset($_GET['chane_pass'])){ echo"active"; } ?>">
                <a href="my_account.php?chang_pass">
                    <i class="fa fa-user"></i> Change Password
                </a>
            </li>
            <li class="<?php if(isset($_GET['delete_account'])){ echo"active"; } ?>">
                <a href="my_account.php?delete_account">
                    <i class="fa fa-trash-o"></i> Delete Account
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <i class="fa fa-sign-out"></i> Log Out
                </a>
            </li>
        </ul>
    </div>
</div>