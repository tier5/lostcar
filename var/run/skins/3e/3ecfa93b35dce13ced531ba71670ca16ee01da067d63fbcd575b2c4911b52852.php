<?php

/* /var/www/html/lostcar/skins/admin/settings/email.twig */
class __TwigTemplate_0c9a0158b140c9e1d84e9943d0a13277233376ae8de0cc504ba7e7880c4f027b extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()) == "Email")) {
            // line 7
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\TestEmail"))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/settings/email.twig";
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
/*  # Email footer*/
/*  #*/
/*  # @ListChild (list="crud.settings.footer", zone="admin", weight="100")*/
/*  #}*/
/* {% if this.page == 'Email' %}*/
/*   {{ widget('\\XLite\\View\\TestEmail') }}*/
/* {% endif %}*/
/* */
