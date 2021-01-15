@extends('layouts.site')
@section('content')
<div class="hero home" style="background-image: url('{{ asset('img/hero-bg.png') }}');">
    <div class="center">
        <h1>Our link building packages<br> are trusted by 100s of agencies.</h1>
        <h3>Get your free hand-picked link building strategy<br>and 30 minute consultation now.</h3>
        <form action="" class="start-now">
            <input type="text" placeholder="Enter your website address here"><button class="cta">Start Now <img src="img/arrow_right.png" alt=""></button>
        </form>
    </div>
    <ul class="rep">
        <li><img src="img/google_ratings.png" alt="Google logo"></li>
        <li><img src="img/gradient_divider.png" alt=""></li>
        <li><img src="img/logo_gilette.png" alt="Gilette logo"></li>
        <li><img src="img/logo_mrcoffee.png" alt="Mr. Coffee logo"></li>
        <li><img src="img/logo_siemens.png" alt="Siemens logo"></li>
        <li><img src="img/logo_rowenta.png" alt="Rowenta logo"></li>
    </ul>
    <img src="img/hero-clip.png" alt="" class="hero-clip">
</div>
@endsection