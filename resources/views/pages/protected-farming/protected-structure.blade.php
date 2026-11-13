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
          <span class="fmab-eyebrow">Protected Structure<i class="fmab-eyebrow__line"></i></span>

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
      <section class="fmpx" id="protected-structures-explore">

        <!-- curved-edge clip for the card photos (zero-size inline SVG, defined once) -->
        <svg width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false">
          <defs>
            <clipPath id="fmpx-curve" clipPathUnits="objectBoundingBox">
              <path d="M0.30,0 L1,0 L1,1 L0.18,1 C0.02,0.82 0,0.60 0.06,0.45 C0.12,0.30 0.21,0.12 0.30,0 Z" />
            </clipPath>
          </defs>
        </svg>

        <div class="fmpx__inner">

          <!-- HEADER: text left, info box right (one grid) -->
          <header class="fmpx__head">
            <div class="fmpx__headtext">
              <span class="fmpx-eyebrow"><span>Protected Structures</span><i class="fmpx-eyebrow__line"></i></span>
              <h2 class="fm-heading ">Explore Our<br><span class="fmpx__accent">Protected Structures</span></h2>
              <p class="fm-text fmab__text">Different crops. Different goals. We design and deliver the right protected
                structure for your farm, location and budget.</p>
            </div>

            <aside class="fmpx-note">
              <span class="fmpx-note__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M12 21V10" />
                  <path d="M12 14c-3-1-5.5-3.5-5.5-6.5 3 0 5.5 2.5 5.5 6.5Z" />
                  <path d="M12 11c3-1 5.5-3.5 5.5-6.5-3 0-5.5 2.5-5.5 6.5Z" />
                </svg>
              </span>
              <i class="fmpx-note__rule" aria-hidden="true"></i>
              <div class="fmpx-note__body">
                <p class="fmpx-note__title">Engineered for Better Growth</p>
                <p class="fm-text fmpx-note__text">From cost-effective nethouses to advanced glasshouses, our structures
                  help you create the ideal growing environment for higher yield and long-term performance.</p>
              </div>
            </aside>
          </header>

          <!-- SIX CARDS -->
          <ul class="fmpx-cards">

            <li class="fmpx-card">
              <div class="fmpx-card__body">
                <span class="fmpx-card__no">01<i></i></span>
                <h3 class="fm-heading fmpx-card__title"><a class="fmpx-card__link"
                    href="/structures/fan-pad-polyhouse">Fan &amp; Pad Polyhouse</a></h3>
                <p class="fm-text fmpx-card__text">Ideal for high-value crops with precise climate control.</p>
                <span class="fmpx-card__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </div>
              <figure class="fmpx-card__media"><img src="images/banner3.jpeg"
                  alt="Fan and pad polyhouse with exhaust fans and rows of crops" loading="lazy" width="800"
                  height="600"></figure>
            </li>

            <li class="fmpx-card">
              <div class="fmpx-card__body">
                <span class="fmpx-card__no">02<i></i></span>
                <h3 class="fm-heading fmpx-card__title"><a class="fmpx-card__link" href="/structures/nvph">NVPH</a></h3>
                <p class="fm-text fmpx-card__text">Naturally ventilated polyhouse for cost-effective and sustainable
                  farming.</p>
                <span class="fmpx-card__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </div>
              <figure class="fmpx-card__media"><img src="images/new3.png"
                  alt="Naturally ventilated polyhouse over green crops" loading="lazy" width="800" height="600">
              </figure>
            </li>

            <li class="fmpx-card">
              <div class="fmpx-card__body">
                <span class="fmpx-card__no">03<i></i></span>
                <h3 class="fm-heading fmpx-card__title"><a class="fmpx-card__link"
                    href="/structures/nethouse">Nethouse</a></h3>
                <p class="fm-text fmpx-card__text">Protects crops from insects, excess sunlight and extreme weather.</p>
                <span class="fmpx-card__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </div>
              <figure class="fmpx-card__media"><img src="images/pro3.jpeg"
                  alt="Green shade net structure over crop rows" loading="lazy" width="800" height="600"></figure>
            </li>

            <li class="fmpx-card">
              <div class="fmpx-card__body">
                <span class="fmpx-card__no">04<i></i></span>
                <h3 class="fm-heading fmpx-card__title"><a class="fmpx-card__link"
                    href="/structures/polynet-house">Polynet House</a></h3>
                <p class="fm-text fmpx-card__text">Durable and versatile structure for multiple crop applications.</p>
                <span class="fmpx-card__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </div>
              <figure class="fmpx-card__media"><img src="images/farm4.jpeg"
                  alt="Polynet house with white net over vegetable crops" loading="lazy" width="800" height="600">
              </figure>
            </li>

            <li class="fmpx-card">
              <div class="fmpx-card__body">
                <span class="fmpx-card__no">05<i></i></span>
                <h3 class="fm-heading fmpx-card__title"><a class="fmpx-card__link"
                    href="/structures/wire-rope-nethouse">Wire Rope Nethouse</a></h3>
                <p class="fm-text fmpx-card__text">Strong and long-lasting solution for large-area cultivation.</p>
                <span class="fmpx-card__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </div>
              <figure class="fmpx-card__media"><img src="images/banner2.jpeg"
                  alt="Wire rope nethouse covering a large field" loading="lazy" width="800" height="600"></figure>
            </li>

            <li class="fmpx-card">
              <div class="fmpx-card__body">
                <span class="fmpx-card__no">06<i></i></span>
                <h3 class="fm-heading fmpx-card__title"><a class="fmpx-card__link"
                    href="/structures/glasshouse">Glasshouse</a></h3>
                <p class="fm-text fmpx-card__text">Advanced structure for maximum productivity and premium crops.</p>
                <span class="fmpx-card__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </div>
              <figure class="fmpx-card__media"><img src="images/COLD.png"
                  alt="Glasshouse with a steel frame and healthy crops" loading="lazy" width="800" height="600">
              </figure>
            </li>

          </ul>
        </div>
      </section>

      <!-- ============================================================
           03. KEY DIFFERENCES AT A GLANCE
           ============================================================ -->
     <section class="fmkd" id="key-differences">

        <div class="fmkd__inner for-bg">

          <!-- HEADER -->
          <header class="fmkd__head">
            <div class="fmkd__headtext">
              <span class="fmkd-eyebrow"><span>Key Differences at a Glance</span><i
                  class="fmkd-eyebrow__line"></i></span>
              <h2 class="fm-heading ">Compare Our<br><span class="fmkd__accent">Protected Structures</span></h2>
              <p class="fm-text fmab__text">Every farm is unique. Use this quick reference to find which structure fits
                your crop type, climate and budget.</p>
            </div>

            <aside class="fmkd-note">
              <span class="fmkd-note__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <rect x="3" y="3" width="18" height="18" rx="2" />
                  <line x1="3" y1="9" x2="21" y2="9" />
                  <line x1="9" y1="21" x2="9" y2="9" />
                </svg>
              </span>
              <i class="fmkd-note__rule" aria-hidden="true"></i>
              <div class="fmkd-note__body">
                <p class="fmkd-note__title">Different Farms, Different Needs</p>
                <p class="fm-text fmkd-note__text">From budget-friendly nethouses to high-tech glasshouses, every
                  structure has a specific role. Choose the one that matches your crop, climate and investment goal.</p>
              </div>
            </aside>
          </header>

          <!-- COMPARISON TABLE -->
          <div class="fmkd-slider-controls" role="group" aria-label="Comparison table navigation" hidden>
            <span class="fmkd-slider-controls__hint">Swipe to compare structures</span>
            <div class="fmkd-slider-controls__actions">
              <button class="fmkd-slider-controls__button" type="button" data-fmkd-prev
                aria-label="Previous structure">
                <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M19 12H5"></path>
                  <path d="m12 19-7-7 7-7"></path>
                </svg>
              </button>
              <span class="fmkd-slider-controls__count" data-fmkd-count aria-live="polite">1 / 6</span>
              <button class="fmkd-slider-controls__button" type="button" data-fmkd-next
                aria-label="Next structure">
                <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="fmkd-scroll-wrap" role="region" aria-label="Structure comparison table">
            <table class="fmkd-table" aria-label="Protected structure comparison">
              <thead>
                <tr>
                  <!-- sticky factor label column (empty header) -->
                  <th class="fmkd-table__corner" scope="col">
                    <span class="fmkd-table__corner-label">Compare by</span>
                  </th>

                  <!-- Structure 1 -->
                  <th class="fmkd-table__col-head" scope="col">
                    <div class="fmkd-col-head">
                      <figure class="fmkd-col-head__fig">
                        <img src="images/banner3.jpeg" alt="Fan and Pad Polyhouse" loading="lazy" width="220"
                          height="140">
                      </figure>
                      <span class="fmkd-col-head__name">Fan &amp; Pad Polyhouse</span>
                    </div>
                  </th>

                  <!-- Structure 2 -->
                  <th class="fmkd-table__col-head" scope="col">
                    <div class="fmkd-col-head">
                      <figure class="fmkd-col-head__fig">
                        <img src="images/new3.png" alt="Naturally Ventilated Polyhouse" loading="lazy" width="220"
                          height="140">
                      </figure>
                      <span class="fmkd-col-head__name">NVPH</span>
                    </div>
                  </th>

                  <!-- Structure 3 -->
                  <th class="fmkd-table__col-head" scope="col">
                    <div class="fmkd-col-head">
                      <figure class="fmkd-col-head__fig">
                        <img src="images/pro3.jpeg" alt="Nethouse" loading="lazy" width="220" height="140">
                      </figure>
                      <span class="fmkd-col-head__name">Nethouse</span>
                    </div>
                  </th>

                  <!-- Structure 4 -->
                  <th class="fmkd-table__col-head" scope="col">
                    <div class="fmkd-col-head">
                      <figure class="fmkd-col-head__fig">
                        <img src="images/farm4.jpeg" alt="Polynet House" loading="lazy" width="220" height="140">
                      </figure>
                      <span class="fmkd-col-head__name">Polynet House</span>
                    </div>
                  </th>

                  <!-- Structure 5 -->
                  <th class="fmkd-table__col-head" scope="col">
                    <div class="fmkd-col-head">
                      <figure class="fmkd-col-head__fig">
                        <img src="images/banner2.jpeg" alt="Wire Rope Nethouse" loading="lazy" width="220" height="140">
                      </figure>
                      <span class="fmkd-col-head__name">Wire Rope Nethouse</span>
                    </div>
                  </th>

                  <!-- Structure 6 -->
                  <th class="fmkd-table__col-head" scope="col">
                    <div class="fmkd-col-head">
                      <figure class="fmkd-col-head__fig">
                        <img src="images/COLD.png" alt="Glasshouse" loading="lazy" width="220" height="140">
                      </figure>
                      <span class="fmkd-col-head__name">Glasshouse</span>
                    </div>
                  </th>
                </tr>
              </thead>

              <tbody>
                <!-- Row 1: Climate Control -->
                <tr>
                  <th class="fmkd-table__row-head" scope="row">
                    <span class="fmkd-factor__label">Climate Control</span>
                  </th>
                  <td><span class="fmkd-val fmkd-val--high">Active (Fan + Pad)</span></td>
                  <td><span class="fmkd-val fmkd-val--medium">Passive Vents</span></td>
                  <td><span class="fmkd-val fmkd-val--low">Ambient</span></td>
                  <td><span class="fmkd-val fmkd-val--low">Ambient</span></td>
                  <td><span class="fmkd-val fmkd-val--low">Ambient</span></td>
                  <td><span class="fmkd-val fmkd-val--highest">Full Precision</span></td>
                </tr>

                <!-- Row 2: Cost Range -->
                <tr>
                  <th class="fmkd-table__row-head" scope="row">
                    <span class="fmkd-factor__label">Cost Range</span>
                  </th>
                  <td><span class="fmkd-val fmkd-val--medium">Medium–High</span></td>
                  <td><span class="fmkd-val fmkd-val--medium">Medium</span></td>
                  <td><span class="fmkd-val fmkd-val--low">Low</span></td>
                  <td><span class="fmkd-val fmkd-val--low">Low–Medium</span></td>
                  <td><span class="fmkd-val fmkd-val--medium">Medium</span></td>
                  <td><span class="fmkd-val fmkd-val--highest">Premium</span></td>
                </tr>

                <!-- Row 3: Best Crops -->
                <tr>
                  <th class="fmkd-table__row-head" scope="row">
                    <span class="fmkd-factor__label">Best Crops</span>
                  </th>
                  <td><span class="fmkd-val fmkd-val--green">Exotics, Leafy Greens</span></td>
                  <td><span class="fmkd-val fmkd-val--green">Vine Crops, Tomato</span></td>
                  <td><span class="fmkd-val fmkd-val--green">Indian Vegetables</span></td>
                  <td><span class="fmkd-val fmkd-val--green">Mixed Vegetables</span></td>
                  <td><span class="fmkd-val fmkd-val--green">Berries, Flowers</span></td>
                  <td><span class="fmkd-val fmkd-val--green">Premium, Cannabis</span></td>
                </tr>

                <!-- Row 4: Life Span -->
                <tr>
                  <th class="fmkd-table__row-head" scope="row">
                    <span class="fmkd-factor__label">Life Span</span>
                  </th>
                  <td><span class="fmkd-val fmkd-val--navy">15–20 Years</span></td>
                  <td><span class="fmkd-val fmkd-val--navy">15–20 Years</span></td>
                  <td><span class="fmkd-val fmkd-val--navy">8–12 Years</span></td>
                  <td><span class="fmkd-val fmkd-val--navy">10–15 Years</span></td>
                  <td><span class="fmkd-val fmkd-val--navy">20+ Years</span></td>
                  <td><span class="fmkd-val fmkd-val--navy">25+ Years</span></td>
                </tr>

                <!-- Row 5: Subsidy Eligible -->
                <tr>
                  <th class="fmkd-table__row-head" scope="row">
                    <span class="fmkd-factor__label">Subsidy Eligible</span>
                  </th>
                  <td><span class="fmkd-val fmkd-val--yes">
                      <svg aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12" />
                      </svg>Yes
                    </span></td>
                  <td><span class="fmkd-val fmkd-val--yes">
                      <svg aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12" />
                      </svg>Yes
                    </span></td>
                  <td><span class="fmkd-val fmkd-val--yes">
                      <svg aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12" />
                      </svg>Yes
                    </span></td>
                  <td><span class="fmkd-val fmkd-val--yes">
                      <svg aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12" />
                      </svg>Yes
                    </span></td>
                  <td><span class="fmkd-val fmkd-val--conditional">
                      <svg aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                        <line x1="12" y1="5" x2="12" y2="12" />
                        <circle cx="12" cy="17" r="1.2" fill="currentColor" stroke="none" />
                      </svg>Conditional
                    </span></td>
                  <td><span class="fmkd-val fmkd-val--no">
                      <svg aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                      </svg>Not Eligible
                    </span></td>
                </tr>
              </tbody>
            </table>
          </div><!-- /fmkd-scroll-wrap -->

        </div><!-- /fmkd__inner -->
      </section>

      <!-- ============================================================
           04. WHICH STRUCTURE FITS YOUR FARM?
           ============================================================ -->
      <section class="fmwf" id="which-structure">
        <div class="fmwf__inner">

          <!-- HEADER -->
          <header class="fmwf__head">

            <span class="fmab-eyebrow">Which structure fits your farm?<i class="fmab-eyebrow__line"></i></span>


            <h2 class="fm-heading ">Make the Right <span class="fmwf__accent">Choice</span></h2>
            <p class="fm-text fmab__text">Select the most suitable structure based on your farm conditions and goals.
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
              <h3 class="fmwf-card__title">Location</h3>
              <p class="fm-text fmwf-card__text">Altitude, proximity to market and local conditions.</p>
              <img src="images/wf-location.jpg"
                alt="Aerial view of terraced green farmland in a mountain valley with a river running through"
                class="fmwf-card__img" loading="lazy" width="640" height="330">
              <ul class="fmwf-checks">
                <li class="fmwf-check">
                  <span class="fmwf-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10" />
                      <polyline points="9 12 11 14 15 10" />
                    </svg>
                  </span>
                  <span class="fmwf-check__label">Altitude &amp; terrain</span>
                </li>
                <li class="fmwf-check">
                  <span class="fmwf-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10" />
                      <polyline points="9 12 11 14 15 10" />
                    </svg>
                  </span>
                  <span class="fmwf-check__label">Market access</span>
                </li>
                <li class="fmwf-check">
                  <span class="fmwf-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10" />
                      <polyline points="9 12 11 14 15 10" />
                    </svg>
                  </span>
                  <span class="fmwf-check__label">Local environment</span>
                </li>
              </ul>
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
              <h3 class="fmwf-card__title">Climate</h3>
              <p class="fm-text fmwf-card__text">Temperature, rainfall, humidity and wind.</p>
              <img src="images/wf-climate.jpg"
                alt="Golden sunrise over a misty Tuscan-style valley with rolling green hills and farmland below"
                class="fmwf-card__img" loading="lazy" width="640" height="330">
              <ul class="fmwf-checks">
                <li class="fmwf-check">
                  <span class="fmwf-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10" />
                      <polyline points="9 12 11 14 15 10" />
                    </svg>
                  </span>
                  <span class="fmwf-check__label">Temperature range</span>
                </li>
                <li class="fmwf-check">
                  <span class="fmwf-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10" />
                      <polyline points="9 12 11 14 15 10" />
                    </svg>
                  </span>
                  <span class="fmwf-check__label">Rainfall &amp; sunlight</span>
                </li>
                <li class="fmwf-check">
                  <span class="fmwf-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10" />
                      <polyline points="9 12 11 14 15 10" />
                    </svg>
                  </span>
                  <span class="fmwf-check__label">Humidity &amp; wind</span>
                </li>
              </ul>
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
              <h3 class="fmwf-card__title">Crop</h3>
              <p class="fm-text fmwf-card__text">Current and future crops.</p>
              <img src="images/wf-crop.jpg"
                alt="Young green seedlings sprouting from dark moist soil inside a greenhouse nursery"
                class="fmwf-card__img" loading="lazy" width="640" height="330">
              <ul class="fmwf-checks">
                <li class="fmwf-check">
                  <span class="fmwf-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10" />
                      <polyline points="9 12 11 14 15 10" />
                    </svg>
                  </span>
                  <span class="fmwf-check__label">Crop type</span>
                </li>
                <li class="fmwf-check">
                  <span class="fmwf-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10" />
                      <polyline points="9 12 11 14 15 10" />
                    </svg>
                  </span>
                  <span class="fmwf-check__label">Rainfall pattern</span>
                </li>
                <li class="fmwf-check">
                  <span class="fmwf-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10" />
                      <polyline points="9 12 11 14 15 10" />
                    </svg>
                  </span>
                  <span class="fmwf-check__label">Future expansion</span>
                </li>
              </ul>
            </li>

            <!-- 4: Water -->
            <li class="fmwf-card">
              <span class="fmwf-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M12 2C6 10 4 13.5 4 16a8 8 0 0016 0c0-2.5-2-6-8-14z" />
                </svg>
              </span>
              <h3 class="fmwf-card__title">Water</h3>
              <p class="fm-text fmwf-card__text">Availability and quality.</p>
              <img src="images/wf-water.jpg"
                alt="Close-up of black drip irrigation pipe with crystal water droplets dripping onto leafy green crops"
                class="fmwf-card__img" loading="lazy" width="640" height="330">
              <ul class="fmwf-checks">
                <li class="fmwf-check">
                  <span class="fmwf-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10" />
                      <polyline points="9 12 11 14 15 10" />
                    </svg>
                  </span>
                  <span class="fmwf-check__label">Water availability</span>
                </li>
                <li class="fmwf-check">
                  <span class="fmwf-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10" />
                      <polyline points="9 12 11 14 15 10" />
                    </svg>
                  </span>
                  <span class="fmwf-check__label">Water quality</span>
                </li>
                <li class="fmwf-check">
                  <span class="fmwf-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10" />
                      <polyline points="9 12 11 14 15 10" />
                    </svg>
                  </span>
                  <span class="fmwf-check__label">Irrigation method</span>
                </li>
              </ul>
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
              <h3 class="fmwf-card__title">Budget</h3>
              <p class="fm-text fmwf-card__text">Initial investment and running cost.</p>
              <img src="images/wf-budget.jpg"
                alt="Silhouette of polyhouse greenhouse structures against a dramatic orange and pink sunrise sky"
                class="fmwf-card__img" loading="lazy" width="640" height="330">
              <ul class="fmwf-checks">
                <li class="fmwf-check">
                  <span class="fmwf-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10" />
                      <polyline points="9 12 11 14 15 10" />
                    </svg>
                  </span>
                  <span class="fmwf-check__label">Initial investment</span>
                </li>
                <li class="fmwf-check">
                  <span class="fmwf-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10" />
                      <polyline points="9 12 11 14 15 10" />
                    </svg>
                  </span>
                  <span class="fmwf-check__label">Operating cost</span>
                </li>
                <li class="fmwf-check">
                  <span class="fmwf-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10" />
                      <polyline points="9 12 11 14 15 10" />
                    </svg>
                  </span>
                  <span class="fmwf-check__label">ROI expectations</span>
                </li>
              </ul>
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
              <h3 class="fmwf-card__title">Production Goals</h3>
              <p class="fm-text fmwf-card__text">Yield, quality and target markets.</p>
              <img src="images/wf-production.jpg"
                alt="Neat rows of fresh green lettuce growing hydroponically in a large modern glass greenhouse"
                class="fmwf-card__img" loading="lazy" width="640" height="330">
              <ul class="fmwf-checks">
                <li class="fmwf-check">
                  <span class="fmwf-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10" />
                      <polyline points="9 12 11 14 15 10" />
                    </svg>
                  </span>
                  <span class="fmwf-check__label">Target yield</span>
                </li>
                <li class="fmwf-check">
                  <span class="fmwf-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10" />
                      <polyline points="9 12 11 14 15 10" />
                    </svg>
                  </span>
                  <span class="fmwf-check__label">Quality standards</span>
                </li>
                <li class="fmwf-check">
                  <span class="fmwf-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10" />
                      <polyline points="9 12 11 14 15 10" />
                    </svg>
                  </span>
                  <span class="fmwf-check__label">Market type</span>
                </li>
              </ul>
            </li>

          </ul><!-- /fmwf-cards -->

          <!-- BANNER -->
          <aside class="fmwf-cta">
            <span class="fmwf-cta__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M12 21V10" />
                <path d="M12 14c-3-1-5.5-3.5-5.5-6.5 3 0 5.5 2.5 5.5 6.5Z" />
                <path d="M12 11c3-1 5.5-3.5 5.5-6.5-3 0-5.5 2.5-5.5 6.5Z" />
              </svg>
            </span>
            <div class="fmwf-cta__body">
              <h3 class="fmwf-cta__title">Not sure which structure is right for you?</h3>
              <p class="fm-text fmwf-cta__text">Our experts will help you choose the most suitable structure based on
                your farm conditions and goals.</p>
            </div>
            <div class="fmwf-cta__act">
              <a href="#recommendation" class="fm-cta-btn fmwf__btn">
                <span class="fmwf__btn-label">Get a Recommendation</span>
                <span class="fmwf__btn-arrow" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12" />
                    <polyline points="12 5 19 12 12 19" />
                  </svg>
                </span>
              </a>
            </div>
          </aside>

          <!-- next block goes here -->

        </div><!-- /fmwf__inner -->
      </section>

      <!-- ============================================================
           05. ENGINEERING & CUSTOMISATION
           ============================================================ -->
      <section class="fmec" id="engineering-customisation">
        <div class="fmec__inner">

          <!-- LEFT TEXT -->
          <div class="fmec__content">
         <span class="fmab-eyebrow">Engineering & Customisation<i class="fmab-eyebrow__line"></i></span>
            <h2 class="fm-heading">Engineering &amp;<br><span class="fmec__accent">Customisation</span></h2>
            <p class="fm-text fmec__lead">Designed around your farm, your climate and your crop.</p>
            <p class="fm-text fmec__text">We engineer every structure with the right design, materials and systems to
              deliver long-term performance for your unique farming conditions.</p>
          </div>

          <!-- LEFT PHOTO -->
          <figure class="fmec__media">
            <img src="images/ec-greenhouse.jpg"
              alt="Row of large polyhouse greenhouses with exhaust fans and a water tank at sunrise, surrounded by green crop rows"
              class="fmec__img" loading="lazy" width="1000" height="585">
          </figure>

          <!-- SIX CARDS -->
          <ol class="fmec-cards">

            <!-- 01 Structural Design -->
            <li class="fmec-card fmec-card--dark">
              <span class="fmec-card__badge" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M3 21h18" />
                  <path d="M5 21V7l7-4 7 4v14" />
                  <path d="M9 21v-6h6v6" />
                </svg>
              </span>
              <span class="fmec-card__no">01</span>
              <h3 class="fm-heading fmec-card__title">Structural Design</h3>
              <p class="fm-text fmec-card__text">Engineered for strength, durability and site conditions.</p>
              <a href="#structural-design" class="fmec-card__go" aria-label="Learn more about Structural Design">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12" />
                  <polyline points="12 5 19 12 12 19" />
                </svg>
              </a>
            </li>

            <!-- 02 Cladding -->
            <li class="fmec-card fmec-card--green">
              <span class="fmec-card__badge" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M12 2L2 7l10 5 10-5-10-5Z" />
                  <path d="M2 17l10 5 10-5" />
                  <path d="M2 12l10 5 10-5" />
                </svg>
              </span>
              <span class="fmec-card__no">02</span>
              <h3 class="fm-heading fmec-card__title">Cladding</h3>
              <p class="fm-text fmec-card__text">High-quality films and panels for optimal light and protection.</p>
              <a href="#cladding" class="fmec-card__go" aria-label="Learn more about Cladding">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12" />
                  <polyline points="12 5 19 12 12 19" />
                </svg>
              </a>
            </li>

            <!-- 03 Ventilation -->
            <li class="fmec-card fmec-card--green">
              <span class="fmec-card__badge" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <circle cx="12" cy="12" r="2" />
                  <path d="M12 2a7 7 0 014 6c0 2-2 3-4 3" />
                  <path d="M12 22a7 7 0 01-4-6c0-2 2-3 4-3" />
                  <path d="M2 12a7 7 0 016-4c2 0 3 2 3 4" />
                  <path d="M22 12a7 7 0 01-6 4c-2 0-3-2-3-4" />
                </svg>
              </span>
              <span class="fmec-card__no">03</span>
              <h3 class="fm-heading fmec-card__title">Ventilation</h3>
              <p class="fm-text fmec-card__text">Natural and mechanical solutions for better airflow and healthy crops.
              </p>
              <a href="#ventilation" class="fmec-card__go" aria-label="Learn more about Ventilation">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12" />
                  <polyline points="12 5 19 12 12 19" />
                </svg>
              </a>
            </li>

            <!-- 04 Cooling -->
            <li class="fmec-card fmec-card--dark">
              <span class="fmec-card__badge" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M14 4v10.54a4 4 0 11-4 0V4a2 2 0 014 0Z" />
                  <path d="M18 2l-1.5 1.5L18 5" />
                  <path d="M20 4l-1.5 1.5" />
                </svg>
              </span>
              <span class="fmec-card__no">04</span>
              <h3 class="fm-heading fmec-card__title">Cooling</h3>
              <p class="fm-text fmec-card__text">Fan &amp; pad and advanced cooling systems for temperature control.</p>
              <a href="#cooling" class="fmec-card__go" aria-label="Learn more about Cooling">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12" />
                  <polyline points="12 5 19 12 12 19" />
                </svg>
              </a>
            </li>

            <!-- 05 Crop Support -->
            <li class="fmec-card fmec-card--green">
              <span class="fmec-card__badge" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M12 21V10" />
                  <path d="M12 14c-3-1-5.5-3.5-5.5-6.5 3 0 5.5 2.5 5.5 6.5Z" />
                  <path d="M12 11c3-1 5.5-3.5 5.5-6.5-3 0-5.5 2.5-5.5 6.5Z" />
                </svg>
              </span>
              <span class="fmec-card__no">05</span>
              <h3 class="fm-heading fmec-card__title">Crop Support</h3>
              <p class="fm-text fmec-card__text">Trellis, hanging and specialized systems for different crops.</p>
              <a href="#crop-support" class="fmec-card__go" aria-label="Learn more about Crop Support">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12" />
                  <polyline points="12 5 19 12 12 19" />
                </svg>
              </a>
            </li>

            <!-- 06 Site-Specific Configuration -->
            <li class="fmec-card fmec-card--dark">
              <span class="fmec-card__badge" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <circle cx="12" cy="12" r="3" />
                  <path
                    d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 01-2.83 2.83l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09a1.65 1.65 0 00-1.08-1.51 1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09a1.65 1.65 0 001.51-1.08 1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1.08Z" />
                </svg>
              </span>
              <span class="fmec-card__no">06</span>
              <h3 class="fm-heading fmec-card__title">Site-Specific Configuration</h3>
              <p class="fm-text fmec-card__text">Customized layouts, dimensions and systems for your unique farm.</p>
              <a href="#site-configuration" class="fmec-card__go"
                aria-label="Learn more about Site-Specific Configuration">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12" />
                  <polyline points="12 5 19 12 12 19" />
                </svg>
              </a>
            </li>

          </ol><!-- /fmec-cards -->

        </div><!-- /fmec__inner -->
      </section>

      <!-- ============================================================
           06. OUR PROTECTED STRUCTURE PROJECTS
           ============================================================ -->
      <section class="fmpp" id="projects">
        <div class="fmpp__inner">

          <header class="fmpp__head">
            <div class="fmpp__intro">
              <span class="fmpp-eyebrow"><span class="fmpp-eyebrow__no">06</span><span class="fmpp-eyebrow__label">Our
                  Protected Structure Projects</span><i class="fmpp-eyebrow__line"></i></span>
              <h2 class="fm-heading ">Real Farms. <span class="fmpp__accent">Real Results.</span></h2>
              <p class="fm-text fmab__text">A few of our recent installations across different crops and regions.</p>
            </div>
            <a href="#all-projects" class="fmpp__all">
              <span class="fmpp__all-label">View All Projects</span>
              <span class="fmpp__all-arrow" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </a>
          </header>

          <div class="fmpp__grid">

            <figure class="fmpp-feat">
              <img src="images/pp-fanpad.jpg"
                alt="Large fan and pad polyhouse with exhaust fans and green capsicum rows at sunrise"
                class="fmpp-feat__img" loading="eager" width="1376" height="768">
              <div class="fmpp-feat__panel">
                <div class="fmpp-feat__info">
                  <span class="fmpp-feat__eyebrow"><span class="fmpp-feat__eyebrow-label">Featured Project</span><i
                      class="fmpp-feat__eyebrow-line"></i></span>
                  <h3 class="fmpp-feat__title">Fan &amp; Pad Polyhouse</h3>
                  <p class="fm-text fmpp-feat__text">Controlled environment for higher yields and consistent crop
                    quality.</p>
                  <a href="#project-fan-pad" class="fmpp-feat__go">
                    <span class="fmpp-feat__go-icon" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                        stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                      </svg>
                    </span>
                    <span class="fmpp-feat__go-label">View Project Details</span>
                  </a>
                </div>
                <ul class="fmpp-stats">
                  <li class="fmpp-stat">
                    <span class="fmpp-stat__icon" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7" />
                      </svg>
                    </span>
                    <span class="fmpp-stat__body">
                      <span class="fmpp-stat__value">12 Acres</span>
                      <span class="fmpp-stat__label">Project area</span>
                    </span>
                  </li>
                  <li class="fmpp-stat">
                    <span class="fmpp-stat__icon" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                        <circle cx="12" cy="10" r="3" />
                      </svg>
                    </span>
                    <span class="fmpp-stat__body">
                      <span class="fmpp-stat__value">Nashik, Maharashtra</span>
                      <span class="fmpp-stat__label">Location</span>
                    </span>
                  </li>
                  <li class="fmpp-stat">
                    <span class="fmpp-stat__icon" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7 20h10" />
                        <path d="M10 20c0-4.4 2-8 7-8" />
                        <path d="M17 12c-3-3-3-8 0-10-4 0-8 3-7 10" />
                        <path d="M12 14c-2.5-2.5-2.5-6.5 0-8-3 0-6 2.5-5 8" />
                      </svg>
                    </span>
                    <span class="fmpp-stat__body">
                      <span class="fmpp-stat__value">Capsicum, Tomato</span>
                      <span class="fmpp-stat__label">Crop</span>
                    </span>
                  </li>
                </ul>
              </div>
            </figure>

            <ol class="fmpp-list">
              <li class="fmpp-item">
                <span class="fmpp-item__no">02</span>
                <img src="images/pp-nvph.jpg"
                  alt="Naturally ventilated polyhouse with clear walls and rows of green crops" class="fmpp-item__img"
                  loading="lazy" width="1264" height="848">
                <div class="fmpp-item__body">
                  <h3 class="fmpp-item__title"><a href="#project-nvph" class="fmpp-item__link">NVPH</a></h3>
                  <p class="fm-text fmpp-item__text">Naturally ventilated polyhouse for diverse crops.</p>
                  <ul class="fmpp-meta">
                    <li class="fmpp-meta__row">
                      <span class="fmpp-meta__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                          stroke-linecap="round" stroke-linejoin="round">
                          <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7" />
                        </svg>
                      </span>
                      <span class="fmpp-meta__label">0.8 Acres</span>
                    </li>
                    <li class="fmpp-meta__row">
                      <span class="fmpp-meta__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                          stroke-linecap="round" stroke-linejoin="round">
                          <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                          <circle cx="12" cy="10" r="3" />
                        </svg>
                      </span>
                      <span class="fmpp-meta__label">Indore, Madhya Pradesh</span>
                    </li>
                    <li class="fmpp-meta__row">
                      <span class="fmpp-meta__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                          stroke-linecap="round" stroke-linejoin="round">
                          <path d="M7 20h10" />
                          <path d="M10 20c0-4.4 2-8 7-8" />
                          <path d="M17 12c-3-3-3-8 0-10-4 0-8 3-7 10" />
                          <path d="M12 14c-2.5-2.5-2.5-6.5 0-8-3 0-6 2.5-5 8" />
                        </svg>
                      </span>
                      <span class="fmpp-tags">
                        <span class="fmpp-tag">Cucumber</span>
                        <span class="fmpp-tag">Leafy Greens</span>
                      </span>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="fmpp-item">
                <span class="fmpp-item__no">03</span>
                <img src="images/pp-nethouse.jpg"
                  alt="Agricultural shade net house with pitched roof and rows of green crops" class="fmpp-item__img"
                  loading="lazy" width="1264" height="848">
                <div class="fmpp-item__body">
                  <h3 class="fmpp-item__title"><a href="#project-nethouse" class="fmpp-item__link">Nethouse</a></h3>
                  <p class="fm-text fmpp-item__text">Economical protection with effective insect control.</p>
                  <ul class="fmpp-meta">
                    <li class="fmpp-meta__row">
                      <span class="fmpp-meta__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                          stroke-linecap="round" stroke-linejoin="round">
                          <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7" />
                        </svg>
                      </span>
                      <span class="fmpp-meta__label">1.5 Acres</span>
                    </li>
                    <li class="fmpp-meta__row">
                      <span class="fmpp-meta__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                          stroke-linecap="round" stroke-linejoin="round">
                          <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                          <circle cx="12" cy="10" r="3" />
                        </svg>
                      </span>
                      <span class="fmpp-meta__label">Bengaluru, Karnataka</span>
                    </li>
                    <li class="fmpp-meta__row">
                      <span class="fmpp-meta__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                          stroke-linecap="round" stroke-linejoin="round">
                          <path d="M7 20h10" />
                          <path d="M10 20c0-4.4 2-8 7-8" />
                          <path d="M17 12c-3-3-3-8 0-10-4 0-8 3-7 10" />
                          <path d="M12 14c-2.5-2.5-2.5-6.5 0-8-3 0-6 2.5-5 8" />
                        </svg>
                      </span>
                      <span class="fmpp-tags">
                        <span class="fmpp-tag">Leafy Greens</span>
                        <span class="fmpp-tag">Herbs</span>
                      </span>
                    </li>
                  </ul>
                </div>
              </li>
            </ol>

          </div>

        </div>
        <!-- next block goes here -->
      </section>

    </main>

    
  </div>
@endsection
