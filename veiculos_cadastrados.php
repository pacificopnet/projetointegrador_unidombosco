<!DOCTYPE html>
<html>
<head>
    <title>Veiculos Cadastrados</title>
    
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Conexão com o banco de dados (substitua pelos seus dados)
$servidor= "localhost";
    $usuario= "root";
    $password= "";
    $dbname= "cadastro";

$conn = new mysqli($servidor, $usuario, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Consulta SQL para obter a lista de usuários
$sql = "SELECT modelo, fabricante, ano, km FROM cadastro";
$result = $conn->query($sql);

// Exibe a tabela de usuários
if ($result->num_rows > 0) {
    echo "<h2>Veiculos Cadastrados:</h2>";
    echo "<table>";
    echo "<tr><th>Modelo</th><th>Fabricante</th><th>Ano</th><th>Km</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["modelo"] . "</td>";
        echo "<td>" . $row["fabricante"] . "</td>";
        echo "<td>" . $row["ano"] . "</td>";
        echo "<td>" . $row["km"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Não há usuários cadastrados.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>

</body>
</html>


