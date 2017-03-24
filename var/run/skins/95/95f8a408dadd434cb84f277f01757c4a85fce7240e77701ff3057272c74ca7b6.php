<?php

/* /var/www/html/lostcar/skins/admin/items_list/module/manage/parts/columns/description.twig */
class __TwigTemplate_9802b22ecf49149ed20519f8417dc27570974b9c146c5db1d11f64b786703cf5 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"module-description-section\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "module-description-section", "type" => "nested", "module" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())))), "html", null, true);
        echo "
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/module/manage/parts/columns/description.twig";
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
/*  # Modules list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns", weight="70")*/
/*  # @ListChild (list="itemsList.module.install.columns", weight="70")*/
/*  #}*/
/* <td class="module-description-section">*/
/*   {{ widget_list('module-description-section', type='nested', module=this.module) }}*/
/* </td>*/
/* */
