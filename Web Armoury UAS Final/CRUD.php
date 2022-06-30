<?php

include ('connection.php');

class CRUD extends Connection
{
    function __construct()
    {
        parent::__construct();
    }

    //Create Data
    public function create_armoured_data($vehicleName, $vehicleOrigin, $vehicleCategory, $vehiclePicture, 
    $vehicleWeapon, $vehicleCalibre, $vehicleSpeed, $vehicleFont, $vehicleSide, $vehicleRear, $vehicleTop, 
    $vehicleAmmo, $vehicleStabiliser, $vehicleAP, $vehicleHE, $vehicleRange, $vehicleRate)
    {
        $saveArmouredData = "INSERT INTO armoured_data (vehicle_name, vehicle_origin, vehicle_category, vehicle_picture, 
        vehicle_weapon, vehicle_calibre, vehicle_speed, vehicle_FrontArmour, vehicle_SideArmour, vehicle_RearArmour, 
        vehicle_TopArmour, vehicle_ammo, vehicle_stabliliser, vehicle_AP, vehicle_HE, vehicle_range, vehicle_rate) 
        VALUE ('$vehicleName', '$vehicleOrigin', '$vehicleCategory', '$vehiclePicture', '$vehicleWeapon', 
        '$vehicleCalibre', '$vehicleSpeed', '$vehicleFont', '$vehicleSide', '$vehicleRear', '$vehicleTop', 
        '$vehicleAmmo', '$vehicleStabiliser', '$vehicleAP', '$vehicleHE', '$vehicleRange', '$vehicleRate')";
        $Armouredlist = $this->connection->query($saveArmouredData);

