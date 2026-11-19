@extends('layouts.app')

@section('title', 'Protected Farming Solutions')
@section('body_class', 'global-page')

@section('content')
<section class="fm-section fmab" id="about-us">
      <!-- background photo -->
      <div class="fmab__media">
        <img src="images/gg3.png" alt="Protected cultivation polyhouse with lush green crops" class="fmab__img"
          loading="eager">
      </div>

      <div class="fmab__inner">
        <!-- LEFT: text -->
        <div class="fmab__content">
          <span class="fmab-eyebrow">Protected Farming<i class="fmab-eyebrow__line"></i></span>

          <h1 class="fm-heading fmab__title">
            Shaping the <br>Future of <span class="fmdm__accent">Agriculture</span>
          </h1>

          <p class="fm-text fmab__text">
            We design, build and support protected farming enterprises that are profitable, sustainable and ready for
            tomorrow.
          </p>

          <a href="#our-story" class="fm-cta-btn">
            Our Story
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
              stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        </div>


      </div>
    </section>






    <main>

      <!-- ===================================================================
           02. What we offer globally: End-to-End Consultancy for Modern Farming.
           =================================================================== -->
      <section class="fmcg" id="consultancy">
        <div class="fmcg__inner">

          <!-- HEADER: title left, paragraph with a thin vertical line right (one grid) -->
          <header class="fmcg__head">
            <div class="fmcg__headtext">
              <span class="fmcg-eyebrow"><b>02</b><i class="fmcg-eyebrow__line"></i><span>What we offer
                  globally</span></span>
              <h2 class="fm-heading fmcg__title">End-to-End Consultancy <br>for <span class="fmcg__accent">Modern
                  Farming.</span></h2>
            </div>
            <div class="fmcg__intro">
              <i class="fmcg__intro-rule" aria-hidden="true"></i>
              <p class="fm-text fmcg__text">We support investors, growers and agri-businesses worldwide with practical,
                commercially viable and climate-ready solutions.</p>
            </div>
          </header>

          <!-- FIVE CARDS (each card is ONE link) -->
          <ul class="fmcg-cards">

            <li class="fmcg-card">
              <span class="fmcg-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                  stroke-linejoin="round">
                  <line x1="18" y1="20" x2="18" y2="10"></line>
                  <line x1="12" y1="20" x2="12" y2="15"></line>
                  <line x1="6" y1="20" x2="6" y2="18"></line>
                  <path d="M4 11l5-5 4 3 6-6"></path>
                  <polyline points="15 3 20 3 20 8"></polyline>
                </svg>
              </span>
              <h3 class="fm-heading fmcg-card__title"><a class="fmcg-card__link"
                  href="/services/farm-feasibility-business-planning">Farm Feasibility &amp; Business Planning</a></h3>
              <p class="fm-text fmcg-card__text">Market analysis, crop selection and financial modelling.</p>
              <span class="fmcg-card__go" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </li>

            <li class="fmcg-card">
              <span class="fmcg-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M2 21h13L2 8v13z"></path>
                  <path d="M5 18h4L5 14v4z"></path>
                  <path d="M15 4l5 5-8 8-5 1 1-5 7-9z"></path>
                  <line x1="14" y1="5" x2="19" y2="10"></line>
                </svg>
              </span>
              <h3 class="fm-heading fmcg-card__title"><a class="fmcg-card__link"
                  href="/services/farm-design-engineering">Farm Design &amp; Engineering</a></h3>
              <p class="fm-text fmcg-card__text">Customised, high-performance designs for your location.</p>
              <span class="fmcg-card__go" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </li>

            <li class="fmcg-card">
              <span class="fmcg-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                  stroke-linejoin="round">
                  <circle cx="12" cy="12" r="3"></circle>
                  <path
                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                  </path>
                </svg>
              </span>
              <h3 class="fm-heading fmcg-card__title"><a class="fmcg-card__link"
                  href="/services/technology-system-selection">Technology &amp; System Selection</a></h3>
              <p class="fm-text fmcg-card__text">The right structures, growing systems and automation.</p>
              <span class="fmcg-card__go" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </li>

            <li class="fmcg-card">
              <span class="fmcg-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                  stroke-linejoin="round">
                  <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                  <polyline points="2 17 12 22 22 17"></polyline>
                  <polyline points="2 12 12 17 22 12"></polyline>
                </svg>
              </span>
              <h3 class="fm-heading fmcg-card__title"><a class="fmcg-card__link"
                  href="/services/project-development-advisory">Project Development Advisory</a></h3>
              <p class="fm-text fmcg-card__text">Guidance through procurement, construction and commissioning.</p>
              <span class="fmcg-card__go" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </li>

            <li class="fmcg-card">
              <span class="fmcg-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M2 22s2-4 3-6c2.5-5 8-11 16-13 0 8-6 13.5-11 16-2 1-6 3-8 3z"></path>
                  <path d="M5 16l8-8"></path>
                </svg>
              </span>
              <h3 class="fm-heading fmcg-card__title"><a class="fmcg-card__link"
                  href="/services/agronomy-operations-consultancy">Agronomy &amp; Operations Consultancy</a></h3>
              <p class="fm-text fmcg-card__text">Crop-specific advisory for long-term success.</p>
              <span class="fmcg-card__go" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </li>

          </ul>
        </div>
      </section>

      <!-- ===================================================================
           What can you monitor & control? Complete Control at Every Stage
           =================================================================== -->
      <section class="fmmc" id="monitor-control">

        <!-- background photo: fills the whole banner (decorative) -->
        <picture class="fmmc__bg">
          <img class="fmmc__bg-img" src="images/gg2.png" alt="" aria-hidden="true" loading="lazy" width="1824"
            height="862">
        </picture>

        <div class="fmmc__inner">
          <div class="fmmc__content">

            <span class="fmmc-eyebrow"><span>What can you monitor &amp; control?</span><i
                class="fmmc-eyebrow__line"></i></span>

            <h2 class="fm-heading fmmc__title">Complete Control<br>at Every Stage</h2>

            <p class="fm-text fmmc__text">Monitor and manage key parameters in your farm with real-time data, automation
              and smart alerts.</p>

            <ul class="fmmc-steps">
              <li class="fmmc-step">
                <a class="fmmc-step__link is-active" href="#irrigation" aria-current="true">
                  <span class="fmmc-step__disc" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                    </svg>
                  </span>
                  <span class="fmmc-step__label">Irrigation</span>
                </a>
              </li>
              <li class="fmmc-step">
                <a class="fmmc-step__link" href="#nutrient-dosing">
                  <span class="fmmc-step__disc" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M6 3h12v3H6z"></path>
                      <path d="M7 6v13a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V6"></path>
                      <line x1="10" y1="11" x2="14" y2="11"></line>
                      <line x1="10" y1="15" x2="13" y2="15"></line>
                    </svg>
                  </span>
                  <span class="fmmc-step__label">Nutrient Dosing</span>
                </a>
              </li>
              <li class="fmmc-step">
                <a class="fmmc-step__link" href="#ec-ph">
                  <span class="fmmc-step__disc" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M14.5 2v17.5c0 1.4-1.1 2.5-2.5 2.5s-2.5-1.1-2.5-2.5V2"></path>
                      <path d="M8.5 2h7"></path>
                      <path d="M9.5 9h5"></path>
                      <path d="M9.5 14h5"></path>
                    </svg>
                  </span>
                  <span class="fmmc-step__label">EC &amp; pH</span>
                </a>
              </li>
              <li class="fmmc-step">
                <a class="fmmc-step__link" href="#temperature-humidity">
                  <span class="fmmc-step__disc" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z"></path>
                    </svg>
                  </span>
                  <span class="fmmc-step__label">Temperature &amp; Humidity</span>
                </a>
              </li>
              <li class="fmmc-step">
                <a class="fmmc-step__link" href="#farm-data-alerts">
                  <span class="fmmc-step__disc" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                      <polyline points="9 22 9 12 15 12 15 22"></polyline>
                      <circle cx="12" cy="7" r="1"></circle>
                    </svg>
                  </span>
                  <span class="fmmc-step__label">Farm Data &amp; Alerts</span>
                </a>
              </li>
            </ul>

          </div>
        </div>
      </section>

      <!-- ===================================================================
           04. Solutions we consult on: Integrated Solutions for Every Growing Environment
           =================================================================== -->
      <section class="fmsc" id="integrated-solutions">
        <div class="fmsc__inner">

          <!-- HEADER: title left, paragraph with a thin vertical line right (one grid) -->
          <header class="fmsc__head">
            <div class="fmsc__headtext">
              <span class="fmsc-eyebrow"><b>04</b><i class="fmsc-eyebrow__line"></i><span>Solutions we consult
                  on</span></span>
              <h2 class="fm-heading fmsc__title">Integrated Solutions <br>for Every <span class="fmdm__accent">Growing
                  Environment</span> </h2>
            </div>
            <div class="fmsc__intro">
              <i class="fmsc__intro-rule" aria-hidden="true"></i>
              <p class="fm-text fmsc__text">We help you select and integrate the right combination of structures,
                growing systems, crops and automation based on your climate, resources and business goals.</p>
            </div>
          </header>

          <!-- FOUR CARDS (each card is ONE link) -->
          <ul class="fmsc-cards">

            <li class="fmsc-card">
              <figure class="fmsc-card__media"><img src="images/fip-structures.jpg"
                  alt="Large greenhouse structure over rows of crops" loading="lazy" width="900" height="440"></figure>
              <div class="fmsc-card__body">
                <div class="fmsc-card__txt">
                  <h3 class="fm-heading fmsc-card__title"><a class="fmsc-card__link"
                      href="/solutions/protected-structures">Protected Structures</a></h3>
                  <p class="fm-text fmsc-card__text">Greenhouses, net houses and specialised structures for diverse
                    climates.</p>
                </div>
                <span class="fmsc-card__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </div>
            </li>

            <li class="fmsc-card">
              <figure class="fmsc-card__media"><img src="images/crop-leafy.jpg"
                  alt="Hydroponic lettuce growing in white channels" loading="lazy" width="900" height="440"></figure>
              <div class="fmsc-card__body">
                <div class="fmsc-card__txt">
                  <h3 class="fm-heading fmsc-card__title"><a class="fmsc-card__link"
                      href="/solutions/hydroponic-growing-systems">Hydroponic &amp; Growing Systems</a></h3>
                  <p class="fm-text fmsc-card__text">Soilless and precision growing systems for higher productivity.</p>
                </div>
                <span class="fmsc-card__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </div>
            </li>

            <li class="fmsc-card">
              <figure class="fmsc-card__media"><img src="images/crop-fruit.jpg"
                  alt="Ripe tomatoes on the vine in a greenhouse" loading="lazy" width="900" height="440"></figure>
              <div class="fmsc-card__body">
                <div class="fmsc-card__txt">
                  <h3 class="fm-heading fmsc-card__title"><a class="fmsc-card__link"
                      href="/solutions/crop-planning">Crop Planning</a></h3>
                  <p class="fm-text fmsc-card__text">Crop selection and tailored growing strategies for local markets.
                  </p>
                </div>
                <span class="fmsc-card__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </div>
            </li>

            <li class="fmsc-card">
              <figure class="fmsc-card__media"><img src="images/automation.png"
                  alt="Climate control panel inside a greenhouse" loading="lazy" width="900" height="440"></figure>
              <div class="fmsc-card__body">
                <div class="fmsc-card__txt">
                  <h3 class="fm-heading fmsc-card__title"><a class="fmsc-card__link"
                      href="/solutions/automation-climate-control">Automation &amp; Climate Control</a></h3>
                  <p class="fm-text fmsc-card__text">Irrigation, fertigation, climate control and smart monitoring.</p>
                </div>
                <span class="fmsc-card__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </div>
            </li>

          </ul>
        </div>
      </section>

      <!-- ===================================================================
           05. Our International Approach: Global Knowledge. Local Solutions.
           =================================================================== -->
      <section class="fmia" id="international-approach">
        <div class="fmia__inner">

          <div class="fmia__content">
            <span class="fmia-eyebrow"><span class="fmia-eyebrow__no">05</span><i class="fmia-eyebrow__line"></i><span
                class="fmia-eyebrow__label">Our International Approach</span></span>
            <h2 class="fm-heading fmia__title">Global Knowledge. <br>Local Solutions.</h2>
            <p class="fm-text fmia__text">We combine international technical expertise with local climate, local
              resources and local market requirements to deliver farm solutions that are practical, profitable and built
              for long-term success.</p>
            <a href="#international-project" class="fm-cta-btn fmia__btn">
              <span class="fmia__btn-label">Discuss Your International Project</span>
              <span class="fmia__btn-arrow" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </a>
          </div>

          <figure class="fmia__media">
            <picture>
              <source media="(max-width: 599px)" srcset="images/international-approach-mobile.jpg" width="1000"
                height="1000">
              <img src="images/international-approach.jpg"
                alt="A globe surrounded by four climate regions with greenhouses: arid regions with efficient water use and climate control, tropical regions with ventilation, cooling and disease management, temperate regions with optimized structures and crop planning, and cold regions with insulation and season extension"
                class="fmia__img" loading="eager" width="2300" height="910">
            </picture>
          </figure>

          <ul class="fmia-items">
            <li class="fmia-item">
              <span class="fmia-item__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10"></circle>
                  <line x1="2" y1="12" x2="22" y2="12"></line>
                  <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                  </path>
                </svg>
              </span>
              <div class="fmia-item__body">
                <h3 class="fm-heading fmia-item__title">Global <br>Technical Knowledge</h3>
                <p class="fm-text fmia-item__text">Proven systems and international experience.</p>
              </div>
            </li>
            <li class="fmia-item">
              <span class="fmia-item__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path>
                  <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                </svg>
              </span>
              <div class="fmia-item__body">
                <h3 class="fm-heading fmia-item__title">Local <br>Climate</h3>
                <p class="fm-text fmia-item__text">Solutions adapted to your environment.</p>
              </div>
            </li>
            <li class="fmia-item">
              <span class="fmia-item__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                  <polyline points="2 17 12 22 22 17"></polyline>
                  <polyline points="2 12 12 17 22 12"></polyline>
                </svg>
              </span>
              <div class="fmia-item__body">
                <h3 class="fm-heading fmia-item__title">Local <br>Resources</h3>
                <p class="fm-text fmia-item__text">Use of available materials, labour and infrastructure.</p>
              </div>
            </li>
            <li class="fmia-item">
              <span class="fmia-item__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <line x1="18" y1="20" x2="18" y2="10"></line>
                  <line x1="12" y1="20" x2="12" y2="4"></line>
                  <line x1="6" y1="20" x2="6" y2="14"></line>
                  <line x1="2" y1="20" x2="22" y2="20"></line>
                </svg>
              </span>
              <div class="fmia-item__body">
                <h3 class="fm-heading fmia-item__title">Local Market <br>Requirements</h3>
                <p class="fm-text fmia-item__text">Crop selection aligned with market demand.</p>
              </div>
            </li>
          </ul>

        </div>
        <!-- next block goes here -->
      </section>
@endsection
