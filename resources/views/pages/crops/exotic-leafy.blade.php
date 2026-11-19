@extends('layouts.app')

@section('title', 'Protected Farming Solutions')
@section('body_class', 'protected-page')

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
           04. Commercial & Operational Considerations (.fmcc)
           =================================================================== -->
      <section class="fmcc" id="commercial-considerations">
        <div class="fmcc__inner">

          <header class="fmcc__head">
            <span class="fmcc-eyebrow"><span class="fmcc-eyebrow__no">04</span><i class="fmcc-eyebrow__line"></i><span class="fmcc-eyebrow__label">Commercial &amp; Operational Considerations</span></span>
            <h2 class="fm-heading fmcc__title">Plan for Sustainable<br>Profitability.</h2>
            <p class="fm-text fmcc__text">Key factors to consider for successful operation and long-term returns.</p>
          </header>

          <ul class="fmcc-facts">
            <li class="fmcc-fact">
              <span class="fmcc-fact__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/>
                  <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
                </svg>
              </span>
              <h3 class="fmcc-fact__title">Crop Cycle</h3>
              <p class="fm-text fmcc-fact__text">Varies by crop<br>(3&ndash;9 months)</p>
            </li>
            <li class="fmcc-fact">
              <span class="fmcc-fact__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3 9l2-5h14l2 5"/>
                  <path d="M21 9v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9"/>
                  <path d="M3 9h18"/>
                  <path d="M9 21V12h6v9"/>
                </svg>
              </span>
              <h3 class="fmcc-fact__title">Market Channels</h3>
              <p class="fm-text fmcc-fact__text">Local, domestic &amp; export markets</p>
            </li>
            <li class="fmcc-fact">
              <span class="fmcc-fact__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="7" r="4"/>
                  <path d="M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"/>
                </svg>
              </span>
              <h3 class="fmcc-fact__title">Labour Requirement</h3>
              <p class="fm-text fmcc-fact__text">Skilled &amp; semi-skilled workforce</p>
            </li>
            <li class="fmcc-fact">
              <span class="fmcc-fact__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/>
                </svg>
              </span>
              <h3 class="fmcc-fact__title">Water &amp; Power</h3>
              <p class="fm-text fmcc-fact__text">Reliable supply essential</p>
            </li>
            <li class="fmcc-fact">
              <span class="fmcc-fact__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                  <line x1="12" y1="8" x2="12" y2="12"/>
                  <line x1="12" y1="16" x2="12.01" y2="16"/>
                </svg>
              </span>
              <h3 class="fmcc-fact__title">Key Risks</h3>
              <p class="fm-text fmcc-fact__text">Market price fluctuation, disease outbreaks, input cost</p>
            </li>
          </ul>

          <div class="fmcc-band">
            <div class="fmcc-band__info">
              <h3 class="fmcc-band__title">Suitable Crops</h3>
              <p class="fm-text fmcc-band__text">Ideal for high-value crops with strong market demand.</p>
            </div>

            <button type="button" class="fmcc-nav fmcc-nav--prev" aria-label="Previous crops" aria-controls="fmcc-track">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
            </button>

            <ul class="fmcc-track" id="fmcc-track" role="region" aria-label="Suitable crops" tabindex="0">
              <li class="fmcc-crop">
                <img src="images/tomatoo.webp" alt="Ripe red tomatoes on the vine" class="fmcc-crop__img" loading="lazy" width="400" height="290">
                <span class="fmcc-crop__label">Tomato</span>
              </li>
              <li class="fmcc-crop">
                <img src="images/farm1.jpeg" alt="Crisp green capsicum bell peppers" class="fmcc-crop__img" loading="lazy" width="400" height="290">
                <span class="fmcc-crop__label">Capsicum</span>
              </li>
              <li class="fmcc-crop">
                <img src="images/gfar.png" alt="Fresh green cucumbers on the plant" class="fmcc-crop__img" loading="lazy" width="400" height="290">
                <span class="fmcc-crop__label">Cucumber</span>
              </li>
              <li class="fmcc-crop">
                <img src="images/pp-nvph.jpg" alt="Vibrant yellow and red bell peppers" class="fmcc-crop__img" loading="lazy" width="400" height="290">
                <span class="fmcc-crop__label">Color Capsicum</span>
              </li>
              <li class="fmcc-crop">
                <img src="images/strobarry.webp" alt="Sweet red strawberries on the vine" class="fmcc-crop__img" loading="lazy" width="400" height="290">
                <span class="fmcc-crop__label">Strawberry</span>
              </li>
              <li class="fmcc-crop">
                <img src="images/crop-leafy.jpg" alt="Fresh tender leafy lettuce greens" class="fmcc-crop__img" loading="lazy" width="400" height="290">
                <span class="fmcc-crop__label">Leafy Greens</span>
              </li>
              <li class="fmcc-crop">
                <img src="images/farm4.jpeg" alt="Tender farm fresh green zucchini" class="fmcc-crop__img" loading="lazy" width="400" height="290">
                <span class="fmcc-crop__label">Zucchini</span>
              </li>
              <li class="fmcc-crop">
                <img src="images/crop-fruit.jpg" alt="Juicy ripe cherry tomatoes on truss" class="fmcc-crop__img" loading="lazy" width="400" height="290">
                <span class="fmcc-crop__label">Cherry Tomato</span>
              </li>
            </ul>

            <button type="button" class="fmcc-nav fmcc-nav--next" aria-label="Next crops" aria-controls="fmcc-track">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </button>
          </div>

        </div>
        <!-- next block goes here -->
      </section>

     
      <section class="fmes" id="complete-ecosystem">
        <div class="fmes__inner">

          <!-- COLUMN 1: text -->
          <div class="fmes__content">
            <span class="fmes-eyebrow"><i class="fmes-eyebrow__line"></i>The Complete Ecosystem</span>

            <h2 class="fm-heading ">A successful <br>farm is an <br><span class="fmdm__accent">integrated system.</span>
            </h2>

            <p class="fm-text ">Protected structures, growing systems, crop solutions and automation work
              together to create the right environment, higher productivity and better commercial returns.</p>


            <a href="#solutions" class="fm-cta-btn">
              Explore Each Solution
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </a>
          </div>

          <!-- COLUMN 2: ONE illustration (the 4 floating layers: greenhouse, plant beds, crop rows, automation room) -->
          <figure class="fmes__media">
            <img src="images/protected.png"
              alt="Four stacked layers of a farm: a greenhouse, hydroponic beds, tomato crops and automation equipment"
              class="fmes__img" loading="eager" width="900" height="1150">
          </figure>

          <!-- COLUMN 3: timeline -->
          <ol class="fmes-list">

            <li class="fmes-item">
              <i class="fmes-item__link" aria-hidden="true"></i>
              <span class="fmes-item__icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M3 10.5L12 3.5l9 7v10H3v-10z" />
                  <line x1="3" y1="10.5" x2="21" y2="10.5" />
                  <line x1="7.5" y1="10.5" x2="7.5" y2="20.5" />
                  <line x1="12" y1="10.5" x2="12" y2="20.5" />
                  <line x1="16.5" y1="10.5" x2="16.5" y2="20.5" />
                </svg>
              </span>
              <div class="fmes-item__body">
                <span class="fmes-item__no">01</span>
                <h3 class="fmes-item__title">Protected Structures</h3>
                <p class="fm-text fmes-item__text">Create the right environment for year-round cultivation.</p>
              </div>
            </li>

            <li class="fmes-item">
              <i class="fmes-item__link" aria-hidden="true"></i>
              <span class="fmes-item__icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M12 19V11" />
                  <path d="M12 15c-2.5 0-4.5-1.5-4.5-3.5s2-3.5 4.5-1.5" />
                  <path d="M12 11c1-3 3.5-5 5.5-5 0 2.5-1.5 5-5.5 5z" />
                  <path d="M6 20c1.5-1.5 3.5-2 6-2s4.5.5 6 2" />
                </svg>
              </span>
              <div class="fmes-item__body">
                <span class="fmes-item__no">02</span>
                <h3 class="fmes-item__title">Growing Systems</h3>
                <p class="fm-text fmes-item__text">Manage the root zone for healthier and faster growth.</p>
              </div>
            </li>

            <li class="fmes-item">
              <i class="fmes-item__link" aria-hidden="true"></i>
              <span class="fmes-item__icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <rect x="5" y="17" width="14" height="4" rx="1" />
                  <line x1="12" y1="17" x2="12" y2="7.5" />
                  <path d="M12 13.5c-2.5 0-4-1.2-4-3 0-2 2-2.5 4-1" />
                  <path d="M12 11.5c2.5 0 4-1.2 4-3 0-2-2-2.5-4-1" />
                  <circle cx="12" cy="6" r="1.5" />
                </svg>
              </span>
              <div class="fmes-item__body">
                <span class="fmes-item__no">03</span>
                <h3 class="fmes-item__title">Crop Solutions</h3>
                <p class="fm-text fmes-item__text">Select the right crops and varieties for better yields and quality.
                </p>
              </div>
            </li>

            <li class="fmes-item">
              <i class="fmes-item__link" aria-hidden="true"></i>
              <span class="fmes-item__icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <circle cx="12" cy="12" r="3.2" />
                  <path
                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 1 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 1 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 1 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 1 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z" />
                </svg>
              </span>
              <div class="fmes-item__body">
                <span class="fmes-item__no">04</span>
                <h3 class="fmes-item__title">Automation Solutions</h3>
                <p class="fm-text fmes-item__text">Improve precision, monitoring and control for greater efficiency.</p>
              </div>
            </li>

          </ol>
        </div>
        <!-- complete ecosystem section end -->
      </section>


         <!-- ===================================================================
           What can you monitor & control? Complete Control at Every Stage
           =================================================================== -->
      <section class="fmmc" id="monitor-control">

        <!-- background photo: fills the whole banner (decorative) -->
        <picture class="fmmc__bg">
          <img class="fmmc__bg-img" src="images/automatins.png" alt="" aria-hidden="true" loading="lazy" width="1824"
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
           05. Investment & Business Potential: Project Your Returns
           =================================================================== -->
      <section class="fmpr" id="project-returns" data-fmpr>
        <div class="fmpr__inner">

          <!-- Left: Headline & Button -->
          <div class="fmpr__intro">

		
          <span class="fmab-eyebrow">Investment &amp; Business Potential<i class="fmab-eyebrow__line"></i></span>
            <h2 class="fm-heading fmpr__title">Project Your<br>Returns</h2>
            <p class="fm-text fmpr__desc">Explore indicative financials based on your preferred crop and farm size.</p>
          

            

            <a href="{{ route('services.plan-farm') }}" class="fm-cta-btn">
             View Detailed Financial Model
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
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
