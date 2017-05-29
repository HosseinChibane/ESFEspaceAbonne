<?php

/* ESFEspaceAbonneBundle:back:langueThree.html.twig */
class __TwigTemplate_725bde8be467a36c69500ce4750a75a8b6c3eb3517ada51302b8d43e8346aab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:langueThree.html.twig", 1);
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
        $__internal_b87e67bfe38648c4e11562da6e2ce6a9feec69e0ca18ed4034db56d55e64eba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b87e67bfe38648c4e11562da6e2ce6a9feec69e0ca18ed4034db56d55e64eba7->enter($__internal_b87e67bfe38648c4e11562da6e2ce6a9feec69e0ca18ed4034db56d55e64eba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:langueThree.html.twig"));

        $__internal_96031f4b10eb9d631b85ef6f3d1ad3e906b9f4e669e7b9bc4d2fe80daecc6c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96031f4b10eb9d631b85ef6f3d1ad3e906b9f4e669e7b9bc4d2fe80daecc6c64->enter($__internal_96031f4b10eb9d631b85ef6f3d1ad3e906b9f4e669e7b9bc4d2fe80daecc6c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:langueThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b87e67bfe38648c4e11562da6e2ce6a9feec69e0ca18ed4034db56d55e64eba7->leave($__internal_b87e67bfe38648c4e11562da6e2ce6a9feec69e0ca18ed4034db56d55e64eba7_prof);

        
        $__internal_96031f4b10eb9d631b85ef6f3d1ad3e906b9f4e669e7b9bc4d2fe80daecc6c64->leave($__internal_96031f4b10eb9d631b85ef6f3d1ad3e906b9f4e669e7b9bc4d2fe80daecc6c64_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_42e79c431a4ff453ee066ab23a0321021799ebb696e520065865f6e189c699aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e79c431a4ff453ee066ab23a0321021799ebb696e520065865f6e189c699aa->enter($__internal_42e79c431a4ff453ee066ab23a0321021799ebb696e520065865f6e189c699aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_41abe25bb6532949b20fcdef7c2d22d5a077adfbda26e803d853cf88a094e7bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41abe25bb6532949b20fcdef7c2d22d5a077adfbda26e803d853cf88a094e7bf->enter($__internal_41abe25bb6532949b20fcdef7c2d22d5a077adfbda26e803d853cf88a094e7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_41abe25bb6532949b20fcdef7c2d22d5a077adfbda26e803d853cf88a094e7bf->leave($__internal_41abe25bb6532949b20fcdef7c2d22d5a077adfbda26e803d853cf88a094e7bf_prof);

        
        $__internal_42e79c431a4ff453ee066ab23a0321021799ebb696e520065865f6e189c699aa->leave($__internal_42e79c431a4ff453ee066ab23a0321021799ebb696e520065865f6e189c699aa_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_2bd4ba5d4e0f994f2b3265eb9d019fb13805911c351fb5676101da16db235a7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd4ba5d4e0f994f2b3265eb9d019fb13805911c351fb5676101da16db235a7b->enter($__internal_2bd4ba5d4e0f994f2b3265eb9d019fb13805911c351fb5676101da16db235a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_a13a24575be34ec002caa2c40ebf21dea8bc2917e383a14aff215c066e0fed2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13a24575be34ec002caa2c40ebf21dea8bc2917e383a14aff215c066e0fed2a->enter($__internal_a13a24575be34ec002caa2c40ebf21dea8bc2917e383a14aff215c066e0fed2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_a13a24575be34ec002caa2c40ebf21dea8bc2917e383a14aff215c066e0fed2a->leave($__internal_a13a24575be34ec002caa2c40ebf21dea8bc2917e383a14aff215c066e0fed2a_prof);

        
        $__internal_2bd4ba5d4e0f994f2b3265eb9d019fb13805911c351fb5676101da16db235a7b->leave($__internal_2bd4ba5d4e0f994f2b3265eb9d019fb13805911c351fb5676101da16db235a7b_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:langueThree.html.twig";
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
", "ESFEspaceAbonneBundle:back:langueThree.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/langueThree.html.twig");
    }
}
