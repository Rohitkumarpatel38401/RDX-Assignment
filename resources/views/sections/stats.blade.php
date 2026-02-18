@push('styles')
<style>
    /* Scoped Styles to prevent global conflicts */
    #syn-stats-section {
        background-color: #fff;
        padding: 60px 0;
        overflow: hidden;
    }

    #syn-stats-section .glance-title {
        font-family: 'Arial', sans-serif; /* Fallback if Myriad not available */
        font-weight: 700;
        font-size: clamp(1.8rem, 4vw, 2.5rem);
        color: #333;
        margin-bottom: 60px;
    }

    /* Optimal Dotted Grid */
    #syn-stats-section .dotted-grid {
        display: flex;
        flex-wrap: wrap;
        /* border-top: 1px dotted #ccc; */
    }

    #syn-stats-section .stat-item {
        border-right: 1px dotted #ccc;
        border-bottom: 1px dotted #ccc;
        padding: 40px 30px;
        flex: 0 0 25%; /* Desktop: 4 items per row */
        transition: background 0.3s ease;
    }

    #syn-stats-section .stat-item:hover {
        background-color: #fafafa;
    }

    /* --- Exact Gradient Text Effect (91deg) --- */
    #syn-stats-section .gradient-number {
        font-size: clamp(2.5rem, 5vw, 3.5rem);
        font-weight: 600;
        display: inline-block;
        background: linear-gradient(91deg, #F78D2F 0%, #A0609E 50%, #004172 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        line-height: 1;
    }

    #syn-stats-section .stat-desc {
        font-size: 1rem;
        color: #363636;
        font-weight: 500;
        line-height: 1.4;
    }

    #syn-stats-section .currency-label {
        font-size: 1rem;
        color: #363636;
        display: block;
    }

    #syn-stats-section .stat-unit {
        color: var(--syngene-blue);
        font-weight: 700;
        font-size: 1.2rem;
    }

    /* Responsiveness Logic */
    @media (max-width: 991px) {
        #syn-stats-section .stat-item { flex: 0 0 50%; } /* 2 per row */
        #syn-stats-section .stat-item:nth-child(2n) { border-right: none; }
    }

    @media (max-width: 576px) {
        #syn-stats-section .stat-item { 
            flex: 0 0 100%; 
            border-right: none; 
            text-align: center;
        }
        #syn-stats-section .glance-title { text-align: center; }
    }

    @media (min-width: 992px) {
        #syn-stats-section .stat-item:nth-child(4n) { border-right: none; }
    }
</style>
@endpush

<section id="syn-stats-section">
    <div class="container">
        <h2 class="text-center glance-title">Syngene at a Glance</h2>
        
        <div class="dotted-grid">
            <div class="stat-item">
                <div class="gradient-number"><span class="count">30</span>+</div>
                <span class="stat-unit">Years</span>
                <p class="stat-desc">of scientific expertise</p>
            </div>

            <div class="stat-item">
                <div class="gradient-number"><span class="count">400</span>+</div>
                <p class="stat-desc">Patents held by customers</p>
            </div>

            <div class="stat-item">
                <div class="gradient-number"><span class="count">4</span></div>
                <p class="stat-desc">Campuses</p>
            </div>

            <div class="stat-item">
                <div class="gradient-number">~<span class="count">400</span></div>
                <p class="stat-desc">Active customers</p>
            </div>

            <div class="stat-item">
                <span class="currency-label">Rs</span>
                <div class="gradient-number"><span class="count">3642</span></div>
                <span class="stat-unit">Cr</span>
                <p class="stat-desc">(430 Mn USD) Revenue from operations in FY25</p>
            </div>

            <div class="stat-item">
                <span class="currency-label">Rs</span>
                <div class="gradient-number"><span class="count">475</span></div>
                <span class="stat-unit">Cr</span>
                <p class="stat-desc">Profit After Tax in FY25#</p>
            </div>

            <div class="stat-item">
                <div class="gradient-number"><span class="count">2.5</span>+</div>
                <span class="stat-unit">Mn sq. ft.</span>
                <p class="stat-desc">of world-class R&D and manufacturing</p>
            </div>

            <div class="stat-item">
                <div class="gradient-number"><span class="count">5641</span></div>
                <p class="stat-desc">Scientists</p>
            </div>
        </div>

        <div class="mt-5 text-center text-md-start">
            <a href="#" class="custom-btn">Read More</a>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Count-up animation with GSAP ScrollTrigger
        const statCounters = document.querySelectorAll("#syn-stats-section .count");
        
        statCounters.forEach(counter => {
            const finalVal = parseFloat(counter.innerText);
            
            gsap.fromTo(counter, 
                { innerText: 0 }, 
                { 
                    innerText: finalVal, 
                    duration: 2.5, 
                    ease: "power2.out",
                    snap: { innerText: finalVal % 1 === 0 ? 1 : 0.1 },
                    scrollTrigger: {
                        trigger: counter,
                        start: "top 90%",
                        once: true // Animation happens only once
                    }
                }
            );
        });
    });
</script>
@endpush