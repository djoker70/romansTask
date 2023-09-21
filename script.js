function showForm() {
	document.getElementById("form").style.display = "block";
	document.getElementById("list").style.display = "none";
}

function showList() {
	document.getElementById("form").style.display = "none";
	document.getElementById("list").style.display = "block";

	// Запрос списка откликнувшихся
	var xhr = new XMLHttpRequest();
	xhr.open("GET", "process.php");
	xhr.onload = function() {
		if (xhr.status === 200) {
			var applicants = JSON.parse(xhr.responseText);
			var list = document.getElementById("applicants");
			list.innerHTML = "";
			for (var i = 0; i < applicants.length; i++) {
				var applicant = applicants[i];
				var listItem = document.createElement("li");
				listItem.innerHTML = applicant.name + " - " + applicant.phone;
				list.appendChild(listItem);
			}
		}
	};
	xhr.send();
}