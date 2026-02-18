<section id="syn-vertical-tabs-container">
    <style>
        #syn-vertical-tabs-container {
            width: 100%;
            margin: 60px 0; 
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #syn-vertical-tabs-container .section {
            width: 100%;
            max-width: 1280px;
            height: 550px;
            display: flex;
            overflow: hidden;
            position: relative;
            background: var(--syn-white);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        /* ─── SLIM TAB ─── */
        .tab-slim {
            height: 100%;
            width: 60px;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            overflow: hidden;
            position: relative;
            transition: var(--syn-trans);
        }

        .t-num {
            padding-top: 18px;
            font-size: 13px;
            font-weight: 700;
            color: rgba(255,255,255,0.7);
            width: 100%;
            text-align: center;
        }

        .t-label {
            writing-mode: vertical-rl;
            transform: rotate(180deg);
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.13em;
            text-transform: uppercase;
            color: var(--syn-white);
            white-space: nowrap;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-bottom: 10px;
            transform-origin: center center;
        }

        /* ─── ACTIVE TAB ─── */
        .tab-active {
            height: 100%;
            width: 350px;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 40px 30px;
            position: relative;
            overflow: hidden;
        }

        .tab-active h2 {
            font-size: clamp(22px, 2.5vw, 30px);
            font-weight: 700; 
            color: var(--syn-white);
            line-height: 1.2; margin-bottom: 15px;
            text-transform: uppercase;
        }

        .tab-active p {
            font-size: 14px; line-height: 1.6;
            color: var(--syn-white);
            margin-bottom: 25px;
            opacity: 0.9;
        }

        .read-more {
            display: inline-flex;
            font-size: 13px; font-weight: 700;
            color: var(--syn-white); 
            text-decoration: none;
            border-left: 3px solid var(--syn-white);
            padding-left: 12px;
        }

        /* ─── IMAGE PANEL ─── */
        .image-panel {
            flex: 1; height: 100%;
            position: relative; overflow: hidden;
            min-height: 250px; /* Base height for mobile view */
        }
        .img-slot {
            position: absolute; inset: 0;
            opacity: 0; transition: opacity 0.6s ease;
        }
        .img-slot.visible { opacity: 1; z-index: 2; }
        .img-slot img { width: 100%; height: 100%; object-fit: cover; display: block; }

        /* ─── MOBILE VIEW FIX ─── */
        @media (max-width: 991px) {
            #syn-vertical-tabs-container .section {
                flex-direction: column;
                height: auto;
                /* max-width: 95%; */
            }
            
            .tab-slim {
                width: 100% !important;
                height: 55px;
                flex-direction: row;
                padding: 0 20px;
                border-bottom: 1px solid rgba(255,255,255,0.1);
            }

            .t-num { padding-top: 0; width: auto; }

            .t-label {
                writing-mode: horizontal-tb;
                transform: none;
                padding-bottom: 0;
                justify-content: flex-start;
                margin-left: 15px;
            }

            .tab-active {
                width: 100% !important;
                height: auto;
                padding: 35px 20px;
            }

            .image-panel {
                height: 300px; /* Fixed height for image in mobile */
                width: 100%;
                flex: none;
            }
        }
    </style>

    <div class="section" id="mainVerticalSection"></div>
</section>

