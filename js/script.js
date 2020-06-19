

$(document).ready(function () {
	
	$('#fixedReturns').text('NGN 0.0');
	let $amount = $('#fixedAmount');
	let $currency = $('#fixedCurrency');
	let $tenor = $('#duration');

	$('.fixedForm select').on('change', calculateFixedValue);
	$('.fixedForm input').on('keyup', calculateFixedValue);

	function calculateFixedValue() {
		var currencyVal = $('#fixedCurrency').val();
		var amountVal = parseFloat($('#fixedAmount').val().replace(/,/g, ''));
		var tenorVal = $('#duration').val();
		var rate = 0;
		console.log(amountVal);
		console.log(currencyVal);
		console.log(tenorVal);
		if ($amount.val() && $currency.val() && $tenor.val()) {
			if (currencyVal === 'USD') {
				if (amountVal < 100000) {
					if (tenorVal === 30) {
						rate = 1.25;
					}
					else if (tenorVal === 60) {
						rate = 1.50;
					}
					else {
						rate = 2.00;
					}
				}
				else {
					if (tenorVal === 30) {
						rate = 2.00;
					}
					else if (tenorVal === 60) {
						rate = 2.25;
					}
					else {
						rate = 2.50;
					}
				}
			}
			else {
				if (amountVal < 1000000) {
					if (tenorVal === 30) {
						rate = 3.00;
					}
					else if (tenorVal === 60) {
						rate = 3.00;
					}
					else if (tenorVal === 90) {
						rate = 3.25;
					}
					else {
						rate = 3.50;
					}
				}
				else if (amountVal < 5000000) {
					if (tenorVal === 30) {
						rate = 3.25;
					}
					else if (tenorVal === 60) {
						rate = 3.50;
					}
					else if (tenorVal === 90) {
						rate = 3.75;
					}
					else {
						rate = 4.00;
					}
				}
				else if (amountVal < 10000000) {
					if (tenorVal === 30) {
						rate = 3.75;
					}
					else if (tenorVal === 60) {
						rate = 3.75;
					}
					else if (tenorVal === 90) {
						rate = 4.00;
					}
					else {
						rate = 4.25;
					}
				}
				else if (amountVal < 50000000) {
					if (tenorVal === 30) {
						rate = 4.00;
					}
					else if (tenorVal === 60) {
						rate = 4.25;
					}
					else if (tenorVal === 90) {
						rate = 4.50;
					}
					else {
						rate = 4.50;
					}
				}
				else if (amountVal < 100000000) {
					if (tenorVal === 30) {
						rate = 4.25;
					}
					else if (tenorVal === 60) {
						rate = 4.50;
					}
					else if (tenorVal === 90) {
						rate = 4.75;
					}
					else {
						rate = 4.75;
					}
				}
				else {
					if (tenorVal === 30) {
						rate = 4.50;
					}
					else if (tenorVal === 60) {
						rate = 4.75;
					}
					else if (tenorVal === 90) {
						rate = 4.75;
					}
					else {
						rate = 5.00;
					}
				}
			}
			var futureVal = amountVal + (amountVal * rate * (tenorVal / 36500));
			var wht = (futureVal - amountVal) / 10;
			var fullVal = futureVal - wht;
			$('#totalpay').hide();
			$('#ReturnLabl').show();
			$('#fixedReturns').show();
			var resp = currencyVal + ' ' + addCommas(parseFloat(fullVal).toFixed(2));
			console.log(resp);
			console.log(rate);
			$(document).find("#fixedReturns").text(resp);
		}
	}

	$(function () {
		var tenorOptions = $('#duration option').clone();
		$currency.on('change', function () {
			var curVal = $(this).val();
			if (curVal === 'USD') $('#duration').html(tenorOptions.filter('.forUSD'));
			else $('#duration').html(tenorOptions);
		});
	});
});
