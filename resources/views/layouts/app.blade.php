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

    @stack('styles')

</head>
<body>

    @yield('page_content')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    @stack('scripts')
</body>
</html>
