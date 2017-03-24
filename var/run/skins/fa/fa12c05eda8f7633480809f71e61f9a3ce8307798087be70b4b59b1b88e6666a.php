<?php

/* /var/www/html/lostcar/skins/admin/items_list/module/manage/parts/columns/module-main-section/cannot_enable/dependencies/details/link.twig */
class __TwigTemplate_4bf7ac310dc5161c4adcd37f7a7ca291692728c3ec641214a97bbea1dcf796e3 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<a";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDependencyHRef", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "depend", array())), "method")) {
            echo " href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDependencyHRef", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "depend", array())), "method"), "html", null, true);
            echo "\"";
        }
        echo ">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "depend", array()), "getModuleName", array(), "method"), "html", null, true);
        echo " (";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("by")), "html", null, true);
        echo " ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "depend", array()), "getAuthorName", array(), "method"), "html", null, true);
        echo ")</a>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/module/manage/parts/columns/module-main-section/cannot_enable/dependencies/details/link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Link to the module*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-main-section.messages.cannot_enable.dependencies.details", weight="100")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section.cannot_enable.dependencies.details", weight="100")*/
/*  #}*/
/* */
/* <a{% if this.getDependencyHRef(this.depend) %} href="{{ this.getDependencyHRef(this.depend) }}"{% endif %}>{{ this.depend.getModuleName() }} ({{ t('by') }} {{ this.depend.getAuthorName() }})</a>*/
/* */
