<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1>Edit Registrate Cars</h1>
                    <form name="formulario" action="<?php echo base_url() . 'create_users/updateUser?id=' . $user->id ?>" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">cedula</label>
                            <input type="text" name="cedula" value="<?php echo $user->cedula ?>" class="form-control" aria-describedby="emailHelp" required="require">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">nombre</label>
                            <input type="text" name="nombre" value="<?php echo $user->nombre ?>" class="form-control" required="require">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">tipoVehiculo</label>
                            <input type="text" name="tipoVehiculo" value="<?php echo $user->tipoVehiculo ?>" class="form-control" required="require">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">cilindraje Motos</label>
                            <input type="text" name="cilMotos" value="<?php echo $user->cilMoto ?>" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">tiempo Moto</label>
                            <input type="text" name="tiempoMoto" value="<?php echo $user->tiemMoto ?>" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">placa Moto</label>
                            <input type="text" name="placaMoto" value="<?php echo $user->plaMoto ?>" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">modelo carro</label>
                            <input type="text" name="modeloCarro" value="<?php echo $user->modCarro ?>" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">numero puertas carro</label>
                            <input type="text" name="numeropuertas" value="<?php echo $user->pueCarro ?>" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">placaCarro</label>
                            <input type="text" name="placa" value="<?php echo $user->plaCarro ?>" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">fechayhora</label>
                            <input type="datetime-local" name="fechayhora" value="<?php echo $user->fechayhora ?>" class="form-control" required="require">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">numCelda</label>
                            <input type="number" name="numCelda" value="<?php echo $user->numCelda ?>" class="form-control" required="require">
                        </div>
                        <button type="submit" id="btn" name="btn" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>