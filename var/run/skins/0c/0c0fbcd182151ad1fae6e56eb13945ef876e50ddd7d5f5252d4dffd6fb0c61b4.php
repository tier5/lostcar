<?php

/* /var/www/html/lostcar/skins/admin/dashboard/parts/sidebar/order_stats.twig */
class __TwigTemplate_b8ae34a3727a47c0a6c709440c3859bd11753b828050e9f0f70874c466e5da7a extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Order\\Statistics\\MiniInformer"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/dashboard/parts/sidebar/order_stats.twig";
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
/*  # Recent orders block*/
/*  #*/
/*  # @ListChild (list="dashboard-sidebar", weight="100")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Order\\Statistics\\MiniInformer') }}*/
/* */
