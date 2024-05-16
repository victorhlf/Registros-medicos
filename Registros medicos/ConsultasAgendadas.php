<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Consultas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .container {
            background-color: #f2f2f2;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .calendar {
            border-collapse: collapse;
            width: 300px;
            margin: 0 auto;
        }
        .calendar th, .calendar td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        .calendar th {
            background-color: #f2f2f2;
        }
        .highlight {
            background-color: #e4ece6;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        .botao-container {
            display: flex;
            justify-content: space-between;
            padding: 0px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .botao {
            padding: 10px 20px;
            background-color: #4CBB17;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            text-align: center;
        }
        .botao:hover {
            background-color: #008000;
        }
    </style>
</head>
<body>
    <h1>Consultas Agendadas</h1>
    <?php
        $cardio = "Cardiologista";
        $data1 = "01/05/2024";

        echo "<div class='container'>";
        echo "<label for='medico'><strong>Médico</strong></label>";
        echo "<label for='tipo'>$cardio</label><br>";
        echo "<label for='data'><strong>Data</strong></label>";
        echo "<label for='data'>$data1</label>";
        echo "</div>";
    ?>
    <br><br>
    <?php
        $neuro = "Neurologista";
        $data2 = "25/05/2023";

        echo "<div class='container'>";
        echo "<label for='medico'><strong>Médico</strong></label>";
        echo "<label for='tipo'>$neuro</label><br>";
        echo "<label for='data'><strong>Data</strong></label>";
        echo "<label for='data'>$data2</label>";
        echo "</div>";
    ?>
    <table class="calendar">
        <thead>
            <tr>
                <th>D</th>
                <th>S</th>
                <th>T</th>
                <th>Q</th>
                <th>Q</th>
                <th>S</th>
                <th>S</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td class="highlight">1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
            </tr>
            <tr>
                <td>12</td>
                <td>13</td>
                <td>14</td>
                <td>15</td>
                <td>16</td>
                <td>17</td>
                <td>18</td>
            </tr>
            <tr>
                <td>19</td>
                <td>20</td>
                <td>21</td>
                <td>22</td>
                <td>23</td>
                <td>24</td>
                <td class="highlight">25</td>
            </tr>
            <tr>
                <td>26</td>
                <td>27</td>
                <td>28</td>
                <td>29</td>
                <td>30</td>
                <td>31</td>
                <td></td>
            </tr>

        </tbody>
    </table>
    <div class="botao-container">
        <a href="Home.php" class="botao voltar">← Voltar</a>
        <a href="Logout.php" class="botao sair">Sair →</a>
    </div>
</body>
</html>
