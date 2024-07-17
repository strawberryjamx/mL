<!-- resources/views/home.blade.php -->
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
            <h1 class="headline1">Welcome to <span class="highlight1">moodLearning</span></h1>
            <h2 class="headline2">Your Learning Partner</h2>
            <p class="small-text">Discover our services and solutions.</p>
        </div>
    </section>
    @include('footer')
</body>
</html>
