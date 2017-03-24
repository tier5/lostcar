<?php

/* /var/www/html/lostcar/skins/admin/order/page/parts/action.statuses.twig */
class __TwigTemplate_62154252cdf9cb3083ba1f67a47995440399e795eff89665180e9c3d50443d49 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"statuses\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "order.actions.statuses"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/page/parts/action.statuses.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Payment actions*/
/*  #*/
/*  # @ListChild (list="order.actions", weight="1000")*/
/*  #}*/
/* */
/* <div class="statuses">*/
/*   {{ widget_list('order.actions.statuses') }}*/
/* </div>*/
/* */
