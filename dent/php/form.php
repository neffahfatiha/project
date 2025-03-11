<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../boot/bootstrap.min.css">
 <link rel="stylesheet" href="../php/sttyl.css">
    <title>Document</title>
</head>
<body>
<div class="container">    

<div class="mb-3 row">


<div class="col-sm-4">
<form method="POST" action="add.php" class="formm">
    <!-- هنا ندير على حساب واش درت في قاعدة البيانات -->
    <label  class="col-sm-2 col-form-label">firstname</label>
    <input  class="form-control" type="text" name="firstname" placeholder="firstname" required>

    <label class="col-sm-2 col-form-label">lastname</label>
    <input class="form-control" type="text" name="lastname" placeholder="lastname" required>

    <label  class="col-sm-2 col-form-label">age</label>
    <input class="form-control" type="number" name="age" placeholder="age" required>
    
    <label  class="col-sm-2 col-form-label">numberT</label>
    <input class="form-control" type="numberT" name="numberT" placeholder="numberT" required>

    <label  class="col-sm-2 col-form-label">sex</label>
    <select class="form-select" name="sex">
        <option >woman</option>
        <option >man</option>
    </select>

    <label  class="col-sm-2 col-form-label">num_of_visite</label>
    <input class="form-control" type="number" name="num_of_visite" placeholder="num_of_visite" required>
    <br>
    <!-- btn btn-primary هذي تمدلي لون الازرق -->
    <button type="submit"  class="btn btn-outline-primary btn-lg" name="">Add </button>
    <a   class="btn btn-outline-warning btn-lg"  href="search.php" role="button">search</a>
</form>



</div>
</div>
</div> 


</body>
</html>