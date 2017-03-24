<?php

/* /var/www/html/lostcar/skins/admin/payment/add_method/parts/payment_gateways.note.twig */
class __TwigTemplate_9c1b25c1302a0b4ba4c7010208620ecf18715941fda4b3a2e748217bf2154428 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"small-head\">";
        // line 7
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Requires registered merchant account"));
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/payment/add_method/parts/payment_gateways.note.twig";
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
/*  # Payment getaways*/
/*  #*/
/*  # @ListChild (list="itemsList.onlinemethods.header", weight="10")*/
/*  #}*/
/* */
/* <div class="small-head">{{ t('Requires registered merchant account')|raw }}</div>*/
