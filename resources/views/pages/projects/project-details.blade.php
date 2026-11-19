@extends('layouts.app')

@section('title', 'Sharma Floriculture Farm - Project Details | Future Agri Infra')
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
            Sharma Floriculture <br>Farm <span class="fmdm__accent">Case Study</span>
          </h1>

          <p class="fm-text fmab__text">
            A 4,000 sq. m. gerbera polyhouse built near Indore — from structure and fertigation to year-round export-grade harvests.
          </p>

          <a href="#project-case-study" class="fm-cta-btn">
            View Project Details
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
         Project Case Study & Facts Section
         =================================================================== -->
    <section class="fmpd" id="project-case-study" data-fmpd>
      <div class="fmpd__inner">

        <div class="fmpd__layout">

          <!-- LEFT COLUMN: Gallery & Narrative -->
          <div class="fmpd__main">

            <!-- Interactive Image Gallery -->
            <div class="fmpd-gallery" data-fmpd-gallery>
              <div class="fmpd-gallery__main-wrap">
                <img src="images/proj-gerbera.jpg" alt="Commercial Gerbera Cultivation in Polyhouse" class="fmpd-gallery__main-img" data-fmpd-main-img width="1200" height="750" loading="eager">
              </div>

              <!-- Thumbnails -->
              <div class="fmpd-gallery__thumbs">
                <button type="button" class="fmpd-gallery__thumb is-active" data-fmpd-thumb="images/proj-gerbera.jpg" aria-label="View overall gerbera polyhouse photo">
                  <img src="images/proj-gerbera.jpg" alt="Overall gerbera polyhouse view" loading="lazy" width="200" height="125">
                </button>
                <button type="button" class="fmpd-gallery__thumb" data-fmpd-thumb="images/proj-gerbera-2.jpg" aria-label="View close-up flower beds photo">
                  <img src="images/proj-gerbera-2.jpg" alt="Gerbera flower beds close-up" loading="lazy" width="200" height="125">
                </button>
                <button type="button" class="fmpd-gallery__thumb" data-fmpd-thumb="images/fip-structures.jpg" aria-label="View polyhouse structure photo">
                  <img src="images/fip-structures.jpg" alt="Naturally ventilated polyhouse structure" loading="lazy" width="200" height="125">
                </button>
                <button type="button" class="fmpd-gallery__thumb" data-fmpd-thumb="images/fip-irrigation-fertigation.jpg" aria-label="View drip irrigation and fertigation photo">
                  <img src="images/fip-irrigation-fertigation.jpg" alt="Automated drip irrigation and fertigation system" loading="lazy" width="200" height="125">
                </button>
                <button type="button" class="fmpd-gallery__thumb" data-fmpd-thumb="images/pp-nvph.jpg" aria-label="View polyhouse cultivation photo">
                  <img src="images/pp-nvph.jpg" alt="Polyhouse crop canopy and cultivation" loading="lazy" width="200" height="125">
                </button>
                <button type="button" class="fmpd-gallery__thumb" data-fmpd-thumb="images/project-overview-farm.jpg" aria-label="View farm facility overview photo">
                  <img src="images/project-overview-farm.jpg" alt="Commercial polyhouse farm facility overview" loading="lazy" width="200" height="125">
                </button>
              </div>
            </div>

            <!-- About This Project -->
            <article class="fmpd-about">
              <h2 class="fm-heading fmpd-about__title">About This Project</h2>
              <div class="fmpd-about__text">
                <p class="fm-text">A 4,000 sq. m. naturally ventilated polyhouse for commercial gerbera cultivation near Indore.</p>
                <p class="fm-text">Scope included GI structure, 200-micron UV polythene, 40-mesh insect net, drip-fertigation with venturi, raised beds and trellising.</p>
                <p class="fm-text">The farm now harvests export-grade gerbera stems year-round, supplying Indore and Bhopal flower markets.</p>
              </div>
            </article>

          </div>

          <!-- RIGHT COLUMN: Sidebar Cards -->
          <aside class="fmpd__sidebar">

            <!-- Card 1: Project Facts -->
            <div class="fmpd-facts-card">
              <div class="fmpd-facts-card__header">
                <h3 class="fmpd-facts-card__title">Project Facts</h3>
                <span class="fmpd-facts-card__badge">Completed</span>
              </div>

              <ul class="fmpd-facts-list">
                <!-- Location -->
                <li class="fmpd-fact">
                  <div class="fmpd-fact__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                      <circle cx="12" cy="10" r="3" />
                    </svg>
                  </div>
                  <div class="fmpd-fact__content">
                    <span class="fmpd-fact__label">Location</span>
                    <strong class="fmpd-fact__val">Indore, Madhya Pradesh</strong>
                  </div>
                </li>

                <!-- Farm / Owner -->
                <li class="fmpd-fact">
                  <div class="fmpd-fact__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                      <circle cx="12" cy="7" r="4" />
                    </svg>
                  </div>
                  <div class="fmpd-fact__content">
                    <span class="fmpd-fact__label">Farm / Owner</span>
                    <strong class="fmpd-fact__val">Sharma Floriculture Farm</strong>
                  </div>
                </li>

                <!-- Crop -->
                <li class="fmpd-fact">
                  <div class="fmpd-fact__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M12 2a10 10 0 0 1 10 10c0 5.523-4.477 10-10 10S2 17.523 2 12A10 10 0 0 1 12 2z" opacity="0.15" />
                      <path d="M12 22v-9" />
                      <path d="M12 13a5 5 0 0 0 5-5c0-3-5-6-5-6s-5 3-5 6a5 5 0 0 0 5 5z" />
                    </svg>
                  </div>
                  <div class="fmpd-fact__content">
                    <span class="fmpd-fact__label">Crop</span>
                    <strong class="fmpd-fact__val">Gerbera</strong>
                  </div>
                </li>

                  <!-- automation -->
                <li class="fmpd-fact">
                  <div class="fmpd-fact__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M12 2a10 10 0 0 1 10 10c0 5.523-4.477 10-10 10S2 17.523 2 12A10 10 0 0 1 12 2z" opacity="0.15" />
                      <path d="M12 22v-9" />
                      <path d="M12 13a5 5 0 0 0 5-5c0-3-5-6-5-6s-5 3-5 6a5 5 0 0 0 5 5z" />
                    </svg>
                  </div>
                  <div class="fmpd-fact__content">
                    <span class="fmpd-fact__label">Automation</span>
                    <strong class="fmpd-fact__val">Full automation and climate controll</strong>
                  </div>
                </li>

                <!-- Project Type -->
                <li class="fmpd-fact">
                  <div class="fmpd-fact__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <polygon points="12 2 2 7 12 12 22 7 12 2" />
                      <polyline points="2 17 12 22 22 17" />
                      <polyline points="2 12 12 17 22 12" />
                    </svg>
                  </div>
                  <div class="fmpd-fact__content">
                    <span class="fmpd-fact__label">Project Type</span>
                    <strong class="fmpd-fact__val">Polyhouse</strong>
                  </div>
                </li>

                <!-- Area -->
                <li class="fmpd-fact">
                  <div class="fmpd-fact__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21.3 8.7 8.7 21.3a1 1 0 0 1-1.4 0l-6-6a1 1 0 0 1 0-1.4L13.9 1.3a1 1 0 0 1 1.4 0l6 6a1 1 0 0 1 0 1.4z" />
                      <line x1="7.5" y1="10.5" x2="10.5" y2="7.5" />
                      <line x1="10.5" y1="13.5" x2="13.5" y2="10.5" />
                      <line x1="13.5" y1="16.5" x2="16.5" y2="13.5" />
                    </svg>
                  </div>
                  <div class="fmpd-fact__content">
                    <span class="fmpd-fact__label">Area</span>
                    <strong class="fmpd-fact__val">4,000 sq. m.</strong>
                  </div>
                </li>


                
                <!-- Area -->
                <li class="fmpd-fact">
                  <div class="fmpd-fact__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21.3 8.7 8.7 21.3a1 1 0 0 1-1.4 0l-6-6a1 1 0 0 1 0-1.4L13.9 1.3a1 1 0 0 1 1.4 0l6 6a1 1 0 0 1 0 1.4z" />
                      <line x1="7.5" y1="10.5" x2="10.5" y2="7.5" />
                      <line x1="10.5" y1="13.5" x2="13.5" y2="10.5" />
                      <line x1="13.5" y1="16.5" x2="16.5" y2="13.5" />
                    </svg>
                  </div>
                  <div class="fmpd-fact__content">
                    <span class="fmpd-fact__label">Growing Medium</span>
                    <strong class="fmpd-fact__val">Hydroponices + Cocopeat
                    </strong>
                  </div>
                </li>

                <!-- Completed On -->
                <li class="fmpd-fact">
                  <div class="fmpd-fact__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                      <line x1="16" y1="2" x2="16" y2="6" />
                      <line x1="8" y1="2" x2="8" y2="6" />
                      <line x1="3" y1="10" x2="21" y2="10" />
                    </svg>
                  </div>
                  <div class="fmpd-fact__content">
                    <span class="fmpd-fact__label">Completed On</span>
                    <strong class="fmpd-fact__val">March 15, 2024</strong>
                  </div>
                </li>
              </ul>
            </div>

            <!-- Card 2: Want a project like this? CTA -->
            <div class="fmpd-cta-card">
              <h3 class="fmpd-cta-card__title">Want a project like this?</h3>
              <p class="fmpd-cta-card__desc">Get a free site visit and bankable estimate for your land.</p>
              <div class="fmpd-cta-card__actions">
                <a href="tel:+917879183931" class="fmpd-cta-btn fmpd-cta-btn--call">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                  </svg>
                  <span>Call +91 7879183931</span>
                </a>
                <a href="https://wa.me/917879183931" target="_blank" rel="noopener noreferrer" class="fmpd-cta-btn fmpd-cta-btn--whatsapp">
                  <span>WhatsApp Us</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                  </svg>
                </a>
              </div>
            </div>

          </aside>

        </div>

      </div>
    </section>
@endsection
