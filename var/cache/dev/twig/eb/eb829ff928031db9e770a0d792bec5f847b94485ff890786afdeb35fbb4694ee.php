<?php

/* ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig */
class __TwigTemplate_ec575393feb825394f149540619812a62446a0a5eed63bd6a3d9729b4089779a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig", 1);
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
        $__internal_839b6e1700527b8ffd90e12ff8bc2d49ac1b64347da21bbe88de526c2a081da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_839b6e1700527b8ffd90e12ff8bc2d49ac1b64347da21bbe88de526c2a081da4->enter($__internal_839b6e1700527b8ffd90e12ff8bc2d49ac1b64347da21bbe88de526c2a081da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig"));

        $__internal_4df6f920e16d1e69f9b2638b0c1380c3a701a8a6dcccd8b83f73bc42a94c5ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df6f920e16d1e69f9b2638b0c1380c3a701a8a6dcccd8b83f73bc42a94c5ef6->enter($__internal_4df6f920e16d1e69f9b2638b0c1380c3a701a8a6dcccd8b83f73bc42a94c5ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_839b6e1700527b8ffd90e12ff8bc2d49ac1b64347da21bbe88de526c2a081da4->leave($__internal_839b6e1700527b8ffd90e12ff8bc2d49ac1b64347da21bbe88de526c2a081da4_prof);

        
        $__internal_4df6f920e16d1e69f9b2638b0c1380c3a701a8a6dcccd8b83f73bc42a94c5ef6->leave($__internal_4df6f920e16d1e69f9b2638b0c1380c3a701a8a6dcccd8b83f73bc42a94c5ef6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_856d1bf372d41d79a442d9ab08fda83c7cc6be95c4ca59a6f404a09dc4f4be6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_856d1bf372d41d79a442d9ab08fda83c7cc6be95c4ca59a6f404a09dc4f4be6a->enter($__internal_856d1bf372d41d79a442d9ab08fda83c7cc6be95c4ca59a6f404a09dc4f4be6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_36c645c9746e464bbc31f6212a4b77655d7d4432726d3c2a2604897ff1f0e02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c645c9746e464bbc31f6212a4b77655d7d4432726d3c2a2604897ff1f0e02b->enter($__internal_36c645c9746e464bbc31f6212a4b77655d7d4432726d3c2a2604897ff1f0e02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_36c645c9746e464bbc31f6212a4b77655d7d4432726d3c2a2604897ff1f0e02b->leave($__internal_36c645c9746e464bbc31f6212a4b77655d7d4432726d3c2a2604897ff1f0e02b_prof);

        
        $__internal_856d1bf372d41d79a442d9ab08fda83c7cc6be95c4ca59a6f404a09dc4f4be6a->leave($__internal_856d1bf372d41d79a442d9ab08fda83c7cc6be95c4ca59a6f404a09dc4f4be6a_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_4056bc26fcb8d0f1bae606b46123bff40eb5ce46b28660b919bf296e7bf8fcfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4056bc26fcb8d0f1bae606b46123bff40eb5ce46b28660b919bf296e7bf8fcfc->enter($__internal_4056bc26fcb8d0f1bae606b46123bff40eb5ce46b28660b919bf296e7bf8fcfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_351eefa2d2e2fa9792c078209c0b5070ef0d61d21e8403323fca30be3707f836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351eefa2d2e2fa9792c078209c0b5070ef0d61d21e8403323fca30be3707f836->enter($__internal_351eefa2d2e2fa9792c078209c0b5070ef0d61d21e8403323fca30be3707f836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_351eefa2d2e2fa9792c078209c0b5070ef0d61d21e8403323fca30be3707f836->leave($__internal_351eefa2d2e2fa9792c078209c0b5070ef0d61d21e8403323fca30be3707f836_prof);

        
        $__internal_4056bc26fcb8d0f1bae606b46123bff40eb5ce46b28660b919bf296e7bf8fcfc->leave($__internal_4056bc26fcb8d0f1bae606b46123bff40eb5ce46b28660b919bf296e7bf8fcfc_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_96aa10c69f5afbc0d7fdaf62dc7a30f04f29dd8e4127a831db838c4b3f8c652a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96aa10c69f5afbc0d7fdaf62dc7a30f04f29dd8e4127a831db838c4b3f8c652a->enter($__internal_96aa10c69f5afbc0d7fdaf62dc7a30f04f29dd8e4127a831db838c4b3f8c652a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_04712436a53ec236f387f3f3f51559a20de08e1936a72926d6d988f52c77be80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04712436a53ec236f387f3f3f51559a20de08e1936a72926d6d988f52c77be80->enter($__internal_04712436a53ec236f387f3f3f51559a20de08e1936a72926d6d988f52c77be80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_04712436a53ec236f387f3f3f51559a20de08e1936a72926d6d988f52c77be80->leave($__internal_04712436a53ec236f387f3f3f51559a20de08e1936a72926d6d988f52c77be80_prof);

        
        $__internal_96aa10c69f5afbc0d7fdaf62dc7a30f04f29dd8e4127a831db838c4b3f8c652a->leave($__internal_96aa10c69f5afbc0d7fdaf62dc7a30f04f29dd8e4127a831db838c4b3f8c652a_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig";
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
{% endblock %}", "ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/mesParametresMDP.html.twig");
    }
}
