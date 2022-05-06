@extends('site.layouts.basic') <!--Extendi todo o bloco de codigo que estiver delimitado dentro de uma section, para arquivo destino(site.layout.basic)
                                O caminho é passado a partir das views-->
@section('title', 'Sobre-Nós')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Olá, eu sou o Super Gestão</h1>
        </div>

        <div class="informacao-pagina">
            <p>O Super Gestão é o sistema online de controle administrativo que pode transformar e potencializar os negócios
                da sua empresa.</p>
            <p>Desenvolvido com a mais alta tecnologia para você cuidar do que é mais importante, seus negócios!</p>
        </div>
    </div>
@endsection
