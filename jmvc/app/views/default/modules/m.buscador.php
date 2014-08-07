<form action="index.php" method="post">
   <table border="0" cellspacing="4" cellpadding="0" class="tabla">
  <tr>
    <td>Tipo de orden: </td>
    <td><label>
      <select name="tipo_orden">
        <option value="id_tipo">Tipo</option>
        <option value="zona">Zona </option>
        <option value="num_hab">numero hab.</option>
        <option value="precio">Precio</option>
        <option value="m2">Tamaño</option>
      </select>
    </label></td>
    <td>Cantidad de registros: </td>
    <td><label>
      <select name="cantidad">
        <option value="4">4</option>
        <option value="8">8</option>
        <option value="12">12</option>
        <option value="16">16</option>
        <option value="20">20</option>
        <option value="24">24</option>
        <option value="28">28</option>
        <option value="32">32</option>
      </select>
    </label></td>
    <td><label>
      <input type="submit" name="Submit" value=" Buscar " />
    </label></td>
  </tr>
</table>
</form>