<?php

/* ESFEspaceAbonneBundle:Default:preparationThree.html.twig */
class __TwigTemplate_4210c9c6420814a3cdb9e7e7d0e927e5cc554c3c5a146d1d2490f035b66af47e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:preparationThree.html.twig", 1);
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
        $__internal_68e9e3227665deab0b075c242c5f6796b242454bbf6987e685ed92e03bd05d46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68e9e3227665deab0b075c242c5f6796b242454bbf6987e685ed92e03bd05d46->enter($__internal_68e9e3227665deab0b075c242c5f6796b242454bbf6987e685ed92e03bd05d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:preparationThree.html.twig"));

        $__internal_36e0b14ac179bc60a3e0b11f7e360a5e90a5a5ec8f669b8feb31b7800a958daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e0b14ac179bc60a3e0b11f7e360a5e90a5a5ec8f669b8feb31b7800a958daf->enter($__internal_36e0b14ac179bc60a3e0b11f7e360a5e90a5a5ec8f669b8feb31b7800a958daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:preparationThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68e9e3227665deab0b075c242c5f6796b242454bbf6987e685ed92e03bd05d46->leave($__internal_68e9e3227665deab0b075c242c5f6796b242454bbf6987e685ed92e03bd05d46_prof);

        
        $__internal_36e0b14ac179bc60a3e0b11f7e360a5e90a5a5ec8f669b8feb31b7800a958daf->leave($__internal_36e0b14ac179bc60a3e0b11f7e360a5e90a5a5ec8f669b8feb31b7800a958daf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e51f26ea49ef8ae76ee23661c4fe44284e6aa58a6ff5819c80703f9c9e1557dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e51f26ea49ef8ae76ee23661c4fe44284e6aa58a6ff5819c80703f9c9e1557dd->enter($__internal_e51f26ea49ef8ae76ee23661c4fe44284e6aa58a6ff5819c80703f9c9e1557dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c13c87600fdba9275aa4ba5a5820ece47fd9d54501213749c35bf0ad37e3d71f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13c87600fdba9275aa4ba5a5820ece47fd9d54501213749c35bf0ad37e3d71f->enter($__internal_c13c87600fdba9275aa4ba5a5820ece47fd9d54501213749c35bf0ad37e3d71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c13c87600fdba9275aa4ba5a5820ece47fd9d54501213749c35bf0ad37e3d71f->leave($__internal_c13c87600fdba9275aa4ba5a5820ece47fd9d54501213749c35bf0ad37e3d71f_prof);

        
        $__internal_e51f26ea49ef8ae76ee23661c4fe44284e6aa58a6ff5819c80703f9c9e1557dd->leave($__internal_e51f26ea49ef8ae76ee23661c4fe44284e6aa58a6ff5819c80703f9c9e1557dd_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_86829d314af2c9e62701e0317872ff1d9927cec7a329afaf640546cc76292428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86829d314af2c9e62701e0317872ff1d9927cec7a329afaf640546cc76292428->enter($__internal_86829d314af2c9e62701e0317872ff1d9927cec7a329afaf640546cc76292428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_9a7a08cac8f559eac6fbedc688061d9119dd7132546395c79646cba8d3ab8c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a7a08cac8f559eac6fbedc688061d9119dd7132546395c79646cba8d3ab8c07->enter($__internal_9a7a08cac8f559eac6fbedc688061d9119dd7132546395c79646cba8d3ab8c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_9a7a08cac8f559eac6fbedc688061d9119dd7132546395c79646cba8d3ab8c07->leave($__internal_9a7a08cac8f559eac6fbedc688061d9119dd7132546395c79646cba8d3ab8c07_prof);

        
        $__internal_86829d314af2c9e62701e0317872ff1d9927cec7a329afaf640546cc76292428->leave($__internal_86829d314af2c9e62701e0317872ff1d9927cec7a329afaf640546cc76292428_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:preparationThree.html.twig";
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
", "ESFEspaceAbonneBundle:Default:preparationThree.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/preparationThree.html.twig");
    }
}
