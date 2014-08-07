<div id="contenido">
		<header>
			<h1>Inserción de vivienda</h1>
			<label for="datosVivienda">Introduzca los datos de la vivienda</label>
		</header>
		<section>
			<article>
				<div class="linea">
				<label for="tipoVivienda">Tipo de vivienda:</label>
				<select name="tipoV" id="tipoV">
					<option id="0" value="">Tipo</option>
					<option id="1" value="casa">Casa</option>
					<option id="2" value="piso">Piso</option>
					<option id="3" value="adosado">Adosado</option>
					<option id="4" value="chalet">Chalet</option>				
				</select>
				</div>
				<span class"msgError" id="requeredTipo">¡Se requiere el tipo de vivienda!</span>
				
				<div class="linea">
				<label for="zona">Zona:</label>
					<select name="zona" id="zona">
					<option id="10" value="centro">Centro</option>
					<option id="11" value="nervion">Nervión</option>
					<option id="21" value="macarena">Macarena</option>
					<option id="31" value="aljarafe">Aljarafe</option>				
				</select>
				</div>
				<span class"msgError" id="requeredZona">¡Se requiere la zona!</span>
				
				<div class="linea">
				<label for="direccion">Dirección:</label>
				<input type="text" id="txtDireccion" />
				</div>
				<span class"msgError" id="requeredDireccion">¡Se requiere la dirección de la vivienda!</span>
				
				<div class="linea">
				<label for="numDormitorios">Número de dormitorios:</label>
					<input type="radio" name="numDormitorios" value="uno"/>1
					<input type="radio" name="numDormitorios" value="dos"/>2
					<input type="radio" name="numDormitorios" value="tres"/>3
					<input type="radio" name="numDormitorios" value="cuatro"/>4
					<input type="radio" name="numDormitorios" value="cinco"/>5
				</div>
				<span class"msgError" id="requeredNumDormitorios">¡Se requiere el numero de dormitorios!</span>
				
				<div class="linea">
				<label for="precio">Precio:</label>		
				<input type="text" id="txtPrecio" />€
				</div>				
				<span class"msgError" id="precioNumerico">¡El precio debe ser un valor numérico!</span>
				
				<div class="linea">
				<label for="tamanyo">Tamaño:</label>
				<input type="text" id="txtTamanyo" />metros cuadrados
				</div>
				<span class"msgError" id="requeredMetros">¡Se requiere los metros cuadrados!</span>
				
				<div class="linea">
				<label for="extras">Extras(marque las que procedan):</label>
					<input type="checkbox" name="extras" value="piscina" />Piscina
					<input type="checkbox" name="extras" value="jardin" />Jardin
					<input type="checkbox" name="extras" value="garage" />Garage
				</div>
				
				<div class="linea">
				<label for="foto">Foto:</label>
				<input type="text" id="txtFoto" name="txtFoto" style="width: 300px"/>
				<input type="submit" value="Examinar..." />
				</div>
				
				<div class="linea">
				<label for="observaciones">Observaciones:</label>
				<textarea name="txtArea" id="txtArea" cols="60" rows="8"></textarea>
				</div>
				<div class="linea">
				<input type="submit" id="insertar" value="Insertar vivienda"  />
				</div>
				
				
				
			</article>
		</section>
		</div>
