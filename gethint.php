<?php
// Array with names
$a[] = "Ahemdabad";
$a[] = "Bhuj";
$a[] = "kolkata";
$a[] = "Darjelling";
$a[] = "Haridwar";
$a[] = "Gangotori";
$a[] = "Badrinath";
$a[] = "Amritsar";
$a[] = "Yamunotri";
$a[] = "Kedarnath";
$a[] = "Shimla";
$a[] = "Manali";
$a[] = "Chandigarh";
$a[] = "Mysore";
$a[] = "Bangalore";
$a[] = "Leh Ladak";
$a[] = "Nainital";
$a[] = "Dehradun";
$a[] = "Corbet";
$a[] = "Ranikhet";
$a[] = "Ooty";
$a[] = "Kodaikanal";
$a[] = "Tent City";
$a[] = "Pelling";
$a[] = "Char Dham";
$a[] = "Queen of hills";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= "<br> $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>