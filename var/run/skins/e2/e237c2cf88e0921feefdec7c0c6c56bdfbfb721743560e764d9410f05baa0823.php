<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/News/page/news_message/parts/body.twig */
class __TwigTemplate_e9bbaa600fa934540d7ea965580c6b19fdfe949db9d94bbe826aeef3557f4b18 extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        echo "
<div class=\"news-message-body\">";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "newsMessage", array()), "body", array());
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/News/page/news_message/parts/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # News message page template*/
/*  #*/
/*  # @ListChild (list="newsMessage.details", weight="300")*/
/*  #}*/
/* */
/* <div class="news-message-body">{{ this.newsMessage.body|raw }}</div>*/
/* */
