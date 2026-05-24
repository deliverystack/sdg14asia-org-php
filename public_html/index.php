<?php

require_once __DIR__ . '/../includes/functions.php';

$metaJSON = '{
    "title": "SDG14 Asia Phuket Regional Hub",
    "description": "Coordination center for South East Asian marine projects."
}';

$meta = preprocess_JSON($metaJSON);

include_once __DIR__ . '/../includes/header.php'; 
include_once __DIR__ . '/../includes/hero.php'; 
include_once __DIR__ . '/../includes/about.php'; 
include_once __DIR__ . '/../includes/membership.php'; 

$quoteJSON = '{
    "cite": "SDG14 Asia Association",
    "quote": "70% of the oxygen we breathe is produced by the oceans. Protecting Asia\'s seas is not a choice — it is our shared responsibility."
}';

$quote = preprocess_JSON($quoteJSON);
include_once __DIR__ . '/../includes/quote.php'; 

include_once __DIR__ . '/../includes/events.php'; 

include_once __DIR__ . '/../includes/projects.php'; 

?>

<!--
<section class="partners">
  <div class="container">
    <div class="partners-title">Our Partners & Supporters</div>
    <div class="partners-logos">
      <span class="partner-tag">Phuket Marine Biology Center</span>
      <span class="partner-tag">UN Environment Programme</span>
      <span class="partner-tag">WWF Thailand</span>
      <span class="partner-tag">Shark Guardian</span>
      <span class="partner-tag">Sea Bees Diving</span>
      <span class="partner-tag">Amazing Thailand</span>
      <span class="partner-tag">Institut Océanographique</span>
      <span class="partner-tag">Add Your Organisation</span>
    </div>
  </div>
</section>
-->

<?php

include_once __DIR__ . '/../includes/footer.php'; 

?>
