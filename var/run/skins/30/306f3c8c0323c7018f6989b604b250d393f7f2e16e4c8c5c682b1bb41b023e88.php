<?php

/* /var/www/html/lostcar/skins/admin/order/page/parts/title.box.history.twig */
class __TwigTemplate_42afa331771d2df5eb258e48f7662f99e921b4db4910b969c80e3c4b61a1f005 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isHistoryVisible", array(), "method")) {
            // line 8
            echo "  <div class=\"history\">
    <a href=\"#history\" title=\"";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("View order history")), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("View order history")), "html", null, true);
            echo "</a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/page/parts/title.box.history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Order : title box : history link*/
/*  #*/
/*  # @ListChild (list="order.title.box", weight="200")*/
/*  #}*/
/* */
/* {% if this.isHistoryVisible() %}*/
/*   <div class="history">*/
/*     <a href="#history" title="{{ t('View order history') }}">{{ t('View order history') }}</a>*/
/*   </div>*/
/* {% endif %}*/
/* */
