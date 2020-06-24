<?php 
    
    $title = 'Index';
    require_once 'includes/header.php';
    require_once 'db/conn.php';


   $results = $crud->getSpecialties();
?>
   
  
    <!--
        -First name
        -Last name
        -Data of Birth
        - Sepcialty (database admin, software developer, web administration)
        -Email address
        -contact number
    -->
   

    <h1 class="text-md-center">Food Order System</h1>
   



    <form method="post" action="success.php">
    <div class="form-group">
            <label for="firstname">Food Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" a placeholder="Enter Food Name">
            
        </div>
    <div class="form-group">
            <label for="lastname">User Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" a placeholder="Enter User Name">
            
        </div>
    

    <div class="form-group">
            <label for="specialty">Your favourite taste</label>
            <select class="form-control" id="specialty" name="specialty">
            
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $r['specialty_id']?>"> <?php  echo $r['name']; ?></option>



                <?php }?>
            
        </select>
            
        </div>
       
        <div class="form-group">
            <label for="phone">Quantity</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
            
        </div>
        
        
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>

    