<?php (defined('BASEPATH')) or exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
require dirname(__FILE__) . '/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link    http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright   Copyright (c) 2015 Wiredesignz
 * @version     5.5
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/
class MX_Controller
{
    public $autoload = array();
    public $comp;
    public $data;
    public function __construct()
    {
        $class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
        log_message('debug', $class . " MX_Controller Initialized");
        Modules::$registry[strtolower($class)] = $this;

        /* copy a loader instance and initialize */
        $this->load = clone load_class('Loader');
        $this->load->initialize($this);

        $this->comp['phone'] = '+91 8260207030';
        $this->comp['phonehtml'] = 'href="tel:+918260207030"';
        $this->comp['supportmail'] = 'info@lakshyamovepackers.com';
        $this->comp['replyToMail'] = 'info@lakshyamovepackers.com';
        $this->comp['mail'] = 'info@lakshyamovepackers.com';    
        $this->comp['mailhtml'] = "mailto:info@lakshyamovepackers.com";
        $this->comp['company3'] = 'Lakshya Packers & Movers';
        $this->comp['companydomain'] = 'mycompany.com';

        $this->comp['facebookhtml'] = "https://www.facebook.com/share/1CToXcfXmp/";
        $this->comp['youtubehtml'] = "https://youtube.com/@lakshyapackersmovers?si=zhaOq0siyO7LHbRR";
        $this->comp['instagramhtml'] = "https://www.instagram.com/_lakshya_packers_movers?igsh=MXVsc29laHZzYTg3MA==";
        $this->comp['twitterhtml'] = "https://x.com/LakshyaPackers";
        $this->comp['whatsapphtml'] = "https://wa.me/918260207030";

        $this->comp['address'] = "Ground floor of Suchana Apartment, Delhi Road, Dankuni, Hooghly 712311";
        $this->comp['address1'] = "Ground floor of Suchana Apartment, Delhi Road";
        $this->comp['address2'] = "Dankuni, Hooghly 712311";
        $this->comp['addressRegion'] = "Hooghly";
        $this->comp['postalCode'] = "712311";
        $this->comp['companystate'] = "West Bengal";
        $this->comp['themeColor'] = "#0a4ebd";

        $this->comp['experience'] = "5+";
        $this->comp['startYear'] = "2021";

        $this->comp['happyClients'] = "500+";
        $this->comp['yearsExperience'] = "5+";
        $this->comp['secureShifting'] = "100%";
        $this->comp['citiesCovered'] = "50+";
        $this->comp['statesCovered'] = "10+";

        $this->comp['sku'] = "PM28957";
        $this->comp['mpn'] = "SPM28957";
        // Review
        $this->comp['ratingValue'] = "4.6";
        $this->comp['ratingCount'] = "39850";
        $this->comp['datePublished'] = "15 May, 2026";
        $this->comp['reviewBody'] = "Best Packing And Moving Company in India.";
        $this->comp['reviewperson'] = "Arshad Ali";

        /* autoload module items */
        $this->load->_autoloader($this->autoload);
    }

    public function __get($class)
    {
        return CI::$APP->$class;
    }
}
