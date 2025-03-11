<?php
include "form.php";
?>


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

.well{
    background: none;
    height: 400px;
    
    
}
.table-scroll {
    position: relative;
    max-height: 400px; /* ارتفاع ثابت للجسم */
    overflow-y: auto; /* التمرير العمودي */
    margin-right: -20px;  /* التمرير العمودي */
}

.table-scroll table {
    width: 100%;
    border-collapse: collapse;
    table-layout: fixed; /* تثبيت العرض */
}

.table-scroll thead {
    position: sticky;
    top: 0;
    z-index: 10;
    background-color: var(--primary); /* خلفية الرأس تبقى var(--primary) */
    color: var(--white); /* لون النص أبيض */
}

.table-scroll th, .table-scroll td {
    padding: 10px;
    text-align: left;
    border: 1px solid var(--border);
    white-space: nowrap; /* منع التفاف النص */
}

.table-scroll th {
    background-color: var(--primary); /* خلفية الرأس */
    color: var(--white); /* نص أبيض */
}

.table-warning th {
    background-color: #fff3cd; /* إذا كنت تريد استخدام لون مخصص للرأس */
    color: var( --black); /* النص أبيض */
}

.table-scroll tbody tr:hover {
    background-color: var(--hover);
}



</style>

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

<div class="well">
<div class="container">    
<div class="row">
<div class="col-sm-8">
<!-- table-primaryيمد لون الازرق  -->
<table class="table table-scroll table-hover table-responsive table-primary">
<thead class="table-warning">
<tr>
    <th scope="col">#</th>
    <th scope="col">firstname</th>
    <th scope="col">lastname</th>
    <th scope="col">age</th>
    <th scope="col">numberT</th>
    <th scope="col">sex</th>
    <th scope="col">num_of_visite</th>
    <th scope="col">modify</th>
    <th scope="col">delete</th>
</tr>


<!-- طريقة ملئ الجدول -->
</thead>
<tbody>
<?php
include ('conn.php');
$query=mysqli_query($conn,"select * from user_dent");
while($row=mysqli_fetch_array( $query)) {

?>
<tr>


<td> <?php echo $row ['id']; ?> </td>
<td> <?php echo $row ['firstname']; ?> </td>
<td> <?php echo $row ['lastname']; ?> </td>
<td> <?php echo $row ['age']; ?> </td>
<td> <?php echo $row ['numberT']; ?> </td>
<td> <?php echo $row ['sex']; ?> </td>
<td> <?php echo $row ['num_of_visite']; ?> </td>
<!-- edit -->
<td> <a  class="btn btn-success" href="edit.php?id_edit=<?php echo $row ['id'] ?>">modify</a> </td>
<!-- delete -->
<td> <a class="btn btn-danger" onclick='return confirm ("are sure you want to delete")'  href="delete.php?id_del=<?php echo $row ['id'] ?>">delete</a> </td>

</tr>
<?php
}
?>
</tbody>
</table>


</div>
</div>
</div> 
</div>   
