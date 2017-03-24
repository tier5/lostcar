<?php

/* /var/www/html/lostcar/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table/columns/component.twig */
class __TwigTemplate_1671946d4f4aa995e3f1ff50b26d21b5dc20982c3db869e4ec2944b2d7e9ed11 extends \XLite\Core\Templating\Twig\Template
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
<td class=\"module-info\">
  <span class=\"name\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getName", array(), "method"), "html", null, true);
        echo "</span>
  <span class=\"author\">(";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("by")), "html", null, true);
        echo " ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getAuthor", array(), "method"), "html", null, true);
        echo ")</span>
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table/columns/component.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 10,  23 => 9,  19 => 7,);
    }
}
/* {##*/
/*  # Entry name and author*/
/*  #*/
/*  # @ListChild (list="upgrade.step.ready_to_install.entries_list.sections.table.columns", weight="100")*/
/*  # @ListChild (list="upgrade.step.completed.entries_list.sections.table.columns", weight="100")*/
/*  #}*/
/* */
/* <td class="module-info">*/
/*   <span class="name">{{ this.entry.getName() }}</span>*/
/*   <span class="author">({{ t('by') }} {{ this.entry.getAuthor() }})</span>*/
/* </td>*/
/* */
