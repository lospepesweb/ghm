<?php

class Slider {

	public function seleccionarSliderController(){

		$respuesta = SliderModel::seleccionarSliderModel('slider');

		foreach ($respuesta as $row => $item) {
			
			echo '<li>
			      	<img src="../admin/'.substr($item['ruta'],6).'" alt="imagenSlider">
			      </li>';			

		}

	}


	public function seleccionarSliderControllerCelular(){
	
		$respuesta = SliderModel::seleccionarSliderModelCelular('slider_c');

		foreach ($respuesta as $row => $item) {
			
			echo '<li>
			      	<img src="../admin/'.substr($item['ruta'],6).'" alt="imagenSlider">
			      </li>';			

		}

	}

}