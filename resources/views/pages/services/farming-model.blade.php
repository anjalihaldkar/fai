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
          <span class="fmab-eyebrow">Farming Model<i class="fmab-eyebrow__line"></i></span>

          <h1 class="fm-heading fmab__title">
            Protected Farming <br>Financial <span class="fmdm__accent">Models</span>
          </h1>

          <p class="fm-text fmab__text">
            Explore detailed financial projections, climate control systems, and commercial crop models for building a profitable protected farming enterprise.
          </p>

          <a href="#financial-projections" class="fm-cta-btn">
            View Financial Models
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

        <section class="fmfh" id="fan-pad-intro">
        <div class="fmfh__inner">

          <div class="fmfh__content">
            <span class="fmdm-eyebrow">System Hero<i class="fmdm-eyebrow__line"></i></span>
            <h2 class="fm-heading ">What is a <br>Fan Pad <span class="fmdm__accent"> Polyhouse?</span></h2>
            <p class="fm-text fmfh__text">A Fan Pad Polyhouse is a type of protected cultivation structure equipped with
              exhaust fans and cooling pads to maintain optimal temperature, <strong>humidity and air circulation for
                crop growth.</strong> It creates a controlled environment that helps farmers grow <strong>high-quality
                crops throughout the year,</strong> regardless of external weather conditions.</p>
            <ul class="fmfh-features">
              <li class="fmfh-feature"><span class="fmfh-feature__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 5a1.5 1.5 0 0 0-1.5 1.5v5.09a3 3 0 1 0 3 0V6.5A1.5 1.5 0 0 0 12 5z"></path>
                    <circle cx="12" cy="15" r="1.2" fill="currentColor"></circle>
                    <path d="M7 4.5A8 8 0 0 1 19.5 7"></path>
                    <polyline points="19.5 3.5 19.5 7 16 7"></polyline>
                    <path d="M17 19.5A8 8 0 0 1 4.5 17"></path>
                    <polyline points="4.5 20.5 4.5 17 8 17"></polyline>
                  </svg></span><span class="fmfh-feature__label">Better Climate Control</span></li>
              <li class="fmfh-feature"><span class="fmfh-feature__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="4" y1="20" x2="20" y2="20"></line>
                    <line x1="7" y1="20" x2="7" y2="14"></line>
                    <line x1="12" y1="20" x2="12" y2="8"></line>
                    <line x1="17" y1="20" x2="17" y2="11"></line>
                    <path d="M12 8V4"></path>
                    <path d="M12 5.5a2.5 2.5 0 0 1 2.5-2.5c0 1.6-1.2 2.5-2.5 2.5z"></path>
                    <path d="M12 6.5a2.5 2.5 0 0 0-2.5-2.5c0 1.6 1.2 2.5 2.5 2.5z"></path>
                  </svg></span><span class="fmfh-feature__label">Higher Yields</span></li>
              <li class="fmfh-feature"><span class="fmfh-feature__icon" aria-hidden="true"><svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="3.5"></circle>
                    <line x1="12" y1="2" x2="12" y2="4"></line>
                    <line x1="12" y1="20" x2="12" y2="22"></line>
                    <line x1="2" y1="12" x2="4" y2="12"></line>
                    <line x1="20" y1="12" x2="22" y2="12"></line>
                    <path d="M19.5 8.5A8.5 8.5 0 0 0 5 6"></path>
                    <polyline points="4.5 3 5 6 8.5 5.5"></polyline>
                    <path d="M4.5 15.5A8.5 8.5 0 0 0 19 18"></path>
                    <polyline points="19.5 21 19 18 15.5 18.5"></polyline>
                  </svg></span><span class="fmfh-feature__label">Year-Round Production</span></li>
            </ul>
          </div>

          <figure class="fmfh__media">
            <img src="images/pp-fanpad.jpg"
              alt="Fan pad polyhouse with large exhaust fans on the side wall and green crops growing in front under a blue sky"
              class="fmfh__img" loading="eager" width="1200" height="810">
          </figure>

        </div>
      </section>

      <!-- ===================================================================
           02. Financial Projections: Investment. Growth. Visible Returns.
           =================================================================== -->
      <section class="fmfp" id="financial-projections">
        <div class="fmfp__inner">

          <input type="radio" name="fmfp-scale" id="fmfp-s1" class="fmfp__radio">
          <input type="radio" name="fmfp-scale" id="fmfp-s2" class="fmfp__radio" checked>
          <input type="radio" name="fmfp-scale" id="fmfp-s3" class="fmfp__radio">
          <input type="radio" name="fmfp-scale" id="fmfp-s4" class="fmfp__radio">
          <input type="radio" name="fmfp-scale" id="fmfp-s5" class="fmfp__radio">

          <header class="fmfp__head">
            <span class="fmfp-eyebrow"><span class="fmfp-eyebrow__no">02</span><i class="fmfp-eyebrow__line"></i><span class="fmfp-eyebrow__label">Financial Projections</span></span>
            <h2 class="fm-heading fmfp__title">Investment. Growth.<br>Visible Returns.</h2>
            <p class="fm-text fmfp__text">Explore detailed financial projections for different project scales and understand the potential returns for this farming model.</p>
          </header>

          <div class="fmfp__top">
            <div class="fmfp-scale">
              <span class="fmfp-scale__label">Select Project Scale</span>
              <label class="fmfp-pill" for="fmfp-s1">0.25 Acre</label>
              <label class="fmfp-pill" for="fmfp-s2">0.5 Acre</label>
              <label class="fmfp-pill" for="fmfp-s3">1 Acre</label>
              <label class="fmfp-pill" for="fmfp-s4">2 Acre</label>
              <label class="fmfp-pill" for="fmfp-s5">5 Acre</label>
            </div>

            <div class="fmfp__ovs">
              <section class="fmfp-ov fmfp-ov--1" aria-label="0.25 Acre project overview">
                <h3 class="fmfp-ov__title">0.25 Acre Project Overview</h3>
                <ul class="fmfp-stats">
                  <li class="fmfp-stat"><span class="fmfp-stat__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><path d="M12 11v6"></path><path d="M12 11c0-2 1.5-3 3-3s3 1 3 3-1.5 2-3 2"></path><path d="M12 13c0-2-1.5-3-3-3s-3 1-3 3 1.5 2 3 2"></path></svg></span><span class="fmfp-stat__body"><span class="fmfp-stat__value">&#8377; 0.9 Cr</span><span class="fmfp-stat__label">Total Investment</span></span></li>
                  <li class="fmfp-stat"><span class="fmfp-stat__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11h18v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-9z"></path><path d="M3 15h18"></path><path d="M8 7v4"></path><path d="M8 7c0-1.5 1-2.5 2.5-2.5S13 5.5 13 7"></path><path d="M16 5v6"></path><path d="M16 5c0-1.5-1-2.5-2.5-2.5S11 3.5 11 5"></path></svg></span><span class="fmfp-stat__body"><span class="fmfp-stat__value">140 MT</span><span class="fmfp-stat__label">Annual Production</span></span></li>
                  <li class="fmfp-stat"><span class="fmfp-stat__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M12 8c1.5 0 3 1 3 3 0 2.5-3 5-3 5s-3-2.5-3-5c0-2 1.5-3 3-3z"></path><path d="M12 8v8"></path></svg></span><span class="fmfp-stat__body"><span class="fmfp-stat__value">&#8377; 1.8 Cr</span><span class="fmfp-stat__label">Annual Revenue</span></span></li>
                  <li class="fmfp-stat"><span class="fmfp-stat__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span><span class="fmfp-stat__body"><span class="fmfp-stat__value">20&ndash;26 Months</span><span class="fmfp-stat__label">Payback Period</span></span></li>
                </ul>
              </section>

              <section class="fmfp-ov fmfp-ov--2" aria-label="0.5 Acre project overview">
                <h3 class="fmfp-ov__title">0.5 Acre Project Overview</h3>
                <ul class="fmfp-stats">
                  <li class="fmfp-stat"><span class="fmfp-stat__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><path d="M12 11v6"></path><path d="M12 11c0-2 1.5-3 3-3s3 1 3 3-1.5 2-3 2"></path><path d="M12 13c0-2-1.5-3-3-3s-3 1-3 3 1.5 2 3 2"></path></svg></span><span class="fmfp-stat__body"><span class="fmfp-stat__value">&#8377; 1.8 Cr</span><span class="fmfp-stat__label">Total Investment</span></span></li>
                  <li class="fmfp-stat"><span class="fmfp-stat__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11h18v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-9z"></path><path d="M3 15h18"></path><path d="M8 7v4"></path><path d="M8 7c0-1.5 1-2.5 2.5-2.5S13 5.5 13 7"></path><path d="M16 5v6"></path><path d="M16 5c0-1.5-1-2.5-2.5-2.5S11 3.5 11 5"></path></svg></span><span class="fmfp-stat__body"><span class="fmfp-stat__value">280 MT</span><span class="fmfp-stat__label">Annual Production</span></span></li>
                  <li class="fmfp-stat"><span class="fmfp-stat__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M12 8c1.5 0 3 1 3 3 0 2.5-3 5-3 5s-3-2.5-3-5c0-2 1.5-3 3-3z"></path><path d="M12 8v8"></path></svg></span><span class="fmfp-stat__body"><span class="fmfp-stat__value">&#8377; 3.6 Cr</span><span class="fmfp-stat__label">Annual Revenue</span></span></li>
                  <li class="fmfp-stat"><span class="fmfp-stat__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span><span class="fmfp-stat__body"><span class="fmfp-stat__value">18&ndash;24 Months</span><span class="fmfp-stat__label">Payback Period</span></span></li>
                </ul>
              </section>

              <section class="fmfp-ov fmfp-ov--3" aria-label="1 Acre project overview">
                <h3 class="fmfp-ov__title">1 Acre Project Overview</h3>
                <ul class="fmfp-stats">
                  <li class="fmfp-stat"><span class="fmfp-stat__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><path d="M12 11v6"></path><path d="M12 11c0-2 1.5-3 3-3s3 1 3 3-1.5 2-3 2"></path><path d="M12 13c0-2-1.5-3-3-3s-3 1-3 3 1.5 2 3 2"></path></svg></span><span class="fmfp-stat__body"><span class="fmfp-stat__value">&#8377; 3.6 Cr</span><span class="fmfp-stat__label">Total Investment</span></span></li>
                  <li class="fmfp-stat"><span class="fmfp-stat__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11h18v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-9z"></path><path d="M3 15h18"></path><path d="M8 7v4"></path><path d="M8 7c0-1.5 1-2.5 2.5-2.5S13 5.5 13 7"></path><path d="M16 5v6"></path><path d="M16 5c0-1.5-1-2.5-2.5-2.5S11 3.5 11 5"></path></svg></span><span class="fmfp-stat__body"><span class="fmfp-stat__value">560 MT</span><span class="fmfp-stat__label">Annual Production</span></span></li>
                  <li class="fmfp-stat"><span class="fmfp-stat__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M12 8c1.5 0 3 1 3 3 0 2.5-3 5-3 5s-3-2.5-3-5c0-2 1.5-3 3-3z"></path><path d="M12 8v8"></path></svg></span><span class="fmfp-stat__body"><span class="fmfp-stat__value">&#8377; 7.2 Cr</span><span class="fmfp-stat__label">Annual Revenue</span></span></li>
                  <li class="fmfp-stat"><span class="fmfp-stat__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span><span class="fmfp-stat__body"><span class="fmfp-stat__value">17&ndash;22 Months</span><span class="fmfp-stat__label">Payback Period</span></span></li>
                </ul>
              </section>

              <section class="fmfp-ov fmfp-ov--4" aria-label="2 Acre project overview">
                <h3 class="fmfp-ov__title">2 Acre Project Overview</h3>
                <ul class="fmfp-stats">
                  <li class="fmfp-stat"><span class="fmfp-stat__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><path d="M12 11v6"></path><path d="M12 11c0-2 1.5-3 3-3s3 1 3 3-1.5 2-3 2"></path><path d="M12 13c0-2-1.5-3-3-3s-3 1-3 3 1.5 2 3 2"></path></svg></span><span class="fmfp-stat__body"><span class="fmfp-stat__value">&#8377; 7.2 Cr</span><span class="fmfp-stat__label">Total Investment</span></span></li>
                  <li class="fmfp-stat"><span class="fmfp-stat__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11h18v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-9z"></path><path d="M3 15h18"></path><path d="M8 7v4"></path><path d="M8 7c0-1.5 1-2.5 2.5-2.5S13 5.5 13 7"></path><path d="M16 5v6"></path><path d="M16 5c0-1.5-1-2.5-2.5-2.5S11 3.5 11 5"></path></svg></span><span class="fmfp-stat__body"><span class="fmfp-stat__value">1,120 MT</span><span class="fmfp-stat__label">Annual Production</span></span></li>
                  <li class="fmfp-stat"><span class="fmfp-stat__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M12 8c1.5 0 3 1 3 3 0 2.5-3 5-3 5s-3-2.5-3-5c0-2 1.5-3 3-3z"></path><path d="M12 8v8"></path></svg></span><span class="fmfp-stat__body"><span class="fmfp-stat__value">&#8377; 14.4 Cr</span><span class="fmfp-stat__label">Annual Revenue</span></span></li>
                  <li class="fmfp-stat"><span class="fmfp-stat__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span><span class="fmfp-stat__body"><span class="fmfp-stat__value">16&ndash;21 Months</span><span class="fmfp-stat__label">Payback Period</span></span></li>
                </ul>
              </section>

              <section class="fmfp-ov fmfp-ov--5" aria-label="5 Acre project overview">
                <h3 class="fmfp-ov__title">5 Acre Project Overview</h3>
                <ul class="fmfp-stats">
                  <li class="fmfp-stat"><span class="fmfp-stat__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><path d="M12 11v6"></path><path d="M12 11c0-2 1.5-3 3-3s3 1 3 3-1.5 2-3 2"></path><path d="M12 13c0-2-1.5-3-3-3s-3 1-3 3 1.5 2 3 2"></path></svg></span><span class="fmfp-stat__body"><span class="fmfp-stat__value">&#8377; 18 Cr</span><span class="fmfp-stat__label">Total Investment</span></span></li>
                  <li class="fmfp-stat"><span class="fmfp-stat__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11h18v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-9z"></path><path d="M3 15h18"></path><path d="M8 7v4"></path><path d="M8 7c0-1.5 1-2.5 2.5-2.5S13 5.5 13 7"></path><path d="M16 5v6"></path><path d="M16 5c0-1.5-1-2.5-2.5-2.5S11 3.5 11 5"></path></svg></span><span class="fmfp-stat__body"><span class="fmfp-stat__value">2,800 MT</span><span class="fmfp-stat__label">Annual Production</span></span></li>
                  <li class="fmfp-stat"><span class="fmfp-stat__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M12 8c1.5 0 3 1 3 3 0 2.5-3 5-3 5s-3-2.5-3-5c0-2 1.5-3 3-3z"></path><path d="M12 8v8"></path></svg></span><span class="fmfp-stat__body"><span class="fmfp-stat__value">&#8377; 36 Cr</span><span class="fmfp-stat__label">Annual Revenue</span></span></li>
                  <li class="fmfp-stat"><span class="fmfp-stat__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span><span class="fmfp-stat__body"><span class="fmfp-stat__value">15&ndash;20 Months</span><span class="fmfp-stat__label">Payback Period</span></span></li>
                </ul>
              </section>
            </div>
          </div>

          <figure class="fmfp__media">
            <a href="#model-overview" class="fmfp-video" aria-label="Watch Model Overview video">
              <img src="images/tomato-model-overview.jpg" alt="Rows of ripe red tomato plants growing on vines inside a greenhouse" class="fmfp-video__img" loading="eager" width="1060" height="640">
              <span class="fmfp-video__play" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="currentColor">
                  <polygon points="7,4 20,12 7,20"></polygon>
                </svg>
              </span>
              <span class="fmfp-video__label">Watch Model Overview</span>
            </a>
          </figure>

          <div class="fmfp__tbs">
            <!-- Table 1 (0.25 Acre) -->
            <div class="fmfp-tb fmfp-tb--1">
              <table class="fmfp-table">
                <caption class="fmfp-sr">Financial projection for a 0.25 acre project over five years</caption>
                <colgroup><col class="fmfp-col-first"><col><col><col><col><col></colgroup>
                <thead><tr><th scope="col">Particulars</th><th scope="col">Year 1</th><th scope="col">Year 2</th><th scope="col">Year 3</th><th scope="col">Year 4</th><th scope="col">Year 5</th></tr></thead>
                <tbody>
                  <tr><th scope="row">Total Investment (&#8377;)</th><td>0.9 Cr</td><td>&ndash;</td><td>&ndash;</td><td>&ndash;</td><td>&ndash;</td></tr>
                  <tr><th scope="row">Annual Production (MT)</th><td>140</td><td>150</td><td>160</td><td>165</td><td>170</td></tr>
                  <tr><th scope="row">Annual Revenue (&#8377;)</th><td>1.8 Cr</td><td>1.9 Cr</td><td>2.1 Cr</td><td>2.2 Cr</td><td>2.3 Cr</td></tr>
                  <tr><th scope="row">Operating Expenses (&#8377;)</th><td>0.9 Cr</td><td>1.0 Cr</td><td>1.0 Cr</td><td>1.1 Cr</td><td>1.1 Cr</td></tr>
                  <tr class="fmfp-tr--hi"><th scope="row">Net Annual Income (&#8377;)</th><td>0.9 Cr</td><td>0.9 Cr</td><td>1.1 Cr</td><td>1.1 Cr</td><td>1.2 Cr</td></tr>
                  <tr><th scope="row">ROI</th><td>34%</td><td>38%</td><td>42%</td><td>45%</td><td>48%</td></tr>
                  <tr class="fmfp-tr--last"><th scope="row">Payback Period</th><td colspan="5">20&ndash;26 Months</td></tr>
                </tbody>
              </table>
            </div>

            <!-- Table 2 (0.5 Acre) -->
            <div class="fmfp-tb fmfp-tb--2">
              <table class="fmfp-table">
                <caption class="fmfp-sr">Financial projection for a 0.5 acre project over five years</caption>
                <colgroup><col class="fmfp-col-first"><col><col><col><col><col></colgroup>
                <thead><tr><th scope="col">Particulars</th><th scope="col">Year 1</th><th scope="col">Year 2</th><th scope="col">Year 3</th><th scope="col">Year 4</th><th scope="col">Year 5</th></tr></thead>
                <tbody>
                  <tr><th scope="row">Total Investment (&#8377;)</th><td>1.8 Cr</td><td>&ndash;</td><td>&ndash;</td><td>&ndash;</td><td>&ndash;</td></tr>
                  <tr><th scope="row">Annual Production (MT)</th><td>280</td><td>300</td><td>320</td><td>330</td><td>340</td></tr>
                  <tr><th scope="row">Annual Revenue (&#8377;)</th><td>3.6 Cr</td><td>3.8 Cr</td><td>4.1 Cr</td><td>4.3 Cr</td><td>4.5 Cr</td></tr>
                  <tr><th scope="row">Operating Expenses (&#8377;)</th><td>1.8 Cr</td><td>1.9 Cr</td><td>2.0 Cr</td><td>2.1 Cr</td><td>2.2 Cr</td></tr>
                  <tr class="fmfp-tr--hi"><th scope="row">Net Annual Income (&#8377;)</th><td>1.8 Cr</td><td>1.9 Cr</td><td>2.1 Cr</td><td>2.2 Cr</td><td>2.3 Cr</td></tr>
                  <tr><th scope="row">ROI</th><td>38%</td><td>42%</td><td>46%</td><td>48%</td><td>51%</td></tr>
                  <tr class="fmfp-tr--last"><th scope="row">Payback Period</th><td colspan="5">18&ndash;24 Months</td></tr>
                </tbody>
              </table>
            </div>

            <!-- Table 3 (1 Acre) -->
            <div class="fmfp-tb fmfp-tb--3">
              <table class="fmfp-table">
                <caption class="fmfp-sr">Financial projection for a 1 acre project over five years</caption>
                <colgroup><col class="fmfp-col-first"><col><col><col><col><col></colgroup>
                <thead><tr><th scope="col">Particulars</th><th scope="col">Year 1</th><th scope="col">Year 2</th><th scope="col">Year 3</th><th scope="col">Year 4</th><th scope="col">Year 5</th></tr></thead>
                <tbody>
                  <tr><th scope="row">Total Investment (&#8377;)</th><td>3.6 Cr</td><td>&ndash;</td><td>&ndash;</td><td>&ndash;</td><td>&ndash;</td></tr>
                  <tr><th scope="row">Annual Production (MT)</th><td>560</td><td>600</td><td>640</td><td>660</td><td>680</td></tr>
                  <tr><th scope="row">Annual Revenue (&#8377;)</th><td>7.2 Cr</td><td>7.6 Cr</td><td>8.2 Cr</td><td>8.6 Cr</td><td>9.0 Cr</td></tr>
                  <tr><th scope="row">Operating Expenses (&#8377;)</th><td>3.6 Cr</td><td>3.8 Cr</td><td>4.0 Cr</td><td>4.2 Cr</td><td>4.4 Cr</td></tr>
                  <tr class="fmfp-tr--hi"><th scope="row">Net Annual Income (&#8377;)</th><td>3.6 Cr</td><td>3.8 Cr</td><td>4.2 Cr</td><td>4.4 Cr</td><td>4.6 Cr</td></tr>
                  <tr><th scope="row">ROI</th><td>40%</td><td>44%</td><td>48%</td><td>50%</td><td>53%</td></tr>
                  <tr class="fmfp-tr--last"><th scope="row">Payback Period</th><td colspan="5">17&ndash;22 Months</td></tr>
                </tbody>
              </table>
            </div>

            <!-- Table 4 (2 Acre) -->
            <div class="fmfp-tb fmfp-tb--4">
              <table class="fmfp-table">
                <caption class="fmfp-sr">Financial projection for a 2 acre project over five years</caption>
                <colgroup><col class="fmfp-col-first"><col><col><col><col><col></colgroup>
                <thead><tr><th scope="col">Particulars</th><th scope="col">Year 1</th><th scope="col">Year 2</th><th scope="col">Year 3</th><th scope="col">Year 4</th><th scope="col">Year 5</th></tr></thead>
                <tbody>
                  <tr><th scope="row">Total Investment (&#8377;)</th><td>7.2 Cr</td><td>&ndash;</td><td>&ndash;</td><td>&ndash;</td><td>&ndash;</td></tr>
                  <tr><th scope="row">Annual Production (MT)</th><td>1,120</td><td>1,200</td><td>1,280</td><td>1,320</td><td>1,360</td></tr>
                  <tr><th scope="row">Annual Revenue (&#8377;)</th><td>14.4 Cr</td><td>15.2 Cr</td><td>16.4 Cr</td><td>17.2 Cr</td><td>18.0 Cr</td></tr>
                  <tr><th scope="row">Operating Expenses (&#8377;)</th><td>7.2 Cr</td><td>7.6 Cr</td><td>8.0 Cr</td><td>8.4 Cr</td><td>8.8 Cr</td></tr>
                  <tr class="fmfp-tr--hi"><th scope="row">Net Annual Income (&#8377;)</th><td>7.2 Cr</td><td>7.6 Cr</td><td>8.4 Cr</td><td>8.8 Cr</td><td>9.2 Cr</td></tr>
                  <tr><th scope="row">ROI</th><td>41%</td><td>45%</td><td>49%</td><td>51%</td><td>54%</td></tr>
                  <tr class="fmfp-tr--last"><th scope="row">Payback Period</th><td colspan="5">16&ndash;21 Months</td></tr>
                </tbody>
              </table>
            </div>

            <!-- Table 5 (5 Acre) -->
            <div class="fmfp-tb fmfp-tb--5">
              <table class="fmfp-table">
                <caption class="fmfp-sr">Financial projection for a 5 acre project over five years</caption>
                <colgroup><col class="fmfp-col-first"><col><col><col><col><col></colgroup>
                <thead><tr><th scope="col">Particulars</th><th scope="col">Year 1</th><th scope="col">Year 2</th><th scope="col">Year 3</th><th scope="col">Year 4</th><th scope="col">Year 5</th></tr></thead>
                <tbody>
                  <tr><th scope="row">Total Investment (&#8377;)</th><td>18 Cr</td><td>&ndash;</td><td>&ndash;</td><td>&ndash;</td><td>&ndash;</td></tr>
                  <tr><th scope="row">Annual Production (MT)</th><td>2,800</td><td>3,000</td><td>3,200</td><td>3,300</td><td>3,400</td></tr>
                  <tr><th scope="row">Annual Revenue (&#8377;)</th><td>36 Cr</td><td>38 Cr</td><td>41 Cr</td><td>43 Cr</td><td>45 Cr</td></tr>
                  <tr><th scope="row">Operating Expenses (&#8377;)</th><td>18 Cr</td><td>19 Cr</td><td>20 Cr</td><td>21 Cr</td><td>22 Cr</td></tr>
                  <tr class="fmfp-tr--hi"><th scope="row">Net Annual Income (&#8377;)</th><td>18 Cr</td><td>19 Cr</td><td>21 Cr</td><td>22 Cr</td><td>23 Cr</td></tr>
                  <tr><th scope="row">ROI</th><td>43%</td><td>47%</td><td>51%</td><td>53%</td><td>56%</td></tr>
                  <tr class="fmfp-tr--last"><th scope="row">Payback Period</th><td colspan="5">15&ndash;20 Months</td></tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>
        <!-- next block goes here -->
      </section>



	  <!-- ===================================================================
           What can you monitor & control? Complete Control at Every Stage
           =================================================================== -->
      <section class="fmmc" id="monitor-control">

        <!-- background photo: fills the whole banner (decorative) -->
        <picture class="fmmc__bg">
          <img class="fmmc__bg-img" src="images/gg4.png" alt="" aria-hidden="true" loading="lazy" width="1824"
            height="862">
        </picture>

        <div class="fmmc__inner">
          <div class="fmmc__content">

            <span class="fmmc-eyebrow"><span>How We Work Across &amp;Borders</span><i
                class="fmmc-eyebrow__line"></i></span>

            <h2 class="fm-heading fmmc__title">A Structured Journey from <br>Vision to Success</h2>

            <p class="fm-text fmmc__text">We combine global expertise with local insights to deliver practical, 
              commercially viable and sustainable farm solutions .</p>

			  <!-- <a href="#our-story" class="fm-cta-btn">
            View Technical Specifications
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a> -->

            <ul class="fmmc-steps">
              <li class="fmmc-step">
                <a class="fmmc-step__link is-active" href="#irrigation" aria-current="true">
                  <span class="fmmc-step__disc" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                    </svg>
                  </span>
                  <span class="fmmc-step__label">Discover</span>
                </a>
              </li>
              <li class="fmmc-step">
                <a class="fmmc-step__link" href="#nutrient-dosing">
                  <span class="fmmc-step__disc" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M6 3h12v3H6z"></path>
                      <path d="M7 6v13a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V6"></path>
                      <line x1="10" y1="11" x2="14" y2="11"></line>
                      <line x1="10" y1="15" x2="13" y2="15"></line>
                    </svg>
                  </span>
                  <span class="fmmc-step__label">Evaluate</span>
                </a>
              </li>
              <li class="fmmc-step">
                <a class="fmmc-step__link" href="#ec-ph">
                  <span class="fmmc-step__disc" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M14.5 2v17.5c0 1.4-1.1 2.5-2.5 2.5s-2.5-1.1-2.5-2.5V2"></path>
                      <path d="M8.5 2h7"></path>
                      <path d="M9.5 9h5"></path>
                      <path d="M9.5 14h5"></path>
                    </svg>
                  </span>
                  <span class="fmmc-step__label">Plan</span>
                </a>
              </li>
              <li class="fmmc-step">
                <a class="fmmc-step__link" href="#temperature-humidity">
                  <span class="fmmc-step__disc" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z"></path>
                    </svg>
                  </span>
                  <span class="fmmc-step__label">Design</span>
                </a>
              </li>
              <li class="fmmc-step">
                <a class="fmmc-step__link" href="#farm-data-alerts">
                  <span class="fmmc-step__disc" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                      <polyline points="9 22 9 12 15 12 15 22"></polyline>
                      <circle cx="12" cy="7" r="1"></circle>
                    </svg>
                  </span>
                  <span class="fmmc-step__label">Support</span>
                </a>
              </li>
            </ul>

          </div>
        </div>
      </section>

      <!-- ===================================================================
           04. Commercial & Operational Considerations (.fmcc)
           =================================================================== -->
      <section class="fmcc" id="commercial-considerations">
        <div class="fmcc__inner">

          <header class="fmcc__head">
            <span class="fmcc-eyebrow"><span class="fmcc-eyebrow__no">04</span><i class="fmcc-eyebrow__line"></i><span class="fmcc-eyebrow__label">Commercial &amp; Operational Considerations</span></span>
            <h2 class="fm-heading fmcc__title">Plan for Sustainable<br>Profitability.</h2>
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
              <h3 class="fmcc-fact__title">Crop Cycle</h3>
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
              <h3 class="fmcc-fact__title">Market Channels</h3>
              <p class="fm-text fmcc-fact__text">Local, domestic &amp; export markets</p>
            </li>
            <li class="fmcc-fact">
              <span class="fmcc-fact__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="7" r="4"/>
                  <path d="M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"/>
                </svg>
              </span>
              <h3 class="fmcc-fact__title">Labour Requirement</h3>
              <p class="fm-text fmcc-fact__text">Skilled &amp; semi-skilled workforce</p>
            </li>
            <li class="fmcc-fact">
              <span class="fmcc-fact__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/>
                </svg>
              </span>
              <h3 class="fmcc-fact__title">Water &amp; Power</h3>
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
              <h3 class="fmcc-fact__title">Key Risks</h3>
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
@endsection
