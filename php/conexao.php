<?php
class db {
    private $hostname = 'localhost';
    private $bancodedados = 'aquasensedb';
    private $usuario = 'root';
    private $senha = '';
    private $mysqli = null;

    public function conecta_mysql() {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $this->mysqli = new mysqli($this->hostname, $this->usuario, $this->senha, $this->bancodedados);
        if ($this->mysqli->connect_errno) {
            die("Falha na conexão: ({$this->mysqli->connect_errno}) {$this->mysqli->connect_error}");
        }
        return $this->mysqli;
    }
}
?>