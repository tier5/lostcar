<?php

/* form_model/product/info/inventory_tracking_description.twig */
class __TwigTemplate_0979315f846e140ce1f780494a540cd8b4f336bfe217ef655f087afc4ad89453 extends \XLite\Core\Templating\Twig\Template
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
        // line 1
        echo "
<a href=\"";
        // line 2
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getInventoryTrackingURL", array(), "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Inventory tracking options")), "html", null, true);
        echo "</a>";
    }

    public function getTemplateName()
    {
        return "form_model/product/info/inventory_tracking_description.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* */
/* <a href="{{ this.getInventoryTrackingURL() }}">{{ t('Inventory tracking options') }}</a>*/
