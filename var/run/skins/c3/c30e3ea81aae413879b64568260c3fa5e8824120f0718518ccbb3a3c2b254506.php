<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/header/main.header.twig */
class __TwigTemplate_10d66a7d92847f4750f5c05aef085d1182bbffbb9b2faf23d22ae9693001dea6 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div id=\"header-area\">
  <div class=\"desktop-header\">
      <div class=\"infoLine\">
          <div class=\"container\">
              ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.header.topline"))), "html", null, true);
        echo "
          </div>
      </div>
      <div class=\"container\">
          ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.header"))), "html", null, true);
        echo "
      </div>
  </div>

  ";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.header.mobile"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/header/main.header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 18,  32 => 14,  25 => 10,  19 => 6,);
    }
}
/* {##*/
/*  # Header*/
/*  #*/
/*  # @ListChild (list="layout.main", weight="200")*/
/*  #}*/
/* <div id="header-area">*/
/*   <div class="desktop-header">*/
/*       <div class="infoLine">*/
/*           <div class="container">*/
/*               {{ widget_list('layout.header.topline') }}*/
/*           </div>*/
/*       </div>*/
/*       <div class="container">*/
/*           {{ widget_list('layout.header') }}*/
/*       </div>*/
/*   </div>*/
/* */
/*   {{ widget_list('layout.header.mobile') }}*/
/* </div>*/
/* */
