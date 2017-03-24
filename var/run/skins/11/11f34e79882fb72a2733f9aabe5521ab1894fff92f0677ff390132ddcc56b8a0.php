<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/Reviews/reviews_page/parts/page.reviews_list_header.twig */
class __TwigTemplate_cf03a9745dbb512e8f394b6ceadc826934da154898181fdcec76c79c730acf72 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"header\">
  <div class=\"left\">
    <div class=\"head-h2\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Customer reviews")), "html", null, true);
        echo "</div>
  </div>

  <div class=\"right\">
    <div class=\"buttons\">
      ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "reviews.general"))), "html", null, true);
        echo "
    </div>
  </div>

  <div class=\"line\"></div>

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/Reviews/reviews_page/parts/page.reviews_list_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 14,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Reviews list header*/
/*  #*/
/*  # @ListChild (list="product.reviews.page", weight="200")*/
/*  #}*/
/* */
/* <div class="header">*/
/*   <div class="left">*/
/*     <div class="head-h2">{{ t('Customer reviews') }}</div>*/
/*   </div>*/
/* */
/*   <div class="right">*/
/*     <div class="buttons">*/
/*       {{ widget_list('reviews.general') }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="line"></div>*/
/* */
/* </div>*/
/* */
