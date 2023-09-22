
function getCardForm(id, title, description)
{
	return '<div class="card col-6" style="margin: 5px;" id="' + id + '"> ' +
			'<div class="card-body d-grid gap-2"> ' +
				'<h5 class="card-title">' + title + '</h5> ' +
				'<p class="card-text">' + description + '</p> ' +
				'<button type="button" class="btn btn-primary">Откликнуться</button> ' +
				'<button type="button" class="btn btn-primary">Список откликнувшихся</button>' +
			'</div> ' +
		'</div>';
}

function drawForm(form)
{
	$('body').find('.main').append($(form));
}

$(document).ready(function() {
	console.log("123");
	//vacancyList - получать запросом из БД
	var vacancyList = [
		{id: 1, title: "title1", description: "desc1"},
		{id: 2, title: "title2", description: "desc1"},
		{id: 3, title: "title3", description: "desc1"}
	];
	vacancyList.forEach((item) => {
		var cardForm = getCardForm(item.id, item.title, item.description);
		drawForm(cardForm);
	});

})

function loadVacancy()
{
	$.ajax({
		url: 'loadVacancy.php',
		cache: false,
		type: 'GET',
		data: {
			date: date
		},
		dataType: 'json',
		success: function(vacancyList){

		}
	});
}