@extends('layouts.app')

@section('title', 'Protected Farming Solutions')
@section('body_class', 'protected-page automation-page')

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
           02. Explore our automation solutions: Smarter Technology for Healthier Farms
           =================================================================== -->
      <section class="fmau" id="automation-solutions" data-fmau>
        <div class="fmau__inner">

          <!-- HEADER -->
          <header class="fmau__head">
            <div class="afm-wwa__eyebrow">Explore our automation
                solutions</div>
            <h2 class="fm-heading ">Smarter Technology for <span class="fmdm__accent">Healthier Farms</span></h2>
            <p class="fm-text fmau__text">Our automation solutions help you manage your farm with precision, save
              resources and achieve consistent, high-quality yields with less effort.</p>
          </header>

          <!-- TABS -->
          <div class="fmau-tabs" role="tablist" aria-label="Automation solutions" data-fmau-tablist>

            <div class="fmau-tabs__cell" role="presentation">
              <button type="button" class="fmau-tab is-active" role="tab" id="fmau-tab-1" aria-selected="true"
                aria-controls="fmau-panel-1" tabindex="0" data-fmau-tab>
                <span class="fmau-tab__disc" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M5 12.55a11 11 0 0 1 14.08 0"></path>
                    <path d="M1.42 9a16 16 0 0 1 21.16 0"></path>
                    <path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path>
                    <circle cx="12" cy="20" r="1"></circle>
                  </svg>
                </span>
                <span class="fmau-tab__label">IoT Automation</span>
              </button>
            </div>

            <div class="fmau-tabs__cell" role="presentation">
              <button type="button" class="fmau-tab" role="tab" id="fmau-tab-2" aria-selected="false"
                aria-controls="fmau-panel-2" tabindex="-1" data-fmau-tab>
                <span class="fmau-tab__disc" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                  </svg>
                </span>
                <span class="fmau-tab__label">Automatic<br>Fertigation Unit</span>
              </button>
            </div>

            <div class="fmau-tabs__cell" role="presentation">
              <button type="button" class="fmau-tab" role="tab" id="fmau-tab-3" aria-selected="false"
                aria-controls="fmau-panel-3" tabindex="-1" data-fmau-tab>
                <span class="fmau-tab__disc" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M6 3h12v3H6z"></path>
                    <path d="M7 6v13a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V6"></path>
                    <line x1="10" y1="11" x2="14" y2="11"></line>
                    <line x1="10" y1="15" x2="13" y2="15"></line>
                  </svg>
                </span>
                <span class="fmau-tab__label">Automatic<br>Dosing Unit</span>
              </button>
            </div>

            <div class="fmau-tabs__cell" role="presentation">
              <button type="button" class="fmau-tab" role="tab" id="fmau-tab-4" aria-selected="false"
                aria-controls="fmau-panel-4" tabindex="-1" data-fmau-tab>
                <span class="fmau-tab__disc" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M12 22v-9"></path>
                    <path d="M12 13a5 5 0 0 0 5-5c0-3-5-5-5-5s0 2-5 5a5 5 0 0 0 5 5z"></path>
                    <path d="M7 17a3 3 0 0 0 3-3"></path>
                  </svg>
                </span>
                <span class="fmau-tab__label">Sensors &amp;<br>Measuring Devices</span>
              </button>
            </div>
          </div>

          <!-- PANELS (all four in the same grid cell) -->
          <div class="fmau-panels">

            <!-- PANEL 1 -->
            <div class="fmau-panel is-active" role="tabpanel" id="fmau-panel-1" aria-labelledby="fmau-tab-1"
              aria-hidden="false" data-fmau-panel>
              <figure class="fmau-panel__media">
                <img src="images/automation.png" alt="IoT control box with a touchscreen inside a hydroponic greenhouse"
                  loading="eager" width="1360" height="660">
              </figure>
              <div class="fmau-panel__body">
                <span class="fmau-panel__eyebrow"><i></i>IoT Automation</span>
                <h3 class="fm-heading fmau-panel__title">IoT Automation</h3>
                <p class="fm-text fmau-panel__text">Complete farm control at your fingertips. Monitor, automate and
                  manage your entire growing environment with real-time data and remote access.</p>
                <ul class="fmau-feats">
                  <li class="fmau-feat">
                    <span class="fmau-feat__disc" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                        stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="20" x2="18" y2="10"></line>
                        <line x1="12" y1="20" x2="12" y2="4"></line>
                        <line x1="6" y1="20" x2="6" y2="14"></line>
                      </svg>
                    </span>
                    <div class="fmau-feat__txt">
                      <span class="fmau-feat__title">Real-time monitoring</span>
                      <span class="fm-text fmau-feat__sub">Track key parameters anytime, anywhere.</span>
                    </div>
                  </li>
                  <li class="fmau-feat">
                    <span class="fmau-feat__disc" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                        stroke-linecap="round" stroke-linejoin="round">
                        <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                        <line x1="12" y1="18" x2="12.01" y2="18"></line>
                      </svg>
                    </span>
                    <div class="fmau-feat__txt">
                      <span class="fmau-feat__title">Remote control</span>
                      <span class="fm-text fmau-feat__sub">Manage your farm from any device.</span>
                    </div>
                  </li>
                  <li class="fmau-feat">
                    <span class="fmau-feat__disc" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22v-9"></path>
                        <path d="M12 13a5 5 0 0 0 5-5c0-3-5-5-5-5s0 2-5 5a5 5 0 0 0 5 5z"></path>
                      </svg>
                    </span>
                    <div class="fmau-feat__txt">
                      <span class="fmau-feat__title">Scalable for any farm size</span>
                      <span class="fm-text fmau-feat__sub">Suitable for small to large commercial farms.</span>
                    </div>
                  </li>
                </ul>
                     <a href="/solutions/sensors" class="fm-cta-btn">
            Explore Solution
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
              </div>
            </div>

            <!-- PANEL 2 -->
            <div class="fmau-panel" role="tabpanel" id="fmau-panel-2" aria-labelledby="fmau-tab-2" aria-hidden="true"
              data-fmau-panel>
              <figure class="fmau-panel__media">
                <img src="images/auto.png" alt="Automatic fertigation unit with tanks and injection pumps"
                  loading="lazy" width="1360" height="660">
              </figure>
              <div class="fmau-panel__body">
                <span class="fmau-panel__eyebrow"><i></i>Automatic Fertigation Unit</span>
                <h3 class="fm-heading fmau-panel__title">Automatic Fertigation Unit</h3>
                <p class="fm-text fmau-panel__text">Deliver water and nutrients to every plant in the exact amount and
                  at the right time, with automated mixing, injection and scheduling.</p>
                <ul class="fmau-feats">
                  <li class="fmau-feat">
                    <span class="fmau-feat__disc" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                      </svg>
                    </span>
                    <div class="fmau-feat__txt">
                      <span class="fmau-feat__title">Precise nutrient delivery</span>
                      <span class="fm-text fmau-feat__sub">Accurate EC and pH control for every crop stage.</span>
                    </div>
                  </li>
                  <li class="fmau-feat">
                    <span class="fmau-feat__disc" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                        </path>
                        <path d="M2 21c0-3 1.85-5.36 5.08-6"></path>
                      </svg>
                    </span>
                    <div class="fmau-feat__txt">
                      <span class="fmau-feat__title">Water and fertiliser savings</span>
                      <span class="fm-text fmau-feat__sub">Cut waste while keeping yields consistent.</span>
                    </div>
                  </li>
                  <li class="fmau-feat">
                    <span class="fmau-feat__disc" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                      </svg>
                    </span>
                    <div class="fmau-feat__txt">
                      <span class="fmau-feat__title">Programmable schedules</span>
                      <span class="fm-text fmau-feat__sub">Set, repeat and adjust irrigation cycles easily.</span>
                    </div>
                  </li>
                </ul>
                    <a href="/solutions/sensors" class="fm-cta-btn">
            Explore Solution
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
              </div>
            </div>

            <!-- PANEL 3 -->
            <div class="fmau-panel" role="tabpanel" id="fmau-panel-3" aria-labelledby="fmau-tab-3" aria-hidden="true"
              data-fmau-panel>
              <figure class="fmau-panel__media">
                <img src="images/ec-greenhouse.jpg" alt="Automatic dosing unit with dosing channels and controller"
                  loading="lazy" width="1360" height="660">
              </figure>
              <div class="fmau-panel__body">
                <span class="fmau-panel__eyebrow"><i></i>Automatic Dosing Unit</span>
                <h3 class="fm-heading fmau-panel__title">Automatic Dosing Unit</h3>
                <p class="fm-text fmau-panel__text">Accurate dosing of nutrients, acids and additives, automatically
                  controlled for stable growing conditions.</p>
                <ul class="fmau-feats">
                  <li class="fmau-feat">
                    <span class="fmau-feat__disc" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <circle cx="12" cy="12" r="6"></circle>
                        <circle cx="12" cy="12" r="2"></circle>
                      </svg>
                    </span>
                    <div class="fmau-feat__txt">
                      <span class="fmau-feat__title">Consistent dosing</span>
                      <span class="fm-text fmau-feat__sub">Same quality of solution in every cycle.</span>
                    </div>
                  </li>
                  <li class="fmau-feat">
                    <span class="fmau-feat__disc" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path
                          d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 1 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 1 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 1 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 1 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z">
                        </path>
                      </svg>
                    </span>
                    <div class="fmau-feat__txt">
                      <span class="fmau-feat__title">Less manual work</span>
                      <span class="fm-text fmau-feat__sub">Automation reduces labour and human error.</span>
                    </div>
                  </li>
                  <li class="fmau-feat">
                    <span class="fmau-feat__disc" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2v6m0 8v6M2 12h6m8 0h6"></path>
                        <circle cx="12" cy="12" r="4"></circle>
                      </svg>
                    </span>
                    <div class="fmau-feat__txt">
                      <span class="fmau-feat__title">Easy integration</span>
                      <span class="fm-text fmau-feat__sub">Works with your existing irrigation setup.</span>
                    </div>
                  </li>
                </ul>
                   <a href="/solutions/sensors" class="fm-cta-btn">
            Explore Solution
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
              </div>
            </div>

            <!-- PANEL 4 -->
            <div class="fmau-panel" role="tabpanel" id="fmau-panel-4" aria-labelledby="fmau-tab-4" aria-hidden="true"
              data-fmau-panel>
              <figure class="fmau-panel__media">
                <img src="images/greenhouse-connect.jpg"
                  alt="Sensors measuring temperature, humidity and nutrient levels in a greenhouse" loading="lazy"
                  width="1360" height="660">
              </figure>
              <div class="fmau-panel__body">
                <span class="fmau-panel__eyebrow"><i></i>Sensors &amp; Measuring Devices</span>
                <h3 class="fm-heading fmau-panel__title">Sensors &amp; Measuring Devices</h3>
                <p class="fm-text fmau-panel__text">Measure what matters: temperature, humidity, EC, pH, soil moisture
                  and light, so every decision is based on data.</p>
                <ul class="fmau-feats">
                  <li class="fmau-feat">
                    <span class="fmau-feat__disc" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path
                          d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm1 14.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1-4.5l-2 3">
                        </path>
                      </svg>
                    </span>
                    <div class="fmau-feat__txt">
                      <span class="fmau-feat__title">Accurate readings</span>
                      <span class="fm-text fmau-feat__sub">Reliable data for climate and root zone.</span>
                    </div>
                  </li>
                  <li class="fmau-feat">
                    <span class="fmau-feat__disc" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                      </svg>
                    </span>
                    <div class="fmau-feat__txt">
                      <span class="fmau-feat__title">Live alerts</span>
                      <span class="fm-text fmau-feat__sub">Get notified when values go out of range.</span>
                    </div>
                  </li>
                  <li class="fmau-feat">
                    <span class="fmau-feat__disc" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                        <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                      </svg>
                    </span>
                    <div class="fmau-feat__txt">
                      <span class="fmau-feat__title">Connected to your system</span>
                      <span class="fm-text fmau-feat__sub">Feeds the controller and the IoT dashboard.</span>
                    </div>
                  </li>
                </ul>
        
                 <a href="/solutions/sensors" class="fm-cta-btn">
            Explore Solution
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
              </div>
            </div>

          </div>
        </div>
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
           04. How much automation does your farm need?
           =================================================================== -->
      <section class="fmal" id="automation-level">
        <div class="fmal__inner">

          <div class="fmal__content">
          <div class="afm-wwa__eyebrow">How much automation does your farm need?</div>
            <h2 class="fm-heading ">Find the Right<br> <span class="fmdm__accent">Automation</span> Level</h2>
            <p class="fm-text fmal__text">The right level of automation depends on your farm size, crop requirements,
              labour availability and investment. Choose a solution that fits your goals and grow with confidence.</p>
             <a href="#automation-finder" class="fm-cta-btn">
            Find the Right Automation Level
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
          </div>

          <ol class="fmal-cols">
            <li class="fmal-col">
              <span class="fmal-col__no"><span class="fmal-col__num">01</span><i class="fmal-col__rule"></i></span>
              <h3 class="fm-heading fmal-col__title">Manual</h3>
              <p class="fm-text fmal-col__text">Suitable for small farms or those starting their journey.</p>
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
                  <span class="fmal-check__label">Lower initial cost</span>
                </li>
                <li class="fmal-check">
                  <span class="fmal-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmal-check__label">Requires more labour</span>
                </li>
                <li class="fmal-check">
                  <span class="fmal-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmal-check__label">Good for small scale</span>
                </li>
              </ul>
            </li>
            <li class="fmal-col">
              <span class="fmal-col__no"><span class="fmal-col__num">02</span><i class="fmal-col__rule"></i></span>
              <h3 class="fm-heading fmal-col__title">Semi-Automated</h3>
              <p class="fm-text fmal-col__text">Best for growing farms looking for better efficiency.</p>
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
                  <span class="fmal-check__label">Automated fertigation &amp; irrigation</span>
                </li>
                <li class="fmal-check">
                  <span class="fmal-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmal-check__label">Reduced labour dependency</span>
                </li>
                <li class="fmal-check">
                  <span class="fmal-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmal-check__label">Better yield and uniformity</span>
                </li>
              </ul>
            </li>
            <li class="fmal-col">
              <span class="fmal-col__no"><span class="fmal-col__num">03</span><i class="fmal-col__rule"></i></span>
              <h3 class="fm-heading fmal-col__title">Advanced Automation</h3>
              <p class="fm-text fmal-col__text">Ideal for commercial farms with higher production goals.</p>
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
                  <span class="fmal-check__label">Complete climate and fertigation control</span>
                </li>
                <li class="fmal-check">
                  <span class="fmal-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmal-check__label">Real-time monitoring and alerts</span>
                </li>
                <li class="fmal-check">
                  <span class="fmal-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmal-check__label">Maximum efficiency and scalability</span>
                </li>
              </ul>
            </li>
          </ol>

        </div>
        <!-- next block goes here -->
      </section>
@endsection
