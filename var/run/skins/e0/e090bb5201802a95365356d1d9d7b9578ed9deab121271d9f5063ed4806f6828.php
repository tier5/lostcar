<?php

/* /var/www/html/lostcar/skins/crisp_white/customer/modules/CDev/ContactUs/contact_us/fields/field.name.twig */
class __TwigTemplate_3bc3c22318ba1cb86c63c397d011cdc57269cece5d9f0413cac1bdd5be78870a extends \XLite\Core\Templating\Twig\Template
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
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Text", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("")), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Your name")), "fieldName" => "name", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getValue", array(0 => "name"), "method"), "fieldOnly" => "false", "required" => "true"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/crisp_white/customer/modules/CDev/ContactUs/contact_us/fields/field.name.twig";
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
/*  # @ListChild (list="contact-us.send.fields", weight="100")*/
/*  #}*/
/* */
/* <div class="form-item">*/
/*   {{ widget('XLite\\View\\FormField\\Input\\Text', placeholder=t(''), label=t('Your name'), fieldName='name', value=this.getValue('name'), fieldOnly='false', required='true') }}*/
/* </div>*/
/* */
