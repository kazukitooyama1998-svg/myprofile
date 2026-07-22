import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    /* ---------- モバイルメニューの開閉 ---------- */
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');

    const closeMobileMenu = () => {
        mobileMenu.classList.add('hidden');
        iconOpen.classList.remove('hidden');
        iconClose.classList.add('hidden');
    };

    menuBtn?.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        iconOpen.classList.toggle('hidden');
        iconClose.classList.toggle('hidden');
    });

    document.querySelectorAll('#mobile-menu a').forEach((link) => {
        link.addEventListener('click', closeMobileMenu);
    });

    /* ---------- スクロール連動の演出（ヘッダー背景 / トップへ戻るボタン） ---------- */
    const header = document.getElementById('site-header');
    const backToTop = document.getElementById('back-to-top');

    const handleScroll = () => {
        if (window.scrollY > 20) {
            header.classList.add('bg-white/90', 'shadow-soft', 'backdrop-blur');
            header.classList.remove('bg-transparent');
        } else {
            header.classList.remove('bg-white/90', 'shadow-soft', 'backdrop-blur');
            header.classList.add('bg-transparent');
        }

        if (window.scrollY > 400) {
            backToTop.classList.remove('opacity-0', 'pointer-events-none');
            backToTop.classList.add('opacity-100');
        } else {
            backToTop.classList.add('opacity-0', 'pointer-events-none');
            backToTop.classList.remove('opacity-100');
        }
    };

    window.addEventListener('scroll', handleScroll);
    handleScroll();

    backToTop?.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    /* ---------- スクロールで要素をふわっと表示 ---------- */
    const revealEls = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.15 }
    );
    revealEls.forEach((el) => revealObserver.observe(el));

    /* ---------- 現在表示中のセクションをナビに反映 ---------- */
    const sections = document.querySelectorAll('main section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    const navObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                const id = entry.target.getAttribute('id');
                navLinks.forEach((link) => {
                    link.classList.toggle('is-active', link.getAttribute('href') === `#${id}`);
                });
            });
        },
        { rootMargin: '-40% 0px -50% 0px' }
    );
    sections.forEach((section) => navObserver.observe(section));

    /* ---------- Works: 横スライドカルーセル ---------- */
    const worksTrack = document.getElementById('works-track');
    const worksSlides = document.querySelectorAll('.works-slide');
    const worksDots = document.querySelectorAll('.works-dot');
    const worksPrev = document.getElementById('works-prev');
    const worksNext = document.getElementById('works-next');

    if (worksTrack && worksSlides.length) {
        const scrollToSlide = (index) => {
            const target = worksSlides[index];
            if (!target) return;
            worksTrack.scrollTo({ left: target.offsetLeft - worksTrack.offsetLeft, behavior: 'smooth' });
        };

        const setActiveDot = (index) => {
            worksDots.forEach((dot, i) => dot.classList.toggle('is-active', i === index));
        };

        worksDots.forEach((dot) => {
            dot.addEventListener('click', () => {
                scrollToSlide(Number(dot.dataset.index));
            });
        });

        worksPrev?.addEventListener('click', () => {
            worksTrack.scrollBy({ left: -worksTrack.clientWidth * 0.9, behavior: 'smooth' });
        });

        worksNext?.addEventListener('click', () => {
            worksTrack.scrollBy({ left: worksTrack.clientWidth * 0.9, behavior: 'smooth' });
        });

        const slideObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const index = Array.from(worksSlides).indexOf(entry.target);
                        setActiveDot(index);
                    }
                });
            },
            { root: worksTrack, threshold: 0.6 }
        );
        worksSlides.forEach((slide) => slideObserver.observe(slide));

        setActiveDot(0);
    }

    /* ---------- Works: 制作物の詳細モーダル ---------- */
    const worksData = window.worksData || {};
    const workModal = document.getElementById('work-modal');
    const workModalBackdrop = document.getElementById('work-modal-backdrop');
    const workModalClose = document.getElementById('work-modal-close');
    const workModalTitle = document.getElementById('work-modal-title');
    const workModalDescription = document.getElementById('work-modal-description');
    const workModalTech = document.getElementById('work-modal-tech');
    const workModalThumbs = document.getElementById('work-modal-thumbs');
    const workModalThumbsPrev = document.getElementById('work-modal-thumbs-prev');
    const workModalThumbsNext = document.getElementById('work-modal-thumbs-next');
    const workModalMainImage = document.getElementById('work-modal-main-image');

    const setActiveWorkThumb = (index) => {
        workModalThumbs.querySelectorAll('button').forEach((btn, i) => {
            const isActive = i === index;
            btn.classList.toggle('border-primary', isActive);
            btn.classList.toggle('border-transparent', !isActive);
        });
    };

    const updateWorkThumbNav = () => {
        if (!workModalThumbs || !workModalThumbsPrev || !workModalThumbsNext) return;

        const hasOverflow = workModalThumbs.scrollWidth > workModalThumbs.clientWidth + 1;
        if (!hasOverflow) {
            workModalThumbsPrev.classList.add('hidden');
            workModalThumbsPrev.classList.remove('flex');
            workModalThumbsNext.classList.add('hidden');
            workModalThumbsNext.classList.remove('flex');
            return;
        }

        const atStart = workModalThumbs.scrollLeft <= 0;
        const atEnd = workModalThumbs.scrollLeft + workModalThumbs.clientWidth >= workModalThumbs.scrollWidth - 1;

        workModalThumbsPrev.classList.toggle('hidden', atStart);
        workModalThumbsPrev.classList.toggle('flex', !atStart);
        workModalThumbsNext.classList.toggle('hidden', atEnd);
        workModalThumbsNext.classList.toggle('flex', !atEnd);
    };

    workModalThumbs?.addEventListener('scroll', updateWorkThumbNav);
    workModalThumbsPrev?.addEventListener('click', () => {
        workModalThumbs.scrollBy({ left: -workModalThumbs.clientWidth * 0.8, behavior: 'smooth' });
    });
    workModalThumbsNext?.addEventListener('click', () => {
        workModalThumbs.scrollBy({ left: workModalThumbs.clientWidth * 0.8, behavior: 'smooth' });
    });
    window.addEventListener('resize', updateWorkThumbNav);

    const openWorkModal = (key) => {
        const work = worksData[key];
        if (!work || !workModal) return;

        workModalTitle.textContent = work.title;
        workModalDescription.textContent = work.description;

        workModalTech.innerHTML = '';
        work.tech.forEach((tech) => {
            const span = document.createElement('span');
            span.className = 'px-3.5 py-1.5 rounded-full bg-primary-light text-primary-dark text-sm font-medium';
            span.textContent = tech;
            workModalTech.appendChild(span);
        });

        workModalThumbs.innerHTML = '';
        work.images.forEach((image, index) => {
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.setAttribute('aria-label', image.alt);
            btn.className = 'shrink-0 w-20 h-14 sm:w-24 sm:h-16 rounded-xl overflow-hidden bg-paper border-2 border-transparent outline-none hover:border-primary-light focus-visible:border-primary-dark transition-colors flex items-center justify-center';

            const img = document.createElement('img');
            img.src = image.src;
            img.alt = image.alt;
            img.className = 'w-full h-full object-contain';
            btn.appendChild(img);

            btn.addEventListener('click', () => {
                workModalMainImage.src = image.src;
                workModalMainImage.alt = image.alt;
                setActiveWorkThumb(index);
            });

            workModalThumbs.appendChild(btn);
        });

        if (work.images.length) {
            workModalMainImage.src = work.images[0].src;
            workModalMainImage.alt = work.images[0].alt;
            setActiveWorkThumb(0);
        }

        workModalThumbs.scrollLeft = 0;
        workModal.classList.remove('hidden');
        workModal.classList.add('flex');
        document.body.classList.add('overflow-hidden');
        updateWorkThumbNav();
    };

    const closeWorkModal = () => {
        if (!workModal) return;
        workModal.classList.add('hidden');
        workModal.classList.remove('flex');
        document.body.classList.remove('overflow-hidden');
    };

    document.querySelectorAll('.work-modal-trigger').forEach((trigger) => {
        trigger.addEventListener('click', () => openWorkModal(trigger.dataset.work));
    });

    workModalClose?.addEventListener('click', closeWorkModal);
    workModalBackdrop?.addEventListener('click', closeWorkModal);
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeWorkModal();
    });
});
