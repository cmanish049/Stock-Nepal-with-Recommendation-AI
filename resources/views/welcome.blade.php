@extends('layouts.app')

@section('content')
<style>
*{
    background-color: #FCFCFC;
}
</style>

    <div class="wrapper">
        <img class="img-class" src="https://images.pexels.com/photos/2085998/pexels-photo-2085998.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">  
            <div class="main-container container">
                <div class="row justify-content-center mb-2">
                        <h3 class="col-sm-8 text-left text-light">The Best Stock Photos</h3>
                        <h3 class="col-sm-8 text-left text-light">Shared by talented creators</h3>
                    </div>
                    <div class="row justify-content-center">
                        <input class="col-8 pt-4 pb-4 form-control" type="text" placeholder="Search" aria-label="Search">
                    </div>
            </div>   
    </div>
@Auth
    <div class="container">
        @foreach($posts as $post)
        <div class=" mt-5">
            <div class="row justify-content-center">
                <div class="card shadow justify-content-center" style="width: 35rem;">
                    <img class="img-fluid" src="/storage/{{$post->image}}">
                        <div class="card-body justify-content-center">
                           <span class="text-center text-muted">{{ $post->caption }} </span> 
                            <span>by</span>
                            <span class="font-weight-bold">  
                                <a href="/profile/{{ $post->user->id }}">
                                    <span class="text-dark text-uppercase text-none text-decoration-none ml-3"> {{ $post->user->fname }} {{ $post->user->lname }}</span>
                                </a>
                            </span>
                        </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endauth

@endsection
