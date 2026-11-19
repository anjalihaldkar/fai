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



			<!-- Plan Your Farm Section -->
		<section class="fmfp-wizard" id="plan-your-farm" data-fmfp>

			<!-- background photo (decorative) -->
			<figure class="fmfp__bg" aria-hidden="true"><img src="images/farm4.jpeg" alt="" loading="eager" width="1600"
					height="700"></figure>

			<div class="fmfp__inner">

				<!-- HEADER -->
				<header class="fmfp__head">
					<div class="fmfp-eyebrow"><i class="fmfp-eyebrow__line" aria-hidden="true"></i><span>Plan Your
							Farm</span></div>
					<h2 class="fm-heading fmfp__title">Create Your<br><span class="fmdm__accent">Farm Plan</span></h2>
					<p class="fm-text fmfp__text">A few simple inputs to get a personalized farm plan with crop
						suggestions, estimated investment and expected returns.</p>
				</header>


				<!-- LEFT: FORM CARD -->
				<form class="fmfp-form" id="fmfp-form" action="#" method="post" novalidate data-fmfp-form>

					<!-- stepper -->
					<ol class="fmfp-steps">
						<li class="fmfp-steps__item"><button type="button" class="fmfp-step is-active" data-fmfp-step
								aria-current="step"><span class="fmfp-step__no">01</span><span
									class="fmfp-step__txt"><b>Your Land</b><i>Location &amp; size</i></span></button>
						</li>
						<li class="fmfp-steps__item"><button type="button" class="fmfp-step" data-fmfp-step><span
									class="fmfp-step__no">02</span><span
									class="fmfp-step__txt"><b>Resources</b><i>Water, soil &amp;
										power</i></span></button></li>
						<li class="fmfp-steps__item"><button type="button" class="fmfp-step" data-fmfp-step><span
									class="fmfp-step__no">03</span><span
									class="fmfp-step__txt"><b>Preferences</b><i>Crops &amp; growing
										method</i></span></button></li>
						<li class="fmfp-steps__item"><button type="button" class="fmfp-step" data-fmfp-step><span
									class="fmfp-step__no">04</span><span class="fmfp-step__txt"><b>Get
										Plan</b><i>Results &amp; recommendation</i></span></button></li>
					</ol>
					<div class="fmfp-progress" aria-hidden="true"><span class="fmfp-progress__bar" data-fmfp-bar></span>
					</div>

					<!-- PANEL 1: Your Land -->
					<section class="fmfp-panel" data-fmfp-panel data-fmfp-next-label="Next: Resources">
						<header class="fmfp-panel__head">
							<span class="fm-heading fmfp-panel__no">01</span>
							<div>
								<h3 class="fm-heading fmfp-panel__title">Tell us about your land</h3>
								<p class="fm-text fmfp-panel__sub">This helps us understand what can work best at your
									location.</p>
							</div>
						</header>
						<div class="fmfp-grid">
							<label class="fmfp-field"><span class="fmfp-field__icon"><svg viewBox="0 0 24 24"
										fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
										<circle cx="12" cy="10" r="3"></circle>
									</svg></span><span class="fmfp-field__main"><span
										class="fmfp-field__label">Location</span><input class="fmfp-field__control"
										type="text" name="location" value="Pune, Maharashtra" required></span></label>
							<div class="fmfp-field fmfp-field--split"><span class="fmfp-field__icon"><svg
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
										stroke-linecap="round" stroke-linejoin="round">
										<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
										<line x1="3" y1="9" x2="21" y2="9"></line>
										<line x1="9" y1="21" x2="9" y2="9"></line>
									</svg></span><label class="fmfp-field__main"><span class="fmfp-field__label">Land
										Area</span><input class="fmfp-field__control" type="number" name="area"
										value="2" min="0.1" step="0.1" required></label><span
									class="fmfp-field__sep"></span><label class="fmfp-field__unit"><span
										class="fmfp-sr">Unit</span><select class="fmfp-field__control" name="unit">
										<option>Acres</option>
										<option>Hectares</option>
										<option>Guntha</option>
									</select><span class="fmfp-field__chev"><svg viewBox="0 0 24 24" fill="none"
											stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
											stroke-linejoin="round">
											<polyline points="6 9 12 15 18 9"></polyline>
										</svg></span></label></div>
							<label class="fmfp-field fmfp-field--select"><span class="fmfp-field__icon"><svg
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
										stroke-linecap="round" stroke-linejoin="round">
										<path d="M8 3l4 8 5-5 5 15H2L8 3z"></path>
									</svg></span><span class="fmfp-field__main"><span class="fmfp-field__label">Land
										Type</span><select class="fmfp-field__control" name="landtype" required>
										<option>Plain</option>
										<option>Sloping</option>
										<option>Hilly</option>
									</select></span><span class="fmfp-field__chev"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<polyline points="6 9 12 15 18 9"></polyline>
									</svg></span></label>
							<label class="fmfp-field fmfp-field--select"><span class="fmfp-field__icon"><svg
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
										stroke-linecap="round" stroke-linejoin="round">
										<path d="M12 22v-9" />
										<path d="M12 13C7 13 4 8 4 5c4 0 8 2 8 8Z" />
										<path d="M12 13c5 0 8-5 8-8-4 0-8 2-8 8Z" />
									</svg></span><span class="fmfp-field__main"><span class="fmfp-field__label">Previous
										Crop (Optional)</span><select class="fmfp-field__control" name="prevcrop">
										<option>Tomato</option>
										<option>Wheat</option>
										<option>Sugarcane</option>
										<option>None</option>
									</select></span><span class="fmfp-field__chev"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<polyline points="6 9 12 15 18 9"></polyline>
									</svg></span></label>
						</div>
					</section>

					<!-- PANEL 2: Resources -->
					<section class="fmfp-panel" data-fmfp-panel data-fmfp-next-label="Next: Preferences" hidden>
						<header class="fmfp-panel__head">
							<span class="fm-heading fmfp-panel__no">02</span>
							<div>
								<h3 class="fm-heading fmfp-panel__title">Share your resources</h3>
								<p class="fm-text fmfp-panel__sub">Water, soil and power decide what will grow best.</p>
							</div>
						</header>
						<div class="fmfp-grid">
							<label class="fmfp-field fmfp-field--select"><span class="fmfp-field__icon"><svg
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
										stroke-linecap="round" stroke-linejoin="round">
										<path
											d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z">
										</path>
									</svg></span><span class="fmfp-field__main"><span class="fmfp-field__label">Water
										Source</span><select class="fmfp-field__control" name="water" required>
										<option value="Borewell" selected>Borewell</option>
										<option>Canal</option>
										<option>River</option>
										<option>None</option>
									</select></span><span class="fmfp-field__chev"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<polyline points="6 9 12 15 18 9"></polyline>
									</svg></span></label>
							<label class="fmfp-field fmfp-field--select"><span class="fmfp-field__icon"><svg
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
										stroke-linecap="round" stroke-linejoin="round">
										<circle cx="12" cy="12" r="10"></circle>
										<polyline points="12 6 12 12 16 14"></polyline>
									</svg></span><span class="fmfp-field__main"><span class="fmfp-field__label">Water
										Availability</span><select class="fmfp-field__control" name="wateravail"
										required>
										<option value="Year-round" selected>Year-round</option>
										<option>Seasonal</option>
									</select></span><span class="fmfp-field__chev"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<polyline points="6 9 12 15 18 9"></polyline>
									</svg></span></label>
							<label class="fmfp-field fmfp-field--select"><span class="fmfp-field__icon"><svg
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
										stroke-linecap="round" stroke-linejoin="round">
										<path d="M12 2v20"></path>
										<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
									</svg></span><span class="fmfp-field__main"><span class="fmfp-field__label">Soil
										Type</span><select class="fmfp-field__control" name="soil" required>
										<option value="Black Cotton" selected>Black Cotton</option>
										<option>Red Soil</option>
										<option>Alluvial</option>
										<option>Sandy</option>
									</select></span><span class="fmfp-field__chev"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<polyline points="6 9 12 15 18 9"></polyline>
									</svg></span></label>
							<label class="fmfp-field fmfp-field--select"><span class="fmfp-field__icon"><svg
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
										stroke-linecap="round" stroke-linejoin="round">
										<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
									</svg></span><span class="fmfp-field__main"><span class="fmfp-field__label">Power
										Availability</span><select class="fmfp-field__control" name="power" required>
										<option value="Grid" selected>Grid</option>
										<option>Solar</option>
										<option>Both</option>
										<option>None</option>
									</select></span><span class="fmfp-field__chev"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<polyline points="6 9 12 15 18 9"></polyline>
									</svg></span></label>
						</div>
					</section>

					<!-- PANEL 3: Preferences -->
					<section class="fmfp-panel" data-fmfp-panel data-fmfp-next-label="Next: Get Plan" hidden>
						<header class="fmfp-panel__head">
							<span class="fm-heading fmfp-panel__no">03</span>
							<div>
								<h3 class="fm-heading fmfp-panel__title">Choose your preferences</h3>
								<p class="fm-text fmfp-panel__sub">Tell us what you want to grow and how.</p>
							</div>
						</header>
						<div class="fmfp-grid">
							<label class="fmfp-field fmfp-field--select"><span class="fmfp-field__icon"><svg
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
										stroke-linecap="round" stroke-linejoin="round">
										<path d="M12 22v-9" />
										<path d="M12 13C7 13 4 8 4 5c4 0 8 2 8 8Z" />
										<path d="M12 13c5 0 8-5 8-8-4 0-8 2-8 8Z" />
									</svg></span><span class="fmfp-field__main"><span
										class="fmfp-field__label">Preferred Crop</span><select
										class="fmfp-field__control" name="crop" required>
										<option value="Capsicum" selected>Capsicum</option>
										<option>Tomato</option>
										<option>Lettuce</option>
										<option>Cucumber</option>
									</select></span><span class="fmfp-field__chev"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<polyline points="6 9 12 15 18 9"></polyline>
									</svg></span></label>
							<label class="fmfp-field fmfp-field--select"><span class="fmfp-field__icon"><svg
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
										stroke-linecap="round" stroke-linejoin="round">
										<path d="M3 21h18"></path>
										<path d="M4 21V5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v16"></path>
										<path d="M9 21v-4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v4"></path>
									</svg></span><span class="fmfp-field__main"><span class="fmfp-field__label">Growing
										Method</span><select class="fmfp-field__control" name="method" required>
										<option value="Polyhouse" selected>Polyhouse</option>
										<option>Hydroponic</option>
										<option>Net House</option>
										<option>Open Field</option>
									</select></span><span class="fmfp-field__chev"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<polyline points="6 9 12 15 18 9"></polyline>
									</svg></span></label>
							<label class="fmfp-field fmfp-field--select"><span class="fmfp-field__icon"><svg
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
										stroke-linecap="round" stroke-linejoin="round">
										<circle cx="12" cy="12" r="10"></circle>
										<path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"></path>
										<path d="M12 18V6"></path>
									</svg></span><span class="fmfp-field__main"><span class="fmfp-field__label">Budget
										Range</span><select class="fmfp-field__control" name="budget" required>
										<option value="25 - 50 Lakhs" selected>25 - 50 Lakhs</option>
										<option>&lt; 10 Lakhs</option>
										<option>10 - 25 Lakhs</option>
										<option>&gt; 50 Lakhs</option>
									</select></span><span class="fmfp-field__chev"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<polyline points="6 9 12 15 18 9"></polyline>
									</svg></span></label>
							<label class="fmfp-field fmfp-field--select"><span class="fmfp-field__icon"><svg
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
										stroke-linecap="round" stroke-linejoin="round">
										<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
										<circle cx="12" cy="7" r="4"></circle>
									</svg></span><span class="fmfp-field__main"><span class="fmfp-field__label">Farming
										Experience</span><select class="fmfp-field__control" name="experience" required>
										<option value="Intermediate" selected>Intermediate</option>
										<option>Beginner</option>
										<option>Expert</option>
									</select></span><span class="fmfp-field__chev"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<polyline points="6 9 12 15 18 9"></polyline>
									</svg></span></label>
						</div>
					</section>

					<!-- PANEL 4: Get Plan -->
					<section class="fmfp-panel" data-fmfp-panel data-fmfp-next-label="Get My Farm Plan" hidden>
						<header class="fmfp-panel__head">
							<span class="fm-heading fmfp-panel__no">04</span>
							<div>
								<h3 class="fm-heading fmfp-panel__title">Almost there</h3>
								<p class="fm-text fmfp-panel__sub">Where should we send your personalised farm plan?</p>
							</div>
						</header>
						<div class="fmfp-grid">
							<label class="fmfp-field"><span class="fmfp-field__icon"><svg viewBox="0 0 24 24"
										fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
										<circle cx="12" cy="7" r="4"></circle>
									</svg></span><span class="fmfp-field__main"><span class="fmfp-field__label">Full
										Name</span><input class="fmfp-field__control" type="text" name="name" required
										placeholder="e.g. Ramesh Patel" value="Ramesh Patel"></span></label>
							<label class="fmfp-field"><span class="fmfp-field__icon"><svg viewBox="0 0 24 24"
										fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<path
											d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
										</path>
									</svg></span><span class="fmfp-field__main"><span class="fmfp-field__label">Phone
										Number</span><input class="fmfp-field__control" type="tel" name="phone" required
										pattern="^[0-9]{10}$" placeholder="9876543210" value="9876543210"></span></label>
							<label class="fmfp-field"><span class="fmfp-field__icon"><svg viewBox="0 0 24 24"
										fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<path
											d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
										</path>
										<polyline points="22,6 12,13 2,6"></polyline>
									</svg></span><span class="fmfp-field__main"><span class="fmfp-field__label">Email
										Address</span><input class="fmfp-field__control" type="email" name="email"
										required placeholder="john@example.com" value="grower@farm.com"></span></label>
							<label class="fmfp-field fmfp-field--select"><span class="fmfp-field__icon"><svg
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
										stroke-linecap="round" stroke-linejoin="round">
										<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
									</svg></span><span class="fmfp-field__main"><span
										class="fmfp-field__label">Preferred Contact</span><select
										class="fmfp-field__control" name="contact" required>
										<option value="WhatsApp" selected>WhatsApp</option>
										<option>Call</option>
										<option>Email</option>
									</select></span><span class="fmfp-field__chev"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<polyline points="6 9 12 15 18 9"></polyline>
									</svg></span></label>
						</div>
					</section>

					<p class="fmfp-error" role="alert" data-fmfp-error hidden>Please fill in the highlighted fields.</p>

					<!-- actions -->
					<div class="fmfp-actions">
						<button type="button" class="fm-cta-btn fmfp-next" data-fmfp-next><span
								data-fmfp-btn-label>Next: Resources</span><span class="fmfp-next__arrow"
								aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
									stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
									<line x1="5" y1="12" x2="19" y2="12"></line>
									<polyline points="12 5 19 12 12 19"></polyline>
								</svg></span></button>
						<button type="button" class="fmfp-ghost" data-fmfp-sample><span class="fmfp-ghost__icon"
								aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
									stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
									<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
									<circle cx="12" cy="12" r="3"></circle>
								</svg></span>See a sample result</button>
						<button type="button" class="fmfp-ghost" data-fmfp-back hidden>Back</button>
					</div>
				</form>

				<!-- RIGHT: PREVIEW CARD -->
				<aside class="fmfp-prev" data-fmfp-preview aria-label="Farm plan preview">
					<header class="fmfp-prev__head">
						<span class="fmfp-prev__head-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
								<path d="M12 22v-9" />
								<path d="M12 13C7 13 4 8 4 5c4 0 8 2 8 8Z" />
								<path d="M12 13c5 0 8-5 8-8-4 0-8 2-8 8Z" />
							</svg></span>
						<div>
							<p class="fmfp-prev__title">Your Farm Plan Preview</p>
							<p class="fmfp-prev__sub">Based on sample inputs</p>
						</div>
					</header>
					<ul class="fmfp-prev__rows">
						<li class="fmfp-row"><span class="fmfp-row__icon"><svg viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
									stroke-linejoin="round">
									<path d="M12 22v-9" />
									<path d="M12 13C7 13 4 8 4 5c4 0 8 2 8 8Z" />
									<path d="M12 13c5 0 8-5 8-8-4 0-8 2-8 8Z" />
								</svg></span><span class="fmfp-row__lbl">Recommended Crop</span><strong
								class="fmfp-row__val" data-fmfp-out="crop">Capsicum</strong></li>
						<li class="fmfp-row"><span class="fmfp-row__icon"><svg viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
									stroke-linejoin="round">
									<path d="M3 21h18"></path>
									<path d="M4 21V5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v16"></path>
									<path d="M9 21v-4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v4"></path>
								</svg></span><span class="fmfp-row__lbl">Recommended Model</span><strong
								class="fmfp-row__val" data-fmfp-out="model">Polyhouse</strong></li>
						<li class="fmfp-row"><span class="fmfp-row__icon"><svg viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
									stroke-linejoin="round">
									<circle cx="12" cy="12" r="10"></circle>
									<path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"></path>
									<path d="M12 18V6"></path>
								</svg></span><span class="fmfp-row__lbl">Estimated Investment</span><strong
								class="fmfp-row__val" data-fmfp-out="invest">₹25 - 40 Lakhs</strong></li>
						<li class="fmfp-row"><span class="fmfp-row__icon"><svg viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
									stroke-linejoin="round">
									<line x1="18" y1="20" x2="18" y2="10"></line>
									<line x1="12" y1="20" x2="12" y2="4"></line>
									<line x1="6" y1="20" x2="6" y2="14"></line>
									<polyline points="3 14 8 10 12 14 21 3"></polyline>
								</svg></span><span class="fmfp-row__lbl">Estimated ROI</span><strong
								class="fmfp-row__val" data-fmfp-out="roi">2.5 - 3.5 Years</strong></li>
						<li class="fmfp-row"><span class="fmfp-row__icon"><svg viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
									stroke-linejoin="round">
									<polyline points="15 3 21 3 21 9"></polyline>
									<polyline points="9 21 3 21 3 15"></polyline>
									<line x1="21" y1="3" x2="14" y2="10"></line>
									<line x1="3" y1="21" x2="10" y2="14"></line>
								</svg></span><span class="fmfp-row__lbl">Suggested Scale</span><strong
								class="fmfp-row__val" data-fmfp-out="scale">2 Acres</strong></li>
					</ul>
					<a class="fmfp-prev__cta" href="#contact">
						<span class="fmfp-prev__cta-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
								<line x1="18" y1="20" x2="18" y2="10"></line>
								<line x1="12" y1="20" x2="12" y2="4"></line>
								<line x1="6" y1="20" x2="6" y2="14"></line>
								<polyline points="3 14 8 10 12 14 21 3"></polyline>
							</svg></span>
						<span class="fmfp-prev__cta-text">Get a detailed farm plan with crop options, cost breakup and
							expected returns.</span>
						<span class="fmfp-prev__cta-go" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
								<line x1="5" y1="12" x2="19" y2="12"></line>
								<polyline points="12 5 19 12 12 19"></polyline>
							</svg></span>
					</a>
				</aside>

			</div>
		</section>
@endsection
