<form action="" method="POST">
    Podaj woltomież trunku
    <input name="wolt" >
    Podaj ilość trunku
    <input name="ilość">
    Podaj płeć mężczyzna[M] lub kobieta[K]
    <select name="plec">
        <option value="0"></option>
        <option value="M">M</option>
        <option value="K">K</option>
    </select>
    Podaj wagę
    <input name="waga">
        <input type="submit" name="Submit">
 </form>
    <?php
    $wolt = $_POST['wolt'];
    $ilość = $_POST['ilość'];
    $plec = $_POST['plec'];
    $waga = $_POST['waga'];
    $stenrzenie=$ilość*($wolt/100)*0.8;
    if($plec == "M"){
        $wpolczynnik = 0.7;
    }else if($plec == "K"){
        $wpolczynnik = 0.6;
    };

    $promile=$stenrzenie/($wpolczynnik*$waga);

    echo "zawartość promili we krwi"."<br>";
    echo $promile."";

    ?>