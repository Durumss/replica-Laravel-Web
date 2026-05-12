import './bootstrap';

import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';

/* ==========================================================
   HELPERS
========================================================== */

const exists = (selector) => document.querySelector(selector);

const setIcon = (icon, isOpen) => {
    if (!icon) return;

    icon.classList.toggle('fa-chevron-up', isOpen);
    icon.classList.toggle('fa-chevron-down', !isOpen);
};

const closeAccordionItem = (item, triggerSelector) => {
    const trigger = item.querySelector(triggerSelector);
    const icon = trigger ? trigger.querySelector('i') : null;

    item.classList.remove('is-open');

    if (trigger) {
        trigger.setAttribute('aria-expanded', 'false');
    }

    setIcon(icon, false);
};

const openAccordionItem = (item, trigger, icon) => {
    item.classList.add('is-open');
    trigger.setAttribute('aria-expanded', 'true');
    setIcon(icon, true);
};

/* ==========================================================
   SWIPER - HERO HOME
========================================================== */

const initHeroSwiper = () => {
    if (!exists('.hero-swiper')) return;

    new Swiper('.hero-swiper', {
        modules: [Navigation, Autoplay],
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.hero-swiper .swiper-button-next',
            prevEl: '.hero-swiper .swiper-button-prev',
        },
    });
};

/* ==========================================================
   SWIPER - CASOS COLECTIVOS
========================================================== */

const initCasesSwiper = () => {
    if (!exists('.cases-swiper')) return;

    new Swiper('.cases-swiper', {
        modules: [Navigation, Pagination, Autoplay],
        loop: true,
        slidesPerView: 4,
        spaceBetween: 14,
        autoplay: {
            delay: 4500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.cases-next',
            prevEl: '.cases-prev',
        },
        pagination: {
            el: '.cases-swiper .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            700: {
                slidesPerView: 2,
            },
            1100: {
                slidesPerView: 4,
            },
        },
    });
};


/* ==========================================================
   SWIPER - CASOS COLECTIVOS EN LA ASOCIACIÓN
========================================================== */

const initAssociationCasesSwiper = () => {
    if (!exists('.association-cases-swiper')) return;

    new Swiper('.association-cases-swiper', {
        modules: [Navigation, Pagination],
        loop: true,
        slidesPerView: 3,
        spaceBetween: 26,
        navigation: {
            nextEl: '.association-cases-next',
            prevEl: '.association-cases-prev',
        },
        pagination: {
            el: '.association-cases-swiper .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            760: {
                slidesPerView: 2,
            },
            1180: {
                slidesPerView: 3,
            },
        },
    });
};

/* ==========================================================
   SWIPER - WEBS DE ADICAE
========================================================== */

const initWebsSwiper = () => {
    if (!exists('.webs-bottom-swiper')) return;

    new Swiper('.webs-bottom-swiper', {
        modules: [Navigation],
        loop: true,
        speed: 600,
        slidesPerView: 4,
        slidesPerGroup: 1,
        spaceBetween: 14,
        navigation: {
            nextEl: '.webs-bottom-next',
            prevEl: '.webs-bottom-prev',
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            700: {
                slidesPerView: 2,
            },
            1100: {
                slidesPerView: 4,
            },
        },
    });
};

/* ==========================================================
   VÍDEOS YOUTUBE
========================================================== */

const initVideoCards = () => {
    document.querySelectorAll('.video-card').forEach((card) => {
        card.addEventListener('click', function () {
            const id = this.dataset.id;
            const start = this.dataset.start || 0;
            const thumb = this.querySelector('.video-thumb');

            if (!id || !thumb) return;

            thumb.innerHTML = `
                <iframe
                    src="https://www.youtube.com/embed/${id}?autoplay=1&start=${start}"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen>
                </iframe>
            `;
        });
    });
};

/* ==========================================================
   ACORDEÓN GENÉRICO
   - Todos cargan cerrados
   - Solo un item abierto dentro del mismo acordeón
   - Si pulsas el abierto, se cierra
========================================================== */

const initAccordion = ({
    accordionSelector,
    itemSelector,
    triggerSelector,
}) => {
    document.querySelectorAll(accordionSelector).forEach((accordion) => {
        const items = accordion.querySelectorAll(itemSelector);

        if (!items.length) return;

        // Forzar que todos carguen cerrados
        items.forEach((item) => {
            closeAccordionItem(item, triggerSelector);
        });

        items.forEach((item) => {
            const trigger = item.querySelector(triggerSelector);
            const icon = trigger ? trigger.querySelector('i') : null;

            if (!trigger) return;

            trigger.addEventListener('click', () => {
                const wasOpen = item.classList.contains('is-open');

                // Cerrar todos los elementos del mismo acordeón
                items.forEach((otherItem) => {
                    closeAccordionItem(otherItem, triggerSelector);
                });

                // Si estaba cerrado, abrirlo
                if (!wasOpen) {
                    openAccordionItem(item, trigger, icon);
                }
            });
        });
    });
};

/* ==========================================================
   HISTORIA - ACORDEONES
========================================================== */

const initHistoryAccordions = () => {
    initAccordion({
        accordionSelector: '.history-accordion',
        itemSelector: '.history-item',
        triggerSelector: '.history-trigger',
    });
};

/* ==========================================================
   LOCALIZACIÓN DE SEDES - FILTROS
========================================================== */

