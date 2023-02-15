<?php
// No direct access
defined('_JEXEC') or die; 

use Joomla\CMS\Factory;

//-- Load configs
$text = $params->get('text');
$email_label = $params->get('email_label');
$privacy_message = $params->get('privacy_message');
$submit = $params->get('submit');

//-- Load CSS / JS
$document  = JFactory::getDocument();
$document->addScript('/modules/mod_civi_subscribe/assets/js/scripts.js');

//-- Get current url
$uri = & Factory::getURI();
$pageURL = "index.php" . $uri->toString(['query']);
?>
<div class="mod-civi-subscribe">
  <form id="civi-subscribe-form" action="<?php echo JRoute::_($pageURL);?>" method="post">
    <?php if ($module->showtitle) : ?>
      <h3 class="heading"><?= $module->title ?></h3>
    <?php endif; ?>
    <p><?= $text ?></p>
    <p>
      <input type="text" name="civi_subscribe_email" id="civi-subscribe-email" placeholder="<?= $email_label ?>" value="<?= base64_decode($input->get('civi_subscribe_email_encoded')) ?>" required>
      <input type="hidden" name="civi_subscribe_email_encoded" id="civi-subscribe-email-encoded">
    </p>
    <p>
      <input type="checkbox" name="civi_subscribe_privacy" id="civi-subscribe-privacy" required>
      <label for="civi-subscribe-privacy"><?= $privacy_message ?></label>
    </p>
    <p>
      <input name="submit" type="submit" value="<?= JText::_("MOD_CIVI_SUBSCRIBE_SUBMIT_LABEL") ?>" class="btn btn-primary">
    </p>
  </form>
</div>
