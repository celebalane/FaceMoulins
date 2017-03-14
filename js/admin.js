function escapeHtml(text) {
  return text
      .replace(/&/g, "&amp;")
      .replace(/</g, "&lt;")
      .replace(/>/g, "&gt;")
      .replace(/"/g, "&quot;")
      .replace(/'/g, "&#039;");
}
function nl2br (str, is_xhtml) {
    var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
    return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
}
function getXHR(){
	var xhr = null; 
 
	if(window.XMLHttpRequest) // Firefox et autres
	   xhr = new XMLHttpRequest(); 
	else if(window.ActiveXObject){ // Internet Explorer 
	   try {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
	}
	else { // XMLHttpRequest non supporté par le navigateur 
	   alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
	   xhr = false; 
	} 
	return xhr;
}
var data ="";
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#image')
        .attr('src', e.target.result);
        data =e.target.result;
    };
    reader.readAsDataURL(input.files[0]);

  }
}
function go(page){
	var xhr = getXHR();
	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200){
			var reponse = xhr.response;
			document.getElementById("container").innerHTML = reponse;
		}
	}
	if(page=="password"){
		xhr.open("GET","include/changePassword.php",true);
		xhr.send(null);
	}
	else if(page=="imageArticle"){
		xhr.open("GET","include/ajoutArticle.php",true);
		xhr.send(null);
	}
	else if(page=="ajoutImage"){
		xhr.open("GET","include/ajoutImage.php", true);
		xhr.send(null);
	}
	else if(page=="article"){
		var texte = "";
		xhr.open("POST", "AjouteArticle.php",true);
		xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		image = data;
		para = nl2br(document.getElementById("paragraphe").value, 'undefined');
		for(i=0;i<para.length;i++){
			if(para[i]==",")
				texte += "@.";
			else
				texte += para[i];
		}
		titre = document.getElementById("TitreArticle").value;
		articleBdd = new Array;
		articleBdd.push(titre); articleBdd.push(image); articleBdd.push(texte);
		xhr.send("contentArticle="+articleBdd);
	}
	else if(page=="afficherArticle"){
		xhr.open("GET", "afficheArticle.php", true);
		xhr.send(null);
	}
	else if(page=="newsLetter"){
		xhr.open("GET","include/envoisMail.php", true)
		xhr.send(null);
	}
	else if(page=="envoyerMails"){
		xhr.open("POST","include/envoisMails.php", true)
		xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		texte = document.getElementById("envoisMailing").value;
		xhr.send("envoisMailing="+texte);
	}
	else if(page=="modifPass"){
		xhr.open("POST", "include/passAllChange.php", true);
		xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		pass1 = document.getElementById("new1").value;
		pass2 = document.getElementById("new2").value;
		pass3 = document.getElementById("old1").value;
		if(pass1 == pass2){
			var passAge = [pass1, pass3];
			xhr.send("retour1="+passAge);
		}
		else
			alert("les essais ne correspondent pas");
	}
	else if(page=="adminFabrik"){
		xhr.open("GET", "include/adminFabrik.php", true);
		xhr.send(null);
	}
	else if(page=="ajoutEleve"){
		xhr.open("POST", "include/ajoutEleve.php", true);
		xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		nomEleve = document.getElementById("nomPrenom").value;
		lienLinkedIn = document.getElementById("profilLinkedIn").value;
		lienGithub = document.getElementById("profilGithub").value;
		if(nomEleve != "" || nomPrenom != " "){
			var tab = [nomEleve, lienLinkedIn, lienGithub];
			xhr.send("eleve="+tab);
		}
	}

		
}
function visual(){
	document.getElementById("TitreArticle").addEventListener("input", function(){
		document.getElementById("titre").innerHTML = "<h1>"+escapeHtml(document.getElementById("TitreArticle").value)+"</h1>";
	});
	document.getElementById("fichier").addEventListener("blur", function(){
		document.getElementById("image").innerHTML == "<img src='"+document.getElementById("fichier").value+"'/>";
	});
	document.getElementById("paragraphe").addEventListener("input", function(){
		document.getElementById("paragrapheVisuel").innerHTML = "<p>"+document.getElementById("paragraphe").value+"</p>";
	});
}
