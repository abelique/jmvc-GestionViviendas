<div class="t"><?php echo $titulo; ?></div>
    <table border="0" cellspacing="3" cellpadding="0" class="tabla" width="100%">
   <tr>
      <th>Tipo </th>
      <th>Zona </th>
      <th>Dormitorios </th>
      <th>Precio  </th>
      <th>Tamaño </th>
      <th>extras </th>
      <th>foto </th>
    </tr>
    <!-- select id_tipo, zona, num_hab, precio, m2, piscina, foto from vivienda; from vivienda"); -->
    <?php foreach ($tsArray as $data): ?>
    <tr>
        <td><?php echo $data['id_tipo'];?></td>
      	<td><?php echo $data['zona'];?></td>
      	<td><?php echo $data['num_hab'];?></td>
        <td><?php echo $data['precio'];?></td>
        <td><?php echo $data['m2'];?></td>
        <td><?php echo $data['piscina'];?></td>
        <td><?php echo $data['foto'];?></td>
    </tr>
    <?php endforeach; ?>
 </table>