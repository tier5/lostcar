<?php

/* /var/www/html/lostcar/skins/customer/modules/CDev/ContactUs/contact_us/fields/field.email.twig */
class __TwigTemplate_e861b41d691e4f200bdb801a793ba8d9ba65e6dc82ad93c40b0379fbb49b6635 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"form-item\">
  <label for=\"email\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Your e-mail")), "html", null, true);
        echo "
    <span class=\"form-required\" title=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("This field is required.")), "html", null, true);
        echo "\">*</span>
  </label>
  ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Text\\Email", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Email Address")), "fieldName" => "email", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getValue", array(0 => "email"), "method"), "fieldOnly" => "true", "required" => "true"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/CDev/ContactUs/contact_us/fields/field.email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 12,  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # E-mail*/
/*  #*/
/*  # @ListChild (list="contact-us.send.fields", weight="200")*/
/*  #}*/
/* */
/* <div class="form-item">*/
/*   <label for="email">*/
/*     {{ t('Your e-mail') }}*/
/*     <span class="form-required" title="{{ t('This field is required.') }}">*</span>*/
/*   </label>*/
/*   {{ widget('XLite\\View\\FormField\\Input\\Text\\Email', placeholder=t('Email Address'), fieldName='email', value=this.getValue('email'), fieldOnly='true', required='true') }}*/
/* </div>*/
/* */
