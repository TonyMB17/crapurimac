<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="Usercreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo USUARIO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('users.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre de usuario:</label>
                        <input name="name" type="text" class="form-control" id="recipient-name"
                            value="{{ old('name') }}">
                        @error('name')
                            <br>
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email:</label>
                        <input name="email" type="text" class="form-control" id="recipient-name"
                            value="{{ old('email') }}">
                        @error('email')
                            <br>
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Contraseña:</label>
                        <input name="password" type="password" class="form-control" id="recipient-name"
                            value="{{ old('password') }}">
                        @error('password')
                            <br>
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Confirmar contraseña:</label>
                        <input name="password_confirmation" type="password" class="form-control" id="recipient-name"
                            value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" id="btn-addNotice" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
