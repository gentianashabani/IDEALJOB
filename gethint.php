<?php
// Array with names
$a[] = "Zara";
$a[] = "Aztech";
$a[] = "Besa Security";
$a[] = "Sach Pizza";
$a[] = "Konstruktori ING";
$a[] = "Neptun";
$a[] = "Prishtinë";
$a[] = "Fushë Kosovë";
$a[] = "Pejë";
$a[] = "Lipjan";
$a[] = "Podujevë";
$a[] = "Ferizaj";
$a[] = "Asistent/e të shitjes";
$a[] = "Shitës/e";
$a[] = "Sigurim";
$a[] = "Gastronomi";
$a[] = "Podujevë";
$a[] = "Ndërtimtari";

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
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>
