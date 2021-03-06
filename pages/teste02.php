<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Nome', 'Quantidade'],
          <?php
                include ('../config/painel.php');

                $consulta = Conexao::conectar()->prepare("SELECT count(I.nome_instituicao) AS qtd, S.sigla AS nome
                                                            FROM instituicao I 
                                                            INNER JOIN siglainstituicao S 
                                                            ON S.id_sigla = I.fk_sigla 
                                                            WHERE status_inst = 'Sim'
                                                            GROUP BY (S.sigla);");
                $consulta->execute();
                $result = $consulta->fetchAll();
                foreach($result as $dados){
                    $qtd = $dados['qtd'];
                    $sigla = $dados['nome'];?>

          ['<?php echo $sigla?>', <?php echo $qtd?>],
                
        <?php } ?>
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
</head>
<body>
<div id="columnchart_material" style="width: 800px; height: 500px;"></div>
</body>
</html>

