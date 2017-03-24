<?php

/* /var/www/html/lostcar/skins/crisp_white/customer/layout/header/header.bar.twig */
class __TwigTemplate_69e3995c4369b512780ffcf158a7d3b7b26e18a3e961dd58c97f2bd9170aa76e extends \XLite\Core\Templating\Twig\Template
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
        echo "<div id=\"header-bar\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.header.bar"))), "html", null, true);
        echo "
</div>
<div class=\"header-break\"></div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/crisp_white/customer/layout/header/header.bar.twig";
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
/*  # Header bar*/
/*  #*/
/*  # @ListChild (list="layout.header", weight="200")*/
/*  #}*/
/* <div id="header-bar">*/
/*   {{ widget_list('layout.header.bar') }}*/
/* </div>*/
/* <div class="header-break"></div>*/
