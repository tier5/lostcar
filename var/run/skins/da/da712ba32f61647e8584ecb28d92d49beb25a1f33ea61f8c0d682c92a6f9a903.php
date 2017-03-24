<?php

/* /var/www/html/lostcar/skins/customer/checkout/success_message.twig */
class __TwigTemplate_d9058c6a7669e486c08cd70cb93b9259ed3c3dd896ab23b84185c8bcb26605ac extends \XLite\Core\Templating\Twig\Template
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
<p>";
        // line 7
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Congratulations! Your order has been placed successfully"));
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/checkout/success_message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Order success note*/
/*  #*/
/*  # @ListChild (list="checkout.success.panel", weight="100")*/
/*  #}*/
/* */
/* <p>{{ t('Congratulations! Your order has been placed successfully')|raw }}</p>*/
/* */
