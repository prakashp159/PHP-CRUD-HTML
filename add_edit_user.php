<?php include_once ('layout/header.php') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

  <!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Add New User
    <a class="btn btn-primary float-right" href="users.php">Back</a>
</h1>


<form action="<?php site_url("add_edit_user.php"); ?>" method="post">
    <div class="row">
        <!-- Fields -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    User Details
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="first_name">First Name*</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="last_name">Last Name*</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="email">Email*</label>
                            <input type="email" class="form-control" id="email" name="email" value="">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" value="">
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" class="form-control" id="age" name="age" value="">
                            </div>
                            <div>
                                <label class="w-100">Status</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="status_1" value="1">
                                    <label class="form-check-label" for="status_1">Enable</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="status_0" value="0">
                                    <label class="form-check-label" for="status_0">Disable</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" rows="4" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- EOF Fields -->
        <!-- Action -->
        <div class="col-md-3">
        <div class="card">
                <div class="card-header">
                    Action
                </div>
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-secondary">Clear</button>
                    <button type="reset" class="btn btn-danger">Delete</button>
                  
                </div>
            </div>
        </div>
        <!-- EOF Action -->
    </div>
    
    
</form>

<?php
    include_once('layout/footer.php');
?>