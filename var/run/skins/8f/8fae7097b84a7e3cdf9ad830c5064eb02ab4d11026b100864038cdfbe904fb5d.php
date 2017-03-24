<?php

/* /var/www/html/lostcar/skins/admin/file_uploader/parts/menu.message.twig */
class __TwigTemplate_104ff8f0ec8eae6f200db488d1d79afb08c885a0afe882687d35db4afad05589 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMessage", array(), "method")) {
            // line 8
            echo "  <li role=\"presentation\" class=\"dropdown-header message\">
    <i class=\"fa fa-exclamation-triangle\"></i> ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMessage", array(), "method"), "html", null, true);
            echo "
  </li>
  <li role=\"presentation\" class=\"divider\"></li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/file_uploader/parts/menu.message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # File uploader menu*/
/*  #*/
/*  # @ListChild (list="file-uploader.menu", weight="10")*/
/*  #}*/
/* */
/* {% if this.getMessage() %}*/
/*   <li role="presentation" class="dropdown-header message">*/
/*     <i class="fa fa-exclamation-triangle"></i> {{ this.getMessage() }}*/
/*   </li>*/
/*   <li role="presentation" class="divider"></li>*/
/* {% endif %}*/
/* */
