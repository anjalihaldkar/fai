@extends('layouts.app')

@section('title', 'Complete Curriculum | Protected Farming & Commercial Agriculture Training')
@section('body_class', 'protected-page training-detail-page')

@section('content')
<section class="fm-section fmab" id="curriculum-hero">
			<!-- background photo -->
			<div class="fmab__media">
				<img src="images/banner3.jpeg" alt="Protected cultivation polyhouse with lush green crops"
					class="fmab__img" loading="eager">
			</div>

			<div class="fmab__inner">
				<!-- LEFT: text -->
				<div class="fmab__content">
					<span class="fmab-eyebrow">Training Curriculum<i class="fmab-eyebrow__line"></i></span>

					<h1 class="fm-heading ">
						Commercial Farming <br><span class="fmdm__accent">Masterclass</span>
					</h1>

					<p class="fm-text fmab__text">
						A structured 20-module journey taking you from foundational concepts to building and operating profitable protected farms.
					</p>

					<a href="#curriculum" class="fm-cta-btn">
						View Curriculum
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
							stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg>
					</a>
				</div>


			</div>
		</section>

		<main>
			<!-- ===================================================================
			     COMPLETE CURRICULUM SECTION (Pure HTML + CSS)
			     =================================================================== -->
			<section class="fmcu" id="curriculum">
				<div class="fmcu__inner">

					<!-- SEVEN PHASE TABS (Sticky Navigation) -->
					<div class="fmcu-tabs" aria-label="Phase navigation">
						<a href="#fmcu-phase-1" class="fmcu-tab is-active" data-phase="1">
							<span class="fmcu-tab__icon" aria-hidden="true">
								<svg viewBox="0 0 24 24"><path d="M7 20h10"/><path d="M10 20c5.5-2.5.8-6.4 3-10"/><path d="M9.5 9.4c1.1.8 1.8 2.2 2.3 3.7-2 .4-3.5.4-4.8-.3-1.2-.6-2.3-1.9-2.1-3.9 2-.2 3.5.1 4.6.5z"/><path d="M14.1 6a7 7 0 0 0-1.1 4c1.9-.1 3.3-.6 4.4-1.5 1.2-1 1.7-2.6 1.4-4.2-1.9 0-3.4.7-4.7 1.7z"/></svg>
							</span>
							<span class="fmcu-tab__body">
								<span class="fmcu-tab__phase">Phase 01</span>
								<span class="fm-heading fmcu-tab__title">Understand the<br>Basics</span>
								<span class="fmcu-tab__range">Modules 01 &ndash; 02</span>
							</span>
							<span class="fmcu-tab__arrow" aria-hidden="true">
								<svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
							</span>
						</a>

						<a href="#fmcu-phase-2" class="fmcu-tab" data-phase="2">
							<span class="fmcu-tab__icon" aria-hidden="true">
								<svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
							</span>
							<span class="fmcu-tab__body">
								<span class="fmcu-tab__phase">Phase 02</span>
								<span class="fm-heading fmcu-tab__title">Understand the<br>Technology</span>
								<span class="fmcu-tab__range">Modules 03 &ndash; 06</span>
							</span>
							<span class="fmcu-tab__arrow" aria-hidden="true">
								<svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
							</span>
						</a>

						<a href="#fmcu-phase-3" class="fmcu-tab" data-phase="3">
							<span class="fmcu-tab__icon" aria-hidden="true">
								<svg viewBox="0 0 24 24"><line x1="12" y1="20" x2="12" y2="10"/><line x1="18" y1="20" x2="18" y2="4"/><line x1="6" y1="20" x2="6" y2="16"/><path d="M3 20h18"/></svg>
							</span>
							<span class="fmcu-tab__body">
								<span class="fmcu-tab__phase">Phase 03</span>
								<span class="fm-heading fmcu-tab__title">Plan the<br>Right Farm</span>
								<span class="fmcu-tab__range">Modules 07 &ndash; 10</span>
							</span>
							<span class="fmcu-tab__arrow" aria-hidden="true">
								<svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
							</span>
						</a>

						<a href="#fmcu-phase-4" class="fmcu-tab" data-phase="4">
							<span class="fmcu-tab__icon" aria-hidden="true">
								<svg viewBox="0 0 24 24"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>
							</span>
							<span class="fmcu-tab__body">
								<span class="fmcu-tab__phase">Phase 04</span>
								<span class="fm-heading fmcu-tab__title">Learn<br>Operations</span>
								<span class="fmcu-tab__range">Modules 11 &ndash; 14</span>
							</span>
							<span class="fmcu-tab__arrow" aria-hidden="true">
								<svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
							</span>
						</a>

						<a href="#fmcu-phase-5" class="fmcu-tab" data-phase="5">
							<span class="fmcu-tab__icon" aria-hidden="true">
								<svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
							</span>
							<span class="fmcu-tab__body">
								<span class="fmcu-tab__phase">Phase 05</span>
								<span class="fm-heading fmcu-tab__title">Build the<br>Project</span>
								<span class="fmcu-tab__range">Modules 15 &ndash; 17</span>
							</span>
							<span class="fmcu-tab__arrow" aria-hidden="true">
								<svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
							</span>
						</a>

						<a href="#fmcu-phase-6" class="fmcu-tab" data-phase="6">
							<span class="fmcu-tab__icon" aria-hidden="true">
								<svg viewBox="0 0 24 24"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
							</span>
							<span class="fmcu-tab__body">
								<span class="fmcu-tab__phase">Phase 06</span>
								<span class="fm-heading fmcu-tab__title">Test<br>Commercials</span>
								<span class="fmcu-tab__range">Modules 18 &ndash; 19</span>
							</span>
							<span class="fmcu-tab__arrow" aria-hidden="true">
								<svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
							</span>
						</a>

						<a href="#fmcu-phase-7" class="fmcu-tab" data-phase="7">
							<span class="fmcu-tab__icon" aria-hidden="true">
								<svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
							</span>
							<span class="fmcu-tab__body">
								<span class="fmcu-tab__phase">Phase 07</span>
								<span class="fm-heading fmcu-tab__title">Apply<br>Everything</span>
								<span class="fmcu-tab__range">Module 20</span>
							</span>
							<span class="fmcu-tab__arrow" aria-hidden="true">
								<svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
							</span>
						</a>
					</div>

					<!-- SEVEN PHASE PANELS -->
					<div class="fmcu__panels">

						<!-- PANEL 1 -->
						<section class="fmcu-panel fmcu-panel--1" id="fmcu-phase-1" aria-label="Phase 01: Understand the Basics">
							<header class="fmcu-phead">
								<span class="fmcu-phead__icon" aria-hidden="true">
									<svg viewBox="0 0 24 24"><path d="M7 20h10"/><path d="M10 20c5.5-2.5.8-6.4 3-10"/><path d="M9.5 9.4c1.1.8 1.8 2.2 2.3 3.7-2 .4-3.5.4-4.8-.3-1.2-.6-2.3-1.9-2.1-3.9 2-.2 3.5.1 4.6.5z"/><path d="M14.1 6a7 7 0 0 0-1.1 4c1.9-.1 3.3-.6 4.4-1.5 1.2-1 1.7-2.6 1.4-4.2-1.9 0-3.4.7-4.7 1.7z"/></svg>
								</span>
								<div class="fmcu-phead__title">
									<span class="fmcu-phead__phase">Phase 01</span>
									<h3 class="fm-heading fmcu-phead__name">Understand the Basics</h3>
								</div>
								<p class="fm-text fmcu-phead__text">Build a strong foundation in protected cultivation, hydroponics and modern farming concepts.</p>
							</header>

							<div class="fmcu-mods">
								<details class="fmcu-mod" name="fmcu-ph1" open>
									<summary class="fmcu-mod__sum">
										<span class="fmcu-mod__no">01</span>
										<span class="fmcu-mod__main">
											<h4 class="fm-heading fmcu-mod__title">Protected Farming &amp; Hydroponics: The Basics</h4>
											<span class="fmcu-mod__meta">
												<span class="fmcu-mod__meta-item">
													<span class="fmcu-mod__meta-icon" aria-hidden="true">
														<svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
													</span>
													9 lessons
												</span>
												<span class="fmcu-mod__meta-item">
													<span class="fmcu-mod__meta-icon" aria-hidden="true">
														<svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
													</span>
													~ 60 min
												</span>
											</span>
											<span class="fm-text fmcu-mod__text">Learn what protected cultivation is, how hydroponics works and why it is used in commercial farming.</span>
										</span>
										<span class="fmcu-mod__chev" aria-hidden="true">
											<svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
										</span>
									</summary>
									<div class="fmcu-lessons">
										<p class="fmcu-lessons__label">Lessons in this module</p>
										<ol class="fmcu-lesson-list">
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">What is protected cultivation?</span><span class="fmcu-lesson__time">08:10</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">What is hydroponics?</span><span class="fmcu-lesson__time">07:22</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Open field vs protected farming</span><span class="fmcu-lesson__time">07:18</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Soil vs soilless vs hydroponic growing</span><span class="fmcu-lesson__time">08:12</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Nethouse, polyhouse, greenhouse and indoor farming</span><span class="fmcu-lesson__time">09:05</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">What environmental control actually means</span><span class="fmcu-lesson__time">06:48</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">What crops are commonly grown</span><span class="fmcu-lesson__time">06:35</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Hobby setup vs commercial farm</span><span class="fmcu-lesson__time">05:58</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Common myths &amp; misconceptions</span><span class="fmcu-lesson__time">8 questions</span></li>
										</ol>
									</div>
								</details>

								<details class="fmcu-mod" name="fmcu-ph1">
									<summary class="fmcu-mod__sum">
										<span class="fmcu-mod__no">02</span>
										<span class="fmcu-mod__main">
											<h4 class="fm-heading fmcu-mod__title">Anatomy of a Commercial Hi-Tech Farm</h4>
											<span class="fmcu-mod__meta">
												<span class="fmcu-mod__meta-item">
													<span class="fmcu-mod__meta-icon" aria-hidden="true">
														<svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
													</span>
													2 lessons
												</span>
												<span class="fmcu-mod__meta-item">
													<span class="fmcu-mod__meta-icon" aria-hidden="true">
														<svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
													</span>
													~ 80 min
												</span>
											</span>
											<span class="fm-text fmcu-mod__text">Explore the key components of a modern commercial farm and how they work together.</span>
										</span>
										<span class="fmcu-mod__chev" aria-hidden="true">
											<svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
										</span>
									</summary>
									<div class="fmcu-lessons">
										<p class="fmcu-lessons__label">Lessons in this module</p>
										<ol class="fmcu-lesson-list">
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Key components of a hi-tech farm</span><span class="fmcu-lesson__time">40:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">How the components work together</span><span class="fmcu-lesson__time">40:00</span></li>
										</ol>
									</div>
								</details>
							</div>
						</section>

						<!-- PANEL 2 -->
						<section class="fmcu-panel fmcu-panel--2" id="fmcu-phase-2" aria-label="Phase 02: Understand the Technology">
							<header class="fmcu-phead">
								<span class="fmcu-phead__icon" aria-hidden="true">
									<svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
								</span>
								<div class="fmcu-phead__title">
									<span class="fmcu-phead__phase">Phase 02</span>
									<h3 class="fm-heading fmcu-phead__name">Understand the Technology</h3>
								</div>
								<p class="fm-text fmcu-phead__text">Learn how structures, climate control, growing systems, water and automation work.</p>
							</header>

							<div class="fmcu-mods">
								<details class="fmcu-mod" name="fmcu-ph2" open>
									<summary class="fmcu-mod__sum">
										<span class="fmcu-mod__no">03</span>
										<span class="fmcu-mod__main">
											<h4 class="fm-heading fmcu-mod__title">Structures &amp; Climate Control</h4>
											<span class="fmcu-mod__meta">
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></span>3 lessons</span>
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>~ 45 min</span>
											</span>
											<span class="fm-text fmcu-mod__text">Evaluate polyhouse cladding, frame designs, natural ventilation and automated cooling systems.</span>
										</span>
										<span class="fmcu-mod__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span>
									</summary>
									<div class="fmcu-lessons">
										<p class="fmcu-lessons__label">Lessons in this module</p>
										<ol class="fmcu-lesson-list">
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Greenhouse and polyhouse structures</span><span class="fmcu-lesson__time">15:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Ventilation, cooling and heating</span><span class="fmcu-lesson__time">15:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Climate screens and shading systems</span><span class="fmcu-lesson__time">15:00</span></li>
										</ol>
									</div>
								</details>

								<details class="fmcu-mod" name="fmcu-ph2">
									<summary class="fmcu-mod__sum">
										<span class="fmcu-mod__no">04</span>
										<span class="fmcu-mod__main">
											<h4 class="fm-heading fmcu-mod__title">Growing Systems &amp; Root Zone</h4>
											<span class="fmcu-mod__meta">
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></span>3 lessons</span>
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>~ 45 min</span>
											</span>
											<span class="fm-text fmcu-mod__text">Compare NFT, Dutch buckets, grow bags and substrate aeroponics for root health.</span>
										</span>
										<span class="fmcu-mod__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span>
									</summary>
									<div class="fmcu-lessons">
										<p class="fmcu-lessons__label">Lessons in this module</p>
										<ol class="fmcu-lesson-list">
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">NFT, DWC and media-based systems</span><span class="fmcu-lesson__time">15:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Root zone management &amp; substrates</span><span class="fmcu-lesson__time">15:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Oxygenation and temperature balance</span><span class="fmcu-lesson__time">15:00</span></li>
										</ol>
									</div>
								</details>

								<details class="fmcu-mod" name="fmcu-ph2">
									<summary class="fmcu-mod__sum">
										<span class="fmcu-mod__no">05</span>
										<span class="fmcu-mod__main">
											<h4 class="fm-heading fmcu-mod__title">Water, Nutrients &amp; Fertigation</h4>
											<span class="fmcu-mod__meta">
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></span>3 lessons</span>
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>~ 50 min</span>
											</span>
											<span class="fm-text fmcu-mod__text">Master water source testing, recipe compounding, EC/pH parameters and closed-loop dosing.</span>
										</span>
										<span class="fmcu-mod__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span>
									</summary>
									<div class="fmcu-lessons">
										<p class="fmcu-lessons__label">Lessons in this module</p>
										<ol class="fmcu-lesson-list">
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Water quality and filtration standards</span><span class="fmcu-lesson__time">18:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Nutrient formulation and EC/pH balance</span><span class="fmcu-lesson__time">16:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Automated fertigation management</span><span class="fmcu-lesson__time">16:00</span></li>
										</ol>
									</div>
								</details>

								<details class="fmcu-mod" name="fmcu-ph2">
									<summary class="fmcu-mod__sum">
										<span class="fmcu-mod__no">06</span>
										<span class="fmcu-mod__main">
											<h4 class="fm-heading fmcu-mod__title">Automation &amp; Monitoring</h4>
											<span class="fmcu-mod__meta">
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></span>3 lessons</span>
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>~ 40 min</span>
											</span>
											<span class="fm-text fmcu-mod__text">Deploy sensors, environmental telemetry, motorized vents and automated irrigation controllers.</span>
										</span>
										<span class="fmcu-mod__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span>
									</summary>
									<div class="fmcu-lessons">
										<p class="fmcu-lessons__label">Lessons in this module</p>
										<ol class="fmcu-lesson-list">
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Sensors and environmental telemetry</span><span class="fmcu-lesson__time">14:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Irrigation controllers and dosing units</span><span class="fmcu-lesson__time">13:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Data logging and alert systems</span><span class="fmcu-lesson__time">13:00</span></li>
										</ol>
									</div>
								</details>
							</div>
						</section>

						<!-- PANEL 3 -->
						<section class="fmcu-panel fmcu-panel--3" id="fmcu-phase-3" aria-label="Phase 03: Plan the Right Farm">
							<header class="fmcu-phead">
								<span class="fmcu-phead__icon" aria-hidden="true">
									<svg viewBox="0 0 24 24"><line x1="12" y1="20" x2="12" y2="10"/><line x1="18" y1="20" x2="18" y2="4"/><line x1="6" y1="20" x2="6" y2="16"/><path d="M3 20h18"/></svg>
								</span>
								<div class="fmcu-phead__title">
									<span class="fmcu-phead__phase">Phase 03</span>
									<h3 class="fm-heading fmcu-phead__name">Plan the Right Farm</h3>
								</div>
								<p class="fm-text fmcu-phead__text">Choose crops, site and capacity with clear commercial logic.</p>
							</header>

							<div class="fmcu-mods">
								<details class="fmcu-mod" name="fmcu-ph3" open>
									<summary class="fmcu-mod__sum">
										<span class="fmcu-mod__no">07</span>
										<span class="fmcu-mod__main">
											<h4 class="fm-heading fmcu-mod__title">Choosing Crops &amp; Markets</h4>
											<span class="fmcu-mod__meta">
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></span>3 lessons</span>
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>~ 45 min</span>
											</span>
											<span class="fm-text fmcu-mod__text">Analyze off-season pricing, buyer contracts, wholesale mandates and shelf-life economics.</span>
										</span>
										<span class="fmcu-mod__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span>
									</summary>
									<div class="fmcu-lessons">
										<p class="fmcu-lessons__label">Lessons in this module</p>
										<ol class="fmcu-lesson-list">
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Market demand and buyer identification</span><span class="fmcu-lesson__time">15:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Crop selection criteria for polyhouses</span><span class="fmcu-lesson__time">15:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Off-season pricing and volume estimation</span><span class="fmcu-lesson__time">15:00</span></li>
										</ol>
									</div>
								</details>

								<details class="fmcu-mod" name="fmcu-ph3">
									<summary class="fmcu-mod__sum">
										<span class="fmcu-mod__no">08</span>
										<span class="fmcu-mod__main">
											<h4 class="fm-heading fmcu-mod__title">Site Selection &amp; Layout</h4>
											<span class="fmcu-mod__meta">
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></span>3 lessons</span>
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>~ 40 min</span>
											</span>
											<span class="fm-text fmcu-mod__text">Survey wind exposure, solar azimuth, road access, grid stability and ground slope.</span>
										</span>
										<span class="fmcu-mod__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span>
									</summary>
									<div class="fmcu-lessons">
										<p class="fmcu-lessons__label">Lessons in this module</p>
										<ol class="fmcu-lesson-list">
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Sunlight, wind exposure and topography</span><span class="fmcu-lesson__time">14:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Access roads, water source and grid power</span><span class="fmcu-lesson__time">13:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Farm master plan and operational zones</span><span class="fmcu-lesson__time">13:00</span></li>
										</ol>
									</div>
								</details>

								<details class="fmcu-mod" name="fmcu-ph3">
									<summary class="fmcu-mod__sum">
										<span class="fmcu-mod__no">09</span>
										<span class="fmcu-mod__main">
											<h4 class="fm-heading fmcu-mod__title">Capacity &amp; Production Planning</h4>
											<span class="fmcu-mod__meta">
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></span>3 lessons</span>
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>~ 45 min</span>
											</span>
											<span class="fm-text fmcu-mod__text">Model plant densities, trellis height spacing, nursery staging and rolling weekly harvests.</span>
										</span>
										<span class="fmcu-mod__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span>
									</summary>
									<div class="fmcu-lessons">
										<p class="fmcu-lessons__label">Lessons in this module</p>
										<ol class="fmcu-lesson-list">
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Acreage, plant density and canopy space</span><span class="fmcu-lesson__time">15:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Staggered sowing and harvest calendar</span><span class="fmcu-lesson__time">15:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Yield forecasting and consistency models</span><span class="fmcu-lesson__time">15:00</span></li>
										</ol>
									</div>
								</details>

								<details class="fmcu-mod" name="fmcu-ph3">
									<summary class="fmcu-mod__sum">
										<span class="fmcu-mod__no">10</span>
										<span class="fmcu-mod__main">
											<h4 class="fm-heading fmcu-mod__title">Labour &amp; Workflow</h4>
											<span class="fmcu-mod__meta">
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></span>3 lessons</span>
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>~ 40 min</span>
											</span>
											<span class="fm-text fmcu-mod__text">Standardize pruning routines, worker shifts, harvesting paths and cleanroom hygiene rules.</span>
										</span>
										<span class="fmcu-mod__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span>
									</summary>
									<div class="fmcu-lessons">
										<p class="fmcu-lessons__label">Lessons in this module</p>
										<ol class="fmcu-lesson-list">
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Daily task allocation and staffing</span><span class="fmcu-lesson__time">14:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Packhouse workflow and staging areas</span><span class="fmcu-lesson__time">13:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Safety, sanitation and training protocols</span><span class="fmcu-lesson__time">13:00</span></li>
										</ol>
									</div>
								</details>
							</div>
						</section>

						<!-- PANEL 4 -->
						<section class="fmcu-panel fmcu-panel--4" id="fmcu-phase-4" aria-label="Phase 04: Learn Operations">
							<header class="fmcu-phead">
								<span class="fmcu-phead__icon" aria-hidden="true">
									<svg viewBox="0 0 24 24"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>
								</span>
								<div class="fmcu-phead__title">
									<span class="fmcu-phead__phase">Phase 04</span>
									<h3 class="fm-heading fmcu-phead__name">Learn Operations</h3>
								</div>
								<p class="fm-text fmcu-phead__text">Understand daily farm operations, crop care and harvest handling.</p>
							</header>

							<div class="fmcu-mods">
								<details class="fmcu-mod" name="fmcu-ph4" open>
									<summary class="fmcu-mod__sum">
										<span class="fmcu-mod__no">11</span>
										<span class="fmcu-mod__main">
											<h4 class="fm-heading fmcu-mod__title">Daily Operations</h4>
											<span class="fmcu-mod__meta">
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></span>3 lessons</span>
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>~ 45 min</span>
											</span>
											<span class="fm-text fmcu-mod__text">Implement daily opening checklists, sensor calibration, leachate testing and logbooks.</span>
										</span>
										<span class="fmcu-mod__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span>
									</summary>
									<div class="fmcu-lessons">
										<p class="fmcu-lessons__label">Lessons in this module</p>
										<ol class="fmcu-lesson-list">
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Morning inspection and system checks</span><span class="fmcu-lesson__time">15:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Irrigation logs and sensor verification</span><span class="fmcu-lesson__time">15:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Operational troubleshooting routines</span><span class="fmcu-lesson__time">15:00</span></li>
										</ol>
									</div>
								</details>

								<details class="fmcu-mod" name="fmcu-ph4">
									<summary class="fmcu-mod__sum">
										<span class="fmcu-mod__no">12</span>
										<span class="fmcu-mod__main">
											<h4 class="fm-heading fmcu-mod__title">Crop Management</h4>
											<span class="fmcu-mod__meta">
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></span>3 lessons</span>
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>~ 50 min</span>
											</span>
											<span class="fm-text fmcu-mod__text">Master high-wire trellising, lower-and-lean systems, deleafing and pollination methods.</span>
										</span>
										<span class="fmcu-mod__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span>
									</summary>
									<div class="fmcu-lessons">
										<p class="fmcu-lessons__label">Lessons in this module</p>
										<ol class="fmcu-lesson-list">
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Trellising, pruning and plant training</span><span class="fmcu-lesson__time">18:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Pollination and fruit set monitoring</span><span class="fmcu-lesson__time">16:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Canopy management for airflow</span><span class="fmcu-lesson__time">16:00</span></li>
										</ol>
									</div>
								</details>

								<details class="fmcu-mod" name="fmcu-ph4">
									<summary class="fmcu-mod__sum">
										<span class="fmcu-mod__no">13</span>
										<span class="fmcu-mod__main">
											<h4 class="fm-heading fmcu-mod__title">Pest &amp; Disease Management</h4>
											<span class="fmcu-mod__meta">
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></span>3 lessons</span>
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>~ 45 min</span>
											</span>
											<span class="fm-text fmcu-mod__text">Formulate biological control schedules, trap scouting thresholds and prophylactic sanitization.</span>
										</span>
										<span class="fmcu-mod__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span>
									</summary>
									<div class="fmcu-lessons">
										<p class="fmcu-lessons__label">Lessons in this module</p>
										<ol class="fmcu-lesson-list">
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Integrated pest management (IPM) rules</span><span class="fmcu-lesson__time">15:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Biological controls and beneficials</span><span class="fmcu-lesson__time">15:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Preventive spray schedules &amp; diagnostics</span><span class="fmcu-lesson__time">15:00</span></li>
										</ol>
									</div>
								</details>

								<details class="fmcu-mod" name="fmcu-ph4">
									<summary class="fmcu-mod__sum">
										<span class="fmcu-mod__no">14</span>
										<span class="fmcu-mod__main">
											<h4 class="fm-heading fmcu-mod__title">Harvest &amp; Post-Harvest</h4>
											<span class="fmcu-mod__meta">
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></span>3 lessons</span>
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>~ 40 min</span>
											</span>
											<span class="fm-text fmcu-mod__text">Optimize harvest Brix, field heat removal, sorting, moisture barrier packaging and cold chain.</span>
										</span>
										<span class="fmcu-mod__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span>
									</summary>
									<div class="fmcu-lessons">
										<p class="fmcu-lessons__label">Lessons in this module</p>
										<ol class="fmcu-lesson-list">
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Maturity indices and harvest handling</span><span class="fmcu-lesson__time">14:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Pre-cooling, grading and packaging</span><span class="fmcu-lesson__time">13:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Cold chain preservation and delivery</span><span class="fmcu-lesson__time">13:00</span></li>
										</ol>
									</div>
								</details>
							</div>
						</section>

						<!-- PANEL 5 -->
						<section class="fmcu-panel fmcu-panel--5" id="fmcu-phase-5" aria-label="Phase 05: Build the Project">
							<header class="fmcu-phead">
								<span class="fmcu-phead__icon" aria-hidden="true">
									<svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
								</span>
								<div class="fmcu-phead__title">
									<span class="fmcu-phead__phase">Phase 05</span>
									<h3 class="fm-heading fmcu-phead__name">Build the Project</h3>
								</div>
								<p class="fm-text fmcu-phead__text">Turn the plan into a costed, scheduled and installed project.</p>
							</header>

							<div class="fmcu-mods">
								<details class="fmcu-mod" name="fmcu-ph5" open>
									<summary class="fmcu-mod__sum">
										<span class="fmcu-mod__no">15</span>
										<span class="fmcu-mod__main">
											<h4 class="fm-heading fmcu-mod__title">Project Planning &amp; Costing</h4>
											<span class="fmcu-mod__meta">
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></span>3 lessons</span>
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>~ 50 min</span>
											</span>
											<span class="fm-text fmcu-mod__text">Structure civil work milestones, BOQ verifications, contractor agreements and timelines.</span>
										</span>
										<span class="fmcu-mod__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span>
									</summary>
									<div class="fmcu-lessons">
										<p class="fmcu-lessons__label">Lessons in this module</p>
										<ol class="fmcu-lesson-list">
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Bill of materials and vendor quotation review</span><span class="fmcu-lesson__time">18:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Civil works and infrastructure budget</span><span class="fmcu-lesson__time">16:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Contingency planning and milestone tracking</span><span class="fmcu-lesson__time">16:00</span></li>
										</ol>
									</div>
								</details>

								<details class="fmcu-mod" name="fmcu-ph5">
									<summary class="fmcu-mod__sum">
										<span class="fmcu-mod__no">16</span>
										<span class="fmcu-mod__main">
											<h4 class="fm-heading fmcu-mod__title">Procurement &amp; Installation</h4>
											<span class="fmcu-mod__meta">
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></span>3 lessons</span>
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>~ 45 min</span>
											</span>
											<span class="fm-text fmcu-mod__text">Supervise structural fabrication, foundation anchoring, gutter alignment and apron burial.</span>
										</span>
										<span class="fmcu-mod__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span>
									</summary>
									<div class="fmcu-lessons">
										<p class="fmcu-lessons__label">Lessons in this module</p>
										<ol class="fmcu-lesson-list">
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Structural fabrication and erection quality</span><span class="fmcu-lesson__time">15:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Film tensioning and net cladding standards</span><span class="fmcu-lesson__time">15:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Piping, electrical and plumbing setup</span><span class="fmcu-lesson__time">15:00</span></li>
										</ol>
									</div>
								</details>

								<details class="fmcu-mod" name="fmcu-ph5">
									<summary class="fmcu-mod__sum">
										<span class="fmcu-mod__no">17</span>
										<span class="fmcu-mod__main">
											<h4 class="fm-heading fmcu-mod__title">Commissioning &amp; Handover</h4>
											<span class="fmcu-mod__meta">
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></span>3 lessons</span>
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>~ 40 min</span>
											</span>
											<span class="fm-text fmcu-mod__text">Run pressure tests, injector flow rate verification, emergency backup power and trial cycles.</span>
										</span>
										<span class="fmcu-mod__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span>
									</summary>
									<div class="fmcu-lessons">
										<p class="fmcu-lessons__label">Lessons in this module</p>
										<ol class="fmcu-lesson-list">
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Wet testing irrigation and dosing equipment</span><span class="fmcu-lesson__time">14:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Environmental calibration under load</span><span class="fmcu-lesson__time">13:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Handover checklists and trial run</span><span class="fmcu-lesson__time">13:00</span></li>
										</ol>
									</div>
								</details>
							</div>
						</section>

						<!-- PANEL 6 -->
						<section class="fmcu-panel fmcu-panel--6" id="fmcu-phase-6" aria-label="Phase 06: Test Commercials">
							<header class="fmcu-phead">
								<span class="fmcu-phead__icon" aria-hidden="true">
									<svg viewBox="0 0 24 24"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
								</span>
								<div class="fmcu-phead__title">
									<span class="fmcu-phead__phase">Phase 06</span>
									<h3 class="fm-heading fmcu-phead__name">Test Commercials</h3>
								</div>
								<p class="fm-text fmcu-phead__text">Test revenue, cost and return before you commit.</p>
							</header>

							<div class="fmcu-mods">
								<details class="fmcu-mod" name="fmcu-ph6" open>
									<summary class="fmcu-mod__sum">
										<span class="fmcu-mod__no">18</span>
										<span class="fmcu-mod__main">
											<h4 class="fm-heading fmcu-mod__title">Revenue &amp; Cost Models</h4>
											<span class="fmcu-mod__meta">
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></span>3 lessons</span>
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>~ 50 min</span>
											</span>
											<span class="fm-text fmcu-mod__text">Project fixed Capex depreciation, energy utilities, seed costs, consumable substrates and OpEx.</span>
										</span>
										<span class="fmcu-mod__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span>
									</summary>
									<div class="fmcu-lessons">
										<p class="fmcu-lessons__label">Lessons in this module</p>
										<ol class="fmcu-lesson-list">
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Capital expenditure (CapEx) breakdown</span><span class="fmcu-lesson__time">18:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Operational expenditure (OpEx) forecasting</span><span class="fmcu-lesson__time">16:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Breakeven volume and margin analysis</span><span class="fmcu-lesson__time">16:00</span></li>
										</ol>
									</div>
								</details>

								<details class="fmcu-mod" name="fmcu-ph6">
									<summary class="fmcu-mod__sum">
										<span class="fmcu-mod__no">19</span>
										<span class="fmcu-mod__main">
											<h4 class="fm-heading fmcu-mod__title">ROI &amp; Payback Analysis</h4>
											<span class="fmcu-mod__meta">
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></span>3 lessons</span>
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>~ 45 min</span>
											</span>
											<span class="fm-text fmcu-mod__text">Build internal rate of return (IRR), cash flow sensitivity matrices and bankable DPR drafts.</span>
										</span>
										<span class="fmcu-mod__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span>
									</summary>
									<div class="fmcu-lessons">
										<p class="fmcu-lessons__label">Lessons in this module</p>
										<ol class="fmcu-lesson-list">
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Sensitivity testing against price drops</span><span class="fmcu-lesson__time">15:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Cashflow timeline across five years</span><span class="fmcu-lesson__time">15:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Investor pitch deck and bank DPR prep</span><span class="fmcu-lesson__time">15:00</span></li>
										</ol>
									</div>
								</details>
							</div>
						</section>

						<!-- PANEL 7 -->
						<section class="fmcu-panel fmcu-panel--7" id="fmcu-phase-7" aria-label="Phase 07: Apply Everything">
							<header class="fmcu-phead">
								<span class="fmcu-phead__icon" aria-hidden="true">
									<svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
								</span>
								<div class="fmcu-phead__title">
									<span class="fmcu-phead__phase">Phase 07</span>
									<h3 class="fm-heading fmcu-phead__name">Apply Everything</h3>
								</div>
								<p class="fm-text fmcu-phead__text">Bring every module together in one complete farm plan.</p>
							</header>

							<div class="fmcu-mods">
								<details class="fmcu-mod" name="fmcu-ph7" open>
									<summary class="fmcu-mod__sum">
										<span class="fmcu-mod__no">20</span>
										<span class="fmcu-mod__main">
											<h4 class="fm-heading fmcu-mod__title">Capstone: Your Farm Plan</h4>
											<span class="fmcu-mod__meta">
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></span>3 lessons</span>
												<span class="fmcu-mod__meta-item"><span class="fmcu-mod__meta-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>~ 60 min</span>
											</span>
											<span class="fm-text fmcu-mod__text">Synthesize structure selection, crop agronomy, fertigation formulas and financial underwriting.</span>
										</span>
										<span class="fmcu-mod__chev" aria-hidden="true"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span>
									</summary>
									<div class="fmcu-lessons">
										<p class="fmcu-lessons__label">Lessons in this module</p>
										<ol class="fmcu-lesson-list">
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Synthesizing site, crop and tech choices</span><span class="fmcu-lesson__time">20:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Reviewing the complete financial model</span><span class="fmcu-lesson__time">20:00</span></li>
											<li class="fmcu-lesson"><span class="fmcu-lesson__play" aria-hidden="true"><svg viewBox="0 0 24 24"><polygon points="8,5 19,12 8,19"/></svg></span><span class="fmcu-lesson__title">Final peer review &amp; implementation roadmap</span><span class="fmcu-lesson__time">20:00</span></li>
										</ol>
									</div>
								</details>
							</div>
						</section>

					</div>

				</div>
				<!-- next block goes here -->
			</section>
@endsection
