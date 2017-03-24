<?php

/* /var/www/html/lostcar/skins/admin/items_list/module/install/parts/columns/info/author.twig */
class __TwigTemplate_b6914a0c425ac0593de32b3c02a5ef5f9e298eabcb37b42311396d7c06d78735 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"author\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Author")), "html", null, true);
        echo ": <span class=\"author-name\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getAuthorName", array(), "method"), "html", null, true);
        echo "</span></div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/module/install/parts/columns/info/author.twig";
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
/*  # Modules main section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section", weight="20")*/
/*  #}*/
/* */
/* <div class="author">{{ t('Author') }}: <span class="author-name">{{ this.module.getAuthorName() }}</span></div>*/
/* */
