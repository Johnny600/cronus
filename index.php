<?php

// ************************************************************************

// *                                              

// * SYS_CRONUS & Ntobi Template System - Written By David Mabaso    
// * Copyright (c) SIDL Ltd. All Rights Reserved
// * Release Date: 12th May 2013                                           

// * Version 1.0 STABLE                                                  
// *                                             

// ************************************************************************

// *                                                                      

// * Email:   davidntobeko@gmail.com                                                 
// * Website: http://www.sidl.co.za/                                         

// *                                            

// ************************************************************************

// *                                             

// * This software is furnished under a license and may be used and copied 

// * only  in  accordance  with  the  terms  of such  license and with the 

// * inclusion of the above copyright notice.  This software  or any other 

// * copies thereof may not be provided or otherwise made available to any 

// * other person.                                                          

// * By use of this code you agree to the GPL agreement   

                                                                                              

error_reporting(E_ALL);

ini_set('display_errors', '0');

require('lib/init.php');

//Sets the url for the template.

if (!isset($_GET['page'])) {
    $page         = 'post';
    $_GET['page'] = $page;
}

else
    $page = $_GET['page'];

//Lets Define the template function for the body
function VIEW_page($page)
{
    
    include("pages/$page" . '.tpl');
}

//Lets Start constructing the whole webpage;) Please Note 'head' and 'body' tags are used.
VIEW_page($page);

echo '</body>', "\n";

echo '</html>', "\n";

?>
