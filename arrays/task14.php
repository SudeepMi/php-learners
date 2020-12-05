
<table border= 1>

<?php

$student= array(
    array(
        "name"=>"sudeep",
        "marks" => 50
    ),
    array(
        "name"=>"sharmila",
        "marks" => 60
    ),
    array(
        "name"=>"sangya",
        "marks" => 70
    ),
    array(
        "name"=>"TestName",
        "marks" => 80
    ),

);
echo('<tr>');
for($i=0;$i<count($students);$i++) {
    
foreach($students[$i] as $key => $value){
    echo  $key , $value;
    echo "<br>";
}
    echo('</tr>');
  }
// echo "<tr>";
// echo "<th>Name</th>";
// echo "<th>Mark</th>";
// echo "</tr>";


// echo "<tr>";
// echo "<td>";
// echo $student[0]["name"];
// echo "</td>";
// echo "<td>";
// echo $student[0]["marks"];
// echo "</td>";
// echo "</tr>";


// echo "<tr>";
// echo "<td>";
// echo $student[1]["name"];
// echo "</td>";
// echo "<td>";
// echo $student[1]["marks"];
// echo "</td>";
// echo "</tr>";

// echo "<tr>";
// echo "<td>";
// echo $student[2]["name"];
// echo "</td>";
// echo "<td>";
// echo $student[2]["marks"];
// echo "</td>";
// echo "</tr>";

// echo "<tr>";
// echo "<td>";
// echo $student[3]["name"];
// echo "</td>";
// echo "<td>";
// echo $student[3]["marks"];
// echo "</td>";
// echo "</tr>";


?>
</table>


<<<<<<< HEAD
<!-- //print all information given in array 

// note: please use some html tags for beautifying it. -->




=======
>>>>>>> 52cbcaf003d373e468e43675f35a4520eab152ef

