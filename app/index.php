<?php

$host = getenv('MYSQL_HOST') ?: 'db';
$user = getenv('MYSQL_USER') ?: 'root';
$pass = getenv('MYSQL_PASSWORD') ?: 'docker123';
$db   = getenv('MYSQL_DATABASE') ?: 'microservices_db';

echo "<h1>Docker Microservices - DIO Bootcamp</h1>";
echo "<h2>Arquitetura de Microsservicos com Docker</h2>";
echo "<hr>";

try {
    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        throw new Exception("Erro de conexao: " . $conn->connect_error);
    }
    echo "<p style='color:green'>Conexao com MySQL estabelecida com sucesso!</p>";

    $result = $conn->query("SELECT * FROM services");
    if ($result && $result->num_rows > 0) {
        echo "<h3>Servicos Registrados:</h3>";
        echo "<table border='1' cellpadding='8'>";
        echo "<tr><th>ID</th><th>Nome</th><th>Status</th><th>Porta</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td>" . $row['port'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    $conn->close();
} catch (Exception $e) {
    echo "<p style='color:red'>" . $e->getMessage() . "</p>";
}

echo "<hr>";
echo "<p>Hostname: " . gethostname() . "</p>";
echo "<p>Server IP: " . $_SERVER['SERVER_ADDR'] . "</p>";
echo "<p>PHP Version: " . phpversion() . "</p>";
?>
