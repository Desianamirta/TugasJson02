<?php
$employeeData = '{   
	"employee_id": 1234567,    
	"name": "Jeff Fox",    
	"hire_date": "1/1/2013",    
	"location": "Norwalk, CT",
	"consultant": false
}';
$obj = json_decode($employeeData);
echo $obj->{'name'};
?>