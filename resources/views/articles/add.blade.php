@extends('layouts.default')
@section('content')
<div class="card" style="margin-left: 10px;margin-right: 10px;margin-top: 40px;">
    <div class="card-header">
        <h2 style="color: #111111">Dodawanie Artykułu</h2>
    </div>
    <div class="card-body">
        <form>
            @csrf
            <div class="form-group">
                <label for="titleArticle">Tytuł Artykułu</label>
                <input type="text" name="title" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="imagesArticles">Obrazy Artykułu</label>

            </div>
        </form>
    </div>
</div>
@stop
