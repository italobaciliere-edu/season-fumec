@extends('layout')

<!-- Title da página -->
@section('title')
Home
@endsection()
<!-- Title da página -->

<!--  -->
@section('cabecalho')
<p>Linguagens</p>
@endsection()
<!--  -->

<!-- Menu de navegação lateral esquerdo -->
@section('navegação lateral')
<li><a href="#">Section 1</a>
<li><a href="#">Section 2</a>
<li><a href="#">Section 3</a>
    @endsection()
    <!-- Menu de navegação lateral esquerdo -->

    <!-- main -->
    @section('conteudo')
    <a href="/linguagens/criar">Adicionar</a>
    @endsection()
    <!-- main -->