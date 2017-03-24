<?php

/* /var/www/html/lostcar/skins/admin/modules/CDev/GoogleAnalytics/promo.twig */
class __TwigTemplate_fcab15e336b97d1f2933abb94e17a2ffcd8d0b9fc3d4960b5dfb96f2d2b8e84b extends \XLite\Core\Templating\Twig\Template
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
        if (("CDev\\GoogleAnalytics" == $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getActualName", array(), "method"))) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "promo.twig", "promoId" => "ga-promo", "promoContent" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Want help with SEO? Ask X-Cart Guru", array("url" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSeoPromoURL", array(), "method"))))))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/CDev/GoogleAnalytics/promo.twig";
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
/*  # Promo block*/
/*  #*/
/*  # @ListChild (list="crud.modulesettings.formHeader", zone="admin", weight="50")*/
/*  #}*/
/* */
/* {% if 'CDev\\GoogleAnalytics' == this.module.getActualName() %}*/
/*   {{ widget(template='promo.twig', promoId='ga-promo', promoContent=t('Want help with SEO? Ask X-Cart Guru', {'url': this.getSeoPromoURL()})) }}*/
/* {% endif %}*/
/* */
