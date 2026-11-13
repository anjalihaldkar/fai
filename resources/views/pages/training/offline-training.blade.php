@extends('layouts.app')

@section('title', 'Protected Farming Solutions')
@section('body_class', 'protected-page offline-training-page')

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
      <section class="fmlj" id="learning-journey">
        <div class="fmlj__inner">

          <header class="fmlj__head">
            <span class="fmlj-eyebrow"><i class="fmlj-eyebrow__line"></i><span class="fmlj-eyebrow__label">What
                you&rsquo;ll learn</span></span>
            <h2 class="fm-heading">A Complete <span class="fmdm__accent">Learning Journey</span> </h2>
            <p class="fm-text fmab__text">From the science and setup, to daily operations, business planning and selling
              your produce in the real market.</p>
          </header>

          <ul class="fmlj-cards">
            <li class="fmlj-item">
              <article class="fmlj-card">
                <img src="images/res-hydroponic-system.jpg"
                  alt="Young lettuce plants growing on a white hydroponic channel in a greenhouse"
                  class="fmlj-card__img" loading="lazy" width="840" height="460">
                <span class="fmlj-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <path d="M3 10l9-7 9 7v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V10z" />
                    <path d="M12 21V11" />
                    <path d="M9 14c0-2.5 3-3 3-3s3 .5 3 3-1.5 3-3 3" />
                  </svg>
                </span>
                <div class="fmlj-card__body">
                  <h3 class="fm-heading fmlj-card__title">Technical</h3>
                  <p class="fm-text fmlj-card__text">Understand hydroponic principles, systems, design and nutrient
                    management.</p>



                  <a href="#technical" class="fm-cta-btn">
                    Learn More
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                      stroke-linecap="round" stroke-linejoin="round">
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                      <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                  </a>
                </div>
              </article>
            </li>
            <li class="fmlj-item">
              <article class="fmlj-card">
                <img src="images/wf-crop.jpg" alt="Farmer holding healthy young green crop seedlings with root system"
                  class="fmlj-card__img" loading="lazy" width="840" height="460">
                <span class="fmlj-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <path d="M12 21V10" />
                    <path d="M12 10c-3.5 0-6-2.5-6-6 3.5 0 6 2.5 6 6z" />
                    <path d="M12 14c3.5 0 6-2.5 6-6-3.5 0-6 2.5-6 6z" />
                  </svg>
                </span>
                <div class="fmlj-card__body">
                  <h3 class="fm-heading fmlj-card__title">Operational</h3>
                  <p class="fm-text fmlj-card__text">Learn day-to-day farm operations, crop management and
                    problem-solving.</p>
                  <a href="#operational" class="fm-cta-btn">
                    Learn More
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                      stroke-linecap="round" stroke-linejoin="round">
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                      <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                  </a>
                </div>
              </article>
            </li>
            <li class="fmlj-item">
              <article class="fmlj-card">
                <img src="images/wf-budget.jpg"
                  alt="Farm investment planning and commercial polyhouse financial projections" class="fmlj-card__img"
                  loading="lazy" width="840" height="460">
                <span class="fmlj-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <path d="M3 20h18" />
                    <path d="M6 16v-4" />
                    <path d="M10 16v-8" />
                    <path d="M14 16v-5" />
                    <path d="M18 16V7" />
                    <path d="M14 7l4-3 3 3" />
                  </svg>
                </span>
                <div class="fmlj-card__body">
                  <h3 class="fm-heading fmlj-card__title">Commercial</h3>
                  <p class="fm-text fmlj-card__text">Evaluate investment, costs, returns and how to build a sustainable
                    business.</p>
                  <a href="#commercial" class="fm-cta-btn">
                    Learn More
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                      stroke-linecap="round" stroke-linejoin="round">
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                      <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                  </a>
                </div>
              </article>
            </li>
            <li class="fmlj-item">
              <article class="fmlj-card">
                <img src="images/crop-leafy.jpg"
                  alt="Fresh packaged lettuce and salad crops prepared for retail market distribution"
                  class="fmlj-card__img" loading="lazy" width="840" height="460">
                <span class="fmlj-card__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <circle cx="9" cy="20" r="1.5" />
                    <circle cx="18" cy="20" r="1.5" />
                    <path d="M2 3h3.5l2.6 11.2a1.5 1.5 0 0 0 1.4 1.1h9a1.5 1.5 0 0 0 1.4-1l2-7.3H6.2" />
                    <path d="M15 7c-1.5 0-3-1-3-2.5 1.5 0 3 1 3 2.5z" />
                  </svg>
                </span>
                <div class="fmlj-card__body">
                  <h3 class="fm-heading fmlj-card__title">Sales &amp; Marketing</h3>
                  <p class="fm-text fmlj-card__text">Explore market channels, buyer requirements, pricing, packaging and
                    brand positioning.</p>



                  <a href="#sales-marketing" class="fm-cta-btn">
                    Learn More
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                      stroke-linecap="round" stroke-linejoin="round">
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                      <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                  </a>
                </div>
              </article>
            </li>
          </ul>

        </div>
        <!-- next block -->
      </section>


      <!-- ===================================================================
           04. Solutions we consult on: Integrated Solutions for Every Growing Environment
           =================================================================== -->
      <section class="fmsc" id="integrated-solutions">
        <div class="fmsc__inner">

          <!-- HEADER: title left, paragraph with a thin vertical line right (one grid) -->
          <header class="fmsc__head">
            <div class="fmsc__headtext">
              <span class="fmsc-eyebrow"><b>04</b><i class="fmsc-eyebrow__line"></i><span>Solutions we consult
                  on</span></span>
              <h2 class="fm-heading fmsc__title">Integrated Solutions <br>for Every <span class="fmdm__accent"> Growing
                  Environment</span></h2>
            </div>
            <div class="fmsc__intro">
              <i class="fmsc__intro-rule" aria-hidden="true"></i>
              <p class="fm-text fmsc__text">We help you select and integrate the right combination of structures,
                growing systems, crops and automation based on your climate, resources and business goals.</p>
            </div>
          </header>

          <!-- FOUR CARDS (each card is ONE link) -->
          <ul class="fmsc-cards">

            <li class="fmsc-card">
              <figure class="fmsc-card__media"><img src="images/fip-structures.jpg"
                  alt="Large greenhouse structure over rows of crops" loading="lazy" width="900" height="440"></figure>
              <div class="fmsc-card__body">
                <div class="fmsc-card__txt">
                  <h3 class="fm-heading fmsc-card__title"><a class="fmsc-card__link"
                      href="/solutions/protected-structures">Protected Structures</a></h3>
                  <p class="fm-text fmsc-card__text">Greenhouses, net houses and specialised structures for diverse
                    climates.</p>
                </div>
                <span class="fmsc-card__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </div>
            </li>

            <li class="fmsc-card">
              <figure class="fmsc-card__media"><img src="images/crop-leafy.jpg"
                  alt="Hydroponic lettuce growing in white channels" loading="lazy" width="900" height="440"></figure>
              <div class="fmsc-card__body">
                <div class="fmsc-card__txt">
                  <h3 class="fm-heading fmsc-card__title"><a class="fmsc-card__link"
                      href="/solutions/hydroponic-growing-systems">Hydroponic &amp; Growing Systems</a></h3>
                  <p class="fm-text fmsc-card__text">Soilless and precision growing systems for higher productivity.</p>
                </div>
                <span class="fmsc-card__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </div>
            </li>

            <li class="fmsc-card">
              <figure class="fmsc-card__media"><img src="images/crop-fruit.jpg"
                  alt="Ripe tomatoes on the vine in a greenhouse" loading="lazy" width="900" height="440"></figure>
              <div class="fmsc-card__body">
                <div class="fmsc-card__txt">
                  <h3 class="fm-heading fmsc-card__title"><a class="fmsc-card__link"
                      href="/solutions/crop-planning">Crop Planning</a></h3>
                  <p class="fm-text fmsc-card__text">Crop selection and tailored growing strategies for local markets.
                  </p>
                </div>
                <span class="fmsc-card__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </div>
            </li>

            <li class="fmsc-card">
              <figure class="fmsc-card__media"><img src="images/automation.png"
                  alt="Climate control panel inside a greenhouse" loading="lazy" width="900" height="440"></figure>
              <div class="fmsc-card__body">
                <div class="fmsc-card__txt">
                  <h3 class="fm-heading fmsc-card__title"><a class="fmsc-card__link"
                      href="/solutions/automation-climate-control">Automation &amp; Climate Control</a></h3>
                  <p class="fm-text fmsc-card__text">Irrigation, fertigation, climate control and smart monitoring.</p>
                </div>
                <span class="fmsc-card__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </div>
            </li>

          </ul>
        </div>
      </section>

      <!-- ===================================================================
           03. WORKSHOP OUTCOMES (FMWO)
           =================================================================== -->
      <section class="fmwo" id="workshop-outcomes">
        <div class="fmwo__inner">

          <header class="fmwo__head">
            <span class="fmwo-eyebrow"><i class="fmwo-eyebrow__line"></i><span class="fmwo-eyebrow__label">Workshop
                Outcomes</span></span>
            <h2 class="fm-heading ">Leave With a <span class="fmdm__accent"> Complete Action</span> Plan</h2>
            <p class="fm-text fmab__text">The knowledge, tools and confidence to start or scale your hydroponics
              business.</p>
          </header>

          <ol class="fmwo-stages" aria-label="Workshop stages">
            <li class="fmwo-stage">
              <span class="fmwo-pill"><span class="fmwo-pill__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    aria-hidden="true" focusable="false">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                  </svg></span><span class="fmwo-pill__label">Plan</span></span>
            </li>
            <li class="fmwo-stage fmwo-stage--on">
              <span class="fmwo-pill"><span class="fmwo-pill__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    aria-hidden="true" focusable="false">
                    <circle cx="12" cy="12" r="3" />
                    <path
                      d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 1 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 1 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 1 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 1 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z" />
                  </svg></span><span class="fmwo-pill__label">Run</span></span>
            </li>
            <li class="fmwo-stage">
              <span class="fmwo-pill"><span class="fmwo-pill__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    aria-hidden="true" focusable="false">
                    <path d="M3 20h18M6 16v-4M10 16v-8M14 16v-5M18 16V7M14 7l4-3 3 3" />
                  </svg></span><span class="fmwo-pill__label">Grow</span></span>
            </li>
          </ol>

          <ol class="fmwo-cards">
            <li class="fmwo-card">
              <span class="fmwo-card__no">01</span>
              <span class="fmwo-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                  <path d="M3 10l9-7 9 7v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V10z" />
                  <path d="M12 21V11" />
                  <path d="M9 14c0-2.5 3-3 3-3s3 .5 3 3-1.5 3-3 3" />
                </svg>
              </span>
              <div class="fmwo-card__body">
                <h3 class="fmwo-card__title">Plan Your Farm</h3>
                <p class="fm-text fmwo-card__text">Right system, structure and crop for your goals.</p>
              </div>
            </li>
            <li class="fmwo-card">
              <span class="fmwo-card__no">02</span>
              <span class="fmwo-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                  <rect x="4" y="2" width="16" height="20" rx="2" />
                  <line x1="8" y1="6" x2="16" y2="6" />
                  <line x1="8" y1="10" x2="8.01" y2="10" />
                  <line x1="12" y1="10" x2="12.01" y2="10" />
                  <line x1="16" y1="10" x2="16.01" y2="10" />
                  <line x1="8" y1="14" x2="8.01" y2="14" />
                  <line x1="12" y1="14" x2="12.01" y2="14" />
                  <line x1="16" y1="14" x2="16.01" y2="14" />
                  <line x1="8" y1="18" x2="8.01" y2="18" />
                  <line x1="12" y1="18" x2="12.01" y2="18" />
                  <line x1="16" y1="18" x2="16.01" y2="18" />
                </svg>
              </span>
              <div class="fmwo-card__body">
                <h3 class="fmwo-card__title">Evaluate the Business</h3>
                <p class="fm-text fmwo-card__text">Investment, operating cost, ROI and payback.</p>
              </div>
            </li>
            <li class="fmwo-card">
              <span class="fmwo-card__no">03</span>
              <span class="fmwo-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                  <path d="M12 21V10" />
                  <path d="M12 10c-3.5 0-6-2.5-6-6 3.5 0 6 2.5 6 6z" />
                  <path d="M12 14c3.5 0 6-2.5 6-6-3.5 0-6 2.5-6 6z" />
                </svg>
              </span>
              <div class="fmwo-card__body">
                <h3 class="fmwo-card__title">Operate with Confidence</h3>
                <p class="fm-text fmwo-card__text">Hands-on skills for daily farm management.</p>
              </div>
            </li>
            <li class="fmwo-card">
              <span class="fmwo-card__no">04</span>
              <span class="fmwo-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                  <circle cx="9" cy="20" r="1.5" />
                  <circle cx="18" cy="20" r="1.5" />
                  <path d="M2 3h3.5l2.6 11.2a1.5 1.5 0 0 0 1.4 1.1h9a1.5 1.5 0 0 0 1.4-1l2-7.3H6.2" />
                  <path d="M15 7c-1.5 0-3-1-3-2.5 1.5 0 3 1 3 2.5z" />
                </svg>
              </span>
              <div class="fmwo-card__body">
                <h3 class="fmwo-card__title">Sell Your Produce</h3>
                <p class="fm-text fmwo-card__text">Understand buyers, pricing, packaging and market channels.</p>
              </div>
            </li>
            <li class="fmwo-card">
              <span class="fmwo-card__no">05</span>
              <span class="fmwo-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                  <path
                    d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
                </svg>
              </span>
              <div class="fmwo-card__body">
                <h3 class="fmwo-card__title">Troubleshoot Effectively</h3>
                <p class="fm-text fmwo-card__text">Identify, prevent and resolve common farm issues.</p>
              </div>
            </li>
            <li class="fmwo-card">
              <span class="fmwo-card__no">06</span>
              <span class="fmwo-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                  <path d="M3 20h18M6 16v-4M10 16v-8M14 16v-5M18 16V7M14 7l4-3 3 3" />
                </svg>
              </span>
              <div class="fmwo-card__body">
                <h3 class="fmwo-card__title">Build a Scalable Model</h3>
                <p class="fm-text fmwo-card__text">Take practical next steps to start or grow commercially.</p>
              </div>
            </li>
          </ol>

          <ul class="fmwo-perks">
            <li class="fmwo-perk">
              <span class="fmwo-perk__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                  <rect x="3" y="4" width="18" height="13" rx="2" />
                  <circle cx="12" cy="10" r="3" />
                  <path d="M8 21l4-3 4 3v-4H8z" />
                </svg>
              </span>
              <span class="fmwo-perk__label">Certificate of<br>Participation</span>
            </li>
            <li class="fmwo-perk">
              <span class="fmwo-perk__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                  <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z" />
                  <line x1="12" y1="11" x2="12" y2="17" />
                  <line x1="9" y1="14" x2="15" y2="14" />
                </svg>
              </span>
              <span class="fmwo-perk__label">Workshop<br>Resource Material</span>
            </li>
            <li class="fmwo-perk">
              <span class="fmwo-perk__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                  <circle cx="9" cy="7" r="4" />
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg>
              </span>
              <span class="fmwo-perk__label">Expert Guidance<br>&amp; Q&amp;A</span>
            </li>
          </ul>

        </div>
      </section>

      <!-- Workshop Details: Plan Your Learning Experience -->
      <section class="fmwd" id="workshop-details" aria-labelledby="fmwd-title">
        <div class="fmwd__inner">

          <header class="fmwd__head">
            <span class="fmwd-eyebrow">
              <i class="fmwd-eyebrow__line" aria-hidden="true"></i>
              <span class="fmwd-eyebrow__label">Workshop Details</span>
            </span>
            <h2 class="fm-heading " id="fmwd-title">Plan Your <span class="fmdm__accent">Learning
                Experience</span> </h2>
            <p class="fm-text fmab__text">All key information you need to join the two-day hydroponics workshop.</p>
          </header>

          <!-- Top 3 Info Cards -->
          <div class="fmwd-top-grid">
            <!-- Card 1: Duration -->
            <div class="fmwd-info-card">
              <span class="fmwd-info-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <rect x="3" y="4" width="18" height="18" rx="3" ry="3"></rect>
                  <line x1="16" y1="2" x2="16" y2="6"></line>
                  <line x1="8" y1="2" x2="8" y2="6"></line>
                  <line x1="3" y1="10" x2="21" y2="10"></line>
                  <circle cx="8" cy="14" r="1" fill="currentColor"></circle>
                  <circle cx="12" cy="14" r="1" fill="currentColor"></circle>
                  <circle cx="16" cy="14" r="1" fill="currentColor"></circle>
                  <circle cx="8" cy="18" r="1" fill="currentColor"></circle>
                  <circle cx="12" cy="18" r="1" fill="currentColor"></circle>
                  <circle cx="16" cy="18" r="1" fill="currentColor"></circle>
                </svg>
              </span>
              <div class="fmwd-info-card__content">
                <span class="fmwd-info-card__label">Duration</span>
                <span class="fmwd-info-card__val fmwd-info-card__val--highlight">2 Days</span>
              </div>
            </div>

            <!-- Card 2: Format -->
            <div class="fmwd-info-card">
              <span class="fmwd-info-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                  <circle cx="12" cy="10" r="3"></circle>
                </svg>
              </span>
              <div class="fmwd-info-card__content">
                <span class="fmwd-info-card__label fmwd-info-card__label--dark">Format</span>
                <span class="fmwd-info-card__val">
                  <span>Day 1: Classroom</span>
                  <span>Day 2: At Farm</span>
                </span>
              </div>
            </div>

            <!-- Card 3: Who Should Attend -->
            <div class="fmwd-info-card">
              <span class="fmwd-info-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
              </span>
              <div class="fmwd-info-card__content">
                <span class="fmwd-info-card__label fmwd-info-card__label--dark">Who Should Attend</span>
                <p class="fmwd-info-card__desc">Aspiring growers, entrepreneurs, investors and agri-professionals.</p>
              </div>
            </div>
          </div>

          <!-- Mid 2 Panels (Workshop Covers + Takeaway) -->
          <div class="fmwd-mid-grid">
            <!-- Workshop Covers -->
            <div class="fmwd-panel fmwd-panel--covers">
              <div class="fmwd-panel__header">
                <h3 class="fmwd-panel__title">Workshop Covers</h3>
                <span class="fmwd-panel__bar" aria-hidden="true"></span>
              </div>
              <div class="fmwd-covers-row">
                <div class="fmwd-cover-item">
                  <span class="fmwd-cover-item__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path>
                      <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                    </svg>
                  </span>
                  <span class="fmwd-cover-item__label">Technical</span>
                </div>
                <span class="fmwd-cover-sep" aria-hidden="true"></span>
                <div class="fmwd-cover-item">
                  <span class="fmwd-cover-item__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="3"></circle>
                      <path
                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                      </path>
                    </svg>
                  </span>
                  <span class="fmwd-cover-item__label">Operational</span>
                </div>
                <span class="fmwd-cover-sep" aria-hidden="true"></span>
                <div class="fmwd-cover-item">
                  <span class="fmwd-cover-item__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                      <polyline points="2 17 12 22 22 17"></polyline>
                      <polyline points="2 12 12 17 22 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmwd-cover-item__label">Commercial</span>
                </div>
                <span class="fmwd-cover-sep" aria-hidden="true"></span>
                <div class="fmwd-cover-item">
                  <span class="fmwd-cover-item__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M11 5L6 9H2v6h4l5 4V5z"></path>
                      <path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                    </svg>
                  </span>
                  <span class="fmwd-cover-item__label">Sales &amp;<br>Marketing</span>
                </div>
              </div>
            </div>

            <!-- Takeaway -->
            <div class="fmwd-panel fmwd-panel--takeaway">
              <div class="fmwd-panel__header">
                <h3 class="fmwd-panel__title">Takeaway</h3>
                <span class="fmwd-panel__bar" aria-hidden="true"></span>
              </div>
              <div class="fmwd-takeaway-body">
                <div class="fmwd-takeaway-body__badge" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <circle cx="12" cy="8" r="6"></circle>
                    <polygon
                      points="12 5 13.09 7.26 15.55 7.62 13.77 9.35 14.19 11.8 12 10.65 9.81 11.8 10.23 9.35 8.45 7.62 10.91 7.26 12 5">
                    </polygon>
                    <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                  </svg>
                </div>
                <span class="fmwd-takeaway-sep" aria-hidden="true"></span>
                <ul class="fmwd-takeaway-list">
                  <li class="fmwd-takeaway-list__item">
                    <span class="fmwd-check-icon" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                        stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12"></polyline>
                      </svg>
                    </span>
                    <span>Practical knowledge</span>
                  </li>
                  <li class="fmwd-takeaway-list__item">
                    <span class="fmwd-check-icon" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                        stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12"></polyline>
                      </svg>
                    </span>
                    <span>Resource material</span>
                  </li>
                  <li class="fmwd-takeaway-list__item">
                    <span class="fmwd-check-icon" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                        stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12"></polyline>
                      </svg>
                    </span>
                    <span>Certificate of participation</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Bottom Navy Banner -->
          <div class="fmwd-banner">
            <div class="fmwd-banner__left">
              <span class="fmwd-banner__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M12 21V10"></path>
                  <path d="M12 10c-3.5 0-6-2.5-6-6 3.5 0 6 2.5 6 6z"></path>
                  <path d="M12 14c3.5 0 6-2.5 6-6-3.5 0-6 2.5-6 6z"></path>
                </svg>
              </span>
              <span class="fmwd-banner__divider" aria-hidden="true"></span>
              <h4 class="fmwd-banner__title">Reserve Your Seat Today!</h4>
            </div>
            <div class="fmwd-banner__action">
              <span class="fmwd-banner__rays" aria-hidden="true">
                <svg viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                  <line x1="8" y1="8" x2="16" y2="16"></line>
                  <line x1="2" y1="20" x2="14" y2="20"></line>
                  <line x1="8" y1="32" x2="16" y2="24"></line>
                </svg>
              </span>
              <a href="#register" class="fmwd-banner__btn">
                <span>Register Now</span>
                <span class="fmwd-banner__btn-arrow" aria-hidden="true">&rarr;</span>
              </a>
            </div>
          </div>

        </div>
      </section>
    </main>

    
  </div>
@endsection
