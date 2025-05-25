
  
  let secret = Math.floor(Math.random() * 10) + 1;
  let tentive = 0;
  let propos;
 do {
    propos = parseInt(prompt("Devinez un nombre entre 1 et 10 :"));
    tentive++;

    if (propos < secret) {
      alert("Trop petit !");
    } else if (propos > secret) {
      alert("Trop grand !");
    } else {
      alert("Bravo ! Vous avez trouvé en " + tentive + " tentatives.");
    }
  } while (propos !== secret);

