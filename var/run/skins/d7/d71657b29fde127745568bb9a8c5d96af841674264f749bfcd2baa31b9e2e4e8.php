<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/Reviews/reviews_page/parts/page.reviews_list.twig */
class __TwigTemplate_773735f59ffaaf78cedafff51c7fb6429ba87cb7c131d26629be5a5abf60591e extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\Reviews\\View\\ItemsList\\Model\\Customer\\Review"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/Reviews/reviews_page/parts/page.reviews_list.twig";
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
/*  # Reviews list*/
/*  #*/
/*  # @ListChild (list="product.reviews.page", weight="300")*/
/*  #}*/
/* */
/* {{ widget('XLite\\Module\\XC\\Reviews\\View\\ItemsList\\Model\\Customer\\Review') }}*/
/* */
