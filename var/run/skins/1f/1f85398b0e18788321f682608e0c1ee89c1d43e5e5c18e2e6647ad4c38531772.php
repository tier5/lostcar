<?php

/* /var/www/html/lostcar/skins/admin/footer/right/marketplace_terms.twig */
class __TwigTemplate_965a63b1905b627ba29b61093f65a3c237d42ed7840f6012d36da8fcd9f40a1a extends \XLite\Core\Templating\Twig\Template
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
        if ((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTarget", array(), "method") == "addons_list_marketplace") || ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTarget", array(), "method") == "addons_list_installed"))) {
            // line 7
            echo "  <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getXCartURL", array(0 => "http://www.x-cart.com/module-marketplace-terms-of-use.html"), "method"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Module Marketplace. Terms of use")), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/footer/right/marketplace_terms.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Link to the Module marketplace terms of use page*/
/*  #*/
/*  # @ListChild (list="admin.main.page.footer.left", weight="100")*/
/*  #}*/
/* {% if this.getTarget() == 'addons_list_marketplace' or this.getTarget() == 'addons_list_installed' %}*/
/*   <a href="{{ this.getXCartURL('http://www.x-cart.com/module-marketplace-terms-of-use.html') }}" target="_blank">{{ t('Module Marketplace. Terms of use') }}</a>*/
/* {% endif %}*/
/* */
