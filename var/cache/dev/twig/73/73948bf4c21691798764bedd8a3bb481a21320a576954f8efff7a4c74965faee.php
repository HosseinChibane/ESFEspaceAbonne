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
        $__internal_247ab6486d07eb2be8b5c3d71a90f4646c10aec9f859aeb6d964ee879fc69398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_247ab6486d07eb2be8b5c3d71a90f4646c10aec9f859aeb6d964ee879fc69398->enter($__internal_247ab6486d07eb2be8b5c3d71a90f4646c10aec9f859aeb6d964ee879fc69398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationThree.html.twig"));

        $__internal_e6df30a8e0ae616ee08166a11ffece011b3dd2eea98a77b25ced4d32baa91b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6df30a8e0ae616ee08166a11ffece011b3dd2eea98a77b25ced4d32baa91b31->enter($__internal_e6df30a8e0ae616ee08166a11ffece011b3dd2eea98a77b25ced4d32baa91b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_247ab6486d07eb2be8b5c3d71a90f4646c10aec9f859aeb6d964ee879fc69398->leave($__internal_247ab6486d07eb2be8b5c3d71a90f4646c10aec9f859aeb6d964ee879fc69398_prof);

        
        $__internal_e6df30a8e0ae616ee08166a11ffece011b3dd2eea98a77b25ced4d32baa91b31->leave($__internal_e6df30a8e0ae616ee08166a11ffece011b3dd2eea98a77b25ced4d32baa91b31_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a1905e65ef33c5581456536452fc49fd55158452ee58440656706a92cd8d37c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1905e65ef33c5581456536452fc49fd55158452ee58440656706a92cd8d37c->enter($__internal_4a1905e65ef33c5581456536452fc49fd55158452ee58440656706a92cd8d37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_02a335478c2efcd90314d420476579a1d7cc54ffef6437b8261efaf0eb0da263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a335478c2efcd90314d420476579a1d7cc54ffef6437b8261efaf0eb0da263->enter($__internal_02a335478c2efcd90314d420476579a1d7cc54ffef6437b8261efaf0eb0da263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_02a335478c2efcd90314d420476579a1d7cc54ffef6437b8261efaf0eb0da263->leave($__internal_02a335478c2efcd90314d420476579a1d7cc54ffef6437b8261efaf0eb0da263_prof);

        
        $__internal_4a1905e65ef33c5581456536452fc49fd55158452ee58440656706a92cd8d37c->leave($__internal_4a1905e65ef33c5581456536452fc49fd55158452ee58440656706a92cd8d37c_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_44a876a0f478e6ad58549ba00ea88bf373cd774290e7e072aa939d44462444a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a876a0f478e6ad58549ba00ea88bf373cd774290e7e072aa939d44462444a6->enter($__internal_44a876a0f478e6ad58549ba00ea88bf373cd774290e7e072aa939d44462444a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_476d335ce649f185fc7470363ef4cca9cf39369801650900f5dfdc2bff673455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476d335ce649f185fc7470363ef4cca9cf39369801650900f5dfdc2bff673455->enter($__internal_476d335ce649f185fc7470363ef4cca9cf39369801650900f5dfdc2bff673455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_476d335ce649f185fc7470363ef4cca9cf39369801650900f5dfdc2bff673455->leave($__internal_476d335ce649f185fc7470363ef4cca9cf39369801650900f5dfdc2bff673455_prof);

        
        $__internal_44a876a0f478e6ad58549ba00ea88bf373cd774290e7e072aa939d44462444a6->leave($__internal_44a876a0f478e6ad58549ba00ea88bf373cd774290e7e072aa939d44462444a6_prof);

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
