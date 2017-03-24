<?php

/* /var/www/html/lostcar/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table/columns/error.twig */
class __TwigTemplate_194c6b30ed700e8534047f05ff98bb47a71f720a6e89b0f3dcd8aa3aa6e88cd6 extends \XLite\Core\Templating\Twig\Template
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
<td class=\"error-messages\" colspan=\"4\">
  <div class=\"error-message-block\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "      <div class=\"error-message\">
        ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "  </div>
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table/columns/error.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 14,  31 => 11,  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Entry new version*/
/*  #*/
/*  # @ListChild (list="upgrade.step.ready_to_install.entries_list.sections.table.columns.error", weight="400")*/
/*  #}*/
/* */
/* <td class="error-messages" colspan="4">*/
/*   <div class="error-message-block">*/
/*     {% for message in this.messages %}*/
/*       <div class="error-message">*/
/*         {{ message }}*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </td>*/
/* */
