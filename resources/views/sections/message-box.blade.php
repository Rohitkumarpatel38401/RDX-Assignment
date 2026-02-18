@push('styles')
<style>
    #syn-msg-section-{{ $id }} {
        background-color: #fff;
        padding-top:60px;
        overflow: hidden;
    }

    #syn-msg-section-{{ $id }} .msg-container {
        display: flex;
        align-items: stretch;
        flex-direction: {{ $reverse ? 'row-reverse' : 'row' }};
    }

    #syn-msg-section-{{ $id }} .person-img-wrapper {
        flex: 0 0 45%;
        padding: 20px; 
    }




    #syn-msg-section-{{ $id }} .person-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 20px; /* Rounded corners from screenshot */
    }

    #syn-msg-section-{{ $id }} .msg-content-box {
        background-color: #004172; /* Syngene Dark Blue */
        color: #fff;
        padding: clamp(30px, 5vw, 60px);
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    #syn-msg-section-{{ $id }} .msg-content-box .msg-header{
        color:#FFFFFF;
    }
 
    /* Inner Border Logic - Sirf Left aur Bottom */
    #syn-msg-section-{{ $id }} .inner-border {
        border-top: 1.5px solid rgba(255,255,255,0.3);
        border-right: 1.5px solid rgba(255,255,255,0.3);
        border-bottom: 1.5px solid rgba(255,255,255,0.3);
        padding: 40px 20px 20px 0px; 
        position: relative;
    }

    /* Top Horizontal small line */
    #syn-msg-section-{{ $id }} .inner-border::before {
        content: "";
        position: absolute;
        top: 0; left: 0; width: 60px;
        /* border-top: 1px solid rgba(255,255,255,0.3); */
    }

    /* Icon exact positioning */
    #syn-msg-section-{{ $id }} .msg-icon {
        width: 50px;
        position: absolute;
        top: -25px; /* Border line ke upar half-overlap karne ke liye */
        left: -12px;
        z-index: 3;
    }

    #syn-msg-section-{{ $id }} .person-name {
        color: #f2a900; /* Syngene Gold */
        font-weight: 700;
        font-size: 1.3rem;
        margin-top: 25px;
        display: block;
    }

    /* Mobile Handling */
    @media (max-width: 991px) {
        #syn-msg-section-{{ $id }} .msg-container {
            flex-direction: column !important;
        }
        #syn-msg-section-{{ $id }} .person-img-wrapper {
            flex: 0 0 100%;
            padding:0px;
            margin-bottom: -15px;
            z-index: 9;
        }
    }
    
</style>
@endpush

<section id="syn-msg-section-{{ $id }}">
    <div class="container">
        <div class="msg-container gap-lg-5 ">
            <div class="person-img-wrapper gsap-reveal-img-{{ $id }} ">
                <img src="{{ asset($image) }}" alt="{{ $name }}" class="person-img">
            </div>

            <div class="msg-content-box gsap-reveal-content-{{ $id }}">
                <h2 class="msg-header" style="font-weight: 300; margin-bottom: 30px;">{!! $title !!}</h2>
                
                <div class="inner-border">
                    <img src="{{ asset('images/icons/msg-icon.png') }}" class="msg-icon" alt="icon">
                    
                    <p class="msg-text" style="font-size: 1.05rem; opacity: 0.95; line-height: 1.6; margin-bottom: 0;">
                        {{ $message }}
                    </p>
                </div>
                
                <span class="person-name">{{ $name }}</span>

                <div class="mt-2">
                    <a href="#" class="custom-btn" style="color: #fff; border-left-color: #f2a900; text-decoration: none; padding: 6px 16px">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>