<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Home')

@section('head')
    <!-- If your layout supports a head section -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <section id="hero-section">
        <div class="hero-text-part">
            <h1>Produse de Întreținere Certificate și Eco</h1>
            <p><span>Rezolvă problemele</span> tale de <span>curățare</span> și <span>întreținere</span> <span>azi</span> fără să creezi altele mâine.</p>
            <button class="do-something-btn">Vezi Mai Multe</button>
        </div>
    </section>

    <div class="body-inside">
        <div class="dynamic-stats-container">
            <div class="wartung-team">
                <h2>Wartung Team</h2>
                <div class="number-container">
                    <svg class="line-graph" viewBox="0 0 100 20" preserveAspectRatio="none">
                        <path class="graph-line" d="M0 20 Q25 5, 50 15 T100 20" />
                    </svg>
                    <p>Total Employees: <span id="employee-count">0</span></p>
                </div>
            </div>
            <div class="preffered-product">
                <h2>Preferred Product</h2>
                <img src="product-image.jpg" alt="Product Image">
                <p>Crema cu MicroSfere WA XXX</p>
            </div>
            <div class="top-clients">
                <h2>Top Clients</h2>
                <ul id="client-list">
                    <!-- Clients will be dynamically inserted here -->
                </ul>
            </div>
            <div class="sales-last-year">
                <h2>Sales Last Year</h2>
                <div class="number-container">
                    <svg class="line-graph" viewBox="0 0 100 20" preserveAspectRatio="none">
                        <path class="graph-line" d="M0 20 Q25 5, 50 15 T100 20" />
                    </svg>
                    <p>Total Sales: <span id="sales-amount">0</span></p>
                </div>
            </div>
        </div>
        <section id="research-case-study">
            <p>Research Colorado University despre poluarea prin produsele de curățenie</p>
            <div class="case-study-card">
                <button class="do-something-btn" onclick="window.location.href='https://cires.colorado.edu/news/consumer-industrial-products-now-dominant-urban-air-pollution-source';">Citește Tot<i class="fa-solid fa-arrow-right"></i></a></button>
            </div>
        </section>
    </div>

    <section id="certificates">
        <p><span>Menține curată</span> afacerea <span>eliminând probleme</span> de <span>sănătate, mediu, și siguranță alimentară</span> cu produse <span>certificate</span></p>
        <div class="certificates-carousel">
            <img src="/images/certificates-imgs/certificate-one.png">
            <img src="/images/certificates-imgs/certificate-two.png">
            <img src="/images/certificates-imgs/certificate-three.png">
            <img src="/images/certificates-imgs/certificate-four.png">
        </div>
    </section>

    <div class="body-inside">

        <div class="video-testimonial">
            <span class="business-name">XIMENA FOOD</span>
            <div class="video-container ximena">
                <button onclick="window.location.href='https://youtu.be/I0aUt9monsY';" class="do-something-btn"><i class="fa-solid fa-play"></i></button>  
            </div>
            <p>
                “Lorem Ipsum is simply dummy text of the printing and typesetting industry. 

                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.”
            </p>
            <span class="testi-bar"></span>
            <span class="testi-name">Mihai</span>
        </div>

        <div class="companies-we-worked-with-container">
            <p>Am livrat rezultate la</p>
            <div class="companies-carousel">
              <!-- Left arrow button -->
              <button class="carousel-control prev"><i class="fa-solid fa-caret-left"></i></button>
              
              <!-- Carousel track container to clip overflow -->
              <div class="carousel-track-container">
                <div class="carousel-track">
                  <div class="carousel-item">
                    <img src="/images/certificates-imgs/certificate-one.png" alt="Certificate One">
                  </div>
                  <div class="carousel-item">
                    <img src="/images/certificates-imgs/certificate-two.png" alt="Certificate Two">
                  </div>
                  <div class="carousel-item">
                    <img src="/images/certificates-imgs/certificate-three.png" alt="Certificate Three">
                  </div>
                  <div class="carousel-item">
                    <img src="/images/certificates-imgs/certificate-four.png" alt="Certificate Four">
                  </div>
                </div>
              </div>
              
              <!-- Right arrow button -->
              <button class="carousel-control next"><i class="fa-solid fa-caret-right"></i></button>
              
              <!-- Navigation dots -->
              <div class="carousel-dots"></div>
            </div>
        </div>

        <div class="video-testimonial">
            <span class="business-name">IMOCON</span>
            <div class="video-container imocon">
                <button onclick="window.location.href='https://youtu.be/I0aUt9monsY'; "class="do-something-btn"><i class="fa-solid fa-play"></i></button>  
            </div>
            <p>
                “Lorem Ipsum is simply dummy text of the printing and typesetting industry. 

                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.”
            </p>
            <span class="testi-bar"></span>
            <span class="testi-name">Lazlo</span>
        </div>

        <section id="what-about-prices-section">
            <div class="what-about-prices-container">
                <div class="text-part">
                    Nu îți vom insulta inteligența spunându-ți că avem “cea mai bună calitate 
                    la cel mai bun preț”
                     și “cea mai variată gamă de produse”, și nu îți vom oferi o reducere 
                     de 15% la prima ta comandă (pentru ceva ce probabil nu te interesează).
                </div>
                <div class="graphic-part">
                    <span>DAR ÎȚI OFERIM</span>
                    <span>Mostră Gratuită</span>
                    <i class="fa-solid fa-vial"></i>
                    <div class="disclaimers">
                        <p>*daca îndeplinești criteriile noastre;</p>
                        <p>*garanția de rambursare completă fără întrebări dacă nu ești mulțumit 100%;</p>
                    </div>
                </div>
            </div>
        </section>



    </div>
@endsection