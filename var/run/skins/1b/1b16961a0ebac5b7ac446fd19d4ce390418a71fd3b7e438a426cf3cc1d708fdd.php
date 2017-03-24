<?php

/* /var/www/html/lostcar/skins/admin/modules/XC/SagePay/sagepay_description.twig */
class __TwigTemplate_e7da2ad5a7b2a141d10b29df316dfbbcd5e4234516127d52deaba403c65aa57b extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getServiceName", array(), "method") == "SagePay form protocol")) {
            // line 8
            echo "  <div class=\"description\">
  ";
            // line 9
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("SagePay Form admin description"));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/XC/SagePay/sagepay_description.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Sage Pay method admin description*/
/*  #*/
/*  # @ListChild (list="payment.methods.list.header", weight="400")*/
/*  #}*/
/* */
/* {% if this.method.getServiceName() == 'SagePay form protocol' %}*/
/*   <div class="description">*/
/*   {{ t('SagePay Form admin description')|raw }}*/
/*   </div>*/
/* {% endif %}*/
/* */
