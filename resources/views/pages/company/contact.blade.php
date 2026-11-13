@extends('layouts.app')

@section('title', 'Contact Us | Future Agri Infra')
@section('body_class', 'fai-page')

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endpush

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
          <span class="fmab-eyebrow">Contact us<i class="fmab-eyebrow__line"></i></span>

          <h1 class="fm-heading ">
            Get in <br>Touch <span class="fmdm__accent">With Us</span>
          </h1>

          <p class="fm-text fmab__text">
            Have a project in mind? Our team is ready to help you plan, build and grow a successful protected farm.
          </p>

          <a href="#fai-contact-title" class="fm-cta-btn">
            Send a Message
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
       <!-- Get in touch -->
    <section class="fai-section fai-contact-section" aria-labelledby="fai-contact-title">
      <div class="container">
        <div class="row g-4 g-xl-5 align-items-stretch">
          <div class="col-12 col-lg-5 d-flex">
            <div class="fai-contact-content">
              <div class="fai-contact-header">
                <span class="fai-contact-eyebrow">
                  <i class="fai-contact-eyebrow__line" aria-hidden="true"></i>
                  GET IN TOUCH
                </span>
                <h2 class="fai-contact-title" id="fai-contact-title">We’re Here to <em>Help</em></h2>
                <p class="fai-contact-desc">
                  Whether you're planning a new farm or improving an existing one, our team is ready to help you take
                  the next step.
                </p>
              </div>

              <ul class="fai-info-list">
                <li class="fai-info-item">
                  <span class="fai-info-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                      <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.46.57 3.58a1 1 0 01-.24 1.01l-2.21 2.2z"/>
                    </svg>
                  </span>
                  <div class="fai-info-stack">
                    <span class="fai-info-label">Call Us</span>
                    <a class="fai-info-value" href="tel:+919998094201">+91 99980 94201</a>
                    <span class="fai-info-note">Speak with our team</span>
                  </div>
                </li>
                <li class="fai-info-item">
                  <span class="fai-info-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                      <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                    </svg>
                  </span>
                  <div class="fai-info-stack">
                    <span class="fai-info-label">Email Us</span>
                    <a class="fai-info-value" href="mailto:khushalidodia142@gmail.com">khushalidodia142@gmail.com</a>
                    <span class="fai-info-note">We usually reply within one business day</span>
                  </div>
                </li>
                <li class="fai-info-item">
                  <span class="fai-info-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                      <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                  </span>
                  <div class="fai-info-stack">
                    <span class="fai-info-label">Visit Us</span>
                    <span class="fai-info-value">Ahmedabad, Gujarat</span>
                    <span class="fai-info-note">Office No. 313, Pehel Lakeview</span>
                  </div>
                </li>
              </ul>

              <div class="fai-contact-signoff">
                <span class="fai-contact-signoff__text">Let’s grow together</span>
                <span class="fai-contact-signoff__arrow" aria-hidden="true">
                  <svg width="34" height="14" viewBox="0 0 34 14" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="0" y1="7" x2="30" y2="7"></line>
                    <polyline points="23 1 30 7 23 13"></polyline>
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-7 d-flex">
            <div class="fai-form-card">
              <div class="fai-form-header">
                <h3 class="fai-form-title">Send Us a Message</h3>
                <p class="fai-form-hint">Our team will get back to you soon.</p>
              </div>

              <form class="needs-validation" id="fai-contact-form" novalidate>

        @if(session('success'))
            <div style="background: #e8f5e9; color: #2e7d32; padding: 16px; border-radius: 8px; margin-bottom: 20px; font-weight: 500;">
                {{ session('success') }}
            </div>
        @endif
        @if($errors->any())
            <div style="background: #ffebee; color: #c62828; padding: 16px; border-radius: 8px; margin-bottom: 20px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
                <div class="row g-3">
                  <div class="col-12 col-md-6">
                    <label class="fai-label" for="fai-name">Full Name <span aria-hidden="true">*</span></label>
                    <input class="form-control fai-field" id="fai-name" name="name" type="text" autocomplete="name"
                      placeholder="Your full name" required>
                    <div class="invalid-feedback">Please enter your name.</div>
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="fai-label" for="fai-email">Email Address <span aria-hidden="true">*</span></label>
                    <input class="form-control fai-field" id="fai-email" name="email" type="email"
                      autocomplete="email" placeholder="you@example.com" required>
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="fai-label" for="fai-phone">Phone Number</label>
                    <input class="form-control fai-field" id="fai-phone" name="phone" type="tel"
                      autocomplete="tel" placeholder="+91">
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="fai-label" for="fai-company">Company / Organization</label>
                    <input class="form-control fai-field" id="fai-company" name="company" type="text"
                      autocomplete="organization" placeholder="Your organization">
                  </div>
                  <div class="col-12">
                    <label class="fai-label" for="fai-project-type">Project Type</label>
                    <select class="form-select fai-field" id="fai-project-type" name="projectType">
                      <option value="" selected>Select a project type</option>
                      <option>Greenhouse / Protected Structure</option>
                      <option>Hydroponics / Growing System</option>
                      <option>Crop Planning</option>
                      <option>Automation</option>
                      <option>Other</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <label class="fai-label" for="fai-message">Message <span aria-hidden="true">*</span></label>
                    <textarea class="form-control fai-field fai-message" id="fai-message" name="message"
                      placeholder="Tell us a little about your project" required></textarea>
                    <div class="invalid-feedback">Please add a message about your project.</div>
                  </div>
                  <div class="col-12">
                    <div class="fai-form-footer">
                      <div>
                        <div class="form-check fai-consent">
                          <input class="form-check-input" id="fai-consent" name="consent" type="checkbox" checked
                            required>
                          <label class="form-check-label" for="fai-consent">
                            I agree to be contacted about my inquiry.
                          </label>
                          <div class="invalid-feedback">Please agree to be contacted before sending.</div>
                        </div>
                      </div>

                      <a href="#fai-contact-title" class="fm-cta-btn">
            Send a Message
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>

                     
                    </div>
                    <p class="fai-form-status" id="fai-form-status" role="status" hidden></p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Find us -->
    <section class="fai-section fai-find-section" aria-labelledby="fai-find-title">
      <div class="container">
        <div class="row align-items-end g-4 fai-find-heading">
          <div class="col-12 col-lg-6">
            <span class="fmos-eyebrow"><i class="fmos-eyebrow__line"></i> Find Us</span>
            <h2 class="fm-heading " id="fai-find-title">Visit our office.</h2>
          </div>
          <div class="col-12 col-lg-6">
            <p class="fm-text fmab__text ">
              Have a project in mind? Visit us to talk through your plans and explore the right growing solution for
              your farm.
            </p>
          </div>
        </div>

        <div class="row g-4 align-items-stretch">
          <div class="col-12 col-lg-4">
            <article class="fai-location-card">
              <span class="fai-icon-circle" aria-hidden="true">
                <i class="bi bi-geo-alt-fill"></i>
              </span>
              <h3 class="fai-location-title">Future Agri Infra</h3>
              <address class="fm-text fmab__text">
                Office No. 313, Pehel Lakeview,<br>
                Beside Tragad Underpass,<br>
                Near Vaishno Devi Circle,<br>
                Ahmedabad, Gujarat 382501
              </address>
              <a class="fai-link"
                href="https://www.google.com/maps/dir/?api=1&amp;destination=Office%20No.%20313%2C%20Pehel%20Lakeview%2C%20Beside%20Tragad%20Underpass%2C%20Near%20Vaishno%20Devi%20Circle%2C%20Ahmedabad%2C%20Gujarat%20382501"
                target="_blank" rel="noopener noreferrer">
                Get Directions <span aria-hidden="true">→</span>
              </a>
            </article>
          </div>
          <div class="col-12 col-lg-8">
            <iframe class="fai-map" title="Map showing Future Agri Infra office in Ahmedabad"
              src="https://www.google.com/maps?q=Office%20No.%20313%2C%20Pehel%20Lakeview%2C%20Beside%20Tragad%20Underpass%2C%20Near%20Vaishno%20Devi%20Circle%2C%20Ahmedabad%2C%20Gujarat%20382501&amp;output=embed"
              loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>

   
    </main>

    
  </div>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script>
    (() => {
      const form = document.querySelector('.needs-validation');
      if (!form) return;

      form.addEventListener('submit', (event) => {
        event.preventDefault();
        if (!form.checkValidity()) {
          event.stopPropagation();
        } else {
          const status = document.querySelector('#fai-form-status');
          status.hidden = false;
          status.textContent = 'Your details are valid. Online message delivery is not enabled yet; please contact us by phone or email.';
        }
        form.classList.add('was-validated');
      });
    })();

    (() => {
      const form = document.querySelector('#fai-newsletter-form');
      const emailField = document.querySelector('#fai-newsletter-email');
      const status = document.querySelector('#fai-newsletter-status');
      if (!form || !emailField || !status) return;

      form.addEventListener('submit', (event) => {
        event.preventDefault();
        if (!emailField.checkValidity()) {
          emailField.reportValidity();
          return;
        }

        const subject = encodeURIComponent('Newsletter subscription request');
        const body = encodeURIComponent(`Please subscribe this email address to your newsletter: ${emailField.value}`);
        window.location.href = `mailto:khushalidodia142@gmail.com?subject=${subject}&body=${body}`;
        status.hidden = false;
        status.textContent = 'Your email app will open with a subscription request ready to send.';
      });
    })();
  </script>
@endsection
