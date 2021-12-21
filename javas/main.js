$("#dodajForma").submit(function () {
  event.preventDefault();
  console.log("Dodaj forma je pokrenuta");
  const $form = $(this);
  //   const $inputi = $form.find("input,button");
  const podaci = $form.serialize();
  console.log(podaci);

  request = $.ajax({
    url: "logika/dodaj.php",
    type: "post",
    data: podaci,
  });

  console.log("$idKorisnika");

  request.done(function (odgovor, poruka, jqXHR) {
    if (odgovor === "Uspesno dodavanje kursa") {
      alert("Uspesno ste dodali kurs!");
      console.log("Uspesno dodat kurs");
      location.reload(true);
    } else {
      console.log("Neuspesno dodavanje kursa, molimo pokusajte ponovo!");
      console.log(odgovor);
    }
  });
  request.fail(function (jqXHR, poruka, greska) {
    console.error("Desila se greska: " + poruka + greska);
  });
});

$("#dugmeobrisi").click(function () {
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
      console.log("Obrisan kurs");
    } else {
      console.log("Kurs nije obrisan" + odgovor);
      alert("Kurs nije obrisan");
    }
    console.log(odgovor);
  });
});
