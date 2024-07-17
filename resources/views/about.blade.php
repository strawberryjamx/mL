<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About moodLearning</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/scss/about.scss','resources/scss/home.scss'])
</head>
<body>
    @include('header')
    <section class="timeline">
        <div class="container">
            <div class="timeline-item">
                <div class="timeline-date">2011</div>
                <div class="timeline-content">
                    <img src="{{ asset('images/2011.jpg') }}" alt="2011">
                    <h3>E-Learning Incorporated</h3>
                    <p>A group of e-learning specialists, educators, edtech practitioners, and customer service professionals connected to fill the need for e-learning services in the Philippines. The company, <b>moodLearning</b>, was incorporated. So coined, "moodLearning" (i.e., "in the mood for learning") is a recognition of the affective aspects of learning.</p>
                    <img src="{{ asset('images/2011-logo.jpg') }}" alt="Icon" class="timeline-icon">
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2012</div>
                <div class="timeline-content">
                    <img src="{{ asset('images/2012.jpg') }}" alt="First Product Launched">
                    <h3>Joined UP Enterprise Center for Technopreneurship</h3>
                    <p><b>moodLearning, Inc.</b> became one of the start-up companies guided by the UP Enterprise Center for Technopreneurship, with office at the National Engineering Center, University of the Philippines, Diliman, Quezon City.</p>
                    <img src="{{ asset('images/2012-logo.png') }}" alt="Icon" class="timeline-icon">
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2013</div>
                <div class="timeline-content">
                    <img src="{{ asset('images/2013.jpg') }}" alt="Global Expansion">
                    <h3>Ventured B2B Solutions</h3>
                    <p>with integrated SMS, email, web services. Eventually services expanded to include accounting, human resources, payroll systems.</p>
                    <img src="{{ asset('images/13-14-15-logo.png') }}" alt="Icon" class="timeline-icon">
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2014</div>
                <div class="timeline-content">
                    <img src="{{ asset('images/2014.jpg') }}" alt="New Innovations">
                    <h3>SerbizHub Business Solutions</h3>
                    <p>Offered a range of business solutions under the SerbizHub brand: SerbizHub Suite, SerbizHub HelpDesk, SerbizHub Links, SerbizHub Banking, SerbizHub peopleSuite. Access to demo sites is available upon request.</p>
                    <img src="{{ asset('images/13-14-15-logo.png') }}" alt="Icon" class="timeline-icon">
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2015</div>
                <div class="timeline-content">
                    <img src="{{ asset('images/2015.png') }}" alt="New Innovations">
                    <h3>Service Integration</h3>
                    <p><b>moodLearning</b> and SerbizHub services utilize an integration framework for business process management and workflow automation, thus making <b>moodLearning</b> a provider of truly end-to-end e-learning and business solutions in the Philippines.</p>
                    <img src="{{ asset('images/13-14-15-logo.png') }}" alt="Icon" class="timeline-icon">
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2020</div>
                <div class="timeline-content">
                    <img src="{{ asset('images/2020.png') }}" alt="New Innovations">
                    <h3>Remote Learning</h3>
                    <p>ERemote learning during the COVID-19 pandemic made urgent the need for <a href="https://blog.moodlearning.com/using-audiobooks-in-teaching-philippine-literature/about">audiobooks for teaching</a>. Our sister company, <b>moodLearning USA</b>, was established to cater to such need. Visit its store at <a href="https://literature.ph/">literature.ph</a>.</p>
                    <img src="{{ asset('images/2020-logo.png') }}" alt="Icon" class="timeline-icon">
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">Be part of our story</div>
                <div class="timeline-content">
                    <img src="{{ asset('images/bps.png') }}" alt="New Innovations">
                    <h3>The Future</h3>
                    <p>One of the premier e-learning and tech companies in the Philippines, <b>moodLearning</b> now has a <a href="{{ url('/portfolio') }}">diversified portfolio of services</a> with long-term contracts with diverse partners (from education to banking to pharmaceutical industry to government). Let us tell our story with you.</p>
                    <img src="{{ asset('images/bps-logo.png') }}" alt="Icon" class="timeline-icon">
                </div>
            </div>
        </div>
    </section>
    @include('footer')
</body>
</html>
