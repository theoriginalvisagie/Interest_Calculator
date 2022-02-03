<?php
    // echo "HI THERE";
    if($_POST['action']=="calculateAjax"){
        // echo '<pre>'.print_r($_POST,true).'</pre>';

        $principle = $_POST['principleValue'];//5000;//starting balance
        $rate = $_POST['interestRate'] / 100;//0.05;//percent interest
        $n = $_POST['n'];//12;//interest compound amount
        $t = $_POST['term'];//10;//years
        $pmt = $_POST['periodicPayments'];//100;//periodic payments
    
        $principleCompound = pow((1 + $rate / $n), $n * $t);
        $rateDivN = $rate / $n;
    
        $principleInterest = $principle * $principleCompound;//pow((1 + $rate / $n), $n * $t);
        $futureValue = $pmt * (($principleCompound-1) / ($rateDivN)) * (1 + $rateDivN);
        $totalInterest = round($principleInterest + $futureValue, 2);

        echo $totalInterest;
    }
?>