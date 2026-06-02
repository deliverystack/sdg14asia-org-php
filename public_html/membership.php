<?php

require_once __DIR__ . '/../includes/functions.php';

$metaJSON = '{
    "title": "Membership",
    "description": "Join SDG14 Asia as a member and help advance the conservation and sustainable use of ocean and marine resources across Asia."
}';

$meta = preprocess_JSON($metaJSON);

include_once __DIR__ . '/../includes/header.php'; 

?>

<main class="content-section">
  <div class="container">
    <header class="section-header">
      <h1 class="page-title">Membership</h1>
      <p class="page-lead">Join SDG14 Asia and become part of a growing network of individuals and organisations committed to the conservation and sustainable use of oceans, seas, and marine resources across Asia and beyond.</p>
    </header>

    <section class="content-block">
      <h2 class="section-subtitle">Why Become a Member?</h2>
      <p>SDG14 Asia brings together scientists, policymakers, civil society organisations, businesses, and ocean advocates working toward a sustainable blue future. As a member, you contribute directly to this mission and gain access to a community dedicated to meaningful, measurable impact.</p>
      <ul class="styled-list">
        <li><strong>Network access:</strong> Connect with leading ocean conservation practitioners, researchers, and advocates across the Asia-Pacific region.</li>
        <li><strong>Stay informed:</strong> Receive updates on SDG14-related research, policy developments, events, and funding opportunities.</li>
        <li><strong>Shape our agenda:</strong> Contribute to SDG14 Asia's programmes, working groups, and advocacy priorities.</li>
        <li><strong>Recognition:</strong> Be listed as an SDG14 Asia member and demonstrate your commitment to ocean sustainability.</li>
      </ul>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Membership Application</h2>
      <p>Please complete the form below to apply for membership. All fields marked as required must be filled in. We will review your application and contact you at the email address provided.</p>

      <!-- this form won't look right on localhost due to an error you should find in the JavaScript console -->
      <!-- original height: 3907 -->

      <div id="mf_placeholder" 
            data-formurl="//formket.com/embed.php?id=58789" 
            data-formtitle="MEMBERSHIP APPLICATION FORM"  
            data-formheight="auto" 
           data-paddingbottom="10">
      </div>

       
      <script>
        (function(f,o,r,m){
          r=f.createElement('script');r.async=1;r.src=o+'js/mf.js';
          m=f.getElementById('mf_placeholder'); m.parentNode.insertBefore(r, m);
        })(document,'//formket.com/');
      </script>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Questions?</h2>
      <p>If you have any questions about membership or the application process, please contact us at <a href="mailto:info@sdg14asia.org">info@sdg14asia.org</a> and a member of our team will be happy to assist you.</p>
    </section>
  </div>
</main>

<?php

include_once __DIR__ . '/../includes/footer.php'; 

?>