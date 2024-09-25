var darkmodeButtonClicks = 0;

function reponseQ1() {
    var repQ1 = document.getElementById("rep1").value;
    if (repQ1 == "") {
        alert("Entrez une réponse pour passer à la question suivante.");
    } else {
        Q2.style.display = 'flex';
        window.scroll({top: 1950, behavior: 'smooth'});
    }
}

function reponseQ2() {
    var repQ2 = document.getElementById("rep2").value;
    if (repQ2 == "") {
        alert("Entrez une réponse pour passer à la question suivante.");
    } else {
        Q3.style.display = 'flex';
        window.scroll({top: 3900, behavior: 'smooth'});
    }
}

function reponseQ3() {
    var repQ3 = document.getElementById("rep3").value;
    if (repQ3 == "") {
        alert("Entrez une réponse pour terminer le quiz.");
        return false
    } else {
        return true
    }
}

function darkmode() {
	darkmodeButtonClicks +=1;
	var bodycolor = document.getElementById('invert');
	if (darkmodeButtonClicks %2 == 0){
		bodycolor.style.filter = 'none';
	} else {
		bodycolor.style.filter = 'invert()';
	}
}