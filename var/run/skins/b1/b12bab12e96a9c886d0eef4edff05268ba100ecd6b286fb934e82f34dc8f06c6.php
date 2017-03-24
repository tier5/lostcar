<?php

/* modules/XC/Concierge/head.twig */
class __TwigTemplate_da6a905b89f058a130237b7cb0d3909a36bb1a83c0574b5ba4bfc4c3ea203a2c extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">
var concierge = ";
        // line 2
        echo twig_jsonencode_filter($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSettings", array(), "method"));
        echo ";

!function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error(\"Segment snippet included twice.\");else{analytics.invoked=!0;analytics.methods=[\"trackSubmit\",\"trackClick\",\"trackLink\",\"trackForm\",\"pageview\",\"identify\",\"reset\",\"group\",\"track\",\"ready\",\"alias\",\"page\",\"once\",\"off\",\"on\"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement(\"script\");e.type=\"text/javascript\";e.async=!0;e.src=(\"https:\"===document.location.protocol?\"https://\":\"http://\")+\"cdn.segment.com/analytics.js/v1/\"+t+\"/analytics.min.js\";var n=document.getElementsByTagName(\"script\")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION=\"3.1.0\";
analytics.load(concierge.writeKey);
analytics.ready(
    function() {
        concierge.ready = true;
    }
);

}}();
</script>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/Concierge/head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/* var concierge = {{  this.getSettings()|json_encode()|raw }};*/
/* */
/* !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="3.1.0";*/
/* analytics.load(concierge.writeKey);*/
/* analytics.ready(*/
/*     function() {*/
/*         concierge.ready = true;*/
/*     }*/
/* );*/
/* */
/* }}();*/
/* </script>*/
/* */
