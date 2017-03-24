<?php

/* /var/www/html/lostcar/skins/common/order/invoice/parts/totals.twig */
class __TwigTemplate_5b005a56f1cf8b67180b830117c325c668128d79bf5c029ec01219e10e3ff4ab extends \XLite\Core\Templating\Twig\Template
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
        echo "<table cellpadding=\"0\" cellspacing=\"0\" class=\"totals simple-list\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewList", array(0 => "invoice.base.totals", 1 => array("order" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()))), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 8
            echo "        ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["w"], "display", array(), "method"), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</table>
<div class=\"after-totals\">
    ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "invoice.base.totals.after"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/common/order/invoice/parts/totals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 12,  35 => 10,  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice totals*/
/*  #*/
/*  # @ListChild (list="invoice.base", weight="60")*/
/*  #}*/
/* <table cellpadding="0" cellspacing="0" class="totals simple-list">*/
/*     {% for w in this.getViewList('invoice.base.totals', {'order': this.order}) %}*/
/*         {{ w.display() }}*/
/*     {% endfor %}*/
/* </table>*/
/* <div class="after-totals">*/
/*     {{ widget_list('invoice.base.totals.after') }}*/
/* </div>*/
/* */