        if(!$Armouredlist)
        {
            return "An error occurred";
        }
        else
        {
            return "Success";
        }
    }

    public function create_support_data($vehicleName, $vehicleOrigin, $vehicleCategory, $vehiclePicture, 
    $vehicleWeapon, $vehicleCalibre, $vehicleSpeed, $vehicleFont, $vehicleSide, $vehicleRear, $vehicleTop, 
    $vehicleAmmo, $vehicleStabiliser, $vehicleAP, $vehicleHE, $vehicleRange, $vehicleRate)
    {
        $saveSupportData = "INSERT INTO support_data (vehicle_name, vehicle_origin, vehicle_category, vehicle_picture, 
        vehicle_weapon, vehicle_calibre, vehicle_speed, vehicle_FrontArmour, vehicle_SideArmour, vehicle_RearArmour, 
        vehicle_TopArmour, vehicle_ammo, vehicle_stabliliser, vehicle_AP, vehicle_HE, vehicle_range, vehicle_rate) 
        VALUE ('$vehicleName', '$vehicleOrigin', '$vehicleCategory', '$vehiclePicture', '$vehicleWeapon', 
        '$vehicleCalibre', '$vehicleSpeed', '$vehicleFont', '$vehicleSide', '$vehicleRear', '$vehicleTop', 
        '$vehicleAmmo', '$vehicleStabiliser', '$vehicleAP', '$vehicleHE', '$vehicleRange', '$vehicleRate')";
        $Supportlist = $this->connection->query($saveSupportData);

        if(!$Supportlist)
        {
            return "An error occurred";
        }
        else
        {
            return "Success";
        }
    } 

    public function create_airborne_data($vehicleName, $vehicleOrigin, $vehicleCategory, $vehiclePicture, $vehicleType, $vehicleWeapon, 
    $vehicleGuide, $vehicleSpeed, $vehicleTurn, $vehicleFuel, $vehicleECM, $vehicleAmmo, $vehicleAccuary, $vehicleStabiliser, 
    $vehiclePower, $vehicleSuppression, $vehicleRange)
    {
        $saveAirborneData = "INSERT INTO airborne_data (vehicle_name, vehicle_origin, vehicle_category, vehicle_picture, 
        vehicle_type, vehicle_weapon, vehicle_guide, vehicle_speed, vehicle_turn, vehicle_fuel, vehicle_ecm, vehicle_ammo, 
        vehicle_accuary, vehicle_stabliliser, vehicle_power, vehicle_suppression, vehicle_range) 
        VALUE ('$vehicleName', '$vehicleOrigin', '$vehicleCategory', '$vehiclePicture', '$vehicleType', '$vehicleWeapon', 
        '$vehicleGuide', '$vehicleSpeed', '$vehicleTurn', '$vehicleFuel', '$vehicleECM', '$vehicleAmmo', 
        '$vehicleAccuary', '$vehicleStabiliser', '$vehiclePower', '$vehicleSuppression', '$vehicleRange')";
        $Airbornelist = $this->connection->query($saveAirborneData);

        if(!$Airbornelist)
        {
            return "An error occurred";
        }
        else
        {
            return "Success";
        }
    } 

    //--------------- Read Armoured Data ---------------
    public function armoured_read_data()
    {
        $showData = "SELECT * FROM armoured_data WHERE vehicle_category = 'Tank'";
        $list = $this->connection->query($showData);

        return $list;
    }

    //Get Highest Vehicle Speed Value
    public function armoured_highest_value()
    {
        $getSpeed = "SELECT MAX(vehicle_speed) AS fastest FROM armoured_data";
        $maxSpeed = $this->connection->query($getSpeed);

        return $maxSpeed;
    }

    //Get Higher Vehicle Front Armour
    public function armoured_front_armour()
    {
        $getFront = "SELECT MAX(vehicle_FrontArmour) AS front FROM armoured_data";
        $maxFront = $this->connection->query($getFront);

        return $maxFront;
    }

    //Get Higher Vehicle Side Armour
    public function armoured_side_armour()
    {
        $getSide = "SELECT MAX(vehicle_SideArmour) AS side FROM armoured_data";
        $maxSide = $this->connection->query($getSide);

        return $maxSide;
    }

    //Get Higher Vehicle Rear Armour
    public function armoured_rear_armour()
    {
        $getRear = "SELECT MAX(vehicle_RearArmour) AS rear FROM armoured_data";
        $maxRear = $this->connection->query($getRear);

        return $maxRear;
    }

    //Get Higher Vehicle Top Armour
    public function armoured_top_armour()
    {
        $getTop = "SELECT MAX(vehicle_TopArmour) AS topArmour FROM armoured_data";
        $maxTop = $this->connection->query($getTop);

        return $maxTop;
    }

    //Get Higher Ammo Value
    public function armoured_max_ammo()
    {
        $getAmmo = "SELECT MAX(vehicle_ammo) AS ammo FROM armoured_data";
        $maxAmmo = $this->connection->query($getAmmo);

        return $maxAmmo;
    }

    //Get Higher Stabiliser Value
    public function armoured_max_stabiliser()
    {
        $getStabiliser = "SELECT MAX(vehicle_stabliliser) AS stabiliser FROM armoured_data";
        $maxStabiliser = $this->connection->query($getStabiliser);

        return $maxStabiliser;
    }

    //Get Higher AP Value
    public function armoured_max_AP()
    {
        $getAP = "SELECT MAX(vehicle_AP) AS AP FROM armoured_data";
        $maxAP = $this->connection->query($getAP);

        return $maxAP;
    }

    //Get Higher HE Value
    public function armoured_max_HE()
    {
        $getHE = "SELECT MAX(vehicle_HE) AS HE FROM armoured_data";
        $maxHE = $this->connection->query($getHE);

        return $maxHE;
    }

    //Get Higher Firing Range Value
    public function armoured_max_range()
    {
        $getRange = "SELECT MAX(vehicle_range) AS firingRange FROM armoured_data";
        $maxRange = $this->connection->query($getRange);

        return $maxRange;
    }
    
    //Get Higher Rate of Fire Value
    public function armoured_max_rate()
    {
        $getRate = "SELECT MAX(vehicle_rate) AS firingRate FROM armoured_data";
        $maxRate = $this->connection->query($getRate);

        return $maxRate;
    }

    //--------------- Read Support Data ---------------
    public function support_read_data()
    {
        $showData = "SELECT * FROM support_data WHERE vehicle_category = 'Support'";
        $list = $this->connection->query($showData);

        return $list;
    }

    //Get Highest Vehicle Speed Value
    public function support_speed_value()
    {
        $getSpeed = "SELECT MAX(vehicle_speed) AS fastest FROM support_data";
        $maxSpeed = $this->connection->query($getSpeed);

        return $maxSpeed;
    }

    //Get Higher Vehicle Front Armour
    public function support_front_armour()
    {
        $getFront = "SELECT MAX(vehicle_FrontArmour) AS front FROM support_data";
        $maxFront = $this->connection->query($getFront);

        return $maxFront;
    }

    //Get Higher Vehicle Side Armour
    public function support_side_armour()
    {
        $getSide = "SELECT MAX(vehicle_SideArmour) AS side FROM support_data";
        $maxSide = $this->connection->query($getSide);

        return $maxSide;
    }

    //Get Higher Vehicle Rear Armour
    public function support_rear_armour()
    {
        $getRear = "SELECT MAX(vehicle_RearArmour) AS rear FROM support_data";
        $maxRear = $this->connection->query($getRear);

        return $maxRear;
    }

    //Get Higher Vehicle Top Armour
    public function support_top_armour()
    {
        $getTop = "SELECT MAX(vehicle_TopArmour) AS topArmour FROM support_data";
        $maxTop = $this->connection->query($getTop);

        return $maxTop;
    }

    //Get Higher Ammo Value
    public function support_max_ammo()
    {
        $getAmmo = "SELECT MAX(vehicle_ammo) AS ammo FROM support_data";
        $maxAmmo = $this->connection->query($getAmmo);

        return $maxAmmo;
    }

    //Get Higher Stabiliser Value
    public function support_max_stabiliser()
    {
        $getStabiliser = "SELECT MAX(vehicle_stabliliser) AS stabiliser FROM support_data";
        $maxStabiliser = $this->connection->query($getStabiliser);

        return $maxStabiliser;
    }

    //Get Higher AP Value
    public function support_max_AP()
    {
        $getAP = "SELECT MAX(vehicle_AP) AS AP FROM support_data";
        $maxAP = $this->connection->query($getAP);

        return $maxAP;
    }

    //Get Higher HE Value
    public function support_max_HE()
    {
        $getHE = "SELECT MAX(vehicle_HE) AS HE FROM support_data";
        $maxHE = $this->connection->query($getHE);

        return $maxHE;
    }

    //Get Higher Firing Range Value
    public function support_max_range()
    {
        $getRange = "SELECT MAX(vehicle_range) AS firingRange FROM support_data";
        $maxRange = $this->connection->query($getRange);

        return $maxRange;
    }

    //Get Higher Rate of Fire Value
    public function support_max_rate()
    {
        $getRate = "SELECT MAX(vehicle_rate) AS firingRate FROM support_data";
        $maxRate = $this->connection->query($getRate);

        return $maxRate;
    }

    //--------------- Read Airborne Data ---------------
    public function airborne_read_data()
    {
        $showData = "SELECT * FROM airborne_data WHERE vehicle_category = 'Airborne'";
        $list = $this->connection->query($showData);

        return $list;
    }
    
    //Get Highest Vehicle Speed Value
    public function airborne_highest_value()
    {
        $getSpeed = "SELECT MAX(vehicle_speed) AS fastest FROM airborne_data";
        $maxSpeed = $this->connection->query($getSpeed);

        return $maxSpeed;
    }

    //Get Higher Vehicle Max Turn
    public function airborne_max_turn()
    {
        $getFront = "SELECT MAX(vehicle_turn) AS turn FROM airborne_data";
        $maxFront = $this->connection->query($getFront);

        return $maxFront;
    }

    //Get Higher Vehicle Fuel
    public function airborne_max_fuel()
    {
        $getSide = "SELECT MAX(vehicle_fuel) AS fuel FROM airborne_data";
        $maxSide = $this->connection->query($getSide);

        return $maxSide;
    }

    //Get Higher Vehicle Rear Armour
    public function airborne_max_ecm()
    {
        $getRear = "SELECT MAX(vehicle_ecm) AS ecm FROM airborne_data";
        $maxRear = $this->connection->query($getRear);

        return $maxRear;
    }

    //Get Higher Vehicle Ammo
    public function airborne_max_ammo()
    {
        $getTop = "SELECT MAX(vehicle_ammo) AS ammo FROM airborne_data";
        $maxTop = $this->connection->query($getTop);

        return $maxTop;
    }

    //Get Higher Accuary Value
    public function airborne_max_accuary()
    {
        $getAmmo = "SELECT MAX(vehicle_accuary) AS accuary FROM airborne_data";
        $maxAmmo = $this->connection->query($getAmmo);

        return $maxAmmo;
    }

    //Get Higher Stabiliser Value
    public function airborne_max_stabiliser()
    {
        $getStabiliser = "SELECT MAX(vehicle_stabliliser) AS stabiliser FROM airborne_data";
        $maxStabiliser = $this->connection->query($getStabiliser);

        return $maxStabiliser;
    }

    //Get Higher Missile Power Value
    public function airborne_max_power()
    {
        $getStabiliser = "SELECT MAX(vehicle_power) AS missilePower FROM airborne_data";
        $maxStabiliser = $this->connection->query($getStabiliser);

        return $maxStabiliser;
    }

    //Get Higher Suppression Value
    public function airborne_max_suppression()
    {
        $getAP = "SELECT MAX(vehicle_suppression) AS suppression FROM airborne_data";
        $maxAP = $this->connection->query($getAP);

        return $maxAP;
    }

    //Get Higher Firing Range Value
    public function airborne_max_range()
    {
        $getRange = "SELECT MAX(vehicle_range) AS firingRange FROM airborne_data";
        $maxRange = $this->connection->query($getRange);

        return $maxRange;
    }

    // --------------- Skirmish Armoured Data ---------------


    // --------------- Skirmish Support Data ---------------


    // --------------- Skirmish Airborbne Data ---------------


    //Edit Data
    public function edit_armoured_data($vehicleID)
    {
        $editData = "SELECT * FROM armoured_data WHERE vehicle_id = '$vehicleID'";
        $list = $this->connection->query($editData);
        return $list;
    }

    public function edit_support_data($vehicleID)
    {
        $editData = "SELECT * FROM support_data WHERE vehicle_id = '$vehicleID'";
        $list = $this->connection->query($editData);
        return $list;
    }

    public function edit_airborne_data($vehicleID)
    {
        $editData = "SELECT * FROM airborne_data WHERE vehicle_id = '$vehicleID'";
        $list = $this->connection->query($editData);
        return $list;
    }

    //Update Data
    public function update_armoured_data($vehicleID, $vehicleName, $vehicleOrigin, $vehicleCategory, 
    $vehicleWeapon, $vehicleCalibre, $vehicleSpeed, $vehicleFont, $vehicleSide, $vehicleRear, $vehicleTop, 
    $vehicleAmmo, $vehicleStabiliser, $vehicleAP, $vehicleHE, $vehicleRange, $vehicleRate)
    {
        $updateArmouredData = "UPDATE armoured_data SET vehicle_name = '$vehicleName', vehicle_origin = '$vehicleOrigin',
        vehicle_category = '$vehicleCategory', vehicle_weapon = '$vehicleWeapon',
        vehicle_calibre = '$vehicleCalibre', vehicle_speed = '$vehicleSpeed', vehicle_FrontArmour = '$vehicleFont', 
        vehicle_SideArmour = '$vehicleSide', vehicle_RearArmour = '$vehicleRear', vehicle_TopArmour = '$vehicleTop', 
        vehicle_ammo = '$vehicleAmmo', vehicle_stabliliser = '$vehicleStabiliser', vehicle_AP = '$vehicleAP', 
        vehicle_HE = '$vehicleHE', vehicle_range = '$vehicleRange', vehicle_rate = '$vehicleRate' 
        WHERE vehicle_id = '$vehicleID'";
        
        $Armouredlist = $this->connection->query($updateArmouredData);
        if(!$Armouredlist)
        {
            return "An error occurred";
        }
        else
        {
            return "Success";
        }
    }

    public function update_support_data($vehicleID, $vehicleName, $vehicleOrigin, $vehicleCategory, 
    $vehicleWeapon, $vehicleCalibre, $vehicleSpeed, $vehicleFont, $vehicleSide, $vehicleRear, $vehicleTop, 
    $vehicleAmmo, $vehicleStabiliser, $vehicleAP, $vehicleHE, $vehicleRange, $vehicleRate)
    {
        $updateArmouredData = "UPDATE support_data SET vehicle_name = '$vehicleName', vehicle_origin = '$vehicleOrigin',
        vehicle_category = '$vehicleCategory', vehicle_weapon = '$vehicleWeapon',
        vehicle_calibre = '$vehicleCalibre', vehicle_speed = '$vehicleSpeed', vehicle_FrontArmour = '$vehicleFont', 
        vehicle_SideArmour = '$vehicleSide', vehicle_RearArmour = '$vehicleRear', vehicle_TopArmour = '$vehicleTop', 
        vehicle_ammo = '$vehicleAmmo', vehicle_stabliliser = '$vehicleStabiliser', vehicle_AP = '$vehicleAP', 
        vehicle_HE = '$vehicleHE', vehicle_range = '$vehicleRange', vehicle_rate = '$vehicleRate' 
        WHERE vehicle_id = '$vehicleID'";
        
        $Armouredlist = $this->connection->query($updateArmouredData);
        if(!$Armouredlist)
        {
            return "An error occurred";
        }
        else
        {
            return "Success";
        }
    }

    public function update_airborne_data($vehicleID, $vehicleName, $vehicleOrigin, $vehicleCategory, $vehicleType, $vehicleWeapon, 
    $vehicleGuide, $vehicleSpeed, $vehicleTurn, $vehicleFuel, $vehicleECM, $vehicleAmmo, $vehicleAccuary, $vehicleStabiliser, 
    $vehiclePower, $vehicleSuppression, $vehicleRange)
    {
        $updateAirborneData = "UPDATE airborne_data SET vehicle_name = '$vehicleName', vehicle_origin  = '$vehicleOrigin',
        vehicle_category = '$vehicleCategory', vehicle_type = '$vehicleType', vehicle_weapon = '$vehicleWeapon',
        vehicle_guide = '$vehicleGuide', vehicle_speed = '$vehicleSpeed', vehicle_turn = '$vehicleTurn', 
        vehicle_fuel = '$vehicleFuel', vehicle_ecm = '$vehicleECM', vehicle_ammo = '$vehicleAmmo', 
        vehicle_accuary = '$vehicleAccuary', vehicle_stabliliser = '$vehicleStabiliser', vehicle_power  = '$vehiclePower', 
        vehicle_suppression = '$vehicleSuppression', vehicle_range = '$vehicleRange'
        WHERE vehicle_id = '$vehicleID'";
        
        $Airbornelist = $this->connection->query($updateAirborneData);
        if(!$Airbornelist)
        {
            return "An error occurred";
        }
        else
        {
            return "Success";
        }
    }
  
    //Delete Data
    public function delete_armoured_data($vehicleID)
    {   
        $getPicture = "SELECT * FROM armoured_data WHERE vehicle_id = '$vehicleID'";
        $list = $this->connection->query($getPicture);

        $PullPicture = $list->fetch_assoc();
        $pictureName = $PullPicture['vehicle_picture'];
        if (file_exists("../images/$pictureName"))
        {
            unlink("../images/$pictureName");
        }

        $deleteData = "DELETE FROM armoured_data WHERE vehicle_id = '$vehicleID'";
        $list = $this->connection->query($deleteData);

        if(!$list)
        {
            return "An errror occurred";
        }
        else
        {
            return "Success";
        }
    }

    public function delete_support_data($vehicleID)
    {   
        $getPicture = "SELECT * FROM support_data WHERE vehicle_id = '$vehicleID'";
        $list = $this->connection->query($getPicture);

        $PullPicture = $list->fetch_assoc();
        $pictureName = $PullPicture['vehicle_picture'];
        if (file_exists("../images/$pictureName"))
        {
            unlink("../images/$pictureName");
        }

        $deleteData = "DELETE FROM support_data WHERE vehicle_id = '$vehicleID'";
        $list = $this->connection->query($deleteData);

        if(!$list)
        {
            return "An errror occurred";
        }
        else
        {
            return "Success";
        }
    }

    public function delete_airborne_data($vehicleID)
    {   
        $getPicture = "SELECT * FROM airborne_data WHERE vehicle_id = '$vehicleID'";
        $list = $this->connection->query($getPicture);

        $PullPicture = $list->fetch_assoc();
        $pictureName = $PullPicture['vehicle_picture'];
        if (file_exists("../images/$pictureName"))
        {
            unlink("../images/$pictureName");
        }

        $deleteData = "DELETE FROM airborne_data WHERE vehicle_id = '$vehicleID'";
        $list = $this->connection->query($deleteData);

        if(!$list)
        {
            return "An errror occurred";
        }
        else
        {
            return "Success";
        }
    }

    // public function search_data($keyword)
    // {
    //     //  
    //     $pullData = "SELECT * FROM armoured_data WHERE vehicle_name LIKE '%$keyword'%";
    //     $list = $this->connection->query($pullData);
        
    //     if(!$list)
    //     {
    //         return "An errror occurred";
    //     }
    //     else
    //     {
    //         return "Success";
    //     }
    // }

    public function search_armoured($keywords)
    {
        $pullArmoured = "SELECT * FROM armoured_data WHERE vehicle_name LIKE '%$keywords%' OR vehicle_origin LIKE '%$keywords%' 
        OR vehicle_category LIKE '%$keywords%'";
        $list = $this->connection->query($pullArmoured);

        return $list;
    }

    public function search_support($keywords)
    {
        $pullSupport = "SELECT * FROM support_data WHERE vehicle_name LIKE '%$keywords%' OR vehicle_origin LIKE '%$keywords%' 
        OR vehicle_category LIKE '%$keywords%'";
        $list = $this->connection->query($pullSupport);

        return $list;
    }

    public function search_airborne($keywords)
    {
        $pullAirborne = "SELECT * FROM airborne_data WHERE vehicle_name LIKE '%$keywords%' OR vehicle_origin LIKE '%$keywords%' 
        OR vehicle_category LIKE '%$keywords%'";
        $list = $this->connection->query($pullAirborne);

        return $list;
    }

    public function admin_login($username, $password)
    {
        $checkData = "SELECT * FROM admin WHERE admin_username = '$username' AND admin_password = '$password'";
        $list = $this->connection->query($checkData);
        
        $correctAdmin = $list->num_rows;

        if($correctAdmin == 1)
        {
            $_SESSION['admin'] = $list->fetch_assoc();
            print "<div class='alert alert-info'>Login Successfull</div>";
            print "<meta http-equiv='refresh' content='1;url=admin/index.php'>";
        }
        else
        {
            print "<div class='alert alert-danger'>Login Failed</div>";
            print "<meta http-equiv='refresh' content='1;url=login.php'>";                                   
        }
    }
}

?>