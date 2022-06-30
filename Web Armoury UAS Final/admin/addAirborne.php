<h2>Add New Airborne Vehicle</h2>

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
        <input type="text" value="Airborne" class="form-control" name="category" readonly>
    </div>
    <div class="form-group">
        <label>Picture</label>
        <input type="file" class="form-control" name="picture" required>
    </div>
    <div class="form-group">
        <label>Type</label>
        <input type="text" value="Jet" class="form-control" name="type" readonly>
    </div>

    <!-- Armoured Vehicle Data -->
    <div class="form-group">
        <label>Main armament</label>
        <input type="text" class="form-control" name="weapon" required>
    </div>
    <div class="form-group">
        <label>Armament Guidance</label>
        <input type="text" class="form-control" name="guide" required>
    </div>
    <div class="form-group">
        <label>Vehicle Speed (km/h)</label>
        <input type="text" class="form-control" name="speed" required>
    </div>
    <div class="form-group">
        <label>Vehicle Turn</label>
        <input type="text" class="form-control" name="turn" required>
    </div>
    <div class="form-group">
        <label>Vehicle Fuel Capacity (Gallon)</label>
        <input type="text" class="form-control" name="fuel" required>
    </div>
    <div class="form-group">
        <label>Vehicle ECM (%)</label>
        <input type="text" class="form-control" name="ecm" required>
    </div>
    <div class="form-group">
        <label>Missile Carried</label>
        <input type="text" class="form-control" name="ammo" required>
    </div>
    <div class="form-group">
        <label>Missile Accuary (%)</label>
        <input type="text" class="form-control" name="accuary" required>
    </div>
    <div class="form-group">
        <label>Missile Stabiliser (%)</label>
        <input type="text" class="form-control" name="stabiliser" required>
    </div>
    <div class="form-group">
        <label>Missile Power</label>
        <input type="text" class="form-control" name="power" required>
    </div>
    <div class="form-group">
        <label>Missile Suppression</label>
        <input type="text" class="form-control" name="suppression" required>
    </div>
    <div class="form-group">
        <label>Missile Range (km)</label>
        <input type="text" class="form-control" name="range" required>
    </div>
    <button class="btn btn-primary" name="save">Save</button>
</form>

<?php
if(isset($_POST['save']))
{
    $vehicleName = $_POST['name'];
    $vehicleOrigin = $_POST['origin'];
    $vehicleCategory = $_POST['category'];
    $vehicleType = $_POST['type'];

    $name = $_FILES['picture']['name'];
    $location = $_FILES['picture']['tmp_name'];
    move_uploaded_file($location,"../images/".$name);

    $vehiclePicture = $name;

    $vehicleWeapon = $_POST['weapon'];
    $vehicleGuide = $_POST['guide'];
    $vehicleSpeed  = $_POST['speed'];
    $vehicleTurn  = $_POST['turn'];
    $vehicleFuel  = $_POST['fuel'];
    $vehicleECM  = $_POST['ecm'];
    $vehicleAmmo  = $_POST['ammo'];
    $vehicleAccuary  = $_POST['accuary'];
    $vehicleStabiliser  = $_POST['stabiliser'];
    $vehiclePower  = $_POST['power'];
    $vehicleSuppression  = $_POST['suppression'];
    $vehicleRange  = $_POST['range'];

    $saveCRUD = new CRUD();
    $newList = $saveCRUD->create_airborne_data($vehicleName, $vehicleOrigin, $vehicleCategory, $vehiclePicture, $vehicleType, $vehicleWeapon, 
    $vehicleGuide, $vehicleSpeed, $vehicleTurn, $vehicleFuel, $vehicleECM, $vehicleAmmo, $vehicleAccuary, $vehicleStabiliser, 
    $vehiclePower, $vehicleSuppression, $vehicleRange);
    if($newList == "Success")
    {
        print "<div class='alert alert-info'>New Vehicle Successfully Added</div>";
        print "<meta http-equiv='refresh' content='1;url=index.php?page=airborneVehicle'>";
    }
}
?>