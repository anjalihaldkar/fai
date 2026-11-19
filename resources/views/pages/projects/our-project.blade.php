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
         FMPO: Project Overview Section
         =================================================================== -->
    <section class="fmpo" id="project-overview" aria-labelledby="fm-heading ">
      <div class="fmpo__container">
        <div class="fmpo__grid">

          <!-- COLUMN 1: Content, CTA & Stats -->
          <div class="fmpo-content">
            <div class="fmpo-eyebrow">
              <span class="fmpo-eyebrow__num">01</span>
              <span class="fmpo-eyebrow__line" aria-hidden="true"></span>
              <span class="fmpo-eyebrow__text">PROJECT OVERVIEW</span>
            </div>

            <h2 class="fm-heading " >
              A commercial farm<br>
              for <span class="fmdm__accent">high-value</span><br>
              <span class="fm-heading __accent">vegetables.</span>
            </h2>

            <p class="fm-text fmab__text">
              A 20-acre polyhouse project within a 40-acre site in Rajkot, Gujarat, for the cultivation of coloured capsicum and English cucumber. FAI is executing a complete turkey key solution from design and structure installation to irrigation, fertilization and project support, tailored to the site&apos;s soil and water conditions.
            </p>


          



            <div class="fmpo-stats" role="list">
              <div class="fmpo-stat" role="listitem">
                <span class="fmpo-stat__num">40</span>
                <span class="fmpo-stat__unit">Acres</span>
                <span class="fmpo-stat__label">Total Land Area</span>
              </div>

              <div class="fmpo-stat" role="listitem">
                <span class="fmpo-stat__num">20</span>
                <span class="fmpo-stat__unit">Acres</span>
                <span class="fmpo-stat__label">Greenhouse Area</span>
              </div>

              <div class="fmpo-stat" role="listitem">
                <span class="fmpo-stat__num">11</span>
                <span class="fmpo-stat__unit">Planned</span>
                <span class="fmpo-stat__label">Number of Structures</span>
              </div>
            </div>

               <a href="#contact" class="fm-cta-btn">
           Discuss a Similar Project
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
          
          </div>

          <!-- COLUMN 2: Center Arched Photo Frame -->
          <div class="fmpo-media" aria-hidden="true">
            <div class="fmpo-media__echo"></div>
            <div class="fmpo-media__frame">
              <img src="images/project-overview-farm.jpg" alt="Commercial greenhouse farm rows with lush crops" class="fmpo-media__img" loading="lazy">
            </div>
          </div>

          <!-- COLUMN 3: Key Project Details Card -->
          <aside class="fmpo-card" aria-label="Key Project Details">
            <div class="fmpo-card__header">
              <span class="fmpo-card__bar" aria-hidden="true"></span>
              <h3 class="fmpo-card__title">KEY PROJECT DETAILS</h3>
            </div>

            <div class="fmpo-card__grid">
              <!-- Location -->
              <div class="fmpo-card__item">
                <span class="fmpo-card__disc" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                  </svg>
                </span>
                <div class="fmpo-card__body">
                  <span class="fmpo-card__label">Location</span>
                  <span class="fmpo-card__val">Rajkot, Gujarat</span>
                </div>
              </div>

              <!-- Total Land Area -->
              <div class="fmpo-card__item">
                <span class="fmpo-card__disc" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                    <polyline points="2 17 12 22 22 17"></polyline>
                    <polyline points="2 12 12 17 22 12"></polyline>
                  </svg>
                </span>
                <div class="fmpo-card__body">
                  <span class="fmpo-card__label">Total Land Area</span>
                  <span class="fmpo-card__val">40 Acres</span>
                </div>
              </div>

              <!-- Greenhouse Area -->
              <div class="fmpo-card__item">
                <span class="fmpo-card__disc" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 21h18"></path>
                    <path d="M5 21V10l7-5 7 5v11"></path>
                    <line x1="12" y1="5" x2="12" y2="21"></line>
                    <line x1="5" y1="14" x2="19" y2="14"></line>
                  </svg>
                </span>
                <div class="fmpo-card__body">
                  <span class="fmpo-card__label">Greenhouse Area</span>
                  <span class="fmpo-card__val">20 Acres</span>
                </div>
              </div>

              <!-- Number of Structures -->
              <div class="fmpo-card__item">
                <span class="fmpo-card__disc" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M2 21h20"></path>
                    <path d="M4 21V11l5-4 5 4v10"></path>
                    <path d="M14 11l4-3 4 3v10"></path>
                    <line x1="9" y1="7" x2="9" y2="21"></line>
                  </svg>
                </span>
                <div class="fmpo-card__body">
                  <span class="fmpo-card__label">Number of Structures</span>
                  <span class="fmpo-card__val">11 (planned)</span>
                </div>
              </div>

              <!-- Crops -->
              <div class="fmpo-card__item">
                <span class="fmpo-card__disc" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M11 20A7 7 0 0 1 4 13C4 7 11 3 11 3s7 4 7 10a7 7 0 0 1-7 7Z"></path>
                    <path d="M11 20v-9"></path>
                    <path d="M11 13l4-2"></path>
                  </svg>
                </span>
                <div class="fmpo-card__body">
                  <span class="fmpo-card__label">Crops</span>
                  <span class="fmpo-card__val">Coloured Capsicum, English Cucumber</span>
                </div>
              </div>

              <!-- Growing System -->
              <div class="fmpo-card__item">
                <span class="fmpo-card__disc" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M7 20h10"></path>
                    <path d="M12 20v-8"></path>
                    <path d="M12 12c-2.5-3-5.5-3-7-1 0 4 4.5 4.5 7 1z"></path>
                    <path d="M12 12c2.5-3 5.5-3 7-1 0 4-4.5 4.5-7 1z"></path>
                  </svg>
                </span>
                <div class="fmpo-card__body">
                  <span class="fmpo-card__label">Growing System</span>
                  <span class="fmpo-card__val">Soil-based cultivation</span>
                </div>
              </div>

              <!-- Project Type -->
              <div class="fmpo-card__item">
                <span class="fmpo-card__disc" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    <path d="m9 12 2 2 4-4"></path>
                  </svg>
                </span>
                <div class="fmpo-card__body">
                  <span class="fmpo-card__label">Project Type</span>
                  <span class="fmpo-card__val">Commercial Protected Cultivation</span>
                </div>
              </div>

              <!-- FAI Scope -->
              <div class="fmpo-card__item">
                <span class="fmpo-card__disc" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                  </svg>
                </span>
                <div class="fmpo-card__body">
                  <span class="fmpo-card__label">FAI Scope</span>
                  <span class="fmpo-card__val">Design supply, installation, irrigation, fertilization &amp; project support</span>
                </div>
              </div>

              <!-- Project Status -->
              <div class="fmpo-card__item fmpo-card__item--full">
                <span class="fmpo-card__disc" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="20" x2="18" y2="10"></line>
                    <line x1="12" y1="20" x2="12" y2="4"></line>
                    <line x1="6" y1="20" x2="6" y2="14"></line>
                    <line x1="3" y1="20" x2="21" y2="20"></line>
                  </svg>
                </span>
                <div class="fmpo-card__body">
                  <span class="fmpo-card__label">Project Status</span>
                  <span class="fmpo-card__val">In Development</span>
                </div>
              </div>

            </div>
          </aside>

        </div>
      </div>
    </section>

    <!-- ===================================================================
         FMIP: Inside the Project Section
         =================================================================== -->
    <section class="fmip" id="inside-the-project">
      <div class="fmip__inner">

        <input type="radio" name="fmip-tab" id="fmip-t1" class="fmip__radio" checked>
        <input type="radio" name="fmip-tab" id="fmip-t2" class="fmip__radio">
        <input type="radio" name="fmip-tab" id="fmip-t3" class="fmip__radio">
        <input type="radio" name="fmip-tab" id="fmip-t4" class="fmip__radio">
        <input type="radio" name="fmip-tab" id="fmip-t5" class="fmip__radio">
        <input type="radio" name="fmip-tab" id="fmip-t6" class="fmip__radio">

        <header class="fmip__head">
          <div class="fmip__intro">
            <span class="fmip-eyebrow"><span class="fmip-eyebrow__no">02</span><i class="fmip-eyebrow__line"></i><span class="fmip-eyebrow__label">Inside the Project</span></span>
            <h2 class="fm-heading ">Engineered for<br>site-specific <span class="fmip__accent">conditions.</span></h2>
          </div>
          <p class="fm-text fmip__text">The Rajkot site had black soil with a rocky sub-surface and high pH/EC water. Our team designed a customised solution covering structure layout, growing system, water management, fertigation and essential infrastructure to ensure stable production and long-term efficiency.</p>
        </header>

        <div class="fmip-tabs">
          <label class="fmip-tab" for="fmip-t1">
            <span class="fmip-tab__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 8V4h4"></path>
                <path d="M20 8V4h-4"></path>
                <path d="M4 16v4h4"></path>
                <path d="M20 16v4h-4"></path>
                <rect x="9" y="9" width="6" height="6" rx="1"></rect>
              </svg>
            </span>
            <span class="fmip-tab__label">Project Layout</span>
            <span class="fmip-tab__arrow" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </span>
          </label>

          <label class="fmip-tab" for="fmip-t2">
            <span class="fmip-tab__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 21h18"></path>
                <path d="M4 10l8-6 8 6"></path>
                <path d="M6 10v11"></path>
                <path d="M10 10v11"></path>
                <path d="M14 10v11"></path>
                <path d="M18 10v11"></path>
              </svg>
            </span>
            <span class="fmip-tab__label">Structures</span>
            <span class="fmip-tab__arrow" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </span>
          </label>

          <label class="fmip-tab" for="fmip-t3">
            <span class="fmip-tab__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                <path d="M12 17v-6"></path>
                <path d="M12 11c-1.5-2-3.5-2-4.5-.5 0 2.5 3 3 4.5.5z"></path>
                <path d="M12 11c1.5-2 3.5-2 4.5-.5 0 2.5-3 3-4.5.5z"></path>
              </svg>
            </span>
            <span class="fmip-tab__label">Growing System</span>
            <span class="fmip-tab__arrow" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </span>
          </label>

          <label class="fmip-tab" for="fmip-t4">
            <span class="fmip-tab__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 3c-3 4-6 7.5-6 10a6 6 0 0 0 12 0c0-2.5-3-6-6-10z"></path>
                <path d="M4 21c2-1 4-1 6 0s4 1 6 0 4-1 4-1"></path>
              </svg>
            </span>
            <span class="fmip-tab__label">Water Management</span>
            <span class="fmip-tab__arrow" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </span>
          </label>

          <label class="fmip-tab" for="fmip-t5">
            <span class="fmip-tab__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 15v6"></path>
                <path d="M8 21h8"></path>
                <path d="M12 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"></path>
                <path d="M12 7V3"></path>
                <path d="M6.5 8.5L3.5 5.5"></path>
                <path d="M17.5 8.5l3-3"></path>
                <path d="M5 12H2"></path>
                <path d="M22 12h-3"></path>
              </svg>
            </span>
            <span class="fmip-tab__label">Irrigation &amp; Fertigation</span>
            <span class="fmip-tab__arrow" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </span>
          </label>

          <label class="fmip-tab" for="fmip-t6">
            <span class="fmip-tab__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="3"></circle>
                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
              </svg>
            </span>
            <span class="fmip-tab__label">Utilities &amp; Infrastructure</span>
            <span class="fmip-tab__arrow" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </span>
          </label>
        </div>

        <figure class="fmip__media">
          <img src="images/fip-project-layout.jpg" alt="Aerial view of the 20 acre project layout with numbered greenhouse blocks, utility area, water storage and internal roads" class="fmip__photo fmip__photo--1" loading="eager" width="1336" height="822">
          <img src="images/fip-structures.jpg" alt="Naturally ventilated polyhouses with hot-dip galvanised steel frames, UV-stabilised diffused covering and side vents" class="fmip__photo fmip__photo--2" loading="lazy" width="1336" height="822">
          <img src="images/fip-growing-system.jpg" alt="Raised beds with mulching on enriched black soil for optimized drainage and healthy root development" class="fmip__photo fmip__photo--3" loading="lazy" width="1336" height="822">
          <img src="images/fip-water-management.jpg" alt="Large HDPE lined water storage reservoir, water quality treatment units and buffer storage tanks" class="fmip__photo fmip__photo--4" loading="lazy" width="1336" height="822">
          <img src="images/fip-irrigation-fertigation.jpg" alt="Automated drip irrigation unit with precise nutrient fertigation dosing and multi-stage filtration" class="fmip__photo fmip__photo--5" loading="lazy" width="1336" height="822">
          <img src="images/fip-utilities-infrastructure.jpg" alt="Central farm utility hub with pump room, backup power, harvest packhouse access and paved perimeter roads" class="fmip__photo fmip__photo--6" loading="lazy" width="1336" height="822">
        </figure>

        <div class="fmip__infos">
          <article class="fmip-info fmip-info--1">
            <h3 class="fmip-info__title">Project layout (20 acres)</h3>
            <i class="fmip-info__rule" aria-hidden="true"></i>
            <ol class="fmip-points">
              <li class="fmip-point"><span class="fmip-point__no">1</span><div class="fmip-point__body"><h4 class="fmip-point__title">Greenhouse structures</h4><p class="fm-text fmip-point__text">11 planned structures</p></div></li>
              <li class="fmip-point"><span class="fmip-point__no">2</span><div class="fmip-point__body"><h4 class="fmip-point__title">Utility area</h4><p class="fm-text fmip-point__text">Pump room, fertigation and filtration system</p></div></li>
              <li class="fmip-point"><span class="fmip-point__no">3</span><div class="fmip-point__body"><h4 class="fmip-point__title">Water storage</h4><p class="fm-text fmip-point__text">Tanks and treatment system</p></div></li>
              <li class="fmip-point"><span class="fmip-point__no">4</span><div class="fmip-point__body"><h4 class="fmip-point__title">Internal roads</h4><p class="fm-text fmip-point__text">For farm operations and access</p></div></li>
            </ol>
          </article>

          <article class="fmip-info fmip-info--2">
            <h3 class="fmip-info__title">Structures overview</h3>
            <i class="fmip-info__rule" aria-hidden="true"></i>
            <ol class="fmip-points">
              <li class="fmip-point"><span class="fmip-point__no">1</span><div class="fmip-point__body"><h4 class="fmip-point__title">Naturally ventilated polyhouses</h4><p class="fm-text fmip-point__text">Designed for local wind and sun conditions</p></div></li>
              <li class="fmip-point"><span class="fmip-point__no">2</span><div class="fmip-point__body"><h4 class="fmip-point__title">Steel frame</h4><p class="fm-text fmip-point__text">Hot-dip galvanised for long life</p></div></li>
              <li class="fmip-point"><span class="fmip-point__no">3</span><div class="fmip-point__body"><h4 class="fmip-point__title">Covering film</h4><p class="fm-text fmip-point__text">UV-stabilised, diffused light</p></div></li>
              <li class="fmip-point"><span class="fmip-point__no">4</span><div class="fmip-point__body"><h4 class="fmip-point__title">Side vents</h4><p class="fm-text fmip-point__text">Natural airflow control</p></div></li>
            </ol>
          </article>

          <article class="fmip-info fmip-info--3">
            <h3 class="fmip-info__title">Growing system overview</h3>
            <i class="fmip-info__rule" aria-hidden="true"></i>
            <ol class="fmip-points">
              <li class="fmip-point"><span class="fmip-point__no">1</span><div class="fmip-point__body"><h4 class="fmip-point__title">Raised beds</h4><p class="fm-text fmip-point__text">Better drainage on black soil</p></div></li>
              <li class="fmip-point"><span class="fmip-point__no">2</span><div class="fmip-point__body"><h4 class="fmip-point__title">Soil amendment</h4><p class="fm-text fmip-point__text">Improves structure and root zone</p></div></li>
              <li class="fmip-point"><span class="fmip-point__no">3</span><div class="fmip-point__body"><h4 class="fmip-point__title">Crop rows</h4><p class="fm-text fmip-point__text">Optimised spacing and airflow</p></div></li>
              <li class="fmip-point"><span class="fmip-point__no">4</span><div class="fmip-point__body"><h4 class="fmip-point__title">Mulching</h4><p class="fm-text fmip-point__text">Moisture and weed control</p></div></li>
            </ol>
          </article>

          <article class="fmip-info fmip-info--4">
            <h3 class="fmip-info__title">Water management overview</h3>
            <i class="fmip-info__rule" aria-hidden="true"></i>
            <ol class="fmip-points">
              <li class="fmip-point"><span class="fmip-point__no">1</span><div class="fmip-point__body"><h4 class="fmip-point__title">Water source</h4><p class="fm-text fmip-point__text">Borewell and storage ponds</p></div></li>
              <li class="fmip-point"><span class="fmip-point__no">2</span><div class="fmip-point__body"><h4 class="fmip-point__title">Treatment system</h4><p class="fm-text fmip-point__text">Corrects high pH and EC</p></div></li>
              <li class="fmip-point"><span class="fmip-point__no">3</span><div class="fmip-point__body"><h4 class="fmip-point__title">Storage tanks</h4><p class="fm-text fmip-point__text">Buffer for peak demand</p></div></li>
              <li class="fmip-point"><span class="fmip-point__no">4</span><div class="fmip-point__body"><h4 class="fmip-point__title">Monitoring</h4><p class="fm-text fmip-point__text">Regular water quality checks</p></div></li>
            </ol>
          </article>

          <article class="fmip-info fmip-info--5">
            <h3 class="fmip-info__title">Irrigation and fertigation overview</h3>
            <i class="fmip-info__rule" aria-hidden="true"></i>
            <ol class="fmip-points">
              <li class="fmip-point"><span class="fmip-point__no">1</span><div class="fmip-point__body"><h4 class="fmip-point__title">Drip irrigation</h4><p class="fm-text fmip-point__text">Uniform water for every plant</p></div></li>
              <li class="fmip-point"><span class="fmip-point__no">2</span><div class="fmip-point__body"><h4 class="fmip-point__title">Fertigation unit</h4><p class="fm-text fmip-point__text">Precise nutrient dosing</p></div></li>
              <li class="fmip-point"><span class="fmip-point__no">3</span><div class="fmip-point__body"><h4 class="fmip-point__title">Filtration</h4><p class="fm-text fmip-point__text">Clean water for emitters</p></div></li>
              <li class="fmip-point"><span class="fmip-point__no">4</span><div class="fmip-point__body"><h4 class="fmip-point__title">Automation</h4><p class="fm-text fmip-point__text">Timer and sensor based control</p></div></li>
            </ol>
          </article>

          <article class="fmip-info fmip-info--6">
            <h3 class="fmip-info__title">Utilities and infrastructure overview</h3>
            <i class="fmip-info__rule" aria-hidden="true"></i>
            <ol class="fmip-points">
              <li class="fmip-point"><span class="fmip-point__no">1</span><div class="fmip-point__body"><h4 class="fmip-point__title">Pump room</h4><p class="fm-text fmip-point__text">Housing for pumps and controls</p></div></li>
              <li class="fmip-point"><span class="fmip-point__no">2</span><div class="fmip-point__body"><h4 class="fmip-point__title">Power supply</h4><p class="fm-text fmip-point__text">Reliable and backed up</p></div></li>
              <li class="fmip-point"><span class="fmip-point__no">3</span><div class="fmip-point__body"><h4 class="fmip-point__title">Packhouse access</h4><p class="fm-text fmip-point__text">Fast harvest to dispatch</p></div></li>
              <li class="fmip-point"><span class="fmip-point__no">4</span><div class="fmip-point__body"><h4 class="fmip-point__title">Boundary and roads</h4><p class="fm-text fmip-point__text">Safe movement across the farm</p></div></li>
            </ol>
          </article>
        </div>

      </div>
      <!-- next block goes here -->
    </section>

    <!-- ===================================================================
         FMPT: Projects Showcase Filter Tab System
         =================================================================== -->
    <section class="fmpt" id="projects-showcase" aria-label="Our Projects Showcase">
     
      <div class="fmpt__container">
         <header class="fmwf__head">

            <span class="fmab-eyebrow">All project<i class="fmab-eyebrow__line"></i></span>


            <h2 class="fm-heading ">Make the Right <span class="fmwf__accent">Choice</span></h2>
            <p class="fm-text fmwf__text">Select the most suitable structure based on your farm conditions and goals.
            </p>
          </header>

        <!-- Visually hidden radio inputs for CSS tab filtering -->
        <input type="radio" name="fmpt-filter-radio" id="fmpt-f-all" class="fmpt__radio" checked>
        <input type="radio" name="fmpt-filter-radio" id="fmpt-f-polyhouse" class="fmpt__radio">
        <input type="radio" name="fmpt-filter-radio" id="fmpt-f-nethouse" class="fmpt__radio">
        <input type="radio" name="fmpt-filter-radio" id="fmpt-f-greenhouse" class="fmpt__radio">
        <input type="radio" name="fmpt-filter-radio" id="fmpt-f-protected" class="fmpt__radio">
        <input type="radio" name="fmpt-filter-radio" id="fmpt-f-irrigation" class="fmpt__radio">
        <input type="radio" name="fmpt-filter-radio" id="fmpt-f-turnkey" class="fmpt__radio">

        <!-- Tabs Navigation -->
        <div class="fmpt-filters" role="tablist" aria-label="Filter projects">
          <label for="fmpt-f-all" class="fmpt-btn is-active" data-filter="all" role="tab" tabindex="0" aria-selected="true">All Projects</label>
          <label for="fmpt-f-polyhouse" class="fmpt-btn" data-filter="polyhouse" role="tab" tabindex="0" aria-selected="false">Polyhouse</label>
          <label for="fmpt-f-nethouse" class="fmpt-btn" data-filter="nethouse" role="tab" tabindex="0" aria-selected="false">Nethouse</label>
          <label for="fmpt-f-greenhouse" class="fmpt-btn" data-filter="greenhouse" role="tab" tabindex="0" aria-selected="false">Greenhouse</label>
          <label for="fmpt-f-protected" class="fmpt-btn" data-filter="protected-cultivation" role="tab" tabindex="0" aria-selected="false">Protected Cultivation</label>
          <label for="fmpt-f-irrigation" class="fmpt-btn" data-filter="irrigation-fertigation" role="tab" tabindex="0" aria-selected="false">Irrigation &amp; Fertigation</label>
          <label for="fmpt-f-turnkey" class="fmpt-btn" data-filter="turnkey-solution" role="tab" tabindex="0" aria-selected="false">Turnkey Solution</label>
        </div>

        <!-- Cards Grid -->
        <div class="fmpt-grid">

          <!-- Card 1: Gerbera Polyhouse -->
          <article class="fmpt-card" data-category="polyhouse protected-cultivation">
            <div class="fmpt-card__media">
              <span class="fmpt-badge fmpt-badge--completed">Completed</span>
              <img src="images/proj-gerbera.jpg" alt="Commercial Gerbera Floriculture polyhouse with blooming flowers" class="fmpt-card__img" loading="lazy">
            </div>
            <div class="fmpt-card__body">
              <span class="fmpt-card__category">Polyhouse</span>
              <h3 class="fmpt-card__title">Gerbera Polyhouse &mdash; Sharma Floriculture Farm</h3>
              <ul class="fmpt-card__meta">
                <li class="fmpt-card__meta-item">
                  <span class="fmpt-card__meta-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                      <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                  </span>
                  <span>Indore, Madhya Pradesh</span>
                </li>
                <li class="fmpt-card__meta-item">
                  <span class="fmpt-card__meta-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                      <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                  </span>
                  <span>Sharma Floriculture Farm</span>
                </li>
              </ul>
              <div class="fmpt-card__divider" aria-hidden="true"></div>
              <div class="fmpt-card__footer">
                <span class="fmpt-card__crop">Gerbera</span>
                <a href="{{ route('projects.details') }}" class="fmpt-card__link">
                  <span>Details</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 2: Capsicum & Tomato Polyhouse -->
          <article class="fmpt-card" data-category="polyhouse protected-cultivation">
            <div class="fmpt-card__media">
              <span class="fmpt-badge fmpt-badge--completed">Completed</span>
              <img src="images/pp-nvph.jpg" alt="Capsicum and tomato crop production in high-tech polyhouse" class="fmpt-card__img" loading="lazy">
            </div>
            <div class="fmpt-card__body">
              <span class="fmpt-card__category">Polyhouse</span>
              <h3 class="fmpt-card__title">Capsicum &amp; Tomato Polyhouse &mdash; Patel Agro Farms</h3>
              <ul class="fmpt-card__meta">
                <li class="fmpt-card__meta-item">
                  <span class="fmpt-card__meta-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                      <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                  </span>
                  <span>Bhopal, Madhya Pradesh</span>
                </li>
                <li class="fmpt-card__meta-item">
                  <span class="fmpt-card__meta-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                      <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                  </span>
                  <span>Patel Agro Farms</span>
                </li>
              </ul>
              <div class="fmpt-card__divider" aria-hidden="true"></div>
              <div class="fmpt-card__footer">
                <span class="fmpt-card__crop">Capsicum, Tomato</span>
                <a href="{{ route('projects.details') }}" class="fmpt-card__link">
                  <span>Details</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 3: Cucumber Shade Nethouse -->
          <article class="fmpt-card" data-category="nethouse protected-cultivation">
            <div class="fmpt-card__media">
              <span class="fmpt-badge fmpt-badge--completed">Completed</span>
              <img src="images/pp-nethouse.jpg" alt="Cucumber vines growing on vertical trellises under shade net" class="fmpt-card__img" loading="lazy">
            </div>
            <div class="fmpt-card__body">
              <span class="fmpt-card__category">Nethouse</span>
              <h3 class="fmpt-card__title">Cucumber Shade Nethouse &mdash; Verma Krishi Farm</h3>
              <ul class="fmpt-card__meta">
                <li class="fmpt-card__meta-item">
                  <span class="fmpt-card__meta-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                      <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                  </span>
                  <span>Jabalpur, Madhya Pradesh</span>
                </li>
                <li class="fmpt-card__meta-item">
                  <span class="fmpt-card__meta-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                      <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                  </span>
                  <span>Verma Krishi Farm</span>
                </li>
              </ul>
              <div class="fmpt-card__divider" aria-hidden="true"></div>
              <div class="fmpt-card__footer">
                <span class="fmpt-card__crop">Cucumber</span>
                <a href="{{ route('projects.details') }}" class="fmpt-card__link">
                  <span>Details</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 4: Drip & Fertigation - Orange City -->
          <article class="fmpt-card" data-category="irrigation-fertigation">
            <div class="fmpt-card__media">
              <span class="fmpt-badge fmpt-badge--completed">Completed</span>
              <img src="images/crop-fruit.jpg" alt="Orange orchard with precision drip irrigation lines" class="fmpt-card__img" loading="lazy">
            </div>
            <div class="fmpt-card__body">
              <span class="fmpt-card__category">Irrigation &amp; Fertigation</span>
              <h3 class="fmpt-card__title">Drip &amp; Fertigation &mdash; Orange City Orchards</h3>
              <ul class="fmpt-card__meta">
                <li class="fmpt-card__meta-item">
                  <span class="fmpt-card__meta-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                      <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                  </span>
                  <span>Chhindwara, Madhya Pradesh</span>
                </li>
                <li class="fmpt-card__meta-item">
                  <span class="fmpt-card__meta-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                      <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                  </span>
                  <span>Orange City Orchards</span>
                </li>
              </ul>
              <div class="fmpt-card__divider" aria-hidden="true"></div>
              <div class="fmpt-card__footer">
                <span class="fmpt-card__crop">Orange (Nagpur Mandarin)</span>
                <a href="{{ route('projects.details') }}" class="fmpt-card__link">
                  <span>Details</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 5: Vegetable Greenhouse - Yadav Fresh -->
          <article class="fmpt-card" data-category="greenhouse protected-cultivation">
            <div class="fmpt-card__media">
              <span class="fmpt-badge fmpt-badge--ongoing">Ongoing</span>
              <img src="images/farm5.jpeg" alt="Farmer inspecting capsicum plants inside vegetable greenhouse" class="fmpt-card__img" loading="lazy">
            </div>
            <div class="fmpt-card__body">
              <span class="fmpt-card__category">Greenhouse</span>
              <h3 class="fmpt-card__title">Vegetable Greenhouse &mdash; Yadav Fresh Produce</h3>
              <ul class="fmpt-card__meta">
                <li class="fmpt-card__meta-item">
                  <span class="fmpt-card__meta-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                      <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                  </span>
                  <span>Gwalior, Madhya Pradesh</span>
                </li>
                <li class="fmpt-card__meta-item">
                  <span class="fmpt-card__meta-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                      <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                  </span>
                  <span>Yadav Fresh Produce</span>
                </li>
              </ul>
              <div class="fmpt-card__divider" aria-hidden="true"></div>
              <div class="fmpt-card__footer">
                <span class="fmpt-card__crop">Tomato, Cucumber</span>
                <a href="{{ route('projects.details') }}" class="fmpt-card__link">
                  <span>Details</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 6: Turnkey Polyhouse Cluster -->
          <article class="fmpt-card" data-category="turnkey-solution protected-cultivation polyhouse">
            <div class="fmpt-card__media">
              <span class="fmpt-badge fmpt-badge--completed">Completed</span>
              <img src="images/turnkey2.jpeg" alt="Modern turnkey polyhouse cluster exterior on agricultural farm" class="fmpt-card__img" loading="lazy">
            </div>
            <div class="fmpt-card__body">
              <span class="fmpt-card__category">Turnkey Solution</span>
              <h3 class="fmpt-card__title">Turnkey Polyhouse Cluster &mdash; Maa Krishi Producer Co.</h3>
              <ul class="fmpt-card__meta">
                <li class="fmpt-card__meta-item">
                  <span class="fmpt-card__meta-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                      <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                  </span>
                  <span>Ujjain, Madhya Pradesh</span>
                </li>
                <li class="fmpt-card__meta-item">
                  <span class="fmpt-card__meta-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                      <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                  </span>
                  <span>Maa Krishi Producer Company</span>
                </li>
              </ul>
              <div class="fmpt-card__divider" aria-hidden="true"></div>
              <div class="fmpt-card__footer">
                <span class="fmpt-card__crop">Gerbera, Vegetables</span>
                <a href="project-details.html " class="fmpt-card__link">
                  <span>Details</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
            </div>
          </article>

        </div>

      </div>
    </section>
@endsection
