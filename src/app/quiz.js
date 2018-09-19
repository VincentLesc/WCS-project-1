let q1=q2=q3=0;
let a1=a2=a3=0;
let textResult = document.getElementById("textResult");
let resultElt = document.getElementById("containerResult");
let refreshElt = document.getElementById("refresh");


function calcul() {
    return q1+q2+q3;
}

function validate() {
    return a1+a2+a3;
}

function resultat() {
    score = calcul();
    valid = validate();
    if (valid === 3) {
	    if (score === 3) {
            resultElt.style.borderRadius = "5px";
            resultElt.style.backgroundColor = "#AD1010";
            resultElt.style.color = "white";
            resultElt.style.width = "500px";
            resultElt.style.padding = "5px";
            textResult.innerHTML = "This is the results, you only have " + score + " points ! Mhh I think you're not fit to be a Dark Student, sorry man !";            
        } else if (score >= 4 && score <= 6) {
            resultElt.style.backgroundColor = "#0F4C91";
            resultElt.style.color = "white";
            resultElt.style.borderRadius = "5px";
            resultElt.style.width = "500px";
            resultElt.style.padding = "5px";
            textResult.innerHTML = "This is the results, you have " + score + " points ! You can apply for Wild Code School but you'll have to make efforts to be involved like training for tennis table or buying beautiful socks !";
        } else if (score >= 7 && score <= 9) {
            resultElt.style.backgroundColor = "#15910A";
            resultElt.style.color = "white";
            resultElt.style.borderRadius = "5px";
            resultElt.style.width = "500px";
            resultElt.style.padding = "5px";
            textResult.innerHTML = "This is the results, you have " + score + " points ! Congratulations, you'll be a perfect Dark student ! Welcome :)";
        } 
    } else {
        alert("You need to answer all the questions");
    }
}

function refresh() {
    refreshElt.addEventListener("click", location.reload(), false);
}