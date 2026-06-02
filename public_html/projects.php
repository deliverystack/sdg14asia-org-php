<?php

require_once __DIR__ . '/../includes/functions.php';

$metaJSON = '{
    "title": "SDG14Asia Projects",
    "description": "SDG14Asia Projects"
}';

$meta = preprocess_JSON($metaJSON);

include_once __DIR__ . '/../includes/header.php'; 

?>

<main class="content-section">
  <div class="container">
    <header class="section-header">
      <h1 class="page-title">Scientific Collaboration Opportunities</h1>
      <p class="page-lead">The Marine Kindergarten + Blue Carbon + Plankton Observatory Pilot Project is intended as a multidisciplinary marine research platform that provides scientists with a unique opportunity to investigate biodiversity enhancement within marina environments, an area that remains relatively understudied in tropical Asia.</p>
        
      <!--<p>The project seeks scientific partners to co-design research methodologies, supervise data collection, lead analyses, and co-author publications arising from the study.</p>-->
    </header>

    <section class="content-block">
      <h2 class="section-subtitle">Scientific Objectives</h2>
      <p>The project aims to investigate the ecological role of artificial nursery habitats installed within marina environments and evaluate their potential contribution to coastal biodiversity conservation. Key research questions include:</p>
<!--      
      <div class="objective-block">
        <h3>Marine Kindergarten</h3>
        <ul class="styled-list">
          <li>Do artificial nursery habitats increase species richness and abundance within marinas?</li>
          <li>Do Marine Kindergarten structures improve recruitment and survival of juvenile fish and invertebrates?</li>
          <li>Which species preferentially utilize the habitats?</li>
          <li>How does colonization develop over time?</li>
        </ul>
      </div>

      <div class="objective-block">
        <h3>Blue Carbon Connectivity</h3>
        <ul class="styled-list">
          <li>Is there ecological connectivity between marina habitats and nearby seagrass or mangrove ecosystems?</li>
          <li>Can marinas function as supplementary habitat corridors within coastal blue carbon landscapes?</li>
          <li>What role do marinas play in supporting species associated with blue carbon ecosystems?</li>
        </ul>
      </div>

      <div class="objective-block">
        <h3>Plankton Observatory</h3>
        <ul class="styled-list">
          <li>How do plankton communities vary spatially and temporally among marina locations?</li>
          <li>Can plankton abundance and diversity be used as indicators of ecosystem productivity and habitat quality?</li>
          <li>What relationships exist between plankton dynamics and juvenile fish recruitment?</li>
        </ul>
      </div>-->
    </section>
