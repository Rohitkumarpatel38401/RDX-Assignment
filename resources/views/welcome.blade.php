@extends('layouts.app')

@section('page_content')
    

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


@endsection