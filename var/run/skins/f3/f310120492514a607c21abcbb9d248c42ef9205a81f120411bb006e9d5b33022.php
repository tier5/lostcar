<?php

/* layout/content/product.location.twig */
class __TwigTemplate_5632e2436586a6fb305397b3a0e03ae0dcbfaefbaf7c8374d57635d20e3dd258 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
";
        // line 5
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTarget", array(), "method") == "product")) {
            // line 6
            echo "<div id=\"breadcrumb\">
    ";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.main.breadcrumb"))), "html", null, true);
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/content/product.location.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Location (breadcrumbs) for product page*/
/*  #}*/
/* */
/* {% if this.getTarget() == 'product' %}*/
/* <div id="breadcrumb">*/
/*     {{ widget_list('layout.main.breadcrumb') }}*/
/* </div>*/
/* {% endif %}*/
/* */
