<?php

/* button/popup_button.twig */
class __TwigTemplate_c45de90f0399ea92b9b70e3105f1889c2d9fa94d9569af1f4cbf010d9063a3e3 extends \XLite\Core\Templating\Twig\Template
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
        echo "<button type=\"button\" class=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getClass", array(), "method"), "html", null, true);
        echo "\">
  ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getURLParams", array(), "method")), "method"), "html", null, true);
        echo "
";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "icon-style"), "method")) {
            // line 7
            echo "  <i class=\"button-icon ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "icon-style"), "method"), "html", null, true);
            echo "\"></i>
";
        }
        // line 9
        echo "  <span>";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getButtonContent", array(), "method"))), "html", null, true);
        echo "</span>
</button>
";
    }

    public function getTemplateName()
    {
        return "button/popup_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  30 => 7,  28 => 6,  24 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Popup button*/
/*  #}*/
/* <button type="button" class="{{ this.getClass() }}">*/
/*   {{ this.displayCommentedData(this.getURLParams()) }}*/
/* {% if this.getParam('icon-style') %}*/
/*   <i class="button-icon {{ this.getParam('icon-style') }}"></i>*/
/* {% endif %}*/
/*   <span>{{ t(this.getButtonContent()) }}</span>*/
/* </button>*/
/* */
