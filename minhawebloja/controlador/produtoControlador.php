<?php

/* CONTROLADOR
 * funçao: controlar as páginas estáticas (páginas sem acesso ao modelo)  */

function index() {
    exibir("paginas/inicial");
}


function sobre() {
    exibir("paginas/sobre");
}


function visualizar () {
    $meusDados = array ();
    $meusDados ["produto"] = "Hamburguer";
    $meusDados ["descri��o"] = "Dois hamburgueres, alface, queijo, molho especial, cebola e picles num p�o com gergilim";
    $meusDados ["pre�o"] = " R$ 14,00";
		
    exibir ("paginas/visualizar", $meusDados);
	
	}