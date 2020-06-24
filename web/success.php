<?php 
    
    $title = 'Success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if(isset($_POST['submit'])){
        
      
       //extract values from the $_POST array
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
       
        $quan = $_POST['phone'];
        $specialty = $_POST['specialty'];
        

        //call function to insert and track if success or not
        $isSuccess = $crud->insertAttendees($fname, $lname,  $quan, $specialty);

        if($isSuccess){
            echo  '<h1 class="text-center text-success"> You Have Been Ordered Successfully!</h1>' ;

        }
        else {
            echo '<h1 class="text-center text-danger"> There is a problem in processing </h1>' ;

        }
    }
?>
   

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            
            <p class="card-text">
                You have been ordered successfully!!! 
            </p>
           
    
        </div>
    </div>




<br>
<br>
<?php require_once 'includes/footer.php'; ?>