<!--
    <section class="content-block">
      <h2 class="section-subtitle">Research Platform</h2>
      <h3>Study Sites</h3>
      <p>Four marinas in Phuket will serve as study locations. Twelve Marine Kindergarten habitat units will be deployed, with three units installed at each marina. This provides a replicated experimental framework suitable for statistical comparison between locations and over time.</p>
      
      <h3>Habitat Design</h3>
      <p>Each Marine Kindergarten unit measures 120 cm in length by 75 cm in width. The structures are designed to provide:</p>
      <ul class="styled-list">
        <li>Refuge habitat for juvenile fish.</li>
        <li>Settlement surfaces for marine invertebrates.</li>
        <li>Substrate for biofouling communities.</li>
        <li>Enhanced structural complexity within marina environments.</li>
      </ul>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Scientific Monitoring Programme</h2>
      
      <h3>Biodiversity Surveys</h3>
      <p>Monthly monitoring of species richness, species abundance, juvenile fish recruitment, invertebrate colonization, and habitat utilization. Methods may include underwater visual census, photo quadrats, video transects, and species identification surveys.</p>

      <h3>Continuous Camera Monitoring</h3>
      <p>Underwater camera systems will provide long-term behavioural observations, habitat occupancy data, species interactions, and seasonal patterns. Scientists may also explore machine learning applications, automated species recognition, and AI-assisted biodiversity monitoring.</p>

      <h3>Environmental Monitoring</h3>
      <p>Monthly recording of temperature, salinity, dissolved oxygen, pH, turbidity, and nutrient levels.</p>

      <h3>Plankton Observatory</h3>
      <p>Regular plankton sampling will provide phytoplankton composition, zooplankton composition, seasonal productivity trends, and ecosystem health indicators.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Institutional Participation</h2>
      
      <h3>Opportunities for PMBC Scientists</h3>
      <p>The project aligns strongly with expertise in marine ecology, fisheries biology, biodiversity assessment, coastal ecosystem management, marine productivity, environmental monitoring, and marine conservation. Potential contributions include principal investigator roles, methodology development, field supervision, taxonomic identification, statistical analysis, and scientific publication leadership.</p>

      <h3>Opportunities for PSU Researchers and Students</h3>
      <p>The project provides a living laboratory across multiple academic thresholds:</p>
      <ul class="styled-list">
        <li><strong>Undergraduate Research:</strong> Final-year projects, species inventories, water quality analysis, and plankton studies.</li>
        <li><strong>Master's Research:</strong> Habitat effectiveness studies, biodiversity modelling, recruitment dynamics, and ecological connectivity.</li>
        <li><strong>PhD Research:</strong> Long-term marina ecosystem ecology, blue carbon interactions, AI-assisted monitoring systems, and coastal conservation planning.</li>
      </ul>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Expected Scientific Outputs</h2>
      <p>Few long-term studies have examined marinas as ecological habitats in tropical Southeast Asia. This project offers a rare opportunity to generate a one-year continuous dataset combining habitat enhancement, biodiversity monitoring, plankton dynamics, water quality, and blue carbon connectivity within a real-world marina network in Phuket.</p>
      <p>Potential publication targets include ISI/Scopus-indexed journals, regional marine science journals, and international marine conservation conferences.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Funding Framework &amp; Partnerships</h2>
      <p>For a one-year pilot with 12 Marine Kindergarten units across 4 marinas, there are three funding levels available:</p>
      
      <div class="option-card">
        <h3>Option 1: Scientific Advisory Partnership (THB 300,000 – 800,000)</h3>
        <p>Suitable if PMBC and PSU provide scientific advice only while SDG14 Asia and marina staff collect field data. Includes research design, site visits, quarterly reviews, and final report compilation.</p>
      </div>

      <div class="option-card">
        <h3>Option 2: Full Research Collaboration (THB 1.5 – 3 million)</h3>
        <p>Suitable for active scientist participation, monthly field surveys, plankton sampling, lab tracking, and student involvement targeted towards peer-reviewed publications.</p>
        
        <table class="data-table">
          <thead>
            <tr>
              <th>Item</th>
              <th>Budget (THB)</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>Scientific lead investigators</td><td>300,000–600,000</td></tr>
            <tr><td>Research assistants</td><td>300,000–500,000</td></tr>
            <tr><td>Monthly fieldwork</td><td>250,000–500,000</td></tr>
            <tr><td>Laboratory analysis</td><td>200,000–500,000</td></tr>
            <tr><td>Underwater cameras</td><td>150,000–500,000</td></tr>
            <tr><td>Student stipends</td><td>100,000–300,000</td></tr>
            <tr><td>Data analysis and publication</td><td>100,000–300,000</td></tr>
            <tr><td>Administration</td><td>100,000–300,000</td></tr>
            <tr class="table-total"><td>Total</td><td>1.5–3 million</td></tr>
          </tbody>
        </table>
      </div>

      <div class="option-card">
        <h3>Option 3: Flagship Research Project (THB 5 – 10 million)</h3>
        <p>Suitable if multiple universities are involved, integrating eDNA analysis, AI image recognition, and carbon sequestration studies across multiple years to position Phuket as a regional marine conservation hub.</p>
      </div>

      <div class="recommendation-box">
        <h3>Recommended Year 1 Target: THB 2.5 million</h3>
        <p>Large enough to attract serious scientific participation while remaining realistic for a pilot project. For formal fundraising applications, this is branded as the <strong>"Marine Kindergarten Research &amp; Monitoring Programme (12-month pilot)"</strong>.</p>
        
        <table class="data-table recommended-table">
          <thead>
            <tr>
              <th>Item</th>
              <th>Allocation (THB)</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>Scientific team (PMBC + PSU)</td><td>700,000</td></tr>
            <tr><td>Research assistants</td><td>300,000</td></tr>
            <tr><td>Underwater cameras and equipment</td><td>400,000</td></tr>
            <tr><td>Field surveys</td><td>300,000</td></tr>
            <tr><td>Water quality and plankton analysis</td><td>300,000</td></tr>
            <tr><td>Student grants</td><td>200,000</td></tr>
            <tr><td>Data analysis and publication</td><td>150,000</td></tr>
            <tr><td>Contingency</td><td>150,000</td></tr>
            <tr class="table-total"><td>Total Pilot Budget</td><td>2,500,000</td></tr>
          </tbody>
        </table>
      </div>
    </section>

-->
  </div>
</main>

<?php

include_once __DIR__ . '/../includes/footer.php'; 

?>