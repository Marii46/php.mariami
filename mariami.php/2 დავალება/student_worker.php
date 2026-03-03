<?php
echo "<h1>ნიშნები</h1>";
if(isset($_POST['saxeli'])){

    $saxeli = $_POST['saxeli'];
    $gvari = $_POST['gvari'];
    $kursi = $_POST['kursi'];
    $semestri = $_POST['semestri'];
    $saswavlo_kursi = $_POST['saswavlo_kursi'];
    $nishani = $_POST['migebuli_nishani'];
    $leqtori_saxeli = $_POST['leqtori_saxeli'];
    $leqtori_gvari = $_POST['leqtori_gvari'];
    $dekanis_saxeli = $_POST['dekanis_saxeli'];
    $dekanis_gvari = $_POST['dekanis_gvari'];

   
    if($nishani >= 90){
        $shesabmeba = "A — ფრიადი";
    } elseif($nishani >= 80){
        $shesabmeba = "B — ძალიან კარგი";
    } elseif($nishani >= 70){
        $shesabmeba = "C — კარგი";
    } elseif($nishani >= 60){
        $shesabmeba = "D — დამაკმაყოფილებელი";
    } elseif($nishani >= 50){
        $shesabmeba = "E — საკმარისი";
    } else {
        $shesabmeba = "F/FX — წარუმატებელი";
    }

    echo "<h1>სტუდენტის შეფასება</h1>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr>
            <th>სახელი</th>
            <th>გვარი</th>
            <th>კურსი</th>
            <th>სემესტრი</th>
            <th>სასწავლო კურსი</th>
            <th>ნიშანი</th>
            <th>შეფასება</th>
            <th>ლექტორი</th>
            <th>დეკანი</th>
          </tr>";
    echo "<tr>
            <td>$saxeli</td>
            <td>$gvari</td>
            <td>$kursi</td>
            <td>$semestri</td>
            <td>$saswavlo_kursi</td>
            <td>$nishani</td>
            <td>$shesabmeba</td>
            <td>$leqtori_saxeli $leqtori_gvari</td>
            <td>$dekanis_saxeli $dekanis_gvari</td>
          </tr>";
    echo "</table>";
}
?>