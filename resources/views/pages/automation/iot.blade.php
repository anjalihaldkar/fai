@extends('layouts.app')

@section('title', 'Automated Fertigation & IoT Farming Solutions | Future Agri Infra')
@section('body_class', 'protected-page iot-page')

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
          <span class="fmab-eyebrow">IoT & Automation<i class="fmab-eyebrow__line"></i></span>

          <h1 class="fm-heading fmab__title">
            Automated Fertigation & <br><span class="fmdm__accent">IoT Farm Solutions</span>
          </h1>

          <p class="fm-text fmab__text">
            Smart precision irrigation and automated nutrient delivery systems with IoT monitoring for maximum resource efficiency and healthier crops.
          </p>

          <a href="#what-auto-fertigation-does" class="fm-cta-btn">
            Explore IoT Solutions
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
         01. What Does Auto Fertigation Do? (Comparison Section)
         =================================================================== -->
    <section class="fmaf" id="what-auto-fertigation-does" aria-labelledby="fmaf-title">
      <div class="fmaf__container">
        <div class="fmaf__grid">

          <!-- Left Info Column -->
          <div class="fmaf__intro">
           

              <span class="fmpj-eyebrow">
WHAT DOES AUTO FERTIGATION DO?<i class="fmpj-eyebrow__line"></i></span>
              
            
            <h2 class="fm-heading" >
              From manual mixing <br class="fmaf-br-desktop">to <span class="fmdm__accent"> controlled fertigation</span>
            </h2>
            <p class="fmaf__desc">
              An auto fertigation machine precisely injects nutrients into irrigation water, manages watering schedules and distributes the solution across different zones — giving your crops the right nutrition at the right time.
            </p>
          </div>

          <!-- Right Showcase Comparison -->
          <div class="fmaf__showcase">
            <div class="fmaf__compare">

              <!-- Card 1: Manual Fertigation -->
              <article class="fmaf-card fmaf-card--manual">
                <div class="fmaf-card__media">
                  <span class="fmaf-card__badge fmaf-card__badge--manual">Manual Fertigation</span>
                  <img src="images/manual-fertigation.jpg" alt="Manual mixing of nutrients in agricultural drums" class="fmaf-card__img" loading="lazy" width="600" height="400">
                </div>
                <div class="fmaf-card__body">
                  <ul class="fmaf-card__list" role="list">
                    <li class="fmaf-card__item">
                      <span class="fmaf-card__icon fmaf-card__icon--cross" aria-hidden="true">
                        <svg viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                        </svg>
                      </span>
                      <span class="fmaf-card__text">Time-consuming preparation</span>
                    </li>
                    <li class="fmaf-card__item">
                      <span class="fmaf-card__icon fmaf-card__icon--cross" aria-hidden="true">
                        <svg viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                        </svg>
                      </span>
                      <span class="fmaf-card__text">Inconsistent nutrient concentration</span>
                    </li>
                    <li class="fmaf-card__item">
                      <span class="fmaf-card__icon fmaf-card__icon--cross" aria-hidden="true">
                        <svg viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                        </svg>
                      </span>
                      <span class="fmaf-card__text">Higher risk of human error</span>
                    </li>
                    <li class="fmaf-card__item">
                      <span class="fmaf-card__icon fmaf-card__icon--cross" aria-hidden="true">
                        <svg viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                        </svg>
                      </span>
                      <span class="fmaf-card__text">Difficult to manage multiple zones</span>
                    </li>
                  </ul>
                </div>
              </article>

              <!-- Central Arrow Indicator -->
              <div class="fmaf__arrow" aria-hidden="true">
                <span class="fmaf__arrow-circle">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </div>

              <!-- Card 2: With Auto Fertigation -->
              <article class="fmaf-card fmaf-card--auto">
                <div class="fmaf-card__media">
                  <span class="fmaf-card__badge fmaf-card__badge--auto">With Auto Fertigation</span>
                  <img src="images/auto-fertigation.jpg" alt="Automated fertigation dosing controller and digital management panel" class="fmaf-card__img" loading="lazy" width="600" height="400">
                </div>
                <div class="fmaf-card__body">
                  <ul class="fmaf-card__list" role="list">
                    <li class="fmaf-card__item">
                      <span class="fmaf-card__icon fmaf-card__icon--check" aria-hidden="true">
                        <svg viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                      </span>
                      <span class="fmaf-card__text">Accurate and consistent nutrient delivery</span>
                    </li>
                    <li class="fmaf-card__item">
                      <span class="fmaf-card__icon fmaf-card__icon--check" aria-hidden="true">
                        <svg viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                      </span>
                      <span class="fmaf-card__text">Automated irrigation scheduling</span>
                    </li>
                    <li class="fmaf-card__item">
                      <span class="fmaf-card__icon fmaf-card__icon--check" aria-hidden="true">
                        <svg viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                      </span>
                      <span class="fmaf-card__text">Easy management of multiple zones</span>
                    </li>
                    <li class="fmaf-card__item">
                      <span class="fmaf-card__icon fmaf-card__icon--check" aria-hidden="true">
                        <svg viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                      </span>
                      <span class="fmaf-card__text">Better crop growth and higher yields</span>
                    </li>
                  </ul>
                </div>
              </article>

            </div>
          </div>

        </div>
      </div>
    </section>


        <!-- ===================================================================
         04. Solutions we consult on: Integrated Solutions for Every Growing Environment
         =================================================================== -->
    <section class="fmsc" id="integrated-solutions">
        <div class="fmsc__inner">

          <!-- HEADER: title left, paragraph with a thin vertical line right (one grid) -->
          <header class="fmsc__head">
            <div class="fmsc__headtext">
             <span class="fmpj-eyebrow">How Does It Work?<i class="fmpj-eyebrow__line"></i></span>
              <h2 class="fm-heading ">Integrated Solutions <br>From <span class="fmdm__accent">Water & Nutrients</span>  to the Root Zone.</h2>
            </div>
            <div class="fmsc__intro">
              <i class="fmsc__intro-rule" aria-hidden="true"></i>
              <p class="fm-text fmsc__text">The system automatically mixes and injects nutrients into the irrigation water and delivers
                 it to your crop through a controlled and efficient process.</p>
            </div>
          </header>

          <!-- FOUR CARDS (each card is ONE link) -->
          <ul class="fmsc-cards">

            <li class="fmsc-card">
              <figure class="fmsc-card__media"><img src="images/fip-structures.jpg" alt="Large greenhouse structure over rows of crops" loading="lazy" width="900" height="440"></figure>
              <div class="fmsc-card__body">
                <div class="fmsc-card__txt">
                  <h3 class="fm-heading fmsc-card__title"><a class="fmsc-card__link" href="/solutions/protected-structures">Water Supply & Filtration</a></h3>
                  <p class="fm-text fmsc-card__text">Water from borewell/RO/rainwater is filtered for clean and reliable use..</p>
                </div>
                <span class="fmsc-card__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </div>
            </li>

            <li class="fmsc-card">
              <figure class="fmsc-card__media"><img src="images/crop-leafy.jpg" alt="Hydroponic lettuce growing in white channels" loading="lazy" width="900" height="440"></figure>
              <div class="fmsc-card__body">
                <div class="fmsc-card__txt">
                  <h3 class="fm-heading fmsc-card__title"><a class="fmsc-card__link" href="/solutions/hydroponic-growing-systems">Nutrient Injection & Mixing</a></h3>
                  <p class="fm-text fmsc-card__text">Nutrients and additives are injected into the water and mixed uniformly.</p>
                </div>
                <span class="fmsc-card__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </div>
            </li>

            <li class="fmsc-card">
              <figure class="fmsc-card__media"><img src="images/crop-fruit.jpg" alt="Ripe tomatoes on the vine in a greenhouse" loading="lazy" width="900" height="440"></figure>
              <div class="fmsc-card__body">
                <div class="fmsc-card__txt">
                  <h3 class="fm-heading fmsc-card__title"><a class="fmsc-card__link" href="/solutions/crop-planning">Monitoring & Control</a></h3>
                  <p class="fm-text fmsc-card__text">Irrigation, dosing and (if applicable) EC/pH are controlled as per schedule.</p>
                </div>
                <span class="fmsc-card__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </div>
            </li>

            <li class="fmsc-card">
              <figure class="fmsc-card__media"><img src="images/automation.png" alt="Climate control panel inside a greenhouse" loading="lazy" width="900" height="440"></figure>
              <div class="fmsc-card__body">
                <div class="fmsc-card__txt">
                  <h3 class="fm-heading fmsc-card__title"><a class="fmsc-card__link" href="/solutions/automation-climate-control">Distribution to Irrigation Zones</a></h3>
                  <p class="fm-text fmsc-card__text">Nutrient solution is delivered to different zones in your farm.</p>
                </div>
                <span class="fmsc-card__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
          <span class="fmfs-eyebrow"><span class="fmfs-eyebrow__no"></span><i class="fmfs-eyebrow__line"></i><span class="fmfs-eyebrow__label">Key Components</span></span>
          <h2 class="fm-heading ">An Integrated<br><span class="fmfs__accent">Fertigation</span> System.</h2>
          <p class="fm-text fmfs__text">A complete and connected setup designed to deliver precise nutrient dosing, consistent mixing and reliable distribution across your farm.</p>
        </header>

        <div class="fmfs-tabs">
          <label class="fmfs-tab" for="fmfs-t1">Fertilizer Tanks</label>
          <label class="fmfs-tab" for="fmfs-t2">Injection Unit</label>
          <label class="fmfs-tab" for="fmfs-t3">Controller</label>
          <label class="fmfs-tab" for="fmfs-t4">Filtration</label>
          <label class="fmfs-tab" for="fmfs-t5">Zone Control</label>
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
            <span class="fmfs-panel__eyebrow">Fertilizer Tanks</span>
            <h3 class="fm-heading fmfs-panel__title">Flexible Fertilizer<br>Tank Solutions</h3>
            <p class="fm-text fmfs-panel__text">Efficient nutrient storage, precise mixing and reliable dosing designed to meet your farm's requirements.</p>
            <ul class="fmfs-feats">
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Flexible <br>Tank Setup</h4>
                <p class="fm-text fmfs-feat__text">Separate A & B tanks with optional additive storage.</p>
              </li>
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="20" x2="18" y2="4"></line>
                    <line x1="12" y1="20" x2="12" y2="10"></line>
                    <line x1="6" y1="20" x2="6" y2="16"></line>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Smart<br>Tank Management</h4>
                <p class="fm-text fmfs-feat__text">Multiple tank sizes with optional level indicators.</p>
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
                <h4 class="fmfs-feat__title">Reliable<br>Nutrient Dosing</h4>
                <p class="fm-text fmfs-feat__text">Compatible with various fertilizers and integrated controls.</p>
              </li>
            </ul>
          </article>

          <!-- Panel 2: Injection Unit -->
          <article class="fmfs-panel fmfs-panel--2">
            <span class="fmfs-panel__eyebrow">Injection Unit</span>
            <h3 class="fm-heading fmfs-panel__title">Precise Nutrient<br>Injection & Dosing.</h3>
            <p class="fm-text fmfs-panel__text">Automatically injects the right amount of nutrients into irrigation water with accurate dosing,
               helping maintain consistent nutrient levels and healthy crop growth.</p>
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
                <h4 class="fmfs-feat__title">Precise Nutrient Delivery</h4>
                <p class="fm-text fmfs-feat__text">Accurate nutrient injection with EC and pH control.</p>
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
                <h4 class="fmfs-feat__title">Automated Dosing</h4>
                <p class="fm-text fmfs-feat__text">Consistent mixing and dosing with reduced manual effort.</p>
              </li>
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path>
                    <path d="M2 21c0-3 1.85-5.36 5.08-6"></path>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Smart Irrigation<br>Scheduling</h4>
                <p class="fm-text fmfs-feat__text">Programmable cycles for timely water and nutrient delivery.</p>
              </li>
            </ul>
          </article>

          <!-- Panel 3: Controller -->
          <article class="fmfs-panel fmfs-panel--3">
            <span class="fmfs-panel__eyebrow">Controller</span>
            <h3 class="fm-heading fmfs-panel__title">Smart Irrigation<br>Control</h3>
            <p class="fm-text fmfs-panel__text">Automates irrigation and fertigation for efficient water and nutrient management.</p>
            <ul class="fmfs-feats">
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                    <path d="m9 14 2 2 4-4"></path>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Automated Control</h4>
                <p class="fm-text fmfs-feat__text">Manages irrigation with less manual effort.</p>
              </li>
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="9"></circle>
                    <path d="M12 12l3-3"></path>
                    <path d="M8 12a4 4 0 0 1 8 0"></path>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Precise Dosing</h4>
                <p class="fm-text fmfs-feat__text">Helps maintain accurate nutrient levels.</p>
              </li>
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Flexible Scheduling</h4>
                <p class="fm-text fmfs-feat__text">Allows easy programming of irrigation cycles.</p>
              </li>
            </ul>
          </article>

          <!-- Panel 4: Filtration -->
          <article class="fmfs-panel fmfs-panel--4">
            <span class="fmfs-panel__eyebrow">Filtration</span>
            <h3 class="fm-heading fmfs-panel__title">Efficient Water<br>Filtration</h3>
            <p class="fm-text fmfs-panel__text">Removes unwanted particles from irrigation water to help maintain smooth water flow and protect the fertigation system.</p>
            <ul class="fmfs-feats">
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Effective Filtration</h4>
                <p class="fm-text fmfs-feat__text">Helps remove dirt and suspended particles.</p>
              </li>
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    <path d="m9 12 2 2 4-4"></path>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">System Protection</h4>
                <p class="fm-text fmfs-feat__text">Reduces clogging in pipes and drippers.</p>
              </li>
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Consistent Water Flow</h4>
                <p class="fm-text fmfs-feat__text">Supports smooth and reliable irrigation.</p>
              </li>
            </ul>
          </article>

          <!-- Panel 5: Zone Control -->
          <article class="fmfs-panel fmfs-panel--5">
            <span class="fmfs-panel__eyebrow">Zone Control</span>
            <h3 class="fm-heading fmfs-panel__title">Smart Irrigation<br>Zone Control</h3>
            <p class="fm-text fmfs-panel__text">Manage irrigation across different zones to deliver water according to individual crop requirements.</p>
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
                <h4 class="fmfs-feat__title">Individual Zone<br>Control</h4>
                <p class="fm-text fmfs-feat__text">Operates each irrigation zone separately.</p>
              </li>
              <li class="fmfs-feat">
                <span class="fmfs-feat__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                    <path d="M2 19c2 0 3-1 5-1s3 1 5 1 3-1 5-1 3 1 5 1"></path>
                    <path d="M2 22c2 0 3-1 5-1s3 1 5 1 3-1 5-1 3 1 5 1"></path>
                  </svg>
                </span>
                <h4 class="fmfs-feat__title">Flexible Scheduling</h4>
                <p class="fm-text fmfs-feat__text">Set irrigation timings for different zones.</p>
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
                <h4 class="fmfs-feat__title">Efficient Water<br>Management</h4>
                <p class="fm-text fmfs-feat__text">Delivers water where and when it is needed.</p>
              </li>
            </ul>
          </article>
        </div>

      </div>
      <!-- next block goes here -->
    </section>




            <!-- ===================================================================
           04. Commercial & Operational Considerations (.fmcc)
           =================================================================== -->
      <section class="fmcc" id="commercial-considerations">
        <div class="fmcc__inner">

          <header class="fmcc__head">
            <span class="fmcc-eyebrow"><span class="fmcc-eyebrow__no"></span><i class="fmcc-eyebrow__line"></i><span class="fmcc-eyebrow__label">Suitable for Your Farm</span></span>
            <h2 class="fm-heading">Works with <span class="fmdm__accent">Multiple Crops </span> and<br>Growing Systems.</h2>
            <p class="fm-text fmcc__text">Key factors to consider for successful operation and long-term returns.</p>
          </header>

          <ul class="fmcc-facts">
            <li class="fmcc-fact">
              <span class="fmcc-fact__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/>
                  <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
                </svg>
              </span>
              <h3 class="fmcc-fact__title">Farm size and number of zones</h3>
              <p class="fm-text fmcc-fact__text">Varies by crop<br>(3&ndash;9 months)</p>
            </li>
            <li class="fmcc-fact">
              <span class="fmcc-fact__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3 9l2-5h14l2 5"/>
                  <path d="M21 9v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9"/>
                  <path d="M3 9h18"/>
                  <path d="M9 21V12h6v9"/>
                </svg>
              </span>
              <h3 class="fmcc-fact__title">Crop and growing system</h3>
              <p class="fm-text fmcc-fact__text">Local, domestic &amp; export markets</p>
            </li>
            <li class="fmcc-fact">
              <span class="fmcc-fact__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="7" r="4"/>
                  <path d="M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"/>
                </svg>
              </span>
              <h3 class="fmcc-fact__title">Water source and quality</h3>
              <p class="fm-text fmcc-fact__text">Skilled &amp; semi-skilled workforce</p>
            </li>
            <li class="fmcc-fact">
              <span class="fmcc-fact__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/>
                </svg>
              </span>
              <h3 class="fmcc-fact__title">Type of irrigation system</h3>
              <p class="fm-text fmcc-fact__text">Reliable supply essential</p>
            </li>
            <li class="fmcc-fact">
              <span class="fmcc-fact__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                  <line x1="12" y1="8" x2="12" y2="12"/>
                  <line x1="12" y1="16" x2="12.01" y2="16"/>
                </svg>
              </span>
              <h3 class="fmcc-fact__title">Required automation and monitoring</h3>
              <p class="fm-text fmcc-fact__text">Market price fluctuation, disease outbreaks, input cost</p>
            </li>
          </ul>

          <div class="fmcc-band">
            <div class="fmcc-band__info">
              <h3 class="fmcc-band__title">Suitable Crops</h3>
              <p class="fm-text fmcc-band__text">Ideal for high-value crops with strong market demand.</p>
            </div>

            <button type="button" class="fmcc-nav fmcc-nav--prev" aria-label="Previous crops" aria-controls="fmcc-track">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
            </button>

            <ul class="fmcc-track" id="fmcc-track" role="region" aria-label="Suitable crops" tabindex="0">
              <li class="fmcc-crop">
                <img src="images/tomatoo.webp" alt="Ripe red tomatoes on the vine" class="fmcc-crop__img" loading="lazy" width="400" height="290">
                <span class="fmcc-crop__label">Tomato</span>
              </li>
              <li class="fmcc-crop">
                <img src="images/farm1.jpeg" alt="Crisp green capsicum bell peppers" class="fmcc-crop__img" loading="lazy" width="400" height="290">
                <span class="fmcc-crop__label">Capsicum</span>
              </li>
              <li class="fmcc-crop">
                <img src="images/gfar.png" alt="Fresh green cucumbers on the plant" class="fmcc-crop__img" loading="lazy" width="400" height="290">
                <span class="fmcc-crop__label">Cucumber</span>
              </li>
              <li class="fmcc-crop">
                <img src="images/pp-nvph.jpg" alt="Vibrant yellow and red bell peppers" class="fmcc-crop__img" loading="lazy" width="400" height="290">
                <span class="fmcc-crop__label">Color Capsicum</span>
              </li>
              <li class="fmcc-crop">
                <img src="images/strobarry.webp" alt="Sweet red strawberries on the vine" class="fmcc-crop__img" loading="lazy" width="400" height="290">
                <span class="fmcc-crop__label">Strawberry</span>
              </li>
              <li class="fmcc-crop">
                <img src="images/crop-leafy.jpg" alt="Fresh tender leafy lettuce greens" class="fmcc-crop__img" loading="lazy" width="400" height="290">
                <span class="fmcc-crop__label">Leafy Greens</span>
              </li>
              <li class="fmcc-crop">
                <img src="images/farm4.jpeg" alt="Tender farm fresh green zucchini" class="fmcc-crop__img" loading="lazy" width="400" height="290">
                <span class="fmcc-crop__label">Zucchini</span>
              </li>
              <li class="fmcc-crop">
                <img src="images/crop-fruit.jpg" alt="Juicy ripe cherry tomatoes on truss" class="fmcc-crop__img" loading="lazy" width="400" height="290">
                <span class="fmcc-crop__label">Cherry Tomato</span>
              </li>
            </ul>

            <button type="button" class="fmcc-nav fmcc-nav--next" aria-label="Next crops" aria-controls="fmcc-track">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </button>
          </div>

        </div>
        <!-- next block goes here -->
      </section>
		</main>

   
  </div>
@endsection
