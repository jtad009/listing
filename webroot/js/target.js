$(document).ready(function(){
    $(document).on('keyup', '#rewardYear',function(e){
        calculateDuration()
    })
    $(document).on('keyup', '#target',function(e){
        addCommas($(this));
        calTarget();
    })
})

/*********************
 * 
 * 
 * TARGET CALCULATOR
 ********************/
let rewardYear = $(document).find('#rewardYear');
let durationWarning = $(document).find('.durationWarning');
let target = $(document).find('#target');
let rewardDuration = $(document).find('#rewardDuration');
let effrate = 0;
let intRate = 0;
let numPay = 0;
let xtenor = 0
let targetCurrency = $(document).find('#targetCurrency');
let currentName = '';
let rewardDurationVal;

const calculateDuration = () => {
    if (parseInt(rewardYear.val(), 10) <= 5 || rewardYear.val().length == 0) {
        durationWarning.text('Enter a value not less than 6 months');
    }
    else if (between(parseInt(rewardYear.val(), 10), 6, 12)) {
        durationWarning.text(parseInt(rewardYear.val(), 10) + ' months');
    }
    else if (between(parseInt(rewardYear.val(), 10), 13, 23)) {
        durationWarning.text((parseInt(rewardYear.val(), 10) / 12));
        var n = durationWarning.text()
        var year = Math.floor(n);
        var month = Math.round((n % 1) * 12);
        if (month == 1) { durationWarning.text((year + ' year, ' + month + ' month')); }
        else if (month > 1) { durationWarning.text((year + ' year, ' + month + ' months')); }
    }
    else if (parseInt(rewardYear.val(), 10) >= 24 && parseInt(rewardYear.val(), 10) < 241) {
        durationWarning.text((parseInt(rewardYear.val(), 10) / 12));
        var n2 = durationWarning.text();
        var year2 = Math.floor(n2);
        var month2 = Math.round((n2 % 1) * 12);
        if (month2 === 0) { durationWarning.text((year2 + ' years')); }
        else if (month2 == 1) { durationWarning.text((year2 + ' years, ' + month2 + ' month')); }
        else if (month2 > 1) { durationWarning.text((year2 + ' years, ' + month2 + ' months')); }
    }
    else if (parseInt(rewardYear.val(), 10) >= 241) {
        durationWarning.text('Must be between 6 months and 20 years');
    }

}
function calTarget() {
const targetAmount = target.val().replace(/,/g,'');
    //Change Currency
    if (targetCurrency.val() === "") { currentName = 'Select preferred Currency'; }
    else if (targetCurrency.val() == 'N') {
        //Show Month Input
        rewardDurationVal = (rewardYear.val() / 12);
       
        //Naira Interest Rate
        if (rewardDurationVal < 0.4) { intRate = 0; }
        else if (between(rewardDurationVal, 0.5, 3.99)) { intRate = 4 / 100; }
        else if (between(rewardDurationVal, 4.0, 4.99)) { intRate = 4.5 / 100; }
        else if (between(rewardDurationVal, 5.0, 200.9)) { intRate = 5 / 100; }
        console.log(rewardDurationVal)
    }
    else if (targetCurrency.val() == 'USD') {
        //Show Month Input
        rewardDurationVal = (rewardYear.val() / 12);

        //Dollar Interest Rate
        if (rewardDurationVal < 0.4) { intRate = 0; }
        else if (between(rewardDurationVal, 0.5, 3.99)) { intRate = 4 / 100; }
        else if (between(rewardDurationVal, 4.0, 4.99)) { intRate = 4.5 / 100; }
        else if (between(rewardDurationVal, 5.0, 200.9)) { intRate = 5 / 100; }
        console.log(rewardDurationVal)
    }

    //Effective Rate  === r
    switch(parseInt(rewardDuration.val())) {
        case 12:
        case 4:
        case 2:
        case 1:
            //Effective Rate  === r
            effrate = ((intRate * 0.9));
             //Number of Payments === n
            numPay = parseInt(rewardDuration.val(), 10);
            //Tenor in Years === t
            xtenor = (rewardDurationVal) 
        break;
        default:
            effrate = 0;
            numPay = 0;
            xtenor = 0;
            break;

    }


    ////////// Values ///////////
    let xFactor = numPay * rewardDurationVal;
    let yFactor = effrate / numPay;
    let zFactor = 1 + yFactor;
    let bFactor = Math.pow(zFactor, xFactor);
    let cFactor = (bFactor - 1) / yFactor;

    const payment = parseInt(targetAmount, 10) / (cFactor * zFactor);
    const totalpay = xFactor * payment;
    const gained = parseInt(targetAmount, 10) - totalpay;
    const total = parseFloat(gained).toFixed(2) + parseFloat(totalpay).toFixed(2);
    console.log( targetAmount);
    if(typeof total === 'string' && total != 'NaNNaN' ){
        
        document.getElementById('targetReturns').innerHTML = targetCurrency.val() + ' '+addCommas(parseFloat(total).toFixed(2).toString())
        
    } else {
        document.getElementById('targetReturns').innerHTML =  ' 0 ';
    }
    
    
    
    // console.log(parseInt(target.val(), 10) );
    console.log("Payment: ", addCommas(parseFloat(payment).toFixed(2).toString()));
    console.log("totalPay: ", addCommas(parseFloat(totalpay).toFixed(2).toString()));
    console.log("gained: ", addCommas(parseFloat(gained).toFixed(2).toString()));


}

