<nav class="afm-navbar afm-navbar--solid" aria-label="Primary">
    <a href="{{ route('home') }}" class="afm-brand">
        <span class="afm-brand__mark">
            <img src="{{ asset('images/logo.png') }}" alt="botanix logo" style="height: 54px; width: auto; object-fit: contain;">
        </span>
    </a>

    <ul class="afm-menu" id="afmMenu">
        <li class="afm-menu__mobile-header">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="logo" style="height: 40px; width: auto; object-fit: contain;">
            </a>
            <button type="button" class="afm-menu__close" id="afmClose" aria-label="Close menu">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="24" height="24">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </li>

        <li class="afm-menu__item">
            <a href="{{ route('about') }}" class="afm-menu__link {{ Request::routeIs('about') ? 'active' : '' }}">About Us</a>
        </li>

        <li class="afm-menu__item">
            <a href="{{ route('services.plan-farm') }}" class="afm-menu__link {{ Request::is('services*') ? 'active' : '' }}" aria-expanded="false">
                Plan Your Farm
                <svg class="afm-menu__caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </a>
            <ul class="afm-dropdown">
                <li><a href="{{ route('services.turnkey') }}" class="afm-dropdown__link">Turnkey Farm Development</a></li>
                <li><a href="{{ route('services.agrotourism') }}" class="afm-dropdown__link">AgroTourism</a></li>
                <li><a href="{{ route('services.agronomy-support') }}" class="afm-dropdown__link">Agronomy Support</a></li>
                <li><a href="{{ route('services.sales-market-linkage') }}" class="afm-dropdown__link">Sales &amp; Market Linkage</a></li>
                <li><a href="{{ route('services.consultation') }}" class="afm-dropdown__link">Consultation</a></li>
            </ul>
        </li>

        <li class="afm-menu__item afm-menu__item--mega">
            <a href="{{ route('protected-farming.structure') }}" class="afm-menu__link {{ Request::is('protected-farming*') || Request::is('growing*') || Request::is('crops*') || Request::is('automation*') ? 'active' : '' }}" aria-expanded="false">
                Protected Farming Solutions
                <svg class="afm-menu__caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </a>

            <div class="afm-mega">
                <div class="afm-mega__grid">
                    <div class="afm-mega__col">
                        <a href="{{ route('protected-structure') }}" class="afm-mega__col-title">Protected Structures</a>
                        <a href="{{ route('protected-farming.polyhouse-fanpad') }}#growing-environment" class="afm-mega__link">Fan &amp; Pad Polyhouse</a>
                        <a href="{{ route('protected-structure') }}#protected-structures-explore" class="afm-mega__link">Naturally Ventilated Polyhouse (NVPH)</a>
                        <a href="{{ route('protected-structure') }}#protected-structures-explore" class="afm-mega__link">Nethouse</a>
                        <a href="{{ route('protected-structure') }}#protected-structures-explore" class="afm-mega__link">Polynet House</a>
                        <a href="{{ route('protected-structure') }}#protected-structures-explore" class="afm-mega__link">Wire Rope Nethouse</a>
                        <a href="{{ route('protected-structure') }}#protected-structures-explore" class="afm-mega__link">Glasshouse</a>
                    </div>
                    <div class="afm-mega__col">
                        <a href="{{ route('growing.index') }}" class="afm-mega__col-title">Growing System Solution</a>
                        <a href="{{ route('growing.outdoor-hydroponics') }}" class="afm-mega__link">Outdoor Hydroponics System</a>
                        <a href="{{ route('growing.cocopeat') }}" class="afm-mega__link">Cocopeat Based System</a>
                        <a href="{{ route('growing.soil-based') }}" class="afm-mega__link">Soil-Based Growing System</a>
                        <a href="{{ route('growing.indoor-vertical') }}" class="afm-mega__link">Indoor Vertical Farming</a>
                    </div>
                    <div class="afm-mega__col">
                        <a href="{{ route('crops.index') }}" class="afm-mega__col-title">Crop Solutions</a>
                        <a href="{{ route('crops.exotic-leafy') }}" class="afm-mega__link">Exotic Leafy Crops</a>
                        <a href="{{ route('crops.index') }}#compare-crops" class="afm-mega__link">Indian Vegetables</a>
                        <a href="{{ route('crops.index') }}#compare-crops" class="afm-mega__link">Berries</a>
                        <a href="{{ route('crops.index') }}#compare-crops" class="afm-mega__link">Medicinal Crops</a>
                        <a href="{{ route('crops.index') }}#compare-crops" class="afm-mega__link">Cannabis / Hemp</a>
                        <a href="{{ route('crops.index') }}#compare-crops" class="afm-mega__link">Flowers</a>
                    </div>
                    <div class="afm-mega__col">
                        <a href="{{ route('automation.index') }}" class="afm-mega__col-title">Automation Solutions</a>
                        <a href="{{ route('automation.iot') }}" class="afm-mega__link">IoT Automation</a>
                        <a href="{{ route('automation.index') }}#automation-solutions" class="afm-mega__link">Auto Fertigation Unit</a>
                        <a href="{{ route('automation.index') }}#automation-solutions" class="afm-mega__link">Auto Dosing Unit</a>
                        <a href="{{ route('automation.sensor') }}" class="afm-mega__link">Sensors &amp; Measuring Devices</a>
                    </div>
                </div>
                <div class="afm-mega__footer">
                    <p class="afm-mega__footer-text">Not sure which structure fits your land? <strong>Talk to an agronomist.</strong></p>
                    <a href="{{ route('contact') }}" class="afm-mega__footer-link">Book a free site visit.</a>
                </div>
            </div>
        </li>

        <li class="afm-menu__item">
            <a href="{{ route('services.farming-model') }}" class="afm-menu__link {{ Request::routeIs('services.farming-model') ? 'active' : '' }}" aria-expanded="false">
                Farming Models &amp; Packages
                <svg class="afm-menu__caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </a>
            <ul class="afm-dropdown">
                <li><a href="{{ route('services.farming-model') }}#financial-projections" class="afm-dropdown__link">Outdoor Hydroponics &mdash; Fan-Pad Polyhouse + NFT</a></li>
                <li><a href="{{ route('services.farming-model') }}#financial-projections" class="afm-dropdown__link">Indoor Hydroponics</a></li>
                <li><a href="{{ route('services.farming-model') }}#financial-projections" class="afm-dropdown__link">NVPH &mdash; Growbag with Cocopeat</a></li>
                <li><a href="{{ route('services.farming-model') }}#financial-projections" class="afm-dropdown__link">NVPH &mdash; Soil-Based</a></li>
                <li><a href="{{ route('services.farming-model') }}#financial-projections" class="afm-dropdown__link">Nethouse &mdash; Soil-Based</a></li>
                <li><a href="{{ route('services.farming-model') }}#financial-projections" class="afm-dropdown__link">Glasshouse &mdash; Hydroponics</a></li>
                <li><a href="{{ route('services.farming-model') }}#financial-projections" class="afm-dropdown__link">ROI Calculator</a></li>
            </ul>
        </li>

        <li class="afm-menu__item">
            <button type="button" class="afm-menu__link {{ Request::is('training*') ? 'active' : '' }}" aria-expanded="false">
                Academy
                <svg class="afm-menu__caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </button>
            <ul class="afm-dropdown">
                <li><a href="{{ route('training.online') }}" class="afm-dropdown__link">Online Training</a></li>
                <li><a href="{{ route('training.offline') }}" class="afm-dropdown__link">Offline Training</a></li>
                <li><a href="{{ route('home') }}#academy-training" class="afm-dropdown__link">Live Webinar</a></li>
            </ul>
        </li>

        <li class="afm-menu__item">
            <a href="{{ route('global') }}" class="afm-menu__link {{ Request::routeIs('global') ? 'active' : '' }}">Global</a>
        </li>

        <li class="afm-menu__item">
            <a href="{{ route('projects.index') }}" class="afm-menu__link {{ Request::is('projects*') ? 'active' : '' }}">Our Projects</a>
        </li>

        <li class="afm-menu__item">
            <button type="button" class="afm-menu__link {{ Request::is('resources*') || Request::is('blog*') ? 'active' : '' }}" aria-expanded="false">
                Knowledge Hub
                <svg class="afm-menu__caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </button>
            <ul class="afm-dropdown">
                <li><a href="{{ route('resources.tool') }}" class="afm-dropdown__link">Tools</a></li>
                <li><a href="{{ route('resources.index') }}" class="afm-dropdown__link">Resources</a></li>
                <li><a href="{{ route('blog.index') }}" class="afm-dropdown__link">Blogs</a></li>
            </ul>
        </li>
    </ul>

    <div class="afm-navbar__actions">
        <a href="{{ route('contact') }}" class="afm-btn-primary fm-cta-btn">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4">
                <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
            </svg>
            <span>Contact Us</span>
        </a>
        <button type="button" class="afm-burger" id="afmBurger" aria-label="Toggle menu" aria-expanded="false">
            <span class="afm-burger__bars"></span>
        </button>
    </div>
</nav>
