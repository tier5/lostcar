<?php

/* /var/www/html/lostcar/skins/admin/items_list/module/install/items_list/banner.twig */
class __TwigTemplate_d2f4d701fd580cb6b10f2dece93798ed6f19ff2a4c3b6f1c8c199c7cf0e6082c extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLandingPage", array(), "method")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\ModulesManager\\Banner"))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/module/install/items_list/banner.twig";
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
/*  # Marketplace banner*/
/*  #*/
/*  # @ListChild (list="marketplace.top-controls", weight="100")*/
/*  #}*/
/* */
/* {% if this.isLandingPage() %}*/
/*   {{ widget('\\XLite\\View\\ModulesManager\\Banner') }}*/
/* {% endif %}*/
/* */
