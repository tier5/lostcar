<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/NextPreviousProduct/product/parts/body.dropdown.twig */
class __TwigTemplate_3a08079cbb86045f907e212dd51ec2d449df7c382dfe27f7fe62f65f22925b5e extends \XLite\Core\Templating\Twig\Template
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
<div class=\"next-previous-dropdown\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "next_previous.product.body.dropdown"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/NextPreviousProduct/product/parts/body.dropdown.twig";
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
/*  # Next product links*/
/*  #*/
/*  # @ListChild (list="next_previous.product.body", weight="300")*/
/*  #}*/
/* */
/* <div class="next-previous-dropdown">*/
/*     {{ widget_list('next_previous.product.body.dropdown') }}*/
/* </div>*/
/* */
