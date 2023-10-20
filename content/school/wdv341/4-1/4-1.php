<!DOCTYPE html>
<html>
<body>

<?php
    function changeToDate($timestamp) {
    $date=date_create();
    date_timestamp_set($date, $timestamp);
    echo date_format($date,"m/d/Y");
    }

    function changeToDateInternationally($timestamp) {
    $date=date_create();
    date_timestamp_set($date, $timestamp);
    echo date_format($date,"Y/m/D");
    }

    function checkForString($givenString) {
        $givenString=trim($givenString);
        $givenString=strtolower($givenString);
        $length=strlen($givenString);
        echo $length;
        $stringToCheck = 'dmacc';
        if(strpos($givenString, $stringToCheck) !== false){
            echo "Word Found!";
        } else{
            echo "Word Not Found!";
        }
    }

    function formatToPhoneNumber(string $givenNumber) {
        echo preg_replace(
            "/.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{4})/",
            '($1) $2-$3',
            $givenNumber
        );
    }

    changeToDate(U);
    changeToDateInternationally(U);
    checkForString(DMaCc);
    formatToPhoneNumber("1234567890");
?>

</body>
</html>