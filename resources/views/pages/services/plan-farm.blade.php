@extends('layouts.app')

@section('title', 'Plan Your Farm | Protected Farming & Hydroponics Solutions | Future Agri Infra')
@section('meta_description', 'Plan a commercially viable farm with Future Agri Infra. Get expert guidance on site feasibility, crop selection, protected farming structures, hydroponics, project costing and agronomy support.')
@section('body_class', 'planfarm-page')

@section('content')
<section class="fm-section fmab" id="about-us">
			<!-- background photo -->
			<div class="fmab__media">
				<img src="images/banner3.jpeg" alt="Net-protected cultivation polyhouse with lush green crops"
					class="fmab__img" loading="eager">
			</div>

			<div class="fmab__inner">
				<!-- LEFT: text -->
				<div class="fmab__content">
					<span class="fmab-eyebrow">Plan Your Farm<i class="fmab-eyebrow__line"></i></span>

					<h1 class="fm-heading fmab__title">
						Plan with Clarity. <span class="fmdm__accent">Grow with Confidence.</span>
					</h1>

					<p class="fm-text fmab__text">
						Turn your land into a well-planned farming venture. Get guidance on site suitability, crop
						selection, growing systems and the infrastructure needed to take your project from idea to
						implementation.
					</p>

					<a href="#our-story" class="fm-cta-btn">
						Start Planning
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
							stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg>
					</a>
				</div>


			</div>
		</section>


		<!-- Our Approach Section -->
		<section class="fmap" id="our-approach">

			<!-- leaf-shaped clip (inline SVG, zero size) -->
			<svg width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false">
				<defs>
					<clipPath id="fmap-leaf-clip" clipPathUnits="objectBoundingBox">
						<path
							d="M0,0.92 C0,0.50 0.28,0.03 0.60,0 C0.84,0 1,0.07 1,0.27 L1,0.64 C1,0.86 0.86,1 0.62,1 C0.36,1 0.12,1 0,0.92 Z" />
					</clipPath>
				</defs>
			</svg>

			<div class="fmap__stage">

				<!-- faded landscape at the bottom (decorative) -->
				<img class="fmap__bg" src="images/gfar.png" alt="" aria-hidden="true" loading="lazy">

				<!-- wavy green line + arrow (desktop only, decorative) -->
				<svg class="fmap-wave" viewBox="0 0 1167 620" preserveAspectRatio="none" aria-hidden="true">
					<path class="fmap-wave__path"
						d="M0 428 C 40 408, 68 394, 88 389 C 140 398, 190 416, 250 414 C 320 412, 370 384, 417 362 C 470 384, 520 392, 580 382 C 640 372, 680 326, 720 298 C 770 306, 820 308, 880 303 C 950 294, 990 248, 1047 200"
						fill="none" vector-effect="non-scaling-stroke" />
					<path class="fmap-wave__arrow" d="M1037 194 L1048 200 L1039 209" fill="none"
						vector-effect="non-scaling-stroke" />
				</svg>

				<!-- HEAD: eyebrow + title + paragraph -->
				<header class="fmap__head">
					<div class="afm-wwa__eyebrow">Our Approach</div>

					<h2 class="fm-heading fmap__title">From land to profitability,<br><span class="fmdm__accent">a
							structured approach.</span></h2>
					<p class="fm-text fmap__text">Every farm has different opportunities and constraints. We bring
						together site conditions, crop requirements, infrastructure choices and market considerations to
						help shape a practical farm plan.</p>
				</header>

				<!-- small captions (desktop only) -->
				<p class="fmap-cap fmap-cap--top">Understand first.<br>Plan carefully.<br>Build confidently.</p>
				<p class="fmap-cap fmap-cap--side">A considered<br>farm plan<br>for the long<br>term</p>

				<!-- 3 STEPS -->
				<ol class="fmap-steps">

					<li class="fmap-step"
						style="--lx:7.5%; --ly:38.7%; --lw:22.6%; --lh:26.1%; --dx:7.5%; --dy:62.7%; --tx:7.1%; --ty:66%; --tw:22%;">
						<figure class="fmap-leaf">
							<div class="fmap-leaf__clip"><img src="images/farm4.jpeg"
									alt="Sunrise over green farmland and distant hills" loading="eager"></div>
						</figure>
						<span class="fmap-dot" aria-hidden="true"></span>
						<div class="fmap-step__txt">
							<span class="fm-heading fmap-step__no" aria-hidden="true">01</span>
							<h3 class="fm-heading fmap-step__title">Assess the site</h3>
							<p class="fm-text fmap-step__desc">Understand the land, water, climate and surrounding
								market before deciding how to develop the farm.</p>
						</div>
					</li>

					<li class="fmap-step"
						style="--lx:35.7%; --ly:29.5%; --lw:20.6%; --lh:31.5%; --dx:35.7%; --dy:58.4%; --tx:35.1%; --ty:62%; --tw:21%;">
						<figure class="fmap-leaf">
							<div class="fmap-leaf__clip"><img src="images/far3.jpeg"
									alt="Fresh lettuce crop rows in a protected farm" loading="lazy"></div>
						</figure>
						<span class="fmap-dot" aria-hidden="true"></span>
						<div class="fmap-step__txt">
							<span class="fm-heading fmap-step__no" aria-hidden="true">02</span>
							<h3 class="fm-heading fmap-step__title">Select the crops</h3>
							<p class="fm-text fmap-step__desc">Shortlist crops by considering local growing conditions,
								resource needs and market demand.</p>
						</div>
					</li>

					<li class="fmap-step"
						style="--lx:61.7%; --ly:16.1%; --lw:22.5%; --lh:34.7%; --dx:61.7%; --dy:48.1%; --tx:61.5%; --ty:52.5%; --tw:25%;">
						<figure class="fmap-leaf">
							<div class="fmap-leaf__clip"><img src="images/farm6.jpeg"
									alt="Large greenhouse with crops growing in rows" loading="lazy"></div>
						</figure>
						<span class="fmap-dot" aria-hidden="true"></span>
						<div class="fmap-step__txt">
							<span class="fm-heading fmap-step__no" aria-hidden="true">03</span>
							<h3 class="fm-heading fmap-step__title">Choose the system</h3>
							<p class="fm-text fmap-step__desc">Select a suitable protected structure and growing method
								based on the project goals, site and available resources.</p>
						</div>
					</li>
				</ol>

				<!-- bottom row -->
				<!-- <p class="fmap-tag"><i class="fmap-tag__line"></i>Land. Knowledge. Technology. Profitability.</p>
				<a href="#steps" class="fmap-more"><span class="fmap-more__text">Explore each step</span><span
						class="fmap-more__arrow" aria-hidden="true">→</span></a> -->

			</div>
		</section>

		<section class="fmwg" id="understand-land">
			<div class="fmwg__inner">

				<!-- COLUMN 1: text -->
				<div class="fmwg__content">
					<div class="afm-wwa__eyebrow">Start with site suitability</div>


					<h2 class="fm-heading fmwg__title">Know Your Land<br><em class="fmdm__accent">Before You
							Invest.</em></h2>

					<p class="fm-text fmwg__text">A sound farm plan starts with the realities of your site. We assess
						land conditions and available resources to understand which structures, crops and growing
						systems may be suitable.</p>


					<a href="#our-story" class="fm-cta-btn">
						Discuss Your Site
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
							stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg>
					</a>
				</div>

				<!-- COLUMN 2: ONE illustration (its floating label cards, pins and dashed lines are part of the image) -->
				<figure class="fmwg__media">
					<img src="images/img-3.png"
						alt="Isometric cut-away of a farm showing water, climate, soil and market access factors"
						class="fmwg__img" loading="eager" width="1300" height="920">
				</figure>

				<!-- COLUMN 3: four cards -->
				<ul class="fmwg-cards">

					<li class="fmwg-card" style="--fmwg-tint: var(--fm-tint-water); --fmwg-ink: var(--fmwg-green);">
						<a class="fmwg-card__link" href="#water">
							<span class="fmwg-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
									stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
									<path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" />
								</svg></span>
							<h3 class="fmwg-card__title">Water Resources</h3>
							<div class="fmwg-card__row">
								<p class="fm-text fmwg-card__text">Water source, availability and quality</p>
								<span class="fmwg-card__go" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<path d="M5 12h14M12 5l7 7-7 7" />
									</svg></span>
							</div>
						</a>
					</li>

					<li class="fmwg-card" style="--fmwg-tint: var(--fm-tint-sun); --fmwg-ink: var(--fm-ink-sun);">
						<a class="fmwg-card__link" href="#climate">
							<span class="fmwg-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
									stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
									<circle cx="12" cy="12" r="5" />
									<line x1="12" y1="1" x2="12" y2="3" />
									<line x1="12" y1="21" x2="12" y2="23" />
									<line x1="4.22" y1="4.22" x2="5.64" y2="5.64" />
									<line x1="18.36" y1="18.36" x2="19.78" y2="19.78" />
									<line x1="1" y1="12" x2="3" y2="12" />
									<line x1="21" y1="12" x2="23" y2="12" />
									<line x1="4.22" y1="19.78" x2="5.64" y2="18.36" />
									<line x1="18.36" y1="5.64" x2="19.78" y2="4.22" />
								</svg></span>
							<h3 class="fmwg-card__title">Climate</h3>
							<div class="fmwg-card__row">
								<p class="fm-text fmwg-card__text">Temperature, sunlight and rainfall</p>
								<span class="fmwg-card__go" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<path d="M5 12h14M12 5l7 7-7 7" />
									</svg></span>
							</div>
						</a>
					</li>

					<li class="fmwg-card" style="--fmwg-tint: var(--fmwg-green-soft); --fmwg-ink: var(--fmwg-green);">
						<a class="fmwg-card__link" href="#soil">
							<span class="fmwg-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
									stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
									<path d="M7 20h10" />
									<path d="M10 20c5.5-1.5 5.5-9.5 5.5-9.5s-2.5.5-4 1.5" />
									<path d="M11 12.5C7.5 11.5 6 6 6 6s3 2.5 5 4.5" />
									<path d="M12 20v-8" />
								</svg></span>
							<h3 class="fmwg-card__title">Soil &amp; Land</h3>
							<div class="fmwg-card__row">
								<p class="fm-text fmwg-card__text">Soil profile, drainage and land suitability</p>
								<span class="fmwg-card__go" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<path d="M5 12h14M12 5l7 7-7 7" />
									</svg></span>
							</div>
						</a>
					</li>

					<li class="fmwg-card" style="--fmwg-tint: var(--fm-tint-market); --fmwg-ink: var(--fm-ink-market);">
						<a class="fmwg-card__link" href="#market">
							<span class="fmwg-card__icon"><svg viewBox="0 0 24 24" fill="currentColor" stroke="none">
									<path
										d="M1 15h2v2a2 2 0 0 0 4 0v-2h6v2a2 2 0 0 0 4 0v-2h4v-5l-3-4h-3V6H1zM5 19a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm12 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm1-8h3.5l2 3H18v-3z" />
								</svg></span>
							<h3 class="fmwg-card__title">Market Access</h3>
							<div class="fmwg-card__row">
								<p class="fm-text fmwg-card__text">Market distance and logistics</p>
								<span class="fmwg-card__go" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<path d="M5 12h14M12 5l7 7-7 7" />
									</svg></span>
							</div>
						</a>
					</li>

				</ul>
			</div>
		</section>



		<!-- Choose the right crops Section -->
		<section class="fmco" id="crop-opportunities">

			<!-- TOP: text + funnel illustration -->
			<div class="fmco__top">

				<div class="fmco__content">
					<div class="afm-wwa__eyebrow">Choose the right crops</div>


					<h2 class="fm-heading fmco__title">Move from many choices<br>to a considered<br><span
							class="fmco__accent">crop plan.</span></h2>

					<p class="fm-text fmco__text">Crop selection is not one-size-fits-all. We consider climate, water,
						soil, growing method and market demand to help identify crop options worth evaluating for your
						project.</p>


					<a href="#crop-options" class="fm-cta-btn">
						Explore Crop Planning
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
							stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg>
					</a>

				</div>

				<!-- ONE image: the glass funnel -->
				<figure class="fmco__media">
					<picture>
						<img src="images/pp2.png"
							alt="Funnel diagram: 20+ crop possibilities filtered by site viability and commercial viability into 3 final crop options"
							class="fmco__img" loading="eager" width="1554" height="850">
					</picture>
				</figure>
			</div>

			<!-- BOTTOM: three crop cards -->
			<ul class="fmco-cards">

				<li class="fmco-card fmco-card--fit">
					<figure class="fmco-card__photo">
						<img src="images/far3.jpeg" alt="Fresh green lettuce" loading="lazy" width="400" height="300">
						<span class="fmco-card__no">01</span>
					</figure>
					<div class="fmco-card__body">
						<div class="fmco-card__head">
							<h3 class="fmco-card__name">Lettuce</h3>
							<span class="fmco-card__chip">Best Fit</span>
						</div>
						<ul class="fmco-feats">
							<li class="fmco-feat"><span class="fmco-feat__icon"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<path
											d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z" />
										<path d="M2 22l8-8" />
									</svg></span><span class="fmco-feat__txt">Market demand to assess</span></li>
							<li class="fmco-feat"><span class="fmco-feat__icon"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<line x1="18" y1="20" x2="18" y2="10" />
										<line x1="12" y1="20" x2="12" y2="4" />
										<line x1="6" y1="20" x2="6" y2="14" />
									</svg></span><span class="fmco-feat__txt">Crop-cycle considerations</span></li>
							<li class="fmco-feat"><span class="fmco-feat__icon"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" />
									</svg></span><span class="fmco-feat__txt">Water needs to evaluate</span></li>
						</ul>
					</div>
				</li>

				<li class="fmco-card fmco-card--potential">
					<figure class="fmco-card__photo">
						<img src="images/tomatoo.webp" alt="Ripe red tomatoes on the vine" loading="lazy" width="400"
							height="300">
						<span class="fmco-card__no">02</span>
					</figure>
					<div class="fmco-card__body">
						<div class="fmco-card__head">
							<h3 class="fmco-card__name">Tomato</h3>
							<span class="fmco-card__chip">High Potential</span>
						</div>
						<ul class="fmco-feats">
							<li class="fmco-feat"><span class="fmco-feat__icon"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<line x1="18" y1="20" x2="18" y2="10" />
										<line x1="12" y1="20" x2="12" y2="4" />
										<line x1="6" y1="20" x2="6" y2="14" />
									</svg></span><span class="fmco-feat__txt">Demand-led selection</span></li>
							<li class="fmco-feat"><span class="fmco-feat__icon"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<path
											d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z" />
										<path d="M2 22l8-8" />
									</svg></span><span class="fmco-feat__txt">Yield potential to assess</span></li>
							<li class="fmco-feat"><span class="fmco-feat__icon"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" />
									</svg></span><span class="fmco-feat__txt">Climate suitability</span></li>
						</ul>
					</div>
				</li>

				<li class="fmco-card fmco-card--premium">
					<figure class="fmco-card__photo">
						<img src="images/strobarry.webp" alt="Fresh red strawberries" loading="lazy" width="400"
							height="300">
						<span class="fmco-card__no">03</span>
					</figure>
					<div class="fmco-card__body">
						<div class="fmco-card__head">
							<h3 class="fmco-card__name">Strawberry</h3>
							<span class="fmco-card__chip">Premium Opportunity</span>
						</div>
						<ul class="fmco-feats">
							<li class="fmco-feat"><span class="fmco-feat__icon"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<line x1="18" y1="20" x2="18" y2="10" />
										<line x1="12" y1="20" x2="12" y2="4" />
										<line x1="6" y1="20" x2="6" y2="14" />
									</svg></span><span class="fmco-feat__txt">Premium segment potential</span></li>
							<li class="fmco-feat"><span class="fmco-feat__icon"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<path
											d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z" />
										<path d="M2 22l8-8" />
									</svg></span><span class="fmco-feat__txt">Commercial viability to assess</span></li>
							<li class="fmco-feat"><span class="fmco-feat__icon"><svg viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" />
									</svg></span><span class="fmco-feat__txt">Protected growing options</span></li>
						</ul>
					</div>
				</li>

			</ul>
		</section>

		<!-- Our Process Section -->
		<section class="fmpg" id="our-process">

			<header class="fmpg__head">
				<span class="fmpg-eyebrow"><i class="fmpg-eyebrow__line"></i>Our Process<i
						class="fmpg-eyebrow__line"></i></span>
				<h2 class="fm-heading fmpg__title">A clear path from <em class="fmdm__accent">plan to farm</em></h2>
				<p class="fm-text fmpg__text">From the first site assessment to farm establishment and early crop
					cycles, our team helps coordinate the key decisions, technical work and agronomy support your
					project needs.</p>
			</header>

			<ol class="fmpg-cards">

				<li class="fmpg-item">
					<a class="fmpg-card" href="#understand-land">
						<figure class="fmpg-card__photo"><img src="images/farm1.jpeg"
								alt="Aerial view of farmland at sunrise with a location pin" loading="lazy" width="600"
								height="320"></figure>
						<div class="fmpg-card__body">
							<span class="fmpg-card__no">01</span>
							<span class="fmpg-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
									stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
									<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
									<circle cx="12" cy="10" r="3"></circle>
								</svg></span>
							<h3 class="fmpg-card__title">Understand<br>the Land</h3>
							<p class="fm-text fmpg-card__text">We review land, climate, water and market access to
								understand the opportunities and constraints.</p>
							<span class="fmpg-card__go" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
									stroke-linejoin="round">
									<line x1="5" y1="12" x2="19" y2="12"></line>
									<polyline points="12 5 19 12 12 19"></polyline>
								</svg></span>
						</div>
					</a>
				</li>

				<li class="fmpg-item">
					<a class="fmpg-card" href="#choose-crop">
						<figure class="fmpg-card__photo"><img src="images/farm00.jpeg"
								alt="Young seedlings growing in rich soil" loading="lazy" width="600" height="320">
						</figure>
						<div class="fmpg-card__body">
							<span class="fmpg-card__no">02</span>
							<span class="fmpg-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
									stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
									<path d="M12 22v-9" />
									<path d="M12 13C7 13 4 8 4 5c4 0 8 2 8 8Z" />
									<path d="M12 13c5 0 8-5 8-8-4 0-8 2-8 8Z" />
								</svg></span>
							<h3 class="fmpg-card__title">Choose the<br>Right Crop</h3>
							<p class="fm-text fmpg-card__text">We shortlist crop options against site conditions,
								resource availability and commercial considerations.</p>
							<span class="fmpg-card__go" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
									stroke-linejoin="round">
									<line x1="5" y1="12" x2="19" y2="12"></line>
									<polyline points="12 5 19 12 12 19"></polyline>
								</svg></span>
						</div>
					</a>
				</li>

				<li class="fmpg-item">
					<a class="fmpg-card" href="#growing-system">
						<figure class="fmpg-card__photo"><img src="images/img-5.png"
								alt="Large polyhouse with rows of green crops" loading="lazy" width="600" height="320">
						</figure>
						<div class="fmpg-card__body">
							<span class="fmpg-card__no">03</span>
							<span class="fmpg-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
									stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
									<circle cx="12" cy="12" r="3"></circle>
									<path
										d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
									</path>
								</svg></span>
							<h3 class="fmpg-card__title">Set Up the<br>Growing System</h3>
							<p class="fm-text fmpg-card__text">We plan the structure, growing system, irrigation and
								fertigation requirements around the selected project model.</p>
							<span class="fmpg-card__go" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
									stroke-linejoin="round">
									<line x1="5" y1="12" x2="19" y2="12"></line>
									<polyline points="12 5 19 12 12 19"></polyline>
								</svg></span>
						</div>
					</a>
				</li>

				<li class="fmpg-item">
					<a class="fmpg-card" href="#manage-nurture">
						<figure class="fmpg-card__photo"><img src="images/farm6.jpeg"
								alt="Drip irrigation line watering young plants" loading="lazy" width="600"
								height="320"></figure>
						<div class="fmpg-card__body">
							<span class="fmpg-card__no">04</span>
							<span class="fmpg-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
									stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
									<path
										d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z">
									</path>
								</svg></span>
							<h3 class="fmpg-card__title">Manage &amp;<br>Nurture</h3>
							<p class="fm-text fmpg-card__text">We support crop planning, nutrient management, irrigation
								practices and integrated pest management.</p>
							<span class="fmpg-card__go" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
									stroke-linejoin="round">
									<line x1="5" y1="12" x2="19" y2="12"></line>
									<polyline points="12 5 19 12 12 19"></polyline>
								</svg></span>
						</div>
					</a>
				</li>

				<li class="fmpg-item">
					<a class="fmpg-card" href="#harvest-returns">
						<figure class="fmpg-card__photo"><img src="images/farm4.jpeg"
								alt="Wooden crate full of fresh harvested vegetables" loading="lazy" width="600"
								height="320"></figure>
						<div class="fmpg-card__body">
							<span class="fmpg-card__no">05</span>
							<span class="fmpg-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
									stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
									<line x1="18" y1="20" x2="18" y2="10"></line>
									<line x1="12" y1="20" x2="12" y2="4"></line>
									<line x1="6" y1="20" x2="6" y2="14"></line>
									<polyline points="3 14 8 10 12 14 21 3"></polyline>
								</svg></span>
							<h3 class="fmpg-card__title">Harvest<br>Better Returns</h3>
							<p class="fm-text fmpg-card__text">We support the initial crop cycles and facilitate buyer
								introductions so the farm can move towards commercial operations.</p>
							<span class="fmpg-card__go" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
									stroke-linejoin="round">
									<line x1="5" y1="12" x2="19" y2="12"></line>
									<polyline points="12 5 19 12 12 19"></polyline>
								</svg></span>
						</div>
					</a>
				</li>

			</ol>
		</section>


		<section class="fmdm" id="farming-models">
			<header class="fmdm__head">
				<span class="fmdm-eyebrow">Our Models<i class="fmdm-eyebrow__line"></i></span>
				<h2 class="fm-heading fmdm__title">Different farm models.<br>One that fits <span
						class="fmdm__accent">your project.</span></h2>
				<p class="fm-text fmdm__text">Explore protected cultivation and hydroponic configurations that can be
					planned around your land, crop choice, available resources and project requirements.</p>
			</header>

			<div class="fmdm__stage">

				<svg class="fmdm__band" viewBox="0 0 1466 200" preserveAspectRatio="none" aria-hidden="true">
					<path d="M0 0 C 450 160, 950 180, 1466 50 L1466 202 L0 202 Z" fill="#02263E"></path>
				</svg>


				<div class="fmdm__viewport">
					<div class="fmdm__track" id="fmdmTrack">
						<!-- Card 1 -->
						<article class="fmdm-card" tabindex="0" aria-expanded="false" data-default="true">
							<img class="fmdm-card__img" src="images/farm1.jpeg" alt="Outdoor Hydroponics"
								loading="lazy">
							<div class="fmdm-card__compact">
								<span class="fmdm-card__icon"><svg width="24" height="24" viewBox="0 0 24 24"
										fill="none" stroke="currentColor" stroke-width="1.7">
										<path
											d="M3 21h18M5 21V8l7-5 7 5v13M9 21v-5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v5M9 10h6" />
									</svg></span>
								<div class="fmdm-card__row">
									<div>
										<h3 class="fmdm-card__name">Outdoor Hydroponics</h3>
										<p class="fmdm-card__desc">Fan and pad protected structure paired with an NFT
											hydroponic growing system.</p>
									</div>
									<a href="#" class="fmdm-card__go" aria-label="View Outdoor Hydroponics">→</a>
								</div>
							</div>
							<div class="fmdm-card__full">
								<div class="fmdm-card__head">
									<span class="fmdm-card__badge"><svg width="24" height="24" viewBox="0 0 24 24"
											fill="none" stroke="currentColor" stroke-width="1.7">
											<path
												d="M3 21h18M5 21V8l7-5 7 5v13M9 21v-5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v5M9 10h6" />
										</svg></span>
									<div>
										<h3 class="fmdm-card__title">Outdoor Hydroponics</h3>
										<p class="fmdm-card__sub">Fan and pad with NFT</p>
									</div>
								</div>
								<div class="fmdm-card__stats">
									<div class="fmdm-stat"><span class="fmdm-stat__ico"><svg width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor"
												stroke-width="1.7">
												<path d="M12 20V10M18 20V4M6 20v-4" />
											</svg></span>
										<div><strong>Site-specific</strong><span>Crop planning</span></div>
									</div>
									<div class="fmdm-stat"><span class="fmdm-stat__ico"><svg width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor"
												stroke-width="1.7">
												<path d="M12 22a5 5 0 0 0 5-5c0-2-5-9-5-9s-5 7-5 9a5 5 0 0 0 5 5z" />
											</svg></span>
										<div><strong>Planned</strong><span>Resource planning</span></div>
									</div>
								</div>
								<a href="#" class="fm-cta-btn fmdm-card__cta">Explore This Model <svg width="20"
										height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
										stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
										<line x1="5" y1="12" x2="19" y2="12"></line>
										<polyline points="12 5 19 12 12 19"></polyline>
									</svg></a>
							</div>
						</article>

						<!-- Card 2 -->
						<article class="fmdm-card" tabindex="0" aria-expanded="false">
							<img class="fmdm-card__img" src="images/farm4.jpeg" alt="Indoor Hydroponics" loading="lazy">
							<div class="fmdm-card__compact">
								<span class="fmdm-card__icon"><svg width="24" height="24" viewBox="0 0 24 24"
										fill="none" stroke="currentColor" stroke-width="1.7">
										<path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
									</svg></span>
								<div class="fmdm-card__row">
									<div>
										<h3 class="fmdm-card__name">Indoor Hydroponics</h3>
										<p class="fmdm-card__desc">An indoor growing configuration planned around the
											available space and crop requirements.</p>
									</div>
									<a href="#" class="fmdm-card__go" aria-label="View Indoor Hydroponics">→</a>
								</div>
							</div>
							<div class="fmdm-card__full">
								<div class="fmdm-card__head">
									<span class="fmdm-card__badge"><svg width="24" height="24" viewBox="0 0 24 24"
											fill="none" stroke="currentColor" stroke-width="1.7">
											<path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
										</svg></span>
									<div>
										<h3 class="fmdm-card__title">Indoor Hydroponics</h3>
										<p class="fmdm-card__sub">Indoor growing system</p>
									</div>
								</div>
								<div class="fmdm-card__stats">
									<div class="fmdm-stat"><span class="fmdm-stat__ico"><svg width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor"
												stroke-width="1.7">
												<path d="M12 20V10M18 20V4M6 20v-4" />
											</svg></span>
										<div><strong>Crop-specific</strong><span>Crop planning</span></div>
									</div>
									<div class="fmdm-stat"><span class="fmdm-stat__ico"><svg width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor"
												stroke-width="1.7">
												<path d="M12 22a5 5 0 0 0 5-5c0-2-5-9-5-9s-5 7-5 9a5 5 0 0 0 5 5z" />
											</svg></span>
										<div><strong>System-specific</strong><span>Resource planning</span></div>
									</div>
								</div>
								<a href="#" class="fm-cta-btn fmdm-card__cta">Explore This Model <svg width="20"
										height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
										stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
										<line x1="5" y1="12" x2="19" y2="12"></line>
										<polyline points="12 5 19 12 12 19"></polyline>
									</svg></a>
							</div>
						</article>

						<!-- Card 3 NVPH with Cocopeat Growbags -->
						<article class="fmdm-card" tabindex="0" aria-expanded="false">
							<img class="fmdm-card__img" src="images/banner2.jpeg" alt="NVPH with Cocopeat Growbags"
								loading="eager">
							<div class="fmdm-card__compact">
								<span class="fmdm-card__icon"><svg width="24" height="24" viewBox="0 0 24 24"
										fill="none" stroke="currentColor" stroke-width="1.7">
										<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
									</svg></span>
								<div class="fmdm-card__row">
									<div>
										<h3 class="fmdm-card__name">NVPH with Cocopeat Growbags</h3>
										<p class="fmdm-card__desc">Naturally ventilated protected structure with
											cocopeat growbag cultivation.</p>
									</div>
									<a href="#" class="fmdm-card__go"
										aria-label="View NVPH with Cocopeat Growbags">→</a>
								</div>
							</div>
							<div class="fmdm-card__full">
								<div class="fmdm-card__head">
									<span class="fmdm-card__badge"><svg width="24" height="24" viewBox="0 0 24 24"
											fill="none" stroke="currentColor" stroke-width="1.7">
											<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
										</svg></span>
									<div>
										<h3 class="fmdm-card__title">NVPH with Cocopeat Growbags</h3>
										<p class="fmdm-card__sub">Naturally ventilated protected structure with cocopeat
											growbag cultivation.</p>
									</div>
								</div>
								<div class="fmdm-card__stats">
									<div class="fmdm-stat"><span class="fmdm-stat__ico"><svg width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor"
												stroke-width="1.7">
												<path d="M12 20V10M18 20V4M6 20v-4" />
											</svg></span>
										<div><strong>Site-specific</strong><span>Crop planning</span></div>
									</div>
									<div class="fmdm-stat"><span class="fmdm-stat__ico"><svg width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor"
												stroke-width="1.7">
												<path d="M12 22a5 5 0 0 0 5-5c0-2-5-9-5-9s-5 7-5 9a5 5 0 0 0 5 5z" />
											</svg></span>
										<div><strong>Planned</strong><span>Resource planning</span></div>
									</div>
								</div>
								<a href="#" class="fm-cta-btn fmdm-card__cta">Explore This Model <svg width="20"
										height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
										stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
										<line x1="5" y1="12" x2="19" y2="12"></line>
										<polyline points="12 5 19 12 12 19"></polyline>
									</svg></a>
							</div>
						</article>

						<!-- Card 4 -->
						<article class="fmdm-card" tabindex="0" aria-expanded="false">
							<img class="fmdm-card__img" src="images/far3.jpeg" alt="NVPH Soil-Based" loading="lazy">
							<div class="fmdm-card__compact">
								<span class="fmdm-card__icon"><svg width="24" height="24" viewBox="0 0 24 24"
										fill="none" stroke="currentColor" stroke-width="1.7">
										<path d="M6 3h12l4 6-10 12L2 9z" />
									</svg></span>
								<div class="fmdm-card__row">
									<div>
										<h3 class="fmdm-card__name">NVPH Soil-Based</h3>
										<p class="fmdm-card__desc">A naturally ventilated structure with soil-based
											cultivation, planned for the selected crops.</p>
									</div>
									<a href="#" class="fmdm-card__go" aria-label="View NVPH Soil-Based">→</a>
								</div>
							</div>
							<div class="fmdm-card__full">
								<div class="fmdm-card__head">
									<span class="fmdm-card__badge"><svg width="24" height="24" viewBox="0 0 24 24"
											fill="none" stroke="currentColor" stroke-width="1.7">
											<path d="M6 3h12l4 6-10 12L2 9z" />
										</svg></span>
									<div>
										<h3 class="fmdm-card__title">NVPH Soil-Based</h3>
										<p class="fmdm-card__sub">Soil-based cultivation</p>
									</div>
								</div>
								<div class="fmdm-card__stats">
									<div class="fmdm-stat"><span class="fmdm-stat__ico"><svg width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor"
												stroke-width="1.7">
												<path d="M12 20V10M18 20V4M6 20v-4" />
											</svg></span>
										<div><strong>Crop-specific</strong><span>Crop planning</span></div>
									</div>
									<div class="fmdm-stat"><span class="fmdm-stat__ico"><svg width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor"
												stroke-width="1.7">
												<path d="M12 22a5 5 0 0 0 5-5c0-2-5-9-5-9s-5 7-5 9a5 5 0 0 0 5 5z" />
											</svg></span>
										<div><strong>Site-specific</strong><span>Resource planning</span></div>
									</div>
								</div>
								<a href="#" class="fm-cta-btn fmdm-card__cta">Explore This Model <svg width="20"
										height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
										stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
										<line x1="5" y1="12" x2="19" y2="12"></line>
										<polyline points="12 5 19 12 12 19"></polyline>
									</svg></a>
							</div>
						</article>

						<!-- Card 5 -->
						<article class="fmdm-card" tabindex="0" aria-expanded="false">
							<img class="fmdm-card__img" src="images/farm5.jpeg" alt="Nethouse Soil-Based"
								loading="lazy">
							<div class="fmdm-card__compact">
								<span class="fmdm-card__icon"><svg width="24" height="24" viewBox="0 0 24 24"
										fill="none" stroke="currentColor" stroke-width="1.7">
										<path
											d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
										<polyline points="3.27 6.96 12 12.01 20.73 6.96" />
										<line x1="12" y1="22.08" x2="12" y2="12" />
									</svg></span>
								<div class="fmdm-card__row">
									<div>
										<h3 class="fmdm-card__name">Nethouse Soil-Based</h3>
										<p class="fmdm-card__desc">A net-protected structure with soil-based cultivation
											for suitable crop requirements.</p>
									</div>
									<a href="#" class="fmdm-card__go" aria-label="View Nethouse Soil-Based">→</a>
								</div>
							</div>
							<div class="fmdm-card__full">
								<div class="fmdm-card__head">
									<span class="fmdm-card__badge"><svg width="24" height="24" viewBox="0 0 24 24"
											fill="none" stroke="currentColor" stroke-width="1.7">
											<path
												d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
											<polyline points="3.27 6.96 12 12.01 20.73 6.96" />
											<line x1="12" y1="22.08" x2="12" y2="12" />
										</svg></span>
									<div>
										<h3 class="fmdm-card__title">Nethouse Soil-Based</h3>
										<p class="fmdm-card__sub">Net-protected cultivation</p>
									</div>
								</div>
								<div class="fmdm-card__stats">
									<div class="fmdm-stat"><span class="fmdm-stat__ico"><svg width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor"
												stroke-width="1.7">
												<path d="M12 20V10M18 20V4M6 20v-4" />
											</svg></span>
										<div><strong>Crop-specific</strong><span>Crop planning</span></div>
									</div>
									<div class="fmdm-stat"><span class="fmdm-stat__ico"><svg width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor"
												stroke-width="1.7">
												<path d="M12 22a5 5 0 0 0 5-5c0-2-5-9-5-9s-5 7-5 9a5 5 0 0 0 5 5z" />
											</svg></span>
										<div><strong>Crop-specific</strong><span>Resource planning</span></div>
									</div>
								</div>
								<a href="#" class="fm-cta-btn fmdm-card__cta">Explore This Model <svg width="20"
										height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
										stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
										<line x1="5" y1="12" x2="19" y2="12"></line>
										<polyline points="12 5 19 12 12 19"></polyline>
									</svg></a>
							</div>
						</article>

						<!-- Card 6 -->
						<article class="fmdm-card" tabindex="0" aria-expanded="false">
							<img class="fmdm-card__img" src="images/farm6.jpeg" alt="Glasshouse Hydroponics"
								loading="lazy">
							<div class="fmdm-card__compact">
								<span class="fmdm-card__icon"><svg width="24" height="24" viewBox="0 0 24 24"
										fill="none" stroke="currentColor" stroke-width="1.7">
										<path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
									</svg></span>
								<div class="fmdm-card__row">
									<div>
										<h3 class="fmdm-card__name">Glasshouse Hydroponics</h3>
										<p class="fmdm-card__desc">A glasshouse configuration with hydroponic
											cultivation, designed around project requirements.</p>
									</div>
									<a href="#" class="fmdm-card__go" aria-label="View Glasshouse Hydroponics">→</a>
								</div>
							</div>
							<div class="fmdm-card__full">
								<div class="fmdm-card__head">
									<span class="fmdm-card__badge"><svg width="24" height="24" viewBox="0 0 24 24"
											fill="none" stroke="currentColor" stroke-width="1.7">
											<path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
										</svg></span>
									<div>
										<h3 class="fmdm-card__title">Glasshouse Hydroponics</h3>
										<p class="fmdm-card__sub">Glasshouse hydroponics</p>
									</div>
								</div>
								<div class="fmdm-card__stats">
									<div class="fmdm-stat"><span class="fmdm-stat__ico"><svg width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor"
												stroke-width="1.7">
												<path d="M12 20V10M18 20V4M6 20v-4" />
											</svg></span>
										<div><strong>Project-specific</strong><span>Crop planning</span></div>
									</div>
									<div class="fmdm-stat"><span class="fmdm-stat__ico"><svg width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor"
												stroke-width="1.7">
												<path d="M12 22a5 5 0 0 0 5-5c0-2-5-9-5-9s-5 7-5 9a5 5 0 0 0 5 5z" />
											</svg></span>
										<div><strong>System-specific</strong><span>Resource planning</span></div>
									</div>
								</div>
								<a href="#" class="fm-cta-btn fmdm-card__cta">Explore This Model <svg width="20"
										height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
										stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
										<line x1="5" y1="12" x2="19" y2="12"></line>
										<polyline points="12 5 19 12 12 19"></polyline>
									</svg></a>
							</div>
						</article>
					</div>
				</div>
			</div>

			<div class="fmdm-foot">
				<div class="fmdm-foot__help">
					<span class="fmdm-foot__icon"><svg width="30" height="30" viewBox="0 0 24 24" fill="none"
							stroke="currentColor" stroke-width="1.7">
							<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
						</svg></span>
					<div class="fmdm-foot__copy">
						<strong>Not sure where to begin?</strong>
						<span>Talk to our team about your site, crop plans and the farming model you are
							considering.</span>
					</div>
				</div>
				<div class="fmdm-nav">
					<button class="fmdm-nav__btn" id="fmdmPrev" aria-label="Previous model">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
							stroke-linecap="round" stroke-linejoin="round">
							<line x1="19" y1="12" x2="5" y2="12"></line>
							<polyline points="12 19 5 12 12 5"></polyline>
						</svg>
					</button>
					<div class="fmdm-nav__dots" id="fmdmDots" role="tablist"></div>
					<button class="fmdm-nav__btn" id="fmdmNext" aria-label="Next model">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
							stroke-linecap="round" stroke-linejoin="round">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg>
					</button>
				</div>
				<div class="fmdm-foot__actions">
					<a href="#contact" class="fm-cta-btn fmdm-foot__cta">Talk to Our Team <svg width="20" height="20"
							viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
							stroke-linecap="round" stroke-linejoin="round">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg></a>

				</div>
			</div>
			<p class="fm-text" style="max-width: 900px; margin: 24px auto 0; text-align: center; font-size: 13px;">The
				right structure, crop and growing system depend on site conditions and project requirements. Any
				investment, yield or return estimate should be prepared after a detailed assessment.</p>
		</section>


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
					<h2 class="fm-heading fmfp__title">Let’s Plan Your<br><span class="fmdm__accent">Farm Project</span>
					</h2>
					<p class="fm-text fmfp__text">Share a few details about your land, resources and objectives. Our
						team can use this information to understand your requirements and discuss suitable next steps.
					</p>
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
								<p class="fm-text fmfp-panel__sub">Tell us where your land is and how much area you plan
									to develop.</p>
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
										type="text" name="location" placeholder="Enter village, district and state"
										required></span></label>
							<div class="fmfp-field fmfp-field--split"><span class="fmfp-field__icon"><svg
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
										stroke-linecap="round" stroke-linejoin="round">
										<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
										<line x1="3" y1="9" x2="21" y2="9"></line>
										<line x1="9" y1="21" x2="9" y2="9"></line>
									</svg></span><label class="fmfp-field__main"><span class="fmfp-field__label">Land
										Area</span><input class="fmfp-field__control" type="number" name="area" value=""
										min="0.1" step="0.1" required></label><span
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
								<p class="fm-text fmfp-panel__sub">Your available resources help determine suitable
									structures and growing systems.</p>
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
										<option value="" selected disabled>Borewell</option>
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
										<option value="" selected disabled>Year-round</option>
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
										<option value="" selected disabled>Black Cotton</option>
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
										<option value="" selected disabled>Grid</option>
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
								<p class="fm-text fmfp-panel__sub">Share your crop interests and preferred growing
									approach.</p>
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
										<option value="" selected disabled>Capsicum</option>
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
										<option value="" selected disabled>Polyhouse</option>
										<option>Hydroponic</option>
										<option>Nethouse</option>
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
										<option value="" selected disabled>25 - 50 Lakhs</option>
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
										<option value="" selected disabled>Intermediate</option>
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
								<p class="fm-text fmfp-panel__sub">How can our team reach you to discuss your project?
								</p>
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
										placeholder="e.g. Ramesh Patel"
										placeholder="Enter your full name"></span></label>
							<label class="fmfp-field"><span class="fmfp-field__icon"><svg viewBox="0 0 24 24"
										fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<path
											d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
										</path>
									</svg></span><span class="fmfp-field__main"><span class="fmfp-field__label">Phone
										Number</span><input class="fmfp-field__control" type="tel" name="phone" required
										pattern="^[0-9]{10}$" placeholder="9876543210"
										placeholder="Enter 10-digit mobile number"></span></label>
							<label class="fmfp-field"><span class="fmfp-field__icon"><svg viewBox="0 0 24 24"
										fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
										stroke-linejoin="round">
										<path
											d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
										</path>
										<polyline points="22,6 12,13 2,6"></polyline>
									</svg></span><span class="fmfp-field__main"><span class="fmfp-field__label">Email
										Address</span><input class="fmfp-field__control" type="email" name="email"
										required placeholder="john@example.com"
										placeholder="you@example.com"></span></label>
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
							<p class="fmfp-prev__title">Your Project Snapshot</p>
							<p class="fmfp-prev__sub">Illustrative example only</p>
						</div>
					</header>
					<ul class="fmfp-prev__rows">
						<li class="fmfp-row"><span class="fmfp-row__icon"><svg viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
									stroke-linejoin="round">
									<path d="M12 22v-9" />
									<path d="M12 13C7 13 4 8 4 5c4 0 8 2 8 8Z" />
									<path d="M12 13c5 0 8-5 8-8-4 0-8 2-8 8Z" />
								</svg></span><span class="fmfp-row__lbl">Selected crop</span><strong
								class="fmfp-row__val" data-fmfp-out="crop">To be discussed</strong></li>
						<li class="fmfp-row"><span class="fmfp-row__icon"><svg viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
									stroke-linejoin="round">
									<path d="M3 21h18"></path>
									<path d="M4 21V5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v16"></path>
									<path d="M9 21v-4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v4"></path>
								</svg></span><span class="fmfp-row__lbl">Preferred growing model</span><strong
								class="fmfp-row__val" data-fmfp-out="model">To be selected</strong></li>
						<li class="fmfp-row"><span class="fmfp-row__icon"><svg viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
									stroke-linejoin="round">
									<circle cx="12" cy="12" r="10"></circle>
									<path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"></path>
									<path d="M12 18V6"></path>
								</svg></span><span class="fmfp-row__lbl">Investment assessment</span><strong
								class="fmfp-row__val" data-fmfp-out="invest">To be assessed</strong></li>
						<li class="fmfp-row"><span class="fmfp-row__icon"><svg viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
									stroke-linejoin="round">
									<line x1="18" y1="20" x2="18" y2="10"></line>
									<line x1="12" y1="20" x2="12" y2="4"></line>
									<line x1="6" y1="20" x2="6" y2="14"></line>
									<polyline points="3 14 8 10 12 14 21 3"></polyline>
								</svg></span><span class="fmfp-row__lbl">Commercial assessment</span><strong
								class="fmfp-row__val" data-fmfp-out="roi">2.5 - 3.5 Years</strong></li>
						<li class="fmfp-row"><span class="fmfp-row__icon"><svg viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
									stroke-linejoin="round">
									<polyline points="15 3 21 3 21 9"></polyline>
									<polyline points="9 21 3 21 3 15"></polyline>
									<line x1="21" y1="3" x2="14" y2="10"></line>
									<line x1="3" y1="21" x2="10" y2="14"></line>
								</svg></span><span class="fmfp-row__lbl">Proposed project scale</span><strong
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
						<span class="fmfp-prev__cta-text">Discuss a site-specific project assessment, suitable crop
							options and an indicative cost structure with our team.</span>
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
