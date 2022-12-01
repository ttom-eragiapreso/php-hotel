<?php
$hotels = [
  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
  ],

];

$stampa_brutta = false;
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous' />
  <title>Hotel</title>
</head>

<body>


  <?php if ($stampa_brutta) : ?>
    <div class="container">
      <?php foreach ($hotels as $hotel) : ?>
        <ul>
          <?php foreach ($hotel as $key => $value) : ?>
            <li><?php echo "$key : $value"  ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>




  <div class="container my-5">

    <form action="./index.php" class="d-flex">

      <div class="form-check">
        <input class="form-check-input" type="radio" name="parcheggioSi" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          Con parcheggio
        </label>
      </div>

      <div class="form-check mx-3">
        <input class="form-check-input" type="radio" name="parcheggioNo" id="flexRadioDefault2">
        <label class="form-check-label" for="flexRadioDefault2">
          Senza parcheggio
        </label>
      </div>

      <div class="form-check mx-3">
        <input class="form-check-input w-25" type="number" name="voto" id="voto">
        <label class="form-check-label mx-2" for="voto">
          Voto
        </label>
      </div>

      <div class="form-check mx-3">
        <button class="btn btn-primary" type="submit">Search</button>
      </div>

    </form>




    <table class="table table-striped">
      <thead>
        <tr>
          <?php foreach ($hotels[0] as $key => $value) : ?>
            <th><?php echo "$key" ?></th>
          <?php endforeach; ?>
        </tr>
      </thead>

      <tbody>

        <?php foreach ($hotels as $hotel) : ?>
          <tr>
            <?php foreach ($hotel as $key => $value) : ?>
              <?php if ($key === 'parking') {
                $value === false ? $value = 'No' : $value = 'Si';
              }
              ?>
              <td><?php echo "$value" ?></td>
            <?php endforeach; ?>
          </tr>
        <?php endforeach; ?>

      </tbody>
    </table>
  </div>




</body>

</html>





<!-- Descrizione
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus:
1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.
Usiamo la logica con le nozioni che abbiamo fino ad ora senza cercare possibilità di filtri più evoluti che vedremo domani -->