@push('scripts')
<script>
(function () {
    const rootStyles = getComputedStyle(document.documentElement);
    const BLUE   = rootStyles.getPropertyValue('--syn-blue').trim() || '#004a80';
    const ORANGE = rootStyles.getPropertyValue('--syn-orange').trim() || '#f2a900';

    const TABS = [
        { num: '01', label: 'Execution Excellence', heading: 'Execution Excellence', para: 'Delivering value through project management and operational excellence.', img: '{{ asset("images/tab1.png") }}' },
        { num: '02', label: 'EHS & Sustainability', heading: 'EHS & Sustainability', para: "Building a safer, more sustainable, and efficient future for all.", img: '{{ asset("images/tab2.png") }}' },
        { num: '03', label: 'Quality Management', heading: 'Quality Management', para: 'Quality drives efficiency and innovation through robust systems.', img: '{{ asset("images/tab3.png") }}' },
        { num: '04', label: 'Information Technology', heading: 'Information Technology', para: 'Investing in digitization to improve scientific and enterprise functions.', img: '{{ asset("images/tab4.png") }}' },
        { num: '05', label: 'Strategic Sourcing', heading: 'Strategic Sourcing', para: 'Building resilient supply chains that are responsible and cost-effective.', img: '{{ asset("images/tab5.png") }}' }
    ];

    function getColor(tabIdx) { return tabIdx % 2 === 0 ? BLUE : ORANGE; }

    let activeIdx = 0;
    let animating = false;
    const section = document.getElementById('mainVerticalSection');

    function buildDOM() {
        section.innerHTML = '';
        for (let i = 0; i < TABS.length; i++) {
            if (i === activeIdx) {
                section.appendChild(makeActiveEl(i));
                section.appendChild(makeImagePanel());
            } else {
                section.appendChild(makeSlimEl(i));
            }
        }
    }

    function makeSlimEl(tabIdx) {
        const d = TABS[tabIdx];
        const el = document.createElement('div');
        el.className = 'tab-slim';
        el.dataset.tabId = tabIdx;
        el.style.background = getColor(tabIdx);
        el.innerHTML = `<span class="t-num">${d.num}</span><span class="t-label">${d.label}</span>`;
        el.addEventListener('click', () => activate(tabIdx));
        return el;
    }

    function makeActiveEl(tabIdx) {
        const d = TABS[tabIdx];
        const el = document.createElement('div');
        el.id = 'activeTabEl'; el.className = 'tab-active';
        el.dataset.tabId = tabIdx;
        el.style.background = getColor(tabIdx);
        el.innerHTML = `
            <strong style="color:white; position:absolute; left:20px;top:15px;width:20px;" class=""> ${d.num}</strong>
            <div style="color:#FFFFFF; font-size:12px; font-weight:700; margin-bottom:10px; opacity:0.8; text-transform:uppercase;">Essential Functions</div>
            <h2 class="v-anim">${d.heading}</h2>
            <p class="v-anim">${d.para}</p>
            <a href="#" class="read-more v-anim">Read More</a>
        `;
        return el;
    }

    function makeImagePanel() {
        const panel = document.createElement('div');
        panel.className = 'image-panel';
        panel.dataset.tabId = 'img-panel';
        TABS.forEach((t, i) => {
            const slot = document.createElement('div');
            slot.className = 'img-slot' + (i === activeIdx ? ' visible' : '');
            slot.innerHTML = `<img src="${t.img}" alt="${t.label}">`;
            panel.appendChild(slot);
        });
        return panel;
    }

    function getContentEls() {
        const a = document.getElementById('activeTabEl');
        return a ? Array.from(a.querySelectorAll('.v-anim')) : [];
    }

    function activate(clickedIdx) {
        if (clickedIdx === activeIdx || animating) return;
        animating = true;

        const isMobile = window.innerWidth <= 991;
        const snapshot = new Map();
        
        section.querySelectorAll('.tab-slim, .tab-active, .image-panel').forEach(el => {
            const key = el.dataset.tabId !== undefined ? el.dataset.tabId : 'img';
            snapshot.set(key, el.getBoundingClientRect());
        });

        activeIdx = clickedIdx;
        buildDOM();

        section.querySelectorAll('.tab-slim, .tab-active, .image-panel').forEach(el => {
            const key = el.dataset.tabId !== undefined ? el.dataset.tabId : 'img';
            const before = snapshot.get(key);
            if (!before) return;

            const after = el.getBoundingClientRect();
            
            // Fixed FLIP logic for Mobile Image
            const dx = before.left - after.left;
            const dy = before.top - after.top;
            const dw = before.width / after.width;
            const dh = before.height / after.height;

            if (Math.abs(dx) > 0.5 || Math.abs(dy) > 0.5 || Math.abs(dw - 1) > 0.01) {
                gsap.fromTo(el, 
                    { x: dx, y: dy, scaleX: dw, scaleY: isMobile ? dh : 1, transformOrigin: 'top left' }, 
                    { x: 0, y: 0, scaleX: 1, scaleY: 1, duration: 0.7, ease: 'power3.inOut' }
                );

                const label = el.querySelector('.t-label');
                if (label && !isMobile) {
                    gsap.fromTo(label, { rotation: 180, opacity: 0.5 }, { rotation: 0, opacity: 1, duration: 0.7 });
                }
            }
        });

        gsap.fromTo(getContentEls(), { opacity: 0, y: 20 }, { opacity: 1, y: 0, stagger: 0.1, duration: 0.5, delay: 0.2 });

        setTimeout(() => { animating = false; }, 750);
    }

    buildDOM();
})();
</script>
@endpush