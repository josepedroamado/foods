//$(document).ready(inicializo);

// function inicializo(){
// 	// $("#btnAddUsr").click(addUsr);
// 	$(".btnDelUsr").click();
// 	// $(".btnModUsr").click(modifyUser);	

// 	$("#btnAddPub").click(addPub);
// 	//$(".btnDelPub").click(deletePub);
// 	// $(".btnModUsr").click(modifyUser);
// }

function addUsr(){
	window.location = "addUsr.php";
}

function deleteUsr(){
	var user_id = this.alt;
	//var user_id = $(this).attr("alt");
	console.log(user_id);
	if (confirm("user " + user_id)) {
		window.location = "deleteUsr.php?id="+user_id;
	}
	
}

function modifyUser(){
	var user_id = $(this).attr("alt");
	//window.location = "modifAutor.php?id="+user_id;
}

function addPub(){
	alert();
	window.location = "addPub.php";
}

function deletePub(){
	var pub_id = this.alt;
	if (confirm("user " + pub_id)) {
		window.location = "deletePub.php?id="+pub_id;
	}
	
}

function modifyPub(){
	var pub_id = $(this).attr("alt");
	//window.location = "modifAutor.php?id="+pub_id;
}