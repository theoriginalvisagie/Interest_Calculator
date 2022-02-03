var docRoot = "http://localhost/Interest_calculator/";

function calculateCompoundInterest(){
    var principleValue = document.getElementById("principleValue").value;
    var interestRate = document.getElementById("interestRate").value;
    var n = document.getElementById("compoundAmount").value;
    var term = document.getElementById("termYears").value;
    var periodicPayments = document.getElementById("periodicPayments").value;

    if(principleValue == "" || interestRate == "" || n == "" || term == "" || periodicPayments == ""){
        alert("Please enter values!");
    }else{
        $.ajax({
            url: docRoot + 'ajax/calculateAjax.php',
            type: 'post',
            data: {'action':'calculateAjax',"principleValue":principleValue,"interestRate":interestRate,"n":n,"term":term,"periodicPayments":periodicPayments},
            success: function(response){
                if(response == "false"){
                    
                }else{
                    document.getElementById("futureValue").innerHTML = "Future value of investment:<br>" + response;
                }
             
            }         
        });
    }
   
}