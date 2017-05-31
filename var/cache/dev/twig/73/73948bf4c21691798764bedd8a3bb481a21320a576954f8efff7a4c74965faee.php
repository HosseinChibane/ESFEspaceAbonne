<?php

/* @ESFEspaceAbonne/back/preparationThree.html.twig */
class __TwigTemplate_7054c3a08d5925c3e532a38eec27bc207fc40059f3b5f13ac8ee66fa04a35376 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/preparationThree.html.twig", 1);
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
        $__internal_3fe78d47689da8f664f997ee3c158dbd6b202a56620d0de1845db486c6bc746e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe78d47689da8f664f997ee3c158dbd6b202a56620d0de1845db486c6bc746e->enter($__internal_3fe78d47689da8f664f997ee3c158dbd6b202a56620d0de1845db486c6bc746e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationThree.html.twig"));

        $__internal_42f20c876ba482b19e734c900dd0f4f233f647ccf2ec282630d69eab96e6f12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f20c876ba482b19e734c900dd0f4f233f647ccf2ec282630d69eab96e6f12d->enter($__internal_42f20c876ba482b19e734c900dd0f4f233f647ccf2ec282630d69eab96e6f12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fe78d47689da8f664f997ee3c158dbd6b202a56620d0de1845db486c6bc746e->leave($__internal_3fe78d47689da8f664f997ee3c158dbd6b202a56620d0de1845db486c6bc746e_prof);

        
        $__internal_42f20c876ba482b19e734c900dd0f4f233f647ccf2ec282630d69eab96e6f12d->leave($__internal_42f20c876ba482b19e734c900dd0f4f233f647ccf2ec282630d69eab96e6f12d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d36638ff5aa794ac3c158e96c6d6a3ab9f6e24d871fe35597a7705e7e520908e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d36638ff5aa794ac3c158e96c6d6a3ab9f6e24d871fe35597a7705e7e520908e->enter($__internal_d36638ff5aa794ac3c158e96c6d6a3ab9f6e24d871fe35597a7705e7e520908e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a9e732e92b79a6f643e16969ea9c116182595cda61847dc60c33fd04d197662d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e732e92b79a6f643e16969ea9c116182595cda61847dc60c33fd04d197662d->enter($__internal_a9e732e92b79a6f643e16969ea9c116182595cda61847dc60c33fd04d197662d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a9e732e92b79a6f643e16969ea9c116182595cda61847dc60c33fd04d197662d->leave($__internal_a9e732e92b79a6f643e16969ea9c116182595cda61847dc60c33fd04d197662d_prof);

        
        $__internal_d36638ff5aa794ac3c158e96c6d6a3ab9f6e24d871fe35597a7705e7e520908e->leave($__internal_d36638ff5aa794ac3c158e96c6d6a3ab9f6e24d871fe35597a7705e7e520908e_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_b4a424504dfd5204315ca6bce9fb7276ae027f5c33274560965d346bf6af389e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a424504dfd5204315ca6bce9fb7276ae027f5c33274560965d346bf6af389e->enter($__internal_b4a424504dfd5204315ca6bce9fb7276ae027f5c33274560965d346bf6af389e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_5568fdda057b1969c39de852c96b199d0ac704876cd8294ea5f8e1e2f0fd71e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5568fdda057b1969c39de852c96b199d0ac704876cd8294ea5f8e1e2f0fd71e3->enter($__internal_5568fdda057b1969c39de852c96b199d0ac704876cd8294ea5f8e1e2f0fd71e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_preparationStepsOne");
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
        
        $__internal_5568fdda057b1969c39de852c96b199d0ac704876cd8294ea5f8e1e2f0fd71e3->leave($__internal_5568fdda057b1969c39de852c96b199d0ac704876cd8294ea5f8e1e2f0fd71e3_prof);

        
        $__internal_b4a424504dfd5204315ca6bce9fb7276ae027f5c33274560965d346bf6af389e->leave($__internal_b4a424504dfd5204315ca6bce9fb7276ae027f5c33274560965d346bf6af389e_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/preparationThree.html.twig";
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
  Inscription Préparation - {{ parent() }}
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
           <a class=\"btn btn-danger\" href=\"{{ path('esf_espace_abonne_preparationStepsOne') }}\">Retour à l'étape 1</a>
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
", "@ESFEspaceAbonne/back/preparationThree.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\preparationThree.html.twig");
    }
}
