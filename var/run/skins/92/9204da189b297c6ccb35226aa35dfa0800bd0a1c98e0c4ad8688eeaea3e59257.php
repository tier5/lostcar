<?php

/* /var/www/html/lostcar/skins/admin/modules/CDev/XPaymentsConnector/account/saved_cards.table.twig */
class __TwigTemplate_abb438768fc38f9380ed39b41533e055dbe8ca7601c5c358ac7ee82b676c3e31 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<div>

";
        // line 10
        $this->startForm("\\XLite\\Module\\CDev\\XPaymentsConnector\\View\\Form\\SavedCards");        // line 11
        echo "
";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\CDev\\XPaymentsConnector\\View\\ItemsList\\Model\\SavedCards"))), "html", null, true);
        echo "

";
        $this->endForm();        // line 15
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/CDev/XPaymentsConnector/account/saved_cards.table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  28 => 12,  25 => 11,  24 => 10,  19 => 7,);
    }
}
/* {##*/
/*  # iframe */
/*  #*/
/*  #*/
/*  # @ListChild (list="admin.account.saved_cards.table", weight="100")*/
/*  #}*/
/* */
/* <div>*/
/* */
/* {% form '\\XLite\\Module\\CDev\\XPaymentsConnector\\View\\Form\\SavedCards' %}*/
/* */
/* {{ widget('XLite\\Module\\CDev\\XPaymentsConnector\\View\\ItemsList\\Model\\SavedCards') }}*/
/* */
/* {% endform %}*/
/* */
/* </div>*/
/* */
