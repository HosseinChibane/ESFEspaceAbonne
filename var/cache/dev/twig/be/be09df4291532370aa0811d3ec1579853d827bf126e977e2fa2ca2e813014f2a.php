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
        $__internal_8a54037e840dacd016bbd660b76f1179039ec0e084697b551c6f2d1ccc91d074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a54037e840dacd016bbd660b76f1179039ec0e084697b551c6f2d1ccc91d074->enter($__internal_8a54037e840dacd016bbd660b76f1179039ec0e084697b551c6f2d1ccc91d074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteThree.html.twig"));

        $__internal_0ca5aad786944b7a44248c9cd3a08ec2b7cc7d2feec66ea2c703ba103e1987cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca5aad786944b7a44248c9cd3a08ec2b7cc7d2feec66ea2c703ba103e1987cc->enter($__internal_0ca5aad786944b7a44248c9cd3a08ec2b7cc7d2feec66ea2c703ba103e1987cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a54037e840dacd016bbd660b76f1179039ec0e084697b551c6f2d1ccc91d074->leave($__internal_8a54037e840dacd016bbd660b76f1179039ec0e084697b551c6f2d1ccc91d074_prof);

        
        $__internal_0ca5aad786944b7a44248c9cd3a08ec2b7cc7d2feec66ea2c703ba103e1987cc->leave($__internal_0ca5aad786944b7a44248c9cd3a08ec2b7cc7d2feec66ea2c703ba103e1987cc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a77beac686da1400f186b04fb2c11f11d7b9c1de3a042c92daa9d9fa15af5834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a77beac686da1400f186b04fb2c11f11d7b9c1de3a042c92daa9d9fa15af5834->enter($__internal_a77beac686da1400f186b04fb2c11f11d7b9c1de3a042c92daa9d9fa15af5834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_45e4907f6b2260a9e90e3cc00d24608a20507015be864fb2a25d184e31c5e616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e4907f6b2260a9e90e3cc00d24608a20507015be864fb2a25d184e31c5e616->enter($__internal_45e4907f6b2260a9e90e3cc00d24608a20507015be864fb2a25d184e31c5e616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_45e4907f6b2260a9e90e3cc00d24608a20507015be864fb2a25d184e31c5e616->leave($__internal_45e4907f6b2260a9e90e3cc00d24608a20507015be864fb2a25d184e31c5e616_prof);

        
        $__internal_a77beac686da1400f186b04fb2c11f11d7b9c1de3a042c92daa9d9fa15af5834->leave($__internal_a77beac686da1400f186b04fb2c11f11d7b9c1de3a042c92daa9d9fa15af5834_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_c4270c1a290291f87d49537fd81f7a75bf8a3899203d8f539bdae15751b407f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4270c1a290291f87d49537fd81f7a75bf8a3899203d8f539bdae15751b407f0->enter($__internal_c4270c1a290291f87d49537fd81f7a75bf8a3899203d8f539bdae15751b407f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_688c787aa4bd99a196faff43d621689cfdb7e51347785e3bd458c83090cd579d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688c787aa4bd99a196faff43d621689cfdb7e51347785e3bd458c83090cd579d->enter($__internal_688c787aa4bd99a196faff43d621689cfdb7e51347785e3bd458c83090cd579d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_688c787aa4bd99a196faff43d621689cfdb7e51347785e3bd458c83090cd579d->leave($__internal_688c787aa4bd99a196faff43d621689cfdb7e51347785e3bd458c83090cd579d_prof);

        
        $__internal_c4270c1a290291f87d49537fd81f7a75bf8a3899203d8f539bdae15751b407f0->leave($__internal_c4270c1a290291f87d49537fd81f7a75bf8a3899203d8f539bdae15751b407f0_prof);

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
