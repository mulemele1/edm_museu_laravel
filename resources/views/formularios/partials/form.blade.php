@csrf
<div class="row mb-3">
    @include('formularios.partials.validations') 
    <div class="col-md-6">
        <label for="nome_objeto" class="form-label">Nome do Objeto</label>
        <input type="text" value="{{ $formulario->nome_objeto ?? old('nome_objeto') }}" class="form-control" id="nome_objeto" name="nome_objeto" placeholder="Digite o nome do objeto" required>
    </div>
    <div class="col-md-6">
        <label for="quantidade" class="form-label">Quantidade</label>
        <input type="number" value="{{ $formulario->quantidade ?? old('quantidade') }}" class="form-control" id="quantidade" name="quantidade" placeholder="Digite a quantidade" required>
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-6">
        <label for="ano_fabrico" class="form-label">Ano de Fabrico</label>
        <input type="number" value="{{ $formulario->ano_fabrico ?? old('ano_fabrico') }}" class="form-control" id="ano_fabrico" name="ano_fabrico" placeholder="Digite o ano de fabrico" required>
    </div>
    <div class="col-md-6">
        <label for="funcionalidade" class="form-label">Funcionalidade</label>
        <input type="text" value="{{ $formulario->funcionalidade ?? old('funcionalidade') }}" class="form-control" id="funcionalidade" name="funcionalidade" placeholder="Digite a funcionalidade" required>
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-6">
        <label for="caracteristicas" class="form-label">Características</label>
        <textarea class="form-control" value="{{ $formulario->caracteristicas ?? old('caracteristicas') }}" id="caracteristicas" name="caracteristicas" placeholder="Digite as características" required></textarea>
    </div>
    <div class="col-md-6">
        <label for="fabricante" class="form-label">Fabricante</label>
        <input type="text" value="{{ $formulario->fabricante ?? old('fabricante') }}" class="form-control" id="fabricante" name="fabricante" placeholder="Digite o fabricante" required>
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-6">
        <label for="constituicao" class="form-label">Constituição</label>
        <input type="text" value="{{ $formulario->constituicao ?? old('constituicao') }}" class="form-control" id="constituicao" name="constituicao" placeholder="Digite a constituição" required>
    </div>
    <div class="col-md-6">
        <label for="localizacao" class="form-label">Localização</label>
        <input type="text" value="{{ $formulario->localizacao ?? old('localizacao') }}" class="form-control" id="localizacao" name="localizacao" placeholder="Digite a localização" required>
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-6">
        <label for="estado" class="form-label">Estado</label>
        <input type="text" value="{{ $formulario->estado ?? old('estado') }}" class="form-control" id="estado" name="estado" placeholder="Digite o estado" required>
    </div>
    <div class="col-md-6">
        <label for="data" class="form-label">Data</label>
        <input type="date" value="{{ $formulario->data ?? old('data') }}" class="form-control" id="data" name="data" placeholder="Digite a data" required>
    </div>
</div>
<div class="mb-3">
    <label for="inventariador" class="form-label">Inventariador</label>
    <input type="text" value="{{ $formulario->inventariador ?? old('inventariador') }}" class="form-control" id="inventariador" name="inventariador" placeholder="Digite o inventariador" required>
</div>
<div class="mb-3">
    <label for="foto" class="form-label">Foto</label>
    <input type="file" value="{{ $formulario->foto ?? old('foto') }}" class="form-control" id="foto" name="foto" accept="image/*" placeholder="Upload da imagem" >
</div>
<!--<button type="submit" class="btn btn-secondary" onclick="salvar()">Salvar</button>-->
<div class="card-footer">
    <button type="submit" class="btn btn-secondary" onclick="salvar()">Salvar</button>
    <a href="{{ route('formularios.list') }}" class="btn btn-default">Cancelar</a>
</div>


<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>
<script>
    function salvar() {
        // Aqui você pode adicionar a lógica para salvar os dados no servidor
        // Por exemplo, usando AJAX ou um formulário HTML normal
        // Coleta o valor do campo 'nome_objeto'
        const name = document.getElementById('nome_objeto').value;
        // Coleta o valor do campo 'quantidade'
        const quantity = document.getElementById('quantidade').value;
        // Coleta o valor do campo 'ano_fabrico'
        const year = document.getElementById('ano_fabrico').value;
        // Coleta o valor do campo 'funcionalidade'
        const functionality = document.getElementById('funcionalidade').value;
        // Coleta o valor do campo 'caracteristicas'
        const caracteristicas = document.getElementById('caracteristicas').value;
        // Coleta o valor do campo 'fabricante'
        const fabricante = document.getElementById('fabricante').value;
        // Coleta o valor do campo 'constituicao'
        const constituicao = document.getElementById('constituicao').value;
        // Coleta o valor do campo 'localizacao'
        const localizacao = document.getElementById('localizacao').value;
        // Coleta o valor do campo 'estado'
        const estado = document.getElementById('estado').value;
        // Coleta o valor do campo 'data'
        const data = document.getElementById('data').value;
        // Coleta o valor do campo 'inventariador'
        const inventariador = document.getElementById('inventariador').value;
        // Coleta o valor do campo 'foto'
        const foto = document.getElementById('foto').files[0];
        // Cria um objeto com os dados coletados

        
        // Simulando um envio bem-sucedido
        Swal.fire({
            title: "Salvo",
            text: "Bom trabalho!",
            icon: "success"
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirecionar para a página de listagem
                window.location.href = 'formularios.list'; // Altere para a URL da sua página de listagem
            }
        });
    }
</script>