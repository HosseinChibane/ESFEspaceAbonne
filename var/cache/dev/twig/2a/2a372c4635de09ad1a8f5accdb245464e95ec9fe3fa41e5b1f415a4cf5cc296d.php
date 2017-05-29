<?php

/* ESFEspaceAbonneBundle:Back:universiteThree.html.twig */
class __TwigTemplate_b27ecd0c585b360265e7fb878b701ff2cedb174a627a68e4b769fb208ebcd0f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Back:universiteThree.html.twig", 1);
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
        $__internal_5e994040b8b4843c79cb7c44e20511d412ba90a981dd9935b2838fa5e9399150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e994040b8b4843c79cb7c44e20511d412ba90a981dd9935b2838fa5e9399150->enter($__internal_5e994040b8b4843c79cb7c44e20511d412ba90a981dd9935b2838fa5e9399150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:universiteThree.html.twig"));

        $__internal_0cbcc596265c68915bb0cde1024f68cb49fb69a3d7203aa1ce615218b68dc178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cbcc596265c68915bb0cde1024f68cb49fb69a3d7203aa1ce615218b68dc178->enter($__internal_0cbcc596265c68915bb0cde1024f68cb49fb69a3d7203aa1ce615218b68dc178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:universiteThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e994040b8b4843c79cb7c44e20511d412ba90a981dd9935b2838fa5e9399150->leave($__internal_5e994040b8b4843c79cb7c44e20511d412ba90a981dd9935b2838fa5e9399150_prof);

        
        $__internal_0cbcc596265c68915bb0cde1024f68cb49fb69a3d7203aa1ce615218b68dc178->leave($__internal_0cbcc596265c68915bb0cde1024f68cb49fb69a3d7203aa1ce615218b68dc178_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4906073dfda83c98b1299d65597381b317266842a2e1a51baf033d017573beb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4906073dfda83c98b1299d65597381b317266842a2e1a51baf033d017573beb5->enter($__internal_4906073dfda83c98b1299d65597381b317266842a2e1a51baf033d017573beb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_618d1c57afc9d3699f9406f2e2dbf9357c432f6b6b38a38ea5413f9601de7c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618d1c57afc9d3699f9406f2e2dbf9357c432f6b6b38a38ea5413f9601de7c7a->enter($__internal_618d1c57afc9d3699f9406f2e2dbf9357c432f6b6b38a38ea5413f9601de7c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_618d1c57afc9d3699f9406f2e2dbf9357c432f6b6b38a38ea5413f9601de7c7a->leave($__internal_618d1c57afc9d3699f9406f2e2dbf9357c432f6b6b38a38ea5413f9601de7c7a_prof);

        
        $__internal_4906073dfda83c98b1299d65597381b317266842a2e1a51baf033d017573beb5->leave($__internal_4906073dfda83c98b1299d65597381b317266842a2e1a51baf033d017573beb5_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_603bf922703a8fc6af5394020ce143f19504b467d250f78853228577727519e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_603bf922703a8fc6af5394020ce143f19504b467d250f78853228577727519e9->enter($__internal_603bf922703a8fc6af5394020ce143f19504b467d250f78853228577727519e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_65906bf96e915f77f3d453acd1635b7e880dc32321a5ed9b60e67a0ea75a10ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65906bf96e915f77f3d453acd1635b7e880dc32321a5ed9b60e67a0ea75a10ad->enter($__internal_65906bf96e915f77f3d453acd1635b7e880dc32321a5ed9b60e67a0ea75a10ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_65906bf96e915f77f3d453acd1635b7e880dc32321a5ed9b60e67a0ea75a10ad->leave($__internal_65906bf96e915f77f3d453acd1635b7e880dc32321a5ed9b60e67a0ea75a10ad_prof);

        
        $__internal_603bf922703a8fc6af5394020ce143f19504b467d250f78853228577727519e9->leave($__internal_603bf922703a8fc6af5394020ce143f19504b467d250f78853228577727519e9_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Back:universiteThree.html.twig";
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
", "ESFEspaceAbonneBundle:Back:universiteThree.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/universiteThree.html.twig");
    }
}
