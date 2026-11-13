@extends('layouts.app')

@section('title', 'Protected Farming Solutions')
@section('body_class', 'protected-page online-training-page')

@section('content')
<main>
      <section class="fm-section fmab" id="training-hero">
        <!-- background photo -->
        <div class="fmab__media">
          <img src="images/banner3.jpeg" alt="Protected cultivation polyhouse with lush green crops" class="fmab__img"
            loading="eager">
        </div>

        <div class="fmab__inner">
          <!-- LEFT: text -->
          <div class="fmab__content">
            <span class="fmab-eyebrow">Academy &amp; Training<i class="fmab-eyebrow__line"></i></span>

            <h1 class="fm-heading">
              Hands-on Learning for <br><span class="fmdm__accent">Modern Growers</span>
            </h1>

            <p class="fm-text fmab__text">
              Practical, on-farm training programs designed for farmers, agribusiness entrepreneurs, and professionals
              looking to build profitable protected cultivation systems.
            </p>

            <a href="#available-batches" class="fm-cta-btn">
              Explore Available Batches
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </a>
          </div>


        </div>
      </section>
           <!-- ===================================================================
         02B. COURSE OVERVIEW / WHAT YOU'LL LEARN SECTION
         =================================================================== -->
      <section class="fmwl" id="course-overview">
        <div class="fmwl__inner">

          <header class="fmwl__head">
            <span class="fmpj-eyebrow">Course Overview<i class="fmpj-eyebrow__line"></i></span>
            <h2 class="fm-heading ">What You&rsquo;ll <span class="fmdm__accent">Learn</span> </h2>
            <p class="fm-text fmwl__text">A step-by-step learning journey to build, operate and plan a commercial
              hi-tech farm.</p>
          </header>

          <ul class="fmwl-cards">
            <!-- CARD 1: INDUSTRY BASICS -->
            <li class="fmwl-card">
              <span class="fmwl-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M4 21V10l8-6 8 6v11"></path>
                  <path d="M4 21h16"></path>
                  <path d="M12 17v-4"></path>
                  <path d="M12 13a3 3 0 0 1 3-3c0 2-1.5 3-3 3Z"></path>
                  <path d="M12 15a3 3 0 0 0-3-3c0 2 1.5 3 3 3Z"></path>
                </svg>
              </span>
              <div class="fmwl-card__body">
                <h3 class="fmwl-card__title">Industry Basics</h3>
                <p class="fm-text fmwl-card__text">Protected cultivation, hydroponics and types of hi-tech farms.</p>
              </div>
            </li>

            <!-- CARD 2: COMPLETE FARM -->
            <li class="fmwl-card">
              <span class="fmwl-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                  <polyline points="2 12 12 17 22 12"></polyline>
                  <polyline points="2 17 12 22 22 17"></polyline>
                </svg>
              </span>
              <div class="fmwl-card__body">
                <h3 class="fmwl-card__title">Complete Farm</h3>
                <p class="fm-text fmwl-card__text">Structure, growing systems, water, fertigation, automation and
                  operations.</p>
              </div>
            </li>

            <!-- CARD 3: TECHNOLOGY -->
            <li class="fmwl-card">
              <span class="fmwl-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path
                    d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41">
                  </path>
                  <circle cx="12" cy="12" r="7"></circle>
                  <path d="M12 15a3 3 0 0 0 3-3c0-2-2-3-3-3s-3 1-3 3a3 3 0 0 0 3 3Z"></path>
                </svg>
              </span>
              <div class="fmwl-card__body">
                <h3 class="fmwl-card__title">Technology</h3>
                <p class="fm-text fmwl-card__text">Understand different structures and systems before selecting one.</p>
              </div>
            </li>

            <!-- CARD 4: OPERATIONS -->
            <li class="fmwl-card">
              <span class="fmwl-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M11 20A7 7 0 0 1 4 13h2a5 5 0 0 0 9 2.5V12h2v4a7 7 0 0 1-6 4Z"></path>
                  <path d="M16 12V6"></path>
                  <path d="M16 6a3.5 3.5 0 0 1 3.5-3.5c0 2-1.5 3.5-3.5 3.5Z"></path>
                  <path d="M16 8a3.5 3.5 0 0 0-3.5-3.5c0 2 1.5 3.5 3.5 3.5Z"></path>
                </svg>
              </span>
              <div class="fmwl-card__body">
                <h3 class="fmwl-card__title">Operations</h3>
                <p class="fm-text fmwl-card__text">From nursery and fertigation to crop care, harvest and farm
                  management.</p>
              </div>
            </li>

            <!-- CARD 5: PLAN THE RIGHT FARM -->
            <li class="fmwl-card">
              <span class="fmwl-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <polygon points="3 6 9 3 15 6 21 3 21 18 15 21 9 18 3 21"></polygon>
                  <line x1="9" y1="3" x2="9" y2="18"></line>
                  <line x1="15" y1="6" x2="15" y2="21"></line>
                  <circle cx="12" cy="11" r="2"></circle>
                </svg>
              </span>
              <div class="fmwl-card__body">
                <h3 class="fmwl-card__title">Plan the Right Farm</h3>
                <p class="fm-text fmwl-card__text">Use site, crop and market conditions to choose the right
                  configuration.</p>
              </div>
            </li>

            <!-- CARD 6: COMMERCIAL VIABILITY -->
            <li class="fmwl-card">
              <span class="fmwl-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <line x1="18" y1="20" x2="18" y2="10"></line>
                  <line x1="12" y1="20" x2="12" y2="4"></line>
                  <line x1="6" y1="20" x2="6" y2="14"></line>
                  <polyline points="4 8 10 3 14 7 20 2"></polyline>
                  <polyline points="16 2 20 2 20 6"></polyline>
                </svg>
              </span>
              <div class="fmwl-card__body">
                <h3 class="fmwl-card__title">Commercial Viability</h3>
                <p class="fm-text fmwl-card__text">Learn CAPEX, OPEX, revenue, ROI, payback and downside scenarios.</p>
              </div>
            </li>
          </ul>

        </div>
      </section>

      <!-- ===================================================================
         02. ONLINE TRAINING: COURSES & PRICING SECTION
         =================================================================== -->
      <section class="fmot" id="online-training">
        <div class="fmot__inner">

          <header class="fmot__head">
            <span class="fmot-eyebrow">
              <i class="fmot-eyebrow__line"></i>
              <span class="fmot-eyebrow__label">Online Training</span>
              <i class="fmot-eyebrow__line"></i>
            </span>
            <h2 class="fm-heading ">Choose the <span class="fmdm__accent">Right Training </span> for You</h2>
            <p class="fm-text fmot__text">Practical, expert-led courses to build your hydroponics knowledge and skills.
            </p>
          </header>

          <ul class="fmot-plans">
            <!-- CARD 1: FOUNDATION COURSE -->
            <li class="fmot-plan">
              <div class="fmot-plan__head">
                <span class="fmot-plan__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <rect x="3" y="4" width="18" height="12" rx="2"></rect>
                    <line x1="2" y1="20" x2="22" y2="20"></line>
                    <polygon points="10 8 15 10 10 12 10 8" fill="currentColor" stroke="none"></polygon>
                  </svg>
                </span>
                <div class="fmot-plan__titles">
                  <h3 class="fm-heading fmot-plan__title">Foundation Course</h3>
                  <p class="fmot-plan__sub">Basics of Hydroponics</p>
                </div>
              </div>
              <ul class="fmot-checks">
                <li class="fmot-check">
                  <span class="fmot-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmot-check__label">Principles &amp; setup</span>
                </li>
                <li class="fmot-check">
                  <span class="fmot-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmot-check__label">Nutrient management</span>
                </li>
                <li class="fmot-check">
                  <span class="fmot-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmot-check__label">Crop planning</span>
                </li>
                <li class="fmot-check">
                  <span class="fmot-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmot-check__label">Live Q&amp;A session</span>
                </li>
              </ul>
              <div class="fmot-plan__buy">
                <p class="fmot-plan__price">&#8377;4,999</p>
                <a href="#enroll-foundation" class="fm-cta-btn fmot-plan__btn">
                  <span class="fmot-plan__btn-label">Enroll Now</span>
                  <span class="fmot-plan__btn-arrow" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                      <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                  </span>
                </a>
              </div>
            </li>

            <!-- CARD 2: PROFESSIONAL COURSE (MOST POPULAR) -->
            <li class="fmot-plan fmot-plan--pop">
              <span class="fmot-badge">
                <span class="fmot-badge__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1.6"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m3 6 3 10h12l3-10-5 5-4-7-4 7-5-5z"></path>
                    <path d="M4 19h16v2H4z"></path>
                  </svg>
                </span>
                Most Popular
              </span>
              <div class="fmot-plan__head">
                <span class="fmot-plan__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M7 20h10"></path>
                    <path d="M12 20v-9"></path>
                    <path d="M12 11a5 5 0 0 1 5-5c0 3-2 5-5 5Z"></path>
                    <path d="M12 15a5 5 0 0 0-5-5c0 3 2 5 5 5Z"></path>
                    <path d="M4 20h16v2H4z"></path>
                  </svg>
                </span>
                <div class="fmot-plan__titles">
                  <h3 class="fm-heading fmot-plan__title">Professional Course</h3>
                  <p class="fmot-plan__sub">Setup, Operation &amp; Management</p>
                </div>
              </div>
              <ul class="fmot-checks">
                <li class="fmot-check">
                  <span class="fmot-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmot-check__label">Complete system setup</span>
                </li>
                <li class="fmot-check">
                  <span class="fmot-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmot-check__label">Crop production &amp; care</span>
                </li>
                <li class="fmot-check">
                  <span class="fmot-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmot-check__label">Automation &amp; monitoring</span>
                </li>
                <li class="fmot-check">
                  <span class="fmot-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmot-check__label">Business &amp; market overview</span>
                </li>
                <li class="fmot-check">
                  <span class="fmot-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmot-check__label">Live project case studies</span>
                </li>
              </ul>
              <div class="fmot-plan__buy">
                <p class="fmot-plan__price">&#8377;9,999</p>
                <a href="#enroll-professional" class="fm-cta-btn fmot-plan__btn">
                  <span class="fmot-plan__btn-label">Enroll Now</span>
                  <span class="fmot-plan__btn-arrow" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                      <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                  </span>
                </a>
              </div>
            </li>

            <!-- CARD 3: COMMERCIAL MASTERY -->
            <li class="fmot-plan">
              <div class="fmot-plan__head">
                <span class="fmot-plan__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M4 21V10l8-6 8 6v11"></path>
                    <path d="M4 21h16"></path>
                    <path d="M9 21v-7a3 3 0 0 1 6 0v7"></path>
                    <line x1="4" y1="14" x2="20" y2="14"></line>
                  </svg>
                </span>
                <div class="fmot-plan__titles">
                  <h3 class="fm-heading fmot-plan__title">Commercial Mastery</h3>
                  <p class="fmot-plan__sub">Build a Scalable Hydroponic Business</p>
                </div>
              </div>
              <ul class="fmot-checks">
                <li class="fmot-check">
                  <span class="fmot-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmot-check__label">Commercial farm planning</span>
                </li>
                <li class="fmot-check">
                  <span class="fmot-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmot-check__label">Costing &amp; ROI</span>
                </li>
                <li class="fmot-check">
                  <span class="fmot-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmot-check__label">Operations &amp; team management</span>
                </li>
                <li class="fmot-check">
                  <span class="fmot-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmot-check__label">Marketing &amp; sales channel</span>
                </li>
                <li class="fmot-check">
                  <span class="fmot-check__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </span>
                  <span class="fmot-check__label">Expert mentorship</span>
                </li>
              </ul>
              <div class="fmot-plan__buy">
                <p class="fmot-plan__price">&#8377;19,999</p>
                <a href="#enroll-commercial" class="fm-cta-btn fmot-plan__btn">
                  <span class="fmot-plan__btn-label">Enroll Now</span>
                  <span class="fmot-plan__btn-arrow" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                      <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                  </span>
                </a>
              </div>
            </li>
          </ul>

        </div>
      </section>

 

      <!-- ===================================================================
         02C. MEET YOUR INSTRUCTOR SECTION
         =================================================================== -->
      <section class="fmmi" id="meet-instructor">
        <div class="fmmi__inner">

          <header class="fmmi__head">
            <span class="fmpj-eyebrow">Meet Your Instructor<i class="fmpj-eyebrow__line"></i></span>

            <h2 class="fm-heading">Learn from <span class="fmdm__accent">Industry Experts</span> </h2>
            <p class="fm-text fmmi__text">Get practical knowledge and real-world insights from professionals who build
              and operate commercial hi-tech farms.</p>
          </header>

          <figure class="fmmi__media">
            <img src="images/khushali.jpeg"
              alt="Khushali Sharma, founder and director of Future Agri Infra, smiling with arms crossed inside a greenhouse"
              class="fmmi__photo" loading="eager" width="900" height="1000">
          </figure>

          <div class="fmmi__bio">
            <h3 class="fm-heading fmmi__name">Khushali Sharma</h3>
            <p class="fmmi__role">Founder &amp; Director<br>Future Agri Infra</p>
            <i class="fmmi__rule" aria-hidden="true"></i>
            <p class="fm-text fmmi__about">A protected farming specialist with hands-on experience in designing,
              developing and managing commercial hi-tech farms across different crops and systems.</p>
          </div>

          <ul class="fmmi-feats">
            <li class="fmmi-feat">
              <span class="fmmi-feat__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M12 20v-8"></path>
                  <path d="M12 12a4 4 0 0 1 4-4c0 2.5-1.5 4-4 4Z"></path>
                  <path d="M12 15a4 4 0 0 0-4-4c0 2.5 1.5 4 4 4Z"></path>
                </svg>
              </span>
              <span class="fmmi-feat__label">Protected<br>Farming Expert</span>
            </li>
            <li class="fmmi-feat">
              <span class="fmmi-feat__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <circle cx="12" cy="12" r="3"></circle>
                  <path
                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 1 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 1 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 1 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 1 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z">
                  </path>
                </svg>
              </span>
              <span class="fmmi-feat__label">Farm Design &amp;<br>Implementation</span>
            </li>
            <li class="fmmi-feat">
              <span class="fmmi-feat__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
              </span>
              <span class="fmmi-feat__label">Real Project<br>Experience</span>
            </li>
            <li class="fmmi-feat">
              <span class="fmmi-feat__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                  <path d="M6 12v5c0 2 3 3 6 3s6-1 6-3v-5"></path>
                </svg>
              </span>
              <span class="fmmi-feat__label">Practical,<br>Application-based<br>Training</span>
            </li>
          </ul>

          <ul class="fmmi-stats">
            <li class="fmmi-stat fmmi-stat--big">
              <span class="fmmi-stat__num">10+</span>
              <span class="fmmi-stat__text">Years of<br>Industry Experience</span>
            </li>
            <li class="fmmi-stat">
              <span class="fmmi-stat__text"><strong>Multiple</strong><br>Commercial Projects</span>
            </li>
            <li class="fmmi-stat">
              <span class="fmmi-stat__text"><strong>End-to-End</strong><br>Farm Development</span>
            </li>
          </ul>

        </div>
        <!-- next block goes here -->
      </section>

      <!-- ===================================================================
         03. UPCOMING TRAINING PROGRAMS: AVAILABLE BATCHES SECTION
         =================================================================== -->
      <section class="fmtb" id="available-batches" data-fmtb>
        <div class="fmtb__inner">

          <!-- HEADER: title left, filter pills right (one grid) -->
          <header class="fmtb__head">
            <div class="fmtb__headtext">
              <span class="fmtb-eyebrow"><b></b><i class="fmtb-eyebrow__line"></i><span>Upcoming training
                  programs</span></span>
              <h2 class="fm-heading fmtb__title">Available Batches</h2>
            </div>

            <div class="fmtb-filters" role="group" aria-label="Filter batches by program">
              <button type="button" class="fmtb-pill is-active" data-fmtb-filter="all" aria-pressed="true">All
                Programs</button>
              <button type="button" class="fmtb-pill" data-fmtb-filter="polyhouse"
                aria-pressed="false">Polyhouse</button>
              <button type="button" class="fmtb-pill" data-fmtb-filter="hydroponics"
                aria-pressed="false">Hydroponics</button>
              <button type="button" class="fmtb-pill" data-fmtb-filter="automation"
                aria-pressed="false">Automation</button>
              <button type="button" class="fmtb-pill" data-fmtb-filter="crop-management" aria-pressed="false">Crop
                Management</button>
            </div>
          </header>

          <!-- BATCH LIST -->
          <ul class="fmtb-list" data-fmtb-list>

            <li class="fmtb-card" data-fmtb-card data-fmtb-cat="polyhouse">
              <figure class="fmtb-card__media">
                <img src="images/2.png" alt="Trainer and participants inside a polyhouse during a training session"
                  loading="lazy" width="800" height="440">
              </figure>

              <div class="fmtb-card__body">
                <span class="fmtb-tag">Polyhouse</span>
                <h3 class="fm-heading fmtb-card__title">Commercial Polyhouse Training</h3>
                <ul class="fmtb-meta">
                  <li class="fmtb-meta__item">
                    <svg aria-hidden="true" viewBox="0 0 24 24">
                      <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                      <line x1="16" y1="2" x2="16" y2="6"></line>
                      <line x1="8" y1="2" x2="8" y2="6"></line>
                      <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    3 Days
                  </li>
                  <li class="fmtb-meta__item">
                    <svg aria-hidden="true" viewBox="0 0 24 24">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                      <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    FAI Training Farm, Gujarat
                  </li>
                  <li class="fmtb-meta__item">
                    <svg aria-hidden="true" viewBox="0 0 24 24">
                      <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                      <circle cx="9" cy="7" r="4"></circle>
                      <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                      <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    10 - 15 Participants
                  </li>
                </ul>
                <p class="fm-text fmtb-card__text">Complete practical training on greenhouse structure, climate control,
                  crop management and operations.</p>
              </div>

              <div class="fmtb-when">
                <time class="fmtb-when__time" datetime="2026-11-15" aria-label="15 to 17 November 2026">
                  <span class="fm-heading fmtb-when__days">15 - 17</span>
                  <span class="fmtb-when__month">Nov 2026</span>
                </time>


                 <a href="{{ route('training.detail') }}" class="fm-cta-btn">
               View Details
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </a>
              </div>
            </li>

            <li class="fmtb-card" data-fmtb-card data-fmtb-cat="hydroponics">
              <figure class="fmtb-card__media">
                <img src="images/res-hydroponic-system.jpg"
                  alt="Participants handling hydroponic plants during a workshop" loading="lazy" width="800"
                  height="440">
              </figure>
              <div class="fmtb-card__body">
                <span class="fmtb-tag">Hydroponics</span>
                <h3 class="fm-heading fmtb-card__title">Hydroponics Practical Workshop</h3>
                <ul class="fmtb-meta">
                  <li class="fmtb-meta__item">
                    <svg aria-hidden="true" viewBox="0 0 24 24">
                      <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                      <line x1="16" y1="2" x2="16" y2="6"></line>
                      <line x1="8" y1="2" x2="8" y2="6"></line>
                      <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    2 Days
                  </li>
                  <li class="fmtb-meta__item">
                    <svg aria-hidden="true" viewBox="0 0 24 24">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                      <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    FAI Training Farm, Gujarat
                  </li>
                  <li class="fmtb-meta__item">
                    <svg aria-hidden="true" viewBox="0 0 24 24">
                      <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                      <circle cx="9" cy="7" r="4"></circle>
                      <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                      <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    10 - 15 Participants
                  </li>
                </ul>
                <p class="fm-text fmtb-card__text">Complete practical training on greenhouse structure, climate control,
                  crop management and operations.</p>
              </div>
              <div class="fmtb-when">
                <time class="fmtb-when__time" datetime="2026-11-22" aria-label="22 to 23 November 2026">
                  <span class="fm-heading fmtb-when__days">22 - 23</span>
                  <span class="fmtb-when__month">Nov 2026</span>
                </time>

                 <a href="{{ route('training.detail') }}" class="fm-cta-btn">
               View Details
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </a>
              </div>
            </li>

            <li class="fmtb-card" data-fmtb-card data-fmtb-cat="automation">
              <figure class="fmtb-card__media">
                <img src="images/automation.png" alt="Sensors and control panels used in farm automation training"
                  loading="lazy" width="800" height="440">
              </figure>
              <div class="fmtb-card__body">
                <span class="fmtb-tag">Automation</span>
                <h3 class="fm-heading fmtb-card__title">IoT &amp; Farm Automation Training</h3>
                <ul class="fmtb-meta">
                  <li class="fmtb-meta__item">
                    <svg aria-hidden="true" viewBox="0 0 24 24">
                      <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                      <line x1="16" y1="2" x2="16" y2="6"></line>
                      <line x1="8" y1="2" x2="8" y2="6"></line>
                      <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    2 Days
                  </li>
                  <li class="fmtb-meta__item">
                    <svg aria-hidden="true" viewBox="0 0 24 24">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                      <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    FAI Training Farm, Gujarat
                  </li>
                  <li class="fmtb-meta__item">
                    <svg aria-hidden="true" viewBox="0 0 24 24">
                      <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                      <circle cx="9" cy="7" r="4"></circle>
                      <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                      <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    10 - 15 Participants
                  </li>
                </ul>
                <p class="fm-text fmtb-card__text">Hands-on training on sensors, monitoring, irrigation control and
                  automation.</p>
              </div>
              <div class="fmtb-when">
                <time class="fmtb-when__time" datetime="2026-12-05" aria-label="5 to 6 December 2026">
                  <span class="fm-heading fmtb-when__days">05 - 06</span>
                  <span class="fmtb-when__month">Dec 2026</span>
                </time>

                 <a href="{{ route('training.detail') }}" class="fm-cta-btn">
               View Details
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </a>
              </div>
            </li>

          </ul>

          <p class="fm-text fmtb-empty" data-fmtb-empty hidden>No upcoming batches in this category right now. Please
            check back soon.</p>
          <p class="fmtb-sr" role="status" aria-live="polite" data-fmtb-status></p>
        </div>
      </section>





      <!-- ===================================================================
         03. Featured Resources: Popular Downloads
         =================================================================== -->
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
                <img src="images/res-greenhouse-design.jpg" alt="Protected Farming Design Guide" loading="lazy"
                  width="640" height="360" class="fmrd-card__img">
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
                <img src="images/res-hydroponic-system.jpg" alt="Hydroponic Growing System Guide" loading="lazy"
                  width="640" height="360" class="fmrd-card__img">
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
                  <a href="images/res-soil-cocopeat.jpg" class="fmrd-btn"
                    aria-label="Download Soil & Cocopeat Management" download>
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
            <article class="fmrd-card fmrd-card--brochure" data-fmrd-card data-category="brochures"
              data-crop="protected" data-format="pdf">
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

    </main>

    
  </div>

  
  
  
  

  <script>
    (function () {
      'use strict';
      var root = document.querySelector('[data-fmtb]');
      if (!root) return;

      var pills = Array.prototype.slice.call(root.querySelectorAll('[data-fmtb-filter]'));
      var cards = Array.prototype.slice.call(root.querySelectorAll('[data-fmtb-card]'));
      var list = root.querySelector('[data-fmtb-list]');
      var empty = root.querySelector('[data-fmtb-empty]');
      var status = root.querySelector('[data-fmtb-status]');
      if (!pills.length || !cards.length || !list) return;

      var reduce = window.matchMedia('(prefers-reduced-motion: reduce)');

      function apply(filter) {
        var shown = 0;
        cards.forEach(function (card) {
          var match = filter === 'all' || card.getAttribute('data-fmtb-cat') === filter;
          card.hidden = !match;
          card.classList.remove('is-in');
          if (match) {
            shown++;
            if (!reduce.matches) { void card.offsetWidth; card.classList.add('is-in'); }     // restart the fade-in
          }
        });
        list.hidden = shown === 0;
        if (empty) empty.hidden = shown !== 0;
        if (status) status.textContent = 'Showing ' + shown + (shown === 1 ? ' batch' : ' batches');
      }

      pills.forEach(function (pill) {
        pill.addEventListener('click', function () {
          pills.forEach(function (p) {
            var on = p === pill;
            p.classList.toggle('is-active', on);
            p.setAttribute('aria-pressed', on ? 'true' : 'false');
          });
          apply(pill.getAttribute('data-fmtb-filter'));
        });
      });

      apply('all');
    })();
  </script>
@endsection
