<?php
  include_once "../../models/items/Items.php";

  $items = new Items("perfiles");
  $profileList = $items->getProfiles();

  foreach($profileList as $profile){
    $profileId = $profile['idPerfiles'];
    $fullName = $profile['nombres'] . " " . $profile['apellidos'];

    echo <<< html
      <option value="$profileId">$fullName</option>
    html;
  }
?>