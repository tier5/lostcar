<?php

/* /var/www/html/lostcar/skins/admin/zones/details/parts/actions.twig */
class __TwigTemplate_c6fb1749a056e7fc63a9d664bd31ff7913bbf5502a15a8974cb3f23c586e7d33 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"zone-actions\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\StickyPanel\\ZoneDetails"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/zones/details/parts/actions.twig";
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
/*  # Zone details actions block template*/
/*  #*/
/*  # @ListChild (list="zones.zone", weight="300")*/
/*  #}*/
/* */
/* <div class="zone-actions">*/
/*   {{ widget('\\XLite\\View\\StickyPanel\\ZoneDetails') }}*/
/* </div>*/
/* */
