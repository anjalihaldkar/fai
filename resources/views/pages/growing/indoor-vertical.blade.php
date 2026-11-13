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

          <h1 class="fm-heading ">
            Indoor Vertical <br>Farming for <span class="fmdm__accent">Controlled-Environment Agriculture.</span>
          </h1>

          <p class="fm-text fmab__text">
           Engineered indoor farming solutions that deliver consistent yields,
            superior quality and year-round production — in a controlled, resource-efficient environment.
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
           02. Explore Our Hydroponic Systems: Smarter Technology for Healthier Farms
           =================================================================== -->
      <section class="fmau" id="automation-solutions" data-fmau>
        <div class="fmau__inner">

          <!-- HEADER -->
          <header class="fmau__head">
            <div class="afm-wwa__eyebrow">Explore the Model</div>
            <h2 class="fm-heading ">A Complete Indoor Farming <span class="fmdm__accent">Ecosystem</span></h2>
            <p class="fm-text fmau__text">Multiple integrated layers work together to create an optimal environment for crops to grow,
                 ensuring higher productivity and consistent quality all year round.</p>
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
                <span class="fmau-tab__label">Grow Racks</span>
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
                <span class="fmau-tab__label">Climate Control</span>
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
                <span class="fmau-tab__label">LED Lighting</span>
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
                <span class="fmau-tab__label">Automation</span>
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
                <span class="fmau-panel__eyebrow"><i></i>Grow Racks</span>
                <h3 class="fm-heading fmau-panel__title">Maximize Space. Increase Productivity.</h3>
                <p class="fm-text fmau-panel__text">Grow racks provide a multi-layer cultivation structure that maximizes growing space,
                     improves crop organization, and increases productivity for efficient indoor farming.</p>
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
                      <span class="fmau-feat__title">Space Optimization</span>
                      <span class="fm-text fmau-feat__sub">Maximize cultivation area with multi-layer growing racks.</span>
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
                      <span class="fmau-feat__title">Organized Cultivation</span>
                      <span class="fm-text fmau-feat__sub">Keep crops systematically arranged for easy access and management.</span>
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
                      <span class="fmau-feat__title">Higher Productivity</span>
                      <span class="fm-text fmau-feat__sub">Grow more crops in limited space for efficient year-round production.</span>
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
                <span class="fmau-panel__eyebrow"><i></i>Climate Control</span>
                <h3 class="fm-heading fmau-panel__title">Maintain the Perfect Growing Environment.</h3>
                <p class="fm-text fmau-panel__text">Climate control systems regulate temperature, humidity,
                     and CO₂ to ensure healthy plant growth and consistent crop quality.</p>
                <ul class="fmau-feats">
                  <li class="fmau-feat">
                    <span class="fmau-feat__disc" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                      </svg>
                    </span>
                    <div class="fmau-feat__txt">
                      <span class="fmau-feat__title">Temperature Regulation</span>
                      <span class="fm-text fmau-feat__sub">Maintain ideal temperatures for healthy plant growth.</span>
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
                      <span class="fmau-feat__title">Humidity Management</span>
                      <span class="fm-text fmau-feat__sub">Control moisture levels to support plant health and reduce the risk of disease.</span>
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
                      <span class="fmau-feat__title">CO₂ Optimization</span>
                      <span class="fm-text fmau-feat__sub">Manage carbon dioxide levels to support photosynthesis and improve crop productivity.</span>
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
                <span class="fmau-panel__eyebrow"><i></i>LED Lighting</span>
                <h3 class="fm-heading fmau-panel__title">Smarter Lighting for Healthier Growth.</h3>
                <p class="fm-text fmau-panel__text">Energy-efficient LED lighting provides optimized light spectrums to promote faster plant growth,
                     improve crop quality, and support year-round indoor farming.
