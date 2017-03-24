<?php

/* /var/www/html/lostcar/skins/customer/modules/CDev/ContactUs/contact_us/fields/field.captcha.twig */
class __TwigTemplate_83c754e97a42098451bc6fbdf38f368136dc8f6bb52b6700d1a0b4d043a155de extends \XLite\Core\Templating\Twig\Template
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
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCaptcha", array(), "method");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/CDev/ContactUs/contact_us/fields/field.captcha.twig";
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
/*  # Captcha*/
/*  #*/
/*  # @ListChild (list="contact-us.send.fields", weight="500")*/
/*  #}*/
/* */
/* <div class="form-item">*/
/*   {{ this.getCaptcha()|raw }}*/
/* </div>*/
/* */
