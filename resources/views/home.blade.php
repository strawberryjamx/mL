<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>moodLearning</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/scss/home.scss'])
</head>
<body>
    @include('header')
    <section class="section1">
        <div class="content1">
            <h1 class="headline1">
                <span class="highlight1">E-LEARNING</span>
            </h1>
            <h3 class="small-text">
                <span class="and">and</span>
            </h3>
            
            <h1 class="headline2">
                <span class="highlight2">BUSINESS</span>
            </h1>
        </div>
    </section>

    <section class="content2">
        <div class="content2">
            <h1></h1>
        </div>
    </section>
    @include('footer')
</body>
</html>
