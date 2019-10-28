@extends('main')

@section('content')

    <div class="portfolio-section jumbotron">
        <div class="container group-projects">
            <div class="row justify-content-md-center">
                
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
                    <img class="image" src="{{ asset('images/AK47.png') }}"> <a class="overlay" target="_blank">
                    <div class="text">
                        <p class="title">AK47 weapon</p>
            
            
                        <div class="divider">
                        </div>
            
            
                        <p class="sub-title">Created with Blender</p>
                    </div></a>
                </div>
            
            
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
                    <img class="image" src="{{ asset('images/basement.png') }}"> <a class="overlay" target="_blank">
                    <div class="text">
                        <p class="title">Basement</p>
            
            
                        <div class="divider">
                        </div>
            
            
                        <p class="sub-title">Created with Blender</p>
                    </div></a>
                </div>
            
            
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
                    <img class="image" src="{{ asset('images/chess.png') }}"> <a class="overlay" target="_blank">
                    <div class="text">
                        <p class="title">Chess set</p>
            
            
                        <div class="divider">
                        </div>
            
            
                        <p class="sub-title">Created with Blender</p>
                    </div></a>
                </div>
            
            
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
                    <img class="image" src="{{ asset('images/Evil_rubbit.png') }}"> <a class="overlay" target="_blank">
                    <div class="text">
                        <p class="title">Evil Rabbit</p>
            
            
                        <div class="divider">
                        </div>
            
            
                        <p class="sub-title">Created with Blender</p>
                    </div></a>
                </div>
    
    
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
                    <img class="image" src="{{ asset('images/realistic_chain.png') }}"> <a class="overlay" target="_blank">
                    <div class="text">
                        <p class="title">Chain</p>
    
    
                        <div class="divider">
                        </div>
    
    
                        <p class="sub-title">Created with Blender</p>
                    </div></a>
                </div>
    
    
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
                    <img class="image" src="{{ asset('images/Volcano_eruption.png') }}"> <a class="overlay" target="_blank">
                    <div class="text">
                        <p class="title">Volcano Eruption</p>
    
    
                        <div class="divider">
                        </div>
    
    
                        <p class="sub-title">Created with Blender</p>
                    </div></a>
                </div>
    
    
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
                    <img class="image" src="{{ asset('images/Fuzzy_Stuffed_bear.jpg') }}"> <a class="overlay" target="_blank">
                    <div class="text">
                        <p class="title">Stuffed Bear</p>
    
    
                        <div class="divider">
                        </div>
    
    
                        <p class="sub-title">Created with Blender</p>
                    </div></a>
                </div>
    
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
                        <img class="image" src="{{ asset('images/Diamonds.png') }}"> <a class="overlay" target="_blank">
                        <div class="text">
                            <p class="title">Diamonds</p>
        
        
                            <div class="divider">
                            </div>
        
        
                            <p class="sub-title">Created with Blender</p>
                        </div></a>
                    </div>
            </div>

            <h3>Animations</h3>

            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
                        {{-- <img class="image" src="{{ asset('images/planet_collision.mov') }}"> <a class="overlay" href="https://unsplash.com/photos/7qjqQjt7zXQ" target="_blank"> --}}
                        <video class="image video" width="320" height="200" controls controlsList="nodownload">
                            <source src="{{ asset('images/planet_collision.mp4') }}" type="video/mp4">
                            <source src="{{ asset('images/planet_collision.webm') }}" type="video/webm">
                            Your browser does not support the video tag.
                        </video>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
