@extends('site.layouts.basic')

@section('title', 'Contato')
@php
echo var_dump($_GET);
@endphp
@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                <form id='formContato'>
                    <input name="nome" type="text" placeholder="Nome" class="borda-preta">
                    <br>
                    <input name="telefone" type="text" placeholder="Telefone" class="borda-preta">
                    <br>
                    <input name="email" type="email" placeholder="E-mail" class="borda-preta">
                    <br>
                    <select name="motivo" class="borda-preta">
                        <option value="">Qual o motivo do contato?</option>
                        <option value="1">Dúvida</option>
                        <option value="2">Elogio</option>
                        <option value="3">Reclamação</option>
                    </select>
                    <br>
                    <textarea name="mensagem" class="borda-preta" placeholder="Preencha aqui a sua mensagem"></textarea>
                    <br>
                    <button type="submit" class="borda-preta">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>
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
    </script>
@endsection
