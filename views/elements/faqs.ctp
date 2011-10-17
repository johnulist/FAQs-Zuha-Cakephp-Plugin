<?php
// this should be at the top of every element created with format __ELEMENT_PLUGIN_ELEMENTNAME_instanceNumber.
// it allows a database driven way of configuring elements, and having multiple instances of that configuration.
	if(!empty($instance) && defined('__ELEMENT_FAQS_FAQS_'.$instance)) {
		extract(unserialize(constant('__ELEMENT_FAQS_FAQS_'.$instance)));
	} else if (defined('__ELEMENT_FAQS_FAQS')) {
		extract(unserialize(__ELEMENT_FAQS_FAQS));
	}
# setup defaults
$faqType = !empty($faqType) ? $faqType : null;
$faqList = $this->requestAction('faqs/faqs/faq_list/'.$faqType);
?>

<div class="faqs index">
	<h2><?php __($faqType.' Faqs');?></h2>
		<ol>
		<?php foreach ($faqList as $faq): ?>
        	<li>
            <h4><?php echo $faq['Faq']['question']; ?></h4>
			<?php echo $faq['Faq']['answer']; ?>
            </li>
	   	<?php endforeach; ?>
		</ol>
</div>