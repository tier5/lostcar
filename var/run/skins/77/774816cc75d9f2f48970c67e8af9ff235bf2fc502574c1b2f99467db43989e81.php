<?php

/* /var/www/html/lostcar/skins/customer/modules/CDev/SimpleCMS/page/parts/content.twig */
class __TwigTemplate_39b278ca93aacf3a0c93d05a9e89c8069cc96938c56f6c085c4e1c80d5ef8e46 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"page-body-content\">";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "getBody", array(), "method");
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/CDev/SimpleCMS/page/parts/content.twig";
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
/*  # Page content*/
/*  #*/
/*  # @ListChild (list="static_page.info", weight="100")*/
/*  #}*/
/* */
/* <div class="page-body-content">{{ this.page.getBody()|raw }}</div>*/
/* */
