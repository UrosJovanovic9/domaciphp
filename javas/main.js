$("#dodajForma").submit(function () {
  event.preventDefault();
  console.log("Dodaj forma je pokrenuta");
  const $form = $(this);
  const podaci = $form.serialize();
  console.log(podaci);

  request = $.ajax({
    url: "logika/dodaj.php",
    type: "post",
    data: podaci,
  });

  // console.log("$idKorisnika");

  request.done(function (odgovor, poruka, jqXHR) {
    if (odgovor === "Uspesno dodavanje kursa") {
      alert("Uspesno ste dodali kurs!");
      console.log("Uspesno dodat kurs");
      location.reload(true);
    } else {
      console.log("Neuspesno dodavanje kursa, molimo pokusajte ponovo!");
      console.log(odgovor);
      location.reload(true);
    }
  });
  request.fail(function (jqXHR, poruka, greska) {
    console.error("Desila se greska: " + poruka + greska);
  });
});

$("#dugmeobrisi").click(function () {
  event.preventDefault();
  console.log("Dugme za brisanje");
  const izabranKurs = $("input[name = check]:checked");
  zahtev = $.ajax({
    url: "logika/obrisi.php",
    type: "post",
    data: { id: izabranKurs.val() },
  });

  zahtev.done(function (odgovor) {
    if (odgovor == "Uspesno obrisan izabrani kurs") {
      izabranKurs.closest("tr").remove();
      alert("Uspesno ste obrisali kurs");
      // location.reload(true);
      console.log("Obrisan kurs");
    } else {
      console.log("Kurs nije obrisan" + odgovor);
      alert("Kurs nije obrisan");
    }
    console.log(odgovor);
  });
});

$("#pregled1").toggle();

$("#mojkursevi").click(function () {
  $("#pregled1").toggle();
});

$("#izmeniForma").submit(function () {
  event.preventDefault();
  console.log("Pokrenuta je forma za izmenu");
  const $form = $(this);

  const podaci = $form.serialize();
  console.log(podaci);

  request = $.ajax({
    url: "logika/promeni.php",
    type: "post",
    data: podaci,
  });
  request.done(function (odgovor, poruka, jqXHR) {
    if (odgovor == "Uspesno") {
      alert("Uspesno izmenjen kurs!");
      location.reload(true);
    } else {
      console.log("Neuspesna promena kursa!");
      console.log(odgovor);
    }
  });
  request.fail(function (jqXHR, poruka, greska) {
    console.error("Desila se greska: " + poruka + greska);
  });
});

function sortirajOpadajuce() {
  var tabela1, redovi1, promena1, i1, x1, y1, menjaj1;
  tabela1 = document.getElementById("tabela");
  promena1 = true;
  while (promena1) {
    promena1 = false;
    redovi1 = tabela1.rows;
    for (i1 = 1; i1 < redovi1.length - 1; i1++) {
      menjaj1 = false;
      x1 = redovi1[i1].getElementsByTagName("TD")[5];
      y1 = redovi1[i1 + 1].getElementsByTagName("TD")[5];
      if (Number(x1.innerHTML) < Number(y1.innerHTML)) {
        menjaj1 = true;
        break;
      }
    }
    if (menjaj1) {
      redovi1[i1].parentNode.insertBefore(redovi1[i1 + 1], redovi1[i1]);
      promena1 = true;
    }
  }
}

function sortirajRastuce() {
  var tabela, redovi, promena, i, x, y, menjaj;
  tabela = document.getElementById("tabela");
  promena = true;
  while (promena) {
    promena = false;
    redovi = tabela.rows;
    for (i = 1; i < redovi.length - 1; i++) {
      menjaj = false;
      x = redovi[i].getElementsByTagName("TD")[5];
      y = redovi[i + 1].getElementsByTagName("TD")[5];
      if (Number(x.innerHTML) > Number(y.innerHTML)) {
        menjaj = true;
        break;
      }
    }
    if (menjaj) {
      redovi[i].parentNode.insertBefore(redovi[i + 1], redovi[i]);
      promena = true;
    }
  }
}

function proveraMejla() {
  var email = document.forms["formaregistracija"]["email"];
  if (
    !/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/.test(
      formaregistracija.email.value
    )
  ) {
    alert("Uneli ste pogrešnu email adresu!");
    email.focus();
    return false;
  } else {
    alert("Uspesno ste se registrovali!");
  }
}
