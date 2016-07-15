<?php
$M = 0;
$P = 0;
$G = 0;
$B = 0;

for ($index = 1; $index <= 40; $index++) {
    
    if (isset($_POST["soru" . $index])) {
        
        switch($_POST["soru" . $index] ) {
            case "M": $M++; break;
            case "P": $P++; break;
            case "G": $G++; break;
            case "B": $B++; break;
            default: break;
        }
        
    }
    
}

if (($M>$B) && ($M>$G) && ($M>$P)) {
    $sonuc="Melankolik";
    $git="ozellik.php?filtre=melankolik";
} else if (($B>$M) && ($B>$G) && ($B>$P)) {
    $sonuc="Barışçıl Soğukkanlı";
    $git="ozellik.php?filtre=bariscil";
} else if (($P>$M) && ($P>$G) && ($P>$B)) {
    $sonuc="Populer Optimist";
    $git="ozellik.php?filtre=populer";
} else if (($G>$M) && ($G>$P) && ($G>$B)) {
    $sonuc="Güçlü Klorik";
    $git="ozellik.php?filtre=gucluklorik";
} else {
    $sonuc="EŞİTLİK";
    $git="ozellik.php?filtre=all";
}

$birim=$G+$M+$B+$P;
$birim=100/$birim;
?>

<html>
<head>
<meta charset="utf-8">
<title>ESinTi BiLiŞiM KiŞiLiK TesTi</title>
</head>

<body>
    
<center>
    <b>SONUÇLAR</b>
    <br><br><br>
    
    <table border="1" width="50%">
        <tr>
            <td width="40%">Melankolik</td>
            <td width="60%">
                <table width="<?php echo $M*$birim?>%"><tr><td bgcolor="red"><?php echo $M?></td></tr></table>
            </td>
        </tr>

        <tr>
            <td width="40%">Güçlü Klorik</td>
            <td width="60%">
                <table width="<?php echo $G*$birim?>%"><tr><td bgcolor="green"><?php echo $G?></td></tr></table>
            </td>
        </tr>

        <tr>
            <td width="40%">Popiler Optimist</td>
            <td width="60%">
                <table width="<?php echo $P*$birim?>%"><tr><td bgcolor="yellow"><?php echo $P?></td></tr></table>
            </td>
        </tr>

        <tr>
            <td width="40%">Barışçıl Soğukkanlı</td>
            <td width="60%">
                <table width="<?php echo $B*$birim?>%"><tr><td bgcolor="blue"><?php echo $B?></td></tr></table>
            </td>
        </tr>

    </table>
    
    <p align="center">S O N U Ç : <a href="<?=$git?>"><?=$sonuc?></a></p>
    <p align="center"><a href="javascript:history.back(1)"> Geri</a></a></p>
      
</center>
</body>
</html>