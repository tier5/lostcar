<?php

/* modules/CDev/Sale/details/label.twig */
class __TwigTemplate_9dfadd3d589557144e36a05d42eee7a90289448661f56fe7524733dfb51441b7 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li>
";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Labels", "labels" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLabel", array(0 => twig_constant("SALE_PRICE_LABEL", (isset($context["this"]) ? $context["this"] : null))), "method")))), "html", null, true);
        echo "
</li>";
    }

    public function getTemplateName()
    {
        return "modules/CDev/Sale/details/label.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Label (internal list element)*/
/*  #}*/
/* <li>*/
/* {{ widget('\\XLite\\View\\Labels', labels=this.getLabel(constant('SALE_PRICE_LABEL', this))) }}*/
/* </li>*/
