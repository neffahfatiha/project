<?php
include('conn.php');
$id=$_GET['id_edit'];
$query=mysqli_query($conn,"select * from `user_dent` where id='$id' ");
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../boot/bootstrap.min.css">
   
    <title>edit</title>
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
body{
  
    min-height: 100vh;
    background: url(../img/hero-bg.png) no-repeat;
}


</style>

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

<br>
<br><br><br><br>

<div class="container">    

<div class="mb-3 row">


<div class="col-sm-4">
<form method="POST" action="update.php?id_edit=<?php echo $id; ?>" class="form">
    <!-- هنا ندير على حساب واش درت في قاعدة البيانات -->
    <label  class="col-sm-2 col-form-label">firstname</label>
    <input  class="form-control" type="text" name="firstname" placeholder="firstname" required value="<?php echo $row ['firstname']?>">

    <label class="col-sm-2 col-form-label">lastname</label>
    <input class="form-control" type="text" name="lastname" placeholder="lastname" required value="<?php echo $row ['lastname']?>">

    <label  class="col-sm-2 col-form-label">age</label>
    <input class="form-control" type="number" name="age" placeholder="age" required value="<?php echo $row ['age']?>">
    
    <label class="col-sm-2 col-form-label" >numberT</label>
    <input class="form-control" type="text" name="numberT" placeholder="numberT" required value="<?php echo $row ['numberT']?>">

    <label  class="col-sm-2 col-form-label">sex</label>
    <select class="form-select" name="sex" value="<?php echo $row ['sex']?>">
        <option >woman</option>
        <option >man</option>
    </select>
   

    <label  class="col-sm-2 col-form-label">num_of_visite</label>
    <input class="form-control" type="number" name="num_of_visite" placeholder="num_of_visite" required value="<?php echo $row ['num_of_visite']?>">
<br>
    <!-- btn btn-primary هذي تمدلي لون الازرق -->
    <input type="submit" value="Add" class="btn btn-primary" name=""> </input>
</form>



</div>
</div>
</div> 



</body>
</html>