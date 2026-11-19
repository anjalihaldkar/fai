@extends('layouts.app')

@section('title', 'Featured Resources & Downloads | Future Agri Infra')
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
          <span class="fmab-eyebrow">Knowledge Hub<i class="fmab-eyebrow__line"></i></span>

          <h1 class="fm-heading fmab__title">
            Featured <br>Resources &amp; <span class="fmdm__accent">Downloads</span> 
          </h1>

          <p class="fm-text fmab__text">
            Access our curated library of guides, manuals and brochures — everything you need to plan, grow and manage a
            successful protected farm.
          </p>

          <a href="#popular-downloads" class="fm-cta-btn">
            Browse Resources
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
              <svg class="fmrd-select__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
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
              <svg class="fmrd-select__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M6 9l6 6 6-6" />
              </svg>
            </div>

            <div class="fmrd-select-wrap">
              <select class="fmrd-select" data-fmrd-filter="format" aria-label="Filter by Format">
                <option value="all">All Formats</option>
                <option value="pdf">PDF Document</option>
                <option value="technical">Technical Specs</option>
              </select>
              <svg class="fmrd-select__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
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
              <img src="images/res-greenhouse-design.jpg" alt="Protected Farming Design Guide" loading="lazy" width="640" height="360" class="fmrd-card__img">
            </div>
            <div class="fmrd-card__body">
              <h3 class="fmrd-card__title">Protected Farming Design Guide</h3>
              <div class="fmrd-card__footer">
                <p class="fm-text fmrd-card__desc">Complete technical guide for modern protected structures.</p>
                <a href="images/res-greenhouse-design.jpg" class="fmrd-btn" aria-label="Download Protected Farming Design Guide" download>
                  <span>Download</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                  </svg>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 2 -->
          <article class="fmrd-card" data-fmrd-card data-category="manuals" data-crop="vegetables" data-format="pdf">
            <div class="fmrd-card__media">
              <img src="images/res-tomato-cultivation.jpg" alt="Tomato Cultivation Manual" loading="lazy" width="640" height="360" class="fmrd-card__img">
            </div>
            <div class="fmrd-card__body">
              <h3 class="fmrd-card__title">Tomato Cultivation Manual</h3>
              <div class="fmrd-card__footer">
                <p class="fm-text fmrd-card__desc">Varieties, growing requirements, nutrient schedule and harvest guidelines.</p>
                <a href="images/res-tomato-cultivation.jpg" class="fmrd-btn" aria-label="Download Tomato Cultivation Manual" download>
                  <span>Download</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                  </svg>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 3 -->
          <article class="fmrd-card" data-fmrd-card data-category="guides" data-crop="hydroponics" data-format="pdf">
            <div class="fmrd-card__media">
              <img src="images/res-hydroponic-system.jpg" alt="Hydroponic Growing System Guide" loading="lazy" width="640" height="360" class="fmrd-card__img">
            </div>
            <div class="fmrd-card__body">
              <h3 class="fmrd-card__title">Hydroponic Growing System Guide</h3>
              <div class="fmrd-card__footer">
                <p class="fm-text fmrd-card__desc">Setup, operation and crop management for hydroponics.</p>
                <a href="images/res-hydroponic-system.jpg" class="fmrd-btn" aria-label="Download Hydroponic Growing System Guide" download>
                  <span>Download</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                  </svg>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 4 -->
          <article class="fmrd-card" data-fmrd-card data-category="guides" data-crop="soil" data-format="pdf">
            <div class="fmrd-card__media">
              <img src="images/res-soil-cocopeat.jpg" alt="Soil & Cocopeat Management" loading="lazy" width="640" height="360" class="fmrd-card__img">
            </div>
            <div class="fmrd-card__body">
              <h3 class="fmrd-card__title">Soil &amp; Cocopeat Management</h3>
              <div class="fmrd-card__footer">
                <p class="fm-text fmrd-card__desc">Growing media preparation and best practices.</p>
                <a href="images/res-soil-cocopeat.jpg" class="fmrd-btn" aria-label="Download Soil & Cocopeat Management" download>
                  <span>Download</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                  </svg>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 5 -->
          <article class="fmrd-card" data-fmrd-card data-category="guides" data-crop="irrigation" data-format="pdf">
            <div class="fmrd-card__media">
              <img src="images/res-irrigation-fertigation.jpg" alt="Irrigation & Fertigation Guide" loading="lazy" width="640" height="360" class="fmrd-card__img">
            </div>
            <div class="fmrd-card__body">
              <h3 class="fmrd-card__title">Irrigation &amp; Fertigation Guide</h3>
              <div class="fmrd-card__footer">
                <p class="fm-text fmrd-card__desc">System design, nutrient management and scheduling.</p>
                <a href="images/res-irrigation-fertigation.jpg" class="fmrd-btn" aria-label="Download Irrigation & Fertigation Guide" download>
                  <span>Download</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                  </svg>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 6 -->
          <article class="fmrd-card fmrd-card--brochure" data-fmrd-card data-category="brochures" data-crop="protected" data-format="pdf">
            <div class="fmrd-card__media fmrd-card__media--brochure">
              <div class="fmrd-card__brochure-left">
                <span class="fmrd-card__brochure-title">Company<br>Brochure</span>
                <span class="fmrd-card__brochure-line" aria-hidden="true"></span>
              </div>
              <div class="fmrd-card__brochure-right">
                <img src="images/res-company-brochure.jpg" alt="Future Agri Infra Company Facility" loading="lazy" width="640" height="360" class="fmrd-card__brochure-img">
              </div>
            </div>
            <div class="fmrd-card__body">
              <h3 class="fmrd-card__title">Future Agri Infra Brochure</h3>
              <div class="fmrd-card__footer">
                <p class="fm-text fmrd-card__desc">Our solutions, expertise and project portfolio.</p>
                <a href="images/res-company-brochure.jpg" class="fmrd-btn" aria-label="Download Future Agri Infra Brochure" download>
                  <span>Download</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
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
@endsection
