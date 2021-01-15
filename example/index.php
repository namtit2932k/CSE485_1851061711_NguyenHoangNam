<?php
include('header.php');
?>
<body>
<title>Home</title>
    <h1 class="text-danger" style="text-align:center">Information of Blood Donor</h1>
    <div class="container">
        <a name="" id="" class="btn btn-primary" href="create.php" role="button" style="margin-bottom:10px">Add <i class="fas fa-plus"></i></a>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Sex</th>
                    <th>Age</th>
                    <th>Blood Group</th>
                    <th>Reg Date</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $sql="select * from BLOOD_DONOR";
            $res=mysqli_query($conn,$sql);
            $datas=mysqli_fetch_all($res);
            foreach($datas as $data)
            {
                echo '<tr>';
                echo '<td scope="row"><a href="read.php?id='.$data[0].'">'.$data[0].'</a></td>';
                echo '<td>'.$data[1].'</td>';
                echo '<td>'.$data[2].'</td>';
                echo '<td>'.$data[3].'</td>';
                echo '<td>'.$data[4].'</td>';
                echo '<td>'.$data[5].'</td>';
                echo '<td>'.$data[6].'</td>';
                echo '<td><a href="update.php?id='.$data[0].'" role="button"><i class="fas fa-pen mr-2"></i></a><a href="delete.php?id='.$data[0].'" role="button"><i class="fas fa-trash-alt ml-2"></i></a></td>';
                echo '</tr>';
            }
            mysqli_close($conn);
            ?>               
            </tbody>
        </table>
    </div>
</body>
</html>