<div class="container-center" weight="100px" height="100px">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <form name="formulario" action="<?php echo base_url() . 'create_users/insertUser ' ?>" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">cedula</label>
                            <input type="number" name="cedula" class="form-control" aria-describedby="emailHelp" required="require">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">nombre</label>
                            <input type="text" name="nombre" class="form-control" required="require">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">tipoVehiculo</label>
                            <input type="text" name="tipoVehiculo" class="form-control" required="require">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">cilindraje Moto</label>
                            <input type="text" name="cilMoto" class="form-control" required="require">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">tiempos Moto</label>
                            <input type="text" name="tiemMoto" class="form-control" required="require">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">placa Moto</label>
                            <input type="text" name="plaMoto" class="form-control" required="require">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">modelo</label>
                            <input type="text" name="modCarro" class="form-control" required="require">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">numero puertas</label>
                            <input type="text" name="pueCarro" class="form-control" required="require">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">placa Carro</label>
                            <input type="text" name="plaCarro" class="form-control" required="require">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">fechayhora</label>
                            <input type="datetime-local" name="fechayhora" class="form-control" required="require">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">numCelda</label>
                            <input type="number" name="numCelda" class="form-control" required="require">
                        </div>
                        <button type="submit" id="btn" name="btn" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>