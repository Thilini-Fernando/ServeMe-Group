<?php include 'HnF/cus_header.php' ?>
    <div class="right">
    <div class="container" id="viewCust">

                    <?php

                    $cur_date = date('Y-m-d');
                    echo 'Current date: '.$cur_date; //print current date

                    ?>
                    <center>
                        <h1><b>Customer Profile</b></h1>
                        <hr>
                        <table align="center">
                            <tr><td width="60%"> <h4><?php echo  'First Name   <td>'.$this->session->userdata('fname');?></h4><br></td></tr>
                            <tr><td><h4><?php echo   'Last Name   <td > '.$this->session->userdata('lname');?></h4><br></td></tr>
                            <tr><td> <h4> <?php echo 'Address  <td> '.$this->session->userdata('address');?></h4><br></td></tr>
                            <tr><td> <h4> <?php echo 'Contact No  <td> '.$this->session->userdata('contact');?> </h4><br></td></tr>
                            <tr><td><h4><?php echo   'email  <td> '.$this->session->userdata('email');?></h4></td></tr>

                            <br>


            </table>
        </div>
    </div>



    <!--?php echo 'All: '.$user_det;?-->




    </center>


<?php include 'HnF/cus_footer.php' ?>