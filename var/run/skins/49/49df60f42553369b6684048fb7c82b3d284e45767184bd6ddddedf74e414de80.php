<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/Reviews/review/parts/buttons.twig */
class __TwigTemplate_a4e6d190fa577eec0e1d0e563895a917a37a1cf921463378cdf344e52ba227b6 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"model form buttons\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/Reviews/review/parts/buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Buttons*/
/*  #*/
/*  # @ListChild (list="review.add.buttons", weight="500")*/
/*  #}*/
/* */
/* <div class="model form buttons">*/
/*   {{ widget('\\XLite\\View\\Button\\Submit') }}*/
/* </div>*/
/* */
