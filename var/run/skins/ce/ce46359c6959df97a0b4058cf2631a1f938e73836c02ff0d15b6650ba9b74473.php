<?php

/* /var/www/html/lostcar/skins/admin/items_list/module/manage/parts/columns/module-description-section/description.twig */
class __TwigTemplate_c91cefbbde3d894c6c163acb64ee7752a19f56b2ad8d056e88b96cdfc1796a9e extends \XLite\Core\Templating\Twig\Template
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
<div class=\"description\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getDescription", array(), "method"), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/module/manage/parts/columns/module-description-section/description.twig";
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
/*  # Modules main description section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-description-section", weight="10")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section", weight="10")*/
/*  #}*/
/* */
/* <div class="description">{{ this.module.getDescription() }}</div>*/
/* */
