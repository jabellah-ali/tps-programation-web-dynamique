document.getElementById('formulaire').addEventListener('submit', function(e) {
  e.preventDefault(); 

  let texteTache = document.getElementById('tache').value;
  if (texteTache.trim() === "") return;

  let li = document.createElement('li');
  li.textContent = texteTache;

  let boutonAccomplie = document.createElement('button');
  boutonAccomplie.textContent = '✓';
  boutonAccomplie.addEventListener('click', function () {
    li.classList.toggle('accomplie');
  });
  let boutonSupprimer = document.createElement('button');
  boutonSupprimer.textContent = '✗';
  boutonSupprimer.addEventListener('click', function () {
    li.remove();
  });

  li.appendChild(boutonAccomplie);
  li.appendChild(boutonSupprimer);

  document.getElementById('liste').appendChild(li);

  document.getElementById('tache').value = '';
});
