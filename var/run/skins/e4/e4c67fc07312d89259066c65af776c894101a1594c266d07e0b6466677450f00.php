<?php

/* /var/www/html/lostcar/skins/admin/banner_rotation/parts/promo.twig */
class __TwigTemplate_5d8b1df03478f89fb27cef3282b581713997e56fb1d968f18fe053d134abe263 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRecommendedModuleURL", array(), "method")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "promo.twig", "promoId" => "banner-system", "promoContent" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRecommendedModuleText", array(), "method")))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/banner_rotation/parts/promo.twig";
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
/*  # Banner promo block*/
/*  #*/
/*  # @ListChild (list="crud.bannerrotation.formHeader", zone="admin", weight="50")*/
/*  #}*/
/* */
/* {% if this.getRecommendedModuleURL() %}*/
/*   {{ widget(template='promo.twig', promoId='banner-system', promoContent=this.getRecommendedModuleText()) }}*/
/* {% endif %}*/
/* */
