<?php

/* /var/www/html/lostcar/skins/crisp_white/customer/layout/header/mobile_header_parts/right_menu.twig */
class __TwigTemplate_9ba7b98f6f6c1400873a275af6b83186f9c195d38a34abe3d8fb7cc1e56b8764 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"dropdown mobile_header-right_menu\">
    <div class=\"header-right-bar\">
      ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.header.right.mobile", "displayMode" => "horizontal"))), "html", null, true);
        echo "
    </div>
</li>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/crisp_white/customer/layout/header/mobile_header_parts/right_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Header right box*/
/*  #*/
/*  # @ListChild (list="layout.header.mobile.menu", weight="1000")*/
/*  #}*/
/* */
/* <li class="dropdown mobile_header-right_menu">*/
/*     <div class="header-right-bar">*/
/*       {{ widget_list('layout.header.right.mobile', displayMode='horizontal') }}*/
/*     </div>*/
/* </li>*/
