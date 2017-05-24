<?php

/* ESFEspaceAbonneBundle:Default:universiteThree.html.twig */
class __TwigTemplate_14230bc7477c57d9e3cab1cb97322a13b5f98a55f0d836112537529ec4f73d4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:universiteThree.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bec2396ffa1d48ef627ac121e386f66fc5e6a422ee69cbc38cde267b190c8c72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec2396ffa1d48ef627ac121e386f66fc5e6a422ee69cbc38cde267b190c8c72->enter($__internal_bec2396ffa1d48ef627ac121e386f66fc5e6a422ee69cbc38cde267b190c8c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:universiteThree.html.twig"));

        $__internal_69d5f84a20454d34b01e75c589c76cbd0d0ed3f7a1a472254fd88a2a2448615d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d5f84a20454d34b01e75c589c76cbd0d0ed3f7a1a472254fd88a2a2448615d->enter($__internal_69d5f84a20454d34b01e75c589c76cbd0d0ed3f7a1a472254fd88a2a2448615d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:universiteThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bec2396ffa1d48ef627ac121e386f66fc5e6a422ee69cbc38cde267b190c8c72->leave($__internal_bec2396ffa1d48ef627ac121e386f66fc5e6a422ee69cbc38cde267b190c8c72_prof);

        
        $__internal_69d5f84a20454d34b01e75c589c76cbd0d0ed3f7a1a472254fd88a2a2448615d->leave($__internal_69d5f84a20454d34b01e75c589c76cbd0d0ed3f7a1a472254fd88a2a2448615d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_87df9f8e136e2231726478b924d92d3a5b04931a557b467e7a388f6cd8c26855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87df9f8e136e2231726478b924d92d3a5b04931a557b467e7a388f6cd8c26855->enter($__internal_87df9f8e136e2231726478b924d92d3a5b04931a557b467e7a388f6cd8c26855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d59801804ee7630e94a296d28ca7d9c65094f1d52f799831685a7ca4708c5442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59801804ee7630e94a296d28ca7d9c65094f1d52f799831685a7ca4708c5442->enter($__internal_d59801804ee7630e94a296d28ca7d9c65094f1d52f799831685a7ca4708c5442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d59801804ee7630e94a296d28ca7d9c65094f1d52f799831685a7ca4708c5442->leave($__internal_d59801804ee7630e94a296d28ca7d9c65094f1d52f799831685a7ca4708c5442_prof);

        
        $__internal_87df9f8e136e2231726478b924d92d3a5b04931a557b467e7a388f6cd8c26855->leave($__internal_87df9f8e136e2231726478b924d92d3a5b04931a557b467e7a388f6cd8c26855_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_a611b97c0fddf936e9fbef8d5dd60b92d350ef9013cf3ec97db6f86e78ef730f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a611b97c0fddf936e9fbef8d5dd60b92d350ef9013cf3ec97db6f86e78ef730f->enter($__internal_a611b97c0fddf936e9fbef8d5dd60b92d350ef9013cf3ec97db6f86e78ef730f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_956f17afa13489717ece8e4554ec8b2705637cf8d2d69d1ed559f1b97de98c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956f17afa13489717ece8e4554ec8b2705637cf8d2d69d1ed559f1b97de98c7e->enter($__internal_956f17afa13489717ece8e4554ec8b2705637cf8d2d69d1ed559f1b97de98c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
  <div class=\"row\">
    <div class=\"col-md-12\">
      <h2>Etape 3</h2>
      <p>Veuillez joindre le(s) PDF precedent afin de valider votre demande pour que nous puissions la prendre en compte.</p>         
      
      ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

      ";
        // line 15
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 16
            echo "        <div class=\"alert alert-error\">
          ";
            // line 17
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        </div>
      ";
        }
        // line 20
        echo "
      <div class=\"form-group\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "nom", array()), 'label', array("label" => "Document d'Inscription"));
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "nom", array()), 'widget');
        echo "
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"form-group\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "pdfFile", array()), 'widget');
        echo "
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"form-group\">
           <a class=\"btn btn-danger\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_universiteStepsOne");
        echo "\">Retour à l'étape 1</a>
           ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "Enregistrer", array()), 'widget');
        echo "
         </div>
       </div>
     </div>

     ";
        // line 44
        echo "     ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

     ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
   </div>
 </div>


";
        
        $__internal_956f17afa13489717ece8e4554ec8b2705637cf8d2d69d1ed559f1b97de98c7e->leave($__internal_956f17afa13489717ece8e4554ec8b2705637cf8d2d69d1ed559f1b97de98c7e_prof);

        
        $__internal_a611b97c0fddf936e9fbef8d5dd60b92d350ef9013cf3ec97db6f86e78ef730f->leave($__internal_a611b97c0fddf936e9fbef8d5dd60b92d350ef9013cf3ec97db6f86e78ef730f_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:universiteThree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 46,  135 => 44,  127 => 38,  123 => 37,  112 => 29,  103 => 23,  99 => 22,  95 => 20,  89 => 17,  86 => 16,  84 => 15,  79 => 13,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
  Inscription Université - {{ parent() }}
{% endblock %}

{% block Content %} 
  <div class=\"row\">
    <div class=\"col-md-12\">
      <h2>Etape 3</h2>
      <p>Veuillez joindre le(s) PDF precedent afin de valider votre demande pour que nous puissions la prendre en compte.</p>         
      
      {{ form_start(form) }}

      {% if not form.vars.valid %}
        <div class=\"alert alert-error\">
          {{ form_errors(form) }}
        </div>
      {% endif %}

      <div class=\"form-group\">
        {{ form_label(form.documentinscription.nom, 'Document d\\'Inscription') }}
        {{ form_widget(form.documentinscription.nom) }}
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"form-group\">
            {{ form_widget(form.documentinscription.pdfFile) }}
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"form-group\">
           <a class=\"btn btn-danger\" href=\"{{ path('esf_espace_abonne_universiteStepsOne') }}\">Retour à l'étape 1</a>
           {{ form_widget(form.documentinscription.Enregistrer) }}
         </div>
       </div>
     </div>

     {# Token CSRF #}
     {{ form_widget(form._token) }}

     {{ form_end(form, {'render_rest': false }) }}
   </div>
 </div>


{% endblock %}
", "ESFEspaceAbonneBundle:Default:universiteThree.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/universiteThree.html.twig");
    }
}
