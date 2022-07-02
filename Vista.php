<?php
	// Vista.php
	class Vista {	// Representación en patalla del modelo
		public $img;
		public $blanco, $negro, $rojo, $vc,$nara;
	
		public function dibujarReloj($m){  // modeloReloj  
			$this->img = imagecreate($m->ancho, $m->alto);
			$this->blanco = imagecolorallocate($this->img, 255, 255, 255);
			$this->negro = imagecolorallocate($this->img, 0, 0, 0);
			$this->rojo = imagecolorallocate($this->img, 255, 0, 0);
			$this->vc = imagecolorallocate($this->img, 187, 223, 191);
			$this-> nara=imagecolorallocate($this->img,255, 195, 0);
			$this-> rosa=imagecolorallocate($this->img,183, 0, 199);
			
			
			imagefilledrectangle($this->img, 0, 0, $m->ancho, $m->alto, $this->blanco);
			//$color = imagecolorallocate($this->img, $flecha->color->R, $flecha->color->G, $flecha->color->B);
			//imageline($this->img, $flecha->puntoini->x, $flecha->puntoini->y, $flecha->puntofin->x, $flecha->puntofin->y, $color);
			imagefilledellipse($this->img, $m->ancho/2, $m->alto/2, $m->ancho-20, $m->alto-20, $this->negro);
			imagefilledellipse($this->img, $m->ancho/2, $m->alto/2, $m->ancho-30, $m->alto-30, $this->blanco);
			imagefilledellipse($this->img, $m->ancho/2, $m->alto/2, $m->ancho-385, $m->alto-385, $this->rojo);
			
			// imagesetthickness(resource $image, int $thickness): bool
			imagesetthickness($this->img, 3);

			//imageline($this->img, $m->arrptosint[0]->x, $m->arrptosint[0]->y, $m->arrptosext[0]->x, $m->arrptosext[0]->y, $this->rojo);
			
			
			for ($i=0;$i<60; $i++)
			{
			
			imageline($this->img, $m->arrptosint[$i]->x, $m->arrptosint[$i]->y, $m->arrptosext[$i]->x, $m->arrptosext[$i]->y, $this->rojo);
			}
		//dibujar cadena 
      /* $indice=0;
	   $numero=0;

	   for($indice=0;$indice<60; $indice++)
	   {
		if($indice<60)
		{
			$numero=$indice-15;
			echo $numero;

		}
	   }
*/
		//dibujar segundero
		 if($m->seg > 14 && $m->seg < 61)
		 {
			$indice = $m->seg - 15;
		imageline($this->img, $m->arrptosint[$indice]->x, $m->arrptosint[$indice]->y, 
		          $m->centrox, $m->centroy, $this->rosa);
		 }
		else if ($m->seg > 0 && $m->seg < 15)
		{
			$indice = $m->seg +45;
			imageline($this->img, $m->arrptosint[$indice]->x, $m->arrptosint[$indice]->y, 
					  $m->centrox, $m->centroy, $this->rosa);
		}
		
		//dibujar minutero
		if($m->min > 14 && $m->min < 61)
		{
		   $indice = $m->min - 15;
	   imageline($this->img, $m->arrptosint[$indice]->x, $m->arrptosint[$indice]->y, 
				 $m->centrox, $m->centroy, $this->vc);
		}
	   else if ($m->min > 0 && $m->min < 15)
	   {
		   $indice = $m->min +45;
		   imageline($this->img, $m->arrptosint[$indice]->x, $m->arrptosint[$indice]->y, 
					 $m->centrox, $m->centroy, $this->vc);
	   }
		//dibujar hora

		imagestring($this->img, 3, 188, 70, '12', $this->negro);
		imagestring($this->img, 3, 261, 80, '1', $this->negro);
		imagestring($this->img, 3, 310, 128, '2', $this->negro);
		imagestring($this->img, 3, 328, 194, '3', $this->negro);
		imagestring($this->img, 3, 310, 260, '4', $this->negro);
		imagestring($this->img, 3, 264, 307, '5', $this->negro);
		imagestring($this->img, 3, 199, 325, '6', $this->negro);
		imagestring($this->img, 3, 129, 307, '7', $this->negro);
		imagestring($this->img, 3, 87, 255, '8', $this->negro);
		imagestring($this->img, 3, 69, 193, '9', $this->negro);
		imagestring($this->img, 3, 83, 125, '10', $this->negro);
		imagestring($this->img, 3, 134, 84, '11', $this->negro);


		if($m->hora==12){
			$indice = 45;
			
		}
		else if($m->hora==1){
			$indice = 50;
		}
		else if($m->hora==2){
			$indice = 55;
		}
		else if($m->hora==3){
			$indice = 0;
		}
		else if($m->hora==4){
			$indice = 5;
		}
		else if($m->hora==5){
			$indice = 10;
		}
		else if($m->hora==6){
			$indice = 15;
		}
		else if($m->hora==7){
			$indice = 20;
		}
		else if($m->hora==8){
			$indice = 25;
		}
		else if($m->hora==9){
			$indice = 30;
		}
		else if($m->hora==10){
			$indice = 35;
			
		}
		else if($m->hora==11){
			$indice = 40;
			
		}
	
		
		
		
		imageline($this->img, $m->arrptosint[$indice]->x, $m->arrptosint[$indice]->y, 
		          $m->centrox, $m->centroy, $this->nara);
		
			

			imagepng($this->img);
			imagedestroy($this->img);
		}
		
	}
?>