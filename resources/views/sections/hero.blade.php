<style>
    :root {
        --syn-blue: #004a80;
        --syn-orange: #f2a900;
        --syn-transition: 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    .downlod-container:hover .download-text{
        display:inline !important;
    }
    /* Scoped CSS to avoid conflicts */
    #syn-hero-section {
        background: #fff;
        overflow: hidden;
    }

    #syn-hero-section .top-nav { 
        background: var(--syn-blue); 
        color: white; 
        padding: 12px 0; 
    }

    #syn-hero-section .logo-text { 
        font-weight: 800; 
        font-style: italic; 
        font-size: 26px; 
        letter-spacing: -1px;
    }

    #syn-hero-section .hero-container { 
        min-height: 85vh; 
        display: flex; 
        align-items: center; 
        position: relative; 
    }

    #syn-hero-section .title-innovating { 
        color: var(--syn-orange); 
        font-weight: 700; 
        font-size: clamp(1.5rem, 4vw, 2.2rem); 
        margin-bottom: -5px; 
    }

    #syn-hero-section .title-reach { 
        color: var(--syn-blue); 
        font-size: clamp(3.5rem, 10vw, 5.5rem); 
        font-weight: 900; 
        line-height: 0.85; 
        margin-bottom: 25px;
    }

    #syn-hero-section .desc-box { 
        color: #363636; 
        font-size: 1.2rem; 
        line-height: 1.5; 
    }

   

    /* GSAP Reveal Base */
    #syn-hero-section .gsap-reveal { opacity: 0; transform: translateY(40px); }

    /* Floating Arrow */
    #syn-hero-section .scroll-down-btn {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        animation: synFloat 2s infinite ease-in-out;
        color: #ccc;
    }

    @keyframes synFloat {
        0%, 100% { bottom: 30px; }
        50% { bottom: 40px; }
    }

    /* Mobile view centering override */
    @media (max-width: 991.98px) {
        #syn-hero-section .hero-container { text-align: center; }
        #syn-hero-section .desc-box { 
            border-left: none; 
            padding-left: 0; 
            display: inline-block; 
        }
    }
</style>

<div id="syn-hero-section">
    <div class="top-nav">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo-text">Syngene</div>
            <div class="small fw-light tracking-widest d-none d-md-block">ANNUAL REPORT 2025</div>
            <div class="d-flex align-items-center gap-4">
                
                <div class="downlod-container">
                    <a href="#" class="download-text " style="display:none;color:gray; text-decoration:none">Download PDF</a>
                    <i class="fa-solid fa-download fs-5 cursor-pointer"></i>
                </div>
                <div class="fw-bold lh-1 text-center" style="font-size: 10px; cursor: pointer;">ME<br>NU</div>
            </div>
        </div>
    </div>

    <section class="hero-container">
        <div class="container">
            <div class="row align-items-center text-center text-lg-start">
                <div class="col-lg-5">
                    <div class="hero-content">
                        <h5 class="title-innovating gsap-reveal">INNOVATING</h5>
                        <h1 class="title-reach gsap-reveal">REACH</h1>
                        
                        <div class="desc-box gsap-reveal mt-4 ms-lg-2 d-inline-block d-lg-block text-start">
                            Researching New Paths.<br>
                            Delivering Breakthroughs.
                        </div>

                        <div class="gsap-reveal mt-5 d-flex justify-content-center justify-content-lg-start flex-wrap">
                            <a href="#" class="custom-btn">Read More</a>
                            <a href="#" class="custom-btn">Watch the Video</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-7 text-center text-lg-end hero-graphic-container mt-5 mt-lg-0">
                    <img src="{{asset('images/hero-s1.png')}}" 
                        class="graphic-img animate-graphic img-fluid" alt="Syngene Abstract Graphic">
                </div>
            </div>
        </div>

        <div class="scroll-down-btn d-none d-lg-block">
            <i class="fa-solid fa-circle-chevron-down fs-2"></i>
        </div>
    </section>
</div>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let tl = gsap.timeline({ defaults: { ease: "power4.out", duration: 1.4 } });

        tl.to("#syn-hero-section .gsap-reveal", { 
            opacity: 1, 
            y: 0, 
            stagger: 0.15 
        })
        .from("#syn-hero-section .animate-graphic", { 
            opacity: 0, 
            scale: 0.8, 
            x: 50,
            duration: 2 
        }, "-=1");

        gsap.to("#syn-hero-section .animate-graphic", {
            y: 20,
            duration: 2.5,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });
    });
</script>
@endpush