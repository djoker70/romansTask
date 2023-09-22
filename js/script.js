
function getCardForm(id, title, description)
{
	return '<div class="card col-6" style="margin: 5px;" id="' + id + '"> ' +
			'<div class="card-body d-grid gap-2"> ' +
				'<h5 class="card-title">' + title + '</h5> ' +
				'<p class="card-text">' + description + '</p> ' +
				'<button type="button" class="btn btn-primary connectBtn">Откликнуться</button> ' +
				'<button type="button" class="btn btn-primary listPeoplesBtn" >Список откликнувшихся</button>' +
			'</div> ' +
		'</div>';
}

function drawForm(form)
{
	$('body').find('.main').append($(form));
}

function connectBtn() {
	function drawModal(vacancyId, title, description) {
		var myModal = new bootstrap.Modal(document.getElementById('connectBtnModal'), {
			backdrop: true,
			focus: true,
			keyboard: true
		});
		$('body').find('#connectBtnModal #vacancyId').val(vacancyId);
		$('body').find('#connectBtnModal #modal-title').html(title);
		$('body').find('#connectBtnModal #description').html(description);

		myModal.show();
	}

	$('body').on('click', '.connectBtn', function (e) {
		e.preventDefault();
		var card = $(this).parents('.card');
		var vacancyId = $(card)[0].getAttribute('id');
		var title = $(card).find('.card-title')[0].innerHTML;
		var description = $(card).find('.card-text')[0].innerHTML;
		drawModal(vacancyId, title, description);
	});
}

$(document).ready(function() {
	loadVacancy();
	connectBtn();
})

function loadVacancy()
{
	$.ajax({
		url: '/php/loadVacancy.php',
		cache: false,
		type: 'GET',
		data: {
		},
		dataType: 'json',
		success: function(vacancyList){
			vacancyList.forEach((item) => {
				var cardForm = getCardForm(item.id, item.title, item.description);
				drawForm(cardForm);
			});
		}
	});
}