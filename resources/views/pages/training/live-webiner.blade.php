@extends('layouts.app')

@section('title', 'Why Attend / Live Webinars & Recordings | Future Agri Infra')
@section('meta_description', 'Attend our expert live webinars and access on-demand recordings covering hydroponics, greenhouse climate engineering, and commercial protected farming.')
@section('body_class', 'protected-page offline-training-page')

@section('content')
<section class="fmwr" id="webinars">
  <div class="fmwr__inner">

    <div class="fmwr__top">
      <div class="fmwr__intro">
        <span class="fmwr-eyebrow"><span class="fmwr-eyebrow__label">What you&rsquo;ll gain</span><i class="fmwr-eyebrow__line"></i></span>
        <h2 class="fm-heading fmwr__title">Why Attend<br>Our <span class="fmwr__accent">Live Webinar?</span></h2>
        <p class="fm-text fmwr__text">Practical knowledge, expert guidance and real-time solutions you can apply to your farm.</p>
        <a href="#benefits" class="fm-cta-btn fmwr__btn">
          <span class="fmwr__btn-label">Explore Benefits</span>
          <span class="fmwr__btn-arrow" aria-hidden="true">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>
      </div>

      <ul class="fmwr-feats">
        <li class="fmwr-feat">
          <span class="fmwr-feat__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M7 20h10" />
              <path d="M10 20c0-5 3-7 6-7 0-4-3-7-7-7-4 0-7 3-7 7 0 3 2 5 4 7" />
              <path d="M12 13c3-1 6-4 6-8-4 0-7 3-8 6" />
            </svg>
          </span>
          <h3 class="fm-heading fmwr-feat__title">Practical Insights</h3>
          <p class="fm-text fmwr-feat__text">Learn from real projects and field experience.</p>
        </li>

        <li class="fmwr-feat">
          <span class="fmwr-feat__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="3" />
              <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z" />
            </svg>
          </span>
          <h3 class="fm-heading fmwr-feat__title">Technical Clarity</h3>
          <p class="fm-text fmwr-feat__text">Understand the right systems, setup and operations.</p>
        </li>

        <li class="fmwr-feat">
          <span class="fmwr-feat__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <line x1="18" y1="20" x2="18" y2="10" />
              <line x1="12" y1="20" x2="12" y2="4" />
              <line x1="6" y1="20" x2="6" y2="14" />
              <polyline points="4 8 12 2 20 6" />
            </svg>
          </span>
          <h3 class="fm-heading fmwr-feat__title">Commercial View</h3>
          <p class="fm-text fmwr-feat__text">Get a business perspective, including costs and key considerations.</p>
        </li>

        <li class="fmwr-feat">
          <span class="fmwr-feat__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
              <circle cx="8.5" cy="12" r=".75" fill="currentColor" />
              <circle cx="12" cy="12" r=".75" fill="currentColor" />
              <circle cx="15.5" cy="12" r=".75" fill="currentColor" />
            </svg>
          </span>
          <h3 class="fm-heading fmwr-feat__title">Live Interaction</h3>
          <p class="fm-text fmwr-feat__text">Ask questions and get answers directly from our experts.</p>
        </li>
      </ul>
    </div>

    <div class="fmwr-divider">
      <i class="fmwr-divider__line fmwr-divider__line--l"></i>
      <span class="fmwr-divider__label">Past Webinars &amp; Recordings</span>
      <i class="fmwr-divider__line fmwr-divider__line--r"></i>
    </div>

    <div class="fmwr__head">
      <div class="fmwr__head-text">
        <h2 class="fm-heading fmwr__title2">Missed a Session? Watch the Recording.</h2>
        <p class="fm-text fmwr__text2">Access our expert webinars on key topics in hydroponics and protected cultivation.</p>
      </div>
      <a href="#all-recordings" class="fmwr__all">
        <span class="fmwr__all-label">View All Recordings</span>
        <span class="fmwr__all-arrow" aria-hidden="true">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </span>
      </a>
    </div>

    <ul class="fmwr-vids">
      <li class="fmwr-vid">
        <figure class="fmwr-vid__media">
          <img src="{{ asset('images/res-tomato-cultivation.jpg') }}" alt="Ripe red tomatoes growing on vines in a hydroponic greenhouse" class="fmwr-vid__img" loading="lazy" width="1000" height="360">
          <span class="fmwr-vid__play" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor" stroke="none">
              <polygon points="6 3 20 12 6 21 6 3" />
            </svg>
          </span>
          <span class="fmwr-vid__time"><span class="fmwr-vid__time-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>1:28:40</span>
        </figure>
        <div class="fmwr-vid__body">
          <h3 class="fm-heading fmwr-vid__title"><a href="#recording-1" class="fmwr-vid__link">Tomato in Hydroponics: System, Nutrition &amp; Management</a></h3>
          <p class="fmwr-vid__date"><span class="fmwr-vid__date-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></span><time datetime="2026-11-02">2 Nov 2026</time></p>
        </div>
      </li>

      <li class="fmwr-vid">
        <figure class="fmwr-vid__media">
          <img src="{{ asset('images/res-hydroponic-system.jpg') }}" alt="White hydroponic channels with young lettuce in a controlled environment" class="fmwr-vid__img" loading="lazy" width="1000" height="360">
          <span class="fmwr-vid__play" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor" stroke="none">
              <polygon points="6 3 20 12 6 21 6 3" />
            </svg>
          </span>
          <span class="fmwr-vid__time"><span class="fmwr-vid__time-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>1:12:05</span>
        </figure>
        <div class="fmwr-vid__body">
          <h3 class="fm-heading fmwr-vid__title"><a href="#recording-2" class="fmwr-vid__link">Nutrient Management in Soilless Farming</a></h3>
          <p class="fmwr-vid__date"><span class="fmwr-vid__date-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></span><time datetime="2026-10-18">18 Oct 2026</time></p>
        </div>
      </li>

      <li class="fmwr-vid">
        <figure class="fmwr-vid__media">
          <img src="{{ asset('images/res-greenhouse-design.jpg') }}" alt="Large glass greenhouses at sunset with climate control infrastructure" class="fmwr-vid__img" loading="lazy" width="1000" height="360">
          <span class="fmwr-vid__play" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor" stroke="none">
              <polygon points="6 3 20 12 6 21 6 3" />
            </svg>
          </span>
          <span class="fmwr-vid__time"><span class="fmwr-vid__time-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>1:05:32</span>
        </figure>
        <div class="fmwr-vid__body">
          <h3 class="fm-heading fmwr-vid__title"><a href="#recording-3" class="fmwr-vid__link">Project Planning &amp; Costing for Commercial Greenhouses</a></h3>
          <p class="fmwr-vid__date"><span class="fmwr-vid__date-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></span><time datetime="2026-10-05">5 Oct 2026</time></p>
        </div>
      </li>
    </ul>

  </div>
  <!-- next block goes here -->
</section>
@endsection
