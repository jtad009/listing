//Constants
let m3 = 36;
let m5 = 60;
let m10 = 60;
let mls = 60;

let d5 = 60;
let d3 = 36;
let d10 = 120;

let pd3 = 125;
let pd5 = 150;
let pd10 = 200;
let pls = 200;

let saveamt = $(document).find('#target').val();
let savels = 100000;
const calculateReward = ()=> {
      //Total Savings
    $(document).find('#total5>span').val(parseInt(saveamt, 10) * d3);
    $(document).find('#total5>span').val(parseInt(saveamt, 10) * d5);
    $(document).find('#total10>span').val(parseInt(saveamt, 10) * (d10/2));
}

  