<style>
    /* Section Container */
    #syn-csr-curved {
        position: relative;
        background-color: #fff;
        padding: 100px 0 160px 0; /* Bottom waves ke liye extra space */
        overflow: hidden;
    }

    .syn-flex-layout {
        display: flex;
        align-items: center;
        gap: 40px;
    }

    /* Left Side Text */
    .syn-text-col {
        flex: 0 0 42%;
        z-index: 10;
        padding-left: 15px;
    }

    .syn-text-col h2 {
        font-size: 2.8rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 25px;
    }

    .syn-text-col p {
        font-size: 1.1rem;
        color: #004a80; /* Syngene Blue */
        line-height: 1.6;
        margin-bottom: 30px;
    }

    /* Right Side Image with SVG Masking */
    .syn-image-col {
        flex: 1;
        position: relative;
        height: 620px;
        /* Exact Elliptical Left Curve Mask */
        -webkit-mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M100,0 L100,100 L25,100 C50,80 50,20 25,0 Z" fill="black"/></svg>');
        mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M100,0 L100,100 L25,100 C50,80 50,20 25,0 Z" fill="black"/></svg>');
        -webkit-mask-size: 100% 100%;
        mask-size: 100% 100%;
    }

    .syn-image-col img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Floating Particles */
    .syn-orb {
        position: absolute;
        border-radius: 50%;
        z-index: 15;
    }

    /* --- Bottom SVG Wave Shapes --- */
    .syn-wave-container {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        line-height: 0;
    }

    .syn-wave-container svg {
        width: 100%;
        height: auto;
    }

    /* Desktop View Spacing */
    @media (min-width: 992px) {
        .syn-text-col { padding-right: 50px; }
    }

    /* Mobile Responsive */
    @media (max-width: 991px) {
        .syn-flex-layout { flex-direction: column; text-align: center; }
        .syn-image-col { width: 100%; height: 400px; -webkit-mask-image: none; mask-image: none; }
        .syn-text-col { flex: 0 0 100%; }
    }
</style>

<section id="syn-csr-curved">
    <div class="container-fluid p-0">
        <div class="container">
            <div class="syn-flex-layout">
                
                <div class="syn-text-col gsap-reveal-left">
                    <h2>Corporate Social Responsibility</h2>
                    <p>
                        At Syngene, we drive meaningful change through CSR initiatives in 
                        Healthcare, Science Education, Research and Scholarships, and 
                        Environmental Sustainability, thus empowering underserved 
                        communities in partnership with the Biocon Foundation and the 
                        Biocon Academy.
                    </p>
                    <div class="d-inline-block">
                        <a href="#" class="custom-btn">Read More</a>
                    </div>
                </div>

                <div class="syn-image-col gsap-reveal-right">
                    <img src="{{ asset('images/csr-lab.jpg') }}" alt="CSR Team">
                    
                    <div class="syn-orb" style="top: 20%; left: 8%; width: 24px; height: 24px; background: #a0609e; opacity: 0.8;"></div>
                </div>

            </div>
        </div>
    </div>

    <div class="syn-wave-container">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="#5bc9d9" fill-opacity="0.6" d="M0,256L120,240C240,224,480,192,720,192C960,192,1200,224,1320,240L1440,256L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
            <path fill="#a0609e" d="M0,320L120,298.7C240,277,480,235,720,224C960,213,1200,235,1320,245.3L1440,256L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
        </svg>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Smooth reveal for text and image
        gsap.from(".gsap-reveal-left", {
            scrollTrigger: "#syn-csr-curved",
            x: -80, opacity: 0, duration: 1.2, ease: "power3.out"
        });

        gsap.from(".gsap-reveal-right", {
            scrollTrigger: "#syn-csr-curved",
            x: 80, opacity: 0, duration: 1.2, ease: "power3.out"
        });

        // Floating Orb Animation
        gsap.to(".syn-orb", {
            y: 30, repeat: -1, yoyo: true, duration: 3, ease: "sine.inOut"
        });
    });
</script>
@endpush