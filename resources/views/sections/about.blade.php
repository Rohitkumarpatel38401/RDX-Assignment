<style>
    /* Scoped Styles for About Section */
    #syn-about-section {
        position: relative;
        width: 100%;
        font-family:'Myriad Pro, Semibold';
        display: flex;
        align-items: center;
        justify-content: center;
        
        background-image: url('{{ asset("images/about-bg.png") }}');
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 100% 100%; 
        
        padding: 80px 0;
        overflow: hidden;
    }

    /* Card Overlay */
    #syn-about-section .about-card {
        background: rgba(255, 255, 255, 0.6); /* Slightly more opaque for better readability */
        backdrop-filter: blur(3px);
        -webkit-backdrop-filter: blur(10px);
        padding: clamp(30px, 5vw, 60px);
        max-width: 750px;
        width: 90%;
        border-radius: 4px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        z-index: 2;
    }

    #syn-about-section .sub-title {
        font-size: 1rem;
        color: #363636;
        /* margin-bottom: 15px; */
        display: block;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    #syn-about-section .main-title {
        font-size: 2rem;
        color: #363636;
        font-weight: 600;
        line-height: 1.2;
        /* margin-bottom: 25px; */
    }

    #syn-about-section .about-desc {
        font-size: 1.1rem;
        color: #004172; 
        line-height: 1.6;
        /* margin-bottom: 35px; */
    }

    /* Responsiveness */
    @media (max-width: 991px) {
        #syn-about-section {
            background-size: cover; 
            padding: 60px 0;
        }
    }

    @media (max-width: 768px) {
        #syn-about-section {
            text-align: center;
        }
        #syn-about-section .about-card {
            width: 95%;
            padding: 40px 20px;
        }
    }
</style>

<section id="syn-about-section">
    <div class="container d-flex justify-content-center">
        <div class="about-card gsap-about-reveal">
            <span class="sub-title">About Syngene</span>
            <h2 class="main-title">
                Driving Scientific Innovation <br class="d-none d-md-block"> 
                with Service, Quality and Excellence
            </h2>
            <p class="about-desc">
                We combine cutting-edge science with a deep understanding of customer needs 
                to drive innovation. Our commitment to service, quality and excellence is 
                embedded in every aspect of our operations, fostering trust, confidentiality, and 
                seamless collaboration.
            </p>
            
            <div class="d-inline-block">
                <a href="#" class="custom-btn">Read More</a>
            </div>
        </div>
    </div>
</section>