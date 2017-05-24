<?php

/* ESFEspaceAbonneBundle:Default:universiteThree.html.twig */
class __TwigTemplate_396a56192c055804304df83c7a2fffe61414a042e295e72e6daaa950a9e15539 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:universiteThree.html.twig", 1);
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
        $__internal_bdc0ec3aa0650e5b291924cb7f855bf295c830428a57d8ed9148136f15507715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdc0ec3aa0650e5b291924cb7f855bf295c830428a57d8ed9148136f15507715->enter($__internal_bdc0ec3aa0650e5b291924cb7f855bf295c830428a57d8ed9148136f15507715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:universiteThree.html.twig"));

        $__internal_8ec6fcd932dee94cef31e6737630d2c2400035416a7dc281252990b3b7e3d810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec6fcd932dee94cef31e6737630d2c2400035416a7dc281252990b3b7e3d810->enter($__internal_8ec6fcd932dee94cef31e6737630d2c2400035416a7dc281252990b3b7e3d810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:universiteThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdc0ec3aa0650e5b291924cb7f855bf295c830428a57d8ed9148136f15507715->leave($__internal_bdc0ec3aa0650e5b291924cb7f855bf295c830428a57d8ed9148136f15507715_prof);

        
        $__internal_8ec6fcd932dee94cef31e6737630d2c2400035416a7dc281252990b3b7e3d810->leave($__internal_8ec6fcd932dee94cef31e6737630d2c2400035416a7dc281252990b3b7e3d810_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_06434ba9ec498b38704a3e3101174a214c25f60e17ab30f6909908fbdf85a268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06434ba9ec498b38704a3e3101174a214c25f60e17ab30f6909908fbdf85a268->enter($__internal_06434ba9ec498b38704a3e3101174a214c25f60e17ab30f6909908fbdf85a268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0537b4110f223f0cf6ca895452b1f7328ef018eea9e7ab1090cfb216fc4f154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0537b4110f223f0cf6ca895452b1f7328ef018eea9e7ab1090cfb216fc4f154->enter($__internal_e0537b4110f223f0cf6ca895452b1f7328ef018eea9e7ab1090cfb216fc4f154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e0537b4110f223f0cf6ca895452b1f7328ef018eea9e7ab1090cfb216fc4f154->leave($__internal_e0537b4110f223f0cf6ca895452b1f7328ef018eea9e7ab1090cfb216fc4f154_prof);

        
        $__internal_06434ba9ec498b38704a3e3101174a214c25f60e17ab30f6909908fbdf85a268->leave($__internal_06434ba9ec498b38704a3e3101174a214c25f60e17ab30f6909908fbdf85a268_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_0f40fac1a32ae3c8aa8c93bb876f61dde0e41a02f9be317a1585253544eddbff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f40fac1a32ae3c8aa8c93bb876f61dde0e41a02f9be317a1585253544eddbff->enter($__internal_0f40fac1a32ae3c8aa8c93bb876f61dde0e41a02f9be317a1585253544eddbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_35177e64a5f7e9b4bfa8bc582db103eaa7b82f04baa7c00fdad88cfe8c10d188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35177e64a5f7e9b4bfa8bc582db103eaa7b82f04baa7c00fdad88cfe8c10d188->enter($__internal_35177e64a5f7e9b4bfa8bc582db103eaa7b82f04baa7c00fdad88cfe8c10d188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_35177e64a5f7e9b4bfa8bc582db103eaa7b82f04baa7c00fdad88cfe8c10d188->leave($__internal_35177e64a5f7e9b4bfa8bc582db103eaa7b82f04baa7c00fdad88cfe8c10d188_prof);

        
        $__internal_0f40fac1a32ae3c8aa8c93bb876f61dde0e41a02f9be317a1585253544eddbff->leave($__internal_0f40fac1a32ae3c8aa8c93bb876f61dde0e41a02f9be317a1585253544eddbff_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:universiteThree.html.twig";
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
", "ESFEspaceAbonneBundle:Default:universiteThree.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\Default\\universiteThree.html.twig");
    }
}
