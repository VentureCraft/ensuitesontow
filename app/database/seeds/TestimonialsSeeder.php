<?php

class TestimonialsSeeder extends Seeder {

    public function run()
    {
        DB::table('testimonials')->delete();
        DB::table('testimonialcategories')->delete();

        $planners_cat = Testimonialcategory::create(array('name' => 'Event Planners'));
        $home_renovators = Testimonialcategory::create(array('name' => 'Home Renovators'));

        Testimonial::create(
            array(
                'testimonialcategory_id' => $planners_cat->id,
                'name' => 'R. Freeland',
                'location' => 'Nutfield',
                'content' => 'One of the most professional services I have enjoyed. As the organiser of the “Earth Building Association of Australia’s annual conference, I had up to 40 people for meals and 16 for accommodation. The service provided by Ensuites On Tow representatives was exceptional. Delivery, pickup and the excellent unit along with the service provided helped with the success of the conference. Highly recommended'
            )
        );



        Testimonial::create(
            array(
                'testimonialcategory_id' => $home_renovators->id,
                'name' => 'Tiziana',
                'location' => 'Victoria',
                'content' => 'Thank you for your time and effort in helping our renovation. I am happy to say that <strong>your bathroom did exceed my expectations and was lovely and clean with no smells which, I was most impressed about.</strong>'
            )
        );

        Testimonial::create(
            array(
                'testimonialcategory_id' => $home_renovators->id,
                'name' => 'S. & R. Dickson',
                'location' => 'Mt Waverly',
                'content' => 'Thank you Wayne and Ensuites On Tow. The bathroom was beautifulu decked out and spotlessly clean, it has been a <strong>"Life saver"</strong> We have been completely satisfied and <strong>we will use Ensuites On Tow again</strong>'
            )
        );

        Testimonial::create(
            array(
                'testimonialcategory_id' => $home_renovators->id,
                'name' => 'J. Cooper',
                'location' => 'Labertouche VIC',
                'content' => 'We were very happy with the level of service and quality of the ensuite. Would recommend Ensuites On Tow to anyone. <strong>It made our renovation a pleasant experience. Thank you!</strong>'
            )
        );

        Testimonial::create(
            array(
                'testimonialcategory_id' => $home_renovators->id,
                'name' => 'I. Karazisis',
                'location' => 'Bentleigh East',
                'content' => 'I wish all companies dealt with their customers with the <strong>reliability, care and respect</strong> that customers expect and appreciate. Many thanks'
            )
        );

        Testimonial::create(
            array(
                'testimonialcategory_id' => $home_renovators->id,
                'name' => 'C. Martin',
                'location' => 'Bentleigh',
                'content' => 'The process of renovating my only bathroom with a family of four during winter was made so easy thanks to Ensuites On Tow. Very happy with the suite, was able to extend the hire twice with <strong>no trouble at all</strong>. Have already passed brochures to two friends renovating soon. Thank you'
            )
        );

        Testimonial::create(
            array(
                'testimonialcategory_id' => $home_renovators->id,
                'name' => 'R. McMahon',
                'location' => 'Darraweit Guim',
                'content' => 'Having a bathroom with hot water, shower & toilet while living in a garage has been a <strong>blessing</strong>. The operators Brent & Amanda have gone out f their way to help us through a very difficult time after we lost our house in a fire. With out the unit it would have been very difficult to stay on the block.'
            )
        );

        Testimonial::create(
            array(
                'testimonialcategory_id' => $home_renovators->id,
                'name' => 'C. McNeil',
                'location' => 'Kew',
                'content' => 'The Ensuite On Tow team were amazing, they worked to ensure we could use the ensuite for the duration of our bathroom renovation despite local council challenges and difficult access (Single fronted, no driveway and low clearance at the rear of the property) <strong>Nothing was too much trouble</strong> and Brent did an amazing job working with us to find a solution. We eventually had the ensuite craned in - an ideal solution. We could not have survived the renovation without our Ensuite On Tow. Many thanks to the team, would highly recommend Ensuites On Tow'
            )
        );

        Testimonial::create(
            array(
                'testimonialcategory_id' => $home_renovators->id,
                'name' => 'Graeme',
                'location' => 'N.S.W.',
                'content' => 'Congratulations on providing a great product and service with Ensuites On Tow. Having used one for 2 weeks during bathroom renovations I must say that it proved to be a brilliant and cost effective solution. <strong>The ensuite performed flawlessly</strong>, the installation was taken care of with no special requirements and <strong>the ensuite served the needs of my family easily</strong>.'
            )
        );

        Testimonial::create(
            array(
                'testimonialcategory_id' => $home_renovators->id,
                'name' => 'Mrs N. Turner',
                'location' => 'Dandenong South',
                'content' => '<strong>A very professional service which could not be faulted</strong> for quality and service! The unit was spotless throughout and the staff very pleasant and happy to oblige. Will have no hesitation to recommend this service to others.'
            )
        );

        Testimonial::create(
            array(
                'testimonialcategory_id' => $home_renovators->id,
                'name' => 'D. Mills',
                'location' => 'Seymour',
                'content' => 'I would use your service again and again, <strong>an absolutely painless and cost effective process</strong>.'
            )
        );


    }
}