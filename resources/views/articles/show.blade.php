@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    
                    <span>Article by NOME_USUARIO</span>

                    <span class="pull-right">
                        {{$article->created_at->diffForHumans()}}
                    </span>
                </div>
                <div class="card-body">
                   {{$article->content}}
                
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
