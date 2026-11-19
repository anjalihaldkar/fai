<footer class="afm-ft">
    <div class="afm-ft__social-bar">
        <div class="afm-ft__social-container">
            <span>Follow our social :</span>
            <div class="afm-ft__social-links">
                <a href="#" aria-label="Facebook"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg></a>
                <a href="#" aria-label="Twitter"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg></a>
                <a href="#" aria-label="LinkedIn"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg></a>
                <a href="#" aria-label="Instagram"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
            </div>
        </div>
    </div>

    <div class="afm-ft__main">
        <div class="afm-ft__grid">
            <div class="afm-ft__brand-col">
                <a href="{{ route('home') }}" class="afm-ft__logo">
                    <span class="afm-brand__mark">
                        <img src="{{ asset('images/footerl.png') }}" alt="Future Agri Infra logo" style="height: 54px; width: auto; object-fit: contain;">
                    </span>
                </a>
                <p class="afm-ft__desc">Future Agri Infra is dedicated to sustainable agriculture and premium-quality turnkey protected-farming projects.</p>
                <form class="afm-ft__form" id="fai-newsletter-form">
                    <label class="visually-hidden" for="fai-newsletter-email">Email for newsletter</label>
                    <input type="email" id="fai-newsletter-email" name="email" placeholder="Email" class="afm-ft__input" autocomplete="email" required>
                    <button type="submit" class="afm-ft__submit" aria-label="Subscribe to newsletter">Subscribe Newsletter</button>
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
