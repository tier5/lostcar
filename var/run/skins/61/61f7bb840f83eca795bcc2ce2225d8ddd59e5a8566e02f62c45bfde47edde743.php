<?php

/* product/attributes/custom.twig */
class __TwigTemplate_865a75d1af2182491c0767318b038aa638d43643e7ed95adfea7a5a1999d8d70 extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 5
        $this->startForm("XLite\\View\\Form\\Product\\Modify\\Attributes");        // line 6
        echo "
  <div class=\"dialog-block\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Product\\Details\\Admin\\Attributes", "personalOnly" => "true"))), "html", null, true);
        echo "
  </div>
  ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\StickyPanel\\Product\\Attributes"))), "html", null, true);
        echo "

";
        $this->endForm();        // line 13
        echo "
";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Product\\Details\\Admin\\CreateBox"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "product/attributes/custom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 14,  37 => 13,  32 => 10,  27 => 8,  23 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # "Custom Attributes" tab*/
/*  #}*/
/* */
/* {% form 'XLite\\View\\Form\\Product\\Modify\\Attributes' %}*/
/* */
/*   <div class="dialog-block">*/
/*     {{ widget('XLite\\View\\Product\\Details\\Admin\\Attributes', personalOnly='true') }}*/
/*   </div>*/
/*   {{ widget('\\XLite\\View\\StickyPanel\\Product\\Attributes') }}*/
/* */
/* {% endform %}*/
/* */
/* {{ widget('XLite\\View\\Product\\Details\\Admin\\CreateBox') }}*/
/* */
