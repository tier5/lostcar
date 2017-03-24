<?php

/* /var/www/html/lostcar/skins/customer/product/details/parts/common.loupe.twig */
class __TwigTemplate_559bbb9c56739232d0a7fa0692a6954ce35053e7db70abd8bbe056b8e7637542 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLoupeVisible", array(), "method")) {
            // line 8
            echo "  <a href=\"javascript:void(0);\" class=\"loupe\"><img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/spacer.gif")), "html", null, true);
            echo "\" alt=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Zoom image")), "html", null, true);
            echo "\" /></a>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/product/details/parts/common.loupe.twig";
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
/*  # Image loupe*/
/*  #*/
/*  # @ListChild (list="product.details.page.image", weight="15")*/
/*  #}*/
/* */
/* {% if this.isLoupeVisible() %}*/
/*   <a href="javascript:void(0);" class="loupe"><img src="{{ asset('images/spacer.gif') }}" alt="{{ t('Zoom image') }}" /></a>*/
/* {% endif %}*/
/* */
