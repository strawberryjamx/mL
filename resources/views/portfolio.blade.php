<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>moodLearning</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/portfolio.js', 'resources/scss/portfolio.scss', 'resources/scss/header.scss', 'resources/scss/footer.scss'])
</head>
<body>
    @include('header')
    <div class="slider">
        <img id="img-1" src="{{ asset('images/portfolio/portfolio1.png') }}" alt="Image 1">
        <img id="img-2" src="{{ asset('images/portfolio/portfolio2.png') }}" alt="Image 2">
        <img id="img-3" src="{{ asset('images/portfolio/portfolio3.png') }}" alt="Image 3">
    </div>
    <div class="navigation-button">
        <span class="dot active" onclick="changeSlide(0)"></span>
        <span class="dot" onclick="changeSlide(1)"></span>
        <span class="dot" onclick="changeSlide(2)"></span>
    </div>
    @include('footer')
</body>
</html>
