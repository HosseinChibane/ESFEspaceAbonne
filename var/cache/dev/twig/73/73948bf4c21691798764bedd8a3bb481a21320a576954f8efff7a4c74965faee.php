<?php

/* @ESFEspaceAbonne/back/preparationThree.html.twig */
class __TwigTemplate_7054c3a08d5925c3e532a38eec27bc207fc40059f3b5f13ac8ee66fa04a35376 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/preparationThree.html.twig", 1);
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
        $__internal_3842ecf04d90b69ff10408d4d80a4b22a1ce5e28e005d9f6bc1268062090dff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3842ecf04d90b69ff10408d4d80a4b22a1ce5e28e005d9f6bc1268062090dff3->enter($__internal_3842ecf04d90b69ff10408d4d80a4b22a1ce5e28e005d9f6bc1268062090dff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationThree.html.twig"));

        $__internal_a93201fd91746edd9f7255b7898f7e89fb25b4f43b4cd765c7da920ad8bb8f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93201fd91746edd9f7255b7898f7e89fb25b4f43b4cd765c7da920ad8bb8f97->enter($__internal_a93201fd91746edd9f7255b7898f7e89fb25b4f43b4cd765c7da920ad8bb8f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3842ecf04d90b69ff10408d4d80a4b22a1ce5e28e005d9f6bc1268062090dff3->leave($__internal_3842ecf04d90b69ff10408d4d80a4b22a1ce5e28e005d9f6bc1268062090dff3_prof);

        
        $__internal_a93201fd91746edd9f7255b7898f7e89fb25b4f43b4cd765c7da920ad8bb8f97->leave($__internal_a93201fd91746edd9f7255b7898f7e89fb25b4f43b4cd765c7da920ad8bb8f97_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b5673823562a278fd6a2e4550406bf2df918dbbd2761aaf64d1ba6e7ff8e91a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b5673823562a278fd6a2e4550406bf2df918dbbd2761aaf64d1ba6e7ff8e91a->enter($__internal_7b5673823562a278fd6a2e4550406bf2df918dbbd2761aaf64d1ba6e7ff8e91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10f77bdab24948e6dd62fe8caded70ad0a532824726e1dad24472e086ada296d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f77bdab24948e6dd62fe8caded70ad0a532824726e1dad24472e086ada296d->enter($__internal_10f77bdab24948e6dd62fe8caded70ad0a532824726e1dad24472e086ada296d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_10f77bdab24948e6dd62fe8caded70ad0a532824726e1dad24472e086ada296d->leave($__internal_10f77bdab24948e6dd62fe8caded70ad0a532824726e1dad24472e086ada296d_prof);

        
        $__internal_7b5673823562a278fd6a2e4550406bf2df918dbbd2761aaf64d1ba6e7ff8e91a->leave($__internal_7b5673823562a278fd6a2e4550406bf2df918dbbd2761aaf64d1ba6e7ff8e91a_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_a5359bfc3e41dee8f475b9cfccb3d81eb730fe4c2feebb7dd3d4058f606b4112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5359bfc3e41dee8f475b9cfccb3d81eb730fe4c2feebb7dd3d4058f606b4112->enter($__internal_a5359bfc3e41dee8f475b9cfccb3d81eb730fe4c2feebb7dd3d4058f606b4112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_c3e3bcdcd3eb78f09166be90168d6e72640634aeb09b3d5b673d627441b9b007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e3bcdcd3eb78f09166be90168d6e72640634aeb09b3d5b673d627441b9b007->enter($__internal_c3e3bcdcd3eb78f09166be90168d6e72640634aeb09b3d5b673d627441b9b007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_c3e3bcdcd3eb78f09166be90168d6e72640634aeb09b3d5b673d627441b9b007->leave($__internal_c3e3bcdcd3eb78f09166be90168d6e72640634aeb09b3d5b673d627441b9b007_prof);

        
        $__internal_a5359bfc3e41dee8f475b9cfccb3d81eb730fe4c2feebb7dd3d4058f606b4112->leave($__internal_a5359bfc3e41dee8f475b9cfccb3d81eb730fe4c2feebb7dd3d4058f606b4112_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/preparationThree.html.twig";
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
", "@ESFEspaceAbonne/back/preparationThree.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\preparationThree.html.twig");
    }
}
