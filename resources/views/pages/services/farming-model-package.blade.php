@extends('layouts.app')

@section('title', 'Compare Models at a Glance | Investment & Returns Comparison | Future Agri Infra')
@section('meta_description', 'Compare investment, returns, yearly ROI and payback period across all six protected farming models at a glance.')
@section('body_class', 'protected-page')

@section('content')
<section class="fmmg" id="compare-models">
  <div class="fmmg__inner">

    <header class="fmmg__head">
      <div class="fmmg__intro">
        <span class="fmmg-eyebrow"><i class="fmmg-eyebrow__line"></i><span class="fmmg-eyebrow__label">Investment &amp; Returns Comparison</span></span>
        <h2 class="fm-heading fmmg__title">Compare Models at a Glance</h2>
        <p class="fm-text fmmg__text">Get a quick view of investment, returns and payback period across all six models.</p>
      </div>
      <label class="fmmg-pick">
        <span class="fmmg-pick__label">Select Farm Size</span>
        <span class="fmmg-pick__box">
          <select class="fmmg-pick__select" name="fmmg-size">
            <option value="0.25">0.25 Acre (&asymp; 10,890 sq. ft.)</option>
            <option value="0.5">0.5 Acre (&asymp; 21,780 sq. ft.)</option>
            <option value="1" selected>1 Acre (&asymp; 43,560 sq. ft.)</option>
            <option value="2">2 Acre (&asymp; 87,120 sq. ft.)</option>
            <option value="5">5 Acre (&asymp; 217,800 sq. ft.)</option>
          </select>
          <span class="fmmg-pick__chev" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </span>
        </span>
      </label>
    </header>

    <div class="fmmg-table">
      <table class="fmmg-t">
        <caption class="fmmg-sr">Comparison of six farming models for a 1 acre farm: approximate investment, annual income, yearly ROI and payback period</caption>
        <colgroup><col class="fmmg-c1"><col class="fmmg-c2"><col class="fmmg-c3"><col class="fmmg-c4"><col class="fmmg-c5"></colgroup>
        <thead>
          <tr><th scope="col">Farming Model</th><th scope="col">Approx. Investment (&#8377;)</th><th scope="col">Annual Income (&#8377;)</th><th scope="col">ROI (Yearly)</th><th scope="col">Payback Period</th></tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><span class="fmmg-no">01</span><span class="fmmg-name">Outdoor Hydroponics</span></th>
            <td data-label="Approx. Investment (&#8377;)">&#8377; 1.2 &ndash; 1.6 Cr</td>
            <td data-label="Annual Income (&#8377;)">&#8377; 36 &ndash; 48 L</td>
            <td data-label="ROI (Yearly)">24 &ndash; 32%</td>
            <td data-label="Payback Period">3.0 &ndash; 4.0 Years</td>
          </tr>
          <tr>
            <th scope="row"><span class="fmmg-no">02</span><span class="fmmg-name">Indoor Hydroponics</span></th>
            <td data-label="Approx. Investment (&#8377;)">&#8377; 3.0 &ndash; 4.0 Cr</td>
            <td data-label="Annual Income (&#8377;)">&#8377; 90 &ndash; 120 L</td>
            <td data-label="ROI (Yearly)">28 &ndash; 36%</td>
            <td data-label="Payback Period">2.5 &ndash; 3.5 Years</td>
          </tr>
          <tr>
            <th scope="row"><span class="fmmg-no">03</span><span class="fmmg-name">NVPH + Cocopeat Growbags</span></th>
            <td data-label="Approx. Investment (&#8377;)">&#8377; 90 L &ndash; 1.2 Cr</td>
            <td data-label="Annual Income (&#8377;)">&#8377; 28 &ndash; 38 L</td>
            <td data-label="ROI (Yearly)">26 &ndash; 32%</td>
            <td data-label="Payback Period">3.0 &ndash; 4.0 Years</td>
          </tr>
          <tr>
            <th scope="row"><span class="fmmg-no">04</span><span class="fmmg-name">NVPH + Soil-Based</span></th>
            <td data-label="Approx. Investment (&#8377;)">&#8377; 60 &ndash; 90 L</td>
            <td data-label="Annual Income (&#8377;)">&#8377; 18 &ndash; 26 L</td>
            <td data-label="ROI (Yearly)">24 &ndash; 30%</td>
            <td data-label="Payback Period">3.0 &ndash; 4.5 Years</td>
          </tr>
          <tr>
            <th scope="row"><span class="fmmg-no">05</span><span class="fmmg-name">Nethouse + Soil-Based</span></th>
            <td data-label="Approx. Investment (&#8377;)">&#8377; 40 &ndash; 70 L</td>
            <td data-label="Annual Income (&#8377;)">&#8377; 12 &ndash; 20 L</td>
            <td data-label="ROI (Yearly)">22 &ndash; 28%</td>
            <td data-label="Payback Period">3.0 &ndash; 4.5 Years</td>
          </tr>
          <tr class="fmmg-tr--hi">
            <th scope="row"><span class="fmmg-no fmmg-no--empty" aria-hidden="true"></span><span class="fmmg-name">Glasshouse + Hydroponics</span></th>
            <td data-label="Approx. Investment (&#8377;)">&#8377; 4.0 &ndash; 6.0 Cr</td>
            <td data-label="Annual Income (&#8377;)">&#8377; 1.2 &ndash; 1.8 Cr</td>
            <td data-label="ROI (Yearly)">30 &ndash; 38%</td>
            <td data-label="Payback Period">2.5 &ndash; 3.5 Years</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="fmmg-band">
      <h3 class="fm-heading fmmg-band__title">Find the Right Model<br>for <span class="fmmg__accent">Your Land</span></h3>
      <ul class="fmmg-facts">
        <li class="fmmg-fact">
          <span class="fmmg-fact__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M8 3l4 8 5-5 5 15H2L8 3z"/>
            </svg>
          </span>
          <span class="fmmg-fact__label">Climate &amp;<br>Location</span>
        </li>
        <li class="fmmg-fact">
          <span class="fmmg-fact__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/>
            </svg>
          </span>
          <span class="fmmg-fact__label">Water<br>Availability</span>
        </li>
        <li class="fmmg-fact">
          <span class="fmmg-fact__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 3h6v2H5v4H3V3zm18 0h-6v2h4v4h2V3zM3 21h6v-2H5v-4H3v6zm18 0h-6v-2h4v-4h2v6zM7 12h10"/>
            </svg>
          </span>
          <span class="fmmg-fact__label">Land<br>Area</span>
        </li>
        <li class="fmmg-fact">
          <span class="fmmg-fact__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M7 20h10"/>
              <path d="M10 20c0-5 3-7 6-7 0-4-3-7-7-7-4 0-7 3-7 7 0 3 2 5 4 7"/>
              <path d="M12 13c3-1 6-4 6-8-4 0-7 3-8 6"/>
            </svg>
          </span>
          <span class="fmmg-fact__label">Crop<br>Preference</span>
        </li>
        <li class="fmmg-fact">
          <span class="fmmg-fact__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <ellipse cx="12" cy="5" rx="9" ry="3"/>
              <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/>
              <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>
            </svg>
          </span>
          <span class="fmmg-fact__label">Investment<br>Capacity</span>
        </li>
        <li class="fmmg-fact">
          <span class="fmmg-fact__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="3"/>
              <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/>
            </svg>
          </span>
          <span class="fmmg-fact__label">Operational<br>Capability</span>
        </li>
      </ul>
    </div>

  </div>
  <!-- next block goes here -->
</section>
@endsection
