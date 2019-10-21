@extends('layouts.app')
@component('components.navbar')@endcomponent

<div class="container" style="margin-top:200px">
    <h1 class="mb-5" align="center"><strong>Nova Notícia</strong></h1>
    <form class="container" action="/Noticias" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="title">Título: </label>
        <br>
        <input type="text" class="form-control" name="titulo">
        <br><br>
        <label for="conteudo">Conteúdo: </label>
        <br>
        <textarea class="form-control" name="conteudo" id="conteudo" cols="100" rows="20"></textarea>
        <br>
        <label for="img">Imagem (se necessário): </label>
        <br>
        <input type="file" class="form-control-file" name="imagem">
        <br><br>
        <button class="btn btn-outline-primary" type="submit">ENVIAR</button>
        <a class="btn btn-outline-danger ml-3" href="/">CANCELAR</a>
    </form>
</div>