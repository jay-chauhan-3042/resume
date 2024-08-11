<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jay Chauhan | Portfolio</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.png">
    <!-- CSS
    ============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Google -->
    <meta name="google-site-verification" content="7l9rvaUEK74Sk3NfrTUgx0ZbIeHoq49BKK_1JwGGjgY" />
    <!-- Facebook -->
    <meta name="facebook-domain-verification" content="aed0xbgyhjiuqaib69aahkajeganqa" />
</head>

<body class="template-color-1 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">

    <!-- Start Header -->
    <header class="rn-header haeder-default black-logo-version header--fixed header--sticky">
        <div class="header-wrapper rn-popup-mobile-menu m--0 row align-items-center">
            <!-- Start Header Left -->
            <div class="col-lg-2 col-6">
                <div class="header-left">
                    <div class="logo">
                        <a href="index.html">
                            <img src="/Horizontal Logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Header Left -->
            <!-- Start Header Center -->
            <div class="col-lg-10 col-6">
                <div class="header-center">
                    <nav id="sideNav" class="mainmenu-nav navbar-example2 d-none d-xl-block onepagenav">
                        <!-- Start Mainmanu Nav -->
                        <ul class="primary-menu nav nav-pills">
                            <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                            <li class="nav-item"><a class="nav-link" href="#resume">Resume</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contacts">Contact</a></li>
                        </ul>
                        <!-- End Mainmanu Nav -->
                    </nav>
                    <!-- Start Header Right  -->
                    <div class="header-right">
                        <a class="rn-btn" href="/Jay_Chauhan_Resume.pdf" download><span>Download CV</span></a>
                        <div class="hamberger-menu d-block d-xl-none">
                            {{-- <i  class="feather-menu humberger-menu"></i> --}}
                            <svg id="menuBtn" class="feather-menu humberger-menu" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#FF014F"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-menu">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </div>
                        <div class="close-menu d-block">
                            <span class="closeTrigger">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <!-- End Header Right  -->

                </div>
            </div>
            <!-- End Header Center -->
        </div>
    </header>
    <!-- End Header Area -->
    <!-- Start Popup Mobile Menu  -->
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="menu-top">
                <div class="menu-header">
                    <a class="logo" href="index.html">
                        <img src="favicon.png" alt="Jay Chauhan">
                    </a>
                    <div class="close-button">
                        <button class="close-menu-activation close"><i data-feather="x"></i></button>
                    </div>
                </div>
                <p class="discription">Crafting seamless digital experiences with harmonious integration of Node.js,
                    React.js, Vue.js, and Laravel.</p>
            </div>
            <div class="content">
                <ul class="primary-menu nav nav-pills onepagenav">
                    <li class="nav-item current"><a class="nav-link smoth-animation active" href="#home">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#resume">Resume</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#contacts">Contact</a></li>
                </ul><br><br>
                <div class="header-right">
                    <a class="rn-btn" href="/Jay_Chauhan_Resume.pdf" download><span>Download CV</span></a>
                </div>
                <!-- social sharea area -->
                <div class="social-share-style-1 mt--40">
                    <span class="title">find with me</span>
                    <ul class="social-share d-flex liststyle">
                        @foreach ($links as $link)
                            <li class="instagram">
                                <a href="{{ $link['linkAddress'] }}" target="_blank" rel="noopener noreferrer">
                                    {!! $link['linkIcon'] !!}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- end -->
            </div>
        </div>
    </div>
    <!-- End Popup Mobile Menu  -->

    <main class="main-page-wrapper">
        <!-- Start Slider Area -->
        <div id="home" class="rn-slider-area">
            <div class="slide slider-style-1">
                <div class="container">
                    <div class="row row--30 align-items-center">
                        <div class="order-2 order-lg-1 col-lg-7 mt_md--50 mt_sm--50 mt_lg--30">
                            <div class="content">
                                <div class="inner">
                                    <span class="subtitle">Welcome to my world</span>
                                    <h1 class="title">Hi, I’m
                                        <span>{{ $personalDetails['firstname'] . ' ' . $personalDetails['lastname'] }}</span><br>
                                        <span class="header-caption" id="page-top">
                                            <!-- type headline start-->
                                            <span class="cd-headline clip is-full-width">
                                                <span>a </span>
                                                <!-- ROTATING TEXT -->
                                                <span class="cd-words-wrapper">
                                                    @php
                                                        $i = 0;
                                                    @endphp
                                                    @foreach (explode(',', $personalDetails['typed-items']) as $value)
                                                        <b
                                                            class="{{ ++$i == 1 ? 'is-visible' : 'is-hidden' }}">{{ $value }}</b>
                                                    @endforeach
                                                </span>
                                            </span>
                                            <!-- type headline end -->
                                        </span>
                                    </h1>

                                    <div>
                                        <p class="description" style="text-align: justify">
                                            {{ isset($personalDetails['headline1']) ? $personalDetails['headline1'] : '' }}
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12 mt_mobile--30">
                                        <div class="skill-share-inner">
                                            <span class="title">find me on</span>
                                            <ul class="skill-share d-flex liststyle">
                                                @foreach ($links as $link)
                                                    <li>
                                                        <a href="{{ $link['linkAddress'] }}" target="_blank"
                                                            rel="noopener noreferrer">
                                                            {!! $link['linkIcon'] !!}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12 mt_mobile--30">
                                        <div class="skill-share-inner">
                                            <span class="title">best skill on</span>
                                            <ul class="skill-share d-flex liststyle">
                                                <li>
                                                    <svg width="25" height="25" viewBox="0 0 71 80"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clipPath="url(#clip0_337_7891)" fill="#5FA04E">
                                                            <path
                                                                d="M35.625 79.5c-1.081 0-2.09-.288-3.028-.792l-9.59-5.686c-1.442-.792-.721-1.08-.289-1.224 1.947-.648 2.308-.792 4.327-1.944.216-.144.504-.072.72.072l7.356 4.391c.288.144.649.144.865 0l28.77-16.628c.289-.144.433-.431.433-.791V23.714c0-.36-.144-.648-.432-.792L35.986 6.366c-.288-.144-.65-.144-.865 0L6.35 22.922c-.29.144-.434.504-.434.792v33.184c0 .287.145.647.433.791l7.86 4.535c4.254 2.16 6.922-.36 6.922-2.879V26.593c0-.432.36-.864.865-.864h3.678c.432 0 .865.36.865.864v32.752c0 5.687-3.1 8.998-8.509 8.998-1.658 0-2.956 0-6.633-1.8l-7.572-4.319A6.073 6.073 0 0 1 .798 56.97V23.786a6.073 6.073 0 0 1 3.028-5.255l28.77-16.628c1.804-1.008 4.255-1.008 6.058 0l28.77 16.628a6.073 6.073 0 0 1 3.029 5.255V56.97a6.073 6.073 0 0 1-3.029 5.254l-28.77 16.628c-.865.36-1.947.648-3.029.648Z" />
                                                            <path
                                                                d="M44.567 56.682c-12.62 0-15.215-5.759-15.215-10.654 0-.432.36-.864.865-.864h3.75c.433 0 .793.288.793.72.577 3.815 2.235 5.687 9.879 5.687 6.057 0 8.652-1.368 8.652-4.607 0-1.871-.72-3.24-10.167-4.175-7.86-.792-12.762-2.52-12.762-8.782 0-5.83 4.903-9.285 13.123-9.285 9.23 0 13.772 3.167 14.35 10.077 0 .216-.073.432-.217.648-.144.144-.36.288-.577.288h-3.822a.844.844 0 0 1-.793-.648c-.865-3.96-3.1-5.255-9.013-5.255-6.634 0-7.427 2.304-7.427 4.031 0 2.088.937 2.736 9.879 3.887 8.869 1.152 13.05 2.808 13.05 8.998 0 6.335-5.263 9.934-14.348 9.934Z" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_337_7891">
                                                                <path fill="#fff" d="M0 .5h71v79H0z" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg height="25" preserveAspectRatio="xMidYMid"
                                                        viewBox="0 0 256 228" width="25"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="m210.483381 73.8236374c-2.655683-.9140871-5.407514-1.7789613-8.240911-2.5969006.465702-1.900627.893126-3.7766474 1.273161-5.6207704 6.238212-30.2810742 2.159451-54.6757186-11.768303-62.70747357-13.354969-7.70138944-35.196001.32854284-57.254392 19.52528477-2.121175 1.8459457-4.248274 3.8003425-6.374459 5.8486085-1.4167-1.3551821-2.831119-2.6647964-4.241893-3.9174513-23.117839-20.52640617-46.2899038-29.17651417-60.2039874-21.12151965-13.3422097 7.72371765-17.293381 30.65700725-11.6780788 59.35460545.5422551 2.7718805 1.1761011 5.6025433 1.8928804 8.4805964-3.2795041.9309471-6.4455448 1.9234107-9.4748826 2.9792133-27.1031859 9.4493647-44.4125156 24.2588525-44.4125156 39.6201647 0 15.865292 18.5815786 31.778428 46.8116526 41.427378 2.2278027.761436 4.5394499 1.481405 6.921727 2.16492-.7732831 3.112727-1.4458617 6.163025-2.0104451 9.138138-5.3541994 28.199544-1.1729114 50.591033 12.1337554 58.265994 13.744572 7.926039 36.8118301-.221003 59.2734951-19.855194 1.775316-1.552035 3.557011-3.197938 5.341896-4.923129 2.313471 2.227802 4.623294 4.336217 6.920816 6.313853 21.756733 18.722383 43.245072 26.282514 56.539435 18.586137 13.730902-7.948824 18.193343-32.002622 12.39987-61.267992-.442462-2.235094-.957376-4.51849-1.535629-6.842439 1.61993-.478918 3.210241-.973326 4.760909-1.487329 29.347849-9.723682 48.442518-25.443157 48.442518-41.520337 0-15.4169044-17.867534-30.3261857-45.516619-39.8443576zm-6.365346 70.9839276c-1.399838.463422-2.836131.911353-4.299764 1.345612-3.23986-10.256823-7.612532-21.163442-12.963542-32.431867 5.106312-11.000033 9.309927-21.7672137 12.459108-31.9575086 2.618773.7577901 5.160537 1.5570469 7.609799 2.4005042 23.689712 8.1552432 38.140127 20.2129004 38.140127 29.5036894 0 9.896384-15.60601 22.743273-40.945728 31.13957zm-10.514281 20.834442c2.561813 12.940759 2.927721 24.64071 1.230782 33.78705-1.524693 8.218583-4.590941 13.698093-8.38217 15.892632-8.067754 4.669773-25.320578-1.400294-43.92722-17.411857-2.133022-1.835466-4.281537-3.79533-6.436887-5.869571 7.21336-7.889128 14.422619-17.060529 21.458721-27.246268 12.375719-1.098179 24.067925-2.893546 34.671062-5.34463.522205 2.106593.986084 4.17263 1.385712 6.192644zm-106.3275674 48.872679c-7.8822932 2.783728-14.1601491 2.863471-17.9550235.675312-8.0750442-4.65747-11.4320133-22.635733-6.8529197-46.751959.5244838-2.761856 1.1487607-5.598897 1.8682739-8.498823 10.4869402 2.318938 22.0934778 3.987625 34.4988161 4.993303 7.0834926 9.967015 14.5009956 19.128391 21.9759136 27.150121-1.633145 1.57664-3.259911 3.07764-4.877562 4.492059-9.932382 8.682006-19.8857245 14.841841-28.6574984 17.939987zm-36.9275725-69.767727c-12.4828036-4.266499-22.7915743-9.811627-29.8577507-15.862556-6.349397-5.437588-9.5550817-10.835988-9.5550817-15.216408 0-9.321775 13.8976794-21.2117433 37.0765787-29.2931669 2.8124357-.980616 5.7565619-1.904728 8.8118733-2.7727918 3.2034061 10.4204114 7.4056553 21.3151817 12.4768798 32.3320737-5.1368419 11.18048-9.3987847 22.248865-12.6336326 32.791396-2.1781339-.626099-4.288372-1.285007-6.3188668-1.978547zm12.3784537-84.2591517c-4.8110332-24.5873955-1.6158291-43.1352541 6.4245837-47.7895344 8.5644409-4.95821666 27.5028138 2.1111493 47.4632705 19.834689 1.275894 1.132812 2.556801 2.3184823 3.841353 3.5451637-7.438008 7.986643-14.787615 17.079213-21.8082236 26.9874439-12.0398868 1.115952-23.5648583 2.9085836-34.1611607 5.3090876-.6661993-2.6798338-1.2563004-5.3127329-1.7598229-7.8868498zm110.4268332 27.2672294c-2.533105-4.3754063-5.133652-8.647374-7.784777-12.8026884 8.168002 1.032563 15.99379 2.4032381 23.342942 4.0805836-2.206387 7.0711887-4.956393 14.4645409-8.19352 22.0438091-2.322127-4.4086708-4.778224-8.8537956-7.364645-13.3217043zm-45.03178-43.8611468c5.04434 5.464929 10.09597 11.566438 15.064668 18.1865069-5.006975-.2364961-10.075921-.3595288-15.186788-.3595288-5.062567 0-10.094147.1202987-15.070136.3526937 4.97371-6.5585527 10.069085-12.6518596 15.192256-18.1796718zm-45.3202226 43.9367891c-2.5303719 4.3877096-4.9409009 8.8086837-7.2265745 13.23786-3.1847235-7.5528392-5.9092136-14.9799114-8.1347379-22.1513491 7.3040395-1.6345118 15.0929189-2.971011 23.2089741-3.98398-2.6884917 4.1935912-5.3104547 8.4970007-7.8476617 12.8965578zm8.0814237 65.35222c-8.38536-.935504-16.2913482-2.203195-23.5935651-3.792596 2.2610672-7.299483 5.0457066-14.88513 8.2978701-22.600646 2.2915975 4.425987 4.7116957 8.848784 7.2575606 13.246063h.0004556c2.5932554 4.479756 5.2799243 8.86792 8.0376788 13.147179zm37.5413689 31.030206c-5.183321-5.592518-10.353427-11.778782-15.402779-18.433027 4.901712.192295 9.899117.290722 14.978089.290722 5.217952 0 10.37621-.117565 15.453359-.343581-4.985103 6.774089-10.018505 12.969922-15.028669 18.485886zm52.198205-57.816696c3.421675 7.798904 6.306108 15.344908 8.596338 22.519991-7.422515 1.693293-15.436498 3.057134-23.880185 4.070559 2.657506-4.211364 5.280835-8.556696 7.858597-13.026427 2.607838-4.522133 5.083984-9.051102 7.42525-13.564123zm-16.89831 8.100562c-4.001751 6.938586-8.110131 13.5623-12.280938 19.81464-7.596585.543165-15.444702.822951-23.443647.822951-7.966593 0-15.71583-.247433-23.177988-.731817-4.338953-6.334359-8.536645-12.977667-12.5128789-19.846081h.0009114c-3.9657532-6.849729-7.6157223-13.757331-10.9230227-20.626198 3.306389-6.884818 6.9467889-13.800165 10.8897582-20.637592l-.0009113.001367c3.9534496-6.8556538 8.1142323-13.4666093 12.4130843-19.7613253 7.613444-.5755193 15.420551-.8758102 23.310591-.8758102h.000456c7.925582 0 15.742713.3025691 23.353878.8831012 4.233235 6.2486926 8.365766 12.8382311 12.334709 19.6947964 4.014056 6.9335749 7.70139 13.8028979 11.03603 20.5400769-3.324615 6.852919-7.003747 13.791507-11.000032 20.721891zm22.560091-122.1240512c8.572644 4.943635 11.906372 24.881307 6.520276 51.0257494-.343581 1.6682319-.730449 3.3674497-1.150584 5.0894514-10.620909-2.4506285-22.154083-4.274246-34.229054-5.407058-7.03428-10.0171377-14.323738-19.1238337-21.640537-27.0079496 1.967156-1.8924245 3.931578-3.6969038 5.887797-5.399767 18.899641-16.4476453 36.563943-22.94149194 44.612102-18.3004262zm-58.284676 78.4351498c12.624974 0 22.859925 10.2344954 22.859925 22.8599254 0 12.624974-10.234951 22.859927-22.859925 22.859927-12.624975 0-22.859926-10.234953-22.859926-22.859927 0-12.62543 10.234951-22.8599254 22.859926-22.8599254z"
                                                            fill="#00d8ff" />
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg height="25" preserveAspectRatio="xMidYMid"
                                                        viewBox="0 0 256 264" width="25"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="m255.855641 59.619717c.094924.3513426.144359.7135979.144359 1.0775366v56.5680914c0 1.477861-.790591 2.842804-2.072582 3.57804l-47.478632 27.335401v54.181012c0 1.474524-.783663 2.835623-2.062271 3.57804l-99.107585 57.052725c-.22685.128892-.474322.211383-.721795.29903-.092802.030934-.180448.087646-.278406.113424-.6928.182443-1.421028.182443-2.113828 0-.113425-.030934-.216538-.092802-.324808-.134047-.226849-.082491-.464011-.15467-.680549-.278407l-99.08696173-57.052725c-1.28121047-.736019-2.07258227-2.100466-2.07258227-3.57804v-169.7042732c0-.3712087.05155677-.7321061.14435896-1.0826922.03093407-.1185806.10311355-.2268498.14435897-.3454304.07733516-.2165384.14951464-.4382325.26293954-.639304.07733516-.1340476.19076006-.2423168.28356225-.3660531.11858058-.1649816.2268498-.335119.36605309-.4794779.11858058-.1185806.27325089-.2062271.4072985-.3093407.14951464-.1237362.28356225-.2577838.4536996-.3557417h.00515568l49.54605871-28.52636244c1.276705-.73465813 2.8478368-.73465813 4.1245418 0l49.5460589 28.52636244h.010311c.164982.1031135.304185.2320055.4537.350586.134047.1031136.283562.1959158.402143.3093407.144359.1495146.247472.319652.371208.4846336.087647.1237363.206228.2320055.278407.3660531.118581.2062271.185604.4227656.268095.639304.041246.1185806.113425.2268498.144359.3505861.094925.3513425.143456.7135978.144359 1.0775365v105.9955692l41.286664-23.772828v-54.1861681c0-.3608974.051557-.7269505.144359-1.0723809.03609-.1237362.103113-.2320054.144359-.350586.082491-.2165385.15467-.4382326.268095-.639304.077335-.1340476.19076-.2423168.278407-.3660531.123736-.1649817.226849-.335119.371208-.479478.118581-.1185806.268096-.2062271.402143-.3093406.15467-.1237363.288718-.2577839.4537-.3557417h.005155l49.551215-28.5263625c1.276422-.7357166 2.84812-.7357166 4.124542 0l49.546058 28.5263625c.175293.1031135.309341.2320054.464011.350586.128892.1031136.278407.1959157.396988.3093406.144358.1495147.247472.319652.371208.4846337.092802.1237363.206227.2320055.278407.3660531.11858.2010714.185604.4227655.268095.639304.046401.1185806.113425.2268498.144359.350586zm-8.115036 55.258549v-47.0403994l-17.338543 9.9813913-23.953276 13.7914367v47.0403994l41.296975-23.772828zm-49.546059 85.094454v-47.071334l-23.561445 13.456318-67.281589 38.399484v47.514722zm-189.93515099-160.1765821v160.1765821l90.83272249 52.294035v-47.504411l-47.4528538-26.855923-.015467-.010311-.0206227-.010312c-.159826-.092802-.2938736-.226849-.4433883-.340274-.1288919-.103114-.2784066-.185605-.3918315-.29903l-.0103113-.015467c-.1340476-.128892-.2268498-.288718-.3402747-.433077-.1031136-.139203-.2268498-.257783-.3093406-.402142l-.0051557-.015467c-.0928022-.154671-.1495147-.340275-.2165385-.515568-.0670238-.15467-.1546703-.299029-.1959157-.464011v-.005156c-.0515568-.195916-.0618681-.402143-.0824908-.603214-.0206228-.15467-.0618682-.309341-.0618682-.464011v-.010311-110.7491042l-23.948121-13.7965924-17.33854269-9.9710799zm45.42151689-30.90312969-41.281508 23.76251659 41.2711967 23.7625166 41.2763523-23.7676722-41.2763523-23.75736099zm21.4682402 148.29790179 23.948121-13.786281v-103.6084911l-17.3385427 9.9813912-23.9532767 13.7914367v103.6084912zm127.1750919-120.256173-41.276353 23.7625166 41.276353 23.7625166 41.271196-23.7676723zm-4.129698 54.6759576-23.953276-13.7914367-17.338543-9.9813913v47.0403994l23.948121 13.786281 17.343698 9.986547zm-94.977887 106.0058804 60.543119-34.56366 30.263825-17.271519-41.245418-23.74705-47.488943 27.340557-43.2819113 24.917388z"
                                                            fill="#ff2d20" />
                                                    </svg>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order-1 order-lg-2 col-lg-5">
                            <div class="thumbnail">
                                <div class="inner">
                                    <img src="{{ $images['profileImage'] }}" alt="Jay Chauhan">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->
        <!-- Start Service Area -->
        <div class="rn-service-area rn-section-gap section-separator" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-left" data-aos="fade-up" data-aos-duration="500"
                            data-aos-delay="100" data-aos-once="true">
                            <span class="subtitle">Features</span>
                            <h2 class="title">What I Do</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt_md--10 mt_sm--10">

                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                        class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="menu"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Business Stratagy</h4>
                                    <p class="description">Developing visionary business strategies that drive growth,
                                        innovation, and long-term success.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true"
                        class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="book-open"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Web Development</h4>
                                    <p class="description">Crafting seamless digital experiences with cutting-edge web
                                        development solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true"
                        class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="tv"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">App Development</h4>
                                    <p class="description">Transforming ideas into impactful apps with seamless design
                                        and robust functionality.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                        class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="twitch"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Mobile App</h4>
                                    <p class="description">Creating innovative mobile apps that elevate user
                                        experiences and drive engagement.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true"
                        class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="wifi"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Rest Apis</h4>
                                    <p class="description">Building secure and reliable REST APIs to power your
                                        applications with seamless data integration.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true"
                        class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="slack"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Desktop Applications</h4>
                                    <p class="description"> Designing efficient and scalable desktop applications for
                                        enhanced productivity and performance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End SIngle Service -->

                </div>
            </div>
        </div>
        <!-- End Service Area  -->
        <!-- Start Resume Area -->
        <div class="rn-resume-area rn-section-gap section-separator" id="resume">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">3+ Years of Experience</span>
                            <h2 class="title">My Resume</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--45">
                    <div class="col-lg-12">
                        <ul class="rn-nav-list nav nav-tabs" id="myTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="experience-tab" data-bs-toggle="tab"
                                    href="#experience" role="tab" aria-controls="experience"
                                    aria-selected="false">experience</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="professional-tab" data-bs-toggle="tab" href="#professional"
                                    role="tab" aria-controls="professional" aria-selected="false">professional
                                    Skills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="education-tab" data-bs-toggle="tab" href="#education"
                                    role="tab" aria-controls="education" aria-selected="true">education</a>
                            </li>
                        </ul>

                        <!-- Start Tab Content Wrapper  -->
                        <div class="rn-nav-content tab-content" id="myTabContents">
                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade single-tab-area" id="education" role="tabpanel"
                                aria-labelledby="education-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2018 - 2023</span>
                                                <h4 class="maintitle">Education Details</h4>
                                                <div class="experience-list">

                                                    @foreach ($education as $edu)
                                                        <!-- Start Single List  -->
                                                        <div data-aos="fade-up" data-aos-duration="500"
                                                            data-aos-delay="300" data-aos-once="true"
                                                            class="resume-single-list">
                                                            <div class="inner">
                                                                <div class="heading">
                                                                    <div class="title">
                                                                        <h4>{{ $edu['eduTitle'] }}</h4>
                                                                        <span>{{ $edu['eduInstitute'] }}
                                                                            ({{ date('Y', strtotime($edu['eduStartDate'])) . '-' . date('Y', strtotime($edu['eduEndDate'])) }})
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <p class="description" style="text-align: justify">
                                                                    {{ $edu['eduDesc'] }}</p>
                                                            </div>
                                                        </div>
                                                        <!-- End Single List  -->
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade " id="professional" role="tabpanel"
                                aria-labelledby="professional-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row row--40">
                                        <!-- Start Single Progressbar  -->
                                        <div class="col-lg-6 col-md-6 col-12 mt_sm--60">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <span class="subtitle">Features</span>
                                                    <h4 class="maintitle">Web Development Skill</h4>
                                                    @for ($i = 0; $i < count($skills) / 2; $i++)
                                                        <!-- Start Single Progress Charts -->
                                                        <div class="progress-charts">
                                                            <h6 class="heading heading-h6">
                                                                {{ $skills[$i]['skillTitle'] }}
                                                            </h6>
                                                            <div class="progress">
                                                                <div class="progress-bar wow fadeInLeft"
                                                                    data-wow-duration="0.5s" data-wow-delay=".3s"
                                                                    role="progressbar"
                                                                    style="width: {{ $skills[$i]['skillPercentage'] }}%"
                                                                    aria-valuenow="{{ $skills[$i]['skillPercentage'] }}"
                                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                                        class="percent-label">{{ $skills[$i]['skillPercentage'] }}%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single Progress Charts -->
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12 mt_sm--60">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <span class="subtitle">Features</span>
                                                    <h4 class="maintitle">Mobile Development Skill</h4>
                                                    @for ($i = count($skills) / 2; $i < count($skills); $i++)
                                                        <!-- Start Single Progress Charts -->
                                                        <div class="progress-charts">
                                                            <h6 class="heading heading-h6">
                                                                {{ $skills[$i]['skillTitle'] }}
                                                            </h6>
                                                            <div class="progress">
                                                                <div class="progress-bar wow fadeInLeft"
                                                                    data-wow-duration="0.5s" data-wow-delay=".3s"
                                                                    role="progressbar"
                                                                    style="width: {{ $skills[$i]['skillPercentage'] }}%"
                                                                    aria-valuenow="{{ $skills[$i]['skillPercentage'] }}"
                                                                    aria-valuemin="0" aria-valuemax="100"><span
                                                                        class="percent-label">{{ $skills[$i]['skillPercentage'] }}%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single Progress Charts -->
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Progressbar  -->

                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane show active fade" id="experience" role="tabpanel"
                                aria-labelledby="experience-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <span class="subtitle">2020 - Present</span>
                                                <h4 class="maintitle">Job Experience</h4>
                                                <div class="experience-list">

                                                    @foreach ($experience as $exp)
                                                        <!-- Start Single List  -->
                                                        <div class="resume-single-list">
                                                            <div class="inner">
                                                                <div class="heading">
                                                                    <div class="title">
                                                                        <h4>{{ $exp['expTitle'] }}</h4>
                                                                        <span>{{ $exp['expCompany'] }}
                                                                            ({{ date('Y', strtotime($exp['expStartDate'])) }}
                                                                            -
                                                                            {{ $exp['flag'] == '1' ? 'Present' : date('Y', strtotime($exp['expEndDate'])) }})
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <ul>
                                                                    @foreach (explode('::', $exp['expDesc']) as $desc)
                                                                        <li>{{ $desc }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- End Single List  -->
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Resume Area -->
        <!-- Start Contact section -->
        <div class="rn-contact-area rn-section-gap section-separator" id="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Contact</span>
                            <h2 class="title">Contact Me</h2>
                        </div>
                    </div>
                </div>

                <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                    <div class="col-lg-5">
                        <div class="contact-about-area">
                            <div class="thumbnail">
                                <img src="assets/images/Contact Jay.png" alt="Contact Jay Chauhan">
                            </div>
                            <div class="title-area">
                                <h4 class="title">
                                    {{ $personalDetails['firstname'] . ' ' . $personalDetails['lastname'] }}</h4>
                                <span>Software Developer</span>
                            </div>
                            <div class="description">
                                <p>I am available for freelance work. Connect with me via the details bellow.
                                </p>
                                <span class="phone">Phone: <a
                                        href="tel:+91{{ $personalDetails['phone1'] }}">{{ substr_replace($personalDetails['phone1'], ' ', 5, 0) }}</a></span>
                                <span class="mail">Email: <a
                                        href="https://mail.google.com/mail/u/0/?fs=1&to={{ $personalDetails['email'] }}&tf=cm"
                                        target="_blank"
                                        rel="noopener noreferrer">{{ $personalDetails['email'] }}</a></span>
                            </div>
                            <div class="social-area">
                                <div class="name">FIND WITH ME</div>
                                <div class="social-icone">
                                    @foreach ($links as $link)
                                        <a href="{{ $link['linkAddress'] }}" target="_blank"
                                            rel="noopener noreferrer">
                                            {!! $link['linkIcon'] !!}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos-delay="600" class="col-lg-7 contact-input">
                        <div class="contact-form-wrapper">
                            <div class="introduce">

                                <form class="row" method="POST" id="contact-form">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-name">Your Name</label>
                                            <input class="form-control form-control-lg" name="name"
                                                id="contact-name" type="text" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-phone">Phone Number</label>
                                            <input class="form-control" name="contact-phone" id="phoneNumber"
                                                type="text" minlength="10" maxlength="10" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-email">Email</label>
                                            <input class="form-control form-control-sm" id="email" name="email"
                                                type="email" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">subject</label>
                                            <input class="form-control form-control-sm" id="subject" name="subject"
                                                type="text" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-message">Your Message</label>
                                            <textarea name="message" id="message" cols="30" rows="10" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" id="submit" class="rn-btn">
                                            <span id="submit-test">SEND MESSAGE</span>
                                            <i data-feather="arrow-right" id="submit-icon"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contuct section -->
        <!-- Modal Portfolio Body area Start -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-center">

                            <div class="col-lg-6">
                                <div class="portfolio-popup-thumbnail">
                                    <div class="image">
                                        <img class="w-100" src="assets/images/portfolio/portfolio-04.jpg"
                                            alt="slide">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text-content">
                                    <h3>
                                        <span>Featured - Design</span> App Design Development.
                                    </h3>
                                    <p class="mb--30">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Cupiditate distinctio assumenda explicabo veniam temporibus eligendi.</p>
                                    <p>Consectetur adipisicing elit. Cupiditate distinctio assumenda. dolorum alias
                                        suscipit rerum maiores aliquam earum odit, nihil culpa quas iusto hic minus!</p>
                                    <div class="button-group mt--20">
                                        <a href="#" class="rn-btn thumbs-icon">
                                            <span>LIKE THIS</span>
                                            <i data-feather="thumbs-up"></i>
                                        </a>
                                        <a href="#" class="rn-btn">
                                            <span>VIEW PROJECT</span>
                                            <i data-feather="chevron-right"></i>
                                        </a>
                                    </div>

                                </div>
                                <!-- End of .text-content -->
                            </div>
                        </div>
                        <!-- End of .row Body-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Portfolio area -->
        <!-- Modal Blog Body area Start -->
        <div class="modal fade" id="exampleModalCenters" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-news" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </button>
                    </div>

                    <!-- End of .modal-header -->

                    <div class="modal-body">
                        <img src="assets/images/blog/blog   -big-01.jpg" alt="news modal"
                            class="img-fluid modal-feat-img">
                        <div class="news-details">
                            <span class="date">2 May, 2021</span>
                            <h2 class="title">Digital Marketo to Their New Office.</h2>
                            <p>Nobis eleifend option congue nihil imperdiet doming id quod mazim placerat
                                facer
                                possim assum.
                                Typi non
                                habent claritatem insitam; est usus legentis in iis qui facit eorum
                                claritatem.
                                Investigationes
                                demonstraverunt
                                lectores legere me lius quod ii legunt saepius. Claritas est etiam processus
                                dynamicus, qui
                                sequitur
                                mutationem consuetudium lectorum.</p>
                            <h4>Nobis eleifend option conguenes.</h4>
                            <p>Mauris tempor, orci id pellentesque convallis, massa mi congue eros, sed
                                posuere
                                massa nunc quis
                                dui.
                                Integer ornare varius mi, in vehicula orci scelerisque sed. Fusce a massa
                                nisi.
                                Curabitur sit
                                amet
                                suscipit nisl. Sed eget nisl laoreet, suscipit enim nec, viverra eros. Nunc
                                imperdiet risus
                                leo,
                                in rutrum erat dignissim id.</p>
                            <p>Ut rhoncus vestibulum facilisis. Duis et lorem vitae ligula cursus venenatis.
                                Class aptent
                                taciti sociosqu
                                ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc vitae
                                nisi
                                tortor. Morbi
                                leo
                                nulla, posuere vel lectus a, egestas posuere lacus. Fusce eleifend hendrerit
                                bibendum. Morbi
                                nec
                                efficitur ex.</p>
                            <h4>Mauris tempor, orci id pellentesque.</h4>
                            <p>Nulla non ligula vel nisi blandit egestas vel eget leo. Praesent fringilla
                                dapibus dignissim.
                                Pellentesque
                                quis quam enim. Vestibulum ultrices, leo id suscipit efficitur, odio lorem
                                rhoncus dolor, a
                                facilisis
                                neque mi ut ex. Quisque tempor urna a nisi pretium, a pretium massa
                                tristique.
                                Nullam in
                                aliquam
                                diam. Maecenas at nibh gravida, ornare eros non, commodo ligula. Sed
                                efficitur
                                sollicitudin
                                auctor.
                                Quisque nec imperdiet purus, in ornare odio. Quisque odio felis, vestibulum
                                et.</p>
                        </div>

                        <!-- Comment Section Area Start -->
                        <div class="comment-inner">
                            <h3 class="title mb--40 mt--50">Leave a Reply</h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="rnform-group"><input type="text" placeholder="Name">
                                        </div>
                                        <div class="rnform-group"><input type="email" placeholder="Email">
                                        </div>
                                        <div class="rnform-group"><input type="text" placeholder="Website">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="rnform-group">
                                            <textarea placeholder="Comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <a class="rn-btn" href="#"><span>SUBMIT NOW</span></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Comment Section End -->
                    </div>
                    <!-- End of .modal-body -->
                </div>
            </div>
        </div>
        <!-- End Modal Blog area -->
        <!-- Back to  top Start -->
        <div class="backto-top">
            <div>
                <i data-feather="arrow-up"></i>
            </div>
        </div>
        <!-- Back to top end -->

    </main>
    <!-- Start Footer Area -->
    <div class="rn-footer-area rn-section-gap section-separator">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-area text-center">

                        <div class="logo">
                            <a href="index.html">
                                <img src="/Jay Chauhan Logo.png" alt="logo">
                            </a>
                        </div>

                        <p class="description mt--30">© {{ date('Y') }}. All rights reserved by Jay Chauhan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area -->
    <!-- JS ============================================ -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/modernizer.min.js"></script>
    <script src="assets/js/vendor/feather.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/bootstrap.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/wow.js"></script>
    <script src="assets/js/vendor/aos.js"></script>
    <script src="assets/js/vendor/particles.js"></script>
    <script src="assets/js/vendor/jquery-one-page-nav.js"></script>
    <!-- main JS -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/contact.js"></script>
</body>

</html>
