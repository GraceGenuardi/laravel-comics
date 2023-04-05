@extends('layouts.app')

@section('content')

<div>
    <div class="container">
        
    </div>
    <div class="container">
        <div class="row">
            <!-- {{-- @dump($comics) --}} -->
            @foreach ($comic as $comic)
            
                <div class="col-4">
                    <!-- <img src="{{ $comic['thumb'] }}" alt="">{{ $comic['thumb'] }} -->
                    <h3>{{ $comic['title'] }}</h3>
                    <p>{{ $comic['description'] }}</p>
                    <span>{{ $comic['price'] }}</span>

                </div>
                
            @endforeach
        </div>
    </div>
</div>

@endsection

@section('page-title',$page_title)
