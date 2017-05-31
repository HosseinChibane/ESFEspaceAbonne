<?php

/* ESFEspaceAbonneBundle:back:universiteThree.html.twig */
class __TwigTemplate_b16645b58e382eb638c93e1dd75d01c8dfba3e0bf757cdfc0668299535be8f37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:universiteThree.html.twig", 1);
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
        $__internal_a9ed681fc04adc31d966dfc82a0c3c18f902e0969e224e171e308eae790f287f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9ed681fc04adc31d966dfc82a0c3c18f902e0969e224e171e308eae790f287f->enter($__internal_a9ed681fc04adc31d966dfc82a0c3c18f902e0969e224e171e308eae790f287f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteThree.html.twig"));

        $__internal_5acf71964f4f2c729c81eb410028d108b10c455c0308b7519481d70dbcd59a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acf71964f4f2c729c81eb410028d108b10c455c0308b7519481d70dbcd59a09->enter($__internal_5acf71964f4f2c729c81eb410028d108b10c455c0308b7519481d70dbcd59a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9ed681fc04adc31d966dfc82a0c3c18f902e0969e224e171e308eae790f287f->leave($__internal_a9ed681fc04adc31d966dfc82a0c3c18f902e0969e224e171e308eae790f287f_prof);

        
        $__internal_5acf71964f4f2c729c81eb410028d108b10c455c0308b7519481d70dbcd59a09->leave($__internal_5acf71964f4f2c729c81eb410028d108b10c455c0308b7519481d70dbcd59a09_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_73278fb2c5091606f36a30c5cbb8d96404443ad83b7ddcf4d1f489c7511ab9b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73278fb2c5091606f36a30c5cbb8d96404443ad83b7ddcf4d1f489c7511ab9b6->enter($__internal_73278fb2c5091606f36a30c5cbb8d96404443ad83b7ddcf4d1f489c7511ab9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d1434374aab0dbb8b59dda8f6287bf8dbc14280f34c8bbd3b2b885ab5bfb682b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1434374aab0dbb8b59dda8f6287bf8dbc14280f34c8bbd3b2b885ab5bfb682b->enter($__internal_d1434374aab0dbb8b59dda8f6287bf8dbc14280f34c8bbd3b2b885ab5bfb682b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d1434374aab0dbb8b59dda8f6287bf8dbc14280f34c8bbd3b2b885ab5bfb682b->leave($__internal_d1434374aab0dbb8b59dda8f6287bf8dbc14280f34c8bbd3b2b885ab5bfb682b_prof);

        
        $__internal_73278fb2c5091606f36a30c5cbb8d96404443ad83b7ddcf4d1f489c7511ab9b6->leave($__internal_73278fb2c5091606f36a30c5cbb8d96404443ad83b7ddcf4d1f489c7511ab9b6_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_065a8d2d1bcb4029e48486954b685e76091aec59aad5774bb7d6be8a8744a1d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_065a8d2d1bcb4029e48486954b685e76091aec59aad5774bb7d6be8a8744a1d9->enter($__internal_065a8d2d1bcb4029e48486954b685e76091aec59aad5774bb7d6be8a8744a1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_c471ef1d85f6e6ecf09df84f39fd5315796dde006cb9b4eb988c4999ba1b0219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c471ef1d85f6e6ecf09df84f39fd5315796dde006cb9b4eb988c4999ba1b0219->enter($__internal_c471ef1d85f6e6ecf09df84f39fd5315796dde006cb9b4eb988c4999ba1b0219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_c471ef1d85f6e6ecf09df84f39fd5315796dde006cb9b4eb988c4999ba1b0219->leave($__internal_c471ef1d85f6e6ecf09df84f39fd5315796dde006cb9b4eb988c4999ba1b0219_prof);

        
        $__internal_065a8d2d1bcb4029e48486954b685e76091aec59aad5774bb7d6be8a8744a1d9->leave($__internal_065a8d2d1bcb4029e48486954b685e76091aec59aad5774bb7d6be8a8744a1d9_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:universiteThree.html.twig";
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
", "ESFEspaceAbonneBundle:back:universiteThree.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/universiteThree.html.twig");
    }
}
