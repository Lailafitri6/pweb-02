<?php
$ns1 = ["id" => 1, "nim" => "0110124189" , "UTS" => 80, "UAS" => 90 , "tugas" => 85];
$ns2 = ["id" => 2, "nim" => "0110124190" , "UTS" => 85, "UAS" => 90 , "tugas" => 80];
$ns3 = ["id" => 3, "nim" => "0110124191" , "UTS" => 90, "UAS" => 85 , "tugas" => 95];
$ns4 = ["id" => 4, "nim" => "0110124192" , "UTS" => 85, "UAS" => 90 , "tugas" => 99];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
</head>
<body>
    <h3>Daftar Nilai Siswa</h3>
    <table border="1" width="100">
      <thead>
        <th>No</th>
        <th>Nim</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>Tugas</th>
        <th>Nilai</th>
        </thead>
    </table>
    <?php
        $nomor = 1;
        foreach ($ar_nilai as $ns){
            echo '<tr><td>'.$nomor.'</td>';
            echo '<td>'.$ns ['nim'].'</td>';
            echo '<td>'.$ns ['UTS'].'</td>';
            echo '<td>'.$ns ['UAS'].'</td>';
            echo '<td>'.$ns ['tugas'].'</td>';
            $nilai_akhir = ($ns["UTS"] + $ns["UAS"] + $ns["tugas"])/3;
            echo '<td>'.number_format($nilai_akhir, 2, ',', '.').'</td>';
            echo '</tr>';
            $nomor++;
            
            
        } 
        ?> 
</body>
</html>