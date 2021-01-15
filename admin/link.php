<?php
include('configadmin.php');
?>
<body>
<title>Link</title>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="info.php">Info</a>
  <a href="education.php">Education</a>
  <a href="work.php">Work</a>
  <a href="skill.php">Skill</a>
  <a href="link.php">Link</a>
  <a href="../index.php"><i class="fas fa-arrow-left"></i> Back</a>
</div>

<span onclick="openNav()"><i class="fas fa-align-justify fa-3x mt-2 ml-3"></i></span>

<div id="main">
    <div class="container">
    <h1 class="" style="text-align:left">Link</h1>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Facebook</th>
                    <th>Instagram</th>
                    <th>Twitter</th>
                    <th>Skype</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $sql="select * from education";
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
                echo '<td><a href="update.php?id='.$data[0].'" role="button"><i class="fas fa-pen mr-2"></i></a><a href="delete.php?id='.$data[0].'" role="button"><i class="fas fa-trash-alt ml-2"></i></a></td>';
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