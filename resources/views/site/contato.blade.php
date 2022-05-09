@extends('site.layouts.basic')
@section('title', 'Contato')
@php
    var_dump($_POST); 
@endphp
@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.layouts._components.form_contato')
                    Sou o valor da variavel $slot dentro da view contato, só posso ser passada como string
                @endcomponent
            </div>
        </div>
    </div>
    
@endsection









{{--  ---------COMO REALIZAR UMA REQUISICAO AJAX UTILIZANDO O LARAVEL(COMO ACESSAR O DESTINO)--------
    
    <script>
        $('#formContato').submit(function(e) {
            e.preventDefault();

            var form = $(this);
            var destino = "{!! URL::to('/contato') !!}"

            $.ajax({
                type: "GET",
                url: destino,
                data: form.serialize(),
            }).done(function(data, textStatus, jqXHR) {
                alert(data);
            }).fail(function(jqXHR, textStatus, errorThrown) {
                console.log("jqXHR:" + jqXHR);
                console.log("TestStatus: " + textStatus);
                console.log("ErrorThrown: " + errorThrown);
            });
        })
    </script> --}}