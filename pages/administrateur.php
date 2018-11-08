<link rel="stylesheet" href="public/css/main.css">


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Telephone</th>
      <th scope="col">Mail</th>
    </tr>
  </thead>
  <tbody>

  <?php
    foreach (Stagiaires::getAll() as $stagiaire):
      echo '<tr>';
      echo '<td>' . $stagiaire->nom . '</td>';
      echo '<td>' . $stagiaire->prenom . '</td>';
      echo '<td>' . $stagiaire->telephone . '</td>';
      echo '<td>' . $stagiaire->mail . '</td>';
      echo '</tr>';

  endforeach; ?>

</table>
