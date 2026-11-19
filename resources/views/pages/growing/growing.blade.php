@extends('layouts.app')

@section('title', 'Protected Farming Solutions')
@section('body_class', 'protected-page growing-page')

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
      <!-- ============================================================
           02. EXPLORE GROWING SYSTEMS
           ============================================================ -->
      <section class="fmts" id="growing-systems-explore" data-growing-systems-slider>
        <div class="fmts__inner">

          <header class="fmts__head">
          
           
        
              <span class="fmab-eyebrow">Explore Growing Systems <i class="fmab-eyebrow__line"></i></span>
             
             
            
            <h2 class="fm-heading ">Six Growing Systems.<br><span class="fmts__accent">Multiple Possibilities.</span></h2>
            <p class="fm-text fmab__text">Choose the right growing system based on your crop, location and business goals.</p>
          </header>

          <ol class="fmts-cards" data-growing-systems-track tabindex="0" role="region"
            aria-label="Growing systems" aria-roledescription="carousel">
            <!-- 01. Outdoor Hydroponics -->
            <li class="fmts-item">
              <article class="fmts-card fmts-card--green">
                <img src="images/farm6.jpeg" alt="Lettuce plants growing on a white hydroponic channel" class="fmts-card__img" loading="lazy" width="984" height="742">
                <span class="fmts-card__no">01</span>
                <span class="fmts-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 10a4 4 0 0 0-4-4c0 3 2 4 4 4Z"/>
                    <path d="M12 10a4 4 0 0 1 4-4c0 3-2 4-4 4Z"/>
                    <path d="M12 10v6"/>
                    <path d="M4 17s2-2 5-2 3 2 6 2 5-2 5-2"/>
                  </svg>
                </span>
                <div class="fmts-card__body">
                  <h3 class="fmts-card__title">Outdoor Hydroponics</h3>
                  <p class="fm-text fmts-card__text">Soilless growing with optimized nutrient supply for higher yield and quality.</p>
                  <i class="fmts-card__rule" aria-hidden="true"></i>
                  <ul class="fmts-checks">
                    <li class="fmts-check">
                      <span class="fmts-check__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                          <line x1="18" y1="20" x2="18" y2="10"/>
                          <line x1="12" y1="20" x2="12" y2="4"/>
                          <line x1="6" y1="20" x2="6" y2="14"/>
                        </svg>
                      </span>
                      <span class="fmts-check__label">Higher productivity</span>
                    </li>
                    <li class="fmts-check">
                      <span class="fmts-check__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/>
                        </svg>
                      </span>
                      <span class="fmts-check__label">Efficient water usage</span>
                    </li>
                    <li class="fmts-check">
                      <span class="fmts-check__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M11 20A7 7 0 0 1 4 13c0-4.4 3.6-8 8-8s8 3.6 8 8a7 7 0 0 1-7 7Z"/>
                          <path d="M12 5v15"/>
                        </svg>
                      </span>
                      <span class="fmts-check__label">Clean and uniform produce</span>
                    </li>
                  </ul>
                  <a href="#hydroponics" class="fmts-card__go" aria-label="Learn more about Outdoor Hydroponics">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="5" y1="12" x2="19" y2="12"/>
                      <polyline points="12 5 19 12 12 19"/>
                    </svg>
                  </a>
                </div>
              </article>
            </li>

            <!-- 02. Cocopeat-Based Growing -->
            <li class="fmts-item">
              <article class="fmts-card fmts-card--green">
                <img src="images/coco.png" alt="Young seedlings growing in cocopeat blocks with drip irrigation tubes" class="fmts-card__img" loading="lazy" width="1448" height="1086">
                <span class="fmts-card__no">02</span>
                <span class="fmts-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M7 20h10"/>
                    <path d="M10 20c0-4.4 2-8 7-8"/>
                    <path d="M17 12c-3-3-3-8 0-10-4 0-8 3-7 10"/>
                    <path d="M12 14c-2.5-2.5-2.5-6.5 0-8-3 0-6 2.5-5 8"/>
                  </svg>
                </span>
                <div class="fmts-card__body">
                  <h3 class="fmts-card__title">Cocopeat-Based Growing</h3>
                  <p class="fm-text fmts-card__text">Sustainable and versatile growing system suitable for a wide range of crops.</p>
                  <i class="fmts-card__rule" aria-hidden="true"></i>
                  <ul class="fmts-checks">
                    <li class="fmts-check">
                      <span class="fmts-check__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M12 3v11"/>
                          <path d="M12 14l-4 7"/>
                          <path d="M12 14l4 7"/>
                          <path d="M8 10l-4 4"/>
                          <path d="M16 10l4 4"/>
                        </svg>
                      </span>
                      <span class="fmts-check__label">Excellent root aeration</span>
                    </li>
                    <li class="fmts-check">
                      <span class="fmts-check__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/>
                        </svg>
                      </span>
                      <span class="fmts-check__label">Good water retention</span>
                    </li>
                    <li class="fmts-check">
                      <span class="fmts-check__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M7 20h10"/>
                          <path d="M12 20v-8"/>
                          <path d="M12 12c-3-2.5-3-6.5 0-8 3 0 6 2.5 5 8"/>
                          <path d="M12 15c-3 0-5-2-5-5 3-1 5 1 5 5z"/>
                        </svg>
                      </span>
                      <span class="fmts-check__label">Ideal for high-value crops</span>
                    </li>
                  </ul>
                  <a href="#cocopeat" class="fmts-card__go" aria-label="Learn more about Cocopeat-Based Growing">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="5" y1="12" x2="19" y2="12"/>
                      <polyline points="12 5 19 12 12 19"/>
                    </svg>
                  </a>
                </div>
              </article>
            </li>

            <!-- 03. Soil-Based Growing -->
            <li class="fmts-item">
              <article class="fmts-card fmts-card--green">
                <img src="images/pro3.jpeg" alt="Rows of lettuce plants growing in rich soil inside a greenhouse" class="fmts-card__img" loading="lazy" width="2700" height="2025">
                <span class="fmts-card__no">03</span>
                <span class="fmts-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M11 20A7 7 0 0 1 4 13c0-4.4 3.6-8 8-8s8 3.6 8 8a7 7 0 0 1-7 7Z"/>
                    <path d="M12 5v15"/>
                  </svg>
                </span>
                <div class="fmts-card__body">
                  <h3 class="fmts-card__title">Soil-Based Growing</h3>
                  <p class="fm-text fmts-card__text">Naturally grown with improved soil management for healthy and consistent yields.</p>
                  <i class="fmts-card__rule" aria-hidden="true"></i>
                  <ul class="fmts-checks">
                    <li class="fmts-check">
                      <span class="fmts-check__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M11 20A7 7 0 0 1 4 13c0-4.4 3.6-8 8-8s8 3.6 8 8a7 7 0 0 1-7 7Z"/>
                          <path d="M12 5v15"/>
                        </svg>
                      </span>
                      <span class="fmts-check__label">Suitable for traditional crops</span>
                    </li>
                    <li class="fmts-check">
                      <span class="fmts-check__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                          <ellipse cx="12" cy="6" rx="8" ry="3"/>
                          <path d="M4 6v6c0 1.66 3.58 3 8 3s8-1.34 8-3V6"/>
                          <path d="M4 12v6c0 1.66 3.58 3 8 3s8-1.34 8-3v-6"/>
                        </svg>
                      </span>
                      <span class="fmts-check__label">Cost-effective solution</span>
                    </li>
                    <li class="fmts-check">
                      <span class="fmts-check__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                          <path d="m9 12 2 2 4-4"/>
                        </svg>
                      </span>
                      <span class="fmts-check__label">Proven and reliable method</span>
                    </li>
                  </ul>
                  <a href="#soil-based" class="fmts-card__go" aria-label="Learn more about Soil-Based Growing">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="5" y1="12" x2="19" y2="12"/>
                      <polyline points="12 5 19 12 12 19"/>
                    </svg>
                  </a>
                </div>
              </article>
            </li>

            <!-- 04. Indoor Hydroponics -->
            <li class="fmts-item">
              <article class="fmts-card fmts-card--green">
                <img src="images/farm4.jpeg" alt="Leafy greens growing in an indoor hydroponic system" class="fmts-card__img" loading="lazy">
                <span class="fmts-card__no">04</span>
                <span class="fmts-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 21v-9"/>
                    <path d="M12 12c-4 0-7-3-7-7 4 0 7 3 7 7Z"/>
                    <path d="M12 15c0-4 3-7 7-7 0 4-3 7-7 7Z"/>
                    <path d="M4 21h16"/>
                  </svg>
                </span>
                <div class="fmts-card__body">
                  <h3 class="fmts-card__title">Indoor Hydroponics</h3>
                  <p class="fm-text fmts-card__text">Grow crops in a controlled indoor environment with a soilless nutrient system.</p>
                  <i class="fmts-card__rule" aria-hidden="true"></i>
                  <ul class="fmts-checks">
                    <li class="fmts-check"><span class="fmts-check__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v18M5 8h14M7 8l-3 8h6L7 8Zm10 0-3 8h6l-3-8Z"/></svg></span><span class="fmts-check__label">Controlled growing conditions</span></li>
                    <li class="fmts-check"><span class="fmts-check__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/></svg></span><span class="fmts-check__label">Precise nutrient delivery</span></li>
                    <li class="fmts-check"><span class="fmts-check__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20V9l8-5 8 5v11"/><path d="M9 20v-6h6v6"/></svg></span><span class="fmts-check__label">Suitable for indoor farms</span></li>
                  </ul>
                  <a href="#what-can-you-grow" class="fmts-card__go" aria-label="Explore crops for Indoor Hydroponics">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                  </a>
                </div>
              </article>
            </li>

            <!-- 05. NFT Hydroponics -->
            <li class="fmts-item">
              <article class="fmts-card fmts-card--green">
                <img src="images/farm5.jpeg" alt="Plants growing along a recirculating hydroponic channel" class="fmts-card__img" loading="lazy">
                <span class="fmts-card__no">05</span>
                <span class="fmts-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 18h18M5 18V9h14v9"/>
                    <path d="M8 9V6h8v3"/>
                    <path d="M12 3v3"/>
                    <path d="M9 13h.01M15 13h.01"/>
                  </svg>
                </span>
                <div class="fmts-card__body">
                  <h3 class="fmts-card__title">NFT Hydroponics</h3>
                  <p class="fm-text fmts-card__text">A thin film of nutrient solution flows continuously past crop roots in channels.</p>
                  <i class="fmts-card__rule" aria-hidden="true"></i>
                  <ul class="fmts-checks">
                    <li class="fmts-check"><span class="fmts-check__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/></svg></span><span class="fmts-check__label">Recirculating nutrient flow</span></li>
                    <li class="fmts-check"><span class="fmts-check__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v18M5 8h14M7 8l-3 8h6L7 8Zm10 0-3 8h6l-3-8Z"/></svg></span><span class="fmts-check__label">Efficient root-zone access</span></li>
                    <li class="fmts-check"><span class="fmts-check__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 4 13c0-4.4 3.6-8 8-8s8 3.6 8 8a7 7 0 0 1-7 7Z"/><path d="M12 5v15"/></svg></span><span class="fmts-check__label">Well-suited to leafy greens</span></li>
                  </ul>
                  <a href="#what-can-you-grow" class="fmts-card__go" aria-label="Explore crops for NFT Hydroponics">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                  </a>
                </div>
              </article>
            </li>

            <!-- 06. Drip Irrigation Growing -->
            <li class="fmts-item">
              <article class="fmts-card fmts-card--green">
                <img src="images/farm1.jpeg" alt="Crop rows supplied with drip irrigation" class="fmts-card__img" loading="lazy">
                <span class="fmts-card__no">06</span>
                <span class="fmts-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/>
                    <path d="M12 12v6"/>
                  </svg>
                </span>
                <div class="fmts-card__body">
                  <h3 class="fmts-card__title">Drip Irrigation Growing</h3>
                  <p class="fm-text fmts-card__text">Deliver water and nutrients directly to the crop root zone through drip lines.</p>
                  <i class="fmts-card__rule" aria-hidden="true"></i>
                  <ul class="fmts-checks">
                    <li class="fmts-check"><span class="fmts-check__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/></svg></span><span class="fmts-check__label">Targeted water delivery</span></li>
                    <li class="fmts-check"><span class="fmts-check__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20h16M6 20V9l6-5 6 5v11"/><path d="M9 20v-5h6v5"/></svg></span><span class="fmts-check__label">Works across many crop types</span></li>
                    <li class="fmts-check"><span class="fmts-check__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22v-9"/><path d="M12 13c-2.5 0-5-2.5-5-5a5 5 0 0 1 10 0c0 2.5-2.5 5-5 5Z"/></svg></span><span class="fmts-check__label">Can support fertigation</span></li>
                  </ul>
                  <a href="#what-can-you-grow" class="fmts-card__go" aria-label="Explore crops for Drip Irrigation Growing">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                  </a>
                </div>
              </article>
            </li>
          </ol>

          <div class="fmts-nav growing-systems-nav" data-growing-systems-nav aria-label="Growing systems navigation">
            <button type="button" class="fmts-nav__btn fmts-nav__btn--prev" data-growing-systems-prev
              aria-label="Show previous growing system">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M19 12H5M12 19l-7-7 7-7" />
              </svg>
            </button>
            <button type="button" class="fmts-nav__btn fmts-nav__btn--next" data-growing-systems-next
              aria-label="Show next growing system">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </button>
          </div>

        </div>
      </section>

      <!-- ============================================================
           03. WHAT CAN YOU GROW?
           ============================================================ -->
      <section class="fmwg" id="what-can-you-grow">
        <div class="fmwg__inner">

          <input type="radio" name="fmwg-tab" id="fmwg-t1" class="fmwg__radio" checked>
          <input type="radio" name="fmwg-tab" id="fmwg-t2" class="fmwg__radio">
          <input type="radio" name="fmwg-tab" id="fmwg-t3" class="fmwg__radio">
          <input type="radio" name="fmwg-tab" id="fmwg-t4" class="fmwg__radio">
          <input type="radio" name="fmwg-tab" id="fmwg-t5" class="fmwg__radio">
          <input type="radio" name="fmwg-tab" id="fmwg-t6" class="fmwg__radio">

          <header class="fmwg__head">
          <span class="fmab-eyebrow">What can you grow? <i class="fmab-eyebrow__line"></i></span>
            <h2 class="fm-heading ">A Wide Range <br>  <span class="fmdm__accent"> of Crops.</span></h2>
            <p class="fm-text fmwg__text">From leafy greens to high-value vegetables, our growing systems support diverse crops for different market needs.</p>
          </header>

          <div class="fmwg-tabs-wrap">
          <div class="fmwg-tabs" data-fmwg-tab-track role="group" aria-label="Crop categories">
            <label class="fmwg-tab" for="fmwg-t1">
              <span class="fmwg-tab__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M11 20A7 7 0 0 1 4 13c0-4.4 3.6-8 8-8s8 3.6 8 8a7 7 0 0 1-7 7Z"/>
                  <path d="M12 5v15"/>
                </svg>
              </span>
              <span class="fmwg-tab__label">Leafy Greens</span>
              <span class="fmwg-tab__arrow" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </label>

            <label class="fmwg-tab" for="fmwg-t2">
              <span class="fmwg-tab__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="3"/>
                  <path d="M12 2a3 3 0 0 0-3 3v1a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"/>
                  <path d="M12 18a3 3 0 0 0-3 3v1a3 3 0 0 0 6 0v-1a3 3 0 0 0-3-3Z"/>
                  <path d="M2 12a3 3 0 0 0 3-3h1a3 3 0 0 0 0 6H5a3 3 0 0 0-3-3Z"/>
                  <path d="M18 12a3 3 0 0 0 3-3h1a3 3 0 0 0 0 6h-1a3 3 0 0 0-3-3Z"/>
                </svg>
              </span>
              <span class="fmwg-tab__label">Herbs</span>
              <span class="fmwg-tab__arrow" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </label>

            <label class="fmwg-tab" for="fmwg-t3">
              <span class="fmwg-tab__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="14" r="7"/>
                  <path d="M12 7V4"/>
                  <path d="M9 5c1.5 1 4.5 1 6 0"/>
                </svg>
              </span>
              <span class="fmwg-tab__label">Fruiting Vegetables</span>
              <span class="fmwg-tab__arrow" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </label>

            <label class="fmwg-tab" for="fmwg-t4">
              <span class="fmwg-tab__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M18 4c-3 1-5 4-6 7-2 3-5 5-7 5-1.5 0-2.5-1-2-2.5 1-3 4-7 9-10 2-1.2 4-1.5 6 .5Z"/>
                  <path d="M18 4c.5-1.5 2-2 3-2"/>
                </svg>
              </span>
              <span class="fmwg-tab__label">Indian Vegetables</span>
              <span class="fmwg-tab__arrow" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </label>

            <label class="fmwg-tab" for="fmwg-t5">
              <span class="fmwg-tab__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 12a8 8 0 0 0 16 0H4Z"/>
                  <path d="M12 12v-1"/>
                  <path d="M8 12v-1"/>
                  <path d="M16 12v-1"/>
                </svg>
              </span>
              <span class="fmwg-tab__label">Melons &amp; Gourds</span>
              <span class="fmwg-tab__arrow" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </label>

            <label class="fmwg-tab" for="fmwg-t6">
              <span class="fmwg-tab__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="3" width="7" height="7" rx="1"/>
                  <rect x="14" y="3" width="7" height="7" rx="1"/>
                  <rect x="14" y="14" width="7" height="7" rx="1"/>
                  <rect x="3" y="14" width="7" height="7" rx="1"/>
                </svg>
              </span>
              <span class="fmwg-tab__label">Others</span>
              <span class="fmwg-tab__arrow" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </label>
          </div>
          <div class="fmwg-slider-controls" data-fmwg-controls hidden>
            <button type="button" class="fmwg-slider-controls__button" data-fmwg-prev aria-label="Previous crop category" disabled>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <line x1="19" y1="12" x2="5" y2="12"></line>
                <polyline points="12 19 5 12 12 5"></polyline>
              </svg>
            </button>
            <button type="button" class="fmwg-slider-controls__button" data-fmwg-next aria-label="Next crop category">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </button>
          </div>
          </div>

          <div class="fmwg__panels">
            <!-- PANEL 01 -->
            <article class="fmwg-panel fmwg-panel--1">
              <span class="fmwg-panel__eyebrow"><span class="fmwg-panel__no">01</span><i class="fmwg-panel__line"></i></span>
              <h3 class="fm-heading ">Leafy Greens</h3>
              <p class="fm-text fmwg-panel__text">Fast-growing, nutrient-rich and widely demanded crops that perform exceptionally well in protected environments.</p>
              <ul class="fmwg-feats">
                <li class="fmwg-feat">
                  <span class="fmwg-feat__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="18" y1="20" x2="18" y2="10"/>
                      <line x1="12" y1="20" x2="12" y2="4"/>
                      <line x1="6" y1="20" x2="6" y2="14"/>
                    </svg>
                  </span>
                  <span class="fmwg-feat__label">Short<br>growth cycle</span>
                </li>
                <li class="fmwg-feat">
                  <span class="fmwg-feat__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/>
                    </svg>
                  </span>
                  <span class="fmwg-feat__label">Efficient<br>resource use</span>
                </li>
                <li class="fmwg-feat">
                  <span class="fmwg-feat__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M7 20h10"/>
                      <path d="M10 20c0-4.4 2-8 7-8"/>
                      <path d="M17 12c-3-3-3-8 0-10-4 0-8 3-7 10"/>
                      <path d="M12 14c-2.5-2.5-2.5-6.5 0-8-3 0-6 2.5-5 8"/>
                    </svg>
                  </span>
                  <span class="fmwg-feat__label">High<br>market demand</span>
                </li>
              </ul>
              <span class="fmwg-pop"><i class="fmwg-pop__line"></i></span>
              <ul class="fmwg-crops">
                <li class="fmwg-crop"><img src="images/far3.jpeg" alt="Lettuce" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Lettuce</span></li>
                <li class="fmwg-crop"><img src="images/gfar.png" alt="Spinach" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Spinach</span></li>
                <li class="fmwg-crop"><img src="images/1.png" alt="Kale" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Kale</span></li>
                <li class="fmwg-crop"><img src="images/banner3.jpeg" alt="Swiss Chard" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Swiss Chard</span></li>
                <li class="fmwg-crop"><img src="images/farm4.jpeg" alt="Rocket" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Rocket</span></li>
              </ul>
            
                <a href="#leafy-greens" class="fm-cta-btn">
           Explore Leafy Greens
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
            </article>

            <!-- PANEL 02 -->
            <article class="fmwg-panel fmwg-panel--2">
              <span class="fmwg-panel__eyebrow"><span class="fmwg-panel__no">02</span><i class="fmwg-panel__line"></i></span>
              <h3 class="fm-heading fmwg-panel__title">Herbs</h3>
              <p class="fm-text fmwg-panel__text">Aromatic, high-value crops with steady demand from kitchens, retail and processing.</p>
              <ul class="fmwg-feats">
                <li class="fmwg-feat">
                  <span class="fmwg-feat__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10"/>
                      <polyline points="12 6 12 12 16 14"/>
                    </svg>
                  </span>
                  <span class="fmwg-feat__label">Quick<br>harvest cycles</span>
                </li>
                <li class="fmwg-feat">
                  <span class="fmwg-feat__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                      <line x1="7" y1="7" x2="7.01" y2="7"/>
                    </svg>
                  </span>
                  <span class="fmwg-feat__label">Premium<br>pricing</span>
                </li>
                <li class="fmwg-feat">
                  <span class="fmwg-feat__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <circle cx="12" cy="12" r="5"/>
                      <path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/>
                    </svg>
                  </span>
                  <span class="fmwg-feat__label">Year-round<br>supply</span>
                </li>
              </ul>
              <span class="fmwg-pop"><i class="fmwg-pop__line"></i></span>
              <ul class="fmwg-crops">
                <li class="fmwg-crop"><img src="images/gfar.png" alt="Basil" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Basil</span></li>
                <li class="fmwg-crop"><img src="images/farm4.jpeg" alt="Mint" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Mint</span></li>
                <li class="fmwg-crop"><img src="images/1.png" alt="Coriander" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Coriander</span></li>
                <li class="fmwg-crop"><img src="images/far3.jpeg" alt="Parsley" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Parsley</span></li>
                <li class="fmwg-crop"><img src="images/banner3.jpeg" alt="Oregano" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Oregano</span></li>
              </ul>
            

              <a href="#herbs" class="fm-cta-btn">
            Explore Herbs
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
            </article>

            <!-- PANEL 03 -->
            <article class="fmwg-panel fmwg-panel--3">
              <span class="fmwg-panel__eyebrow"><span class="fmwg-panel__no">03</span><i class="fmwg-panel__line"></i></span>
              <h3 class="fm-heading fmwg-panel__title">Fruiting Vegetables</h3>
              <p class="fm-text fmwg-panel__text">High-yield crops that give long harvest periods and strong returns under controlled conditions.</p>
              <ul class="fmwg-feats">
                <li class="fmwg-feat">
                  <span class="fmwg-feat__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="18" y1="20" x2="18" y2="10"/>
                      <line x1="12" y1="20" x2="12" y2="4"/>
                      <line x1="6" y1="20" x2="6" y2="14"/>
                    </svg>
                  </span>
                  <span class="fmwg-feat__label">High<br>yield potential</span>
                </li>
                <li class="fmwg-feat">
                  <span class="fmwg-feat__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                      <line x1="16" y1="2" x2="16" y2="6"/>
                      <line x1="8" y1="2" x2="8" y2="6"/>
                      <line x1="3" y1="10" x2="21" y2="10"/>
                    </svg>
                  </span>
                  <span class="fmwg-feat__label">Long<br>harvest period</span>
                </li>
                <li class="fmwg-feat">
                  <span class="fmwg-feat__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <ellipse cx="12" cy="6" rx="8" ry="3"/>
                      <path d="M4 6v6c0 1.66 3.58 3 8 3s8-1.34 8-3V6"/>
                      <path d="M4 12v6c0 1.66 3.58 3 8 3s8-1.34 8-3v-6"/>
                    </svg>
                  </span>
                  <span class="fmwg-feat__label">Strong<br>market value</span>
                </li>
              </ul>
              <span class="fmwg-pop"><i class="fmwg-pop__line"></i></span>
              <ul class="fmwg-crops">
                <li class="fmwg-crop"><img src="images/tomatoo.webp" alt="Tomato" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Tomato</span></li>
                <li class="fmwg-crop"><img src="images/gfar.png" alt="Cucumber" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Cucumber</span></li>
                <li class="fmwg-crop"><img src="images/farm1.jpeg" alt="Capsicum" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Capsicum</span></li>
                <li class="fmwg-crop"><img src="images/tomatoo.webp" alt="Cherry Tomato" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Cherry Tomato</span></li>
                <li class="fmwg-crop"><img src="images/farm4.jpeg" alt="Zucchini" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Zucchini</span></li>
              </ul>
             <a href="#fruiting-vegetables"  class="fm-cta-btn">
          Explore Fruiting Vegetables
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
            
            </article>

            <!-- PANEL 04 -->
            <article class="fmwg-panel fmwg-panel--4">
              <span class="fmwg-panel__eyebrow"><span class="fmwg-panel__no">04</span><i class="fmwg-panel__line"></i></span>
              <h3 class="fm-heading fmwg-panel__title">Indian Vegetables</h3>
              <p class="fm-text fmwg-panel__text">Everyday favourites with reliable local demand, grown with better quality and consistency.</p>
              <ul class="fmwg-feats">
                <li class="fmwg-feat">
                  <span class="fmwg-feat__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/>
                      <line x1="3" y1="6" x2="21" y2="6"/>
                      <path d="M16 10a4 4 0 0 1-8 0"/>
                    </svg>
                  </span>
                  <span class="fmwg-feat__label">Reliable<br>local demand</span>
                </li>
                <li class="fmwg-feat">
                  <span class="fmwg-feat__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/>
                    </svg>
                  </span>
                  <span class="fmwg-feat__label">Efficient<br>water use</span>
                </li>
                <li class="fmwg-feat">
                  <span class="fmwg-feat__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                      <path d="m9 12 2 2 4-4"/>
                    </svg>
                  </span>
                  <span class="fmwg-feat__label">Consistent<br>quality</span>
                </li>
              </ul>
              <span class="fmwg-pop"><i class="fmwg-pop__line"></i></span>
              <ul class="fmwg-crops">
                <li class="fmwg-crop"><img src="images/farm5.jpeg" alt="Okra" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Okra</span></li>
                <li class="fmwg-crop"><img src="images/farm6.jpeg" alt="Brinjal" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Brinjal</span></li>
                <li class="fmwg-crop"><img src="images/far3.jpeg" alt="Green Chilli" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Green Chilli</span></li>
                <li class="fmwg-crop"><img src="images/gfar.png" alt="Cluster Beans" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Cluster Beans</span></li>
                <li class="fmwg-crop"><img src="images/farm4.jpeg" alt="Cauliflower" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Cauliflower</span></li>
              </ul>
              
             <a href="#indian-vegetables" class="fm-cta-btn">
            Explore Indian Vegetables
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
            </article>

            <!-- PANEL 05 -->
            <article class="fmwg-panel fmwg-panel--5">
              <span class="fmwg-panel__eyebrow"><span class="fmwg-panel__no">05</span><i class="fmwg-panel__line"></i></span>
              <h3 class="fm-heading fmwg-panel__title">Melons &amp; Gourds</h3>
              <p class="fm-text fmwg-panel__text">Vining crops that use vertical space well and deliver premium fruit quality.</p>
              <ul class="fmwg-feats">
                <li class="fmwg-feat">
                  <span class="fmwg-feat__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/>
                    </svg>
                  </span>
                  <span class="fmwg-feat__label">Better<br>space use</span>
                </li>
                <li class="fmwg-feat">
                  <span class="fmwg-feat__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <circle cx="12" cy="12" r="5"/>
                      <line x1="12" y1="1" x2="12" y2="3"/>
                      <line x1="12" y1="21" x2="12" y2="23"/>
                      <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/>
                      <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
                      <line x1="1" y1="12" x2="3" y2="12"/>
                      <line x1="21" y1="12" x2="23" y2="12"/>
                      <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/>
                      <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
                    </svg>
                  </span>
                  <span class="fmwg-feat__label">Sweeter<br>fruit quality</span>
                </li>
                <li class="fmwg-feat">
                  <span class="fmwg-feat__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <ellipse cx="12" cy="6" rx="8" ry="3"/>
                      <path d="M4 6v6c0 1.66 3.58 3 8 3s8-1.34 8-3V6"/>
                      <path d="M4 12v6c0 1.66 3.58 3 8 3s8-1.34 8-3v-6"/>
                    </svg>
                  </span>
                  <span class="fmwg-feat__label">Premium<br>market price</span>
                </li>
              </ul>
              <span class="fmwg-pop"><i class="fmwg-pop__line"></i></span>
              <ul class="fmwg-crops">
                <li class="fmwg-crop"><img src="images/farm6.jpeg" alt="Muskmelon" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Musk -melon</span></li>
                <li class="fmwg-crop"><img src="images/farm5.jpeg" alt="Watermelon" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Watermelon</span></li>
                <li class="fmwg-crop"><img src="images/farm4.jpeg" alt="Bottle Gourd" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Bottle Gourd</span></li>
                <li class="fmwg-crop"><img src="images/far3.jpeg" alt="Bitter Gourd" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Bitter Gourd</span></li>
                <li class="fmwg-crop"><img src="images/1.png" alt="Ridge Gourd" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Ridge Gourd</span></li>
              </ul>
             
               <a href="#melons-gourds" class="fm-cta-btn">
           Explore Melons &amp; Gourds
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
            </article>

            <!-- PANEL 06 -->
            <article class="fmwg-panel fmwg-panel--6">
              <span class="fmwg-panel__eyebrow"><span class="fmwg-panel__no">06</span><i class="fmwg-panel__line"></i></span>
              <h3 class="fm-heading fmwg-panel__title">Other Crops</h3>
              <p class="fm-text fmwg-panel__text">Niche and specialty crops that open new markets and higher margins for protected cultivation.</p>
              <ul class="fmwg-feats">
                <li class="fmwg-feat">
                  <span class="fmwg-feat__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10"/>
                      <circle cx="12" cy="12" r="6"/>
                      <circle cx="12" cy="12" r="2"/>
                    </svg>
                  </span>
                  <span class="fmwg-feat__label">Niche<br>market access</span>
                </li>
                <li class="fmwg-feat">
                  <span class="fmwg-feat__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="18" y1="20" x2="18" y2="10"/>
                      <line x1="12" y1="20" x2="12" y2="4"/>
                      <line x1="6" y1="20" x2="6" y2="14"/>
                    </svg>
                  </span>
                  <span class="fmwg-feat__label">Higher<br>margins</span>
                </li>
                <li class="fmwg-feat">
                  <span class="fmwg-feat__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                      <circle cx="12" cy="12" r="3"/>
                      <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1.08z"/>
                    </svg>
                  </span>
                  <span class="fmwg-feat__label">Custom<br>crop planning</span>
                </li>
              </ul>
              <span class="fmwg-pop"><i class="fmwg-pop__line"></i></span>
              <ul class="fmwg-crops">
                <li class="fmwg-crop"><img src="images/strobarry.webp" alt="Strawberry" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Strawberry</span></li>
                <li class="fmwg-crop"><img src="images/farm1.jpeg" alt="Gerbera" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Gerbera</span></li>
                <li class="fmwg-crop"><img src="images/gfar.png" alt="Microgreens" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Micro -greens</span></li>
                <li class="fmwg-crop"><img src="images/farm4.jpeg" alt="Medicinal Herbs" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Medicinal Herbs</span></li>
                <li class="fmwg-crop"><img src="images/far3.jpeg" alt="Exotic Vegetables" class="fmwg-crop__img" loading="lazy" width="160" height="160"><span class="fmwg-crop__name">Exotic Vegetables</span></li>
              </ul>
            

              <a href="#other-crops" class="fm-cta-btn">
            Explore Other Crops
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
            </article>
          </div>

          <figure class="fmwg__media">
            <img src="images/banner3.jpeg" alt="Rows of fresh leafy greens growing on white hydroponic channels inside a greenhouse" class="fmwg__photo fmwg__photo--1" loading="eager" width="900" height="1050">
            <img src="images/farm4.jpeg" alt="Lush potted herbs growing in neat rows inside a protected cultivation greenhouse" class="fmwg__photo fmwg__photo--2" loading="lazy" width="900" height="1050">
            <img src="images/farm1.jpeg" alt="Vibrant fruiting vegetables including capsicum and tomatoes maturing on trellises" class="fmwg__photo fmwg__photo--3" loading="lazy" width="900" height="1050">
            <img src="images/farm5.jpeg" alt="Healthy Indian vegetable crops flourishing under protected net shelter" class="fmwg__photo fmwg__photo--4" loading="lazy" width="900" height="1050">
            <img src="images/farm6.jpeg" alt="Vertical trellised melon and gourd vines bearing fruit in commercial polyhouse" class="fmwg__photo fmwg__photo--5" loading="lazy" width="900" height="1050">
            <img src="images/farm00.jpeg" alt="Specialty strawberries and niche crops thriving in high-tech climate controlled facility" class="fmwg__photo fmwg__photo--6" loading="lazy" width="900" height="1050">
          </figure>

        </div>
      </section>

      <!-- ============================================================
           04. WHICH SYSTEM SUITS YOUR FARM?
           ============================================================ -->
      <section class="fmcc" id="choose-with-confidence">
        <div class="fmcc__inner">

          <header class="fmcc__head">
            <span class="fmcc-eyebrow"><span>Which system suits your farm?</span><i class="fmcc-eyebrow__line"></i></span>
            <h2 class="fm-heading ">Choose with <span class="fmcc__accent">Confidence.</span></h2>
            <p class="fm-text fmab__text">The right growing system depends on multiple factors. We help you evaluate your requirements <br>
               and recommend the most suitable solution for your farm.
              
            </p>
          </header>

          <ul class="fmcc-items">

            <li class="fmcc-item">
              <span class="fmcc-item__ring"><span class="fmcc-item__disc" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 21v-8"/>
                  <path d="M12 13c0-4.418 3.582-8 8-8v1c0 4.418-3.582 8-8 8Z"/>
                  <path d="M12 15c0-3.866-3.134-7-7-7v1c0 3.866 3.134 7 7 7Z"/>
                  <path d="M6 21h12"/>
                </svg>
              </span></span>
              <h3 class="fm-heading fmcc-item__title">Crop</h3>
              <p class="fm-text fmcc-item__text">Type of crop and your yield expectations.</p>
            </li>

            <li class="fmcc-item">
              <span class="fmcc-item__ring"><span class="fmcc-item__disc" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 1 1 16 0Z"/>
                  <circle cx="12" cy="10" r="3"/>
                </svg>
              </span></span>
              <h3 class="fm-heading fmcc-item__title">Location</h3>
              <p class="fm-text fmcc-item__text">Climate, space and site conditions.</p>
            </li>

            <li class="fmcc-item">
              <span class="fmcc-item__ring"><span class="fmcc-item__disc" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 2.5C12 2.5 5 10.5 5 15.5a7 7 0 0 0 14 0C19 10.5 12 2.5 12 2.5Z"/>
                  <path d="M9.5 14c.4 1.8 1.8 3.2 3.5 3.5"/>
                </svg>
              </span></span>
              <h3 class="fm-heading fmcc-item__title">Water Quality</h3>
              <p class="fm-text fmcc-item__text">Source, quality and availability of water.</p>
            </li>

            <li class="fmcc-item">
              <span class="fmcc-item__ring"><span class="fmcc-item__disc" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="18" y1="20" x2="18" y2="8"/>
                  <line x1="12" y1="20" x2="12" y2="4"/>
                  <line x1="6" y1="20" x2="6" y2="13"/>
                  <line x1="3" y1="20" x2="21" y2="20"/>
                </svg>
              </span></span>
              <h3 class="fm-heading fmcc-item__title">Investment</h3>
              <p class="fm-text fmcc-item__text">Initial budget and long-term goals.</p>
            </li>

            <li class="fmcc-item">
              <span class="fmcc-item__ring"><span class="fmcc-item__disc" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="8.5" cy="8.5" r="2.5"/>
                  <path d="M8.5 3v2M8.5 12v2M3 8.5h2M12 8.5h2M4.6 4.6l1.4 1.4M10.9 10.9l1.4 1.4M4.6 12.4l1.4-1.4M10.9 6.1l1.4-1.4"/>
                  <circle cx="16.5" cy="16.5" r="2"/>
                  <path d="M16.5 12.5v1.5M16.5 19v1.5M12.5 16.5H14M19 16.5h1.5M13.7 13.7l1 1M18.3 18.3l1 1M13.7 19.3l1-1M18.3 14.7l1-1"/>
                </svg>
              </span></span>
              <h3 class="fm-heading fmcc-item__title">Operational Requirements</h3>
              <p class="fm-text fmcc-item__text">Labour, automation and management style.</p>
            </li>

          </ul>
        </div>
      </section>
@endsection
