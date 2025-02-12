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
                <img src="/images/303.png" alt="Imagine Produs Preferat de Clientie - Mans 303 - Sapun cu Microsfere">
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
            <img src="/images/certificates-imgs/certificate-one.png" alt="Certificat Acreditare NSF">
            <img src="/images/certificates-imgs/certificate-two.png" alt="Certificat Acreditare ISO 9001">
            <img src="/images/certificates-imgs/certificate-three.png" alt="Certificat Acreditare CE">
            <img src="/images/certificates-imgs/certificate-four.png" alt="Certificat Acreditare ISO 14001">
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
                        <div class="what-about-results-curatenie-image-left"></div>
                        <div class="what-about-results-curatenie-image-right"></div>
                    </div>
                    <span class="what-about-results-card-title">CURĂȚENIE</span>
                    <div class="what-about-results-hover-buttons">
                        <button class="what-about-results-hover-button what-about-results-hover-button-left">ALIMENTARĂ</button>
                        <button class="what-about-results-hover-button what-about-results-hover-button-right">GENERALĂ</button>
                    </div>
                </div>
        
                <!-- Card 2: Similar to Card 1 -->
                <div class="what-about-results-card what-about-results-card-curat">
                    <div class="what-about-results-dual-images">
                        <div class="what-about-results-lubrifiere-image-left"></div>
                        <div class="what-about-results-lubrifiere-image-right"></div>
                    </div>
                    <span class="what-about-results-card-title">LUBRIFIERE</span>
                    <div class="what-about-results-hover-buttons">
                        <button class="what-about-results-hover-button what-about-results-hover-button-left">ALIMENTARĂ</button>
                        <button class="what-about-results-hover-button what-about-results-hover-button-right">GENERALĂ</button>
                    </div>
                </div>
        
                <!-- Card 3: Single Button on Hover -->
                <div class="what-about-results-card what-about-results-card-serv">
                    <div class="what-about-results-single-constructii-image"></div>
                    <span class="what-about-results-card-title">CONSTRUCȚII</span>
                    <div class="what-about-results-hover-buttons">
                        <button class="what-about-results-hover-button what-about-results-hover-button-bottom">DETALII</button>
                    </div>
                </div>
        
                <!-- Card 4: Similar to Card 3 -->
                <div class="what-about-results-card what-about-results-card-serv">
                    <div class="what-about-results-single-metalurgie-image"></div>
                    <span class="what-about-results-card-title">METALURGIE</span>
                    <div class="what-about-results-hover-buttons">
                        <button class="what-about-results-hover-button what-about-results-hover-button-bottom">DETALII</button>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="steps-to-success-section" class="steps-to-success-section">
            <h2>Dar Cum Îți Putem Garanta Rezultate?</h2>
            <h3>PRIN 3 PAȘI SIMPLI</h3>
            <div class="steps-buttons-container">
              <button class="step-button active" data-step="1">Pasul 1</button>
              <button class="step-button" data-step="2">Pasul 2</button>
              <button class="step-button" data-step="3">Pasul 3</button>
            </div>
            
            <!-- Connector element for the blob effect -->
            <div class="steps-connector"></div>
          
            <div class="steps-content-container">
              <div class="step-content active" data-step="1">
                <i class="fa-solid fa-question"></i>
                <p>
                  Ne informăm de problema care trebuie rezolvată și, dacă trebuie să facturăm un produs, facem asta doar dacă
                  considerăm că firma va implementa corect soluțiile noastre și va obține rezultate excelente.
                </p>
              </div>
              <div class="step-content" data-step="2">
                <i class="fa-solid fa-lightbulb"></i>
                <p>
                  În mod normal, cu pasul 1 deja vom ști ce produs poate rezolva problema, dar, dacă este necesar, unul dintre
                  inginerii noștri de presales, specializat în domeniu, va studia nevoia deplasându-se la locația ta.
                </p>
              </div>
              <div class="step-content" data-step="3">
                <i class="fa-solid fa-circle-check"></i>
                <p>
                  Recomandăm soluția sau setul de soluții specifice pentru cazul tău. Se trimit apoi testele – nu plătești nimic
                  până când nu ești de acord cu soluția propusă.
                </p>
              </div>
            </div>
          </section>
          

        <!-- Contact Industries Section -->
        <section class="contact-industries-section">
            <h2>Vrei să afli mai mult?</h2>
            <div class="industry-row">
                <i class="fas fa-utensils"></i>
                <span>Industria Alimentară</span>
                <div class="industry-button-connector"></div>
                <button class="contact-industry-btn" data-industry="alimentara">Vorbeste cu un consultant specializat</button>
            </div>
            
            <div class="industry-row">
                <i class="fa-solid fa-bed"></i>
                <span>Industria HORECA</span>
                <div class="industry-button-connector"></div>
                <button class="contact-industry-btn" data-industry="horeca">Vorbeste cu un consultant specializat</button>
            </div>

            <div class="industry-row">
                <i class="fa-solid fa-person-digging"></i>
                <span>Industria Construcții</span>
                <div class="industry-button-connector"></div>
                <button class="contact-industry-btn" data-industry="construcții">Vorbeste cu un consultant specializat</button>
            </div>

            <div class="industry-row">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <span>Industria Metalurgică</span>
                <div class="industry-button-connector"></div>
                <button class="contact-industry-btn" data-industry="metalurgica">Vorbeste cu un consultant specializat</button>
            </div>

            <div class="industry-row">
                <i class="fa-solid fa-car-side"></i>
                <span>Industria Automotive</span>
                <div class="industry-button-connector"></div>
                <button class="contact-industry-btn" data-industry="automotive">Vorbeste cu un consultant specializat</button>
            </div>

            <div class="industry-row">
                <i class="fa-solid fa-building-columns"></i>
                <span>Instituții Publice</span>
                <div class="industry-button-connector"></div>
                <button class="contact-industry-btn" data-industry="institutii-publice">Vorbeste cu un consultant specializat</button>
            </div>
        </section>
    </div>

    <!-- CONTACT BUTTON EXAMPLE -->
