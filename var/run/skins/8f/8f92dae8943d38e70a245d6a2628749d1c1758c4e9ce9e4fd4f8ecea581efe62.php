<?php

/* /var/www/html/lostcar/skins/common/order/invoice/parts/totals.total.twig */
class __TwigTemplate_3d0cdcce48991de19a96400eb59e240d650807dd9d5d1aadb8a923271f5d1e83 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"total\">
  <span class=\"title\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Grand total")), "html", null, true);
        echo ":</span>
  <span class=\"value\">";
        // line 8
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrderTotal", array(), "method");
        echo "</span>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/common/order/invoice/parts/totals.total.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice totals : total*/
/*  #*/
/*  # @ListChild (list="invoice.base.totals.after", weight="10")*/
/*  #}*/
/* <div class="total">*/
/*   <span class="title">{{ t('Grand total') }}:</span>*/
/*   <span class="value">{{ this.getOrderTotal()|raw }}</span>*/
/* </div>*/
/* */
