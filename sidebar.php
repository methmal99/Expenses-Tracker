<?php
session_start();
error_reporting(0);
include('dbconnection.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="background.css">
</head>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar" style="background-color: black; color:aliceblue" >
        <div class="profile-sidebar">
            <div class="profile-usertitle">
                <?php
$uid=$_SESSION['detsuid'];
$ret=mysqli_query($con,"select FullName from tbluser where ID='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['FullName'];

?>
                <div class="profile-usertitle-name"><?php echo $name; ?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu" >
            <li class="active"><a href="summary.php"><em class="fa fa-dashboard">&nbsp;</em> <b>Summary</b></a></li>
            
            
           
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1" >
                <em class="fa fa-navicon">&nbsp;</em> <b> Expenses </b> <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li><a class="" href="add_expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Add Expenses
                    </a></li>
                    <li><a class="" href="manage_expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Manage Expenses
                    </a></li>
                    
                </ul>

            </li>
           
  <li class="parent "><a data-toggle="collapse" href="#sub-item-2">
                <em class="fa fa-navicon">&nbsp;</em> <b> Expense Report </b> <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-2">
                    <li><a class="" href="date_reports.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> By Date
                    </a></li>
                    <li><a class="" href="monthly_reports.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> By Month
                    </a></li>
                    <li><a class="" href="annual_reports.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> By Annual
                    </a></li>
                    
                </ul>
            </li>
            
            <li><a href="help.php"><em class="fa fa-clone">&nbsp;</em> <b> Help </b> </a></li>

            <li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> <b> Logout </b> </a></li>

        </ul>
    </div>