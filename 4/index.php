<?php
$cars = array(
    array('DT-LT-87' , 'Citroen' , 'XM', '"1999-09-23"', '34500' ),
    array('GF-NX-07' , 'Volkswagen' , 'Polo','"1999-07-12"','78000' ),
    array('GF-PD-34' , 'Volkswagen' , 'Polo','"1999-07-22"','57500' ),
    array('KR-RT-65' , 'Volkswagen' , 'Golf','"1999-08-08"','42000' ),
    array('PT-ER-45' , 'Ford' , 'Fiesta','"1999-03-02"','25000' ),
    array('TT-PR-73','Citroen','XM','N.V.T','1200'),
    array('TT-RW-01','Volkswagen','Polo','"1999-11-14"','4500')
);
echo '<table border="1">';
echo '<tr><th>Kenteken</th><th>Merk</th><th>Type</th><th>DatumAPK</th><th>Kilometer</th></tr>';
foreach( $cars as $car ) {
    echo '<tr>';
    foreach( $car as $key )
    {
        echo '<td>'.$key.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>

