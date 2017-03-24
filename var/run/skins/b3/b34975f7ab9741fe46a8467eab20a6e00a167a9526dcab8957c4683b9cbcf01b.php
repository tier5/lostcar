<?php

/* product/search/parts/condition.by_conditions.twig */
class __TwigTemplate_3a402492823f4603ff9e1115b17c1d1844390dc0537e4391ccb70923f2a8eb11 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
<span>";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Search in")), "html", null, true);
        echo ":</span>
<ul class=\"by-conditions\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.search.conditions.by-keywords"))), "html", null, true);
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "product/search/parts/condition.by_conditions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # By conditions*/
/*  #}*/
/* */
/* <span>{{ t('Search in') }}:</span>*/
/* <ul class="by-conditions">*/
/*   {{ widget_list('product.search.conditions.by-keywords') }}*/
/* </ul>*/
/* */
