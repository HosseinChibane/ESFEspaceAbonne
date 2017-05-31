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
        $__internal_7dc7c68a92eb9ff169dacb53a7f7bebefcfc0e68ad4ae2d0a7a09ece36dc49ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc7c68a92eb9ff169dacb53a7f7bebefcfc0e68ad4ae2d0a7a09ece36dc49ab->enter($__internal_7dc7c68a92eb9ff169dacb53a7f7bebefcfc0e68ad4ae2d0a7a09ece36dc49ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/langueThree.html.twig"));

        $__internal_0258cca984c7b0fd6f413e1b0e8eac47e0edf91b04531436da05d2c60c323338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0258cca984c7b0fd6f413e1b0e8eac47e0edf91b04531436da05d2c60c323338->enter($__internal_0258cca984c7b0fd6f413e1b0e8eac47e0edf91b04531436da05d2c60c323338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/langueThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dc7c68a92eb9ff169dacb53a7f7bebefcfc0e68ad4ae2d0a7a09ece36dc49ab->leave($__internal_7dc7c68a92eb9ff169dacb53a7f7bebefcfc0e68ad4ae2d0a7a09ece36dc49ab_prof);

        
        $__internal_0258cca984c7b0fd6f413e1b0e8eac47e0edf91b04531436da05d2c60c323338->leave($__internal_0258cca984c7b0fd6f413e1b0e8eac47e0edf91b04531436da05d2c60c323338_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c6f5a0793ffe65214c88b2b3a869280ea534e63f744d1a524ec22d748770134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c6f5a0793ffe65214c88b2b3a869280ea534e63f744d1a524ec22d748770134->enter($__internal_8c6f5a0793ffe65214c88b2b3a869280ea534e63f744d1a524ec22d748770134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8863b306d3a5716627f993c2b9974072dfdd91ecd28d34a1885001867255b5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8863b306d3a5716627f993c2b9974072dfdd91ecd28d34a1885001867255b5e5->enter($__internal_8863b306d3a5716627f993c2b9974072dfdd91ecd28d34a1885001867255b5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8863b306d3a5716627f993c2b9974072dfdd91ecd28d34a1885001867255b5e5->leave($__internal_8863b306d3a5716627f993c2b9974072dfdd91ecd28d34a1885001867255b5e5_prof);

        
        $__internal_8c6f5a0793ffe65214c88b2b3a869280ea534e63f744d1a524ec22d748770134->leave($__internal_8c6f5a0793ffe65214c88b2b3a869280ea534e63f744d1a524ec22d748770134_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_332ceb2b05214836c4c17ea2cebcacb9ef89e23e5b3ac39985c607562eff8f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_332ceb2b05214836c4c17ea2cebcacb9ef89e23e5b3ac39985c607562eff8f62->enter($__internal_332ceb2b05214836c4c17ea2cebcacb9ef89e23e5b3ac39985c607562eff8f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_9f347ce240f17ac44da747e8e544bcb7c5f72c34f855694ad67dfb5a16368d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f347ce240f17ac44da747e8e544bcb7c5f72c34f855694ad67dfb5a16368d2d->enter($__internal_9f347ce240f17ac44da747e8e544bcb7c5f72c34f855694ad67dfb5a16368d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_9f347ce240f17ac44da747e8e544bcb7c5f72c34f855694ad67dfb5a16368d2d->leave($__internal_9f347ce240f17ac44da747e8e544bcb7c5f72c34f855694ad67dfb5a16368d2d_prof);

        
        $__internal_332ceb2b05214836c4c17ea2cebcacb9ef89e23e5b3ac39985c607562eff8f62->leave($__internal_332ceb2b05214836c4c17ea2cebcacb9ef89e23e5b3ac39985c607562eff8f62_prof);

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
