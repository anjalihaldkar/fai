<footer class="afm-ft">
      <div class="afm-ft__social-bar">
        <div class="afm-ft__social-container">
          <span>Follow our social :</span>
          <div class="afm-ft__social-links">
            <a href="#" aria-label="Facebook"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
              </svg></a>
            <a href="#" aria-label="Instagram"><svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" />
                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
              </svg></a>
            <a href="#" aria-label="X"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <path
                  d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z" />
              </svg></a>
            <a href="#" aria-label="YouTube"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <path
                  d="M22.54 6.42a2.78 2.78 0 00-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 00-1.94 2A29.02 29.02 0 001 11.75a29.02 29.02 0 00.46 5.33 2.78 2.78 0 001.94 2c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 001.94-2 29.02 29.02 0 00.46-5.33 29.02 29.02 0 00-.46-5.33zM9.75 15.02V8.48L15.5 11.75l-5.75 3.27z" />
              </svg></a>
          </div>
        </div>
      </div>

      <div class="afm-ft__main">
        <div class="afm-ft__container">
          <div class="afm-ft__col afm-ft__col--brand">
            <a href="{{ route('home') }}" class="afm-brand afm-ft__brand">
              <span class="afm-brand__mark">
                <img src="{{ asset('images/footerl.png') }}" alt="Future Agri Infra logo"
                  style="height: 54px; width: auto; object-fit: contain;">
              </span>
            </a>
            <p class="afm-ft__desc">Future Agri Infra is dedicated to sustainable agriculture and premium-quality
              turnkey protected-farming projects.</p>
            <form class="afm-ft__form" id="fai-newsletter-form">
              <input type="email" placeholder="Email" class="afm-ft__input" required>
              <button type="submit" class="afm-ft__submit">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                  <polyline points="22,6 12,13 2,6" />
                </svg>
                Subscribe Newsletter
              </button>
            </form>
          </div>

          <div class="afm-ft__col">
            <h4 class="afm-ft__heading">Solutions</h4>
            <ul class="afm-ft__list">
              <li><a href="{{ route('protected-farming.protected-structure') }}">Smart Farming</a></li>
              <li><a href="{{ route('services.turnkey') }}">Renewable Energy</a></li>
              <li><a href="{{ route('growing.index') }}">Precision Agriculture</a></li>
              <li><a href="{{ route('automation.index') }}">Water Management</a></li>
              <li><a href="{{ route('growing.soil-based') }}">Soil Optimization</a></li>
              <li><a href="{{ route('protected-farming.structure') }}">Greenhouse Systems</a></li>
            </ul>
          </div>

          <div class="afm-ft__col">
            <h4 class="afm-ft__heading">Support</h4>
            <ul class="afm-ft__list">
              <li><a href="{{ route('contact') }}">Contact Support</a></li>
              <li><a href="{{ route('contact') }}">Help Center</a></li>
              <li><a href="{{ route('services.plan-farm') }}">Order Tracking</a></li>
              <li><a href="{{ route('services.turnkey') }}">Returns &amp; Refunds</a></li>
              <li><a href="{{ route('resources.index') }}">FAQs</a></li>
            </ul>
          </div>

          <div class="afm-ft__col">
            <h4 class="afm-ft__heading">Company</h4>
            <ul class="afm-ft__list">
              <li><a href="{{ route('about') }}">About Future Agri Infra</a></li>
              <li><a href="{{ route('services.plan-farm') }}">Our Farm</a></li>
              <li><a href="{{ route('global') }}">Sustainability Commitment</a></li>
              <li><a href="{{ route('projects.index') }}">Quality Standards</a></li>
              <li><a href="{{ route('about') }}">Careers</a></li>
              <li><a href="{{ route('blog.index') }}">Press &amp; Media</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="afm-ft__bottom">
        <div class="afm-ft__bottom-container">
          <div class="afm-ft__legal">
            <a href="{{ route('legal.terms') }}">Terms &amp; Conditions</a>
            <a href="{{ route('legal.privacy') }}">Privacy Policy</a>
            <a href="#">Cookie Policy</a>
          </div>
          <div class="afm-ft__copy">
            Copyright &copy; 2026 Future Agri Infra, All rights reserved. Created by Crescita Software.
          </div>
        </div>
      </div>
    </footer>
