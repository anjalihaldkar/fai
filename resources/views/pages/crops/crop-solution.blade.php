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
          <span class="fmab-eyebrow">Crop Solutions<i class="fmab-eyebrow__line"></i></span>

          <h1 class="fm-heading fmab__title">
            Choose the Right <br>Crop for Your <span class="fmdm__accent">Farm</span>
          </h1>

          <p class="fm-text fmab__text">
            Compare high-value crop opportunities and find the ideal match for your protected farming structure,
            climate, and commercial goals.
          </p>

          <a href="#compare-crops" class="fm-cta-btn">
            Compare Crops
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
         04. COMPARE CROP OPPORTUNITIES SECTION
         =================================================================== -->
      <section class="fmcp" id="compare-crops" data-fmcp>

        <!-- curved right edge of the photo card (zero-size inline SVG, defined once) -->
        <svg width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false">
          <defs>
            <clipPath id="fmcp-curve" clipPathUnits="objectBoundingBox">
              <path d="M0,0 L1,0 C0.94,0.26 0.91,0.6 0.83,1 L0,1 Z" />
            </clipPath>
          </defs>
        </svg>

        <div class="fmcp__inner">

          <!-- HEADER: text left, dropdown right (one grid) -->
          <header class="fmcp__head">
            <div class="fmcp__headtext">
              <span class="fmab-eyebrow">Compare crop opportunities<i class="fmab-eyebrow__line"></i></span>
              <h2 class="fm-heading fmcp__title">Compare Crop <span class="fmcp__accent">Opportunities.</span></h2>
              <p class="fm-text fmab__text">Each crop category offers a unique combination of investment, returns and
                operational requirements. Explore how they compare to find the best fit for your goals.</p>
            </div>

            <div class="fmcp-selectwrap">
              <label class="fmcp-sr" for="fmcp-select">Choose a crop category</label>
              <select class="fmcp-select" id="fmcp-select" data-fmcp-select>
                <option value="leafy" data-link="exotic-leafy.html" data-name="Leafy Greens"
                  data-desc="Fast growing, high demand crops for all systems." data-img="images/crop-leafy.jpg"
                  data-alt="Fresh green leafy lettuce" data-cycle="1 – 2" data-cycle-sub="months"
                  data-invest="Low – Medium" data-market="High" data-market-sub="Local &amp; Retail"
                  data-manage="Medium">Leafy Greens</option>
                <option value="fruit" data-link="fruits-vegi.html" data-name="Fruits &amp; Vegetables"
                  data-desc="High-value crops with excellent market potential." data-img="images/crop-fruit.jpg"
                  data-alt="Ripe red tomatoes" data-cycle="3 – 5" data-cycle-sub="months" data-invest="Medium"
                  data-market="High" data-market-sub="Domestic &amp; Export" data-manage="Medium – High">Fruits &amp;
                  Vegetables</option>
                <option value="herbs" data-link="exotic-leafy.html" data-name="Herbs &amp; Specialty Crops"
                  data-desc="Premium quality crops for niche markets." data-img="images/crop-herbs.jpg"
                  data-alt="Fresh basil plant" data-cycle="2 – 4" data-cycle-sub="months" data-invest="Medium"
                  data-market="Premium" data-market-sub="Niche &amp; Export" data-manage="Medium">Herbs &amp; Specialty
                  Crops</option>
                <option value="indian" data-link="#find-right-crop" data-name="Indian Vegetables"
                  data-desc="Traditional and high-demand crops for local markets." data-img="images/crop-indian.jpg"
                  data-alt="Okra pods with flowers" data-cycle="2 – 4" data-cycle-sub="months"
                  data-invest="Low – Medium" data-market="High" data-market-sub="Local markets"
                  data-manage="Low – Medium">Indian Vegetables</option>
                <option value="vine" selected data-link="#find-right-crop" data-name="Exotic Vine Crops"
                  data-desc="High-value, globally demanded crops." data-img="images/crop-vine.jpg"
                  data-alt="Red tomatoes growing on vines in a greenhouse" data-cycle="3 – 6" data-cycle-sub="months"
                  data-invest="Medium – High" data-market="High" data-market-sub="Domestic &amp; Export"
                  data-manage="Medium – High">Exotic Vine Crops</option>
              </select>
              <span class="fmcp-selectwrap__chev" aria-hidden="true">
                <svg viewBox="0 0 24 24">
                  <path d="M6 9l6 6 6-6" />
                </svg>
              </span>
            </div>
          </header>

          <!-- COMPARISON ROW -->
          <div class="fmcp-row" data-fmcp-live aria-live="polite">

            <!-- photo card -->
            <article class="fmcp-card">
              <img class="fmcp-card__img" src="images/crop-vine.jpg" alt="Red tomatoes growing on vines in a greenhouse"
                loading="eager" width="1000" height="700" data-fmcp-img>
              <div class="fmcp-card__body">
                <span class="fmcp-card__label">Example crop</span>
                <h3 class="fm-heading fmcp-card__title" data-fmcp-out="name">Exotic Vine Crops</h3>
                <i class="fmcp-card__rule" aria-hidden="true"></i>
                <p class="fm-text fmcp-card__text" data-fmcp-out="desc">High-value, globally demanded crops.</p>
                <a href="{{ route('crops.fruits-vegi') }}" class="fmcp-card__btn" data-fmcp-btn>
                  <span>View More</span>
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" aria-hidden="true">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
            </article>

            <!-- four metrics -->
            <ul class="fmcp-metrics">
              <li class="fmcp-metric">
                <span class="fmcp-metric__disc" aria-hidden="true">
                  <svg viewBox="0 0 24 24">
                    <path d="M7 20h10" />
                    <path d="M10 20c0-4.4 2-8 7-8" />
                    <path d="M17 12c-3-3-3-8 0-10-4 0-8 3-7 10" />
                    <path d="M12 14c-2.5-2.5-2.5-6.5 0-8-3 0-6 2.5-5 8" />
                  </svg>
                </span>
                <span class="fmcp-metric__label">Crop Cycle</span>
                <span class="fm-heading fmcp-metric__value" data-fmcp-out="cycle">3 – 6</span>
                <span class="fmcp-metric__sub" data-fmcp-out="cycleSub">months</span>
              </li>
              <li class="fmcp-metric">
                <span class="fmcp-metric__disc" aria-hidden="true">
                  <svg viewBox="0 0 24 24">
                    <ellipse cx="12" cy="6" rx="8" ry="3" />
                    <path d="M4 6v6c0 1.66 3.58 3 8 3s8-1.34 8-3V6" />
                    <path d="M4 12v6c0 1.66 3.58 3 8 3s8-1.34 8-3v-6" />
                  </svg>
                </span>
                <span class="fmcp-metric__label">Investment Level</span>
                <span class="fm-heading fmcp-metric__value" data-fmcp-out="invest">Medium – High</span>
                <span class="fmcp-metric__sub" aria-hidden="true">&nbsp;</span>
              </li>
              <li class="fmcp-metric">
                <span class="fmcp-metric__disc" aria-hidden="true">
                  <svg viewBox="0 0 24 24">
                    <line x1="18" y1="20" x2="18" y2="10" />
                    <line x1="12" y1="20" x2="12" y2="4" />
                    <line x1="6" y1="20" x2="6" y2="14" />
                  </svg>
                </span>
                <span class="fmcp-metric__label">Market Opportunity</span>
                <span class="fm-heading fmcp-metric__value" data-fmcp-out="market">High</span>
                <span class="fmcp-metric__sub" data-fmcp-out="marketSub">Domestic &amp; Export</span>
              </li>
              <li class="fmcp-metric">
                <span class="fmcp-metric__disc" aria-hidden="true">
                  <svg viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="3" />
                    <path
                      d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z" />
                  </svg>
                </span>
                <span class="fmcp-metric__label">Management Intensity</span>
                <span class="fm-heading fmcp-metric__value" data-fmcp-out="manage">Medium – High</span>
                <span class="fmcp-metric__sub" aria-hidden="true">&nbsp;</span>
              </li>
            </ul>
          </div>

          <p class="fmcp-sr" role="status" data-fmcp-status></p>
        </div>
      </section>

      <!-- Compare Crop Opportunities Controller -->
      <script>
        (function () {
          'use strict';
          var root = document.querySelector('[data-fmcp]');
          if (!root) return;

          var select = root.querySelector('[data-fmcp-select]');
          var img = root.querySelector('[data-fmcp-img]');
          var row = root.querySelector('[data-fmcp-live]');
          var status = root.querySelector('[data-fmcp-status]');
          var btn = root.querySelector('[data-fmcp-btn]');
          if (!select || !img || !row) return;

          var reduce = window.matchMedia('(prefers-reduced-motion: reduce)');

          function out(key, value) {
            var el = root.querySelector('[data-fmcp-out="' + key + '"]');
            if (el) el.textContent = value;
          }

          function apply() {
            var o = select.options[select.selectedIndex];
            if (!o) return;
            var d = o.dataset;

            // photo: fade out, swap the source, fade in when it has loaded
            var next = d.img;
            if (next && img.getAttribute('src') !== next) {
              if (reduce.matches) { img.src = next; img.alt = d.alt || ''; }
              else {
                img.classList.add('is-swapping');
                var pre = new Image();
                pre.onload = pre.onerror = function () { img.src = next; img.alt = d.alt || ''; img.classList.remove('is-swapping'); };
                pre.src = next;
              }
            }

            out('name', d.name || o.textContent);
            out('desc', d.desc || '');
            out('cycle', d.cycle || '');
            out('cycleSub', d.cycleSub || '');
            out('invest', d.invest || '');
            out('market', d.market || '');
            out('marketSub', d.marketSub || '');
            out('manage', d.manage || '');

            if (btn) {
              btn.href = d.link || '#find-right-crop';
            }

            if (!reduce.matches) {                           // restart the soft fade-in of the metrics
              row.classList.remove('is-flash');
              void row.offsetWidth;
              row.classList.add('is-flash');
            }
            if (status) status.textContent = 'Showing ' + (d.name || o.textContent);
          }

          select.addEventListener('change', apply);
        })();
      </script>

      <!-- ===================================================================
         04. FIND THE RIGHT CROP FOR YOUR FARM SECTION (.fmrc)
         =================================================================== -->
      <section class="fmrc" id="find-right-crop">
        <div class="fmrc__inner">
          <div class="fmrc__grid">

            <!-- LEFT: Intro Header -->
            <div class="fmrc-intro">

              <span class="fmab-eyebrow">Which Crop is Right for Your Farm?<i class="fmab-eyebrow__line"></i></span>

              <h2 class="fmrc__title">
                Find the Right Crop <br>
                <span class="fmrc__accent">for Your Farm.</span>
              </h2>

              <p class="fm-text fmab__text">
                Every farm is unique. We help you evaluate key factors to find the most suitable crops for higher yield
                and better returns.
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
                    <h3 class="fmrc-factor__title">Location</h3>
                    <p class="fmrc-factor__text">Soil type, altitude and proximity to markets.</p>
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
                    <h3 class="fmrc-factor__title">Climate</h3>
                    <p class="fmrc-factor__text">Temperature, humidity and growing season.</p>
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
                    <h3 class="fmrc-factor__title">Water</h3>
                    <p class="fmrc-factor__text">Source, quality and availability of water.</p>
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
                    <h3 class="fmrc-factor__title">Market Access</h3>
                    <p class="fmrc-factor__text">Local and global demand for your crops.</p>
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
                    <h3 class="fmrc-factor__title">Investment</h3>
                    <p class="fmrc-factor__text">Initial cost and expected returns.</p>
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
                    <h3 class="fmrc-factor__title">Operating Capability</h3>
                    <p class="fmrc-factor__text">Labour, expertise and day-to-day management.</p>
                  </div>
                </article>
              </div>
            </div>

            <!-- RIGHT: CTA Card -->
            <aside class="fmrc-card">
              <span class="fmrc-card__bar" aria-hidden="true"></span>
              <h3 class="fmrc-card__title">Get a Personalized Crop Recommendation</h3>
              <p class="fmrc-card__text">Use our farm planning tool to find the best crops based on your land, climate
                and business goals.</p>


              <a href="{{ route('services.plan-farm') }}" class="fm-cta-btn">
                Plan Your Farm
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
@endsection
