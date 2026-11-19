@extends('layouts.app')

@section('title', 'Resources & Blog | Future Agri Infra')
@section('body_class', 'protected-page')

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
					<span class="fmab-eyebrow">Knowledge Hub<i class="fmab-eyebrow__line"></i></span>

					<h1 class="fm-heading fmab__title">
						Articles &amp; <br>Industry <span class="fmdm__accent">Insights</span>
					</h1>

					<p class="fm-text fmab__text">
						Discover practical guides, technical insights, and high-value strategies for modern protected farming.
					</p>

					<a href="#blog" class="fm-cta-btn">
						Explore Articles
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
							stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg>
					</a>
				</div>


			</div>
		</section>

		<!-- ========== BLOG LISTING SECTION ========== -->
		<section class="fmbl" id="blog">
			<div class="fmbl__inner">

				<!-- CATEGORY PILLS (real links to category pages) -->
				<nav class="fmbl-filters" aria-label="Article categories">
					<a class="fmbl-pill is-active" href="/blog" aria-current="page">All Articles</a>
					<a class="fmbl-pill" href="/blog/category/protected-farming">Protected Farming</a>
					<a class="fmbl-pill" href="/blog/category/crop-solutions">Crop Solutions</a>
					<a class="fmbl-pill" href="/blog/category/automation">Automation</a>
					<a class="fmbl-pill" href="/blog/category/growing-systems">Growing Systems</a>
					<a class="fmbl-pill" href="/blog/category/industry-insights">Industry Insights</a>
					<a class="fmbl-pill" href="/blog/category/sustainability">Sustainability</a>
				</nav>

				<div class="fmbl__layout">

					<!-- ========== MAIN: ARTICLE GRID ========== -->
					<div class="fmbl__main">
						<div class="fmbl-grid">

							<!-- CARD 1: wide lead card (spans 2 columns) -->
							<article class="fmbl-card fmbl-card--top fmbl-card--wide">
								<figure class="fmbl-card__media">
									<img src="images/banner3.jpeg" alt="Rows of lettuce growing inside a large greenhouse" loading="eager" width="1200" height="520">
								</figure>
								<div class="fmbl-card__body">
									<div class="fmbl-card__meta">
										<span class="fmbl-tag">Protected Farming</span>
										<time class="fmbl-date" datetime="2026-10-12">Oct 12, 2026</time>
									</div>
									<h3 class="fm-heading fmbl-card__title">
										<a class="fmbl-card__link" href="{{ route('blog.details') }}">How Protected Farming is Transforming Modern Agriculture</a>
									</h3>
									<p class="fm-text fmbl-card__text">Discover how protected farming helps achieve higher yields, better quality and year-round production while reducing climate risks.</p>
									<span class="fmbl-card__more" aria-hidden="true">
										Read More
										<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M5 12h14M12 5l7 7-7 7"/>
										</svg>
									</span>
								</div>
							</article>

							<!-- CARD 2: narrow card -->
							<article class="fmbl-card fmbl-card--top">
								<figure class="fmbl-card__media">
									<img src="images/tomatoo.webp" alt="Ripe red tomatoes on the vine" loading="eager" width="600" height="520">
								</figure>
								<div class="fmbl-card__body">
									<div class="fmbl-card__meta">
										<span class="fmbl-tag">Crop Solutions</span>
										<time class="fmbl-date" datetime="2026-10-08">Oct 08, 2026</time>
									</div>
									<h3 class="fm-heading fmbl-card__title">
										<a class="fmbl-card__link" href="{{ route('blog.details') }}">Best Crops for Polyhouse Farming in India</a>
									</h3>
									<p class="fm-text fmbl-card__text">Explore high-value crops that thrive in protected environments and offer better market returns.</p>
									<span class="fmbl-card__more" aria-hidden="true">
										Read More
										<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M5 12h14M12 5l7 7-7 7"/>
										</svg>
									</span>
								</div>
							</article>

							<!-- CARD 3: standard card -->
							<article class="fmbl-card">
								<figure class="fmbl-card__media">
									<img src="images/gfar.png" alt="Hydroponic lettuce in white channels" loading="lazy" width="600" height="420">
								</figure>
								<div class="fmbl-card__body">
									<div class="fmbl-card__meta">
										<span class="fmbl-tag">Growing Systems</span>
										<time class="fmbl-date" datetime="2026-10-05">Oct 05, 2026</time>
									</div>
									<h3 class="fm-heading fmbl-card__title">
										<a class="fmbl-card__link" href="{{ route('blog.details') }}">Hydroponics vs Traditional Farming: Key Differences</a>
									</h3>
									<p class="fm-text fmbl-card__text">A detailed comparison to help you choose the right growing system for your goals.</p>
									<span class="fmbl-card__more" aria-hidden="true">
										Read More
										<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M5 12h14M12 5l7 7-7 7"/>
										</svg>
									</span>
								</div>
							</article>

							<!-- CARD 4 -->
							<article class="fmbl-card">
								<figure class="fmbl-card__media">
									<img src="images/automation.png" alt="Automated greenhouse irrigation and climate control system" loading="lazy" width="600" height="420">
								</figure>
								<div class="fmbl-card__body">
									<div class="fmbl-card__meta">
										<span class="fmbl-tag">Automation</span>
										<time class="fmbl-date" datetime="2026-10-02">Oct 02, 2026</time>
									</div>
									<h3 class="fm-heading fmbl-card__title">
										<a class="fmbl-card__link" href="{{ route('blog.details') }}">Role of Automation in Modern Greenhouses</a>
									</h3>
									<p class="fm-text fmbl-card__text">Learn how smart automation improves efficiency, reduces manual work and ensures consistent crop quality.</p>
									<span class="fmbl-card__more" aria-hidden="true">
										Read More
										<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M5 12h14M12 5l7 7-7 7"/>
										</svg>
									</span>
								</div>
							</article>

							<!-- CARD 5 -->
							<article class="fmbl-card">
								<figure class="fmbl-card__media">
									<img src="images/pro1.jpeg" alt="Agricultural sensors and innovative farm technology" loading="lazy" width="600" height="420">
								</figure>
								<div class="fmbl-card__body">
									<div class="fmbl-card__meta">
										<span class="fmbl-tag">Industry Insights</span>
										<time class="fmbl-date" datetime="2026-09-28">Sep 28, 2026</time>
									</div>
									<h3 class="fm-heading fmbl-card__title">
										<a class="fmbl-card__link" href="{{ route('blog.details') }}">Top Agricultural Trends to Watch in 2026</a>
									</h3>
									<p class="fm-text fmbl-card__text">Explore the latest innovations and technologies shaping the future of farming.</p>
									<span class="fmbl-card__more" aria-hidden="true">
										Read More
										<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M5 12h14M12 5l7 7-7 7"/>
										</svg>
									</span>
								</div>
							</article>

							<!-- CARD 6 -->
							<article class="fmbl-card">
								<figure class="fmbl-card__media">
									<img src="images/farm00.jpeg" alt="Eco-friendly farming and soil water conservation" loading="lazy" width="600" height="420">
								</figure>
								<div class="fmbl-card__body">
									<div class="fmbl-card__meta">
										<span class="fmbl-tag">Sustainability</span>
										<time class="fmbl-date" datetime="2026-09-20">Sep 20, 2026</time>
									</div>
									<h3 class="fm-heading fmbl-card__title">
										<a class="fmbl-card__link" href="{{ route('blog.details') }}">Sustainable Farming Practices for a Healthier Future</a>
									</h3>
									<p class="fm-text fmbl-card__text">Learn practical steps to reduce environmental impact and build a more resilient food system.</p>
									<span class="fmbl-card__more" aria-hidden="true">
										Read More
										<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M5 12h14M12 5l7 7-7 7"/>
										</svg>
									</span>
								</div>
							</article>

							<!-- CARD 7 -->
							<article class="fmbl-card">
								<figure class="fmbl-card__media">
									<img src="images/banner2.jpeg" alt="Structure of a commercial polyhouse greenhouse" loading="lazy" width="600" height="420">
								</figure>
								<div class="fmbl-card__body">
									<div class="fmbl-card__meta">
										<span class="fmbl-tag">Protected Farming</span>
										<time class="fmbl-date" datetime="2026-09-20">Sep 20, 2026</time>
									</div>
									<h3 class="fm-heading fmbl-card__title">
										<a class="fmbl-card__link" href="{{ route('blog.details') }}">Choosing the Right Greenhouse Structure</a>
									</h3>
									<p class="fm-text fmbl-card__text">Understand the different types of greenhouse structures and which one suits your needs.</p>
									<span class="fmbl-card__more" aria-hidden="true">
										Read More
										<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M5 12h14M12 5l7 7-7 7"/>
										</svg>
									</span>
								</div>
							</article>

							<!-- CARD 8 -->
							<article class="fmbl-card">
								<figure class="fmbl-card__media">
									<img src="images/farm5.jpeg" alt="Healthy high-yield crop with balanced nutrient fertigation" loading="lazy" width="600" height="420">
								</figure>
								<div class="fmbl-card__body">
									<div class="fmbl-card__meta">
										<span class="fmbl-tag">Crop Solutions</span>
										<time class="fmbl-date" datetime="2026-09-15">Sep 15, 2026</time>
									</div>
									<h3 class="fm-heading fmbl-card__title">
										<a class="fmbl-card__link" href="{{ route('blog.details') }}">Nutrient Management for High-Yield Crops</a>
									</h3>
									<p class="fm-text fmbl-card__text">A complete guide to maintaining the right nutrient balance for healthier and more productive crops.</p>
									<span class="fmbl-card__more" aria-hidden="true">
										Read More
										<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M5 12h14M12 5l7 7-7 7"/>
										</svg>
									</span>
								</div>
							</article>

						</div>
						<!-- pagination goes here -->
					</div>

					<!-- ========== SIDEBAR ========== -->
					<aside class="fmbl__aside" aria-label="Blog sidebar">

						<form class="fmbl-search" role="search" action="/blog" method="get">
							<label class="fmbl-sr" for="fmbl-q">Search articles</label>
							<input class="fmbl-search__input" id="fmbl-q" name="q" type="search" placeholder="Search articles..." autocomplete="off">
							<button class="fmbl-search__btn" type="submit" aria-label="Search">
								<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<circle cx="11" cy="11" r="8"/>
									<line x1="21" y1="21" x2="16.65" y2="16.65"/>
								</svg>
							</button>
						</form>

						<div class="fmbl-aside__pair">

							<nav class="fmbl-cats" aria-label="Categories">
								<h3 class="fm-heading fmbl-side-title">Categories</h3>
								<ul class="fmbl-cats__list">
									<li><a class="fmbl-cats__row is-active" href="/blog"><span>All Articles</span><span class="fmbl-cats__count">26</span></a></li>
									<li><a class="fmbl-cats__row" href="/blog/category/protected-farming"><span>Protected Farming</span><span class="fmbl-cats__count">8</span></a></li>
									<li><a class="fmbl-cats__row" href="/blog/category/crop-solutions"><span>Crop Solutions</span><span class="fmbl-cats__count">6</span></a></li>
									<li><a class="fmbl-cats__row" href="/blog/category/automation"><span>Automation</span><span class="fmbl-cats__count">4</span></a></li>
									<li><a class="fmbl-cats__row" href="/blog/category/growing-systems"><span>Growing Systems</span><span class="fmbl-cats__count">5</span></a></li>
									<li><a class="fmbl-cats__row" href="/blog/category/industry-insights"><span>Industry Insights</span><span class="fmbl-cats__count">3</span></a></li>
									<li><a class="fmbl-cats__row" href="/blog/category/sustainability"><span>Sustainability</span><span class="fmbl-cats__count">2</span></a></li>
								</ul>
							</nav>

							<section class="fmbl-pop" aria-label="Popular posts">
								<h3 class="fm-heading fmbl-side-title">Popular Posts</h3>
								<ul class="fmbl-pop__list">
									<li class="fmbl-pop__item">
										<a class="fmbl-pop__link" href="{{ route('blog.details') }}">
											<img class="fmbl-pop__thumb" src="images/banner3.jpeg" alt="" loading="lazy" width="120" height="120">
											<span class="fmbl-pop__txt">
												<time class="fmbl-pop__date" datetime="2026-10-12">Oct 12, 2026</time>
												<span class="fmbl-pop__title">How Protected Farming is Transforming Modern Agriculture</span>
											</span>
										</a>
									</li>
									<li class="fmbl-pop__item">
										<a class="fmbl-pop__link" href="{{ route('blog.details') }}">
											<img class="fmbl-pop__thumb" src="images/tomatoo.webp" alt="" loading="lazy" width="120" height="120">
											<span class="fmbl-pop__txt">
												<time class="fmbl-pop__date" datetime="2026-10-08">Oct 08, 2026</time>
												<span class="fmbl-pop__title">Best Crops for Polyhouse Farming in India</span>
											</span>
										</a>
									</li>
									<li class="fmbl-pop__item">
										<a class="fmbl-pop__link" href="{{ route('blog.details') }}">
											<img class="fmbl-pop__thumb" src="images/gfar.png" alt="" loading="lazy" width="120" height="120">
											<span class="fmbl-pop__txt">
												<time class="fmbl-pop__date" datetime="2026-10-05">Oct 05, 2026</time>
												<span class="fmbl-pop__title">Hydroponics vs Traditional Farming: Key Differences</span>
											</span>
										</a>
									</li>
									<li class="fmbl-pop__item">
										<a class="fmbl-pop__link" href="{{ route('blog.details') }}">
											<img class="fmbl-pop__thumb" src="images/automation.png" alt="" loading="lazy" width="120" height="120">
											<span class="fmbl-pop__txt">
												<time class="fmbl-pop__date" datetime="2026-10-02">Oct 02, 2026</time>
												<span class="fmbl-pop__title">Role of Automation in Modern Greenhouses</span>
											</span>
										</a>
									</li>
								</ul>
							</section>

						</div>
					</aside>

				</div>
			</div>
		</section>
@endsection
