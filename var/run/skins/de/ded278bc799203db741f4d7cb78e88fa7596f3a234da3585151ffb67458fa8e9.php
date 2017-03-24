<?php

/* /var/www/html/lostcar/skins/admin/browse_server/parts/item.name.twig */
class __TwigTemplate_5fb117b032690fdeb46c2c88747f47a0b731723ae33805f0c8ba00e012b1fd10 extends \XLite\Core\Templating\Twig\Template
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
        echo "<a class=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemClass", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method"), "html", null, true);
        echo "\" title=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "fullName", array()), "html", null, true);
        echo "\"><img src=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/spacer.gif")), "html", null, true);
        echo "\" alt=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "type", array()), "html", null, true);
        echo "\" /><span>";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "name", array()), "html", null, true);
        echo "</span></a>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/browse_server/parts/item.name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Browser server dialog : item : name*/
/*  #*/
/*  # @ListChild (list="browseServer.item", zone="admin", weight="100")*/
/*  #}*/
/* <a class="{{ this.getItemClass(this.entry) }}" title="{{ this.entry.fullName }}"><img src="{{ asset('images/spacer.gif') }}" alt="{{ this.entry.type }}" /><span>{{ this.entry.name }}</span></a>*/
/* */
