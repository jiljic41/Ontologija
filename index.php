<?php
require 'vendor/autoload.php';

$foaf = new EasyRdf_Graph("http://localhost:8080/Ontologija/employees.rdf");
$foaf->load();

?>