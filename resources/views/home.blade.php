@extends('layouts.dash')

@section('content')

<div class="main-top">
        <h1>.</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
        <div class="card">
          
          <h4>Campaings</h4>
          <div class="per">
            <table>
              <tr>
                <td><span>{{$campaingCount}}</span></td>
              </tr>
            </table>
          </div>
          
        </div>
        <div class="card">
         
          <h4>Contancts</h4>
          <p></p>
          <div class="per">
            <table>
              <tr>
                <td><span>{{$contactCount}}</span></td>
                
              </tr>
              
              
            </table>
          </div>
          
        </div>
        <div class="card">
          
          <h4>Groups</h4>
          
          <div class="per">
            <table>
              <tr>
                <td><span>{{$groupCount}}</span></td>
                
              </tr>
              
             
            </table>
          </div>
          
        </div>
        <div class="card">
          
          <h4>Sender Id</h4>
          <p></p>
          <div class="per">
            <table>
              <tr>
                <td><span>0</span></td>
               
              </tr>
            
            </table>
          </div>
         
        </div>
      </div>

    <div id="piechart" style="width: 900px; height: 500px;"></div>
 

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Delivered', '\Undelivered'],
          ['Delivered',     8],
          ['Undelivred',      2],
         
        ]);

        var options = {
          title: 'campaing Summary'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

@endsection
