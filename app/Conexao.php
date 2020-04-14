<?php

class Conexao {

    public static function abrirConexao() {

        try {
            $conexao = new PDO('mysql:host=localhost;port=3306; dbname=ngongo', 'root', '');
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexao->exec("SET CHARACTER SET utf8"); // define a codificacao utf8 de toda a consula
              return $conexao;
        } catch (PDOException $erro) {
            $erro->getMessage();
            die();
        }
    }

}
