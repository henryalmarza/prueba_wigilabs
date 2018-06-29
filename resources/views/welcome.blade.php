<!DOCTYPE html>
<html ng-app="miApp">
<head>
  <title>Art&iacute;culos</title>

  <link href="/css/lib.css" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/angular.min.js') }}"></script>
  <script src="{{ asset('js/myangularapp.js') }}"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body ng-controller="miControlador">
  <h1>Art&iacute;culos (REST)</h1>
  <h2>Listado de art&iacute;culos</h2>
  <br>
  <table class="table table-bordered">
    <th>Nombre</th>
    <th>Precio</th>
    <th>Descripci&oacute;n</th>
    <th>Imagen</th>
    <tbody>
        <tr ng-repeat="a in articulo">
           <td><% a.nombre %></td>
           <td><% a.precio %></td>
           <td><% a.descripcion %></td>
           <td><img src={{ URL::to('/') }}/images/angular-logo.png></td>
       </tr>
   </tbody>
</table>

<div ng-controller="miControlador">
    <h1>Servicio SOAP</h1>
    <p>Conversi&oacute;n de 100 d&oacute;lares a euros: <%soap%></p>
</div>

<iframe width="560" height="315" src="https://www.youtube.com/embed/Sx_2dOYOtes" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

<!--<div ng-controller="miControlador">
    <p>The ID is <%greeting.id%></p>
    <p>The content is <%greeting.content%></p>
</div>-->

</body>
</html>