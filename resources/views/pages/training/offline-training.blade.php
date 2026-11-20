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
                alt="Young lettuce plants growing on a white hydroponic channel in a greenhouse" class="fmlj-card__img"
                loading="lazy" width="840" height="460">
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



    <section class="fmwa" id="workshop-agenda">
      <div class="fmwa__inner">

        <header class="fmwa__head">
          <span class="fmwa-eyebrow"><span class="fmwa-eyebrow__label">Workshop Agenda</span><i
              class="fmwa-eyebrow__line"></i></span>
          <h2 class="fm-heading">Detailed Learning, Step by Step</h2>
          <p class="fm-text fmwa__text">A comprehensive two-day program covering technical, operational, commercial and
            marketing aspects.</p>
        </header>

        <div class="fmwa__side">
          <div class="fmwa__intro">
            <h3 class="fm-heading fmwa__big">Workshop<br><span class="fmwa__accent">Agenda</span></h3>
            <i class="fmwa__rule" aria-hidden="true"></i>
            <p class="fm-text fmwa__lead">Gain practical knowledge, expert insights and the confidence to build a
              successful modern farming business. Explore innovative hydroponic techniques, understand advanced farming
              technologies, and develop essential skills in farm planning, crop management and commercial operations.</p>
          </div>
          <figure class="fmwa__media">
            <img src="{{ asset('images/res-greenhouse-design.jpg') }}"
              alt="Large glass greenhouse with rows of fresh lettuce growing in the foreground" class="fmwa__img"
              loading="lazy" width="900" height="460">
          </figure>
        </div>

        <div class="fmwa__days">

          <section class="fmwa-day fmwa-day--1" aria-label="Day 01: Technical and Commercial Training">
            <header class="fmwa-day__head">
              <span class="fmwa-day__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                  <line x1="16" y1="2" x2="16" y2="6" />
                  <line x1="8" y1="2" x2="8" y2="6" />
                  <line x1="3" y1="10" x2="21" y2="10" />
                </svg>
              </span>
              <span class="fmwa-day__name">Day 01</span>
              <span class="fmwa-day__title">Technical &amp; Commercial Training</span>
            </header>
            <div class="fmwa-rows">
              <details class="fmwa-row" name="fmwa-day1">
                <summary class="fmwa-row__sum">
                  <span class="fmwa-row__no">01</span>
                  <span class="fmwa-row__title">Hydroponics Fundamentals</span>
                  <span class="fmwa-row__plus" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path class="fmwa-h" d="M5 12h14" />
                      <path class="fmwa-v" d="M12 5v14" />
                    </svg>
                  </span>
                </summary>
                <div class="fmwa-row__panel">
                  <p class="fm-text fmwa-row__text">How hydroponic growing works, how it differs from soil farming and
                    where
                    it fits commercially.</p>
                </div>
              </details>

              <details class="fmwa-row" name="fmwa-day1">
                <summary class="fmwa-row__sum">
                  <span class="fmwa-row__no">02</span>
                  <span class="fmwa-row__title">Hydroponic Systems</span>
                  <span class="fmwa-row__plus" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path class="fmwa-h" d="M5 12h14" />
                      <path class="fmwa-v" d="M12 5v14" />
                    </svg>
                  </span>
                </summary>
                <div class="fmwa-row__panel">
                  <p class="fm-text fmwa-row__text">Deep Water Culture, Nutrient Film Technique, Drip, and Dutch Bucket
                    systems explained with setup comparisons.</p>
                </div>
              </details>

              <details class="fmwa-row" name="fmwa-day1">
                <summary class="fmwa-row__sum">
                  <span class="fmwa-row__no">03</span>
                  <span class="fmwa-row__title">Protected Structures &amp; Farm Design</span>
                  <span class="fmwa-row__plus" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path class="fmwa-h" d="M5 12h14" />
                      <path class="fmwa-v" d="M12 5v14" />
                    </svg>
                  </span>
                </summary>
                <div class="fmwa-row__panel">
                  <p class="fm-text fmwa-row__text">Naturally ventilated polyhouses, fan &amp; pad climate control
                    systems,
                    site orientation and layout engineering.</p>
                </div>
              </details>

              <details class="fmwa-row" name="fmwa-day1">
                <summary class="fmwa-row__sum">
                  <span class="fmwa-row__no">04</span>
                  <span class="fmwa-row__title">Water, Nutrients &amp; Automation</span>
                  <span class="fmwa-row__plus" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path class="fmwa-h" d="M5 12h14" />
                      <path class="fmwa-v" d="M12 5v14" />
                    </svg>
                  </span>
                </summary>
                <div class="fmwa-row__panel">
                  <p class="fm-text fmwa-row__text">EC, pH management, dosing systems, water quality parameters, and
                    fertigation automation controllers.</p>
                </div>
              </details>

              <details class="fmwa-row" name="fmwa-day1">
                <summary class="fmwa-row__sum">
                  <span class="fmwa-row__no">05</span>
                  <span class="fmwa-row__title">Crop &amp; Market Selection</span>
                  <span class="fmwa-row__plus" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path class="fmwa-h" d="M5 12h14" />
                      <path class="fmwa-v" d="M12 5v14" />
                    </svg>
                  </span>
                </summary>
                <div class="fmwa-row__panel">
                  <p class="fm-text fmwa-row__text">High-value crops, market demand cycles, yield expectations, and
                    seasonal
                    planting calendars.</p>
                </div>
              </details>

              <details class="fmwa-row" name="fmwa-day1">
                <summary class="fmwa-row__sum">
                  <span class="fmwa-row__no">06</span>
                  <span class="fmwa-row__title">Commercial Farm Economics</span>
                  <span class="fmwa-row__plus" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path class="fmwa-h" d="M5 12h14" />
                      <path class="fmwa-v" d="M12 5v14" />
                    </svg>
                  </span>
                </summary>
                <div class="fmwa-row__panel">
                  <p class="fm-text fmwa-row__text">CAPEX, OPEX, payback periods, cost optimization, subsidy schemes, and
                    return on investment models.</p>
                </div>
              </details>

              <details class="fmwa-row" name="fmwa-day1">
                <summary class="fmwa-row__sum">
                  <span class="fmwa-row__no">07</span>
                  <span class="fmwa-row__title">Sales &amp; Marketing</span>
                  <span class="fmwa-row__plus" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path class="fmwa-h" d="M5 12h14" />
                      <path class="fmwa-v" d="M12 5v14" />
                    </svg>
                  </span>
                </summary>
                <div class="fmwa-row__panel">
                  <p class="fm-text fmwa-row__text">Direct-to-consumer, B2B institutional supply, packaging standards, and
                    building resilient distribution channels.</p>
                </div>
              </details>
            </div>
          </section>

          <section class="fmwa-day fmwa-day--2" aria-label="Day 02: Practical Farm Training">
            <header class="fmwa-day__head">
              <span class="fmwa-day__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                  <line x1="16" y1="2" x2="16" y2="6" />
                  <line x1="8" y1="2" x2="8" y2="6" />
                  <line x1="3" y1="10" x2="21" y2="10" />
                </svg>
              </span>
              <span class="fmwa-day__name">Day 02</span>
              <span class="fmwa-day__title">Practical Farm Training</span>
            </header>
            <div class="fmwa-rows">
              <details class="fmwa-row" name="fmwa-day2">
                <summary class="fmwa-row__sum">
                  <span class="fmwa-row__no">01</span>
                  <span class="fmwa-row__title">Farm Operations &amp; Crop Management</span>
                  <span class="fmwa-row__plus" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path class="fmwa-h" d="M5 12h14" />
                      <path class="fmwa-v" d="M12 5v14" />
                    </svg>
                  </span>
                </summary>
                <div class="fmwa-row__panel">
                  <p class="fm-text fmwa-row__text">Daily operational routines, seedling nursery management, transplanting
                    protocols, and vine training.</p>
                </div>
              </details>

              <details class="fmwa-row" name="fmwa-day2">
                <summary class="fmwa-row__sum">
                  <span class="fmwa-row__no">02</span>
                  <span class="fmwa-row__title">Hydroponic Setup &amp; Maintenance</span>
                  <span class="fmwa-row__plus" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path class="fmwa-h" d="M5 12h14" />
                      <path class="fmwa-v" d="M12 5v14" />
                    </svg>
                  </span>
                </summary>
                <div class="fmwa-row__panel">
                  <p class="fm-text fmwa-row__text">System plumbing, plumbing hygiene, pump maintenance, pipe flushing,
                    and
                    sterilization procedures.</p>
                </div>
              </details>

              <details class="fmwa-row" name="fmwa-day2">
                <summary class="fmwa-row__sum">
                  <span class="fmwa-row__no">03</span>
                  <span class="fmwa-row__title">Nutrient &amp; pH Management</span>
                  <span class="fmwa-row__plus" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path class="fmwa-h" d="M5 12h14" />
                      <path class="fmwa-v" d="M12 5v14" />
                    </svg>
                  </span>
                </summary>
                <div class="fmwa-row__panel">
                  <p class="fm-text fmwa-row__text">Hands-on formulation mixing, stock solution preparation, diagnostic
                    monitoring, and corrective dosing.</p>
                </div>
              </details>

              <details class="fmwa-row" name="fmwa-day2">
                <summary class="fmwa-row__sum">
                  <span class="fmwa-row__no">04</span>
                  <span class="fmwa-row__title">Harvesting &amp; Post-Harvest Handling</span>
                  <span class="fmwa-row__plus" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path class="fmwa-h" d="M5 12h14" />
                      <path class="fmwa-v" d="M12 5v14" />
                    </svg>
                  </span>
                </summary>
                <div class="fmwa-row__panel">
                  <p class="fm-text fmwa-row__text">Peak harvest timings, temperature-controlled sorting, grading
                    criteria,
                    and shelf-life extension.</p>
                </div>
              </details>

              <details class="fmwa-row" name="fmwa-day2">
                <summary class="fmwa-row__sum">
                  <span class="fmwa-row__no">05</span>
                  <span class="fmwa-row__title">Pest &amp; Disease Management</span>
                  <span class="fmwa-row__plus" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path class="fmwa-h" d="M5 12h14" />
                      <path class="fmwa-v" d="M12 5v14" />
                    </svg>
                  </span>
                </summary>
                <div class="fmwa-row__panel">
                  <p class="fm-text fmwa-row__text">Integrated pest management (IPM), biological controls, common
                    fungal/bacterial vectors, and preventive hygiene.</p>
                </div>
              </details>
            </div>
          </section>

        </div>

      </div>
      <!-- next block goes here -->
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
                <h3 class="fm-heading fmsc-card__title"><a class="fmsc-card__link" href="/solutions/crop-planning">Crop
                    Planning</a></h3>
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


    <section class="fmrd" id="popular-downloads" data-fmrd>
      <div class="fmrd__inner">

        <header class="fmrd__header">
          <div class="fmrd__headline">
            <span class="fmrd-eyebrow">

              <i class="fmrd-eyebrow__line" aria-hidden="true"></i>
              <span>Featured Resources</span>
            </span>
            <h2 class="fm-heading ">Popular <span class="fmdm__accent">Downloads</span></h2>
          </div>

          <div class="fmrd__filters" data-fmrd-filters>
            <div class="fmrd-select-wrap">
              <select class="fmrd-select" data-fmrd-filter="category" aria-label="Filter by Category">
                <option value="all">All Categories</option>
                <option value="guides">Guides</option>
                <option value="manuals">Manuals</option>
                <option value="brochures">Brochures</option>
              </select>
              <svg class="fmrd-select__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M6 9l6 6 6-6" />
              </svg>
            </div>

            <div class="fmrd-select-wrap">
              <select class="fmrd-select" data-fmrd-filter="crop" aria-label="Filter by Crop Type">
                <option value="all">All Crop Types</option>
                <option value="protected">Protected Farming</option>
                <option value="vegetables">Vegetables</option>
                <option value="hydroponics">Hydroponics</option>
                <option value="soil">Soil &amp; Cocopeat</option>
                <option value="irrigation">Irrigation</option>
              </select>
              <svg class="fmrd-select__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M6 9l6 6 6-6" />
              </svg>
            </div>

            <div class="fmrd-select-wrap">
              <select class="fmrd-select" data-fmrd-filter="format" aria-label="Filter by Format">
                <option value="all">All Formats</option>
                <option value="pdf">PDF Document</option>
                <option value="technical">Technical Specs</option>
              </select>
              <svg class="fmrd-select__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M6 9l6 6 6-6" />
              </svg>
            </div>
          </div>
        </header>

        <!-- SVG clip definition for Card 6 brochure curved wave -->
        <svg width="0" height="0" class="fmrd-svg-defs" aria-hidden="true">
          <defs>
            <clipPath id="fmrdBrochureClip" clipPathUnits="objectBoundingBox">
              <path d="M 0.28 0 C 0.42 0.3, 0.12 0.72, 0 1 L 1 1 L 1 0 Z" />
            </clipPath>
          </defs>
        </svg>

        <!-- Grid of 6 Resource Cards -->
        <div class="fmrd__grid" data-fmrd-grid>

          <!-- Card 1 -->
          <article class="fmrd-card" data-fmrd-card data-category="guides" data-crop="protected" data-format="pdf">
            <div class="fmrd-card__media">
              <img src="images/res-greenhouse-design.jpg" alt="Protected Farming Design Guide" loading="lazy" width="640"
                height="360" class="fmrd-card__img">
            </div>
            <div class="fmrd-card__body">
              <h3 class="fmrd-card__title">Protected Farming Design Guide</h3>
              <div class="fmrd-card__footer">
                <p class="fm-text fmrd-card__desc">Complete technical guide for modern protected structures.</p>
                <a href="images/res-greenhouse-design.jpg" class="fmrd-btn"
                  aria-label="Download Protected Farming Design Guide" download>
                  <span>Download</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                    stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                  </svg>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 2 -->
          <article class="fmrd-card" data-fmrd-card data-category="manuals" data-crop="vegetables" data-format="pdf">
            <div class="fmrd-card__media">
              <img src="images/res-tomato-cultivation.jpg" alt="Tomato Cultivation Manual" loading="lazy" width="640"
                height="360" class="fmrd-card__img">
            </div>
            <div class="fmrd-card__body">
              <h3 class="fmrd-card__title">Tomato Cultivation Manual</h3>
              <div class="fmrd-card__footer">
                <p class="fm-text fmrd-card__desc">Varieties, growing requirements, nutrient schedule and harvest
                  guidelines.</p>
                <a href="images/res-tomato-cultivation.jpg" class="fmrd-btn"
                  aria-label="Download Tomato Cultivation Manual" download>
                  <span>Download</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                    stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                  </svg>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 3 -->
          <article class="fmrd-card" data-fmrd-card data-category="guides" data-crop="hydroponics" data-format="pdf">
            <div class="fmrd-card__media">
              <img src="images/res-hydroponic-system.jpg" alt="Hydroponic Growing System Guide" loading="lazy" width="640"
                height="360" class="fmrd-card__img">
            </div>
            <div class="fmrd-card__body">
              <h3 class="fmrd-card__title">Hydroponic Growing System Guide</h3>
              <div class="fmrd-card__footer">
                <p class="fm-text fmrd-card__desc">Setup, operation and crop management for hydroponics.</p>
                <a href="images/res-hydroponic-system.jpg" class="fmrd-btn"
                  aria-label="Download Hydroponic Growing System Guide" download>
                  <span>Download</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                    stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                  </svg>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 4 -->
          <article class="fmrd-card" data-fmrd-card data-category="guides" data-crop="soil" data-format="pdf">
            <div class="fmrd-card__media">
              <img src="images/res-soil-cocopeat.jpg" alt="Soil & Cocopeat Management" loading="lazy" width="640"
                height="360" class="fmrd-card__img">
            </div>
            <div class="fmrd-card__body">
              <h3 class="fmrd-card__title">Soil &amp; Cocopeat Management</h3>
              <div class="fmrd-card__footer">
                <p class="fm-text fmrd-card__desc">Growing media preparation and best practices.</p>
                <a href="images/res-soil-cocopeat.jpg" class="fmrd-btn" aria-label="Download Soil & Cocopeat Management"
                  download>
                  <span>Download</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                    stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                  </svg>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 5 -->
          <article class="fmrd-card" data-fmrd-card data-category="guides" data-crop="irrigation" data-format="pdf">
            <div class="fmrd-card__media">
              <img src="images/res-irrigation-fertigation.jpg" alt="Irrigation & Fertigation Guide" loading="lazy"
                width="640" height="360" class="fmrd-card__img">
            </div>
            <div class="fmrd-card__body">
              <h3 class="fmrd-card__title">Irrigation &amp; Fertigation Guide</h3>
              <div class="fmrd-card__footer">
                <p class="fm-text fmrd-card__desc">System design, nutrient management and scheduling.</p>
                <a href="images/res-irrigation-fertigation.jpg" class="fmrd-btn"
                  aria-label="Download Irrigation & Fertigation Guide" download>
                  <span>Download</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                    stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                  </svg>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 6 -->
          <article class="fmrd-card fmrd-card--brochure" data-fmrd-card data-category="brochures" data-crop="protected"
            data-format="pdf">
            <div class="fmrd-card__media fmrd-card__media--brochure">
              <div class="fmrd-card__brochure-left">
                <span class="fmrd-card__brochure-title">Company<br>Brochure</span>
                <span class="fmrd-card__brochure-line" aria-hidden="true"></span>
              </div>
              <div class="fmrd-card__brochure-right">
                <img src="images/res-company-brochure.jpg" alt="Future Agri Infra Company Facility" loading="lazy"
                  width="640" height="360" class="fmrd-card__brochure-img">
              </div>
            </div>
            <div class="fmrd-card__body">
              <h3 class="fmrd-card__title">Future Agri Infra Brochure</h3>
              <div class="fmrd-card__footer">
                <p class="fm-text fmrd-card__desc">Our solutions, expertise and project portfolio.</p>
                <a href="images/res-company-brochure.jpg" class="fmrd-btn"
                  aria-label="Download Future Agri Infra Brochure" download>
                  <span>Download</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                    stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                  </svg>
                </a>
              </div>
            </div>
          </article>

        </div>

        <!-- Empty state when no cards match filters -->
        <div class="fmrd-empty" data-fmrd-empty hidden>
          <p>No resources found matching your selected filters.</p>
          <button type="button" class="fmrd-empty__reset" data-fmrd-reset>Reset All Filters</button>
        </div>

      </div>
    </section>


    <section class="afm-faq">
      <div class="afm-faq__container">
        <div class="afm-faq__header">
          <span class="afm-faq__tag">FAQs</span>
          <h2 class="afm-faq__title fm-heading">Frequently Asked Questions</h2>
          <p class="afm-faq__desc fm-text">Find answers to common questions about our premium organic farming
            practices
            and
            services.</p>
        </div>

        <div class="afm-faq__list" id="afmFaqList">
          <div class="afm-faq__item">
            <button class="afm-faq__question" aria-expanded="false">
              What types of crops do you specialize in?
              <span class="afm-faq__icon"></span>
            </button>
            <div class="afm-faq__answer">
              <div class="afm-faq__answer-inner">
                We specialize in a wide range of exotic leafy greens, vine crops, berries, and medicinal plants, all
                grown using advanced hydroponic and organic methods tailored to maximize yield and quality.
              </div>
            </div>
          </div>
          <div class="afm-faq__item">
            <button class="afm-faq__question" aria-expanded="false">
              How do you ensure your farming is sustainable?
              <span class="afm-faq__icon"></span>
            </button>
            <div class="afm-faq__answer">
              <div class="afm-faq__answer-inner">
                Our operations integrate renewable energy, precise water management through recycling systems, and
                strict organic protocols to maintain soil health and minimize environmental impact.
              </div>
            </div>
          </div>
          <div class="afm-faq__item">
            <button class="afm-faq__question" aria-expanded="false">
              Can you help set up a commercial farm from scratch?
              <span class="afm-faq__icon"></span>
            </button>
            <div class="afm-faq__answer">
              <div class="afm-faq__answer-inner">
                Absolutely. We offer complete turnkey farm development services, from initial land assessment and
                agronomy support to installing protected structures and automation systems.
              </div>
            </div>
          </div>
          <div class="afm-faq__item">
            <button class="afm-faq__question" aria-expanded="false">
              Do you offer training for aspiring agronomists?
              <span class="afm-faq__icon"></span>
            </button>
            <div class="afm-faq__answer">
              <div class="afm-faq__answer-inner">
                Yes, our Academy provides both online and offline training programs, alongside live webinars, to equip
                individuals with the skills needed for modern protected farming.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="fmgl" id="gallery">
      <div class="fmgl__inner">

        <input type="checkbox" id="fmgl-toggle" class="fmgl__check">

        <header class="fmgl__head">
          <span class="fmgl-eyebrow"><span class="fmgl-eyebrow__label">Gallery</span><i class="fmgl-eyebrow__line"></i></span>
          <h2 class="fm-heading fmgl__title">Our Farms in Action</h2>
          <p class="fm-text fmgl__text">Explore our modern farming projects, innovative solutions and successful outcomes.</p>
        </header>

        <div class="fmgl-mosaic">
          <figure class="fmgl-item fmgl-item--1">
            <img src="{{ asset('images/res-hydroponic-system.jpg') }}" alt="Long aisle of lettuce on white hydroponic channels inside a tall glass greenhouse" class="fmgl-item__img" loading="eager" width="860" height="1040">
          </figure>
          <div class="fmgl-mosaic__right">
            <figure class="fmgl-item fmgl-item--2">
              <img src="{{ asset('images/res-greenhouse-design.jpg') }}" alt="Row of glass greenhouses at sunrise beside green crop rows" class="fmgl-item__img" loading="lazy" width="1300" height="570">
            </figure>
            <figure class="fmgl-item fmgl-item--3">
              <img src="{{ asset('images/fip-growing-system.jpg') }}" alt="Young lettuce plants on a hydroponic channel in a greenhouse" class="fmgl-item__img" loading="lazy" width="690" height="570">
            </figure>
            <figure class="fmgl-item fmgl-item--4">
              <img src="{{ asset('images/fip-structures.jpg') }}" alt="Commercial protected greenhouse structure with healthy crop rows" class="fmgl-item__img" loading="lazy" width="1000" height="450">
            </figure>
            <figure class="fmgl-item fmgl-item--5">
              <img src="{{ asset('images/fip-irrigation-fertigation.jpg') }}" alt="Drip irrigation sprayers watering lettuce plants" class="fmgl-item__img" loading="lazy" width="1000" height="450">
            </figure>
          </div>
        </div>

        <div class="fmgl-extra">
          <div class="fmgl-extra__in">
            <ul class="fmgl-more">
              <li class="fmgl-more__li">
                <figure class="fmgl-item">
                  <img src="{{ asset('images/res-tomato-cultivation.jpg') }}" alt="Ripe red tomatoes growing vertically on vine trellises in high-tech polyhouse" class="fmgl-item__img" loading="lazy" width="800" height="600">
                </figure>
              </li>
              <li class="fmgl-more__li">
                <figure class="fmgl-item">
                  <img src="{{ asset('images/project-overview-farm.jpg') }}" alt="Large commercial multi-span polyhouse installation across fertile farmland" class="fmgl-item__img" loading="lazy" width="800" height="600">
                </figure>
              </li>
              <li class="fmgl-more__li">
                <figure class="fmgl-item">
                  <img src="{{ asset('images/pp-nvph.jpg') }}" alt="Naturally ventilated polyhouse with optimal ventilation for vegetable production" class="fmgl-item__img" loading="lazy" width="800" height="600">
                </figure>
              </li>
              <li class="fmgl-more__li">
                <figure class="fmgl-item">
                  <img src="{{ asset('images/proj-gerbera.jpg') }}" alt="Vibrant gerbera flower cultivation in climate-controlled greenhouse" class="fmgl-item__img" loading="lazy" width="800" height="600">
                </figure>
              </li>
              <li class="fmgl-more__li">
                <figure class="fmgl-item">
                  <img src="{{ asset('images/fip-water-management.jpg') }}" alt="Advanced water filtration and recycling storage system for protected cultivation" class="fmgl-item__img" loading="lazy" width="800" height="600">
                </figure>
              </li>
              <li class="fmgl-more__li">
                <figure class="fmgl-item">
                  <img src="{{ asset('images/pp-fanpad.jpg') }}" alt="High-efficiency evaporative cooling pad system maintaining microclimate" class="fmgl-item__img" loading="lazy" width="800" height="600">
                </figure>
              </li>
            </ul>
          </div>
        </div>

        <div class="fmgl-act">
          <i class="fmgl-act__line fmgl-act__line--l"></i>
          <label class="fmgl-btn" for="fmgl-toggle">
            <span class="fmgl-btn__label fmgl-btn__label--more">View More Gallery</span>
            <span class="fmgl-btn__label fmgl-btn__label--less">View Less Gallery</span>
            <span class="fmgl-btn__chev" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </span>
          </label>
          <i class="fmgl-act__line fmgl-act__line--r"></i>
        </div>

      </div>
      <!-- next block goes here -->
    </section>
@endsection