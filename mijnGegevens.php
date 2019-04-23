<?php include 'template/header.php'; ?>


<section class="container">
  <br>
  <h1> Mijn gegevens </h1>
  <hr />

  <form action="#" method="POST">

    <h3> Persoonsgegevens </h3>
    <section class="form-row">
      <!--Security: Gebruikersnaam moet 6 of groter zijn. -->
      <section class="form-group col-md-6">
        <label for="inputGebruikersnaam"> Gebruikersnaam </label>
        <input type="text" class="form-control" id="inputGebruikersnaam" pattern="[A-Za-z].{6,15}"
          placeholder="Gebruikersnaam" name="Gebruikersnaam">
      </section>


      <!--Security: Password moet 8 of groter zijn, 1 hoofdletter bevatten en 1 nummer-->
      <section class="form-group col-md-6">
        <label for="inputWachtwoord">Wachtwoord</label>
        <input type="text" class="form-control" id="inputWachtwoord" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8, }"
          placeholder="Wachtwoord" name="Wachtwoord">

        <label class="form-check-label" for="defaultCheck1"> Wachtwoord zichtbaar</label>
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
      </section>
    </section>



    <section class="form-row">
      <!-- Security: Alleen alfabet en max 15 characters -->
      <section class="form-group col-md-6">
        <label for="inputVoornaam">Voornaam </label>
        <input type="text" class="form-control" id="inputVoornaam" placeholder="Voornaam" pattern="[A-Za-z]{,15}"
          name="voornaam">
      </section>

      <section class="form-group col-md-6">
        <!-- Security: Alleen alfabet en max 15 characters -->
        <label for="inputAchternaam">Achternaam </label>
        <input type="text" class="form-control" id="inputAchternaam" pattern="[A-Za-z].{,15}" placeholder="Achternaam"
          name="Achternaam">
      </section>
    </section>

    <section class="form-group row">
      <!-- Security: Security: Het moet in de volgorde zijn - characters, gevolgd door een @, gevolgd door characters, dan een . en nog wat characters.  -->
      <label for="inputEmail">E-mail adres </label>
      <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp"
        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email gebruiker" name="E-mail adres">
    </section>

    <section class="form-group row">
      <!-- Security: Alleen nummers -->
      <label for="inputTelefoonnummer">Telefoonnummer </label>
      <input type="tel" name="phone" class="form-control" name="Telefoonnummer" id="inputTelefoonnummer"
        placeholder="Telefoonnummer" pattern="[0-9]">
    </section>

    <section class="form-group row">
      <!-- Security: Alleen nummers -->
      <label for="inputGeboortedatum">Geboortedatum </label>
      <input type="date" class="form-control" name="Geboortedatum" id="inputGeboortedatum" placeholder="Geboortedatum"
        pattern="[0-9]">
    </section>


    <section class="form-group row">
      <!-- Security: Max 6 characters  -->
      <label for="inputPostcode">Postcode </label>
      <input type="text" class="form-control" name="Postcode" id="inputPostcode" placeholder="Postcode" pattern=".{,6}">
    </section>

    <section class="form-group row">
      <!-- Security: Max 50 characters lang -->
      <label for="inputAdres">Adres </label>
      <input type="text" class="form-control" name="Adres" id="inputAdres" placeholder="Adres" pattern=".{,50}">
    </section>

    <section class="form-group row">
      <!-- Security: Alleen alfabet en max 15 characters -->
      <label for="inputPlaats">Plaats </label>
      <input type="text" class="form-control" name="Plaats" id="inputPlaats" placeholder="Plaats"
        pattern="[A-Za-z].{,15}">
    </section>

    <section class="form-group">
      <!-- Security: Alleen alfabet en max 15 characters -->
      <label for="inputLand">Land </label>
      <input type="text" class="form-control" name="land" id="inputLand" placeholder="Land" pattern="[A-Za-z].{,15}">
    </section>

    <!-- VERKOPER ACCOUNT GEGEVENS. alleen laten zien als van toepassing  -->
    <br>
    <h2> Verkoper gegevens </h2>
    <hr />
    <section class="form-group">
      <!-- Security: Alleen alfabet en max 15 characters -->
      <label for="inputBank">Bank </label>
      <input type="text" class="form-control" name="bank" id="inputBank" placeholder="Bank" pattern="[A-Za-z].{,15}">
    </section>

    <section class="form-group">
      <!-- Security: max 25 characters -->
      <label for="inputBank">Rekeningnummer </label>
      <input type="text" class="form-control" name="bank" id="inputBank" placeholder="Rekeningnummer" pattern=".{,25}">
    </section>

    <section class="form-group form-check">
      <p> Controle via... </p>
      <input type="checkbox" class="form-check-input" id="Creditcard">
      <label class="form-check-label" for="creditcard">Creditcard</label>

      <input type="checkbox" class="form-check-input" id="post">
      <label class="form-check-label" for="post">Post</label>
    </section>

    <section class="form-group">
      <!-- Security: alleen nummers -->
      <label for="inputBank">Creditcard nummer </label>
      <input type="number" class="form-control" name="bank" id="inputBank" placeholder="Creditcard nummer"
        pattern="[0-9]">
    </section>


    <button type="submit" class="btn btn-primary">Aanpassen</button>
  </form>

</section>




<?php include 'template/footer.php'; ?>