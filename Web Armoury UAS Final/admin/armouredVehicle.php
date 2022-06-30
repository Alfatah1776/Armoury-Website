<h2>Tanks and Armoured Vehicle</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Vehicle</th>
            <th>Origin</th>
            <th>Name</th>

            <th>Main Gun</th>
            <th>Calibre</th>
            <th>Speed km/h</th>
            <th>Front Armour</th>
            <th>Side Armour</th>
            <th>Rear Armour</th>
            <th>Top Armour</th>
            <th>Ammo</th>
            <th>Stabiliser</th>
            <th>AP Power</th>
            <th>HE Power</th>
            <th>Velocity</th>
            <th>Firing Rate r/min</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $showCRUD = new CRUD();
        $data = $showCRUD->armoured_read_data();

        $number = 1;
        while($list = $data->fetch_assoc()){?>
        <tr>
            <!-- General Vehicle Data -->
            <td>
                <img src="../images/<?php print $list['vehicle_picture']; ?>" width="100">
            </td>
            <td><?php print $list['vehicle_name']; ?></td>
            <td><?php print $list['vehicle_origin']; ?></td>

            <!-- Armoured Vehicle Data -->
            <td><?php print $list['vehicle_weapon']; ?></td>
            <td><?php print $list['vehicle_calibre']; ?>mm</td>
            <td><?php print $list['vehicle_speed']; ?></td>
            <td><?php print $list['vehicle_FrontArmour']; ?></td>
            <td><?php print $list['vehicle_SideArmour']; ?></td>
            <td><?php print $list['vehicle_RearArmour']; ?></td>
            <td><?php print $list['vehicle_TopArmour']; ?></td>
            <td>x<?php print $list['vehicle_ammo']; ?></td>
            <td><?php print $list['vehicle_stabliliser']; ?>%</td>
            <td><?php print $list['vehicle_AP']; ?></td>
            <td><?php print $list['vehicle_HE']; ?></td>
            <td><?php print $list['vehicle_range']; ?>m</td>
            <td><?php print $list['vehicle_rate']; ?></td>
            <td>
                <a href="index.php?page=deleteArmoured&id=<?php print $list ['vehicle_id']; ?>" class="btn-danger btn">Delete</a>
                <a href="index.php?page=editArmoured&id=<?php print $list ['vehicle_id']; ?>" class="btn-warning btn">Edit</a>
            </td>
        </tr>  
    <?php $number++; } ?>
    </tbody>
</table>

<a href="index.php?page=addArmoured" class="btn btn-primary">Add New Vehicle</a>

<?php
if(isset($_GET['id']))
{
    $delete = $showCRUD->delete_armoured_data($_GET['id']);
    if($delete == "Success")
    {
        print "<script>alert('Data Successfully Deleted')</script>";
        print "<meta http-equiv='refresh' content='1;url=index.php?page=armouredVehicle'>";
    }
    else
    {
        print "An error occurred";
    }
}
?>

