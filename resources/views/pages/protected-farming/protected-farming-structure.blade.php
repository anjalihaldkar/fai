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
           Grow Better in <span class="fmdm__accent">Every Season.</span>
          </h1>

          <p class="fm-text fmab__text">
            Enhance crop quality and productivity with modern protected farming solutions
             designed for controlled environments and sustainable agriculture.
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


    <!-- MAIN CONTENT GOES HERE -->
    <main>

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

      <section class="fmps" id="protected-structures">
        <div class="fmps__inner">

          <div class="fmps__content">
            <span class="fmab-eyebrow">Protected Structures<i class="fmab-eyebrow__line"></i></span>
            <h2 class="fm-heading ">Protection <br>starts with the <br> <span class="fmdm__accent">right structure.</span></h2>
            <p class="fm-text ">Engineered growing environments that protect your crops and create the right
              conditions for better growth, higher productivity and long-term sustainability.</p>
          </div>

          <div class="fmps-navigation">
          <ol class="fmps-list" role="tablist" aria-label="Protected structure types" aria-orientation="vertical">
            <li class="fmps-item fmps-item--active" role="presentation">
              <button class="fmps-item__trigger" id="fmps-tab-1" type="button" role="tab" aria-selected="true"
                aria-controls="fmps-image-panel" tabindex="0" data-image="images/new3.png"
                data-alt="Naturally ventilated polyhouse with crops growing inside">
                <span class="fmps-item__no">01</span>
                <span class="fmps-item__body">
                  <span class="fmps-item__title" role="heading" aria-level="3">Naturally ventilated polyhouses</span>
                  <span class="fm-text fmps-item__text">Reliable protection with natural airflow.</span>
                </span>
              </button>
            </li>
            <li class="fmps-item" role="presentation">
              <button class="fmps-item__trigger" id="fmps-tab-2" type="button" role="tab" aria-selected="false"
                aria-controls="fmps-image-panel" tabindex="-1" data-image="images/COLD.png"
                data-alt="Climate-controlled greenhouse operating in a cold mountain climate">
                <span class="fmps-item__no">02</span>
                <span class="fmps-item__body">
                  <span class="fmps-item__title" role="heading" aria-level="3">Climate-controlled greenhouses</span>
                  <span class="fm-text fmps-item__text">Managed environments for precise growing conditions.</span>
                </span>
              </button>
            </li>
            <li class="fmps-item" role="presentation">
              <button class="fmps-item__trigger" id="fmps-tab-3" type="button" role="tab" aria-selected="false"
                aria-controls="fmps-image-panel" tabindex="-1" data-image="images/banner2.jpeg"
                data-alt="Agricultural growing rows beneath protective covers at sunset">
                <span class="fmps-item__no">03</span>
                <span class="fmps-item__body">
                  <span class="fmps-item__title" role="heading" aria-level="3">Shade-net structures</span>
                  <span class="fm-text fmps-item__text">Cost-effective protection with controlled sunlight
                    exposure.</span>
                </span>
              </button>
            </li>
            <li class="fmps-item" role="presentation">
              <button class="fmps-item__trigger" id="fmps-tab-4" type="button" role="tab" aria-selected="false"
                aria-controls="fmps-image-panel" tabindex="-1" data-image="images/owehoi.png"
                data-alt="Greenhouse equipment and systems supporting protected crop production">
                <span class="fmps-item__no">04</span>
                <span class="fmps-item__body">
                  <span class="fmps-item__title" role="heading" aria-level="3">Structure components &amp; systems</span>
                  <span class="fm-text fmps-item__text">Designed for durability, stability, and performance.</span>
                </span>
              </button>
            </li>
            <li class="fmps-item" role="presentation">
              <button class="fmps-item__trigger" id="fmps-tab-5" type="button" role="tab" aria-selected="false"
                aria-controls="fmps-image-panel" tabindex="-1" data-image="images/img-3.png"
                data-alt="Illustrated farm layout showing a custom protected agriculture design">
                <span class="fmps-item__no">05</span>
                <span class="fmps-item__body">
                  <span class="fmps-item__title" role="heading" aria-level="3">Custom design &amp; engineering</span>
                  <span class="fm-text fmps-item__text">Tailored structures for your crop and location.</span>
                </span>
              </button>
            </li>
          </ol>

          <div class="fmps-slider-controls" role="group" aria-label="Protected structure slides" hidden>
            <button class="fmps-slider-controls__button" type="button" data-fmps-prev
              aria-label="Previous protected structure">
              <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 12H5"></path>
                <path d="m12 19-7-7 7-7"></path>
              </svg>
            </button>
            <span class="fmps-slider-controls__count" data-fmps-count aria-live="polite">01 / 05</span>
            <button class="fmps-slider-controls__button" type="button" data-fmps-next
              aria-label="Next protected structure">
              <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path>
              </svg>
            </button>
          </div>
          </div>

          <figure class="fmps__media" id="fmps-image-panel" role="tabpanel" aria-labelledby="fmps-tab-1" tabindex="0">
            <img src="images/new3.png" alt="Naturally ventilated polyhouse with crops growing inside" class="fmps__img"
              id="fmps-image" loading="eager" width="1433" height="1098">
            <ul class="fmps-benefits">
              <li class="fmps-benefit">
                <span class="fmps-benefit__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M11 20A7 7 0 0 1 4 13C4 7 11 3 20 3c0 9-4 17-9 17Z" />
                    <path d="M4 13c7 0 11 3 16 7" />
                  </svg>
                </span>
                <h3 class="fmps-benefit__title">Better crop protection</h3>
                <p class="fm-text fmps-benefit__text">Reduced impact from weather, pests and external stress.</p>
              </li>
              <li class="fmps-benefit">
                <span class="fmps-benefit__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" />
                    <path d="M7 19v-4M12 19v-6M17 19v-2" />
                  </svg>
                </span>
                <h3 class="fmps-benefit__title">Stable growing environment</h3>
                <p class="fm-text fmps-benefit__text">More consistent temperature, humidity and light conditions.</p>
              </li>
              <li class="fmps-benefit">
                <span class="fmps-benefit__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <circle cx="12" cy="12" r="3.2" />
                    <path
                      d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 1 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 1 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 1 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 1 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z" />
                  </svg>
                </span>
                <h3 class="fmps-benefit__title">Higher productivity potential</h3>
                <p class="fm-text fmps-benefit__text">A suitable environment for improved crop performance.</p>
              </li>
              <li class="fmps-benefit">
                <span class="fmps-benefit__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M7 20h10" />
                    <path d="M12 20v-8" />
                    <path d="M12 12a5 5 0 0 1 5-5c0 3-2 5-5 5z" />
                    <path d="M12 15a5 5 0 0 0-5-5c0 3 2 5 5 5z" />
                  </svg>
                </span>
                <h3 class="fmps-benefit__title">Longer operational life</h3>
                <p class="fm-text fmps-benefit__text">Durable structures designed for long-term use.</p>
              </li>
            </ul>
          </figure>

        </div>
      </section>

      <section class="fmgs" id="growing-systems">
        <div class="fmgs__inner">

          <div class="fmgs__left">
            <span class="fmgs-eyebrow"><i class="fmgs-eyebrow__line"></i>Growing Systems</span>
            <h2 class="fm-heading ">Smarter<br><span class="fmdm__accent">Growing Systems</span><br>for Every
              Crop</h2>
            <p class="fm-text ">Flexible growing systems designed to suit different crops, climates and
              investment levels — for higher yield, better quality and sustainable growth.</p>



            <a href="#solutions" class="fm-cta-btn">
              Explore Growing Systems
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </a>
            <ul class="fmgs-features">
              <li class="fmgs-feature">
                <span class="fmgs-feature__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M2 22s4-1 6-4"></path>
                    <path d="M7 16c-3-3-2-8 3-13 4 5 7 7 11 8 0 5-4 9-9 9-2 0-3.5-.5-5-4z"></path>
                  </svg>
                </span>
                <span class="fmgs-feature__label">Healthier<br>Plant Growth</span>
              </li>
              <li class="fmgs-feature">
                <span class="fmgs-feature__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                  </svg>
                </span>
                <span class="fmgs-feature__label">Optimised<br>Resource Use</span>
              </li>
              <li class="fmgs-feature">
                <span class="fmgs-feature__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                    <path d="M4 6v6c0 1.66 3.58 3 8 3s8-1.34 8-3V6"></path>
                    <path d="M4 12v6c0 1.66 3.58 3 8 3s8-1.34 8-3v-6"></path>
                  </svg>
                </span>
                <span class="fmgs-feature__label">Scalable for<br>Different Crops</span>
              </li>
            </ul>
          </div>

          <ol class="fmgs-list">
            <li class="fmgs-item fmgs-item--green">
              <span class="fmgs-item__no">01</span>
              <i class="fmgs-item__dot" aria-hidden="true"></i>
              <article class="fmgs-card">
                <div class="fmgs-card__body">
                  <h3 class="fm-heading fmgs-card__title">Hydroponics System</h3>
                  <p class="fm-text fmgs-card__text">Soilless cultivation for high quality and consistent production.
                  </p>
                  <a href="{{ route('growing.outdoor-hydroponics') }}" class="fmgs-card__more" aria-label="Learn more about Hydroponics System">Learn
                    More</a>
                </div>
                <img src="images/pro1.jpeg" alt="Line illustration of a hydroponic channel with young plants"
                  class="fmgs-card__img" loading="lazy" width="600" height="400">
              </article>
            </li>
            <li class="fmgs-item fmgs-item--green">
              <span class="fmgs-item__no">02</span>
              <i class="fmgs-item__dot" aria-hidden="true"></i>
              <article class="fmgs-card">
                <div class="fmgs-card__body">
                  <h3 class="fm-heading fmgs-card__title">Cocopeat Based System</h3>
                  <p class="fm-text fmgs-card__text">Controlled root zone with better aeration, moisture retention and
                    precision nutrition.</p>
                  <a href="{{ route('growing.cocopeat') }}" class="fmgs-card__more" aria-label="Learn more about Cocopeat Based System">Learn
                    More</a>
                </div>
                <img src="images/pro2.jpeg" alt="Line illustration of plants in cocopeat bags" class="fmgs-card__img"
                  loading="lazy" width="600" height="400">
              </article>
            </li>
            <li class="fmgs-item fmgs-item--green">
              <span class="fmgs-item__no">03</span>
              <i class="fmgs-item__dot" aria-hidden="true"></i>
              <article class="fmgs-card">
                <div class="fmgs-card__body">
                  <h3 class="fm-heading fmgs-card__title">Soil Based Growing System</h3>
                  <p class="fm-text fmgs-card__text">Reliable and proven method for a wide range of crops under
                    protected cultivation.</p>
                  <a href="soil-based-growing-system.html" class="fmgs-card__more"
                    aria-label="Learn more about Soil Based Growing System">Learn More</a>
                </div>
                <img src="images/pro3.jpeg" alt="Line illustration of seedlings in a soil bed" class="fmgs-card__img"
                  loading="lazy" width="600" height="400">
              </article>
            </li>
            <li class="fmgs-item fmgs-item--green">
              <span class="fmgs-item__no">04</span>
              <i class="fmgs-item__dot" aria-hidden="true"></i>
              <article class="fmgs-card">
                <div class="fmgs-card__body">
                  <h3 class="fm-heading fmgs-card__title">Indoor Vertical Farming</h3>
                  <p class="fm-text fmgs-card__text">Efficient and sustainable growing method that maximizes space and minimizes resource use.</p>
                  <a href="{{ route('growing.indoor-vertical') }}" class="fmgs-card__more"
                    aria-label="Learn more about Indoor Vertical Farming">Learn More</a>
                </div>
                <img src="images/pro4.jpeg" alt="Line illustration of a small greenhouse with plants"
                  class="fmgs-card__img" loading="lazy" width="600" height="400">
              </article>
            </li>
          </ol>

        </div>
      </section>

      <section class="fmcs" id="crop-solutions">
        <div class="fmcs__inner">

          <div class="fmcs__content">
            <span class="fmcs-eyebrow"><i class="fmcs-eyebrow__line"></i><span class="fmcs-eyebrow__label">Crop
                Solutions</span></span>
            <h2 class="fm-heading ">From global demand<br><span class="fmdm__accent">to local
                opportunity.</span></h2>
            <p class="fm-text ">A wide range of crops for different climates, markets and investment
              objectives. We help you choose crops that are technically suitable and commercially viable.</p>
          </div>

          <figure class="fmcs__media">
            <img src="images/tomatoo.webp" alt="Ripe red tomatoes growing on vines inside a greenhouse"
              class="fmcs__hero" loading="eager" width="1380" height="490">
            <!-- <img src="images/strobarry.webp" alt="Crops that grow opportunities" class="fmcs__script" loading="lazy"
              width="420" height="330"> -->
          </figure>

          <div class="fmcs-carousel" data-fmcs-slider role="region" aria-label="Crop solutions carousel">
            <ul class="fmcs-cards" data-fmcs-track tabindex="0" aria-label="Crop solution cards">
              <li class="fmcs-card">
                <img src="images/farm1.jpeg" alt="Fresh leafy greens growing in a greenhouse" class="fmcs-card__img"
                  loading="lazy" width="480" height="414">
                <div class="fmcs-card__body">
                  <span class="fmcs-card__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path>
                      <path d="M2 21c0-3 1.85-5.36 5.08-6"></path>
                    </svg>
                  </span>
                  <h3 class="fm-heading fmcs-card__title">Exotic Leafy Greens</h3>
                </div>
              </li>

              <li class="fmcs-card">
                <img src="images/far3.jpeg" alt="Ripe red tomatoes on the vine in a greenhouse" class="fmcs-card__img"
                  loading="lazy" width="480" height="414">
                <div class="fmcs-card__body">
                  <span class="fmcs-card__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="6.5" cy="17.5" r="3.5"></circle>
                      <circle cx="17.5" cy="17.5" r="3.5"></circle>
                      <path d="M6.5 14C6.5 7.5 12 4 12 4c0 0 5.5 3.5 5.5 10"></path>
                      <path d="M10 7.5c2-1.5 5-1 7-1"></path>
                    </svg>
                  </span>
                  <h3 class="fm-heading fmcs-card__title">Exotic Vine Crops</h3>
                </div>
              </li>

              <li class="fmcs-card">
                <img src="images/farm6.jpeg" alt="Fresh green, yellow and red bell peppers" class="fmcs-card__img"
                  loading="lazy" width="480" height="414">
                <div class="fmcs-card__body">
                  <span class="fmcs-card__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M12 2v3"></path>
                      <path
                        d="M12 5c-1.5-1-4-1-6 1-2 2-3 5-2 8.5 1 3.5 4 5.5 8 5.5s7-2 8-5.5c1-3.5 0-6.5-2-8.5-2-2-4.5-2-6-1Z">
                      </path>
                      <path d="M9 5c.5 3 0 9-1 14"></path>
                      <path d="M15 5c-.5 3 0 9 1 14"></path>
                    </svg>
                  </span>
                  <h3 class="fm-heading fmcs-card__title">Indian Vegetables</h3>
                </div>
              </li>

              <li class="fmcs-card">
                <img src="images/farm5.jpeg" alt="Fresh strawberries growing on the plant" class="fmcs-card__img"
                  loading="lazy" width="480" height="414">
                <div class="fmcs-card__body">
                  <span class="fmcs-card__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M12 2v4"></path>
                      <circle cx="9" cy="9.5" r="3"></circle>
                      <circle cx="15" cy="9.5" r="3"></circle>
                      <circle cx="6.5" cy="15" r="3"></circle>
                      <circle cx="12" cy="15" r="3"></circle>
                      <circle cx="17.5" cy="15" r="3"></circle>
                      <circle cx="9" cy="19.5" r="2.5"></circle>
                      <circle cx="15" cy="19.5" r="2.5"></circle>
                    </svg>
                  </span>
                  <h3 class="fm-heading fmcs-card__title">Berries</h3>
                </div>
              </li>

              <li class="fmcs-card">
                <img src="images/farm5.jpeg" alt="Medicinal herbs growing under protected cultivation"
                  class="fmcs-card__img" loading="lazy" width="480" height="414">
                <div class="fmcs-card__body">
                  <span class="fmcs-card__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M9 3h6"></path>
                      <path d="M10 3v5L4.5 18A2 2 0 0 0 6.2 21h11.6a2 2 0 0 0 1.7-3L14 8V3"></path>
                      <line x1="7.5" y1="15" x2="16.5" y2="15"></line>
                    </svg>
                  </span>
                  <h3 class="fm-heading fmcs-card__title">Medicinal Crops</h3>
                </div>
              </li>

              <li class="fmcs-card">
                <img src="images/farm00.jpeg" alt="Cannabis hemp crop growing under controlled conditions"
                  class="fmcs-card__img" loading="lazy" width="480" height="414">
                <div class="fmcs-card__body">
                  <span class="fmcs-card__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M12 22v-6"></path>
                      <path d="M12 16c-1-3-4-5-8-4 2 2 3.5 4 4.5 6"></path>
                      <path d="M12 16c-2-4-5-8-7-9 1 3 3 7 5 9"></path>
                      <path d="M12 16c0-5-1-10-1-13 1.5 3 2 8 2 13"></path>
                      <path d="M12 16c2-4 5-8 7-9-1 3-3 7-5 9"></path>
                      <path d="M12 16c1-3 4-5 8-4-2 2-3.5 4-4.5 6"></path>
                    </svg>
                  </span>
                  <h3 class="fm-heading fmcs-card__title">Cannabis / Hemp</h3>
                </div>
              </li>

              <li class="fmcs-card">
                <img src="images/tomatoo.webp" alt="Vibrant pink gerbera flowers in a greenhouse" class="fmcs-card__img"
                  loading="lazy" width="480" height="414">
                <div class="fmcs-card__body">
                  <span class="fmcs-card__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="3"></circle>
                      <circle cx="12" cy="5" r="2.5"></circle>
                      <circle cx="18.5" cy="8.5" r="2.5"></circle>
                      <circle cx="18.5" cy="15.5" r="2.5"></circle>
                      <circle cx="12" cy="19" r="2.5"></circle>
                      <circle cx="5.5" cy="15.5" r="2.5"></circle>
                      <circle cx="5.5" cy="8.5" r="2.5"></circle>
                    </svg>
                  </span>
                  <h3 class="fm-heading fmcs-card__title">Flowers</h3>
                </div>
              </li>
            </ul>
            <div class="fmcs-carousel__controls" data-fmcs-controls hidden>
              <button class="fmcs-carousel__button" type="button" data-fmcs-prev aria-label="Previous crop solution">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" aria-hidden="true">
                  <path d="m15 18-6-6 6-6"></path>
                </svg>
              </button>
              <span class="fmcs-carousel__count" data-fmcs-count aria-live="polite">01 / 07</span>
              <button class="fmcs-carousel__button" type="button" data-fmcs-next aria-label="Next crop solution">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" aria-hidden="true">
                  <path d="m9 18 6-6-6-6"></path>
                </svg>
              </button>
            </div>
          </div>

        </div>
      </section>

      <section class="fmas" id="automation-solutions">
        <div class="fmas__inner">

          <div class="fmas__content">
            <span class="fmas-eyebrow"><i class="fmas-eyebrow__line"></i>Automation Solutions</span>
            <h2 class="fm-heading ">Smarter Farms.<br><span class="fmdm__accent">Greater Control.</span></h2>
            <p class="fm-text fmas__text">Technology-driven automation solutions to monitor, manage and optimise your
              farm — for consistent growth and better returns.</p>

            <a href="#solutions" class="fm-cta-btn">
              Explore Automation Solutions
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </a>
          </div>

          <figure class="fmas__media">
            <picture>
              <img src="images/automation.png"
                alt="Greenhouse automation: a wall-mounted sensor unit and a phone app showing live temperature, humidity, EC and pH, beside four solutions: IoT Automation, Auto Fertigation Unit, Auto Dosing Unit, and Sensors and Measuring Devices"
                class="fmas__img" loading="eager" width="1600" height="920">
            </picture>
          </figure>

          <div class="fmas-level">
            <div class="fmas-level__intro">
              <span class="fmas-level__eyebrow">Choose the right level</span>
              <h3 class="fm-heading fmas-level__title">Automation,<br><span class="fmas__accent">aligned to your
                  farm.</span></h3>
              <i class="fmas-level__rule" aria-hidden="true"></i>
              <p class="fm-text fmas-level__text">From manual to fully automated — flexible solutions for every scale
                and crop.</p>
            </div>

            <ol class="fmas-steps">
              <li class="fmas-step fmas-step--1">
                <i class="fmas-step__mark" aria-hidden="true"></i>
                <span class="fmas-step__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path>
                    <path d="M2 21c0-3 1.85-5.36 5.08-6"></path>
                  </svg>
                </span>
                <h4 class="fmas-step__title">Manual</h4>
                <p class="fm-text fmas-step__text">Simple &amp; cost-effective</p>
              </li>
              <li class="fmas-step fmas-step--2">
                <i class="fmas-step__mark" aria-hidden="true"></i>
                <span class="fmas-step__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M7 20h10"></path>
                    <path d="M12 20v-9"></path>
                    <path d="M12 11c0-4 3.5-7 8-7 0 4.5-3 8-8 7"></path>
                    <path d="M12 15c-3.5 0-6-2.5-6-6 3.5 0 6 2.5 6 6"></path>
                  </svg>
                </span>
                <h4 class="fmas-step__title">Semi-Automated</h4>
                <p class="fm-text fmas-step__text">Better control &amp; efficiency</p>
              </li>
              <li class="fmas-step fmas-step--3">
                <i class="fmas-step__mark" aria-hidden="true"></i>
                <span class="fmas-step__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path
                      d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 1 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 1 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 1 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 1 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z">
                    </path>
                  </svg>
                </span>
                <h4 class="fmas-step__title">Fully Automated</h4>
                <p class="fm-text fmas-step__text">Maximum precision &amp; scalability</p>
              </li>
            </ol>

            <div class="fmas-note">
              <span class="fmas-note__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <line x1="18" y1="20" x2="18" y2="10"></line>
                  <line x1="12" y1="20" x2="12" y2="4"></line>
                  <line x1="6" y1="20" x2="6" y2="14"></line>
                </svg>
              </span>
              <p class="fm-text fmas-note__text">The right level of automation depends on your crop, scale and business
                model.</p>
            </div>
          </div>

        </div>
        <!-- next block goes here -->
      </section>
@endsection
