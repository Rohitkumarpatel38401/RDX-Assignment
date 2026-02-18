<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syngene Annual Report 2025</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        :root {
            --syngene-blue: #004a80;
            --syngene-orange: #f2a900;
        }
        body { font-family: 'Arial', sans-serif; overflow-x: hidden; }
        
        /* Header Styling */
        .syngene-header { background: var(--syngene-blue); color: white; padding: 12px 0; }
        .logo { font-weight: bold; font-style: italic; font-size: 24px; }
        
        /* Hero Styling */
        .hero-section { min-height: 85vh; display: flex; align-items: center; position: relative; }
        .text-orange { color: var(--syngene-orange); font-weight: bold; font-size: 1.8rem; }
        .text-blue { color: var(--syngene-blue); font-size: 5rem; font-weight: 900; line-height: 0.9; }
        .border-left-orange { border-left: 3px solid var(--syngene-orange); padding-left: 15px; }
        
        .action-link { 
            text-decoration: none; color: var(--syngene-blue); 
            font-weight: bold; border-left: 1px solid #ccc; 
            padding-left: 15px; margin-right: 20px; 
        }

        /* Abstract Graphic Animation State */
        .abstract-graphic { max-width: 100%; opacity: 0; transform: scale(0.8); }
    </style>
</head>
<body>

    @include('sections.hero')
    @include('sections.stats')
    @include('sections.about')

    @include('sections.message-box', [
        'id' => 'chairperson',
        'reverse' => false,
        'image' => 'images/chairperson.png',
        'title' => '<span style="color:#a6a6a6">Message from our</span> <strong>Chairperson</strong>',
        'message' => 'At Syngene, our purpose goes beyond science.We are building a resilient, inclusive, and values-driven organization where people thrive and innovation flourishes. FY25 was a year of alignment between vision and action, with investments in wellbeing, equity, and sustainability reinforcing our commitment to long-term value creation for all stakeholders.',
        'name' => 'Kiran Mazumdar-Shaw'
    ])

    @include('sections.message-box', [
        'id' => 'ceo',
        'reverse' => false, 
        'image' => 'images/ceo.png',
        'title' => '<span style="color:#a6a6a6">Message from our</span><br> <strong>Managing Director & CEO</strong>',
        'message' => 'Syngene is well positioned for accelerating growth and transformation, with the potential to become a leader in serving the global biopharma and wider life sciences outsourcing market models.',
        'name' => 'Peter Bains'
    ])

    @include('sections.message-box', [
        'id' => 'cfo',
        'reverse' => false,
        'image' => 'images/cfo.png',
        'title' => '<span style="color:#a6a6a6">Message from our</span><br>  <strong>Chief Financial Officer</strong>',
        'message' => 'Despite sectoral headwinds, Syngene delivered resilient performance with strong cash generation of Rs 1,168 Cr, fully funding our USD 85 Mn capex including a strategic U.S. biologics facility acquisition, thus positioning us for long-term growth in the high-potential CRDMO market.',
        'name' => 'Deepak Jain'
    ])

    @include('sections.business')

    <!-- @include('sections.csr_workforce', [
        'id' => 'csr',
        'reverse' => false,
        'title' => 'Corporate Social Responsibility',
        'image' => 'images/csr-team.png',
        'description' => 'At Syngene, we drive meaningful change through CSR initiatives in Healthcare, Science Education, Research and Scholarships...'
    ])

    @include('sections.csr_workforce', [
        'id' => 'workforce',
        'reverse' => true, /* Image will be on the left */
        'title' => 'Our Workforce',
        'image' => 'images/workforce.png',
        'description' => 'At Syngene, we believe that investing in our people is fundamental to achieving scientific excellence...'
    ]) -->

    @include('sections.vertical-tabs')
    @include('sections.case-studies')
    @include('sections.download-center')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    @stack('scripts')
</body>
</html>