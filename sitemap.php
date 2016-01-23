<?php
header("Content-type: text/xml");
include('includes/config.php');
echo'<?xml version=\'1.0\' encoding=\'UTF-8\'?>';
echo'   <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';

/**
	sitemap.php for lead_template
**/

?>

<url>
       <loc>http://<?php echo $domain?>/</loc>
       <lastmod>2013-09-16T07:13:36+00:00</lastmod>
       <changefreq>daily</changefreq>
       <priority>1.0000</priority>
  </url>
   <url>
       <loc>http://<?php echo $domain?>/about</loc>
       <lastmod>2013-09-16T07:13:36+00:00</lastmod>
       <changefreq>daily</changefreq>
       <priority>0.8000</priority>
  </url>
  <url>
       <loc>http://<?php echo $domain?>/contact</loc>
       <lastmod>2013-09-16T07:13:36+00:00</lastmod>
       <changefreq>daily</changefreq>
       <priority>0.8000</priority>
  </url>
  
  <url>
       <loc>http://<?php echo $domain?>/staffing</loc>
       <lastmod>2013-09-16T07:13:36+00:00</lastmod>
       <changefreq>daily</changefreq>
       <priority>0.8000</priority>
  </url>
  <url>
       <loc>http://<?php echo $domain?>/terms</loc>
       <lastmod>2013-09-16T07:13:36+00:00</lastmod>
       <changefreq>daily</changefreq>
       <priority>0.8000</priority>
  </url>
  <url>
       <loc>http://<?php echo $domain?>/privacy</loc>
       <lastmod>2013-09-16T07:13:36+00:00</lastmod>
       <changefreq>daily</changefreq>
       <priority>0.8000</priority>
  </url>
  <url>
       <loc>http://<?php echo $domain?>/partners</loc>
       <lastmod>2013-09-16T07:13:36+00:00</lastmod>
       <changefreq>daily</changefreq>
       <priority>0.8000</priority>
  </url>
  <url>
       <loc>http://<?php echo $domain?>/referral</loc>
       <lastmod>2013-09-16T07:13:36+00:00</lastmod>
       <changefreq>daily</changefreq>
       <priority>0.8000</priority>
  </url>
   <url>
       <loc>http://<?php echo $domain?>/fund</loc>
       <lastmod>2013-09-16T07:13:36+00:00</lastmod>
       <changefreq>daily</changefreq>
       <priority>0.8000</priority>
  </url>
   <url>
       <loc>http://<?php echo $domain?>/developers</loc>
       <lastmod>2013-09-16T07:13:36+00:00</lastmod>
       <changefreq>daily</changefreq>
       <priority>0.8000</priority>
  </url>
</urlset>