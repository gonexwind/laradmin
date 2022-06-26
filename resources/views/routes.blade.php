<table style='width:100%'>
    <tr>
        <td width='10%'><h4>No</h4></td>
        <td width='20%'><h4>HTTP Method</h4></td>
        <td width='50%'><h4>Route</h4></td>
        <td width='20%'><h4>Name</h4></td>
        <td width='70%'><h4>Corresponding Action</h4></td>
    </tr>
    @foreach($routes as $route)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $route->methods()[0] }}</td>
            <td>{{ $route->uri() }}</td>
            <td>{{ $route->getName() }}</td>
            <td>{{ $route->getActionName() }}</td>
        </tr>
    @endforeach
</table>
