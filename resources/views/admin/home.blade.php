@extends('admin.layouts.home')

@section('content')


  
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <script type="text/javascript">
   google.charts.load("current", {packages:["corechart"]});
   google.charts.setOnLoadCallback(drawChart);
   function drawChart() {
     var data = google.visualization.arrayToDataTable([
       ['Sells', 'Quantity'],
       ['Breakfast',     11],
       ['Drinks',      2],
       ['Khana',  2],
       ['Snacks', 2],
       ['Other Item',    7]
     ]);

     var options = {
       title: 'Online Canteen',
       is3D: true,
     };

     var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
     chart.draw(data, options);
   }
 </script>
<div id="piechart_3d" style="width: 900px; height: 500px;"></div>
@endsection
