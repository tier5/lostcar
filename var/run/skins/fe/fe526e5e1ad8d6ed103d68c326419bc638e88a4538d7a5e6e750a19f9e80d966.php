<?php

/* query_marketplace/body.twig */
class __TwigTemplate_08f2e77f6f08d1fb49394c431644359faee6232e510b4c070c6ce7a86d4ec78a extends \XLite\Core\Templating\Twig\Template
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
        echo "
<div id=\"queryMarketplace\" title=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Updating data from the marketplace...")), "html", null, true);
        echo "\">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCommentedData", array(), "method")), "method"), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "query_marketplace/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Query marketplace widget*/
/*  #}*/
/* */
/* <div id="queryMarketplace" title="{{ t('Updating data from the marketplace...') }}">*/
/*   {{ this.displayCommentedData(this.getCommentedData()) }}*/
/* </div>*/
/* */
