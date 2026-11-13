(function () {
  'use strict';

  const mobileQuery = window.matchMedia('(max-width: 1240px)');
  const phoneQuery = window.matchMedia('(max-width: 767px)');
  const section = document.querySelector('.protected-page.fanpad-page #fertigation-system');

  if (section) {
    const getTabInput = (target) => {
      const label = target.closest('label[for^="fmfs-t"]');
      if (!label || !section.contains(label)) return null;

      const input = document.getElementById(label.htmlFor);
      return input && input.matches('.fmfs__radio') ? input : null;
    };

    const restoreScroll = (left, top) => {
      window.requestAnimationFrame(() => {
        document.documentElement.scrollLeft = left;
        document.documentElement.scrollTop = top;
        document.body.scrollLeft = left;
        document.body.scrollTop = top;
      });
    };

    const selectTab = (input, moveFocus) => {
      const left = window.scrollX;
      const top = window.scrollY;

      input.checked = true;
      input.dispatchEvent(new Event('input', { bubbles: true }));
      input.dispatchEvent(new Event('change', { bubbles: true }));
      if (moveFocus) {
        input.focus({ preventScroll: true });
        restoreScroll(left, top);
      }
    };

    const handleClick = (event) => {
      if (!mobileQuery.matches || !(event.target instanceof Element)) return;
      const input = getTabInput(event.target);
      if (!input) return;

      event.preventDefault();
      selectTab(input, false);
    };

    const handleKeydown = (event) => {
      if (!mobileQuery.matches || !event.target.matches('.fmfs__radio')) return;

      const inputs = Array.from(section.querySelectorAll('.fmfs__radio'));
      const currentIndex = inputs.indexOf(event.target);
      let nextIndex = currentIndex;

      if (event.key === 'ArrowRight' || event.key === 'ArrowDown') {
        nextIndex = (currentIndex + 1) % inputs.length;
      } else if (event.key === 'ArrowLeft' || event.key === 'ArrowUp') {
        nextIndex = (currentIndex - 1 + inputs.length) % inputs.length;
      } else if (event.key !== ' ') {
        return;
      }

      event.preventDefault();
      selectTab(inputs[nextIndex], true);
    };

    const sync = () => {
      if (mobileQuery.matches) {
        document.addEventListener('click', handleClick, true);
        section.addEventListener('keydown', handleKeydown);
      } else {
        document.removeEventListener('click', handleClick, true);
        section.removeEventListener('keydown', handleKeydown);
      }
    };

    mobileQuery.addEventListener('change', sync);
    sync();
  }

  const climateSection = document.querySelector('.protected-page.fanpad-page #climate-site-fit');
  if (!climateSection) return;

  const climateGrid = climateSection.querySelector('.fmcf__grid');
  const columns = Array.from(climateSection.querySelectorAll('.fmcf-col'));
  const cards = columns.flatMap((column) => Array.from(column.children));
  if (!climateGrid || columns.length !== 2 || !cards.length) return;

  const originalLocations = cards.map((card) => ({
    card,
    parent: card.parentElement,
    nextSibling: card.nextSibling
  }));
  const track = document.createElement('ul');
  track.className = 'fmcf__slider';
  track.setAttribute('aria-label', 'Climate and site factors');
  track.tabIndex = 0;

  const controls = document.createElement('div');
  controls.className = 'fmcf__slider-controls';
  const previous = document.createElement('button');
  previous.className = 'fmcf__slider-button';
  previous.type = 'button';
  previous.setAttribute('aria-label', 'Previous climate factor');

  const status = document.createElement('span');
  status.className = 'fmcf__slider-status';
  status.setAttribute('aria-live', 'polite');
  status.setAttribute('aria-atomic', 'true');

  const next = document.createElement('button');
  next.className = 'fmcf__slider-button';
  next.classList.add('fmcf__slider-button--next');
  next.type = 'button';
  next.setAttribute('aria-label', 'Next climate factor');

  const createArrow = (direction) => {
    const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svg.setAttribute('viewBox', '0 0 24 24');
    svg.setAttribute('aria-hidden', 'true');
    svg.setAttribute('focusable', 'false');

    const line = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    line.setAttribute(
      'd',
      direction === 'left' ? 'M19 12H5m7 7-7-7 7-7' : 'M5 12h14m-7-7 7 7-7 7'
    );
    line.setAttribute('fill', 'none');
    line.setAttribute('stroke', 'currentColor');
    line.setAttribute('stroke-width', '1.8');
    line.setAttribute('stroke-linecap', 'round');
    line.setAttribute('stroke-linejoin', 'round');
    svg.appendChild(line);
    return svg;
  };

  previous.appendChild(createArrow('left'));
  next.appendChild(createArrow('right'));
  controls.append(previous, status, next);

  let activeIndex = 0;
  let scrollFrame = 0;

  const updateControls = () => {
    status.textContent = `${activeIndex + 1} / ${cards.length}`;
    previous.disabled = activeIndex === 0;
    next.disabled = activeIndex === cards.length - 1;
  };

  const goTo = (index) => {
    activeIndex = Math.max(0, Math.min(cards.length - 1, index));
    const trackRect = track.getBoundingClientRect();
    const cardRect = cards[activeIndex].getBoundingClientRect();
    track.scrollLeft += cardRect.left - trackRect.left;
    updateControls();
  };

  const handleTrackScroll = () => {
    if (scrollFrame) window.cancelAnimationFrame(scrollFrame);
    scrollFrame = window.requestAnimationFrame(() => {
      activeIndex = cards.reduce((nearest, card, index) => {
        const distance = Math.abs(card.getBoundingClientRect().left - track.getBoundingClientRect().left);
        const nearestDistance = Math.abs(cards[nearest].getBoundingClientRect().left - track.getBoundingClientRect().left);
        return distance < nearestDistance ? index : nearest;
      }, 0);
      updateControls();
    });
  };

  previous.addEventListener('click', () => goTo(activeIndex - 1));
  next.addEventListener('click', () => goTo(activeIndex + 1));
  track.addEventListener('scroll', handleTrackScroll, { passive: true });

  const applyClimateSlider = () => {
    climateSection.classList.add('has-climate-slider');
    updateControls();
  };

  const restoreClimateCards = () => {
    climateSection.classList.remove('has-climate-slider');
    originalLocations.forEach(({ card, parent, nextSibling }) => {
      if (card.parentElement !== parent) {
        parent.insertBefore(card, nextSibling && nextSibling.parentElement === parent ? nextSibling : null);
      }
    });
    track.remove();
    controls.remove();
  };

  const syncClimateSlider = () => {
    if (mobileQuery.matches && phoneQuery.matches) {
      if (!track.isConnected) climateGrid.append(track, controls);
      if (track.children.length !== cards.length) cards.forEach((card) => track.appendChild(card));
      applyClimateSlider();
      goTo(activeIndex);
    } else {
      restoreClimateCards();
    }
  };

  mobileQuery.addEventListener('change', syncClimateSlider);
  phoneQuery.addEventListener('change', syncClimateSlider);

  let resizeTimer = 0;
  window.addEventListener('resize', () => {
    window.clearTimeout(resizeTimer);
    resizeTimer = window.setTimeout(syncClimateSlider, 150);
  }, { passive: true });

  syncClimateSlider();

  const compareSection = document.querySelector('.protected-page.fanpad-page #compare-alternatives');
  if (!compareSection) return;

  const compareTrack = compareSection.querySelector('.fmco-cards');
  const compareCards = Array.from(compareSection.querySelectorAll('.fmco-card'));
  if (!compareTrack || !compareCards.length) return;

  const compareControls = document.createElement('div');
  compareControls.className = 'fmco__slider-controls';

  const createCompareButton = (direction) => {
    const button = document.createElement('button');
    button.className = `fmco__slider-button fmco__slider-button--${direction}`;
    button.type = 'button';
    button.setAttribute('aria-label', `${direction === 'previous' ? 'Previous' : 'Next'} alternative`);

    const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svg.setAttribute('viewBox', '0 0 24 24');
    svg.setAttribute('aria-hidden', 'true');
    svg.setAttribute('focusable', 'false');
    const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    path.setAttribute(
      'd',
      direction === 'previous' ? 'M19 12H5m7 7-7-7 7-7' : 'M5 12h14m-7-7 7 7-7 7'
    );
    path.setAttribute('fill', 'none');
    path.setAttribute('stroke', 'currentColor');
    path.setAttribute('stroke-width', '1.8');
    path.setAttribute('stroke-linecap', 'round');
    path.setAttribute('stroke-linejoin', 'round');
    svg.appendChild(path);
    button.appendChild(svg);
    return button;
  };

  const comparePrevious = createCompareButton('previous');
  const compareStatus = document.createElement('span');
  compareStatus.className = 'fmco__slider-status';
  compareStatus.setAttribute('aria-live', 'polite');
  compareStatus.setAttribute('aria-atomic', 'true');
  const compareNext = createCompareButton('next');
  compareControls.append(comparePrevious, compareStatus, compareNext);

  let compareIndex = Math.max(0, compareCards.findIndex((card) => card.classList.contains('fmco-card--rec')));
  let compareScrollFrame = 0;

  const updateCompareControls = () => {
    compareCards.forEach((card, index) => {
      card.classList.toggle('is-active', index === compareIndex);
    });
    compareStatus.textContent = `${compareIndex + 1} / ${compareCards.length}`;
    comparePrevious.disabled = compareIndex === 0;
    compareNext.disabled = compareIndex === compareCards.length - 1;
  };

  const goToCompareCard = (index) => {
    compareIndex = Math.max(0, Math.min(compareCards.length - 1, index));
    const trackRect = compareTrack.getBoundingClientRect();
    const cardRect = compareCards[compareIndex].getBoundingClientRect();
    compareTrack.scrollLeft += cardRect.left - trackRect.left;
    updateCompareControls();
  };

  const handleCompareScroll = () => {
    if (compareScrollFrame) window.cancelAnimationFrame(compareScrollFrame);
    compareScrollFrame = window.requestAnimationFrame(() => {
      const trackLeft = compareTrack.getBoundingClientRect().left;
      compareIndex = compareCards.reduce((nearest, card, index) => {
        const distance = Math.abs(card.getBoundingClientRect().left - trackLeft);
        const nearestDistance = Math.abs(compareCards[nearest].getBoundingClientRect().left - trackLeft);
        return distance < nearestDistance ? index : nearest;
      }, 0);
      updateCompareControls();
    });
  };

  comparePrevious.addEventListener('click', () => goToCompareCard(compareIndex - 1));
  compareNext.addEventListener('click', () => goToCompareCard(compareIndex + 1));
  compareTrack.addEventListener('scroll', handleCompareScroll, { passive: true });

  const syncCompareSlider = () => {
    if (phoneQuery.matches) {
      compareSection.classList.add('has-compare-slider');
      if (!compareControls.isConnected) compareTrack.after(compareControls);
      goToCompareCard(compareIndex);
    } else {
      compareSection.classList.remove('has-compare-slider');
      compareCards.forEach((card) => card.classList.remove('is-active'));
      compareControls.remove();
      compareTrack.scrollLeft = 0;
    }
  };

  phoneQuery.addEventListener('change', syncCompareSlider);
  let compareResizeTimer = 0;
  window.addEventListener('resize', () => {
    window.clearTimeout(compareResizeTimer);
    compareResizeTimer = window.setTimeout(syncCompareSlider, 150);
  }, { passive: true });
  syncCompareSlider();
})();
