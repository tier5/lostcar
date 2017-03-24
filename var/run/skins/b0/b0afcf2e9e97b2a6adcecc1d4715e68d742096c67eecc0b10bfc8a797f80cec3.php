<?php

/* modules/XC/Reviews/button/popup_link.twig */
class __TwigTemplate_6cce371a22dc3a512fe86e7bdc4a47dd6ff2cf79cabd839dc1ae574e11c9ba0e extends \XLite\Core\Templating\Twig\Template
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
        echo "<p class=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getClass", array(), "method"), "html", null, true);
        echo "\">
";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getURLParams", array(), "method")), "method"), "html", null, true);
        echo "
<span class=\"link\">";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getButtonContent", array(), "method"))), "html", null, true);
        echo "</span>
</p>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/Reviews/button/popup_link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 6,  24 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Popup link*/
/*  #}*/
/* <p class="{{ this.getClass() }}">*/
/* {{ this.displayCommentedData(this.getURLParams()) }}*/
/* <span class="link">{{ t(this.getButtonContent()) }}</span>*/
/* </p>*/
/* */
