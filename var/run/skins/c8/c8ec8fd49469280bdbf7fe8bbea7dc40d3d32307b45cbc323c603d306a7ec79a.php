<?php

/* /var/www/html/lostcar/skins/admin/order/page/parts/note.note.twig */
class __TwigTemplate_e8ca6b3fc82ff6d123c254071ff234b4bc788fa40fde01cd754d0d5b5bc23fc6 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"admin-note\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Textarea\\Simple", "label" => "Order note", "fieldName" => "adminNotes", "value" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getAdminNotes", array(), "method")))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/page/parts/note.note.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Order notes*/
/*  #*/
/*  # @ListChild (list="order.note", weight="100")*/
/*  #}*/
/* */
/* <div class="admin-note">*/
/*   {{ widget('\\XLite\\View\\FormField\\Textarea\\Simple', label='Order note', fieldName='adminNotes', value=this.order.getAdminNotes()) }}*/
/* </div>*/
/* */
