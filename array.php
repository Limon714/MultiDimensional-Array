
<?php

$fav =[
    [1,"Limon", "CEO", "Favourite Web Tech"],
    [2,"Raj", "GM", 1000000],
    [3,"Ab.Khalaque", "PM", 500000],
    [4,"Nowrin", "PO", 250000],
    [5,"Payel", "ODP", 150000],
    [6,"Prince", "CEO", 10000000],
    
];
echo "<table border= '2px' cellpadding= '5px'>";
echo "<tr>
        <th>Id.</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Honor</th>

</tr>";
foreach ($fav as $v) {
    echo "<tr>";
   foreach ($v as $v2) {
       echo"<td>$v2</td>" ;
    
  }
  echo "</tr>";
}
echo "</table>";
?>

