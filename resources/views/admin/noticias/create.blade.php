<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="Noticiacreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Noticia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('noticias.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Titulo:</label>
                        <input name="titulo" type="text" class="form-control" id="recipient-name" value="{{old('titulo')}}">
                        @error('titulo')
                        <br>
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Descripción:</label>
                        <textarea name="descripcion" class="form-control" id="message-text">{{old('descripcion')}}</textarea>
                        @error('descripcion')
                        <br>
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Imagen:</label>
                        <input name="featured" type="file" class="form-control-file" id="exampleFormControlFile1" accept="image/*">
                        @error('featured')
                        <br>
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btn-addNotice" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
</div>