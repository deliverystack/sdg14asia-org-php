<?php

require_once __DIR__ . '/../includes/functions.php';

$metaJSON = '{
    "title": "Marine Kindergarten + Blue Carbon + Plankton Observatory",
    "description": "A 12-month pilot research initiative deploying underwater habitat structures across marina sites to enhance marine biodiversity, juvenile fish recruitment, and coastal ecosystem health in Phuket."
}';

$meta = preprocess_JSON($metaJSON);

include_once APP_ROOT . '/includes/header.php';

?>

<main class="content-section">
  <div class="container">

    <header class="section-header">
      <h1 class="page-title">Marine Kindergarten + Blue Carbon + Plankton Observatory</h1>
    </header>

    <section class="content-block">
      <p><strong>Marine Kindergarten + Blue Carbon + Plankton Observatory</strong> is a 12-month pilot research and conservation initiative designed to evaluate whether specially engineered underwater habitat structures can enhance marine biodiversity, improve juvenile fish survival and recruitment, and strengthen ecosystem health within coastal marina environments.</p>

      <p>The project will deploy <strong>12 habitat units</strong> (120 cm × 75 cm) across multiple marina sites, creating artificial nursery habitats that provide shelter and colonization surfaces for juvenile fish, crustaceans, mollusks, and other marine organisms. These structures are intended to replicate natural refuge habitats that are often limited in developed waterfront areas.</p>

      <p>The research integrates three complementary components:</p>

      <ul class="styled-list">
        <li><strong>Marine Kindergarten</strong> – assessing the effectiveness of habitat structures as nursery grounds for juvenile marine species and measuring their contribution to biodiversity enhancement.</li>
        <li><strong>Blue Carbon Connectivity</strong> – investigating ecological links between marina habitats and nearby blue carbon ecosystems, including mangroves, seagrass beds, and coastal vegetation, to better understand habitat connectivity and ecosystem resilience.</li>
        <li><strong>Plankton Observatory</strong> – monitoring plankton abundance, diversity, and seasonal dynamics as indicators of ecosystem productivity, environmental health, and food-web support.</li>
      </ul>

      <p>The project will employ a comprehensive monitoring framework that includes baseline ecological assessments, monthly biodiversity surveys, underwater camera systems, water-quality monitoring, and plankton sampling. Data collected will include species richness and abundance, juvenile fish recruitment, habitat utilization, water quality parameters, plankton diversity, and ecological interactions. Advanced analysis methods, including AI-assisted image recognition, may be used to enhance long-term monitoring efficiency.</p>

      <p>Expected outcomes include the creation of robust scientific datasets, evidence-based recommendations for biodiversity enhancement in marina environments, best-practice conservation guidelines, educational and citizen-science opportunities, and policy recommendations that support sustainable coastal development and marine conservation.</p>

      <p>The project also provides opportunities for student research, scientific publications, and international collaboration, with the long-term vision of developing a scalable and replicable model for marina-based marine conservation that can be adopted across coastal regions while contributing to <strong>Sustainable Development Goal 14: Life Below Water</strong>.</p>

      <ul class="styled-list">
        <li><strong>Project Duration:</strong> 12 months</li>
        <li><strong>Habitat Units:</strong> 12 Marine Kindergarten structures</li>
        <li><strong>Habitat Size:</strong> 120 cm × 75 cm</li>
        <li><strong>Primary Focus:</strong> Biodiversity enhancement, juvenile fish recruitment, blue carbon connectivity, plankton monitoring, and marina-based marine conservation.</li>
      </ul>
    </section>

  </div>
</main>


<?php

include_once APP_ROOT . '/includes/footer.php'; 

?>