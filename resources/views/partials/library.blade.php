<div id="jumbo">
    <div class="wrapper">
        <span class="section-title">CURRENT SERIES</span>
    </div>
</div>
<div class="wrapper">
    <div id="card-container" class=" d-flex justify-content-center flex-wrap">
        @foreach ($comics as $comic)
        <div>
            <div class="square-card">
                <a href="comics/{{ $comic['id'] }}">
                    <img class="w-100" src="{{$comic['thumb']}}" alt="">
                </a>
            </div>
            <h5 class="mt-3">{{$comic['title']}}</h5>
        </div>  
        @endforeach
    </div>
</div>
<div class="d-flex justify-content-center mb-4">
    <button class="btn btn-primary rounded-0 fw-bold">LOAD MORE</button>
</div>

<style>
    body {
        color: white;
    }

    .square-card {
        width: 200px;
        height: 200px;
        overflow: hidden;
        cursor: pointer;
    }
    
    h5 {
        width: 200px;
    }
    
    .section-title {
        background-color: #0282F9;
        padding: 12px 30px;
        font-weight: 700;
        font-size: 1.8rem;
        position: relative;
        top: 318px;
    }
    
    .btn {
        padding: 10px 70px;
    }
    
    #jumbo {
        height: 400px;
        background-image: url(/images/jumbotron.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }
    
    .wrapper {
        padding-top: 60px;
        padding-bottom: 60px;
    }
    
    #card-container {
        gap: 30px;
    }
</style>