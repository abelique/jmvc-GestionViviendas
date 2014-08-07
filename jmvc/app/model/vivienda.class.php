<?php 
	require_once 'db.class.php';
	
	class vivienda extends database{
		/*
		 * @param: limit de registros, default 10
		 * funcion que se conecta y devuelve un array asociativo
		 * con registros de viviendas
		 */
		function viviendas($limit = 10){
			$this->conectar();
			$query = $this->consulta("select id_tipo, zona, num_hab, precio, m2, piscina, foto from vivienda limit $limit");
				$this->disconnect();
			if($this->numero_de_filas($query) > 0){
				while($stArray = $this->fetch_assoc($query))
				$data[] = $stArray;
				return $data; 
			}
			else
			{
				return '';
			}					
		}//fin funcion viviendas
		function viviendasOrdenadas($tipo_orden, $cantidad){
			$this->conectar();
			$query = $this->consulta("select id_tipo, zona, num_hab, precio, m2, piscina, foto from vivienda order by 'id_tipo' ; ");
				$this->disconnect();
			if($this->numero_de_filas($query) > 0)
				{
					while($stArray = $this->fetch_assoc($query))
					$data[] = $stArray;
					return $data;
				}
			else
				{
					return '';
				}			
		}
	}
 ?>