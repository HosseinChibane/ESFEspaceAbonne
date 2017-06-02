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
        $__internal_93b9586c70e90abdfb996028873779ffd48ab32fd41295a36f48e2d218f55af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93b9586c70e90abdfb996028873779ffd48ab32fd41295a36f48e2d218f55af6->enter($__internal_93b9586c70e90abdfb996028873779ffd48ab32fd41295a36f48e2d218f55af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteThree.html.twig"));

        $__internal_811d0ee03dac1f94d13edc0174c2a752fb8581d6665f32e35042a3d1314756bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811d0ee03dac1f94d13edc0174c2a752fb8581d6665f32e35042a3d1314756bc->enter($__internal_811d0ee03dac1f94d13edc0174c2a752fb8581d6665f32e35042a3d1314756bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93b9586c70e90abdfb996028873779ffd48ab32fd41295a36f48e2d218f55af6->leave($__internal_93b9586c70e90abdfb996028873779ffd48ab32fd41295a36f48e2d218f55af6_prof);

        
        $__internal_811d0ee03dac1f94d13edc0174c2a752fb8581d6665f32e35042a3d1314756bc->leave($__internal_811d0ee03dac1f94d13edc0174c2a752fb8581d6665f32e35042a3d1314756bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c964251e0a60fb3db01f77fc6b7e3cf19080a4fec6f96a24449d623fe2bf6f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c964251e0a60fb3db01f77fc6b7e3cf19080a4fec6f96a24449d623fe2bf6f6->enter($__internal_7c964251e0a60fb3db01f77fc6b7e3cf19080a4fec6f96a24449d623fe2bf6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4cd2f736f92305ddf4d55cfb9388ece202878d0f5f1d73093b16401406e73046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd2f736f92305ddf4d55cfb9388ece202878d0f5f1d73093b16401406e73046->enter($__internal_4cd2f736f92305ddf4d55cfb9388ece202878d0f5f1d73093b16401406e73046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4cd2f736f92305ddf4d55cfb9388ece202878d0f5f1d73093b16401406e73046->leave($__internal_4cd2f736f92305ddf4d55cfb9388ece202878d0f5f1d73093b16401406e73046_prof);

        
        $__internal_7c964251e0a60fb3db01f77fc6b7e3cf19080a4fec6f96a24449d623fe2bf6f6->leave($__internal_7c964251e0a60fb3db01f77fc6b7e3cf19080a4fec6f96a24449d623fe2bf6f6_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_086f3421c4a623b45802aef2bdcaa38c0f8a8733984df5960d40c9e91bd9cc6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086f3421c4a623b45802aef2bdcaa38c0f8a8733984df5960d40c9e91bd9cc6c->enter($__internal_086f3421c4a623b45802aef2bdcaa38c0f8a8733984df5960d40c9e91bd9cc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_ef06bf185b1dd2db85296eec6288672f41689bb5b9f68e881d5b389a912a0db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef06bf185b1dd2db85296eec6288672f41689bb5b9f68e881d5b389a912a0db5->enter($__internal_ef06bf185b1dd2db85296eec6288672f41689bb5b9f68e881d5b389a912a0db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_ef06bf185b1dd2db85296eec6288672f41689bb5b9f68e881d5b389a912a0db5->leave($__internal_ef06bf185b1dd2db85296eec6288672f41689bb5b9f68e881d5b389a912a0db5_prof);

        
        $__internal_086f3421c4a623b45802aef2bdcaa38c0f8a8733984df5960d40c9e91bd9cc6c->leave($__internal_086f3421c4a623b45802aef2bdcaa38c0f8a8733984df5960d40c9e91bd9cc6c_prof);

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
