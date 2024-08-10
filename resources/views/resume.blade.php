<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Jay Chauhan | Portfolio</title>
    <link rel="canonical" href="https://dj-jay.in">
    <meta content="Deadline-driven Full Stack Developer with 3+ years' expertise in PHP, Laravel, React, Vue, Java. Translates concepts into polished web apps, excels in end-to-end development" name="description">
    <meta content="Jay Chauhan" name="keywords">
    <meta name="google-site-verification" content="7l9rvaUEK74Sk3NfrTUgx0ZbIeHoq49BKK_1JwGGjgY" />
    <meta name="facebook-domain-verification" content="aed0xbgyhjiuqaib69aahkajeganqa" />

    <!-- Favicons -->
    <link href="/favicon.png" rel="icon">
    <link href="/favicon.png" rel="apple-touch-icon">

    <!-- custom css link -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>

    </style>
</head>

<body>
    <main>
        <aside class="sidebar" data-sidebar>

            <div class="sidebar-info">

                <figure class="avatar-box">
                    <img src="{{ $images['profileImage'] }}" alt="Jay Chauhan" style="margin: 10px 10px 0px 10px">
                </figure>

                <div class="info-content">
                    <h1 class="name" title="Jay Chauhan">Jay Chauhan</h1>

                    <p class="title">Software Developer</p>
                </div>

                <button class="info_more-btn" data-sidebar-btn>
                    <span>Show Contacts</span>

                    <ion-icon name="chevron-down"></ion-icon>
                </button>

            </div>

            <div class="sidebar-info_more">

                <div class="separator"></div>

                <ul class="contacts-list">

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Email</p>

                            <a href="https://mail.google.com/mail/u/0/?fs=1&to={{ $personalDetails['email'] }}&tf=cm" target="_blank" rel="noopener noreferrer" class="contact-link">{{ $personalDetails['email'] }}</a>
                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="phone-portrait-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Phone</p>
                            <a href="tel:+91{{ $personalDetails['phone1'] }}" class="contact-link">+91
                                {{ substr_replace($personalDetails['phone1'], ' ', 5, 0) }}</a>
                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Birthday</p>

                            <time datetime="{{ date('M d, Y', strtotime($personalDetails['dob'])) }}">{{ date('M d, Y', strtotime($personalDetails['dob'])) }}</time>
                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Location</p>

                            <address><a href="{{ $personalDetails['locationLink'] }}" target="_blank" rel="noopener noreferrer" class="contact-link">
                                    {{ $personalDetails['address-city'] }},<br>
                                    {{ $personalDetails['address-state'] }},<br>
                                    {{ $personalDetails['address-country'] }} -
                                    {{ $personalDetails['address-pin'] }}</a></address>
                        </div>

                    </li>

                </ul>

                <div class="separator"></div>

                <ul class="social-list">

                    @foreach ($links as $link)
                    <li class="social-item">
                        <a href="{{ $link['linkAddress'] }}" target="{{ $link['linkTarget'] == '1' ? '_blank' : '' }}" @if ($link['linkDownload']=='1' ) download @endif rel="noreferrer noopener" class="social-link">
                            <ion-icon name="{{ $link['linkIcon'] }}"></ion-icon>
                        </a>
                    </li>
                    @endforeach

                </ul>

            </div>

        </aside>

        <div class="main-content">

            <nav class="navbar">

                <ul class="navbar-list">

                    <li class="navbar-item">
                        <button class="navbar-link  active" data-nav-link>About</button>
                    </li>

                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link>Resume</button>
                    </li>

                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link>Contact</button>
                    </li>

                </ul>

            </nav>

            <article class="about  active" data-page="about">

                <header>
                    <h2 class="h2 article-title">About me</h2>
                </header>

                <section class="about-text">
                    <p style="text-align: justify">
                        {{ isset($personalDetails['headline1']) ? $personalDetails['headline1'] : '' }}
                    </p>

                    <p style="text-align: justify">
                        {{ $personalDetails['about1'] }}
                    </p>
                </section>

                <section class="service">

                    <h3 class="h3 service-title">What i'm doing</h3>

                    <ul class="service-list">

                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="/assets/images/icon-design.svg" alt="Web development icon" width="40">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">Web Development</h4>

                                <p class="service-item-text">
                                    The most modern and high-quality design and developed at a professional level.
                                </p>
                            </div>

                        </li>

                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="/assets/images/icon-dev.svg" alt="Software development icon" width="40">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">Software development</h4>

                                <p class="service-item-text">
                                    High-quality development of softwares at the professional level.
                                </p>
                            </div>

                        </li>

                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="/assets/images/icon-app.svg" alt="mobile app icon" width="40">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">Mobile apps</h4>

                                <p class="service-item-text">
                                    Professional development of applications for iOS and Android.
                                </p>
                            </div>

                        </li>

                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="/assets/images/icon-photo.svg" alt="camera icon" width="40">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">Music Production</h4>

                                <p class="service-item-text">
                                    I make high-quality audio tracks of any category at a professional level.
                                </p>
                            </div>

                        </li>

                    </ul>

                </section>

                <section class="testimonials">

                    <h3 class="h3 testimonials-title">Testimonials</h3>

                    <ul class="testimonials-list has-scrollbar">
                        @foreach ($testimonials as $testimonial)
                        <li class="testimonials-item">
                            <div class="content-card" data-testimonials-item="">

                                <p style="display: none" data-testimonials-time>
                                    {{ date('M d, Y h:i a', strtotime($testimonial->testimonialDate)) }}
                                </p>
                                <figure class="testimonials-avatar-box">
                                    <img src="{{ $testimonial->testimonialImage }}" alt="{{ $testimonial->testimonialName }}" width="60" data-testimonials-avatar>
                                </figure>

                                <h4 class="h4 testimonials-item-title" data-testimonials-title>
                                    {{ $testimonial->testimonialName }}
                                </h4>

                                <div class="testimonials-text" data-testimonials-text>
                                    <p style="text-align: justify">{{ $testimonial->testimonialDescription }}</p>
                                </div>

                            </div>
                        </li>
                        @endforeach
                    </ul>

                </section>

                <div class="modal-container" data-modal-container>

                    <div class="overlay" data-overlay></div>

                    <section class="testimonials-modal">

                        <button class="modal-close-btn" data-modal-close-btn>
                            <ion-icon name="close-outline"></ion-icon>
                        </button>

                        <div class="modal-img-wrapper">
                            <figure class="modal-avatar-box">
                                <img src="/assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
                            </figure>

                            <img src="/assets/images/icon-quote.svg" alt="quote icon">
                        </div>

                        <div class="modal-content">

                            <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

                            <time date-modal-time>14 June, 2021</time>

                            <div data-modal-text>
                                <p>
                                    Richard was hired to create a corporate identity. We were very pleased with the work
                                    done. She has a
                                    lot of experience
                                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet,
                                    ullamcous cididt
                                    consectetur adipiscing
                                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                                </p>
                            </div>

                        </div>

                    </section>

                </div>

                <section class="clients">

                    <h3 class="h3 clients-title">Clients</h3>

                    <ul class="clients-list has-scrollbar">

                        <li class="clients-item">
                            <a href="#">
                                <img src="/assets/images/logo-1-color.png" alt="client logo">
                            </a>
                        </li>

                        <li class="clients-item">
                            <a href="#">
                                <img src="/assets/images/logo-2-color.png" alt="client logo">
                            </a>
                        </li>

                        <li class="clients-item">
                            <a href="#">
                                <img src="/assets/images/logo-3-color.png" alt="client logo">
                            </a>
                        </li>

                        <li class="clients-item">
                            <a href="#">
                                <img src="/assets/images/logo-4-color.png" alt="client logo">
                            </a>
                        </li>

                        <li class="clients-item">
                            <a href="#">
                                <img src="/assets/images/logo-5-color.png" alt="client logo">
                            </a>
                        </li>

                        <li class="clients-item">
                            <a href="#">
                                <img src="/assets/images/logo-6-color.png" alt="client logo">
                            </a>
                        </li>

                    </ul>

                </section>

            </article>

            <article class="resume" data-page="resume">

                <header>
                    <h2 class="h2 article-title">Resume</h2>
                </header>

                <section class="timeline">

                    <div class="title-wrapper">
                        <div class="icon-box">
                            <ion-icon name="book-outline"></ion-icon>
                        </div>

                        <h3 class="h3">Education</h3>
                    </div>

                    <ol class="timeline-list">

                        @foreach ($education as $edu)
                        <li class="timeline-item">
                            <h4 class="h4 timeline-item-title">{{ $edu['eduInstitute'] }}</h4>
                            <span>{{ $edu['eduTitle'] }}</span>
                            <span>{{ date('Y', strtotime($edu['eduStartDate'])) }} -
                                {{ date('Y', strtotime($edu['eduEndDate'])) }}</span>
                            <p class="timeline-text" style="text-align: justify">
                                {{ $edu['eduDesc'] }}
                            </p>
                        </li>
                        @endforeach
                    </ol>

                </section>

                <section class="timeline">

                    <div class="title-wrapper">
                        <div class="icon-box">
                            <ion-icon name="book-outline"></ion-icon>
                        </div>

                        <h3 class="h3">Experience</h3>
                    </div>

                    <ol class="timeline-list">

                        @foreach ($experience as $exp)
                        <li class="timeline-item">
                            <h4 class="h4 timeline-item-title">{{ $exp['expTitle'] }}</h4>
                            <span>{{ date('Y', strtotime($exp['expStartDate'])) }} -
                                {{ $exp['flag'] == '1' ? 'Present' : date('Y', strtotime($exp['expEndDate'])) }}</span>
                            <span>{{ $exp['expCompany'] }}, {{ $exp['expCity'] }},
                                {{ $exp['expCountry'] }}</span>
                            <p class="timeline-text">
                            <ul>
                                @foreach (explode('::', $exp['expDesc']) as $desc)
                                <li class="timeline-text">{{ $desc }}</li>
                                @endforeach
                            </ul>
                            </p>
                        </li>
                        @endforeach
                    </ol>

                </section>

                <section class="skill">

                    <h3 class="h3 skills-title">My skills</h3>

                    <ul class="skills-list content-card">

                        @foreach ($skills as $skill)
                        <li class="skills-item">
                            <div class="title-wrapper">
                                <h5 class="h5">{{ $skill['skillTitle'] }}</h5>
                                <data value="80">{{ $skill['skillPercentage'] }}%</data>
                            </div>
                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: {{ $skill['skillPercentage'] }}%;"></div>
                            </div>
                        </li>
                        @endforeach
                    </ul>

                </section>

            </article>

            <article class="contact" data-page="contact">

                <header>
                    <h2 class="h2 article-title">Contact</h2>
                </header>

                <section class="mapbox" data-mapbox>
                    <figure>
                        <iframe src="{{ $personalDetails['mapLink'] }}" width="400" height="300" loading="lazy"></iframe>
                    </figure>
                </section>

                <section class="contact-form">
                    <h3 class="h3 form-title">Contact Form</h3>
                    <form class="form" id="contactForm" data-form method="post">
                        @csrf
                        @method('POST')
                        <div class="input-wrapper">
                            <input type="text" name="firstname" class="form-input" placeholder="First name" required data-form-input>

                            <input type="text" name="lastname" class="form-input" placeholder="Last name" required data-form-input maxlength="10">

                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="phoneNumber" class="form-input contactNumber" placeholder="Phone Number" required data-form-input maxlength="10">
                            <input type="text" name="whatsappNumber" class="form-input contactNumber" placeholder="Whatsapp Number" required data-form-input minlength="10" maxlength="10">
                        </div>
                        <div class="input-wrapper">
                            <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
                            <input type="text" name="subject" class="form-input" placeholder="Subject" required data-form-input>
                        </div>

                        <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

                        <button class="form-btn" type="submit" disabled data-form-btn>
                            <ion-icon id="submitBtn" name="paper-plane"></ion-icon>
                            <span id="submitText">Send Message</span>
                        </button>

                    </form>

                </section>

            </article>

        </div>

    </main>

    <!-- custom js link -->
    <script src="/assets/js/script.js"></script>

    <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script type="text/javascript" src="https://d3mkw6s8thqya7.cloudfront.net/integration-plugin.js" id="aisensy-wa-widget" widget-id="nWLrIa">
    </script>
</body>

</html>