<?php
   require_once('connection.php');

   $pdo_statement = $conn->prepare("SELECT * FROM `payment_details.` where id=" . $_GET["id"]);
   $pdo_statement->execute();   
   $view =  $pdo_statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<?php
$index=true;
$title="Payment Detail";
include 'header.php';
?>
<body>
<div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-4">
                <form class="bg-white p-3">
                   <div class="m-4">
                       <h4>Payment Detail</h4>
                       <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control"  name="Name" value="<?php echo $view[0]['Name']; ?>" >
                        </div> 
                        <div class="form-group">
                            <label for="nom">Payment Schedule</label>
                            <input type="text" class="form-control"  name="payment" value="<?php echo $view[0]['payment']; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="nom">Bill Number</label>
                            <input type="text" class="form-control"  name="bill" value="<?php echo $view[0]['bill']; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="nom">Amount Paid</label>
                            <input type="text" class="form-control"  name="amount" value="<?php echo $view[0]['amount']; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="nom">Balance amount</label>
                            <input type="text" class="form-control"  name="balance" value="<?php echo $view[0]['balance']; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="nom">Date</label>
                            <input type="text" class="form-control"  name="balance" value="<?php echo $view[0]['date']; ?>" >
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>

</body>
</html>