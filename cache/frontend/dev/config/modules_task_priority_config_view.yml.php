<?php
// auto-generated by sfViewConfigHandler
// date: 2012/05/01 01:44:07
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('jquery-ui.css', '', array ());
  $response->addStylesheet('/sfJQueryDateTimeFormWidgetPlugin/css/timePicker.css', '', array ());
  $response->addStylesheet('bobo/style.css', '', array ());
  $response->addJavascript('date.js', '', array ());
  $response->addJavascript('jquery.js', '', array ());
  $response->addJavascript('jquery-ui.js', '', array ());
  $response->addJavascript('/sfJQueryDateTimeFormWidgetPlugin/js/jquery.timePicker.js', '', array ());


