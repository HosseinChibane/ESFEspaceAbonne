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
        $__internal_16977319fcb1f9155ee7bdac118995b4b54bfac6359282c0c8fae4e1ded765e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16977319fcb1f9155ee7bdac118995b4b54bfac6359282c0c8fae4e1ded765e7->enter($__internal_16977319fcb1f9155ee7bdac118995b4b54bfac6359282c0c8fae4e1ded765e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationThree.html.twig"));

        $__internal_d0fff7dcd6d47796d4002ae305b01b2c7ee08c3fc08e05186f25153af4792d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0fff7dcd6d47796d4002ae305b01b2c7ee08c3fc08e05186f25153af4792d2a->enter($__internal_d0fff7dcd6d47796d4002ae305b01b2c7ee08c3fc08e05186f25153af4792d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16977319fcb1f9155ee7bdac118995b4b54bfac6359282c0c8fae4e1ded765e7->leave($__internal_16977319fcb1f9155ee7bdac118995b4b54bfac6359282c0c8fae4e1ded765e7_prof);

        
        $__internal_d0fff7dcd6d47796d4002ae305b01b2c7ee08c3fc08e05186f25153af4792d2a->leave($__internal_d0fff7dcd6d47796d4002ae305b01b2c7ee08c3fc08e05186f25153af4792d2a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8b26c2b12e36f42c8fbd8a6686ecb879f68d6b7b75f9779066443dba3957128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8b26c2b12e36f42c8fbd8a6686ecb879f68d6b7b75f9779066443dba3957128->enter($__internal_e8b26c2b12e36f42c8fbd8a6686ecb879f68d6b7b75f9779066443dba3957128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5daf17dbeaff5ef798c9837e13d1a551276188b534571ca8ee2ff83751aac057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5daf17dbeaff5ef798c9837e13d1a551276188b534571ca8ee2ff83751aac057->enter($__internal_5daf17dbeaff5ef798c9837e13d1a551276188b534571ca8ee2ff83751aac057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5daf17dbeaff5ef798c9837e13d1a551276188b534571ca8ee2ff83751aac057->leave($__internal_5daf17dbeaff5ef798c9837e13d1a551276188b534571ca8ee2ff83751aac057_prof);

        
        $__internal_e8b26c2b12e36f42c8fbd8a6686ecb879f68d6b7b75f9779066443dba3957128->leave($__internal_e8b26c2b12e36f42c8fbd8a6686ecb879f68d6b7b75f9779066443dba3957128_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_c191d00d4f70b3cde9e4ae6fef541103bfd57c2c641099517ce6df843a0b0385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c191d00d4f70b3cde9e4ae6fef541103bfd57c2c641099517ce6df843a0b0385->enter($__internal_c191d00d4f70b3cde9e4ae6fef541103bfd57c2c641099517ce6df843a0b0385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_fed943f5ca98b205a46ee101431c478dd6047429f57db67df4408378b3f3a053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed943f5ca98b205a46ee101431c478dd6047429f57db67df4408378b3f3a053->enter($__internal_fed943f5ca98b205a46ee101431c478dd6047429f57db67df4408378b3f3a053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_fed943f5ca98b205a46ee101431c478dd6047429f57db67df4408378b3f3a053->leave($__internal_fed943f5ca98b205a46ee101431c478dd6047429f57db67df4408378b3f3a053_prof);

        
        $__internal_c191d00d4f70b3cde9e4ae6fef541103bfd57c2c641099517ce6df843a0b0385->leave($__internal_c191d00d4f70b3cde9e4ae6fef541103bfd57c2c641099517ce6df843a0b0385_prof);

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
