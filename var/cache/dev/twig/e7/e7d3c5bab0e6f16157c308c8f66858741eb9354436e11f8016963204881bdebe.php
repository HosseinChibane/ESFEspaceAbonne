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
        $__internal_bd92c6eccf290d0446422b7ef83695bb8f9bc94254eb2f7ab17992103356de90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd92c6eccf290d0446422b7ef83695bb8f9bc94254eb2f7ab17992103356de90->enter($__internal_bd92c6eccf290d0446422b7ef83695bb8f9bc94254eb2f7ab17992103356de90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:langueThree.html.twig"));

        $__internal_2fa31ed774b77a10e271edbdcc0a82f92bf9647a3e576209b1723891775c530f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa31ed774b77a10e271edbdcc0a82f92bf9647a3e576209b1723891775c530f->enter($__internal_2fa31ed774b77a10e271edbdcc0a82f92bf9647a3e576209b1723891775c530f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:langueThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd92c6eccf290d0446422b7ef83695bb8f9bc94254eb2f7ab17992103356de90->leave($__internal_bd92c6eccf290d0446422b7ef83695bb8f9bc94254eb2f7ab17992103356de90_prof);

        
        $__internal_2fa31ed774b77a10e271edbdcc0a82f92bf9647a3e576209b1723891775c530f->leave($__internal_2fa31ed774b77a10e271edbdcc0a82f92bf9647a3e576209b1723891775c530f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_95707c32b4181c111dd2dfdd62e072c06c5f2539b4af5a9b5562420adcaf0f54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95707c32b4181c111dd2dfdd62e072c06c5f2539b4af5a9b5562420adcaf0f54->enter($__internal_95707c32b4181c111dd2dfdd62e072c06c5f2539b4af5a9b5562420adcaf0f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8abecb1f92374c865727583ac0cd6bfd75ab41b0154a2c3ec2aae9a9e08f87b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8abecb1f92374c865727583ac0cd6bfd75ab41b0154a2c3ec2aae9a9e08f87b8->enter($__internal_8abecb1f92374c865727583ac0cd6bfd75ab41b0154a2c3ec2aae9a9e08f87b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8abecb1f92374c865727583ac0cd6bfd75ab41b0154a2c3ec2aae9a9e08f87b8->leave($__internal_8abecb1f92374c865727583ac0cd6bfd75ab41b0154a2c3ec2aae9a9e08f87b8_prof);

        
        $__internal_95707c32b4181c111dd2dfdd62e072c06c5f2539b4af5a9b5562420adcaf0f54->leave($__internal_95707c32b4181c111dd2dfdd62e072c06c5f2539b4af5a9b5562420adcaf0f54_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_bee741438a68f33dcb8f56fe2e7ed6614120dd30d4eefc41b3013354f324030f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee741438a68f33dcb8f56fe2e7ed6614120dd30d4eefc41b3013354f324030f->enter($__internal_bee741438a68f33dcb8f56fe2e7ed6614120dd30d4eefc41b3013354f324030f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_07b1e0aae9b0df5f06fb94023b274b5c7d53328836046558007d342c4765fc58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b1e0aae9b0df5f06fb94023b274b5c7d53328836046558007d342c4765fc58->enter($__internal_07b1e0aae9b0df5f06fb94023b274b5c7d53328836046558007d342c4765fc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_07b1e0aae9b0df5f06fb94023b274b5c7d53328836046558007d342c4765fc58->leave($__internal_07b1e0aae9b0df5f06fb94023b274b5c7d53328836046558007d342c4765fc58_prof);

        
        $__internal_bee741438a68f33dcb8f56fe2e7ed6614120dd30d4eefc41b3013354f324030f->leave($__internal_bee741438a68f33dcb8f56fe2e7ed6614120dd30d4eefc41b3013354f324030f_prof);

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
