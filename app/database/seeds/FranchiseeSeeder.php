<?php

class FranchiseeSeeder extends Seeder {

    public function run()
    {

        Franchisee::create(
            array(
                'old_id' => 8,
                'name' => 'Ensuites On Tow',
                'location' => 'Nationwide',
                'email' => 'info@ensuitesontow.com.au',
                'phone' => '1800 ENSUITE (1800 367 848)',
                'direct_phone' => '',
                'url' => 'http://www.ensuitesontow.com.au',
                'image' => '',
                'postcodes' => '',
                'about' => '<p>Please enquire through <strong><a href="/contact">our contact form</a></strong> and we will be in touch with you very shortly to assist where we can.</p>'
            )
        );

        Franchisee::create(
            array(
                'old_id' => 9,
                'name' => 'Peter Coventry',
                'location' => 'ALICE SPRINGS & surrounding district',
                'email' => 'peter.coventry@ensuitesontow.com.au',
                'phone' => '0408 818 488',
                'direct_phone' => '',
                'url' => '',
                'image' => 'peter_coventry.jpg',
                'postcodes' => '|0870|0871|0872|',
                'about' => '<p>I understand that service and professionalism are paramount in business. With that I can not only offer the best temporary bathrooms in Perth, but back it up with high quality service. Whether you need one bathroom or several, whether it be for short, medium or long term please contact us</p>',
                'area_available' => true
            )
        );

        Franchisee::create(
            array(
                'old_id' => 10,
                'name' => 'Brent & Amanda Ali',
                'location' => 'Sunbury Victoria',
                'email' => 'amanda.ali@ensuitesontow.com.au;brent.ali@ensuitesontow.com.au;steve.hare@ensuitesontow.com.au',
                'phone' => '0417 007 879',
                'direct_phone' => '',
                'url' => '',
                'image' => 'brent_and_amanda.jpg',
                'postcodes' => '|3012|3045|3335|3337|3427|3428|3429|3431|3437|3438|3440|3043|3042|3038|3013|3019|3020|3021|3022|3023|3033|3034|3036|3037|3441|',
                'about' => '<p>Having provided our services for over 3 years we know what it takes to ensure you are happy with our products and our service. Our long list of customers feedback highlights we’re doing all the right things, here’s just one:</p>
<p><i>"Thank you for your time and effort, Brent was very patient and the installation went well.</i></p>
<p><i>I am happy to say that the bathroom did exceed my expectations and is lovely and clean and has no smells which I am most impressed about"</i></p>
<em>T. Wilson - Melbourne.</em></p>',
                'area_available' => true
            )
        );

        Franchisee::create(
            array(
                'old_id' => 11,
                'name' => 'Peter Coventry',
                'location' => 'PERTH & most regional W.A.',
                'email' => 'peter.coventry@ensuitesontow.com.au',
                'phone' => '0408 818 488',
                'direct_phone' => '',
                'url' => '',
                'image' => 'peter_coventry.jpg',
                'postcodes' => '|6000|',
                'about' => '<p>I understand that service and professionalism are paramount in business. With that I can not only offer the best temporary bathrooms in Perth, but back it up with high quality service. Whether you need one bathroom or several, whether it be for short, medium or long term please contact us</p>',
                'area_available' => true
            )
        );

        Franchisee::create(
            array(
                'old_id' => 13,
                'name' => 'Wayne North',
                'location' => 'Melbourne, La Trobe Valley, Gippsland',
                'email' => 'wayne.north@ensuitesontow.com.au',
                'phone' => '0418 533 593',
                'direct_phone' => '',
                'url' => '',
                'image' => 'wayne_north.jpg',
                'postcodes' => '|3781|3782|3783|3803|3804|3805|3806|3807|3808|3809|3810|3812|3813|3814|3815|3816|3818|3820|3821|3822|3823|3824|3825|3831|3835|3840|3844|3871|3922|3923|3925|3945|3946|3950|3951|3953|3954|3956|3957|3958|3959|3960|3976|3978|3979|3981|3984|3987|3988|3990|3991|3992|3995|3996|',
                'about' => '<p>It is important to us that our customers receive the best service possible. We will service hire requirements throughout East Melbourne and South Eastern Victoria. No matter what your requirements are, we hope to be able to help you.</p>'
            )
        );

        Franchisee::create(
            array(
                'old_id' => 15,
                'name' => 'Paul Hermon',
                'location' => 'Yarra Valley and surrounding areas',
                'email' => 'paul.hermon@ensuitesontow.com.au',
                'phone' => '0409 858 372',
                'direct_phone' => '',
                'url' => '',
                'image' => 'Paul_Hermon.jpg',
                'postcodes' => '!3116|3136|3137|3138|3139|3140|3154|3159|3765|3766|3767|3770|3785|3786|3787|3788|3789|3791|3792|3793|3795|3796|3797|',
                'about' => '<p>No matter weather you\'re renovating, having that special function or corporate event, we have all your temporary bathroom requirements covered. Our award winning product and service guarantee ensures you of the best possible outcome and we pride ourselves on catering to you every need. Call us today</p>'
            )
        );

        Franchisee::create(
            array(
                'old_id' => 16,
                'name' => 'Ashley & Lisa Cooper',
                'location' => 'CAIRNS & surrounding region',
                'email' => 'lisa.cooper@ensuitesontow.com.au',
                'phone' => '0488 388 692',
                'direct_phone' => '',
                'url' => '',
                'image' => 'ashley_lisa_cooper.jpg',
                'postcodes' => '|4860|4861|4865|4868|4869|4870|4872|4877|4878|4879|4880|4881|4882|4883|4884|4885|4886|4887|4888|',
                'about' => '<p>"Ensuites On Tow Cairns at your service" We will provide you with luxury portable bathrooms during your renovations, corporate events, parties, weddings or any function that requires that prestige touch.  Our bathrooms are an award winning product and Eco friendly for our precious FNQ environment. We are proud to service Cairns and the surrounding regions.</p>'
            )
        );

        $nev = '|';
        for ($i=5000;$i<6000;$i++) {
            $nev .= $i.'|';
        }

        Franchisee::create(
            array(
                'old_id' => 17,
                'name' => 'Nevil Langley',
                'location' => 'Adelaide North',
                'email' => 'nevil.langley@ensuitesontow.com.au',
                'phone' => '0418 823 149',
                'direct_phone' => '',
                'url' => '',
                'image' => 'nevil_langley.jpg',
                'postcodes' => $nev,
                'about' => '<p>We are a family owned business committed to providing excellent customer service covering Adelaide and regional areas. Whether it be a bathroom renovation, wedding, corporate event, party, or just extra guests we can supply you with the best portable bathroom facilities available while guaranteeing a friendly and professional service.</p>'
            )
        );

    }

}