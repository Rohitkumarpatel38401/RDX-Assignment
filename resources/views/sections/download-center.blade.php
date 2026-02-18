
@push('styles')
<style>
        #syn-main-footer {
            padding: 80px 0 0 0;
            background-color: #ffffff;
            font-family: 'Open Sans', sans-serif;
        }

        .center-title {
            text-align: center;
            font-size: 2.4rem;
            color: var(--syn-blue);
            font-weight: 700;
            margin-bottom: 50px;
        }

        /* --- Download Center Grid --- */
        .download-box {
            max-width: 1200px;
            margin: 0 auto 100px auto;
            background-color: #f1f7fc; /* Light Blue Tint */
            padding: 50px 40px;
            border-radius: 4px;
        }

        .download-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px 30px;
            position: relative;
        }

        /* Separator lines for grid rows */
        .dl-item {
            position: relative;
            display: flex;
            align-items: stretch;
            text-decoration: none;
            padding: 10px 0;
        }

        .v-bar {
            width: 4px;
            background-color: var(--syn-blue);
            margin-right: 18px;
            flex-shrink: 0;
        }

        .dl-info {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .dl-info .title {
            font-size: 1rem;
            font-weight: 600;
            color: #555;
            margin-bottom: 5px;
            transition: color 0.3s ease;
        }

        .dl-info .link {
            font-size: 0.9rem;
            font-weight: 700;
            color: var(--syn-blue);
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Hover Effect: Only Title turns Orange */
        .dl-item:hover .title {
            color: var(--syn-orange);
        }
        
        .dl-item:hover .link span {
            transform: translateX(5px);
            transition: transform 0.3s;
        }

        /* --- Final Bottom Bar --- */
        .footer-bottom {
            background-color: #004a80; /* Corporate Dark Blue */
            padding: 15px 0;
            color: #ffffff;
            font-size: 0.85rem;
        }

        .footer-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .social-links {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .social-links a {
            color: #ffffff;
            font-size: 1.1rem;
            text-decoration: none;
            transition: opacity 0.3s;
        }

        .social-links a:hover { opacity: 0.7; }

        @media (max-width: 991px) {
            .download-grid { grid-template-columns: 1fr; }
            .footer-container { flex-direction: column; gap: 15px; text-align: center; }
        }
    </style>
@endpush
<footer id="syn-main-footer">
   

    <div class="container">
        <h2 class="center-title">Download Center</h2>
        <div class="download-box">
            <div class="download-grid">
                <a href="#" class="dl-item">
                    <div class="v-bar"></div>
                    <div class="dl-info">
                        <span class="title">Board Report</span>
                        <span class="link">Download <span>→</span></span>
                    </div>
                </a>
                <a href="#" class="dl-item">
                    <div class="v-bar"></div>
                    <div class="dl-info">
                        <span class="title" style="color: var(--syn-orange)">Standalone Financial Statements</span>
                        <span class="link">Download <span>→</span></span>
                    </div>
                </a>
                <a href="#" class="dl-item">
                    <div class="v-bar"></div>
                    <div class="dl-info">
                        <span class="title">Corporate Governance Report</span>
                        <span class="link">Download <span>→</span></span>
                    </div>
                </a>
                <a href="#" class="dl-item">
                    <div class="v-bar"></div>
                    <div class="dl-info">
                        <span class="title">Consolidated Financial Statements</span>
                        <span class="link">Download <span>→</span></span>
                    </div>
                </a>
                <a href="#" class="dl-item">
                    <div class="v-bar"></div>
                    <div class="dl-info">
                        <span class="title">Business Responsibility and Sustainability Report</span>
                        <span class="link">Download <span>→</span></span>
                    </div>
                </a>
                <a href="#" class="dl-item">
                    <div class="v-bar"></div>
                    <div class="dl-info">
                        <span class="title">Glossary</span>
                        <span class="link">Download <span>→</span></span>
                    </div>
                </a>
                <a href="#" class="dl-item">
                    <div class="v-bar"></div>
                    <div class="dl-info">
                        <span class="title">Management Discussion and Analysis</span>
                        <span class="link">Download <span>→</span></span>
                    </div>
                </a>
                <a href="#" class="dl-item">
                    <div class="v-bar"></div>
                    <div class="dl-info">
                        <span class="title">AGM Notice</span>
                        <span class="link">Download <span>→</span></span>
                    </div>
                </a>
                <a href="#" class="dl-item">
                    <div class="v-bar"></div>
                    <div class="dl-info">
                        <span class="title">Annual Report 2024</span>
                        <span class="link">Download <span>→</span></span>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="footer-container">
            <div class="copyright">
                © 2024 Syngene International. All Rights Reserved
            </div>
            
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-x-twitter"></i></a>
            </div>

            <div class="developer">
                Design & Developed by RDX Digital
            </div>
        </div>
    </div>
</footer>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">