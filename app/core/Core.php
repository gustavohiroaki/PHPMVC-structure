<?php

class Core {

    //Atributos
    private $controller;
    private $metodo;
    private $parametros = array();



    public function run(){
        /* 
        Armazenar na variável $url os dados do PHP_SELF(link)
        dividindo-a em uma array na posição index.php
        */
        $url = explode("index.php",$_SERVER["PHP_SELF"]);
        
        //Armazenar a última array na variável $url
        $url = end($url);

        //Caso $url não seja nula
        if($url != ""){
            //Dividir a string $url nas barras, armazenando uma array
            $url = explode('/',$url);

            //Elimina a primeira array(posição que não há nada)
            array_shift($url);

            //Armazenar nas variáveis os dados da array $url
            //Pega o controller
            $this->controller = $url[0];
            array_shift($url);

            //Pega o metodo
            $this->metodo = $url[0];
            array_shift($url);


            $this->parametros = array_filter($url);
            
        }

        // echo "<pre>";
        // print_r ($url);
        // echo "</pre>";
    }



    //Getters
    public function getController(){
        return $this->controller;
    }

    public function getMetodo(){
        return $this->metodo;
    }
    public function getParametros(){
        return $this->parametros;
    }
}