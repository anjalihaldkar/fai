@extends('layouts.app')

@section('title', 'Privacy Policy | Future Agri Infra & FAI Academy User Panel')
@section('meta_description', 'Read the official Privacy Policy of Future Agri Infra (FAI). Learn how we collect, protect, and process user data across our website, turnkey farming advisory, and FAI Academy course system &amp; student user panel.')
@section('body_class', 'legal-page')

@push('head')
    @verbatim
    <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Privacy Policy",
    "description": "Privacy policy and learner data protection details for Future Agri Infra and FAI Academy User Panel.",
    "publisher": {
      "@type": "Organization",
      "name": "Future Agri Infra",
      "url": "https://futureagriinfra.com",
      "logo": "https://futureagriinfra.com/images/logo.png",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "313, Pehel Lakeview, Behind Shaligram Lakeview, Near Vaishnodevi Circle, Off S.P. Ring Road",
        "addressLocality": "Ahmedabad",
        "addressRegion": "Gujarat",
        "postalCode": "382421",
        "addressCountry": "IN"
      }
    }
  }
  </script>
    @endverbatim
@endpush

@section('content')
<!-- Solid Header Navigation -->
    

    <!-- Page Hero Banner -->
    <section class="fai-legal-hero">
      <div class="fai-legal-hero__inner">
        <nav class="fai-legal-hero__crumbs" aria-label="Breadcrumb">
          <a href="{{ route('home') }}">Home</a>
          <span>/</span>
          <span aria-current="page">Privacy Policy</span>
        </nav>

        <div class="fai-legal-hero__badge">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
          </svg>
          Legal &amp; Data Protection Compliance
        </div>

        <h1 class="fai-legal-hero__title">Privacy <span>Policy.</span></h1>
        <p class="fai-legal-hero__lead">
          How Future Agri Infra and the FAI Academy User Panel collect, protect, process, and respect your personal,
          commercial, and learning data across our agricultural advisory and educational platforms.
        </p>

        <div class="fai-legal-hero__meta">
          <div class="fai-legal-hero__meta-item">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
              <line x1="16" y1="2" x2="16" y2="6" />
              <line x1="8" y1="2" x2="8" y2="6" />
              <line x1="3" y1="10" x2="21" y2="10" />
            </svg>
            <span>Last Updated: <strong>November 2026</strong></span>
          </div>
          <div class="fai-legal-hero__meta-item">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="10" />
              <polyline points="12 6 12 12 16 14" />
            </svg>
            <span>Effective Date: <strong>Immediate</strong></span>
          </div>
          <div class="fai-legal-hero__meta-item">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
              <circle cx="12" cy="7" r="4" />
            </svg>
            <span>Scope: <strong>Web Services, Advisory &amp; Academy User Panel</strong></span>
          </div>
        </div>
      </div>
    </section>

    <!-- Main Content Grid -->
    <main class="fai-legal-main">
      <div class="fai-legal-container">
        <div class="fai-legal-grid">

          <!-- Sticky Sidebar Table of Contents -->
          <aside class="fai-legal-sidebar">
            <div class="fai-legal-sidebar__head">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="8" y1="6" x2="21" y2="6" />
                <line x1="8" y1="12" x2="21" y2="12" />
                <line x1="8" y1="18" x2="21" y2="18" />
                <line x1="3" y1="6" x2="3.01" y2="6" />
                <line x1="3" y1="12" x2="3.01" y2="12" />
                <line x1="3" y1="18" x2="3.01" y2="18" />
              </svg>
              Table of Contents
            </div>

            <ol class="fai-legal-toc">
              <li><a href="#section-1" class="fai-legal-toc__link is-active"><span class="fai-legal-toc__num">01</span> Scope &amp; Applicability</a></li>
              <li><a href="#section-2" class="fai-legal-toc__link"><span class="fai-legal-toc__num">02</span> Information We Collect</a></li>
              <li><a href="#section-3" class="fai-legal-toc__link"><span class="fai-legal-toc__num">03</span> Academy &amp; User Panel Data</a></li>
              <li><a href="#section-4" class="fai-legal-toc__link"><span class="fai-legal-toc__num">04</span> How We Use Your Data</a></li>
              <li><a href="#section-5" class="fai-legal-toc__link"><span class="fai-legal-toc__num">05</span> Payment Processing &amp; Security</a></li>
              <li><a href="#section-6" class="fai-legal-toc__link"><span class="fai-legal-toc__num">06</span> Sharing &amp; Third-Party Disclosures</a></li>
              <li><a href="#section-7" class="fai-legal-toc__link"><span class="fai-legal-toc__num">07</span> Cookies &amp; Tracking Technologies</a></li>
              <li><a href="#section-8" class="fai-legal-toc__link"><span class="fai-legal-toc__num">08</span> Data Retention &amp; Encryption</a></li>
              <li><a href="#section-9" class="fai-legal-toc__link"><span class="fai-legal-toc__num">09</span> Your Privacy Rights &amp; Choices</a></li>
              <li><a href="#section-10" class="fai-legal-toc__link"><span class="fai-legal-toc__num">10</span> Student Conduct &amp; Content Security</a></li>
              <li><a href="#section-11" class="fai-legal-toc__link"><span class="fai-legal-toc__num">11</span> Grievance Officer &amp; Contact</a></li>
            </ol>

            <div class="fai-legal-sidebar__card">
              <h4 class="fai-legal-sidebar__card-title">Questions about your data?</h4>
              <p class="fai-legal-sidebar__card-text">
                Our compliance desk in Ahmedabad is available to resolve privacy inquiries and data export requests.
              </p>
              <a href="{{ route('contact') }}" class="fai-legal-sidebar__card-btn">
                Contact Compliance Desk
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </a>
            </div>
          </aside>

          <!-- Legal Policy Content Articles -->
          <article class="fai-legal-content">

            <!-- Section 1 -->
            <section class="fai-legal-card" id="section-1">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">01</span>
                <h2 class="fai-legal-h2">Scope &amp; Applicability</h2>
              </div>
              <p class="fai-legal-p">
                This Privacy Policy outlines how <strong>Future Agri Infra</strong> (&ldquo;FAI&rdquo;, &ldquo;Company&rdquo;, &ldquo;we&rdquo;, &ldquo;our&rdquo;, or &ldquo;us&rdquo;), headquartered in Ahmedabad, Gujarat, collects, maintains, uses, and safeguards information obtained from visitors, agribusiness clients, consultation applicants, and registered students accessing our digital portals and Learning Management System (&ldquo;FAI Academy User Panel&rdquo;).
              </p>
              <p class="fai-legal-p">
                This policy governs all digital touchpoints provided by Future Agri Infra, including our main corporate website (<strong>futureagriinfra.com</strong> and verified mirrors such as <strong>fai.codespine.in</strong>), our online training course portal, webinar registration interfaces, project calculators, and offline training campus records.
              </p>
              <div class="fai-legal-callout">
                <div class="fai-legal-callout__title">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <circle cx="12" cy="12" r="10" />
                    <line x1="12" y1="16" x2="12" y2="12" />
                    <line x1="12" y1="8" x2="12.01" y2="8" />
                  </svg>
                  Statutory Alignment
                </div>
                <p>
                  This policy is formulated in compliance with the <strong>Information Technology Act, 2000</strong>, the <strong>Information Technology (Reasonable Security Practices and Procedures and Sensitive Personal Data or Information) Rules, 2011</strong>, and the provisions of the <strong>Digital Personal Data Protection Act (DPDP Act), 2023</strong> of India.
                </p>
              </div>
            </section>

            <!-- Section 2 -->
            <section class="fai-legal-card" id="section-2">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">02</span>
                <h2 class="fai-legal-h2">Information We Collect</h2>
              </div>
              <p class="fai-legal-p">
                We collect information directly provided by you, automatically recorded through your device interactions, and generated during your participation in our engineering advisory and educational programs.
              </p>

              <div class="fai-legal-table-wrap">
                <table class="fai-legal-table">
                  <thead>
                    <tr>
                      <th>Data Category</th>
                      <th>Examples Collected</th>
                      <th>Primary Purpose</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><strong>Contact &amp; Identity</strong></td>
                      <td>Full legal name, phone number, email address, physical address, state, pin code.</td>
                      <td>Client onboarding, DPR coordination, inquiry responses, and identity verification.</td>
                    </tr>
                    <tr>
                      <td><strong>Agronomical &amp; Land Data</strong></td>
                      <td>Farm size, geographic coordinates, soil test parameters, water quality (pH, EC, TDS), climate details.</td>
                      <td>Site-specific engineering design, BOQ calculation, and agronomic advisory.</td>
                    </tr>
                    <tr>
                      <td><strong>Student &amp; User Panel</strong></td>
                      <td>Registered email, encrypted password hash, enrolled courses, attendance, lesson progress, test scores.</td>
                      <td>Course delivery, learner access management, certificate generation, and performance tracking.</td>
                    </tr>
                    <tr>
                      <td><strong>Billing &amp; Financial</strong></td>
                      <td>GSTIN (for businesses), transaction reference ID, payment status, invoice address.</td>
                      <td>Accounting, taxation compliance under Indian GST laws, and issuance of fee receipts.</td>
                    </tr>
                    <tr>
                      <td><strong>Technical &amp; Log Data</strong></td>
                      <td>IP address, browser type, device OS, referring URL, time stamps, session duration.</td>
                      <td>Platform security, DDoS prevention, LMS credential sharing detection, and UX optimization.</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <p class="fai-legal-p">
                We do not collect sensitive caste, religious, biometric, or genetic data. Sensitive financial details such as complete card CVV or netbanking passwords are never collected or stored on FAI servers.
              </p>
            </section>

            <!-- Section 3 -->
            <section class="fai-legal-card" id="section-3">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">03</span>
                <h2 class="fai-legal-h2">FAI Academy &amp; Course User Panel Data</h2>
              </div>
              <p class="fai-legal-p">
                Future Agri Infra operates an integrated <strong>Academy Course System</strong> providing online masterclasses, live technical webinars, and offline commercial farm training. Registered students access their curriculum through a dedicated <strong>User Panel (Student Dashboard)</strong>.
              </p>

              <h3 class="fai-legal-h3">A. User Account Credentials &amp; Profile Security</h3>
              <p class="fai-legal-p">
                When you enroll in an online course or masterclass, an authorized User Panel profile is created. Passwords are encrypted using irreversible cryptographic hashing algorithms (e.g. bcrypt/Argon2) before storage. Our staff cannot view your plain-text password. You are strictly responsible for maintaining account confidentiality.
              </p>

              <h3 class="fai-legal-h3">B. Course Engagement &amp; Progress Analytics</h3>
              <p class="fai-legal-p">
                Within the User Panel, our system logs your learning trajectory to ensure educational continuity and verify certification requirements. This includes:
              </p>
              <ul class="fai-legal-list">
                <li>Video playback timestamps and percentage of completed module lectures.</li>
                <li>Download records for protected study guides, fertigation sheets, and DPR templates.</li>
                <li>Live webinar room attendance and active participation logs.</li>
                <li>Module quiz scores, assignment submissions, and instructor feedback remarks.</li>
                <li>Generation and tamper-proof verification of digital Completion Certificates bearing unique verification serials.</li>
              </ul>

              <div class="fai-legal-callout fai-legal-callout--alert">
                <div class="fai-legal-callout__title">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2" />
                    <line x1="12" y1="8" x2="12" y2="12" />
                    <line x1="12" y1="16" x2="12.01" y2="16" />
                  </svg>
                  Single-User License &amp; Credential Monitoring
                </div>
                <p>
                  To protect proprietary agronomical curriculum and prevent unauthorized pirated distribution, the User Panel enforces automated concurrency checks. Simultaneous active streaming sessions from disparate geographic IP locations trigger automated session security halts and administrative investigation.
                </p>
              </div>
            </section>

            <!-- Section 4 -->
            <section class="fai-legal-card" id="section-4">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">04</span>
                <h2 class="fai-legal-h2">How We Use Collected Information</h2>
              </div>
              <p class="fai-legal-p">
                We process your personal and agricultural data strictly for legitimate operational, commercial, and pedagogical purposes:
              </p>
              <ul class="fai-legal-list">
                <li><strong>Turnkey Project Execution:</strong> Engineering customized polyhouse, nethouse, and hydroponic layouts, structural load calculations, and itemized bills of quantities (BOQ).</li>
                <li><strong>Financial &amp; Subsidy Documentation:</strong> Compiling Detailed Project Reports (DPR) and statutory filings under National Horticulture Board (NHB), MIDH, and Agriculture Infrastructure Fund (AIF) schemes upon client engagement.</li>
                <li><strong>Academy &amp; LMS Operations:</strong> Providing uninterrupted video streaming, issuing lesson updates, hosting live technical Q&amp;A sessions, and verifying student credentials.</li>
                <li><strong>Agronomy Advisory:</strong> Formulating customized fertigation recipes, crop disease mitigation protocols, and scheduling farm agronomist visits.</li>
                <li><strong>Market Linkage Facilitation:</strong> Introducing farm produce to potential institutional buyers, retail chains, and off-takers with explicit grower consent. <em>(Note: FAI facilitates introductions and does not procure or trade in produce directly).</em></li>
                <li><strong>System Security &amp; Fraud Prevention:</strong> Protecting our servers against unauthorized access, malicious traffic, and copyright infringement.</li>
              </ul>
            </section>

            <!-- Section 5 -->
            <section class="fai-legal-card" id="section-5">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">05</span>
                <h2 class="fai-legal-h2">Payment Processing &amp; Financial Security</h2>
              </div>
              <p class="fai-legal-p">
                Course registration fees, consultation tokens, and training payments made through our website are routed through leading, RBI-authorized payment aggregators (such as Razorpay, Cashfree, or Stripe).
              </p>
              <ul class="fai-legal-list">
                <li>All payment data is encrypted in transit using 256-bit Transport Layer Security (TLS/SSL).</li>
                <li>Payment gateway providers are independently certified under the <strong>Payment Card Industry Data Security Standard (PCI-DSS Level 1)</strong>.</li>
                <li>Future Agri Infra receives only confirmation of payment (transaction reference number, date, amount, and payment mode). We do not have access to your credit card numbers, debit card PINs, or banking passwords.</li>
              </ul>
            </section>

            <!-- Section 6 -->
            <section class="fai-legal-card" id="section-6">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">06</span>
                <h2 class="fai-legal-h2">Data Sharing &amp; Third-Party Disclosures</h2>
              </div>
              <p class="fai-legal-p">
                <strong>We do not sell, rent, monetize, or trade your personal or business data to external data brokers or telemarketing organizations.</strong> Disclosures occur solely in the following sanctioned contexts:
              </p>
              <ul class="fai-legal-list">
                <li><strong>Essential Service Providers:</strong> Cloud hosting infrastructure (AWS / Google Cloud), video delivery networks (CDN streaming for academy lessons), transactional SMS/WhatsApp gateways, and accounting software under strict confidentiality covenants.</li>
                <li><strong>Statutory &amp; Banking Authorities:</strong> Disclosing DPR and land documents to financing banks, state horticulture officers, and subsidy boards (NHB/MIDH) solely for processing client applications.</li>
                <li><strong>Legal Mandates:</strong> Where required by valid subpoenas, court orders, or law enforcement investigations under Indian jurisdiction.</li>
              </ul>
            </section>

            <!-- Section 7 -->
            <section class="fai-legal-card" id="section-7">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">07</span>
                <h2 class="fai-legal-h2">Cookies &amp; Tracking Technologies</h2>
              </div>
              <p class="fai-legal-p">
                Our web properties utilize cookies and local session storage to facilitate platform functionality and analyze website traffic.
              </p>
              <ul class="fai-legal-list">
                <li><strong>Essential Authentication Cookies:</strong> Required to keep you authenticated inside your Academy User Panel session as you navigate between modules.</li>
                <li><strong>Preference Cookies:</strong> Remember your preferred viewing settings, video playback volume, and form autosave progress.</li>
                <li><strong>Analytics Cookies:</strong> Anonymized Google Analytics telemetry to evaluate aggregate visitor volumes, most popular greenhouse models, and platform performance.</li>
              </ul>
              <p class="fai-legal-p">
                You may disable non-essential cookies via your web browser settings; however, disabling authentication cookies will prevent you from accessing the protected student User Panel.
              </p>
            </section>

            <!-- Section 8 -->
            <section class="fai-legal-card" id="section-8">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">08</span>
                <h2 class="fai-legal-h2">Data Retention &amp; Encryption</h2>
              </div>
              <p class="fai-legal-p">
                We retain client project records and student user panel credentials only for the duration necessary to satisfy the commercial agreement, course access validity, or statutory legal and tax compliance obligations (such as the 7-year invoice retention period under Indian tax laws).
              </p>
              <p class="fai-legal-p">
                Our infrastructure incorporates defense-in-depth measures: enterprise web application firewalls (WAF), role-based access control (RBAC), database encryption at rest (AES-256), and routine vulnerability assessments to thwart unauthorized inspection or extraction.
              </p>
            </section>

            <!-- Section 9 -->
            <section class="fai-legal-card" id="section-9">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">09</span>
                <h2 class="fai-legal-h2">Your Privacy Rights &amp; Choices</h2>
              </div>
              <p class="fai-legal-p">
                Under applicable Indian data protection frameworks, you are entitled to exercise the following rights regarding your personal information:
              </p>
              <ul class="fai-legal-list">
                <li><strong>Right of Access &amp; Summary:</strong> Request an overview of personal information held by FAI regarding your identity or User Panel history.</li>
                <li><strong>Right to Rectification:</strong> Update or correct outdated or incomplete contact records through your User Panel or by emailing support.</li>
                <li><strong>Right to Erasure:</strong> Request the deletion of marketing data and non-statutory records when your business association or course access term concludes.</li>
                <li><strong>Opt-Out of Marketing:</strong> Unsubscribe from non-essential promotional communications via the one-click link at the bottom of our emails.</li>
              </ul>
            </section>

            <!-- Section 10 -->
            <section class="fai-legal-card" id="section-10">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">10</span>
                <h2 class="fai-legal-h2">Student Conduct &amp; Content Security</h2>
              </div>
              <p class="fai-legal-p">
                When participating in peer discussion groups, webinars, or communal Q&amp;A threads within the FAI Academy User Panel:
              </p>
              <ul class="fai-legal-list">
                <li>Learners must refrain from posting confidential commercial details, defamatory material, or unsolicited marketing spam.</li>
                <li>You may not harvest or collect contact details of fellow learners or instructors without their affirmative consent.</li>
                <li>Any student engaging in unauthorized extraction of course video streams, distribution of private lesson materials, or harassment of faculty will face immediate termination of User Panel access without refund and appropriate legal action under Indian copyright statutes.</li>
              </ul>
            </section>

            <!-- Section 11 -->
            <section class="fai-legal-card" id="section-11">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">11</span>
                <h2 class="fai-legal-h2">Grievance Officer &amp; Contact Details</h2>
              </div>
              <p class="fai-legal-p">
                In accordance with the Information Technology Act, 2000 and the Digital Personal Data Protection Act, 2023, the details of our designated Grievance Officer for data protection matters are set forth below:
              </p>

              <div class="fai-legal-contact-grid">
                <div class="fai-legal-contact-item">
                  <span>Designated Authority</span>
                  <strong>Grievance &amp; Compliance Officer</strong>
                </div>
                <div class="fai-legal-contact-item">
                  <span>Email Inquiries</span>
                  <strong><a href="mailto:info@futureagriinfra.in">info@futureagriinfra.in</a></strong>
                </div>
                <div class="fai-legal-contact-item">
                  <span>Direct Telephone</span>
                  <strong><a href="tel:+919998094201">+91 99980 94201</a></strong>
                </div>
                <div class="fai-legal-contact-item">
                  <span>Registered Headquarters</span>
                  <strong>313, Pehel Lakeview, Behind Shaligram Lakeview, Near Vaishnodevi Circle, Off S.P. Ring Road, Ahmedabad, Gujarat &ndash; 382421, India</strong>
                </div>
              </div>

              <p class="fai-legal-p" style="margin-top: 24px; font-size: 14px; color: #64748b;">
                We endeavor to acknowledge all formal privacy grievances within 48 business hours and resolve legitimate data requests within thirty (30) days of receipt.
              </p>
            </section>

          </article>
        </div>
      </div>
    </main>

    <!-- Standard Site Footer -->
    
  </div>
@endsection
