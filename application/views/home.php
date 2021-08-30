<!-- <div class="row">
    <?php
    foreach ($users as $user) {
        $template = "<div class = 'col-sd-3'><div class='card' style='width: 16rem;'>
    <div class=card-body>
      <h5 class='card-title'>Registrate Users</h5>
      <h5 class='card-text'>{$user->cedula}</h5>
      <h5 class='card-text'>{$user->nombre}</h5>
      <h5 class='card-text'>{$user->tipoVehiculo}</h5>
      <h5 class='card-text'>{$user->ciliMoto}</h5>
      <h5 class='card-text'>{$user->tiemMoto}</h5>
      <h5 class='card-text'>{$user->plaMoto}</h5>
      <h5 class='card-text'>{$user->modCarro}</h5>
      <h5 class='card-text'>{$user->pCarro}</h5>
      <h5 class='card-text'>{$user->plaCarro}</h5>
      <h5 class='card-text'>{$user->fechayhora}</h5>
      <h5 class='card-text'>{$user->numCelda}</h5>
      <a href='http://localhost/parcking/create_users/editUser?id={$user->id}' class='card-link'>Edit</a>
      <a href='http://localhost/parcking/create_users/deleteUser?id={$user->id}' class='card-link'>Delete</a>
    </div>
    </div></div>";
        echo $template;
    }
    ?>
</div> -->

<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">cedula</th>
            <th scope="col">nombre</th>
            <th scope="col">tipoVehiculo</th>
            <th scope="col">cilindrajeMotos</th>
            <th scope="col">tiempoMoto</th>
            <th scope="col">placaMoto</th>
            <th scope="col">modeloCarro</th>
            <th scope="col">puertascarro</th>
            <th scope="col">placaCarro</th>            
            <th scope="col">fechayhora</th>
            <th scope="col">numCelda</th>
            <th scope="col">Edit -- Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user) {
            $template = "
            <tr>
                <td>{$user->id}</td>
                <td>{$user->cedula}</td>
                <td>{$user->nombre}</td>
                <td>{$user->tipoVehiculo}</td>                
                <td>{$user->cilMoto}</td>
                <td>{$user->tiemMoto}</td>
                <td>{$user->plaMoto}</td>
                <td>{$user->modCarro}</td>
                <td>{$user->pueCarro}</td>
                <td>{$user->plaCarro}</td>
                <td>{$user->fechayhora}</td>
                <td>{$user->numCelda}</td>
                <td>
                    <div class='row'>
                        <div class='col'>   
                        <a href='http://localhost/parcking/create_users/editUser?id={$user->id}' class='card-link'>Edit</a>
                        <a href='http://localhost/parcking/create_users/deleteUser?id={$user->id}' class='card-link'>Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
        ";
            echo $template;
        }
        ?>
    </tbody>
</table>