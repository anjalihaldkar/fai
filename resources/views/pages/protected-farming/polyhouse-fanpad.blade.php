@extends('layouts.app')

@section('title', 'Fan & Pad Polyhouse Solutions | Future Agri Infra')
@section('body_class', 'protected-page fanpad-page')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/mobile.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/mobile.js') }}"></script>
@endpush

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
          <span class="fmab-eyebrow">Protected Structures<i class="fmab-eyebrow__line"></i></span>

          <h1 class="fm-heading fmab__title">
            Fan & Pad <br>Controlled <span class="fmdm__accent">Polyhouses</span>
          </h1>

          <p class="fm-text fmab__text">
            Precision climate-controlled greenhouse environments with evaporative cooling pads and exhaust fans for year-round high-value commercial cultivation.
          </p>

          <a href="#fan-pad-intro" class="fm-cta-btn">
            Explore Fan & Pad System
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
      <section class="fmfh" id="fan-pad-intro">
        <div class="fmfh__inner">

          <div class="fmfh__content">
            <span class="fmdm-eyebrow">System Hero<i class="fmdm-eyebrow__line"></i></span>
            <h2 class="fm-heading ">What is a <br>Fan Pad <span class="fmdm__accent"> Polyhouse?</span></h2>
            <p class="fm-text fmfh__text">A Fan Pad Polyhouse is a type of protected cultivation structure equipped with
              exhaust fans and cooling pads to maintain optimal temperature, <strong>humidity and air circulation for
                crop growth.</strong> It creates a controlled environment that helps farmers grow <strong>high-quality
                crops throughout the year,</strong> regardless of external weather conditions.</p>
            <ul class="fmfh-features">
              <li class="fmfh-feature"><span class="fmfh-feature__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 5a1.5 1.5 0 0 0-1.5 1.5v5.09a3 3 0 1 0 3 0V6.5A1.5 1.5 0 0 0 12 5z"></path>
                    <circle cx="12" cy="15" r="1.2" fill="currentColor"></circle>
                    <path d="M7 4.5A8 8 0 0 1 19.5 7"></path>
                    <polyline points="19.5 3.5 19.5 7 16 7"></polyline>
                    <path d="M17 19.5A8 8 0 0 1 4.5 17"></path>
                    <polyline points="4.5 20.5 4.5 17 8 17"></polyline>
                  </svg></span><span class="fmfh-feature__label">Better Climate Control</span></li>
              <li class="fmfh-feature"><span class="fmfh-feature__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="4" y1="20" x2="20" y2="20"></line>
                    <line x1="7" y1="20" x2="7" y2="14"></line>
                    <line x1="12" y1="20" x2="12" y2="8"></line>
                    <line x1="17" y1="20" x2="17" y2="11"></line>
                    <path d="M12 8V4"></path>
                    <path d="M12 5.5a2.5 2.5 0 0 1 2.5-2.5c0 1.6-1.2 2.5-2.5 2.5z"></path>
                    <path d="M12 6.5a2.5 2.5 0 0 0-2.5-2.5c0 1.6 1.2 2.5 2.5 2.5z"></path>
                  </svg></span><span class="fmfh-feature__label">Higher Yields</span></li>
              <li class="fmfh-feature"><span class="fmfh-feature__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="3.5"></circle>
                    <line x1="12" y1="2" x2="12" y2="4"></line>
                    <line x1="12" y1="20" x2="12" y2="22"></line>
                    <line x1="2" y1="12" x2="4" y2="12"></line>
                    <line x1="20" y1="12" x2="22" y2="12"></line>
                    <path d="M19.5 8.5A8.5 8.5 0 0 0 5 6"></path>
                    <polyline points="4.5 3 5 6 8.5 5.5"></polyline>
                    <path d="M4.5 15.5A8.5 8.5 0 0 0 19 18"></path>
                    <polyline points="19.5 21 19 18 15.5 18.5"></polyline>
                  </svg></span><span class="fmfh-feature__label">Year-Round Production</span></li>
            </ul>
          </div>

          <figure class="fmfh__media">
            <img src="images/pp-fanpad.jpg"
              alt="Fan pad polyhouse with large exhaust fans on the side wall and green crops growing in front under a blue sky"
              class="fmfh__img" loading="eager" width="1200" height="810">
          </figure>

        </div>
      </section>

      <section class="fmfe" id="growing-environment">
        <div class="fmfe__inner">

          <figure class="fmfe__media">
            <img src="images/air.png" alt="Greenhouse ventilation fan and automated climate-control systems"
              class="fmfe__img" loading="lazy" width="1200" height="617">
          </figure>

          <div class="fmfe__content">
            <span class="fmdm-eyebrow">What it is<i class="fmdm-eyebrow__line"></i></span>
            <h2 class="fm-heading ">The Growing <br> <span class="fmdm__accent"> Environment</span></h2>
            <p class="fm-text fmfe__text">A fan pad polyhouse uses evaporative cooling to maintain a stable and ideal
              growing environment. Cooling pads at one end bring in fresh, cooled air while <strong>exhaust fans at the
                other end remove hot air,</strong> creating a <strong>continuous airflow that reduces</strong>
              temperature and maintains humidity.</p>



            <a href="#process" class="fm-cta-btn">
              Learn More About the Process
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </a>
          </div>

        </div>
      </section>

      <section class="fmcp" id="cooling-process">
        <img src="images/banner3.jpeg" alt="" class="fmcp__bg" loading="lazy" width="2000" height="800">
        <div class="fmcp__inner">

          <header class="fmcp__head">
            <span class="fmcp-eyebrow"><i class="fmcp-eyebrow__line"></i><span class="fmcp-eyebrow__label"> How it
                works</span><i class="fmcp-eyebrow__line"></i></span>
            <h2 class="fm-heading ">The Cooling &amp;<br><span class="fmdm__accent"> Airflow Process
              </span>
            </h2>
            <p class="fm-text fmcp__text">A continuous cycle that maintains the ideal environment for healthier crops
              and higher productivity.</p>
          </header>

          <ol class="fmcp-steps">
            <li class="fmcp-step">
              <span class="fmcp-step__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" />
                </svg>
              </span>
              <span class="fmcp-step__no">01</span>
              <h3 class="fm-heading fmcp-step__title">Cooled Air Enters</h3>
              <p class="fm-text fmcp-step__text">Air passes through wet cooling pads, reducing temperature.</p>
              <span class="fmcp-step__arrow" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </li>
            <li class="fmcp-step">
              <span class="fmcp-step__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M12 12C10 9 10 6 13 3c3 3 3 6-1 9Z" />
                  <path d="M12 12C15 10 18 10 21 13c-3 3-6 3-9-1Z" />
                  <path d="M12 12c2 3 2 6-1 9-3-3-3-6 1-9Z" />
                  <path d="M12 12c-3 2-6 2-9-1 3-3 6-3 9 1Z" />
                  <circle cx="12" cy="12" r="2" />
                </svg>
              </span>
              <span class="fmcp-step__no">02</span>
              <h3 class="fm-heading fmcp-step__title">Air Circulates</h3>
              <p class="fm-text fmcp-step__text">Exhaust fans pull the cool air inside, ensuring uniform distribution.
              </p>
              <span class="fmcp-step__arrow" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </li>
            <li class="fmcp-step">
              <span class="fmcp-step__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M7 20h10" />
                  <path d="M12 20v-8" />
                  <path d="M12 12a5 5 0 0 1 5-5h2v2a5 5 0 0 1-5 5h-2z" />
                  <path d="M12 15a4.5 4.5 0 0 0-4.5-4.5H5v1.8A4.5 4.5 0 0 0 9.5 16.8h2.5z" />
                </svg>
              </span>
              <span class="fmcp-step__no">03</span>
              <h3 class="fm-heading fmcp-step__title">Ideal Growing Conditions</h3>
              <p class="fm-text fmcp-step__text">Maintains optimal temperature and humidity for healthy crop growth.</p>
              <span class="fmcp-step__arrow" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </li>
            <li class="fmcp-step">
              <span class="fmcp-step__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M21 12a9 9 0 0 0-15.5-6.36L3 8" />
                  <polyline points="3 3 3 8 8 8" />
                  <path d="M3 12a9 9 0 0 0 15.5 6.36L21 16" />
                  <polyline points="21 21 21 16 16 16" />
                </svg>
              </span>
              <span class="fmcp-step__no">04</span>
              <h3 class="fm-heading fmcp-step__title">Continuous Exchange</h3>
              <p class="fm-text fmcp-step__text">Hot air is expelled and fresh, cooled air continuously enters.</p>
            </li>
          </ol>

        </div>
      </section>

    <!-- ===================================================================
         03. Key Components: An Integrated Fertigation System
         =================================================================== -->
    <section class="fmfs" id="fertigation-system">
      <div class="fmfs__inner">

        <input type="radio" name="fmfs-tab" id="fmfs-t1" class="fmfs__radio" checked>
        <input type="radio" name="fmfs-tab" id="fmfs-t2" class="fmfs__radio">
        <input type="radio" name="fmfs-tab" id="fmfs-t3" class="fmfs__radio">
        <input type="radio" name="fmfs-tab" id="fmfs-t4" class="fmfs__radio">
        <input type="radio" name="fmfs-tab" id="fmfs-t5" class="fmfs__radio">

        <header class="fmfs__head">
          <span class="fmfs-eyebrow"><span class="fmfs-eyebrow__no">03</span><i class="fmfs-eyebrow__line"></i><span class="fmfs-eyebrow__label">Key Components</span></span>
          <h2 class="fm-heading fmfs__title">An Integrated <br><span class="fmfs__accent"> Fertigation</span> System.</h2>
          <p class="fm-text fmfs__text">A complete and connected setup designed to deliver precise nutrient dosing, consistent mixing and reliable distribution across your farm.</p>
        </header>

        <div class="fmfs-tabs">
          <label class="fmfs-tab" for="fmfs-t1">Structure & Cladding</label>
          <label class="fmfs-tab" for="fmfs-t2">Cooling & Airflow</label>
          <label class="fmfs-tab" for="fmfs-t3">Irrigation & Fertigation</label>
          <label class="fmfs-tab" for="fmfs-t4">Climate & Automation</label>
          <label class="fmfs-tab" for="fmfs-t5">Internal Infrastructure</label>
        </div>

        <figure class="fmfs__media">
          <img src="images/auto.png" alt="Two large white fertilizer tanks marked A and B connected with black and blue pipes, pumps and valves inside a greenhouse" class="fmfs__photo fmfs__photo--1" loading="eager" width="1608" height="714">
          <img src="images/fip-irrigation-fertigation.jpg" alt="Nutrient injection unit with precision dosing pumps, manifold assembly and pressure gauges" class="fmfs__photo fmfs__photo--2" loading="lazy" width="1608" height="714">
          <img src="images/automation.png" alt="Automated fertigation controller interface panel with digital touchscreen and monitoring system" class="fmfs__photo fmfs__photo--3" loading="lazy" width="1608" height="714">
          <img src="images/fip-water-management.jpg" alt="High-efficiency filtration system with disc filters, sand separators and flush valves" class="fmfs__photo fmfs__photo--4" loading="lazy" width="1608" height="714">
          <img src="images/ec-greenhouse.jpg" alt="Automated electric solenoid zone control valves and distribution manifolds in a greenhouse" class="fmfs__photo fmfs__photo--5" loading="lazy" width="1608" height="714">
        </figure>

        <div class="fmfs__panels">
          <!-- Panel 1: Fertilizer Tanks -->
          <article class="fmfs-panel fmfs-panel--1">
            <span class="fmfs-panel__eyebrow">Structure & Cladding</span>
            <h3 class="fm-heading fmfs-panel__title">Strong Structures. Smarter Protection. Healthier Growth.</h3>
            <p class="fm-text fmfs-panel__text">A durable structure with quality cladding ensures strength, proper light transmission and reliable protection for healthy crop growth.</p>
            <ul class="fmfs-feats">
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">GI Structure</h4>
                <p class="fm-text fmfs-feat__text">Strong galvanised steel framework for stability and long-lasting performance.</p>
              </li>
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="20" x2="18" y2="4"></line>
                    <line x1="12" y1="20" x2="12" y2="10"></line>
                    <line x1="6" y1="20" x2="6" y2="16"></line>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Cladding Film</h4>
                <p class="fm-text fmfs-feat__text">UV and IR-treated polyfilm for better light diffusion and temperature control.</p>
              </li>
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M7 20h10"></path>
                    <path d="M12 20V10"></path>
                    <path d="M12 10a5 5 0 0 1 5-5h2v2a5 5 0 0 1-5 5h-2"></path>
                    <path d="M12 14a5 5 0 0 0-5-5H5v2a5 5 0 0 0 5 5h2"></path>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Side Walls & Insect Net</h4>
                <p class="fm-text fmfs-feat__text">Provides pest protection while maintaining proper ventilation.</p>
              </li>
            </ul>
          </article>

          <!-- Panel 2: Injection Unit -->
          <article class="fmfs-panel fmfs-panel--2">
            <span class="fmfs-panel__eyebrow">Cooling & Airflow</span>
            <h3 class="fm-heading fmfs-panel__title">Efficient Cooling. Fresh Airflow. Optimal Growth.</h3>
            <p class="fm-text fmfs-panel__text">An efficient cooling and ventilation system maintains ideal temperatures and proper air circulation,
               creating a comfortable environment for healthy crop growth.</p>
            <ul class="fmfs-feats">
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m18 2 4 4"></path>
                    <path d="m17 7 3-3"></path>
                    <path d="M19 9 8.7 19.3c-.4.4-1 .6-1.6.6H3v-4.1c0-.6.2-1.2.6-1.6L14 3.9"></path>
                    <path d="m9 9 6 6"></path>
                    <path d="m5 19-3 3"></path>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Exhaust Fan<br>System</h4>
                <p class="fm-text fmfs-feat__text">Removes hot air and maintains continuous airflow inside the polyhouse.</p>
              </li>
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
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
                <h4 class="fmfs-feat__title">Cooling Pad<br>System</h4>
                <p class="fm-text fmfs-feat__text">Uses evaporative cooling to reduce indoor temperatures naturally.</p>
              </li>
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path>
                    <path d="M2 21c0-3 1.85-5.36 5.08-6"></path>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Uniform Air<br>Circulation</h4>
                <p class="fm-text fmfs-feat__text">Ensures consistent airflow and temperature distribution throughout the growing area.</p>
              </li>
            </ul>
          </article>

          <!-- Panel 3: Controller -->
          <article class="fmfs-panel fmfs-panel--3">
            <span class="fmfs-panel__eyebrow">Irrigation & Fertigation</span>
            <h3 class="fm-heading fmfs-panel__title">Efficient Irrigation. Precise Nutrition. Healthy Growth.</h3>
            <p class="fm-text fmfs-panel__text">TDelivers water and essential nutrients directly to plants for healthy growth and better yields.</p>
            <ul class="fmfs-feats">
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                    <path d="m9 14 2 2 4-4"></path>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Drip Irrigation</h4>
                <p class="fm-text fmfs-feat__text">Provides water directly to plant roots.</p>
              </li>
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="9"></circle>
                    <path d="M12 12l3-3"></path>
                    <path d="M8 12a4 4 0 0 1 8 0"></path>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Nutrient Dosing</h4>
                <p class="fm-text fmfs-feat__text">Ensures accurate fertilizer delivery.</p>
              </li>
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Water Filtration</h4>
                <p class="fm-text fmfs-feat__text">Maintains clean and efficient water flow.</p>
              </li>
            </ul>
          </article>

          <!-- Panel 4: Filtration -->
          <article class="fmfs-panel fmfs-panel--4">
            <span class="fmfs-panel__eyebrow">Climate & Automation</span>
            <h3 class="fm-heading fmfs-panel__title">Smart Monitoring. Precise Control. Better Growth.</h3>
            <p class="fm-text fmfs-panel__text">Automates temperature, humidity and ventilation control for an ideal growing environment.</p>
            <ul class="fmfs-feats">
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Climate Monitoring</h4>
                <p class="fm-text fmfs-feat__text">Tracks temperature and humidity levels.</p>
              </li>
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    <path d="m9 12 2 2 4-4"></path>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Automated Control</h4>
                <p class="fm-text fmfs-feat__text">Adjusts ventilation and cooling automatically.</p>
              </li>
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Smart Sensors</h4>
                <p class="fm-text fmfs-feat__text">Monitors environmental conditions for healthy crop growth.</p>
              </li>
            </ul>
          </article>

          <!-- Panel 5: Zone Control -->
          <article class="fmfs-panel fmfs-panel--5">
            <span class="fmfs-panel__eyebrow">Internal Infrastructure</span>
            <h3 class="fm-heading fmfs-panel__title">Smart Layout. Efficient Systems. Better Cultivation.</h3>
            <p class="fm-text fmfs-panel__text">Well-designed internal systems support organized cultivation and efficient farm operations.</p>
            <ul class="fmfs-feats">
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="3" width="7" height="7" rx="1"></rect>
                    <rect x="14" y="3" width="7" height="7" rx="1"></rect>
                    <rect x="14" y="14" width="7" height="7" rx="1"></rect>
                    <rect x="3" y="14" width="7" height="7" rx="1"></rect>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Growing Benches</h4>
                <p class="fm-text fmfs-feat__text">Provides organized space for healthy plant growth.</p>
              </li>
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                    <path d="M2 19c2 0 3-1 5-1s3 1 5 1 3-1 5-1 3 1 5 1"></path>
                    <path d="M2 22c2 0 3-1 5-1s3 1 5 1 3-1 5-1 3 1 5 1"></path>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Support Structures</h4>
                <p class="fm-text fmfs-feat__text">Ensures stability and efficient crop arrangement.</p>
              </li>
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 3 21 3 21 9"></polyline>
                    <polyline points="9 21 3 21 3 15"></polyline>
                    <polyline points="21 15 21 21 15 21"></polyline>
                    <polyline points="3 9 3 3 9 3"></polyline>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Internal Pathways</h4>
                <p class="fm-text fmfs-feat__text">Allows easy movement and smooth farm operations.</p>
              </li>
            </ul>
          </article>
        </div>

      </div>
      <!-- next block goes here -->
    </section>

  

      <section class="fmcf" id="climate-site-fit">
        <div class="fmcf__inner">

          <header class="fmcf__head">
            <div class="fmcf__intro">
              <span class="fmdm-eyebrow">Climate & Site Fit<i class="fmdm-eyebrow__line"></i></span>
              <h2 class="fm-heading fmcf__title">Climate &amp; <span class="fmdm__accent">Site Fit</span></h2>
              <p class="fm-text fmcf__text">We assess your local climate and site conditions to design a protected
                farming solution that performs efficiently, all year round.</p>
            </div>
            <div class="fmcf-note">
              <span class="fmcf-note__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z" />
                  <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12" />
                </svg>
              </span>
              <div class="fmcf-note__body">
                <h3 class="fmcf-note__title">Right Solution for Your Location</h3>
                <p class="fm-text fmcf-note__text">Every farm is unique. We analyze your climate and site conditions to
                  recommend the most suitable structure and growing system.</p>
              </div>
            </div>
          </header>

          <div class="fmcf__grid">

            <ul class="fmcf-col fmcf-col--l">
              <li class="fmcf-card">
                <span class="fmcf-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z" />
                  </svg>
                </span>
                <div class="fmcf-card__body">
                  <h3 class="fmcf-card__title">Temperature</h3>
                  <p class="fm-text fmcf-card__text">Suitable for a wide range of hot and cold climates.</p>
                </div>
              </li>
              <li class="fmcf-card">
                <span class="fmcf-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <circle cx="12" cy="12" r="5" />
                    <line x1="12" y1="1" x2="12" y2="3"></line>
                    <line x1="12" y1="21" x2="12" y2="23"></line>
                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                    <line x1="1" y1="12" x2="3" y2="12"></line>
                    <line x1="21" y1="12" x2="23" y2="12"></line>
                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                  </svg>
                </span>
                <div class="fmcf-card__body">
                  <h3 class="fmcf-card__title">Sunlight</h3>
                  <p class="fm-text fmcf-card__text">Optimized for higher light transmission.</p>
                </div>
              </li>
              <li class="fmcf-card">
                <span class="fmcf-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" />
                  </svg>
                </span>
                <div class="fmcf-card__body">
                  <h3 class="fmcf-card__title">Humidity</h3>
                  <p class="fm-text fmcf-card__text">Maintain ideal humidity for better crop growth.</p>
                </div>
              </li>
              <li class="fmcf-card">
                <span class="fmcf-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M9.59 4.59A2 2 0 1 1 11 8H2" />
                    <path d="M12.59 19.41A2 2 0 1 0 14 16H2" />
                    <path d="M17.73 7.73A2.5 2.5 0 1 1 19.5 12H2" />
                  </svg>
                </span>
                <div class="fmcf-card__body">
                  <h3 class="fmcf-card__title">Wind Load</h3>
                  <p class="fm-text fmcf-card__text">Engineered to withstand high wind conditions.</p>
                </div>
              </li>
            </ul>

            <figure class="fmcf__media">
              <img src="images/farm4.jpeg"
                alt="Greenhouse with transparent walls and exhaust fans seen across a green crop bed under a blue sky"
                class="fmcf__img" loading="lazy" width="800" height="980">
              <a href="#site-assessment" class="fm-cta-btn fmcf__cta">
                <span class="fmcf__cta-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z" />
                    <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12" />
                  </svg>
                </span>
                <span class="fmcf__cta-label">Optimized for<br>Your Environment</span>
                <span class="fmcf__cta-arrow" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </a>
            </figure>

            <ul class="fmcf-col fmcf-col--r">
              <li class="fmcf-card">
                <span class="fmcf-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M20 16.58A5 5 0 0 0 18 7h-1.26A8 8 0 1 0 4 15.25" />
                    <line x1="8" y1="19" x2="8" y2="21"></line>
                    <line x1="8" y1="13" x2="8" y2="15"></line>
                    <line x1="12" y1="21" x2="12" y2="23"></line>
                    <line x1="12" y1="15" x2="12" y2="17"></line>
                    <line x1="16" y1="19" x2="16" y2="21"></line>
                    <line x1="16" y1="13" x2="16" y2="15"></line>
                  </svg>
                </span>
                <div class="fmcf-card__body">
                  <h3 class="fmcf-card__title">Rainfall</h3>
                  <p class="fm-text fmcf-card__text">Efficient drainage and water management design.</p>
                </div>
              </li>
              <li class="fmcf-card">
                <span class="fmcf-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M7 20h10" />
                    <path d="M12 20v-8" />
                    <path d="M12 12a5 5 0 0 1 5-5h2v2a5 5 0 0 1-5 5h-2z" />
                    <path d="M12 15a4.5 4.5 0 0 0-4.5-4.5H5v1.8A4.5 4.5 0 0 0 9.5 16.8h2.5z" />
                  </svg>
                </span>
                <div class="fmcf-card__body">
                  <h3 class="fmcf-card__title">Soil Type</h3>
                  <p class="fm-text fmcf-card__text">Adaptable to different soil and site conditions.</p>
                </div>
              </li>
              <li class="fmcf-card">
                <span class="fmcf-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m8 3 4 8 5-5 5 15H2L8 3z" />
                  </svg>
                </span>
                <div class="fmcf-card__body">
                  <h3 class="fmcf-card__title">Altitude</h3>
                  <p class="fm-text fmcf-card__text">Suitable for plains as well as high-altitude regions.</p>
                </div>
              </li>
              <li class="fmcf-card">
                <span class="fmcf-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                    <circle cx="12" cy="10" r="3" />
                  </svg>
                </span>
                <div class="fmcf-card__body">
                  <h3 class="fmcf-card__title">Site Orientation</h3>
                  <p class="fm-text fmcf-card__text">Designed for optimal sunlight and airflow.</p>
                </div>
              </li>
            </ul>

          </div>

        </div>
      </section>

      <section class="fmcl" id="commercial-lens">
        <div class="fmcl__inner">

          <div class="fmcl__content">
            <span class="fmdm-eyebrow">Commercial Lens<i class="fmdm-eyebrow__line"></i></span>
            <h2 class="fm-heading ">Turning Control<br>into <span class="fmcl__accent">Value</span></h2>
            <p class="fm-text fmcl__text">Investment and operating-cost drivers; where added control can create value.
            </p>
            <a href="#business-case" class="fm-cta-btn">
           Explore Business Case
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>

          </div>

          <div class="fmcl__stage">
            <img src="images/ll.png" alt="Row of glass greenhouses at sunrise surrounded by green crops"
              class="fmcl__photo" loading="lazy" width="1800" height="330">
            <ol class="fmcl-list">
              <li class="fmcl-col">
                <div class="fmcl-col__body">
                  <span class="fmcl-col__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <ellipse cx="12" cy="6" rx="8" ry="3" />
                      <path d="M4 6v6c0 1.66 3.58 3 8 3s8-1.34 8-3V6" />
                      <path d="M4 12v6c0 1.66 3.58 3 8 3s8-1.34 8-3v-6" />
                    </svg>
                  </span>
                  <h3 class="fmcl-col__title">Initial<br>Investment</h3>
                  <p class="fm-text fmcl-col__text">Structure, fans, cooling pads, automation and installation.</p>
                </div>
                <span class="fmcl-pill"><span class="fmcl-pill__no">01</span><span class="fmcl-pill__label">Setup
                    Right</span></span>
              </li>
              <li class="fmcl-col">
                <div class="fmcl-col__body">
                  <span class="fmcl-col__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="3" />
                      <path
                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z" />
                    </svg>
                  </span>
                  <h3 class="fmcl-col__title">Operating<br>Costs</h3>
                  <p class="fm-text fmcl-col__text">Power, water, maintenance and labour efficiency.</p>
                </div>
                <span class="fmcl-pill"><span class="fmcl-pill__no">02</span><span class="fmcl-pill__label">Operate
                    Efficiently</span></span>
              </li>
              <li class="fmcl-col">
                <div class="fmcl-col__body">
                  <span class="fmcl-col__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M12 22v-8" />
                      <path d="M9 14a3 3 0 0 1 3-3 3 3 0 0 1 3 3" />
                      <path d="M12 11V7" />
                      <path d="M12 7a2.5 2.5 0 0 1 2.5-2.5c1.38 0 2.5 1.12 2.5 2.5a2.5 2.5 0 0 1-2.5 2.5" />
                      <path d="M12 7a2.5 2.5 0 0 0-2.5-2.5c-1.38 0-2.5 1.12-2.5 2.5a2.5 2.5 0 0 0 2.5 2.5" />
                      <path d="M2 12C2 6.48 6.48 2 12 2s10 4.48 10 10-4.48 10-10 10S2 17.52 2 12Z" />
                    </svg>
                  </span>
                  <h3 class="fmcl-col__title">Productivity<br>&amp; Quality</h3>
                  <p class="fm-text fmcl-col__text">Better climate control leads to higher yield, consistent quality and
                    longer shelf life.</p>
                </div>
                <span class="fmcl-pill"><span class="fmcl-pill__no">03</span><span class="fmcl-pill__label">Produce
                    Better</span></span>
              </li>
              <li class="fmcl-col">
                <div class="fmcl-col__body">
                  <span class="fmcl-col__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <line x1="18" y1="20" x2="18" y2="10" />
                      <line x1="12" y1="20" x2="12" y2="4" />
                      <line x1="6" y1="20" x2="6" y2="14" />
                      <line x1="3" y1="20" x2="21" y2="20" />
                      <path d="m3 11 6-6 4 4 8-8" />
                    </svg>
                  </span>
                  <h3 class="fmcl-col__title">Market<br>Value</h3>
                  <p class="fm-text fmcl-col__text">Access to premium markets and off-season opportunities.</p>
                </div>
                <span class="fmcl-pill"><span class="fmcl-pill__no">04</span><span class="fmcl-pill__label">Create More
                    Value</span></span>
              </li>
            </ol>
          </div>

        </div>
      </section>

          <section class="fmao" id="automation-options">
        <div class="fmao__inner">

          <figure class="fmao__media">
            <img src="images/automation.png"
              alt="Wall-mounted automation control panel with a touchscreen and indicator buttons inside a greenhouse"
              class="fmao__img" loading="eager" width="1000" height="985">
          </figure>

          <div class="fmao__head">
            <span class="fmdm-eyebrow">Automation Options<i class="fmdm-eyebrow__line"></i></span>

            <h2 class="fm-heading ">Smart Automation for <span class="fmdm__accent"> Better Farming</span></h2>
            <p class="fm-text fmao__text">From simple manual control to fully automated systems, we provide flexible
              solutions that help you save time, reduce effort and maximize productivity.</p>
          </div>

          <ol class="fmao-list">
            <li class="fmao-card">
              <span class="fmao-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M18 11V6a2 2 0 0 0-2-2v0a2 2 0 0 0-2 2v3" />
                  <path d="M14 10V4a2 2 0 0 0-2-2v0a2 2 0 0 0-2 2v7" />
                  <path d="M10 10.5V6a2 2 0 0 0-2-2v0a2 2 0 0 0-2 2v8" />
                  <path
                    d="M18 8a2 2 0 1 1 4 0v6a8 8 0 0 1-8 8h-2c-2.8 0-4.5-.86-5.99-2.34l-3.6-3.6a2 2 0 0 1 2.83-2.82L7 15" />
                </svg>
              </span>
              <div class="fmao-card__body">
                <span class="fmao-card__no"><span class="fmao-card__num">01</span><i class="fmao-card__rule"></i></span>
                <h3 class="fmao-card__title">Manual Control</h3>
                <p class="fm-text fmao-card__text">Basic control for small setups. Cost-effective and easy to operate.
                </p>
              </div>
            </li>
            <li class="fmao-card">
              <span class="fmao-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <circle cx="12" cy="12" r="3" />
                  <path
                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z" />
                </svg>
              </span>
              <div class="fmao-card__body">
                <span class="fmao-card__no"><span class="fmao-card__num">02</span><i class="fmao-card__rule"></i></span>
                <h3 class="fmao-card__title">Semi-Automatic</h3>
                <p class="fm-text fmao-card__text">Timer and sensor based control for efficient operation.</p>
              </div>
            </li>
            <li class="fmao-card">
              <span class="fmao-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M5 12.55a11 11 0 0 1 14.08 0" />
                  <path d="M1.42 9a16 16 0 0 1 21.16 0" />
                  <path d="M8.53 16.11a6 6 0 0 1 6.95 0" />
                  <circle cx="12" cy="20" r="1" fill="currentColor" />
                </svg>
              </span>
              <div class="fmao-card__body">
                <span class="fmao-card__no"><span class="fmao-card__num">03</span><i class="fmao-card__rule"></i></span>
                <h3 class="fmao-card__title">Fully Automated</h3>
                <p class="fm-text fmao-card__text">Integrated climate and fertilization control with real-time
                  monitoring.</p>
              </div>
            </li>
          </ol>

        </div>
      </section>

      <section class="fmco" id="compare-alternatives">
        <div class="fmco__inner">

          <div class="fmco__content">
            <span class="fmdm-eyebrow">Compare Alternatives<i class="fmdm-eyebrow__line"></i></span>
            <h2 class="fm-heading ">Find the<br><span class="fmco__accent">Right Fit</span></h2>
            <p class="fm-text fmco__text">Simple comparison with the nearest structure alternatives.</p>
               <a href="#options" class="fm-cta-btn">
         Explore Options
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        
          </div>

          <ul class="fmco-cards">
            <li class="fmco-card" tabindex="0">
              <img src="images/farm6.jpeg" alt="Leafy crops growing inside a protected greenhouse structure"
                class="fmco-card__img" loading="lazy" width="640" height="360">
              <h3 class="fmco-card__title">Net House</h3>
              <p class="fm-text fmco-card__text">Basic protection with moderate climate control.</p>
              <div class="fmco-spec"><span class="fmco-spec__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z" />
                  </svg></span><span class="fmco-spec__label">Climate Control</span><span
                  class="fmco-spec__value">Low</span></div>
              <div class="fmco-spec"><span class="fmco-spec__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <ellipse cx="12" cy="6" rx="8" ry="3" />
                    <path d="M4 6v6c0 1.66 3.58 3 8 3s8-1.34 8-3V6" />
                    <path d="M4 12v6c0 1.66 3.58 3 8 3s8-1.34 8-3v-6" />
                  </svg></span><span class="fmco-spec__label">Initial Cost</span><span
                  class="fmco-spec__value">Low</span></div>
              <div class="fmco-spec"><span class="fmco-spec__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22v-8" />
                    <path d="M9 14a3 3 0 0 1 3-3 3 3 0 0 1 3 3" />
                    <path d="M12 11V7" />
                    <path d="M12 7a2.5 2.5 0 0 1 2.5-2.5c1.38 0 2.5 1.12 2.5 2.5a2.5 2.5 0 0 1-2.5 2.5" />
                    <path d="M12 7a2.5 2.5 0 0 0-2.5-2.5c-1.38 0-2.5 1.12-2.5 2.5a2.5 2.5 0 0 0 2.5 2.5" />
                    <path d="M2 12C2 6.48 6.48 2 12 2s10 4.48 10 10-4.48 10-10 10S2 17.52 2 12Z" />
                  </svg></span><span class="fmco-spec__label">Crop Suitability</span><span
                  class="fmco-spec__value">Vegetables</span></div>
              <div class="fmco-spec"><span class="fmco-spec__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="20" x2="18" y2="10" />
                    <line x1="12" y1="20" x2="12" y2="4" />
                    <line x1="6" y1="20" x2="6" y2="14" />
                    <line x1="3" y1="20" x2="21" y2="20" />
                    <path d="m3 11 6-6 4 4 8-8" />
                  </svg></span><span class="fmco-spec__label">Productivity</span><span
                  class="fmco-spec__value">Moderate</span></div>
              <div class="fmco-spec"><span class="fmco-spec__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                    <polyline points="9 12 11 14 15 10" />
                  </svg></span><span class="fmco-spec__label">Durability</span><span class="fmco-spec__value">5-7
                  years</span></div>
            </li>
            <li class="fmco-card fmco-card--rec" tabindex="0">
              <span class="fmco-badge"><span class="fmco-badge__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M2 4l3 12h14l3-12-6 7-4-7-4 7-6-7z" />
                    <path d="M4 20h16" />
                  </svg></span>Recommended</span>
              <img src="images/automation.png"
                alt="Greenhouse with ventilation fan and automated climate-control systems" class="fmco-card__img"
                loading="lazy" width="640" height="360">
              <h3 class="fmco-card__title">Fan Pad Polyhouse</h3>
              <p class="fm-text fmco-card__text">Controlled environment for consistent and higher yields.</p>
              <div class="fmco-spec"><span class="fmco-spec__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z" />
                  </svg></span><span class="fmco-spec__label">Climate Control</span><span
                  class="fmco-spec__value">High</span></div>
              <div class="fmco-spec"><span class="fmco-spec__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <ellipse cx="12" cy="6" rx="8" ry="3" />
                    <path d="M4 6v6c0 1.66 3.58 3 8 3s8-1.34 8-3V6" />
                    <path d="M4 12v6c0 1.66 3.58 3 8 3s8-1.34 8-3v-6" />
                  </svg></span><span class="fmco-spec__label">Initial Cost</span><span
                  class="fmco-spec__value">Moderate</span></div>
              <div class="fmco-spec"><span class="fmco-spec__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22v-8" />
                    <path d="M9 14a3 3 0 0 1 3-3 3 3 0 0 1 3 3" />
                    <path d="M12 11V7" />
                    <path d="M12 7a2.5 2.5 0 0 1 2.5-2.5c1.38 0 2.5 1.12 2.5 2.5a2.5 2.5 0 0 1-2.5 2.5" />
                    <path d="M12 7a2.5 2.5 0 0 0-2.5-2.5c-1.38 0-2.5 1.12-2.5 2.5a2.5 2.5 0 0 0 2.5 2.5" />
                    <path d="M2 12C2 6.48 6.48 2 12 2s10 4.48 10 10-4.48 10-10 10S2 17.52 2 12Z" />
                  </svg></span><span class="fmco-spec__label">Crop Suitability</span><span class="fmco-spec__value">Wide
                  range</span></div>
              <div class="fmco-spec"><span class="fmco-spec__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="20" x2="18" y2="10" />
                    <line x1="12" y1="20" x2="12" y2="4" />
                    <line x1="6" y1="20" x2="6" y2="14" />
                    <line x1="3" y1="20" x2="21" y2="20" />
                    <path d="m3 11 6-6 4 4 8-8" />
                  </svg></span><span class="fmco-spec__label">Productivity</span><span
                  class="fmco-spec__value">High</span></div>
              <div class="fmco-spec"><span class="fmco-spec__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                    <polyline points="9 12 11 14 15 10" />
                  </svg></span><span class="fmco-spec__label">Durability</span><span class="fmco-spec__value">10-15
                  years</span></div>
            </li>
            <li class="fmco-card" tabindex="0">
              <img src="images/mid.png" alt="Protected cultivation structures including shade-net houses"
                class="fmco-card__img" loading="lazy" width="640" height="360">
              <h3 class="fmco-card__title">Shade House</h3>
              <p class="fm-text fmco-card__text">Reduces heat and provides partial shade.</p>
              <div class="fmco-spec"><span class="fmco-spec__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z" />
                  </svg></span><span class="fmco-spec__label">Climate Control</span><span
                  class="fmco-spec__value">Moderate</span></div>
              <div class="fmco-spec"><span class="fmco-spec__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <ellipse cx="12" cy="6" rx="8" ry="3" />
                    <path d="M4 6v6c0 1.66 3.58 3 8 3s8-1.34 8-3V6" />
                    <path d="M4 12v6c0 1.66 3.58 3 8 3s8-1.34 8-3v-6" />
                  </svg></span><span class="fmco-spec__label">Initial Cost</span><span class="fmco-spec__value">Low to
                  Moderate</span></div>
              <div class="fmco-spec"><span class="fmco-spec__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22v-8" />
                    <path d="M9 14a3 3 0 0 1 3-3 3 3 0 0 1 3 3" />
                    <path d="M12 11V7" />
                    <path d="M12 7a2.5 2.5 0 0 1 2.5-2.5c1.38 0 2.5 1.12 2.5 2.5a2.5 2.5 0 0 1-2.5 2.5" />
                    <path d="M12 7a2.5 2.5 0 0 0-2.5-2.5c-1.38 0-2.5 1.12-2.5 2.5a2.5 2.5 0 0 0 2.5 2.5" />
                    <path d="M2 12C2 6.48 6.48 2 12 2s10 4.48 10 10-4.48 10-10 10S2 17.52 2 12Z" />
                  </svg></span><span class="fmco-spec__label">Crop Suitability</span><span
                  class="fmco-spec__value">Shade loving crops</span></div>
              <div class="fmco-spec"><span class="fmco-spec__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="20" x2="18" y2="10" />
                    <line x1="12" y1="20" x2="12" y2="4" />
                    <line x1="6" y1="20" x2="6" y2="14" />
                    <line x1="3" y1="20" x2="21" y2="20" />
                    <path d="m3 11 6-6 4 4 8-8" />
                  </svg></span><span class="fmco-spec__label">Productivity</span><span
                  class="fmco-spec__value">Moderate</span></div>
              <div class="fmco-spec"><span class="fmco-spec__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                    <polyline points="9 12 11 14 15 10" />
                  </svg></span><span class="fmco-spec__label">Durability</span><span class="fmco-spec__value">7-10
                  years</span></div>
            </li>
            <li class="fmco-card" tabindex="0">
              <img src="images/banner3.jpeg" alt="Open crop rows and greenhouse structures at sunset"
                class="fmco-card__img" loading="lazy" width="640" height="360">
              <h3 class="fmco-card__title">Open Field</h3>
              <p class="fm-text fmco-card__text">Traditional farming without any protective structure.</p>
              <div class="fmco-spec"><span class="fmco-spec__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z" />
                  </svg></span><span class="fmco-spec__label">Climate Control</span><span
                  class="fmco-spec__value">None</span></div>
              <div class="fmco-spec"><span class="fmco-spec__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <ellipse cx="12" cy="6" rx="8" ry="3" />
                    <path d="M4 6v6c0 1.66 3.58 3 8 3s8-1.34 8-3V6" />
                    <path d="M4 12v6c0 1.66 3.58 3 8 3s8-1.34 8-3v-6" />
                  </svg></span><span class="fmco-spec__label">Initial Cost</span><span class="fmco-spec__value">Very
                  Low</span></div>
              <div class="fmco-spec"><span class="fmco-spec__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22v-8" />
                    <path d="M9 14a3 3 0 0 1 3-3 3 3 0 0 1 3 3" />
                    <path d="M12 11V7" />
                    <path d="M12 7a2.5 2.5 0 0 1 2.5-2.5c1.38 0 2.5 1.12 2.5 2.5a2.5 2.5 0 0 1-2.5 2.5" />
                    <path d="M12 7a2.5 2.5 0 0 0-2.5-2.5c-1.38 0-2.5 1.12-2.5 2.5a2.5 2.5 0 0 0 2.5 2.5" />
                    <path d="M2 12C2 6.48 6.48 2 12 2s10 4.48 10 10-4.48 10-10 10S2 17.52 2 12Z" />
                  </svg></span><span class="fmco-spec__label">Crop Suitability</span><span
                  class="fmco-spec__value">Seasonal crops</span></div>
              <div class="fmco-spec"><span class="fmco-spec__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="20" x2="18" y2="10" />
                    <line x1="12" y1="20" x2="12" y2="4" />
                    <line x1="6" y1="20" x2="6" y2="14" />
                    <line x1="3" y1="20" x2="21" y2="20" />
                    <path d="m3 11 6-6 4 4 8-8" />
                  </svg></span><span class="fmco-spec__label">Productivity</span><span class="fmco-spec__value">Low to
                  Moderate</span></div>
              <div class="fmco-spec"><span class="fmco-spec__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                    <polyline points="9 12 11 14 15 10" />
                  </svg></span><span class="fmco-spec__label">Durability</span><span class="fmco-spec__value">Depends on
                  climate</span></div>
            </li>
          </ul>

        </div>
        <!-- next block goes here -->
      </section>

  
  
  
  <script src="mobile.js?v=1.7" defer></script>
@endsection
