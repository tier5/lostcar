<?php

/* /var/www/html/lostcar/skins/admin/modules/XC/BulkEditing/bulk_edit/selected.twig */
class __TwigTemplate_296e1d3a93d0e5100e06541bc3cf3b97defbc350e8cc07e8d469fe6b4086a427 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getScenarioView", array(), "method")))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/XC/BulkEditing/bulk_edit/selected.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 4,);
    }
}
/* {##*/
/*  # @ListChild (list="form_model.xc.bulkediting.product.after", weight="100")*/
/*  #}*/
/* {{ widget(this.getScenarioView()) }}*/
/* */
