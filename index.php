<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>naebalofo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="lib/bootstrap/bootstrap.min.css" rel="stylesheet">
	<script src="lib/bootstrap/popper.min.js"></script>
	<script src="lib/bootstrap/bootstrap.min.js"></script>
	<script src="lib/jQuery/jquery-3.7.1.min.js"></script>
	<script src="js/script.js"></script>
</head>
<div class="container">
	<header class="d-flex justify-content-center py-3">
		<h1 class="namesite">Подбор персонала </h1>
	</header>
</div>
<body>
	<div class="conteiner">
		<div class="main">
		</div>
	</div>
</body>
<div class="container">
	<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
		<div class="col-md-4 d-flex align-items-center">
			<span class="mb-3 mb-md-0 text-body-secondary">© 2023 Roman Company, Inc</span>
		</div>
	</footer>
</div>

<div class="modal" id="connectBtnModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="description"></p>
                <div class="input-group mb-3">
                    <input type="hidden" id="vacancyId">
                    <input type="text" class="form-control" placeholder="ФИО" aria-label="ФИО">
                    <input type="text" class="form-control" placeholder="Телефон" aria-label="Телефон">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Откликнуться</button>
            </div>
        </div>
    </div>
</div>
</html>