</p>
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
                      <span class="fmau-feat__title">Energy Efficiency</span>
                      <span class="fm-text fmau-feat__sub">Reduce electricity consumption with efficient LED technology.</span>
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
                      <span class="fmau-feat__title">Spectrum Optimization</span>
                      <span class="fm-text fmau-feat__sub">Deliver the right light wavelengths for healthy plant development.</span>
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
                      <span class="fmau-feat__title">Faster Growth</span>
                      <span class="fm-text fmau-feat__sub">Support better photosynthesis and consistent crop production.</span>
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
                <span class="fmau-panel__eyebrow"><i></i>Automation</span>
                <h3 class="fm-heading fmau-panel__title">Smart Automation for Efficient Farming.</h3>
                <p class="fm-text fmau-panel__text">Integrated monitoring and automated controls simplify farm management,
                     improve efficiency, and ensure consistent, high-quality crop production.</p>
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
                      <span class="fmau-feat__title">Real-Time Monitoring</span>
                      <span class="fm-text fmau-feat__sub">Track growing conditions and crop performance in real time.</span>
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
                      <span class="fmau-feat__title">Automated Controls</span>
                      <span class="fm-text fmau-feat__sub">Automatically manage lighting, irrigation, and climate conditions.</span>
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
                      <span class="fmau-feat__title">Consistent Quality</span>
                      <span class="fm-text fmau-feat__sub">Maintain optimal growing conditions for reliable, high-quality yields.</span>
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

           <!-- ============================================================
           04. WHICH STRUCTURE FITS YOUR FARM?
           ============================================================ -->
      <section class="fmwf" id="which-structure">
        <div class="fmwf__inner">

          <!-- HEADER -->
          <header class="fmwf__head">

            <span class="fmab-eyebrow">What Makes the System Work<i class="fmab-eyebrow__line"></i></span>


            <h2 class="fm-heading ">Integrated Components. <span class="fmwf__accent">Exceptional Results.</span></h2>
            <p class="fm-text fmwf__text">A precisely engineered system where every component works 
                in sync to deliver consistent growth, higher productivity and efficient resource use.
            </p>
          </header>

          <!-- SIX CARDS -->
          <ul class="fmwf-cards">

            <!-- 1: Location -->
            <li class="fmwf-card">
              <span class="fmwf-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
                  <circle cx="12" cy="9" r="2.5" />
                </svg>
              </span>
              <h3 class="fmwf-card__title">Vertical Racks</h3>
              <p class="fm-text fmwf-card__text">Multi-layer growing structure for higher productivity.</p>
              <img src="images/wf-location.jpg"
                alt="Aerial view of terraced green farmland in a mountain valley with a river running through"
                class="fmwf-card__img" loading="lazy" width="640" height="330">
            
            </li>

            <!-- 2: Climate -->
            <li class="fmwf-card">
              <span class="fmwf-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <circle cx="12" cy="12" r="4" />
                  <line x1="12" y1="2" x2="12" y2="4" />
                  <line x1="12" y1="20" x2="12" y2="22" />
                  <line x1="4.22" y1="4.22" x2="5.64" y2="5.64" />
                  <line x1="18.36" y1="18.36" x2="19.78" y2="19.78" />
                  <line x1="2" y1="12" x2="4" y2="12" />
                  <line x1="20" y1="12" x2="22" y2="12" />
                  <line x1="4.22" y1="19.78" x2="5.64" y2="18.36" />
                  <line x1="18.36" y1="5.64" x2="19.78" y2="4.22" />
                </svg>
              </span>
              <h3 class="fmwf-card__title">Climate Control</h3>
              <p class="fm-text fmwf-card__text">Precise temperature, humidity and CO₂ management.</p>
              <img src="images/wf-climate.jpg"
                alt="Golden sunrise over a misty Tuscan-style valley with rolling green hills and farmland below"
                class="fmwf-card__img" loading="lazy" width="640" height="330">
            
            </li>

            <!-- 3: Crop -->
            <li class="fmwf-card">
              <span class="fmwf-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M12 21V10" />
                  <path d="M12 14c-3-1-5.5-3.5-5.5-6.5 3 0 5.5 2.5 5.5 6.5Z" />
                  <path d="M12 11c3-1 5.5-3.5 5.5-6.5-3 0-5.5 2.5-5.5 6.5Z" />
                </svg>
              </span>
              <h3 class="fmwf-card__title">Irrigation & Fertigation</h3>
              <p class="fm-text fmwf-card__text">Automated delivery of water and nutrients.</p>
              <img src="images/wf-crop.jpg"
                alt="Young green seedlings sprouting from dark moist soil inside a greenhouse nursery"
                class="fmwf-card__img" loading="lazy" width="640" height="330">
             
            </li>

            <!-- 4: Water -->
            <li class="fmwf-card">
              <span class="fmwf-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M12 2C6 10 4 13.5 4 16a8 8 0 0016 0c0-2.5-2-6-8-14z" />
                </svg>
              </span>
              <h3 class="fmwf-card__title">LED Lighting</h3>
              <p class="fm-text fmwf-card__text">Spectrum-optimized LED lights for faster growth and better quality.</p>
              <img src="images/wf-water.jpg"
                alt="Close-up of black drip irrigation pipe with crystal water droplets dripping onto leafy green crops"
                class="fmwf-card__img" loading="lazy" width="640" height="330">
             
            </li>

            <!-- 5: Budget -->
            <li class="fmwf-card">
              <span class="fmwf-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <ellipse cx="12" cy="6" rx="8" ry="3" />
                  <path d="M4 6v4c0 1.66 3.58 3 8 3s8-1.34 8-3V6" />
                  <path d="M4 10v4c0 1.66 3.58 3 8 3s8-1.34 8-3v-4" />
                </svg>
              </span>
              <h3 class="fmwf-card__title">Monitoring & Automation</h3>
              <p class="fm-text fmwf-card__text">Real-time monitoring and intelligent controls.</p>
              <img src="images/wf-budget.jpg"
                alt="Silhouette of polyhouse greenhouse structures against a dramatic orange and pink sunrise sky"
                class="fmwf-card__img" loading="lazy" width="640" height="330">
           
            </li>

            <!-- 6: Production Goals -->
            <li class="fmwf-card">
              <span class="fmwf-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <line x1="18" y1="20" x2="18" y2="10" />
                  <line x1="12" y1="20" x2="12" y2="4" />
                  <line x1="6" y1="20" x2="6" y2="14" />
                </svg>
              </span>
              <h3 class="fmwf-card__title">Workflow Efficiency</h3>
              <p class="fm-text fmwf-card__text">Seamless integration for consistent, reliable production.</p>
              <img src="images/wf-production.jpg"
                alt="Neat rows of fresh green lettuce growing hydroponically in a large modern glass greenhouse"
                class="fmwf-card__img" loading="lazy" width="640" height="330">
              
            </li>

          </ul><!-- /fmwf-cards -->

     

        </div><!-- /fmwf__inner -->
      </section>

		</main>

   
  </div>
@endsection
