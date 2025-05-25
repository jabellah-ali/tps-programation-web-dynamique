
let paragraphe = document.getElementById('monParagraphe');
paragraphe.textContent = 'Le texte a été modifié';
paragraphe.style.backgroundColor = 'lightblue';
paragraphe.style.textAlign = 'center';
let div = document.getElementById('maDiv');
div.addEventListener('click', function() {
  paragraphe.textContent = 'Un clic a été détecté';
});
