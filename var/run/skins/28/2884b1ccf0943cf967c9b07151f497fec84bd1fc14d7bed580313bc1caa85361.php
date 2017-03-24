<?php

/* /var/www/html/lostcar/skins/admin/items_list/payment/methods/parts/header.description.twig */
class __TwigTemplate_c023f3f2419f70ba9abec38a5496ce71d20d31578a8c9bb25b4fdb503ad6c8a5 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getAltAdminDescription", array(), "method")) {
            // line 8
            echo "  <div class=\"description\">";
            echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getAltAdminDescription", array(), "method");
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/payment/methods/parts/header.description.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Payment methods list : line : header : description*/
/*  #*/
/*  # @ListChild (list="payment.methods.list.header", weight=400)*/
/*  #}*/
/* */
/* {% if this.method.getAltAdminDescription() %}*/
/*   <div class="description">{{ this.method.getAltAdminDescription()|raw }}</div>*/
/* {% endif %}*/
/* */
