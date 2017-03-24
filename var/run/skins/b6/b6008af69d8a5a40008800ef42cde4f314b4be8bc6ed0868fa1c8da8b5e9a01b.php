<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/modules/CDev/Sale/label.twig */
class __TwigTemplate_7b1f3726c95695eb3048f3dcb06c0c3b0469700cd56d2f985a8ccf229d3281bf extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "participateSale", array(), "method")) {
            // line 8
            echo "    <li class=\"sale-label-product-details\">
        <div class=\"text\">
            ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sale_price.text", "type" => "nested"))), "html", null, true);
            echo "
        </div>
        ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sale_price.label", "type" => "nested"))), "html", null, true);
            echo "
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/modules/CDev/Sale/label.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 12,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Label (internal list element)*/
/*  #*/
/*  # @ListChild (list="product.plain_price.tail", weight="40")*/
/*  #}*/
/* */
/* {% if this.participateSale() %}*/
/*     <li class="sale-label-product-details">*/
/*         <div class="text">*/
/*             {{ widget_list('sale_price.text', type='nested') }}*/
/*         </div>*/
/*         {{ widget_list('sale_price.label', type='nested') }}*/
/*     </li>*/
/* {% endif %}*/
/* */
