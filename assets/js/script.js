function cadastrar() {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			document.getElementById("conteudo").innerHTML = this.responseText;
		}
	};

	xmlhttp.open("POST", "add.php", true);
	xmlhttp.send();
}

function editar(id) {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			document.getElementById("conteudo").innerHTML = this.responseText;
		}
	};

	xmlhttp.open("GET", "edit.php?u="+id, true);
	xmlhttp.send();
}

function excluir(id) {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			document.getElementById("conteudo").innerHTML = this.responseText;
		}
	};

	xmlhttp.open("GET", "delete.php?u="+id, true);
	xmlhttp.send();

	//window.location.href="index.php";
}

function table() {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			document.getElementById("conteudo").innerHTML = this.responseText;
		}
	};

	xmlhttp.open("POST", "table.php", true);
	xmlhttp.send();
}