<?php

/* @ESFEspaceAbonne/back/langueThree.html.twig */
class __TwigTemplate_66a24a57bdc43a7bbb2be32a8ff53c4911efc318e48c085244d0b721d2bca1f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/langueThree.html.twig", 1);
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
        $__internal_93f50754489fed9bebd7986392258c9b2ca1ffdd9b183f9d0d1218b4f2d00571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f50754489fed9bebd7986392258c9b2ca1ffdd9b183f9d0d1218b4f2d00571->enter($__internal_93f50754489fed9bebd7986392258c9b2ca1ffdd9b183f9d0d1218b4f2d00571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/langueThree.html.twig"));

        $__internal_6cc6c8faae8d9ca54252dc863e3d01814a8cd4aea2a54c69f01c51efcd02b4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc6c8faae8d9ca54252dc863e3d01814a8cd4aea2a54c69f01c51efcd02b4ca->enter($__internal_6cc6c8faae8d9ca54252dc863e3d01814a8cd4aea2a54c69f01c51efcd02b4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/langueThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93f50754489fed9bebd7986392258c9b2ca1ffdd9b183f9d0d1218b4f2d00571->leave($__internal_93f50754489fed9bebd7986392258c9b2ca1ffdd9b183f9d0d1218b4f2d00571_prof);

        
        $__internal_6cc6c8faae8d9ca54252dc863e3d01814a8cd4aea2a54c69f01c51efcd02b4ca->leave($__internal_6cc6c8faae8d9ca54252dc863e3d01814a8cd4aea2a54c69f01c51efcd02b4ca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b9af75ba3795e36ffa6716087439436ab1539cf96179eee82a231d3cc6c328a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b9af75ba3795e36ffa6716087439436ab1539cf96179eee82a231d3cc6c328a->enter($__internal_3b9af75ba3795e36ffa6716087439436ab1539cf96179eee82a231d3cc6c328a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9520e9e07856300a007d673c1cfdcda06ce0dab28db0000ffa9cefa30999886f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9520e9e07856300a007d673c1cfdcda06ce0dab28db0000ffa9cefa30999886f->enter($__internal_9520e9e07856300a007d673c1cfdcda06ce0dab28db0000ffa9cefa30999886f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9520e9e07856300a007d673c1cfdcda06ce0dab28db0000ffa9cefa30999886f->leave($__internal_9520e9e07856300a007d673c1cfdcda06ce0dab28db0000ffa9cefa30999886f_prof);

        
        $__internal_3b9af75ba3795e36ffa6716087439436ab1539cf96179eee82a231d3cc6c328a->leave($__internal_3b9af75ba3795e36ffa6716087439436ab1539cf96179eee82a231d3cc6c328a_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_d752681f007e6c9a6633521b095bd67e52cda91fc5a56f9bc8ff9e088c9f1470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d752681f007e6c9a6633521b095bd67e52cda91fc5a56f9bc8ff9e088c9f1470->enter($__internal_d752681f007e6c9a6633521b095bd67e52cda91fc5a56f9bc8ff9e088c9f1470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_08c93ebaee0be989543d561ff6f150aafa9f690a306eb111edd7a1c0b6db7a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c93ebaee0be989543d561ff6f150aafa9f690a306eb111edd7a1c0b6db7a01->enter($__internal_08c93ebaee0be989543d561ff6f150aafa9f690a306eb111edd7a1c0b6db7a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_langueStepsOne");
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
        
        $__internal_08c93ebaee0be989543d561ff6f150aafa9f690a306eb111edd7a1c0b6db7a01->leave($__internal_08c93ebaee0be989543d561ff6f150aafa9f690a306eb111edd7a1c0b6db7a01_prof);

        
        $__internal_d752681f007e6c9a6633521b095bd67e52cda91fc5a56f9bc8ff9e088c9f1470->leave($__internal_d752681f007e6c9a6633521b095bd67e52cda91fc5a56f9bc8ff9e088c9f1470_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/langueThree.html.twig";
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
  Inscription Langue - {{ parent() }}
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
           <a class=\"btn btn-danger\" href=\"{{ path('esf_espace_abonne_langueStepsOne') }}\">Retour à l'étape 1</a>
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
", "@ESFEspaceAbonne/back/langueThree.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\langueThree.html.twig");
    }
}
