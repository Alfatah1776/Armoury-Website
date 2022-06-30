<h2>Edit Armoured Vehicle Data</h2>
<?php
if(isset($_GET['id']))
    $editCRUD = new CRUD();
    $data = $editCRUD->edit_armoured_data($_GET['id']);
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

    <!-- Armoured Vehicle Data -->
    <div class="form-group">
        <label>Main Gun</label>
        <input type="text" class="form-control" name="gun" value="<?php print $list['vehicle_weapon']; ?>">
    </div>
    <div class="form-group">
        <label>Gun Calibre (mm)</label>
        <input type="text" class="form-control" name="calibre" value="<?php print $list['vehicle_calibre']; ?>">
    </div>
    <div class="form-group">
        <label>Vehicle Speed (km/h)</label>
        <input type="text" class="form-control" name="speed" value="<?php print $list['vehicle_speed']; ?>">
    </div>
    <div class="form-group">
        <label>Front Armour</label>
        <input type="text" class="form-control" name="front" value="<?php print $list['vehicle_FrontArmour']; ?>">
    </div>
    <div class="form-group">
        <label>Side Armour</label>
        <input type="text" class="form-control" name="side" value="<?php print $list['vehicle_SideArmour']; ?>">
    </div>
    <div class="form-group">
        <label>Rear Armour</label>
        <input type="text" class="form-control" name="rear" value="<?php print $list['vehicle_RearArmour']; ?>">
    </div>
    <div class="form-group">
        <label>Top Armour</label>
        <input type="text" class="form-control" name="top" value="<?php print $list['vehicle_TopArmour']; ?>">
    </div>
    <div class="form-group">
        <label>Ammo Capacity</label>
        <input type="text" class="form-control" name="ammo" value="<?php print $list['vehicle_ammo']; ?>">
    </div>
    <div class="form-group">
        <label>Gun Stabiliser (%)</label>
        <input type="text" class="form-control" name="stabiliser" value="<?php print $list['vehicle_stabliliser']; ?>">
    </div>
    <div class="form-group">
        <label>Armour Piercing Round (AP) Power</label>
        <input type="text" class="form-control" name="ap" value="<?php print $list['vehicle_AP']; ?>">
    </div>
    <div class="form-group">
        <label>High Explosive Round (HE) Power</label>
        <input type="text" class="form-control" name="he" value="<?php print $list['vehicle_HE']; ?>">
    </div>
    <div class="form-group">
        <label>Gun Velocity (m/s)</label>
        <input type="text" class="form-control" name="range" value="<?php print $list['vehicle_range']; ?>">
    </div>
    <div class="form-group">
        <label>Gun Rate of Fire (Rounds/min)</label>
        <input type="text" class="form-control" name="rate" value="<?php print $list['vehicle_rate']; ?>">
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

    $vehicleWeapon = $_POST['gun'];
    $vehicleCalibre = $_POST['calibre'];
    $vehicleSpeed = $_POST['speed'];
    $vehicleFont = $_POST['front'];
    $vehicleSide = $_POST['side'];
    $vehicleRear = $_POST['rear'];
    $vehicleTop = $_POST['top'];
    $vehicleAmmo = $_POST['ammo'];
    $vehicleStabiliser = $_POST['stabiliser'];
    $vehicleAP = $_POST['ap'];
    $vehicleHE = $_POST['he'];
    $vehicleRange = $_POST['range'];
    $vehicleRate = $_POST['rate'];

    $updateArmouredCRUD = new CRUD();
    $uploadArmouredCRUD = $updateArmouredCRUD->update_armoured_data($vehicleID, $vehicleName, $vehicleOrigin, 
    $vehicleCategory, $vehicleWeapon, $vehicleCalibre, $vehicleSpeed, $vehicleFont, $vehicleSide, 
    $vehicleRear, $vehicleTop, $vehicleAmmo, $vehicleStabiliser, $vehicleAP, $vehicleHE, $vehicleRange, $vehicleRate);
    if($uploadArmouredCRUD == "Success")
    {
        print "<div class='alert alert-info'>Vehicle Data Successfully Updated</div>";
        print "<meta http-equiv='refresh' content='1;url=index.php?page=armouredVehicle'>";
    }
}
?>
