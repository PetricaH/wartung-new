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
            <button class="do-something-btn" href="#certificates">Vezi Mai Multe<i class="fa-solid fa-arrow-down"></i></button>
        </div>
    </section>

    <div class="body-inside">
        <div class="dynamic-stats-container">
            <div class="wartung-team">
                <h2>Echipa Wartung</h2>
                <div class="number-container">
                    <svg class="line-graph" viewBox="0 0 100 20" preserveAspectRatio="none">
                        <path class="graph-line" d="M0 20 Q25 5, 50 15 T100 20" />
                    </svg>
                    <p><i class="fa-solid fa-people-group"></i><span id="employee-count">0</span></p>
                </div>
            </div>
            <div class="preffered-product">
                <h2>Produsul Preferat de Clienți</h2>
                <p>Crema cu MicroSfere</p>
                <span>WA 303</span>
                <img src="/images/303.png" alt="Product Image">
            </div>
            <div class="average-daily-sales">
                <h2>Valoare medie comenzi/zi</h2>
                <div class="number-container">
                    <svg class="line-graph" viewBox="0 0 100 20" preserveAspectRatio="none">
                        <path class="graph-line" d="M0 20 Q25 5, 50 15 T100 20" />
                    </svg>
                    <p><i class="fa-solid fa-coins"></i><span id="average-daily-sales">38,486</span>Lei</p>
                </div>
            </div>
            <div class="sales-last-year">
                <h2>Vânzări Totale 2024</h2>
                <div class="number-container">
                    <svg class="line-graph" viewBox="0 0 100 20" preserveAspectRatio="none">
                        <path class="graph-line" d="M0 20 Q25 5, 50 15 T100 20" />
                    </svg>
                    <p><i class="fa-solid fa-coins"></i><span id="sales-amount">0</span>Lei</p>
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
              <button class="carousel-control prev do-something-btn"><i class="fa-solid fa-caret-left"></i></button>
              
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
              <button class="carousel-control next do-something-btn"><i class="fa-solid fa-caret-right"></i></button>
              
              <!-- Navigation dots -->
              <div class="carousel-dots"></div>
            </div>
        </div>

        <div class="video-testimonial">
            <span class="business-name">IMOCON</span>
            <div class="video-container imocon">
                <button onclick="window.location.href='https://youtu.be/uCB06_QxqWA?si=HhGhDDuDzw1UDAw8'; "class="do-something-btn"><i class="fa-solid fa-play"></i></button>  
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
                    <span>Nu îți vom insulta inteligența</span> spunându-ți că avem <span>“cea mai bună calitate 
                    la cel mai bun preț”</span>
                     și <span>“cea mai variată gamă de produse”</span>, și <span>nu</span> îți vom oferi <span>o reducere 
                     de 15%</span> la prima ta comandă (pentru ceva ce probabil nu te interesează).
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

        <section id="what-about-results-section">
            <div class="what-about-results-cards-container">
                <!-- Card 1: CURATENIE -->
                <div class="what-about-results-card what-about-results-card-curat">
                    <div class="what-about-results-dual-images">
                        <div class="what-about-results-image-left"></div>
                        <div class="what-about-results-image-right"></div>
                    </div>
                    <span class="what-about-results-card-title">CURATENIE</span>
                    <div class="what-about-results-hover-buttons">
                        <button class="what-about-results-hover-button what-about-results-hover-button-left">ALIMENTARA</button>
                        <button class="what-about-results-hover-button what-about-results-hover-button-right">GENERALA</button>
                    </div>
                </div>
        
                <!-- Card 2: Similar to Card 1 -->
                <div class="what-about-results-card what-about-results-card-curat">
                    <div class="what-about-results-dual-images">
                        <div class="what-about-results-image-left"></div>
                        <div class="what-about-results-image-right"></div>
                    </div>
                    <span class="what-about-results-card-title">CURATENIE</span>
                    <div class="what-about-results-hover-buttons">
                        <button class="what-about-results-hover-button what-about-results-hover-button-left">ALIMENTARA</button>
                        <button class="what-about-results-hover-button what-about-results-hover-button-right">GENERALA</button>
                    </div>
                </div>
        
                <!-- Card 3: Single Button on Hover -->
                <div class="what-about-results-card what-about-results-card-serv">
                    <div class="what-about-results-single-image"></div>
                    <span class="what-about-results-card-title">SERVICII</span>
                    <button class="what-about-results-hover-button what-about-results-hover-button-bottom">DETALII</button>
                </div>
        
                <!-- Card 4: Similar to Card 3 -->
                <div class="what-about-results-card what-about-results-card-serv">
                    <div class="what-about-results-single-image"></div>
                    <span class="what-about-results-card-title">SERVICII</span>
                    <button class="what-about-results-hover-button what-about-results-hover-button-bottom">DETALII</button>
                </div>
            </div>
        </section>
        
    </div>
@endsection