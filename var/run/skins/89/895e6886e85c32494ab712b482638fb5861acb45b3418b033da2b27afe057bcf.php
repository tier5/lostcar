<?php

/* /var/www/html/lostcar/skins/admin/items_list/module/install/parts/columns/info.twig */
class __TwigTemplate_124d978e70eebfd14473eddbd72fab32915e8405efb4645b18a38e960c14f5b3 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"module-info\">
  <ul>
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "itemsList.module.install.columns.module-description-section.info-element", "module" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())))), "html", null, true);
        echo "
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/module/install/parts/columns/info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Modules main section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section", weight="20")*/
/*  #}*/
/* */
/* <div class="module-info">*/
/*   <ul>*/
/*   {{ widget_list('itemsList.module.install.columns.module-description-section.info-element', module=this.module) }}*/
/*   </ul>*/
/* </div>*/
/* */
