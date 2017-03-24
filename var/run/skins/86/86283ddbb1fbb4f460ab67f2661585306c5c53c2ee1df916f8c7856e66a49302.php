<?php

/* /var/www/html/lostcar/skins/common/order/invoice/parts/subhead.twig */
class __TwigTemplate_a6299bd00cb34a3cbbf67d1d8ca8ae74e2d792251539655ce26a65ed99ae026c extends \XLite\Core\Templating\Twig\Template
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
<table class=\"subhead-wrapper\">
    <tr class=\"subhead-line\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewList", array(0 => "invoice.subhead", 1 => array("order" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()))), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 10
            echo "            ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["w"], "display", array(), "method"), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/common/order/invoice/parts/subhead.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice : header : address box*/
/*  #*/
/*  # @ListChild (list="invoice.base", weight="20")*/
/*  #}*/
/* */
/* <table class="subhead-wrapper">*/
/*     <tr class="subhead-line">*/
/*         {% for w in this.getViewList('invoice.subhead', {'order': this.order}) %}*/
/*             {{ w.display() }}*/
/*         {% endfor %}*/
/*     </tr>*/
/* </table>*/
/* */
