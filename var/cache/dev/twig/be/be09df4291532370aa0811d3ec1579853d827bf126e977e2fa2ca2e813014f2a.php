<?php

/* @ESFEspaceAbonne/back/universiteThree.html.twig */
class __TwigTemplate_f64ea5692e16f5308a6386e2a9a7ed1692b9e0c3c6c418da0e8dbb1a5bd1ec5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/universiteThree.html.twig", 1);
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
        $__internal_64c1d3df632c8016e8f642c862af100627420c5f0dcb718f8171a7446bc58321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64c1d3df632c8016e8f642c862af100627420c5f0dcb718f8171a7446bc58321->enter($__internal_64c1d3df632c8016e8f642c862af100627420c5f0dcb718f8171a7446bc58321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteThree.html.twig"));

        $__internal_aaee50d7295252ff3ecb0dc6f45463d666c08879e86660109dfcb21397722fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaee50d7295252ff3ecb0dc6f45463d666c08879e86660109dfcb21397722fea->enter($__internal_aaee50d7295252ff3ecb0dc6f45463d666c08879e86660109dfcb21397722fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64c1d3df632c8016e8f642c862af100627420c5f0dcb718f8171a7446bc58321->leave($__internal_64c1d3df632c8016e8f642c862af100627420c5f0dcb718f8171a7446bc58321_prof);

        
        $__internal_aaee50d7295252ff3ecb0dc6f45463d666c08879e86660109dfcb21397722fea->leave($__internal_aaee50d7295252ff3ecb0dc6f45463d666c08879e86660109dfcb21397722fea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7afd654a06d518b66492b0dfcfdab2b707978b4d88aab6a1ba229c9c248040d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7afd654a06d518b66492b0dfcfdab2b707978b4d88aab6a1ba229c9c248040d->enter($__internal_e7afd654a06d518b66492b0dfcfdab2b707978b4d88aab6a1ba229c9c248040d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_24ab84c863e35dbcae2ee34cfb384ca066286d532a8890790c3934518074565d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ab84c863e35dbcae2ee34cfb384ca066286d532a8890790c3934518074565d->enter($__internal_24ab84c863e35dbcae2ee34cfb384ca066286d532a8890790c3934518074565d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_24ab84c863e35dbcae2ee34cfb384ca066286d532a8890790c3934518074565d->leave($__internal_24ab84c863e35dbcae2ee34cfb384ca066286d532a8890790c3934518074565d_prof);

        
        $__internal_e7afd654a06d518b66492b0dfcfdab2b707978b4d88aab6a1ba229c9c248040d->leave($__internal_e7afd654a06d518b66492b0dfcfdab2b707978b4d88aab6a1ba229c9c248040d_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_086906d98c557a80d40f956b15a900bf723fc009a0a38e3e9dcc139270d90674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086906d98c557a80d40f956b15a900bf723fc009a0a38e3e9dcc139270d90674->enter($__internal_086906d98c557a80d40f956b15a900bf723fc009a0a38e3e9dcc139270d90674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_c88830f1bab12969858f09e090c2dd61ebe6469944106b719e288c5623c120ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88830f1bab12969858f09e090c2dd61ebe6469944106b719e288c5623c120ab->enter($__internal_c88830f1bab12969858f09e090c2dd61ebe6469944106b719e288c5623c120ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_c88830f1bab12969858f09e090c2dd61ebe6469944106b719e288c5623c120ab->leave($__internal_c88830f1bab12969858f09e090c2dd61ebe6469944106b719e288c5623c120ab_prof);

        
        $__internal_086906d98c557a80d40f956b15a900bf723fc009a0a38e3e9dcc139270d90674->leave($__internal_086906d98c557a80d40f956b15a900bf723fc009a0a38e3e9dcc139270d90674_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/universiteThree.html.twig";
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
", "@ESFEspaceAbonne/back/universiteThree.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\universiteThree.html.twig");
    }
}
