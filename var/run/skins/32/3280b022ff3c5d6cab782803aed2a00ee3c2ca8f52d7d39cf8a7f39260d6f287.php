<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/CanadaPost/products_return/create/parts/main.form.message.twig */
class __TwigTemplate_2c66f71c57dc64e8b2e2bbf4f8c877ec90a5deb6cb1629a8021c49f2eeb8db15 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"return-message\">

  <label for=\"message\" class=\"for-message\">
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Message")), "html", null, true);
        echo "
    <span class=\"form-required\" title=\"";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("This field is required.")), "html", null, true);
        echo "\">*</span>
  </label>

  <div class=\"resizable-textarea\">
    ";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Textarea\\Simple", "placeholder" => "Your Message", "fieldName" => "message", "value" => "", "fieldOnly" => "true", "required" => "true"))), "html", null, true);
        echo "
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/CanadaPost/products_return/create/parts/main.form.message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 15,  29 => 11,  25 => 10,  19 => 6,);
    }
}
/* {##*/
/*  # Create return :: form :: message*/
/*  #*/
/*  # @ListChild (list="capost_create_return.form", weight="200")*/
/*  #}*/
/* */
/* <div class="return-message">*/
/* */
/*   <label for="message" class="for-message">*/
/*     {{ t('Message') }}*/
/*     <span class="form-required" title="{{ t('This field is required.') }}">*</span>*/
/*   </label>*/
/* */
/*   <div class="resizable-textarea">*/
/*     {{ widget('XLite\\View\\FormField\\Textarea\\Simple', placeholder='Your Message', fieldName='message', value='', fieldOnly='true', required='true') }}*/
/*   </div>*/
/* */
/* </div>*/
/* */
