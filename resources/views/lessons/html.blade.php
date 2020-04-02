@extends('layout')

<!-- Titlo da página na aba do navegador -->
@section('title')
HTML
@endsection

<!-- Seção a ser utilzada com o blade -->
@section('cabecalho')
<p>Linguagens</p>
@endsection()


<!-- Conteúdo main da página -->
@section('conteudo')
<h2>FORMULÁRIO HTML</h2>

<form action="" method="post">
    <!-- Name -->
    <label for="input_name">Nome </label>
    <input type="text" name="name" id="input_name">
    </br>
    <!-- Complete name -->
    <label for="input_complete_name">Nome Completo</label>
    <input type="text" name="complete_name" id="input_complete_name">
    </br>
    <!-- CPF -->
    <label for="input_cpf">CPF </label>
    <input type="text" name="cpf" id="input_cpf">
    <small id="emailHelp" class="form-text text-muted">We'll never share your response with anyone else.</small>
    </br>
    <!-- -->
    <!-- -->
    <!-- -->
    <!-- -->
    <!-- -->
    </br>
    <input type="submit">
</form>
@endsection



<!-- Scripts JS para esse blade.php -->
@section('scripts')
<script>
    console.log("So para saber mesmo");
    $(document).ready(function() {
        $('#input_cpf').inputmask("99-9999999"); //static mask
        /*$(selector).inputmask({
            "mask": "(999) 999-9999"
        }); //specifying options
        $(selector).inputmask("9-a{1,3}9{1,3}"); //mask with dynamic syntax*/
    });
</script>
@endsection