<h2 class="text-center">TU OPINION ES IMPORTANTE PARA NOSOTROS...</h2>
<BR><br>
<p class="text-center">Te invitamos a dejar tu solicitud de Peticion, Queja o Reclamo dando click en el boton de abajo</p>
<br><br>
<center>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Registre su peticion aqui</button>
</center>
<br><br><br><br>
<h3 class="text-center">Gracias por Preferirnos!!!</h3>
<br><br><br><br><br><br><br><br><br><br>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nueva solicitud</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Tipo de Solicitud:</label>
                            <select name="--solicitud--">
                                <option value="1">Peticion</option>
                                <option value="2">Queja</option>
                                <option value="3">Reclamo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Escriba aqui su Mensaje:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Enviar Solicitud</button>
                </div>
            </div>
        </div>
    </div>
