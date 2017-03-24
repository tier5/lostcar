<?php

/* /var/www/html/lostcar/skins/admin/attribute_groups/note.twig */
class __TwigTemplate_459658f733c74be1f6d4a3c44f497301cece8658665605ece6062892e2dd92ff extends \XLite\Core\Templating\Twig\Template
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
<div class=\"note additional-panel ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAdditionalPanelStyle", array(), "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Editing attribute groups on this page won't affect other product classes which use these groups")), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/attribute_groups/note.twig";
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
/*  # Attribute groups list table template*/
/*  #*/
/*  # @ListChild (list="itemsList.attributegroup.footer", weight="10")*/
/*  #}*/
/* */
/* <div class="note additional-panel {{ this.getAdditionalPanelStyle() }}">{{ t('Editing attribute groups on this page won\'t affect other product classes which use these groups') }}</div>*/
/* */
