@extends('layouts.app')

@section('title', 'Farm Agronomy Services & Crop Management Support | Future Agri Infra')
@section('meta_description', 'Explore farm agronomy services from Future Agri Infra, including crop planning, nutrient management, irrigation, integrated pest management and technical support for protected cultivation in India.')
@section('body_class', 'protected-page agronomy-page')

@push('head')
    @verbatim
    <script
		type="application/ld+json">{"@context": "https://schema.org", "@type": "Service", "name": "Farm Agronomy Support", "serviceType": "Agronomy and crop management support", "description": "Farm agronomy services for protected cultivation projects, including crop planning and scheduling, nutrient management, irrigation and fertigation guidance, integrated pest management and scheduled technical visits.", "provider": {"@type": "Organization", "name": "Future Agri Infra", "url": "https://www.futureagriinfra.com/", "email": "info@futureagriinfra.in", "telephone": "+91 99980 94201"}, "areaServed": {"@type": "Country", "name": "India"}}</script>
    @endverbatim
@endpush

@section('content')
<section class="fm-section fmab" id="about-us">
			<!-- background photo -->
			<div class="fmab__media">
				<img src="images/banner3.jpeg" alt="Protected cultivation polyhouse with lush green crops"
					class="fmab__img" loading="eager">
			</div>

			<div class="fmab__inner">
				<!-- LEFT: text -->
				<div class="fmab__content">
					<span class="fmab-eyebrow">Agronomy Support<i class="fmab-eyebrow__line"></i></span>

					<h1 class="fm-heading fmab__title">
						Farm Agronomy & <br><span class="fmdm__accent">Crop Management Support</span>
					</h1>

					<p class="fm-text fmab__text">
						Keep your crops on track with practical agronomy support for crop planning, nutrition,
						irrigation and crop health. Future Agri Infra supports protected cultivation projects with
						technical guidance tailored to your farm.
					</p>

					<a href="#step-requirement" class="fm-cta-btn">
						Explore Agronomy Support
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
							stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg>
					</a>
				</div>


			</div>
		</section>



		<section class="fmur" id="step-requirement">
			<div class="fmur__inner">

				<!-- LEFT RAIL: 01 + node + line (decorative) -->
				<div class="fmur-rail" aria-hidden="true">
					<span class="fm-heading fmur-rail__no">01</span>
					<span class="fmur-rail__node"></span>
					<span class="fmur-rail__line"></span>
				</div>

				<!-- COLUMN 1: text -->
				<div class="fmur__content">
					<h2 class="fm-heading ">What Our Agronomy <br><span class="fmdm__accent">Support Covers</span></h2>

					<p class="fm-text fmur__text">Good crop performance depends on the right decisions at every stage.
						Our agronomy support brings crop planning, nutrient and water management, and crop protection
						together for your growing system.</p>

					<a href="#contact" class="fm-cta-btn">
						Explore Our Services
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
							stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg>
					</a>
				</div>

				<!-- COLUMN 2: illustration (ONE image) -->
				<figure class="fmur__media">
					<!-- Using a placeholder but setting proper dimensions as required -->
					<img src="images/turnkey1.png" alt="Agronomy support for crop planning and protected cultivation"
						class="fmur__img" loading="eager" width="1100" height="980">
				</figure>

				<!-- COLUMN 3: four cards -->
				<ul class="fmur-cards">
					<li class="fmur-card">
						<span class="fmur-card__icon">
							<!-- Sprout/Leaf Icon -->
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
								<path d="M11 20A7 7 0 0 1 4 13C4 8 9 3 13 4a7 7 0 0 1 7 7c0 5-5 10-9 9z" />
								<path d="M11 20V12" />
							</svg>
						</span>
						<div class="fmur-card__body">
							<h3 class="fmur-card__title">Dedicated Agronomist</h3>
							<p class="fm-text fmur-card__text">On-farm assessment and practical recommendations for
								day-to-day crop management.</p>
						</div>
					</li>
					<li class="fmur-card">
						<span class="fmur-card__icon">
							<!-- Map Pin Icon -->
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
								<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
								<circle cx="12" cy="10" r="3"></circle>
							</svg>
						</span>
						<div class="fmur-card__body">
							<h3 class="fmur-card__title">Senior Agronomist Visit</h3>
							<p class="fm-text fmur-card__text">Periodic review of crop performance, growing conditions
								and key farm practices.</p>
						</div>
					</li>
					<li class="fmur-card">
						<span class="fmur-card__icon">
							<!-- Bar Chart Icon -->
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
								<line x1="18" y1="20" x2="18" y2="10"></line>
								<line x1="12" y1="20" x2="12" y2="4"></line>
								<line x1="6" y1="20" x2="6" y2="14"></line>
							</svg>
						</span>
						<div class="fmur-card__body">
							<h3 class="fmur-card__title">Daily Remote Support</h3>
							<p class="fm-text fmur-card__text">Timely online guidance to help your team address
								crop-related questions.</p>
						</div>
					</li>
					<li class="fmur-card">
						<span class="fmur-card__icon">
							<!-- Lightbulb Icon -->
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
								<path d="M9 18h6"></path>
								<path d="M10 22h4"></path>
								<path
									d="M15.09 14c.18-.98.65-1.74 1.41-2.5A4.65 4.65 0 0 0 18 8 6 6 0 0 0 6 8c0 1.5.5 2.8 1.5 3.5.76.76 1.23 1.52 1.41 2.5">
								</path>
							</svg>
						</span>
						<div class="fmur-card__body">
							<h3 class="fmur-card__title">Farm-Specific Guidance</h3>
							<p class="fm-text fmur-card__text">Recommendations aligned with your crop, structure and
								cultivation method.</p>
						</div>
					</li>
				</ul>

			</div>
		</section>

		<section class="fmvs" id="step-site-visit">
			<div class="fmvs__stage">

				<!-- BIG HERO IMAGE (one image, fades into the page on its right side) -->
				<figure class="fmvs__media">
					<img src="images/turnkey2.jpeg" alt="Agronomists assessing crop health and farm conditions"
						class="fmvs__img" loading="eager" width="1400" height="1100">
				</figure>

				<div class="fmvs__inner">

					<!-- COLUMN 1: four dark cards -->
					<ul class="fmvs-cards">
						<li class="fmvs-card">
							<span class="fmvs-card__icon">
								<!-- svg: map pin -->
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
									stroke-linejoin="round">
									<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
									<circle cx="12" cy="10" r="3"></circle>
								</svg>
							</span>
							<div class="fmvs-card__body">
								<h3 class="fmvs-card__title">Crop Planning</h3>
								<p class="fmvs-card__text">Select suitable crops and plan sowing, planting and
									harvesting schedules.</p>
							</div>
						</li>
						<li class="fmvs-card">
							<span class="fmvs-card__icon">
								<!-- svg: terrain / contour lines -->
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
									stroke-linejoin="round">
									<path d="M12 20h.01" />
									<path d="M8 20h.01" />
									<path d="M4 20h.01" />
									<path d="M2 14h20" />
									<path d="M2 8h20" />
								</svg>
							</span>
							<div class="fmvs-card__body">
								<h3 class="fmvs-card__title">Nutrition & Irrigation</h3>
								<p class="fmvs-card__text">Manage crop nutrition, irrigation and fertigation based on
									crop requirements.</p>
							</div>
						</li>
						<li class="fmvs-card">
							<span class="fmvs-card__icon">
								<!-- svg: checklist document -->
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
									stroke-linejoin="round">
									<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
									<polyline points="14 2 14 8 20 8"></polyline>
									<line x1="16" y1="13" x2="8" y2="13"></line>
									<line x1="16" y1="17" x2="8" y2="17"></line>
									<polyline points="10 9 9 9 8 9"></polyline>
								</svg>
							</span>
							<div class="fmvs-card__body">
								<h3 class="fmvs-card__title">Crop Health</h3>
								<p class="fmvs-card__text">Identify crop stress and manage pests and diseases through an
									integrated approach.</p>
							</div>
						</li>
						<li class="fmvs-card">
							<span class="fmvs-card__icon">
								<!-- svg: chat bubbles -->
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
									stroke-linejoin="round">
									<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
								</svg>
							</span>
							<div class="fmvs-card__body">
								<h3 class="fmvs-card__title">Farm Operations</h3>
								<p class="fmvs-card__text">Improve routine cultivation practices, crop handling and
									farm-level operations.</p>
							</div>
						</li>
					</ul>

					<!-- COLUMN 2: empty on purpose, the hero image shows through here -->
					<div class="fmvs__space" aria-hidden="true"></div>

					<!-- COLUMN 3: rail + text -->
					<div class="fmvs__content">

						<div class="fmvs-rail" aria-hidden="true">
							<span class="fm-heading fmvs-rail__no">02</span>
							<span class="fmvs-rail__node"></span>
							<span class="fmvs-rail__line"></span>
						</div>

						<div class="fmvs__copy">
							<span class="fmvs-eyebrow">Step 02</span>

							<h2 class="fm-heading ">Crop Planning & <span class="fmdm__accent">Crop Care</span></h2>

							<p class="fm-text fmvs__text">From crop selection to harvest planning, we help you follow a
								clear cultivation schedule. Guidance covers plant nutrition, irrigation and fertigation
								practices, and integrated pest and disease management.</p>

							<a href="#contact" class="fm-cta-btn">
								Discuss Your Crop Requirements
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round">
									<line x1="5" y1="12" x2="19" y2="12"></line>
									<polyline points="12 5 19 12 12 19"></polyline>
								</svg>
							</a>
						</div>
					</div>

				</div>
			</div>
		</section>



		<section class="fmur" id="step-project-design">
			<div class="fmur__inner">


				<!-- LEFT RAIL: 01 + node + line (decorative) -->
				<div class="fmur-rail" aria-hidden="true">
					<span class="fm-heading fmur-rail__no">03</span>
					<span class="fmur-rail__node"></span>
					<span class="fmur-rail__line"></span>
				</div>

				<!-- COLUMN 1: text -->
				<div class="fmur__content">
					<h2 class="fm-heading ">Agronomy Support<br><span class="fmdm__accent">That Fits Your Farm</span>
					</h2>

					<p class="fm-text fmur__text">Every farm has different supervision needs. Choose a support model
						based on your farm size, crop mix, in-house team and the level of technical involvement
						required.</p>

					<a href="#contact" class="fm-cta-btn">
						Talk to Our Agronomy Team
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
							stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg>
					</a>
				</div>

				<!-- COLUMN 2: illustration (ONE image) -->
				<figure class="fmur__media">
					<!-- Using a placeholder but setting proper dimensions as required -->
					<img src="images/img-3.png" alt="Agronomy support for crop planning and protected cultivation"
						class="fmur__img" loading="eager" width="1100" height="980">
				</figure>

				<!-- COLUMN 3: four cards -->
				<ul class="fmur-cards">
					<li class="fmur-card">
						<span class="fmur-card__icon">
							<!-- Sprout/Leaf Icon -->
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
								<path d="M11 20A7 7 0 0 1 4 13C4 8 9 3 13 4a7 7 0 0 1 7 7c0 5-5 10-9 9z" />
								<path d="M11 20V12" />
							</svg>
						</span>
						<div class="fmur-card__body">
							<h3 class="fmur-card__title">Dedicated Agronomist</h3>
							<p class="fm-text fmur-card__text">Regular on-site guidance for crop monitoring and farm
								teams.</p>
						</div>
					</li>
					<li class="fmur-card">
						<span class="fmur-card__icon">
							<!-- Map Pin Icon -->
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
								<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
								<circle cx="12" cy="10" r="3"></circle>
							</svg>
						</span>
						<div class="fmur-card__body">
							<h3 class="fmur-card__title">Senior Agronomist Visit</h3>
							<p class="fm-text fmur-card__text">Experienced review of crop condition, practices and
								improvement areas.
							</p>
						</div>
					</li>
					<li class="fmur-card">
						<span class="fmur-card__icon">
							<!-- Bar Chart Icon -->
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
								<line x1="18" y1="20" x2="18" y2="10"></line>
								<line x1="12" y1="20" x2="12" y2="4"></line>
								<line x1="6" y1="20" x2="6" y2="14"></line>
							</svg>
						</span>
						<div class="fmur-card__body">
							<h3 class="fmur-card__title">Daily Remote Support</h3>
							<p class="fm-text fmur-card__text">Online assistance for routine crop queries between
								visits.</p>
						</div>
					</li>
					<li class="fmur-card">
						<span class="fmur-card__icon">
							<!-- Lightbulb Icon -->
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
								<path d="M9 18h6"></path>
								<path d="M10 22h4"></path>
								<path
									d="M15.09 14c.18-.98.65-1.74 1.41-2.5A4.65 4.65 0 0 0 18 8 6 6 0 0 0 6 8c0 1.5.5 2.8 1.5 3.5.76.76 1.23 1.52 1.41 2.5">
								</path>
							</svg>
						</span>
						<div class="fmur-card__body">
							<h3 class="fmur-card__title">Customized Farm Support</h3>
							<p class="fm-text fmur-card__text">A support plan shaped around your crops and operating
								needs.</p>
						</div>
					</li>
				</ul>

			</div>
		</section>


		<section class="fmvs" id="step-agronomy-process">
			<div class="fmvs__stage">



				<!-- BIG HERO IMAGE (one image, fades into the page on its right side) -->
				<figure class="fmvs__media">
					<img src="images/img-4.jpeg" alt="Agronomists assessing crop health and farm conditions"
						class="fmvs__img" loading="eager" width="1400" height="1100">
				</figure>

				<div class="fmvs__inner">

					<!-- COLUMN 1: four dark cards -->
					<ul class="fmvs-cards">
						<li class="fmvs-card">
							<span class="fmvs-card__icon">
								<!-- svg: map pin -->
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
									stroke-linejoin="round">
									<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
									<circle cx="12" cy="10" r="3"></circle>
								</svg>
							</span>
							<div class="fmvs-card__body">
								<h3 class="fmvs-card__title">Observe</h3>
								<p class="fmvs-card__text">Understand the crop, growing system and current farm
									conditions.</p>
							</div>
						</li>
						<li class="fmvs-card">
							<span class="fmvs-card__icon">
								<!-- svg: terrain / contour lines -->
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
									stroke-linejoin="round">
									<path d="M12 20h.01" />
									<path d="M8 20h.01" />
									<path d="M4 20h.01" />
									<path d="M2 14h20" />
									<path d="M2 8h20" />
								</svg>
							</span>
							<div class="fmvs-card__body">
								<h3 class="fmvs-card__title">Recommend</h3>
								<p class="fmvs-card__text">Set crop schedules and recommend suitable nutrition and
									irrigation practices.</p>
							</div>
						</li>
						<li class="fmvs-card">
							<span class="fmvs-card__icon">
								<!-- svg: checklist document -->
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
									stroke-linejoin="round">
									<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
									<polyline points="14 2 14 8 20 8"></polyline>
									<line x1="16" y1="13" x2="8" y2="13"></line>
									<line x1="16" y1="17" x2="8" y2="17"></line>
									<polyline points="10 9 9 9 8 9"></polyline>
								</svg>
							</span>
							<div class="fmvs-card__body">
								<h3 class="fmvs-card__title">Execute</h3>
								<p class="fmvs-card__text">Help your team apply recommended cultivation and crop
									protection practices.</p>
							</div>
						</li>
						<li class="fmvs-card">
							<span class="fmvs-card__icon">
								<!-- svg: chat bubbles -->
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
									stroke-linejoin="round">
									<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
								</svg>
							</span>
							<div class="fmvs-card__body">
								<h3 class="fmvs-card__title">Review</h3>
								<p class="fmvs-card__text">Review crop response and adjust recommendations where
									required.</p>
							</div>
						</li>
					</ul>

					<!-- COLUMN 2: empty on purpose, the hero image shows through here -->
					<div class="fmvs__space" aria-hidden="true"></div>

					<!-- COLUMN 3: rail + text -->
					<div class="fmvs__content">

						<div class="fmvs-rail" aria-hidden="true">
							<span class="fm-heading fmvs-rail__no">04</span>
							<span class="fmvs-rail__node"></span>
							<span class="fmvs-rail__line"></span>
						</div>

						<div class="fmvs__copy">
							<span class="fmvs-eyebrow">Step 04</span>

							<h2 class="fm-heading ">A Clear Approach to <span class="fmdm__accent">Better Crop
									Management</span></h2>

							<p class="fm-text fmvs__text">We begin by understanding your crops and growing conditions,
								then provide practical recommendations your farm team can follow. Progress is reviewed
								through scheduled technical interactions and updated guidance as crop needs change.</p>

							<a href="#contact" class="fm-cta-btn">
								Discuss Your Agronomy Needs
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round">
									<line x1="5" y1="12" x2="19" y2="12"></line>
									<polyline points="12 5 19 12 12 19"></polyline>
								</svg>
							</a>
						</div>
					</div>

				</div>
			</div>
		</section>
@endsection
