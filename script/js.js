var docRoot = "http://localhost/Interest_calculator/";

function calculateCompoundInterest(){
    var principleValue = document.getElementById("principleValue").value;
    var interestRate = document.getElementById("interestRate").value;
    var n = document.getElementById("compoundAmount").value;
    var term = document.getElementById("termYears").value;
    var periodicPayments = document.getElementById("periodicPayments").value;

    $.ajax({
        url: docRoot + 'ajax/calculateAjax.php',
        type: 'post',
        data: {'action':'calculateAjax',"principleValue":principleValue,"interestRate":interestRate,"n":n,"term":term,"periodicPayments":periodicPayments},
        success: function(response){
            
         document.getElementById("futureValue").innerHTML = "Future value of investment:<br>" + response;
        }         
    });
}