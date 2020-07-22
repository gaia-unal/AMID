var parte1 = document.getElementById('parte1');
var parte2 = document.getElementById('parte2');
var parte3 = document.getElementById('parte3');
var ant = document.getElementById('ant');
var sig = document.getElementById('sig');
var cont = 0;

function siguiente() {
	cont++;
	switch (cont) {
		case 1:
			parte1.style.display = parte1.style.display = 'none';
			parte2.style.display = parte2.style.display ='block';
			ant.style.display = ant.style.display ='inline-block';
			break;
		case 2:
			parte2.style.display = parte2.style.display ='none';
			parte3.style.display = parte3.style.display ='block';
			sig.style.display = sig.style.display ='none';
			break;
	}
}
function anterior() {
	switch (cont) {
		case 1:
			parte1.style.display = parte1.style.display ='block';
			parte2.style.display = parte2.style.display ='none';
			ant.style.display = ant.style.display ='none';
			break;
		case 2:
			parte2.style.display = parte2.style.display ='block';
			parte3.style.display = parte3.style.display ='none';
			sig.style.display = sig.style.display ='inline-block';
			break;
	}
	cont--;
}