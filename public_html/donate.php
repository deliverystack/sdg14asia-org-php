<?php

require_once __DIR__ . '/../includes/functions.php';

$metaJSON = '{
    "title": "Donate",
    "description": "Support SDG14 Asia\'s mission to protect marine ecosystems and implement the United Nations SDG14 goals across Asia. Your donation makes a difference."
}';

$meta = preprocess_JSON($metaJSON);

include_once __DIR__ . '/../includes/header.php';

?>

<main class="content-section">
  <div class="container">
    <header class="section-header">
      <h1 class="page-title">Support Our Mission</h1>
      <p class="page-lead">Your donation helps SDG14 Asia protect marine ecosystems, build international partnerships, and implement the United Nations Sustainable Development Goal 14 — Life Below Water — across Asia and the Indo-Pacific.</p>
    </header>

    <section class="content-block">
      <h2 class="section-subtitle">How to Donate</h2>
      <p>We accept donations by bank transfer or QR code. Please use the details below and include your name or organisation as the payment reference so we can acknowledge your contribution.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Payment Options</h2>

      <div class="option-card">
        <h3>1) By Bank Transfer</h3>
        <table class="data-table" style="margin-top:1rem;">
          <tbody>
            <tr><td style="width:200px;font-weight:600;color:var(--ocean-deep);">Bank Name</td><td>Kasikorn Bank</td></tr>
            <tr><td style="font-weight:600;color:var(--ocean-deep);">Account Name</td><td>SDG14 ASIA ASSOCIATION</td></tr>
            <tr><td style="font-weight:600;color:var(--ocean-deep);">Account Number</td><td>223-8-79338-9</td></tr>
            <tr><td style="font-weight:600;color:var(--ocean-deep);">Branch</td><td>Lotus's Phuket Branch</td></tr>
            <tr><td style="font-weight:600;color:var(--ocean-deep);">SWIFT / BIC Code</td><td>KASITHBK</td></tr>
            <tr><td style="font-weight:600;color:var(--ocean-deep);">Address</td><td>1st Floor, Tesco Lotus Building, 104 Moo5 Chaloem Phrakiat Ro 9 Ratsada, Muang Phuket, Phuket 83000</td></tr>
            <tr><td style="font-weight:600;color:var(--ocean-deep);">Tel</td><td>076-612799, 076-612794</td></tr>
          </tbody>
        </table>
      </div>

      <div class="option-card">
        <h3>2) By Scan / QR Code</h3>
        <p>A QR code is available from the Association upon request. Please <a href="mailto:info@sdg14asia.org">contact us</a> and we will send it to you directly.</p>
        <p>Once payment is complete, please retain your <strong>Transaction Reference Number</strong> and include it when notifying us of your donation.</p>
      </div>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">After Your Donation</h2>
      <p>Please notify us of your transfer at <a href="mailto:info@sdg14asia.org">info@sdg14asia.org</a> with the following details so we can confirm receipt and send you an acknowledgement:</p>
      <ul class="styled-list">
        <li>Your full name or organisation name</li>
        <li>Date and amount of transfer</li>
        <li>Transaction reference number</li>
      </ul>
    </section>

    <section class="content-block">
      <div class="recommendation-box">
        <h3>Questions?</h3>
        <p>If you have any questions about donating or would like to discuss other ways to support our work, please reach out at <a href="mailto:info@sdg14asia.org">info@sdg14asia.org</a>. We are grateful for every contribution, large or small.</p>
      </div>
    </section>

  </div>
</main>

<?php

include_once __DIR__ . '/../includes/footer.php';

?>