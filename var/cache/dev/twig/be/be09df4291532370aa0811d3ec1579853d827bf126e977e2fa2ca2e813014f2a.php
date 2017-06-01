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
        $__internal_fb7f3098dbd448ec4adccd5b38aecd2f27e7c52d9ea13a951b53b6b0ebd5ace8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb7f3098dbd448ec4adccd5b38aecd2f27e7c52d9ea13a951b53b6b0ebd5ace8->enter($__internal_fb7f3098dbd448ec4adccd5b38aecd2f27e7c52d9ea13a951b53b6b0ebd5ace8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteThree.html.twig"));

        $__internal_f9644a6477dd832b87fd6410e78055db239dd588a366b848de59a824565436f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9644a6477dd832b87fd6410e78055db239dd588a366b848de59a824565436f4->enter($__internal_f9644a6477dd832b87fd6410e78055db239dd588a366b848de59a824565436f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb7f3098dbd448ec4adccd5b38aecd2f27e7c52d9ea13a951b53b6b0ebd5ace8->leave($__internal_fb7f3098dbd448ec4adccd5b38aecd2f27e7c52d9ea13a951b53b6b0ebd5ace8_prof);

        
        $__internal_f9644a6477dd832b87fd6410e78055db239dd588a366b848de59a824565436f4->leave($__internal_f9644a6477dd832b87fd6410e78055db239dd588a366b848de59a824565436f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd6ed00dae8f1d8e1fd1020d4563a451ca89b0298b13784f3d2138a2293653c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6ed00dae8f1d8e1fd1020d4563a451ca89b0298b13784f3d2138a2293653c2->enter($__internal_fd6ed00dae8f1d8e1fd1020d4563a451ca89b0298b13784f3d2138a2293653c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6fffceff0885f8365a5fb80b47c80e9a797813c1f4e62582c55e3313719b1bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fffceff0885f8365a5fb80b47c80e9a797813c1f4e62582c55e3313719b1bf5->enter($__internal_6fffceff0885f8365a5fb80b47c80e9a797813c1f4e62582c55e3313719b1bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6fffceff0885f8365a5fb80b47c80e9a797813c1f4e62582c55e3313719b1bf5->leave($__internal_6fffceff0885f8365a5fb80b47c80e9a797813c1f4e62582c55e3313719b1bf5_prof);

        
        $__internal_fd6ed00dae8f1d8e1fd1020d4563a451ca89b0298b13784f3d2138a2293653c2->leave($__internal_fd6ed00dae8f1d8e1fd1020d4563a451ca89b0298b13784f3d2138a2293653c2_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_3089c6a748f9b8d3f79e72b3438f7c8f9fbfaec761e2a45908eaf2304bed32b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3089c6a748f9b8d3f79e72b3438f7c8f9fbfaec761e2a45908eaf2304bed32b8->enter($__internal_3089c6a748f9b8d3f79e72b3438f7c8f9fbfaec761e2a45908eaf2304bed32b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_4520148990049e84f104e377b03878733f314f2b8c0bfd06b08319388ac1cf33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4520148990049e84f104e377b03878733f314f2b8c0bfd06b08319388ac1cf33->enter($__internal_4520148990049e84f104e377b03878733f314f2b8c0bfd06b08319388ac1cf33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_4520148990049e84f104e377b03878733f314f2b8c0bfd06b08319388ac1cf33->leave($__internal_4520148990049e84f104e377b03878733f314f2b8c0bfd06b08319388ac1cf33_prof);

        
        $__internal_3089c6a748f9b8d3f79e72b3438f7c8f9fbfaec761e2a45908eaf2304bed32b8->leave($__internal_3089c6a748f9b8d3f79e72b3438f7c8f9fbfaec761e2a45908eaf2304bed32b8_prof);

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
