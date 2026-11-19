@extends('layouts.app')

@section('title', 'Agrotourism Farm Development & Planning in India | Future Agri Infra')
@section('meta_description', 'Plan your agrotourism farm with expert crop planning, feasibility and agricultural infrastructure support from Future Agri Infra.')
@section('body_class', 'protected-page agrotourism-page')

@push('head')
    @verbatim
    <script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "Service",
	  "name": "Agrotourism Planning and Agricultural Infrastructure",
	  "serviceType": "Agrotourism planning, farm feasibility and agricultural infrastructure",
	  "description": "Future Agri Infra supports agrotourism projects with site assessment, crop planning, protected cultivation and farm infrastructure. Hospitality and tourism permissions are outside the standard agricultural scope.",
	  "provider": {
	    "@type": "Organization",
	    "name": "Future Agri Infra",
	    "url": "https://www.futureagriinfra.com/",
	    "telephone": "+91-99980-94201",
	    "email": "info@futureagriinfra.in"
	  },
	  "areaServed": {
	    "@type": "Country",
	    "name": "India"
	  }
	}
	</script>
    @endverbatim
@endpush

@section('content')
<section class="fm-section fmab" id="about-us">
			<!-- background photo -->
			<div class="fmab__media">
				<img src="images/banner3.jpeg"
					alt="Protected cultivation greenhouse with healthy crop rows for an agriculture-led farm experience"
					class="fmab__img" loading="eager">
			</div>

			<div class="fmab__inner">
				<!-- LEFT: text -->
				<div class="fmab__content">
					<span class="fmab-eyebrow">AGROTOURISM & FARM-BASED EXPERIENCES<i
							class="fmab-eyebrow__line"></i></span>

					<h1 class="fm-heading fmab__title">
						Agrotourism <br><span class="fmdm__accent">Farm Planning & Development</span>
					</h1>

					<p class="fm-text fmab__text">
						Turn your land into an engaging farm experience. We help plan the crops, growing systems and
						agricultural infrastructure behind your agrotourism project.
					</p>

					<a href="#step-requirement" class="fm-cta-btn">
						Explore Farm Opportunities
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
							stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg>
					</a>
				</div>


			</div>
		</section>

		<!-- 
	<section class="fmtk" id="turnkey-requirement">
		<div class="fmtk__inner">
	
			<div class="fmtk__top">
	
				<div class="fmtk__content">
					<span class="fmtk-eyebrow"><i class="fmtk-eyebrow__line"></i>Turnkey Farm Development</span>
	
					<h2 class="fm-heading fmtk__title">Understanding<br><span class="fmtk__accent">Your Requirement</span></h2>
	
					<p class="fm-text fmtk__text">We start by understanding your goals, land details, preferred crops, budget and long-term vision. Our experts listen, analyze and guide you with the right opportunities to build a successful farm.</p>
	
					<a href="#contact" class="fm-cta-btn fmtk__btn">
						<span class="fmtk__btn-label">Discuss Your Farm Project</span>
						<span class="fmtk__btn-arrow" aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<line x1="5" y1="12" x2="19" y2="12"></line>
								<polyline points="12 5 19 12 12 19"></polyline>
							</svg>
						</span>
					</a>
				</div>
	
				
				<figure class="fmtk__media">
					<img src="images/turnkey-arch.png" alt="Farm expert discussing crop plans on a tablet with a farmer in a green field" class="fmtk__img" loading="eager" width="690" height="520">
				</figure>
			</div>
	
		
			<ol class="fmtk-steps">
	
				<li class="fmtk-step">
					<span class="fmtk-step__icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
							<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
						</svg>
					</span>
					<span class="fm-heading fmtk-step__no">01</span>
					<h3 class="fm-heading fmtk-step__title">Initial<br>Consultation</h3>
					<p class="fm-text fmtk-step__text">We discuss your goals, challenges and expectations.</p>
				</li>
	
				<li class="fmtk-step">
					<span class="fmtk-step__icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
							<path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"></path>
							<circle cx="12" cy="10" r="3"></circle>
						</svg>
					</span>
					<span class="fm-heading fmtk-step__no">02</span>
					<h3 class="fm-heading fmtk-step__title">Crop &amp; Business<br>Planning</h3>
					<p class="fm-text fmtk-step__text">We understand your preferred crops and explore viable business models.</p>
				</li>
	
				<li class="fmtk-step">
					<span class="fmtk-step__icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
							<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
							<circle cx="12" cy="10" r="3"></circle>
						</svg>
					</span>
					<span class="fm-heading fmtk-step__no">03</span>
					<h3 class="fm-heading fmtk-step__title">Land &amp; Resource<br>Assessment</h3>
					<p class="fm-text fmtk-step__text">We analyze land suitability, climate, water availability, and other key factors.</p>
				</li>
	
				<li class="fmtk-step">
					<span class="fmtk-step__icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
							<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
							<polyline points="14 2 14 8 20 8"></polyline>
							<line x1="16" y1="13" x2="8" y2="13"></line>
							<line x1="16" y1="17" x2="8" y2="17"></line>
							<polyline points="10 9 9 9 8 9"></polyline>
						</svg>
					</span>
					<span class="fm-heading fmtk-step__no">04</span>
					<h3 class="fm-heading fmtk-step__title">Feasibility &amp;<br>Guidance</h3>
					<p class="fm-text fmtk-step__text">Our experts provide practical insights on cost, ROI and opportunities.</p>
				</li>
	
				<li class="fmtk-step fmtk-step--final">
					<span class="fmtk-step__icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
							<circle cx="12" cy="12" r="10"></circle>
							<circle cx="12" cy="12" r="6"></circle>
							<circle cx="12" cy="12" r="2"></circle>
							<line x1="22" y1="2" x2="12" y2="12"></line>
							<line x1="22" y1="2" x2="16" y2="2"></line>
							<line x1="22" y1="2" x2="22" y2="8"></line>
						</svg>
					</span>
					<span class="fm-heading fmtk-step__no">05</span>
					<h3 class="fm-heading fmtk-step__title">Tailored<br>Solution</h3>
					<p class="fm-text fmtk-step__text">We create a customized farming solution aligned with your vision.</p>
				</li>
	
			</ol>
		</div>
	</section> -->



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
					<h2 class="fm-heading ">Agrotourism<br><span class="fmdm__accent">Opportunities</span></h2>

					<p class="fm-text fmur__text">Agrotourism brings visitors closer to farming through crop
						experiences, farm visits and hands-on learning. The right plan can support farm operations while
						creating new visitor experiences.</p>

					<a href="#contact" class="fm-cta-btn">
						Discuss Your Farm Project
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
					<img src="images/turnkey1.png"
						alt="Illustration of agricultural land assessment for agrotourism farm planning"
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
							<h3 class="fmur-card__title">Farm-Based Experiences</h3>
							<p class="fm-text fmur-card__text">Showcase seasonal crops and everyday farm activities.</p>
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
							<h3 class="fmur-card__title">Educational Farm Visits</h3>
							<p class="fm-text fmur-card__text">Help visitors explore crops and learn how farms work.</p>
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
							<h3 class="fmur-card__title">Farm Produce & Local Food</h3>
							<p class="fm-text fmur-card__text">Showcase farm produce and local food, where facilities
								and permissions allow.</p>
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
							<h3 class="fmur-card__title">Demonstration & Learning Zones</h3>
							<p class="fm-text fmur-card__text">Create learning spaces with crop plots, nurseries and
								growing-system displays.</p>
						</div>
					</li>
				</ul>

			</div>
		</section>

		<section class="fmvs" id="step-site-visit">
			<div class="fmvs__stage">

				<!-- BIG HERO IMAGE (one image, fades into the page on its right side) -->
				<figure class="fmvs__media">
					<img src="images/turnkey2.jpeg"
						alt="Agricultural site assessment for planning farm-based visitor experiences" class="fmvs__img"
						loading="eager" width="1400" height="1100">
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
								<h3 class="fmvs-card__title">Guided Farm Activities</h3>
								<p class="fmvs-card__text">Plan crop walks, nursery visits and seasonal demonstrations.
								</p>
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
								<h3 class="fmvs-card__title">Crop & Horticulture Areas</h3>
								<p class="fmvs-card__text">Combine orchards, vegetable plots and protected cultivation
									with visitor learning.</p>
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
								<h3 class="fmvs-card__title">Visitor Support Infrastructure</h3>
								<p class="fmvs-card__text">Plan access, pathways, shaded areas and essential visitor
									facilities.</p>
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
								<h3 class="fmvs-card__title">Farm Landscape & Pathways</h3>
								<p class="fmvs-card__text">Create clear pathways that protect crops and farm operations.
								</p>
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

							<h2 class="fm-heading ">What Can Your Land <span class="fmdm__accent">Offer?</span></h2>

							<p class="fm-text fmvs__text">A suitable plan starts with your land, soil, water, climate
								and local demand. We help identify suitable crops, protected cultivation options and
								farm infrastructure. Accommodation and tourism facilities require separate planning and
								local approvals.</p>

							<a href="#contact" class="fm-cta-btn">
								Discuss Your Farm Potential
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
					<h2 class="fm-heading ">How We Support <span class="fmdm__accent">Your Project</span></h2>

					<p class="fm-text fmur__text">With 10+ years in protected cultivation and hi-tech farming, we bring
						practical agricultural expertise to your project. Our recommendations are based on your land,
						goals and budget.</p>

					<a href="#contact" class="fm-cta-btn">
						Plan Your Project
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
					<img src="images/img-3.png"
						alt="Illustration of agricultural land assessment for agrotourism farm planning"
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
							<h3 class="fmur-card__title">Understand Your Concept</h3>
							<p class="fm-text fmur-card__text">Define your goals and visitor experience.</p>
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
							<h3 class="fmur-card__title">Assess Land & Resources</h3>
							<p class="fm-text fmur-card__text">Assess soil, water, climate and site access.
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
							<h3 class="fmur-card__title">Plan Crops & Farm Zones</h3>
							<p class="fm-text fmur-card__text">Select crops, growing systems and visitor zones.</p>
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
							<h3 class="fmur-card__title">Develop Farm Infrastructure</h3>
							<p class="fm-text fmur-card__text">Plan protected structures, irrigation, fertigation and
								automation.</p>
						</div>
					</li>
				</ul>

			</div>
		</section>


		<section class="fmvs" id="step-subsidy-liaisoning">
			<div class="fmvs__stage">



				<!-- BIG HERO IMAGE (one image, fades into the page on its right side) -->
				<figure class="fmvs__media">
					<img src="images/img-4.jpeg"
						alt="Agricultural site assessment for planning farm-based visitor experiences" class="fmvs__img"
						loading="eager" width="1400" height="1100">
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
								<h3 class="fmvs-card__title">Visitor & Market Understanding</h3>
								<p class="fmvs-card__text">Identify your target visitors and local demand.</p>
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
								<h3 class="fmvs-card__title">Farm-Based Revenue Options</h3>
								<p class="fmvs-card__text">Explore income options linked to farm produce and
									experiences.</p>
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
								<h3 class="fmvs-card__title">Project Cost & Feasibility</h3>
								<p class="fmvs-card__text">Estimate infrastructure costs and farm operating needs.</p>
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
								<h3 class="fmvs-card__title">Operations & Farm Support</h3>
								<p class="fmvs-card__text">Plan staffing, crop care and ongoing farm support.</p>
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

							<h2 class="fm-heading ">Project & Business <span class="fmdm__accent">Planning</span></h2>

							<p class="fm-text fmvs__text">A clear plan connects farm production, visitor activities and
								operating costs. We support crop planning, agricultural costing and technical
								requirements. Hospitality and tourism approvals should be handled with local
								specialists.</p>

							<a href="#contact" class="fm-cta-btn">
								Discuss Project Feasibility
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
