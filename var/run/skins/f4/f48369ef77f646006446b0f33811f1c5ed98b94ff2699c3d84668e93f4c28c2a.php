<?php

/* /var/www/html/lostcar/skins/admin/order/page/parts/title.row.twig */
class __TwigTemplate_6c1c5a64fb253c865610f5e7db7a25d224f2e24be72837867b1875727d1e6ffd extends \XLite\Core\Templating\Twig\Template
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
<div class=\"title-row\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "order.title.row"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/page/parts/title.row.twig";
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
/*  # Order : title box*/
/*  #*/
/*  # @ListChild (list="order", weight="100")*/
/*  #}*/
/* */
/* <div class="title-row">*/
/*   {{ widget_list('order.title.row') }}*/
/* </div>*/
/* */
