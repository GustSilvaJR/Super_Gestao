{{-- Só apresenta o valor se tiver sido passado pela view principal, que é a unica que cria a variavel msg --}}
<?php if(isset($msg)):?>
    <p>Valor da variavel msg: {{$msg}}</p>
<?php else:?>
    <p>{{"Esse é o valor do slot (variavel do componente): ".$slot}}</p>
<?php endif?>


    



<form id='formContato' action={{ route('site.contato') }} method='POST'>
    <!--
        csrf -> Token que garante a validação da requisição que estamos mandando para o servidor. Dessa forma impedindo que
        um cross site tente enviar  uma requisicao com base na sessao que ja iniciamos, ja que nao conseguem replicar
        os dados inseridos no formulario.
    -->
    @csrf
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
