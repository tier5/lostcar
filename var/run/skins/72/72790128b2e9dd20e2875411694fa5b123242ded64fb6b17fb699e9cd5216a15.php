<?php

/* /var/www/html/lostcar/skins/admin/items_list/payment/methods/parts/header.alt_icon.twig */
class __TwigTemplate_826f9c56c0209874a365a3d32eac9b6f33ef1b32f36ab93636a17265975281f7 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getAltAdminIconURL", array(), "method")) {
            // line 8
            echo "  <div class=\"alt-icon\"><img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getAltAdminIconURL", array(), "method"), "html", null, true);
            echo "\" alt=\"\" /></div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/payment/methods/parts/header.alt_icon.twig";
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
/*  # Payment methods list : line : header : alternative icon*/
/*  #*/
/*  # @ListChild (list="payment.methods.list.header", weight=500)*/
/*  #}*/
/* */
/* {% if this.method.getAltAdminIconURL() %}*/
/*   <div class="alt-icon"><img src="{{ this.method.getAltAdminIconURL() }}" alt="" /></div>*/
/* {% endif %}*/
/* */
