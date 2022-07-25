<h1 align="center">Edit Your Account</h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Customer Name:</label>
        <input type="text" class="form-control" name="c_name" required>
    </div>
    <div class="form-group">
        <label>Customer Email:</label>
        <input type="text" class="form-control" name="c_email" required>
    </div>
    <div class="form-group">
        <label>Customer Country:</label>
        <input type="text" class="form-control" name="c_country" required>
    </div>
    <div class="form-group">
        <label>Customer City:</label>
        <input type="text" class="form-control" name="c_city" required>
    </div>
    <div class="form-group">
        <label>Customer Contact:</label>
        <input type="text" class="form-control" name="c_contact" required>
    </div>
    <div class="form-group">
        <label>Customer Address:</label>
        <input type="text" class="form-control" name="c_address" required>
    </div>
    <div class="form-group">
        <label>Customer Image:</label>
        <input type="file" class="form-control" name="c_images" required>
        <img src="customer_images/logo.jpg" alt="Customer_Image" class="img-responsive">
    </div>
    <div class="text-center">
        <button name="update" class="btn btn-primary">
            <i class="fa fa-user-md"></i> Update Now
        </button>
    </div>
</form>