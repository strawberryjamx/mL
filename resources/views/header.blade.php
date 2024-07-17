<header class="header">
    <div class="container">
        <div class="logo">
            <a href="/">
                <img src="{{ asset('images/mL Logo.png') }}" alt="mL Logo">
            </a>
        </div>
        <nav class="navigation">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>
                    <a href="#">About <span class="icon">▶</span></a>
                    <ul class="submenu">
                        <li><a href="{{ url('/about') }}">About MoodLearning</a></li>
                        <li><a href="#">Portfolio</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Services <span class="icon">▶</span></a>
                    <ul class="submenu">
                        <li><a href="#">eLearning</a></li>
                        <li><a href="#">Courses, Webinars</a></li>
                        <li><a href="#">Why mL eLearning</a></li>
                        <li><a href="#">Serbizhub</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Resources <span class="icon">▶</span></a>
                    <ul class="submenu">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Wiki</a></li>
                    </ul>
                </li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
