<?php

/* ESFEspaceAbonneBundle:back:preparationThree.html.twig */
class __TwigTemplate_84093a319c167237a6ff16d7772ee1fcc5728ff291b483c66bccac373c07bdfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:preparationThree.html.twig", 1);
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
        $__internal_e506e417bf8874572b7195f6df5815b5eeb58f1f0232976383bf61fba7c9e643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e506e417bf8874572b7195f6df5815b5eeb58f1f0232976383bf61fba7c9e643->enter($__internal_e506e417bf8874572b7195f6df5815b5eeb58f1f0232976383bf61fba7c9e643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:preparationThree.html.twig"));

        $__internal_0a08f21d1f8606ee8e24b0a0cca54adebfbf787f300727b6201a6d8972b121f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a08f21d1f8606ee8e24b0a0cca54adebfbf787f300727b6201a6d8972b121f1->enter($__internal_0a08f21d1f8606ee8e24b0a0cca54adebfbf787f300727b6201a6d8972b121f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:preparationThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e506e417bf8874572b7195f6df5815b5eeb58f1f0232976383bf61fba7c9e643->leave($__internal_e506e417bf8874572b7195f6df5815b5eeb58f1f0232976383bf61fba7c9e643_prof);

        
        $__internal_0a08f21d1f8606ee8e24b0a0cca54adebfbf787f300727b6201a6d8972b121f1->leave($__internal_0a08f21d1f8606ee8e24b0a0cca54adebfbf787f300727b6201a6d8972b121f1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c76c67794b3fadf53332fa9e65caf88b9cdafe1460c016ef6eca3d55060dda2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c76c67794b3fadf53332fa9e65caf88b9cdafe1460c016ef6eca3d55060dda2a->enter($__internal_c76c67794b3fadf53332fa9e65caf88b9cdafe1460c016ef6eca3d55060dda2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4ab64a67c134998c2c138bdafded1d0c85e7b60c1a237b1808d6b857bba07f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ab64a67c134998c2c138bdafded1d0c85e7b60c1a237b1808d6b857bba07f8->enter($__internal_b4ab64a67c134998c2c138bdafded1d0c85e7b60c1a237b1808d6b857bba07f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b4ab64a67c134998c2c138bdafded1d0c85e7b60c1a237b1808d6b857bba07f8->leave($__internal_b4ab64a67c134998c2c138bdafded1d0c85e7b60c1a237b1808d6b857bba07f8_prof);

        
        $__internal_c76c67794b3fadf53332fa9e65caf88b9cdafe1460c016ef6eca3d55060dda2a->leave($__internal_c76c67794b3fadf53332fa9e65caf88b9cdafe1460c016ef6eca3d55060dda2a_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_85dfcc9cbe3f96131c2c26924093f51873dc5c7ba5a78fc36bded3f2c1dde576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85dfcc9cbe3f96131c2c26924093f51873dc5c7ba5a78fc36bded3f2c1dde576->enter($__internal_85dfcc9cbe3f96131c2c26924093f51873dc5c7ba5a78fc36bded3f2c1dde576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_e7329be644dcc0c863162c003bb7a94bd4156e31bbfaadef74aabe4439064cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7329be644dcc0c863162c003bb7a94bd4156e31bbfaadef74aabe4439064cc5->enter($__internal_e7329be644dcc0c863162c003bb7a94bd4156e31bbfaadef74aabe4439064cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_e7329be644dcc0c863162c003bb7a94bd4156e31bbfaadef74aabe4439064cc5->leave($__internal_e7329be644dcc0c863162c003bb7a94bd4156e31bbfaadef74aabe4439064cc5_prof);

        
        $__internal_85dfcc9cbe3f96131c2c26924093f51873dc5c7ba5a78fc36bded3f2c1dde576->leave($__internal_85dfcc9cbe3f96131c2c26924093f51873dc5c7ba5a78fc36bded3f2c1dde576_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:preparationThree.html.twig";
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
", "ESFEspaceAbonneBundle:back:preparationThree.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/preparationThree.html.twig");
    }
}
