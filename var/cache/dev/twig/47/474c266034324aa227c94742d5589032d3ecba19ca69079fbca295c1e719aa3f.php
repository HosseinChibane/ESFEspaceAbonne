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
        $__internal_13b60d3e0c3cbc41a171da75f541e55fc8d8a77884e12c4cde75b6b4165ba280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b60d3e0c3cbc41a171da75f541e55fc8d8a77884e12c4cde75b6b4165ba280->enter($__internal_13b60d3e0c3cbc41a171da75f541e55fc8d8a77884e12c4cde75b6b4165ba280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/langueThree.html.twig"));

        $__internal_f0ea35d1a10764a8308c57505291dfbaa8647f75dada277bb96762ece6abc02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ea35d1a10764a8308c57505291dfbaa8647f75dada277bb96762ece6abc02b->enter($__internal_f0ea35d1a10764a8308c57505291dfbaa8647f75dada277bb96762ece6abc02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/langueThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13b60d3e0c3cbc41a171da75f541e55fc8d8a77884e12c4cde75b6b4165ba280->leave($__internal_13b60d3e0c3cbc41a171da75f541e55fc8d8a77884e12c4cde75b6b4165ba280_prof);

        
        $__internal_f0ea35d1a10764a8308c57505291dfbaa8647f75dada277bb96762ece6abc02b->leave($__internal_f0ea35d1a10764a8308c57505291dfbaa8647f75dada277bb96762ece6abc02b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_15925d97abb31959f7904b430ee31a785233e1ae201e9169ecfa07c85ad58f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15925d97abb31959f7904b430ee31a785233e1ae201e9169ecfa07c85ad58f51->enter($__internal_15925d97abb31959f7904b430ee31a785233e1ae201e9169ecfa07c85ad58f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a86486e399bc608ea5cc68491b891af55fcbfa429d1429cef08879d62adc66aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86486e399bc608ea5cc68491b891af55fcbfa429d1429cef08879d62adc66aa->enter($__internal_a86486e399bc608ea5cc68491b891af55fcbfa429d1429cef08879d62adc66aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a86486e399bc608ea5cc68491b891af55fcbfa429d1429cef08879d62adc66aa->leave($__internal_a86486e399bc608ea5cc68491b891af55fcbfa429d1429cef08879d62adc66aa_prof);

        
        $__internal_15925d97abb31959f7904b430ee31a785233e1ae201e9169ecfa07c85ad58f51->leave($__internal_15925d97abb31959f7904b430ee31a785233e1ae201e9169ecfa07c85ad58f51_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_51f2234b397b2e05510ba3dc347e6e05a56e9e5366a1a331f8424b167fb72f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f2234b397b2e05510ba3dc347e6e05a56e9e5366a1a331f8424b167fb72f15->enter($__internal_51f2234b397b2e05510ba3dc347e6e05a56e9e5366a1a331f8424b167fb72f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_09aac076b0f7683df89a5c198063fb6d9db38291fff3fe1a9d7475ffc5544677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09aac076b0f7683df89a5c198063fb6d9db38291fff3fe1a9d7475ffc5544677->enter($__internal_09aac076b0f7683df89a5c198063fb6d9db38291fff3fe1a9d7475ffc5544677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_09aac076b0f7683df89a5c198063fb6d9db38291fff3fe1a9d7475ffc5544677->leave($__internal_09aac076b0f7683df89a5c198063fb6d9db38291fff3fe1a9d7475ffc5544677_prof);

        
        $__internal_51f2234b397b2e05510ba3dc347e6e05a56e9e5366a1a331f8424b167fb72f15->leave($__internal_51f2234b397b2e05510ba3dc347e6e05a56e9e5366a1a331f8424b167fb72f15_prof);

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
