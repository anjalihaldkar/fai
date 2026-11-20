/* ==========================================================================
   Future Agri Infra — main script (the ONLY JS file for all pages)

   How it works
   - Every feature is one small init function.
   - Every init function checks that its section exists on the page and
     returns early if not, so one file is safe on all 4 pages.
   - All init functions run once from init() at the bottom.

   Table of contents
   01. Helpers
   02. Navigation (menu, dropdowns, burger)
   03. Hero slider
   04. FAQ accordion
   05. Fade-up on scroll
   06. Services tabs (data + init)
   07. Farming models cards
   08. Academy learning path
   09. Our Journey animation (GSAP)
   10. How We Think stacked panels (GSAP)
   11. Expertise orbit diagram
   12. Values cards + pins
   13. Projects slider
   14. Testimonials slider
   15. Farm plan form wizard (planfarm page)
   16. Init
   ========================================================================== */
(() => {
  'use strict';

  /* ------------------------------------------------------------------------
     01. Helpers
     ------------------------------------------------------------------------ */
  const $ = (selector, root = document) => root.querySelector(selector);
  const $$ = (selector, root = document) => Array.from(root.querySelectorAll(selector));

  const hasGsap = () =>
    typeof window.gsap !== 'undefined' && typeof window.ScrollTrigger !== 'undefined';

  const prefersReducedMotion = () =>
    window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function createLoopingTrack(track, items) {
    const count = items.length;
    const hasOverflow = track.scrollWidth > track.clientWidth + 2;
    let slides = items;
    let centerOffset = 0;

    if (hasOverflow && count > 1) {
      const makeClone = (item) => {
        const clone = item.cloneNode(true);
        clone.setAttribute('aria-hidden', 'true');
        clone.removeAttribute('id');
        clone.removeAttribute('aria-current');
        clone.querySelectorAll('[id]').forEach((element) => element.removeAttribute('id'));
        clone.querySelectorAll('a, button, input, select, textarea, [tabindex]').forEach((element) => {
          element.tabIndex = -1;
        });
        return clone;
      };
      const before = items.map(makeClone);
      const after = items.map(makeClone);
      track.prepend(...before);
      track.append(...after);
      slides = [...before, ...items, ...after];
      centerOffset = count;
    }

    const targetLeft = (index) => {
      const trackRect = track.getBoundingClientRect();
      const slideRect = slides[index].getBoundingClientRect();
      const paddingLeft = parseFloat(getComputedStyle(track).paddingLeft) || 0;
      return slideRect.left - trackRect.left + track.scrollLeft - paddingLeft;
    };

    const nearestIndex = () => {
      let nearest = 0;
      let nearestDistance = Infinity;
      slides.forEach((slide, index) => {
        const distance = Math.abs(targetLeft(index) - track.scrollLeft);
        if (distance < nearestDistance) {
          nearestDistance = distance;
          nearest = index;
        }
      });
      return nearest;
    };

    const normalize = (index) => {
      if (!centerOffset || index >= count && index < count * 2) return index;
      const equivalent = index < count ? index + count : index - count;
      track.scrollLeft = targetLeft(equivalent);
      return equivalent;
    };

    return {
      count,
      slides,
      centerOffset,
      isLooping: centerOffset > 0,
      targetLeft,
      nearestIndex,
      normalize,
      logicalIndex: (index) => ((index % count) + count) % count,
      centerIndex: (index) => centerOffset + ((index % count) + count) % count
    };
  }

  // Must match the CSS breakpoint where the burger menu replaces the desktop menu
  const MOBILE_NAV_QUERY = '(max-width: 1240px)';

  /* ------------------------------------------------------------------------
     02. Navigation
     ------------------------------------------------------------------------ */
  function initNav() {
    const scope = $('#afmScope');
    const burger = $('#afmBurger');
    const scrim = $('#afmScrim');
    const closeBtn = $('#afmClose');
    if (!scope || !burger) return;

    const items = $$('.afm-menu__item', scope);
    const isMobile = () => window.matchMedia(MOBILE_NAV_QUERY).matches;

    const setOpen = (item, open) => {
      item.classList.toggle('is-open', open);
      const trigger = $('.afm-menu__link', item);
      if (trigger) trigger.setAttribute('aria-expanded', String(open));
    };

    const closeAllExcept = (except) => {
      items.forEach((item) => {
        if (item !== except) setOpen(item, false);
      });
    };

    items.forEach((item) => {
      const trigger = $('.afm-menu__link', item);
      const hasPanel = $('.afm-dropdown, .afm-mega', item);
      if (!trigger || !hasPanel) return;
      const isMegaItem = item.classList.contains('afm-menu__item--mega');
      let hoverCloseTimer = null;

      const clearHoverClose = () => {
        window.clearTimeout(hoverCloseTimer);
        hoverCloseTimer = null;
      };

      const scheduleHoverClose = () => {
        clearHoverClose();
        hoverCloseTimer = window.setTimeout(() => {
          setOpen(item, false);
          hoverCloseTimer = null;
        }, 220);
      };

      const toggle = () => {
        const willOpen = !item.classList.contains('is-open');
        closeAllExcept(item);
        setOpen(item, willOpen);
      };

      trigger.addEventListener('click', (e) => {
        // Mobile: tapping the caret opens the submenu, tapping the text follows the link
        if (isMobile() && e.target.closest('.afm-menu__caret')) {
          e.preventDefault();
          toggle();
          return;
        }
        // Buttons (no link) always toggle
        if (trigger.tagName === 'BUTTON') {
          e.preventDefault();
          toggle();
        }
      });

      // Desktop: hover opens / closes
      item.addEventListener('mouseenter', () => {
        if (isMobile()) return;
        clearHoverClose();
        closeAllExcept(item);
        setOpen(item, true);
      });
      item.addEventListener('mouseleave', () => {
        if (isMobile()) return;
        if (isMegaItem) {
          scheduleHoverClose();
        } else {
          setOpen(item, false);
        }
      });

      if (isMegaItem) {
        hasPanel.addEventListener('mouseenter', clearHoverClose);
        hasPanel.addEventListener('mouseleave', scheduleHoverClose);
      }
    });

    const openMobileMenu = () => {
      scope.classList.add('is-menu-open');
      burger.setAttribute('aria-expanded', 'true');
    };
    const closeMobileMenu = () => {
      scope.classList.remove('is-menu-open');
      burger.setAttribute('aria-expanded', 'false');
      closeAllExcept(null);
    };

    $$('.afm-dropdown__link, .afm-mega__link, .afm-mega__col-title, .afm-mega__footer-link', scope)
      .forEach((link) => {
        link.addEventListener('click', () => {
          if (isMobile()) closeMobileMenu();
        });
      });

    burger.addEventListener('click', () => {
      scope.classList.contains('is-menu-open') ? closeMobileMenu() : openMobileMenu();
    });
    if (scrim) scrim.addEventListener('click', closeMobileMenu);
    if (closeBtn) closeBtn.addEventListener('click', closeMobileMenu);

    document.addEventListener('click', (e) => {
      if (isMobile()) return;
      if (!scope.contains(e.target)) closeAllExcept(null);
    });

    window.addEventListener('resize', () => {
      if (!isMobile()) closeMobileMenu();
    });
  }

  /* ------------------------------------------------------------------------
     Protected structures tabs
     ------------------------------------------------------------------------ */
  function initProtectedStructureTabs() {
    const section = $('#protected-structures.fmps');
    if (!section) return;

    const tabs = $$('.fmps-item__trigger', section);
    const list = $('.fmps-list', section);
    const controls = $('.fmps-slider-controls', section);
    const previous = $('[data-fmps-prev]', section);
    const next = $('[data-fmps-next]', section);
    const count = $('[data-fmps-count]', section);
    const image = $('#fmps-image', section);
    const panel = $('#fmps-image-panel', section);
    if (!tabs.length || !list || !image || !panel) return;

    let activeTab = tabs.findIndex((tab) => tab.getAttribute('aria-selected') === 'true');
    if (activeTab < 0) activeTab = 0;
    let imageRequest = 0;
    let scrollTimer = 0;
    const mobileQuery = window.matchMedia('(max-width: 767px)');

    const updateControls = () => {
      if (!controls || !previous || !next || !count) return;
      controls.hidden = !mobileQuery.matches;
      previous.disabled = activeTab === 0;
      next.disabled = activeTab === tabs.length - 1;
      count.textContent = `${String(activeTab + 1).padStart(2, '0')} / ${String(tabs.length).padStart(2, '0')}`;
    };

    const updateOrientation = () => {
      list.setAttribute('aria-orientation', mobileQuery.matches ? 'horizontal' : 'vertical');
    };

    const activate = (index, moveFocus = false, syncSlider = false) => {
      const tab = tabs[index];
      if (!tab) return;
      activeTab = index;

      tabs.forEach((item, itemIndex) => {
        const selected = itemIndex === index;
        item.setAttribute('aria-selected', String(selected));
        item.tabIndex = selected ? 0 : -1;
        item.closest('.fmps-item')?.classList.toggle('fmps-item--active', selected);
      });
      updateControls();

      panel.setAttribute('aria-labelledby', tab.id);
      if (moveFocus) tab.focus();

      if (syncSlider && mobileQuery.matches) {
        const listRect = list.getBoundingClientRect();
        const itemRect = tab.closest('.fmps-item').getBoundingClientRect();
        const left = list.scrollLeft + itemRect.left - listRect.left;
        list.scrollTo({ left, behavior: prefersReducedMotion() ? 'auto' : 'smooth' });
      }

      const source = tab.dataset.image;
      const alt = tab.dataset.alt;
      if (!source || !alt || image.getAttribute('src') === source) return;

      const request = ++imageRequest;
      const nextImage = new Image();
      image.classList.add('is-changing');
      nextImage.onload = () => {
        if (request !== imageRequest) return;
        image.src = source;
        image.alt = alt;
        requestAnimationFrame(() => image.classList.remove('is-changing'));
      };
      nextImage.onerror = () => {
        if (request !== imageRequest) return;
        image.classList.remove('is-changing');
        console.error(`Unable to load protected structure image: ${source}`);
      };
      nextImage.src = source;
    };

    if (previous && next) {
      previous.addEventListener('click', () => activate(activeTab - 1, false, true));
      next.addEventListener('click', () => activate(activeTab + 1, false, true));
    }

    tabs.forEach((tab, index) => {
      tab.addEventListener('click', () => activate(index, false, true));
      tab.addEventListener('pointerenter', (event) => {
        if (event.pointerType === 'mouse') activate(index);
      });
      tab.addEventListener('keydown', (event) => {
        let nextIndex;
        if (mobileQuery.matches && event.key === 'ArrowRight') nextIndex = (index + 1) % tabs.length;
        else if (mobileQuery.matches && event.key === 'ArrowLeft') nextIndex = (index - 1 + tabs.length) % tabs.length;
        else if (!mobileQuery.matches && event.key === 'ArrowDown') nextIndex = (index + 1) % tabs.length;
        else if (!mobileQuery.matches && event.key === 'ArrowUp') nextIndex = (index - 1 + tabs.length) % tabs.length;
        else if (event.key === 'Home') nextIndex = 0;
        else if (event.key === 'End') nextIndex = tabs.length - 1;
        else return;

        event.preventDefault();
        activate(nextIndex, true, true);
      });
    });

    list.addEventListener('scroll', () => {
      if (!mobileQuery.matches) return;
      window.clearTimeout(scrollTimer);
      scrollTimer = window.setTimeout(() => {
        const listCenter = list.getBoundingClientRect().left + list.clientWidth / 2;
        let closestIndex = 0;
        let closestDistance = Infinity;

        tabs.forEach((tab, index) => {
          const item = tab.closest('.fmps-item');
          if (!item) return;
          const rect = item.getBoundingClientRect();
          const distance = Math.abs(rect.left + rect.width / 2 - listCenter);
          if (distance < closestDistance) {
            closestDistance = distance;
            closestIndex = index;
          }
        });

        activate(closestIndex);
      }, 80);
    }, { passive: true });

    updateOrientation();
    updateControls();
    window.addEventListener('resize', updateOrientation);
    mobileQuery.addEventListener('change', updateControls);
  }

  /* ------------------------------------------------------------------------
     Protected structure comparison table (mobile)
     ------------------------------------------------------------------------ */
  function initStructureComparisonSlider() {
    const section = $('#key-differences');
    if (!section) return;

    const track = $('.fmkd-scroll-wrap', section);
    const table = $('.fmkd-table', section);
    const controls = $('.fmkd-slider-controls', section);
    const previous = $('[data-fmkd-prev]', section);
    const next = $('[data-fmkd-next]', section);
    const count = $('[data-fmkd-count]', section);
    const columns = $$('.fmkd-table__col-head', table);
    if (!track || !table || !controls || !previous || !next || !count || !columns.length) return;

    const mobileQuery = window.matchMedia('(max-width: 767px)');
    let activeColumn = 0;
    let scrollTimer = 0;

    const firstColumnWidth = () => {
      const factorColumn = table.querySelector('.fmkd-table__corner');
      return factorColumn ? factorColumn.getBoundingClientRect().width : 0;
    };

    const targetLeft = (index) => {
      const column = columns[index];
      if (!column) return 0;
      const columnRect = column.getBoundingClientRect();
      const trackRect = track.getBoundingClientRect();
      const left = columnRect.left - trackRect.left + track.scrollLeft - firstColumnWidth();
      return Math.max(0, Math.min(track.scrollWidth - track.clientWidth, left));
    };

    const update = () => {
      controls.hidden = !mobileQuery.matches;
      previous.disabled = activeColumn === 0;
      next.disabled = activeColumn === columns.length - 1;
      count.textContent = `${activeColumn + 1} / ${columns.length}`;
    };

    const syncActiveColumn = () => {
      let closestColumn = 0;
      let closestDistance = Infinity;
      columns.forEach((column, index) => {
        const distance = Math.abs(targetLeft(index) - track.scrollLeft);
        if (distance < closestDistance) {
          closestDistance = distance;
          closestColumn = index;
        }
      });
      activeColumn = closestColumn;
      update();
    };

    const goTo = (index) => {
      activeColumn = Math.max(0, Math.min(columns.length - 1, index));
      track.scrollTo({
        left: targetLeft(activeColumn),
        behavior: prefersReducedMotion() ? 'auto' : 'smooth'
      });
      update();
    };

    previous.addEventListener('click', () => goTo(activeColumn - 1));
    next.addEventListener('click', () => goTo(activeColumn + 1));

    track.addEventListener('scroll', () => {
      if (!mobileQuery.matches) return;
      window.clearTimeout(scrollTimer);
      scrollTimer = window.setTimeout(() => {
        syncActiveColumn();
      }, 80);
    }, { passive: true });

    const syncForViewport = () => {
      if (mobileQuery.matches) syncActiveColumn();
      else update();
    };
    window.addEventListener('resize', syncForViewport);
    mobileQuery.addEventListener('change', syncForViewport);
    syncForViewport();
  }

  /* ------------------------------------------------------------------------
     Protected page crop cards carousel (mobile)
     ------------------------------------------------------------------------ */
  function initCropCardsSlider() {
    const root = $('[data-fmcs-slider]');
    if (!root) return;

    const track = $('[data-fmcs-track]', root);
    const cards = $$('.fmcs-card', root);
    const controls = $('[data-fmcs-controls]', root);
    const prev = $('[data-fmcs-prev]', root);
    const next = $('[data-fmcs-next]', root);
    const count = $('[data-fmcs-count]', root);
    if (!track || !cards.length || !controls || !prev || !next || !count) return;

    const mobileQuery = window.matchMedia('(max-width: 767px)');
    let current = 0;
    let scrollTimer = null;

    const clamp = (index) => Math.max(0, Math.min(cards.length - 1, index));
    const cardStart = (card) => {
      const cardRect = card.getBoundingClientRect();
      const trackRect = track.getBoundingClientRect();
      return cardRect.left - trackRect.left + track.scrollLeft;
    };
    const trackPaddingLeft = () => parseFloat(getComputedStyle(track).paddingLeft) || 0;
    const targetLeft = (index) => Math.max(
      0,
      Math.min(track.scrollWidth - track.clientWidth, cardStart(cards[index]) - trackPaddingLeft())
    );

    const nearestCard = () => {
      let closest = 0;
      let distance = Infinity;
      cards.forEach((card, index) => {
        const nextDistance = Math.abs(cardStart(card) - track.scrollLeft - trackPaddingLeft());
        if (nextDistance < distance) {
          distance = nextDistance;
          closest = index;
        }
      });
      return closest;
    };

    const update = () => {
      controls.hidden = !mobileQuery.matches;
      const maxScroll = track.scrollWidth - track.clientWidth;
      prev.disabled = current === 0;
      next.disabled = current === cards.length - 1 || maxScroll <= 1;
      count.textContent = `${String(current + 1).padStart(2, '0')} / ${String(cards.length).padStart(2, '0')}`;
    };

    const goTo = (index) => {
      current = clamp(index);
      track.scrollTo({
        left: targetLeft(current),
        behavior: 'auto'
      });
      update();
    };

    prev.addEventListener('click', () => goTo(current - 1));
    next.addEventListener('click', () => goTo(current + 1));

    track.addEventListener('scroll', () => {
      clearTimeout(scrollTimer);
      scrollTimer = setTimeout(() => {
        current = nearestCard();
        update();
      }, 90);
    }, { passive: true });

    track.addEventListener('keydown', (event) => {
      if (event.key === 'ArrowRight') {
        event.preventDefault();
        goTo(current + 1);
      } else if (event.key === 'ArrowLeft') {
        event.preventDefault();
        goTo(current - 1);
      }
    });

    window.addEventListener('resize', () => {
      update();
      if (mobileQuery.matches) goTo(current);
    });
    mobileQuery.addEventListener('change', update);

    update();
  }

  /* ------------------------------------------------------------------------
     Sensor brand product carousels
     ------------------------------------------------------------------------ */
  function initSensorProductSliders() {
    $$('[data-fmbr-slider]').forEach((root) => {
      const track = $('[data-fmbr-track]', root);
      const cards = track ? $$('.fmbr-card', track) : [];
      const previous = $('[data-fmbr-prev]', root);
      const next = $('[data-fmbr-next]', root);
      const count = $('[data-fmbr-count]', root);
      if (!track || !cards.length || !previous || !next || !count) {
        console.error('A sensor product carousel is missing its track, cards, or controls.');
        return;
      }

      let current = 0;
      let scrollTimer = 0;
      const clamp = (index) => Math.max(0, Math.min(maxIndex(), index));
      const gap = () => parseFloat(getComputedStyle(track).columnGap) || 0;
      const pitch = () => cards[0].getBoundingClientRect().width + gap();
      const visibleCount = () => Math.max(1, Math.floor((track.clientWidth + gap()) / pitch()));
      const maxIndex = () => Math.max(0, cards.length - visibleCount());
      const cardStart = (card) => {
        const cardRect = card.getBoundingClientRect();
        const trackRect = track.getBoundingClientRect();
        return cardRect.left - trackRect.left + track.scrollLeft;
      };
      const nearestCard = () => {
        let closest = 0;
        let distance = Infinity;
        cards.forEach((card, index) => {
          const nextDistance = Math.abs(cardStart(card) - track.scrollLeft);
          if (nextDistance < distance) {
            distance = nextDistance;
            closest = index;
          }
        });
        return closest;
      };
      const update = () => {
        current = clamp(current);
        previous.disabled = current === 0;
        next.disabled = current === maxIndex();
        count.textContent = `${String(current + 1).padStart(2, '0')} / ${String(cards.length).padStart(2, '0')}`;
      };
      const goTo = (index) => {
        current = clamp(index);
        track.scrollTo({
          left: cardStart(cards[current]),
          behavior: 'auto'
        });
        update();
      };

      previous.addEventListener('click', () => goTo(current - 1));
      next.addEventListener('click', () => goTo(current + 1));
      track.addEventListener('scroll', () => {
        window.clearTimeout(scrollTimer);
        scrollTimer = window.setTimeout(() => {
          current = clamp(nearestCard());
          update();
        }, 90);
      }, { passive: true });
      track.addEventListener('keydown', (event) => {
        if (event.key === 'ArrowRight') {
          event.preventDefault();
          goTo(current + 1);
        } else if (event.key === 'ArrowLeft') {
          event.preventDefault();
          goTo(current - 1);
        }
      });
      window.addEventListener('resize', () => goTo(current));

      update();
    });
  }

  /* ------------------------------------------------------------------------
     03. Hero slider (home page)
     ------------------------------------------------------------------------ */
  function initHeroSlider() {
    const slides = $$('.afm-hero__slide');
    const dots = $$('.afm-hero__dot');
    const hero = $('.afm-hero');
    if (!slides.length || !hero) return;

    const AUTOPLAY_MS = 6000;
    const SWIPE_MIN_PX = 50;
    let current = 0;
    let timer = null;

    const goTo = (index) => {
      slides[current].classList.remove('active');
      if (dots[current]) dots[current].classList.remove('active');

      current = (index + slides.length) % slides.length;

      slides[current].classList.add('active');
      if (dots[current]) dots[current].classList.add('active');
    };

    const startAutoplay = () => {
      clearInterval(timer);
      timer = setInterval(() => goTo(current + 1), AUTOPLAY_MS);
    };

    dots.forEach((dot, index) => {
      dot.addEventListener('click', () => {
        goTo(index);
        startAutoplay();
      });
    });

    // Swipe (touch) and drag (mouse)
    let startX = 0;
    let dragging = false;

    const handleSwipe = (endX) => {
      const diff = startX - endX;
      if (Math.abs(diff) < SWIPE_MIN_PX) return;
      goTo(diff > 0 ? current + 1 : current - 1);
      startAutoplay();
    };

    hero.addEventListener('touchstart', (e) => { startX = e.changedTouches[0].screenX; }, { passive: true });
    hero.addEventListener('touchend', (e) => handleSwipe(e.changedTouches[0].screenX), { passive: true });
    hero.addEventListener('mousedown', (e) => { dragging = true; startX = e.clientX; });
    hero.addEventListener('mouseup', (e) => {
      if (!dragging) return;
      dragging = false;
      handleSwipe(e.clientX);
    });
    hero.addEventListener('mouseleave', (e) => {
      if (!dragging) return;
      dragging = false;
      handleSwipe(e.clientX);
    });

    startAutoplay();
  }

  /* ------------------------------------------------------------------------
     04. FAQ accordion
     ------------------------------------------------------------------------ */
  function initFaq() {
    $$('.afm-faq__list').forEach((list) => {
      const items = $$('.afm-faq__item', list);

      items.forEach((item) => {
        const button = $('.afm-faq__question', item);
        const answer = $('.afm-faq__answer', item);
        if (!button || !answer) return;

        button.addEventListener('click', () => {
          const wasOpen = item.classList.contains('is-active');

          // Close everything in this list
          items.forEach((other) => {
            other.classList.remove('is-active');
            const q = $('.afm-faq__question', other);
            const a = $('.afm-faq__answer', other);
            if (q) q.setAttribute('aria-expanded', 'false');
            if (a) a.style.maxHeight = null;
          });

          // Open the clicked one if it was closed
          if (!wasOpen) {
            item.classList.add('is-active');
            button.setAttribute('aria-expanded', 'true');
            answer.style.maxHeight = `${answer.scrollHeight}px`;
          }
        });
      });
    });
  }

  /* ------------------------------------------------------------------------
     05. Fade-up on scroll (supports both .fm-fade-up and .fade-up)
     ------------------------------------------------------------------------ */
  function initFadeUp() {
    const elements = $$('.fm-fade-up, .fade-up');
    if (!elements.length) return;

    if (!('IntersectionObserver' in window)) {
      elements.forEach((el) => el.classList.add('is-visible'));
      return;
    }

    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-visible');
        obs.unobserve(entry.target);
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    elements.forEach((el) => observer.observe(el));
  }

  /* ------------------------------------------------------------------------
     06. Services tabs
     ------------------------------------------------------------------------ */
  // Icon paths are written once and reused by the data below
  const ICONS = {
    shield: '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
    gem: '<path d="M6 3h12l4 6-10 12L2 9z"/>',
    cube: '<path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/>',
    cubeOutline: '<path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>',
    dollar: '<path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>',
    dollarLine: '<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>',
    drip: '<path d="M12 22a10 10 0 1 0 0-20 10 10 0 0 0 0 20zM12 16v-6M12 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM16 12l-4-2M8 12l4-2"/>',
    grid: '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="3" y1="15" x2="21" y2="15"/>',
    clock: '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
    phone: '<rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/>',
    bell: '<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/>',
    plusCircle: '<circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/>',
    users: '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
    bars: '<line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/>',
    thermometer: '<path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z"/>',
  };

  const icon = (name) =>
    `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">${ICONS[name]}</svg>`;

  const SERVICES = [
    {
      label: 'Protected Structures',
      title: 'Engineered Structures for Every Climate',
      desc: 'We design and deliver greenhouse, polyhouse and net house structures tailored to your crop, location and production goals.',
      image: 'images/farm1.jpeg',
      features: [
        { title: 'Site-Specific Design', desc: 'Customized structures for your land and climate.', icon: 'shield' },
        { title: 'Durable & High-Quality', desc: 'Long-lasting materials and precision engineering.', icon: 'gem' },
        { title: 'Scalable Solutions', desc: 'From small units to large commercial farms.', icon: 'cube' },
        { title: 'Optimized for Crops', desc: 'Designed to maximize yield and efficiency.', icon: 'dollar' },
      ],
    },
    {
      label: 'Growing Systems',
      title: 'Modern Systems for Higher Yield',
      desc: 'Hydroponic, soilless and vertical growing systems planned around your crop cycle, water availability and available space.',
      image: 'images/farm4.jpeg',
      features: [
        { title: 'Hydroponic Setups', desc: 'NFT, DFT and drip systems built for consistency.', icon: 'dollar' },
        { title: 'Space Efficient', desc: 'Vertical and multi-tier layouts to grow more per sq. ft.', icon: 'grid' },
        { title: 'Faster Crop Cycles', desc: 'Controlled nutrition for quicker, uniform growth.', icon: 'dollar' },
        { title: 'Low Water Usage', desc: 'Recirculating systems that cut water waste.', icon: 'drip' },
      ],
    },
    {
      label: 'Crop Solutions',
      title: 'The Right Crop for Your Farm',
      desc: 'Expert agronomy guidance to select, plan and manage high-value crops that suit your climate, soil and market demand.',
      image: 'images/farm5.jpeg',
      features: [
        { title: 'Crop Planning', desc: 'Season-wise plans based on profitability.', icon: 'dollar' },
        { title: 'Quality Inputs', desc: 'Trusted seeds, saplings and nutrients.', icon: 'cubeOutline' },
        { title: 'Disease Management', desc: 'Preventive protocols and expert support.', icon: 'shield' },
        { title: 'Agronomy Support', desc: 'On-ground guidance at every growth stage.', icon: 'users' },
      ],
    },
    {
      label: 'Smart Automation',
      title: 'Automation That Farms Smarter',
      desc: 'Sensor-based controls for irrigation, fertigation and climate so your farm runs efficiently with less manual effort.',
      image: 'images/farm6.jpeg',
      features: [
        { title: 'Auto Irrigation', desc: 'Timed and sensor-driven watering schedules.', icon: 'clock' },
        { title: 'Fertigation Control', desc: 'Precise nutrient dosing, every cycle.', icon: 'dollar' },
        { title: 'Remote Monitoring', desc: 'Track and control from your phone.', icon: 'phone' },
        { title: 'Real-Time Alerts', desc: 'Instant notifications for any deviation.', icon: 'bell' },
      ],
    },
    {
      label: 'Water & Climate Management',
      title: 'Full Control Over Water and Climate',
      desc: 'Efficient irrigation, water quality management and climate control systems that keep crops in their ideal growing conditions.',
      image: 'images/farm1.jpeg',
      features: [
        { title: 'Drip & Micro Irrigation', desc: 'Targeted watering with minimal waste.', icon: 'drip' },
        { title: 'Water Treatment', desc: 'Filtration and quality management.', icon: 'plusCircle' },
        { title: 'Cooling & Ventilation', desc: 'Fans, foggers and cooling pads.', icon: 'dollar' },
        { title: 'Climate Sensors', desc: 'Live temperature and humidity tracking.', icon: 'thermometer' },
      ],
    },
    {
      label: 'Market Linkage',
      title: 'From Harvest to the Right Buyer',
      desc: 'We connect your produce with reliable buyers, retailers and processors so your farm earns steady, fair returns.',
      image: 'images/farm4.jpeg',
      features: [
        { title: 'Buyer Network', desc: 'Access to verified retailers and wholesalers.', icon: 'users' },
        { title: 'Assured Demand', desc: 'Planned production matched to market need.', icon: 'bars' },
        { title: 'Quality Grading', desc: 'Sorting and packing to market standards.', icon: 'gem' },
        { title: 'Better Returns', desc: 'Fair pricing and long-term partnerships.', icon: 'dollarLine' },
      ],
    },
  ];

  function initServicesTabs() {
    const sections = $$('.sfs-section');
    if (!sections.length) return;

    const AUTOPLAY_MS = 6000;
    const FADE_OUT_MS = 200;
    const FADE_IN_MS = 300;

    // Preload service images once
    SERVICES.forEach((service) => { new Image().src = service.image; });

    sections.forEach((section) => {
      const tabs = $$('.sfs-tab', section);
      const panel = $('.sfs-panel', section);
      const out = {
        num: $('#sfs-content-num', section),
        label: $('#sfs-content-label', section),
        title: $('#sfs-content-title', section),
        desc: $('#sfs-content-desc', section),
        features: $('#sfs-content-features', section),
        image: $('#sfs-content-image', section),
      };
      if (!tabs.length || !panel || !out.title) return;

      const autoplay = section.getAttribute('data-autoplay') === 'true';
      let current = Math.max(0, tabs.findIndex((tab) => tab.classList.contains('sfs-is-active')));
      let isChanging = false;
      let timer = null;
      let pendingIndex = null;

      const renderPanel = (index) => {
        const data = SERVICES[index];
        if (!data) return;
        const label = data.label;

        out.num.textContent = `0${index + 1}`;
        out.label.textContent = label.toUpperCase();
        out.title.textContent = data.title;
        out.desc.textContent = data.desc;
        out.image.src = data.image;
        out.image.alt = label;
        out.features.innerHTML = data.features.map((f) => `
          <div class="sfs-feature">
            <span class="sfs-feature-icon">${icon(f.icon)}</span>
            <div class="sfs-feature-text">
              <h4 class="sfs-feature-title">${f.title}</h4>
              <p class="sfs-feature-desc">${f.desc}</p>
            </div>
          </div>`).join('');
      };

      const switchTab = (index) => {
        if (isChanging) {
          pendingIndex = index === current ? null : index;
          return;
        }
        if (index === current) return;
        isChanging = true;

        tabs[current].classList.remove('sfs-is-active');
        tabs[current].setAttribute('aria-selected', 'false');
        tabs[index].classList.add('sfs-is-active');
        tabs[index].setAttribute('aria-selected', 'true');
        current = index;

        panel.classList.add('sfs-is-changing');
        setTimeout(() => {
          renderPanel(index);
          requestAnimationFrame(() => {
            panel.classList.remove('sfs-is-changing');
            setTimeout(() => {
              isChanging = false;
              if (pendingIndex !== null) {
                const nextIndex = pendingIndex;
                pendingIndex = null;
                switchTab(nextIndex);
              }
            }, FADE_IN_MS);
          });
        }, FADE_OUT_MS);
      };

      const stopAutoplay = () => clearInterval(timer);
      const startAutoplay = () => {
        stopAutoplay();                       // never stack two timers
        if (!autoplay) return;
        timer = setInterval(() => switchTab((current + 1) % tabs.length), AUTOPLAY_MS);
      };
      const userSwitch = (index) => { switchTab(index); startAutoplay(); };

      tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => userSwitch(index));

        tab.addEventListener('keydown', (e) => {
          const last = tabs.length - 1;
          const targets = {
            ArrowRight: (index + 1) % tabs.length,
            ArrowLeft: (index - 1 + tabs.length) % tabs.length,
            Home: 0,
            End: last,
          };
          if (!(e.key in targets)) return;
          e.preventDefault();
          tabs[targets[e.key]].focus();
          userSwitch(targets[e.key]);
        });
      });

      const prev = $('#sfs-nav-prev', section);
      const next = $('#sfs-nav-next', section);
      const getNextIndex = (direction) => {
        const baseIndex = pendingIndex === null ? current : pendingIndex;
        return (baseIndex + direction + tabs.length) % tabs.length;
      };
      if (prev) prev.addEventListener('click', () => userSwitch(getNextIndex(-1)));
      if (next) next.addEventListener('click', () => userSwitch(getNextIndex(1)));

      if (autoplay) {
        startAutoplay();
        section.addEventListener('mouseenter', stopAutoplay);
        section.addEventListener('mouseleave', startAutoplay);
        section.addEventListener('focusin', stopAutoplay);
        section.addEventListener('focusout', startAutoplay);
      }
    });
  }

  /* ------------------------------------------------------------------------
     07. Farming models cards
     ------------------------------------------------------------------------ */
  function initModels() {
    const track = $('#fmdmTrack');
    if (!track) return;

    const cards = $$('.fmdm-card', track);
    const dotsWrap = $('#fmdmDots');
    const viewport = $('.fmdm__viewport');
    if (!cards.length) return;

    const HOVER_DELAY_MS = 70;
    const isSmall = () => window.matchMedia('(max-width: 991px)').matches;
    const defaultIndex = cards.findIndex((card) => card.hasAttribute('data-default'));
    let current = defaultIndex !== -1 ? defaultIndex : 0;
    let hoverTimer;

    const dots = dotsWrap
      ? cards.map((_, i) => {
        const dot = document.createElement('button');
        dot.className = 'fmdm-nav__dot';
        dot.setAttribute('aria-label', `Show model ${i + 1}`);
        dot.addEventListener('click', () => setActive(i, true));
        dotsWrap.appendChild(dot);
        return dot;
      })
      : [];

    // Scroll sideways inside the slider only (never moves the whole page)
    const centerCard = (card) => {
      if (!viewport || !card) return;
      const cardRect = card.getBoundingClientRect();
      const viewportRect = viewport.getBoundingClientRect();
      const left = viewport.scrollLeft + cardRect.left + cardRect.width / 2
        - (viewportRect.left + viewport.clientWidth / 2);
      viewport.scrollTo({ left, behavior: 'smooth' });
    };

    function setActive(index, scroll = false) {
      current = (index + cards.length) % cards.length;
      cards.forEach((card, i) => {
        card.classList.toggle('is-active', i === current);
        card.setAttribute('aria-expanded', String(i === current));
      });
      dots.forEach((dot, i) => dot.classList.toggle('is-active', i === current));
      if (scroll && isSmall()) centerCard(cards[current]);
    }

    cards.forEach((card, i) => {
      card.addEventListener('mouseenter', () => {
        if (!window.matchMedia('(hover: hover)').matches) return;
        clearTimeout(hoverTimer);
        hoverTimer = setTimeout(() => setActive(i), HOVER_DELAY_MS);
      });
      card.addEventListener('mouseleave', () => clearTimeout(hoverTimer));
      card.addEventListener('focusin', () => setActive(i));
      card.addEventListener('click', (e) => {
        if (card.classList.contains('is-active')) return;
        e.preventDefault();
        setActive(i, true);
      });
    });

    const prev = $('#fmdmPrev');
    const next = $('#fmdmNext');
    if (prev) prev.addEventListener('click', () => setActive(current - 1, true));
    if (next) next.addEventListener('click', () => setActive(current + 1, true));

    if (viewport) {
      let scrollEndTimer;
      let recenterTimer;
      const syncActiveCard = () => {
        if (!isSmall()) return;

        const viewportCenter = viewport.getBoundingClientRect().left + viewport.clientWidth / 2;
        let nearestIndex = 0;
        let nearestDistance = Infinity;

        cards.forEach((card, index) => {
          const rect = card.getBoundingClientRect();
          const distance = Math.abs(rect.left + rect.width / 2 - viewportCenter);
          if (distance < nearestDistance) {
            nearestDistance = distance;
            nearestIndex = index;
          }
        });

        if (nearestIndex !== current) {
          setActive(nearestIndex);
          window.clearTimeout(recenterTimer);
          recenterTimer = window.setTimeout(() => centerCard(cards[nearestIndex]), 500);
        }
      };
      const scheduleActiveCardSync = () => {
        window.clearTimeout(scrollEndTimer);
        window.clearTimeout(recenterTimer);
        scrollEndTimer = window.setTimeout(syncActiveCard, 220);
      };

      viewport.addEventListener('scroll', scheduleActiveCardSync, { passive: true });
      viewport.addEventListener('scrollend', syncActiveCard);
    }

    setActive(current);
  }

  /* ------------------------------------------------------------------------
     08. Academy learning path
     ------------------------------------------------------------------------ */
  function initAcademySteps() {
    const steps = $$('.fmat-step');
    if (!steps.length) return;

    steps.forEach((step) => {
      step.addEventListener('click', () => {
        steps.forEach((s) => s.classList.remove('is-active'));
        step.classList.add('is-active');
      });
    });
  }

  /* ------------------------------------------------------------------------
     09. Our Journey animation (GSAP)
     ------------------------------------------------------------------------ */
  function initJourneyAnimation() {
    if (!hasGsap() || !$('.fmoj')) return;

    const trigger = { trigger: '.fmoj', start: 'top 80%' };

    gsap.from('.fmoj__content', {
      scrollTrigger: trigger, x: -100, opacity: 0, duration: 1, ease: 'power3.out',
    });
    gsap.from('.fmoj__media', {
      scrollTrigger: trigger, y: 100, opacity: 0, duration: 1, ease: 'power3.out', delay: 0.3,
    });

    if ($('.fmoj-steps')) {
      gsap.from('.fmoj-steps .fmoj-step', {
        scrollTrigger: { trigger: '.fmoj-steps', start: 'top 90%' },
        y: 50, opacity: 0, duration: 0.8, stagger: 0.15, ease: 'power3.out',
      });
    }
  }

  /* ------------------------------------------------------------------------
     10. How We Think — pinned stacked panels (GSAP, about page)
     ------------------------------------------------------------------------ */
  function initStackedPanels() {
    const root = $('.fmpr');
    if (!root || !hasGsap()) return;

    const pin = $('.fmpr__pin', root);
    const panels = gsap.utils.toArray('.fmpr-panel', root);
    const shades = panels.map((p) => $('.fmpr-panel__shade', p));
    const end = $('.fmpr-end', root);
    if (!pin || panels.length < 2) return;

    const mm = gsap.matchMedia();

    mm.add('(prefers-reduced-motion: no-preference)', () => {
      root.classList.add('fmpr--stack');

      panels.forEach((p, i) => gsap.set(p, { zIndex: i + 1 }));
      gsap.set(panels.slice(1), { yPercent: 100 });   // panels 2-4 wait below

      const tl = gsap.timeline({
        defaults: { ease: 'none' },
        scrollTrigger: {
          trigger: pin,
          start: 'top top',
          end: () => `+=${(panels.length - 1) * Math.round(window.innerHeight * 0.85)}`,
          pin: true,
          pinSpacing: true,
          scrub: 1,
          anticipatePin: 1,
          invalidateOnRefresh: true,
          snap: { snapTo: 'labels', duration: { min: 0.25, max: 0.6 }, delay: 0.05, ease: 'power2.inOut' },
        },
      });

      tl.addLabel('panel1');
      panels.slice(1).forEach((panel, i) => {
        tl.to(panel, { yPercent: 0, duration: 1, ease: 'power2.out' })
          .to(shades[i], { opacity: 0.45, duration: 1 }, '<')
          .to(panels[i], { scale: 0.97, transformOrigin: '50% 0%', duration: 1 }, '<')
          .addLabel(`panel${i + 2}`);
      });

      if (end && end.children.length) {
        gsap.from(end.children, {
          y: 50, opacity: 0, duration: 0.9, ease: 'power3.out', stagger: 0.12,
          scrollTrigger: { trigger: end, start: 'top 80%', toggleActions: 'play none none reverse' },
        });
      }

      return () => {                                   // cleanup when the media query stops matching
        root.classList.remove('fmpr--stack');
        gsap.set(panels, { clearProps: 'all' });
        gsap.set(shades, { clearProps: 'all' });
      };
    });

    window.addEventListener('load', () => ScrollTrigger.refresh());   // recalc after images load
  }

  /* ------------------------------------------------------------------------
     11. Expertise orbit diagram (about page)
     ------------------------------------------------------------------------ */
  function initExpertise() {
    const root = $('[data-fmex]');
    if (!root) return;

    const MOBILE_MAX = 767;
    const nodes = $$('[data-fmex-node]', root);
    const labels = $$('[data-fmex-label]', root);
    const slides = $$('[data-fmex-slide]', root);
    const lines = $$('[data-fmex-line]', root);
    const ghost = $('[data-fmex-ghost]', root);
    const stepsTrack = $('.fmex-steps', root);

    let selected = null;     // number chosen by click
    let hovered = null;      // number previewed by hover / focus
    let leaveTimer = null;

    const render = () => {
      const current = hovered !== null ? hovered : selected;     // hover wins over selection
      const key = current === null ? '0' : String(current);

      slides.forEach((s) => s.classList.toggle('is-show', s.getAttribute('data-fmex-slide') === key));
      nodes.forEach((n) => {
        const id = n.getAttribute('data-fmex-node');
        n.classList.toggle('is-active', String(current) === id);
        n.setAttribute('aria-pressed', String(selected !== null && String(selected) === id));
      });
      labels.forEach((l) => l.classList.toggle('is-on', String(current) === l.getAttribute('data-fmex-label')));
      lines.forEach((g) => g.classList.toggle('is-on', String(current) === g.getAttribute('data-fmex-line')));
      if (ghost) {
        ghost.textContent = current === null ? '' : `0${current}`;
        ghost.classList.toggle('is-on', current !== null);
      }
    };

    const preview = (n) => { clearTimeout(leaveTimer); hovered = n; render(); };
    const endPreview = () => {
      clearTimeout(leaveTimer);
      leaveTimer = setTimeout(() => { hovered = null; render(); }, 60);   // avoids flicker between circle and label
    };
    const toggleSelect = (n) => { selected = selected === n ? null : n; render(); };

    [...nodes, ...labels].forEach((el) => {
      const n = parseInt(el.getAttribute('data-fmex-node') || el.getAttribute('data-fmex-label'), 10);
      el.addEventListener('pointerenter', (e) => { if (e.pointerType === 'mouse') preview(n); });
      el.addEventListener('pointerleave', (e) => { if (e.pointerType === 'mouse') endPreview(); });
      el.addEventListener('click', () => toggleSelect(n));
    });

    nodes.forEach((btn) => {
      const n = parseInt(btn.getAttribute('data-fmex-node'), 10);
      btn.addEventListener('focus', () => preview(n));
      btn.addEventListener('blur', endPreview);
    });

    // Arrows: desktop cycles the diagram, mobile scrolls the cards
    const prevBtn = $('.fmex-arrow--prev', root);
    const nextBtn = $('.fmex-arrow--next', root);
    const cycle = (dir) => {
      if (window.innerWidth <= MOBILE_MAX) {
        if (stepsTrack) stepsTrack.scrollBy({ left: dir * 250, behavior: 'smooth' });
        return;
      }
      let cur = selected !== null ? selected : (hovered !== null ? hovered : 1);
      cur += dir;
      if (cur < 1) cur = nodes.length;
      if (cur > nodes.length) cur = 1;
      selected = cur;
      render();
    };
    if (prevBtn) prevBtn.addEventListener('click', () => cycle(-1));
    if (nextBtn) nextBtn.addEventListener('click', () => cycle(1));

    root.addEventListener('keydown', (e) => {
      if (e.key !== 'Escape') return;
      selected = null;
      hovered = null;
      render();
    });

    // Mobile: swapping the centre image while the cards scroll
    if (stepsTrack && 'IntersectionObserver' in window) {
      const coreImages = $$('.fmex-core__img', root);
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting || window.innerWidth > MOBILE_MAX) return;
          const node = $('.fmex-node', entry.target);
          if (!node) return;
          const id = node.getAttribute('data-fmex-node');
          coreImages.forEach((img) => img.classList.toggle('is-show', img.getAttribute('data-fmex-slide') === String(id)));
        });
      }, { root: stepsTrack, threshold: 0.5 });

      Array.from(stepsTrack.children).forEach((card) => observer.observe(card));
    }

    render();
  }

  /* ------------------------------------------------------------------------
     12. Values cards + pins (about page)
     ------------------------------------------------------------------------ */
  function initValues() {
    const root = $('[data-fmvl]');
    if (!root) return;

    const cards = $$('[data-fmvl-card]', root);
    const pins = $$('[data-fmvl-pin]', root);
    const track = $('.fmvl-cards', root);
    const small = window.matchMedia('(max-width: 1099px)');
    let current = -1;

    const centerCard = (card, smooth) => {
      if (!track || !card) return;
      const left = card.offsetLeft - (track.clientWidth - card.offsetWidth) / 2;
      track.scrollTo({ left, behavior: smooth ? 'smooth' : 'auto' });
    };

    const activate = (index, fromUser) => {
      if (index === current) return;
      current = index;
      cards.forEach((card, i) => {
        const on = i === index;
        card.classList.toggle('is-active', on);
        card.setAttribute('aria-current', on ? 'true' : 'false');
      });
      pins.forEach((pin, i) => pin.classList.toggle('is-active', i === index));
      if (fromUser && small.matches) centerCard(cards[index], true);
    };

    cards.forEach((card, i) => {
      card.addEventListener('pointerenter', (e) => { if (e.pointerType === 'mouse') activate(i, true); });
      card.addEventListener('focus', () => activate(i, false));
      card.addEventListener('click', () => activate(i, true));
    });
    pins.forEach((pin, i) => {
      pin.addEventListener('pointerenter', (e) => { if (e.pointerType === 'mouse') activate(i, true); });
      pin.addEventListener('click', () => activate(i, true));
    });

    // Mobile arrows
    const prev = $('.fmvl-arrow--prev', root);
    const next = $('.fmvl-arrow--next', root);
    if (track && prev) prev.addEventListener('click', () => track.scrollBy({ left: -250, behavior: 'smooth' }));
    if (track && next) next.addEventListener('click', () => track.scrollBy({ left: 250, behavior: 'smooth' }));

    const start = cards.findIndex((c) => c.classList.contains('is-active'));
    activate(start > -1 ? start : 2, false);
    if (small.matches) centerCard(cards[current], false);
  }

  /* ------------------------------------------------------------------------
     13. Projects slider (home page)
     ------------------------------------------------------------------------ */
  function initProjectsSlider() {
    const root = $('[data-fmpj]');
    if (!root) return;

    const track = $('[data-fmpj-track]', root);
    const cards = $$('[data-fmpj-card]', root);
    const dots = $$('[data-fmpj-dot]', root);
    const prev = $('[data-fmpj-prev]', root);
    const next = $('[data-fmpj-next]', root);
    if (!track || !cards.length || !prev || !next) return;

    const loop = createLoopingTrack(track, cards);
    const slides = loop.slides;
    const SETTLE_MS = 90;
    let current = loop.centerOffset;
    let scrollTimer = null;

    const setActive = (slideIndex) => {
      current = slideIndex;
      const logicalIndex = loop.logicalIndex(slideIndex);
      slides.forEach((card, idx) => {
        card.classList.toggle('is-active', idx === current);
        if (idx >= loop.centerOffset && idx < loop.centerOffset + cards.length) {
          card.setAttribute('aria-current', idx - loop.centerOffset === logicalIndex ? 'true' : 'false');
        }
      });
      dots.forEach((dot, idx) => dot.classList.toggle('is-active', idx === logicalIndex));
      prev.disabled = false;
      next.disabled = false;
    };

    const goToSlide = (slideIndex, smooth) => {
      const target = Math.max(0, Math.min(slides.length - 1, slideIndex));
      setActive(target);
      track.scrollTo({
        left: loop.targetLeft(target),
        behavior: smooth && !prefersReducedMotion() ? 'smooth' : 'auto'
      });
    };

    const goTo = (index, smooth) => goToSlide(loop.centerIndex(index), smooth);
    const goStep = (direction, smooth) => {
      if (current < loop.centerOffset || current >= loop.centerOffset + cards.length) {
        current = loop.normalize(current);
        setActive(current);
      }
      let target = current + direction;
      if (target < 0 || target >= slides.length) {
        target = loop.centerIndex(loop.logicalIndex(current + direction));
      }
      goToSlide(target, smooth);
    };

    prev.addEventListener('click', () => goStep(-1, true));
    next.addEventListener('click', () => goStep(1, true));
    dots.forEach((dot, i) => dot.addEventListener('click', () => goTo(i, true)));

    track.addEventListener('click', (event) => {
      if (event.target.closest('a')) return;
      const card = event.target.closest('[data-fmpj-card]');
      const slideIndex = slides.indexOf(card);
      if (slideIndex !== -1 && slideIndex !== current) goToSlide(slideIndex, true);
    });

    track.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowRight') { e.preventDefault(); goStep(1, true); }
      if (e.key === 'ArrowLeft') { e.preventDefault(); goStep(-1, true); }
    });

    track.addEventListener('scroll', () => {
      clearTimeout(scrollTimer);
      scrollTimer = setTimeout(() => {
        setActive(loop.normalize(loop.nearestIndex()));
      }, SETTLE_MS);
    }, { passive: true });

    window.addEventListener('resize', () => goTo(loop.logicalIndex(current), false));
    window.addEventListener('load', () => goTo(loop.logicalIndex(current), false));

    goTo(0, false);
  }

  /* ------------------------------------------------------------------------
     14. Testimonials slider (home page)
     ------------------------------------------------------------------------ */
  function initTestimonials() {
    const root = $('[data-fmts]');
    if (!root) return;

    const track = $('[data-fmts-track]', root);
    const prev = $('[data-fmts-prev]', root);
    const next = $('[data-fmts-next]', root);
    const nav = $('[data-fmts-nav]', root);
    if (!track || !prev || !next) return;

    const cards = $$('[data-fmts-card]', track);
    if (!cards.length) return;
    const loop = createLoopingTrack(track, cards);
    const slides = loop.slides;
    let current = loop.centerOffset;
    let scrollTimer = null;

    const update = () => {
      if (nav) nav.hidden = !loop.isLooping;
      prev.disabled = !loop.isLooping;
      next.disabled = !loop.isLooping;
    };

    const goToSlide = (slideIndex) => {
      current = Math.max(0, Math.min(slides.length - 1, slideIndex));
      track.scrollTo({
        left: loop.targetLeft(current),
        behavior: prefersReducedMotion() ? 'auto' : 'smooth'
      });
    };
    const go = (direction) => {
      if (!loop.isLooping) return;
      let target = current + direction;
      if (target < 0 || target >= slides.length) {
        target = loop.centerIndex(loop.logicalIndex(current + direction));
      }
      goToSlide(target);
    };

    prev.addEventListener('click', () => go(-1));
    next.addEventListener('click', () => go(1));

    track.addEventListener('scroll', () => {
      clearTimeout(scrollTimer);
      scrollTimer = setTimeout(() => {
        current = loop.normalize(loop.nearestIndex());
        update();
      }, 100);
    }, { passive: true });

    window.addEventListener('resize', update);
    window.addEventListener('load', update);
    track.scrollLeft = loop.targetLeft(current);

    update();
  }

  function initGrowingSystemsSlider() {
    const root = $('[data-growing-systems-slider]');
    if (!root) return;

    const track = $('[data-growing-systems-track]', root);
    const prev = $('[data-growing-systems-prev]', root);
    const next = $('[data-growing-systems-next]', root);
    const nav = $('[data-growing-systems-nav]', root);
    if (!track || !prev || !next) return;

    const cards = $$('.fmts-item', track);
    if (!cards.length) return;
    const loop = createLoopingTrack(track, cards);
    const slides = loop.slides;
    let current = loop.centerOffset;
    let scrollTimer = null;

    const update = () => {
      if (nav) nav.hidden = !loop.isLooping;
      prev.disabled = !loop.isLooping;
      next.disabled = !loop.isLooping;
    };

    const go = (direction) => {
      if (!loop.isLooping) return;
      let target = current + direction;
      if (target < 0 || target >= slides.length) {
        target = loop.centerIndex(loop.logicalIndex(current + direction));
      }
      current = target;
      track.scrollTo({
        left: loop.targetLeft(target),
        behavior: prefersReducedMotion() ? 'auto' : 'smooth'
      });
    };

    prev.addEventListener('click', () => go(-1));
    next.addEventListener('click', () => go(1));
    track.addEventListener('scroll', () => {
      clearTimeout(scrollTimer);
      scrollTimer = setTimeout(() => {
        current = loop.normalize(loop.nearestIndex());
        update();
      }, 100);
    }, { passive: true });
    window.addEventListener('resize', update);
    window.addEventListener('load', update);
    track.scrollLeft = loop.targetLeft(current);
    update();
  }

  function initGrowingCropCategorySlider() {
    const section = $('#what-can-you-grow.fmwg');
    if (!section) return;

    const radios = $$('.fmwg__radio', section);
    const track = $('[data-fmwg-tab-track]', section);
    const tabs = $$('.fmwg-tab', section);
    const controls = $('[data-fmwg-controls]', section);
    const previous = $('[data-fmwg-prev]', section);
    const next = $('[data-fmwg-next]', section);
    if (!radios.length || radios.length !== tabs.length || !track || !controls || !previous || !next) {
      console.error('The growing crop category slider is missing required tabs or controls.');
      return;
    }

    let activeIndex = Math.max(0, radios.findIndex((radio) => radio.checked));
    let scrollTimer = 0;
    const mobileQuery = window.matchMedia('(max-width: 767px)');

    const updateControls = () => {
      controls.hidden = !mobileQuery.matches;
      previous.disabled = activeIndex === 0;
      next.disabled = activeIndex === radios.length - 1;
    };

    const scrollToTab = (index) => {
      if (!mobileQuery.matches) return;
      const tabRect = tabs[index].getBoundingClientRect();
      const trackRect = track.getBoundingClientRect();
      track.scrollTo({
        left: track.scrollLeft + tabRect.left - trackRect.left,
        behavior: prefersReducedMotion() ? 'auto' : 'smooth'
      });
    };

    const activate = (index, shouldScroll = false) => {
      activeIndex = Math.max(0, Math.min(radios.length - 1, index));
      radios[activeIndex].checked = true;
      updateControls();
      if (shouldScroll) scrollToTab(activeIndex);
    };

    radios.forEach((radio, index) => {
      radio.addEventListener('change', () => {
        if (radio.checked) activate(index, true);
      });
    });

    previous.addEventListener('click', () => activate(activeIndex - 1, true));
    next.addEventListener('click', () => activate(activeIndex + 1, true));

    track.addEventListener('scroll', () => {
      if (!mobileQuery.matches) return;
      window.clearTimeout(scrollTimer);
      scrollTimer = window.setTimeout(() => {
        const trackLeft = track.getBoundingClientRect().left;
        const closestIndex = tabs.reduce((closest, tab, index) => {
          const currentDistance = Math.abs(tab.getBoundingClientRect().left - trackLeft);
          const closestDistance = Math.abs(tabs[closest].getBoundingClientRect().left - trackLeft);
          return currentDistance < closestDistance ? index : closest;
        }, 0);
        activate(closestIndex);
      }, 80);
    }, { passive: true });

    mobileQuery.addEventListener('change', updateControls);
    updateControls();
  }

  /* ------------------------------------------------------------------------
     15. Farm plan form wizard (planfarm page)
     ------------------------------------------------------------------------ */
  function initFarmPlanForm() {
    const root = $('[data-fmfp]');
    if (!root) return;

    const form = $('[data-fmfp-form]', root);
    const steps = $$('[data-fmfp-step]', root);
    const panels = $$('[data-fmfp-panel]', root);
    const next = $('[data-fmfp-next]', root);
    const nextText = $('[data-fmfp-btn-label]', root);
    const back = $('[data-fmfp-back]', root);
    const sample = $('[data-fmfp-sample]', root);
    const bar = $('[data-fmfp-bar]', root);
    const errorBox = $('[data-fmfp-error]', root);
    const preview = $('[data-fmfp-preview]', root);
    if (!form || !panels.length || !next) return;

    const SAMPLE_RESULT = {
      crop: 'Capsicum',
      model: 'Polyhouse',
      invest: '₹25 - 40 Lakhs',
      roi: '2.5 - 3.5 Years',
      scale: '2 Acres',
    };
    let current = 0;
    let reached = 0;

    const setOutput = (key, value) => {
      const el = $(`[data-fmfp-out="${key}"]`, root);
      if (el) el.textContent = value;
    };

    const isPanelValid = (index) => {
      let ok = true;
      let firstInvalid = null;
      $$('input, select, textarea', panels[index]).forEach((control) => {
        const wrap = control.closest('.fmfp-field');
        const good = control.checkValidity();
        if (wrap) wrap.classList.toggle('is-invalid', !good);
        if (!good) {
          ok = false;
          if (!firstInvalid) firstInvalid = control;
        }
      });
      if (errorBox) errorBox.hidden = ok;
      if (firstInvalid) firstInvalid.focus();
      return ok;
    };

    const goTo = (index) => {
      current = index;
      reached = Math.max(reached, index);

      panels.forEach((panel, i) => {
        panel.hidden = i !== index;
        const grid = $('.fmfp-grid', panel);
        const success = $('[data-fmfp-success]', panel);
        if (grid) grid.style.display = '';
        if (success) success.style.display = 'none';
      });

      steps.forEach((step, i) => {
        step.classList.toggle('is-active', i === index);
        step.classList.toggle('is-done', i < index);
        if (i === index) step.setAttribute('aria-current', 'step');
        else step.removeAttribute('aria-current');
      });

      if (bar) bar.style.width = `${((index + 1) / panels.length) * 100}%`;
      if (nextText) nextText.textContent = panels[index].getAttribute('data-fmfp-next-label') || 'Next';
      if (back) back.hidden = index === 0;
      if (sample) sample.hidden = index !== 0;
      if (errorBox) errorBox.hidden = true;
    };

    const handleComplete = () => {
      steps.forEach((step) => {
        step.classList.add('is-done');
      });
      if (steps[panels.length - 1]) steps[panels.length - 1].classList.add('is-active');
      if (bar) bar.style.width = '100%';

      if (preview) {
        preview.classList.remove('is-flash');
        void preview.offsetWidth;
        preview.classList.add('is-flash');
      }

      const panel4 = panels[panels.length - 1];
      const grid = $('.fmfp-grid', panel4);
      let successMsg = $('[data-fmfp-success]', panel4);

      if (!successMsg) {
        successMsg = document.createElement('div');
        successMsg.setAttribute('data-fmfp-success', '');
        successMsg.className = 'fmfp-success-state';
        successMsg.innerHTML = `
          <div class="fmfp-success-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="28" height="28">
              <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
          </div>
          <h4 class="fm-heading" style="margin: 12px 0 6px; font-size: clamp(18px, 1.8vw, 26px); color: var(--fmfp-navy);">Farm Plan Ready!</h4>
          <p class="fm-text" style="margin: 0 0 16px; font-size: clamp(12px, 1.1vw, 15px); color: var(--fm-color-text);">Your personalized farm plan has been generated based on your inputs. A complete technical and ROI summary is displayed on the right.</p>
        `;
        panel4.appendChild(successMsg);
      }

      if (grid) grid.style.display = 'none';
      successMsg.style.display = 'flex';

      if (nextText) nextText.textContent = 'Edit Farm Plan';
      if (back) back.hidden = true;
      if (errorBox) errorBox.hidden = true;
    };

    next.addEventListener('click', (e) => {
      e.preventDefault();
      const panel4 = panels[panels.length - 1];
      const successMsg = $('[data-fmfp-success]', panel4);
      if (current === panels.length - 1 && successMsg && successMsg.style.display === 'flex') {
        goTo(0);
        return;
      }

      if (!isPanelValid(current)) return;
      if (current < panels.length - 1) {
        goTo(current + 1);
      } else {
        handleComplete();
      }
    });

    if (back) back.addEventListener('click', (e) => {
      e.preventDefault();
      if (current > 0) goTo(current - 1);
    });

    steps.forEach((step, i) => {
      step.addEventListener('click', (e) => {
        e.preventDefault();
        goTo(i);
      });
    });

    form.addEventListener('submit', (e) => {
      e.preventDefault();
      if (isPanelValid(current)) {
        if (current < panels.length - 1) goTo(current + 1);
        else handleComplete();
      }
    });

    form.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' && e.target && e.target.tagName === 'INPUT') {
        e.preventDefault();
        next.click();
      }
    });

    // Live update of the preview card while the user types
    const syncPreview = () => {
      const f = form.elements;
      if (f.area && f.area.value) setOutput('scale', `${f.area.value} ${f.unit ? f.unit.value : ''}`.trim());
      if (f.crop && f.crop.value) {
        setOutput('crop', f.crop.value);
        const roiMap = {
          'Capsicum': '2.5 - 3.5 Years',
          'Tomato': '2.0 - 3.0 Years',
          'Lettuce': '1.5 - 2.5 Years',
          'Cucumber': '2.0 - 2.8 Years'
        };
        if (roiMap[f.crop.value]) setOutput('roi', roiMap[f.crop.value]);
      }
      if (f.method && f.method.value) setOutput('model', f.method.value);
      if (f.budget && f.budget.value) {
        const invMap = {
          '< 10 Lakhs': '₹8 - 10 Lakhs',
          '10 - 25 Lakhs': '₹15 - 25 Lakhs',
          '25 - 50 Lakhs': '₹25 - 40 Lakhs',
          '> 50 Lakhs': '₹50+ Lakhs'
        };
        setOutput('invest', invMap[f.budget.value] || f.budget.value);
      }
    };
    form.addEventListener('input', (e) => {
      const wrap = e.target.closest('.fmfp-field');
      if (wrap && e.target.checkValidity()) wrap.classList.remove('is-invalid');
      syncPreview();
    });
    form.addEventListener('change', (e) => {
      const wrap = e.target.closest('.fmfp-field');
      if (wrap && e.target.checkValidity()) wrap.classList.remove('is-invalid');
      syncPreview();
    });

    if (sample) {
      sample.addEventListener('click', () => {
        Object.keys(SAMPLE_RESULT).forEach((key) => setOutput(key, SAMPLE_RESULT[key]));
        if (!preview) return;
        preview.classList.remove('is-flash');
        void preview.offsetWidth;                           // restart the CSS animation
        preview.classList.add('is-flash');
        preview.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
      });
    }

    goTo(0);
  }

  /* ------------------------------------------------------------------------
     16. Blog Listing Section (fmbl)
     ------------------------------------------------------------------------ */
  function initBlogListing() {
    const blogSection = $('#blog');
    if (!blogSection) return;

    const pills = $$('.fmbl-pill', blogSection);
    pills.forEach((pill) => {
      pill.addEventListener('click', (e) => {
        const href = pill.getAttribute('href');
        if (href && (href.startsWith('#') || href === '/blog' || href === '')) {
          pills.forEach((p) => {
            p.classList.remove('is-active');
            p.removeAttribute('aria-current');
          });
          pill.classList.add('is-active');
          pill.setAttribute('aria-current', 'page');
        }
      });
    });
  }

  /* ------------------------------------------------------------------------
     16b. Automation Solutions Tabs (fmau)
     ------------------------------------------------------------------------ */
  function initAutomationSolutionsTabs() {
    var root = document.querySelector('[data-fmau]');
    if (!root) return;

    var list = root.querySelector('[data-fmau-tablist]');
    var tabs = Array.prototype.slice.call(root.querySelectorAll('[data-fmau-tab]'));
    var panels = Array.prototype.slice.call(root.querySelectorAll('[data-fmau-panel]'));
    if (!tabs.length || tabs.length !== panels.length) return;

    root.classList.add('is-ready');

    function select(i, moveFocus, scrollTab) {
      i = (i + tabs.length) % tabs.length;
      tabs.forEach(function (t, idx) {
        var on = idx === i;
        t.classList.toggle('is-active', on);
        t.setAttribute('aria-selected', on ? 'true' : 'false');
        t.tabIndex = on ? 0 : -1;
      });
      panels.forEach(function (p, idx) {
        var on = idx === i;
        p.classList.toggle('is-active', on);
        p.setAttribute('aria-hidden', on ? 'false' : 'true');
      });
      if (moveFocus) tabs[i].focus();
      if (scrollTab && list && list.scrollWidth > list.clientWidth + 1) {
        tabs[i].scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
      }
    }

    tabs.forEach(function (tab, i) {
      tab.addEventListener('click', function () { select(i, false, true); });
      tab.addEventListener('keydown', function (e) {
        var k = e.key;
        if (k === 'ArrowRight' || k === 'ArrowDown') { e.preventDefault(); select(i + 1, true, true); }
        else if (k === 'ArrowLeft' || k === 'ArrowUp') { e.preventDefault(); select(i - 1, true, true); }
        else if (k === 'Home') { e.preventDefault(); select(0, true, true); }
        else if (k === 'End') { e.preventDefault(); select(tabs.length - 1, true, true); }
      });
    });

    var start = tabs.findIndex(function (t) { return t.classList.contains('is-active'); });
    select(start > -1 ? start : 0, false, false);
  }

  /* ------------------------------------------------------------------------
     16b. Projects Showcase Filter Tabs (our-project.html)
     ------------------------------------------------------------------------ */
  function initProjectShowcaseTabs() {
    const section = $('#projects-showcase');
    if (!section) return;

    const buttons = $$('.fmpt-btn', section);
    const cards = $$('.fmpt-card', section);
    if (!buttons.length || !cards.length) return;

    buttons.forEach((btn) => {
      btn.addEventListener('click', () => {
        const filter = btn.getAttribute('data-filter') || 'all';

        // Update active button state
        buttons.forEach((b) => {
          const isActive = b === btn;
          b.classList.toggle('is-active', isActive);
          b.setAttribute('aria-selected', isActive ? 'true' : 'false');
        });

        // Filter cards
        cards.forEach((card) => {
          const cats = (card.getAttribute('data-category') || '').split(/\s+/);
          const match = filter === 'all' || cats.includes(filter);

          if (match) {
            card.classList.remove('is-hidden');
            card.style.opacity = '0';
            card.style.transform = 'translateY(8px)';
            requestAnimationFrame(() => {
              card.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
              card.style.opacity = '1';
              card.style.transform = 'translateY(0)';
            });
          } else {
            card.classList.add('is-hidden');
          }
        });
      });

      btn.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          btn.click();
        }
      });
    });
  }

  /* ------------------------------------------------------------------------
     16c. Commercial Considerations Slider (farming-model.html)
     ------------------------------------------------------------------------ */
  function initCommercialSlider() {
    var root = document.querySelector('.fmcc');
    if (!root || root.classList.contains('fmcc--js')) return;
    var track = root.querySelector('.fmcc-track');
    var prev = root.querySelector('.fmcc-nav--prev');
    var next = root.querySelector('.fmcc-nav--next');
    if (!track || !prev || !next) return;
    var items = Array.prototype.slice.call(track.querySelectorAll('.fmcc-crop'));
    if (!items.length) return;
    var loop = createLoopingTrack(track, items);
    var slides = loop.slides;
    var current = loop.centerOffset;
    var scrollTimer = null;
    root.classList.add('fmcc--js');
    function update() {
      prev.disabled = !loop.isLooping;
      next.disabled = !loop.isLooping;
    }
    function go(dir) {
      if (!loop.isLooping) return;
      var target = current + dir;
      if (target < 0 || target >= slides.length) {
        target = loop.centerIndex(loop.logicalIndex(current + dir));
      }
      current = target;
      track.scrollTo({
        left: loop.targetLeft(target),
        behavior: prefersReducedMotion() ? 'auto' : 'smooth'
      });
    }
    prev.addEventListener('click', function () { go(-1); });
    next.addEventListener('click', function () { go(1); });
    track.addEventListener('scroll', function () {
      clearTimeout(scrollTimer);
      scrollTimer = setTimeout(function () {
        current = loop.normalize(loop.nearestIndex());
        update();
      }, 100);
    }, { passive: true });
    window.addEventListener('resize', update);
    track.scrollLeft = loop.targetLeft(current);
    update();
  }

  /* ------------------------------------------------------------------------
     17. Crop Overview & Varieties Carousel (FMCV)
     ------------------------------------------------------------------------ */
  function initCropVarietiesCarousel() {
    var root = document.querySelector('[data-fmcv]');
    if (!root) return;

    var track = root.querySelector('[data-fmcv-track]');
    var items = Array.prototype.slice.call(root.querySelectorAll('[data-fmcv-item]'));
    var prev = root.querySelector('[data-fmcv-prev]');
    var next = root.querySelector('[data-fmcv-next]');
    var wrap = root.querySelector('[data-fmcv-dots]');
    var status = root.querySelector('[data-fmcv-status]');
    if (!track || !items.length || !prev || !next || !wrap) return;


    var dots = [], slides = [], current = 0, settleTimer = null, resizeTimer = null;
    var count = items.length;

    function addClones() {
      var before = document.createDocumentFragment();
      var after = document.createDocumentFragment();

      items.forEach(function (item) {
        var clone = item.cloneNode(true);
        clone.classList.remove('is-active');
        clone.setAttribute('aria-hidden', 'true');
        var button = clone.querySelector('.fmcv-item__btn');
        if (button) {
          button.tabIndex = -1;
          button.removeAttribute('aria-current');
        }
        before.appendChild(clone);
      });

      items.forEach(function (item) {
        var clone = item.cloneNode(true);
        clone.classList.remove('is-active');
        clone.setAttribute('aria-hidden', 'true');
        var button = clone.querySelector('.fmcv-item__btn');
        if (button) {
          button.tabIndex = -1;
          button.removeAttribute('aria-current');
        }
        after.appendChild(clone);
      });

      track.insertBefore(before, track.firstChild);
      track.appendChild(after);
      slides = Array.prototype.slice.call(track.children);
    }

    function centerLeft(i) {
      var it = slides[i];
      var max = track.scrollWidth - track.clientWidth;
      var left = it.offsetLeft + it.offsetWidth / 2 - track.clientWidth / 2;
      return Math.max(0, Math.min(left, max));
    }

    function mark(i) {
      current = i;
      slides.forEach(function (it, idx) {
        it.classList.toggle('is-active', idx === i);
        it.classList.toggle('is-before', idx < i);
        it.classList.toggle('is-after', idx > i);
        var b = it.querySelector('.fmcv-item__btn');
        if (b) {
          var isOriginal = idx >= count && idx < count * 2;
          b.tabIndex = isOriginal && idx === i ? 0 : -1;
          if (isOriginal && idx === i) b.setAttribute('aria-current', 'true');
          else b.removeAttribute('aria-current');
        }
      });
      var logicalIndex = i % count;
      dots.forEach(function (d, idx) {
        d.classList.toggle('is-active', idx === logicalIndex);
        d.setAttribute('aria-current', idx === logicalIndex ? 'true' : 'false');
      });
      prev.disabled = false;
      next.disabled = false;
      if (status) status.textContent = 'Showing ' + (items[logicalIndex].getAttribute('data-fmcv-name') || '');
    }

    function go(i, focus) {
      i = ((i % slides.length) + slides.length) % slides.length;
      mark(i);
      track.scrollTo({ left: centerLeft(i), behavior: 'auto' });
      if (focus) {
        var original = items[i % count];
        var b = original.querySelector('.fmcv-item__btn');
        if (b) b.focus({ preventScroll: true });
      }
    }

    function nearest() {
      var cx = track.scrollLeft + track.clientWidth / 2, best = 0, bestDist = Infinity;
      slides.forEach(function (it, idx) {
        var d = Math.abs(it.offsetLeft + it.offsetWidth / 2 - cx);
        if (d < bestDist) { bestDist = d; best = idx; }
      });
      return best;
    }

    function goStep(direction, focus) {
      var base = current;
      if (base < count || base >= count * 2) base = count + (base % count);
      go(base + direction, focus);
    }

    // build one dot per crop
    wrap.innerHTML = '';
    items.forEach(function (it, idx) {
      var b = document.createElement('button');
      b.type = 'button';
      b.className = 'fmcv-dot';
      b.setAttribute('aria-label', 'Show ' + (it.getAttribute('data-fmcv-name') || ('crop ' + (idx + 1))));
      b.addEventListener('click', function () { go(count + idx, false); });
      wrap.appendChild(b);
      dots.push(b);

      var btn = it.querySelector('.fmcv-item__btn');
      if (btn) btn.addEventListener('click', function () { go(count + idx, false); });
    });

    addClones();
    prev.addEventListener('click', function () { goStep(-1, false); });
    next.addEventListener('click', function () { goStep(1, false); });

    track.addEventListener('keydown', function (e) {
      if (e.key === 'ArrowRight') { e.preventDefault(); goStep(1, true); }
      else if (e.key === 'ArrowLeft') { e.preventDefault(); goStep(-1, true); }
      else if (e.key === 'Home') { e.preventDefault(); go(count, true); }
      else if (e.key === 'End') { e.preventDefault(); go(count * 2 - 1, true); }
    });

    track.addEventListener('scroll', function () {
      clearTimeout(settleTimer);
      settleTimer = setTimeout(function () {
        var n = nearest();
        if (n < count || n >= count * 2) {
          n = count + (n % count);
          track.scrollTo({ left: centerLeft(n), behavior: 'auto' });
        }
        if (n !== current) mark(n);
      }, 100);
    }, { passive: true });

    window.addEventListener('resize', function () {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function () { go(current, false); }, 120);
    });
    window.addEventListener('load', function () { go(current, false); });

    var start = items.findIndex(function (it) { return it.classList.contains('is-active'); });
    root.classList.add('is-ready');
    go(count + (start > -1 ? start : 0), false);
  }

  /* ------------------------------------------------------------------------
     17b. Popular Downloads Filter (resources.html)
     ------------------------------------------------------------------------ */
  function initPopularDownloads() {
    var root = document.querySelector('[data-fmrd]');
    if (!root) return;

    var filterCategory = root.querySelector('[data-fmrd-filter="category"]');
    var filterCrop = root.querySelector('[data-fmrd-filter="crop"]');
    var filterFormat = root.querySelector('[data-fmrd-filter="format"]');
    var cards = Array.prototype.slice.call(root.querySelectorAll('[data-fmrd-card]'));
    var emptyMsg = root.querySelector('[data-fmrd-empty]');
    var resetBtn = root.querySelector('[data-fmrd-reset]');

    if (!cards.length) return;

    function applyFilters() {
      var catVal = filterCategory ? filterCategory.value : 'all';
      var cropVal = filterCrop ? filterCrop.value : 'all';
      var formatVal = filterFormat ? filterFormat.value : 'all';

      var visibleCount = 0;

      cards.forEach(function (card) {
        var cardCat = card.getAttribute('data-category') || '';
        var cardCrop = card.getAttribute('data-crop') || '';
        var cardFormat = card.getAttribute('data-format') || '';

        var matchCat = (catVal === 'all' || cardCat === catVal);
        var matchCrop = (cropVal === 'all' || cardCrop === cropVal);
        var matchFormat = (formatVal === 'all' || cardFormat === formatVal);

        var match = matchCat && matchCrop && matchFormat;

        if (match) {
          card.style.display = '';
          visibleCount++;
        } else {
          card.style.display = 'none';
        }
      });

      if (emptyMsg) {
        emptyMsg.hidden = (visibleCount > 0);
      }
    }

    if (filterCategory) filterCategory.addEventListener('change', applyFilters);
    if (filterCrop) filterCrop.addEventListener('change', applyFilters);
    if (filterFormat) filterFormat.addEventListener('change', applyFilters);

    if (resetBtn) {
      resetBtn.addEventListener('click', function () {
        if (filterCategory) filterCategory.value = 'all';
        if (filterCrop) filterCrop.value = 'all';
        if (filterFormat) filterFormat.value = 'all';
        applyFilters();
      });
    }

    applyFilters();
  }

  /* ------------------------------------------------------------------------
     17c. Project Detail Image Gallery (blog-details.html)
     ------------------------------------------------------------------------ */
  function initProjectDetailGallery() {
    var gallery = document.querySelector('[data-fmpd-gallery]');
    if (!gallery) return;

    var mainImg = gallery.querySelector('[data-fmpd-main-img]');
    var thumbs = Array.prototype.slice.call(gallery.querySelectorAll('[data-fmpd-thumb]'));
    if (!mainImg || !thumbs.length) return;

    thumbs.forEach(function (thumb) {
      thumb.addEventListener('click', function () {
        var src = thumb.getAttribute('data-fmpd-thumb');
        if (!src || thumb.classList.contains('is-active')) return;

        thumbs.forEach(function (t) { t.classList.remove('is-active'); });
        thumb.classList.add('is-active');

        mainImg.style.opacity = '0.3';
        setTimeout(function () {
          mainImg.src = src;
          var thumbImg = thumb.querySelector('img');
          if (thumbImg && thumbImg.alt) {
            mainImg.alt = thumbImg.alt;
          }
          mainImg.style.opacity = '1';
        }, 120);
      });
    });
  }

  /* ------------------------------------------------------------------------
     18. Project Returns Calculator (Fruits & Veg section 05)
     ------------------------------------------------------------------------ */
  function initProjectReturnsCalc() {
    var section = document.querySelector('[data-fmpr]');
    if (!section) return;

    var cropSelect = section.querySelector('[data-fmpr-crop]');
    var cropIcon = section.querySelector('[data-fmpr-crop-icon]');
    var pills = section.querySelectorAll('[data-fmpr-size]');
    var valInvestment = section.querySelector('[data-fmpr-val="investment"]');
    var valProduction = section.querySelector('[data-fmpr-val="production"]');
    var valRevenue = section.querySelector('[data-fmpr-val="revenue"]');
    var valRoi = section.querySelector('[data-fmpr-val="roi"]');
    var valPayback = section.querySelector('[data-fmpr-val="payback"]');

    var data = {
      tomato: {
        '0.25': { investment: '₹ 0.9 Cr', production: '140 MT', revenue: '₹ 1.8 Cr', roi: '38%', payback: '18–24 Months' },
        '0.5': { investment: '₹ 1.8 Cr', production: '280 MT', revenue: '₹ 3.6 Cr', roi: '38%', payback: '18–24 Months' },
        '1': { investment: '₹ 3.5 Cr', production: '560 MT', revenue: '₹ 7.2 Cr', roi: '40%', payback: '16–22 Months' },
        '2': { investment: '₹ 6.8 Cr', production: '1,120 MT', revenue: '₹ 14.2 Cr', roi: '42%', payback: '15–20 Months' },
        '5': { investment: '₹ 16.5 Cr', production: '2,800 MT', revenue: '₹ 35.0 Cr', roi: '44%', payback: '14–18 Months' }
      },
      capsicum: {
        '0.25': { investment: '₹ 1.1 Cr', production: '110 MT', revenue: '₹ 2.2 Cr', roi: '36%', payback: '20–26 Months' },
        '0.5': { investment: '₹ 2.1 Cr', production: '220 MT', revenue: '₹ 4.4 Cr', roi: '37%', payback: '19–24 Months' },
        '1': { investment: '₹ 4.0 Cr', production: '450 MT', revenue: '₹ 8.8 Cr', roi: '39%', payback: '18–22 Months' },
        '2': { investment: '₹ 7.8 Cr', production: '900 MT', revenue: '₹ 17.5 Cr', roi: '41%', payback: '16–20 Months' },
        '5': { investment: '₹ 19.0 Cr', production: '2,250 MT', revenue: '₹ 43.5 Cr', roi: '43%', payback: '15–19 Months' }
      },
      cucumber: {
        '0.25': { investment: '₹ 0.8 Cr', production: '160 MT', revenue: '₹ 1.6 Cr', roi: '35%', payback: '19–25 Months' },
        '0.5': { investment: '₹ 1.6 Cr', production: '320 MT', revenue: '₹ 3.2 Cr', roi: '36%', payback: '18–23 Months' },
        '1': { investment: '₹ 3.1 Cr', production: '650 MT', revenue: '₹ 6.5 Cr', roi: '38%', payback: '17–21 Months' },
        '2': { investment: '₹ 6.0 Cr', production: '1,300 MT', revenue: '₹ 13.0 Cr', roi: '40%', payback: '15–19 Months' },
        '5': { investment: '₹ 14.5 Cr', production: '3,300 MT', revenue: '₹ 32.0 Cr', roi: '42%', payback: '14–18 Months' }
      },
      lettuce: {
        '0.25': { investment: '₹ 1.2 Cr', production: '90 MT', revenue: '₹ 2.5 Cr', roi: '40%', payback: '16–22 Months' },
        '0.5': { investment: '₹ 2.3 Cr', production: '180 MT', revenue: '₹ 5.0 Cr', roi: '42%', payback: '15–20 Months' },
        '1': { investment: '₹ 4.4 Cr', production: '360 MT', revenue: '₹ 10.0 Cr', roi: '44%', payback: '14–18 Months' },
        '2': { investment: '₹ 8.5 Cr', production: '730 MT', revenue: '₹ 20.0 Cr', roi: '45%', payback: '13–17 Months' },
        '5': { investment: '₹ 20.5 Cr', production: '1,850 MT', revenue: '₹ 50.0 Cr', roi: '46%', payback: '12–16 Months' }
      }
    };

    var currentSize = '0.5';

    function update() {
      var crop = cropSelect ? cropSelect.value : 'tomato';
      var cropOpt = cropSelect ? cropSelect.options[cropSelect.selectedIndex] : null;
      if (cropIcon && cropOpt) {
        cropIcon.textContent = cropOpt.getAttribute('data-icon') || '🍅';
      }

      var cropData = data[crop] || data.tomato;
      var values = cropData[currentSize] || cropData['0.5'];

      if (valInvestment) valInvestment.textContent = values.investment;
      if (valProduction) valProduction.textContent = values.production;
      if (valRevenue) valRevenue.textContent = values.revenue;
      if (valRoi) valRoi.textContent = values.roi;
      if (valPayback) valPayback.textContent = values.payback;
    }

    if (cropSelect) {
      cropSelect.addEventListener('change', update);
    }

    pills.forEach(function (pill) {
      pill.addEventListener('click', function () {
        pills.forEach(function (p) {
          p.classList.remove('is-active');
          p.setAttribute('aria-checked', 'false');
        });
        pill.classList.add('is-active');
        pill.setAttribute('aria-checked', 'true');
        currentSize = pill.getAttribute('data-fmpr-size') || '0.5';
        update();
      });
    });

    update();
  }

  /* ------------------------------------------------------------------------
     19. Blog Detail Page (fmbd) Interactivity
     ------------------------------------------------------------------------ */
  function initBlogDetail() {
    var copyBtn = document.querySelector('[data-fmbd-copy]');
    var toast = document.querySelector('[data-fmbd-toast]');
    if (copyBtn) {
      copyBtn.addEventListener('click', function (e) {
        e.preventDefault();
        var url = window.location.href;
        if (navigator.clipboard && navigator.clipboard.writeText) {
          navigator.clipboard.writeText(url).then(showToast).catch(fallback);
        } else {
          fallback();
        }

        function fallback() {
          var input = document.createElement('input');
          input.value = url;
          document.body.appendChild(input);
          input.select();
          try { document.execCommand('copy'); showToast(); } catch (err) { }
          document.body.removeChild(input);
        }

        function showToast() {
          if (!toast) return;
          toast.classList.add('is-shown');
          setTimeout(function () {
            toast.classList.remove('is-shown');
          }, 2400);
        }
      });
    }

    // Table of contents active spy
    var tocLinks = document.querySelectorAll('.fmbd-toc__link');
    if (tocLinks.length) {
      var headingIds = Array.prototype.map.call(tocLinks, function (link) {
        return link.getAttribute('href').replace('#', '');
      });
      var headings = headingIds.map(function (id) {
        return document.getElementById(id);
      }).filter(Boolean);

      function updateActiveToc() {
        var scrollPos = window.scrollY + 140;
        var currentId = '';
        for (var i = 0; i < headings.length; i++) {
          if (headings[i].offsetTop <= scrollPos) {
            currentId = headings[i].id;
          }
        }
        tocLinks.forEach(function (link) {
          if (link.getAttribute('href') === '#' + currentId) {
            link.classList.add('is-active');
          } else {
            link.classList.remove('is-active');
          }
        });
      }

      window.addEventListener('scroll', updateActiveToc, { passive: true });
      updateActiveToc();
    }
  }

  /* ------------------------------------------------------------------------
     21. Complete Curriculum Section (Tabs & Slide Accordion)
     ------------------------------------------------------------------------ */
  function initCurriculumTabs() {
    const section = $('.fmcu');
    if (!section) return;

    const tabs = $$('.fmcu-tab', section);
    const panels = $$('.fmcu-panel', section);
    const mods = $$('.fmcu-mod', section);

    if (!tabs.length || !panels.length) return;

    // 1. Click on tab -> smooth scroll to matching phase panel
    tabs.forEach((tab, index) => {
      tab.addEventListener('click', (e) => {
        e.preventDefault();
        const targetId = tab.getAttribute('href');
        const targetPanel = targetId ? $(targetId, section) : panels[index];
        if (!targetPanel) return;

        // Immediately update active tab visually
        tabs.forEach((t) => t.classList.remove('is-active'));
        tab.classList.add('is-active');

        // Smooth scroll to panel
        targetPanel.scrollIntoView({ behavior: 'smooth', block: 'start' });

        // Update URL hash without jumping
        if (window.history && window.history.pushState && targetId) {
          window.history.pushState(null, '', targetId);
        }
      });
    });

    // 2. Scrollspy: activate the corresponding tab as user scrolls through panels
    let isTicking = false;
    function updateScrollspy() {
      const scrollPos = window.scrollY + 140; // offset for sticky navbar + header
      let activeIndex = 0;

      panels.forEach((panel, i) => {
        const top = panel.getBoundingClientRect().top + window.scrollY;
        if (scrollPos >= top - 80) {
          activeIndex = i;
        }
      });

      tabs.forEach((t, i) => {
        if (i === activeIndex) {
          t.classList.add('is-active');
        } else {
          t.classList.remove('is-active');
        }
      });
      isTicking = false;
    }

    window.addEventListener('scroll', () => {
      if (!isTicking) {
        requestAnimationFrame(updateScrollspy);
        isTicking = true;
      }
    }, { passive: true });

    // Initial check on load
    updateScrollspy();

    // 2. Smooth Vertical Slide Accordion for Modules
    mods.forEach((mod) => {
      const summary = $('.fmcu-mod__sum', mod);
      const lessons = $('.fmcu-lessons', mod);
      if (!summary || !lessons) return;

      summary.addEventListener('click', (e) => {
        e.preventDefault();
        const isOpen = mod.hasAttribute('open');
        const currentPanel = mod.closest('.fmcu-panel');

        if (isOpen) {
          // Slide up (close)
          slideUp(lessons, () => {
            mod.removeAttribute('open');
          });
        } else {
          // Close sibling open modules in the same phase panel (exclusive accordion)
          if (currentPanel) {
            const openSiblings = $$('.fmcu-mod[open]', currentPanel);
            openSiblings.forEach((sibling) => {
              const sibLessons = $('.fmcu-lessons', sibling);
              if (sibLessons) {
                slideUp(sibLessons, () => {
                  sibling.removeAttribute('open');
                });
              } else {
                sibling.removeAttribute('open');
              }
            });
          }

          // Slide down (open)
          mod.setAttribute('open', '');
          slideDown(lessons);
        }
      });
    });

    function slideDown(element, callback) {
      if (prefersReducedMotion()) {
        element.style.display = 'block';
        if (callback) callback();
        return;
      }
      element.style.overflow = 'hidden';
      element.style.maxHeight = '0px';
      element.style.opacity = '0';
      element.style.display = 'block';
      const targetHeight = element.scrollHeight;

      requestAnimationFrame(() => {
        element.style.transition = 'max-height 0.35s cubic-bezier(0.2, 0.8, 0.2, 1), opacity 0.35s cubic-bezier(0.2, 0.8, 0.2, 1)';
        element.style.maxHeight = targetHeight + 'px';
        element.style.opacity = '1';
      });

      const onEnd = (evt) => {
        if (evt.target !== element) return;
        element.removeEventListener('transitionend', onEnd);
        element.style.maxHeight = '';
        element.style.opacity = '';
        element.style.overflow = '';
        element.style.transition = '';
        if (callback) callback();
      };
      element.addEventListener('transitionend', onEnd);
    }

    function slideUp(element, callback) {
      if (prefersReducedMotion()) {
        element.style.display = 'none';
        if (callback) callback();
        return;
      }
      element.style.overflow = 'hidden';
      element.style.maxHeight = element.scrollHeight + 'px';
      element.style.opacity = '1';

      requestAnimationFrame(() => {
        element.style.transition = 'max-height 0.3s cubic-bezier(0.2, 0.8, 0.2, 1), opacity 0.3s cubic-bezier(0.2, 0.8, 0.2, 1)';
        element.style.maxHeight = '0px';
        element.style.opacity = '0';
      });

      const onEnd = (evt) => {
        if (evt.target !== element) return;
        element.removeEventListener('transitionend', onEnd);
        element.style.maxHeight = '';
        element.style.opacity = '';
        element.style.overflow = '';
        element.style.transition = '';
        if (callback) callback();
      };
      element.addEventListener('transitionend', onEnd);
    }
  }

  /* ------------------------------------------------------------------------
     20. Init
     ------------------------------------------------------------------------ */
  function init() {
    if (hasGsap()) gsap.registerPlugin(ScrollTrigger);   // register once, here only

    // Every page
    initNav();
    initFadeUp();
    initFaq();
    initProtectedStructureTabs();
    initStructureComparisonSlider();
    initCropCardsSlider();
    initSensorProductSliders();
    initBlogListing();
    initAutomationSolutionsTabs();
    initProjectShowcaseTabs();
    initCommercialSlider();
    initCropVarietiesCarousel();
    initPopularDownloads();
    initProjectDetailGallery();
    initProjectReturnsCalc();
    initBlogDetail();

    // Home page
    initHeroSlider();
    initServicesTabs();
    initModels();
    initAcademySteps();
    initJourneyAnimation();
    initProjectsSlider();
    initTestimonials();
    initGrowingSystemsSlider();
    initGrowingCropCategorySlider();

    // About page
    initStackedPanels();
    initExpertise();
    initValues();

    // Plan Your Farm page
    initFarmPlanForm();

    // Training Curriculum page
    initCurriculumTabs();

    // Legal / Policy TOC tracking
    initLegalToc();

    // Workshop Agenda Accordion
    initWorkshopAgenda();

    // Model Comparison Farm Size Selector
    initModelComparison();
  }

  /* ------------------------------------------------------------------------
     23. Workshop Agenda Accordion (.fmwa)
     ------------------------------------------------------------------------ */
  function initWorkshopAgenda() {
    const rows = $$('.fmwa-row');
    if (!rows.length) return;

    rows.forEach((row) => {
      row.addEventListener('toggle', () => {
        if (!row.open) return;
        const groupName = row.getAttribute('name');
        if (!groupName) return;
        rows.forEach((otherRow) => {
          if (otherRow !== row && otherRow.getAttribute('name') === groupName && otherRow.open) {
            otherRow.open = false;
          }
        });
      });
    });
  }

  /* ------------------------------------------------------------------------
     22. Legal & Policy Table of Contents (privacy-policy.html, terms-conditions.html)
     ------------------------------------------------------------------------ */
  function initLegalToc() {
    const tocLinks = $$('.fai-legal-toc__link');
    const sections = $$('.fai-legal-card[id]');
    if (!tocLinks.length || !sections.length || !window.IntersectionObserver) return;

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const id = entry.target.getAttribute('id');
            tocLinks.forEach((link) => {
              const href = link.getAttribute('href');
              if (href === `#${id}`) {
                link.classList.add('is-active');
              } else {
                link.classList.remove('is-active');
              }
            });
          }
        });
      },
      {
        rootMargin: '-10% 0px -70% 0px',
        threshold: 0,
      }
    );

    sections.forEach((sec) => observer.observe(sec));
  }

  /* ------------------------------------------------------------------------
     24. Model Comparison Farm Size Selector (.fmmg)
     ------------------------------------------------------------------------ */
  function initModelComparison() {
    const select = $('.fmmg-pick__select');
    const table = $('.fmmg-t');
    if (!select || !table) return;

    const dataByAcre = {
      '0.25': [
        { inv: '₹ 30 – 40 L', inc: '₹ 9 – 12 L', roi: '24 – 32%', pay: '3.0 – 4.0 Years' },
        { inv: '₹ 75 L – 1.0 Cr', inc: '₹ 22.5 – 30 L', roi: '28 – 36%', pay: '2.5 – 3.5 Years' },
        { inv: '₹ 22 – 30 L', inc: '₹ 7 – 9.5 L', roi: '26 – 32%', pay: '3.0 – 4.0 Years' },
        { inv: '₹ 15 – 22.5 L', inc: '₹ 4.5 – 6.5 L', roi: '24 – 30%', pay: '3.0 – 4.5 Years' },
        { inv: '₹ 10 – 17.5 L', inc: '₹ 3 – 5 L', roi: '22 – 28%', pay: '3.0 – 4.5 Years' },
        { inv: '₹ 1.0 – 1.5 Cr', inc: '₹ 30 – 45 L', roi: '30 – 38%', pay: '2.5 – 3.5 Years' }
      ],
      '0.5': [
        { inv: '₹ 60 – 80 L', inc: '₹ 18 – 24 L', roi: '24 – 32%', pay: '3.0 – 4.0 Years' },
        { inv: '₹ 1.5 – 2.0 Cr', inc: '₹ 45 – 60 L', roi: '28 – 36%', pay: '2.5 – 3.5 Years' },
        { inv: '₹ 45 – 60 L', inc: '₹ 14 – 19 L', roi: '26 – 32%', pay: '3.0 – 4.0 Years' },
        { inv: '₹ 30 – 45 L', inc: '₹ 9 – 13 L', roi: '24 – 30%', pay: '3.0 – 4.5 Years' },
        { inv: '₹ 20 – 35 L', inc: '₹ 6 – 10 L', roi: '22 – 28%', pay: '3.0 – 4.5 Years' },
        { inv: '₹ 2.0 – 3.0 Cr', inc: '₹ 60 – 90 L', roi: '30 – 38%', pay: '2.5 – 3.5 Years' }
      ],
      '1': [
        { inv: '₹ 1.2 – 1.6 Cr', inc: '₹ 36 – 48 L', roi: '24 – 32%', pay: '3.0 – 4.0 Years' },
        { inv: '₹ 3.0 – 4.0 Cr', inc: '₹ 90 – 120 L', roi: '28 – 36%', pay: '2.5 – 3.5 Years' },
        { inv: '₹ 90 L – 1.2 Cr', inc: '₹ 28 – 38 L', roi: '26 – 32%', pay: '3.0 – 4.0 Years' },
        { inv: '₹ 60 – 90 L', inc: '₹ 18 – 26 L', roi: '24 – 30%', pay: '3.0 – 4.5 Years' },
        { inv: '₹ 40 – 70 L', inc: '₹ 12 – 20 L', roi: '22 – 28%', pay: '3.0 – 4.5 Years' },
        { inv: '₹ 4.0 – 6.0 Cr', inc: '₹ 1.2 – 1.8 Cr', roi: '30 – 38%', pay: '2.5 – 3.5 Years' }
      ],
      '2': [
        { inv: '₹ 2.4 – 3.2 Cr', inc: '₹ 72 – 96 L', roi: '24 – 32%', pay: '3.0 – 4.0 Years' },
        { inv: '₹ 6.0 – 8.0 Cr', inc: '₹ 1.8 – 2.4 Cr', roi: '28 – 36%', pay: '2.5 – 3.5 Years' },
        { inv: '₹ 1.8 – 2.4 Cr', inc: '₹ 56 – 76 L', roi: '26 – 32%', pay: '3.0 – 4.0 Years' },
        { inv: '₹ 1.2 – 1.8 Cr', inc: '₹ 36 – 52 L', roi: '24 – 30%', pay: '3.0 – 4.5 Years' },
        { inv: '₹ 80 L – 1.4 Cr', inc: '₹ 24 – 40 L', roi: '22 – 28%', pay: '3.0 – 4.5 Years' },
        { inv: '₹ 8.0 – 12.0 Cr', inc: '₹ 2.4 – 3.6 Cr', roi: '30 – 38%', pay: '2.5 – 3.5 Years' }
      ],
      '5': [
        { inv: '₹ 6.0 – 8.0 Cr', inc: '₹ 1.8 – 2.4 Cr', roi: '24 – 32%', pay: '3.0 – 4.0 Years' },
        { inv: '₹ 15.0 – 20.0 Cr', inc: '₹ 4.5 – 6.0 Cr', roi: '28 – 36%', pay: '2.5 – 3.5 Years' },
        { inv: '₹ 4.5 – 6.0 Cr', inc: '₹ 1.4 – 1.9 Cr', roi: '26 – 32%', pay: '3.0 – 4.0 Years' },
        { inv: '₹ 3.0 – 4.5 Cr', inc: '₹ 90 L – 1.3 Cr', roi: '24 – 30%', pay: '3.0 – 4.5 Years' },
        { inv: '₹ 2.0 – 3.5 Cr', inc: '₹ 60 L – 1.0 Cr', roi: '22 – 28%', pay: '3.0 – 4.5 Years' },
        { inv: '₹ 20.0 – 30.0 Cr', inc: '₹ 6.0 – 9.0 Cr', roi: '30 – 38%', pay: '2.5 – 3.5 Years' }
      ]
    };

    const rows = $$('tbody tr', table);
    const caption = $('.fmmg-sr', table);

    select.addEventListener('change', () => {
      const val = select.value;
      const rowsData = dataByAcre[val];
      if (!rowsData) return;

      const selectedText = select.options[select.selectedIndex].text.split('(')[0].trim();
      if (caption) {
        caption.textContent = `Comparison of six farming models for a ${selectedText} farm: approximate investment, annual income, yearly ROI and payback period`;
      }

      rows.forEach((row, idx) => {
        const item = rowsData[idx];
        if (!item) return;
        const tds = $$('td', row);
        if (tds.length >= 4) {
          tds[0].textContent = item.inv;
          tds[1].textContent = item.inc;
          tds[2].textContent = item.roi;
          tds[3].textContent = item.pay;
        }
      });
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
