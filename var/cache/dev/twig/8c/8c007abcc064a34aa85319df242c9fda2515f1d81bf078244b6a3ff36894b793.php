<?php

/* @ESFEspaceAbonne/Default/preparationThree.html.twig */
class __TwigTemplate_a8f38ba25037a94046100f0e31e44133b436e4e036cf4847680248688a0b9638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/Default/preparationThree.html.twig", 1);
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
        $__internal_6553dcfc21747fe36d5a412ff37502ecdf2755f8c8d91295ff1db2ba33cf37a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6553dcfc21747fe36d5a412ff37502ecdf2755f8c8d91295ff1db2ba33cf37a2->enter($__internal_6553dcfc21747fe36d5a412ff37502ecdf2755f8c8d91295ff1db2ba33cf37a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/preparationThree.html.twig"));

        $__internal_87b085611f46722662775ef291f264a588c3b66dcacb792dc8a0e0b69a31a374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b085611f46722662775ef291f264a588c3b66dcacb792dc8a0e0b69a31a374->enter($__internal_87b085611f46722662775ef291f264a588c3b66dcacb792dc8a0e0b69a31a374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/preparationThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6553dcfc21747fe36d5a412ff37502ecdf2755f8c8d91295ff1db2ba33cf37a2->leave($__internal_6553dcfc21747fe36d5a412ff37502ecdf2755f8c8d91295ff1db2ba33cf37a2_prof);

        
        $__internal_87b085611f46722662775ef291f264a588c3b66dcacb792dc8a0e0b69a31a374->leave($__internal_87b085611f46722662775ef291f264a588c3b66dcacb792dc8a0e0b69a31a374_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_305ed8da72a31f29456fcf8c48c9a1c4a77f563d9a7fa9079f6efdb37f9390ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305ed8da72a31f29456fcf8c48c9a1c4a77f563d9a7fa9079f6efdb37f9390ff->enter($__internal_305ed8da72a31f29456fcf8c48c9a1c4a77f563d9a7fa9079f6efdb37f9390ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4cfa5649ad4e47c92cdea5c6b92bb2655f6bacf89fcf85640cf35722f106a112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cfa5649ad4e47c92cdea5c6b92bb2655f6bacf89fcf85640cf35722f106a112->enter($__internal_4cfa5649ad4e47c92cdea5c6b92bb2655f6bacf89fcf85640cf35722f106a112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4cfa5649ad4e47c92cdea5c6b92bb2655f6bacf89fcf85640cf35722f106a112->leave($__internal_4cfa5649ad4e47c92cdea5c6b92bb2655f6bacf89fcf85640cf35722f106a112_prof);

        
        $__internal_305ed8da72a31f29456fcf8c48c9a1c4a77f563d9a7fa9079f6efdb37f9390ff->leave($__internal_305ed8da72a31f29456fcf8c48c9a1c4a77f563d9a7fa9079f6efdb37f9390ff_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_adf9d41815a1166a96b46703b3605b5a40ba1c1a0299bba55038d88cd1f86380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adf9d41815a1166a96b46703b3605b5a40ba1c1a0299bba55038d88cd1f86380->enter($__internal_adf9d41815a1166a96b46703b3605b5a40ba1c1a0299bba55038d88cd1f86380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_6c03d6c2a333df4cc800a496489ec80d120581fff5e33a68652a6957cafc012d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c03d6c2a333df4cc800a496489ec80d120581fff5e33a68652a6957cafc012d->enter($__internal_6c03d6c2a333df4cc800a496489ec80d120581fff5e33a68652a6957cafc012d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_6c03d6c2a333df4cc800a496489ec80d120581fff5e33a68652a6957cafc012d->leave($__internal_6c03d6c2a333df4cc800a496489ec80d120581fff5e33a68652a6957cafc012d_prof);

        
        $__internal_adf9d41815a1166a96b46703b3605b5a40ba1c1a0299bba55038d88cd1f86380->leave($__internal_adf9d41815a1166a96b46703b3605b5a40ba1c1a0299bba55038d88cd1f86380_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/Default/preparationThree.html.twig";
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
", "@ESFEspaceAbonne/Default/preparationThree.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\Default\\preparationThree.html.twig");
    }
}
