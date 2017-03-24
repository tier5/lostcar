<?php

/* /var/www/html/lostcar/skins/customer/modules/CDev/ContactUs/contact_us/fields/action.send.twig */
class __TwigTemplate_1451ee6f37fad4ca9e54087ab06c83c8d3a73641be1edabafa1680dbd67208cf extends \XLite\Core\Templating\Twig\Template
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
<div class=\"form-action\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Send"))))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/CDev/ContactUs/contact_us/fields/action.send.twig";
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
/*  # Name*/
/*  #*/
/*  # @ListChild (list="contact-us.send.fields", weight="1000")*/
/*  #}*/
/* */
/* <div class="form-action">*/
/*   {{ widget('\\XLite\\View\\Button\\Submit', label=t('Send')) }}*/
/* </div>*/
/* */
