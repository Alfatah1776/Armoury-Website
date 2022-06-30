<h2>Add New Support Vehicle</h2>

<form method="post" enctype="multipart/form-data">
    <!-- Basic Vehicle Data -->
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="form-group">
        <label>Origin</label>
        <select name="origin" class="form-control" required>
            <option value="United States">United States</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="Germany">Germany</option>
            <option value="Russia">Russia</option>
            <option value="China">China</option>
        </select>
    </div>
    <div class="form-group">
        <label>Category (Readonly)</label>
        <input type="text" value="Support" class="form-control" name="category" readonly>
    </div>
    <div class="form-group">
        <label>Picture</label>
        <input type="file" class="form-control" name="picture" required>
    </div>

    <!-- Armoured Vehicle Data -->
    <div class="form-group">
        <label>Main Weapon</label>
        <input type="text" class="form-control" name="gun" required>
    </div>
    <div class="form-group">
        <label>Gun Calibre (mm)</label>
        <input type="text" class="form-control" name="calibre" required>
    </div>
    <div class="form-group">
        <label>Vehicle Speed (km/h)</label>
        <input type="text" class="form-control" name="speed" required>
    </div>
    <div class="form-group">
        <label>Front Armour</label>
        <input type="text" class="form-control" name="front" required>
    </div>
    <div class="form-group">
        <label>Side Armour</label>
        <input type="text" class="form-control" name="side" required>
    </div>
    <div class="form-group">
        <label>Rear Armour</label>
        <input type="text" class="form-control" name="rear" required>
    </div>
    <div class="form-group">
        <label>Top Armour</label>
        <input type="text" class="form-control" name="top" required>
    </div>
    <div class="form-group">
        <label>Ammo Capacity</label>
        <input type="text" class="form-control" name="ammo" required>
    </div>
    <div class="form-group">
        <label>Gun Accuracy (%)</label>
        <input type="text" class="form-control" name="stabiliser" required>
    </div>
    <div class="form-group">
        <label>Armour Piercing Round (AP)</label>
        <input type="text" class="form-control" name="AP" required>
    </div>
    <div class="form-group">
        <label>High Explosive Round (HE)</label>
        <input type="text" class="form-control" name="HE" required>
    </div>
    <div class="form-group">
        <label>Gun Range of Fire (metre)</label>
        <input type="text" class="form-control" name="range" required>
    </div>
    <div class="form-group">
        <label>Gun Rate of Fire (Rounds/min)</label>
        <input type="text" class="form-control" name="rate" required>
    </div>
    <button class="btn btn-primary" name="save">Save</button>
</form>

<?php
if(isset($_POST['save']))
{
    $vehicleName = $_POST['name'];
    $vehicleOrigin = $_POST['origin'];
    $vehicleCategory = $_POST['category'];

    $name = $_FILES['picture']['name'];
    $location = $_FILES['picture']['tmp_name'];
    move_uploaded_file($location,"../images/".$name);

    $vehiclePicture = $name;

    $vehicleWeapon = $_POST['gun'];
    $vehicleCalibre = $_POST['calibre'];
    $vehicleSpeed  = $_POST['speed'];
    $vehicleFont  = $_POST['front'];
    $vehicleSide  = $_POST['side'];
    $vehicleRear  = $_POST['rear'];
    $vehicleTop  = $_POST['top'];
    $vehicleAmmo  = $_POST['ammo'];
    $vehicleStabiliser  = $_POST['stabiliser'];
    $vehicleAP  = $_POST['AP'];
    $vehicleHE  = $_POST['HE'];
    $vehicleRange  = $_POST['range'];
    $vehicleRate  = $_POST['rate'];

    $saveCRUD = new CRUD();
    $newList = $saveCRUD->create_support_data($vehicleName, $vehicleOrigin, $vehicleCategory, $vehiclePicture, $vehicleWeapon, 
    $vehicleCalibre, $vehicleSpeed, $vehicleFont, $vehicleSide, $vehicleRear, $vehicleTop, $vehicleAmmo, $vehicleStabiliser, 
    $vehicleAP, $vehicleHE, $vehicleRange, $vehicleRate);
    if($newList == "Success")
    {
        print "<div class='alert alert-info'>New Vehicle Successfully Added</div>";
        print "<meta http-equiv='refresh' content='1;url=index.php?page=supportVehicle'>";
    }
}
?>