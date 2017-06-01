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
        $__internal_9d95a6da60b47b70adaf846d6aabad0f799a2d097378e890ea15c87ee8fee25d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d95a6da60b47b70adaf846d6aabad0f799a2d097378e890ea15c87ee8fee25d->enter($__internal_9d95a6da60b47b70adaf846d6aabad0f799a2d097378e890ea15c87ee8fee25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteThree.html.twig"));

        $__internal_0f7b3bbc64a50f9d6fce206e937c89acf5309fb80889051e55f6e534dae23e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7b3bbc64a50f9d6fce206e937c89acf5309fb80889051e55f6e534dae23e1d->enter($__internal_0f7b3bbc64a50f9d6fce206e937c89acf5309fb80889051e55f6e534dae23e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d95a6da60b47b70adaf846d6aabad0f799a2d097378e890ea15c87ee8fee25d->leave($__internal_9d95a6da60b47b70adaf846d6aabad0f799a2d097378e890ea15c87ee8fee25d_prof);

        
        $__internal_0f7b3bbc64a50f9d6fce206e937c89acf5309fb80889051e55f6e534dae23e1d->leave($__internal_0f7b3bbc64a50f9d6fce206e937c89acf5309fb80889051e55f6e534dae23e1d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b63128be77df45a857b9a8ee427a9bbcf663c080528ea71a141678a7396c31ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b63128be77df45a857b9a8ee427a9bbcf663c080528ea71a141678a7396c31ae->enter($__internal_b63128be77df45a857b9a8ee427a9bbcf663c080528ea71a141678a7396c31ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8ae21700cb894671ac10001fe788cfeff1abbb68d42102963b525e26de9ff04d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae21700cb894671ac10001fe788cfeff1abbb68d42102963b525e26de9ff04d->enter($__internal_8ae21700cb894671ac10001fe788cfeff1abbb68d42102963b525e26de9ff04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8ae21700cb894671ac10001fe788cfeff1abbb68d42102963b525e26de9ff04d->leave($__internal_8ae21700cb894671ac10001fe788cfeff1abbb68d42102963b525e26de9ff04d_prof);

        
        $__internal_b63128be77df45a857b9a8ee427a9bbcf663c080528ea71a141678a7396c31ae->leave($__internal_b63128be77df45a857b9a8ee427a9bbcf663c080528ea71a141678a7396c31ae_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_c0f3d77436cb989c99cb3d7331604ba57464cc8a9150bf7f3e42e7dc07c074ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f3d77436cb989c99cb3d7331604ba57464cc8a9150bf7f3e42e7dc07c074ff->enter($__internal_c0f3d77436cb989c99cb3d7331604ba57464cc8a9150bf7f3e42e7dc07c074ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_4b75d53146f5b09e4b9d015526a43fb2dc407ffef26fe098ee471f15f1c7f62e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b75d53146f5b09e4b9d015526a43fb2dc407ffef26fe098ee471f15f1c7f62e->enter($__internal_4b75d53146f5b09e4b9d015526a43fb2dc407ffef26fe098ee471f15f1c7f62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_4b75d53146f5b09e4b9d015526a43fb2dc407ffef26fe098ee471f15f1c7f62e->leave($__internal_4b75d53146f5b09e4b9d015526a43fb2dc407ffef26fe098ee471f15f1c7f62e_prof);

        
        $__internal_c0f3d77436cb989c99cb3d7331604ba57464cc8a9150bf7f3e42e7dc07c074ff->leave($__internal_c0f3d77436cb989c99cb3d7331604ba57464cc8a9150bf7f3e42e7dc07c074ff_prof);

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
