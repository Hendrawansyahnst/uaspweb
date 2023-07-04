<?php
header('Access-Control-Allow-Origin: http://localhost:5173');
header('Access-Control-Allow-Method: GET, POST, OPTION, axios');

    function getConnection() {
        $host = 'localhost';
        $dbname = 'id20997322_nstbooknii';
        $username = 'id20997322_nst';
        $password = 'Kokbisalupasih!23';

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
?>