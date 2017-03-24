<?php

/* file_uploader/body.twig */
class __TwigTemplate_1861085c5b5bca8fa6c1a509af97ee48c5101237a4ee90a383e02d84c6300349 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDivStyle", array(), "method"), "html", null, true);
        echo "\" data-object-id=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getObjectId", array(), "method"), "html", null, true);
        echo "\">
  ";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isRemovable", array(), "method")) {
            // line 7
            echo "    <input type=\"checkbox\" name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"), "html", null, true);
            echo "[delete]\" v-model=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getVModel", array(), "method"), "html", null, true);
            echo ".delete\" value=\"1\" class=\"input-delete\" />
  ";
        }
        // line 9
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isMultiple", array(), "method")) {
            // line 10
            echo "    <input type=\"hidden\" name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"), "html", null, true);
            echo "[position]\" v-model=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getVModel", array(), "method"), "html", null, true);
            echo ".position\" value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPosition", array(), "method"), "html", null, true);
            echo "\" class=\"input-position\" />
  ";
        }
        // line 12
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isTemporary", array(), "method")) {
            // line 13
            echo "    <input type=\"hidden\" name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"), "html", null, true);
            echo "[temp_id]\" v-model=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getVModel", array(), "method"), "html", null, true);
            echo ".temp_id\" value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "object", array()), "id", array()), "html", null, true);
            echo "\" class=\"input-temp-id\" />
  ";
        }
        // line 15
        echo "  <a href=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLink", array(), "method"), "html", null, true);
        echo "\" class=\"link\" data-toggle=\"dropdown\">
    ";
        // line 16
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPreview", array(), "method");
        echo "
    <div class=\"icon\">
      <i class=\"";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIconStyle", array(), "method"), "html", null, true);
        echo "\"></i>
    </div>
  </a>
  <ul class=\"dropdown-menu\" role=\"menu\">
    ";
        // line 22
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "file-uploader.menu"))), "html", null, true);
        echo "
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "file_uploader/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  74 => 18,  69 => 16,  64 => 15,  54 => 13,  51 => 12,  41 => 10,  38 => 9,  30 => 7,  28 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # File upload template*/
/*  #}*/
/* */
/* <div class="{{ this.getDivStyle() }}" data-object-id="{{ this.getObjectId() }}">*/
/*   {% if this.isRemovable() %}*/
/*     <input type="checkbox" name="{{ this.getName() }}[delete]" v-model="{{ this.getVModel() }}.delete" value="1" class="input-delete" />*/
/*   {% endif %}*/
/*   {% if this.isMultiple() %}*/
/*     <input type="hidden" name="{{ this.getName() }}[position]" v-model="{{ this.getVModel() }}.position" value="{{ this.getPosition() }}" class="input-position" />*/
/*   {% endif %}*/
/*   {% if this.isTemporary() %}*/
/*     <input type="hidden" name="{{ this.getName() }}[temp_id]" v-model="{{ this.getVModel() }}.temp_id" value="{{ this.object.id }}" class="input-temp-id" />*/
/*   {% endif %}*/
/*   <a href="{{ this.getLink() }}" class="link" data-toggle="dropdown">*/
/*     {{ this.getPreview()|raw }}*/
/*     <div class="icon">*/
/*       <i class="{{ this.getIconStyle() }}"></i>*/
/*     </div>*/
/*   </a>*/
/*   <ul class="dropdown-menu" role="menu">*/
/*     {{ widget_list('file-uploader.menu') }}*/
/*   </ul>*/
/* </div>*/
/* */
