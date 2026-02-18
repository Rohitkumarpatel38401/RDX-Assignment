<section id="syn-case-studies-section">
    <style>
        #syn-case-studies-section {
            /* padding: 80px 0; */
            /* background-color: var(--syn-white); */
            /* font-family: 'Open Sans', sans-serif; */
        }

        .case-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .case-header h2 {
            font-size: 2.5rem;
            color: var(--syn-blue);
            font-weight: 700;
        }

        /* Swiper Container Spacing */
        .case-swiper {
            padding: 20px 10px 60px 10px !important;
            position: relative;
            max-width: 1320px;
            margin: 0 auto;
        }

        /* --- Case Card Design --- */
        .case-card {
            background: #fff;
            border-radius: 20px; /* Rounded corners as per image */
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            height: 100%;
            display: flex;
            flex-direction: column;
            border: 1px solid #f0f0f0;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .case-card:hover {
            transform: translateY(-10px);
        }

        /* Top Cyan Image Holder */
        .case-img-top {
            width: 100%;
            height: 240px;
            background-color: #5bc9d9; /* Cyan background from screenshot */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
        }

        .case-img-top img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        /* Content Info */
        .case-body {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .case-body h4 {
            font-size: 1.05rem;
            color: #333;
            line-height: 1.5;
            font-weight: 600;
            margin-bottom: 20px;
            min-height: 65px;
        }

        /* Orange Read More Link */
        .case-link {
            margin-top: auto;
            color: var(--syn-blue);
            text-decoration: none;
            font-weight: 700;
            font-size: 0.9rem;
            border-left: 3px solid var(--syn-orange);
            padding-left: 12px;
            transition: all 0.3s;
        }

        .case-link:hover {
            color: var(--syn-orange);
            padding-left: 18px;
        }

        /* --- Navigation Arrows Fix --- */
        .swiper-button-next, .swiper-button-prev {
            width: 45px !important;
            height: 45px !important;
            background: #fff !important;
            border-radius: 50% !important;
            box-shadow: 0 4px 12px rgba(0,0,0,0.12) !important;
            top: 40% !important;
        }

        .swiper-button-next:after, .swiper-button-prev:after {
            font-size: 18px !important;
            font-weight: 900;
            color: var(--syn-blue);
        }

        @media (max-width: 768px) {
            .case-header h2 { font-size: 1.8rem; }
            .swiper-button-next, .swiper-button-prev { display: none; }
        }
    </style>

    <div class="case-header">
        <h2>Case Studies</h2>
    </div>

    <div class="swiper case-swiper">
        <div class="swiper-wrapper">
            
            <div class="swiper-slide">
                <div class="case-card">
                    <div class="case-img-top">
                        <img src="{{ asset('images/case-globe.png') }}" alt="Globe">
                    </div>
                    <div class="case-body">
                        <h4>Syngene partners with a client for Global Economy Decarbonization</h4>
                        <span><a href="#" class="custom-btn py-1 px-3">Read More</a></span>

                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="case-card">
                    <div class="case-img-top">
                        <img src="{{ asset('images/case-brain.png') }}" alt="Patient Compliance">
                    </div>
                    <div class="case-body">
                        <h4>Enhancing Patient Compliance: Developing an Extended-Release Anti-Epileptic Drug</h4>
                        <span><a href="#" class="custom-btn py-1 px-3">Read More</a></span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="case-card">
                    <div class="case-img-top">
                        <img src="{{ asset('images/case-chart.png') }}" alt="Antibody Production">
                    </div>
                    <div class="case-body">
                        <h4>Syngene Enhances Bispecific Antibody Production</h4>
                        <span><a href="#" class="custom-btn py-1 px-3">Read More</a></span>

                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="case-card">
                    <div class="case-img-top">
                        <img src="{{ asset('images/case-medical.png') }}" alt="Pharma">
                    </div>
                    <div class="case-body">
                        <h4>Developing high-potency API formulations for modern therapeutics</h4>
                        <span><a href="#" class="custom-btn py-1 px-3">Read More</a></span>

                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

@push('scripts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        new Swiper('.case-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: { delay: 5000 },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 3.5   }
            }
        });
    });
</script>
@endpush