<h2>Jets and Airborne Vehicle</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Vehicle</th>
            <th>Name</th>
            <th>Origin</th>
            <th>Type</th>

            <th>Armament</th>
            <th>Guidance System</th>
            <th>Speed (km/h)</th>
            <th>Turn Rate</th>
            <th>Fuel Capacity (Gallon)</th>
            <th>ECM (%)</th>
            <th>Ammo</th>
            <th>Accuary (%)</th>
            <th>Stabiliser (%)</th>
            <th>Missile Power</th>
            <th>Missile Suppression</th>
            <th>Missile Range (km)</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $showCRUD = new CRUD();
        $data = $showCRUD->airborne_read_data();

        $number = 1;
        while($list = $data->fetch_assoc()) {?>
        
        <tr>
            <!-- General Vehicle Data -->
            <td>
                <img src="../images/<?php print $list['vehicle_picture']; ?>" width="100" >
            </td>
            <td><?php print $list['vehicle_name']; ?></td>
            <td><?php print $list['vehicle_origin']; ?></td>
            <td><?php print $list['vehicle_type']; ?></td>

            <!-- Armoured Vehicle Data -->
            <td><?php print $list['vehicle_weapon']; ?></td>
            <td><?php print $list['vehicle_guide']; ?></td>
            <td><?php print $list['vehicle_speed']; ?></td>
            <td><?php print $list['vehicle_turn']; ?></td>
            <td><?php print $list['vehicle_fuel']; ?></td>
            <td><?php print $list['vehicle_ecm']; ?>%</td>
            <td>x<?php print $list['vehicle_ammo']; ?></td>
            <td><?php print $list['vehicle_accuary']; ?>%</td>
            <td><?php print $list['vehicle_stabliliser']; ?>%</td>
            <td><?php print $list['vehicle_power']; ?></td>
            <td><?php print $list['vehicle_suppression']; ?></td>
            <td><?php print $list['vehicle_range']; ?></td>
            <td>
                <a href="index.php?page=deleteAirborne&id=<?php print $list ['vehicle_id']; ?>" class="btn-danger btn">Delete</a>
                <a href="index.php?page=editAirborne&id=<?php print $list ['vehicle_id']; ?>" class="btn-warning btn">Edit</a>
            </td>
        </tr>  
    <?php $number++; } ?>
    </tbody>
</table>

<a href="index.php?page=addAirborne" class="btn btn-primary">Add New Vehicle</a>

<?php
if(isset($_GET['id']))
{
    $delete = $showCRUD->delete_airborne_data($_GET['id']);
    if($delete == "Success")
    {
        print "<script>alert('Data Successfully Deleted')</script>";
        print "<meta http-equiv='refresh' content='1;url=index.php?page=airborneVehicle'>";
    }
    else
    {
        print "An error occurred";
    }
}
?>