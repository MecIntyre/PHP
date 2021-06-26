<?php require_once 'funktionen/func_artikel.php'; ?>
<html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Warenkorb</title>
    </head>
    <body>
      <table border=”2”>
        <tr>
          <th>Menge</th>
          <th>Artikel</th>
          <th>Preis</th>
        </tr>
        <?php foreach($artikel_array as $artikel){ ?>
        <tr>
          <td><?php echo $artikel['Menge']; ?></td>
          <td><?php echo $artikel['Name']; ?></td>
          <td><?php echo $artikel['Preis']; ?></td>
        </tr>
        <?php } ?>
      </table>
    </body>
</html>
