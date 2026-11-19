@extends('layouts.app')

@section('title', 'Protected Farming Solutions')
@section('body_class', 'protected-page fruits-vegi-page')

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
           02. Crop Overview & Varieties
           =================================================================== -->
      <section class="fmcv" id="crop-varieties" data-fmcv>
        <div class="fmcv__inner">

          <header class="fmcv__head">
			
            <span class="fmcv-eyebrow">Crop Overview &amp; Varieties<i class="fmcv-eyebrow__line"></i></span>
           
            <h2 class="fm-heading fmcv__title">Crop Overview &amp; <span class="fmdm__accent">Varieties</span> </h2>
            <p class="fm-text fmcv__text">Explore multiple varieties to suit different markets, growing systems and commercial goals.</p>
          </header>

          <div class="fmcv__stage">

            <button type="button" class="fmcv-arrow fmcv-arrow--prev" data-fmcv-prev aria-label="Previous crop">
              <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <path d="M15 18l-6-6 6-6" />
              </svg>
            </button>

            <ul class="fmcv-track" data-fmcv-track role="group" aria-roledescription="carousel"
              aria-label="Crop varieties">

              <li class="fmcv-item" data-fmcv-item data-fmcv-name="Capsicum">
                <button type="button" class="fmcv-item__btn" tabindex="-1">
                  <span class="fmcv-item__disc"><img src="images/crop-capsicum.png" alt="Yellow capsicums"
                      loading="lazy" width="600" height="600"></span>
                  <span class="fmcv-item__label">Capsicum</span>
                </button>
              </li>

              <li class="fmcv-item" data-fmcv-item data-fmcv-name="Cucumber">
                <button type="button" class="fmcv-item__btn" tabindex="-1">
                  <span class="fmcv-item__disc"><img src="images/crop-cucumber.png" alt="Fresh cucumbers" loading="lazy"
                      width="600" height="600"></span>
                  <span class="fmcv-item__label">Cucumber</span>
                </button>
              </li>

              <li class="fmcv-item" data-fmcv-item data-fmcv-name="Cherry Tomato">
                <button type="button" class="fmcv-item__btn" tabindex="-1">
                  <span class="fmcv-item__disc"><img src="images/crop-cherry.png" alt="Cherry tomatoes" loading="lazy"
                      width="600" height="600"></span>
                  <span class="fmcv-item__label">Cherry Tomato</span>
                </button>
              </li>

              <li class="fmcv-item is-active" data-fmcv-item data-fmcv-name="Tomato">
                <button type="button" class="fmcv-item__btn" tabindex="0" aria-current="true">
                  <span class="fmcv-item__disc"><img src="images/crop-tomato.png" alt="Red tomatoes" loading="eager"
                      width="600" height="600"></span>
                  <span class="fmcv-item__label">Tomato</span>
                </button>
              </li>

              <li class="fmcv-item" data-fmcv-item data-fmcv-name="Lettuce">
                <button type="button" class="fmcv-item__btn" tabindex="-1">
                  <span class="fmcv-item__disc"><img src="images/crop-lettuce.png" alt="Green lettuce" loading="lazy"
                      width="600" height="600"></span>
                  <span class="fmcv-item__label">Lettuce</span>
                </button>
              </li>

              <li class="fmcv-item" data-fmcv-item data-fmcv-name="Brinjal">
                <button type="button" class="fmcv-item__btn" tabindex="-1">
                  <span class="fmcv-item__disc"><img src="images/crop-brinjal.png" alt="Purple brinjal" loading="lazy"
                      width="600" height="600"></span>
                  <span class="fmcv-item__label">Brinjal</span>
                </button>
              </li>

              <li class="fmcv-item" data-fmcv-item data-fmcv-name="Color Capsicum">
                <button type="button" class="fmcv-item__btn" tabindex="-1">
                  <span class="fmcv-item__disc"><img src="images/crop-color-capsicum.png" alt="Red and yellow capsicums"
                      loading="lazy" width="600" height="600"></span>
                  <span class="fmcv-item__label">Color Capsicum</span>
                </button>
              </li>

            </ul>

            <button type="button" class="fmcv-arrow fmcv-arrow--next" data-fmcv-next aria-label="Next crop">
              <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <path d="M9 18l6-6-6-6" />
              </svg>
            </button>
          </div>

          <div class="fmcv-dots" data-fmcv-dots></div>
          <p class="fmcv-sr" role="status" aria-live="polite" data-fmcv-status></p>
        </div>
      </section>

	      <!-- section 2 -->

      <!-- ===================================================================
           05. Our International Approach: Global Knowledge. Local Solutions.
           =================================================================== -->
      <section class="fmia" id="international-approach">
        <div class="fmia__inner">

          <div class="fmia__content">
			
         <span class="fmab-eyebrow">GROWING REQUIREMENTS<i class="fmab-eyebrow__line"></i></span>
            <h2 class="fm-heading fmia__title">Ideal Growing   <br> <span class="fmdm__accent">Configuration</span></h2>
            <p class="fm-text fmia__text">A recommended setup for high-yield and consistent quality production.</p>
         

          <a href="#international-project" class="fm-cta-btn fmia__btn">
            Discuss Your International Project
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
          </div>

          <figure class="fmia__media">
            <picture>
              <source media="(max-width: 599px)" srcset="images/international-approach-mobile.jpg" width="1000"
                height="1000">
              <img src="images/ff1.png"
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
                <h3 class="fm-heading fmia-item__title">Growing System</h3>
                <p class="fm-text fmia-item__text">Soil / Cocopeat / Hydroponics (Drip, NFT, DFT)</p>
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
                <h3 class="fm-heading fmia-item__title">Water Requirements</h3>
                <p class="fm-text fmia-item__text">Precision irrigation and fertigation</p>
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
                <h3 class="fm-heading fmia-item__title">Basic Operating Needs</h3>
                <p class="fm-text fmia-item__text">Climate control, power, labour and daily maintenance</p>
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

 
   <!-- section3 -->

      <!-- ===================================================================
           What can you monitor & control? Complete Control at Every Stage
           =================================================================== -->
      <section class="fmmc" id="monitor-control">

        <!-- background photo: fills the whole banner (decorative) -->
        <picture class="fmmc__bg">
          <img class="fmmc__bg-img" src="images/gg4.png" alt="" aria-hidden="true" loading="lazy" width="1824"
            height="862">
        </picture>

        <div class="fmmc__inner">
          <div class="fmmc__content">

            <span class="fmmc-eyebrow"><span>Market Opportunity</span><i
                class="fmmc-eyebrow__line"></i></span>

            <h2 class="fm-heading fmmc__title">Strong Demand Across <br> Multiple Market Channels.</h2>

            <p class="fm-text fmmc__text">Leafy greens are a high-value, high-turnover crop with growing demand across retail, food service and institutional markets.</p>

            <ul class="fmmc-steps">
              <li class="fmmc-step">
                <a class="fmmc-step__link is-active" href="#irrigation" aria-current="true">
                  <span class="fmmc-step__disc" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                    </svg>
                  </span>
                  <span class="fmmc-step__label">Retail</span>
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
                  <span class="fmmc-step__label">HoReCa</span>
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
                  <span class="fmmc-step__label">Modern Trade</span>
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
                  <span class="fmmc-step__label">Direct Subscription</span>
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
                  <span class="fmmc-step__label">Premium Local Supply</span>
                </a>
              </li>
            </ul>

          </div>
        </div>
      </section>

  


     <!-- ===================================================================
           05. Investment & Business Potential: Project Your Returns
           =================================================================== -->
      <section class="fmpr" id="project-returns" data-fmpr>
        <div class="fmpr__inner">

          <!-- Left: Headline & Button -->
          <div class="fmpr__intro">

		
          <span class="fmab-eyebrow">Investment &amp; Business Potential<i class="fmab-eyebrow__line"></i></span>
            <h2 class="fm-heading fmpr__title">Project Your<br>Returns</h2>
            <p class="fm-text fmpr__desc">Explore indicative financials based on your preferred crop and farm size.</p>
          

            <a href="{{ route('services.plan-farm') }}" class="fmpr-btn">
              <span>View Detailed Financial Model</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
          </div>

          <!-- Right: Controls & Metrics -->
          <div class="fmpr__calc">

            <!-- Controls: Crop & Farm Size -->
            <div class="fmpr__controls">

              <!-- Select Crop -->
              <div class="fmpr-control-group">
                <label class="fmpr-control-label" for="fmprCrop">Select Crop</label>
                <div class="fmpr-crop-select-wrap">
                  <span class="fmpr-crop-icon" aria-hidden="true" data-fmpr-crop-icon>🍅</span>
                  <select id="fmprCrop" class="fmpr-crop-select" data-fmpr-crop aria-label="Select Crop">
                    <option value="tomato" data-icon="🍅" selected>Tomato</option>
                    <option value="capsicum" data-icon="🫑">Capsicum</option>
                    <option value="cucumber" data-icon="🥒">Cucumber</option>
                    <option value="lettuce" data-icon="🥬">Lettuce</option>
                  </select>
                  <svg class="fmpr-select-caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M6 9l6 6 6-6" />
                  </svg>
                </div>
              </div>

              <!-- Select Farm Size -->
              <div class="fmpr-control-group">
                <span class="fmpr-control-label">Select Farm Size</span>
                <div class="fmpr-pills" role="radiogroup" aria-label="Select Farm Size" data-fmpr-sizes>
                  <button type="button" class="fmpr-pill" data-fmpr-size="0.25" role="radio" aria-checked="false">0.25 Acre</button>
                  <button type="button" class="fmpr-pill is-active" data-fmpr-size="0.5" role="radio" aria-checked="true">0.5 Acre</button>
                  <button type="button" class="fmpr-pill" data-fmpr-size="1" role="radio" aria-checked="false">1 Acre</button>
                  <button type="button" class="fmpr-pill" data-fmpr-size="2" role="radio" aria-checked="false">2 Acre</button>
                  <button type="button" class="fmpr-pill" data-fmpr-size="5" role="radio" aria-checked="false">5 Acre</button>
                </div>
              </div>

            </div>

            <!-- 5 Financial Metric Cards -->
            <div class="fmpr__metrics" data-fmpr-metrics>

              <!-- Metric 1: Total Investment -->
              <div class="fmpr-card">
                <div class="fmpr-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <ellipse cx="12" cy="6" rx="8" ry="3" />
                    <path d="M4 6v6c0 1.66 3.58 3 8 3s8-1.34 8-3V6" />
                    <path d="M4 12v6c0 1.66 3.58 3 8 3s8-1.34 8-3v-6" />
                  </svg>
                </div>
                <div class="fmpr-card__content">
                  <strong class="fmpr-card__val" data-fmpr-val="investment">₹ 1.8 Cr</strong>
                  <span class="fmpr-card__label">Total Investment</span>
                </div>
              </div>

              <!-- Metric 2: Annual Production -->
              <div class="fmpr-card">
                <div class="fmpr-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22v-9" />
                    <path d="M9 13V8a3 3 0 0 1 6 0v5" />
                    <path d="M6 13a6 6 0 0 1 12 0" />
                  </svg>
                </div>
                <div class="fmpr-card__content">
                  <strong class="fmpr-card__val" data-fmpr-val="production">280 MT</strong>
                  <span class="fmpr-card__label">Annual Production</span>
                </div>
              </div>

              <!-- Metric 3: Annual Revenue -->
              <div class="fmpr-card">
                <div class="fmpr-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                    <polyline points="16 7 22 7 22 13" />
                    <line x1="2" y1="20" x2="22" y2="20" />
                  </svg>
                </div>
                <div class="fmpr-card__content">
                  <strong class="fmpr-card__val" data-fmpr-val="revenue">₹ 3.6 Cr</strong>
                  <span class="fmpr-card__label">Annual Revenue</span>
                </div>
              </div>

              <!-- Metric 4: Estimated ROI -->
              <div class="fmpr-card">
                <div class="fmpr-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="5" x2="5" y2="19" />
                    <circle cx="7.5" cy="7.5" r="2.5" />
                    <circle cx="16.5" cy="16.5" r="2.5" />
                  </svg>
                </div>
                <div class="fmpr-card__content">
                  <strong class="fmpr-card__val" data-fmpr-val="roi">38%</strong>
                  <span class="fmpr-card__label">Estimated ROI</span>
                </div>
              </div>

              <!-- Metric 5: Payback Period -->
              <div class="fmpr-card">
                <div class="fmpr-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                    <line x1="16" y1="2" x2="16" y2="6" />
                    <line x1="8" y1="2" x2="8" y2="6" />
                    <line x1="3" y1="10" x2="21" y2="10" />
                  </svg>
                </div>
                <div class="fmpr-card__content">
                  <strong class="fmpr-card__val" data-fmpr-val="payback">18–24 Months</strong>
                  <span class="fmpr-card__label">Payback Period</span>
                </div>
              </div>

            </div>

          </div>

        </div>
      </section>
@endsection
