<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/CanadaPost/products_return/create/parts/main.form.twig */
class __TwigTemplate_d174e1e111e6624db80938536c0e020f4288ec2dd51dafd9a0d7272e48901a54 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"return-form\">

  ";
        // line 9
        $this->startForm("\\XLite\\Module\\XC\\CanadaPost\\View\\Form\\CreateReturn");        // line 10
        echo "    
    ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "capost_create_return.form"))), "html", null, true);
        echo "

  ";
        $this->endForm();        // line 14
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/CanadaPost/products_return/create/parts/main.form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  28 => 11,  25 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Create return :: form*/
/*  #*/
/*  # @ListChild (list="capost_create_return", weight="200")*/
/*  #}*/
/* */
/* <div class="return-form">*/
/* */
/*   {% form '\\XLite\\Module\\XC\\CanadaPost\\View\\Form\\CreateReturn' %}*/
/*     */
/*     {{ widget_list('capost_create_return.form') }}*/
/* */
/*   {% endform %}*/
/* */
/* </div>*/
/* */