const initSedesFilter = () => {
    const filterButtons = document.querySelectorAll('[data-sede-filter]');
    const communities = document.querySelectorAll('[data-sede-community]');

    if (!filterButtons.length || !communities.length) return;

    filterButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const target = button.dataset.sedeFilter;

            filterButtons.forEach((btn) => {
                btn.classList.remove('is-active');
            });

            communities.forEach((community) => {
                community.classList.remove('is-active');
            });

            button.classList.add('is-active');

            const activeCommunity = document.querySelector(`[data-sede-community="${target}"]`);

            if (activeCommunity) {
                activeCommunity.classList.add('is-active');
            }
        });
    });
};

/* ==========================================================
   PORTAL DE TRANSPARENCIA - TABS
========================================================== */

const initTransparencyTabs = () => {
    const tabs = document.querySelectorAll('.transparency-tab');
    const panels = document.querySelectorAll('.transparency-panel');

    if (!tabs.length || !panels.length) return;

    tabs.forEach((tab) => {
        tab.addEventListener('click', () => {
            const target = tab.dataset.tab;

            tabs.forEach((item) => {
                item.classList.remove('is-active');
            });

            panels.forEach((panel) => {
                panel.classList.remove('is-active');
            });

            tab.classList.add('is-active');

            const activePanel = document.querySelector(`#tab-${target}`);

            if (activePanel) {
                activePanel.classList.add('is-active');
            }
        });
    });
};

/* ==========================================================
   PORTAL DE TRANSPARENCIA - ACORDEONES
========================================================== */

const initTransparencyAccordions = () => {
    initAccordion({
        accordionSelector: '.transparency-accordion',
        itemSelector: '.transparency-item',
        triggerSelector: '.transparency-trigger',
    });
};

/* ==========================================================
   BUSCADOR OVERLAY
========================================================== */

const initSearchOverlay = () => {
    const searchOverlay = document.getElementById('searchOverlay');
    const searchOpen = document.querySelector('.search-open');
    const searchClose = document.querySelector('.search-close');

    if (!searchOverlay || !searchOpen || !searchClose) return;

    const openSearch = () => {
        searchOverlay.classList.add('is-open');

        const input = searchOverlay.querySelector('input');

        if (input) {
            setTimeout(() => input.focus(), 100);
        }
    };

    const closeSearch = () => {
        searchOverlay.classList.remove('is-open');
    };

    searchOpen.addEventListener('click', openSearch);
    searchClose.addEventListener('click', closeSearch);

    searchOverlay.addEventListener('click', (event) => {
        if (event.target === searchOverlay) {
            closeSearch();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeSearch();
        }
    });
};


/* ==========================================================
   CASOS COLECTIVOS - PESTAÑAS
========================================================== */

const initCasoTabs = () => {
    const tabButtons = document.querySelectorAll('[data-caso-tab]');
    const tabPanels = document.querySelectorAll('[data-caso-panel]');

    if (!tabButtons.length || !tabPanels.length) return;

    const showCasoTab = (tabName) => {
        tabButtons.forEach((button) => {
            button.classList.toggle('active', button.dataset.casoTab === tabName);
        });

        tabPanels.forEach((panel) => {
            panel.classList.toggle('active', panel.dataset.casoPanel === tabName);
        });

        const nav = document.querySelector('.caso-nav-section');
        if (nav) {
            window.scrollTo({ top: nav.offsetTop, behavior: 'smooth' });
        }
    };

    tabButtons.forEach((button) => {
        button.addEventListener('click', () => showCasoTab(button.dataset.casoTab));
    });
};

/* ==========================================================
   CASOS COLECTIVOS - FORMULARIO MULTIPASO
========================================================== */

const initCasoFormSteps = () => {
    document.querySelectorAll('.caso-form-card').forEach((formCard) => {
        const stepButtons = formCard.querySelectorAll('.caso-step');
        const stepContents = formCard.querySelectorAll('.caso-form-step');
        const nextButtons = formCard.querySelectorAll('[data-next]');
        const prevButtons = formCard.querySelectorAll('[data-prev]');

        if (!stepButtons.length || !stepContents.length) return;

        const showStep = (step) => {
            stepButtons.forEach((button) => {
                const buttonStep = parseInt(button.dataset.step, 10);
                button.classList.toggle('active', buttonStep <= step);
            });

            stepContents.forEach((content) => {
                content.classList.toggle('active', parseInt(content.dataset.stepContent, 10) === step);
            });
        };

        nextButtons.forEach((button) => {
            button.addEventListener('click', () => showStep(parseInt(button.dataset.next, 10)));
        });

        prevButtons.forEach((button) => {
            button.addEventListener('click', () => showStep(parseInt(button.dataset.prev, 10)));
        });

        stepButtons.forEach((button) => {
            button.addEventListener('click', () => showStep(parseInt(button.dataset.step, 10)));
        });
    });
};

/* ==========================================================
   INIT GENERAL
========================================================== */

document.addEventListener('DOMContentLoaded', () => {
    initHeroSwiper();
    initCasesSwiper();
    initAssociationCasesSwiper();
    initWebsSwiper();

    initVideoCards();

    initHistoryAccordions();

    initSedesFilter();

    initTransparencyTabs();
    initTransparencyAccordions();

    initSearchOverlay();

    initCasoTabs();
    initCasoFormSteps();
});