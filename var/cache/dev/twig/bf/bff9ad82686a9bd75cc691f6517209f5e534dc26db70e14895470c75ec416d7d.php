<?php

/* @ESFEspaceAbonne/Default/langueThree.html.twig */
class __TwigTemplate_8e8fe0ec0225a2bb81ec911abb60b82fab2af2f227049030896906f2b9800709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/Default/langueThree.html.twig", 1);
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
        $__internal_ac6094989788ba0b578332534af44c23e91008fd4343819fb6c20b83111099a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac6094989788ba0b578332534af44c23e91008fd4343819fb6c20b83111099a5->enter($__internal_ac6094989788ba0b578332534af44c23e91008fd4343819fb6c20b83111099a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/langueThree.html.twig"));

        $__internal_d9406b3d823fa7685dc19e6c98c051b4d2f186185dcdb56da476c065b51cc2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9406b3d823fa7685dc19e6c98c051b4d2f186185dcdb56da476c065b51cc2b1->enter($__internal_d9406b3d823fa7685dc19e6c98c051b4d2f186185dcdb56da476c065b51cc2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/langueThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac6094989788ba0b578332534af44c23e91008fd4343819fb6c20b83111099a5->leave($__internal_ac6094989788ba0b578332534af44c23e91008fd4343819fb6c20b83111099a5_prof);

        
        $__internal_d9406b3d823fa7685dc19e6c98c051b4d2f186185dcdb56da476c065b51cc2b1->leave($__internal_d9406b3d823fa7685dc19e6c98c051b4d2f186185dcdb56da476c065b51cc2b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0beff5942662a2cd7f91e5a1f25deff44bc5965cd9206d918f3bcff3c2ddc93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0beff5942662a2cd7f91e5a1f25deff44bc5965cd9206d918f3bcff3c2ddc93->enter($__internal_e0beff5942662a2cd7f91e5a1f25deff44bc5965cd9206d918f3bcff3c2ddc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d643292c406a535a0f20856e6d1ae1b561fff40808f6b9d1c43e77860c9c8cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d643292c406a535a0f20856e6d1ae1b561fff40808f6b9d1c43e77860c9c8cba->enter($__internal_d643292c406a535a0f20856e6d1ae1b561fff40808f6b9d1c43e77860c9c8cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d643292c406a535a0f20856e6d1ae1b561fff40808f6b9d1c43e77860c9c8cba->leave($__internal_d643292c406a535a0f20856e6d1ae1b561fff40808f6b9d1c43e77860c9c8cba_prof);

        
        $__internal_e0beff5942662a2cd7f91e5a1f25deff44bc5965cd9206d918f3bcff3c2ddc93->leave($__internal_e0beff5942662a2cd7f91e5a1f25deff44bc5965cd9206d918f3bcff3c2ddc93_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_a95f7cd0f0241a16e719eda1f6d9e241057afeb36b97573f3535e3369bd0fcc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a95f7cd0f0241a16e719eda1f6d9e241057afeb36b97573f3535e3369bd0fcc0->enter($__internal_a95f7cd0f0241a16e719eda1f6d9e241057afeb36b97573f3535e3369bd0fcc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_6e319df6dbce359a28c2db459dccc2a41d111faf2141a35a3dff16406c2cdde8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e319df6dbce359a28c2db459dccc2a41d111faf2141a35a3dff16406c2cdde8->enter($__internal_6e319df6dbce359a28c2db459dccc2a41d111faf2141a35a3dff16406c2cdde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_6e319df6dbce359a28c2db459dccc2a41d111faf2141a35a3dff16406c2cdde8->leave($__internal_6e319df6dbce359a28c2db459dccc2a41d111faf2141a35a3dff16406c2cdde8_prof);

        
        $__internal_a95f7cd0f0241a16e719eda1f6d9e241057afeb36b97573f3535e3369bd0fcc0->leave($__internal_a95f7cd0f0241a16e719eda1f6d9e241057afeb36b97573f3535e3369bd0fcc0_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/Default/langueThree.html.twig";
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
", "@ESFEspaceAbonne/Default/langueThree.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\Default\\langueThree.html.twig");
    }
}
