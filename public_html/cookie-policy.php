<?php

require_once __DIR__ . '/../includes/functions.php';

$metaJSON = '{
    "title": "Privacy & Cookie Policy",
    "description": "Information about how we collect, use, and protect your personal data, and how we use cookies on this website."
}';

$meta = preprocess_JSON($metaJSON);

include_once __DIR__ . '/../includes/header.php'; 

?>

<main class="content-section">
  <div class="container">
    <header class="section-header">
      <h1 class="page-title">Privacy &amp; Cookie Policy</h1>
      <p class="page-lead">This Privacy &amp; Cookie Policy explains how we collect, use, and protect information about you when you visit this website, and how we use cookies. By continuing to use this site, you consent to the practices described below.</p>
    </header>

    <section class="content-block">
      <h2 class="section-subtitle">Who We Are</h2>
      <p>This website is operated by SDG14 Asia. If you have any questions about how we handle your data, please contact us at <a href="mailto:info@sdg14asia.org">info@sdg14asia.org</a>.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">What Information We Collect</h2>
      <p>We may collect the following types of information when you use this website:</p>
      <ul class="styled-list">
        <li><strong>Usage data:</strong> Information about how you interact with the website, including pages visited, time spent on pages, referring URLs, browser type, and device information. This is collected automatically via analytics tools.</li>
        <li><strong>Contact information:</strong> If you contact us directly (for example, via email or a contact form), we may collect your name, email address, and the content of your message.</li>
        <li><strong>Cookie data:</strong> Information collected through cookies and similar tracking technologies, as described in the Cookies section below.</li>
      </ul>
      <p>We do not collect sensitive personal data such as financial information, health data, or government identification numbers.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">How We Use Your Information</h2>
      <p>We use the information we collect for the following purposes:</p>
      <ul class="styled-list">
        <li>To operate and improve this website and its content.</li>
        <li>To understand how visitors use the site and to analyse traffic patterns.</li>
        <li>To respond to enquiries or communications you send us.</li>
        <li>To comply with legal obligations.</li>
      </ul>
      <p>We do not use your information for automated decision-making or profiling, and we do not sell or rent your personal data to third parties.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Legal Basis for Processing</h2>
      <p>Where applicable, we process your personal data on the following legal bases:</p>
      <ul class="styled-list">
        <li><strong>Consent:</strong> Where you have given us clear consent to process your data for a specific purpose, such as accepting cookies.</li>
        <li><strong>Legitimate interests:</strong> Where processing is necessary for our legitimate interests, such as understanding how our website is used, provided those interests are not overridden by your rights.</li>
        <li><strong>Legal obligation:</strong> Where we are required to process data to comply with applicable law.</li>
      </ul>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Data Sharing and Third Parties</h2>
      <p>We do not sell, trade, or transfer your personal data to third parties for marketing purposes. We may share data with trusted third-party service providers who assist us in operating this website (such as analytics providers), provided they agree to keep your information confidential and process it only as directed by us.</p>
      <p>We may also disclose information where required by law, regulation, or legal process.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Data Retention</h2>
      <p>We retain personal data only for as long as necessary to fulfil the purposes for which it was collected, or as required by law. Analytics data is typically retained in aggregated, anonymised form. Contact enquiries are retained for a reasonable period to handle your request and for record-keeping purposes.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Your Rights</h2>
      <p>Depending on your location, you may have certain rights in relation to your personal data, including the right to:</p>
      <ul class="styled-list">
        <li>Access the personal data we hold about you.</li>
        <li>Request correction of inaccurate or incomplete data.</li>
        <li>Request deletion of your personal data, where applicable.</li>
        <li>Object to or restrict certain types of processing.</li>
        <li>Withdraw consent at any time, where processing is based on consent.</li>
      </ul>
      <p>To exercise any of these rights, please contact us at <a href="mailto:info@sdg14asia.org">info@sdg14asia.org</a>. We will respond to your request in accordance with applicable law.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Cookies</h2>
      <p>Cookies are small text files placed on your device when you visit a website. They are widely used to make websites work correctly and to provide information to the website owner. Cookies do not contain personally identifiable information on their own, though they may be linked to personal data we hold about you.</p>

      <div class="objective-block">
        <h3>Strictly Necessary Cookies</h3>
        <p>These cookies are essential for the website to function and cannot be switched off. They are usually set in response to actions you take, such as setting your privacy preferences or filling in forms. You can set your browser to block these cookies, but some parts of the site may not function as a result.</p>
      </div>

      <div class="objective-block">
        <h3>Analytics and Performance Cookies</h3>
        <p>These cookies allow us to count visits and traffic sources so we can measure and improve the performance of our site. They help us understand which pages are the most and least popular and how visitors move around the site. All information collected by these cookies is aggregated and therefore anonymous.</p>
      </div>

      <div class="objective-block">
        <h3>Functional Cookies</h3>
        <p>These cookies enable enhanced functionality and personalisation, such as remembering your preferences or language settings. They may be set by us or by third-party providers whose services we have added to our pages.</p>
      </div>

      <div class="objective-block">
        <h3>Targeting and Advertising Cookies</h3>
        <p>These cookies may be set through our site by third-party advertising partners. They may be used to build a profile of your interests and show relevant adverts on other sites. They do not store directly personal information but are based on uniquely identifying your browser and device.</p>
      </div>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Third-Party Cookies</h2>
      <p>In some cases we use cookies provided by trusted third parties. This website may use analytics services such as Google Analytics, which set cookies to help us understand how you arrived at our site and how you interact with our content. These third parties have their own privacy and cookie policies, which we encourage you to review. We do not control cookies placed by third parties.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Managing and Disabling Cookies</h2>
      <p>You have the right to decide whether to accept or reject cookies. You can manage your preferences in the following ways:</p>
      <ul class="styled-list">
        <li><strong>Browser settings:</strong> Most web browsers allow you to control cookies through their settings. You can refuse cookies, delete existing ones, or be alerted when a cookie is placed. Please refer to your browser's help documentation for instructions.</li>
        <li><strong>Opt-out tools:</strong> For analytics cookies, you may opt out directly through the relevant provider. Google Analytics offers a browser add-on that prevents your data from being used.</li>
        <li><strong>Cookie consent banner:</strong> Where we display a cookie consent banner on this site, you can use it to manage your preferences at any time.</li>
      </ul>
      <p>Please note that restricting cookies may affect the functionality of this website.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Security</h2>
      <p>We take reasonable technical and organisational measures to protect the information we hold against unauthorised access, loss, or misuse. However, no method of transmission over the internet is entirely secure, and we cannot guarantee the absolute security of data transmitted to or from this website.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Changes to This Policy</h2>
      <p>We may update this Privacy &amp; Cookie Policy from time to time to reflect changes in technology, legislation, or our data practices. Any updates will be posted on this page with a revised effective date. We encourage you to review this policy periodically.</p>
      <p>This policy was last updated in <?php echo date('F Y'); ?>.</p>
    </section>

    <section class="content-block">
      <h2 class="section-subtitle">Contact</h2>
      <p>If you have any questions about this Privacy &amp; Cookie Policy or how we handle your data, please contact us at <a href="mailto:info@sdg14asia.org">info@sdg14asia.org</a>.</p>
    </section>
  </div>
</main>

<?php

include_once __DIR__ . '/../includes/footer.php'; 

?>