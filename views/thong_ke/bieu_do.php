<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views/template/css/list.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Danh mục', 'Số lượng sản phẩm'],
        <?php 
            $tong_dm = count($thong_ke);
            $i = 1;
            foreach($thong_ke as $tk)   {
                extract($tk);
                if($i == $tong_dm) {
                    $dauPhay = "";
                } else {
                    $dauPhay = ",";
                }
                echo "['".$tk['ten_loai']."', ".$tk['so_luong']."]".$dauPhay;
                $i+=1;
            }
        ?>
        ]);

        // Optional; add a title and set the width and height of the chart
        var options = {'title':'My Average Day', 'width':1400, 'height':500};

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
        }
    </script>

</head>
<body>
    <div class="danh__sach">
        <div class="ds__title">
            <h2>Biểu đồ thống kê</h2>
        </div>

        <div class="button__active">
            <button><a href="../../../../WEB2041-FA22.WE17309/MVC/index.php?url=thong_ke">Thống kê sản phẩm</a></button>
        </div>
        <div id="piechart"></div>
    </div>


    
</body>
</html>