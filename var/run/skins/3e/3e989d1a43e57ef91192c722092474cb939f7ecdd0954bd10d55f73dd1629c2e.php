<?php

/* /var/www/html/lostcar/skins/admin/order/history/parts/event_block_header.twig */
class __TwigTemplate_e2ea94b6c2c52668e2333281a42f838e406036cc9dfda9f7678c3acb1237e201 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"head\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHeaderBlock", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "index", array())), "method"), "html", null, true);
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/history/parts/event_block_header.twig";
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
/*  # Order history event*/
/*  #*/
/*  # @ListChild (list="order.history.base.events", weight="10")*/
/*  #}*/
/* <li class="head">{{ this.getHeaderBlock(this.index) }}</li>*/
/* */
