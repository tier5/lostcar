<?php

/* product/details/parts/image-regular.twig */
class __TwigTemplate_031c2c30c8ceb2775db1c2b0ed9ab89b8b253ee162c49d17e942c216f452c0a0 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "<div class=\"product-photo lazy-load\">
  ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\JThemesStudio\\The80sMod\\View\\CommonImage", "image" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getImage", array(), "method"), "className" => "photo product-thumbnail", "verticalAlign" => "top", "id" => ("product_image_" . $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "product_id", array())), "maxWidth" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWidgetMaxWidth", array(), "method"), "maxHeight" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWidgetMaxHeight", array(), "method"), "alt" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAlt", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getImage", array(), "method")), "method")))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "product/details/parts/image-regular.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Product details image default box*/
/*  #}*/
/* <div class="product-photo lazy-load">*/
/*   {{ widget('\\XLite\\Module\\JThemesStudio\\The80sMod\\View\\CommonImage', image=this.product.getImage(), className='photo product-thumbnail', verticalAlign='top', id='product_image_' ~ this.product.product_id, maxWidth=this.getWidgetMaxWidth(), maxHeight=this.getWidgetMaxHeight(), alt=this.getAlt(this.product.getImage())) }}*/
/* </div>*/
/* */
