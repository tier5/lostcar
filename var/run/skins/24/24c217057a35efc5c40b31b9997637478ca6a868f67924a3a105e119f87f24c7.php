<?php

/* /var/www/html/lostcar/skins/admin/product_classes/header_note.twig */
class __TwigTemplate_d49c719b85de8c56bb9804f0fdd15168b1c7e8ac24a0ffd34f64324f09e7eedd extends \XLite\Core\Templating\Twig\Template
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
<p class=\"page-note\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("This page allows you to edit global attributes, which are available for all products in your store, and attributes specific for classes of your products.")), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/product_classes/header_note.twig";
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
/*  # Product classes page template*/
/*  #*/
/*  # @ListChild (list="itemsList.productclass.header.before", weight="10")*/
/*  #}*/
/* */
/* <p class="page-note">{{ t('This page allows you to edit global attributes, which are available for all products in your store, and attributes specific for classes of your products.') }}</p>*/
/* */
