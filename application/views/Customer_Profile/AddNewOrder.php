<?php include 'HnF/cus_header.php' ?>

<div class="container">
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

        <div>        
            <div class="form-group">
                <label for="InputDueDate">Due date</label>
                <input type="date" class="form-control" id="InputDueDate" placeholder="Due date" name="ddate">
            </div>
            <!--div class="form-group">
                <label for="InputPrice">Price</label>
                <input type="price" class="form-control" id="InputPrice" placeholder="Price" name="price">
            </div-->


            <div>
                <button type="submit" class="btn btn-default">Order now</button>
            </div>
            <br>
        </div>
        <br>
    <?php echo form_close(); ?>
    

</div>

<?php include 'HnF/cus_footer.php' ?>