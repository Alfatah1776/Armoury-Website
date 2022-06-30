<h2>Edit Airborne Vehicle Data</h2>
<?php
if(isset($_GET['id']))
    $editCRUD = new CRUD();
    $data = $editCRUD->edit_airborne_data($_GET['id']);
    $list = $data->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
    <!-- Basic Vehicle Data -->
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" value="<?php print $list['vehicle_name']; ?>">
    </div>

    <div class="form-group">
        <label>Origin</label>
        <select name="origin" class="form-control" required>
            <?php
            $selected = $list['vehicle_origin'];
            if($selected == 'United States')
            {
                print "<option selected value='United States'>United States</option>";
                print "<option value='United Kingdom'>United Kingdom</option>";
                print "<option value='Germany'>Germany</option>";
                print "<option value='Russia'>Russia</option>";
                print "<option value='China'>China</option>";
            }
            if($selected == 'United Kingdom')
            {
                print "<option value='United States'>United States</option>";
                print "<option selected value='United Kingdom'>United Kingdom</option>";
                print "<option value='Germany'>Germany</option>";
                print "<option value='Russia'>Russia</option>";
                print "<option value='China'>China</option>";
            }
            if($selected == 'Germany')
            {
                print "<option value='United States'>United States</option>";
                print "<option value='United Kingdom'>United Kingdom</option>";
                print "<option selected value='Germany'>Germany</option>";
                print "<option value='Russia'>Russia</option>";
                print "<option value='China'>China</option>";
            }
            if($selected == 'Russia')
            {
                print "<option value='United States'>United States</option>";
                print "<option value='United Kingdom'>United Kingdom</option>";
                print "<option value='Germany'>Germany</option>";
                print "<option selected value='Russia'>Russia</option>";
                print "<option value='China'>China</option>";
            }
            if($selected == 'China')
            {
                print "<option value='United States'>United States</option>";
                print "<option value='United Kingdom'>United Kingdom</option>";
                print "<option value='Germany'>Germany</option>";
                print "<option value='Russia'>Russia</option>";
                print "<option selected value='China'>China</option>";
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label>Category (Readonly)</label>
        <input type="text" class="form-control" name="category" value="<?php print $list['vehicle_category']; ?>" readonly>
    </div>
    <div class="form-group">
        <label>ID (Readonly)</label>
        <input type="text" class="form-control" name="id" value="<?php print $list['vehicle_id']; ?>" readonly>
    </div>
    <div class="form-group">
        <label>Type</label>
        <input type="text" class="form-control" name="type" value="Jet" readonly>
    </div>

    <!-- Armoured Vehicle Data -->
    <div class="form-group">
        <label>Main armament</label>
        <input type="text" class="form-control" name="weapon" value="<?php print $list['vehicle_weapon']; ?>">
    </div>
    <div class="form-group">
        <label>Armament Guidance</label>
        <input type="text" class="form-control" name="guide" value="<?php print $list['vehicle_guide']; ?>">
    </div>
    <div class="form-group">
        <label>Vehicle Speed (km/h)</label>
        <input type="text" class="form-control" name="speed" value="<?php print $list['vehicle_speed']; ?>">
    </div>
    <div class="form-group">
        <label>Vehicle Turn</label>
        <input type="text" class="form-control" name="turn" value="<?php print $list['vehicle_turn']; ?>">
    </div>
    <div class="form-group">
        <label>Vehicle Fuel Capacity (Gallon)</label>
        <input type="text" class="form-control" name="fuel" value="<?php print $list['vehicle_fuel']; ?>">
    </div>
    <div class="form-group">
        <label>Vehicle ECM (%)</label>
        <input type="text" class="form-control" name="ecm" value="<?php print $list['vehicle_ecm']; ?>">
    </div>
    <div class="form-group">
        <label>Missile Carried</label>
        <input type="text" class="form-control" name="ammo" value="<?php print $list['vehicle_ammo']; ?>">
    </div>
    <div class="form-group">
        <label>Vehicle Accuary (%)</label>
        <input type="text" class="form-control" name="accuary" value="<?php print $list['vehicle_accuary']; ?>">
    </div>
    <div class="form-group">
        <label>Missile Stabiliser (%)</label>
        <input type="text" class="form-control" name="stabiliser" value="<?php print $list['vehicle_stabliliser']; ?>">
    </div>
    <div class="form-group">
        <label>Missile Power</label>
        <input type="text" class="form-control" name="power" value="<?php print $list['vehicle_power']; ?>">
    </div>
    <div class="form-group">
        <label>Missile Suppression</label>
        <input type="text" class="form-control" name="suppression" value="<?php print $list['vehicle_suppression']; ?>">
    </div>
    <div class="form-group">
        <label>Missile Range (km)</label>
        <input type="text" class="form-control" name="range" value="<?php print $list['vehicle_range']; ?>">
    </div>
    <button class="btn btn-primary" name="update">Update</button>
</form>

<?php 
if(isset($_POST['update']))
{
    $vehicleID = $_POST['id'];
    $vehicleName = $_POST['name'];
    $vehicleOrigin = $_POST['origin'];
    $vehicleCategory = $_POST['category'];
    $vehicleType = $_POST['type'];

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

    $updateArmouredCRUD = new CRUD();
    $uploadArmouredCRUD = $updateArmouredCRUD->update_airborne_data($vehicleID, $vehicleName, $vehicleOrigin, 
    $vehicleCategory, $vehicleType, $vehicleWeapon, $vehicleGuide, $vehicleSpeed, $vehicleTurn, $vehicleFuel, 
    $vehicleECM, $vehicleAmmo, $vehicleAccuary, $vehicleStabiliser, $vehiclePower, $vehicleSuppression, $vehicleRange);
    if($uploadArmouredCRUD == "Success")
    {
        print "<div class='alert alert-info'>Vehicle Data Successfully Updated</div>";
        print "<meta http-equiv='refresh' content='1;url=index.php?page=airborneVehicle'>";
    }
}
?>
