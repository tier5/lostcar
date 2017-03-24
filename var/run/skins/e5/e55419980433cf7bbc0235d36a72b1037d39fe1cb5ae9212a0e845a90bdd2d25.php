<?php

/* form_field/separator/regular.twig */
class __TwigTemplate_cd1fc86aca52eee707d20bcc30dda62bedd1daf117b94c86ee661a510b5bdde1 extends \XLite\Core\Templating\Twig\Template
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
        echo "<h3 id=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFieldId", array(), "method"), "html", null, true);
        echo "\" data-name=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"), "html", null, true);
        echo "\">
";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLabel", array(), "method"))), "html", null, true);
        echo "
";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasHelp", array(), "method")) {
            // line 7
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Tooltip", "text" => call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "help"), "method"))), "helpWidget" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "helpWidget"), "method"), "isImageTag" => "true", "className" => "help-icon"))), "html", null, true);
            echo "
";
        }
        // line 9
        echo "</h3>
";
    }

    public function getTemplateName()
    {
        return "form_field/separator/regular.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  32 => 7,  30 => 6,  26 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Separator field*/
/*  #}*/
/* <h3 id="{{ this.getFieldId() }}" data-name="{{ this.getName() }}">*/
/* {{ t(this.getLabel()) }}*/
/* {% if this.hasHelp() %}*/
/*   {{ widget('\\XLite\\View\\Tooltip', text=t(this.getParam('help')), helpWidget=this.getParam('helpWidget'), isImageTag='true', className='help-icon') }}*/
/* {% endif %}*/
/* </h3>*/
/* */
