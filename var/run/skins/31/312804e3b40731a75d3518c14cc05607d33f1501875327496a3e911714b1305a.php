<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/header/mobile_header_parts/additional_menu.twig */
class __TwigTemplate_5dfded28535dfa0f6c7ae1f7487871486b575b34bde0daadcd1148950cd9b266 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSlidebar", array())) {
            // line 7
            echo "    <li class=\"Divider\"></li>
    <li class=\"additional-menu-wrapper\">
        <ul class=\"Inset additional-menu\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewList", array(0 => "slidebar.additional-menu"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 11
                echo "                <li>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["w"], "display", array(), "method"), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </ul>
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/header/mobile_header_parts/additional_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  30 => 11,  26 => 10,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Header right box*/
/*  #*/
/*  # @ListChild (list="header.menu", weight="1000")*/
/*  #}*/
/* {% if this.isSlidebar %}*/
/*     <li class="Divider"></li>*/
/*     <li class="additional-menu-wrapper">*/
/*         <ul class="Inset additional-menu">*/
/*             {% for w in this.getViewList('slidebar.additional-menu') %}*/
/*                 <li>{{ w.display() }}</li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </li>*/
/* {% endif %}*/
/* */
