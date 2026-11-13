@extends('layouts.app')

@section('title', 'Measuring Devices, Sensors & Automation | Future Agri Infra')
@section('body_class', 'protected-page sensor-page')

@section('content')
<section class="fm-section fmab" id="about-us">
      <!-- background photo -->
      <div class="fmab__media">
        <img src="images/banner3.jpeg" alt="Protected cultivation polyhouse with lush green crops" class="fmab__img"
          loading="eager">
      </div>

      <div class="fmab__inner">
        <!-- LEFT: text -->
        <div class="fmab__content">
          <span class="fmab-eyebrow">Smart Farming Sensors<i class="fmab-eyebrow__line"></i></span>

          <h1 class="fm-heading fmab__title">
            Precision Sensors & <br><span class="fmdm__accent">Measuring Devices</span>
          </h1>

          <p class="fm-text fmab__text">
            Accurate pH, EC, temperature and nutrient monitoring systems from world-leading brands to optimize crop
            health and commercial yields.
          </p>

          <a href="#brands" class="fm-cta-btn">
            Choose Preferred Brand
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
           04. How much automation does your farm need?
           =================================================================== -->
      <section class="fmal" id="automation-level">
        <div class="fmal__inner">

          <div class="fmal__content">
            <div class="afm-wwa__eyebrow">WHY MEASURE?</div>
            <h2 class="fm-heading ">Small Numbers<br> <span class="fmdm__accent">Big Difference.</span></h2>
            <p class="fm-text fmal__text">Measure pH, EC and temperature to maintain
              optimal growing conditions, improve nutrient uptake and ensure healthier crops.</p>
            <a href="#automation-finder" class="fm-cta-btn">
              Learn More
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </a>
          </div>

          <ol class="fmal-cols">
            <li class="fmal-col">
              <span class="fmal-col__no"><span class="fmal-col__num">01</span><i class="fmal-col__rule"></i></span>
              <h3 class="fm-heading fmal-col__title">pH</h3>
              <p class="fm-text fmal-col__text">Influences nutrient availability.</p>
              <img src="images/farm5.jpeg" alt="Rows of young leafy crops growing in soil beside a black drip line"
                class="fmal-col__img" loading="lazy" width="640" height="380">
              <ul class="fmal-checks">
                <li class="fmal-check">
                  <span class="fmal-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmal-check__label">Nutrient Balance</span>
                </li>
                <li class="fmal-check">
                  <span class="fmal-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmal-check__label">Easy Absorption</span>
                </li>
                <li class="fmal-check">
                  <span class="fmal-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmal-check__label">Healthy Growth</span>
                </li>
              </ul>
            </li>
            <li class="fmal-col">
              <span class="fmal-col__no"><span class="fmal-col__num">02</span><i class="fmal-col__rule"></i></span>
              <h3 class="fm-heading fmal-col__title">EC</h3>
              <p class="fm-text fmal-col__text">Indicates nutrient concentration.</p>
              <img src="images/auto.png"
                alt="White control box with automated irrigation pipes and valves in a greenhouse" class="fmal-col__img"
                loading="lazy" width="640" height="380">
              <ul class="fmal-checks">
                <li class="fmal-check">
                  <span class="fmal-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmal-check__label">Nutrient Control</span>
                </li>
                <li class="fmal-check">
                  <span class="fmal-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmal-check__label">Correct Strength</span>
                </li>
                <li class="fmal-check">
                  <span class="fmal-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmal-check__label">Balanced Feeding</span>
                </li>
              </ul>
            </li>
            <li class="fmal-col">
              <span class="fmal-col__no"><span class="fmal-col__num">03</span><i class="fmal-col__rule"></i></span>
              <h3 class="fm-heading fmal-col__title">Temperature</h3>
              <p class="fm-text fmal-col__text">Affects plant growth and nutrient uptake.</p>
              <img src="images/automation.png"
                alt="Fully automated greenhouse setup with overhead sensor units and climate control"
                class="fmal-col__img" loading="lazy" width="640" height="380">
              <ul class="fmal-checks">
                <li class="fmal-check">
                  <span class="fmal-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmal-check__label">Stable Environment</span>
                </li>
                <li class="fmal-check">
                  <span class="fmal-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmal-check__label">Better Growing Conditions</span>
                </li>
                <li class="fmal-check">
                  <span class="fmal-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmal-check__label">Healthy Greenhouse Growth</span>
                </li>
              </ul>
            </li>
          </ol>

        </div>
        <!-- next block goes here -->
      </section>

      <!-- ===================================================================
       04. Choose Your Preferred Brand
       =================================================================== -->
      <section class="fmbr" id="brands">
        <div class="fmbr__inner">

          <header class="fmbr__head">
            <span class="fmab-eyebrow">Our Brands<i class="fmab-eyebrow__line"></i></span>
            <h2 class="fm-heading ">Choose Your <span class="fmdm__accent">Preferred Brand</span> </h2>
            <p class="fm-text fmab__text">We offer pH, EC and multi-parameter measuring devices from two trusted global
              brands.</p>
          </header>

          <div class="fmbr__tabs">
            <div class="fmbr-brands">
              <label class="fmbr-brand" for="fmbr-b1">
                <input type="radio" name="fmbr-brand" id="fmbr-b1" class="fmbr__radio" checked>
                <span class="fmbr-brand__main">

                  <span class="fm-heading fmbr-brand__name">bluelab<sup aria-hidden="true">®</sup></span>
                  <span class="fmbr-brand__text">Precision measurement for growers worldwide.</span>
                </span>
                <span class="fmbr-brand__arrow" aria-hidden="true">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                    stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </label>
              <label class="fmbr-brand" for="fmbr-b2">
                <input type="radio" name="fmbr-brand" id="fmbr-b2" class="fmbr__radio">
                <span class="fmbr-brand__main">
                  <span class="fm-heading fmbr-brand__name">autogrow<svg viewBox="0 0 24 24" aria-hidden="true"
                      focusable="false">
                      <path
                        d="M21 3c-7.5 0-13 2.8-15.5 7.5C3.7 14 5.3 18 9 19c4.3 1.1 8.3-2.7 9.2-7.3.4-2.1 1.3-5.3 2.8-8.7Z">
                      </path>
                      <path d="M4 22c2.6-5.1 6-8.7 11-11"></path>
                    </svg></span>
                  <span class="fmbr-brand__text">Reliable measurement and control solutions for commercial farms.</span>
                </span>
                <span class="fmbr-brand__arrow" aria-hidden="true">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                    stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </label>
            </div>

            <div class="fmbr__stages">
              <article class="fmbr-stage fmbr-stage--1">
                <div class="fmbr-stage__body">
                  <span class="fmbr-stage__eyebrow"><span class="fmbr-stage__eyebrow-label">Bluelab</span><i
                      class="fmbr-stage__eyebrow-line"></i></span>
                  <span class="fm-heading "><span class="fmdm__accent">Bluelab</span></span>
                  <h3 class="fm-heading fmbr-stage__title">Trusted by growers worldwide.</h3>
                  <p class="fm-text fmab__text">Reliable and easy-to-use measurement devices for pH, EC and
                    temperature, helping you maintain the ideal growing conditions for healthier plants and higher
                    yields.
                  </p>
                  <ul class="fmbr-feats">
                    <li class="fmbr-feat">
                      <span class="fmbr-feat__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                        </svg>
                      </span>
                      <span class="fm-text fmab__text">Accurate and<br>reliable readings</span>
                    </li>
                    <li class="fmbr-feat">
                      <span class="fmbr-feat__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                          <circle cx="12" cy="12" r="3"></circle>
                          <path
                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                          </path>
                        </svg>
                      </span>
                      <span class="fm-text fmab__text">Easy to use<br>and maintain</span>
                    </li>
                    <li class="fmbr-feat">
                      <span class="fmbr-feat__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                          <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                          <polyline points="2 17 12 22 22 17"></polyline>
                          <polyline points="2 12 12 17 22 12"></polyline>
                        </svg>
                      </span>
                      <span class="fm-text fmab__text">Suitable for<br>multiple systems</span>
                    </li>
                    <li class="fmbr-feat">
                      <span class="fmbr-feat__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                          <path d="M9 12c1-2 3-3 5-3 0 2-1 4-3 5"></path>
                        </svg>
                      </span>
                      <span class="fm-text fmab__text">Used by professional<br>growers globally</span>
                    </li>
                  </ul>



                  <a href="#bluelab" class="fm-cta-btn">
                    Learn More About Bluelab
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                      stroke-linecap="round" stroke-linejoin="round">
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                      <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                  </a>
                </div>
                <img src="images/owehoi.png" alt="Greenhouse sensor and monitoring equipment among leafy crops"
                  class="fmbr-stage__photo" loading="lazy" width="1400" height="880">
              </article>

              <article class="fmbr-stage fmbr-stage--2">
                <div class="fmbr-stage__body">
                  <span class="fmbr-stage__eyebrow"><span class="fmbr-stage__eyebrow-label">Autogrow</span><i
                      class="fmbr-stage__eyebrow-line"></i></span>
                  <span class="fm-heading "><span class="fmdm__accent">Autogrow</span></span>
                  <h3 class="fm-heading fmbr-stage__title">Smart control for commercial farms.</h3>
                  <p class="fm-text fmbr-stage__text">Measurement and control solutions that help commercial growers
                    manage nutrients, irrigation and climate with confidence.</p>
                  <ul class="fmbr-feats">
                    <li class="fmbr-feat">
                      <span class="fmbr-feat__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                          <line x1="4" y1="21" x2="4" y2="14"></line>
                          <line x1="4" y1="10" x2="4" y2="3"></line>
                          <line x1="12" y1="21" x2="12" y2="12"></line>
                          <line x1="12" y1="8" x2="12" y2="3"></line>
                          <line x1="20" y1="21" x2="20" y2="16"></line>
                          <line x1="20" y1="12" x2="20" y2="3"></line>
                          <line x1="1" y1="14" x2="7" y2="14"></line>
                          <line x1="9" y1="8" x2="15" y2="8"></line>
                          <line x1="17" y1="16" x2="23" y2="16"></line>
                        </svg>
                      </span>
                      <span class="fm-text fmab__text">Precise nutrient<br>dosing control</span>
                    </li>
                    <li class="fmbr-feat">
                      <span class="fmbr-feat__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                          <path d="M2 19c2 1 4 1 6 0s4-1 6 0 4 1 6 0"></path>
                        </svg>
                      </span>
                      <span class="fm-text fmab__text">Smart irrigation<br>management</span>
                    </li>
                    <li class="fmbr-feat">
                      <span class="fmbr-feat__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M2 20h.01"></path>
                          <path d="M7 20v-4"></path>
                          <path d="M12 20v-8"></path>
                          <path d="M17 20V8"></path>
                          <path d="M22 4v16"></path>
                        </svg>
                      </span>
                      <span class="fm-text fmab__text">Remote monitoring<br>and alerts</span>
                    </li>
                    <li class="fmbr-feat">
                      <span class="fmbr-feat__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                          <polyline points="15 3 21 3 21 9"></polyline>
                          <polyline points="9 21 3 21 3 15"></polyline>
                          <line x1="21" y1="3" x2="14" y2="10"></line>
                          <line x1="3" y1="21" x2="10" y2="14"></line>
                        </svg>
                      </span>
                      <span class="fm-text fmab__text">Scalable for<br>large farms</span>
                    </li>
                  </ul>
                  <a href="#brands" class="fm-cta-btn">
                    Choose Preferred Brand
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                      stroke-linecap="round" stroke-linejoin="round">
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                      <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                  </a>
                </div>
                <img src="images/auto-fertigation.jpg"
                  alt="Automated fertigation control system installed inside a commercial greenhouse"
                  class="fmbr-stage__photo" loading="lazy" width="1400" height="880">
              </article>
            </div>

            <div class="fmbr__ranges">
              <section class="fmbr-range fmbr-range--1" aria-label="Bluelab product range">
                <header class="fmbr-range__head">
                  <span class="fmab-eyebrow">

                    Bluelab Product Range<i class="fmab-eyebrow__line"></i></span>
                  <h2 class="fm-heading ">Measuring Devices for <span class="fmrc__accent">Every Need </span> </h2>
                  <p class="fm-text fmab__text">Choose from handheld meters to continuous monitors for accurate pH,
                    EC and temperature measurement.</p>
                </header>
                <div class="fmbr-carousel" data-fmbr-slider role="region" aria-label="Bluelab product carousel">
                  <ul class="fmbr-cards" data-fmbr-track tabindex="0" aria-label="Bluelab products">
                    <li class="fmbr-card">
                      <img src="images/product-ph-pen.svg" alt="Illustration of a handheld pH meter pen"
                        class="fmbr-card__img" loading="lazy" width="400" height="560">
                      <h3 class="fm-heading fmbr-card__title">pH Pen</h3>
                      <p class="fm-text fmbr-card__text">Get quick and accurate pH measurements with the pH PenPlus. It
                        helps monitor water acidity and alkalinity, making it easy to maintain the right pH levels.</p>
                      <ul class="fmbr-chips">
                        <li class="fmbr-chip">
                          <span class="fmbr-chip__icon" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                            </svg>
                          </span>pH
                        </li>
                      </ul>


                      <a href="{{ route('contact') }}" class="fm-cta-btn">
                        Let's Talk
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                          <line x1="5" y1="12" x2="19" y2="12"></line>
                          <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                      </a>

                    </li>
                    <li class="fmbr-card">
                      <img src="images/product-ec-pen.svg" alt="Illustration of a handheld conductivity meter pen"
                        class="fmbr-card__img" loading="lazy" width="400" height="560">
                      <h3 class="fm-heading fmbr-card__title">Conductivity Pen</h3>
                      <p class="fm-text fmbr-card__text">Measure electrical conductivity (EC) accurately with the
                        Conductivity Pen. It helps monitor dissolved nutrients and salts in water for better nutrient
                        management.</p>
                      <ul class="fmbr-chips">
                        <li class="fmbr-chip">
                          <span class="fmbr-chip__icon" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M2 8c2.5-3 5.5-3 8 0s5.5 3 8 0 5.5-3 8 0"></path>
                              <path d="M2 16c2.5-3 5.5-3 8 0s5.5 3 8 0 5.5-3 8 0"></path>
                            </svg>
                          </span>EC
                        </li>
                      </ul>


                      <a href="{{ route('contact') }}" class="fm-cta-btn">
                        Let's Talk
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                          <line x1="5" y1="12" x2="19" y2="12"></line>
                          <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                      </a>
                    </li>
                    <li class="fmbr-card">
                      <img src="images/product-combo-meter.svg"
                        alt="Illustration of a handheld pH, EC and temperature meter" class="fmbr-card__img"
                        loading="lazy" width="400" height="560">
                      <h3 class="fm-heading fmbr-card__title">Combo Meter</h3>
                      <p class="fm-text fmbr-card__text">A convenient all-in-one device that measures pH, electrical
                        conductivity (EC), and temperature. It provides essential water quality readings in one compact
                        meter.</p>
                      <ul class="fmbr-chips">
                        <li class="fmbr-chip">
                          <span class="fmbr-chip__icon" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                            </svg>
                          </span>pH
                        </li>
                        <li class="fmbr-chip">
                          <span class="fmbr-chip__icon" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M2 8c2.5-3 5.5-3 8 0s5.5 3 8 0 5.5-3 8 0"></path>
                              <path d="M2 16c2.5-3 5.5-3 8 0s5.5 3 8 0 5.5-3 8 0"></path>
                            </svg>
                          </span>EC
                        </li>
                        <li class="fmbr-chip">
                          <span class="fmbr-chip__icon" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z"></path>
                            </svg>
                          </span>Temp
                        </li>
                      </ul>

                      <a href="{{ route('contact') }}" class="fm-cta-btn">
                        Let's Talk
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                          <line x1="5" y1="12" x2="19" y2="12"></line>
                          <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                      </a>
                    </li>
                    <li class="fmbr-card">
                      <img src="images/product-wall-monitor.svg"
                        alt="Illustration of a wall-mounted growing-solution monitor" class="fmbr-card__img"
                        loading="lazy" width="400" height="560">
                      <h3 class="fm-heading fmbr-card__title">Guardian Monitor</h3>
                      <p class="fm-text fmbr-card__text">Monitor pH, EC, and temperature continuously with the Guardian
                        Monitor. It helps maintain stable water conditions and supports consistent nutrient management.
                      </p>
                      <ul class="fmbr-chips">
                        <li class="fmbr-chip">
                          <span class="fmbr-chip__icon" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                            </svg>
                          </span>pH
                        </li>
                        <li class="fmbr-chip">
                          <span class="fmbr-chip__icon" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M2 8c2.5-3 5.5-3 8 0s5.5 3 8 0 5.5-3 8 0"></path>
                              <path d="M2 16c2.5-3 5.5-3 8 0s5.5 3 8 0 5.5-3 8 0"></path>
                            </svg>
                          </span>EC
                        </li>
                        <li class="fmbr-chip">
                          <span class="fmbr-chip__icon" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z"></path>
                            </svg>
                          </span>Temp
                        </li>
                      </ul>

                      <a href="{{ route('contact') }}" class="fm-cta-btn">
                        Let's Talk
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                          <line x1="5" y1="12" x2="19" y2="12"></line>
                          <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                      </a>
                    </li>
                    <li class="fmbr-card">
                      <img src="images/product-truncheon-meter.svg"
                        alt="Illustration of a long nutrient measurement meter" class="fmbr-card__img" loading="lazy"
                        width="400" height="560">
                      <h3 class="fm-heading fmbr-card__title">Truncheon Nutrient Meter</h3>
                      <p class="fm-text fmbr-card__text">Measure nutrient solution strength directly in your tank with
                        the Truncheon Nutrient Meter. It provides quick EC readings to help maintain the right nutrient
                        concentration.</p>
                      <ul class="fmbr-chips">
                        <li class="fmbr-chip">
                          <span class="fmbr-chip__icon" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M2 8c2.5-3 5.5-3 8 0s5.5 3 8 0 5.5-3 8 0"></path>
                              <path d="M2 16c2.5-3 5.5-3 8 0s5.5 3 8 0 5.5-3 8 0"></path>
                            </svg>
                          </span>EC
                        </li>
                      </ul>

                      <a href="{{ route('contact') }}" class="fm-cta-btn">
                        Let's Talk
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                          <line x1="5" y1="12" x2="19" y2="12"></line>
                          <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                      </a>
                    </li>
                  </ul>
                  <div class="fmbr-slider-controls" role="group" aria-label="Bluelab product slides">
                    <button class="fmbr-slider-controls__button" type="button" data-fmbr-prev
                      aria-label="Previous Bluelab product">
                      <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 12H5"></path>
                        <path d="m12 19-7-7 7-7"></path>
                      </svg>
                    </button>
                    <span class="fmbr-slider-controls__count" data-fmbr-count aria-live="polite">01 / 05</span>
                    <button class="fmbr-slider-controls__button" type="button" data-fmbr-next
                      aria-label="Next Bluelab product">
                      <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                      </svg>
                    </button>
                  </div>
                </div>
              </section>

              <section class="fmbr-range fmbr-range--2" aria-label="Autogrow product range">
                <header class="fmbr-range__head">
                  <span class="fmbr-eyebrow"><span class="fmbr-eyebrow__no">04</span><i
                      class="fmbr-eyebrow__line"></i><span class="fmbr-eyebrow__label">Autogrow Product
                      Range</span></span>
                  <h2 class="fm-heading fmbr-range__title">Control Solutions for Every Need</h2>
                  <p class="fm-text fmbr-range__text">Choose from sensors to complete controllers for precise nutrient,
                    irrigation and climate management.</p>
                </header>
                <div class="fmbr-carousel" data-fmbr-slider role="region" aria-label="Autogrow product carousel">
                  <ul class="fmbr-cards" data-fmbr-track tabindex="0" aria-label="Autogrow products">
                    <li class="fmbr-card">
                      <img src="images/product-dosing-controller.svg"
                        alt="Illustration of a commercial nutrient dosing controller" class="fmbr-card__img"
                        loading="lazy" width="400" height="560">
                      <h3 class="fm-heading fmbr-card__title">IntelliDose Controller</h3>
                      <p class="fm-text fmbr-card__text">Complete nutrient dosing and control.</p>
                      <ul class="fmbr-chips">
                        <li class="fmbr-chip">
                          <span class="fmbr-chip__icon" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                            </svg>
                          </span>pH
                        </li>
                        <li class="fmbr-chip">
                          <span class="fmbr-chip__icon" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M2 8c2.5-3 5.5-3 8 0s5.5 3 8 0 5.5-3 8 0"></path>
                              <path d="M2 16c2.5-3 5.5-3 8 0s5.5 3 8 0 5.5-3 8 0"></path>
                            </svg>
                          </span>EC
                        </li>
                      </ul>
                      <a href="#intellidose" class="fmbr-card__btn">
                        <span class="fmbr-card__btn-label">View Details</span>
                        <span class="fmbr-card__btn-arrow" aria-hidden="true">
                          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                          </svg>
                        </span>
                      </a>
                    </li>
                    <li class="fmbr-card">
                      <img src="images/product-multizone-controller.svg"
                        alt="Illustration of a multi-zone greenhouse controller" class="fmbr-card__img" loading="lazy"
                        width="400" height="560">
                      <h3 class="fm-heading fmbr-card__title">MultiFlex Controller</h3>
                      <p class="fm-text fmbr-card__text">Flexible multi-zone control.</p>
                      <ul class="fmbr-chips">
                        <li class="fmbr-chip">
                          <span class="fmbr-chip__icon" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                            </svg>
                          </span>pH
                        </li>
                        <li class="fmbr-chip">
                          <span class="fmbr-chip__icon" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M2 8c2.5-3 5.5-3 8 0s5.5 3 8 0 5.5-3 8 0"></path>
                              <path d="M2 16c2.5-3 5.5-3 8 0s5.5 3 8 0 5.5-3 8 0"></path>
                            </svg>
                          </span>EC
                        </li>
                        <li class="fmbr-chip">
                          <span class="fmbr-chip__icon" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z"></path>
                            </svg>
                          </span>Temp
                        </li>
                      </ul>
                      <a href="#multiflex" class="fmbr-card__btn">
                        <span class="fmbr-card__btn-label">View Details</span>
                        <span class="fmbr-card__btn-arrow" aria-hidden="true">
                          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                          </svg>
                        </span>
                      </a>
                    </li>
                    <li class="fmbr-card">
                      <img src="images/product-ph-sensor.svg" alt="Illustration of an inline pH sensor probe"
                        class="fmbr-card__img" loading="lazy" width="400" height="560">
                      <h3 class="fm-heading fmbr-card__title">pH Sensor</h3>
                      <p class="fm-text fmbr-card__text">Accurate continuous pH measurement.</p>
                      <ul class="fmbr-chips">
                        <li class="fmbr-chip">
                          <span class="fmbr-chip__icon" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                            </svg>
                          </span>pH
                        </li>
                      </ul>
                      <a href="#ag-ph-sensor" class="fmbr-card__btn">
                        <span class="fmbr-card__btn-label">View Details</span>
                        <span class="fmbr-card__btn-arrow" aria-hidden="true">
                          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                          </svg>
                        </span>
                      </a>
                    </li>
                    <li class="fmbr-card">
                      <img src="images/product-ec-sensor.svg"
                        alt="Illustration of an inline electrical conductivity sensor probe" class="fmbr-card__img"
                        loading="lazy" width="400" height="560">
                      <h3 class="fm-heading fmbr-card__title">EC Sensor</h3>
                      <p class="fm-text fmbr-card__text">Accurate continuous EC measurement.</p>
                      <ul class="fmbr-chips">
                        <li class="fmbr-chip">
                          <span class="fmbr-chip__icon" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M2 8c2.5-3 5.5-3 8 0s5.5 3 8 0 5.5-3 8 0"></path>
                              <path d="M2 16c2.5-3 5.5-3 8 0s5.5 3 8 0 5.5-3 8 0"></path>
                            </svg>
                          </span>EC
                        </li>
                      </ul>
                      <a href="#ag-ec-sensor" class="fmbr-card__btn">
                        <span class="fmbr-card__btn-label">View Details</span>
                        <span class="fmbr-card__btn-arrow" aria-hidden="true">
                          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                          </svg>
                        </span>
                      </a>
                    </li>
                    <li class="fmbr-card">
                      <img src="images/product-sensor-kit.svg"
                        alt="Illustration of a set of pH, EC and temperature sensor probes" class="fmbr-card__img"
                        loading="lazy" width="400" height="560">
                      <h3 class="fm-heading fmbr-card__title">Sensor Pack</h3>
                      <p class="fm-text fmbr-card__text">Complete pH, EC and temperature kit.</p>
                      <ul class="fmbr-chips">
                        <li class="fmbr-chip">
                          <span class="fmbr-chip__icon" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                            </svg>
                          </span>pH
                        </li>
                        <li class="fmbr-chip">
                          <span class="fmbr-chip__icon" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M2 8c2.5-3 5.5-3 8 0s5.5 3 8 0 5.5-3 8 0"></path>
                              <path d="M2 16c2.5-3 5.5-3 8 0s5.5 3 8 0 5.5-3 8 0"></path>
                            </svg>
                          </span>EC
                        </li>
                        <li class="fmbr-chip">
                          <span class="fmbr-chip__icon" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z"></path>
                            </svg>
                          </span>Temp
                        </li>
                      </ul>
                      <a href="#ag-sensor-pack" class="fmbr-card__btn">
                        <span class="fmbr-card__btn-label">View Details</span>
                        <span class="fmbr-card__btn-arrow" aria-hidden="true">
                          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                          </svg>
                        </span>
                      </a>
                    </li>
                  </ul>
                  <div class="fmbr-slider-controls" role="group" aria-label="Autogrow product slides">
                    <button class="fmbr-slider-controls__button" type="button" data-fmbr-prev
                      aria-label="Previous Autogrow product">
                      <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 12H5"></path>
                        <path d="m12 19-7-7 7-7"></path>
                      </svg>
                    </button>
                    <span class="fmbr-slider-controls__count" data-fmbr-count aria-live="polite">01 / 05</span>
                    <button class="fmbr-slider-controls__button" type="button" data-fmbr-next
                      aria-label="Next Autogrow product">
                      <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                      </svg>
                    </button>
                  </div>
                </div>
              </section>
            </div>
          </div>

        </div>
        <!-- next block goes here -->
      </section>










      <!-- ===================================================================
         04. FIND THE RIGHT CROP FOR YOUR FARM SECTION (.fmrc)
         =================================================================== -->
      <section class="fmrc" id="find-right-crop">
        <div class="fmrc__inner">
          <div class="fmrc__grid">

            <!-- LEFT: Intro Header -->
            <div class="fmrc-intro">

              <span class="fmab-eyebrow">CHOOSE THE RIGHT DEVICE<i class="fmab-eyebrow__line"></i></span>

              <h2 class="fmrc__title">
                Find the Right Instrument for <br>
                <span class="fmrc__accent">Your Farm</span>
              </h2>

              <p class="fm-text fmab__text">
                Select based on what you need to measure and how you want to use the data.
              </p>
            </div>

            <!-- CENTER: 6 Factor Cards in 3 Rows with Horizontal Dividers -->
            <div class="fmrc-factors">
              <!-- Row 1: Location & Climate -->
              <div class="fmrc-factors__row">
                <article class="fmrc-factor">
                  <span class="fmrc-factor__disc" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 1 1 16 0Z" />
                      <circle cx="12" cy="10" r="3" />
                    </svg>
                  </span>
                  <div class="fmrc-factor__body">
                    <h3 class="fmrc-factor__title">Water Source</h3>
                    <p class="fmrc-factor__text">Check water quality for better crop growth.</p>
                  </div>
                </article>

                <article class="fmrc-factor">
                  <span class="fmrc-factor__disc" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="4" />
                      <line x1="12" y1="2" x2="12" y2="4" />
                      <line x1="12" y1="20" x2="12" y2="22" />
                      <line x1="4.93" y1="4.93" x2="6.34" y2="6.34" />
                      <line x1="17.66" y1="17.66" x2="19.07" y2="19.07" />
                      <line x1="2" y1="12" x2="4" y2="12" />
                      <line x1="20" y1="12" x2="22" y2="12" />
                      <line x1="4.93" y1="19.07" x2="6.34" y2="17.66" />
                      <line x1="17.66" y1="6.34" x2="19.07" y2="4.93" />
                    </svg>
                  </span>
                  <div class="fmrc-factor__body">
                    <h3 class="fmrc-factor__title">Nutrient Solution</h3>
                    <p class="fmrc-factor__text">Maintain balanced nutrient levels.</p>
                  </div>
                </article>
              </div>

              <!-- Row 2: Water & Market Access -->
              <div class="fmrc-factors__row">
                <article class="fmrc-factor">
                  <span class="fmrc-factor__disc" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M12 2.5C12 2.5 6 10 6 15a6 6 0 0 0 12 0c0-5-6-12.5-6-12.5z" />
                      <path d="M9.5 14c.3 1.5 1.5 2.7 3 3" />
                    </svg>
                  </span>
                  <div class="fmrc-factor__body">
                    <h3 class="fmrc-factor__title">Drainage / Run-off</h3>
                    <p class="fmrc-factor__text">Monitor pH and EC in drainage water.</p>
                  </div>
                </article>

                <article class="fmrc-factor">
                  <span class="fmrc-factor__disc" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round"
                      stroke-linejoin="round">
                      <rect x="3" y="14" width="4" height="7" rx="1" />
                      <rect x="10" y="9" width="4" height="12" rx="1" />
                      <rect x="17" y="4" width="4" height="17" rx="1" />
                    </svg>
                  </span>
                  <div class="fmrc-factor__body">
                    <h3 class="fmrc-factor__title">Continuous Monitoring</h3>
                    <p class="fmrc-factor__text">Track growing conditions in real time.</p>
                  </div>
                </article>
              </div>

              <!-- Row 3: Investment & Operating Capability -->
              <div class="fmrc-factors__row">
                <article class="fmrc-factor">
                  <span class="fmrc-factor__disc" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round"
                      stroke-linejoin="round">
                      <ellipse cx="12" cy="6" rx="8" ry="3" />
                      <path d="M4 6v5c0 1.66 3.58 3 8 3s8-1.34 8-3V6" />
                      <path d="M4 11v5c0 1.66 3.58 3 8 3s8-1.34 8-3v-5" />
                      <path d="M4 16v2c0 1.66 3.58 3 8 3s8-1.34 8-3v-2" />
                    </svg>
                  </span>
                  <div class="fmrc-factor__body">
                    <h3 class="fmrc-factor__title">Crop Health</h3>
                    <p class="fmrc-factor__text">Support healthier crops through accurate measurements.</p>
                  </div>
                </article>

                <article class="fmrc-factor">
                  <span class="fmrc-factor__disc" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                      <circle cx="9" cy="7" r="4" />
                      <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                      <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                  </span>
                  <div class="fmrc-factor__body">
                    <h3 class="fmrc-factor__title">Nutrient Management</h3>
                    <p class="fmrc-factor__text">Improve nutrient efficiency and reduce waste.</p>
                  </div>
                </article>
              </div>
            </div>

            <!-- RIGHT: CTA Card -->
            <aside class="fmrc-card">
              <span class="fmrc-card__bar" aria-hidden="true"></span>
              <h3 class="fmrc-card__title">Not Sure Which Device Is Right for You?</h3>
              <p class="fmrc-card__text">Talk to our experts for personalised recommendations
                based on your crops, system and goals.</p>


              <a href="{{ route('services.plan-farm') }}" class="fm-cta-btn">
                Talk to an Expert
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                  stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </a>

              <!-- Subtle watermark seal -->
              <svg class="fmrc-card__seal" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2"
                aria-hidden="true">
                <circle cx="50" cy="50" r="44" stroke-dasharray="4 3" />
                <circle cx="50" cy="50" r="32" />
                <path d="M50 26v48M26 50h48" stroke-width="1.5" />
              </svg>
            </aside>

          </div>
        </div>
      </section>

    </main>

    
  </div>
@endsection
