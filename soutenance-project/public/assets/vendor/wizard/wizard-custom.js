// Wizard #1
$(function () {
	// SmartWizard initialize
	$('#smartwizard').smartWizard({
		toolbar: {
			extraHtml: `<button class="btn btn-success" onclick="onFinish()">Finish</button>
                <button class="btn btn-light" onclick="onCancel()">Cancel</button>`
		}
	});
});

// Wizard #2
$(function () {
	// SmartWizard 2 initialize
	$('#smartwizard2').smartWizard({
		theme: 'arrows',
		justified: false,
	});
});

// Wizard #3
$(function () {
	// SmartWizard 3 initialize
	$('#smartwizard3').smartWizard({
		theme: 'dots',
		toolbar: {
			extraHtml: `<button class="btn btn-success" onclick="onFinish()">Finish</button>
                <button class="btn btn-light" onclick="onCancel()">Cancel</button>`
		}
	});
});

// Wizard #1
$(function () {
	// SmartWizard initialize
	$('#smartwizard4').smartWizard({
		theme: 'round',
		justified: false,
	});
});