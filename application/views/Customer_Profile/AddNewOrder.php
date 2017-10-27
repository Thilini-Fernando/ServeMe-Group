<?php include 'HnF/cus_header.php' ?>

<div class="container " id="order">
<?php

$cur_date = date('Y-m-d');
echo 'Current date: '.$cur_date;

?>
    <h1>
        <center>Add your Order</center>
    </h1>
    <hr>
    <?php echo validation_errors(); ?>
    <?php echo form_open('AddNewOrder/NewOrder') ?>


        <!--div class="form-group">
            <label for="newOrder">Taken date</label>
            <input type="taken date" class="form-control" id="InputTakenDate" placeholder="Today" name="tdate">
        </div-->
    <div class="col-sm-8 col-sm-offset-2">

                
        <div class="form-group">
            <label for="InputDueDate">Due date</label>
            <input type="due date" class="form-control" id="InputDueDate" placeholder="Due date" name="ddate">
        </div>
        <!--div class="form-group">
            <label for="InputPrice">Price</label>
            <input type="price" class="form-control" id="InputPrice" placeholder="Price" name="price">
        </div-->


   <center> <button type="submit" class="btn btn-default">Order now</button></center>
    <?php echo form_close(); ?>

</div>

<?php include 'HnF/cus_footer.php' ?>