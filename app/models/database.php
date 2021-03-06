<?php

class Database {

  private $host; // Host (Servidor) que executa o banco de dados
  private $user; // Usuário que se conecta ao servidor de banco de dados
  private $pass; // Senha do usuário para conexão ao banco de dados
  private $db; // Nome do banco de dados a ser utilizado
  private $sql; // String da consulta SQL a ser executada

  function __construct() {
    $this->host = 'localhost';
    $this->user = 'root';
    $this->pass = '';
    $this->db = 'livroVisitas';
    $this->sql = '';
  }

  public function conectar() {
    /*
     * Função para conexão ao banco de dados
     * @return Object Retorna o objeto da conexão
     */
    $con = mysql_connect($this->host, $this->user, $this->pass) or die($this->erro(mysql_error()));
    return $con;
  }

  public function criarDB() {
    /*
     * Funcao que cria o DB livroVisitas, caso nao exista
     */
    $this->sql = 'CREATE DATABASE IF NOT EXISTS livroVisitas;
                  USE livroVisitas;
                  CREATE TABLE IF NOT EXISTS Usuario(
                                       id Int AUTO_INCREMENT,
                                       nome VarChar(50) NOT NULL,
                                       email VarChar(50) NOT NULL,
                                       website Varchar(50) NOT NULL,
                                       login VarChar(20) NOT NULL UNIQUE,
                                       senha VarChar(100) NOT NULL,
                                       admin Bool DEFAULT false,
                                       PRIMARY KEY(id));
                  CREATE TABLE IF NOT EXISTS Recado(
                                      id Int AUTO_INCREMENT,
                                      user_id Int,
                                      mensagem VarChar(255) NOT NULL,
                                      publicado TimeStamp DEFAULT CURRENT_TIMESTAMP,
                                      FOREIGN KEY(user_id) REFERENCES Usuario(id) ON DELETE CASCADE,
                                      PRIMARY KEY(id));';
    mysql_query($this->sql);
    $this->sql = '';
  }

  public function selecionarDB() {
    /*
     * Função para seleção do banco de dados a ser usado
     * @return Boolean Retorna true (verdadeiro) ou false (falso)
     */

    $sel = mysql_select_db($this->db) or die($this->erro(mysql_error()));
    if ($sel) {
      return true;
    } else {
      return false;
    }
  }

  public function query() {
    /*
     * Função para execução da consulta ao banco de dados
     * @return Object $qry Retorna o resultado da consulta como um objeto
     */
    $qry = mysql_query($this->sql) or die($this->erro(mysql_error()));
    return $qry;
  }

  public function set($prop, $value) {
    /*
     * Função para atribuir valores às propriedades da classe
     * @param String $prop Nome da propriedade que terá seu valor atribuído
     * @param String, Array, Object Valor a ser atribuído
     */
    $this->$prop = $value;
  }

  public function getSQL() {
    /*
     * Função para retornar a string SQL
     * @return String String SQL
     */
    return $this->sql;
  }

  public function erro($erro) {
    /*
     * Função para exibir os error
     * @param String $erro Erro a ser exibido
     */
    echo $erro;
  }

}

?>
