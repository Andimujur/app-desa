const flashData = $('.flashdata').data('flashdata');
console.log(flashData);
if (flashData) {
	$(document).Toasts("create", {
		class: "bg-maroon",
		title: "PERINGATAN !!!",
		body: flashData
	});
}
