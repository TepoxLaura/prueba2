<?php
	// Modelo.php 
	class Modelo {	// Representa un Reloj
		public $hora, $min, $seg;
		public $ancho, $alto;
		public $centrox, $centroy, $radio;
		public $arrptosext, $arrptosint;
	
		public function __construct($h, $m, $s, $an, $al){
			$this->hora = $h;
			$this->min = $m;
			$this->seg = $s;
			$this->ancho = $an;
			$this->alto = $al;
			$this->centrox = $an/2;
			$this->centroy = $al/2;
			$this->radio = ($an - 100)/2; 
			$this->arrptosext = Array(); 
			$this->arrptosint = Array();
			$this->calcularPuntos();
		}
		private function calcularPuntos(){
			// inicializar el angulo inicial
			$ai=0;

			// calcular el angulo de la rebanada
			$ar=2*M_PI/60;
			
			/*
			for ($i=0;$i<=60; $i++){
			$this->arrptosext[$i] = new Punto($this->centrox+$this->radio, $this->centroy);
			$this->arrptosint[$i] = new Punto($this->centrox+$this->radio-10, $this->centroy);
			}
			*/
			
			for ($i=0;$i<60; $i++)
			{
				$this->arrptosext[$i] = new Punto($this->centrox+$this->radio*cos($ai), $this->centroy+$this->radio*sin($ai));
				$this->arrptosint[$i] = new Punto($this->centrox+($this->radio-10)*cos($ai), $this->centroy+($this->radio-10)*sin($ai));
				$ai=$ai+$ar;
			}
			
			

		}
		
		
	}
?>