<?php

chdir('..');
include_once 'services/ServicesService.php'; //'../services/ServicesService.php'; 
extract($_POST);

$ss = new ServicesService();

if($op!=''){
    if($op == 'add'){
        $ss->create(new Service(0,$code,$name));
    }
    elseif($op == 'update'){
        $ss->update(new Service($id,$code,$name));
        
    }
    elseif($op == 'delete'){
        $ss->delete($ss-> delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ss->findAll());

