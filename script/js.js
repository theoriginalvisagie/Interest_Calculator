var docRoot = "http://localhost/Interest_calculator/";

function calculateCompoundInterest(){
    var principleValue = document.getElementById("principleValue").value;
    var interestRate = document.getElementById("interestRate").value;
    // var n = document.getElementById("compoundAmount").value;
    var term = document.getElementById("termYears").value;
    var periodicPayments = document.getElementById("periodicPayments").value;

    if(principleValue == "" || interestRate == ""  || term == "" || periodicPayments == ""){
        alert("Please enter values!");
    }else{
        $.ajax({
            url: docRoot + 'ajax/calculateAjax.php',
            type: 'post',
            data: {'action':'calculateNewAjax',"principleValue":principleValue,"interestRate":interestRate,"term":term,"periodicPayments":periodicPayments},
            success: function(response){
                console.log(response);
                if(response == "false"){
                    
                }else{
                    document.getElementById("futureValue").innerHTML = "Future value of investment:<br>" + response;
                }
             
            }         
        });
    } 
}

function resetCalc(){
    var principleValue = document.getElementById("principleValue").value = "";
    var interestRate = document.getElementById("interestRate").value = "";
    // var n = document.getElementById("compoundAmount").value = "";
    var term = document.getElementById("termYears").value = "";
    var periodicPayments = document.getElementById("periodicPayments").value = "";

    document.getElementById("futureValue").innerHTML = "";
}