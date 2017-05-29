<?php

/* @ESFEspaceAbonne/back/mesParametresMDP.html.twig */
class __TwigTemplate_fe42da1ed0c86900fc5c8f3a3e86c76c86d5987938296cc3068fae64c1653053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/mesParametresMDP.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cf593c5b20a1d66253186cebf5975b8faeef1d55f46a41aa7d23647ebfcf659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf593c5b20a1d66253186cebf5975b8faeef1d55f46a41aa7d23647ebfcf659->enter($__internal_5cf593c5b20a1d66253186cebf5975b8faeef1d55f46a41aa7d23647ebfcf659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametresMDP.html.twig"));

        $__internal_13f638308d3f6a7bde38d697cca618edc2101edaf2cb4082825d783a79cbef49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f638308d3f6a7bde38d697cca618edc2101edaf2cb4082825d783a79cbef49->enter($__internal_13f638308d3f6a7bde38d697cca618edc2101edaf2cb4082825d783a79cbef49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametresMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cf593c5b20a1d66253186cebf5975b8faeef1d55f46a41aa7d23647ebfcf659->leave($__internal_5cf593c5b20a1d66253186cebf5975b8faeef1d55f46a41aa7d23647ebfcf659_prof);

        
        $__internal_13f638308d3f6a7bde38d697cca618edc2101edaf2cb4082825d783a79cbef49->leave($__internal_13f638308d3f6a7bde38d697cca618edc2101edaf2cb4082825d783a79cbef49_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2683062d30583a7ce3e076bc3004683b12715b3f3546d03f36a7089ee00bb0f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2683062d30583a7ce3e076bc3004683b12715b3f3546d03f36a7089ee00bb0f7->enter($__internal_2683062d30583a7ce3e076bc3004683b12715b3f3546d03f36a7089ee00bb0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_876d3332a09d5026cac8256187753a0897d1e8bacf738f53a05357c9682ef501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876d3332a09d5026cac8256187753a0897d1e8bacf738f53a05357c9682ef501->enter($__internal_876d3332a09d5026cac8256187753a0897d1e8bacf738f53a05357c9682ef501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_876d3332a09d5026cac8256187753a0897d1e8bacf738f53a05357c9682ef501->leave($__internal_876d3332a09d5026cac8256187753a0897d1e8bacf738f53a05357c9682ef501_prof);

        
        $__internal_2683062d30583a7ce3e076bc3004683b12715b3f3546d03f36a7089ee00bb0f7->leave($__internal_2683062d30583a7ce3e076bc3004683b12715b3f3546d03f36a7089ee00bb0f7_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8e84021b936d1c46dcf963edb03fa6441f72115b394fbc873f6e3aebc21ed5b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e84021b936d1c46dcf963edb03fa6441f72115b394fbc873f6e3aebc21ed5b7->enter($__internal_8e84021b936d1c46dcf963edb03fa6441f72115b394fbc873f6e3aebc21ed5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_0ebad83342456c9527e208ac679a6e3b0000441de19aa6f59ebe3ce7d2f4af95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebad83342456c9527e208ac679a6e3b0000441de19aa6f59ebe3ce7d2f4af95->enter($__internal_0ebad83342456c9527e208ac679a6e3b0000441de19aa6f59ebe3ce7d2f4af95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_0ebad83342456c9527e208ac679a6e3b0000441de19aa6f59ebe3ce7d2f4af95->leave($__internal_0ebad83342456c9527e208ac679a6e3b0000441de19aa6f59ebe3ce7d2f4af95_prof);

        
        $__internal_8e84021b936d1c46dcf963edb03fa6441f72115b394fbc873f6e3aebc21ed5b7->leave($__internal_8e84021b936d1c46dcf963edb03fa6441f72115b394fbc873f6e3aebc21ed5b7_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_ca839a7c5e63b808a26759301bbd8f29cb39e22c226a40fb07e73bb35038c7c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca839a7c5e63b808a26759301bbd8f29cb39e22c226a40fb07e73bb35038c7c7->enter($__internal_ca839a7c5e63b808a26759301bbd8f29cb39e22c226a40fb07e73bb35038c7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_4b557d4a8a5388be7dd630c134ebb92b013a86cfae43212b828e67f06530f3c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b557d4a8a5388be7dd630c134ebb92b013a86cfae43212b828e67f06530f3c4->enter($__internal_4b557d4a8a5388be7dd630c134ebb92b013a86cfae43212b828e67f06530f3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
 

<!-- Mes Parametres -->
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 20
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 21
            echo "  <div class=\"alert alert-error\">
    ";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
  </div>
";
        }
        // line 25
        echo "
<div class=\"col-md-5\">
  <div class=\"form-group\">
    <div>
     ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
     ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
     <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> ";
        // line 33
        echo "    </div>
    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
  </div>            
</div>      
";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_4b557d4a8a5388be7dd630c134ebb92b013a86cfae43212b828e67f06530f3c4->leave($__internal_4b557d4a8a5388be7dd630c134ebb92b013a86cfae43212b828e67f06530f3c4_prof);

        
        $__internal_ca839a7c5e63b808a26759301bbd8f29cb39e22c226a40fb07e73bb35038c7c7->leave($__internal_ca839a7c5e63b808a26759301bbd8f29cb39e22c226a40fb07e73bb35038c7c7_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/mesParametresMDP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 37,  138 => 34,  135 => 33,  130 => 30,  126 => 29,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  104 => 18,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
  Mes Parametres - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
{% endblock %}

{% block Content %} 
 

<!-- Mes Parametres -->
{{ form_start(form) }}

{% if not form.vars.valid %}
  <div class=\"alert alert-error\">
    {{ form_errors(form) }}
  </div>
{% endif %}

<div class=\"col-md-5\">
  <div class=\"form-group\">
    <div>
     {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
     {{ form_widget(form) }}
     <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> {#value=\"{{ 'change_password.submit'|trans }}\" #}
    </div>
    {{ form_end(form) }}
  </div>            
</div>      
{{ form_end(form) }}
</div>
{% endblock %}", "@ESFEspaceAbonne/back/mesParametresMDP.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\mesParametresMDP.html.twig");
    }
}
