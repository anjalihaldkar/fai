@extends('layouts.app')

@section('title', 'Terms & Conditions | Future Agri Infra & FAI Academy LMS')
@section('meta_description', 'Review the Terms &amp; Conditions governing Future Agri Infra (FAI) services, turnkey protected farming engineering, DPR advisory, and the FAI Academy course platform &amp; student user panel.')
@section('body_class', 'legal-page')

@push('head')
    @verbatim
    <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Terms & Conditions",
    "description": "Terms of service and user panel licensing rules for Future Agri Infra and FAI Academy learners.",
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
          <span aria-current="page">Terms &amp; Conditions</span>
        </nav>

        <div class="fai-legal-hero__badge">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
            <polyline points="14 2 14 8 20 8" />
            <line x1="16" y1="13" x2="8" y2="13" />
            <line x1="16" y1="17" x2="8" y2="17" />
          </svg>
          Master Services &amp; User Agreement
        </div>

        <h1 class="fai-legal-hero__title">Terms &amp; <span>Conditions.</span></h1>
        <p class="fai-legal-hero__lead">
          Terms governing your access to Future Agri Infra engineering services, turnkey agricultural solutions,
          and the FAI Academy training course system, student user panel, and intellectual property.
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
            <span>Jurisdiction: <strong>Ahmedabad, Gujarat, India</strong></span>
          </div>
          <div class="fai-legal-hero__meta-item">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
              <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
            </svg>
            <span>Applies To: <strong>Turnkey EPC, DPR Clients &amp; LMS Learners</strong></span>
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
              <li><a href="#terms-1" class="fai-legal-toc__link is-active"><span class="fai-legal-toc__num">01</span> Binding Agreement</a></li>
              <li><a href="#terms-2" class="fai-legal-toc__link"><span class="fai-legal-toc__num">02</span> Scope of Services</a></li>
              <li><a href="#terms-3" class="fai-legal-toc__link"><span class="fai-legal-toc__num">03</span> Subsidies &amp; DPR Disclaimer</a></li>
              <li><a href="#terms-4" class="fai-legal-toc__link"><span class="fai-legal-toc__num">04</span> Agronomic Yield Disclaimer</a></li>
              <li><a href="#terms-5" class="fai-legal-toc__link"><span class="fai-legal-toc__num">05</span> Market Linkage Facilitation</a></li>
              <li><a href="#terms-6" class="fai-legal-toc__link"><span class="fai-legal-toc__num">06</span> Academy LMS &amp; User Panel</a></li>
              <li><a href="#terms-7" class="fai-legal-toc__link"><span class="fai-legal-toc__num">07</span> Anti-Piracy &amp; IP Protection</a></li>
              <li><a href="#terms-8" class="fai-legal-toc__link"><span class="fai-legal-toc__num">08</span> Certification &amp; Validity</a></li>
              <li><a href="#terms-9" class="fai-legal-toc__link"><span class="fai-legal-toc__num">09</span> Fees &amp; Refund Policy</a></li>
              <li><a href="#terms-10" class="fai-legal-toc__link"><span class="fai-legal-toc__num">10</span> User Conduct &amp; Prohibitions</a></li>
              <li><a href="#terms-11" class="fai-legal-toc__link"><span class="fai-legal-toc__num">11</span> Limitation of Liability</a></li>
              <li><a href="#terms-12" class="fai-legal-toc__link"><span class="fai-legal-toc__num">12</span> Governing Law &amp; Jurisdiction</a></li>
            </ol>

            <div class="fai-legal-sidebar__card">
              <h4 class="fai-legal-sidebar__card-title">Commercial Projects Desk</h4>
              <p class="fai-legal-sidebar__card-text">
                For turnkey contracts, customized BOQ agreements, or institutional masterclasses, connect directly with our engineering team.
              </p>
              <a href="{{ route('contact') }}" class="fai-legal-sidebar__card-btn">
                Initiate Project Discussion
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </a>
            </div>
          </aside>

          <!-- Terms Articles -->
          <article class="fai-legal-content">

            <!-- Clause 1 -->
            <section class="fai-legal-card" id="terms-1">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">01</span>
                <h2 class="fai-legal-h2">Binding Agreement &amp; Company Overview</h2>
              </div>
              <p class="fai-legal-p">
                These Terms and Conditions (&ldquo;Terms&rdquo;) constitute a legally enforceable contract between you (&ldquo;User&rdquo;, &ldquo;Client&rdquo;, &ldquo;Student&rdquo;, &ldquo;Learner&rdquo;, or &ldquo;You&rdquo;) and <strong>Future Agri Infra</strong> (&ldquo;FAI&rdquo;, &ldquo;Company&rdquo;, &ldquo;We&rdquo;, or &ldquo;Us&rdquo;), an agricultural infrastructure development enterprise headquartered at 313, Pehel Lakeview, Behind Shaligram Lakeview, Near Vaishnodevi Circle, Off S.P. Ring Road, Ahmedabad, Gujarat &ndash; 382421.
              </p>
              <p class="fai-legal-p">
                By browsing our website, requesting project feasibility reviews, submitting DPR inquiries, or registering for an account within the <strong>FAI Academy Learning Management System (&ldquo;User Panel&rdquo;)</strong>, you unconditionally accept and agree to be bound by these Terms and our Privacy Policy. If you do not agree to these terms in their entirety, you must discontinue access immediately.
              </p>
            </section>

            <!-- Clause 2 -->
            <section class="fai-legal-card" id="terms-2">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">02</span>
                <h2 class="fai-legal-h2">Scope of Services &amp; Commercial Turnkey Engagements</h2>
              </div>
              <p class="fai-legal-p">
                Future Agri Infra specializes in end-to-end design, engineering, procurement, construction, and commissioning of commercial protected cultivation structures, including:
              </p>
              <ul class="fai-legal-list">
                <li><strong>Protected Structures:</strong> Naturally Ventilated Polyhouses (NVPH), Fan &amp; Pad Polyhouses, Nethouses, Poly Net Houses, Wire Rope Nethouses, and Glasshouses.</li>
                <li><strong>Growing Systems:</strong> Nutrient Film Technique (NFT), Deep Water Culture (DWC), Cocopeat Growbags, Dutch Buckets, and Indoor Vertical Racks.</li>
                <li><strong>Automation &amp; Fertigation:</strong> Automated dosing machines, IoT environmental computers, and precision monitoring devices.</li>
                <li><strong>Consulting &amp; Agronomy:</strong> Feasibility audits, crop scheduling, integrated pest management, and scheduled on-site handholding through initial harvest cycles.</li>
              </ul>
              <p class="fai-legal-p">
                Turnkey farm development projects are governed by individual, signed Master Services Agreements (MSA), Engineering BOQs, and agreed Milestone Payment Schedules which supersede general website terms in the event of any specific operational conflict.
              </p>
            </section>

            <!-- Clause 3 -->
            <section class="fai-legal-card" id="terms-3">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">03</span>
                <h2 class="fai-legal-h2">Government Subsidies &amp; Bank Finance Disclaimer</h2>
              </div>
              <p class="fai-legal-p">
                FAI assists clients by compiling bankable Detailed Project Reports (DPR) and managing online/offline subsidy filing under central and state schemes including the <strong>National Horticulture Board (NHB)</strong>, <strong>Mission for Integrated Development of Horticulture (MIDH)</strong>, and <strong>Agriculture Infrastructure Fund (AIF)</strong>.
              </p>
              <div class="fai-legal-callout fai-legal-callout--alert">
                <div class="fai-legal-callout__title">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <circle cx="12" cy="12" r="10" />
                    <line x1="12" y1="8" x2="12" y2="12" />
                    <line x1="12" y1="16" x2="12.01" y2="16" />
                  </svg>
                  Statutory Non-Guarantee Disclaimer
                </div>
                <p>
                  While FAI prepares DPRs in strict conformity with current government technical norms and BOQ specifications, <strong>subsidy approvals, inspections, letter of intent (LOI) issuances, and fund disbursements are strictly at the sole discretion of the respective government authorities, state missions, and commercial banks</strong>. FAI does not guarantee, underwrite, or warrant the approval, timeline, or quantum of any external government subsidy or institutional loan.
                </p>
              </div>
            </section>

            <!-- Clause 4 -->
            <section class="fai-legal-card" id="terms-4">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">04</span>
                <h2 class="fai-legal-h2">Agronomic Advisory &amp; Crop Yield Disclaimer</h2>
              </div>
              <p class="fai-legal-p">
                Agriculture involves dynamic biological and environmental systems. Crop yields, plant vigor, harvest quality, and financial returns in hi-tech farming are governed by external factors beyond engineering control, including ambient extreme temperatures, ground water quality, seed genetics, pest vectors, power consistency, on-ground labor management, and daily grower adherence to nutrient protocols.
              </p>
              <p class="fai-legal-p">
                Agronomic calculations, harvest projections, and ROI models provided on our website, calculators, or training modules represent standard potential benchmarks and do not constitute a legal guarantee of specific output, yield weight, or commercial profit.
              </p>
            </section>

            <!-- Clause 5 -->
            <section class="fai-legal-card" id="terms-5">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">05</span>
                <h2 class="fai-legal-h2">Market Linkage Facilitation Terms</h2>
              </div>
              <p class="fai-legal-p">
                Future Agri Infra assists farm developers by facilitating introductions to regional wholesalers, retail aggregators, exporters, and institutional off-takers.
              </p>
              <div class="fai-legal-callout fai-legal-callout--info">
                <div class="fai-legal-callout__title">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <circle cx="12" cy="12" r="10" />
                    <line x1="12" y1="16" x2="12" y2="12" />
                    <line x1="12" y1="8" x2="12.01" y2="8" />
                  </svg>
                  Intermediary Role Clarification
                </div>
                <p>
                  <strong>The Company facilitates buyer introductions and does not procure, broker, buy, or trade produce directly.</strong> Commercial transactions, pricing agreements, grading standards, logistics, and payment settlements occur strictly between the independent grower and the third-party buyer. FAI assumes no commercial liability for buyer defaults, produce rejection, or transit spoilage.
                </p>
              </div>
            </section>

            <!-- Clause 6 -->
            <section class="fai-legal-card" id="terms-6">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">06</span>
                <h2 class="fai-legal-h2">FAI Academy &amp; Student User Panel Terms</h2>
              </div>
              <p class="fai-legal-p">
                FAI operates an educational academy providing online hydroponic training, technical polyhouse masterclasses, and hands-on offline workshops. Enrolled learners receive access to a dedicated <strong>User Panel (Student Dashboard)</strong>.
              </p>

              <h3 class="fai-legal-h3">A. User Account &amp; Single-User Personal License</h3>
              <ul class="fai-legal-list">
                <li>Upon enrollment and fee clearance, you receive a personal, revocable, non-exclusive, non-transferable, single-user license to access the purchased training curriculum for your personal educational use.</li>
                <li><strong>Strict Prohibition of Credential Sharing:</strong> Your login credentials (username and password) belong strictly to you. Sharing account access with third parties, colleagues, family members, or educational groups is strictly prohibited.</li>
                <li><strong>Concurrent Access &amp; Device Restrictions:</strong> The User Panel restricts simultaneous video streaming from multiple devices or geographically disparate IP addresses. Detection of concurrent streaming will result in automated security suspension.</li>
              </ul>

              <h3 class="fai-legal-h3">B. Student Dashboard Features</h3>
              <p class="fai-legal-p">
                The User Panel allows students to track module progress, stream recorded video demonstrations, access downloadable supplementary crop sheets, submit module assignments, view schedule alerts for live webinars, and download digital certificates.
              </p>
            </section>

            <!-- Clause 7 -->
            <section class="fai-legal-card" id="terms-7">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">07</span>
                <h2 class="fai-legal-h2">Intellectual Property &amp; Anti-Piracy Covenants</h2>
              </div>
              <p class="fai-legal-p">
                All training curricula, recorded lecture videos, agronomical spreadsheets, nutrient formulation guides, 3D structure animations, architectural designs, DPR structures, and masterclass textbooks are the exclusive intellectual property of <strong>Future Agri Infra</strong>, protected under Indian and international copyright treaties.
              </p>

              <div class="fai-legal-callout fai-legal-callout--alert">
                <div class="fai-legal-callout__title">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                  </svg>
                  Prohibited Digital Actions
                </div>
                <p>
                  You agree that you shall NOT: (a) Screen-record, rip, capture, or download encrypted video lectures; (b) Upload, share, or torrent course resources to Telegram, WhatsApp groups, YouTube, or public repositories; (c) Resell, sub-license, rent, or commercially exploit course materials; (d) Conduct competing commercial training using FAI proprietary slides or calculation tools.
                </p>
              </div>

              <p class="fai-legal-p">
                Any verified breach of these anti-piracy covenants will trigger immediate termination of User Panel privileges without refund and civil litigation for copyright damages, accompanied by statutory criminal complaints under the Copyright Act, 1957 and the Information Technology Act, 2000.
              </p>
            </section>

            <!-- Clause 8 -->
            <section class="fai-legal-card" id="terms-8">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">08</span>
                <h2 class="fai-legal-h2">Course Validity, Curriculum Upgrades &amp; Certificates</h2>
              </div>
              <p class="fai-legal-p">
                Our educational platform balances continuous learning with structured curriculum maintenance:
              </p>
              <ul class="fai-legal-list">
                <li><strong>Access Duration:</strong> User Panel course access is valid for the period specified at enrollment (typically 12 months from the date of enrollment unless lifetime access is explicitly specified).</li>
                <li><strong>Curriculum Upgrades:</strong> FAI periodically updates lecture videos, dosage charts, and engineering slides to reflect advances in agritech. Upgrades within your active enrollment term are provided without extra charge.</li>
                <li><strong>Certification Standards:</strong> Official FAI Academy Completion Certificates are issued only upon satisfying course completion thresholds (such as 100% video completion and passing of module knowledge assessments). Certificates reflect vocational competency training and do not constitute an academic university degree or statutory government license.</li>
              </ul>
            </section>

            <!-- Clause 9 -->
            <section class="fai-legal-card" id="terms-9">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">09</span>
                <h2 class="fai-legal-h2">Payments, Fees &amp; Refund Policy</h2>
              </div>
              <p class="fai-legal-p">
                All prices and fees displayed on our website and academy catalog are quoted in Indian Rupees (INR) and are subject to statutory Goods and Services Tax (GST) as applicable under Indian taxation laws.
              </p>

              <div class="fai-legal-table-wrap">
                <table class="fai-legal-table">
                  <thead>
                    <tr>
                      <th>Service / Offering</th>
                      <th>Fee Nature</th>
                      <th>Cancellation &amp; Refund Policy</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><strong>Online Academy Courses &amp; Masterclasses</strong></td>
                      <td>Digital Access &amp; LMS User Panel License</td>
                      <td><strong>Strictly Non-Refundable</strong> once access to the course content, video lectures, or downloadable materials has been activated in the User Panel. Refunds are considered solely for verified duplicate billing or platform technical outages unresolvable within 7 business days.</td>
                    </tr>
                    <tr>
                      <td><strong>Live Online Webinars</strong></td>
                      <td>Live Virtual Event Access</td>
                      <td>Cancellations requested in writing at least 48 hours prior to webinar commencement are eligible for an 80% refund or free transfer to the next scheduled batch. No refunds for unattended live sessions; recorded access is provided where applicable.</td>
                    </tr>
                    <tr>
                      <td><strong>Offline Farm Workshops &amp; Campus Training</strong></td>
                      <td>Physical Hands-on Training &amp; Field Demos</td>
                      <td>Written cancellation received 7 days prior to workshop date is eligible for a 75% refund or full batch rescheduling. Cancellations within 7 days are non-refundable due to farm logistics and reservation commitments.</td>
                    </tr>
                    <tr>
                      <td><strong>Site Visits &amp; Project Feasibility Audits</strong></td>
                      <td>Professional Agronomist Site Audit</td>
                      <td>Site visit fees are non-refundable once the agronomist has traveled or completed the on-ground survey. In turnkey project conversions, audit fees may be adjusted against structural advances as per individual contract terms.</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>

            <!-- Clause 10 -->
            <section class="fai-legal-card" id="terms-10">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">10</span>
                <h2 class="fai-legal-h2">User Conduct &amp; Platform Integrity</h2>
              </div>
              <p class="fai-legal-p">
                Users of the website and Academy User Panel agree not to:
              </p>
              <ul class="fai-legal-list">
                <li>Deploy automated bots, scrapers, or extraction crawlers against our web calculators, course catalogs, or student directories.</li>
                <li>Attempt to probe, scan, or breach platform security firewalls, or test vulnerabilities of our User Panel infrastructure.</li>
                <li>Inject viruses, malware, or destructive code into contact forms or student discussion areas.</li>
                <li>Post defamatory, abusive, obscene, or threatening communications targeting instructors, agronomists, or fellow learners.</li>
              </ul>
            </section>

            <!-- Clause 11 -->
            <section class="fai-legal-card" id="terms-11">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">11</span>
                <h2 class="fai-legal-h2">Limitation of Liability &amp; Indemnification</h2>
              </div>
              <p class="fai-legal-p">
                To the fullest extent permitted by applicable Indian law:
              </p>
              <ul class="fai-legal-list">
                <li><strong>No Consequential Damages:</strong> Future Agri Infra, its promoters, directors, and employees shall not be liable for indirect, incidental, punitive, or consequential damages, including loss of agricultural harvest, loss of crop profits, business interruption, or machinery downtime.</li>
                <li><strong>Liability Cap:</strong> Our aggregate liability arising out of or related to website usage, educational training, or User Panel access shall not exceed the actual fee amount paid by you to FAI for the specific course, webinar, or service in dispute.</li>
                <li><strong>Indemnification:</strong> You agree to indemnify, defend, and hold harmless Future Agri Infra from and against any third-party claims, liabilities, damages, and legal costs arising from your breach of these Terms, unauthorized redistribution of course content, or misuse of agronomical guidance without on-ground testing.</li>
              </ul>
            </section>

            <!-- Clause 12 -->
            <section class="fai-legal-card" id="terms-12">
              <div class="fai-legal-card__header">
                <span class="fai-legal-num">12</span>
                <h2 class="fai-legal-h2">Governing Law, Jurisdiction &amp; Legal Notices</h2>
              </div>
              <p class="fai-legal-p">
                These Terms shall be interpreted, governed, and construed strictly in accordance with the laws of the Republic of India, without regard to conflict of law principles.
              </p>
              <p class="fai-legal-p">
                Any legal action, suit, arbitration, or proceeding arising out of or in connection with these Terms, project agreements, or the FAI Academy User Panel shall be instituted exclusively in the competent courts located at <strong>Ahmedabad, Gujarat, India</strong>, and both parties irrevocably submit to the exclusive personal jurisdiction of such courts.
              </p>

              <div class="fai-legal-contact-grid">
                <div class="fai-legal-contact-item">
                  <span>Legal &amp; Contracts Desk</span>
                  <strong>Future Agri Infra Legal Department</strong>
                </div>
                <div class="fai-legal-contact-item">
                  <span>Official Email</span>
                  <strong><a href="mailto:info@futureagriinfra.in">info@futureagriinfra.in</a></strong>
                </div>
                <div class="fai-legal-contact-item">
                  <span>Registered Head Office</span>
                  <strong>313, Pehel Lakeview, Behind Shaligram Lakeview, Near Vaishnodevi Circle, Off S.P. Ring Road, Ahmedabad, Gujarat &ndash; 382421, India</strong>
                </div>
                <div class="fai-legal-contact-item">
                  <span>Inquiry Phone</span>
                  <strong><a href="tel:+919998094201">+91 99980 94201</a></strong>
                </div>
              </div>
            </section>

          </article>
        </div>
      </div>
    @endsection
