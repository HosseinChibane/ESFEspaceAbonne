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
        $__internal_556645415229a529046e4677541d29dadb81f01dfac4550c32eccf253898687b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_556645415229a529046e4677541d29dadb81f01dfac4550c32eccf253898687b->enter($__internal_556645415229a529046e4677541d29dadb81f01dfac4550c32eccf253898687b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/langueThree.html.twig"));

        $__internal_9c5c8e70c72f975bc6c7588469bd8eb3d07090915a8729542e3987fec8ba65a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5c8e70c72f975bc6c7588469bd8eb3d07090915a8729542e3987fec8ba65a8->enter($__internal_9c5c8e70c72f975bc6c7588469bd8eb3d07090915a8729542e3987fec8ba65a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/langueThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_556645415229a529046e4677541d29dadb81f01dfac4550c32eccf253898687b->leave($__internal_556645415229a529046e4677541d29dadb81f01dfac4550c32eccf253898687b_prof);

        
        $__internal_9c5c8e70c72f975bc6c7588469bd8eb3d07090915a8729542e3987fec8ba65a8->leave($__internal_9c5c8e70c72f975bc6c7588469bd8eb3d07090915a8729542e3987fec8ba65a8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6c1e576b1ba7b0c97c100b39c513f559552b3fc7369679694533b98323fa656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6c1e576b1ba7b0c97c100b39c513f559552b3fc7369679694533b98323fa656->enter($__internal_e6c1e576b1ba7b0c97c100b39c513f559552b3fc7369679694533b98323fa656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d4d8100b9064df7699337223df7d1a877cdd22924aef2307ea777a58df60ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4d8100b9064df7699337223df7d1a877cdd22924aef2307ea777a58df60ac8->enter($__internal_3d4d8100b9064df7699337223df7d1a877cdd22924aef2307ea777a58df60ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3d4d8100b9064df7699337223df7d1a877cdd22924aef2307ea777a58df60ac8->leave($__internal_3d4d8100b9064df7699337223df7d1a877cdd22924aef2307ea777a58df60ac8_prof);

        
        $__internal_e6c1e576b1ba7b0c97c100b39c513f559552b3fc7369679694533b98323fa656->leave($__internal_e6c1e576b1ba7b0c97c100b39c513f559552b3fc7369679694533b98323fa656_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_c1f9abc08b3e19cc0d7e440b736917d62c8e76d1b3d13e2cf84c8069224511cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1f9abc08b3e19cc0d7e440b736917d62c8e76d1b3d13e2cf84c8069224511cf->enter($__internal_c1f9abc08b3e19cc0d7e440b736917d62c8e76d1b3d13e2cf84c8069224511cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_3f7c1d12c78ba5ec814d6ee0301805b499fca230f715d28c9e1b5598aa3b9081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7c1d12c78ba5ec814d6ee0301805b499fca230f715d28c9e1b5598aa3b9081->enter($__internal_3f7c1d12c78ba5ec814d6ee0301805b499fca230f715d28c9e1b5598aa3b9081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_3f7c1d12c78ba5ec814d6ee0301805b499fca230f715d28c9e1b5598aa3b9081->leave($__internal_3f7c1d12c78ba5ec814d6ee0301805b499fca230f715d28c9e1b5598aa3b9081_prof);

        
        $__internal_c1f9abc08b3e19cc0d7e440b736917d62c8e76d1b3d13e2cf84c8069224511cf->leave($__internal_c1f9abc08b3e19cc0d7e440b736917d62c8e76d1b3d13e2cf84c8069224511cf_prof);

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
