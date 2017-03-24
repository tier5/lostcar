<?php

/* product/details/parts/gallery_mobile.twig */
class __TwigTemplate_df361c65475278d66e13d748a88e682d94ccd2d350fe3d846e3891507b7b37c1 extends \XLite\Core\Templating\Twig\Template
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
        echo "
<div class=\"product-image-gallery";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCSSClasses", array(), "method"), "html", null, true);
        echo "\"";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isVisibleAsHidden", array(), "method")) {
            echo " style=\"display:none;\"";
        }
        echo ">
  ";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isInSliderMode", array(), "method")) {
            // line 7
            echo "    <div class=\"product-image-gallery-navigation\" id='product-image-gallery-prev-mobile'></div>
  ";
        }
        // line 9
        echo "  <div class=\"slides\">

    <ul
        ";
        // line 12
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isInSliderMode", array(), "method")) {
            // line 13
            echo "          class=\"cycle-cloak cycle-slideshow\"
          data-cycle-fx=carousel
          data-cycle-timeout=0
          data-cycle-manual-speed=\"300\"
          data-cycle-carousel-vertical=false
          data-cycle-carousel-visible=";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMinCountForSlider", array(), "method"), "html", null, true);
            echo "
          data-cycle-next=\"#product-image-gallery-next-mobile\"
          data-cycle-prev=\"#product-image-gallery-prev-mobile\"
          data-cycle-slides=\"> li\"
          data-cycle-log=false
          data-cycle-allow-wrap=false
          data-cycle-auto-height=false
        ";
        }
        // line 26
        echo "    >
      ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getPublicImages", array(), "method"));
        foreach ($context['_seq'] as $context["i"] => $context["image"]) {
            // line 28
            echo "        <li ";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getListItemClassAttribute", array(0 => $context["i"], 1 => $context["image"]), "method")), "method");
            echo ">
          <a href=\"";
            // line 29
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["image"], "getFrontURL", array(), "method"), "html", null, true);
            echo "\" rel=\"lightbox\" rev=\"width: ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["image"], "getWidth", array(), "method"), "html", null, true);
            echo ", height: ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["image"], "getHeight", array(), "method"), "html", null, true);
            echo "\" title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["image"], "getAlt", array(), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Image", "image" => $context["image"], "alt" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAlt", array(0 => $context["image"], 1 => $context["i"]), "method"), "imageSizeType" => "MSThumbnail"))), "html", null, true);
            echo "</a>
          ";
            // line 30
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Image", "className" => "middle", "style" => "display: none;", "image" => $context["image"], "maxWidth" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWidgetMaxWidth", array(), "method"), "maxHeight" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWidgetMaxHeight", array(), "method"), "alt" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAlt", array(0 => $context["image"], 1 => $context["i"]), "method")))), "html", null, true);
            echo "
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </ul>
  </div>

  ";
        // line 36
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isInSliderMode", array(), "method")) {
            // line 37
            echo "    <div class=\"product-image-gallery-navigation\" id='product-image-gallery-next-mobile'></div>
  ";
        }
        // line 39
        echo "</div>

<script type=\"text/javascript\">
var lightBoxImagesDir = '";
        // line 42
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLightBoxImagesDir", array(), "method"), "html", null, true);
        echo "';
</script>
";
    }

    public function getTemplateName()
    {
        return "product/details/parts/gallery_mobile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 42,  105 => 39,  101 => 37,  99 => 36,  94 => 33,  85 => 30,  73 => 29,  68 => 28,  64 => 27,  61 => 26,  50 => 18,  43 => 13,  41 => 12,  36 => 9,  32 => 7,  30 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Gallery widget*/
/*  #}*/
/* */
/* <div class="product-image-gallery{{ this.getCSSClasses() }}"{% if this.isVisibleAsHidden() %} style="display:none;"{% endif %}>*/
/*   {% if this.isInSliderMode() %}*/
/*     <div class="product-image-gallery-navigation" id='product-image-gallery-prev-mobile'></div>*/
/*   {% endif %}*/
/*   <div class="slides">*/
/* */
/*     <ul*/
/*         {% if this.isInSliderMode() %}*/
/*           class="cycle-cloak cycle-slideshow"*/
/*           data-cycle-fx=carousel*/
/*           data-cycle-timeout=0*/
/*           data-cycle-manual-speed="300"*/
/*           data-cycle-carousel-vertical=false*/
/*           data-cycle-carousel-visible={{ this.getMinCountForSlider() }}*/
/*           data-cycle-next="#product-image-gallery-next-mobile"*/
/*           data-cycle-prev="#product-image-gallery-prev-mobile"*/
/*           data-cycle-slides="> li"*/
/*           data-cycle-log=false*/
/*           data-cycle-allow-wrap=false*/
/*           data-cycle-auto-height=false*/
/*         {% endif %}*/
/*     >*/
/*       {% for i, image in this.product.getPublicImages() %}*/
/*         <li {{ this.printTagAttributes(this.getListItemClassAttribute(i, image))|raw }}>*/
/*           <a href="{{ image.getFrontURL() }}" rel="lightbox" rev="width: {{ image.getWidth() }}, height: {{ image.getHeight() }}" title="{{ image.getAlt() }}">{{ widget('\\XLite\\View\\Image', image=image, alt=this.getAlt(image, i), imageSizeType='MSThumbnail') }}</a>*/
/*           {{ widget('\\XLite\\View\\Image', className='middle', style='display: none;', image=image, maxWidth=this.getWidgetMaxWidth(), maxHeight=this.getWidgetMaxHeight(), alt=this.getAlt(image, i)) }}*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* */
/*   {% if this.isInSliderMode() %}*/
/*     <div class="product-image-gallery-navigation" id='product-image-gallery-next-mobile'></div>*/
/*   {% endif %}*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/* var lightBoxImagesDir = '{{ this.getLightBoxImagesDir() }}';*/
/* </script>*/
/* */
