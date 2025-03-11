<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>search</title>
    <link rel="stylesheet" href="../boot/bootstrap.min.css" type="text/css" media="screen">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');
:root {
    --primary: #1f2e88;
    --secondary: #2f66d4;
    --hover: #a2d9f5;
    --black: #333;
    --white: #fff;
    --light-coler: #666;
    --light-bg: #eee;
    --border: .2rem solid rgba(0, 0, 0, 0.1);
    --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 0.1);
}

.header {
    
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background: var(--white);
    box-shadow: var(--box-shadow);
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 25px 20px;
    
}

.header .logo {
    font-size: 1.5rem;
    font-weight: bolder;
    color: var(--primary);
    text-decoration: none;
    display: flex;
    align-items: center;
}
.header .logo i {
    color: var(--primary);
    padding-right: .5rem;
}

.header .navbar a {
    font-size: 1.3rem;
    color: var(--black);
    margin: 0 1rem;
    text-decoration: none;
    margin-left:10px ;
}

.header .navbar a:hover {
    color: var(--secondary);
}
body {
    min-height: 100vh;
    background: url(../img/hero-bg.png) no-repeat;
}


</style>



<script type="text/javascript">
    $(function(){
        $("#search_file").focus();
    });
</script>
<body>
    



   <!-- header start -->
<header class="header">
    <a href="#" class="logo"> 
        <img src="../img/1.png" width="40px" alt="logo"> 
        <i class="fas fa-tooth"></i> dentist.</a>
    <nav class="navbar">
            <a href="../html/home.html">Home</a>
            <a href="../html/about.html">About</a>
            <a href="../html/services.html">Services</a>
            <a href="../html/pricing.html">Pricing</a>
            <a href="../php/index.php">List_Patients</a>
    </nav>
</header>
<!-- header end --> 
<div class="container">
<div class="row">
<div class="col-lg-12">

<form  method="post" action="">
    <br/>
<p style="font-size:18px ; margin-left:30px;margin-top:95px">Search By Name
    <input type="text" autofocus="autofocus" name="search_file" id="search_file" style="width:230px; font-size: 18px;"class="textboxclass" />
<input type="submit" style="font-size:18px; margin-top:-9px;" class="btn btn-primary" name="submit" value="search">
</p>
</form>

<a href="index.php"><input type="submit" style="font-size:16px; margin-top:10px;"
class="btn btn-info" name="submit" value="Back To The Home Page"></a>
<br>
<br>
<table class="table table-hover table-responsive table-primary">
<thead class="table-warning">
<tr>
    <th scope="col">#</th>
    <th scope="col">firstname</th>
    <th scope="col">lastname</th>
    <th scope="col">age</th>
    <th scope="col">numberT</th>
    <th scope="col">sex</th>
    <th scope="col">num_of_visite</th>
   
</tr>
</thead>
<!-- طريقة ملئ الجدول -->
<tbody>
<?php
include ('conn.php');

error_reporting(0);
if($_POST['submit']) {
    $search_file = $_POST['search_file'];
    
    
    $sql=mysqli_query($conn,"select * from user_dent where firstname like '%$search_file%'
     or lastname like '%$search_file%' Order by lastname ASC");
    
    
    if (empty($search_file)) {
        echo '<script language ="javascript">';
        echo ' alert ("you have to fill in the field , please try again ")';
        echo '</script>';
        header ("refresh:2; url=index.php" );
    }
    else if (mysqli_num_rows($sql)> 0) {
$i = 1;
while($row = mysqli_fetch_array($sql)) {
?>
<tr>


<td> <?php echo $row ['id']; ?> </td>
<td> <?php echo $row ['firstname']; ?> </td>
<td> <?php echo $row ['lastname']; ?> </td>
<td> <?php echo $row ['age']; ?> </td>
<td> <?php echo $row ['numberT']; ?> </td>
<td> <?php echo $row ['sex']; ?> </td>
<td> <?php echo $row ['num_of_visite']; ?> </td>
</tr>
<?php
$i++;
}}
else {
    echo '<div class="alert alert-danger" style="width:130px ; float:right;margin-top:-142px;"> no results</div>';
}
?>



<?php
}
?>
</tbody>
</table>



</div>
</div>
</div>




</body>
</html>