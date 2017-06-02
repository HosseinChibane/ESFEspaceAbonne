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
        $__internal_76fb31afd0cd9c04d06676cb5679d53e54c1ac686141e420d3b901a8e96fd208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76fb31afd0cd9c04d06676cb5679d53e54c1ac686141e420d3b901a8e96fd208->enter($__internal_76fb31afd0cd9c04d06676cb5679d53e54c1ac686141e420d3b901a8e96fd208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametresMDP.html.twig"));

        $__internal_cf942ee54f98e17bc985bab7a71b71ea32d78398db40350103e138198d498ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf942ee54f98e17bc985bab7a71b71ea32d78398db40350103e138198d498ce0->enter($__internal_cf942ee54f98e17bc985bab7a71b71ea32d78398db40350103e138198d498ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametresMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76fb31afd0cd9c04d06676cb5679d53e54c1ac686141e420d3b901a8e96fd208->leave($__internal_76fb31afd0cd9c04d06676cb5679d53e54c1ac686141e420d3b901a8e96fd208_prof);

        
        $__internal_cf942ee54f98e17bc985bab7a71b71ea32d78398db40350103e138198d498ce0->leave($__internal_cf942ee54f98e17bc985bab7a71b71ea32d78398db40350103e138198d498ce0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4f3847cd37c89a54a984ebf645e9161d4f9bf8634590aef89542cdd60ffc526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f3847cd37c89a54a984ebf645e9161d4f9bf8634590aef89542cdd60ffc526->enter($__internal_a4f3847cd37c89a54a984ebf645e9161d4f9bf8634590aef89542cdd60ffc526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_14d7c59cfddb3e0c0214112bce8c7cef79dfa2e5f8697f172844b98d91f89a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d7c59cfddb3e0c0214112bce8c7cef79dfa2e5f8697f172844b98d91f89a62->enter($__internal_14d7c59cfddb3e0c0214112bce8c7cef79dfa2e5f8697f172844b98d91f89a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_14d7c59cfddb3e0c0214112bce8c7cef79dfa2e5f8697f172844b98d91f89a62->leave($__internal_14d7c59cfddb3e0c0214112bce8c7cef79dfa2e5f8697f172844b98d91f89a62_prof);

        
        $__internal_a4f3847cd37c89a54a984ebf645e9161d4f9bf8634590aef89542cdd60ffc526->leave($__internal_a4f3847cd37c89a54a984ebf645e9161d4f9bf8634590aef89542cdd60ffc526_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8b85ad8c02aaedba918416291f5961fc549489a0a64d01c214fe4b9a4b94d974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b85ad8c02aaedba918416291f5961fc549489a0a64d01c214fe4b9a4b94d974->enter($__internal_8b85ad8c02aaedba918416291f5961fc549489a0a64d01c214fe4b9a4b94d974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_74811d42b03cf6d2b11f37f4eaccf9fa655871ad9e007dba8df270908ecf647b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74811d42b03cf6d2b11f37f4eaccf9fa655871ad9e007dba8df270908ecf647b->enter($__internal_74811d42b03cf6d2b11f37f4eaccf9fa655871ad9e007dba8df270908ecf647b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_74811d42b03cf6d2b11f37f4eaccf9fa655871ad9e007dba8df270908ecf647b->leave($__internal_74811d42b03cf6d2b11f37f4eaccf9fa655871ad9e007dba8df270908ecf647b_prof);

        
        $__internal_8b85ad8c02aaedba918416291f5961fc549489a0a64d01c214fe4b9a4b94d974->leave($__internal_8b85ad8c02aaedba918416291f5961fc549489a0a64d01c214fe4b9a4b94d974_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_a1686de337d2cd14ee39b270735617943b70f8fa27dcf85d1128d7bd10c1524b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1686de337d2cd14ee39b270735617943b70f8fa27dcf85d1128d7bd10c1524b->enter($__internal_a1686de337d2cd14ee39b270735617943b70f8fa27dcf85d1128d7bd10c1524b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_89becc7d0665fb44ca633bfb90b771ebe52057f1f62ab51f1542b65e4cb2a421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89becc7d0665fb44ca633bfb90b771ebe52057f1f62ab51f1542b65e4cb2a421->enter($__internal_89becc7d0665fb44ca633bfb90b771ebe52057f1f62ab51f1542b65e4cb2a421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_89becc7d0665fb44ca633bfb90b771ebe52057f1f62ab51f1542b65e4cb2a421->leave($__internal_89becc7d0665fb44ca633bfb90b771ebe52057f1f62ab51f1542b65e4cb2a421_prof);

        
        $__internal_a1686de337d2cd14ee39b270735617943b70f8fa27dcf85d1128d7bd10c1524b->leave($__internal_a1686de337d2cd14ee39b270735617943b70f8fa27dcf85d1128d7bd10c1524b_prof);

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
