<?php

/* /var/www/html/lostcar/skins/customer/header/parts/meta_keywords.twig */
class __TwigTemplate_fa251f1faab98db23fd70d0f103a358bdb5df84e4291a8e08b60037b7851e130 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKeywords", array(), "method")) {
            // line 8
            echo "  <meta name=\"keywords\" content=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKeywords", array(), "method"))), "html", null, true);
            echo "\" />
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/header/parts/meta_keywords.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Head list children*/
/*  #*/
/*  # @ListChild (list="head", weight="700")*/
/*  #}*/
/* */
/* {% if this.getKeywords() %}*/
/*   <meta name="keywords" content="{{ t(this.getKeywords()) }}" />*/
/* {% endif %}*/
/* */
