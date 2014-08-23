@extends('templates.default')

@section('header-bar')
@include('templates.partials.header-bar', array('heading' => 'Privacy Policy'))
@stop

@section('content')

<div class="container">

        <h4>INTRODUCTION</h4>
        <p>At Ensuites On Tow Franchising Pty Limited, we recognise the importance of protecting the privacy of the personal information we collect from our customers and prospective customers. We are committed to and bound by the National Privacy Principles which support the Privacy Act 1988 (Commonwealth).</p>
        <p>This statement discloses what information we collect and how we use, disclose and store your personal information, as well as how you can contact us and get access to your information. This document and our privacy policy applies to all your dealings with us whether you are dealing directly with Ensuites On Tow Franchising Head Office or through any of our Franchisees or agents by direct contact, telephone, mail, or our internet web-site.</p>
        <h4>WHAT PERSONAL INFORMATION DO WE COLLECT AND HOW DO WE COLLECT IT?</h4>
        <p>We may collect your personal information from our hire agreements, our credit forms, or what you tell us or show us when you telephone us, visit our franchisees (or have them visit you), or browse on our web-site. When you are making enquiries about our products and services, we will usually ask you for your name, your contact details including your phone number, address, and e-mail address. This helps us to contact you to answer your enquiries.</p>
        <p>When you hire any equipment from us or engage and of our services, we will request that you supply us with some or all of the following:</p>
        <ul>
            <li>Your name, street address, e-mail address, telephone, mobile and facsimile numbers, your company or business name to identify you, and for us to contact you</li>
            <li>We may require details of your Driver’s License, or a photocopy or digital image of it , so that we can confirm your identity, your residence, and (where applicable) your legal right to drive towing one of our units (for some equipment other than vehicles, we may also require details of relevant licenses or operator competency certificates).</li>
            <li>Your credit card details for the purpose of paying for your hires and/or purchases from us</li>
            <li>If you apply for a credit account with us, we may ask for the above information, as well as:
                <ul>
                    <li>Your bank account details</li>
                    <li>Trade references to allow us to assess your background; and</li>
                    <li>If you are a company, name and address details of all directors of the company</li>
                </ul>
            </li>
        </ul>
        <p>We do not seek to collect any sensitive information such as ethnic background, political beliefs etc.</p>
        <p>When you visit our website, we may collect the above information from you if you provide it to us. We may also collect logging information about web site activities (e.g. date and time of visits, the number of pages viewed, your operating system etc.) using "cookies", as commonly used by most other web-sites. A cookie is a packet of information that allows the hosting computer to identify and interact with you. The cookies do not identify any personal information but may provide us with statistical information that we can use to analyse our services. If your computer does not allow the placement of cookies, your navigation on our website may be restricted.</p>
        <h4>HOW WE USE YOUR PERSONAL INFORMATION</h4>
        <ul>
            <li>We use information about you to help us respond to your enquiries, provide you with the equipment you wish to hire, the services you wish to engage or the supply of other products and services.</li>
            <li>We use information about you to help us to identify other products and services that might be beneficial to you, and to inform you about them and other items of interest.</li>
            <li>We use information about you to help us with our internal accounting and administration, and to protect you and us from fraud.<br></li>
        </ul>
        <p>Some of the personal information we collect is essential for us to be able to accurately identify who is using our services. Other types of personal information we collect help us to profile who is using our services and what their reasons or interests are.</p>
        <p>We assume that we have your consent to use your personal information for the above purposes, in particular, for the purposes of sending information to you about our products and services, unless you advise us not to. If you do not want us to contact you or send you information, please let us know.</p>
        <h4>DISCLOSURE OF PERSONAL INFORMATION TO THIRD PARTIES</h4>
        <p>As a general principle, Ensuites On Tow will not provide any unrelated party with any personal information it has collected about you. Except ions may occur where:</p>
        <ul>
            <li>Ensuites On Tow believes in good faith that you have consented;</li>
            <li>We use external service providers e.g. mailing houses to mail promotional material to you and other parties.</li>
            <li>The information will be provided to our external service providers on a confidential basis for the purposes of our business only, and we will take reasonable steps to ensure that it is dealt with according to the same high standards as we use;</li>
            <li>A law enforcement agency, or other government agency, is exercising its legal authority and has asked Ensuites On Tow to provide access to that information;</li>
            <li>You are in default of a Hire Agreement or other contractual commitments to us, in which case we may need to release your details and the relevant history of your transactions with us to our legal advisers, debt collection agencies, credit reference bodies, or industry associations.<br></li>
        </ul>
        <p>Other than the purposes above, we will not disclose your information unless with your consent, or as required or authorised by law.</p>
        <h4>GAINING ACCESS TO YOUR PERSONAL INFORMATION</h4>
        <p>You have a right to access the personal information we store about you. If you wish to access your information, please write to us (our contact details are at the end of this statement). Subject to verification of your identity, we will provide you with access to any information we are holding about you as soon as practicable.</p>
        <p>We may charge you the reasonable costs of processing your request.</p>
        <h4>KEEPING YOUR PERSONAL INFORMATION ACCURATE AND UP TO DATE</h4>
        <p>If you find that the information we hold about you is inaccurate, incomplete, or out of date, please let us know, and we will take reasonable steps to correct it.</p>
        <h4>DEALING WITH US</h4>
        <p>You can refuse to provide us with your personal information if you are making general enquiries about our products and services. However, we may not be able to answer your requests in some cases, or conduct business with you, if you refuse to disclose the personal information that we require. If you have a complaint about a breach of your privacy or you have any query on how your personal information is collected or used please forward your request , complaint or query to the address below. We will respond to your query or complaint as soon as possible.</p>
        <h4>CHANGES TO THIS PRIVACY STATEMENT</h4>
        <p>We may amend this Privacy Statement as our business requirements or the law changes. Any changes to this Privacy Statement will be updated on www.ensuitesontow.com.au so please visit this website periodically to ensure that you have our most current privacy statement.</p>
        <h4>OUR CONTACT DETAILS</h4>
        <p>
            Ensuites On Tow Franchising Pty Limited<br>{{ Config::get('ensuites.contact.address') }}
            <br>Email: <a href="mailto:{{ Config::get('ensuites.contact.email') }}">{{ Config::get('ensuites.contact.email') }}</a>
        </p>

</div>
@stop