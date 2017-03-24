<?php

/* /var/www/html/lostcar/skins/admin/order/page/parts/title.box.twig */
class __TwigTemplate_4c48b56fafbcabce5f2ad4fd42ee782b9ba9085dbef0a5a59932d2929659c83f extends \XLite\Core\Templating\Twig\Template
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
<div class=\"title-box\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "order.title.box"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/page/parts/title.box.twig";
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
/*  # @ListChild (list="order.title.row", weight="200")*/
/*  #}*/
/* */
/* <div class="title-box">*/
/*   {{ widget_list('order.title.box') }}*/
/* </div>*/
/* */
