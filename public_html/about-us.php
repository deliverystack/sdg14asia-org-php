<?php

require_once __DIR__ . '/../includes/functions.php';

$metaJSON = '{
    "title": "About Us",
    "description": "Learn about SDG14 Asia, our mission to protect marine ecosystems, and the team behind our international network for ocean conservation."
}';

$meta = preprocess_JSON($metaJSON);

include_once __DIR__ . '/../includes/header.php'; 

?>

<main class="content-section">
  <div class="container">
    <header class="section-header">
      <h1 class="page-title">About Us</h1>
      <p class="page-lead">SDG14 Asia acts as a bridge between Europe, America, Australia, and Asia — connecting yacht owners, captains, marinas, scientists, universities, and oceanographic institutions in the shared pursuit of ocean protection.</p>
    </header>

    <section class="content-block">
      <h2 class="section-subtitle">Who We Are</h2>
      <p>SDG14 Asia is an independent organisation dedicated to the implementation of the United Nations Sustainable Development Goal 14 — Life Below Water — across Asia and the broader Indo-Pacific region. We create a platform for cooperation, education, and practical projects focused on protecting marine ecosystems for future generations.</p>
      <p>Built through personal dedication, private funding, and a shared vision of long-term international cooperation, SDG14 Asia brings together individuals and institutions who believe that healthy oceans are essential to our collective future.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Our Team</h2>

      <div class="team-grid">

        <div class="team-card">
          <div class="team-photo" aria-label="Photo of Philipp Heisig">
            <div class="team-photo-placeholder">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" aria-hidden="true">
                <circle cx="32" cy="24" r="12" fill="rgba(255,255,255,0.25)"/>
                <path d="M8 56c0-13.255 10.745-24 24-24s24 10.745 24 24" fill="rgba(255,255,255,0.15)"/>
              </svg>
              <span>Photo coming soon</span>
            </div>
          </div>
          <div class="team-info">
            <h3 class="team-name">Philipp Heisig</h3>
            <p class="team-role">President</p>
            <p>After 36 years at sea, Philipp Heisig now dedicates his international experience and global maritime network to ocean protection and the implementation of the United Nations SDG14 goals in Asia.</p>
            <p>His deep knowledge of maritime operations and his extensive relationships across the global sailing and shipping communities make him a uniquely effective advocate for sustainable ocean stewardship.</p>
          </div>
        </div>

        <div class="team-card">
          <div class="team-photo" aria-label="Photo of Charida Jitwongwai">
            <div class="team-photo-placeholder">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" aria-hidden="true">
                <circle cx="32" cy="24" r="12" fill="rgba(255,255,255,0.25)"/>
                <path d="M8 56c0-13.255 10.745-24 24-24s24 10.745 24 24" fill="rgba(255,255,255,0.15)"/>
              </svg>
              <span>Photo coming soon</span>
            </div>
          </div>
          <div class="team-info">
            <h3 class="team-name">Charida Jitwongwai</h3>
            <p class="team-role">General Secretary</p>
            <p>Charida Jitwongwai connects SDG14 Asia with important institutions and networks throughout Thailand, Singapore, and China.</p>
            <p>With her experience in international organisational and cooperation structures, she strengthens regional partnerships and supports the development of sustainable networks across Asia.</p>
          </div>
        </div>

      </div>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Our Mission</h2>
      <p>SDG14 Asia exists to make ocean protection tangible and actionable across Asia. We do this by fostering connections between the people and institutions who can drive meaningful change — from individual mariners and marina operators to academic researchers and international policy bodies.</p>
      <ul class="styled-list">
        <li><strong>Cooperation:</strong> Building bridges between Europe, America, Australia, and Asia to share knowledge, resources, and best practice.</li>
        <li><strong>Education:</strong> Raising awareness of marine conservation challenges and the SDG14 framework among communities, businesses, and institutions across the region.</li>
        <li><strong>Practical projects:</strong> Supporting on-the-ground initiatives that deliver measurable improvements for marine ecosystems.</li>
      </ul>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Get Involved</h2>
      <p>Whether you are an individual passionate about the ocean, an organisation working in the marine space, or an institution looking to advance sustainable development, we welcome you to join us. Visit our <a href="/membership.php">membership page</a> to apply, or reach out directly at <a href="mailto:info@sdg14asia.org">info@sdg14asia.org</a>.</p>
    </section>
  </div>
</main>

<style>
.team-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 2.5rem;
  margin-top: 2rem;
}

.team-card {
  display: flex;
  flex-direction: column;
  gap: 1.25rem;
  background: var(--ocean-light);
  border-radius: 8px;
  overflow: hidden;
  border: 1px solid rgba(24, 95, 165, 0.12);
}

.team-photo {
  width: 100%;
  aspect-ratio: 4 / 3;
  background: linear-gradient(135deg, var(--ocean-mid) 0%, var(--teal-mid) 100%);
  display: flex;
  align-items: center;
  justify-content: center;
}

.team-photo-placeholder {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.5rem;
  color: rgba(255,255,255,0.6);
}

.team-photo-placeholder svg {
  width: 64px;
  height: 64px;
}

.team-photo-placeholder span {
  font-size: 0.75rem;
  text-transform: uppercase;
  letter-spacing: 0.1em;
}

.team-info {
  padding: 1.25rem 1.5rem 1.5rem;
}

.team-name {
  font-family: 'Playfair Display', serif;
  font-size: 1.4rem;
  color: var(--ocean-deep);
  margin: 0 0 0.2rem !important;
}

.team-role {
  font-size: 0.78rem;
  text-transform: uppercase;
  letter-spacing: 0.12em;
  color: var(--teal-mid);
  font-weight: 500;
  margin-bottom: 1rem !important;
}

@media (max-width: 768px) {
  .team-grid {
    grid-template-columns: 1fr;
  }
}
</style>

<?php

include_once __DIR__ . '/../includes/footer.php'; 

?>