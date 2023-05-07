<?php
/**
* 
* Clase que devuelve el nombre de un alumno y su edad 
*
* @author Benjamin Mulero Pedrosa
* @version 2.0
* @since 2023-02-05
*
*/
class Alumno
{
	/**@var string nombre*/	
	private $nombre;
	/**@var string primer apellido*/
	private $pri_apellido;
	/**@var string segundo apellido*/
	private $seg_apellido;
	/**@var integer edad*/
	private $edad;

	/**
	*
	* Constructor para crear un Alumno
	* @param string $nombre nombre
	* @param string $pri_apellido primer apellido
	* @param string $seg_apellido segundo apellido
	* @param integer $edad edad
	*
	*/
	public function __construct($nombre, $pri_apellido, $seg_apellido, $edad)
	{
		$this->nombre = $nombre;
		$this->pri_apellido = $pri_apellido;
		$this->seg_apellido = $seg_apellido;
		$this->edad = $edad;
	}

	/**
	*
	* Este metodo devuelve el nombre completo del alumno empezando por el nombre
	* @return string Nombre completo con la edad
	* @example Benjamin Mulero Pedrosa, 42 años.
	* 
	*/
	public function nombre_inicial ()
	{
		return $this->nombre." ".$this->pri_apellido." ".$this->seg_apellido.", ".$this->edad." años.";
	}


	/**
	*
	* Este metodo devuelve el nombre completo del alumno empezando por los apellidos
	* @return string Nombre completo y edad iniciandose desde los apellidos.
	* @example Mulero Pedrosa, Benjamin, 42 años.
	*
	*/
	public function nombre_final ()
	{
		return $this->pri_apellido." ".$this->seg_apellido.", ".$this->nombre.", ".$this->edad." años.";
	}

}
$objAlumno = new Alumno ('BENJAMIN', 'MULERO', 'PEDROSA', 42);
echo "Clase con dos métodos</br>";
echo "</br> Nombre completo de alumno empezando por su nombre: ".$objAlumno->nombre_inicial();
echo "</br> Nombre completo de alumno empezando por su primer apellido: ".$objAlumno->nombre_final();
?>
