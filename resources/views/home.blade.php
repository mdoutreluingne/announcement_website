@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        @foreach ($annonces as $annonce)
            <div class="col-3">
                <article class="card">
                    <header class="card-header">
                        <h1>{{ $annonce->title }}</h1>
                    </header>
                    <div class="card-body">
                        <div>
                            {{ $annonce->content }}
                        </div>
                    </div>
                    <footer class="card-footer">
                        {{ $annonce->created_at->format('d/m/Y à H:i:s') }}
                    </footer>
                </article>
            </div>
        @endforeach
    </div>
</div>
@endsection
