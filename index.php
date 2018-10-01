<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>


<?php
//variables
echo "<h2>Quiz 3 Array</h2>";


$jobs = array
(

array("name"=>"Jeff" , "city"=>"Memphis" , "state"=>"TN" , "kids"=>5 , "job"=>"Target" , "salary"=>75,000;
array("name"=>"Tim" , "city"=>"Atlanta" , "state"=>"GA" , "kids"=>3 , "job"=>"Target" , "salary"=>75,000;
array("name"=>"John" , "city"=>"San Diego" , "state"=>"CA" , "kids"=>2 , "job"=>"Walmart" , "salary"=>95,000;


);




//output
echo "<table><tr><th>Name</th><th>City</th><th>State</th><th>Kids</th><th>Job</th><th>Salary</th></tr>";

foreach($jobs as $job)
{
echo "<tr><td>" . $job['name'] . "</td>";
echo "<td>" . $job['city'] . "</td>";
echo "<td>" . $job['state'] . "</td>";
echo "<td>" . $job['kids'] . "</td>";
echo "<td>" . $job['jobs'] . "</td>";
echo "<td>" . number_format($job['salary']) . "</td></tr>";
}


echo "</table>";

$job = array("Johns Salary");
$job[0] =number_format("95000");
echo "Johns salary is " . $job[0] . ". ";
 ?>


</body>
</html>
