<link href="Libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="Libraries/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="script/js.js?v=<?php echo date('Y-m-d H:i:s');?>"></script>
<script src="Libraries/jQuery/jQuery.js"></script>
<?php

    $s = "<div style='width:100%;'>
            <div class='mb-3'>
                <label for='principleValue' class='form-label'>Starting Balance</label>
                <input type='text' class='form-control' name='principleValue' id='principleValue' placeholder='1000'>
            </div>
            <div class='mb-3'>
                <label for='exampleFormControlTextarea1' class='form-label'>Interest Rate(%)</label>
                <input type='text' class='form-control' name='interestRate' id='interestRate' placeholder='12'>
            </div>
            <div class='mb-3'>
                <label for='exampleFormControlTextarea1' class='form-label'>Compound Amount(Monthly)</label>
                <input type='text' class='form-control' name='compoundAmount' id='compoundAmount' placeholder='12'>
            </div>
            <div class='mb-3'>
                <label for='exampleFormControlTextarea1' class='form-label'>Term Lenght(Years)</label>
                <input type='text'  class='form-control'name='termYears' id='termYears' placeholder='10'>
            </div>
            <div class='mb-3'>
                <label for='exampleFormControlTextarea1' class='form-label'>Monthly Contributions</label>
                <input type='text' class='form-control' name='periodicPayments' id='periodicPayments' placeholder='100'>
            </div>
            <div class='mb-3' style='text-align: center;'>
                <button class='btn btn-outline-dark' onclick='calculateCompoundInterest()'>Calculate</button>
            </div>
        </div>";

    $form = "<div class='container'>
            <div class='row align-items-center'>
                <div class='col'>
                </div>
                <div class='col '>
                    <h2 style='text-align:center;'>Compund Interest Calculator</h2>
                    $s
                    <h4 name='futureValue' id='futureValue' style='text-align:center;'></h4>
                </div>
                <div class='col'>
                </div>
            </div>
        </div>";

    echo $form;
   

    // echo "After $t years at $rate% interest compounded $n times, the account value is $totalInterest";
?>