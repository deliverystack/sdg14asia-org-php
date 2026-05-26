<?php

require_once __DIR__ . '/../includes/functions.php';

$metaJSON = '{
    "title": "Disclaimer & Terms of Use",
    "description": "Disclaimer and terms of use for this website."
}';

$meta = preprocess_JSON($metaJSON);

include_once __DIR__ . '/../includes/header.php'; 

?>

<main class="content-section">
  <div class="container">
    <header class="section-header">
      <h1 class="page-title">Disclaimer &amp; Terms of Use</h1>
      <p class="page-lead">Please read these Terms of Use carefully before using this website. By accessing or using this site, you acknowledge that you have read, understood, and agree to be bound by the terms and conditions set out below. If you do not agree to these terms, please discontinue use of this website.</p>
    </header>

    <section class="content-block">
      <h2 class="section-subtitle">Permitted Use</h2>
      <p>You may access and use this website for personal, non-commercial purposes only. You agree not to use this website in any way that is unlawful, harmful, or that could damage, disable, or impair the website or interfere with any other party's use of it. Unauthorised use of this website may give rise to a claim for damages and may constitute a criminal offence.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">User Conduct</h2>
      <p>By using this website, you agree that you will not:</p>
      <ul class="styled-list">
        <li>Use the site for any unlawful or fraudulent purpose.</li>
        <li>Attempt to gain unauthorised access to any part of the website or its related systems.</li>
        <li>Transmit any unsolicited or unauthorised advertising or promotional material.</li>
        <li>Knowingly transmit any data or material that contains viruses, malware, or other harmful code.</li>
        <li>Reproduce, duplicate, copy, or exploit any content from this site for commercial purposes without prior written permission.</li>
      </ul>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">General Information Only</h2>
      <p>The information provided on this website is for general informational and educational purposes only. It does not constitute professional advice of any kind, including but not limited to legal, financial, scientific, medical, or environmental advice. You should not act or refrain from acting on the basis of any content on this site without seeking appropriate professional or specialist advice.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Accuracy and Completeness</h2>
      <p>While we make every reasonable effort to ensure that the information on this website is accurate and up to date, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability, or availability of the information, products, services, or related graphics contained on this website. Any reliance you place on such information is strictly at your own risk.</p>
      <p>Content on this website may be updated, changed, or removed at any time without notice. We do not guarantee that the website will be available at all times or free from errors.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">No Warranties</h2>
      <p>This website is provided on an "as is" and "as available" basis without any warranties of any kind. To the fullest extent permitted by law, we disclaim all warranties, express or implied, including but not limited to implied warranties of merchantability, fitness for a particular purpose, and non-infringement.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Limitation of Liability</h2>
      <p>To the fullest extent permitted by applicable law, we shall not be liable for any direct, indirect, incidental, consequential, special, or exemplary damages arising out of or in connection with your use of, or inability to use, this website or its content. This includes, without limitation, damages for loss of profits, data, goodwill, or other intangible losses, even if we have been advised of the possibility of such damages.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">External Links</h2>
      <p>This website may contain links to third-party websites that are not under our control. These links are provided for your convenience only. We have no responsibility for the content, privacy practices, or availability of any linked sites and do not endorse or make any representations about them. Accessing any external links is done entirely at your own risk.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Intellectual Property</h2>
      <p>All content on this website, including but not limited to text, images, graphics, logos, and data, is the property of the website owner or its content suppliers and is protected by applicable intellectual property laws. Reproduction, distribution, or use of any content without prior written permission is strictly prohibited, except as permitted by law.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Governing Law</h2>
      <p>This disclaimer is governed by and construed in accordance with applicable law. Any disputes arising in connection with this disclaimer or your use of this website shall be subject to the exclusive jurisdiction of the relevant courts.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Changes to These Terms</h2>
      <p>We reserve the right to modify these Terms of Use at any time. Updates will be posted on this page with a revised effective date. Your continued use of this website following any changes constitutes your acceptance of the updated terms.</p>
      <p>These Terms of Use were last updated in <?php echo date('F Y'); ?>.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Contact</h2>
      <p>If you have any questions about these Terms of Use, please contact us at <a href="mailto:info@sdg14asia.org">info@sdg14asia.org</a>.</p>
    </section>
  </div>
</main>

<?php

include_once __DIR__ . '/../includes/footer.php'; 

?>
