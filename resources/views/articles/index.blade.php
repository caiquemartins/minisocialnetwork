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
                        <p>{{ $article->shortContent }}</p>

                        <a href="/articles/{{$article->id}}">Read More'</a>
                        
                    </div>
                    <div class="card-footer text-muted bg-transparent" >
                        @if($article->user_id == Auth::id())

                            <form method="POST" action="/articles/{{$article->id}}" class="pull-right">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button class="btn btn-danger">Delete</button>
                            </form>

                        @endif


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
