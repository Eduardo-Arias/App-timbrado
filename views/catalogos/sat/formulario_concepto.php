<div class="container">
    <h3>Registro Concepto</h3>
    <hr>
    <form id="form_conceptos">
        <div class="form-group">
            <label for="cve_sat">Clave Concepto</label>
            <input type="text" class="form-control" name="cve_sat" aria-describedby="emailHelp" placeholder="Ingresa la clave">
        </div>
        <div class="form-group">
            <label for="desc_sat">Descripción</label>
            <input type="text" class="form-control" name="desc_sat" placeholder="Ingresa la descripcion">
        </div>
        <div class="form-group">
            <label for="fecha_ini">Fecha inicio vigencia</label>
            <input type="date" class="form-control" name="fecha_ini" placeholder="Ingresa la descripcion">
        </div>
        <div class="form-group">
            <label for="fecha_fin">Fecha final vigencia</label>
            <input type="date" class="form-control" name="fecha_fin" placeholder="Ingresa la descripcion">
        </div>
        <div class="form-group">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="rb_activo" name="estatus" class="custom-control-input" value="A" checked>
                <label class="custom-control-label" for="rb_activo">Activo</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="rb_inactivo" name="estatus" class="custom-control-input" value="I">
                <label class="custom-control-label" for="rb_inactivo">Inactivo</label>
            </div>
        </div>
    </form>
    
    <button type="submit" class="btn btn-success" onclick="registrarConcepto()">Guardar</button>
        <a href="?r=main&a=sat&sa=Conceptos" class="btn btn-danger" role="button">Cancelar</a>
</div>

<script src="views\resources\js\conceptos.js"></script>