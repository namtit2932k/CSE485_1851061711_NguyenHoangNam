<?php
include('configadmin.php');
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
?>
<body>
<title>Work</title>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="info.php">Info</a>
  <a href="education.php">Education</a>
  <a href="work.php">Work</a>
  <a href="testimonial.php">Testimonial</a>
  <a href="link.php">Link</a>
  <a href="users.php">Users</a>
  <a href="logout.php">Log out</a>
  <a href="../index.php"><i class="fas fa-arrow-left"></i> Back</a>
</div>

<span onclick="openNav()"><i class="fas fa-align-justify fa-3x mt-2 ml-3"></i></span>

<div id="main">
    <div class="container">
    <form class="form-inline">
        <div class="form-group">
            <h1 class="" style="text-align:left">Work</h1>
            <a name="" id="" class="btn btn-primary ml-3" href="creatework.php" role="button">Add <i class="fas fa-plus"></i></a>

        </div>
    </form>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Work ID</th>
                    <th>ID</th>
                    <th>Work Name</th>
                    <th>Work Location</th>
                    <th>Date</th>
                    <th>About</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $sql="select * from work";
            $res=mysqli_query($conn,$sql);
            $datas=mysqli_fetch_all($res);
            foreach($datas as $data)
            {
                echo '<tr>';
                echo '<td>'.$data[0].'</td>';
                echo '<td>'.$data[1].'</td>';
                echo '<td>'.$data[2].'</td>';
                echo '<td>'.$data[3].'</td>';
                echo '<td>'.$data[4].'</td>';
                echo '<td>'.$data[5].'</td>';
                echo '<td><a href="updatework.php?id='.$data[0].'" role="button"><i class="fas fa-pen mr-2"></i></a><a href="deletework.php?id='.$data[0].'" role="button"><i class="fas fa-trash-alt ml-2"></i></a></td>';
                echo '</tr>';
            }
            mysqli_close($conn);
            ?>               
            </tbody>
        </table>
    </div>
</div>
</body>
</html>