<button id="openContactForm">Contact</button>

<!-- Modal Container (initially hidden) -->
<div id="contactModal" class="brevo-modal">
  <div class="brevo-modal-content">
    <!-- Close Button -->
    <span class="brevo-close">&times;</span>

    <!-- Begin Brevo Form -->
    <!-- The code from Brevo starts here -->
    <!-- START - HEAD TAG CODE (CSS) -->
    <!-- Begin Brevo Form --><!-- START - We recommend to place the below code in head tag of your website html  --><style>  @font-face {    font-display: block;    font-family: Roboto;    src: url(https://assets.brevo.com/font/Roboto/Latin/normal/normal/7529907e9eaf8ebb5220c5f9850e3811.woff2) format("woff2"), url(https://assets.brevo.com/font/Roboto/Latin/normal/normal/25c678feafdc175a70922a116c9be3e7.woff) format("woff")  }  @font-face {    font-display: fallback;    font-family: Roboto;    font-weight: 600;    src: url(https://assets.brevo.com/font/Roboto/Latin/medium/normal/6e9caeeafb1f3491be3e32744bc30440.woff2) format("woff2"), url(https://assets.brevo.com/font/Roboto/Latin/medium/normal/71501f0d8d5aa95960f6475d5487d4c2.woff) format("woff")  }  @font-face {    font-display: fallback;    font-family: Roboto;    font-weight: 700;    src: url(https://assets.brevo.com/font/Roboto/Latin/bold/normal/3ef7cf158f310cf752d5ad08cd0e7e60.woff2) format("woff2"), url(https://assets.brevo.com/font/Roboto/Latin/bold/normal/ece3a1d82f18b60bcce0211725c476aa.woff) format("woff")  }  #sib-container input:-ms-input-placeholder {    text-align: left;    font-family: Helvetica, sans-serif;    color: #c0ccda;  }  #sib-container input::placeholder {    text-align: left;    font-family: Helvetica, sans-serif;    color: #c0ccda;  }  #sib-container textarea::placeholder {    text-align: left;    font-family: Helvetica, sans-serif;    color: #c0ccda;  }  #sib-container a {    text-decoration: underline;    color: #2BB2FC;  }</style><link rel="stylesheet" href="https://sibforms.com/forms/end-form/build/sib-styles.css"><!--  END - We recommend to place the above code in head tag of your website html --><!-- START - We recommend to place the below code where you want the form in your website html  --><div class="sib-form" style="text-align: center;         background-color: #EFF2F7;                                 ">  <div id="sib-form-container" class="sib-form-container">    <div id="error-message" class="sib-form-message-panel" style="font-size:16px; text-align:left; font-family:Helvetica, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;max-width:540px;">      <div class="sib-form-message-panel__text sib-form-message-panel__text--center">        <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">          <path d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-11.49 120h22.979c6.823 0 12.274 5.682 11.99 12.5l-7 168c-.268 6.428-5.556 11.5-11.99 11.5h-8.979c-6.433 0-11.722-5.073-11.99-11.5l-7-168c-.283-6.818 5.167-12.5 11.99-12.5zM256 340c-15.464 0-28 12.536-28 28s12.536 28 28 28 28-12.536 28-28-12.536-28-28-28z" />        </svg>        <span class="sib-form-message-panel__inner-text">                          Abonarea ta nu a putut fi înregistrată. Te rog încearcă din nou.                      </span>      </div>    </div>    <div></div>    <div id="success-message" class="sib-form-message-panel" style="font-size:16px; text-align:left; font-family:Helvetica, sans-serif; color:#085229; background-color:#e7faf0; border-radius:3px; border-color:#13ce66;max-width:540px;">      <div class="sib-form-message-panel__text sib-form-message-panel__text--center">        <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">          <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z" />        </svg>        <span class="sib-form-message-panel__inner-text">                          Vei fi contactat de Wartung în cel mai scurt timp!                      </span>      </div>    </div>    <div></div>    <div id="sib-container" class="sib-container--large sib-container--vertical" style="text-align:center; background-color:rgba(255,255,255,1); max-width:540px; border-radius:3px; border-width:1px; border-color:#C0CCD9; border-style:solid; direction:ltr">      <form id="sib-form" method="POST" action="https://3672f721.sibforms.com/serve/MUIFAGPG8kEpxkicIp7DUBETwLjyeADjuq-CtGIjIfSJPCicE36md5e2hUqj064qosYYvLsMUtJVATfclnl4Wii8JX8GEiDecJIDU1b_UYS739fz7VRY4T5TO0Z_wxLAx99YJOM-ei7HgUBrx8cyJxr0GYOd-C0kW-njo-ctNby-U0rHF-4DSLou5XidB-Fg1ohPeKep-IUKkxBP" data-type="subscription">        <div style="padding: 8px 0;">          <div class="sib-form-block" style="font-size:32px; text-align:left; font-weight:700; font-family:Helvetica, sans-serif; color:#3C4858; background-color:transparent; text-align:left">            <p>Formular Contact</p>          </div>        </div>        <div style="padding: 8px 0;">          <div class="sib-input sib-form-block">            <div class="form__entry entry_block">              <div class="form__label-row ">                <label class="entry__label" style="font-weight: 700; text-align:left; font-size:16px; text-align:left; font-weight:700; font-family:Helvetica, sans-serif; color:#3c4858;" for="FIRSTNAME" data-required="*">Nume</label>                <div class="entry__field">                  <input class="input " maxlength="200" type="text" id="FIRSTNAME" name="FIRSTNAME" autocomplete="off" placeholder="NUMELE TĂU" data-required="true" required />                </div>              </div>              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:Helvetica, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">              </label>            </div>          </div>        </div>        <div style="padding: 8px 0;">          <div class="sib-input sib-form-block">            <div class="form__entry entry_block">              <div class="form__label-row ">                <label class="entry__label" style="font-weight: 700; text-align:left; font-size:16px; text-align:left; font-weight:700; font-family:Helvetica, sans-serif; color:#3c4858;" for="EMAIL" data-required="*">Email</label>                <div class="entry__field">                  <input class="input " type="text" id="EMAIL" name="EMAIL" autocomplete="off" placeholder="EMAIL" data-required="true" required />                </div>              </div>              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:Helvetica, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">              </label>            </div>          </div>        </div>        <div style="padding: 8px 0;">          <div class="sib-input sib-form-block">            <div class="form__entry entry_block">              <div class="form__label-row ">                <label class="entry__label" style="font-weight: 700; text-align:left; font-size:16px; text-align:left; font-weight:700; font-family:Helvetica, sans-serif; color:#3c4858;" for="NUMAR_TELEFON" data-required="*">Numărul Tău de Telefon</label>                <div class="entry__field">                  <input maxlength="200" type="text" data-numeric="true" class="input " id="NUMAR_TELEFON" name="NUMAR_TELEFON" autocomplete="off" placeholder="NUMĂR TELEFON" data-required="true" required />                </div>              </div>              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:Helvetica, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">              </label>            </div>          </div>        </div>        <div style="padding: 8px 0;">          <div class="sib-input sib-form-block">            <div class="form__entry entry_block">              <div class="form__label-row ">                <label class="entry__label" style="font-weight: 700; text-align:left; font-size:16px; text-align:left; font-weight:700; font-family:Helvetica, sans-serif; color:#3c4858;" for="DENUMIREA_COMPANIEI" data-required="*">Denumirea Companiei</label>                <div class="entry__field">                  <input class="input " maxlength="200" type="text" id="DENUMIREA_COMPANIEI" name="DENUMIREA_COMPANIEI" autocomplete="off" placeholder="DENUMIREA COMPANIEI" data-required="true" required />                </div>              </div>              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:Helvetica, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">              </label>            </div>          </div>        </div>        <div style="padding: 8px 0;">          <div class="sib-input sib-form-block">            <div class="form__entry entry_block">              <div class="form__label-row ">                <label class="entry__label" style="font-weight: 700; text-align:left; font-size:16px; text-align:left; font-weight:700; font-family:Helvetica, sans-serif; color:#3c4858;" for="CUI" data-required="*">CUI</label>                <div class="entry__field">                  <input maxlength="200" type="text" data-numeric="true" class="input " id="CUI" name="CUI" autocomplete="off" placeholder="CUI" data-required="true" required />                </div>              </div>              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:Helvetica, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">              </label>            </div>          </div>        </div>        <div style="padding: 8px 0;">          <div class="sib-select sib-form-block" data-required="true">            <div class="form__entry entry_block">              <div class="form__label-row ">                <label class="entry__label" style="font-weight: 700; text-align:left; font-size:16px; text-align:left; font-weight:700; font-family:Helvetica, sans-serif; color:#3c4858;" for="DOMENIUL_DE_ACTIVITATE" data-required="*">Domeniu Activitate</label>                <div class="entry__field">                  <select class="input" id="DOMENIUL_DE_ACTIVITATE" name="DOMENIUL_DE_ACTIVITATE" data-required="true">                    <option value="" disabled selected hidden>Select one</option>                    <option class="sib-menu__item" value="1">                      Alimentar                    </option>                    <option class="sib-menu__item" value="2">                      Construcții                    </option>                    <option class="sib-menu__item" value="3">                      Transport                    </option>                    <option class="sib-menu__item" value="4">                      Metalurgie                    </option>                    <option class="sib-menu__item" value="5">                      Textil                    </option>                    <option class="sib-menu__item" value="6">                      Industria Prelucratoare                    </option>                    <option class="sib-menu__item" value="7">                      Domeniul Public                    </option>                    <option class="sib-menu__item" value="8">                      Agricultură                    </option>                    <option class="sib-menu__item" value="9">                      Industria Stativă                    </option>                    <option class="sib-menu__item" value="10">                      HORECA                    </option>                    <option class="sib-menu__item" value="11">                      Comerț                    </option>                    <option class="sib-menu__item" value="12">                      Industria Petrolieră (Downstream)                    </option>                  </select>                </div>              </div>              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:Helvetica, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">              </label>            </div>          </div>        </div>        <div style="padding: 8px 0;">          <div class="sib-optin sib-form-block" data-required="true">            <div class="form__entry entry_mcq">              <div class="form__label-row ">                <div class="entry__choice" style="">                  <label>                    <input type="checkbox" class="input_replaced" value="1" id="OPT_IN" name="OPT_IN" required />                    <span class="checkbox checkbox_tick_positive"            style="margin-left:"            ></span><span style="font-size:14px; text-align:left; font-family:Helvetica, sans-serif; color:#3C4858; background-color:transparent;"><p>Accept să primesc newslettere de la voi și politica securității datelor.</p><span data-required="*" style="display: inline;" class="entry__label entry__label_optin"></span></span> </label>                </div>              </div>              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:Helvetica, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">              </label>            </div>          </div>        </div>        <div style="padding: 8px 0;">          <div class="sib-captcha sib-form-block">            <div class="form__entry entry_block">              <div class="form__label-row ">                <script>                  function handleCaptchaResponse() {                    var event = new Event('captchaChange');                    document.getElementById('sib-captcha').dispatchEvent(event);                  }                </script>                <div class="g-recaptcha sib-visible-recaptcha" id="sib-captcha" data-sitekey="6Lcwf-0pAAAAAEX2tUmKNfFlLCEZNcibEYq-zLZa" data-callback="handleCaptchaResponse" style="direction:ltr"></div>              </div>              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:Helvetica, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">              </label>            </div>          </div>        </div>        <div style="padding: 8px 0;">          <div class="sib-form-block" style="text-align: center">            <button class="sib-form-block__button sib-form-block__button-with-loader" style="font-size:16px; text-align:center; font-weight:700; font-family:Helvetica, sans-serif; color:#1e1e1e; background-color:#ffbf00; border-radius:5px; border-width:0px;" form="sib-form" type="submit">              <svg class="icon clickable__icon progress-indicator__icon sib-hide-loader-icon" viewBox="0 0 512 512">                <path d="M460.116 373.846l-20.823-12.022c-5.541-3.199-7.54-10.159-4.663-15.874 30.137-59.886 28.343-131.652-5.386-189.946-33.641-58.394-94.896-95.833-161.827-99.676C261.028 55.961 256 50.751 256 44.352V20.309c0-6.904 5.808-12.337 12.703-11.982 83.556 4.306 160.163 50.864 202.11 123.677 42.063 72.696 44.079 162.316 6.031 236.832-3.14 6.148-10.75 8.461-16.728 5.01z" />              </svg>              SUBSCRIBE            </button>          </div>        </div>        <input type="text" name="email_address_check" value="" class="input--hidden">        <input type="hidden" name="locale" value="en">      </form>    </div>  </div></div><!-- END - We recommend to place the above code where you want the form in your website html  --><!-- START - We recommend to place the below code in footer or bottom of your website html  --><script>  window.REQUIRED_CODE_ERROR_MESSAGE = 'Please choose a country code';  window.LOCALE = 'en';  window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "Informația completată e greșită. Te rog revizuiește chenarul și încearcă din nou.";  window.REQUIRED_ERROR_MESSAGE = "Chenarul nu poate fi necompletat. ";  window.GENERIC_INVALID_MESSAGE = "Informația completată e greșită. Te rog revizuiește chenarul și încearcă din nou.";  window.INVALID_NUMBER = "Informația completată e greșită. Te rog revizuiește chenarul și încearcă din nou.";  window.translation = {    common: {      selectedList: '{quantity} list selected',      selectedLists: '{quantity} lists selected'    }  };  var AUTOHIDE = Boolean(1);</script><script defer src="https://sibforms.com/forms/end-form/build/main.js"></script><script src="https://www.google.com/recaptcha/api.js?hl=en"></script><!-- END - We recommend to place the above code in footer or bottom of your website html  --><!-- End Brevo Form -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
          // The button that opens the modal
          const openBtn = document.getElementById('openContactForm');
          // The modal container
          const modal = document.getElementById('contactModal');
          // The close (X) button inside the modal
          const closeBtn = document.querySelector('.brevo-close');
        
          // Show the modal when the "Contact" button is clicked
          openBtn.addEventListener('click', function() {
            modal.style.display = 'block';
          });
        
          // Hide the modal when the close button is clicked
          closeBtn.addEventListener('click', function() {
            modal.style.display = 'none';
          });
        
          // Optionally, hide the modal if the user clicks anywhere outside the modal content
          window.addEventListener('click', function(e) {
            if (e.target === modal) {
              modal.style.display = 'none';
            }
          });
        });
        </script>
        
  </div>
</div>


    <!-- Contact Form Modal -->
<div class="contact-modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <h2>Contact Form</h2>
        <form id="industry-contact-form">
            <input type="hidden" id="selected-industry" name="industry">
            
            <div class="form-group">
                <label>Name:</label>
                <input type="text" required>
            </div>
            
            <div class="form-group">
                <label>Email:</label>
                <input type="email" required>
            </div>
            
            <div class="form-group">
                <label>Message:</label>
                <textarea required></textarea>
            </div>
            
            <button type="submit">Send</button>
        </form>
    </div>
</div>
@endsection