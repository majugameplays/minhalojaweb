<?php

/* CONTROLADOR
 * funรงao: controlar as pรกginas estรกticas (pรกginas sem acesso ao modelo)  */

function index() {
    exibir("paginas/inicial");
}


function sobre() {
    exibir("paginas/sobre");
}


function visualizar () {
    $meusDados = array ();
    $meusDados ["produto"] = "Hamburguer";
    $meusDados ["descri็ใo"] = "Dois hamburgueres, alface, queijo, molho especial, cebola e picles num pใo com gergilim";
    $meusDados ["pre็o"] = " R$ 14,00";
		
    exibir ("paginas/visualizar", $meusDados);
	
	}