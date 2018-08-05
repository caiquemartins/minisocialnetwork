@extends('layouts.app')
<style>
    .row{
        margin-bottom: 10px !important;
    }
</style>
@section('content')

<div class="container">
    @forelse($articles as $article)
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card"> 
                    <div class="card-header">Nome do Usuário <span class="float-right">{{$article->created_at->diffForHumans()}}</span></div>

                    <div class="card-body">
                        <p>{{$article->content}}</p>
                        
                    </div>
                    <div class="card-footer text-muted bg-transparent" >
                        <i class="fa fa-heart pull-right"></i>
                    </div>
                </div>
            </div>
        </div>
    @empty
        No Articles.

    @endforelse
    
    <div class="row justify-content-center">
        {{$articles->links()}}
    </div>
</div>
@endsection
