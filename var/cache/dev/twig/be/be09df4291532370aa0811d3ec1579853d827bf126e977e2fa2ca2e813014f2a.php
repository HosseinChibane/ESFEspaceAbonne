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
        $__internal_6fd4b53915874384b6e457158dc914376fd16b3c7fdd13f7d9bbe5c6874d1e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd4b53915874384b6e457158dc914376fd16b3c7fdd13f7d9bbe5c6874d1e13->enter($__internal_6fd4b53915874384b6e457158dc914376fd16b3c7fdd13f7d9bbe5c6874d1e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteThree.html.twig"));

        $__internal_987fe9b2c279ff399907fb12fe6fc190d2ac1af724321d12b3367b98ee3731b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_987fe9b2c279ff399907fb12fe6fc190d2ac1af724321d12b3367b98ee3731b6->enter($__internal_987fe9b2c279ff399907fb12fe6fc190d2ac1af724321d12b3367b98ee3731b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fd4b53915874384b6e457158dc914376fd16b3c7fdd13f7d9bbe5c6874d1e13->leave($__internal_6fd4b53915874384b6e457158dc914376fd16b3c7fdd13f7d9bbe5c6874d1e13_prof);

        
        $__internal_987fe9b2c279ff399907fb12fe6fc190d2ac1af724321d12b3367b98ee3731b6->leave($__internal_987fe9b2c279ff399907fb12fe6fc190d2ac1af724321d12b3367b98ee3731b6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb9530348dec409b44059bcaea3a7e9bbddd1bfc183d52d8f4c601db94245856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9530348dec409b44059bcaea3a7e9bbddd1bfc183d52d8f4c601db94245856->enter($__internal_eb9530348dec409b44059bcaea3a7e9bbddd1bfc183d52d8f4c601db94245856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d01aadef620b79614d2c87ea28b477d2bb0c7aedb4aa3025f73699bed0204ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01aadef620b79614d2c87ea28b477d2bb0c7aedb4aa3025f73699bed0204ca9->enter($__internal_d01aadef620b79614d2c87ea28b477d2bb0c7aedb4aa3025f73699bed0204ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d01aadef620b79614d2c87ea28b477d2bb0c7aedb4aa3025f73699bed0204ca9->leave($__internal_d01aadef620b79614d2c87ea28b477d2bb0c7aedb4aa3025f73699bed0204ca9_prof);

        
        $__internal_eb9530348dec409b44059bcaea3a7e9bbddd1bfc183d52d8f4c601db94245856->leave($__internal_eb9530348dec409b44059bcaea3a7e9bbddd1bfc183d52d8f4c601db94245856_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_742722345f3bee750592108f51c8c7017b8289f85644e1eedd94278a61a8a11d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_742722345f3bee750592108f51c8c7017b8289f85644e1eedd94278a61a8a11d->enter($__internal_742722345f3bee750592108f51c8c7017b8289f85644e1eedd94278a61a8a11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_85cedb117b55487788408659d709cff8cc8efe07c3bf45ded938f3000c925228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85cedb117b55487788408659d709cff8cc8efe07c3bf45ded938f3000c925228->enter($__internal_85cedb117b55487788408659d709cff8cc8efe07c3bf45ded938f3000c925228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_85cedb117b55487788408659d709cff8cc8efe07c3bf45ded938f3000c925228->leave($__internal_85cedb117b55487788408659d709cff8cc8efe07c3bf45ded938f3000c925228_prof);

        
        $__internal_742722345f3bee750592108f51c8c7017b8289f85644e1eedd94278a61a8a11d->leave($__internal_742722345f3bee750592108f51c8c7017b8289f85644e1eedd94278a61a8a11d_prof);

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
