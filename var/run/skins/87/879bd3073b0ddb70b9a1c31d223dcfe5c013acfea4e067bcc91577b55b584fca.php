<?php

/* /var/www/html/lostcar/skins/admin/modules/XC/CanadaPost/search_panel/return/clear_search.twig */
class __TwigTemplate_243b78ec5eea69ed931c059fe653c1706fb45525f87144881a48b8d90451e6e5 extends \XLite\Core\Templating\Twig\Template
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
<a href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "capost_returns", "clearSearch")), "html", null, true);
        echo "\" class=\"clear-search\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Clear search")), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/XC/CanadaPost/search_panel/return/clear_search.twig";
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
/*  # Clear search*/
/*  #*/
/*  # @ListChild (list="searchPanel.xc.canadapost.productsreturn.admin.main.actions")*/
/*  #}*/
/* */
/* <a href="{{ url('capost_returns', 'clearSearch') }}" class="clear-search">{{ t('Clear search') }}</a>*/
/* */
