@push('styles')
<style>
    /* Scoped Styles for Business Section */
    #syn-biz-section {
        width: 100%;
        margin-top:20px;
        background: linear-gradient(91deg, #F78D2F 0%, #A0609E 50%, #004172 100%); /* Same 91deg gradient */
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #fff;
        font-family: 'Myriad Pro';
    }
    #syn-biz-section .biz-row {
        padding: 40px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.4);
        cursor: pointer;
        transition: background 0.3s ease;
    }

    #syn-biz-section .biz-row:last-child {
        border-bottom: none;
    }

    #syn-biz-section .badge-label {
        background: #fff;
        color: #333;
        padding: 5px 15px;
        font-weight: 600;
        font-size: 0.9rem;
        display: inline-block;
        margin-bottom: 15px;
    }

    #syn-biz-section .biz-title {
        font-size: 2.5rem;
        
        font-weight: 700;
        margin: 0;
        transition: transform 0.4s ease;
    }

    /* Hidden Content Container */
    #syn-biz-section .hidden-content {
        height: 0;
        opacity: 0;
        line-height:20px;
        overflow: hidden;
        transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
   
    #syn-biz-section .custom-btn {
        border-left: 3px solid var(--syn-blue); 
        color: white; 
        padding: 6px 16px; 
    }
    #syn-biz-section .custom-btn::before {
        background-color: var(--syn-blue);
    }
    #syn-biz-section .custom-btn:hover::before { width: 100%; }

    /* Hover State Logic */
    #syn-biz-section .biz-row:hover .hidden-content {
        height: auto;
        opacity: 1;
        margin-top: 20px;
        padding-bottom: 10px;
    }


    @media (max-width: 768px) {
        #syn-biz-section { padding: 60px 0; }
        #syn-biz-section .biz-title { font-size: 2.5rem; }
        #syn-biz-section .hidden-content { height: auto; opacity: 1; } 
    }
</style>
@endpush

<section id="syn-biz-section">
    <div class="container">
        
        <div class="tt">
            <div class="biz-row gsap-biz-reveal">
                <span class="badge-label">Strategic Priorities</span>
                <h3 class="biz-title">Research Services</h3>
                
                <div class="hidden-content">
                    <p style="max-width: 800px; font-size: 1.1rem; opacity: 0.9;">
                        Provide an integrated end-to-end therapeutic discovery services encompassing drug discovery, 
                        pre-clinical and clinical development capabilities across technologies, platforms, 
                        disciplines, disease areas and therapeutic modalities.
                    </p>
                    <a href="#" class="custom-btn">Read More</a>
                </div>
            </div>

            <div class="biz-row gsap-biz-reveal">
                <span class="badge-label">Our Value Creation Model</span>
                <h3 class="biz-title">Our Business</h3>
                
                <div class="hidden-content">
                    <p style="max-width: 800px; font-size: 1.1rem; opacity: 0.9;">
                    We are an integrated research, development and manufacturing organization providing scientific services from early discovery to commercial supply. We serve a wide range of industrial sectors including pharmaceutical, biotechnology, nutrition, animal health, consumer goods and specialty chemical companies.
                    </p>
                    <a href="#" class="custom-btn">Read More</a>
                </div>
            </div>
        </div>

    </div>
</section>