<h1>Fornecedores</h1>
<hr>

@foreach($fornecedores as $indice => $fornecedor)
    <h2>Fornecedor: {{$fornecedor['nome']}}</h2>
    <h2>Status: {{$fornecedor['status']}}</h2>

    @if($fornecedor['status'] == 'N')
        <h3>Esse fornecedor está inativo</h3>
    @else
        <h3>Fornecedor ativo</h3>
    @endif

    @isset($fornecedor['cnpj'])
        <h3>Pessoa Jurídica</h3>
    @else
        <h3>Pessoa Física</h3>
    @endisset
    <hr>
@endforeach